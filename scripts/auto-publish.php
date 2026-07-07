<?php
/**
 * Auto-publish scheduled articles.
 *
 * Reads data/publish-schedule.json and publishes any article
 * whose publish_on date is today or in the past.
 * After publishing, regenerates sitemap.xml.
 *
 * Run: php scripts/auto-publish.php
 * Or via GitHub Actions cron (see .github/workflows/auto-publish.yml)
 */

$root = dirname(__DIR__);
require_once $root . '/config/site.php';

$schedule_file = $root . '/data/publish-schedule.json';
$articles_file = $root . '/data/articles.json';
$today         = date('Y-m-d');

// ── Load files ──────────────────────────────────────────────────
$schedule = json_decode(file_get_contents($schedule_file), true);
$articles = json_decode(file_get_contents($articles_file), true);

if (!$schedule || !$articles) {
    echo "ERROR: Could not parse JSON files.\n";
    exit(1);
}

$remaining = [];
$published = [];

foreach ($schedule['schedule'] as $entry) {
    $slug       = $entry['slug'];
    $publish_on = $entry['publish_on'];

    if ($publish_on <= $today) {
        // Find the article and publish it
        $found = false;
        foreach ($articles['articles'] as &$article) {
            if ($article['slug'] === $slug) {
                $article['published'] = true;
                $published[]  = $slug;
                $found = true;
                break;
            }
        }
        unset($article);
        if (!$found) {
            echo "WARNING: slug '$slug' not found in articles.json — skipping.\n";
        }
    } else {
        $remaining[] = $entry;
    }
}

if (empty($published)) {
    echo "Nothing to publish today ($today).\n";
    exit(0);
}

// ── Save updated articles.json ───────────────────────────────────
file_put_contents(
    $articles_file,
    json_encode($articles, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
);

// ── Save updated schedule (remove published entries) ─────────────
$schedule['schedule'] = $remaining;
file_put_contents(
    $schedule_file,
    json_encode($schedule, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
);

echo "Published " . count($published) . " article(s) on $today:\n";
foreach ($published as $s) {
    echo "  ✓ $s\n";
}

// ── Regenerate sitemap ───────────────────────────────────────────
echo "\nRegenerating sitemap.xml...\n";
include $root . '/generate-sitemap.php';
echo "Done.\n";
