<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Regroupement familial ou visa conjoint de Français : quelle différence ? (2026)';
$page_description = 'Regroupement familial et visa conjoint de Français sont deux procédures totalement différentes. Confusion fréquente pour les couples franco-vietnamiens — voici la vraie distinction.';
$page_canonical   = SITE_URL . '/regroupement-familial-vs-visa-conjoint';
$page_og_title    = 'Regroupement familial vs visa conjoint de Français : la vraie différence';
$page_og_desc     = 'Les deux procédures s\'adressent à des situations opposées. Laquelle s\'applique à votre couple franco-vietnamien ? Explication claire des conditions et des démarches.';
$page_og_url      = $page_canonical;
$page_og_image    = 'https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=1200&q=80';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Regroupement familial ou visa conjoint de Français : quelle différence ? (2026)',
  'description'      => $page_description,
  'image'            => 'https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=1200&q=80',
  'datePublished'    => '2026-06-22',
  'dateModified'     => '2026-06-22',
  'author'           => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'        => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage' => $page_canonical,
  'inLanguage'       => 'fr',
  'articleSection'   => 'Vivre ensemble',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color   = 'terracotta';
$article_hero_bg = '#1a1a3a';
$article_glow    = 'rgba(42,42,191,0.12)';
$article_badge   = 'rgba(42,42,191,0.2)';
$article_badge_c = '#8a8ae8';
$current_slug    = 'regroupement-familial-vs-visa-conjoint';
$current_cat     = 'vivre-ensemble';

$page_faq = [
  ['q' => 'Mon conjoint(e) vietnamien(ne) doit-il(elle) faire une demande de regroupement familial pour venir vivre en France ?',
   'a' => 'Non, si vous êtes français(e). Le regroupement familial est une procédure pour les étrangers résidant légalement en France qui souhaitent faire venir leur famille. Si vous êtes français(e) et que vous invitez votre conjoint(e) vietnamien(ne), la procédure est le visa de long séjour "conjoint de Français" (VLS-TS), délivré par l\'ambassade de France au Vietnam. Ces deux procédures sont entièrement séparées.'],
  ['q' => 'Quelles sont les conditions de ressources pour le visa conjoint de Français ?',
   'a' => 'Contrairement au regroupement familial, la procédure visa conjoint de Français n\'impose pas de seuil de ressources au conjoint français. Il n\'y a pas de conditions de logement ni de revenus minimum légalement fixés pour obtenir le VLS-TS conjoint. L\'ambassade vérifie la réalité du mariage et l\'intention de vie commune, pas les ressources du couple. Cette absence de condition de revenus est un avantage significatif par rapport au regroupement familial.'],
  ['q' => 'Y a-t-il un délai minimum entre le mariage et la demande de visa conjoint ?',
   'a' => 'Non. Le visa conjoint de Français peut être demandé dès la célébration du mariage — il n\'y a pas de délai d\'attente. En pratique, les délais de traitement du dossier à l\'ambassade (CCAM puis visa) prennent 3 à 6 mois. Il vaut donc mieux anticiper et commencer les démarches CCAM avant la date souhaitée d\'arrivée en France.'],
  ['q' => 'Le regroupement familial s\'applique-t-il si je suis étranger en France et que je veux faire venir mon conjoint vietnamien ?',
   'a' => 'Oui — c\'est exactement la situation pour laquelle le regroupement familial a été créé. Si vous êtes vous-même étranger (non français) en situation régulière en France depuis au moins 18 mois, vous pouvez demander le regroupement familial pour votre conjoint vietnamien. La démarche se fait auprès de l\'OFII, pas du consulat. Les conditions sont différentes : ressources minimum (SMIC), logement conforme, délais de 6 à 12 mois.'],
];

$page_extra_head = '
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Accueil","item":"' . SITE_URL . '"},{"@type":"ListItem","position":2,"name":"Vivre ensemble","item":"' . SITE_URL . '/articles-capvietnam"},{"@type":"ListItem","position":3,"name":"Regroupement familial vs visa conjoint"}]}</script>
';

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero" style="background:<?= $article_hero_bg ?>">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Vivre ensemble</a><span class="breadcrumb-sep">›</span>
      <span>Regroupement familial vs visa conjoint</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">📋 Démarches administratives</span>
    <h1>Regroupement familial ou visa conjoint de Français : laquelle s'applique à vous ?</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 22 juin 2026</span>
      <span>⏱ 7 min de lecture</span>
      <span>Mis à jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">La confusion la plus fréquente</a></li>
      <li><a href="#section-2">Visa conjoint de Français (VLS-TS)</a></li>
      <li><a href="#section-3">Regroupement familial</a></li>
      <li><a href="#section-4">Tableau comparatif</a></li>
      <li><a href="#section-5">Quelle procédure pour vous ?</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" title="Facebook" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" title="Copier le lien" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <article class="article-body">

    <p>Sur les forums et groupes Facebook franco-vietnamiens, la confusion entre "regroupement familial" et "visa conjoint de Français" revient constamment. Ces deux procédures portent sur la venue d'un conjoint étranger en France — mais elles ne s'adressent pas du tout aux mêmes situations. En faire l'amalgame peut coûter des mois de démarches inutiles.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=1200&q=80" alt="Démarches administratives — regroupement familial vs visa conjoint de Français" width="1200" height="675" loading="lazy">

    <h2 id="section-1">La confusion la plus fréquente</h2>

    <p>La confusion vient du fait que les deux procédures mènent au même résultat apparent : le conjoint étranger arrive en France et y obtient un titre de séjour. Mais l'initiateur de la démarche n'est pas le même :</p>

    <div class="info-box">
      <strong>La règle simple :</strong><br><br>
      ✅ <strong>Visa conjoint de Français</strong> → Vous êtes <strong>français(e)</strong>. Votre conjoint(e) vietnamien(ne) demande un visa à l'ambassade de France au Vietnam.<br><br>
      ✅ <strong>Regroupement familial</strong> → Vous êtes <strong>étranger(e)</strong> en séjour régulier en France. Vous demandez à l'OFII de faire venir votre famille.
    </div>

    <p>Si vous êtes français(e) et que vous invitez votre conjoint(e) vietnamien(ne) à vous rejoindre en France, <strong>le regroupement familial ne vous concerne pas</strong>. C'est une procédure qui n'existe pas pour les Français.</p>

    <h2 id="section-2">Le visa conjoint de Français (VLS-TS) — pour les couples franco-vietnamiens</h2>

    <p>C'est la procédure qui s'applique dans l'immense majorité des cas pour ce blog : un(e) Français(e) marié(e) à une ressortissante vietnamienne qui souhaite venir vivre en France.</p>

    <p><strong>Comment ça marche :</strong></p>
    <ol>
      <li>Le mariage est célébré au Vietnam (après obtention du CCAM)</li>
      <li>Votre conjoint(e) dépose une demande de visa long séjour valant titre de séjour (VLS-TS) à l'ambassade de France à Hanoï ou à Hô Chi Minh-Ville</li>
      <li>À l'arrivée en France, le VLS-TS doit être validé par l'OFII (dans les 3 mois)</li>
      <li>Après validation OFII : premier titre de séjour "vie privée et familiale" (1 an, renouvelable)</li>
    </ol>

    <p><strong>Ce qui est vérifié :</strong> la réalité du mariage, l'intention de vie commune, l'absence de menace à l'ordre public. Pas de condition de ressources ni de logement imposée par la loi.</p>

    <div class="info-box">
      <strong>📌 Pour aller plus loin :</strong> Notre guide complet sur <a href="se-marier-vietnamienne-demarches-france">le mariage avec une Vietnamienne et les démarches administratives</a>, et le guide <a href="entretien-ambassade-france-vietnam-visa-conjoint">entretien à l'ambassade pour le visa conjoint</a>.
    </div>

    <h2 id="section-3">Le regroupement familial — pour les étrangers en France</h2>

    <p>Le regroupement familial (CESEDA, art. L. 411-1 à L. 411-7) est une procédure pour un <strong>étranger</strong> résidant légalement en France qui souhaite faire venir son conjoint et ses enfants. L'initiateur est un étranger déjà installé en France, pas un Français.</p>

    <p><strong>Les conditions sont nettement plus strictes :</strong></p>
    <ul>
      <li>Être en séjour régulier en France depuis <strong>au moins 18 mois</strong></li>
      <li>Disposer de ressources stables au niveau du SMIC (environ 1 400 € nets/mois en 2026)</li>
      <li>Avoir un <strong>logement conforme</strong> (surface minimale selon la composition de la famille)</li>
      <li>Ne pas percevoir certaines aides sociales</li>
      <li>Le conjoint étranger doit avoir moins de 65 ans</li>
    </ul>

    <p>La demande est déposée auprès de l'OFII, pas du consulat. Le délai de traitement est généralement de 6 à 12 mois. En cas d'accord, le conjoint reçoit un visa puis un titre de séjour à son arrivée en France.</p>

    <h2 id="section-4">Tableau comparatif</h2>

    <table class="comparison-table">
      <thead>
        <tr>
          <th></th>
          <th>Visa conjoint de Français</th>
          <th>Regroupement familial</th>
        </tr>
      </thead>
      <tbody>
        <tr><td><strong>Qui initie ?</strong></td><td>Le conjoint français (en France ou à l'étranger)</td><td>Un étranger résidant en France</td></tr>
        <tr><td><strong>Où déposer ?</strong></td><td>Ambassade de France au Vietnam</td><td>OFII (dossier à l'antenne locale)</td></tr>
        <tr><td><strong>Conditions de ressources</strong></td><td>Aucune fixée par la loi</td><td>Minimum SMIC</td></tr>
        <tr><td><strong>Conditions de logement</strong></td><td>Aucune fixée par la loi</td><td>Surface conforme obligatoire</td></tr>
        <tr><td><strong>Délai minimum</strong></td><td>Aucun (peut demander dès le mariage)</td><td>18 mois de séjour en France</td></tr>
        <tr><td><strong>Durée de traitement</strong></td><td>3 à 6 mois</td><td>6 à 12 mois</td></tr>
        <tr><td><strong>Résultat</strong></td><td>VLS-TS → carte séjour 1 an</td><td>Visa → carte séjour 1 an</td></tr>
      </tbody>
    </table>

    <h2 id="section-5">Quelle procédure s'applique à vous ?</h2>

    <p>Pour les lecteurs de ce blog, c'est presque toujours le visa conjoint de Français. Voici les cas :</p>

    <ul>
      <li><strong>Vous êtes Français(e) marié(e) à une Vietnamien(ne) :</strong> visa conjoint de Français via l'ambassade.</li>
      <li><strong>Vous êtes étranger(e) non-français résidant en France, marié(e) à un(e) Vietnamien(ne) :</strong> regroupement familial si vos ressources et logement sont conformes.</li>
      <li><strong>Vous êtes Français(e) et vous vivez actuellement au Vietnam :</strong> votre conjoint(e) peut quand même demander le visa conjoint de Français à l'ambassade — il n'est pas obligatoire que vous résidiez en France.</li>
    </ul>

    <div style="background:linear-gradient(135deg,#0d2b1f,#1b4a35);border-radius:10px;padding:1.5rem 2rem;margin:1.5rem 0;display:flex;align-items:center;justify-content:space-between;gap:1.5rem;flex-wrap:wrap">
      <div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:0.4rem">📅 Outil interactif</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.05rem;color:#faf8f4;margin-bottom:0.25rem">Rétroplanning — Mariage et visa conjoint</h3>
        <p style="font-size:0.87rem;color:rgba(250,248,244,0.55);margin:0">Calculez les délais de chaque étape depuis la demande de CCAM jusqu'à l'arrivée en France</p>
      </div>
      <a href="simulateur-retroplanning-conjoint" style="flex-shrink:0;display:inline-flex;align-items:center;gap:0.5rem;padding:0.7rem 1.4rem;background:#4db890;color:#0d2b1f;border-radius:5px;font-weight:700;font-size:0.87rem;text-decoration:none;white-space:nowrap">Voir le simulateur →</a>
    </div>

  </article>

</div>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
