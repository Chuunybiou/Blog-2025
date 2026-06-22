<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Guide complet — couple franco-vietnamien au Vietnam 2026';
$page_description = 'Mariage, visa, budget réel, travail en ligne, couple mixte — 42 articles + outils interactifs. Écrit par un Français vivant à Hanoï depuis 2025.';
$page_canonical   = SITE_URL . '/guide-cap-vietnam-2026';
$page_og_title    = 'Guide complet — S\'installer au Vietnam en couple franco-vietnamien';
$page_og_desc     = 'Visa TT, mariage franco-vietnamien, budget 2026, travail en ligne, couple mixte — tout ce que j\'ai appris en le vivant à Hanoï, réuni en un guide gratuit.';
$page_og_url      = SITE_URL . '/guide-cap-vietnam-2026';
$page_og_image    = SITE_URL . '/assets/img/mariage-franco-vietnamien-ceremonie.png';
$page_schema      = '{"@context":"https://schema.org","@type":"Article","headline":"Guide complet — couple franco-vietnamien au Vietnam 2026","description":"Mariage franco-vietnamien, visa TT, budget réel à Hanoï, travail en ligne, couple mixte. Guide pratique écrit par un Français installé au Vietnam.","datePublished":"2026-01-01","dateModified":"2026-06-22","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://blog-capvietnam.fr/a-propos-capvietnam"},"publisher":{"@type":"Organization","name":"Cap Vietnam","url":"https://blog-capvietnam.fr"},"image":"https://blog-capvietnam.fr/assets/img/mariage-franco-vietnamien-ceremonie.png","mainEntityOfPage":"https://blog-capvietnam.fr/guide-cap-vietnam-2026","inLanguage":"fr"}';

$page_extra_css = '
/* ── Hero ── */
.guide-hero{padding-top:64px;background:linear-gradient(160deg,#0d1829 0%,#1a2744 55%,#0d1829 100%);position:relative;overflow:hidden}
.guide-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 60% at 10% 90%,rgba(192,21,30,0.12),transparent 60%),radial-gradient(ellipse 50% 50% at 90% 10%,rgba(212,168,75,0.08),transparent 60%);pointer-events:none}
.guide-hero-inner{max-width:1100px;margin:0 auto;padding:4.5rem 2rem;display:grid;grid-template-columns:1.1fr 1fr;gap:4rem;align-items:center;position:relative;z-index:1}
.guide-hero-img img{width:100%;max-width:480px;border-radius:12px;box-shadow:-12px 16px 48px rgba(0,0,0,0.5);object-fit:cover;aspect-ratio:4/3}
.guide-badge{display:inline-block;background:rgba(212,168,75,0.15);color:#d4a84b;font-size:0.65rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;padding:5px 14px;border-radius:100px;margin-bottom:1.25rem;border:1px solid rgba(212,168,75,0.3)}
.guide-hero h1{font-family:"DM Serif Display",serif;font-size:clamp(1.8rem,3.2vw,2.7rem);color:#faf8f4;line-height:1.2;margin-bottom:1rem}
.guide-hero h1 em{color:#d4a84b;font-style:normal}
.guide-hero-sub{color:rgba(250,248,244,0.55);font-size:0.95rem;line-height:1.7;margin-bottom:0.75rem}
.guide-meta{color:rgba(250,248,244,0.35);font-size:0.78rem;margin-bottom:2rem}
.guide-hero-btns{display:flex;gap:0.875rem;flex-wrap:wrap}
.btn-primary-guide{display:inline-flex;align-items:center;gap:8px;padding:0.85rem 1.75rem;background:#d4a84b;color:#0d1829;font-weight:700;font-size:0.95rem;border-radius:6px;text-decoration:none;transition:all 0.2s}
.btn-primary-guide:hover{background:#c49535;transform:translateY(-2px)}
.btn-outline-guide{display:inline-flex;align-items:center;gap:8px;padding:0.85rem 1.75rem;background:transparent;color:#faf8f4;font-weight:600;font-size:0.95rem;border-radius:6px;border:1.5px solid rgba(250,248,244,0.25);text-decoration:none;transition:all 0.2s}
.btn-outline-guide:hover{border-color:rgba(250,248,244,0.5);background:rgba(255,255,255,0.05)}

/* ── Intro ── */
.guide-intro{max-width:760px;margin:0 auto;padding:3.5rem 2rem 1.5rem}
.guide-intro p{font-size:1.05rem;line-height:1.8;color:var(--ink)}

/* ── TOC ── */
.guide-toc{max-width:760px;margin:0 auto;padding:0 2rem 3.5rem}
.guide-toc-box{background:var(--warm-bg);border-radius:var(--radius);padding:1.75rem 2rem;border-left:4px solid #d4a84b}
.guide-toc-title{font-family:"DM Serif Display",serif;font-size:1rem;margin-bottom:1rem;color:var(--ink)}
.guide-toc ol{padding-left:1.25rem;margin:0}
.guide-toc ol li{padding:0.25rem 0;font-size:0.9rem}
.guide-toc ol li a{color:var(--jade);text-decoration:none;font-weight:500}
.guide-toc ol li a:hover{text-decoration:underline}

/* ── Guide sections ── */
.guide-section{max-width:1100px;margin:0 auto;padding:4rem 2rem}
.guide-section + .guide-section{padding-top:1rem}
.section-eyebrow{font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;color:var(--muted);margin-bottom:0.5rem}
.section-h2{font-family:"DM Serif Display",serif;font-size:1.85rem;margin-bottom:0.75rem}
.section-lead{color:var(--muted);font-size:0.97rem;line-height:1.7;max-width:760px;margin-bottom:2.5rem}
.section-h3{font-family:"DM Serif Display",serif;font-size:1.2rem;margin:2rem 0 1rem;color:var(--ink)}

/* ── Article link cards ── */
.article-cards{display:grid;grid-template-columns:repeat(auto-fill,minmax(280px,1fr));gap:1rem;margin-bottom:1.5rem}
.article-card{background:var(--white);border-radius:var(--radius);padding:1.25rem 1.4rem;box-shadow:var(--shadow-sm);border-left:3px solid var(--jade);text-decoration:none;display:flex;flex-direction:column;gap:0.4rem;transition:box-shadow 0.2s,transform 0.2s}
.article-card:hover{box-shadow:var(--shadow-md);transform:translateY(-2px)}
.article-card-tag{font-size:0.6rem;letter-spacing:2px;text-transform:uppercase;color:var(--muted);font-weight:600}
.article-card-title{font-family:"DM Serif Display",serif;font-size:0.97rem;color:var(--ink);line-height:1.35}
.article-card-desc{font-size:0.8rem;color:var(--muted);line-height:1.5}
.article-card-link{font-size:0.78rem;color:var(--jade);font-weight:600;margin-top:auto;padding-top:0.5rem}
.article-card.c-red{border-color:#c0151e}
.article-card.c-gold{border-color:#d4a84b}
.article-card.c-navy{border-color:#1a2744}

/* ── CTA encarts ── */
.guide-cta-encart{background:linear-gradient(135deg,#0d3d2b,#1a5c40);border-radius:var(--radius);padding:1.5rem 2rem;display:flex;align-items:center;gap:1.5rem;margin:2rem 0;flex-wrap:wrap}
.guide-cta-encart-icon{font-size:2.2rem;flex-shrink:0}
.guide-cta-encart h4{color:#faf8f4;font-family:"DM Serif Display",serif;font-size:1.05rem;margin-bottom:0.25rem}
.guide-cta-encart p{color:rgba(250,248,244,0.65);font-size:0.85rem;line-height:1.5;margin-bottom:0.75rem}
.guide-cta-encart a.btn{display:inline-block;padding:0.6rem 1.25rem;background:#d4a84b;color:#0d1829;border-radius:4px;font-weight:700;font-size:0.85rem;text-decoration:none}
.guide-cta-encart a.btn:hover{background:#c49535}

/* ── Tools section ── */
.guide-section-dark{background:linear-gradient(160deg,#0d1829,#1a2744);padding:4rem 2rem}
.guide-section-dark-inner{max-width:1100px;margin:0 auto}
.guide-section-dark .section-eyebrow{color:rgba(250,248,244,0.4)}
.guide-section-dark .section-h2{color:#faf8f4}
.guide-section-dark .section-lead{color:rgba(250,248,244,0.55)}
.tools-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(240px,1fr));gap:1.25rem;margin-top:2rem}
.tool-card{background:rgba(255,255,255,0.05);border:1px solid rgba(255,255,255,0.1);border-radius:var(--radius);padding:1.5rem;text-decoration:none;display:flex;flex-direction:column;gap:0.5rem;transition:background 0.2s,border-color 0.2s}
.tool-card:hover{background:rgba(255,255,255,0.09);border-color:rgba(212,168,75,0.4)}
.tool-card-icon{font-size:1.8rem;line-height:1}
.tool-card-title{font-family:"DM Serif Display",serif;font-size:1rem;color:#faf8f4}
.tool-card-desc{font-size:0.82rem;color:rgba(250,248,244,0.55);line-height:1.5}
.tool-card-badge{font-size:0.65rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:#d4a84b;margin-top:auto;padding-top:0.5rem}

/* ── Wise section ── */
.wise-upsell-section{background:linear-gradient(135deg,rgba(27,107,82,0.05),rgba(27,107,82,0.02));border-top:1px solid rgba(27,107,82,0.12);border-bottom:1px solid rgba(27,107,82,0.12);padding:3rem 2rem}
.wise-upsell-inner{max-width:860px;margin:0 auto;display:flex;gap:1.5rem;align-items:flex-start}
.wise-upsell-icon{font-size:2.5rem;flex-shrink:0;line-height:1;padding-top:4px}
.wise-upsell-label{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;color:var(--jade);font-weight:700;margin-bottom:0.4rem}
.wise-upsell-title{font-family:"DM Serif Display",serif;font-size:1.3rem;margin-bottom:0.5rem}
.wise-upsell-text{font-size:0.92rem;color:var(--muted);line-height:1.7;margin-bottom:1rem}
.wise-upsell-btn{display:inline-block;padding:0.65rem 1.4rem;background:var(--jade);color:#fff;border-radius:4px;font-weight:600;font-size:0.9rem;text-decoration:none;margin-right:1rem;transition:opacity 0.2s}
.wise-upsell-btn:hover{opacity:0.88}
.wise-upsell-note{font-size:0.75rem;color:var(--muted);font-style:italic}

/* ── FAQ ── */
.guide-faq{max-width:700px;margin:0 auto;padding:4rem 2rem}
.guide-faq h2{font-family:"DM Serif Display",serif;font-size:1.75rem;margin-bottom:2rem;text-align:center}

/* ── Responsive ── */
@media(max-width:900px){
  .guide-hero-inner{grid-template-columns:1fr;gap:2.5rem}
  .guide-hero-img{display:none}
  .guide-hero h1{font-size:1.8rem}
}
@media(max-width:640px){
  .guide-hero-btns{flex-direction:column}
  .btn-primary-guide,.btn-outline-guide{justify-content:center}
  .wise-upsell-inner{flex-direction:column}
}

/* ── FAQ accordion ── */
.guide-faq .faq-item{border:1px solid var(--border,#e5e2dc);border-radius:8px;margin-bottom:0.75rem;overflow:hidden;background:#fff}
.guide-faq .faq-question{width:100%;padding:1rem 1.25rem;background:none;border:none;text-align:left;font-family:inherit;font-size:1rem;font-weight:600;cursor:pointer;display:flex;justify-content:space-between;align-items:center;transition:background 0.2s}
.guide-faq .faq-question:hover{background:rgba(0,0,0,0.02)}
.guide-faq .faq-arrow{transition:transform 0.3s;font-size:0.8rem;color:#888}
.guide-faq .faq-item.open .faq-arrow{transform:rotate(180deg)}
.guide-faq .faq-answer{max-height:0;overflow:hidden;transition:max-height 0.35s ease,padding 0.35s;padding:0 1.25rem;font-size:0.95rem;color:#666;line-height:1.8}
.guide-faq .faq-item.open .faq-answer{max-height:500px;padding:0 1.25rem 1.25rem}

/* ── PDF téléchargement ── */
.guide-dl{max-width:700px;margin:0 auto;padding:0 2rem 3rem;text-align:center}
.guide-dl-box{background:var(--warm-bg,#f7f3ee);border:1px solid #e5e2dc;border-radius:10px;padding:1.75rem 2rem;display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;text-align:left}
.guide-dl-box .dl-icon{font-size:2.5rem;flex-shrink:0}
.guide-dl-box h3{font-family:"DM Serif Display",serif;font-size:1.1rem;margin-bottom:0.3rem}
.guide-dl-box p{font-size:0.87rem;color:#888;margin-bottom:0.75rem;line-height:1.5}
.guide-dl-btn{display:inline-flex;align-items:center;gap:8px;padding:0.6rem 1.3rem;background:#1a2744;color:#faf8f4;border-radius:5px;font-weight:700;font-size:0.87rem;text-decoration:none;transition:background 0.2s}
.guide-dl-btn:hover{background:#0d1829}
';

include 'header.php';
?>

<!-- ══════════════ HERO ══════════════ -->
<header class="guide-hero">
  <div class="guide-hero-inner">
    <div class="guide-hero-text">
      <div class="guide-badge">📖 Guide gratuit · 42 articles · Mis à jour 2026</div>
      <h1>Le guide complet pour vivre au Vietnam en <em>couple franco-vietnamien</em></h1>
      <p class="guide-hero-sub">Visa TT, mariage, budget réel à Hanoï, travail en ligne, belle-famille, couple mixte — tout ce que j'ai appris en le vivant, réuni en un seul endroit.</p>
      <p class="guide-meta">Par Anthony Bouillon · Français à Hanoï depuis 2025 · ~30 min de lecture</p>
      <div class="guide-hero-btns">
        <a href="#demarches-couple" class="btn-primary-guide">Lire le guide ↓</a>
        <a href="parcours-couple-franco-vietnamien" class="btn-outline-guide">🗺️ Parcours interactif</a>
      </div>
    </div>
    <div class="guide-hero-img">
      <img src="assets/img/mariage-franco-vietnamien-ceremonie.png" alt="Cérémonie de mariage franco-vietnamien" width="480" height="360" loading="eager">
    </div>
  </div>
</header>

<!-- ══════════════ INTRO ══════════════ -->
<div class="guide-intro">
  <p>Partir au Vietnam, se marier avec une Vietnamienne, faire venir sa conjointe en France ou s'installer à Hanoï : chacune de ces démarches est complexe, peu documentée en français, et pleine de mauvaises surprises si on ne sait pas où chercher. Ce guide regroupe tout ce que j'ai découvert — parfois à la dure — depuis mon arrivée à Hanoï en 2025, dans un couple franco-vietnamien.</p>
</div>

<!-- ══════════════ TABLE DES MATIÈRES ══════════════ -->
<div class="guide-toc">
  <div class="guide-toc-box">
    <p class="guide-toc-title">📋 Table des matières</p>
    <ol>
      <li><a href="#demarches-couple">Le couple franco-vietnamien : mariage et démarches</a></li>
      <li><a href="#installer-vietnam">S'installer au Vietnam : visa, logement, vie quotidienne</a></li>
      <li><a href="#finances-travail">Finances, banque et travail en ligne</a></li>
      <li><a href="#vie-couple-mixte">Vie de couple mixte : culture, langue, belle-famille</a></li>
      <li><a href="#outils-interactifs">Outils interactifs : simulateurs et calculateur</a></li>
    </ol>
  </div>
</div>

<!-- ══════════════ SECTION 1 — DÉMARCHES COUPLE ══════════════ -->
<section id="demarches-couple" class="guide-section">
  <div class="section-eyebrow">Partie 1</div>
  <h2 class="section-h2">Mariage franco-vietnamien et démarches administratives</h2>
  <p class="section-lead">Que tu veuilles te marier au Vietnam ou faire venir ta conjointe en France, les démarches sont longues, en plusieurs étapes, et souvent mal expliquées. Cette section regroupe tout le cluster de démarches — du certificat de capacité matrimoniale jusqu'à la carte de résident.</p>

  <h3 class="section-h3">Faire venir sa conjointe vietnamienne en France</h3>
  <div class="article-cards">
    <a href="faire-venir-conjointe-vietnamienne-france" class="article-card">
      <span class="article-card-tag">Guide complet</span>
      <span class="article-card-title">Faire venir sa conjointe vietnamienne en France — vue d'ensemble</span>
      <span class="article-card-desc">Le parcours complet : mariage au Vietnam, visa long séjour, titre de séjour. Délais réels et ordre des étapes.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="certificat-capacite-mariage-vietnam" class="article-card">
      <span class="article-card-tag">Étape 1</span>
      <span class="article-card-title">Le certificat de capacité matrimoniale (CCAM)</span>
      <span class="article-card-desc">Comment obtenir ce document indispensable auprès du consulat ou de l'ambassade de France au Vietnam.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="entretien-ambassade-france-vietnam-visa-conjoint" class="article-card">
      <span class="article-card-tag">Étape 2</span>
      <span class="article-card-title">L'entretien à l'ambassade de France — visa conjoint</span>
      <span class="article-card-desc">Ce qui se passe lors de l'entretien, les questions posées et comment s'y préparer.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="visa-long-sejour-conjoint-vietnamien-france" class="article-card">
      <span class="article-card-tag">Étape 3</span>
      <span class="article-card-title">Le visa long séjour pour conjointe vietnamienne</span>
      <span class="article-card-desc">Dossier, délais, documents requis et pièges courants pour le visa VLS-TS conjoint de Français.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="titre-sejour-vie-privee-familiale-conjoint-vietnamien" class="article-card">
      <span class="article-card-tag">Étape 4</span>
      <span class="article-card-title">Le titre de séjour « vie privée et familiale »</span>
      <span class="article-card-desc">Une fois en France, comment obtenir le premier titre de séjour et le renouveler.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="transcription-mariage-service-central-nantes" class="article-card">
      <span class="article-card-tag">Acte civil</span>
      <span class="article-card-title">Transcription du mariage au service central de Nantes</span>
      <span class="article-card-desc">Pourquoi Nantes, quel dossier envoyer, quel délai attendre pour que le mariage soit reconnu en France.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="visa-schengen-belle-famille-vietnamienne" class="article-card c-gold">
      <span class="article-card-tag">Bonus famille</span>
      <span class="article-card-title">Visa Schengen pour ta belle-famille vietnamienne</span>
      <span class="article-card-desc">Comment faire venir tes beaux-parents au Vietnam pour la cérémonie ou les vacances. Dossier et statistiques de refus.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
  </div>

  <div class="guide-cta-encart">
    <div class="guide-cta-encart-icon">📅</div>
    <div>
      <h4>Rétroplanning conjoint — outil interactif gratuit</h4>
      <p>Planifie les étapes du mariage et du visa en sens inverse à partir de ta date cible. Génère un PDF avec toutes tes deadlines.</p>
      <a href="simulateur-retroplanning-conjoint" class="btn">Lancer le simulateur →</a>
    </div>
  </div>

  <h3 class="section-h3">Se marier au Vietnam — les démarches côté France</h3>
  <div class="article-cards">
    <a href="se-marier-vietnamienne-demarches-france" class="article-card">
      <span class="article-card-tag">Mariage</span>
      <span class="article-card-title">Se marier avec une Vietnamienne : démarches côté France</span>
      <span class="article-card-desc">CCAM, mariage civil au Vietnam, transcription à Nantes — la vue d'ensemble des démarches françaises.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="prix-mariage-franco-vietnamien" class="article-card">
      <span class="article-card-tag">Budget</span>
      <span class="article-card-title">Le prix d'un mariage franco-vietnamien</span>
      <span class="article-card-desc">Coût réel d'un mariage au Vietnam : cérémonie, banquet, robe, cadeaux famille et frais administratifs.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
  </div>
</section>

<!-- ══════════════ SECTION 2 — S'INSTALLER AU VIETNAM ══════════════ -->
<section id="installer-vietnam" class="guide-section" style="padding-top:0">
  <div class="section-eyebrow">Partie 2</div>
  <h2 class="section-h2">S'installer au Vietnam : visa, logement et vie quotidienne</h2>
  <p class="section-lead">Visa de tourisme, visa TT pour séjour longue durée, appartement à Hanoï, SIM locale, assurance santé, permis de conduire — voici tout ce qu'il faut régler dans les premiers mois après l'arrivée.</p>

  <h3 class="section-h3">Visas et titre de séjour au Vietnam</h3>
  <div class="article-cards">
    <a href="visa-vietnam-francais-guide-2026" class="article-card">
      <span class="article-card-tag">Visa</span>
      <span class="article-card-title">Visa Vietnam pour un Français : le guide complet 2026</span>
      <span class="article-card-desc">Les 6 types de visa, l'e-visa en ligne, le visa TT pour les conjoints de Vietnamiens. Vrais coûts et délais.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="carte-residence-temporaire-vietnam" class="article-card">
      <span class="article-card-tag">Long séjour</span>
      <span class="article-card-title">La carte de résidence temporaire (TRC) au Vietnam</span>
      <span class="article-card-desc">Comment passer du visa TT à la carte de résidence temporaire : documents, dépôt, délai de traitement.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="quitter-france-expat-vietnam" class="article-card">
      <span class="article-card-tag">Départ</span>
      <span class="article-card-title">Quitter la France pour le Vietnam : démarches complètes</span>
      <span class="article-card-desc">Résiliation contrats, désinscription Sécu, impôts, banque — ce qu'il faut régler avant de partir.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="s-expatrier-vietnam-2026-guide-complet" class="article-card">
      <span class="article-card-tag">Expatriation</span>
      <span class="article-card-title">S'expatrier au Vietnam en 2026 — guide complet</span>
      <span class="article-card-desc">La checklist de l'installation : avant le départ, à l'arrivée, dans les 3 premiers mois.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
  </div>

  <h3 class="section-h3">Logement, transports et vie quotidienne</h3>
  <div class="article-cards">
    <a href="louer-appartement-hanoi-etranger" class="article-card c-navy">
      <span class="article-card-tag">Logement</span>
      <span class="article-card-title">Louer un appartement à Hanoï en tant qu'étranger</span>
      <span class="article-card-desc">Prix réels 2026 par quartier, contrat bilingue, charges, dépôt de garantie et pièges classiques à éviter.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="assurance-sante-vietnam-expat" class="article-card c-navy">
      <span class="article-card-tag">Santé</span>
      <span class="article-card-title">Assurance santé pour expatrié français au Vietnam</span>
      <span class="article-card-desc">Comparatif AXA, Cigna, Allianz et CFE. Laquelle choisir selon ton profil et ton budget.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="permis-conduire-vietnam" class="article-card c-navy">
      <span class="article-card-tag">Transport</span>
      <span class="article-card-title">Permis de conduire au Vietnam pour un Français</span>
      <span class="article-card-desc">Conversion du permis français, catégories de scooter, règles de circulation et réalité du trafic à Hanoï.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="adaptateur-prise-electrique-vietnam" class="article-card c-navy">
      <span class="article-card-tag">Pratique</span>
      <span class="article-card-title">Adaptateur prise électrique au Vietnam</span>
      <span class="article-card-desc">220 V comme en France, mais les prises Type A plates sont répandues dans les anciens appartements — voici quoi emporter.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="vol-paris-hanoi-pas-cher" class="article-card c-navy">
      <span class="article-card-tag">Vol</span>
      <span class="article-card-title">Trouver un vol Paris–Hanoï pas cher</span>
      <span class="article-card-desc">Meilleures périodes, compagnies, escales — comment réduire le coût du billet sans sacrifier le confort.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
  </div>

  <div class="guide-cta-encart">
    <div class="guide-cta-encart-icon">⏱️</div>
    <div>
      <h4>Rétroplanning installation Vietnam — outil interactif</h4>
      <p>Calcule le planning de ton installation à rebours depuis ta date d'arrivée : SIM, compte bancaire, logement, immatriculation, déclaration fiscale.</p>
      <a href="simulateur-installation-vietnam" class="btn">Voir le rétroplanning →</a>
    </div>
  </div>
</section>

<!-- ══════════════ SECTION 3 — FINANCES & TRAVAIL ══════════════ -->
<section id="finances-travail" class="guide-section" style="padding-top:0">
  <div class="section-eyebrow">Partie 3</div>
  <h2 class="section-h2">Budget réel, finances et travail en ligne depuis le Vietnam</h2>
  <p class="section-lead">Le coût de la vie à Hanoï est bas — mais les Français qui s'installent font souvent les mêmes erreurs : frais bancaires cachés, double imposition, mauvais statut pour travailler à distance. Voici les articles qui permettent d'éviter ça.</p>

  <div class="article-cards">
    <a href="budget-mensuel-hanoi-2026" class="article-card">
      <span class="article-card-tag">Budget</span>
      <span class="article-card-title">Budget mensuel à Hanoï en 2026 : ce que ça coûte vraiment</span>
      <span class="article-card-desc">Loyer, nourriture, transport, loisirs, santé — les chiffres réels d'un Français vivant à Hanoï, pas les estimations de site de relocation.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="compte-bancaire-vietnam-etranger" class="article-card">
      <span class="article-card-tag">Banque</span>
      <span class="article-card-title">Ouvrir un compte bancaire au Vietnam en tant qu'étranger</span>
      <span class="article-card-desc">Vietcombank, BIDV, Techcombank — laquelle choisir, quels documents apporter, comment s'en servir depuis la France.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="transferer-argent-vietnam-wise" class="article-card">
      <span class="article-card-tag">Transferts</span>
      <span class="article-card-title">Transférer de l'argent vers le Vietnam avec Wise</span>
      <span class="article-card-desc">Comparatif des frais Wise vs BNP, Société Générale et Western Union. Taux de change, délais, plafonds.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="fiscalite-expat-france-vietnam" class="article-card">
      <span class="article-card-tag">Fiscalité</span>
      <span class="article-card-title">Fiscalité pour les expatriés français au Vietnam</span>
      <span class="article-card-desc">Convention fiscale France–Vietnam, résidence fiscale, impôt sur le revenu au Vietnam — ce qui change quand on quitte la France.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="travailler-en-ligne-vietnam" class="article-card">
      <span class="article-card-tag">Travail</span>
      <span class="article-card-title">Travailler en ligne depuis le Vietnam</span>
      <span class="article-card-desc">Statut légal, clients français, outils indispensables, connexion internet, meilleurs endroits pour télétravailler.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="cafes-coworkings-hanoi" class="article-card">
      <span class="article-card-tag">Coworking</span>
      <span class="article-card-title">Cafés et coworkings à Hanoï : les meilleures adresses 2026</span>
      <span class="article-card-desc">Toong, Circo, Minna House, Leva Coffee — les espaces testés pour télétravailler à Hanoï avec une bonne connexion.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
  </div>

  <div class="guide-cta-encart">
    <div class="guide-cta-encart-icon">💰</div>
    <div>
      <h4>Calculateur de budget Vietnam — outil interactif</h4>
      <p>Estime ton budget mensuel selon ton profil (solo, couple, famille), ta ville et ton style de vie. Résultat instantané.</p>
      <a href="calculateur-budget-vietnam" class="btn">Calculer mon budget →</a>
    </div>
  </div>
</section>

<!-- ══════════════ WISE CTA ══════════════ -->
<section class="wise-upsell-section">
  <div class="wise-upsell-inner">
    <div class="wise-upsell-icon">💸</div>
    <div>
      <p class="wise-upsell-label">Outil indispensable pour vivre au Vietnam</p>
      <h3 class="wise-upsell-title">Wise — transferts EUR → VND sans commission cachée</h3>
      <p class="wise-upsell-text">Taux interbancaire, carte internationale pour les retraits au Vietnam, compte multi-devises. Ce que j'utilise depuis mon arrivée à Hanoï pour envoyer de l'argent entre la France et le Vietnam sans me faire plumer par les frais bancaires.</p>
      <a href="go.php?id=wise" class="wise-upsell-btn" rel="noopener sponsored">Ouvrir un compte Wise →</a>
      <span class="wise-upsell-note">Lien affilié — commission perçue si tu effectues un premier transfert.</span>
    </div>
  </div>
</section>

<!-- ══════════════ SECTION 4 — VIE DE COUPLE MIXTE ══════════════ -->
<section id="vie-couple-mixte" class="guide-section">
  <div class="section-eyebrow">Partie 4</div>
  <h2 class="section-h2">Vie de couple franco-vietnamien : culture, langue et belle-famille</h2>
  <p class="section-lead">Un couple franco-vietnamien, ça ne s'improvise pas. La belle-famille vietnamienne, les différences culturelles sur l'argent, la famille et la communication, apprendre quelques mots de vietnamien — ça change tout à la qualité de la relation.</p>

  <div class="article-cards">
    <a href="differences-culturelles-couple-franco-vietnamien" class="article-card c-red">
      <span class="article-card-tag">Couple</span>
      <span class="article-card-title">Différences culturelles en couple franco-vietnamien</span>
      <span class="article-card-desc">Argent, famille, communication, rôles — les vraies différences qui créent des frictions dans un couple mixte franco-vietnamien.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="belle-famille-vietnamienne-guide" class="article-card c-red">
      <span class="article-card-tag">Belle-famille</span>
      <span class="article-card-title">Belle-famille vietnamienne : guide de survie pour un Français</span>
      <span class="article-card-desc">Codes à respecter, cadeaux et tabous pour réussir ta première visite. Ce que la politesse vietnamienne attend de toi.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="apprendre-vietnamien-couple" class="article-card c-red">
      <span class="article-card-tag">Langue</span>
      <span class="article-card-title">Apprendre le vietnamien en couple</span>
      <span class="article-card-desc">Les mots qui changent tout avec la belle-famille, les méthodes qui marchent réellement, combien de temps il faut pour tenir une conversation basique.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="tet-nouvel-an-lunaire-vietnam" class="article-card c-red">
      <span class="article-card-tag">Culture</span>
      <span class="article-card-title">Le Tết — Nouvel An lunaire vietnamien</span>
      <span class="article-card-desc">Ce que signifie vraiment le Tết pour une famille vietnamienne, et comment un Français peut y participer sans gaffe.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="visiter-pagode-vietnam-regles" class="article-card c-red">
      <span class="article-card-tag">Culture</span>
      <span class="article-card-title">Visiter une pagode au Vietnam : règles et codes</span>
      <span class="article-card-desc">Comment se comporter dans un lieu de culte bouddhiste vietnamien : tenue, gestes, offrandes et choses à éviter absolument.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
    <a href="argent-couple-franco-vietnamien" class="article-card c-red">
      <span class="article-card-tag">Finances couple</span>
      <span class="article-card-title">Gérer l'argent en couple franco-vietnamien</span>
      <span class="article-card-desc">Compte joint, contributions inégales, attentes familiales — comment parler d'argent dans un couple mixte franco-vietnamien.</span>
      <span class="article-card-link">Lire l'article →</span>
    </a>
  </div>
</section>

<!-- ══════════════ SECTION 5 — OUTILS INTERACTIFS ══════════════ -->
<section id="outils-interactifs" class="guide-section-dark">
  <div class="guide-section-dark-inner">
    <div class="section-eyebrow">Partie 5</div>
    <h2 class="section-h2">Outils interactifs Cap Vietnam</h2>
    <p class="section-lead">Quatre outils gratuits pour planifier, calculer et prendre les bonnes décisions — sans avoir à lire des dizaines de pages.</p>
    <div class="tools-grid">
      <a href="parcours-couple-franco-vietnamien" class="tool-card">
        <span class="tool-card-icon">🗺️</span>
        <span class="tool-card-title">Parcours guidé franco-vietnamien</span>
        <span class="tool-card-desc">Réponds à 6 questions sur ta situation et obtiens un plan d'action personnalisé : mariage, visa, démarches dans le bon ordre.</span>
        <span class="tool-card-badge">Interactif · ~5 min</span>
      </a>
      <a href="simulateur-retroplanning-conjoint" class="tool-card">
        <span class="tool-card-icon">📅</span>
        <span class="tool-card-title">Rétroplanning — visa conjoint</span>
        <span class="tool-card-desc">Saisis ta date d'arrivée en France souhaitée, génère un calendrier inversé avec toutes les deadlines du dossier conjoint.</span>
        <span class="tool-card-badge">Interactif · PDF téléchargeable</span>
      </a>
      <a href="simulateur-installation-vietnam" class="tool-card">
        <span class="tool-card-icon">⏱️</span>
        <span class="tool-card-title">Rétroplanning — installation Vietnam</span>
        <span class="tool-card-desc">À partir de ta date d'arrivée à Hanoï ou HCMC, planifie les 90 premiers jours d'installation étape par étape.</span>
        <span class="tool-card-badge">Interactif · Personnalisable</span>
      </a>
      <a href="calculateur-budget-vietnam" class="tool-card">
        <span class="tool-card-icon">💰</span>
        <span class="tool-card-title">Calculateur de budget Vietnam</span>
        <span class="tool-card-desc">Estime ton budget mensuel par ville (Hanoï, HCMC, Da Nang) et par profil. Ajuste chaque poste selon ton mode de vie.</span>
        <span class="tool-card-badge">Interactif · Résultat immédiat</span>
      </a>
    </div>
  </div>
</section>

<!-- ══════════════ FAQ ══════════════ -->
<section class="guide-faq">
  <h2>Questions fréquentes</h2>
  <div class="faq-item">
    <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Ce guide est-il vraiment gratuit ? <span class="faq-arrow">▼</span></button>
    <div class="faq-answer">Oui, intégralement. Les 42 articles, les 4 outils interactifs et tous les guides de démarches sont accessibles gratuitement sur ce site, sans inscription.</div>
  </div>
  <div class="faq-item">
    <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Les démarches décrites s'appliquent à toute la France ou seulement à Hanoï ? <span class="faq-arrow">▼</span></button>
    <div class="faq-answer">Les démarches administratives (mariage, visa, titre de séjour, fiscalité) sont valables pour tout le Vietnam et toute la France. Les adresses pratiques (logement, coworkings, restaurants) concernent principalement Hanoï, mais les articles budget couvrent aussi HCMC et Da Nang.</div>
  </div>
  <div class="faq-item">
    <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Les informations sont-elles à jour en 2026 ? <span class="faq-arrow">▼</span></button>
    <div class="faq-answer">Oui. Tous les articles sont rédigés ou vérifiés en 2026, avec les tarifs, délais et procédures en vigueur. Certaines procédures administratives peuvent changer — si tu constates une info dépassée, tu peux me le signaler via la page contact.</div>
  </div>
  <div class="faq-item">
    <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Je suis la conjointe vietnamienne — ce guide est-il aussi pour moi ? <span class="faq-arrow">▼</span></button>
    <div class="faq-answer">Oui, et il existe aussi une version de certaines ressources en vietnamien sur le site. La page <a href="vi/">version vietnamienne</a> et l'outil <a href="vi/hanh-trinh-doi.html">Hành trình đôi</a> sont spécialement conçus pour les conjointes vietnamiennes qui souhaitent comprendre le parcours de leur côté.</div>
  </div>
</section>

<!-- ══════════════ PDF HORS-LIGNE ══════════════ -->
<div class="guide-dl">
  <div class="guide-dl-box">
    <div class="dl-icon">📄</div>
    <div>
      <h3>Version PDF — lire hors-ligne</h3>
      <p>Le guide complet en un seul fichier téléchargeable : mariage, visa, budget, travail en ligne, couple mixte. Mis à jour 2026.</p>
      <a href="/Guide_Se_marier_et_vivre_au_Vietnam-1.pdf" class="guide-dl-btn" download="Guide-Cap-Vietnam-2026.pdf">⬇️ Télécharger le PDF gratuit</a>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
