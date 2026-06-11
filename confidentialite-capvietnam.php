<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Politique de confidentialité — Cap Vietnam';
$page_description = 'Politique de confidentialité de Cap Vietnam : collecte des données, cookies, newsletter, droits RGPD des utilisateurs.';
$page_canonical   = 'https://www.blog-capvietnam.fr/confidentialite';
$page_extra_css   = '
.page-hero{padding:120px 2rem 4rem;background:linear-gradient(160deg,#1c1917,#2d2319);text-align:center}
.page-hero h1{font-family:\'DM Serif Display\',serif;font-size:clamp(2rem,4vw,3rem);color:#faf8f4;margin-bottom:0.5rem}
.page-hero p{color:rgba(250,248,244,0.5);font-size:0.9rem}
.legal-content{max-width:800px;margin:0 auto;padding:4rem 2rem}
.legal-content h2{font-family:\'DM Serif Display\',serif;font-size:1.5rem;margin:2.5rem 0 1rem;padding-bottom:0.5rem;border-bottom:2px solid var(--border)}
.legal-content h3{font-size:1.1rem;font-weight:600;margin:1.5rem 0 0.5rem;color:var(--jade)}
.legal-content p{color:#3a3530;margin-bottom:1rem;font-size:0.97rem}
.legal-content ul{padding-left:1.5rem;margin-bottom:1rem}
.legal-content li{color:#3a3530;margin-bottom:0.4rem;font-size:0.97rem}
.legal-content a{color:var(--amber);text-underline-offset:3px}
.legal-content table{width:100%;border-collapse:collapse;margin:1.5rem 0;font-size:0.92rem;background:var(--white);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-sm)}
.legal-content thead{background:var(--ink);color:#faf8f4}
.legal-content th{padding:0.75rem 1rem;text-align:left;font-size:0.8rem;text-transform:uppercase;letter-spacing:0.5px}
.legal-content td{padding:0.75rem 1rem;border-bottom:1px solid var(--border);vertical-align:top}
.legal-content tr:last-child td{border-bottom:none}
.update-date{background:var(--warm-bg);border-left:3px solid var(--jade);padding:1rem 1.5rem;border-radius:0 var(--radius) var(--radius) 0;font-size:0.88rem;color:var(--muted);margin-bottom:2rem}
.rights-box{background:rgba(27,107,82,0.06);border-left:4px solid var(--jade);padding:1.25rem 1.5rem;border-radius:0 var(--radius) var(--radius) 0;margin:2rem 0}
';
include 'header.php';
?>

<header class="page-hero">
  <h1>Politique de confidentialité</h1>
  <p>Conformément au Règlement Général sur la Protection des Données (RGPD — UE 2016/679)</p>
</header>

<main class="legal-content">
  <div class="update-date">Dernière mise à jour : avril 2026</div>

  <h2>1. Responsable du traitement</h2>
  <p><strong>Anthony Bouillon</strong> — créateur du blog Cap Vietnam</p>
  <p>Email : <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p>

  <h2>2. Données collectées</h2>
  <table>
    <thead><tr><th>Type de donnée</th><th>Finalité</th><th>Base légale</th><th>Durée</th></tr></thead>
    <tbody>
      <tr><td>Adresse email (newsletter)</td><td>Envoi de la newsletter Cap Vietnam</td><td>Consentement (art. 6.1.a RGPD)</td><td>Jusqu'à désinscription</td></tr>
      <tr><td>Nom, email, message (formulaire contact)</td><td>Réponse à votre demande</td><td>Intérêt légitime (art. 6.1.f RGPD)</td><td>3 ans après le dernier contact</td></tr>
    </tbody>
  </table>

  <h2>3. Formulaires et newsletter</h2>
  <p>Les formulaires de contact et d'inscription à la newsletter utilisent le service <strong>Formspree</strong> (Formspree Inc., San Francisco, USA). Les données transmises sont hébergées sur les serveurs de Formspree. Consultez leur <a href="https://formspree.io/legal/privacy-policy" target="_blank" rel="noopener">politique de confidentialité</a>.</p>
  <p>L'adresse email collectée pour la newsletter est uniquement utilisée pour l'envoi de la newsletter Cap Vietnam. Elle n'est jamais cédée, vendue ou louée à des tiers.</p>

  <h2>4. Cookies et traceurs</h2>
  <p>Cap Vietnam utilise des cookies pour le bon fonctionnement du site et la mesure d'audience. Consultez la <a href="cookies-capvietnam">politique de gestion des cookies</a> pour le détail complet.</p>

  <h2>5. Liens d'affiliation et tiers</h2>
  <p>Certains liens sur ce blog pointent vers des sites tiers (Wise, Booking, Amazon, etc.). Ces sites ont leurs propres politiques de confidentialité. Cap Vietnam n'est pas responsable du traitement des données effectué par ces tiers.</p>

  <h2>6. Vos droits (RGPD)</h2>
  <div class="rights-box">
    <p>Conformément au RGPD, vous disposez des droits suivants concernant vos données personnelles :</p>
    <ul>
      <li><strong>Droit d'accès</strong> : obtenir une copie de vos données</li>
      <li><strong>Droit de rectification</strong> : corriger des données inexactes</li>
      <li><strong>Droit à l'effacement</strong> : demander la suppression de vos données</li>
      <li><strong>Droit à la portabilité</strong> : recevoir vos données dans un format structuré</li>
      <li><strong>Droit d'opposition</strong> : vous opposer au traitement de vos données</li>
      <li><strong>Droit de retirer votre consentement</strong> à tout moment (newsletter : lien de désinscription dans chaque email)</li>
    </ul>
    <p style="margin-top:1rem">Pour exercer ces droits : <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a> — Réponse sous 30 jours.</p>
    <p>En cas de réclamation non résolue, vous pouvez saisir la <strong>CNIL</strong> : <a href="https://www.cnil.fr" target="_blank" rel="noopener">www.cnil.fr</a></p>
  </div>

  <h2>7. Sécurité</h2>
  <p>Cap Vietnam met en œuvre des mesures techniques et organisationnelles appropriées pour protéger vos données personnelles contre l'accès non autorisé, la modification, la divulgation ou la destruction.</p>

  <h2>8. Modifications</h2>
  <p>Cette politique de confidentialité peut être mise à jour. La date de dernière mise à jour est indiquée en haut de cette page. En continuant à utiliser le site après une modification, vous acceptez la politique mise à jour.</p>
</main>

<?php include 'footer.php'; ?>
