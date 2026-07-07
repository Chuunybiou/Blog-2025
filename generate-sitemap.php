<?php
/**
 * Dynamic sitemap generator.
 * Reads all published articles from data/articles.json automatically.
 *
 * Run via CLI:     php generate-sitemap.php
 * Via browser:     /generate-sitemap.php   (regenerates and shows count)
 * Via auto-publish: included by scripts/auto-publish.php
 */
$root = defined('SITE_URL') ? null : __DIR__;
if ($root) require_once __DIR__ . '/config/site.php';

$base  = SITE_URL;
$today = date('Y-m-d');

// ── 1. Static / hub pages ────────────────────────────────────────
$static_pages = [
    // [slug, lastmod, changefreq, priority]
    ['',                                          $today,        'weekly',  '1.0'],
    ['articles-capvietnam',                       $today,        'weekly',  '0.9'],
    ['par-ou-commencer-couple-franco-vietnamien', $today,        'monthly', '0.9'],
    ['outils-vivre-vietnam',                      '2026-07-06',  'monthly', '0.8'],
    ['calculateur-budget-vietnam',                '2026-04-26',  'monthly', '0.8'],
    ['guide-cap-vietnam-2026',                    '2026-04-25',  'monthly', '0.8'],
    ['a-propos-capvietnam',                       '2026-04-25',  'monthly', '0.6'],
    ['pack-gratuit',                              '2026-04-25',  'monthly', '0.7'],
    ['livre-vietnamien',                          '2026-04-25',  'monthly', '0.7'],
    ['vi/',                                       '2026-07-06',  'weekly',  '0.8'],
];

// ── 2. Dynamic articles from articles.json ──────────────────────
$json_path = __DIR__ . '/data/articles.json';
$json      = json_decode(file_get_contents($json_path), true) ?? [];
$articles  = $json['articles'] ?? [];

$article_pages = [];
foreach ($articles as $a) {
    // Skip unpublished
    if (($a['published'] ?? true) === false) continue;
    $slug    = $a['slug'] ?? '';
    $lastmod = $a['date'] ?? $today;
    if (!$slug) continue;
    $article_pages[] = [$slug, $lastmod, 'monthly', '0.8'];
}

// ── 3. Build XML ─────────────────────────────────────────────────
$all = array_merge($static_pages, $article_pages);

$xml  = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n\n";

foreach ($all as [$slug, $lastmod, $changefreq, $priority]) {
    $loc  = $slug === '' ? $base . '/' : $base . '/' . $slug;
    $xml .= "  <url>\n";
    $xml .= "    <loc>" . htmlspecialchars($loc, ENT_XML1) . "</loc>\n";
    $xml .= "    <lastmod>{$lastmod}</lastmod>\n";
    $xml .= "    <changefreq>{$changefreq}</changefreq>\n";
    $xml .= "    <priority>{$priority}</priority>\n";
    $xml .= "  </url>\n";
}

$xml .= "\n</urlset>";

file_put_contents(__DIR__ . '/sitemap.xml', $xml);

if (php_sapi_name() === 'cli') {
    echo "sitemap.xml generated — " . count($all) . " URLs (" . count($article_pages) . " articles)\n";
} elseif (!defined('SITEMAP_SILENT')) {
    header('Content-Type: text/plain; charset=utf-8');
    echo "sitemap.xml regenerated — " . count($all) . " URLs — " . date('Y-m-d H:i:s') . "\n";
}
