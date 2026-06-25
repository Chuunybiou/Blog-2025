<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Naturalisation du conjoint vietnamien en France : conditions, dossier et délais (2026)';
$page_description = 'Après combien d\'années, quelles conditions, quels documents, quel niveau de français ? Guide complet pour la naturalisation du conjoint vietnamien par mariage avec un Français.';
$page_canonical   = SITE_URL . '/naturalisation-conjoint-vietnamien';
$page_og_title    = 'Naturalisation du conjoint vietnamien en France : guide 2026';
$page_og_desc     = 'Conditions, délais, niveau de français requis et constitution du dossier pour naturaliser son conjoint vietnamien après mariage avec un Français.';
$page_og_url      = $page_canonical;
$page_og_image    = 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Naturalisation du conjoint vietnamien en France : conditions, dossier et délais (2026)',
  'description'      => $page_description,
  'image'            => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80',
  'datePublished'    => '2026-06-22',
  'dateModified'     => '2026-06-22',
  'author'           => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'        => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage' => $page_canonical,
  'inLanguage'       => 'fr',
  'articleSection'   => 'Vivre ensemble',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color   = 'terracotta';
$article_hero_bg = '#3a1a0e';
$article_glow    = 'rgba(191,74,42,0.15)';
$article_badge   = 'rgba(191,74,42,0.25)';
$article_badge_c = '#e8856a';
$current_slug    = 'naturalisation-conjoint-vietnamien';
$current_cat     = 'vivre-ensemble';

$page_faq = [
  ['q' => 'Combien d\'années de mariage faut-il avant de demander la naturalisation ?',
   'a' => 'En règle générale, 4 ans de mariage avec un ressortissant français. Ce délai est réduit à 2 ans si le couple a résidé en France pendant toute la durée du mariage ET si le conjoint étranger justifie d\'une "intégration méritoire" (participation active à la vie associative, engagements bénévoles, distinction honorifique, etc.). Il n\'existe pas de voie "automatique" — la naturalisation est toujours accordée par décret à la discrétion du gouvernement.'],
  ['q' => 'Quel niveau de français est exigé pour la naturalisation ?',
   'a' => 'Un niveau B1 à l\'oral, évalué lors de l\'entretien d\'assimilation. Contrairement au renouvellement du titre de séjour (A2 pour la carte de résidence), la naturalisation exige le niveau B1 du Cadre européen commun de référence. Il n\'est pas obligatoire de présenter un diplôme : l\'agent évalue la capacité à s\'exprimer et à comprendre lors d\'une conversation. En pratique, les candidats qui parlent couramment le français au quotidien passent généralement cet entretien sans difficulté.'],
  ['q' => 'Que se passe-t-il si la demande est refusée ?',
   'a' => 'Un refus de naturalisation peut être contesté devant le Tribunal administratif dans un délai de 2 mois suivant la notification. Le refus doit être motivé. Les motifs les plus fréquents : niveau de français insuffisant, absence de preuves d\'intégration, mentions au casier judiciaire, ou ressources insuffisantes. Un refus ne signifie pas que la demande ne peut jamais aboutir — il est possible de représenter un nouveau dossier après avoir rempli les conditions manquantes.'],
  ['q' => 'La nationalité vietnamienne est-elle perdue lors de la naturalisation ?',
   'a' => 'En théorie, le droit vietnamien prévoit la perte de la nationalité lors de l\'acquisition d\'une nationalité étrangère. En pratique, de nombreux Vietnamiens naturalisés en France conservent leur passeport vietnamien pendant des années. Officiellement, la double nationalité n\'est pas reconnue par le Vietnam pour les nationaux qui s\'en vont, sauf exceptions (Viet kieu, etc.). Il vaut mieux consulter un avocat spécialisé avant la démarche si conserver la nationalité vietnamienne est important.'],
  ['q' => 'Peut-on demander la naturalisation sans avoir encore la carte de résidence ?',
   'a' => 'Oui. La naturalisation n\'exige pas d\'avoir la carte de résidence (10 ans) — elle exige une résidence régulière et continue en France pendant le délai requis. Les titres de séjour temporaires annuels successifs constituent une résidence régulière, à condition qu\'il n\'y ait pas eu de rupture de régularité (délai de renouvellement respecté, récépissé obtenu à chaque fois).'],
];

$page_extra_head = '
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Accueil","item":"' . SITE_URL . '"},{"@type":"ListItem","position":2,"name":"Vivre ensemble","item":"' . SITE_URL . '/articles-capvietnam"},{"@type":"ListItem","position":3,"name":"Naturalisation conjoint vietnamien"}]}</script>
';

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Vivre ensemble</a><span class="breadcrumb-sep">›</span>
      <span>Naturalisation conjoint vietnamien</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">📋 Démarches administratives</span>
    <h1>Naturalisation du conjoint vietnamien en France : conditions, dossier et délais (2026)</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 22 juin 2026</span>
      <span>⏱ 9 min de lecture</span>
      <span>Mis à jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Naturalisation par mariage : rappel</a></li>
      <li><a href="#section-2">Conditions à remplir</a></li>
      <li><a href="#section-3">Niveau de français requis</a></li>
      <li><a href="#section-4">Le dossier à constituer</a></li>
      <li><a href="#section-5">L'entretien d'assimilation</a></li>
      <li><a href="#section-6">Délais et décision</a></li>
      <li><a href="#section-7">Double nationalité et Vietnam</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" title="Facebook" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" title="LinkedIn" onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url='+encodeURIComponent(location.href))">in</a>
        <a class="share-btn" title="Copier le lien" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <article class="article-body">

    <p>La naturalisation est l'étape finale du parcours administratif d'un conjoint vietnamien en France — celle qui offre les droits les plus solides : passeport français, droit de vote, et une stabilité complète. Ce guide couvre les conditions, le dossier et les délais réalistes pour 2026.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80" alt="Paris — naturalisation du conjoint vietnamien en France" width="1200" height="675" loading="lazy">

    <div class="info-box">
      <strong>📋 Ce guide traite uniquement :</strong><br>
      ✅ La naturalisation par mariage avec un ressortissant français (article L. 21-2 du Code civil)<br>
      ✅ Les conditions, le dossier et l'entretien d'assimilation<br>
      ✅ La question de la double nationalité franco-vietnamienne<br>
      ❌ Ne couvre pas : la naturalisation par résidence simple (5 ans), l'acquisition par déclaration
    </div>

    <h2 id="section-1">Naturalisation par mariage : de quoi parle-t-on ?</h2>

    <p>En France, le conjoint étranger d'un(e) Français(e) peut demander la naturalisation après <strong>4 ans de mariage</strong> (délai réduit à 2 ans dans certains cas). La naturalisation n'est pas automatique — elle est accordée par décret du Premier ministre, après instruction par le ministère de l'Intérieur. Le mariage ouvre un droit à demander, pas un droit à obtenir.</p>

    <p>C'est une étape distincte de la carte de résidence (10 ans). On peut tout à fait être naturalisé sans avoir préalablement obtenu la carte de résidence — la naturalisation demande uniquement une résidence régulière et continue.</p>

    <div class="info-box">
      <strong>🔄 La progression classique :</strong><br>
      → VLS-TS → Titre de séjour temporaire (1 an, renouvelable) → Carte de résidence (10 ans, possible après 3 ans) → Naturalisation (possible après 4 ans de mariage)<br><br>
      <strong>Textes de référence :</strong> Articles L. 21-2, L. 21-4 et L. 23-7 du Code civil français
    </div>

    <h2 id="section-2">Les conditions à remplir</h2>

    <p>La naturalisation par mariage impose de remplir simultanément plusieurs conditions :</p>

    <table class="comparison-table">
      <thead><tr><th>Condition</th><th>Détail</th></tr></thead>
      <tbody>
        <tr><td><strong>Durée du mariage</strong></td><td>4 ans (ou 2 ans avec intégration méritoire prouvée)</td></tr>
        <tr><td><strong>Vie commune</strong></td><td>Le couple doit vivre ensemble — vie commune interrompue = délai remis à zéro</td></tr>
        <tr><td><strong>Résidence en France</strong></td><td>Résidence régulière et continue pendant le délai de 4 ans</td></tr>
        <tr><td><strong>Niveau de français</strong></td><td>B1 oral minimum (évalué à l'entretien)</td></tr>
        <tr><td><strong>Assimilation républicaine</strong></td><td>Connaissance des droits et devoirs en France (Constitution, valeurs de la République)</td></tr>
        <tr><td><strong>Casier judiciaire</strong></td><td>Vierge ou sans condamnations incompatibles (certaines condamnations peuvent bloquer)</td></tr>
        <tr><td><strong>Ressources</strong></td><td>Ressources "suffisantes" — pas de seuil fixe mais le foyer doit être en situation stable</td></tr>
      </tbody>
    </table>

    <p>La condition de "vie commune" est celle qui cause le plus de complications dans les couples franco-vietnamiens : si votre conjoint(e) a passé plusieurs mois au Vietnam (maladie familiale, naissance d'un enfant, etc.), cela peut relancer le délai ou créer une rupture que l'administration devra apprécier.</p>

    <h2 id="section-3">Le niveau de français requis</h2>

    <p>Le niveau B1 à l'oral est évalué lors d'un entretien d'assimilation. Contrairement au renouvellement du titre de séjour (A2 suffisant pour la carte de résidence), la naturalisation exige un niveau plus élevé.</p>

    <p><strong>Ce que cela signifie concrètement :</strong> pouvoir comprendre une conversation en français standard sur des sujets du quotidien, s'exprimer sans aide, raconter des événements, décrire des expériences, donner son avis. Les agents ne cherchent pas un français parfait — ils cherchent une communication fonctionnelle.</p>

    <div class="info-box">
      <strong>💡 Préparer le niveau B1 depuis le Vietnam :</strong><br>
      → Alliance Française de Hanoï ou Hô Chi Minh-Ville (cours de niveau, prépa DELF)<br>
      → Diplôme DELF B1 : valable et reconnu dans le dossier de naturalisation<br>
      → <a href="apprendre-vietnamien-couple">Ressources pour les couples franco-vietnamiens</a> (French + Vietnamese ensemble)
    </div>

    <h2 id="section-4">Le dossier à constituer</h2>

    <p>Le dossier de naturalisation est déposé en préfecture (ou sous-préfecture) selon le département de résidence. Il n'y a pas de dépôt en ligne centralisé pour cette démarche — tout se fait en personne ou par courrier recommandé selon les préfectures.</p>

    <p><strong>Documents principaux :</strong></p>
    <ul>
      <li>Formulaire cerfa n° 12753*05 (demande de naturalisation)</li>
      <li>Acte de naissance du demandeur (apostillé + traduit en français)</li>
      <li>Acte de mariage (copie intégrale, datant de moins de 3 mois)</li>
      <li>Justificatif de résidence régulière en France (titres de séjour successifs, récépissés)</li>
      <li>Pièce d'identité du conjoint français</li>
      <li>Justificatifs de ressources (3 dernières déclarations fiscales, bulletins de salaire)</li>
      <li>Extrait de casier judiciaire n° 3 (obtenu au Vietnam : lý lịch tư pháp)</li>
      <li>Preuves de vie commune (bail commun, relevés bancaires, CAF, impôts communs)</li>
      <li>Photos d'identité récentes (4 photos format identité)</li>
      <li>Si diplôme DELF/DALF disponible : y joindre la copie</li>
    </ul>

    <p>Certaines préfectures demandent des documents supplémentaires. Vérifiez toujours la liste exacte sur le site de votre préfecture avant de déposer.</p>

    <h2 id="section-5">L'entretien d'assimilation</h2>

    <p>Convoqué par la préfecture après dépôt du dossier, l'entretien dure généralement 30 à 45 minutes. Il est conduit par un agent préfectoral. L'objectif est double : évaluer le niveau de français et vérifier l'"assimilation républicaine".</p>

    <p><strong>Ce qui est abordé :</strong></p>
    <ul>
      <li>Questions sur le parcours personnel, la situation familiale, le travail</li>
      <li>Questions sur les droits et devoirs en France (droit de vote, laïcité, égalité hommes-femmes)</li>
      <li>Questions sur les institutions françaises (Parlement, Constitution, Président)</li>
      <li>Engagement sur les valeurs de la République</li>
    </ul>

    <p>Il n'y a pas de "test écrit" — tout est oral. La préparation recommandée : lire le <em>Guide du citoyen</em> disponible sur service-public.fr, et s'entraîner à parler du quotidien en français.</p>

    <h2 id="section-6">Délais et décision</h2>

    <p>Après dépôt du dossier complet et entretien, le délai de traitement est de <strong>12 à 24 mois</strong> en 2026. Ce délai est long — il inclut des enquêtes administratives (renseignements généraux, préfecture de police) avant que le dossier ne soit transmis au ministère.</p>

    <p>Trois issues possibles :</p>
    <ul>
      <li><strong>Décret de naturalisation</strong> : accordé — le demandeur devient français à la date du décret</li>
      <li><strong>Ajournement</strong> : délai supplémentaire imposé (souvent 2 ans) avant de pouvoir soumettre un nouveau dossier</li>
      <li><strong>Irrecevabilité</strong> : dossier incomplet ou conditions non remplies — peut être régularisé et redéposé</li>
    </ul>

    <p>Après le décret, une <strong>cérémonie d'accueil dans la citoyenneté française</strong> est organisée par la mairie — participation obligatoire dans les 6 mois.</p>

    <h2 id="section-7">Double nationalité et Vietnam</h2>

    <p>La France autorise la double nationalité sans restriction. Le Vietnam, en revanche, prévoit officiellement la perte de la nationalité vietnamienne lors de l'acquisition d'une autre nationalité (Loi sur la nationalité vietnamienne de 2008, art. 26).</p>

    <p>Dans la pratique, <strong>de nombreux Vietnamiens naturalisés conservent leur passeport vietnamien pendant des années</strong>, notamment les Viet kieu — cette situation est souvent tolérée mais reste techniquement irrégulière côté vietnamien. Si conserver la nationalité vietnamienne est crucial (héritage, propriété immobilière), consultez un avocat spécialisé avant de déposer la demande de naturalisation.</p>

    <div style="background:linear-gradient(135deg,#0d2b1f,#1b4a35);border-radius:10px;padding:1.5rem 2rem;margin:1.5rem 0;display:flex;align-items:center;justify-content:space-between;gap:1.5rem;flex-wrap:wrap">
      <div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:0.4rem">📅 Outil interactif</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.05rem;color:#faf8f4;margin-bottom:0.25rem">Rétroplanning — Mariage et titre de séjour conjoint</h3>
        <p style="font-size:0.87rem;color:rgba(250,248,244,0.55);margin:0">Calculez les délais de chaque étape depuis le mariage jusqu'à la carte de résidence</p>
      </div>
      <a href="retroplanning-faire-venir-conjoint" style="flex-shrink:0;display:inline-flex;align-items:center;gap:0.5rem;padding:0.7rem 1.4rem;background:#4db890;color:#0d2b1f;border-radius:5px;font-weight:700;font-size:0.87rem;text-decoration:none;white-space:nowrap">Voir le simulateur →</a>
    </div>

  </article>

</div>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
