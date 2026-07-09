<?php
/**
 * Fonctions partagées pour parler à l'API Brevo (contacts, campagnes, envoi
 * transactionnel) — utilisé par subscribe-pack.php et admin-mail.php.
 */
require_once __DIR__ . '/config/secrets.php';

function brevo_call(string $endpoint, array $payload = [], string $method = 'POST'): array {
    $ch = curl_init("https://api.brevo.com/v3/$endpoint");
    $opts = [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => [
            'accept: application/json',
            'content-type: application/json',
            'api-key: ' . BREVO_API_KEY,
        ],
        CURLOPT_TIMEOUT => 15,
    ];
    if ($method === 'GET') {
        // rien à faire, endpoint contient déjà la query string
    } elseif ($method === 'POST') {
        $opts[CURLOPT_POST]       = true;
        $opts[CURLOPT_POSTFIELDS] = json_encode($payload);
    } else {
        $opts[CURLOPT_CUSTOMREQUEST] = $method;
        $opts[CURLOPT_POSTFIELDS]    = json_encode($payload);
    }
    curl_setopt_array($ch, $opts);
    $body = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return ['code' => $code, 'body' => $body, 'json' => json_decode($body ?: '', true) ?: []];
}

function brevo_ok(array $res): bool {
    return $res['code'] >= 200 && $res['code'] < 300;
}

/**
 * Enveloppe HTML "carnet papier" pour tous les emails envoyés depuis le site.
 * $withUnsubscribe : true uniquement pour les envois via Campagnes (le tag
 * {{ unsubscribe }} n'est résolu que là — dans l'API transactionnelle il
 * s'afficherait tel quel, donc à laisser à false pour l'email de bienvenue.
 */
function brevo_email_wrapper(string $heading, string $bodyHtml, bool $withUnsubscribe = false): string {
    $footer = 'Blog Cap Vietnam — ' . SITE_URL . '. Tu reçois cet email car tu es inscrit(e) à la newsletter.';
    $footer .= $withUnsubscribe ? ' <a href="{{ unsubscribe }}" style="color:#5A5F53">Se désabonner</a> ·' : '';
    $footer .= ' <a href="' . SITE_URL . '/confidentialite-capvietnam" style="color:#5A5F53">Confidentialité</a>.';

    return '
<div style="font-family:Georgia,serif;background:#FBF6EC;padding:32px 20px;color:#23281F">
  <div style="max-width:520px;margin:0 auto;background:#fff;border:1px solid #E2D8C2;border-radius:14px;overflow:hidden">
    <div style="background:#1F3D2E;padding:24px 32px">
      <span style="font-family:Georgia,serif;font-size:20px;color:#FBF6EC">Blog Cap<span style="color:#DE9E28">Vietnam</span></span>
    </div>
    <div style="padding:32px">
      <h1 style="font-family:Georgia,serif;font-weight:normal;font-size:24px;margin:0 0 16px">' . $heading . '</h1>
      ' . $bodyHtml . '
    </div>
    <div style="background:#F3EBDB;padding:18px 32px;font-size:12px;color:#5A5F53;line-height:1.6">' . $footer . '</div>
  </div>
</div>';
}
