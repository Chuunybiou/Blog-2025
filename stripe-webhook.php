<?php
/**
 * Webhook Stripe — écoute checkout.session.completed pour le Pack Mariage & Visa.
 * À configurer dans Stripe Dashboard → Développeurs → Webhooks :
 *   URL : https://blog-capvietnam.fr/stripe-webhook  (SANS ".php" — le .htaccess du
 *         site redirige en 301 toute URL en ".php", ce qui transformerait le POST
 *         de Stripe en GET et casserait le webhook)
 *   Événement : checkout.session.completed
 */
require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/_stripe.php';
require_once __DIR__ . '/_pack-purchases.php';
require_once __DIR__ . '/_brevo.php';

$payload   = file_get_contents('php://input');
$sigHeader = $_SERVER['HTTP_STRIPE_SIGNATURE'] ?? '';

if (!stripe_verify_webhook($payload, $sigHeader, STRIPE_WEBHOOK_SECRET)) {
    http_response_code(400);
    echo 'signature invalide';
    exit;
}

$event = json_decode($payload, true);
if (!is_array($event)) {
    http_response_code(400);
    echo 'payload invalide';
    exit;
}

if (($event['type'] ?? '') === 'checkout.session.completed') {
    $session = $event['data']['object'] ?? [];
    $paid    = ($session['payment_status'] ?? '') === 'paid';

    if ($paid) {
        $sessionId = $session['id'] ?? '';
        $email     = $session['customer_details']['email'] ?? $session['customer_email'] ?? '';
        $packId    = $session['metadata']['pack_id'] ?? 'mariage-visa-2026';

        if ($sessionId && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $record = pack_grant_access($sessionId, $packId, $email);
            pack_send_confirmation_email($record);
        }
    }
}

http_response_code(200);
echo 'ok';
