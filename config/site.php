<?php
// Central configuration — edit here, propagates everywhere
define('SITE_NAME',       'Cap Vietnam');
define('SITE_URL',        'https://blog-capvietnam.fr');
define('SITE_AUTHOR',     'Anthony Bouillon');
define('SITE_EMAIL',      'anthonybouilloncontact@gmail.com');
define('SITE_FORMSPREE',  'https://formspree.io/f/mvzvevak');
define('SITE_PAYPAL',     'fourre-et-pour-tout@protonmail.com');
define('SITE_TIKTOK',     'https://www.tiktok.com/@proffrancaisetranger');
define('SITE_YEAR',       '2026');
define('PROFILE_PHOTO',   'assets/img/profile/anthony-profil.jpg');

// IndexNow — clé de validation pour Bing/Yandex
// Générer : php -r "echo bin2hex(random_bytes(16));"
// Puis créer {CLE}.txt à la racine contenant uniquement la clé
// Puis lancer setup-indexnow.php pour tout configurer automatiquement
define('INDEXNOW_KEY', '');
// MAILERLITE_API_KEY supprimée — MailerLite remplacé par Formspree

// Affiliate links
define('AFF_ITALKI',    'https://www.italki.com/fr/i/ref/AeEH6bH?hl=fr&utm_medium=user_referral&utm_source=copylink_share');
define('AFF_WISE',      'https://wise.com/invite/dic/anthonyrolandb');
define('AFF_REVOLUT',   'https://revolut.com/referral/?referral-code=anthonfytu!JUN1-26-VR-FR&geo-redirect');
define('AFF_VIETCOMBANK', 'https://digibank.vietcombank.com.vn/invite/DGAS6ZI5PE');
define('AFF_FORTUNEO',    'https://www.fortuneo.fr');
define('AFF_WEALTHSIMPLE', 'https://www.wealthsimple.com/invite/HTBVCA');
define('AFF_TANGERINE',   'https://www.tangerine.ca/fr/produits/bancaires/compte-cheques?rCode=76919587S1');
define('AFF_IGRAAL',      'https://fr.igraal.com/parrainage?parrain=AG_60c137463200e&utm_medium=raf&utm_source=refer_friend');
define('AFF_BUDGETAIR',   'https://www.awin1.com/cread.php?awinmid=63490&awinaffid=2907621');
define('AFF_AMAZON_EBOOK_EN', 'https://amzn.to/4dZ0a5C');
define('AFF_AMAZON_G7', 'https://amzn.to/4uhZZZD');
define('AFF_KOFI',      'https://ko-fi.com/blogcapvietnam');
define('AFF_BOURSOBANK',       'https://bour.so/p/CjnYYepGGnp');
// Thé vietnamien — ingrédients Amazon
define('AFF_AMAZON_DATTES',   'https://amzn.to/4dxe7Jd');
define('AFF_AMAZON_REGLISSE', 'https://amzn.to/3PFOehg');
define('AFF_AMAZON_GOJI_NOIR','https://amzn.to/4wSsKOS');
define('AFF_AMAZON_STEVIA',      'https://amzn.to/42T9iUx');
define('AFF_AMAZON_JIAOGULAN',   'https://amzn.to/4nZhQme');
define('AFF_AMAZON_ADAPTER',     'https://amzn.to/4dJDEz5');
