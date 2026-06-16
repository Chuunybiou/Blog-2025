<?php
/**
 * Dynamic related articles section.
 * Set before including:
 *   $current_slug  (string) — slug of the current article (to exclude it)
 *   $current_cat   (string) — canonical category key: couple|mariage|vivre-ensemble|argent|vie-pratique
 */
require_once __DIR__ . '/config/site.php';

$_json = json_decode(file_get_contents(__DIR__ . '/data/articles.json'), true) ?? [];
$_all  = $_json['articles'] ?? [];

// Separate same-cat and other-cat, excluding current page and unpublished
$_same  = [];
$_other = [];
foreach ($_all as $_a) {
    if (($_a['published'] ?? true) === false) continue;
    if ($_a['slug'] === ($current_slug ?? '')) continue;
    if ($_a['category'] === ($current_cat ?? '')) {
        $_same[] = $_a;
    } else {
        $_other[] = $_a;
    }
}

// Pick up to 2 from same cat, fill to 3 from others
$_picks = array_slice($_same, 0, 2);
$_need  = 3 - count($_picks);
if ($_need > 0) {
    $_picks = array_merge($_picks, array_slice($_other, 0, $_need));
}

// CSS class helpers per canonical category
$_bg_map  = [
    'couple'         => 'bg-couple',
    'mariage'        => 'bg-mariage',
    'vivre-ensemble' => 'bg-vivre-ensemble',
    'argent'         => 'bg-argent',
    'vie-pratique'   => 'bg-vie-pratique',
];
$_txt_map = [
    'couple'         => 'text-couple',
    'mariage'        => 'text-mariage',
    'vivre-ensemble' => 'text-vivre-ensemble',
    'argent'         => 'text-argent',
    'vie-pratique'   => 'text-vie-pratique',
];
$_lbl_map = [
    'couple'         => 'Notre histoire &amp; couple',
    'mariage'        => 'Se marier',
    'vivre-ensemble' => 'Vivre ensemble',
    'argent'         => 'L\'argent à deux',
    'vie-pratique'   => 'Vie pratique au Vietnam',
];
?>
<section class="related-section">
  <div class="related-inner">
    <p class="related-label">Continuer la lecture</p>
    <h2 class="related-title">Articles liés</h2>
    <div class="related-grid">
      <?php foreach ($_picks as $_a):
        $_cat  = htmlspecialchars($_a['category']);
        $_bg   = $_bg_map[$_a['category']]  ?? 'bg-vie-pratique';
        $_txt  = $_txt_map[$_a['category']] ?? 'text-vie-pratique';
        $_lbl  = $_lbl_map[$_a['category']] ?? htmlspecialchars($_a['categoryLabel'] ?? '');
      ?>
      <a class="related-card" href="<?= htmlspecialchars($_a['slug']) ?>">
        <div class="related-card-banner <?= $_bg ?>"><?= htmlspecialchars($_a['emoji'] ?? '📖') ?></div>
        <div class="related-card-body">
          <p class="related-card-badge <?= $_txt ?>"><?= $_lbl ?></p>
          <h3><?= htmlspecialchars($_a['title']) ?></h3>
          <p><?= htmlspecialchars($_a['excerpt']) ?></p>
        </div>
      </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div style="max-width:1200px;margin:0 auto;padding:0 2rem 3rem;">
  <a href="https://bonusparrainage.com" target="_blank" rel="noopener"
     style="display:flex;align-items:center;gap:1rem;padding:1rem 1.5rem;border:1px solid var(--border);border-radius:var(--radius);text-decoration:none;color:var(--ink);background:var(--white);">
    <span style="font-size:1.4rem;flex-shrink:0;">🎁</span>
    <div style="flex:1;">
      <span style="font-weight:600;font-size:0.88rem;">Tu pars ou vis au Vietnam ?</span>
      <span style="color:var(--muted);font-size:0.82rem;display:block;margin-top:2px;">Wise et Revolut ont des offres de bienvenue — codes vérifiés sur <strong style="color:var(--terracotta);">bonusparrainage.com</strong></span>
    </div>
    <span style="color:var(--terracotta);font-weight:700;font-size:0.85rem;flex-shrink:0;white-space:nowrap;">Voir les codes →</span>
  </a>
</div>

<?php
unset($current_slug, $current_cat, $_json, $_all, $_same, $_other, $_picks, $_need, $_bg_map, $_txt_map, $_lbl_map, $_a, $_cat, $_bg, $_txt, $_lbl);
?>
