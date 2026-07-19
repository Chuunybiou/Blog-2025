<?php
// Template for config/secrets.php — copy this file to config/secrets.php
// (gitignored) and fill in real values. Never commit real secrets.

define('BREVO_API_KEY', 'xkeysib-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx');
define('BREVO_LIST_ID', 0); // numeric list ID from Brevo → Contacts → Lists
define('ADMIN_PASSWORD', 'change-me');

// Stripe — Dashboard → Développeurs → Clés API / Webhooks
define('STRIPE_SECRET_KEY',     'REPLACE_WITH_YOUR_STRIPE_SECRET_KEY');   // commence par sk_live_ ou sk_test_
define('STRIPE_WEBHOOK_SECRET', 'REPLACE_WITH_YOUR_STRIPE_WEBHOOK_SECRET'); // commence par whsec_
