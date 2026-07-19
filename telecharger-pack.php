<?php
/**
 * Téléchargement protégé du Pack Mariage & Visa — accessible uniquement avec un
 * jeton valide généré après paiement Stripe confirmé (voir stripe-webhook.php).
 */
require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/_pack-purchases.php';

$token = trim($_GET['token'] ?? '');
$purchase = $token ? pack_find_by_token($token) : null;

if (!$purchase) {
    http_response_code(403);
    header('Content-Type: text/plain; charset=utf-8');
    echo "Lien invalide ou expiré. Si tu viens d'acheter le pack, vérifie ta boîte mail (et les spams) pour le bon lien, ou écris-nous via le formulaire de contact.";
    exit;
}

$files = [
    'mariage-visa-2026' => __DIR__ . '/data/products/PACK-Mariage-Franco-Vietnamien-Visa-Edition2026.pdf',
];
$filePath = $files[$purchase['pack_id']] ?? null;

if (!$filePath || !file_exists($filePath)) {
    http_response_code(404);
    header('Content-Type: text/plain; charset=utf-8');
    echo "Fichier introuvable — contacte-nous, on te l'envoie directement.";
    exit;
}

pack_increment_downloads($token);

header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="Pack-Mariage-Franco-Vietnamien-Visa-2026.pdf"');
header('Content-Length: ' . filesize($filePath));
header('Cache-Control: private, no-store');
readfile($filePath);
exit;
