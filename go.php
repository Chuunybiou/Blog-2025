<?php
/**
 * Affiliate redirect tracker.
 * Usage: /go?id=wise  (or /go/wise via clean URL)
 * Logs clicks to data/clicks.json, then redirects.
 */
require_once __DIR__ . '/config/site.php';

$destinations = [
    'italki'     => AFF_ITALKI,
    'wise'       => AFF_WISE,
    'revolut'    => AFF_REVOLUT,
    'amazon-g7'  => AFF_AMAZON_G7,
    'kofi'       => AFF_KOFI,
    'boursobank'       => AFF_BOURSOBANK,
    'amazon-dattes'   => AFF_AMAZON_DATTES,
    'amazon-reglisse' => AFF_AMAZON_REGLISSE,
    'amazon-goji-noir'=> AFF_AMAZON_GOJI_NOIR,
    'amazon-stevia'      => AFF_AMAZON_STEVIA,
    'amazon-jiaogulan'   => AFF_AMAZON_JIAOGULAN,
    'amazon-adapter'     => AFF_AMAZON_ADAPTER,
    'vietcombank'        => AFF_VIETCOMBANK,
    'fortuneo'           => AFF_FORTUNEO,
    'wealthsimple'       => AFF_WEALTHSIMPLE,
    'tangerine'          => AFF_TANGERINE,
    'igraal'             => AFF_IGRAAL,
    'budgetair'          => AFF_BUDGETAIR,
    'amazon-ebook-en'    => AFF_AMAZON_EBOOK_EN,
];

$id = trim($_GET['id'] ?? '');

if (!$id || !isset($destinations[$id])) {
    header('Location: ' . SITE_URL . '/', true, 302);
    exit;
}

// Log click (best-effort — never block the redirect)
$log_file = __DIR__ . '/data/clicks.json';
try {
    $clicks = [];
    if (file_exists($log_file)) {
        $raw = file_get_contents($log_file);
        $clicks = json_decode($raw, true) ?: [];
    }
    $clicks[] = [
        'id'      => $id,
        'ts'      => date('Y-m-d H:i:s'),
        'ref'     => $_SERVER['HTTP_REFERER'] ?? '',
        'ua'      => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 120),
    ];
    file_put_contents($log_file, json_encode($clicks, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
} catch (Throwable $e) {
    // Silently ignore — redirect must always work
}

header('Location: ' . $destinations[$id], true, 302);
exit;
