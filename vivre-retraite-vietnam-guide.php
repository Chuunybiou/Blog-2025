<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Vivre sa retraite au Vietnam : coût, santé, logement et vie sociale (2026)';
$page_description = 'Le Vietnam attire de plus en plus de retraités français. Coût de la vie, qualité des soins, logement, sécurité, vie sociale — ce que ça donne vraiment au quotidien.';
$page_canonical   = SITE_URL . '/vivre-retraite-vietnam-guide';
$page_og_title    = 'Vivre sa retraite au Vietnam : le guide complet 2026';
$page_og_desc     = 'Budget, santé, logement, sécurité, vie sociale — tout ce qu\'un retraité français doit savoir avant de s\'installer au Vietnam.';
$page_og_url      = SITE_URL . '/vivre-retraite-vietnam-guide';
$page_og_image    = 'https://images.unsplash.com/photo-1540541338537-71cf2b054dcb?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Vivre sa retraite au Vietnam : coût, santé, logement et vie sociale (2026)',
  'datePublished'   => '2026-06-25',
  'dateModified'    => '2026-06-25',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/vivre-retraite-vietnam-guide',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie pratique au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'terracotta';
$article_hero_bg  = '#2a0e0e';
$article_glow     = 'rgba(191,74,42,0.15)';
$article_badge    = 'rgba(191,74,42,0.25)';
$article_badge_c  = '#e8856a';

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
