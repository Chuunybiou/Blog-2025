<?php
require_once __DIR__ . '/config/site.php';

header('Content-Type: application/json');

$email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? '');

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['ok' => false, 'error' => 'email_invalid']);
    exit;
}

// ── 1. Envoi de la checklist par email PHP (OVH mail()) ──────────────────────
$pdf_url = SITE_URL . '/Checklist-Vietnam-CapVietnam.pdf';

$mail_subject = '📋 Ta checklist Vietnam est là — 10 démarches avant de partir';
$mail_headers  = "MIME-Version: 1.0\r\n";
$mail_headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$mail_headers .= "From: Cap Vietnam <noreply@blog-capvietnam.fr>\r\n";
$mail_headers .= "Reply-To: " . SITE_EMAIL . "\r\n";
$mail_headers .= "X-Mailer: PHP/" . PHP_VERSION . "\r\n";

$pdf_link  = '<a href="' . htmlspecialchars($pdf_url) . '" '
           . 'style="display:inline-block;background:#bf4a2a;color:#fff;padding:1rem 2rem;'
           . 'border-radius:8px;text-decoration:none;font-weight:700;font-size:1.05rem;">'
           . '📥 Télécharger la checklist (PDF)</a>';

$mail_body = '<!DOCTYPE html><html lang="fr"><body '
    . 'style="font-family:\'Helvetica Neue\',Arial,sans-serif;max-width:600px;margin:0 auto;padding:2rem;color:#1c1917;background:#faf8f4;">'
    . '<img src="' . SITE_URL . '/assets/img/blog-vietnam.png" alt="Cap Vietnam" width="48" height="48" style="margin-bottom:1.5rem;">'
    . '<h2 style="color:#bf4a2a;margin-bottom:.5rem;">Ta checklist est prête !</h2>'
    . '<p style="color:#8c8279;font-size:.9rem;margin-bottom:1.5rem;">10 démarches à faire avant de partir vivre au Vietnam</p>'
    . '<p>Bonjour,</p>'
    . '<p>Merci pour ton inscription sur <strong>Cap Vietnam</strong>. Voici ta checklist des 10 démarches essentielles avant de partir — visa, assurance, banque, SIM, logement — dans le bon ordre.</p>'
    . '<p style="text-align:center;margin:2rem 0;">' . $pdf_link . '</p>'
    . '<p style="font-size:.82rem;color:#8c8279;">Si le bouton ne s\'ouvre pas, copie ce lien dans ton navigateur&nbsp;:<br>'
    . '<a href="' . htmlspecialchars($pdf_url) . '" style="color:#bf4a2a;">' . htmlspecialchars($pdf_url) . '</a></p>'
    . '<hr style="border:none;border-top:1px solid #ddd5c9;margin:2rem 0;">'
    . '<p style="font-size:.78rem;color:#8c8279;">'
    . 'Cap Vietnam — Blog d\'un Français installé à Hanoï<br>'
    . '<a href="' . SITE_URL . '" style="color:#bf4a2a;">' . SITE_URL . '</a><br><br>'
    . 'Tu peux te désinscrire à tout moment en répondant à cet email.'
    . '</p>'
    . '</body></html>';

$mail_sent = mail($email, $mail_subject, $mail_body, $mail_headers);

// ── 2. Inscription MailerLite (liste — conservée) ────────────────────────────
// [OPTION] Dans MailerLite : Automations > "When subscriber joins" → email de bienvenue avec lien PDF.
$ml_ok = false;
$ch = curl_init('https://connect.mailerlite.com/api/subscribers');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode(['email' => $email, 'status' => 'active']),
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'Accept: application/json',
        'Authorization: Bearer ' . MAILERLITE_API_KEY,
    ],
    CURLOPT_TIMEOUT        => 10,
]);
$ml_response = curl_exec($ch);
$ml_status   = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
$ml_ok = ($ml_status >= 200 && $ml_status < 300);

// Succès si au moins l'email PHP est parti (MailerLite est bonus)
echo json_encode([
    'ok'          => $mail_sent || $ml_ok,
    'email_sent'  => $mail_sent,
    'mailerlite'  => $ml_ok,
]);
