<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Vivre sa retraite au Vietnam : coût, santé, logement et vie sociale (2026)';
$page_description = 'Le Vietnam attire de plus en plus de retraités français. Coût de la vie, qualité des soins, logement, sécurité, vie sociale — ce que ça donne vraiment au quotidien.';
$page_canonical   = SITE_URL . '/vivre-retraite-vietnam-guide';
$page_og_title    = 'Vivre sa retraite au Vietnam : le guide complet 2026';
$page_og_desc     = 'Budget, santé, logement, sécurité, vie sociale — tout ce qu\'un retraité français doit savoir avant de s\'installer au Vietnam.';
$page_og_url      = SITE_URL . '/vivre-retraite-vietnam-guide';
$page_og_image    = SITE_URL . '/assets/img/rue-village-karsts-phong-nha.jpg';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Vivre sa retraite au Vietnam : coût, santé, logement et vie sociale (2026)',
  'datePublished'   => '2026-08-18',
  'dateModified'    => '2026-08-18',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/vivre-retraite-vietnam-guide',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie pratique au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'terracotta';
$article_hero_bg  = '#2a0e0e';
$article_glow     = 'rgba(191,74,42,0.15)';
$article_badge    = 'rgba(191,74,42,0.25)';
$article_badge_c  = '#e8856a';

$article_category     = 'Vie pratique au Vietnam';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vie-pratique';
$page_faq = [
  ['q' => 'Peut-on vivre au Vietnam avec une petite retraite française ?',
   'a' => 'C\'est précisément ce qui attire beaucoup de retraités : une pension modeste en France permet un niveau de vie confortable au Vietnam, à condition de vivre « à la locale » pour une partie du quotidien. Les postes qui pèsent sont le logement de standing occidental et surtout l\'assurance santé, dont le coût grimpe avec l\'âge — c\'est elle qu\'il faut budgéter en premier, pas le loyer.'],
  ['q' => 'Ma pension de retraite française est-elle versée au Vietnam ?',
   'a' => 'Oui. Les caisses de retraite françaises versent les pensions aux retraités résidant à l\'étranger. Deux points pratiques : il faut fournir chaque année un certificat de vie (attestation d\'existence) pour maintenir le versement, et il est souvent plus simple de conserver un compte bancaire en France qui reçoit la pension, puis de transférer vers le Vietnam au meilleur taux.'],
  ['q' => 'Où paie-t-on ses impôts quand on est retraité au Vietnam ?',
   'a' => 'Ça dépend de ta résidence fiscale et de la nature de ta pension : la convention fiscale France-Vietnam répartit les droits d\'imposition, et les pensions publiques et privées ne suivent pas les mêmes règles. C\'est un sujet à valider avec un professionnel avant le départ — notre article sur la résidence fiscale France-Vietnam pose les bases.'],
  ['q' => 'La barrière de la langue est-elle un problème pour un retraité ?',
   'a' => 'Dans les quartiers expatriés des grandes villes et des villes balnéaires, on vit très bien avec l\'anglais de base et quelques mots de vietnamien. Le vrai enjeu apparaît dans les situations sérieuses — santé, administration — où il faut soit un accompagnement (conjoint, ami vietnamien, service francophone), soit des établissements internationaux. C\'est un critère de choix de la ville d\'installation.'],
  ['q' => 'Et si ma santé se dégrade sérieusement ?',
   'a' => 'C\'est LA question à se poser honnêtement avant de partir. Les grandes villes vietnamiennes offrent de bons soins courants, mais les pathologies lourdes ou chroniques complexes se traitent mieux à Bangkok, Singapour… ou en France. Une bonne assurance avec évacuation sanitaire est indispensable, et il faut accepter l\'idée qu\'une santé très dégradée peut imposer un retour en France.'],
];

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=vie-pratique">Vie pratique</a><span class="breadcrumb-sep">›</span>
      <span>Retraite au Vietnam : la vie sur place</span>
    </div>
    <span class="article-badge-hero">Vie pratique au Vietnam</span>
    <h1>Vivre sa retraite au Vietnam : coût, santé, logement et vie sociale</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Août 2026</span>
      <span>⏱ 12 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi le Vietnam attire les retraités</a></li>
      <li><a href="#section-2">Le point administratif d'abord</a></li>
      <li><a href="#section-3">Le budget d'une retraite au Vietnam</a></li>
      <li><a href="#section-4">La santé : le vrai sujet</a></li>
      <li><a href="#section-5">Où s'installer ?</a></li>
      <li><a href="#section-6">Le logement</a></li>
      <li><a href="#section-7">Pension, banque et impôts</a></li>
      <li><a href="#section-8">La vie sociale au quotidien</a></li>
      <li><a href="#section-9">Ce qu'on ne te dit pas assez</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn share-copy" href="#" title="Copier le lien" aria-label="Copier le lien de l'article">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <p><strong>Prendre sa retraite au Vietnam, c'est le projet dont on parle de plus en plus dans les groupes d'expatriés francophones — et pour de bonnes raisons.</strong> Un coût de la vie qui redonne de l'air à une pension française, un climat sans hiver, une culture accueillante, et un lien franco-vietnamien qui facilite l'atterrissage. Mais entre le fantasme du hamac à Nha Trang et la réalité du quotidien, il y a des sujets sérieux à regarder en face : la santé, le statut de séjour, la fiscalité, l'éloignement. Ce guide fait le tour honnêtement.</p>

    <h2 id="section-1">Pourquoi le Vietnam attire de plus en plus de retraités français</h2>

    <p>Le calcul de départ est simple : une pension qui impose des arbitrages serrés en France finance au Vietnam un quotidien confortable — repas au restaurant plusieurs fois par semaine, aide à domicile, sorties, voyages dans la région. Mais réduire le Vietnam à un pays « pas cher » serait passer à côté de ce qui fait vraiment rester les gens :</p>

    <ul>
      <li><strong>Le rapport aux aînés.</strong> Dans la culture vietnamienne, l'âge est un statut, pas un déclassement. Un retraité y est traité avec une déférence qui surprend — agréablement — beaucoup de Français habitués à l'invisibilité sociale des seniors.</li>
      <li><strong>Le lien historique francophone.</strong> Génération de médecins et d'intellectuels formés en français, boulangeries héritées de l'époque coloniale, membres de l'Organisation internationale de la Francophonie : le Vietnam n'est pas une terre étrangère au français, et ça se sent dans mille détails du quotidien.</li>
      <li><strong>La vie de rue.</strong> Marchés quotidiens, cafés en terrasse à toute heure, voisinage qui se connaît : pour un retraité, cette densité sociale spontanée est un antidote puissant à l'isolement — le fléau silencieux des retraites européennes.</li>
      <li><strong>Le climat.</strong> Plus jamais de novembre gris. Avec la nuance à connaître : le nord a un hiver frais et humide, le sud une chaleur permanente — le choix de la région est aussi un choix climatique (voir plus bas).</li>
    </ul>

    <h2 id="section-2">Le point administratif d'abord : il n'y a pas de « visa retraite »</h2>

    <p>Autant l'évacuer tout de suite, parce que c'est la surprise n°1 des candidats au départ : <strong>le Vietnam n'a pas de visa retraité</strong>, contrairement à la Thaïlande ou aux Philippines qui ont bâti des programmes dédiés pour attirer les pensions étrangères. Il faut donc construire son droit au séjour avec les outils existants, et être lucide sur ce que chacun permet :</p>

    <ul>
      <li><strong>Marié(e) à un(e) Vietnamien(ne)</strong> : c'est la voie royale — <a href="visa-tt-carte-residence-trc-mariage">visa TT puis carte de résidence temporaire (TRC)</a>, stable et renouvelable. Beaucoup de lecteurs de ce blog sont dans ce cas.</li>
      <li><strong>Sans attache familiale vietnamienne</strong> : la réalité, c'est un séjour construit sur les <a href="visa-vietnam-francais-guide-2026">exemptions de 45 jours et les e-visas de 90 jours</a>, avec les allers-retours que ça implique. Vivable, mais pas une résidence stable.</li>
    </ul>

    <p>Le détail complet des options, leurs limites et les stratégies réalistes sont dans l'article dédié : <a href="visa-retraite-vietnam">quel visa pour prendre sa retraite au Vietnam ?</a></p>

    <h2 id="section-3">Le budget d'une retraite au Vietnam</h2>

    <p>Je ne vais pas te donner ici un chiffre magique « la retraite au Vietnam coûte X euros » — ce serait exactement le genre de chiffre inventé que ce blog s'interdit. Le coût dépend massivement de trois curseurs :</p>

    <ol>
      <li><strong>La ville</strong> : Hanoï et HCMV coûtent plus cher que Đà Nẵng, Nha Trang ou Huế. J'ai détaillé des budgets mensuels réels, poste par poste, pour chaque ville : <a href="budget-mensuel-hanoi-2026">Hanoï</a>, <a href="budget-mensuel-hcmc-2026">Hô Chi Minh-Ville</a>, <a href="budget-mensuel-da-nang-2026">Đà Nẵng</a>, <a href="budget-mensuel-nha-trang-2026">Nha Trang</a>, <a href="budget-mensuel-hue-2026">Huế</a>.</li>
      <li><strong>Le mode de vie</strong> : vivre « à la vietnamienne » (marché, cuisine de rue, appartement local) ou « à l'occidentale » (supermarchés importés, résidence avec piscine, restaurants internationaux) fait varier le budget du simple au triple. La plupart des retraités installés trouvent leur équilibre entre les deux.</li>
      <li><strong>L'assurance santé</strong> : c'est LE poste que les candidats au départ sous-estiment. À 65 ans et plus, une couverture santé internationale sérieuse représente souvent le premier poste de dépense, devant le loyer. Budgète-la en premier.</li>
    </ol>

    <div class="tip-box">
      <strong>Outil du blog :</strong> le <a href="calculateur-budget-vietnam">calculateur de coût de la vie au Vietnam</a> te permet d'estimer ton budget mensuel selon ta ville et ton mode de vie, en euros et en dongs.
    </div>

    <h2 id="section-4">La santé : le vrai sujet d'une retraite au Vietnam</h2>

    <p>Parlons franchement : à 30 ans, la question santé d'une expatriation est un paragraphe ; à 65, c'est LE chapitre. Voici l'architecture à mettre en place :</p>

    <ul>
      <li><strong>Les soins courants</strong> : les grandes villes disposent d'hôpitaux internationaux de bon niveau et de structures francophones — j'ai fait le tour complet dans <a href="hopitaux-medecins-francophones-vietnam">hôpitaux et médecins francophones au Vietnam</a>. Pour le quotidien (consultations, dentaire, analyses), tu seras souvent agréablement surpris par l'accessibilité et les délais courts.</li>
      <li><strong>La CFE (Caisse des Français de l'Étranger)</strong> : pour un retraité, elle permet de conserver un lien avec le système de santé français — précieux pour les séjours en France et comme socle de couverture. Le fonctionnement détaillé est dans <a href="protection-sociale-cfe-retraite-vietnam">CFE et protection sociale à l'étranger</a>.</li>
      <li><strong>L'assurance complémentaire avec évacuation sanitaire</strong> : indispensable. Pour les pathologies lourdes, le réflexe régional est l'évacuation vers Bangkok ou Singapour — ta couverture doit l'inclure explicitement, ainsi que le rapatriement en France.</li>
      <li><strong>Le stock et le suivi des traitements chroniques</strong> : ordonnances en DCI (nom de molécule), vérification de la disponibilité locale de tes médicaments dès les premières semaines, et un médecin référent identifié avant d'en avoir besoin.</li>
    </ul>

    <p>Et le point d'honnêteté que ce blog te doit : <strong>si ta santé est déjà fragile ou ton traitement complexe, le Vietnam peut être un mauvais calcul</strong>. Les meilleurs standards de soins de la région ne sont pas au Vietnam, et une pathologie qui exige un plateau technique de pointe imposera des déplacements coûteux ou un retour. Ce n'est pas une raison de renoncer — c'est une raison de construire le projet avec ton médecin, pas contre lui.</p>

    <h2 id="section-5">Où s'installer pour sa retraite ?</h2>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Ville</th>
          <th>Pour qui ?</th>
          <th>Points de vigilance</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Đà Nẵng</strong></td>
          <td>Le meilleur compromis retraité : ville moderne à taille humaine, plages, aéroport international, hôpitaux corrects, communauté expat croissante</td>
          <td>Saison des typhons en automne ; services francophones limités</td>
        </tr>
        <tr>
          <td><strong>Nha Trang</strong></td>
          <td>Les amoureux du balnéaire pur, climat sec une grande partie de l'année</td>
          <td>Très touristique ; ambiance station plus que ville de vie</td>
        </tr>
        <tr>
          <td><strong>Huế</strong></td>
          <td>Budget mini, patrimoine, calme — la retraite contemplative</td>
          <td>Offre médicale et internationale réduite ; pluies marquées</td>
        </tr>
        <tr>
          <td><strong>Hanoï / HCMV</strong></td>
          <td>Ceux qui veulent tous les services (hôpitaux internationaux, consulats, Institut français) et une vraie vie urbaine — souvent le choix des couples franco-vietnamiens dont la famille est là</td>
          <td>Pollution, trafic, coût plus élevé — <a href="hanoi-vs-ho-chi-minh-ville-installation">le comparatif complet ici</a></td>
        </tr>
        <tr>
          <td><strong>Vũng Tàu</strong></td>
          <td>Le balnéaire à 2h de HCMV : la plage au quotidien, les grands hôpitaux à portée de route</td>
          <td>Moins de charme que le centre du pays</td>
        </tr>
      </tbody>
    </table>
    </div>

    <p>Le conseil qui vaut pour tous : <strong>ne t'installe nulle part sans avoir vécu sur place une saison complète</strong> — y compris la mauvaise saison (l'hiver humide du nord, les typhons du centre, la saison des pluies du sud). Une location meublée de quelques mois coûte infiniment moins cher qu'un mauvais choix de ville.</p>

    <p>Et si tu es en couple franco-vietnamien, tu connais déjà la vraie réponse à « où s'installer » : là où la famille de ton conjoint peut jouer son rôle. Une retraite au Vietnam avec une belle-famille à proximité, c'est un réseau d'entraide immédiat — pour la langue, la santé, l'administration, les coups durs. C'est un avantage que les retraités « solo » n'ont pas, et il pèse plus lourd que n'importe quel critère climatique.</p>

    <h2 id="section-6">Le logement : louer d'abord, acheter peut-être</h2>

    <p>La location est le régime naturel du retraité expatrié au Vietnam : offre abondante de meublés, baux souples, services inclus (ménage, maintenance) courants dans les résidences. C'est aussi la seule option compatible avec la règle d'or du « rester réversible » — un bail se résilie, un appartement acheté se revend lentement. Les repères de prix et les pièges de contrats sont détaillés dans <a href="louer-appartement-hanoi-etranger">louer un appartement à Hanoï</a> — la logique vaut pour les autres villes.</p>

    <p>L'achat, lui, est possible mais encadré : les étrangers peuvent acheter des appartements sous conditions et quotas, pas du foncier. Si l'idée te tente — notamment dans un couple franco-vietnamien où d'autres montages existent — lis d'abord <a href="achat-immobilier-vietnam-couple-mixte">acheter un bien immobilier au Vietnam</a>. Règle de prudence de retraité : <strong>n'immobilise jamais dans la pierre vietnamienne une épargne dont ta santé pourrait avoir besoin</strong>.</p>

    <h2 id="section-7">Pension, banque et impôts : la tuyauterie financière</h2>

    <ul>
      <li><strong>Le versement de la pension</strong> : les caisses françaises versent à l'étranger, mais le montage le plus simple reste de conserver un compte en France qui reçoit la pension, puis de transférer au fil des besoins vers le Vietnam au taux réel — c'est exactement le cas d'usage de <a href="transferer-argent-vietnam-wise">Wise, détaillé ici</a>. L'organisation complète des comptes entre les deux pays est dans <a href="organiser-finances-expat-france-vietnam">organiser ses finances d'expat</a>.</li>
      <li><strong>Le certificat de vie</strong> : chaque année, tes caisses de retraite te demanderont une attestation d'existence pour maintenir le versement. Elle se fait viser par les autorités locales ou le consulat — mets un rappel annuel, un certificat oublié suspend la pension.</li>
      <li><strong>La fiscalité</strong> : résident au Vietnam plus de 183 jours par an, ta situation fiscale change, et la convention France-Vietnam répartit l'imposition — avec des règles différentes selon la nature de ta pension. Ne pars pas sans avoir posé ta situation avec un professionnel ; les bases sont dans <a href="residence-fiscale-france-vietnam-183-jours">résidence fiscale France-Vietnam</a>.</li>
      <li><strong>Le compte local</strong> : utile pour le quotidien une fois installé — les options réalistes pour un Français sont dans <a href="banque-vietnam-francais">le guide banque au Vietnam</a>.</li>
    </ul>

    <h2 id="section-8">La vie sociale : le facteur qui décide de tout</h2>

    <p>Les retraites expatriées qui échouent échouent rarement sur le budget — elles échouent sur la solitude. Après la lune de miel des six premiers mois (tout est nouveau, tout est excitant), arrive le moment où le quotidien s'installe : c'est là que se joue la réussite du projet. Le Vietnam offre d'excellentes conditions pour contrer l'isolement, à condition de s'en saisir activement :</p>

    <ul>
      <li><strong>La communauté francophone</strong> : groupes Facebook de Français par ville, événements de l'Institut français à Hanoï et HCMV, associations d'expatriés — le premier cercle, immédiat.</li>
      <li><strong>La vie de quartier vietnamienne</strong> : le café du matin au même endroit, le marché quotidien, les voisins — quelques dizaines de mots de vietnamien suffisent à transformer l'anonymat en appartenance. C'est le deuxième cercle, le plus précieux à long terme.</li>
      <li><strong>Une activité régulière</strong> : cours de langue, bénévolat (l'enseignement du français est très recherché — voir <a href="enseigner-francais-vietnam-fle">enseigner le français au Vietnam</a>, même bénévolement), club de sport doux (le tài chi du matin au bord des lacs de Hanoï est ouvert à tous). L'agenda vide est l'ennemi.</li>
      <li><strong>Le lien avec la France</strong> : appels réguliers, visites planifiées dans les deux sens (le <a href="visa-schengen-belle-famille-vietnamienne">visa Schengen pour la famille vietnamienne</a> si tu es en couple mixte), et l'acceptation que tu rateras des anniversaires et des enterrements. C'est le coût réel de l'expatriation, celui qu'aucun calculateur n'affiche.</li>
    </ul>

    <h2 id="section-9">Ce qu'on ne te dit pas assez</h2>

    <ul>
      <li><strong>Le bruit et le chaos ne s'arrêtent jamais.</strong> Le charme vibrant de la rue vietnamienne peut devenir usant à 70 ans. Choisis ton quartier aussi avec tes oreilles.</li>
      <li><strong>La canicule est un sujet de santé senior.</strong> Les étés du nord et du centre dépassent régulièrement les 35°C avec une humidité écrasante — climatisation et rythme adapté ne sont pas du confort, mais de la prévention.</li>
      <li><strong>Traverser la rue et circuler restent des risques réels.</strong> La circulation vietnamienne demande des réflexes ; beaucoup de retraités renoncent sagement au scooter au profit du Grab-voiture — l'appli se maîtrise en une journée.</li>
      <li><strong>Le projet doit fonctionner pour les deux.</strong> Dans un couple, il suffit d'un des deux qui ne s'y fait pas pour que tout vacille. Testez ensemble, décidez ensemble, gardez une porte de sortie ensemble.</li>
      <li><strong>Garde toujours un plan B financier</strong> : de quoi financer un retour en France non planifié (santé, famille, changement de règles migratoires). L'expatriation sereine est celle qui reste réversible — et paradoxalement, c'est quand on sait qu'on peut rentrer qu'on profite vraiment d'être parti.</li>
    </ul>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="warning-box">
      <strong>Disclaimer :</strong> cet article donne des repères généraux, pas un conseil personnalisé. Fiscalité, protection sociale et couverture santé d'un retraité expatrié se valident avec des professionnels (caisse de retraite, CFE, conseiller fiscal) avant tout départ.
    </div>

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

    <?php
$author_bio = <<<'BIO'
Français expatrié à Hanoï. Je partage mon parcours d'installation au Vietnam : démarches, vie de couple mixte et travail en ligne.
BIO;
$author_links = <<<'LINKS'
<a href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">TikTok</a>
          <a href="a-propos-capvietnam">À propos</a>
LINKS;
include '_author-box.php';
?>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
require_once __DIR__ . '/config/site.php';
$current_slug = 'vivre-retraite-vietnam-guide';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
