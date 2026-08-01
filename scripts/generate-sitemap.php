<?php
/**
 * Génère sitemap.xml à partir de data/articles.json (articles publiés uniquement)
 * + la liste des pages statiques + les pages vi/.
 *
 * Usage : php scripts/generate-sitemap.php
 */
$root = dirname(__DIR__);
$base = 'https://blog-capvietnam.fr';
$today = date('Y-m-d');

$urls = [];

// ── Pages statiques principales ──────────────────────────────
$static = [
    ['',                                    $today, 'daily',   '1.0'],
    ['articles-capvietnam',                 $today, 'daily',   '0.9'],
    ['a-propos-capvietnam',                 $today, 'monthly', '0.5'],
    ['contact-capvietnam',                  $today, 'yearly',  '0.3'],
    ['methodologie-sources',                $today, 'monthly', '0.5'],
    ['outils-vivre-vietnam',                $today, 'monthly', '0.6'],
    ['calculateur-budget-vietnam',          $today, 'monthly', '0.6'],
    ['page-mes-outils-couple',              $today, 'monthly', '0.6'],
    ['pack-gratuit',                        $today, 'monthly', '0.7'],
    ['pack-mariage-visa-2026',              $today, 'monthly', '0.8'],
    ['guide-cap-vietnam-2026',              $today, 'monthly', '0.6'],
    ['livre-vietnamien',                    $today, 'monthly', '0.7'],
    ['comment-marche-le-vietnamien',        $today, 'monthly', '0.7'],
    ['mes-livres',                          $today, 'monthly', '0.6'],
    ['par-ou-commencer-couple-franco-vietnamien', $today, 'monthly', '0.7'],
    ['confidentialite-capvietnam',          $today, 'yearly',  '0.2'],
    ['mentions-legales-capvietnam',         $today, 'yearly',  '0.2'],
];
foreach ($static as [$slug, $mod, $freq, $prio]) {
    $urls[] = [$base . '/' . $slug, $mod, $freq, $prio];
}

// ── Articles publiés (articles.json) ─────────────────────────
$data = json_decode(file_get_contents("$root/data/articles.json"), true, 512, JSON_THROW_ON_ERROR);
foreach ($data['articles'] as $a) {
    if (!($a['published'] ?? true)) continue;
    $urls[] = [$base . '/' . $a['slug'], $a['date'] ?? $today, 'monthly', '0.8'];
}

// ── Pages vi/ statiques (hors articles.json, hors utilitaires) ──
$viExclude = ['merci.php', 'index.php'];
$urls[] = [$base . '/vi/', $today, 'weekly', '0.8'];
foreach (glob("$root/vi/*.php") as $f) {
    $name = basename($f);
    if (in_array($name, $viExclude, true)) continue;
    $slug = 'vi/' . basename($name, '.php');
    // saute les brouillons déjà listés dans articles.json comme non publiés
    $isDraftInJson = false;
    foreach ($data['articles'] as $a) {
        if ($a['slug'] === $slug) { $isDraftInJson = !($a['published'] ?? true); break; }
    }
    if ($isDraftInJson) continue;
    // saute les stubs vides
    if (strpos(file_get_contents($f), '🚧') !== false) continue;
    $urls[] = [$base . '/' . $slug, date('Y-m-d', filemtime($f)), 'monthly', '0.7'];
}

// ── Dédoublonnage (les pages statiques priment) ──────────────
$seen = [];
$final = [];
foreach ($urls as $u) {
    $loc = rtrim($u[0], '/') . ($u[0] === $base . '/' ? '/' : '');
    if (isset($seen[$u[0]])) continue;
    $seen[$u[0]] = true;
    $final[] = $u;
}

// ── Écriture ─────────────────────────────────────────────────
$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$xml .= "<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
foreach ($final as [$loc, $mod, $freq, $prio]) {
    $xml .= "  <url>\n";
    $xml .= "    <loc>" . htmlspecialchars($loc) . "</loc>\n";
    $xml .= "    <lastmod>$mod</lastmod>\n";
    $xml .= "    <changefreq>$freq</changefreq>\n";
    $xml .= "    <priority>$prio</priority>\n";
    $xml .= "  </url>\n";
}
$xml .= "</urlset>\n";

file_put_contents("$root/sitemap.xml", $xml);
echo "sitemap.xml généré : " . count($final) . " URLs\n";
