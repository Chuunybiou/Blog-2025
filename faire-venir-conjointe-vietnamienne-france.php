<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Faire venir son conjoint(e) vietnamien(ne) en France : guide complet 2026';
$page_description = 'Mariage, CCAM, visa long séjour, titre de séjour : toutes les étapes pour faire venir ton conjoint vietnamien en France. Procédures, délais et documents expliqués.';
$page_canonical   = SITE_URL . '/faire-venir-conjointe-vietnamienne-france';
$page_og_title    = 'Faire venir son conjoint vietnamien en France : le guide complet 2026';
$page_og_desc     = 'De la transcription du mariage à Nantes jusqu\'au titre de séjour en France : toutes les étapes détaillées pour un couple franco-vietnamien.';
$page_og_url      = SITE_URL . '/faire-venir-conjointe-vietnamienne-france';
$page_og_image    = 'https://images.unsplash.com/photo-1528360983277-13d401cdc186?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Faire venir son conjoint(e) vietnamien(ne) en France : guide complet 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/faire-venir-conjointe-vietnamienne-france',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Démarches Administratives',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'jade';
$article_hero_bg      = '#1a3a2a';
$article_glow         = 'rgba(27,107,82,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Démarches Admin';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'Combien de temps faut-il pour faire venir son conjoint vietnamien en France ?',
   'a' => 'Compte en moyenne 12 à 24 mois au total : quelques mois pour finaliser le mariage et les démarches au Vietnam, puis [À VÉRIFIER] mois de traitement du visa long séjour à l\'ambassade de France à Hanoï ou Hô Chi Minh-Ville.'],
  ['q' => 'Mon conjoint vietnamien doit-il parler français pour obtenir le visa ?',
   'a' => 'Non, mais lors de l\'entretien à l\'ambassade, les agents vérifient la réalité de la vie commune. Un niveau de français basique facilite l\'entretien mais n\'est pas obligatoire.'],
  ['q' => 'Faut-il obligatoirement se marier au Vietnam avant de demander le regroupement familial ?',
   'a' => 'Si vous êtes déjà mariés en France ou dans un pays tiers, la transcription du mariage reste nécessaire. Le PACS ne donne pas droit au visa conjoint de Français — seul le mariage le permet.'],
  ['q' => 'Quel est le coût total de la procédure ?',
   'a' => 'Difficile à chiffrer précisément car les tarifs changent. Prévois les frais de notaire au Vietnam, les droits de chancellerie à l\'ambassade ([À VÉRIFIER] €), les frais de la demande de visa ([À VÉRIFIER] €), et l\'OFII à l\'arrivée en France ([À VÉRIFIER] €).'],
  ['q' => 'Mon conjoint peut-il travailler en France avec un visa long séjour conjoint de Français ?',
   'a' => 'Oui. Le visa long séjour valant titre de séjour (VLS-TS) mention "vie privée et familiale" autorise l\'exercice d\'une activité professionnelle dès l\'arrivée en France.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Démarches Administratives</a><span class="breadcrumb-sep">›</span>
      <span>Faire venir son conjoint vietnamien</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Faire venir son conjoint(e) vietnamien(ne) en France : le guide complet 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Vue d'ensemble du parcours</a></li>
      <li><a href="#section-2">Étape 1 — Le mariage au Vietnam</a></li>
      <li><a href="#section-3">Étape 2 — Le CCAM et la transcription</a></li>
      <li><a href="#section-4">Étape 3 — Le visa long séjour</a></li>
      <li><a href="#section-5">Étape 4 — L'entretien à l'ambassade</a></li>
      <li><a href="#section-6">Étape 5 — L'arrivée en France</a></li>
      <li><a href="#section-7">Étape 6 — Le titre de séjour</a></li>
      <li><a href="#section-8">Faire venir la belle-famille</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">
    <p><strong>Tu es en couple avec un(e) Vietnamien(ne) et tu veux construire votre vie commune en France ?</strong> La procédure est longue, parfois frustrante, mais elle est bien balisée. J'ai moi-même traversé ce parcours avec ma femme originaire de Hanoï. Dans ce guide, je te donne la carte complète du chemin — des premières démarches au Vietnam jusqu'au titre de séjour en France.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1528360983277-13d401cdc186?w=1200&q=80" alt="Couple franco-vietnamien" width="1200" height="675" loading="lazy">

    <div class="tip-box">
      <strong>Ce guide est un pilier.</strong> Chaque étape a son propre article détaillé (lié dans chaque section). Lis d'abord cette vue d'ensemble, puis plonge dans les articles spécifiques pour les détails et les documents requis.
    </div>

    <h2 id="section-1">Vue d'ensemble du parcours</h2>
    <p>Faire venir son conjoint vietnamien en France nécessite de valider plusieurs étapes dans un ordre précis. On ne peut pas sauter d'étape — chaque document ouvre la porte à la suivante.</p>

    <table>
      <thead>
        <tr>
          <th>Étape</th>
          <th>Où</th>
          <th>Délai estimé</th>
          <th>Acteur principal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Mariage civil au comité populaire</td>
          <td>Vietnam</td>
          <td>1–3 mois</td>
          <td>Couple + mairie vietnamienne</td>
        </tr>
        <tr>
          <td>CCAM (certificat de coutume)</td>
          <td>Vietnam + ambassade</td>
          <td>[À VÉRIFIER] semaines</td>
          <td>Ambassade de France</td>
        </tr>
        <tr>
          <td>Transcription mariage (Nantes)</td>
          <td>France (à distance)</td>
          <td>[À VÉRIFIER] mois</td>
          <td>Service Central d'État Civil</td>
        </tr>
        <tr>
          <td>Demande visa long séjour</td>
          <td>Vietnam</td>
          <td>[À VÉRIFIER] mois</td>
          <td>Ambassade de France + VFS Global</td>
        </tr>
        <tr>
          <td>Entretien à l'ambassade</td>
          <td>Vietnam</td>
          <td>Inclus dans le délai visa</td>
          <td>Conjoint vietnamien</td>
        </tr>
        <tr>
          <td>Validation OFII à l'arrivée</td>
          <td>France</td>
          <td>Premiers jours</td>
          <td>OFII</td>
        </tr>
        <tr>
          <td>Demande titre de séjour</td>
          <td>France</td>
          <td>[À VÉRIFIER] mois</td>
          <td>Préfecture</td>
        </tr>
      </tbody>
    </table>

    <p>Durée totale réaliste : <strong>12 à 24 mois</strong> selon la rapidité de chaque administration et la qualité du dossier. La bonne nouvelle : une fois le visa obtenu, ton conjoint peut vivre et travailler légalement en France sans attendre le titre de séjour.</p>

    <h2 id="section-2">Étape 1 — Se marier au Vietnam : la procédure au comité populaire</h2>
    <p>Si vous n'êtes pas encore mariés, le mariage a lieu au comité populaire (UBND) du district de résidence de ton conjoint au Vietnam. En tant que Français, tu dois fournir un certificat de capacité matrimoniale délivré par l'ambassade de France à Hanoï ou Hô Chi Minh-Ville.</p>
    <ul>
      <li>Délai d'obtention du certificat de capacité matrimoniale : <strong>[À VÉRIFIER] semaines</strong></li>
      <li>La cérémonie civile au comité populaire est ensuite planifiée dans les semaines suivantes</li>
      <li>Tu dois être physiquement présent au Vietnam pour la cérémonie</li>
    </ul>
    <p>Attention : certains comités populaires locaux appliquent des règles additionnelles (entretien préalable, justificatifs de revenus, etc.). [À VÉRIFIER] selon la province.</p>

    <h2 id="section-3">Étape 2 — Le CCAM et la transcription à Nantes</h2>
    <p>Une fois marié(e) au Vietnam, deux démarches parallèles s'enchaînent :</p>

    <h3>Le CCAM (certificat de coutume et acte de mariage)</h3>
    <p>Le CCAM est le document qui permet à l'état civil français de reconnaître la validité de ton mariage vietnamien. Il est établi par un notaire vietnamien agréé et authentifié par l'ambassade de France. Sans lui, la transcription à Nantes est impossible.</p>
    <p><strong>→ Lire le guide complet :</strong> <a href="certificat-coutumier-acte-mariage-vietnam-ccam">Le CCAM : comment l'obtenir au Vietnam</a></p>

    <h3>La transcription à Nantes</h3>
    <p>Le Service Central d'État Civil (SCEC) de Nantes est le seul organisme habilité à transcrire les mariages célébrés à l'étranger dans les registres français. La demande se fait par courrier ou via ton consulat. Délai constaté : <strong>[À VÉRIFIER] mois</strong>.</p>
    <p><strong>→ Lire le guide complet :</strong> <a href="transcription-mariage-service-central-nantes">Transcription du mariage à Nantes : dossier et délais</a></p>

    <h2 id="section-4">Étape 3 — La demande de visa long séjour</h2>
    <p>Une fois le mariage transcrit (ou en parallèle selon les cas), ton conjoint peut déposer une demande de visa long séjour mention "vie privée et familiale" — catégorie "conjoint de Français". Ce visa est déposé au Vietnam, auprès de VFS Global mandaté par l'ambassade de France.</p>

    <div class="tip-box">
      <strong>VLS-TS ou visa court séjour ?</strong> Vise toujours le visa long séjour valant titre de séjour (VLS-TS). Il permet à ton conjoint de s'installer directement sans repasser par la préfecture dans les premiers mois.
    </div>

    <p>Documents clés attendus dans le dossier : extrait d'acte de mariage transcrit, justificatifs de ressources françaises, logement en France, photos d'identité, acte de naissance du conjoint traduit et apostillé [À VÉRIFIER liste complète].</p>
    <p><strong>→ Lire le guide complet :</strong> <a href="visa-long-sejour-conjoint-vietnamien-france">Visa long séjour conjoint de Français : dossier complet</a></p>

    <h2 id="section-5">Étape 4 — L'entretien à l'ambassade</h2>
    <p>Pour les visas d'installation (long séjour vie privée), l'ambassade de France convoque souvent le demandeur pour un entretien. Son objectif : s'assurer de la réalité de la vie commune et que le mariage n'est pas de convenance.</p>
    <p>Cet entretien n'est pas systématique mais reste fréquent pour les conjoints vietnamiens. Prépare ton conjoint avec des photos de votre vie commune, des preuves de communication régulière, et une bonne connaissance de ta situation personnelle en France.</p>
    <p><strong>→ Lire le guide complet :</strong> <a href="entretien-ambassade-france-vietnam-visa-conjoint">Entretien à l'ambassade : ce qu'il faut préparer</a></p>

    <h2 id="section-6">Étape 5 — L'arrivée en France et la validation OFII</h2>
    <p>Dès l'arrivée en France avec le VLS-TS, ton conjoint doit valider son visa auprès de l'OFII (Office Français de l'Immigration et de l'Intégration) dans un délai de <strong>[À VÉRIFIER] jours</strong> suivant l'entrée sur le territoire. Cette validation est obligatoire et payante (<strong>[À VÉRIFIER] €</strong>).</p>
    <p>La validation OFII déclenche aussi l'accès aux formations linguistiques et civiques du Contrat d'Intégration Républicaine (CIR) — obligatoires pour tout étranger nouvellement arrivé.</p>

    <h2 id="section-7">Étape 6 — La demande de titre de séjour</h2>
    <p>Si le VLS-TS mention "vie privée et familiale" a une durée de validité d'un an, il faut ensuite demander un titre de séjour en préfecture avant son expiration. La démarche se fait aujourd'hui en ligne sur le portail de l'ANEF (Administration Numérique pour les Étrangers en France).</p>
    <p>Le premier titre de séjour délivré est généralement une carte de séjour temporaire (1 an), puis après 3 ans de vie commune en France une carte de résident (10 ans) est possible.</p>
    <p><strong>→ Lire le guide complet :</strong> <a href="titre-sejour-vie-privee-familiale-conjoint-vietnamien">Titre de séjour vie privée et familiale : comment le demander</a></p>

    <h2 id="section-8">Faire venir la belle-famille vietnamienne en France</h2>
    <p>Une fois ton conjoint installé en France, vous voudrez peut-être inviter ses parents ou ses proches. Les Vietnamiens doivent obtenir un visa Schengen pour entrer en France, et le processus n'est pas simple — les taux de refus sont élevés.</p>
    <p>Pour maximiser les chances d'obtention, tu devras fournir une lettre d'invitation officielle, une attestation d'hébergement, et justifier de tes ressources en France. La demande de visa Schengen se dépose également via VFS Global au Vietnam.</p>
    <p><strong>→ Lire le guide complet :</strong> <a href="visa-schengen-belle-famille-vietnamienne">Visa Schengen pour la belle-famille vietnamienne : nos conseils</a></p>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="cta-newsletter">
      <h3>Reçois mes prochains articles</h3>
      <p>Un email par mois. Désabonnement en un clic.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a>.</p>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français expatrié à Hanoï. Je partage mon parcours d'installation au Vietnam : démarches, vie de couple mixte et travail en ligne.</p>
        <div class="author-links">
          <a href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">TikTok</a>
          <a href="a-propos-capvietnam">À propos</a>
        </div>
      </div>
    </div>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
require_once __DIR__ . '/config/site.php';
$current_slug = 'faire-venir-conjointe-vietnamienne-france';
$current_cat  = 'admin';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
