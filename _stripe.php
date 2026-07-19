<?php
/**
 * Fonctions partagées pour parler à l'API Stripe en REST pur (pas de SDK/Composer),
 * même approche que _brevo.php. Utilisé par create-checkout-pack.php et
 * stripe-webhook.php.
 */
require_once __DIR__ . '/config/secrets.php';

function stripe_call(string $endpoint, array $payload = [], string $method = 'POST'): array {
    $ch = curl_init("https://api.stripe.com/v1/$endpoint");
    $opts = [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_USERPWD        => STRIPE_SECRET_KEY . ':',
        CURLOPT_TIMEOUT        => 15,
    ];
    if ($method === 'GET') {
        if ($payload) {
            curl_setopt($ch, CURLOPT_URL, "https://api.stripe.com/v1/$endpoint?" . http_build_query($payload));
        }
    } else {
        $opts[CURLOPT_CUSTOMREQUEST] = $method;
        $opts[CURLOPT_POSTFIELDS]    = http_build_query($payload);
    }
    curl_setopt_array($ch, $opts);
    $body = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    return ['code' => $code, 'body' => $body, 'json' => json_decode($body ?: '', true) ?: []];
}

function stripe_ok(array $res): bool {
    return $res['code'] >= 200 && $res['code'] < 300;
}

/**
 * Vérifie la signature d'un webhook Stripe (implémentation manuelle de l'algorithme
 * documenté par Stripe — HMAC SHA256 sur "timestamp.payload"), sans SDK.
 * Retourne true si la signature est valide et récente (< 5 min), false sinon.
 */
function stripe_verify_webhook(string $payload, string $sigHeader, string $secret): bool {
    $parts = [];
    foreach (explode(',', $sigHeader) as $part) {
        [$k, $v] = array_pad(explode('=', $part, 2), 2, '');
        $parts[$k][] = $v;
    }
    $timestamp = $parts['t'][0] ?? '';
    $signatures = $parts['v1'] ?? [];
    if (!$timestamp || !$signatures) return false;

    // Tolérance de 5 minutes contre les attaques par rejeu
    if (abs(time() - (int) $timestamp) > 300) return false;

    $expected = hash_hmac('sha256', $timestamp . '.' . $payload, $secret);
    foreach ($signatures as $sig) {
        if (hash_equals($expected, $sig)) return true;
    }
    return false;
}
