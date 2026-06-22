<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Acheter un bien immobilier au Vietnam en couple franco-vietnamien (2026)';
$page_description = 'Loi vietnamienne sur l\'immobilier pour les étrangers : ce qui est interdit, ce qui est possible en couple mixte, les risques réels et les stratégies pour sécuriser son investissement.';
$page_canonical   = SITE_URL . '/achat-immobilier-vietnam-couple-mixte';
$page_og_title    = 'Acheter au Vietnam en couple franco-vietnamien : ce que la loi dit vraiment (2026)';
$page_og_desc     = 'Droit d\'usage 50 ans, achat au nom du conjoint vietnamien, risques en cas de divorce ou décès — tout ce qu\'un couple franco-vietnamien doit savoir avant d\'acheter au Vietnam.';
$page_og_url      = $page_canonical;
$page_og_image    = 'https://images.unsplash.com/photo-1583417267826-aebc4d1542e1?w=1200&q=80';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Acheter un bien immobilier au Vietnam en couple franco-vietnamien (2026)',
  'description'      => $page_description,
  'image'            => 'https://images.unsplash.com/photo-1583417267826-aebc4d1542e1?w=1200&q=80',
  'datePublished'    => '2026-06-22',
  'dateModified'     => '2026-06-22',
  'author'           => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'        => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage' => $page_canonical,
  'inLanguage'       => 'fr',
  'articleSection'   => 'Vivre au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color   = 'forest';
$article_hero_bg = '#0d2b1f';
$article_glow    = 'rgba(27,74,53,0.2)';
$article_badge   = 'rgba(27,106,75,0.25)';
$article_badge_c = '#6ee7b7';
$current_slug    = 'achat-immobilier-vietnam-couple-mixte';
$current_cat     = 'vie-pratique';

$page_faq = [
  ['q' => 'Un Français peut-il posséder un appartement au Vietnam ?',
   'a' => 'Oui, mais sous forme d\'un droit d\'usage de 50 ans (renouvelable), pas d\'une propriété pleine et entière. La loi vietnamienne de 2014 (amendée en 2022) autorise les étrangers à acheter des appartements dans les immeubles résidentiels, avec un droit d\'occupation de 50 ans. La terre, elle, appartient toujours à l\'État vietnamien — personne ne peut "posséder" la terre au Vietnam, ni Vietnamien ni étranger. La différence pour un Vietnamien est qu\'il dispose d\'un droit d\'usage à long terme (LURC) quasi-permanent et transmissible, alors que l\'étranger a un contrat de 50 ans.'],
  ['q' => 'Que se passe-t-il si on achète au nom de ma femme vietnamienne et qu\'on divorce ?',
   'a' => 'En droit vietnamien, le bien acquis pendant le mariage est un bien commun (tài sản chung), sauf si un contrat de mariage stipule autrement. En cas de divorce, le bien est en principe partagé à parts égales. Cependant, si vous avez financé l\'intégralité de l\'achat alors que le titre est au nom de votre épouse uniquement, prouver votre contribution financière en justice peut être complexe sans documentation précise. La protection passe par la rédaction d\'un accord écrit notarié stipulant l\'origine des fonds et les droits de chaque partie.'],
  ['q' => 'Le conjoint étranger est-il mentionné sur le titre de propriété vietnamien ?',
   'a' => 'Depuis 2014 et les amendements de 2022-2023, la loi vietnamienne prévoit que le conjoint étranger d\'un(e) Vietnamien(ne) peut être co-inscrit sur le "sổ đỏ" (certificat d\'usage foncier). En pratique, l\'application de cette règle varie selon les bureaux cadastraux locaux et certaines provinces sont plus ouvertes que d\'autres. Un notaire local peut vous dire ce qui est applicable dans la province concernée.'],
  ['q' => 'Peut-on louer son appartement acheté au Vietnam si on n\'y vit pas ?',
   'a' => 'Oui. Les propriétaires (y compris étrangers) peuvent louer leur bien au Vietnam. La location doit être déclarée et le loyer est soumis à l\'impôt sur le revenu vietnamien (généralement 5% du loyer brut). Si vous résidez en France, la convention fiscale franco-vietnamienne prévoit que ces revenus sont imposables au Vietnam en priorité. Il vaut mieux passer par une agence immobilière locale pour la gestion locative.'],
];

$page_extra_head = '
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Accueil","item":"' . SITE_URL . '"},{"@type":"ListItem","position":2,"name":"Vie pratique au Vietnam","item":"' . SITE_URL . '/articles-capvietnam"},{"@type":"ListItem","position":3,"name":"Achat immobilier Vietnam couple mixte"}]}</script>
';

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero" style="background:<?= $article_hero_bg ?>">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Vie pratique</a><span class="breadcrumb-sep">›</span>
      <span>Achat immobilier Vietnam</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">🏠 Vie pratique au Vietnam</span>
    <h1>Acheter un bien immobilier au Vietnam en couple franco-vietnamien : ce que la loi dit vraiment (2026)</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 22 juin 2026</span>
      <span>⏱ 10 min de lecture</span>
      <span>Mis à jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Propriété foncière au Vietnam — le principe</a></li>
      <li><a href="#section-2">Ce que les étrangers peuvent acheter</a></li>
      <li><a href="#section-3">Acheter au nom du conjoint vietnamien</a></li>
      <li><a href="#section-4">Les risques réels à anticiper</a></li>
      <li><a href="#section-5">Les nouvelles règles 2022-2023</a></li>
      <li><a href="#section-6">Appartement vs maison : ce n'est pas pareil</a></li>
      <li><a href="#section-7">Ce que je recommande avant d'acheter</a></li>
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

    <p>L'immobilier au Vietnam est un sujet qui revient souvent dans les couples franco-vietnamiens qui envisagent de s'installer là-bas. La réponse honnête : c'est possible, mais les règles sont complexes, en constante évolution, et les risques pour le conjoint étranger sont réels. Voici ce que j'ai compris après avoir épluché la loi foncière vietnamienne.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1583417267826-aebc4d1542e1?w=1200&q=80" alt="Immeubles résidentiels à Hanoï — achat immobilier Vietnam couple mixte" width="1200" height="675" loading="lazy">

    <div class="info-box">
      <strong>⚠️ Ce guide est informatif, pas juridique.</strong> Le droit foncier vietnamien change régulièrement (loi de 2014, amendements 2022-2023, réforme en cours). Avant tout achat, consultez un avocat vietnamien agréé ou un notaire local. Ce guide vous donne les bases — il ne remplace pas un conseil professionnel.
    </div>

    <h2 id="section-1">La propriété foncière au Vietnam — le principe de base</h2>

    <p>Au Vietnam, <strong>toute la terre appartient au peuple et est gérée par l'État</strong> (Constitution vietnamienne, art. 53 et 54). Personne — ni Vietnamien, ni étranger — ne peut "acheter" un terrain au sens où on l'entend en France.</p>

    <p>Ce que les gens achètent au Vietnam, c'est un <strong>droit d'usage foncier (LURC — Land Use Rights Certificate)</strong>, matérialisé par le célèbre "sổ đỏ" (carnet rouge) ou "sổ hồng" (carnet rose). Ce droit d'usage est transmissible, vendable et hypothécable — mais ce n'est pas une propriété.</p>

    <ul>
      <li>Pour un Vietnamien : droit d'usage à long terme (souvent 50 ans pour les maisons individuelles, quasi-permanent pour la résidence principale, renouvelable)</li>
      <li>Pour un étranger : droit d'usage limité à <strong>50 ans</strong>, renouvelable une fois sur demande</li>
    </ul>

    <h2 id="section-2">Ce que les étrangers peuvent acheter</h2>

    <p>La loi sur le logement de 2014 (modifiée) autorise les étrangers à acheter des <strong>appartements dans des projets immobiliers autorisés</strong>. Restrictions :</p>

    <ul>
      <li>Maximum <strong>30% des appartements</strong> d'une copropriété peuvent appartenir à des étrangers</li>
      <li>Maximum <strong>250 maisons individuelles</strong> par unité administrative de niveau arrondissement</li>
      <li>Durée : 50 ans (renouvelable une fois)</li>
      <li>Interdit dans les <strong>zones militaires ou sensibles</strong></li>
      <li>Le bien peut être loué, vendu ou hérité pendant la durée du droit</li>
    </ul>

    <p>En pratique, les étrangers achètent surtout des <strong>appartements neufs dans des résidences</strong> à Hanoï, Hô Chi Minh-Ville et Đà Nẵng. Le marché secondaire reste compliqué pour les étrangers (les Vietnamiens préfèrent vendre à d'autres Vietnamiens pour éviter les complications).</p>

    <h2 id="section-3">Acheter au nom du conjoint vietnamien</h2>

    <p>C'est la stratégie la plus répandue chez les couples franco-vietnamiens : le bien est acheté au nom du conjoint vietnamien uniquement, qui bénéficie de toutes les règles applicables aux Vietnamiens (droits d'usage quasi-permanents, accès au marché secondaire sans restriction, prix souvent meilleur).</p>

    <p><strong>Les avantages :</strong></p>
    <ul>
      <li>Pas de restriction sur le type de bien (maison, appartement, terrain)</li>
      <li>Pas de limite de 50 ans</li>
      <li>Pas de quota par résidence</li>
      <li>Financement bancaire local plus facile</li>
    </ul>

    <p><strong>Les inconvénients :</strong></p>
    <ul>
      <li>Le Français n'a aucun droit légal direct sur le bien</li>
      <li>Sa contribution financière n'est pas protégée si elle n'est pas documentée</li>
      <li>En cas de divorce ou décès, les droits du conjoint français sont limités</li>
    </ul>

    <h2 id="section-4">Les risques réels à anticiper</h2>

    <p><strong>En cas de divorce :</strong> Selon le Code de la famille vietnamien, les biens acquis pendant le mariage sont présumés communs. Mais si vous avez financé le bien depuis la France et que votre nom n'apparaît nulle part, prouver votre contribution est difficile sans documentation. Un contrat notarié précisant l'origine des fonds (virement depuis la France, justificatifs bancaires) renforce votre position.</p>

    <p><strong>En cas de décès du conjoint vietnamien :</strong> Le bien entre dans sa succession. Selon la loi vietnamienne, le conjoint survivant hérite d'une part — mais la famille du défunt peut revendiquer une part aussi. Si votre belle-famille n'accepte pas facilement le partage, une procédure judiciaire est possible. Un testament notarié en droit vietnamien clarifie la situation.</p>

    <p><strong>En cas de retour définitif en France :</strong> La vente d'un bien dont le titre est au nom de votre épouse ne pose pas de problème légal si vous êtes encore marié. Si vous êtes séparé, cela peut se compliquer.</p>

    <div class="info-box">
      <strong>💡 Protection minimale recommandée :</strong><br>
      → Faire rédiger un accord notarié stipulant que les fonds proviennent du compte du conjoint français et que les deux parties reconnaissent les droits de chacun<br>
      → Tenir un historique précis des virements depuis la France avec les relevés bancaires<br>
      → Rédiger un testament en droit vietnamien désignant les bénéficiaires souhaités
    </div>

    <h2 id="section-5">Les nouvelles règles 2022–2023 pour les couples mixtes</h2>

    <p>La réforme du droit foncier et du logement engagée depuis 2022 (Loi sur le logement 2023, entrée en vigueur en 2025) a amélioré la situation des couples mixtes à plusieurs égards :</p>

    <ul>
      <li>Le conjoint étranger marié à un(e) Vietnamien(ne) peut désormais être <strong>co-inscrit sur le sổ đỏ</strong> (certificat d'usage foncier) pour le logement familial</li>
      <li>Les règles d'héritage pour les conjoints étrangers ont été clarifiées</li>
      <li>La durée de 50 ans reste mais les conditions de renouvellement ont été assouplies</li>
    </ul>

    <p>En pratique, l'application de ces nouvelles règles varie encore selon les provinces. Certaines grandes villes (Hanoï, HCM-V) appliquent mieux les nouvelles dispositions que les provinces rurales.</p>

    <h2 id="section-6">Appartement vs maison : ce n'est pas pareil</h2>

    <table class="comparison-table">
      <thead><tr><th></th><th>Appartement (chung cư)</th><th>Maison / villa (nhà riêng)</th></tr></thead>
      <tbody>
        <tr><td><strong>Étranger seul</strong></td><td>Autorisé (50 ans, quota 30%)</td><td>Autorisé dans les zones résidentielles non sensibles (50 ans)</td></tr>
        <tr><td><strong>Au nom du conjoint VN</strong></td><td>Autorisé, toutes règles VN</td><td>Autorisé, toutes règles VN</td></tr>
        <tr><td><strong>Prix moyen Hanoï</strong></td><td>1 500 à 4 000 €/m²</td><td>3 000 à 8 000 €/m² (hors terrain)</td></tr>
        <tr><td><strong>Complexité administrative</strong></td><td>Modérée</td><td>Plus complexe (permis, terrain)</td></tr>
      </tbody>
    </table>

    <h2 id="section-7">Ce que je recommande avant d'acheter</h2>

    <ol>
      <li><strong>Consultez un avocat vietnamien</strong> agréé qui parle français ou anglais — pas uniquement l'agence immobilière, qui a un intérêt commercial dans la vente</li>
      <li><strong>Vérifiez le statut du sổ đỏ</strong> : le bien est-il bien enregistré au nom du vendeur ? Y a-t-il des hypothèques ou litiges en cours ?</li>
      <li><strong>Passez par un notaire</strong> pour la signature — obligatoire légalement au Vietnam pour les transactions immobilières</li>
      <li><strong>Documentez les transferts financiers</strong> depuis la France : Wise ou virement bancaire avec des notes explicites sur l'objet du transfert</li>
      <li><strong>Renseignez-vous sur la fiscalité</strong> côté français (déclaration des avoirs à l'étranger, convention franco-vietnamienne)</li>
    </ol>

    <div class="info-box">
      <strong>🔗 Articles liés :</strong><br>
      → <a href="louer-appartement-hanoi-etranger">Louer un appartement à Hanoï en tant qu'étranger</a><br>
      → <a href="organiser-finances-expat-france-vietnam">Organiser ses finances entre France et Vietnam</a><br>
      → <a href="protection-sociale-cfe-retraite-vietnam">CFE, sécu et retraite : guide pour les expats au Vietnam</a>
    </div>

  </article>

</div>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
