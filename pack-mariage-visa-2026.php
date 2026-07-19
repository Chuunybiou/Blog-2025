<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Pack Mariage Franco-Vietnamien & Visa 2026 — Guide complet + 8 modèles de lettres | Cap Vietnam';
$page_description = 'Le guide pas à pas pour sécuriser ton mariage franco-vietnamien : CCAM, transcription, visa conjoint. + 8 modèles de lettres officielles prêts à l\'emploi et check-list imprimable. 9,99 €.';
$page_canonical   = SITE_URL . '/pack-mariage-visa-2026';
$page_og_title    = 'Pack Mariage Franco-Vietnamien & Visa — Édition 2026';
$page_og_desc     = 'Guide complet (45 pages) + 8 modèles de lettres officielles + check-list imprimable pour sécuriser ton mariage franco-vietnamien et le visa conjoint. 9,99 €.';
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';

$page_extra_head = '<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Young+Serif&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap" onload="this.onload=null;this.rel=\'stylesheet\'">'
  . '<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Young+Serif&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap"></noscript>'
  . '<script type="application/ld+json">' . json_encode([
      '@context' => 'https://schema.org',
      '@type' => 'Product',
      'name' => 'Pack Mariage Franco-Vietnamien & Visa — Édition 2026',
      'description' => 'Guide complet (45 pages) + 8 modèles de lettres officielles + check-list imprimable pour sécuriser un mariage franco-vietnamien et le visa conjoint.',
      'brand' => ['@type' => 'Brand', 'name' => 'Cap Vietnam'],
      'offers' => [
          '@type' => 'Offer',
          'priceCurrency' => 'EUR',
          'price' => '9.99',
          'availability' => 'https://schema.org/InStock',
          'url' => $page_canonical,
      ],
  ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';

$page_extra_css = '
/* ═══════════ PACK-MARIAGE V1 — carnet papier, scopé pour ne pas toucher le reste du site ═══════════ */
.pm-v2{
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
.pm-v2 img{max-width:100%;display:block}
.pm-v2 a{color:inherit}
.pm-v2 .wrap{max-width:1120px;margin:0 auto;padding:0 24px}
.pm-v2 .wrap-narrow{max-width:760px;margin:0 auto;padding:0 24px}
.pm-v2 .eyebrow{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--shutter);display:inline-flex;align-items:center;gap:.6em}
.pm-v2 .eyebrow::before{content:"";width:26px;height:2px;background:var(--hanoi)}
.pm-v2 .eyebrow.gold{color:var(--hanoi)}
.pm-v2 .eyebrow.gold::before{background:var(--hanoi)}
.pm-v2 .eyebrow.light{color:var(--hanoi)}
.pm-v2 .eyebrow.light::before{background:var(--hanoi)}
.pm-v2 h1,.pm-v2 h2,.pm-v2 h3,.pm-v2 h4{font-family:var(--font-display2);font-weight:400;line-height:1.15}
.pm-v2 h2{font-size:clamp(1.7rem,3.4vw,2.3rem);margin:.5rem 0 .9rem}
.pm-v2 .section{padding:80px 0;max-width:none;margin:0}
.pm-v2 .section-head{max-width:640px;margin-bottom:40px}
.pm-v2 .section-head p{color:var(--ink-soft2)}
.pm-v2 .mono{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.1em;text-transform:uppercase;color:var(--ink-soft2)}

.pm-v2 .btn{display:inline-flex;align-items:center;gap:.5em;font-family:var(--font-body2);font-weight:600;font-size:.95rem;padding:.85em 1.5em;border-radius:999px;text-decoration:none;border:1.5px solid var(--ink2);transition:transform .15s ease,box-shadow .15s ease,background .15s ease;cursor:pointer}
.pm-v2 .btn-ghost{background:transparent;color:var(--ink2)}
.pm-v2 .btn-ghost:hover{background:var(--paper-deep)}
.pm-v2 .btn-ghost.light{border-color:rgba(251,246,236,.4);color:var(--paper)}
.pm-v2 .btn-ghost.light:hover{background:rgba(251,246,236,.14)}
.pm-v2 .btn-hanoi{background:var(--hanoi);border-color:var(--hanoi);color:var(--ink2)}
.pm-v2 .btn-hanoi:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(222,158,40,.35)}
.pm-v2 .btn-hanoi[disabled]{opacity:.7;cursor:default;transform:none;box-shadow:none}

.pm-v2 .stamp{border:2.5px solid var(--tampon);color:var(--tampon);border-radius:10px;padding:.55em .9em;background:rgba(251,246,236,.9);font-family:var(--font-mono2);font-size:.68rem;font-weight:500;letter-spacing:.16em;text-transform:uppercase;text-align:center;line-height:1.5;box-shadow:0 4px 14px rgba(166,57,43,.18)}
.pm-v2 .stamp b{display:block;font-size:.84rem;font-weight:500}

/* --- hero plein écran --- */
.pm-v2 .hero-full{position:relative;min-height:60vh;display:flex;align-items:flex-end;overflow:hidden}
.pm-v2 .hero-bg{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center 38%}
.pm-v2 .hero-shade{position:absolute;inset:0;background:linear-gradient(180deg,rgba(28,32,26,.5) 0%,rgba(28,32,26,.3) 40%,rgba(28,32,26,.86) 100%)}
.pm-v2 .hero-inner{position:relative;padding-block:68px 60px;max-width:1120px}
.pm-v2 .hero-full h1{font-size:clamp(2rem,4.4vw,3.2rem);color:#fff;margin:.6rem 0 1rem;max-width:16em;text-shadow:0 2px 24px rgba(28,32,26,.45)}
.pm-v2 .hero-full h1 em{font-style:italic;color:var(--hanoi)}
.pm-v2 .hero-full .lede{font-size:1.06rem;color:rgba(251,246,236,.92);max-width:38em;margin-bottom:1.4rem;text-shadow:0 1px 12px rgba(28,32,26,.5)}
.pm-v2 .hero-ctas{display:flex;gap:14px;flex-wrap:wrap;align-items:center}
.pm-v2 .hero-ctas p{color:rgba(251,246,236,.75);font-size:.85rem}
.pm-v2 .hero-price{position:absolute;top:96px;right:5%;transform:rotate(8deg);z-index:2}
.pm-v2 .hero-caption{position:absolute;bottom:14px;right:20px;color:rgba(251,246,236,.55);font-size:.6rem;z-index:2}

/* --- preuve --- */
.pm-v2 .proofbar{background:var(--shutter-deep);color:var(--paper)}
.pm-v2 .proofbar-inner{display:flex;justify-content:space-between;gap:26px;padding-block:24px;flex-wrap:wrap}
.pm-v2 .proofbar strong{font-family:var(--font-display2);font-size:1.5rem;display:block;color:var(--hanoi)}
.pm-v2 .proofbar span{font-family:var(--font-mono2);font-size:.68rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(251,246,236,.7)}

/* --- douleur --- */
.pm-v2 .pain-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.pm-v2 .pain-card{background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);padding:26px}
.pm-v2 .pain-card .tag{font-size:1.6rem;display:block;margin-bottom:.6rem}
.pm-v2 .pain-card h3{font-size:1.05rem;margin-bottom:.4rem}
.pm-v2 .pain-card p{color:var(--ink-soft2);font-size:.9rem}

/* --- contenu du pack --- */
.pm-v2 .alt-band{background:var(--paper-deep);border-block:1px solid var(--line2)}
.pm-v2 .pk-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.pm-v2 .pk-card{background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);padding:28px 26px;display:flex;flex-direction:column;gap:.6rem;position:relative;transition:transform .18s ease,box-shadow .18s ease,border-color .18s ease}
.pm-v2 .pk-card:hover{transform:translateY(-4px);box-shadow:0 14px 30px rgba(35,40,31,.1);border-color:var(--hanoi)}
.pm-v2 .pk-card.is-main{grid-column:span 3;flex-direction:row;align-items:center;gap:28px;background:var(--hanoi-soft);border:2px dashed var(--hanoi)}
.pm-v2 .pk-card.is-main h3{font-size:1.35rem;flex:none;max-width:14em}
.pm-v2 .pk-card.is-main p{flex:1}
.pm-v2 .pk-tag{font-family:var(--font-mono2);font-size:.64rem;letter-spacing:.14em;text-transform:uppercase;color:var(--tampon);border:1px solid var(--tampon);border-radius:6px;padding:.3em .7em;width:max-content}
.pm-v2 .pk-card h3{font-size:1.12rem;line-height:1.3}
.pm-v2 .pk-card p{color:var(--ink-soft2);font-size:.92rem;flex:1}
.pm-v2 .pk-format{font-size:.64rem!important;color:var(--shutter)!important;border-top:2px dashed var(--line2);padding-top:12px}

/* --- lettres --- */
.pm-v2 .letters-list{list-style:none;display:grid;grid-template-columns:1fr 1fr;gap:.6rem 2rem;margin-top:1.6rem}
.pm-v2 .letters-list li{display:flex;gap:.7em;font-size:.94rem;padding:.5em 0;border-bottom:1px dashed var(--line2)}
.pm-v2 .letters-list li::before{content:"✉";color:var(--tampon);flex:none}

/* --- pour qui --- */
.pm-v2 .pk-for-grid{display:grid;grid-template-columns:.8fr 1.2fr;gap:52px;align-items:center}
.pm-v2 .pk-for{list-style:none;border-top:2px dashed var(--line2)}
.pm-v2 .pk-for li{border-bottom:2px dashed var(--line2);padding:.95em 4px .95em 38px;position:relative;font-weight:500}
.pm-v2 .pk-for li::before{content:"✓";position:absolute;left:4px;top:.85em;width:24px;height:24px;border-radius:50%;background:var(--shutter);color:var(--paper);display:grid;place-items:center;font-size:.8rem}

/* --- auteur --- */
.pm-v2 .author-band{display:flex;gap:28px;align-items:center;background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);padding:30px}
.pm-v2 .author-band img{width:84px;height:84px;border-radius:50%;object-fit:cover;flex:none}
.pm-v2 .author-band p{color:var(--ink-soft2);font-size:.92rem}

/* --- achat --- */
.pm-v2 .buy{background:var(--shutter-deep);color:var(--paper);border-radius:calc(var(--radius2) + 8px);padding:56px 52px;position:relative;overflow:hidden}
.pm-v2 .buy::after{content:"CAP VIETNAM · PACK MARIAGE & VISA · CAP VIETNAM · PACK MARIAGE & VISA · ";position:absolute;bottom:14px;left:0;white-space:nowrap;font-family:var(--font-mono2);font-size:.66rem;letter-spacing:.3em;color:rgba(251,246,236,.14)}
.pm-v2 .buy-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:46px;align-items:center;position:relative}
.pm-v2 .buy h2{color:var(--paper)}
.pm-v2 .buy ul{list-style:none;margin:1.1rem 0 0;display:grid;gap:.7rem}
.pm-v2 .buy li{display:flex;gap:.7em;font-size:.95rem;color:rgba(251,246,236,.88)}
.pm-v2 .buy li::before{content:"✓";color:var(--hanoi);font-weight:700}
.pm-v2 .buy-box{background:rgba(251,246,236,.06);border:1px solid rgba(251,246,236,.2);border-radius:var(--radius2);padding:34px;text-align:center}
.pm-v2 .buy-price{font-family:var(--font-display2);font-size:2.6rem;color:var(--hanoi)}
.pm-v2 .buy-price sup{font-size:1.1rem;top:-1em}
.pm-v2 .buy-price-note{font-size:.78rem;color:rgba(251,246,236,.6);margin-bottom:1.4rem}
.pm-v2 .buy-box form{margin:0}
.pm-v2 .buy-box .btn{width:100%;justify-content:center}
.pm-v2 .buy-box small{display:block;margin-top:14px;font-size:.76rem;color:rgba(251,246,236,.55)}
.pm-v2 .buy-box .secure{display:flex;justify-content:center;gap:14px;margin-top:14px;font-size:.68rem;color:rgba(251,246,236,.5);font-family:var(--font-mono2);letter-spacing:.05em}

/* --- faq --- */
.pm-v2 .faq{max-width:760px;margin:0 auto}
.pm-v2 .faq-item{border-bottom:1px solid var(--line2);padding:22px 0}
.pm-v2 .faq-item h3{font-size:1.02rem;font-family:var(--font-body2);font-weight:600;margin-bottom:.5rem}
.pm-v2 .faq-item p{color:var(--ink-soft2);font-size:.92rem}

@media(max-width:960px){
  .pm-v2 .hero-full{min-height:auto;padding-top:20px}
  .pm-v2 .pain-grid{grid-template-columns:1fr}
  .pm-v2 .pk-grid{grid-template-columns:1fr 1fr}
  .pm-v2 .pk-card.is-main{grid-column:span 2;flex-direction:column;align-items:flex-start;gap:.6rem}
  .pm-v2 .pk-card.is-main h3{max-width:none}
  .pm-v2 .letters-list{grid-template-columns:1fr}
  .pm-v2 .pk-for-grid{grid-template-columns:1fr;gap:28px}
  .pm-v2 .buy-grid{grid-template-columns:1fr;gap:32px}
  .pm-v2 .author-band{flex-direction:column;text-align:center}
}
@media(max-width:640px){
  .pm-v2 .section{padding:56px 0}
  .pm-v2 .pk-grid{grid-template-columns:1fr}
  .pm-v2 .pk-card.is-main{grid-column:span 1}
  .pm-v2 .buy{padding:38px 24px}
}
';
include 'header.php';
?>

<div class="pm-v2">

<!-- ═══════ HERO ═══════ -->
<section class="hero-full">
  <img class="hero-bg" src="assets/img/documents-ccam-mariage-etranger.jpg" alt="" fetchpriority="high">
  <div class="hero-shade" aria-hidden="true"></div>
  <div class="stamp big hero-price">Édition 2026<b>9,99 €</b>Accès immédiat</div>
  <div class="wrap hero-inner">
    <span class="eyebrow light">Pack payant · PDF + modèles</span>
    <h1>Sécurise ton mariage <em>franco-vietnamien</em> et ton visa, sans erreur de parcours</h1>
    <p class="lede">Le guide pas à pas (45 pages) + 8 modèles de lettres officielles prêts à l'emploi + check-list imprimable, pour éviter les mois perdus à cause d'un document manquant ou d'une étape mal ordonnée.</p>
    <div class="hero-ctas">
      <a class="btn btn-hanoi" href="#acheter">Obtenir le pack — 9,99 € →</a>
      <p>Téléchargement immédiat après paiement, par email</p>
    </div>
  </div>
  <span class="hero-caption mono">LE DOSSIER CCAM — PHOTO DU BLOG</span>
</section>

<!-- ═══════ PREUVE ═══════ -->
<div class="proofbar">
  <div class="wrap proofbar-inner">
    <div><strong>45 pages</strong><span>de guide détaillé, à jour 2026</span></div>
    <div><strong>8 modèles</strong><span>de lettres officielles prêtes à l'emploi</span></div>
    <div><strong>9,99 €</strong><span>accès immédiat, à vie</span></div>
  </div>
</div>

<!-- ═══════ DOULEUR ═══════ -->
<section class="section" id="pourquoi">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Pourquoi ce pack existe</span>
      <h2>Les démarches franco-vietnamiennes ne pardonnent pas les erreurs de parcours</h2>
      <p>CCAM, mariage civil, transcription à Nantes, visa conjoint… chaque étape a ses délais, ses pièces justificatives et ses pièges. Un dossier mal préparé, c'est plusieurs mois perdus.</p>
    </div>
    <div class="pain-grid">
      <div class="pain-card">
        <span class="tag">📄</span>
        <h3>Un document manquant</h3>
        <p>Et c'est tout le dossier CCAM qui repart à zéro, avec plusieurs semaines de délai supplémentaire au consulat.</p>
      </div>
      <div class="pain-card">
        <span class="tag">⏳</span>
        <h3>Un ordre des étapes mal compris</h3>
        <p>Mariage, transcription SCEC, visa VLS-TS : s'y prendre dans le mauvais ordre peut bloquer le dossier pendant des mois.</p>
      </div>
      <div class="pain-card">
        <span class="tag">✉️</span>
        <h3>Une lettre mal rédigée</h3>
        <p>Motivation, attestation d'hébergement, relance après silence radio — le format officiel attendu n'est pas improvisé.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ CONTENU DU PACK ═══════ -->
<section class="section alt-band" id="contenu">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Contenu du pack</span>
      <h2>Tout ce qu'il faut, dans l'ordre</h2>
      <p>Construit à partir des vraies étapes de mon propre parcours et de celui de couples de la communauté CapVietnam.</p>
    </div>
    <div class="pk-grid">
      <div class="pk-card is-main">
        <span class="pk-tag">Guide principal</span>
        <div style="flex:1">
          <h3>Réussir son mariage franco-vietnamien &amp; visa</h3>
          <p>La feuille de route chronologique complète : CCAM, mariage civil UBND, transcription SCEC Nantes, visa VLS-TS conjoint (et le parcours inverse pour vivre au Vietnam). Budget détaillé, 9 fiches de cas particuliers (enfants nés avant le mariage, nationalité, contrat de mariage, couples de même sexe, etc.) et une check-list imprimable.</p>
        </div>
        <span class="pk-format mono">PDF · 45 PAGES</span>
      </div>
      <div class="pk-card">
        <span class="pk-tag">Modèles de lettres</span>
        <h3>8 lettres officielles prêtes à l'emploi</h3>
        <p>Motivation visa, attestation de vie commune, relance ambassade, dépôt CCAM, transcription, hébergement, procuration célibat, recours CRRV Nantes.</p>
      </div>
      <div class="pk-card">
        <span class="pk-tag">Check-list</span>
        <h3>Check-list imprimable, phase par phase</h3>
        <p>Cases à cocher pour chaque phase du parcours, en annexe du guide — pour ne jamais perdre le fil.</p>
      </div>
      <div class="pk-card">
        <span class="pk-tag">Adresses &amp; liens</span>
        <h3>Annuaire des administrations</h3>
        <p>Ambassade de Hanoï, Consulat d'HCMV, Cục Lãnh sự, centres TLScontact — et le point sur l'apostille Vietnam (Convention de La Haye, 11 septembre 2026).</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ LES 8 LETTRES ═══════ -->
<section class="section" id="lettres">
  <div class="wrap-narrow">
    <div class="section-head">
      <span class="eyebrow">Zoom</span>
      <h2>Les 8 modèles de lettres inclus</h2>
      <p>Chacune au format officiel attendu, à adapter à ta situation.</p>
    </div>
    <ul class="letters-list">
      <li>Lettre de motivation visa conjoint</li>
      <li>Attestation sur l'honneur de vie commune</li>
      <li>Lettre de relance à l'ambassade</li>
      <li>Lettre d'accompagnement dépôt CCAM</li>
      <li>Lettre d'accompagnement transcription</li>
      <li>Attestation d'hébergement</li>
      <li>Procuration pour certificat de célibat au Vietnam</li>
      <li>Recours en cas de refus de visa (CRRV Nantes)</li>
    </ul>
  </div>
</section>

<!-- ═══════ POUR QUI ═══════ -->
<section class="section alt-band" style="padding-block:64px">
  <div class="wrap pk-for-grid">
    <div class="section-head" style="margin-bottom:0">
      <span class="eyebrow">Avant d'acheter</span>
      <h2>Ce pack est pour toi si…</h2>
    </div>
    <ul class="pk-for">
      <li>Tu es Français(e) marié(e) ou sur le point de te marier avec un(e) Vietnamien(ne)</li>
      <li>Tu veux comprendre l'ordre exact des démarches avant de te lancer, plutôt qu'en cours de route</li>
      <li>Tu cherches des modèles de lettres au format officiel plutôt que de les rédiger de zéro</li>
      <li>Tu veux un document de référence à garder sous la main pendant tout le parcours (souvent 12 à 18 mois)</li>
    </ul>
  </div>
</section>

<!-- ═══════ AUTEUR ═══════ -->
<section class="section" style="padding-block:64px">
  <div class="wrap-narrow">
    <div class="author-band">
      <img src="<?= PROFILE_PHOTO ?>" alt="Anthony Bouillon">
      <div>
        <p class="mono" style="margin-bottom:.4rem">PAR ANTHONY — CAP VIETNAM</p>
        <p>Français installé au Vietnam et marié à une Vietnamienne, j'ai vécu ces démarches de l'intérieur. Ce pack rassemble ce que j'aurais aimé avoir dès le premier jour — et les questions les plus posées par la communauté CapVietnam sur ces sujets.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ ACHETER ═══════ -->
<section class="section" id="acheter">
  <div class="wrap">
    <div class="buy">
      <div class="buy-grid">
        <div>
          <span class="eyebrow gold">Obtenir le pack maintenant</span>
          <h2>Accès immédiat après paiement</h2>
          <ul>
            <li><strong>Guide PDF complet</strong> — 45 pages, à jour 2026</li>
            <li><strong>8 modèles de lettres officielles</strong> prêts à l'emploi</li>
            <li><strong>Check-list imprimable</strong> phase par phase</li>
            <li><strong>Accès à vie</strong>, retéléchargeable depuis ton email</li>
          </ul>
          <p style="margin-top:14px;font-size:.85rem;color:rgba(251,246,236,.7)">Paiement 100% sécurisé par Stripe. Une question avant d'acheter ? <a href="contact-capvietnam" style="color:rgba(251,246,236,.9);text-decoration:underline">Écris-moi</a>.</p>
        </div>
        <div class="buy-box">
          <div class="buy-price">9,99 <sup>€</sup></div>
          <p class="buy-price-note">Paiement unique · TTC</p>
          <form action="create-checkout-pack" method="POST">
            <button class="btn btn-hanoi" type="submit">🔒 Payer avec Stripe →</button>
          </form>
          <div class="secure">🔒 PAIEMENT SÉCURISÉ · 📧 LIVRAISON PAR EMAIL</div>
          <small>En payant, tu acceptes nos <a href="mentions-legales-capvietnam" style="color:rgba(251,246,236,.75)">mentions légales</a>. Usage personnel, non redistribuable.</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ FAQ ═══════ -->
<section class="section alt-band">
  <div class="wrap">
    <div class="section-head" style="margin-inline:auto;text-align:center">
      <span class="eyebrow" style="justify-content:center">Questions fréquentes</span>
      <h2>Avant de te décider</h2>
    </div>
    <div class="faq">
      <div class="faq-item">
        <h3>Comment je reçois le pack après paiement ?</h3>
        <p>Immédiatement après le paiement, tu es redirigé vers une page de téléchargement, et tu reçois aussi un email avec le lien direct vers le PDF. Aucune attente.</p>
      </div>
      <div class="faq-item">
        <h3>Le pack est-il valable pour un mariage prévu au Vietnam et en France ?</h3>
        <p>Oui, le guide couvre les deux parcours : mariage célébré au Vietnam puis transcrit en France, et mariage célébré en France puis reconnu au Vietnam (« ghi chú kết hôn »).</p>
      </div>
      <div class="faq-item">
        <h3>Est-ce que ça remplace un avocat ou un consultant en immigration ?</h3>
        <p>Non — c'est un guide pratique et des modèles de documents, pas un conseil juridique personnalisé. Pour un cas complexe (refus, situation particulière), le pack t'aide à comprendre le contexte mais ne remplace pas un professionnel du droit.</p>
      </div>
      <div class="faq-item">
        <h3>Je n'ai pas reçu l'email, que faire ?</h3>
        <p>Vérifie tes spams, puis <a href="contact-capvietnam" style="color:var(--shutter);font-weight:600">écris-moi</a> avec ton adresse email de paiement — je débloque ton accès manuellement sous 48h ouvrées.</p>
      </div>
    </div>
  </div>
</section>

</div><!-- /.pm-v2 -->

<?php include 'footer.php'; ?>
