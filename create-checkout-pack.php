<?php
/**
 * Crée une session de paiement Stripe pour le Pack Mariage & Visa 2026,
 * puis redirige vers la page de paiement hébergée par Stripe.
 */
require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/_stripe.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ' . SITE_URL . '/pack-mariage-visa-2026');
    exit;
}

$res = stripe_call('checkout/sessions', [
    'mode' => 'payment',
    'payment_method_types' => ['card'],
    'line_items' => [
        [
            'quantity' => 1,
            'price_data' => [
                'currency' => 'eur',
                'unit_amount' => 999,
                'product_data' => [
                    'name' => 'Pack Mariage Franco-Vietnamien & Visa — Édition 2026',
                    'description' => 'Guide complet (45 pages) + 8 modèles de lettres officielles + check-list imprimable — Blog Cap Vietnam',
                ],
            ],
        ],
    ],
    'metadata' => ['pack_id' => 'mariage-visa-2026'],
    'success_url' => SITE_URL . '/merci-pack-mariage?session_id={CHECKOUT_SESSION_ID}',
    'cancel_url'  => SITE_URL . '/pack-mariage-visa-2026',
]);

if (!stripe_ok($res) || empty($res['json']['url'])) {
    @file_put_contents(
        __DIR__ . '/logs/stripe-errors.log',
        date('c') . " create-checkout-session failed: {$res['code']}:{$res['body']}\n",
        FILE_APPEND
    );
    header('Location: ' . SITE_URL . '/pack-mariage-visa-2026?err=stripe');
    exit;
}

header('Location: ' . $res['json']['url'], true, 303);
exit;
