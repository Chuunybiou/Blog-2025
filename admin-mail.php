<?php
/**
 * Page d'administration — envoi de la newsletter aux abonnés Brevo
 * Accès : /admin-mail.php
 * Protégée par mot de passe (config/secrets.php → ADMIN_PASSWORD)
 */
require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/_brevo.php';

session_start();

// Login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pwd'])) {
    if ($_POST['pwd'] === ADMIN_PASSWORD) {
        $_SESSION['mail_admin_ok'] = true;
        header('Location: admin-mail.php');
        exit;
    }
    $error = true;
}
// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: admin-mail.php');
    exit;
}
// Auth guard
if (empty($_SESSION['mail_admin_ok'])):
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex,nofollow">
  <title>Envoi de mail — Cap Vietnam</title>
  <style>
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:system-ui,sans-serif;background:#1c1917;display:flex;align-items:center;justify-content:center;min-height:100vh}
    .login{background:#fff;border-radius:12px;padding:2.5rem;width:340px;box-shadow:0 20px 60px rgba(0,0,0,.4)}
    .login h1{font-size:1.2rem;margin-bottom:1.5rem;color:#1c1917}
    .login input{width:100%;padding:.75rem 1rem;border:1px solid #e5e0d8;border-radius:6px;font-size:1rem;margin-bottom:1rem}
    .login button{width:100%;padding:.75rem;background:#bf4a2a;color:#fff;border:none;border-radius:6px;font-size:1rem;font-weight:600;cursor:pointer}
    .error{color:#bf4a2a;font-size:.85rem;margin-bottom:.75rem}
  </style>
</head>
<body>
  <form class="login" method="POST">
    <h1>🔒 Envoi de mail</h1>
    <?php if (!empty($error)): ?><p class="error">Mot de passe incorrect.</p><?php endif; ?>
    <input type="password" name="pwd" placeholder="Mot de passe" autofocus required>
    <button type="submit">Accéder</button>
  </form>
</body>
</html>
<?php
    exit;
endif;

// ── ENVOI (test ou diffusion) ──────────────────────────────────────
$msg = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $subject = trim($_POST['subject'] ?? '');
    $body    = trim($_POST['body'] ?? '');

    if ($subject === '' || $body === '') {
        header('Location: admin-mail.php?msg=empty');
        exit;
    }

    if ($_POST['action'] === 'test') {
        $html = brevo_email_wrapper($subject, $body, false);
        $res  = brevo_call('smtp/email', [
            'sender'      => ['name' => 'Blog Cap Vietnam', 'email' => SITE_EMAIL],
            'to'          => [['email' => SITE_EMAIL]],
            'subject'     => '[TEST] ' . $subject,
            'htmlContent' => $html,
        ]);
        header('Location: admin-mail.php?msg=' . (brevo_ok($res) ? 'test_ok' : 'test_fail'));
        exit;
    }

    if ($_POST['action'] === 'send' && !empty($_POST['confirm'])) {
        $html = brevo_email_wrapper($subject, $body, true);
        $create = brevo_call('emailCampaigns', [
            'name'       => 'Newsletter ' . date('Y-m-d H:i'),
            'subject'    => $subject,
            'sender'     => ['name' => 'Blog Cap Vietnam', 'email' => SITE_EMAIL],
            'type'       => 'classic',
            'htmlContent'=> $html,
            'recipients' => ['listIds' => [BREVO_LIST_ID]],
        ]);
        if (brevo_ok($create) && !empty($create['json']['id'])) {
            $sendRes = brevo_call('emailCampaigns/' . $create['json']['id'] . '/sendNow', [], 'POST');
            header('Location: admin-mail.php?msg=' . (brevo_ok($sendRes) ? 'send_ok' : 'send_fail'));
        } else {
            @file_put_contents(__DIR__ . '/logs/brevo-errors.log', date('c') . " campaign_create_fail {$create['code']}:{$create['body']}\n", FILE_APPEND);
            header('Location: admin-mail.php?msg=send_fail');
        }
        exit;
    }
    header('Location: admin-mail.php');
    exit;
}

$messages = [
    'empty'     => ['ok' => false, 'text' => 'Sujet et contenu sont obligatoires.'],
    'test_ok'   => ['ok' => true,  'text' => 'Email de test envoyé à ' . SITE_EMAIL . '. Vérifie ta boîte avant de diffuser.'],
    'test_fail' => ['ok' => false, 'text' => 'Échec de l\'envoi du test — voir logs/brevo-errors.log.'],
    'send_ok'   => ['ok' => true,  'text' => 'Campagne envoyée à tous les abonnés 🎉'],
    'send_fail' => ['ok' => false, 'text' => 'Échec de l\'envoi de la campagne — voir logs/brevo-errors.log.'],
];
$flash = $messages[$_GET['msg'] ?? ''] ?? null;

// ── STATS ────────────────────────────────────────────────────────
$list_info    = brevo_call('contacts/lists/' . BREVO_LIST_ID, [], 'GET');
$subscribers  = $list_info['json']['uniqueSubscribers'] ?? '?';

$recent_res   = brevo_call('contacts/lists/' . BREVO_LIST_ID . '/contacts?limit=10', [], 'GET');
$recent       = $recent_res['json']['contacts'] ?? [];
usort($recent, fn($a, $b) => strtotime($b['createdAt'] ?? '') <=> strtotime($a['createdAt'] ?? ''));

$campaigns_res = brevo_call('emailCampaigns?limit=5&sort=desc', [], 'GET');
$campaigns      = $campaigns_res['json']['campaigns'] ?? [];

$log_file = __DIR__ . '/logs/brevo-errors.log';
$log_tail = [];
if (file_exists($log_file)) {
    $lines    = file($log_file, FILE_IGNORE_NEW_LINES);
    $log_tail = array_slice(array_reverse($lines), 0, 10);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="robots" content="noindex,nofollow">
  <title>Envoi de mail — Cap Vietnam</title>
  <style>
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:system-ui,-apple-system,sans-serif;background:#f5f0eb;color:#1c1917;min-height:100vh}
    .topbar{background:#1c1917;color:#faf8f4;padding:1rem 2rem;display:flex;justify-content:space-between;align-items:center}
    .topbar h1{font-size:1rem;font-weight:600}
    .topbar a{color:rgba(250,248,244,.5);font-size:.82rem;text-decoration:none}
    .topbar a:hover{color:#faf8f4}
    .container{max-width:900px;margin:0 auto;padding:2rem}
    .kpi-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;margin-bottom:2rem}
    .kpi{background:#fff;border-radius:10px;padding:1.5rem;box-shadow:0 1px 4px rgba(0,0,0,.06)}
    .kpi-val{font-size:2.5rem;font-weight:700;color:#1c1917;line-height:1}
    .kpi-label{font-size:.8rem;color:#78716c;margin-top:.4rem;text-transform:uppercase;letter-spacing:1px}
    .section-title{font-size:.65rem;letter-spacing:3px;text-transform:uppercase;color:#78716c;font-weight:700;margin-bottom:.75rem;margin-top:2rem}
    .card{background:#fff;border-radius:10px;padding:1.5rem;box-shadow:0 1px 4px rgba(0,0,0,.06)}
    .flash{border-radius:8px;padding:1rem 1.2rem;margin-bottom:1.5rem;font-size:.9rem;font-weight:600}
    .flash.ok{background:#dcfce7;color:#166534}
    .flash.err{background:#fee2e2;color:#991b1b}
    label{display:block;font-size:.78rem;text-transform:uppercase;letter-spacing:1px;color:#78716c;font-weight:700;margin-bottom:.4rem}
    input[type=text],textarea{width:100%;padding:.75rem 1rem;border:1px solid #e5e0d8;border-radius:6px;font-size:.95rem;font-family:inherit;margin-bottom:1.2rem}
    textarea{min-height:220px;resize:vertical;line-height:1.6}
    .hint{font-size:.78rem;color:#78716c;margin-top:-.9rem;margin-bottom:1.2rem}
    .actions{display:flex;gap:.75rem;flex-wrap:wrap;align-items:center;margin-top:.5rem}
    button{padding:.8rem 1.4rem;border-radius:6px;font-size:.9rem;font-weight:700;cursor:pointer;border:1.5px solid #1c1917}
    .btn-test{background:#fff;color:#1c1917}
    .btn-send{background:#bf4a2a;color:#fff;border-color:#bf4a2a}
    .btn-send:disabled{opacity:.4;cursor:not-allowed}
    .confirm-row{display:flex;align-items:center;gap:.5rem;font-size:.85rem;color:#44403c}
    table{width:100%;border-collapse:collapse}
    th{text-align:left;padding:.6rem .8rem;font-size:.68rem;text-transform:uppercase;letter-spacing:1px;font-weight:700;background:#1c1917;color:#faf8f4}
    td{padding:.6rem .8rem;border-bottom:1px solid #e5e0d8;font-size:.85rem}
    tr:last-child td{border-bottom:none}
    .empty{text-align:center;padding:1.5rem;color:#a8a29e;font-style:italic;font-size:.85rem}
    .log-line{font-family:ui-monospace,monospace;font-size:.72rem;color:#78716c;padding:.4rem 0;border-bottom:1px dashed #e5e0d8;word-break:break-all}
    @media(max-width:640px){.kpi-grid{grid-template-columns:1fr}}
  </style>
</head>
<body>

<div class="topbar">
  <h1>📧 Envoi de mail — Cap Vietnam</h1>
  <a href="?logout=1">Déconnexion</a>
</div>

<div class="container">

  <?php if ($flash): ?>
    <div class="flash <?= $flash['ok'] ? 'ok' : 'err' ?>"><?= htmlspecialchars($flash['text']) ?></div>
  <?php endif; ?>

  <div class="kpi-grid">
    <div class="kpi">
      <div class="kpi-val"><?= is_numeric($subscribers) ? $subscribers : '?' ?></div>
      <div class="kpi-label">Abonnés (liste pack gratuit)</div>
    </div>
    <div class="kpi">
      <div class="kpi-val"><?= count($campaigns) ?></div>
      <div class="kpi-label">Dernières campagnes</div>
    </div>
    <div class="kpi">
      <div class="kpi-val"><?= count($log_tail) ?></div>
      <div class="kpi-label">Erreurs récentes loguées</div>
    </div>
  </div>

  <div class="section-title">Composer un email</div>
  <div class="card">
    <form method="POST" id="mail-form">
      <label for="subject">Sujet</label>
      <input type="text" id="subject" name="subject" placeholder="Ex : 3 nouveaux articles ce mois-ci" required>

      <label for="body">Contenu</label>
      <textarea id="body" name="body" placeholder="Écris ton message ici. HTML simple accepté : <a href=&quot;...&quot;>lien</a>, <strong>gras</strong>, <br> pour les retours à la ligne." required></textarea>
      <p class="hint">Le message est automatiquement mis en forme dans le design du blog (en-tête, couleurs). Pas besoin d'écrire une page HTML complète — juste le contenu.</p>

      <div class="actions">
        <button type="submit" name="action" value="test" class="btn-test">✉️ M'envoyer un test</button>
        <div class="confirm-row">
          <input type="checkbox" id="confirm" onchange="document.getElementById('send-btn').disabled = !this.checked">
          <label for="confirm" style="margin:0;text-transform:none;letter-spacing:0;font-weight:400;color:#44403c">Je confirme l'envoi à <strong><?= is_numeric($subscribers) ? $subscribers : '?' ?> abonné(s)</strong>, sans possibilité d'annuler.</label>
        </div>
        <button type="submit" name="action" value="send" id="send-btn" class="btn-send" disabled onclick="return confirm('Envoyer définitivement cet email à <?= is_numeric($subscribers) ? $subscribers : '?' ?> abonnés ? Cette action est irréversible.');">📤 Envoyer à tous les abonnés</button>
      </div>
      <input type="hidden" name="confirm" id="confirm-hidden" value="">
    </form>
  </div>

  <div class="section-title">Derniers inscrits</div>
  <div class="card" style="padding:0">
    <?php if (empty($recent)): ?>
      <div class="empty">Aucun abonné pour l'instant.</div>
    <?php else: ?>
    <table>
      <thead><tr><th>Email</th><th>Inscrit le</th></tr></thead>
      <tbody>
        <?php foreach (array_slice($recent, 0, 10) as $c): ?>
        <tr>
          <td><?= htmlspecialchars($c['email'] ?? '—') ?></td>
          <td style="color:#78716c"><?= htmlspecialchars(substr($c['createdAt'] ?? '', 0, 16)) ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?php endif; ?>
  </div>

  <div class="section-title">Dernières campagnes envoyées</div>
  <div class="card" style="padding:0">
    <?php if (empty($campaigns)): ?>
      <div class="empty">Aucune campagne envoyée depuis cette page pour l'instant.</div>
    <?php else: ?>
    <table>
      <thead><tr><th>Sujet</th><th>Statut</th><th>Date</th></tr></thead>
      <tbody>
        <?php foreach ($campaigns as $c): ?>
        <tr>
          <td><?= htmlspecialchars($c['subject'] ?? $c['name'] ?? '—') ?></td>
          <td style="color:#78716c"><?= htmlspecialchars($c['status'] ?? '—') ?></td>
          <td style="color:#78716c"><?= htmlspecialchars(substr($c['sentDate'] ?? $c['createdAt'] ?? '', 0, 16)) ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <?php endif; ?>
  </div>

  <?php if ($log_tail): ?>
  <div class="section-title">Dernières erreurs (logs/brevo-errors.log)</div>
  <div class="card">
    <?php foreach ($log_tail as $line): ?>
      <div class="log-line"><?= htmlspecialchars($line) ?></div>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>

</div>

<script>
// Sync la checkbox visible vers le champ "confirm" réellement soumis
document.getElementById('confirm').addEventListener('change', function() {
  document.getElementById('confirm-hidden').value = this.checked ? '1' : '';
});
</script>
</body>
</html>
