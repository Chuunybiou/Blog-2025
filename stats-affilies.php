<?php
/**
 * Page de statistiques des clics affiliés
 * Accès : /stats-affilies.php
 * Protégée par mot de passe — modifier $password ci-dessous
 */
require_once __DIR__ . '/config/site.php';

// ── MOT DE PASSE ─────────────────────────────────────────────
$password = 'capvietnam2026';   // ← change ici
// ─────────────────────────────────────────────────────────────

session_start();

// Login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pwd'])) {
    if ($_POST['pwd'] === $password) {
        $_SESSION['stats_ok'] = true;
    } else {
        $error = true;
    }
}
// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: stats-affilies.php');
    exit;
}
// Auth guard
if (empty($_SESSION['stats_ok'])):
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex,nofollow">
  <title>Stats affiliés — Cap Vietnam</title>
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
    <h1>🔒 Stats affiliés</h1>
    <?php if (!empty($error)): ?><p class="error">Mot de passe incorrect.</p><?php endif; ?>
    <input type="password" name="pwd" placeholder="Mot de passe" autofocus required>
    <button type="submit">Accéder</button>
  </form>
</body>
</html>
<?php
    exit;
endif;

// ── LECTURE DES DONNÉES ───────────────────────────────────────
$clicks_file = __DIR__ . '/data/clicks.json';
$clicks = [];
if (file_exists($clicks_file)) {
    $raw = file_get_contents($clicks_file);
    $clicks = json_decode($raw, true) ?: [];
}

// Agrégation par ID
$by_id = [];
foreach ($clicks as $c) {
    $id = $c['id'] ?? 'unknown';
    if (!isset($by_id[$id])) {
        $by_id[$id] = ['total' => 0, 'last' => '', 'referrers' => []];
    }
    $by_id[$id]['total']++;
    if ($c['ts'] > $by_id[$id]['last']) $by_id[$id]['last'] = $c['ts'];
    $ref = parse_url($c['ref'] ?? '', PHP_URL_PATH) ?: '—';
    $by_id[$id]['referrers'][$ref] = ($by_id[$id]['referrers'][$ref] ?? 0) + 1;
}
arsort($by_id); // tri par total décroissant (on trie sur la valeur = array, donc on va trier différemment)
uasort($by_id, fn($a,$b) => $b['total'] - $a['total']);

// Labels lisibles pour chaque ID
$labels = [
    'wise'             => ['label' => 'Wise',                   'emoji' => '💳'],
    'revolut'          => ['label' => 'Revolut',                'emoji' => '💸'],
    'amazon-g7'        => ['label' => 'Ebook FR-VN (Amazon)',   'emoji' => '📘'],
    'amazon-dattes'    => ['label' => 'Dattes rouges (Amazon)', 'emoji' => '🔴'],
    'amazon-reglisse'  => ['label' => 'Réglisse (Amazon)',      'emoji' => '🟤'],
    'amazon-goji-noir' => ['label' => 'Goji noir (Amazon)',     'emoji' => '⚫'],
    'amazon-stevia'    => ['label' => 'Stévia BIO (Amazon)',    'emoji' => '🌿'],
    'amazon-jiaogulan' => ['label' => 'Jiaogulan (Amazon)',     'emoji' => '🌱'],
    'amazon-adapter'   => ['label' => 'Adaptateur voyage (Amazon)', 'emoji' => '🔌'],
    'vietcombank'      => ['label' => 'Vietcombank (parrainage)',   'emoji' => '🏦'],
    'boursobank'       => ['label' => 'Boursobank',             'emoji' => '🏦'],
    'kofi'             => ['label' => 'Ko-fi',                  'emoji' => '☕'],
];

$total_clicks = count($clicks);

// Clics des 7 derniers jours
$sept_jours = 0;
$cutoff = date('Y-m-d', strtotime('-7 days'));
foreach ($clicks as $c) {
    if (($c['ts'] ?? '') >= $cutoff) $sept_jours++;
}

// Clics du mois en cours
$mois = 0;
$debut_mois = date('Y-m-01');
foreach ($clicks as $c) {
    if (($c['ts'] ?? '') >= $debut_mois) $mois++;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="robots" content="noindex,nofollow">
  <title>Stats affiliés — Cap Vietnam</title>
  <style>
    *{box-sizing:border-box;margin:0;padding:0}
    body{font-family:system-ui,-apple-system,sans-serif;background:#f5f0eb;color:#1c1917;min-height:100vh}
    .topbar{background:#1c1917;color:#faf8f4;padding:1rem 2rem;display:flex;justify-content:space-between;align-items:center}
    .topbar h1{font-size:1rem;font-weight:600}
    .topbar a{color:rgba(250,248,244,.5);font-size:.82rem;text-decoration:none}
    .topbar a:hover{color:#faf8f4}
    .container{max-width:1000px;margin:0 auto;padding:2rem}
    .kpi-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;margin-bottom:2rem}
    .kpi{background:#fff;border-radius:10px;padding:1.5rem;box-shadow:0 1px 4px rgba(0,0,0,.06)}
    .kpi-val{font-size:2.5rem;font-weight:700;color:#1c1917;line-height:1}
    .kpi-label{font-size:.8rem;color:#78716c;margin-top:.4rem;text-transform:uppercase;letter-spacing:1px}
    .section-title{font-size:.65rem;letter-spacing:3px;text-transform:uppercase;color:#78716c;font-weight:700;margin-bottom:1rem}
    table{width:100%;border-collapse:collapse;background:#fff;border-radius:10px;overflow:hidden;box-shadow:0 1px 4px rgba(0,0,0,.06)}
    th{text-align:left;padding:.75rem 1.2rem;font-size:.72rem;text-transform:uppercase;letter-spacing:1px;font-weight:700;background:#1c1917;color:#faf8f4}
    td{padding:.8rem 1.2rem;border-bottom:1px solid #e5e0d8;font-size:.9rem}
    tr:last-child td{border-bottom:none}
    tr:hover td{background:#faf8f4}
    .badge{display:inline-block;padding:.2rem .6rem;border-radius:20px;font-size:.75rem;font-weight:700;background:#fef3c7;color:#92400e}
    .bar-wrap{background:#e5e0d8;border-radius:3px;height:6px;width:120px;display:inline-block;vertical-align:middle}
    .bar{background:#bf4a2a;border-radius:3px;height:6px}
    .recent-table th{background:#292524}
    .empty{text-align:center;padding:3rem;color:#78716c;font-style:italic}
    @media(max-width:640px){.kpi-grid{grid-template-columns:1fr}.bar-wrap{display:none}}
  </style>
</head>
<body>

<div class="topbar">
  <h1>📊 Stats affiliés — Cap Vietnam</h1>
  <a href="?logout=1">Déconnexion</a>
</div>

<div class="container">

  <!-- KPIs -->
  <div class="kpi-grid" style="margin-bottom:2rem">
    <div class="kpi">
      <div class="kpi-val"><?= $total_clicks ?></div>
      <div class="kpi-label">Clics totaux</div>
    </div>
    <div class="kpi">
      <div class="kpi-val"><?= $sept_jours ?></div>
      <div class="kpi-label">7 derniers jours</div>
    </div>
    <div class="kpi">
      <div class="kpi-val"><?= $mois ?></div>
      <div class="kpi-label">Ce mois-ci</div>
    </div>
  </div>

  <!-- Par lien affilié -->
  <div class="section-title" style="margin-bottom:.75rem">Clics par lien affilié</div>
  <?php if (empty($by_id)): ?>
    <div class="empty" style="background:#fff;border-radius:10px;">Aucun clic enregistré pour l'instant.</div>
  <?php else: ?>
  <table style="margin-bottom:2rem">
    <thead>
      <tr>
        <th>Programme</th>
        <th>Clics</th>
        <th>Volume</th>
        <th>Dernier clic</th>
        <th>Page source principale</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $max = max(array_column($by_id, 'total'));
      foreach ($by_id as $id => $data):
        $info   = $labels[$id] ?? ['label' => $id, 'emoji' => '🔗'];
        $pct    = $max > 0 ? round(($data['total'] / $max) * 100) : 0;
        $top_ref = '';
        if ($data['referrers']) {
            arsort($data['referrers']);
            $top_ref = array_key_first($data['referrers']);
        }
      ?>
      <tr>
        <td><?= $info['emoji'] ?> <strong><?= htmlspecialchars($info['label']) ?></strong></td>
        <td><span class="badge"><?= $data['total'] ?></span></td>
        <td>
          <div class="bar-wrap">
            <div class="bar" style="width:<?= $pct ?>%"></div>
          </div>
        </td>
        <td style="color:#78716c;font-size:.82rem"><?= htmlspecialchars(substr($data['last'],0,10)) ?></td>
        <td style="color:#78716c;font-size:.82rem;max-width:200px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap"><?= htmlspecialchars($top_ref) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php endif; ?>

  <!-- 20 derniers clics -->
  <div class="section-title" style="margin-bottom:.75rem">20 derniers clics</div>
  <?php if (empty($clicks)): ?>
    <div class="empty" style="background:#fff;border-radius:10px;">Aucun clic enregistré pour l'instant.</div>
  <?php else: ?>
  <table class="recent-table">
    <thead>
      <tr>
        <th>Date & heure</th>
        <th>Programme</th>
        <th>Page source</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $recents = array_slice(array_reverse($clicks), 0, 20);
      foreach ($recents as $c):
        $id   = $c['id'] ?? '?';
        $info = $labels[$id] ?? ['label' => $id, 'emoji' => '🔗'];
        $ref  = parse_url($c['ref'] ?? '', PHP_URL_PATH) ?: '—';
      ?>
      <tr>
        <td style="color:#78716c;font-size:.82rem"><?= htmlspecialchars($c['ts'] ?? '—') ?></td>
        <td><?= $info['emoji'] ?> <?= htmlspecialchars($info['label']) ?></td>
        <td style="color:#78716c;font-size:.82rem"><?= htmlspecialchars($ref) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php endif; ?>

  <p style="text-align:center;color:#a8a29e;font-size:.75rem;margin-top:2rem">
    Données issues de <code>data/clicks.json</code> — mis à jour en temps réel par go.php
  </p>

</div>
</body>
</html>
