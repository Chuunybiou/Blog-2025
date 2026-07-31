<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Vivre à Hanoï avec un enfant : crèches, école française et vie pratique en 2026';
$page_description = 'Crèches bilingues, Lycée Français Alexandre Yersin (LFAY), tarifs, inscription via EDUKA : guide pratique pour les couples franco-vietnamiens qui élèvent un enfant à Hanoï.';
$page_canonical   = SITE_URL . '/vivre-hanoi-avec-enfant-ecole-creche';
$page_og_title    = 'Vivre à Hanoï avec un enfant en 2026 : école, crèche et tarifs';
$page_og_desc     = 'Lycée Français Alexandre Yersin, La Petite École, Acacia : tout sur l\'école française à Hanoï — frais de scolarité, procédure d\'inscription EDUKA, crèches bilingues.';
$page_og_url      = SITE_URL . '/vivre-hanoi-avec-enfant-ecole-creche';
$page_og_image    = 'https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Vivre à Hanoï avec un enfant : crèches, école française et vie pratique en 2026',
  'datePublished'   => '2026-07-06',
  'dateModified'    => '2026-07-06',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/vivre-hanoi-avec-enfant-ecole-creche',
  'image'           => 'https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=1200&q=80',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie pratique au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'jade';
$article_hero_bg  = '#1a3a2a';
$article_glow     = 'rgba(27,107,82,0.15)';
$article_badge    = 'rgba(191,74,42,0.25)';
$article_badge_c  = '#e8856a';

$article_category     = 'Vie Pratique';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vie-pratique';

$page_faq = [
  ['q' => 'Les enfants d\'expats s\'adaptent-ils bien à Hanoï ?',
   'a' => 'En général oui. Les grandes écoles françaises et internationales créent un environnement sécurisant avec d\'autres enfants d\'expats. La difficulté principale est la pollution de l\'air en hiver (novembre-mars) qui peut nécessiter un purificateur à la maison et des masques pour les sorties. Les enfants s\'adaptent très vite à la vie au Vietnam, notamment grâce aux interactions naturelles avec les voisins et la famille vietnamienne.'],
  ['q' => 'Mon enfant peut-il rejoindre le LFAY en cours d\'année scolaire ?',
   'a' => 'Oui, des inscriptions en cours d\'année sont possibles pour les familles arrivant pour des raisons professionnelles. Contacte directement le service des inscriptions du LFAY (lfay.com.vn) — ils ont une procédure spécifique pour les arrivées hors période standard EDUKA.'],
  ['q' => 'Quelle est la différence entre LFAY et La Petite École ?',
   'a' => 'Le LFAY est le lycée français homologué AEFE couvrant de la maternelle (PS) au baccalauréat, situé en centre-ville de Hanoï. La Petite École (LPE) accueille uniquement les enfants de 12 mois à 6 ans (crèche et maternelle), dans le quartier Tay Ho. Les deux établissements sont affiliés à l\'AEFE et suivent le programme français, mais LPE est plus petite et plus spécialisée dans la petite enfance.'],
  ['q' => 'Mon enfant doit-il parler français pour entrer au LFAY ?',
   'a' => 'Pour la maternelle et le CP, non — c\'est l\'âge où les enfants apprennent. Pour les classes supérieures, un niveau en français est requis. Le LFAY peut organiser des tests de niveau avant l\'admission pour les plus grands.'],
  ['q' => 'Comment fonctionnent les bourses scolaires AEFE ?',
   'a' => 'Les bourses sont réservées aux enfants de nationalité française, inscrits au registre des Français de l\'étranger et scolarisés dans un établissement homologué comme le LFAY. Elles sont attribuées sur critères de ressources du foyer, après dépôt d\'un dossier auprès du consulat, examiné en commission locale. La prise en charge peut être partielle ou totale selon la situation. Les campagnes ont des dates précises chaque année — renseigne-toi auprès de l\'ambassade dès que le projet de scolarisation se dessine.'],
  ['q' => 'Une crèche vietnamienne est-elle un bon choix pour un enfant franco-vietnamien ?',
   'a' => 'Pour beaucoup de familles mixtes, oui : coût réduit, immersion en vietnamien au meilleur âge, proximité du domicile et intégration naturelle dans le quartier. Le point de vigilance est le passage ultérieur vers le système français : plus l\'enfant y entre tard, plus le français doit avoir été construit à la maison entre-temps. La combinaison « crèche vietnamienne + français quotidien avec le parent francophone » fonctionne bien, à condition d\'être réellement tenue.'],
];

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero" style="background:<?= $article_hero_bg ?>;">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Articles</a><span class="breadcrumb-sep">›</span>
      <span>Vivre à Hanoï avec un enfant</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">Famille</span>
    <h1>Vivre à Hanoï avec un enfant : crèches, école française et vie pratique</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juillet 2026</span>
      <span>⏱ 12 min de lecture</span>
    </div>
    <p style="color:rgba(250,248,244,0.78);font-size:1.05rem;line-height:1.7;margin-top:1.25rem;">
      Hanoï avec un enfant, c'est plus accessible qu'on ne le croit. Le réseau scolaire français est solide, les crèches bilingues existent, et la vie de quartier est naturellement adaptée aux familles. Ce guide fait le point sur les options concrètes pour les couples franco-vietnamiens.
    </p>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-creche">Crèches et petite enfance</a></li>
      <li><a href="#section-lfay">Lycée Français Alexandre Yersin (LFAY)</a></li>
      <li><a href="#section-tarifs">Frais de scolarité 2026-2027</a></li>
      <li><a href="#section-inscription">Inscription : procédure EDUKA</a></li>
      <li><a href="#section-alternatives">Les alternatives : international et public</a></li>
      <li><a href="#section-admin">L'enfant franco-vietnamien : côté administratif</a></li>
      <li><a href="#section-langues">Bilinguisme : quelle langue à la maison ?</a></li>
      <li><a href="#section-vie">Vie pratique avec un enfant à Hanoï</a></li>
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
    <p><strong>Un enfant change tout dans la gestion d'une vie d'expat.</strong> Les questions d'école, de pédiatre, de crèche et de sécurité quotidienne deviennent prioritaires. À Hanoï, les familles franco-vietnamiennes ont accès à un réseau d'établissements français solides — mais les tarifs et les procédures d'inscription méritent d'être anticipés.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=1200&q=80" alt="Enfants en classe école" width="1200" height="675" loading="lazy">

    <h2 id="section-creche">Crèches et petite enfance (0-6 ans)</h2>
    <p>Avant l'entrée à l'école maternelle, plusieurs options s'offrent aux familles à Hanoï selon l'âge de l'enfant et la langue souhaitée.</p>

    <h3>La Petite École Hanoï (LPE)</h3>
    <p>La Petite École est une école française bilingue (français + anglais) accueillant les enfants <strong>de 12 mois à 6 ans</strong>. Elle est affiliée à l'AEFE (Agence pour l'Enseignement Français à l'Étranger) et suit le programme français, avec une certification du Ministère de l'Éducation nationale française obtenue en 2024. Elle fait partie du groupe Odyssey Education.</p>
    <ul>
      <li><strong>Adresse</strong> : 52B Duong Tay Ho, Quang An, Tay Ho, Hanoï</li>
      <li><strong>Contact</strong> : <a href="mailto:contact@lpehanoi.com">contact@lpehanoi.com</a> — <a href="https://www.lpehanoi.com" target="_blank" rel="noopener">lpehanoi.com</a></li>
      <li><strong>Langue</strong> : immersion français et anglais, introduction au vietnamien</li>
      <li><strong>Tarifs</strong> : non affichés en ligne — contacter directement l'école pour un devis</li>
    </ul>

    <h3>Acacia Hanoï Tay Ho</h3>
    <p>École maternelle française homologuée AEFE depuis juin 2024, située dans le quartier de Tay Ho (rue To Ngoc Van). Environnement à taille humaine avec jardin.</p>
    <ul>
      <li><strong>Site</strong> : <a href="https://acacia-education.com/fr/creche-et-ecole-maternelle-francaise-de-hanoi-tay-ho/" target="_blank" rel="noopener">acacia-education.com</a></li>
      <li><strong>Tarifs</strong> : sur demande directe à l'école</li>
    </ul>

    <h3>Crèches vietnamiennes</h3>
    <p>Pour les enfants de moins de 12 mois ou les familles souhaitant une immersion en vietnamien dès le plus jeune âge, des crèches privées vietnamiennes de qualité existent dans tous les quartiers. Les tarifs sont nettement inférieurs aux établissements français (comptez 3 à 8 millions VND par mois selon le quartier et les prestations). Le bouche-à-oreille au sein de la famille vietnamienne est souvent le meilleur guide pour en trouver une de confiance.</p>

    <h2 id="section-lfay">Lycée Français Alexandre Yersin (LFAY)</h2>
    <p>Le LFAY est l'établissement de référence pour la scolarité française à Hanoï, de la maternelle (Petite Section, 3 ans) au baccalauréat. Il fait partie du réseau AEFE et accueille environ 900 élèves de nationalités diverses.</p>
    <ul>
      <li><strong>Site</strong> : <a href="https://lfay.com.vn" target="_blank" rel="noopener">lfay.com.vn</a></li>
      <li><strong>Localisation</strong> : Hanoï, centre-ville (Dong Da)</li>
      <li><strong>Programme</strong> : programme français de l'Éducation nationale, de la maternelle au bac (général et technologique)</li>
    </ul>
    <h3>Ce que l'homologation AEFE change concrètement</h3>
    <p>« Homologué AEFE » n'est pas un label marketing : c'est une reconnaissance officielle du Ministère de l'Éducation nationale française qui garantit trois choses très concrètes pour une famille :</p>
    <ul>
      <li><strong>La continuité scolaire</strong> : un enfant scolarisé au LFAY peut rejoindre n'importe quelle école française — en France ou dans un autre lycée français du monde — sans examen d'admission ni rupture de programme. Pour les familles expatriées dont le parcours peut changer (retour en France, mutation ailleurs en Asie), c'est la vraie assurance.</li>
      <li><strong>Les diplômes français</strong> : brevet puis baccalauréat, passés sur place, avec la même valeur qu'en France pour l'accès aux études supérieures (Parcoursup inclus).</li>
      <li><strong>L'accès aux bourses scolaires</strong> : seuls les établissements homologués ouvrent droit aux bourses AEFE pour les enfants français (voir encadré plus bas).</li>
    </ul>
    <p>Le nom de l'établissement, au passage, raconte une histoire locale : Alexandre Yersin, médecin franco-suisse de l'Institut Pasteur, découvreur du bacille de la peste et fondateur de la ville de Đà Lạt, est l'une des figures françaises les plus respectées au Vietnam — des rues portent son nom dans tout le pays.</p>

    <h2 id="section-tarifs">Frais de scolarité 2026-2027</h2>
    <p>Les frais de scolarité au LFAY varient selon le niveau. Les tarifs ci-dessous s'appliquent aux élèves de nationalité française. Pour les autres nationalités, contacter directement l'école. Source : <a href="https://www.international-schools-database.com/in/hanoi/lyc-e-francais-alexandre-yersin-de-hanoi/fees" target="_blank" rel="noopener">International Schools Database</a> (données 2026-2027).</p>

    <table>
      <thead>
        <tr>
          <th>Niveau</th>
          <th>Âge</th>
          <th>Frais annuels (VND)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Maternelle (PS, MS, GS)</td>
          <td>3-5 ans</td>
          <td>149 523 074 VND</td>
        </tr>
        <tr>
          <td>Primaire (CP au CM2)</td>
          <td>6-10 ans</td>
          <td>165 703 928 VND</td>
        </tr>
        <tr>
          <td>Collège (6e à 3e)</td>
          <td>11-14 ans</td>
          <td>191 773 081 VND</td>
        </tr>
        <tr>
          <td>Lycée (2nde à Terminale)</td>
          <td>15-17 ans</td>
          <td>206 455 707 VND</td>
        </tr>
      </tbody>
    </table>

    <p><strong>Frais d'inscription (one-time, première année) : 11 985 818 VND</strong></p>

    <div class="tip-box">
      <strong>Aide à la scolarité pour les Français</strong>
      Les familles françaises expatriées peuvent solliciter une bourse scolaire auprès de l'Agence pour l'Enseignement Français à l'Étranger (AEFE). Les dossiers sont instruits par le consulat. Plus d'infos : <a href="https://aefe.gouv.fr" target="_blank" rel="noopener">aefe.gouv.fr</a>
    </div>

    <h2 id="section-inscription">Inscription au LFAY : la procédure EDUKA</h2>
    <p>Toutes les inscriptions au LFAY se font via le portail en ligne <strong>EDUKA</strong>. Un appel téléphonique ou une visite à l'école ne constituent pas une inscription.</p>

    <h3>Calendrier d'inscription (année scolaire 2026-2027)</h3>
    <ul>
      <li><strong>Ouverture du portail EDUKA</strong> : début février (généralement 1er-2 février)</li>
      <li><strong>Clôture des inscriptions</strong> : début mars</li>
      <li><strong>Décisions maternelle</strong> : début avril</li>
      <li><strong>Décisions primaire/secondaire</strong> : début mai (avec convocation aux tests de niveau si nécessaire)</li>
    </ul>

    <h3>Documents généralement demandés</h3>
    <ul>
      <li>Acte de naissance de l'enfant</li>
      <li>Livret de famille ou passeport</li>
      <li>Derniers bulletins scolaires (pour les classes supérieures à la maternelle)</li>
      <li>Carnet de vaccination à jour</li>
      <li>Preuve de résidence à Hanoï</li>
    </ul>

    <div class="warning-box">
      Le calendrier EDUKA peut varier d'une année à l'autre. Vérifie toujours les dates exactes sur <a href="https://lfay.com.vn" target="_blank" rel="noopener">lfay.com.vn</a> avant de planifier ton arrivée à Hanoï.
    </div>

    <h2 id="section-alternatives">Les alternatives : écoles internationales et système public</h2>
    <p>Le système français n'est pas la seule voie à Hanoï, et pour un couple franco-vietnamien la question mérite d'être posée à plat.</p>
    <h3>Les écoles internationales anglophones</h3>
    <p>Hanoï compte plusieurs écoles internationales réputées (UNIS Hanoi, British International School et d'autres), généralement situées dans les quartiers expat. Elles offrent des cursus IB ou britanniques de haut niveau — à des frais de scolarité généralement supérieurs à ceux du LFAY. Le choix se résume souvent ainsi : anglais et réseau international d'un côté, continuité du système français et bourses AEFE de l'autre. Pour un enfant franco-vietnamien qui grandit déjà entre deux langues, ajouter un cursus dans une troisième langue est un vrai choix de projet familial, pas un détail.</p>
    <h3>L'école publique vietnamienne</h3>
    <p>Option rarement envisagée par les expatriés « purs », mais réelle pour les couples mixtes : l'enfant, s'il a la nationalité vietnamienne, peut être scolarisé dans le système public local, comme ses cousins. Avantages évidents : coût minime, immersion totale en vietnamien, ancrage dans la moitié vietnamienne de sa famille. Limites tout aussi réelles : classes chargées, pédagogie très différente des standards français, pression scolaire forte dès le primaire, et un français qui devra alors se construire entièrement à la maison. Certaines familles panachent : maternelle vietnamienne pour la langue et le coût, puis bascule vers le système français au primaire — le moment de la bascule étant précisément celui où le niveau de français de l'enfant est évalué. Notre article sur <a href="scolarite-enfants-franco-vietnamiens">la scolarité des enfants franco-vietnamiens</a> creuse ce choix en détail.</p>

    <h2 id="section-admin">L'enfant franco-vietnamien : le volet administratif à ne pas rater</h2>
    <p>Élever un enfant binational à Hanoï, c'est aussi un petit dossier administratif, à traiter tôt :</p>
    <ul>
      <li><strong>La déclaration de naissance côté français</strong> : une naissance à Hanoï se déclare aux autorités vietnamiennes, puis se transcrit auprès de l'ambassade de France pour exister à l'état civil français. C'est cette transcription qui permet ensuite le passeport français de l'enfant et son inscription au registre des Français de l'étranger. Le parcours complet est dans l'article <a href="grossesse-vietnam-hopital-cout-demarches">grossesse et naissance au Vietnam</a>.</li>
      <li><strong>La double nationalité</strong> : la France admet pleinement la double nationalité. Côté vietnamien, la loi sur la nationalité permet, pour les enfants de couples mixtes, un enregistrement vietnamien tout en conservant la nationalité française — les modalités se règlent au moment de la déclaration de naissance, et il vaut la peine de se faire préciser les options par les deux administrations avant de choisir.</li>
      <li><strong>Le livret de famille et les passeports</strong> : tenez les deux jeux de documents à jour (actes des deux pays, passeports des deux pays le cas échéant) — les allers-retours France-Vietnam d'un enfant binational sont beaucoup plus simples quand chaque frontière se passe avec « son » passeport.</li>
    </ul>

    <h2 id="section-langues">Bilinguisme : quelle langue à la maison ?</h2>
    <p>C'est la question que tous les couples franco-vietnamiens se posent, et la recherche sur le bilinguisme donne une réponse rassurante : les enfants exposés tôt et régulièrement à deux langues les acquièrent toutes les deux, sans retard global de langage — le mélange des langues en début d'apprentissage est normal et transitoire. La méthode la plus répandue et la plus simple à tenir est « <strong>un parent, une langue</strong> » : chacun parle sa langue maternelle à l'enfant, systématiquement, sans se forcer à un français ou un vietnamien approximatif.</p>
    <p>Dans le contexte de Hanoï, l'équation a une particularité : le vietnamien sera partout (famille, quartier, nounou, rue) et le français presque nulle part en dehors de l'école et du parent français. C'est donc généralement <strong>le français qui a besoin d'être défendu</strong> : lecture du soir en français, dessins animés en français, appels réguliers aux grands-parents de France. La scolarisation en système français fait le reste. L'inverse vaut pour les familles qui prévoient un retour en France : c'est alors le vietnamien qu'il faudra entretenir activement — et <a href="apprendre-vietnamien-couple">l'article sur l'apprentissage du vietnamien en couple</a> donne des pistes qui servent aussi pour les enfants.</p>

    <h2 id="section-vie">Vie pratique avec un enfant à Hanoï</h2>

    <h3>Pédiatre et santé</h3>
    <p>Les hôpitaux privés internationaux disposent de services pédiatriques anglophones et francophones. L'<strong>Hôpital Français de Hanoï (HFH)</strong> est souvent la première référence pour les familles francophones. Vinmec dispose également d'une pédiatrie complète. Pour les urgences, les hôpitaux publics (Bệnh viện Nhi Trung Ương — Hôpital National Pédiatrique) restent très compétents médicalement.</p>

    <h3>Pharmacies</h3>
    <p>Les pharmacies sont très accessibles à Hanoï. La chaîne <strong>Long Châu</strong> est l'une des plus fiables et des mieux approvisionnées. Pour les médicaments français spécifiques, certaines pharmacies du quartier expat (Tay Ho, Ba Dinh) en importent.</p>

    <h3>Pollution de l'air</h3>
    <p>La qualité de l'air à Hanoï est un point à surveiller, surtout en hiver (novembre à mars). Consulter <strong>IQAir</strong> ou <strong>AirVisual</strong> quotidiennement est utile. Pour un enfant en bas âge, un purificateur d'air dans la chambre et les salles de vie est recommandé lors des pics de pollution.</p>

    <h3>Garde d'enfants : l'atout nounou</h3>
    <p>C'est l'une des grandes différences avec la France : la garde à domicile est courante et abordable à Hanoï. La <em>giúp việc</em> (aide à domicile) fait partie du paysage des familles vietnamiennes de classe moyenne, et beaucoup de couples mixtes emploient une nounou à temps partiel ou complet pour les premières années. Le recrutement passe presque toujours par le réseau — la famille vietnamienne est ici un atout majeur pour trouver une personne de confiance. Deux conseils : formalisez les attentes dès le départ (horaires, tâches, congés du Tết), et si le français de l'enfant vous importe, gardez en tête que la nounou renforcera mécaniquement le vietnamien — voir la section bilinguisme.</p>

    <h3>Sécurité au quotidien</h3>
    <p>Le vrai sujet de sécurité à Hanoï n'est ni la criminalité (très faible) ni la santé : c'est <strong>la route</strong>. Sièges auto quasi inexistants dans les taxis, trottoirs occupés par les scooters, traversées de rue sportives. Les réflexes des familles installées : un siège auto acheté sur place pour les trajets réguliers (Grab permet de choisir une voiture), le casque enfant systématique dès que l'enfant monte en scooter — c'est la loi et le bon sens —, et l'apprentissage précoce des règles de traversée locales. Rien d'ingérable, mais c'est une vigilance de tous les jours qui surprend les nouveaux arrivants.</p>

    <h3>Activités et loisirs</h3>
    <p>Hanoï propose de nombreuses activités adaptées aux enfants en dehors de l'école : parcs (Hồ Tây, Thống Nhất), piscines dans les complexes résidentiels et les hôtels, cours de natation, arts martiaux, musique. La vie de quartier — notamment à Tay Ho, le quartier le plus prisé des expats — est assez animée et familiale. Et n'oublie pas l'agenda vietnamien : la fête de la mi-automne (Tết Trung Thu), avec ses lanternes et ses lions dansants, est LA fête des enfants au Vietnam, et le <a href="tet-nouvel-an-lunaire-vietnam">Tết</a> se vit d'abord en famille — deux rendez-vous où un enfant franco-vietnamien construit sa moitié vietnamienne aussi sûrement qu'à l'école il construit l'autre.</p>

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
$current_slug = 'vivre-hanoi-avec-enfant-ecole-creche';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
