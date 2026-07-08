<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Ton pack est prêt — Cap Vietnam';
$page_description = 'Accède aux 4 ressources du pack : guide PDF Mariage & Visa 2026, lettre CCAM, lettre de relance ambassade et checklist complète.';
$page_canonical   = SITE_URL . '/merci-guide';
$page_og_title    = 'Ton pack est prêt — Cap Vietnam';
$page_og_desc     = 'Guide PDF Mariage & Visa 2026, lettre CCAM, lettre de relance ambassade et checklist complète — accès immédiat.';
$page_og_url      = SITE_URL . '/merci-guide';
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';
$page_noindex     = true;
$page_extra_head  = '<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Young+Serif&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap" onload="this.onload=null;this.rel=\'stylesheet\'">'
  . '<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Young+Serif&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap"></noscript>';
$page_extra_css = '
/* ═══════════ MERCI-GUIDE V2 — carnet papier, scopé pour ne pas toucher le reste du site ═══════════ */
.mg-v2{
  --paper:#FBF6EC;
  --paper-deep:#F3EBDB;
  --ink2:#23281F;
  --ink-soft2:#5A5F53;
  --hanoi:#DE9E28;
  --hanoi-soft:#F6E3B8;
  --shutter:#2E5641;
  --shutter-deep:#1F3D2E;
  --tampon:#A6392B;
  --line2:#E2D8C2;
  --radius2:14px;
  --font-display2:\'Young Serif\',Georgia,serif;
  --font-body2:\'Instrument Sans\',system-ui,sans-serif;
  --font-mono2:\'IBM Plex Mono\',ui-monospace,monospace;
  font-family:var(--font-body2);
  background:var(--paper);
  color:var(--ink2);
  line-height:1.65;
  font-size:17px;
  -webkit-font-smoothing:antialiased;
}
.mg-v2 img{max-width:100%;display:block}
.mg-v2 a{color:inherit}
.mg-v2 .wrap{max-width:1120px;margin:0 auto;padding:0 24px}
.mg-v2 .wrap-narrow{max-width:760px;margin:0 auto;padding:0 24px}
.mg-v2 .eyebrow{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--shutter);display:inline-flex;align-items:center;gap:.6em}
.mg-v2 .eyebrow::before{content:"";width:26px;height:2px;background:var(--hanoi)}
.mg-v2 .eyebrow.gold{color:var(--hanoi)}
.mg-v2 .eyebrow.gold::before{background:var(--hanoi)}
.mg-v2 h1,.mg-v2 h2,.mg-v2 h3,.mg-v2 h4{font-family:var(--font-display2);font-weight:400;line-height:1.15}
.mg-v2 h2{font-size:clamp(1.7rem,3.4vw,2.3rem);margin:.5rem 0 .9rem}
.mg-v2 .section{padding:80px 0;max-width:none;margin:0}
.mg-v2 .section-head{max-width:640px;margin-bottom:40px}
.mg-v2 .section-head p{color:var(--ink-soft2)}
.mg-v2 .mono{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.1em;text-transform:uppercase;color:var(--ink-soft2)}

.mg-v2 .btn{display:inline-flex;align-items:center;gap:.5em;font-family:var(--font-body2);font-weight:600;font-size:.95rem;padding:.85em 1.5em;border-radius:999px;text-decoration:none;border:1.5px solid var(--ink2);transition:transform .15s ease,box-shadow .15s ease,background .15s ease;cursor:pointer}
.mg-v2 .btn-primary{background:var(--ink2);color:var(--paper)}
.mg-v2 .btn-primary:hover{background:var(--shutter-deep);border-color:var(--shutter-deep);transform:translateY(-2px);box-shadow:0 8px 20px rgba(35,40,31,.18)}
.mg-v2 .btn-ghost{background:transparent;color:var(--ink2)}
.mg-v2 .btn-ghost:hover{background:var(--paper-deep)}
.mg-v2 .btn-hanoi{background:var(--hanoi);border-color:var(--hanoi);color:var(--ink2)}
.mg-v2 .btn-hanoi:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(222,158,40,.35)}

.mg-v2 .stamp{border:2.5px solid var(--tampon);color:var(--tampon);border-radius:10px;padding:.55em .9em;background:rgba(251,246,236,.9);font-family:var(--font-mono2);font-size:.68rem;font-weight:500;letter-spacing:.16em;text-transform:uppercase;text-align:center;line-height:1.5;box-shadow:0 4px 14px rgba(166,57,43,.18)}
.mg-v2 .stamp b{display:block;font-size:.84rem;font-weight:500}

/* --- hero accès --- */
.mg-v2 .mg-hero{background:linear-gradient(180deg,var(--paper-deep),var(--paper));padding:72px 0 20px;text-align:center}
.mg-v2 .mg-hero-inner{display:flex;flex-direction:column;align-items:center}
.mg-v2 .mg-hero h1{font-size:clamp(2.2rem,4.8vw,3.4rem);margin-bottom:.8rem}
.mg-v2 .mg-hero h1 em{font-style:italic;color:var(--shutter)}
.mg-v2 .mg-hero .lede{color:var(--ink-soft2);max-width:36em}

/* --- téléchargements --- */
.mg-v2 .pk-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.mg-v2 .pk-card{background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);padding:28px 26px;display:flex;flex-direction:column;gap:.6rem;position:relative;transition:transform .18s ease,box-shadow .18s ease,border-color .18s ease}
.mg-v2 .pk-card:hover{transform:translateY(-4px);box-shadow:0 14px 30px rgba(35,40,31,.1);border-color:var(--hanoi)}
.mg-v2 .pk-card.is-main{grid-column:span 3;flex-direction:row;align-items:center;gap:28px;background:var(--hanoi-soft);border:2px dashed var(--hanoi)}
.mg-v2 .pk-card.is-main h3{font-size:1.35rem;flex:none;max-width:12em}
.mg-v2 .pk-card.is-main p{flex:1}
.mg-v2 .pk-card.is-main .btn{align-self:center;margin:0;flex:none}
.mg-v2 .pk-card .btn{align-self:flex-start;margin-top:auto}
.mg-v2 .pk-tag{font-family:var(--font-mono2);font-size:.64rem;letter-spacing:.14em;text-transform:uppercase;color:var(--tampon);border:1px solid var(--tampon);border-radius:6px;padding:.3em .7em;width:max-content}
.mg-v2 .pk-card h3{font-size:1.12rem;line-height:1.3}
.mg-v2 .pk-card p{color:var(--ink-soft2);font-size:.92rem;flex:1}
.mg-v2 .pk-tip{margin-top:22px;border:1px dashed var(--tampon);border-radius:var(--radius2);background:#fff;padding:18px 24px;display:flex;gap:20px;align-items:baseline;flex-wrap:wrap}
.mg-v2 .pk-tip p{color:var(--ink-soft2);margin:0}

/* --- et maintenant --- */
.mg-v2 .alt-band{background:var(--paper-deep);border-block:1px solid var(--line2)}
.mg-v2 .mg-next{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.mg-v2 .mg-step{background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);padding:26px;text-decoration:none;display:flex;flex-direction:column;gap:.6rem;transition:transform .18s ease,box-shadow .18s ease,border-color .18s ease}
.mg-v2 .mg-step:hover{transform:translateY(-4px);box-shadow:0 14px 30px rgba(35,40,31,.1);border-color:var(--hanoi)}
.mg-v2 .mg-step h3{font-size:1.12rem}
.mg-v2 .mg-step p{color:var(--ink-soft2);font-size:.9rem;flex:1}
.mg-v2 .mg-step .go{font-weight:600;font-size:.9rem;color:var(--shutter);text-decoration:none}
.mg-v2 a.go:hover{text-decoration:underline}
.mg-v2 .mg-links{display:flex;gap:18px;flex-wrap:wrap}

/* --- wise (lien affilie deja present sur le site) --- */
.mg-v2 .wise-band{background:var(--shutter-deep);color:var(--paper);border-radius:calc(var(--radius2) + 6px);padding:40px 44px;text-align:center}
.mg-v2 .wise-band h3{color:var(--paper);margin-bottom:.5rem}
.mg-v2 .wise-band p{color:rgba(251,246,236,.75);font-size:.95rem;max-width:38em;margin:0 auto 1.3rem}
.mg-v2 .wise-note{font-size:.72rem;color:rgba(251,246,236,.4);margin-top:.9rem;font-style:italic}

@media(max-width:960px){
  .mg-v2 .pk-grid{grid-template-columns:1fr 1fr}
  .mg-v2 .pk-card.is-main{grid-column:span 2;flex-direction:column;align-items:flex-start;gap:.6rem}
  .mg-v2 .pk-card.is-main h3{max-width:none}
  .mg-v2 .pk-card.is-main .btn{align-self:flex-start}
  .mg-v2 .mg-next{grid-template-columns:1fr}
}
@media(max-width:640px){
  .mg-v2 .section{padding:60px 0}
  .mg-v2 .pk-grid{grid-template-columns:1fr}
  .mg-v2 .pk-card.is-main{grid-column:span 1}
}
';
include 'header.php';
?>

<div class="mg-v2">

<!-- ═══════ HERO ACCÈS ═══════ -->
<section class="mg-hero">
  <div class="wrap mg-hero-inner">
    <div class="stamp big" style="transform:rotate(-6deg);margin-bottom:26px">Newsletter confirmée<b>ACCÈS OUVERT</b>Pack complet</div>
    <h1>Merci ! Ton pack est <em>prêt</em>.</h1>
    <p class="lede">Les 4 ressources sont à télécharger ci-dessous. Pense à mettre cette page en favori — tu pourras y revenir à n'importe quelle étape de tes démarches.</p>
  </div>
</section>

<!-- ═══════ TÉLÉCHARGEMENTS ═══════ -->
<section class="section" style="padding-top:56px" id="telechargements">
  <div class="wrap">
    <div class="pk-grid">
      <div class="pk-card is-main">
        <span class="pk-tag">Guide principal</span>
        <div style="flex:1">
          <h3>Guide PDF — Mariage &amp; Visa conjoint 2026</h3>
          <p>CCAM, mariage au Vietnam, VLS-TS, titre de séjour, budget et installation — le parcours complet en un PDF de référence. <span class="mono" style="font-size:.62rem">PDF · ~40 PAGES</span></p>
        </div>
        <a class="btn btn-primary" href="Guide_Se_marier_et_vivre_au_Vietnam-1.pdf" download>Télécharger le PDF ↓</a>
      </div>
      <div class="pk-card">
        <span class="pk-tag">Modèle de lettre</span>
        <h3>Lettre de demande CCAM au consulat</h3>
        <p>À compléter directement dans le navigateur, puis Ctrl+P pour enregistrer en PDF. Format officiel.</p>
        <a class="btn btn-ghost" href="modeles/lettre-ccam">Ouvrir le modèle →</a>
      </div>
      <div class="pk-card">
        <span class="pk-tag">Modèle de lettre</span>
        <h3>Lettre de relance à l'ambassade</h3>
        <p>Quand le consulat ne répond pas après 2 mois. Relance formelle pour dossier CCAM ou visa VLS-TS en attente.</p>
        <a class="btn btn-ghost" href="modeles/lettre-suivi-ambassade">Ouvrir le modèle →</a>
      </div>
      <div class="pk-card">
        <span class="pk-tag">Checklist</span>
        <h3>Checklist CCAM — tous les documents</h3>
        <p>Cases à cocher, côté français et vietnamien, apostille, traductions, chronologie recommandée.</p>
        <a class="btn btn-ghost" href="modeles/checklist-ccam">Ouvrir la checklist →</a>
      </div>
    </div>
    <div class="pk-tip">
      <span class="mono" style="color:var(--tampon)">BON À SAVOIR</span>
      <p>Les modèles sont <strong>remplissables dans le navigateur</strong> et enregistrables en PDF via Ctrl+P. Pas besoin de Word ni d'Acrobat. Un lien ne fonctionne pas ? <a href="contact-capvietnam">Écris-moi</a>.</p>
    </div>
  </div>
</section>

<!-- ═══════ ET MAINTENANT ═══════ -->
<section class="section alt-band" id="suite">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Et maintenant ?</span>
      <h2>Les 3 prochaines étapes utiles</h2>
    </div>
    <div class="mg-next">
      <a class="mg-step" href="par-ou-commencer-couple-franco-vietnamien">
        <span class="mono" style="color:var(--tampon)">ÉTAPE 1 · ~5 MIN</span>
        <h3>Situe-toi avec le parcours guidé</h3>
        <p>De la rencontre à la vie installée — toutes les étapes classées, choisis ta branche France ou Vietnam.</p>
        <span class="go">Voir le parcours →</span>
      </a>
      <a class="mg-step" href="retroplanning-faire-venir-conjoint">
        <span class="mono" style="color:var(--tampon)">ÉTAPE 2 · SIMULATEUR</span>
        <h3>Calcule tes échéances</h3>
        <p>Entre ta date de lancement CCAM, obtiens chaque échéance jusqu'à l'arrivée en France.</p>
        <span class="go">Ouvrir le rétroplanning →</span>
      </a>
      <div class="mg-step">
        <span class="mono" style="color:var(--tampon)">ÉTAPE 3 · COMMUNAUTÉ</span>
        <h3>Rejoins les autres couples</h3>
        <p>Délais comparés, dossiers acceptés, entraide sur les cas particuliers — sur Facebook ou Discord.</p>
        <span class="mg-links">
          <a class="go" href="https://www.facebook.com/groups/vivreauvietnamcouplefrancovietnamiencap/" target="_blank" rel="noopener">Groupe Facebook →</a>
          <a class="go" href="https://discord.gg/MdDVNb7QZz" target="_blank" rel="noopener">Discord expats →</a>
        </span>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ WISE (lien affilié) ═══════ -->
<section class="section" style="padding-block:64px">
  <div class="wrap">
    <div class="wise-band">
      <span class="eyebrow gold" style="justify-content:center">L'outil indispensable</span>
      <h3>💸 Wise, pour transférer de l'argent au Vietnam</h3>
      <p>Transférer des euros vers le Vietnam au taux interbancaire, sans les frais des banques classiques. Utilisé par tous les expats sérieux.</p>
      <a class="btn btn-hanoi" href="go.php?id=wise" rel="noopener sponsored">Ouvrir Wise gratuitement →</a>
      <p class="wise-note">Lien affilié — commission perçue si tu effectues un premier transfert, sans coût pour toi.</p>
    </div>
  </div>
</section>

<!-- ═══════ À QUOI T'ATTENDRE ═══════ -->
<section class="section" style="padding-top:0">
  <div class="wrap-narrow" style="text-align:center">
    <span class="eyebrow" style="justify-content:center">La newsletter</span>
    <h2>À quoi t'attendre maintenant</h2>
    <p style="color:var(--ink-soft2);max-width:38em;margin:0 auto 18px">Un email par mois : alertes administratives (apostille, PAI, visas) et bons plans. Pas de spam, désabonnement en 1 clic. Si le pack n'arrive pas dans ta boîte, vérifie tes spams ou <a href="contact-capvietnam" style="color:var(--shutter)">contacte-moi</a>.</p>
    <p class="mono" style="font-size:.66rem"><?= htmlspecialchars(mb_strtoupper(SITE_EMAIL)) ?></p>
  </div>
</section>

</div><!-- /.mg-v2 -->
<!-- Note : la bannière ebook n'est pas dupliquée ici — footer.php en affiche déjà une, juste avant le footer. -->

<?php include 'footer.php'; ?>
