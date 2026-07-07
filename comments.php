<?php
/**
 * Comment submission handler.
 * POST: name, message, article_slug, website (honeypot)
 * Stores approved comments in data/comments/{slug}.json
 * Redirects back to the article.
 */
require_once __DIR__ . '/config/site.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . SITE_URL . '/');
    exit;
}

// ── Honeypot anti-spam ──────────────────────────────────────────
if (!empty($_POST['website'])) {
    header('Location: ' . SITE_URL . '/');
    exit;
}

$slug    = preg_replace('/[^a-z0-9\-\/]/', '', $_POST['article_slug'] ?? '');
$name    = trim(strip_tags($_POST['name'] ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));
$back    = SITE_URL . '/' . $slug;

// ── Basic validation ────────────────────────────────────────────
if (!$slug || mb_strlen($name) < 2 || mb_strlen($message) < 5) {
    header('Location: ' . $back . '?comment=error#comments');
    exit;
}

// ── Rate limit (1 comment per IP per article per hour) ──────────
$ip_hash  = hash('sha256', ($_SERVER['REMOTE_ADDR'] ?? '') . $slug . date('Y-m-d H'));
$rate_dir = __DIR__ . '/data/comments/_rate/';
if (!is_dir($rate_dir)) mkdir($rate_dir, 0755, true);
$rate_file = $rate_dir . $ip_hash . '.lock';
if (file_exists($rate_file)) {
    header('Location: ' . $back . '?comment=rate#comments');
    exit;
}
file_put_contents($rate_file, '1');

// ── Save comment ────────────────────────────────────────────────
$comments_dir  = __DIR__ . '/data/comments/';
if (!is_dir($comments_dir)) mkdir($comments_dir, 0755, true);

$safe_slug     = str_replace('/', '_', $slug);
$comments_file = $comments_dir . $safe_slug . '.json';
$comments      = [];

if (file_exists($comments_file)) {
    $existing = json_decode(file_get_contents($comments_file), true);
    if (is_array($existing)) $comments = $existing;
}

$comment = [
    'id'       => substr(hash('sha256', $name . $message . microtime()), 0, 8),
    'name'     => mb_substr($name, 0, 60),
    'message'  => mb_substr($message, 0, 2000),
    'date'     => date('Y-m-d'),
    'approved' => true,
];

$comments[] = $comment;

file_put_contents(
    $comments_file,
    json_encode($comments, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
);

// ── Email notification (best effort) ────────────────────────────
$subject = "Nouveau commentaire sur : $slug";
$body    = "Nom : {$comment['name']}\n\nMessage :\n{$comment['message']}\n\nArticle : {$back}";
@mail(SITE_EMAIL, $subject, $body, "From: no-reply@blog-capvietnam.fr");

// ── Redirect back ────────────────────────────────────────────────
header('Location: ' . $back . '?comment=ok#comments');
exit;
