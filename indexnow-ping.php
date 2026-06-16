<?php
/**
 * IndexNow ping — Bing indexation quasi-instantanée
 *
 * Usage CLI : php indexnow-ping.php https://blog-capvietnam.fr/nouvel-article
 * Usage PHP  : require 'indexnow-ping.php'; ping_indexnow(['https://...', 'https://...']);
 * Usage auto : appelé par generate-sitemap.php après régénération
 */

require_once __DIR__ . '/config/site.php';

function ping_indexnow(array $urls): void
{
    $key  = INDEXNOW_KEY;
    $host = 'blog-capvietnam.fr';
    $log  = __DIR__ . '/logs/indexnow.log';

    @mkdir(dirname($log), 0755, true);

    if (empty($key)) {
        file_put_contents($log,
            date('Y-m-d H:i:s') . " [ERREUR] Clé IndexNow vide — lancez setup-indexnow.php\n",
            FILE_APPEND | LOCK_EX
        );
        return;
    }

    $payload = json_encode([
        'host'        => $host,
        'key'         => $key,
        'keyLocation' => "https://{$host}/{$key}.txt",
        'urlList'     => array_values($urls),
    ]);

    $ch = curl_init('https://api.indexnow.org/indexnow');
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $payload,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER     => ['Content-Type: application/json; charset=utf-8'],
        CURLOPT_TIMEOUT        => 10,
    ]);
    $response  = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $error     = curl_error($ch);
    curl_close($ch);

    $status  = ($http_code === 200 || $http_code === 202) ? 'OK' : "HTTP {$http_code}";
    $details = $error ?: ($response ?: '(vide)');
    $line    = date('Y-m-d H:i:s') . " [{$status}] " . implode(' | ', $urls) . " → {$details}\n";
    file_put_contents($log, $line, FILE_APPEND | LOCK_EX);

    if (php_sapi_name() === 'cli') {
        echo $line;
    }
}

// CLI : php indexnow-ping.php URL1 URL2 ...
if (php_sapi_name() === 'cli' && isset($argv[1])) {
    ping_indexnow(array_slice($argv, 1));
}
