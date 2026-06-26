<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Visa retraite au Vietnam : conditions, démarches et durée de séjour (2026)';
$page_description = 'Le Vietnam n\'a pas de visa retraité officiel, mais il existe des solutions pour y vivre longtemps : visa DL, visa TT, ou visa électronique renouvelable. Le point complet.';
$page_canonical   = SITE_URL . '/visa-retraite-vietnam';
$page_og_title    = 'Visa retraite au Vietnam : quelles options pour les Français ?';
$page_og_desc     = 'Visa DL, visa TT conjoint, visa électronique renouvelable — comment rester longtemps au Vietnam en tant que retraité français.';
$page_og_url      = SITE_URL . '/visa-retraite-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Visa retraite au Vietnam : conditions, démarches et durée de séjour (2026)',
  'datePublished'   => '2026-06-25',
  'dateModified'    => '2026-06-25',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/visa-retraite-vietnam',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie pratique au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'amber';
$article_hero_bg  = '#1a2a0e';
$article_glow     = 'rgba(154,180,42,0.15)';
$article_badge    = 'rgba(154,180,42,0.25)';
$article_badge_c  = '#b4d04a';

$article_category     = 'Vie pratique au Vietnam';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [];

include '_article-css.php';
include 'header.php';
?>

<!-- BROUILLON — à rédiger -->
<div style="padding:4rem 2rem;text-align:center;color:#999">
  <p>🚧 Article en cours de rédaction</p>
</div>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
