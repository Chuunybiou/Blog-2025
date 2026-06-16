<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Mentions légales — Cap Vietnam';
$page_description = 'Mentions légales du blog Cap Vietnam : éditeur, hébergeur, propriété intellectuelle et responsabilité.';
$page_canonical   = 'https://blog-capvietnam.fr/mentions-legales';
$page_extra_css   = '
.page-hero{padding:120px 2rem 4rem;background:linear-gradient(160deg,#1c1917,#2d2319);text-align:center}
.page-hero h1{font-family:\'DM Serif Display\',serif;font-size:clamp(2rem,4vw,3rem);color:#faf8f4;margin-bottom:0.5rem}
.page-hero p{color:rgba(250,248,244,0.5);font-size:0.9rem}
.legal-content{max-width:800px;margin:0 auto;padding:4rem 2rem}
.legal-content h2{font-family:\'DM Serif Display\',serif;font-size:1.5rem;margin:2.5rem 0 1rem;padding-bottom:0.5rem;border-bottom:2px solid var(--border)}
.legal-content h3{font-size:1.1rem;font-weight:600;margin:1.5rem 0 0.5rem;color:var(--terracotta)}
.legal-content p{color:#3a3530;margin-bottom:1rem;font-size:0.97rem}
.legal-content ul{padding-left:1.5rem;margin-bottom:1rem}
.legal-content li{color:#3a3530;margin-bottom:0.4rem;font-size:0.97rem}
.legal-content a{color:var(--amber);text-underline-offset:3px}
.update-date{background:var(--warm-bg);border-left:3px solid var(--amber);padding:1rem 1.5rem;border-radius:0 var(--radius) var(--radius) 0;font-size:0.88rem;color:var(--muted);margin-bottom:2rem}
';
include 'header.php';
?>

<header class="page-hero">
  <h1>Mentions légales</h1>
  <p>Conformément aux articles 6-III et 19 de la Loi n°2004-575 du 21 juin 2004 (LCEN)</p>
</header>

<main class="legal-content">
  <div class="update-date">Dernière mise à jour : avril 2026</div>

  <h2>1. Éditeur du site</h2>
  <p><strong>Nom :</strong> Anthony Bouillon</p>
  <p><strong>Statut :</strong> Auto-entrepreneur (micro-entreprise)</p>
  <p><strong>SIRET :</strong> 85214042500038</p>
  <p><strong>Adresse :</strong> 47 rue Vivienne, 75002 Paris, France</p>
  <p><strong>Email :</strong> <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p>
  <p>Le directeur de la publication est Anthony Bouillon.</p>

  <h2>2. Hébergement</h2>
  <p>Le site Cap Vietnam est hébergé par :</p>
  <p><strong>Hébergeur :</strong> OVH SAS</p>
  <p><strong>Adresse :</strong> 2 rue Kellermann, 59100 Roubaix, France</p>
  <p><strong>Site web :</strong> <a href="https://www.ovh.com" target="_blank" rel="noopener">www.ovh.com</a></p>

  <h2>3. Propriété intellectuelle</h2>
  <p>L'ensemble du contenu du site Cap Vietnam (textes, articles, images libres de droits Unsplash, structure, mise en page) est la propriété exclusive d'Anthony Bouillon, sauf mention contraire.</p>
  <p>Toute reproduction, représentation, modification, publication ou adaptation de tout ou partie des éléments du site, quels que soient les moyens ou le procédé utilisé, est interdite sans autorisation écrite préalable d'Anthony Bouillon.</p>
  <p>Les images provenant d'Unsplash sont utilisées conformément à la <a href="https://unsplash.com/license" target="_blank" rel="noopener">licence Unsplash</a> (usage gratuit, commercial et non commercial, sans attribution requise).</p>

  <h2>4. Liens hypertextes</h2>
  <p>Le site Cap Vietnam peut contenir des liens vers d'autres sites internet. Anthony Bouillon n'a aucun contrôle sur le contenu de ces sites et décline toute responsabilité quant aux informations, avis ou éléments qui y figurent.</p>
  <h3>Liens d'affiliation</h3>
  <p>Certains liens présents sur ce blog sont des liens d'affiliation. Cela signifie qu'Anthony Bouillon peut percevoir une commission si vous effectuez un achat ou une inscription via ces liens, sans coût supplémentaire pour vous. Ces liens sont identifiés par la mention <em>(lien affilié)</em>, l'attribut HTML <code>rel="sponsored"</code>, ou un astérisque (*). L'existence de ces liens n'influence pas les recommandations publiées.</p>
  <p><strong>Partenaires affiliés actuels :</strong></p>
  <ul>
    <li><strong>Wise (TransferWise Ltd)</strong> — service de transfert international. Les liens vers Wise sur ce blog sont des liens de parrainage. Si vous ouvrez un compte et effectuez un premier transfert via ce lien, Anthony Bouillon reçoit une rémunération de Wise. Le service, les tarifs et les conditions ne sont en aucun cas affectés pour vous. Les clics sur ces liens sont enregistrés anonymement à des fins statistiques internes.</li>
  </ul>

  <h2>5. Limitation de responsabilité</h2>
  <p>Les informations publiées sur Cap Vietnam sont fournies à titre indicatif et informatif. Elles ne constituent pas des conseils juridiques, fiscaux ou financiers professionnels. Anthony Bouillon s'efforce de maintenir les informations à jour mais ne peut garantir leur exactitude, exhaustivité ou actualité.</p>
  <p>L'utilisation des informations du site se fait sous la seule responsabilité du lecteur. Anthony Bouillon ne saurait être tenu responsable des dommages directs ou indirects résultant de l'utilisation du site ou des informations qu'il contient.</p>

  <h2>6. Protection des données personnelles</h2>
  <p>La politique de traitement des données personnelles est détaillée dans la <a href="confidentialite-capvietnam">politique de confidentialité</a> du site.</p>

  <h2>7. Cookies</h2>
  <p>Les cookies utilisés sur ce site sont décrits dans la <a href="cookies-capvietnam">politique de gestion des cookies</a>.</p>

  <h2>8. Droit applicable</h2>
  <p>Les présentes mentions légales sont soumises au droit français. En cas de litige, les tribunaux français sont compétents.</p>
</main>

<?php include 'footer.php'; ?>
