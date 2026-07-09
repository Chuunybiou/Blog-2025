<?php
/**
 * Reçoit l'inscription au pack gratuit (formulaires de blog-capvietnam.php,
 * pack-gratuit.php et vi/index.php), ajoute le contact à la liste Brevo et
 * envoie immédiatement l'email de bienvenue avec les liens du pack, dans la
 * bonne langue (FR ou VI selon le formulaire d'origine).
 *
 * Remplace Formspree, qui ne notifiait que le propriétaire du site et
 * n'envoyait jamais rien à la personne inscrite.
 */

require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/_brevo.php';

header('Content-Type: application/json; charset=utf-8');

$is_ajax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) || (($_SERVER['CONTENT_TYPE'] ?? '') === 'application/json')
    || strpos($_SERVER['HTTP_ACCEPT'] ?? '', 'application/json') !== false;

function respond(bool $ok, string $redirect, bool $is_ajax, string $error = '') {
    if ($is_ajax) {
        echo json_encode(['ok' => $ok, 'redirect' => $redirect, 'error' => $error]);
        exit;
    }
    header('Location: ' . $redirect, true, 302);
    exit;
}

$lang      = ($_POST['lang'] ?? 'fr') === 'vi' ? 'vi' : 'fr';
$merci_url = $lang === 'vi' ? (SITE_URL . '/vi/merci') : (SITE_URL . '/merci-guide');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, $merci_url, $is_ajax, 'method');
}

// Honeypot anti-spam : champ caché que seul un bot remplit
if (!empty($_POST['website'])) {
    respond(true, $merci_url, $is_ajax); // on fait croire que ça a marché, sans rien envoyer
}

$email = trim($_POST['email'] ?? '');
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, $merci_url, $is_ajax, 'invalid_email');
}

// 1) Ajoute (ou met à jour) le contact dans la liste "Pack gratuit"
$contact_res = brevo_call('contacts', [
    'email'         => $email,
    'listIds'       => [BREVO_LIST_ID],
    'updateEnabled' => true,
    'attributes'    => ['LANG' => strtoupper($lang)],
]);

$pdf_url        = SITE_URL . '/Guide_Se_marier_et_vivre_au_Vietnam-1.pdf';
$checklist_depart = SITE_URL . '/Checklist-Vietnam-CapVietnam.pdf';
$lettre_ccam    = SITE_URL . '/modeles/lettre-ccam';
$lettre_relance = SITE_URL . '/modeles/lettre-suivi-ambassade';
$checklist_ccam = SITE_URL . '/modeles/checklist-ccam';

if ($lang === 'vi') {
    $subject = 'Tài liệu của bạn đã sẵn sàng — Hướng dẫn + mẫu thư';
    $heading = 'Tài liệu của bạn đã sẵn sàng.';
    $body = '
<p style="color:#5A5F53;line-height:1.6;margin:0 0 24px">Dưới đây là các tài liệu đã hứa. Lưu email này lại — bạn có thể quay lại bất cứ lúc nào trong quá trình làm thủ tục.</p>
<p style="margin:0 0 14px"><a href="' . htmlspecialchars($pdf_url) . '" style="display:inline-block;background:#DE9E28;color:#23281F;text-decoration:none;font-weight:bold;padding:12px 22px;border-radius:999px">📘 Tải hướng dẫn PDF (tiếng Pháp) →</a></p>
<p style="margin:0 0 10px"><a href="' . htmlspecialchars($checklist_depart) . '" style="color:#2E5641;font-weight:bold;text-decoration:none">📋 Checklist rời Việt Nam — 10 việc cần làm →</a></p>
<p style="margin:0 0 10px"><a href="' . htmlspecialchars($lettre_ccam) . '" style="color:#2E5641;font-weight:bold;text-decoration:none">✉️ Thư xin cấp CCAM →</a></p>
<p style="margin:0 0 10px"><a href="' . htmlspecialchars($lettre_relance) . '" style="color:#2E5641;font-weight:bold;text-decoration:none">📬 Thư nhắc nhở đại sứ quán →</a></p>
<p style="margin:0 0 24px"><a href="' . htmlspecialchars($checklist_ccam) . '" style="color:#2E5641;font-weight:bold;text-decoration:none">✅ Checklist CCAM đầy đủ →</a></p>
<p style="color:#5A5F53;font-size:14px;line-height:1.6">Xem lại tất cả tại <a href="' . htmlspecialchars($merci_url) . '" style="color:#2E5641">trang này</a>.</p>';
} else {
    $subject = 'Ton pack est prêt — Guide + 3 modèles de lettres';
    $heading = 'Merci ! Ton pack est prêt.';
    $body = '
<p style="color:#5A5F53;line-height:1.6;margin:0 0 24px">Voici les 4 ressources promises. Garde cet email sous la main — tu pourras y revenir à n\'importe quelle étape de tes démarches.</p>
<p style="margin:0 0 14px"><a href="' . htmlspecialchars($pdf_url) . '" style="display:inline-block;background:#DE9E28;color:#23281F;text-decoration:none;font-weight:bold;padding:12px 22px;border-radius:999px">📘 Télécharger le Guide PDF (~40 pages) →</a></p>
<p style="margin:0 0 10px"><a href="' . htmlspecialchars($lettre_ccam) . '" style="color:#2E5641;font-weight:bold;text-decoration:none">✉️ Lettre de demande CCAM →</a></p>
<p style="margin:0 0 10px"><a href="' . htmlspecialchars($lettre_relance) . '" style="color:#2E5641;font-weight:bold;text-decoration:none">📬 Lettre de relance ambassade →</a></p>
<p style="margin:0 0 24px"><a href="' . htmlspecialchars($checklist_ccam) . '" style="color:#2E5641;font-weight:bold;text-decoration:none">✅ Checklist CCAM complète →</a></p>
<p style="color:#5A5F53;font-size:14px;line-height:1.6">Retrouve aussi tout ça sur <a href="' . htmlspecialchars($merci_url) . '" style="color:#2E5641">cette page</a>.</p>';
}

$email_res = brevo_call('smtp/email', [
    'sender'      => ['name' => 'Blog Cap Vietnam', 'email' => SITE_EMAIL],
    'to'          => [['email' => $email]],
    'subject'     => $subject,
    'htmlContent' => brevo_email_wrapper($heading, $body, false),
]);

if (!brevo_ok($contact_res) || !brevo_ok($email_res)) {
    @file_put_contents(
        __DIR__ . '/logs/brevo-errors.log',
        date('c') . " email=$email lang=$lang contact={$contact_res['code']}:{$contact_res['body']} send={$email_res['code']}:{$email_res['body']}\n",
        FILE_APPEND
    );
}

// On redirige toujours vers la page merci : les liens y sont affichés directement,
// donc même en cas de pépin Brevo la personne n'est jamais bloquée.
respond(true, $merci_url, $is_ajax);
