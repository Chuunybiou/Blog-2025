<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Gestion des cookies — Cap Vietnam';
$page_description = 'Politique de gestion des cookies de Cap Vietnam : types de cookies utilisés, durée de conservation et comment les gérer.';
$page_canonical   = SITE_URL . '/cookies';
$page_extra_css   = '
.page-hero{padding:120px 2rem 4rem;background:linear-gradient(160deg,#1c1917,#2d2319);text-align:center}
.page-hero h1{font-family:\'DM Serif Display\',serif;font-size:clamp(2rem,4vw,3rem);color:#faf8f4;margin-bottom:0.5rem}
.page-hero p{color:rgba(250,248,244,0.5);font-size:0.9rem}
.legal-content{max-width:800px;margin:0 auto;padding:4rem 2rem}
.legal-content h2{font-family:\'DM Serif Display\',serif;font-size:1.5rem;margin:2.5rem 0 1rem;padding-bottom:0.5rem;border-bottom:2px solid var(--border)}
.legal-content p{color:#3a3530;margin-bottom:1rem;font-size:0.97rem}
.legal-content ul{padding-left:1.5rem;margin-bottom:1rem}
.legal-content li{color:#3a3530;margin-bottom:0.4rem;font-size:0.97rem}
.legal-content a{color:var(--amber);text-underline-offset:3px}
.legal-content code{background:var(--warm-bg);padding:2px 6px;border-radius:3px;font-size:0.9em}
.legal-content table{width:100%;border-collapse:collapse;margin:1.5rem 0;font-size:0.92rem;background:var(--white);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-sm)}
.legal-content thead{background:var(--ink);color:#faf8f4}
.legal-content th{padding:0.75rem 1rem;text-align:left;font-size:0.8rem;text-transform:uppercase;letter-spacing:0.5px}
.legal-content td{padding:0.75rem 1rem;border-bottom:1px solid var(--border);vertical-align:top}
.legal-content tr:last-child td{border-bottom:none}
.update-date{background:var(--warm-bg);border-left:3px solid var(--terracotta);padding:1rem 1.5rem;border-radius:0 var(--radius) var(--radius) 0;font-size:0.88rem;color:var(--muted);margin-bottom:2rem}
.cookie-type{display:inline-block;padding:3px 10px;border-radius:20px;font-size:0.75rem;font-weight:700;letter-spacing:1px;text-transform:uppercase}
.cookie-essential{background:rgba(27,107,82,0.12);color:var(--jade)}
.cookie-analytics{background:rgba(184,134,11,0.12);color:var(--amber)}
.cookie-optional{background:rgba(140,130,121,0.12);color:var(--muted)}
';
include 'header.php';
?>

<header class="page-hero">
  <h1>Gestion des cookies</h1>
  <p>Conformément à la directive ePrivacy et aux recommandations de la CNIL</p>
</header>

<main class="legal-content">
  <div class="update-date">Dernière mise à jour : avril 2026</div>

  <h2>1. Qu'est-ce qu'un cookie ?</h2>
  <p>Un cookie est un petit fichier texte déposé sur votre terminal (ordinateur, smartphone, tablette) lors de la visite d'un site internet. Il permet au site de mémoriser des informations sur votre visite : préférences d'affichage, consentement, données de navigation anonymisées.</p>
  <p>Conformément à la réglementation française (CNIL) et européenne (directive ePrivacy), le dépôt de certains cookies nécessite votre consentement préalable.</p>

  <h2>2. Cookies utilisés sur Cap Vietnam</h2>
  <table>
    <thead><tr><th>Cookie</th><th>Type</th><th>Finalité</th><th>Durée</th></tr></thead>
    <tbody>
      <tr>
        <td><code>cookies_consent</code></td>
        <td><span class="cookie-type cookie-essential">Essentiel</span></td>
        <td>Mémorise votre choix de consentement aux cookies (accepté ou refusé) pour ne pas vous le redemander à chaque visite</td>
        <td>13 mois</td>
      </tr>
      <tr>
        <td>Cookies tiers (YouTube, TikTok)</td>
        <td><span class="cookie-type cookie-optional">Optionnel</span></td>
        <td>Déposés uniquement si vous interagissez avec du contenu embarqué (vidéos YouTube). Ces services ont leurs propres politiques de cookies</td>
        <td>Variable</td>
      </tr>
    </tbody>
  </table>

  <h2>3. Cookies essentiels</h2>
  <p>Le cookie <code>cookies_consent</code> est strictement nécessaire au fonctionnement du mécanisme de consentement. Il ne collecte aucune donnée personnelle et ne peut pas être refusé sans désactiver cette fonctionnalité du site.</p>

  <h2>4. Comment gérer vos cookies</h2>
  <p><strong>Via la bannière Cap Vietnam :</strong> Lors de votre première visite, une bannière vous propose d'accepter ou de refuser les cookies non-essentiels. Votre choix est mémorisé pour 13 mois.</p>
  <p><strong>Via votre navigateur :</strong> Vous pouvez configurer votre navigateur pour bloquer ou supprimer les cookies :</p>
  <ul>
    <li><a href="https://support.google.com/chrome/answer/95647" target="_blank" rel="noopener">Google Chrome</a></li>
    <li><a href="https://support.mozilla.org/fr/kb/cookies-informations-sites-enregistrent" target="_blank" rel="noopener">Mozilla Firefox</a></li>
    <li><a href="https://support.apple.com/fr-fr/guide/safari/sfri11471/mac" target="_blank" rel="noopener">Safari</a></li>
    <li><a href="https://support.microsoft.com/fr-fr/windows/supprimer-et-gérer-les-cookies-168dab11-0753-043d-7c16-ede5947fc64d" target="_blank" rel="noopener">Microsoft Edge</a></li>
  </ul>

  <h2>5. Modifications</h2>
  <p>Cette politique de gestion des cookies peut être mise à jour. La date de dernière mise à jour est indiquée en haut de cette page.</p>

  <h2>6. Contact</h2>
  <p>Pour toute question relative aux cookies : <a href="mailto:anthonybouilloncontact@gmail.com">anthonybouilloncontact@gmail.com</a></p>
</main>

<?php include 'footer.php'; ?>
