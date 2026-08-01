<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Trouver un emploi au Vietnam en 2026 : guide complet pour les Français';
$page_description = 'Sites emploi, secteurs qui recrutent des Français, permis de travail, salaires : tout ce qu\'un expatrié doit savoir pour trouver un travail au Vietnam en 2026.';
$page_canonical   = SITE_URL . '/trouver-emploi-vietnam-francais-2026';
$page_og_title    = 'Trouver un emploi au Vietnam en 2026 : guide complet';
$page_og_desc     = 'VietnamWorks, LinkedIn, secteurs porteurs, permis de travail obligatoire : le guide pratique pour les Français qui cherchent du travail au Vietnam.';
$page_og_url      = SITE_URL . '/trouver-emploi-vietnam-francais-2026';
$page_og_image    = 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Trouver un emploi au Vietnam en 2026 : guide complet pour les Français',
  'datePublished'   => '2026-09-25',
  'dateModified'    => '2026-09-25',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/trouver-emploi-vietnam-francais-2026',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Emploi & Entreprendre',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'jade';
$article_hero_bg      = '#001f18';
$article_glow         = 'rgba(27,107,82,0.18)';
$article_badge        = 'rgba(27,107,82,0.25)';
$article_badge_c      = '#4dbe94';

$article_category     = 'Emploi & Entreprendre';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=emploi';

$page_faq = [
  ['q' => 'Peut-on travailler au Vietnam avec juste un visa touriste ?',
   'a' => 'Légalement non. Travailler pour un employeur vietnamien ou une société étrangère opérant au Vietnam nécessite un permis de travail (giấy phép lao động) et un visa de travail adapté (LD). Exercer une activité professionnelle sous visa touriste constitue une infraction qui peut entraîner une expulsion. Le télétravail pour un employeur étranger, sans activité locale, relève d\'une zone grise moins strictement appliquée, mais reste formellement non encadré par la loi vietnamienne.'],
  ['q' => 'Faut-il parler vietnamien pour trouver un emploi au Vietnam ?',
   'a' => 'Ce n\'est pas obligatoire dans la plupart des postes ouverts aux expatriés. Les entreprises à capitaux étrangers (multinationales, ONG internationales, hôtellerie internationale) travaillent souvent en anglais. Dans certains secteurs comme l\'enseignement du français, la connaissance du vietnamien est un atout mais rarement exigée. Elle devient utile pour les relations avec les autorités locales, les fournisseurs ou les équipes vietnamiennes.'],
  ['q' => 'Peut-on chercher un emploi depuis la France avant de partir ?',
   'a' => 'Oui, c\'est même conseillé. VietnamWorks.com et LinkedIn permettent de postuler à distance, les entretiens se font en vidéo. Certaines multinationales (AccorHotels, Total, BNP Paribas) recrutent directement depuis leur siège et envoient des salariés détachés au Vietnam. Les ONG (AFD, MSF, GRET) recrutent aussi depuis Paris pour leurs postes expatriés au Vietnam.'],
  ['q' => 'Mon diplôme français est-il reconnu au Vietnam pour le permis de travail ?',
   'a' => 'Le Vietnam ne dispose pas d\'un système de reconnaissance mutuelle automatique des diplômes avec la France. Pour l\'obtention du permis de travail, le diplôme doit être apostillé (via le tribunal compétent ou la chambre des notaires selon le type de document) et accompagné d\'une traduction officielle en vietnamien réalisée par un traducteur assermenté. L\'employeur constitue le dossier complet.'],
  ['q' => 'Les offres d\'emploi vietnamiennes mentionnent l\'âge et le genre — c\'est normal ?',
   'a' => 'C\'est une réalité du marché local qui choque les candidats français : beaucoup d\'annonces vietnamiennes précisent une tranche d\'âge souhaitée, parfois un genre, et demandent la photo. Les entreprises internationales appliquent leurs standards mondiaux et s\'en abstiennent, mais chez les employeurs locaux, ces mentions restent courantes. Concrètement : ne prends pas ces critères comme des murs absolus (un bon profil se fait souvent recevoir malgré la case), mais sache lire le signal — une annonce très normée t\'informe aussi sur la culture d\'entreprise qui t\'attend.'],
  ['q' => 'Vaut-il mieux chercher avant de partir ou une fois sur place ?',
   'a' => 'Les deux stratégies fonctionnent, pour des profils différents. Les postes de cadres et détachements se décrochent plutôt à distance (processus formels, recrutements planifiés). Mais pour tout le reste — FLE, hôtellerie, PME, startups —, être sur place change tout : disponibilité pour un entretien demain matin, réseau qui se construit, et preuve vivante que ton installation est sérieuse. Le schéma classique du couple mixte : arriver avec quelques mois de trésorerie, activer le réseau local, et convertir en quelques semaines ce que des mois de candidatures à distance n\'avaient pas donné.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=emploi">Emploi &amp; Entreprendre</a><span class="breadcrumb-sep">›</span>
      <span>Trouver un emploi au Vietnam</span>
    </div>
    <span class="article-badge-hero">Emploi &amp; Entreprendre</span>
    <h1>Trouver un emploi au Vietnam en 2026 : le guide complet pour les Français</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Septembre 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis à jour : Septembre 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Le marché de l'emploi au Vietnam</a></li>
      <li><a href="#section-2">Les plateformes pour chercher un emploi</a></li>
      <li><a href="#section-3">Les secteurs qui recrutent des Français</a></li>
      <li><a href="#section-4">Le permis de travail : obligatoire</a></li>
      <li><a href="#section-5">Le processus de recrutement</a></li>
      <li><a href="#section-6">Salaires indicatifs par secteur</a></li>
      <li><a href="#section-7">Le réseau, canal n°1</a></li>
      <li><a href="#section-8">CV et entretien à la vietnamienne</a></li>
      <li><a href="#section-9">L'atout du couple mixte</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" onclick="window.open('https://twitter.com/intent/tweet?url='+encodeURIComponent(location.href))">𝕏</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <p class="article-intro">Le Vietnam est l'une des économies les plus dynamiques d'Asie du Sud-Est : croissance annuelle de 6 à 7 %, marché de 100 millions de consommateurs, flux importants d'investissements étrangers. Pour un Français expatrié, le marché local offre des opportunités réelles — à condition de savoir où chercher et de respecter les obligations légales, notamment le permis de travail.</p>

    <h2 id="section-1">1. Le marché de l'emploi au Vietnam pour les étrangers</h2>
    <p>Le Vietnam accueille des milliers d'expatriés travaillant pour des entreprises étrangères implantées localement, des ONG internationales, des établissements d'enseignement, des hôtels internationaux ou des startups locales. Les grandes villes concentrent les opportunités :</p>
    <ul>
      <li><strong>Hô-Chi-Minh-Ville</strong> : hub économique principal, sièges d'entreprises, finance, tech, mode</li>
      <li><strong>Hanoï</strong> : ambassades, ONG, institutions éducatives, entreprises publiques vietnamiennes</li>
      <li><strong>Da Nang</strong> : tourisme, hôtellerie, petite scène tech en développement</li>
    </ul>
    <p>Le marché local est compétitif sur les bas salaires (la concurrence vietnamienne est forte), mais les profils francophones, bilingues ou très spécialisés trouvent plus facilement leur place.</p>
    <p>Un cadrage honnête pour éviter les désillusions : le Vietnam n'est pas un marché où l'on « trouve facilement un job parce qu'on est occidental » — cette époque est révolue. La main-d'œuvre vietnamienne qualifiée est nombreuse, anglophone dans les grandes villes, et bien moins chère qu'un expatrié. Ta candidature ne gagne que là où tu apportes ce que le marché local n'a pas : le français natif, une expertise pointue, une expérience internationale, un réseau vers l'Europe. Positionne chaque candidature sur cette valeur différentielle, et le marché devient étonnamment accueillant ; positionne-toi en concurrence frontale avec les candidats locaux, et il devient un mur.</p>

    <h2 id="section-2">2. Les plateformes pour trouver un emploi</h2>
    <p>Plusieurs plateformes sont actives et fiables pour la recherche d'emploi au Vietnam :</p>

    <div class="table-wrapper">
    <table>
      <thead><tr><th>Plateforme</th><th>Type d'offres</th><th>Langue</th></tr></thead>
      <tbody>
        <tr><td><strong>VietnamWorks.com</strong></td><td>Leader vietnamien, toutes catégories</td><td>Anglais / Vietnamien</td></tr>
        <tr><td><strong>LinkedIn</strong></td><td>Cadres, multinationales, tech</td><td>Anglais</td></tr>
        <tr><td><strong>CareerBuilder.vn</strong></td><td>PME et grandes entreprises</td><td>Anglais / Vietnamien</td></tr>
        <tr><td><strong>TopCV.vn</strong></td><td>Profils techniques et cadres</td><td>Vietnamien principalement</td></tr>
        <tr><td><strong>Jobstreet.vn</strong></td><td>Réseau Asie du Sud-Est</td><td>Anglais</td></tr>
        <tr><td><strong>Indeed.com.vn</strong></td><td>Agrégateur général</td><td>Anglais / Vietnamien</td></tr>
      </tbody>
    </table>
    </div>

    <p>Pour les postes dans la diplomatie, les ONG ou l'enseignement, les candidatures passent souvent par les sites institutionnels directement (AFD, Ambassade de France, Institut Français du Vietnam, EFIV).</p>
    <p>Mode d'emploi des plateformes locales : crée un profil complet sur VietnamWorks (le réflexe n°1 des recruteurs du pays), active les alertes par secteur, et double systématiquement chaque candidature plateforme d'une approche directe — retrouver le responsable RH ou le manager sur LinkedIn et lui écrire un message court. Au Vietnam comme ailleurs, la candidature qui sort de la pile est celle qui arrive par deux canaux. Et garde une trace de tout : les recruteurs vietnamiens rappellent parfois des mois plus tard pour un autre poste.</p>

    <h2 id="section-3">3. Les secteurs qui recrutent des Français</h2>
    <p>Le fait de parler français est un vrai atout dans plusieurs secteurs :</p>

    <h3>Enseignement du français (FLE)</h3>
    <p>L'Institut Français du Vietnam (antennes à Hanoï, Hô-Chi-Minh-Ville, Da Nang, Huế), l'Alliance Française et l'EFIV (École Française Internationale du Vietnam) recrutent régulièrement des professeurs de FLE. La demande d'apprentissage du français reste soutenue au Vietnam. Voir l'article <a href="enseigner-francais-vietnam-fle">Enseigner le français au Vietnam</a> pour le détail des qualifications et salaires.</p>

    <h3>Diplomatie et coopération internationale</h3>
    <p>L'Ambassade de France à Hanoï et le Consulat à Hô-Chi-Minh-Ville recrutent des agents de droit local. L'AFD (Agence Française de Développement) est présente à Hanoï. Des ONG françaises comme GRET, AVSF, ou Électriciens Sans Frontières opèrent au Vietnam et recrutent ponctuellement.</p>

    <h3>Hôtellerie et tourisme international</h3>
    <p>Les chaînes internationales (AccorHotels avec Sofitel, Novotel, Pullman ; Marriott ; Intercontinental) recrutent des managers expatriés, des chefs cuisiniers, des responsables F&B. Les contrats peuvent être locaux ou détachés depuis la France.</p>

    <h3>Finance, banque, assurance</h3>
    <p>BNP Paribas, Société Générale, AXA et d'autres acteurs français ont des bureaux au Vietnam. Les postes à responsabilité (managers, directeurs) sont parfois ouverts à des expatriés francophones.</p>

    <h3>Tech et startups</h3>
    <p>L'écosystème tech vietnamien est actif, notamment à Hô-Chi-Minh-Ville. Des développeurs, chefs de projet et spécialistes en marketing digital trouvent des opportunités dans des startups locales ou des entreprises technologiques à capitaux étrangers.</p>

    <h3>Import-export et commerce</h3>
    <p>De nombreuses PME françaises importent des produits vietnamiens ou exportent vers le Vietnam. Elles recrutent parfois des représentants commerciaux ou des coordinateurs bilingues sur place — le profil « je connais les deux cultures, je peux gérer un fournisseur vietnamien et rendre compte à un patron français » est précisément ce qui manque à ces structures. Le sourcing (textile, meuble, agroalimentaire) est le vivier le plus actif.</p>

    <h3>Industrie et supply chain</h3>
    <p>Le Vietnam est devenu l'un des grands ateliers manufacturiers du monde (électronique, textile, chaussure, meuble), et les usines à capitaux étrangers recherchent des profils qualité, méthodes, logistique et achats capables de faire l'interface avec les clients occidentaux. Moins visible que la tech, ce secteur recrute en continu — souvent dans les provinces industrielles autour de Hanoï et HCMV plutôt que dans les centres-villes.</p>

    <h2 id="section-4">4. Le permis de travail : obligatoire pour tout emploi local</h2>
    <p>Tout étranger souhaitant travailler légalement pour un employeur au Vietnam doit obtenir un <strong>giấy phép lao động</strong> (GPLĐ, permis de travail). C'est l'employeur qui constitue et dépose le dossier auprès du Service provincial du Travail (Sở Lao Động - Thương Binh và Xã Hội).</p>
    <p>Le permis de travail est valable au maximum 2 ans et renouvelable. Certaines catégories de personnes en sont exemptées (propriétaires représentant légaux de leur propre société, experts en mission courte inférieure à 30 jours consécutifs dans la limite de 90 jours par an selon le Décret 152/2020/NĐ-CP).</p>
    <p>Pour tous les détails de la procédure, consulte l'article dédié : <a href="permis-de-travail-vietnam-francais">Permis de travail au Vietnam pour les Français</a>.</p>

    <h2 id="section-5">5. Le processus de recrutement au Vietnam</h2>
    <p>Le recrutement au Vietnam suit un déroulement assez classique, mais avec quelques particularités locales :</p>
    <ol>
      <li><strong>Candidature en ligne</strong> : CV en anglais conseillé pour les postes internationaux, en vietnamien pour les employeurs locaux</li>
      <li><strong>Entretiens</strong> : souvent en anglais dans les entreprises à capitaux étrangers, parfois 2 à 3 tours</li>
      <li><strong>Négociation du salaire</strong> : les fourchettes sont rarement affichées ; il faut s'informer sur les standards du secteur</li>
      <li><strong>Contrat de travail</strong> : doit être établi en vietnamien (version bilingue possible) selon le droit vietnamien du travail (Bộ luật Lao động 2019)</li>
      <li><strong>Permis de travail</strong> : l'employeur initie la démarche avant ou peu après la prise de poste</li>
    </ol>
    <p>Les périodes d'essai légales au Vietnam sont encadrées par l'article 25 du Bộ luật Lao động 2019 — jusqu'à 180 jours pour les postes de direction, 60 jours pour les postes exigeant un diplôme supérieur, 30 jours pour les qualifications intermédiaires et 6 jours pour les travaux simples. Pendant l'essai, la loi garantit au moins 85 % du salaire du poste. Deux vigilances de candidat étranger : ne commence jamais un « essai » sans écrit, et cale la question du permis de travail (ou de ton exemption) AVANT le premier jour — un essai informel te place exactement dans la zone d'illégalité décrite plus haut.</p>

    <h2 id="section-6">6. Salaires indicatifs par secteur</h2>
    <p>Ces chiffres sont des ordres de grandeur observés sur le marché. Ils varient selon l'expérience, le secteur exact et l'employeur. Voir l'article détaillé : <a href="salaires-vietnam-expatries-2026">Salaires au Vietnam en 2026</a>.</p>

    <div class="table-wrapper">
    <table>
      <thead><tr><th>Secteur</th><th>Salaire mensuel indicatif (USD)</th></tr></thead>
      <tbody>
        <tr><td>Enseignement FLE (contrat local)</td><td>700 – 1 500</td></tr>
        <tr><td>IT / Développeur</td><td>1 500 – 4 000</td></tr>
        <tr><td>Finance / Comptabilité</td><td>1 200 – 3 000</td></tr>
        <tr><td>Hôtellerie / F&amp;B manager</td><td>1 200 – 2 500</td></tr>
        <tr><td>Marketing digital</td><td>1 000 – 2 500</td></tr>
        <tr><td>Direction / Management</td><td>3 000 – 8 000+</td></tr>
      </tbody>
    </table>
    </div>
    <p>Le salaire minimum légal pour un travailleur en Zone 1 (Hanoï, HCMV centres) est de <strong>4 960 000 VND/mois</strong> (~196 USD) depuis le 1er juillet 2024 (Décret 74/2024/NĐ-CP).</p>

    <h2 id="section-7">7. Le réseau : le canal qui bat toutes les plateformes</h2>
    <p>Au Vietnam plus qu'ailleurs, les postes intéressants circulent d'abord par recommandation — la culture des relations (quan hệ) structure le marché de l'emploi comme le reste de la société. Beaucoup de postes ne sont tout simplement jamais publiés : ils se pourvoient par le bouche-à-oreille avant même qu'une annonce soit rédigée. Les carrefours à travailler pour un Français :</p>
    <ul>
      <li><strong>La CCI France Vietnam (CCIFV)</strong> : ses événements à Hanoï et HCMV rassemblent toute la communauté d'affaires française — le meilleur rendement networking par heure investie pour un profil business.</li>
      <li><strong>Les groupes Facebook et LinkedIn</strong> d'expatriés et de professionnels (« Français au Vietnam », groupes sectoriels) : les annonces y paraissent souvent avant les plateformes, et une candidature recommandée par un membre part avec dix longueurs d'avance.</li>
      <li><strong>Les coworkings et leurs événements</strong> : voir <a href="coworkings-hanoi-hcmv-2026">le guide des coworkings</a> — l'écosystème startup recrute beaucoup par cooptation.</li>
      <li><strong>Le réseau familial vietnamien</strong>, si tu es en couple mixte : la famille élargie « connaît toujours quelqu'un », et une introduction personnelle vaut de l'or dans la culture locale. Ne néglige pas ce canal par pudeur française.</li>
    </ul>

    <h3>Les erreurs qui coûtent des mois de recherche</h3>
    <p>Quatre pièges reviennent sans cesse chez les Français qui galèrent : postuler uniquement sur les plateformes internationales en ignorant VietnamWorks et les canaux locaux ; envoyer le même CV français traduit mot à mot sans l'adapter aux codes locaux (voir section suivante) ; viser exclusivement un salaire « niveau expat » alors que le poste convoité est un poste local — mieux vaut négocier une progression rapide après la période d'essai qu'être écarté d'office ; et enfin rester dans la bulle francophone, alors que la majorité des offres intéressantes circulent en anglais dans des cercles internationaux ou vietnamiens. Corriger ces quatre points ne garantit rien, mais les cumuler garantit presque l'échec.</p>

    <h2 id="section-8">8. CV et entretien : les codes locaux</h2>
    <p>Quelques différences avec les usages français qui évitent les faux pas :</p>
    <ul>
      <li><strong>Le CV vietnamien est plus personnel</strong> : photo quasi systématique, âge et situation familiale souvent mentionnés — des informations qu'un recruteur français n'oserait pas demander. Pour les employeurs internationaux, le format anglo-saxon sobre reste la norme ; pour les employeurs locaux, adapte-toi aux usages.</li>
      <li><strong>La question du salaire arrive tôt et directement</strong> : « quel est ton salaire attendu ? » dès le premier échange n'est pas une grossièreté, c'est l'usage. Prépare ta réponse en net (voir <a href="salaires-vietnam-expatries-2026">le guide salaires</a>).</li>
      <li><strong>La ponctualité et la présentation comptent double</strong> pour un candidat étranger : tu es aussi évalué sur ta capacité à respecter les codes — arrive en avance, soigné, avec des copies papier de ton CV.</li>
      <li><strong>Les tests pratiques sont fréquents</strong> dans la tech et le marketing : cas concrets, périodes d'essai courtes mais réelles. Le diplôme ouvre la porte, la démonstration la franchit.</li>
    </ul>

    <h2 id="section-9">9. L'atout méconnu du conjoint de Vietnamien(ne)</h2>
    <p>Si tu es marié(e) à un(e) Vietnamien(ne), tu abordes ce marché avec trois avantages structurels : l'<strong>exemption de permis de travail</strong> (l'employeur n'a pas à monter le lourd dossier GPLĐ — un argument d'embauche réel face à un candidat étranger « ordinaire ») ; la <strong>stabilité perçue</strong> (un conjoint installé avec sa famille locale rassure sur la durée, là où l'expatrié célibataire est soupçonné de repartir dans dix-huit mois) ; et le <strong>réseau familial</strong> évoqué plus haut. Mentionne sobrement ta situation dans ta candidature — au Vietnam, c'est un atout à faire valoir, pas une information privée à taire.</p>
    <p>Dernier conseil de méthode : traite ta recherche comme un projet, pas comme une loterie. Fixe-toi un rythme hebdomadaire (candidatures ciblées, messages réseau, un événement physique), tiens un tableau de suivi, et relance systématiquement après dix jours de silence — la relance polie est bien perçue localement. La plupart des Français qui décrochent un poste au Vietnam le font entre le deuxième et le sixième mois de recherche active sur place : c'est un marathon court, pas un sprint, et la régularité y bat le talent brut. Bonne chance — et le réseau CapVietnam est là pour les questions de visa et d'installation qui suivront.</p>

    <?php
    $page_sources = [
      ['label' => 'Thư Viện Pháp Luật — base des textes juridiques vietnamiens (en vietnamien)', 'url' => 'https://thuvienphapluat.vn'],
      ['label' => 'Portail du Gouvernement vietnamien (en vietnamien)', 'url' => 'https://chinhphu.vn'],
    ];
    include '_article-sources.php';
    ?>

    <div id="section-faq">
      <h2>Questions fréquentes</h2>
      <?php foreach ($page_faq as $i => $item): ?>
      <details <?= $i===0?'open':'' ?>>
        <summary><?= htmlspecialchars($item['q']) ?></summary>
        <p><?= $item['a'] ?></p>
      </details>
      <?php endforeach; ?>
    </div>

  </main>
</div>

<div class="cta-newsletter">
  <div class="cta-newsletter-inner">
    <div class="cta-newsletter-text">
      <strong>Tu cherches du travail au Vietnam ?</strong>
      <span>Reçois les prochains articles sur l'emploi, les salaires et l'entrepreneuriat au Vietnam.</span>
    </div>
    <a href="newsletter-capvietnam" class="cta-newsletter-btn">Recevoir la newsletter</a>
  </div>
</div>

<div class="author-box">
  <img src="assets/img/anthony-vietnam.jpg" alt="Anthony Bouillon - Cap Vietnam" class="author-avatar" onerror="this.style.display='none'">
  <div class="author-box-text">
    <div class="author-box-name">Anthony Bouillon</div>
    <div class="author-box-bio">Expatrié français installé au Vietnam. Je partage mon expérience du quotidien vietnamien : vie pratique, démarches, travail et couple franco-vietnamien.</div>
    <a href="a-propos-capvietnam" class="author-box-link">En savoir plus sur l'auteur</a> · <a href="mes-livres" class="author-box-link">📚 Mes livres</a>
  </div>
</div>

<?php include '_article-comments.php'; ?>
<?php include '_related-articles.php'; ?>
<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
