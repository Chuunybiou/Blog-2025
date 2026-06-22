<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Titre de séjour vie privée et familiale pour conjoint vietnamien : guide 2026';
$page_description = 'Comment demander le titre de séjour "vie privée et familiale" pour ton conjoint vietnamien en France ? Dossier ANEF, renouvellement et passage en carte de résident expliqués.';
$page_canonical   = SITE_URL . '/titre-sejour-vie-privee-familiale-conjoint-vietnamien';
$page_og_title    = 'Titre de séjour vie privée et familiale pour conjoint vietnamien : le guide 2026';
$page_og_desc     = 'Tout ce qu\'il faut savoir pour demander et renouveler le titre de séjour de ton conjoint vietnamien en France via l\'ANEF.';
$page_og_url      = SITE_URL . '/titre-sejour-vie-privee-familiale-conjoint-vietnamien';
$page_og_image    = 'https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Titre de séjour vie privée et familiale pour conjoint vietnamien : guide 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/titre-sejour-vie-privee-familiale-conjoint-vietnamien',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vivre ensemble : ici ou là-bas',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'terracotta';
$article_hero_bg      = '#3a1a0e';
$article_glow         = 'rgba(191,74,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Vivre ensemble';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vivre-ensemble';
$page_faq = [
  ['q' => 'Quand faut-il demander le titre de séjour après l\'arrivée en France ?',
   'a' => 'Si ton conjoint est arrivé avec un VLS-TS (visa long séjour valant titre de séjour), il doit le valider auprès de l\'OFII dans les 3 mois suivant l\'arrivée. La demande de renouvellement (titre de séjour) s\'effectue sur l\'ANEF entre 4 et 2 mois avant l\'expiration du VLS-TS.'],
  ['q' => 'Mon conjoint peut-il travailler pendant l\'attente du titre de séjour ?',
   'a' => 'Oui, si le VLS-TS est validé OFII et autorise l\'exercice d\'une activité professionnelle. Pendant l\'attente du renouvellement, le récépissé de demande vaut autorisation de séjour et souvent aussi de travail.'],
  ['q' => 'Après combien de temps peut-on demander la carte de résident (10 ans) ?',
   'a' => 'Après 3 ans de vie commune effective en France depuis le mariage, sous réserve de résidence régulière et d\'absence de condamnation grave.'],
  ['q' => 'Que se passe-t-il si la préfecture perd le dossier ou ne répond pas ?',
   'a' => 'Si la préfecture ne répond pas dans le délai légal de 4 mois après le dépôt, c\'est considéré comme un refus implicite. Tu peux déposer un recours auprès du tribunal administratif ou adresser un courrier recommandé à la préfecture pour relancer le traitement.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=vivre-ensemble">Vivre ensemble</a><span class="breadcrumb-sep">›</span>
      <a href="faire-venir-conjointe-vietnamienne-france">Conjoint vietnamien en France</a><span class="breadcrumb-sep">›</span>
      <span>Titre de séjour</span>
    </div>
    <span class="article-badge-hero">Vivre ensemble</span>
    <h1>Titre de séjour "vie privée et familiale" pour conjoint vietnamien en France</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 9 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">VLS-TS et validation OFII</a></li>
      <li><a href="#section-2">Premier titre de séjour (1 an)</a></li>
      <li><a href="#section-3">Le dossier à préparer</a></li>
      <li><a href="#section-4">Démarche en ligne via l'ANEF</a></li>
      <li><a href="#section-5">Le renouvellement</a></li>
      <li><a href="#section-6">La carte de résident (10 ans)</a></li>
      <li><a href="#section-7">Droits attachés au titre</a></li>
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
    <p><strong>Ton conjoint vietnamien vient d'arriver en France avec son visa long séjour.</strong> La grande aventure administrative continue — mais tu es presque au bout. Le titre de séjour "vie privée et familiale" est la pierre angulaire du séjour régulier en France. Ce guide t'explique la chronologie exacte, depuis la validation OFII jusqu'à la carte de résident 10 ans.</p>

    <p>Cet article fait partie du <a href="faire-venir-conjointe-vietnamienne-france">guide complet : faire venir son conjoint vietnamien en France</a>.</p>

    <h2 id="section-1">Étape 0 : validation du VLS-TS auprès de l'OFII</h2>
    <p>Si ton conjoint est entré en France avec un visa long séjour valant titre de séjour (VLS-TS), sa première obligation est de le faire valider par l'OFII (Office Français de l'Immigration et de l'Intégration) dans les <strong>3 mois</strong> suivant son arrivée.</p>
    <p>La validation se fait en ligne sur le site de l'OFII (ofii.fr). Ton conjoint devra payer la taxe <strong>OFII (250 €)</strong> et se présenter à une visite médicale (radiographie pulmonaire). Cette validation est <strong>obligatoire</strong> — sans elle, le visa n'est pas valide en France.</p>
    <p>La validation OFII déclenche également le Contrat d'Intégration Républicaine (CIR), qui prévoit des formations civiques et linguistiques obligatoires pour les nouveaux arrivants.</p>

    <h2 id="section-2">Premier titre de séjour : la carte "vie privée et familiale" 1 an</h2>
    <p>Le VLS-TS est valable pendant 1 an. Avant son expiration, ton conjoint doit déposer une demande de titre de séjour "vie privée et familiale" en préfecture. Ce titre est délivré pour une durée initiale d'un an, renouvelable.</p>
    <p>La condition principale : prouver la réalité de la vie commune avec le conjoint français. La préfecture peut demander des justificatifs de communauté de vie (bail commun, relevés bancaires communs, preuves de résidence commune).</p>

    <h2 id="section-3">Les documents à préparer</h2>

    <div style="overflow-x:auto;border-radius:10px;border:1px solid rgba(232,133,106,0.18);margin:1.5rem 0;">
    <table style="width:100%;border-collapse:collapse;font-size:0.9rem;">
      <thead>
        <tr style="background:rgba(191,74,42,0.22);">
          <th style="padding:0.7rem 1rem;text-align:left;color:#e8856a;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;width:48%;">DOCUMENT</th>
          <th style="padding:0.7rem 1rem;text-align:left;color:#e8856a;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">REMARQUE</th>
        </tr>
      </thead>
      <tbody>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Passeport du conjoint vietnamien avec le VLS-TS</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Original + copie de toutes les pages</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);background:rgba(255,255,255,0.02);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Attestation de validation OFII</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Obtenue lors de la visite médicale OFII</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Extrait d'acte de mariage transcrit (Nantes)</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Moins de 3 mois</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);background:rgba(255,255,255,0.02);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Justificatifs de vie commune</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">3 à 6 preuves de résidence commune (bail, factures, etc.)</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Justificatif de domicile</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Facture de moins de 3 mois au nom de l'un des époux</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);background:rgba(255,255,255,0.02);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">CNI ou passeport du conjoint français</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Copie</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">3 photos d'identité du conjoint vietnamien</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Format réglementaire</td>
        </tr>
        <tr>
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;background:rgba(255,255,255,0.02);">Timbre fiscal</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;background:rgba(255,255,255,0.02);">Montant affiché sur l'ANEF au moment du dépôt — achetable en ligne ou en tabac</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-4">La démarche en ligne via l'ANEF</h2>
    <p>Depuis 2022-2023, les demandes de titres de séjour se font en ligne sur le portail de l'ANEF (Administration Numérique pour les Étrangers en France : anef.interieur.gouv.fr). Le dépôt physique en préfecture n'est plus possible dans la majorité des cas.</p>
    <p>Ton conjoint crée un compte sur l'ANEF, remplit le formulaire en ligne et télécharge les pièces justificatives scannées. Un récépissé électronique lui est remis, qui prouve la régularité de son séjour pendant le traitement.</p>

    <div class="tip-box">
      <strong>Blocage sur l'ANEF ?</strong> Le portail est parfois saturé ou bugué. En cas d'impossibilité persistante de déposer en ligne, contacter directement la préfecture. Selon les préfectures, une attestation de dépôt peut être délivrée.
    </div>

    <h2 id="section-5">Le renouvellement du titre de séjour</h2>
    <p>Le titre de séjour "vie privée et familiale" est renouvelable chaque année. La demande de renouvellement doit être déposée sur l'ANEF <strong>entre 4 et 2 mois avant l'expiration</strong> du titre en cours.</p>
    <p>Pièces généralement demandées pour le renouvellement : mêmes pièces que pour le premier titre, plus les preuves de vie commune de l'année écoulée (relevés bancaires communs, bail, photos…).</p>

    <h2 id="section-6">La carte de résident 10 ans</h2>
    <p>Après <strong>3 ans</strong> de vie commune régulière en France avec un Français, ton conjoint peut demander une carte de résident longue durée valable 10 ans. Cette carte offre une sécurité de séjour bien plus importante.</p>
    <p>Conditions générales :</p>
    <ul>
      <li>3 ans de vie commune effective avec le conjoint français depuis le mariage</li>
      <li>Résidence régulière en France pendant cette période</li>
      <li>Absence de condamnation pénale grave</li>
      <li>Respect des principes de la République</li>
    </ul>
    <p>La <strong>déclaration de nationalité française</strong> est possible après <strong>4 ans de mariage</strong> avec un Français (Art. 21-2 du Code civil). La durée est portée à 5 ans si les époux n'ont pas résidé ensemble en France pendant au moins 3 ans depuis le mariage.</p>

    <h2 id="section-7">Droits attachés au titre de séjour</h2>
    <p>Le titre de séjour "vie privée et familiale" autorise :</p>
    <ul>
      <li>La résidence en France</li>
      <li>L'exercice d'une activité professionnelle salariée ou indépendante</li>
      <li>L'accès aux droits sociaux (sécurité sociale, CAF, Pôle Emploi)</li>
      <li>Les voyages dans l'espace Schengen dans les conditions habituelles</li>
    </ul>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="cta-newsletter">
      <h3>Reçois mes prochains articles</h3>
      <p>📥 <strong>Guide PDF + 3 modèles de lettres offerts</strong> dès l'inscription. Un email par mois, désinscription en 1 clic.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a> — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français marié à une Vietnamienne, installé à Hanoï. Je partage notre parcours : démarches administratives, mariage franco-vietnamien, vie de couple mixte.</p>
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
$current_slug = 'titre-sejour-vie-privee-familiale-conjoint-vietnamien';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
