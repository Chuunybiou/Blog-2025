<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Enseigner le français au Vietnam en 2026 : qualifications, salaires et démarches';
$page_description = 'Comment devenir professeur de FLE au Vietnam ? Institut Français, Alliance Française, écoles privées ou en ligne : salaires, qualifications requises et statuts juridiques pour enseigner le français au Vietnam.';
$page_canonical   = SITE_URL . '/enseigner-francais-vietnam-fle';
$page_og_title    = 'Enseigner le français au Vietnam en 2026 : le guide complet';
$page_og_desc     = 'IFV, Alliance Française, EFIV, écoles privées ou cours en ligne : tout ce qu\'un professeur de français doit savoir pour enseigner au Vietnam.';
$page_og_url      = SITE_URL . '/enseigner-francais-vietnam-fle';
$page_og_image    = 'https://images.unsplash.com/photo-1509062522246-3755977927d7?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Enseigner le français au Vietnam en 2026 : qualifications, salaires et démarches',
  'datePublished'   => '2026-09-28',
  'dateModified'    => '2026-09-28',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/enseigner-francais-vietnam-fle',
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
  ['q' => 'Quelle qualification faut-il pour enseigner le français à l\'Institut Français du Vietnam ?',
   'a' => 'L\'Institut Français du Vietnam demande généralement un Master FLE/FLS (Français Langue Étrangère / Français Langue Seconde) ou équivalent, avec une expérience d\'enseignement. Le DAEFLE (Diplôme d\'aptitude à l\'enseignement du français langue étrangère) du CNED peut également être valorisé. Pour les postes de lecteurs ou assistants, les exigences peuvent être moins strictes. Consulte les offres d\'emploi directement sur le site de l\'IFV (ifvietnam.net) ou de la Direction des Ressources Humaines de l\'Institut Français de Paris.'],
  ['q' => 'Peut-on enseigner le français au Vietnam sans expérience ?',
   'a' => 'C\'est difficile dans les établissements institutionnels (IFV, Alliance Française) qui exigent une expérience. En revanche, les écoles privées bilingues vietnamiennes ou les centres de langues locaux recrutent parfois des débutants, en particulier des natifs français. Pour l\'enseignement en ligne, aucune barrière réglementaire : des plateformes comme Italki ou Preply permettent de commencer sans diplôme, même si une certification FLE améliore le profil et permet de demander des tarifs plus élevés.'],
  ['q' => 'Quelle est la différence entre l\'Institut Français du Vietnam et l\'Alliance Française ?',
   'a' => 'L\'Institut Français du Vietnam (IFV) est un établissement public placé sous la tutelle de l\'Ambassade de France. Il a des antennes à Hanoï, Hô-Chi-Minh-Ville, Da Nang et Huế. L\'Alliance Française est un réseau associatif indépendant, présent à Hanoï et Hô-Chi-Minh-Ville au Vietnam. Les deux enseignent le français et organisent des activités culturelles, mais leurs structures juridiques, conditions de recrutement et grilles de rémunération sont distinctes.'],
  ['q' => 'Comment déclarer les revenus de cours de français en ligne depuis le Vietnam ?',
   'a' => 'Si tu es résident fiscal vietnamien et que tu donnes des cours en ligne à des élèves étrangers, tes revenus sont en principe imposables au Vietnam. La situation pratique dépend de ta structure : micro-entreprise française, portage salarial, ou auto-déclaration vietnamienne. Consulte un expert-comptable spécialisé en expatriation pour ta situation exacte. Voir aussi les articles <a href="fiscalite-expat-france-vietnam">Fiscalité expat France-Vietnam</a> et <a href="portage-salarial-ou-micro-entreprise-vietnam">Portage salarial ou micro-entreprise</a>.'],
  ['q' => 'Faut-il parler vietnamien pour enseigner le français au Vietnam ?',
   'a' => 'Non, ce n\'est pas exigé : la pédagogie FLE moderne privilégie l\'immersion en français, et les établissements institutionnels enseignent sans passer par la langue locale. Mais quelques bases de vietnamien changent la vie au quotidien (administration, relations avec les familles des élèves) et sont un vrai plus pour enseigner aux enfants et aux grands débutants. Voir le guide <a href="apprendre-vietnamien-couple">apprendre le vietnamien</a>.'],
  ['q' => 'Peut-on vivre uniquement de l\'enseignement du français au Vietnam ?',
   'a' => 'Oui, mais rarement avec un seul employeur. Le modèle courant est un cumul : un mi-temps ou des vacations en institution ou en centre de langues, complétés par des cours particuliers et/ou des cours en ligne. Ce cumul permet d\'atteindre un revenu confortable rapporté au coût de la vie local, tout en lissant la saisonnalité (Tết, vacances scolaires). Les postes à temps plein bien rémunérés existent (EFIV, écoles bilingues haut de gamme) mais sont peu nombreux et exigeants sur les qualifications.'],
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
      <span>Enseigner le français au Vietnam</span>
    </div>
    <span class="article-badge-hero">Emploi &amp; Entreprendre</span>
    <h1>Enseigner le français au Vietnam en 2026 : qualifications, salaires et statuts</h1>
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
      <li><a href="#section-1">Les types d'employeurs</a></li>
      <li><a href="#section-2">Qualifications requises</a></li>
      <li><a href="#section-3">Salaires par type d'employeur</a></li>
      <li><a href="#section-4">Statut local ou détaché ?</a></li>
      <li><a href="#section-5">Enseigner en ligne depuis le Vietnam</a></li>
      <li><a href="#section-6">Permis de travail et formalités</a></li>
      <li><a href="#section-7">La réalité du métier au quotidien</a></li>
      <li><a href="#section-8">Construire sa clientèle de cours particuliers</a></li>
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

    <p class="article-intro">Enseigner le français au Vietnam est l'un des débouchés professionnels les plus accessibles pour un expatrié français. La langue française reste valorisée dans le système éducatif vietnamien, et la demande d'apprentissage est soutenue tant du côté des adultes professionnels que des familles souhaitant une éducation francophone pour leurs enfants. Mais les conditions, qualifications et salaires varient énormément selon le type d'employeur.</p>

    <p>Un peu de contexte pour comprendre le marché : le Vietnam est membre de l'<strong>Organisation internationale de la Francophonie</strong>, héritage d'une histoire commune avec la France qui a laissé des traces durables — classes bilingues dans le système public, départements de français dans les universités, et un attachement culturel réel chez une partie des familles éduquées. Le français n'est plus la première langue étrangère du pays (l'anglais domine largement), mais cette position de « langue de distinction » crée une demande plus qualitative que massive : des élèves motivés, des familles prêtes à payer pour un enseignant natif, et des débouchés concrets (études en France, DELF/DALF, carrières dans les entreprises françaises implantées localement). Pour un enseignant, cela signifie un marché plus étroit que celui de l'anglais, mais aussi moins concurrentiel entre natifs.</p>

    <h2 id="section-1">1. Les différents types d'employeurs</h2>

    <h3>Institut Français du Vietnam (IFV)</h3>
    <p>L'<strong>Institut Français du Vietnam</strong> est le principal acteur institutionnel de la promotion de la langue française. Il dispose d'antennes à Hanoï, Hô-Chi-Minh-Ville, Da Nang et Huế. Il recrute des professeurs de FLE sur dossier, prioritairement avec un master spécialisé et de l'expérience. Le site officiel est <strong>ifvietnam.net</strong>. Certains postes sont gérés depuis Paris via l'Institut Français (institutfrancais.com).</p>

    <h3>Alliance Française</h3>
    <p>L'<strong>Alliance Française</strong> est présente à Hanoï et Hô-Chi-Minh-Ville. Structure associative indépendante, elle recrute également des professeurs qualifiés. Les conditions de recrutement et de rémunération peuvent différer de l'IFV. Pour postuler : alliancefrancaise.org.vn.</p>

    <h3>EFIV — École Française Internationale du Vietnam</h3>
    <p>L'<strong>EFIV</strong> dispose du lycée Louis-Pasteur à Hanoï et d'un campus à Hô-Chi-Minh-Ville. Elle accueille des enseignants détachés de l'Éducation nationale française (AEFE) ou recrutés locaux. Si tu es enseignant titulaire de l'Éducation nationale, tu peux postuler à un poste AEFE via le portail officiel : aefe.fr.</p>

    <h3>Écoles bilingues et centres de langues privés</h3>
    <p>Les écoles bilingues français-vietnamien se sont multipliées dans les grandes villes, notamment à Hanoï (quartier Tây Hồ) et Hô-Chi-Minh-Ville. Les centres de langues locaux recrutent des enseignants natifs, parfois sans exiger de master FLE, pour des cours adultes ou enfants. Les salaires sont inférieurs aux institutions mais l'accès est plus facile.</p>

    <h3>Universités</h3>
    <p>Plusieurs universités vietnamiennes disposent de départements de français (Université Nationale de Hanoï, Université de Huế, USSH à HCMV). Les postes de lecteurs ou de professeurs de langue y sont disponibles, souvent via des conventions bilatérales ou des recrutements locaux. Les salaires horaires sont plus bas, mais les postes incluent parfois un logement ou des avantages annexes.</p>

    <h2 id="section-2">2. Qualifications requises</h2>

    <div class="table-wrapper">
    <table>
      <thead><tr><th>Type d'employeur</th><th>Qualification minimum</th><th>Expérience</th></tr></thead>
      <tbody>
        <tr><td>IFV / Alliance Française</td><td>Master FLE/FLS ou DAEFLE</td><td>Souvent exigée (1-3 ans)</td></tr>
        <tr><td>EFIV (lycée français)</td><td>Titulaire EN (CAPES, agrégation)</td><td>Requise</td></tr>
        <tr><td>École bilingue privée</td><td>Licence + expérience</td><td>Appréciée</td></tr>
        <tr><td>Centre de langues local</td><td>Natif + parfois aucune</td><td>Non obligatoire</td></tr>
        <tr><td>Université</td><td>Master ou licence selon poste</td><td>Variable</td></tr>
        <tr><td>Cours en ligne</td><td>Aucune (légalement)</td><td>Non obligatoire</td></tr>
      </tbody>
    </table>
    </div>

    <p>Le <strong>DAEFLE</strong> (Diplôme d'Aptitude à l'Enseignement du Français Langue Étrangère) est délivré par le CNED en partenariat avec l'Alliance Française de Paris. C'est une qualification reconnue internationalement, accessible à distance, qui ouvre de nombreuses portes dans les réseaux institutionnels. Pour plus d'informations : cned.fr.</p>

    <p>Point pratique souvent découvert trop tard : pour un contrat local avec permis de travail, tes diplômes devront être <strong>légalisés</strong> pour être reconnus par l'administration vietnamienne (légalisation du document en France, traduction certifiée, puis légalisation consulaire côté vietnamien). La procédure prend plusieurs semaines — lance-la avant de partir, pas une fois l'offre d'emploi en main. Garde aussi des copies certifiées de tes relevés de notes : certains employeurs institutionnels les demandent en complément du diplôme.</p>

    <p>Enfin, être natif ne suffit pas à savoir enseigner sa langue : la grammaire française « de l'intérieur » (pourquoi dit-on « je vais AU Vietnam » mais « EN France » ?) déstabilise beaucoup de débutants face à leurs premiers élèves. Si tu pars sans formation FLE, investis au minimum dans un manuel de didactique et observe des cours avant de donner les tiens — ta réputation locale se construit (ou se ruine) dès les premières semaines.</p>

    <h2 id="section-3">3. Salaires par type d'employeur</h2>
    <p>Les salaires dans l'enseignement du FLE au Vietnam sont généralement exprimés à l'heure ou au mois selon le type de contrat. Ces chiffres sont des ordres de grandeur observés sur le marché et peuvent varier selon l'ancienneté, le niveau d'enseignement et la négociation individuelle.</p>

    <div class="table-wrapper">
    <table>
      <thead><tr><th>Type d'employeur</th><th>Tarif horaire indicatif</th><th>Notes</th></tr></thead>
      <tbody>
        <tr><td>IFV / Alliance Française</td><td>20 – 30 USD/h</td><td>Cours de groupe, contrat temps partiel souvent</td></tr>
        <tr><td>École bilingue privée</td><td>15 – 25 USD/h</td><td>Variable selon établissement</td></tr>
        <tr><td>Centre de langues local</td><td>10 – 18 USD/h</td><td>Horaires décalés (soirs, week-ends)</td></tr>
        <tr><td>Université</td><td>8 – 15 USD/h</td><td>Logement parfois inclus</td></tr>
        <tr><td>Cours en ligne (clients directs)</td><td>15 – 50 USD/h</td><td>Très variable selon clients et réputation</td></tr>
      </tbody>
    </table>
    </div>

    <p>Pour les postes à temps plein (contrat de 40h/semaine), les salaires mensuels nets se situent généralement entre <strong>700 et 1 500 USD</strong> pour un enseignant FLE en contrat local. Les postes AEFE (détachés) offrent des conditions de rémunération différentes, calculées sur la grille de l'Éducation nationale française, hors indemnités d'expatriation.</p>

    <h2 id="section-4">4. Statut : contrat local ou détachement ?</h2>

    <h3>Contrat local vietnamien</h3>
    <p>L'enseignant est recruté directement par un employeur vietnamien (IFV, école, centre de langues). Il doit obtenir un <strong>permis de travail</strong> (giấy phép lao động). Il cotise aux régimes sociaux vietnamiens. Sa résidence fiscale est probablement vietnamienne s'il y passe plus de 183 jours par an — il est alors imposable au Vietnam sur ses revenus locaux selon les taux PIT vietnamiens (5 à 35 %, 7 tranches).</p>
    <p>Pour plus de détails : <a href="permis-de-travail-vietnam-francais">Permis de travail au Vietnam</a>.</p>

    <h3>Détachement via l'AEFE ou l'IFV</h3>
    <p>Les enseignants titulaires de l'Éducation nationale peuvent être détachés au Vietnam via l'<strong>AEFE</strong> (Agence pour l'Enseignement Français à l'Étranger) pour les lycées EFIV. Ce statut maintient les droits à la retraite en France et la couverture de la Sécurité sociale. La rémunération intègre des indemnités d'expatriation. Les candidatures passent par le portail AEFE (aefe.fr).</p>

    <h2 id="section-5">5. Enseigner le français en ligne depuis le Vietnam</h2>
    <p>Donner des cours de français en ligne depuis le Vietnam est une activité exercée par de nombreux expatriés. C'est une solution flexible qui ne nécessite pas de permis de travail si tes clients et ta structure commerciale sont entièrement hors du Vietnam.</p>

    <h3>Les plateformes</h3>
    <ul>
      <li><strong>Italki</strong> et <strong>Preply</strong> : places de marché pour cours particuliers en ligne ; profil public, tarifs libres, clients du monde entier</li>
      <li><strong>Verbling</strong> : orienté professeurs qualifiés</li>
      <li><strong>Clients directs</strong> : via les réseaux sociaux, TikTok, YouTube ou bouche-à-oreille — modèle le plus rentable une fois la réputation construite</li>
    </ul>

    <h3>Structure juridique et fiscalité</h3>
    <p>Si tu donnes des cours en ligne à des clients français depuis le Vietnam, la question de ta structure commerciale (micro-entreprise française, portage salarial, auto-déclaration VN) est importante. Voir l'article <a href="portage-salarial-ou-micro-entreprise-vietnam">Portage salarial ou micro-entreprise au Vietnam</a> pour analyser ta situation, et <a href="residence-fiscale-france-vietnam-183-jours">le guide résidence fiscale</a> pour comprendre où tes revenus sont imposables.</p>

    <h3>Fuseau horaire : un vrai atout</h3>
    <p>Le Vietnam vit en UTC+7, soit 5 à 6 heures d'avance sur la France selon la saison. Concrètement, ton après-midi et ta soirée vietnamiens correspondent à la matinée et au début d'après-midi français — les créneaux les plus demandés par des élèves adultes européens (pause déjeuner, télétravail). Tu peux donc remplir tes journées avec des élèves français ou européens sans jamais travailler la nuit, ce que les professeurs en ligne installés en Amérique ne peuvent pas faire. Combiné au coût de la vie local (voir <a href="budget-mensuel-hanoi-2026">le budget mensuel à Hanoï</a>), c'est ce qui rend le modèle « prof en ligne installé au Vietnam » économiquement viable même à volume d'heures modéré.</p>

    <h2 id="section-6">6. Permis de travail, visa et formalités</h2>
    <p>Enseigner physiquement au Vietnam pour un employeur local est un travail salarié comme un autre : il exige en principe un <strong>permis de travail</strong> (giấy phép lao động), demandé par l'employeur, avec diplômes légalisés, certificat médical et extrait de casier judiciaire. Les établissements institutionnels (IFV, Alliance, EFIV) connaissent parfaitement la procédure et la pilotent pour leurs recrues ; les petits centres de langues sont parfois moins rigoureux — et c'est là qu'il faut être vigilant.</p>
    <ul>
      <li><strong>Refuse le travail « au noir »</strong> : certains centres proposent de payer des heures en liquide sous visa touristique. Travailler sans permis expose l'enseignant à une amende, voire une expulsion, et l'employeur à des sanctions — et tu n'as aucun recours en cas d'impayé.</li>
      <li><strong>Cas du conjoint de Vietnamien(ne)</strong> : marié(e) à un(e) ressortissant(e) vietnamien(ne), tu es <strong>exempté de permis de travail</strong> (article 154 du Code du travail vietnamien) — il reste une simple confirmation d'exemption à faire établir. C'est un avantage décisif pour te faire embaucher par un centre de langues qui ne veut pas monter un dossier GPLĐ complet. Détails dans <a href="permis-de-travail-vietnam-francais">le guide du permis de travail</a>.</li>
      <li><strong>Le visa suit l'emploi</strong> : le contrat de travail avec permis ouvre droit à un visa/une carte de séjour liés à l'employeur ; le conjoint exempté passe par le visa famille (TT) et la carte de résidence temporaire. Voir <a href="carte-residence-temporaire-vietnam">le guide de la carte de résidence</a>.</li>
      <li><strong>L'enseignement 100 % en ligne pour des clients hors Vietnam</strong> est une zone à part : pas d'employeur local, donc pas de permis de travail à demander — mais un statut fiscal à clarifier, comme vu en section 5.</li>
    </ul>

    <h2 id="section-7">7. La réalité du métier au quotidien</h2>
    <p>Le FLE au Vietnam est un métier de soirées et de week-ends. Les adultes travaillent en journée et les enfants sont à l'école : les créneaux les plus remplis vont de 18h à 21h en semaine et s'étalent le samedi-dimanche. Un temps plein en centre de langues signifie souvent des journées coupées, avec des trous l'après-midi que les enseignants expérimentés remplissent de cours particuliers ou de cours en ligne.</p>
    <p>Les publics sont variés et n'exigent pas la même pédagogie : lycéens des classes bilingues préparant le DELF, étudiants visant une poursuite d'études en France (dossiers Campus France, entretiens), adultes salariés d'entreprises françaises, retraités francophiles, et enfants de couples franco-vietnamiens dont les parents veulent entretenir la langue paternelle ou maternelle. La préparation aux <strong>certifications officielles DELF et DALF</strong> — organisées au Vietnam par les centres agréés du réseau culturel français — est le segment le plus rémunérateur pour un indépendant : objectif clair, échéance datée, familles prêtes à investir.</p>
    <p>Compte aussi avec la saisonnalité : l'année d'enseignement suit le calendrier scolaire vietnamien (rentrée début septembre), et tout s'arrête pendant les congés du <a href="tet-nouvel-an-lunaire-vietnam">Tết</a> — deux semaines où centres fermés et élèves en famille signifient zéro revenu pour un payé-à-l'heure. Les enseignants installés lissent leur budget en conséquence.</p>

    <h2 id="section-8">8. Construire sa clientèle de cours particuliers</h2>
    <p>Les cours particuliers en présentiel sont le complément de revenu naturel de tout prof de FLE installé — et parfois l'activité principale. Le tarif se négocie librement et se situe typiquement au-dessus du tarif horaire des centres, puisqu'il n'y a pas d'intermédiaire. Ce qui fonctionne pour se lancer :</p>
    <ul>
      <li><strong>Le bouche-à-oreille via les élèves des centres</strong> : un élève satisfait recommande — c'est le canal n°1, mais vérifie que ton contrat avec le centre n'interdit pas de récupérer ses élèves.</li>
      <li><strong>Les groupes Facebook locaux</strong> d'apprenants de français et d'expatriés : une présentation sérieuse avec qualifications et méthode y génère des premiers contacts.</li>
      <li><strong>Le réseau familial et amical vietnamien</strong>, si tu es en couple mixte : la recommandation personnelle pèse énormément dans la culture locale — et donner quelques cours aux cousins est souvent le premier pas.</li>
      <li><strong>Un positionnement clair</strong> : « préparation DELF B2 pour dossier Campus France » attire plus et se facture mieux que « cours de français généraux ». La spécialisation rassure les familles qui investissent dans un objectif précis.</li>
    </ul>
    <p>Dernière recommandation : formalise un minimum (fiche de présence, paiement par paquet d'heures d'avance, politique d'annulation annoncée). La relation prof-élève au Vietnam est chaleureuse, mais les annulations de dernière minute sont fréquentes si rien n'est cadré — et ton temps est ta seule matière première.</p>

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
      <strong>Tu veux enseigner le français au Vietnam ?</strong>
      <span>Reçois les prochains guides sur l'emploi et l'entrepreneuriat pour les expatriés français.</span>
    </div>
    <a href="newsletter-capvietnam" class="cta-newsletter-btn">Recevoir la newsletter</a>
  </div>
</div>

<div class="author-box">
  <img src="assets/img/anthony-vietnam.jpg" alt="Anthony Bouillon - Cap Vietnam" class="author-avatar" onerror="this.style.display='none'">
  <div class="author-box-text">
    <div class="author-box-name">Anthony Bouillon</div>
    <div class="author-box-bio">Expatrié français installé au Vietnam. Je partage mon expérience du quotidien vietnamien : vie pratique, démarches, travail et couple franco-vietnamien.</div>
    <a href="a-propos-capvietnam" class="author-box-link">En savoir plus sur l'auteur</a>
  </div>
</div>

<?php include '_article-comments.php'; ?>
<?php include '_related-articles.php'; ?>
<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
