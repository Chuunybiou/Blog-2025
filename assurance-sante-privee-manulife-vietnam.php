<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Assurance santé privée au Vietnam : mon expérience avec Manulife (avec Giang)';
$page_description = 'Comment choisir une assurance santé privée au Vietnam en tant qu\'expatrié ? Retour d\'expérience sur Manulife Vietnam, les garanties, les prix et ce que ça couvre vraiment.';
$page_canonical   = SITE_URL . '/assurance-sante-privee-manulife-vietnam';
$page_og_title    = 'Assurance santé privée au Vietnam : mon expérience avec Manulife';
$page_og_desc     = 'Manulife Vietnam, garanties, tarifs, remboursements — ce qu\'un expatrié doit savoir avant de souscrire une assurance santé locale au Vietnam.';
$page_og_url      = SITE_URL . '/assurance-sante-privee-manulife-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Assurance santé privée au Vietnam : mon expérience avec Manulife',
  'datePublished'   => '2026-06-25',
  'dateModified'    => '2026-06-25',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/assurance-sante-privee-manulife-vietnam',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie pratique au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'jade';
$article_hero_bg  = '#0e2a1a';
$article_glow     = 'rgba(42,154,100,0.15)';
$article_badge    = 'rgba(42,154,100,0.25)';
$article_badge_c  = '#4db890';

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
