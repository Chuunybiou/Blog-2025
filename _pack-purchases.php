<?php
/**
 * Stockage des achats de packs payants (Stripe) et des jetons de téléchargement
 * associés. Fichier data/pack-purchases.json, protégé par data/.htaccess (Deny
 * from all) — jamais accessible directement depuis le web.
 *
 * Une ligne = un achat = { session_id, pack_id, email, token, created, downloads }
 * L'accès par token est indépendant de la session_id pour rester valable même si
 * Stripe change son format d'ID un jour.
 */

require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/_brevo.php';

define('PACK_PURCHASES_FILE', __DIR__ . '/data/pack-purchases.json');

function pack_purchases_load(): array {
    if (!file_exists(PACK_PURCHASES_FILE)) return [];
    $data = json_decode(file_get_contents(PACK_PURCHASES_FILE), true);
    return is_array($data) ? $data : [];
}

function pack_purchases_save(array $purchases): void {
    $fp = fopen(PACK_PURCHASES_FILE, 'c+');
    if (!$fp) return;
    flock($fp, LOCK_EX);
    ftruncate($fp, 0);
    fwrite($fp, json_encode($purchases, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    fflush($fp);
    flock($fp, LOCK_UN);
    fclose($fp);
}

/**
 * Enregistre l'accès pour une session Stripe payée. Idempotent : si la session a
 * déjà été traitée (webhook rejoué, ou page de remerciement + webhook en course),
 * renvoie l'enregistrement existant au lieu d'en recréer un.
 */
function pack_grant_access(string $sessionId, string $packId, string $email): array {
    $fp = fopen(PACK_PURCHASES_FILE, 'c+');
    if (!$fp) {
        // Environnement en lecture seule improbable — on retente sans lock plutôt que planter
        $purchases = pack_purchases_load();
        foreach ($purchases as $p) {
            if ($p['session_id'] === $sessionId) return $p;
        }
        $record = [
            'session_id' => $sessionId,
            'pack_id'    => $packId,
            'email'      => $email,
            'token'      => bin2hex(random_bytes(24)),
            'created'    => date('c'),
            'downloads'  => 0,
        ];
        $purchases[] = $record;
        pack_purchases_save($purchases);
        return $record;
    }

    flock($fp, LOCK_EX);
    $raw = stream_get_contents($fp);
    $purchases = json_decode($raw ?: '', true);
    $purchases = is_array($purchases) ? $purchases : [];

    foreach ($purchases as $p) {
        if ($p['session_id'] === $sessionId) {
            flock($fp, LOCK_UN);
            fclose($fp);
            return $p;
        }
    }

    $record = [
        'session_id' => $sessionId,
        'pack_id'    => $packId,
        'email'      => $email,
        'token'      => bin2hex(random_bytes(24)),
        'created'    => date('c'),
        'downloads'  => 0,
    ];
    $purchases[] = $record;

    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, json_encode($purchases, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    fflush($fp);
    flock($fp, LOCK_UN);
    fclose($fp);

    return $record;
}

function pack_find_by_token(string $token): ?array {
    foreach (pack_purchases_load() as $p) {
        if (hash_equals($p['token'], $token)) return $p;
    }
    return null;
}

function pack_find_by_session(string $sessionId): ?array {
    foreach (pack_purchases_load() as $p) {
        if ($p['session_id'] === $sessionId) return $p;
    }
    return null;
}

function pack_increment_downloads(string $token): void {
    $fp = fopen(PACK_PURCHASES_FILE, 'c+');
    if (!$fp) return;
    flock($fp, LOCK_EX);
    $raw = stream_get_contents($fp);
    $purchases = json_decode($raw ?: '', true);
    $purchases = is_array($purchases) ? $purchases : [];
    foreach ($purchases as &$p) {
        if (hash_equals($p['token'], $token)) {
            $p['downloads'] = ($p['downloads'] ?? 0) + 1;
            $p['last_download'] = date('c');
            break;
        }
    }
    unset($p);
    ftruncate($fp, 0);
    rewind($fp);
    fwrite($fp, json_encode($purchases, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    fflush($fp);
    flock($fp, LOCK_UN);
    fclose($fp);
}

/**
 * Envoie l'email de confirmation + lien de téléchargement pour un achat.
 * Idempotent : ne renvoie jamais deux fois le même email (utile car le webhook
 * Stripe et la page de remerciement peuvent tous les deux tenter de l'envoyer).
 */
function pack_send_confirmation_email(array $record): void {
    if (!empty($record['email_sent'])) return;

    $downloadUrl = SITE_URL . '/telecharger-pack?token=' . $record['token'];
    $email = $record['email'];

    $body = '
<p style="color:#5A5F53;line-height:1.6;margin:0 0 20px">Merci pour ton achat ! Voici ton lien de téléchargement — garde cet email, tu peux le retélécharger à tout moment.</p>
<p style="margin:0 0 24px"><a href="' . htmlspecialchars($downloadUrl) . '" style="display:inline-block;background:#DE9E28;color:#23281F;text-decoration:none;font-weight:bold;padding:12px 22px;border-radius:999px">📘 Télécharger mon Pack (PDF, 45 pages) →</a></p>
<p style="color:#5A5F53;line-height:1.6;margin:0 0 16px">Ce que contient le pack :</p>
<ul style="color:#5A5F53;line-height:1.8;margin:0 0 20px;padding-left:20px">
<li>La feuille de route chronologique complète (CCAM → mariage → transcription → visa)</li>
<li>8 modèles de lettres officielles prêts à copier-coller</li>
<li>La check-list imprimable, phase par phase</li>
<li>Le guide des adresses, liens officiels et pièges à éviter</li>
<li>L\'accès prioritaire à la communauté CapVietnam (Discord + Facebook)</li>
</ul>
<p style="color:#5A5F53;font-size:14px;line-height:1.6">Pour activer ton accès à la communauté, écris-nous via <a href="' . SITE_URL . '/contact-capvietnam" style="color:#2E5641">le formulaire de contact</a> avec l\'adresse email utilisée pour cet achat.</p>
<p style="color:#5A5F53;font-size:14px;line-height:1.6;margin-top:20px">Une question sur ta situation ? Réponds simplement à cet email.</p>';

    $email_res = brevo_call('smtp/email', [
        'sender'      => ['name' => 'Anthony — Cap Vietnam', 'email' => SITE_EMAIL],
        'to'          => [['email' => $email]],
        'subject'     => 'Ton Pack Mariage & Visa est prêt à télécharger',
        'htmlContent' => brevo_email_wrapper('Merci ! Ton pack est prêt.', $body, false),
    ]);

    if (!brevo_ok($email_res)) {
        @file_put_contents(
            __DIR__ . '/logs/brevo-errors.log',
            date('c') . " pack-mariage email=$email send={$email_res['code']}:{$email_res['body']}\n",
            FILE_APPEND
        );
        return; // ne marque pas comme envoyé si Brevo a échoué — on retentera
    }

    $purchases = pack_purchases_load();
    foreach ($purchases as &$p) {
        if ($p['session_id'] === $record['session_id']) { $p['email_sent'] = true; break; }
    }
    unset($p);
    pack_purchases_save($purchases);
}
