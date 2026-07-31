<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Acheter un bien immobilier au Vietnam en couple franco-vietnamien (2026)';
$page_description = 'Loi vietnamienne sur l\'immobilier pour les étrangers : ce qui est interdit, ce qui est possible en couple mixte, les risques réels et les stratégies pour sécuriser son investissement.';
$page_canonical   = SITE_URL . '/achat-immobilier-vietnam-couple-mixte';
$page_og_title    = 'Acheter au Vietnam en couple franco-vietnamien : ce que la loi dit vraiment (2026)';
$page_og_desc     = 'Droit d\'usage 50 ans, achat au nom du conjoint vietnamien, risques en cas de divorce ou décès — tout ce qu\'un couple franco-vietnamien doit savoir avant d\'acheter au Vietnam.';
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/maison-communale-nuit-ninh-binh.jpg';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Acheter un bien immobilier au Vietnam en couple franco-vietnamien (2026)',
  'description'      => $page_description,
  'image'            => 'assets/img/maison-communale-nuit-ninh-binh.jpg',
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
  ['q' => 'Peut-on rapatrier en France l\'argent de la revente d\'un bien au Vietnam ?',
   'a' => 'Oui, mais uniquement par le circuit officiel : le contrôle des changes vietnamien autorise le transfert à l\'étranger du produit d\'une vente immobilière à condition de justifier l\'origine légale des fonds (contrat de vente notarié, preuve que l\'achat initial est passé par le circuit bancaire, impôts et taxes de la vente acquittés). C\'est exactement pour cela qu\'il faut bannir les paiements en liquide dès l\'achat : chaque maillon non documenté de la chaîne compliquera le rapatriement des années plus tard.'],
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
      <span>⏱ 12 min de lecture</span>
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
      <li><a href="#section-processus">Le processus d'achat, étape par étape</a></li>
      <li><a href="#section-louer">Et si louer était le meilleur choix ?</a></li>
      <li><a href="#section-erreurs">Les erreurs fréquentes</a></li>
      <li><a href="#section-7">Ce que je recommande avant d'acheter</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" title="Facebook" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn share-copy" href="#" title="Copier le lien" aria-label="Copier le lien de l'article">🔗</a>
      </div>
    </div>
  </aside>

  <article class="article-body">

    <p>L'immobilier au Vietnam est un sujet qui revient souvent dans les couples franco-vietnamiens qui envisagent de s'installer là-bas — souvent poussé par la belle-famille, pour qui posséder un toit est la définition même de la stabilité. La réponse honnête : c'est possible, mais les règles sont complexes, en constante évolution, et les risques pour le conjoint étranger sont réels. Voici ce que j'ai compris après avoir épluché la loi foncière vietnamienne.</p>

    <img class="article-photo" src="assets/img/maison-communale-nuit-ninh-binh.jpg" alt="Maison communale vietnamienne la nuit à Ninh Binh — patrimoine et immobilier au Vietnam" width="1200" height="675" loading="lazy">

    <div class="info-box">
      <strong>⚠️ Ce guide est informatif, pas juridique.</strong> Le droit foncier vietnamien change régulièrement (loi de 2014, amendements 2022-2023, réforme en cours). Avant tout achat, consultez un avocat vietnamien agréé ou un notaire local. Ce guide vous donne les bases — il ne remplace pas un conseil professionnel.
    </div>

    <h2 id="section-1">La propriété foncière au Vietnam — le principe de base</h2>

    <p>Au Vietnam, <strong>toute la terre appartient au peuple et est gérée par l'État</strong> (Constitution vietnamienne, art. 53 et 54). Personne — ni Vietnamien, ni étranger — ne peut "acheter" un terrain au sens où on l'entend en France.</p>

    <p>Ce que les gens achètent au Vietnam, c'est un <strong>droit d'usage foncier (LURC — Land Use Rights Certificate)</strong>, matérialisé par le célèbre "sổ đỏ" (carnet rouge) ou "sổ hồng" (carnet rose). Ce droit d'usage est transmissible, vendable et hypothécable — mais ce n'est pas une propriété.</p>
    <p>Ce principe n'est pas une bizarrerie administrative : il structure tout le marché. Il explique pourquoi l'État peut récupérer des terrains pour des projets d'infrastructure (avec compensation), pourquoi la valeur d'un bien dépend étroitement du statut exact inscrit sur son certificat (usage résidentiel, agricole, durée), et pourquoi la première question de tout achat n'est jamais « combien ? » mais « <em>montre-moi le sổ đỏ</em> ». Un Français qui aborde le marché vietnamien avec ses réflexes de propriété à la française part avec une case mentale en trop — commence par la désapprendre.</p>

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

    <p>En pratique, les étrangers achètent surtout des <strong>appartements neufs dans des résidences</strong> à Hanoï, Hô Chi Minh-Ville et Đà Nẵng. Le marché secondaire reste compliqué pour les étrangers (les Vietnamiens préfèrent vendre à d'autres Vietnamiens pour éviter les complications). Autre réalité de terrain : tous les promoteurs ne se valent pas dans la gestion des dossiers étrangers — certains connaissent parfaitement la procédure de vente aux non-Vietnamiens et livrent les certificats sans drame, d'autres découvrent le sujet avec toi. Le bouche-à-oreille des groupes d'expatriés propriétaires vaut de l'or ici.</p>

    <h2 id="section-3">Acheter au nom du conjoint vietnamien</h2>

    <p>C'est la stratégie la plus répandue chez les couples franco-vietnamiens, et de très loin : le bien est acheté au nom du conjoint vietnamien uniquement, qui bénéficie de toutes les règles applicables aux Vietnamiens (droits d'usage quasi-permanents, accès au marché secondaire sans restriction, prix souvent meilleur).</p>

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
    <p><strong>Le risque dont on ne parle jamais : la pression familiale.</strong> Au Vietnam, l'immobilier est une affaire de famille élargie — un terrain « de la famille » peut porter des attentes implicites (héberger un parent, servir de garantie à un cousin entrepreneur, revenir « naturellement » à la lignée). Un couple mixte qui achète doit clarifier ces attentes <em>avant</em> la signature, pas au premier conflit. Ce n'est pas du droit, c'est de la diplomatie familiale — et elle protège ton investissement autant que n'importe quel acte notarié. Le sujet rejoint tout ce qu'on décrit dans <a href="argent-couple-franco-vietnamien">l'argent dans le couple franco-vietnamien</a>.</p>

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

    <p>En pratique, l'application de ces nouvelles règles varie encore selon les provinces. Certaines grandes villes (Hanoï, HCM-V) appliquent mieux les nouvelles dispositions que les provinces rurales — vérifie la pratique locale auprès d'un notaire de la province concernée avant de compter sur la co-inscription.</p>

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

    <h2 id="section-processus">Le processus d'achat, étape par étape</h2>
    <p>Pour un appartement neuf acheté à un promoteur — le cas le plus courant pour les étrangers —, le déroulé type ressemble à ceci :</p>
    <ol>
      <li><strong>Vérification d'éligibilité du projet</strong> : le promoteur doit confirmer que la résidence est autorisée à la vente aux étrangers et que le quota de 30 % n'est pas atteint.</li>
      <li><strong>Réservation et dépôt</strong> (đặt cọc) : un acompte bloque le lot. C'est ici que se perdent les acomptes des acheteurs pressés — ne verse rien avant d'avoir vérifié le promoteur et lu le contrat de réservation.</li>
      <li><strong>Contrat de vente</strong> (hợp đồng mua bán) : signé avec le promoteur, avec un échéancier de paiements calé sur l'avancement du chantier pour un achat sur plan.</li>
      <li><strong>Paiements traçables obligatoires</strong> : les fonds d'un acheteur étranger doivent transiter par le circuit bancaire (virement international ou compte vietnamien) — c'est aussi ce qui te permettra, à la revente, de justifier l'origine des fonds pour rapatrier l'argent.</li>
      <li><strong>Livraison puis délivrance du certificat</strong> (sổ hồng) : l'émission du certificat au nom de l'acheteur étranger peut prendre du temps après la livraison — un point à surveiller contractuellement.</li>
    </ol>
    <p>Pour un achat au nom du conjoint vietnamien sur le marché secondaire, le circuit passe par le notaire (công chứng), la vérification du sổ đỏ du vendeur, puis l'enregistrement du transfert au bureau foncier. Dans les deux cas, la règle d'or est la même : <strong>aucun paiement significatif hors du circuit bancaire</strong>.</p>

    <h2 id="section-louer">Et si louer était le meilleur choix ?</h2>
    <p>Ce blog dit les choses honnêtement, alors disons celle-ci : pour beaucoup de couples mixtes, <strong>acheter au Vietnam n'est pas la meilleure décision financière</strong> — c'est une décision émotionnelle et familiale, ce qui est parfaitement légitime, à condition de la nommer correctement. Les éléments à mettre dans la balance :</p>
    <ul>
      <li><strong>La location est structurellement bon marché</strong> au Vietnam par rapport aux prix d'achat : le loyer d'un bel appartement représente souvent un faible pourcentage annuel de sa valeur. Financièrement, louer et placer la différence est une stratégie défendable.</li>
      <li><strong>Le marché vietnamien est cyclique et spéculatif</strong>, avec des périodes d'euphorie et de gel. Acheter « parce que ça monte » est le pire des mobiles.</li>
      <li><strong>Ta situation de séjour reste le point d'ancrage</strong> : posséder un appartement ne donne aucun droit au séjour. Un bien immobilier t'engage sur des décennies dans un pays où ton droit de résider dépend d'un visa.</li>
      <li><strong>Le vrai bon cas d'achat</strong> : un couple stablement installé, un projet de long terme clair (logement familial, transmission aux enfants), un financement sain et documenté, et une famille alignée. Là, acheter a du sens — pas comme placement, comme ancrage.</li>
    </ul>

    <h2 id="section-erreurs">Les erreurs fréquentes</h2>
    <ul>
      <li><strong>Payer en liquide « comme tout le monde »</strong> : sans trace bancaire, ta contribution n'existe juridiquement pas — ni pour un divorce, ni pour une succession, ni pour rapatrier les fonds un jour.</li>
      <li><strong>Acheter sur plan sans vérifier le promoteur</strong> : les projets à l'arrêt existent. Historique du promoteur, garanties bancaires du projet, autorisation de vente aux étrangers : tout se vérifie avant l'acompte.</li>
      <li><strong>Mettre le bien au nom d'un membre de la belle-famille</strong> « pour simplifier » : tu cumules alors les inconvénients de toutes les options — aucun droit, aucune protection conjugale, et une dépendance totale à la bonne entente familiale.</li>
      <li><strong>Zapper le notaire ou signer des documents non traduits</strong> : la version vietnamienne fait foi. Fais traduire et relire avant, pas après.</li>
      <li><strong>Oublier le fisc français</strong> : un résident fiscal français doit déclarer ses avoirs et revenus immobiliers étrangers. L'oubli se paie cher, et la convention fiscale organise justement les choses proprement.</li>
    </ul>

    <h2 id="section-7">Ce que je recommande avant d'acheter</h2>

    <ol>
      <li><strong>Consultez un avocat vietnamien</strong> agréé qui parle français ou anglais — pas uniquement l'agence immobilière, qui a un intérêt commercial dans la vente</li>
      <li><strong>Vérifiez le statut du sổ đỏ</strong> : le bien est-il bien enregistré au nom du vendeur ? Y a-t-il des hypothèques ou litiges en cours ?</li>
      <li><strong>Passez par un notaire</strong> pour la signature — obligatoire légalement au Vietnam pour les transactions immobilières</li>
      <li><strong>Documentez les transferts financiers</strong> depuis la France : Wise ou virement bancaire avec des notes explicites sur l'objet du transfert (<a href="transferer-argent-vietnam-wise">le guide des transferts est ici</a>)</li>
      <li><strong>Renseignez-vous sur la fiscalité</strong> côté français (déclaration des avoirs à l'étranger, convention franco-vietnamienne)</li>
      <li><strong>Mettez les protections en place le jour de l'achat, pas plus tard</strong> : accord notarié sur l'origine des fonds, testament vietnamien, et co-inscription sur le certificat quand la province le permet. Aucune de ces protections n'est rétroactive de plein droit — les ajouter après coup est toujours plus dur.</li>
    </ol>

    <div class="info-box">
      <strong>🔗 Articles liés :</strong><br>
      → <a href="louer-appartement-hanoi-etranger">Louer un appartement à Hanoï en tant qu'étranger</a><br>
      → <a href="organiser-finances-expat-france-vietnam">Organiser ses finances entre France et Vietnam</a><br>
      → <a href="protection-sociale-cfe-retraite-vietnam">CFE, sécu et retraite : guide pour les expats au Vietnam</a>
    </div>

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
      <form class="cta-form" action="<?= SITE_URL ?>/subscribe-pack" method="POST">
        <input type="text" name="website" value="" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a> — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>

  </article>

</div>

<?php include '_article-comments.php'; ?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
