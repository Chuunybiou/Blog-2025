<?php
/**
 * Dynamic sitemap generator.
 * Run via CLI: php generate-sitemap.php
 * Or access via browser to regenerate: /generate-sitemap.php
 * Outputs sitemap.xml in the same directory.
 */
require_once __DIR__ . '/config/site.php';

$base = SITE_URL;

// Pages: [slug, lastmod, changefreq, priority]
// slug '' = root homepage
$pages = [
  // Main pages
  ['',                                         '2026-04-25', 'weekly',  '1.0'],
  ['articles-capvietnam',                      '2026-04-25', 'weekly',  '0.9'],
  ['guide-cap-vietnam-2026',                   '2026-04-25', 'monthly', '0.8'],
  ['apprendre-francais-capvietnam',            '2026-04-25', 'weekly',  '0.8'],
  ['a-propos-capvietnam',                      '2026-04-25', 'monthly', '0.6'],

  // Section Vietnamienne
  ['vi/',                                        '2026-04-25', 'weekly',  '0.8'],

  // Démarches Administratives
  ['quitter-france-expat-vietnam',             '2026-04-25', 'monthly', '0.8'],
  ['visa-vietnam-francais-guide-2026',         '2026-04-25', 'monthly', '0.9'],
  ['quitter-canada-expat-vietnam',             '2026-04-05', 'monthly', '0.8'],
  ['compte-bancaire-vietnam-etranger',         '2026-04-03', 'monthly', '0.8'],
  ['assurance-sante-vietnam-expat',            '2026-03-28', 'monthly', '0.8'],
  ['permis-conduire-vietnam',                  '2026-03-20', 'monthly', '0.7'],
  ['carte-residence-temporaire-vietnam',       '2026-02-15', 'monthly', '0.8'],
  ['se-marier-vietnamienne-demarches-france',  '2026-04-06', 'monthly', '0.8'],

  // Couple Mixte
  ['differences-culturelles-couple-franco-vietnamien', '2026-03-25', 'monthly', '0.7'],
  ['belle-famille-vietnamienne-guide',         '2026-03-18', 'monthly', '0.7'],
  ['tet-nouvel-an-lunaire-vietnam',            '2026-02-10', 'yearly',  '0.7'],
  ['apprendre-vietnamien-couple',              '2026-02-05', 'monthly', '0.6'],

  // Argent & Travail
  ['budget-mensuel-hanoi-2026',                '2026-04-01', 'monthly', '0.8'],
  ['transferer-argent-vietnam-wise',           '2026-04-25', 'monthly', '0.8'],
  ['travailler-en-ligne-vietnam',              '2026-03-15', 'monthly', '0.7'],
  ['fiscalite-expat-france-vietnam',           '2026-02-20', 'monthly', '0.8'],
  ['cafes-coworkings-hanoi',                   '2026-02-12', 'monthly', '0.6'],
  ['creer-blog-expat-rentable',                '2026-01-20', 'monthly', '0.7'],
];

$xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n\n";

foreach ($pages as [$slug, $lastmod, $changefreq, $priority]) {
    $loc = $slug === '' ? $base . '/' : $base . '/' . $slug;
    $xml .= "  <url>\n";
    $xml .= "    <loc>{$loc}</loc>\n";
    $xml .= "    <lastmod>{$lastmod}</lastmod>\n";
    $xml .= "    <changefreq>{$changefreq}</changefreq>\n";
    $xml .= "    <priority>{$priority}</priority>\n";
    $xml .= "  </url>\n";
}

$xml .= "\n</urlset>";

$output = __DIR__ . '/sitemap.xml';
file_put_contents($output, $xml);

if (php_sapi_name() === 'cli') {
    echo "sitemap.xml generated (" . count($pages) . " URLs)\n";
} else {
    header('Content-Type: text/plain');
    echo "sitemap.xml regenerated — " . count($pages) . " URLs — " . date('Y-m-d H:i:s') . "\n";
}
