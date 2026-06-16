<?php
$page_title       = 'Calculateur de budget mensuel Vietnam 2026 — Cap Vietnam';
$page_description = 'Simule ton budget mensuel au Vietnam : logement, alimentation, transport, assurance. Résultat instantané en euros et en dong vietnamien, pour Hanoï ou HCMC.';
$page_canonical   = 'https://blog-capvietnam.fr/calculateur-budget-vietnam';
$page_og_title    = 'Calculateur de budget Vietnam 2026 — Hanoï & HCMC';
$page_og_desc     = 'Combien coûte la vie au Vietnam ? Configure ton style de vie et obtiens une estimation personnalisée en € et en ₫.';
$page_og_url      = 'https://blog-capvietnam.fr/calculateur-budget-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=1200&q=80';
$page_schema      = '{"@context":"https://schema.org","@type":"WebApplication","name":"Calculateur de budget mensuel Vietnam 2026","applicationCategory":"FinanceApplication","operatingSystem":"Web","url":"https://blog-capvietnam.fr/calculateur-budget-vietnam","description":"Simule ton budget mensuel au Vietnam selon ton style de vie, ta ville et tes habitudes.","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://blog-capvietnam.fr/a-propos"},"publisher":{"@type":"Organization","name":"Anthony Bouillon","logo":{"@type":"ImageObject","url":"https://blog-capvietnam.fr/logo-entreprise.png"}},"inLanguage":"fr","datePublished":"2026-04-26","dateModified":"2026-04-26"}';

$article_color   = 'amber';
$article_hero_bg = '#3a2800';
$article_glow    = 'rgba(184,134,11,0.15)';
$article_badge   = 'rgba(184,134,11,0.25)';
$article_badge_c = 'var(--amber-soft)';

$article_category     = 'Argent &amp; Travail';
$article_category_url = 'https://blog-capvietnam.fr/articles-capvietnam';

$page_faq = [
  ['q' => 'Ce calculateur est-il fiable pour planifier mon budget ?',
   'a' => 'Les valeurs sont basées sur les données réelles 2026 collectées auprès d\'expatriés à Hanoï et HCMC. C\'est une estimation — ton budget réel variera selon les négociations de loyer, ta consommation de climatisation et les fluctuations du taux EUR/VND. Compte une marge de ±15%.'],
  ['q' => 'Quel taux de change EUR/VND est utilisé ?',
   'a' => 'Le calculateur utilise le taux indicatif de 30 800 VND pour 1 euro (avril 2026). Le taux réel fluctue selon les marchés — utilise Wise pour convertir au taux interbancaire réel sans frais cachés.'],
  ['q' => 'Les voyages en France sont-ils inclus dans le calcul ?',
   'a' => 'Non. Les vols aller-retour France/Vietnam (800 à 1 200 € selon la saison) ne sont pas dans ce simulateur. À intégrer en dépense annuelle lissée sur 12 mois, soit environ 70 à 100 € supplémentaires par mois si tu rentres une fois par an.'],
];

include '_article-css.php';

$page_extra_css .= "
.calc-page{max-width:1040px;margin:0 auto;padding:3rem 2rem 4rem}
.calc-intro{font-size:1.05rem;color:#5a5248;margin-bottom:2.5rem;max-width:700px;line-height:1.8}
.calc-container{display:grid;grid-template-columns:1fr 300px;gap:2rem;align-items:start}
.calc-section{background:var(--white);border:1px solid var(--border);border-radius:12px;padding:1.5rem;margin-bottom:1rem}
.calc-section-title{font-size:0.95rem;font-weight:700;color:var(--ink);margin-bottom:1rem;display:flex;align-items:center;gap:0.4rem}
.calc-options{display:grid;grid-template-columns:1fr 1fr;gap:0.6rem}
.calc-options--3{grid-template-columns:1fr 1fr 1fr}
.calc-options--4{grid-template-columns:1fr 1fr 1fr 1fr}
.calc-opt{cursor:pointer;display:block}
.calc-opt input[type=radio]{display:none}
.calc-opt-inner{display:block;border:2px solid var(--border);border-radius:8px;padding:0.75rem 0.75rem;text-align:center;transition:all 0.15s;background:var(--cream)}
.calc-opt:hover .calc-opt-inner{border-color:var(--amber);background:rgba(184,134,11,0.04)}
.calc-opt input[type=radio]:checked + .calc-opt-inner{border-color:var(--amber);background:rgba(184,134,11,0.08)}
.calc-opt-name{display:block;font-size:0.88rem;font-weight:600;color:var(--ink);line-height:1.3}
.calc-opt-sub{display:block;font-size:0.72rem;color:var(--muted);margin-top:0.3rem;line-height:1.4}
.slider-wrap{display:flex;align-items:center;gap:0.75rem}
.slider-wrap input[type=range]{flex:1;height:5px;border-radius:3px;accent-color:var(--amber);cursor:pointer}
.slider-min,.slider-max{font-size:0.75rem;color:var(--muted);white-space:nowrap}
.calc-result-panel{position:sticky;top:90px}
.calc-result-box{background:var(--white);border:1px solid var(--border);border-radius:12px;padding:1.75rem 1.5rem;text-align:center;margin-bottom:1rem}
.calc-result-label{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;color:var(--muted);font-weight:600;margin-bottom:1rem}
.calc-result-vnd{font-family:'DM Serif Display',serif;font-size:2.1rem;color:var(--amber);line-height:1.1;margin-bottom:0.3rem}
.calc-result-eur{font-size:1.3rem;font-weight:700;color:var(--ink)}
.calc-result-rate{font-size:0.7rem;color:var(--muted);margin-top:0.75rem}
.calc-breakdown{background:var(--white);border:1px solid var(--border);border-radius:12px;padding:1.25rem 1.5rem;margin-bottom:1rem}
.calc-breakdown-title{font-size:0.62rem;letter-spacing:2.5px;text-transform:uppercase;color:var(--muted);font-weight:700;margin-bottom:0.75rem}
.calc-bd-row{display:flex;justify-content:space-between;align-items:center;font-size:0.83rem;padding:0.3rem 0;border-bottom:1px solid var(--border);color:#5a5248}
.calc-bd-row:last-child{border-bottom:none;font-weight:700;color:var(--ink);padding-top:0.5rem;margin-top:0.25rem}
.calc-bd-label{color:inherit}
.calc-bd-val{font-weight:600;color:var(--ink);white-space:nowrap}
.calc-bd-row:last-child .calc-bd-val{color:var(--amber)}
.calc-warning{font-size:0.73rem;color:var(--muted);text-align:center;line-height:1.5;padding:0 0.5rem}
.calc-faq-title{font-family:'DM Serif Display',serif;font-size:1.8rem;margin:3rem 0 1.25rem;color:var(--ink)}
.calc-section-note{font-size:0.78rem;color:var(--muted);margin-top:0.5rem;font-style:italic}
@media(max-width:800px){.calc-container{grid-template-columns:1fr}.calc-result-panel{position:static}.calc-options--4{grid-template-columns:1fr 1fr}.calc-options--3{grid-template-columns:1fr 1fr}}
@media(max-width:480px){.calc-options{grid-template-columns:1fr}.calc-options--3{grid-template-columns:1fr}.calc-options--4{grid-template-columns:1fr 1fr}}
";

include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Calculateur budget</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Calculateur de budget mensuel Vietnam 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Avril 2026</span>
      <span>⚡ Résultat instantané</span>
    </div>
  </div>
</header>

<div class="calc-page">

  <p class="calc-intro">Configure ton style de vie ci-dessous. Le résultat se met à jour instantanément — en euros et en dong vietnamien. Basé sur les données réelles 2026 d'expatriés français à Hanoï et HCMC.</p>

  <div class="calc-container">

    <!-- ── FORM ── -->
    <div class="calc-form">

      <!-- Ville -->
      <div class="calc-section">
        <div class="calc-section-title">📍 Ville</div>
        <div class="calc-options">
          <label class="calc-opt">
            <input type="radio" name="ville" value="hanoi" checked onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Hanoï</span>
              <span class="calc-opt-sub">Capitale du Nord — référence</span>
            </span>
          </label>
          <label class="calc-opt">
            <input type="radio" name="ville" value="hcmc" onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">HCMC / Saigon</span>
              <span class="calc-opt-sub">Sud — environ +15%</span>
            </span>
          </label>
        </div>
      </div>

      <!-- Logement -->
      <div class="calc-section">
        <div class="calc-section-title">🏠 Logement</div>
        <div class="calc-options calc-options--3">
          <label class="calc-opt">
            <input type="radio" name="loyer" value="studio" checked onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Studio résidentiel</span>
              <span class="calc-opt-sub">Hors centre<br>~6 M ₫</span>
            </span>
          </label>
          <label class="calc-opt">
            <input type="radio" name="loyer" value="studio-central" onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Studio central</span>
              <span class="calc-opt-sub">Ba Đình / Hoàn Kiếm<br>~12,3 M ₫</span>
            </span>
          </label>
          <label class="calc-opt">
            <input type="radio" name="loyer" value="t2-residentiel" onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">T2 hors centre</span>
              <span class="calc-opt-sub">Résidentiel calme<br>~9,5 M ₫</span>
            </span>
          </label>
          <label class="calc-opt">
            <input type="radio" name="loyer" value="t2-central" onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">T2 central</span>
              <span class="calc-opt-sub">Ba Đình / D1<br>~14 M ₫</span>
            </span>
          </label>
          <label class="calc-opt">
            <input type="radio" name="loyer" value="t3-central" onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">T3 centre</span>
              <span class="calc-opt-sub">Grand apt. haut de gamme<br>~22 M ₫</span>
            </span>
          </label>
        </div>
        <p class="calc-section-note">+ ~1,5 M ₫/mois de charges (électricité clim, eau, internet fibre) déjà inclus dans le calcul.</p>
      </div>

      <!-- Alimentation -->
      <div class="calc-section">
        <div class="calc-section-title">🍜 Alimentation — <span id="food-label">50% repas locaux</span></div>
        <div class="slider-wrap">
          <span class="slider-min">Tout occidental</span>
          <input type="range" id="food-slider" min="0" max="100" value="50" step="10" oninput="calculate()">
          <span class="slider-max">Tout local</span>
        </div>
        <p class="calc-section-note">Local : phở, cơm bình dân (30–80 k ₫/repas). Occidental : restaurants expats, cuisine importée (150–400 k ₫/repas).</p>
      </div>

      <!-- Transport -->
      <div class="calc-section">
        <div class="calc-section-title">🛵 Transport</div>
        <div class="calc-options calc-options--3">
          <label class="calc-opt">
            <input type="radio" name="transport" value="scooter" checked onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Scooter perso</span>
              <span class="calc-opt-sub">Carburant + entretien<br>~800 k ₫/mois</span>
            </span>
          </label>
          <label class="calc-opt">
            <input type="radio" name="transport" value="grab" onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Grab uniquement</span>
              <span class="calc-opt-sub">Confort, zéro stress<br>~2,5 M ₫/mois</span>
            </span>
          </label>
          <label class="calc-opt">
            <input type="radio" name="transport" value="voiture" onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Voiture</span>
              <span class="calc-opt-sub">Carburant + parking<br>~5 M ₫/mois</span>
            </span>
          </label>
        </div>
      </div>

      <!-- Assurance santé -->
      <div class="calc-section">
        <div class="calc-section-title">🏥 Assurance santé</div>
        <div class="calc-options calc-options--3">
          <label class="calc-opt">
            <input type="radio" name="assurance" value="basique" checked onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Basique locale</span>
              <span class="calc-opt-sub">Bảo Minh niveau 1<br>~500 k ₫/mois</span>
            </span>
          </label>
          <label class="calc-opt">
            <input type="radio" name="assurance" value="correcte" onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Correcte</span>
              <span class="calc-opt-sub">Bảo Việt Gold<br>~1,5 M ₫/mois</span>
            </span>
          </label>
          <label class="calc-opt">
            <input type="radio" name="assurance" value="internationale" onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Internationale</span>
              <span class="calc-opt-sub">CFE + complémentaire<br>~4 M ₫/mois</span>
            </span>
          </label>
        </div>
      </div>

      <!-- Loisirs -->
      <div class="calc-section">
        <div class="calc-section-title">🎉 Loisirs &amp; sorties</div>
        <div class="calc-options calc-options--3">
          <label class="calc-opt">
            <input type="radio" name="loisirs" value="minimal" onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Minimal</span>
              <span class="calc-opt-sub">Sorties rares, sédentaire<br>~1 M ₫/mois</span>
            </span>
          </label>
          <label class="calc-opt">
            <input type="radio" name="loisirs" value="normal" checked onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Normal</span>
              <span class="calc-opt-sub">Restos, bars, sport<br>~2,5 M ₫/mois</span>
            </span>
          </label>
          <label class="calc-opt">
            <input type="radio" name="loisirs" value="actif" onchange="calculate()">
            <span class="calc-opt-inner">
              <span class="calc-opt-name">Actif</span>
              <span class="calc-opt-sub">Voyages + activités<br>~5 M ₫/mois</span>
            </span>
          </label>
        </div>
      </div>

    </div><!-- /.calc-form -->

    <!-- ── RESULT PANEL ── -->
    <div class="calc-result-panel">

      <div class="calc-result-box">
        <div class="calc-result-label">Budget mensuel estimé</div>
        <div class="calc-result-vnd" id="result-vnd">—</div>
        <div class="calc-result-eur" id="result-eur">—</div>
        <div class="calc-result-rate">Taux indicatif : 1 € = 30 800 ₫</div>
      </div>

      <div class="calc-breakdown">
        <div class="calc-breakdown-title">Détail par poste</div>
        <div class="calc-bd-row">
          <span class="calc-bd-label">Loyer</span>
          <span class="calc-bd-val" id="bd-loyer">—</span>
        </div>
        <div class="calc-bd-row">
          <span class="calc-bd-label">Charges</span>
          <span class="calc-bd-val" id="bd-charges">—</span>
        </div>
        <div class="calc-bd-row">
          <span class="calc-bd-label">Alimentation</span>
          <span class="calc-bd-val" id="bd-food">—</span>
        </div>
        <div class="calc-bd-row">
          <span class="calc-bd-label">Transport</span>
          <span class="calc-bd-val" id="bd-transport">—</span>
        </div>
        <div class="calc-bd-row">
          <span class="calc-bd-label">Assurance santé</span>
          <span class="calc-bd-val" id="bd-assurance">—</span>
        </div>
        <div class="calc-bd-row">
          <span class="calc-bd-label">Loisirs</span>
          <span class="calc-bd-val" id="bd-loisirs">—</span>
        </div>
        <div class="calc-bd-row">
          <span class="calc-bd-label">Total</span>
          <span class="calc-bd-val" id="bd-total">—</span>
        </div>
      </div>

      <p class="calc-warning">⚠️ Hors voyages France/Vietnam (~80 €/mois lissés) et dépôt de garantie au premier loyer.</p>

    </div><!-- /.calc-result-panel -->

  </div><!-- /.calc-container -->

  <!-- ── WISE CTA ── -->
  <?php
  $aff_id    = 'wise';
  $aff_icon  = '💸';
  $aff_title = 'Gérer ce budget depuis la France avec Wise';
  $aff_text  = 'Garde tes économies en euros sur ton compte Wise, convertis en VND au taux interbancaire réel exactement quand tu en as besoin. Pas de frais cachés, pas de taux gonflé par ta banque traditionnelle. Idéal pour envoyer l\'argent du loyer ou les virements du quotidien.';
  $aff_cta   = 'Ouvrir Wise gratuitement';
  $aff_note  = 'Lien affilié — premier transfert offert. Aucun impact sur le service ni le prix pour toi.';
  $aff_theme = 'green';
  include '_affiliate-cta.php';
  ?>

  <!-- ── FAQ ── -->
  <h2 class="calc-faq-title" id="section-faq">Questions fréquentes</h2>

  <div class="faq-item">
    <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Ce calculateur est-il fiable pour planifier mon budget ? <span class="faq-arrow">▼</span></button>
    <div class="faq-answer">Les valeurs sont basées sur les données réelles 2026 collectées auprès d'expatriés à Hanoï et HCMC. C'est une estimation — ton budget réel variera selon les négociations de loyer, ta consommation de climatisation et les fluctuations du taux EUR/VND. Compte une marge de ±15%.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Quel taux de change EUR/VND est utilisé ? <span class="faq-arrow">▼</span></button>
    <div class="faq-answer">Le calculateur utilise le taux indicatif de 30 800 VND pour 1 euro (avril 2026). Le taux réel fluctue selon les marchés — utilise Wise pour convertir au taux interbancaire réel sans frais cachés.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Les voyages en France sont-ils inclus dans le calcul ? <span class="faq-arrow">▼</span></button>
    <div class="faq-answer">Non. Les vols aller-retour France/Vietnam (800 à 1 200 € selon la saison) ne sont pas dans ce simulateur. À intégrer en dépense annuelle lissée sur 12 mois, soit environ 70 à 100 € supplémentaires par mois si tu rentres une fois par an.</div>
  </div>

  <!-- ── ARTICLES LIÉS ── -->
  <div style="margin-top:3rem;padding-top:2rem;border-top:1px solid var(--border)">
    <div style="font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;color:var(--muted);margin-bottom:1rem;font-weight:600">Pour aller plus loin</div>
    <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem">
      <a href="budget-mensuel-hanoi-2026" style="display:block;padding:1.25rem;background:var(--white);border:1px solid var(--border);border-radius:8px;text-decoration:none;color:var(--ink);transition:box-shadow 0.2s" onmouseover="this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.boxShadow='none'">
        <div style="font-size:1.3rem;margin-bottom:0.4rem">💰</div>
        <div style="font-weight:600;font-size:0.9rem;margin-bottom:0.3rem">Budget détaillé à Hanoï 2026</div>
        <div style="font-size:0.8rem;color:var(--muted)">Chiffres réels mois par mois →</div>
      </a>
      <a href="budget-mensuel-hcmc-2026" style="display:block;padding:1.25rem;background:var(--white);border:1px solid var(--border);border-radius:8px;text-decoration:none;color:var(--ink);transition:box-shadow 0.2s" onmouseover="this.style.boxShadow='var(--shadow-md)'" onmouseout="this.style.boxShadow='none'">
        <div style="font-size:1.3rem;margin-bottom:0.4rem">🏙️</div>
        <div style="font-weight:600;font-size:0.9rem;margin-bottom:0.3rem">Budget détaillé à HCMC 2026</div>
        <div style="font-size:0.8rem;color:var(--muted)">Saigon vs Hanoï comparé →</div>
      </a>
    </div>
  </div>

</div><!-- /.calc-page -->

<script>
const EUR_RATE = 30800;

const LOYER = {
  'studio':         6000000,
  'studio-central':12300000,
  't2-residentiel': 9500000,
  't2-central':    14000000,
  't3-central':    22000000,
};
const TRANSPORT = {
  'scooter': 800000,
  'grab':   2500000,
  'voiture':5000000,
};
const ASSURANCE = {
  'basique':        500000,
  'correcte':      1500000,
  'internationale':4000000,
};
const LOISIRS = {
  'minimal':1000000,
  'normal': 2500000,
  'actif':  5000000,
};
const VILLE_MULT = { 'hanoi': 1.0, 'hcmc': 1.15 };

function radio(name) {
  const el = document.querySelector('input[name="' + name + '"]:checked');
  return el ? el.value : null;
}

function calcFood(pct) {
  return 12000000 - (pct / 100) * (12000000 - 3000000);
}

function fmt(n) {
  const m = n / 1000000;
  if (m >= 1) return (Math.round(m * 10) / 10).toLocaleString('fr-FR') + ' M ₫';
  return Math.round(n / 1000) + ' k ₫';
}

function calculate() {
  const ville  = radio('ville')     || 'hanoi';
  const loyer  = radio('loyer')     || 'studio';
  const trans  = radio('transport') || 'scooter';
  const assur  = radio('assurance') || 'basique';
  const lois   = radio('loisirs')   || 'normal';
  const pct    = parseInt(document.getElementById('food-slider').value);
  const mult   = VILLE_MULT[ville];

  const vLoyer  = LOYER[loyer] * mult;
  const vCharg  = 1500000;
  const vFood   = calcFood(pct) * mult;
  const vTrans  = TRANSPORT[trans] * mult;
  const vAssur  = ASSURANCE[assur];
  const vLois   = LOISIRS[lois] * mult;
  const total   = vLoyer + vCharg + vFood + vTrans + vAssur + vLois;
  const eur     = Math.round(total / EUR_RATE);

  document.getElementById('result-vnd').textContent  = fmt(total);
  document.getElementById('result-eur').textContent  = eur.toLocaleString('fr-FR') + ' €/mois';
  document.getElementById('bd-loyer').textContent    = fmt(vLoyer);
  document.getElementById('bd-charges').textContent  = fmt(vCharg);
  document.getElementById('bd-food').textContent     = fmt(vFood);
  document.getElementById('bd-transport').textContent = fmt(vTrans);
  document.getElementById('bd-assurance').textContent = fmt(vAssur);
  document.getElementById('bd-loisirs').textContent  = fmt(vLois);
  document.getElementById('bd-total').textContent    = eur.toLocaleString('fr-FR') + ' €';
  document.getElementById('food-label').textContent  = pct + '% repas locaux';
}

document.addEventListener('DOMContentLoaded', calculate);
</script>

<?php include '_article-js.php'; ?>

<?php
$current_slug = 'calculateur-budget-vietnam';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include 'footer.php'; ?>
