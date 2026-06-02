<?php
/**
 * Setup IndexNow — à exécuter UNE SEULE FOIS via CLI ou navigateur
 * Usage : php setup-indexnow.php
 * Génère la clé, crée le fichier de validation et met à jour config/site.php
 */

$config_file = __DIR__ . '/config/site.php';
$config      = file_get_contents($config_file);

// Vérifier si une clé existe déjà
if (preg_match("/define\('INDEXNOW_KEY',\s*'([^']+)'\)/", $config, $m) && !empty($m[1])) {
    $existing = $m[1];
    echo "Clé IndexNow déjà configurée : {$existing}\n";
    echo "Fichier de validation : __DIR__/{$existing}.txt\n";
    exit(0);
}

// Générer la clé
$key = bin2hex(random_bytes(16));

// Créer le fichier de validation à la racine
file_put_contents(__DIR__ . "/{$key}.txt", $key);

// Mettre à jour config/site.php
$config = preg_replace(
    "/define\('INDEXNOW_KEY',\s*''\)/",
    "define('INDEXNOW_KEY', '{$key}')",
    $config
);
file_put_contents($config_file, $config);

// Créer le dossier logs si inexistant
@mkdir(__DIR__ . '/logs', 0755, true);

echo "✅ IndexNow configuré !\n";
echo "Clé : {$key}\n";
echo "Fichier créé : {$key}.txt\n";
echo "\nÉtapes suivantes :\n";
echo "1. Déployer sur le serveur (le fichier {$key}.txt doit être accessible via https://www.blog-capvietnam.fr/{$key}.txt)\n";
echo "2. Soumettre dans Bing Webmaster Tools → IndexNow\n";
echo "3. Utiliser indexnow-ping.php pour pinguer après chaque publication\n";
