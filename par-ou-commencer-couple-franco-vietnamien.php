<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Par où commencer ? Guide étape par étape pour les couples franco-vietnamiens';
$page_description = 'Rencontre, mariage, visa, enfants, retraite : toutes les étapes d\'un couple franco-vietnamien dans l\'ordre chronologique — avec les liens vers les guides détaillés.';
$page_canonical   = SITE_URL . '/par-ou-commencer-couple-franco-vietnamien';
$page_og_title    = 'Couple franco-vietnamien : par où commencer ? Les étapes dans l\'ordre';
$page_og_desc     = 'Un hub visuel et chronologique pour ne rien oublier : mariage, visa conjoint, scolarité, retraite. Tous les articles du blog organisés par étape de vie.';
$page_og_url      = SITE_URL . '/par-ou-commencer-couple-franco-vietnamien';
$page_og_image    = SITE_URL . '/assets/img/repas-lau-saumon-vietnam.jpg';
$page_noindex     = false;
include 'header.php';
?>

<style>
.hub-hero {
  background: linear-gradient(135deg, #0e2a20 0%, #1b6b52 100%);
  padding: 4rem 1.5rem 3rem;
  text-align: center;
  color: #f5f2ec;
}
.hub-hero h1 {
  font-size: clamp(1.7rem, 4vw, 2.6rem);
  font-weight: 700;
  color: #f5f2ec;
  margin: 0 auto 1rem;
  max-width: 700px;
  line-height: 1.25;
}
.hub-hero p {
  color: rgba(250,248,244,0.80);
  max-width: 560px;
  margin: 0 auto;
  font-size: 1.05rem;
  line-height: 1.7;
}
.hub-container {
  max-width: 860px;
  margin: 0 auto;
  padding: 3rem 1.25rem 4rem;
}
.hub-intro {
  background: var(--surface-alt, #f8f5f0);
  border-radius: 12px;
  padding: 1.25rem 1.5rem;
  margin-bottom: 2.5rem;
  font-size: 0.97rem;
  color: var(--text-muted, #666);
  border-left: 4px solid #1b6b52;
}
@media (prefers-color-scheme: dark) {
  .hub-intro { background: #1e2820; color: #b0b8b0; }
}
.hub-stage {
  margin-bottom: 2.75rem;
}
.hub-stage-header {
  display: flex;
  align-items: center;
  gap: 0.85rem;
  margin-bottom: 1rem;
}
.hub-stage-num {
  width: 2.4rem;
  height: 2.4rem;
  border-radius: 50%;
  background: #1b6b52;
  color: #fff;
  font-weight: 700;
  font-size: 1rem;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}
.hub-stage-title {
  font-size: 1.25rem;
  font-weight: 700;
  color: var(--text, #1a1a1a);
  margin: 0;
}
.hub-stage-subtitle {
  font-size: 0.88rem;
  color: var(--text-muted, #888);
  margin-top: 0.1rem;
}
@media (prefers-color-scheme: dark) {
  .hub-stage-title { color: #f0ede8; }
}
.hub-cards {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
  gap: 0.85rem;
}
.hub-card {
  display: block;
  background: #fff;
  border: 1.5px solid #e8e3db;
  border-radius: 10px;
  padding: 1rem 1.1rem;
  text-decoration: none;
  color: inherit;
  transition: border-color 0.18s, box-shadow 0.18s, transform 0.12s;
  position: relative;
}
.hub-card:hover {
  border-color: #1b6b52;
  box-shadow: 0 4px 16px rgba(27,107,82,0.13);
  transform: translateY(-2px);
  text-decoration: none;
}
.hub-card-emoji {
  font-size: 1.4rem;
  margin-bottom: 0.4rem;
  display: block;
}
.hub-card-title {
  font-size: 0.92rem;
  font-weight: 600;
  color: #1a1a1a;
  line-height: 1.35;
  margin-bottom: 0.25rem;
}
.hub-card-desc {
  font-size: 0.80rem;
  color: #888;
  line-height: 1.4;
}
.hub-card-arrow {
  position: absolute;
  right: 0.9rem;
  top: 50%;
  transform: translateY(-50%);
  color: #1b6b52;
  font-size: 0.85rem;
  opacity: 0;
  transition: opacity 0.15s;
}
.hub-card:hover .hub-card-arrow { opacity: 1; }
@media (prefers-color-scheme: dark) {
  .hub-card { background: #1a2520; border-color: #2a3a30; }
  .hub-card:hover { border-color: #4db890; box-shadow: 0 4px 16px rgba(77,184,144,0.13); }
  .hub-card-title { color: #f0ede8; }
  .hub-card-desc { color: #8aada0; }
}
.hub-divider {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0.25rem 0 0.5rem;
  color: #c8c0b0;
  font-size: 1.4rem;
}
.hub-cta {
  background: linear-gradient(135deg, #0e2a20 0%, #1b6b52 100%);
  border-radius: 14px;
  padding: 2rem 1.5rem;
  text-align: center;
  color: #f5f2ec;
  margin-top: 3rem;
}
.hub-cta h3 { color: #f5f2ec; margin: 0 0 0.5rem; }
.hub-cta p { color: rgba(250,248,244,0.80); margin: 0 0 1.25rem; font-size: 0.95rem; }
.hub-cta .cta-form { max-width: 380px; margin: 0 auto; }
.hub-cta .cta-form input[type="email"] {
  background: rgba(255,255,255,0.12);
  border: 1.5px solid rgba(255,255,255,0.25);
  color: #f5f2ec;
}
.hub-cta .cta-form input[type="email"]::placeholder { color: rgba(250,248,244,0.55); }
.hub-cta .cta-rgpd { font-size: 0.75rem; color: rgba(250,248,244,0.55); margin-top: 0.75rem; }
.hub-cta .cta-rgpd a { color: rgba(250,248,244,0.70); }
</style>

<div class="hub-hero">
  <div class="breadcrumb" style="justify-content:center;margin-bottom:1.25rem;">
    <a href="/" style="color:rgba(250,248,244,0.6)">Accueil</a>
    <span class="breadcrumb-sep" style="color:rgba(250,248,244,0.4)">›</span>
    <span style="color:rgba(250,248,244,0.9)">Par où commencer ?</span>
  </div>
  <h1>Couple franco-vietnamien : par où commencer ?</h1>
  <p>Toutes les étapes dans l'ordre — de la rencontre à la retraite — avec les guides détaillés pour chaque démarche.</p>
</div>

<div class="hub-container">
  <div class="hub-intro">
    Ce hub rassemble tous les articles du blog organisés par étape chronologique. Clique sur la carte qui correspond à ta situation pour accéder au guide complet. Si tu es au début de l'aventure, commence par l'étape 1.
  </div>

  <!-- ÉTAPE 1 -->
  <div class="hub-stage">
    <div class="hub-stage-header">
      <div class="hub-stage-num">1</div>
      <div>
        <div class="hub-stage-title">Comprendre et se préparer</div>
        <div class="hub-stage-subtitle">Avant le mariage — la relation, la culture, la communication</div>
      </div>
    </div>
    <div class="hub-cards">
      <a href="differences-culturelles" class="hub-card">
        <span class="hub-card-emoji">🌏</span>
        <div class="hub-card-title">Différences culturelles franco-vietnamiennes</div>
        <div class="hub-card-desc">Les vrais chocs culturels à anticiper en couple mixte</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="belle-famille-vietnamienne-guide" class="hub-card">
        <span class="hub-card-emoji">👨‍👩‍👧</span>
        <div class="hub-card-title">Gérer la belle-famille vietnamienne</div>
        <div class="hub-card-desc">Codes, attentes et comment trouver sa place</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="apprendre-vietnamien-couple" class="hub-card">
        <span class="hub-card-emoji">🗣️</span>
        <div class="hub-card-title">Apprendre le vietnamien en couple</div>
        <div class="hub-card-desc">Méthodes, ressources et conseils pratiques</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="argent-couple-franco-vietnamien" class="hub-card">
        <span class="hub-card-emoji">💰</span>
        <div class="hub-card-title">Gérer l'argent en couple franco-vietnamien</div>
        <div class="hub-card-desc">Compte joint, dépenses, famille étendue</div>
        <span class="hub-card-arrow">→</span>
      </a>
    </div>
  </div>

  <div class="hub-divider">↓</div>

  <!-- ÉTAPE 2 -->
  <div class="hub-stage">
    <div class="hub-stage-header">
      <div class="hub-stage-num">2</div>
      <div>
        <div class="hub-stage-title">Se marier</div>
        <div class="hub-stage-subtitle">CCAM, mariage au Vietnam ou en France, transcription</div>
      </div>
    </div>
    <div class="hub-cards">
      <a href="certificat-capacite-mariage-vietnam" class="hub-card">
        <span class="hub-card-emoji">📋</span>
        <div class="hub-card-title">Certificat de capacité à mariage (CCAM)</div>
        <div class="hub-card-desc">Le document clé pour se marier au Vietnam — documents, procédure</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="se-marier-vietnam-procedure-comite-populaire" class="hub-card">
        <span class="hub-card-emoji">🏛️</span>
        <div class="hub-card-title">Mariage au Vietnam (comité populaire)</div>
        <div class="hub-card-desc">Déroulé de la cérémonie officielle côté vietnamien</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="se-marier-vietnamienne-demarches-france" class="hub-card">
        <span class="hub-card-emoji">🇫🇷</span>
        <div class="hub-card-title">Se marier en France avec un(e) Vietnamien(ne)</div>
        <div class="hub-card-desc">Documents, mairie, procédure côté français</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="transcription-mariage-service-central-nantes" class="hub-card">
        <span class="hub-card-emoji">📬</span>
        <div class="hub-card-title">Transcription du mariage à Nantes (SCEC)</div>
        <div class="hub-card-desc">Rendre le mariage vietnamien officiel en France</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="prix-mariage-franco-vietnamien" class="hub-card">
        <span class="hub-card-emoji">💍</span>
        <div class="hub-card-title">Coût d'un mariage franco-vietnamien</div>
        <div class="hub-card-desc">Budget réel : cérémonie, dot, fête, démarches</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="apostille-vietnam-francais-2026" class="hub-card">
        <span class="hub-card-emoji">🔏</span>
        <div class="hub-card-title">Apostille au Vietnam dès sept. 2026</div>
        <div class="hub-card-desc">Ce qui change pour la légalisation de documents</div>
        <span class="hub-card-arrow">→</span>
      </a>
    </div>
  </div>

  <div class="hub-divider">↓</div>

  <!-- ÉTAPE 3 -->
  <div class="hub-stage">
    <div class="hub-stage-header">
      <div class="hub-stage-num">3</div>
      <div>
        <div class="hub-stage-title">Vivre ensemble — choisir où s'installer</div>
        <div class="hub-stage-subtitle">Visa, titre de séjour, logement, budget</div>
      </div>
    </div>

    <p style="font-size:0.9rem;color:var(--text-muted,#888);margin-bottom:0.85rem;font-style:italic;">→ Si vous vous installez au Vietnam</p>
    <div class="hub-cards" style="margin-bottom:1.25rem;">
      <a href="visa-vietnam-francais-guide-2026" class="hub-card">
        <span class="hub-card-emoji">✈️</span>
        <div class="hub-card-title">Visa Vietnam pour Français</div>
        <div class="hub-card-desc">E-visa 90 jours, visa TT, conditions d'entrée 2026</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="s-expatrier-vietnam-2026-guide-complet" class="hub-card">
        <span class="hub-card-emoji">🏠</span>
        <div class="hub-card-title">S'expatrier au Vietnam : guide complet</div>
        <div class="hub-card-desc">Logement, banque, santé, démarches à l'arrivée</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="louer-appartement-hanoi-etranger" class="hub-card">
        <span class="hub-card-emoji">🏢</span>
        <div class="hub-card-title">Louer un appartement à Hanoï</div>
        <div class="hub-card-desc">Quartiers, prix, contrat, pièges à éviter</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="budget-mensuel-hanoi-2026" class="hub-card">
        <span class="hub-card-emoji">📊</span>
        <div class="hub-card-title">Budget mensuel à Hanoï en 2026</div>
        <div class="hub-card-desc">Loyer, courses, transport, sorties — chiffres réels</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="carte-residence-temporaire-vietnam" class="hub-card">
        <span class="hub-card-emoji">🪪</span>
        <div class="hub-card-title">Carte de résidence temporaire (TRC)</div>
        <div class="hub-card-desc">Pour rester au Vietnam plus longtemps qu'un visa</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="checklist-depart-installer-vietnam" class="hub-card">
        <span class="hub-card-emoji">☑️</span>
        <div class="hub-card-title">Checklist départ — s'installer au Vietnam</div>
        <div class="hub-card-desc">Tout ce qu'il faut préparer avant de partir</div>
        <span class="hub-card-arrow">→</span>
      </a>
    </div>

    <p style="font-size:0.9rem;color:var(--text-muted,#888);margin-bottom:0.85rem;font-style:italic;">→ Si vous vous installez en France</p>
    <div class="hub-cards">
      <a href="visa-long-sejour-conjoint-vietnamien-france" class="hub-card">
        <span class="hub-card-emoji">📑</span>
        <div class="hub-card-title">Visa long séjour pour conjoint vietnamien</div>
        <div class="hub-card-desc">Visa VLS-TS conjoint — dossier, délais, entretien</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="faire-venir-conjointe-vietnamienne-france" class="hub-card">
        <span class="hub-card-emoji">🛫</span>
        <div class="hub-card-title">Faire venir son/sa conjoint(e) vietnamien(ne)</div>
        <div class="hub-card-desc">Guide pratique du visa de regroupement</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="titre-sejour-vie-privee-familiale-conjoint-vietnamien" class="hub-card">
        <span class="hub-card-emoji">🪪</span>
        <div class="hub-card-title">Titre de séjour (vie privée et familiale)</div>
        <div class="hub-card-desc">Dossier, préfecture, renouvellement</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="entretien-ambassade-france-vietnam-visa-conjoint" class="hub-card">
        <span class="hub-card-emoji">🎤</span>
        <div class="hub-card-title">L'entretien à l'ambassade de France</div>
        <div class="hub-card-desc">Préparer l'entretien de communauté de vie</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="associations-franco-vietnamiennes-france" class="hub-card">
        <span class="hub-card-emoji">🤝</span>
        <div class="hub-card-title">Associations franco-vietnamiennes en France</div>
        <div class="hub-card-desc">UGVF, AAFV — réseau et soutien à l'intégration</div>
        <span class="hub-card-arrow">→</span>
      </a>
    </div>
  </div>

  <div class="hub-divider">↓</div>

  <!-- ÉTAPE 4 -->
  <div class="hub-stage">
    <div class="hub-stage-header">
      <div class="hub-stage-num">4</div>
      <div>
        <div class="hub-stage-title">Avoir des enfants</div>
        <div class="hub-stage-subtitle">Grossesse, nationalité, scolarité</div>
      </div>
    </div>
    <div class="hub-cards">
      <a href="grossesse-vietnam-hopital-cout-demarches" class="hub-card">
        <span class="hub-card-emoji">🤰</span>
        <div class="hub-card-title">Grossesse au Vietnam : hôpitaux et coûts</div>
        <div class="hub-card-desc">HFH, Vinmec, FV Hospital — tarifs vérifiés 2026</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="enfant-couple-franco-vietnamien-nationalite" class="hub-card">
        <span class="hub-card-emoji">👶</span>
        <div class="hub-card-title">Nationalité de l'enfant franco-vietnamien</div>
        <div class="hub-card-desc">Double nationalité, déclaration au consulat, passeport</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="vivre-hanoi-avec-enfant-ecole-creche" class="hub-card">
        <span class="hub-card-emoji">🏫</span>
        <div class="hub-card-title">Vivre à Hanoï avec un enfant</div>
        <div class="hub-card-desc">LFAY, crèches bilingues, frais de scolarité 2026-2027</div>
        <span class="hub-card-arrow">→</span>
      </a>
    </div>
  </div>

  <div class="hub-divider">↓</div>

  <!-- ÉTAPE 5 -->
  <div class="hub-stage">
    <div class="hub-stage-header">
      <div class="hub-stage-num">5</div>
      <div>
        <div class="hub-stage-title">Long terme et retraite</div>
        <div class="hub-stage-subtitle">Immobilier, retraite, fiscal, protection sociale</div>
      </div>
    </div>
    <div class="hub-cards">
      <a href="achat-immobilier-vietnam-couple-mixte" class="hub-card">
        <span class="hub-card-emoji">🏡</span>
        <div class="hub-card-title">Acheter un bien immobilier au Vietnam</div>
        <div class="hub-card-desc">Ce qu'un Français peut (et ne peut pas) acheter</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="retraite-vietnam-francais" class="hub-card">
        <span class="hub-card-emoji">🌴</span>
        <div class="hub-card-title">Prendre sa retraite au Vietnam</div>
        <div class="hub-card-desc">Visa retraite, budget, santé, démarches côté français</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="residence-fiscale-france-vietnam-183-jours" class="hub-card">
        <span class="hub-card-emoji">🧾</span>
        <div class="hub-card-title">Résidence fiscale France / Vietnam</div>
        <div class="hub-card-desc">Règle des 183 jours, convention fiscale, impôts</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="protection-sociale-cfe-retraite-vietnam" class="hub-card">
        <span class="hub-card-emoji">🛡️</span>
        <div class="hub-card-title">CFE et protection sociale à l'étranger</div>
        <div class="hub-card-desc">Santé, retraite, chômage en tant qu'expat</div>
        <span class="hub-card-arrow">→</span>
      </a>
      <a href="pacs-vietnamienne-reconnaissance" class="hub-card">
        <span class="hub-card-emoji">📝</span>
        <div class="hub-card-title">PACS avec un(e) Vietnamien(ne)</div>
        <div class="hub-card-desc">Reconnaissance du PACS au Vietnam et droits associés</div>
        <span class="hub-card-arrow">→</span>
      </a>
    </div>
  </div>

  <!-- CTA Newsletter -->
  <div class="hub-cta">
    <h3>Reçois les prochains guides</h3>
    <p>📥 <strong>Guide PDF + 3 modèles de lettres offerts</strong> dès l'inscription. Un email par mois, pas de spam.</p>
    <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
      <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
      <input type="email" name="email" placeholder="Ton adresse email" required>
      <button type="submit">S'inscrire</button>
    </form>
    <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a>.</p>
  </div>
</div>

<?php include 'footer.php'; ?>
