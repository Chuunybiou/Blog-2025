<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Mes outils gratuits pour le couple franco-vietnamien — Cap Vietnam';
$page_description = 'Rétroplannings, parcours guidé et calculateur de budget : 4 outils interactifs gratuits pour faire venir son conjoint en France ou s\'installer au Vietnam.';
$page_canonical   = SITE_URL . '/page-mes-outils-couple';
$page_og_title    = 'Outils gratuits — couple franco-vietnamien';
$page_og_desc     = '4 outils interactifs gratuits : parcours guidé, rétroplanning conjoint, rétroplanning Vietnam, calculateur budget. Aucune inscription.';
$page_og_url      = SITE_URL . '/page-mes-outils-couple';
$page_og_image    = SITE_URL . '/assets/img/mariage-franco-vietnamien-ceremonie.png';
$page_schema      = json_encode([
  '@context'    => 'https://schema.org',
  '@type'       => 'WebPage',
  'name'        => 'Mes outils gratuits pour le couple franco-vietnamien',
  'description' => '4 outils interactifs : parcours guidé, rétroplannings, calculateur de budget. Gratuits, sans inscription.',
  'url'         => SITE_URL . '/page-mes-outils-couple',
  'author'      => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'   => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'inLanguage'  => 'fr',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

include '_article-css.php';
include 'header.php';
?>

<div style="max-width:1100px;margin:3rem auto;padding:0 1.5rem">

<div id="capv-hub">
<style>
  #capv-hub{--encre:#1c1917;--papier:#FBF8F3;--papier-2:#F3ECE2;--laque:#C8102E;--laque-fonce:#9e0c23;
    --or:#E4A11B;--jade:#3F7A6D;--ardoise:#6B635B;--trait:#E2D8C9;
    --serif:'DM Serif Display',Georgia,serif;--sans:inherit;--mono:monospace;
    font-family:var(--sans);color:var(--encre);line-height:1.55;-webkit-font-smoothing:antialiased;
    background:var(--papier);border-radius:18px;padding:clamp(26px,4vw,46px);max-width:1000px;margin:0 auto}
  #capv-hub *{box-sizing:border-box}
  #capv-hub .kick{font-size:12px;letter-spacing:.14em;text-transform:uppercase;
    color:var(--laque);display:flex;align-items:center;gap:8px;margin:0 0 14px}
  #capv-hub .kick::before{content:"";width:26px;height:1px;background:var(--laque)}
  #capv-hub h1{font-family:var(--serif);font-weight:600;font-size:clamp(28px,5vw,44px);line-height:1.06;
    letter-spacing:-.01em;margin:0 0 12px}
  #capv-hub h1 em{font-style:italic;color:var(--laque)}
  #capv-hub .lede{color:var(--ardoise);font-size:16px;max-width:62ch;margin:0 0 32px}
  #capv-hub .grid{display:grid;grid-template-columns:repeat(2,1fr);gap:16px}
  @media(max-width:620px){#capv-hub .grid{grid-template-columns:1fr}}
  #capv-hub .card{display:flex;flex-direction:column;background:#fff;border:1px solid var(--trait);
    border-radius:14px;padding:24px;text-decoration:none;color:var(--encre);transition:.18s;position:relative;overflow:hidden}
  #capv-hub .card:hover{border-color:var(--laque);transform:translateY(-2px);box-shadow:0 18px 36px -26px rgba(28,25,23,.45)}
  #capv-hub .card .ico{font-size:32px;line-height:1;margin-bottom:12px}
  #capv-hub .card .free{position:absolute;top:18px;right:18px;font-size:10px;
    letter-spacing:.1em;text-transform:uppercase;color:var(--jade);background:rgba(63,122,109,.1);
    border:1px solid rgba(63,122,109,.3);border-radius:99px;padding:3px 9px}
  #capv-hub .card h3{font-family:var(--serif);font-weight:600;font-size:20px;margin:0 0 6px}
  #capv-hub .card p{margin:0 0 16px;color:var(--ardoise);font-size:14px;flex:1}
  #capv-hub .card .go{font-size:13.5px;font-weight:600;color:var(--laque);display:inline-flex;align-items:center;gap:6px}
  #capv-hub .card:hover .go{color:var(--laque-fonce)}
  #capv-hub .reassure{display:flex;gap:22px;flex-wrap:wrap;margin:28px 0 6px;padding:18px 20px;
    background:var(--papier-2);border:1px solid var(--trait);border-radius:12px}
  #capv-hub .reassure div{flex:1;min-width:200px}
  #capv-hub .reassure h4{font-family:var(--serif);font-size:15px;margin:0 0 3px}
  #capv-hub .reassure p{margin:0;font-size:13px;color:var(--ardoise)}
  #capv-hub .cta{margin-top:26px;background:var(--encre);color:var(--papier);border-radius:14px;
    padding:24px 26px;display:flex;justify-content:space-between;align-items:center;gap:18px;flex-wrap:wrap}
  #capv-hub .cta h3{font-family:var(--serif);font-weight:500;font-size:20px;margin:0 0 4px}
  #capv-hub .cta p{margin:0;font-size:14px;color:#d8cfc2;max-width:46ch}
  #capv-hub .cta a{background:var(--or);color:var(--encre);font-weight:600;font-size:14px;padding:12px 18px;
    border-radius:10px;text-decoration:none;white-space:nowrap}
  #capv-hub .cta a:hover{filter:brightness(1.06)}
  #capv-hub .also{margin-top:18px;font-size:14px;color:var(--ardoise);text-align:center}
  #capv-hub .also a{color:var(--laque);font-weight:600;text-decoration:none}
  #capv-hub .also a:hover{text-decoration:underline}
</style>

  <p class="kick">Outils du couple franco-vietnamien · gratuits</p>
  <h1>Mes <em>outils</em> pour démêler tes démarches</h1>
  <p class="lede">Quatre outils interactifs pour le couple franco-vietnamien. Tu entres tes infos, ils font le calcul — que tu veuilles faire venir ton conjoint en France ou vous installer au Vietnam. Aucune inscription, 100 % gratuit.</p>

  <div class="grid">
    <a class="card" href="parcours-couple-franco-vietnamien">
      <span class="free">Gratuit</span>
      <span class="ico">🗺️</span>
      <h3>Le parcours guidé</h3>
      <p>De la rencontre à la résidence, étape par étape — en France ou au Vietnam — avec une checklist à cocher pour suivre ta progression.</p>
      <span class="go">Suivre le parcours →</span>
    </a>

    <a class="card" href="simulateur-retroplanning-conjoint">
      <span class="free">Gratuit</span>
      <span class="ico">📅</span>
      <h3>Rétroplanning · venir en France</h3>
      <p>Entre ta date, obtiens chaque échéance pour faire venir ton conjoint : rendez-vous, CCAM, mariage, transcription, visa, titre de séjour.</p>
      <span class="go">Calculer mes dates →</span>
    </a>

    <a class="card" href="simulateur-installation-vietnam">
      <span class="free">Gratuit</span>
      <span class="ico">⏱️</span>
      <h3>Rétroplanning · s'installer au Vietnam</h3>
      <p>Visa TT, carte de résidence temporaire, puis résidence permanente : ta trajectoire de résidence projetée, selon où vous vous mariez.</p>
      <span class="go">Calculer mes dates →</span>
    </a>

    <a class="card" href="calculateur-budget-vietnam">
      <span class="free">Gratuit</span>
      <span class="ico">💰</span>
      <h3>Calculateur de budget</h3>
      <p>Estime ton budget mensuel à Hanoï ou Hô Chi Minh-Ville selon ton train de vie. Pour savoir combien il te faut, vraiment.</p>
      <span class="go">Estimer mon budget →</span>
    </a>
  </div>

  <div class="reassure">
    <div><h4>🆓 Vraiment gratuit</h4><p>Pas d'inscription, pas de paywall. Tu utilises, tu repars.</p></div>
    <div><h4>🔄 Tenu à jour</h4><p>Je corrige les délais et les étapes quand les règles changent.</p></div>
    <div><h4>📋 Concret</h4><p>Étapes, délais et pièces tirés des démarches officielles, à jour 2026.</p></div>
  </div>

  <div class="cta">
    <div>
      <h3>Reste prévenu quand une démarche change</h3>
      <p>Une newsletter occasionnelle : nouveaux outils, délais mis à jour, étapes qui évoluent.</p>
    </div>
    <a href="#newsletter">📩 M'inscrire</a>
  </div>

  <p class="also">Tu cherches plutôt mes outils du quotidien — banque, VPN, SIM, assurance, transport ? <a href="outils-vivre-vietnam">Voir mes ressources pour vivre au Vietnam →</a></p>
</div>

</div>

<?php include 'footer.php'; ?>
