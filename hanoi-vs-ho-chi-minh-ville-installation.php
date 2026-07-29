<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Hanoï vs Hô Chi Minh-Ville : où s\'installer au Vietnam en 2026 ?';
$page_description = 'Hanoï ou Saigon pour vivre au Vietnam ? Climat, coût de la vie, ambiance, communauté d\'expats, emploi : comparatif honnête pour choisir ta ville d\'installation.';
$page_canonical   = SITE_URL . '/hanoi-vs-ho-chi-minh-ville-installation';
$page_og_title    = 'Hanoï vs Ho Chi Minh-Ville : le comparatif pour s\'installer au Vietnam';
$page_og_desc     = 'Où s\'installe-t-on mieux entre Hanoï et Saigon ? Coût de la vie, ambiance, emploi, communauté expat — comparatif 2026 basé sur le vécu.';
$page_og_url      = SITE_URL . '/hanoi-vs-ho-chi-minh-ville-installation';
$page_og_image    = 'https://images.unsplash.com/photo-1559592413-7cbb6e42f800?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Hanoï vs Hô Chi Minh-Ville : où s\'installer au Vietnam en 2026 ?',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/hanoi-vs-ho-chi-minh-ville-installation',
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
  ['q' => 'Est-il plus facile de trouver du travail à Hanoï ou à HCMV ?',
   'a' => 'Ho Chi Minh-Ville offre plus d\'opportunités d\'emploi au global (plus grande économie, plus de multinationales). Mais Hanoï a davantage de postes dans la diplomatie, l\'administration, les ONG et l\'enseignement du français (présence importante de l\'Institut français et des lycées français). Le choix dépend de ton domaine.'],
  ['q' => 'Le coût de la vie est-il vraiment différent entre les deux villes ?',
   'a' => 'Oui, mais modérément. Ho Chi Minh-Ville est légèrement plus chère sur le logement dans les quartiers expats prisés. Hanoï peut être moins chère pour les logements dans des quartiers locaux. La nourriture de rue est moins chère dans les deux villes qu\'en Europe, avec de petites variations locales.'],
  ['q' => 'Quelle ville a le meilleur accès aux écoles françaises pour les enfants ?',
   'a' => 'Les deux villes ont des écoles françaises : l\'École Française Internationale du Vietnam (EFIV) dispose de campus à Hanoï (lycée Louis-Pasteur) et à Hô-Chi-Minh-Ville. Des établissements bilingues français-vietnamien existent également dans les deux villes. Pour les informations d\'inscription actualisées, consulte le site de l\'Ambassade de France au Vietnam ou directement l\'EFIV.'],
  ['q' => 'L\'accent du Nord et du Sud, ça change vraiment quelque chose pour apprendre le vietnamien ?',
   'a' => 'Oui, et plus qu\'on ne l\'imagine. La prononciation de plusieurs consonnes et de certains tons diffère nettement entre Hanoï et Saigon. L\'idéal est d\'apprendre avec l\'accent de la région où tu vas vivre — et surtout celui de ta belle-famille. Un vietnamien appris « du Sud » reste compréhensible à Hanoï, mais tu devras réhabituer ton oreille.'],
  ['q' => 'Quelle ville est la plus sûre pour un expatrié ?',
   'a' => 'Les deux villes sont globalement sûres au sens où la violence contre les étrangers est rare. Le risque principal dans les deux cas est le vol à l\'arraché (téléphone en main près de la route, sac en bandoulière côté rue), avec une réputation un peu plus marquée à HCMV sur ce point. Les précautions sont les mêmes partout : téléphone rangé en scooter, sac côté trottoir.'],
  ['q' => 'Peut-on tester les deux villes avant de choisir ?',
   'a' => 'C\'est même la meilleure stratégie. Avec l\'exemption de visa de 45 jours pour les Français, tu peux passer trois semaines dans chaque ville sur un seul séjour, en travaillant depuis des coworkings, avant de t\'engager sur un bail annuel. Le coût de ce « test » est marginal comparé au coût d\'un mauvais choix de ville.'],
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
      <span>Hanoï vs HCMV</span>
    </div>
    <span class="article-badge-hero">Installation</span>
    <h1>Hanoï vs Hô Chi Minh-Ville : où s'installer au Vietnam en 2026 ?</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 11 min de lecture</span>
      <span>Mis &agrave; jour : Juillet 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Profil des deux villes</a></li>
      <li><a href="#section-2">Le climat</a></li>
      <li><a href="#section-3">Coût de la vie comparé</a></li>
      <li><a href="#section-4">Opportunités professionnelles</a></li>
      <li><a href="#section-4b">Transports et mobilité</a></li>
      <li><a href="#section-4c">Les quartiers des Français</a></li>
      <li><a href="#section-4d">Le facteur belle-famille</a></li>
      <li><a href="#section-5">Ambiance et cadre de vie</a></li>
      <li><a href="#section-6">La communauté française</a></li>
      <li><a href="#section-7">Mon avis personnel</a></li>
      <li><a href="#section-verdict">Le verdict selon ton profil</a></li>
      <li><a href="#section-8">Ni l'une ni l'autre ?</a></li>
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
    <p><strong>Hanoï ou Saigon — c'est la grande question que se pose quasiment chaque Français qui s'installe au Vietnam.</strong> Les deux villes sont radicalement différentes dans leur ambiance, leur climat, leur dynamique économique et leur culture. Je vis à Hanoï — mais ça ne veut pas dire que c'est le meilleur choix pour tout le monde. Ce guide te donne les vrais critères pour décider.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1559592413-7cbb6e42f800?w=1200&q=80" alt="Hanoï Vietnam skyline" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Profil des deux villes</h2>
    <p>Deux capitales, deux âmes :</p>
    <ul>
      <li><strong>Hanoï</strong> (~8 millions d'habitants) : capitale politique et culturelle. Plus traditionnelle, plus conservatrice, rythme moins effréné. Architecture coloniale française très présente dans le vieux quartier.</li>
      <li><strong>Hô Chi Minh-Ville</strong> (~9 millions d'habitants) : capitale économique, ancienne Saigon. Plus cosmopolite, plus américanisée, dynamique entrepreneuriale forte, vie nocturne plus développée.</li>
    </ul>

    <h2 id="section-2">Le climat : une différence majeure</h2>
    <p>C'est souvent ce qui fait pencher la balance :</p>

    <table>
      <thead>
        <tr>
          <th>Critère</th>
          <th>Hanoï</th>
          <th>HCMV</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Type de climat</td>
          <td>4 saisons (subtropical humide)</td>
          <td>2 saisons (tropical)</td>
        </tr>
        <tr>
          <td>Hiver</td>
          <td>Oui — 12-18°C en janv-fév</td>
          <td>Non — jamais en dessous de 20°C</td>
        </tr>
        <tr>
          <td>Été</td>
          <td>Chaud et très humide (35°C+)</td>
          <td>Chaud avec saison des pluies</td>
        </tr>
        <tr>
          <td>Pollution</td>
          <td>Souvent mauvaise en hiver</td>
          <td>Élevée mais plus constante</td>
        </tr>
      </tbody>
    </table>

    <p>Hanoï a 4 saisons — y compris un "hiver" frais qui rappelle un peu le printemps européen. HCMV n'a que deux saisons : saison sèche (novembre-avril) et saison des pluies (mai-octobre). Les Français qui ont du mal avec la chaleur permanente apprécient souvent les hivers hanoïens.</p>

    <p>Deux réalités climatiques que les comparatifs oublient systématiquement, et que les Hanoïens connaissent trop bien. D'abord le <strong>nồm</strong> : en fin d'hiver (février-mars), Hanoï traverse des semaines d'humidité saturée où les murs « transpirent », les sols restent mouillés en permanence et le linge ne sèche jamais — c'est la période que les locaux détestent le plus, et il faut un déshumidificateur pour la traverser sereinement. Ensuite <strong>la pollution hivernale</strong> : les mois froids et sans vent concentrent les particules fines, et Hanoï se classe régulièrement parmi les grandes villes les plus polluées du monde sur ces périodes. Si tu es asthmatique ou que tu comptes courir dehors tous les matins, ce critère mérite d'être en haut de ta liste — purificateur d'air à la maison et application de suivi de qualité de l'air font partie du quotidien.</p>

    <p>Côté HCMV, l'ennemi c'est la routine de la saison des pluies : l'averse tropicale quasi quotidienne de fin d'après-midi entre mai et octobre, brève mais violente, avec des rues qui s'inondent dans certains districts. On apprend vite à planifier ses trajets autour — et à toujours avoir un poncho sous la selle du scooter.</p>

    <h2 id="section-3">Coût de la vie comparé</h2>

    <table>
      <thead>
        <tr>
          <th>Poste</th>
          <th>Hanoï</th>
          <th>HCMV</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Logement (appart 1 pièce expat)</td>
          <td>400–600 USD/mois</td>
          <td>500–800 USD/mois</td>
        </tr>
        <tr>
          <td>Repas restaurant local</td>
          <td>50 000–100 000 VND</td>
          <td>60 000–120 000 VND</td>
        </tr>
        <tr>
          <td>Café + coworking</td>
          <td>100–200 USD/mois</td>
          <td>120–250 USD/mois</td>
        </tr>
        <tr>
          <td>Transport (Grab moto 5 km)</td>
          <td>25 000–40 000 VND</td>
          <td>25 000–45 000 VND</td>
        </tr>
      </tbody>
    </table>

    <p>→ Pour un budget mensuel détaillé à Hanoï : <a href="budget-mensuel-hanoi-2026">Budget mensuel à Hanoï 2026</a>. Pour HCMV : <a href="budget-mensuel-hcmc-2026">Budget mensuel à HCMV 2026</a>.</p>

    <h2 id="section-4">Opportunités professionnelles</h2>
    <p>Pour les Français :</p>
    <ul>
      <li><strong>Hanoï</strong> : ambassade, consulat, Institut français, Alliance française, lycées français (Louis-Pasteur), ONG, instituts de recherche. Plus de postes liés à la coopération franco-vietnamienne.</li>
      <li><strong>HCMV</strong> : sièges de multinationales, startups, fintech, immobilier, import-export. Marché privé plus large et plus dynamique. Plus d'emplois anglophones.</li>
    </ul>
    <p>Pour le nomadisme digital : les deux villes ont une scène coworking développée. HCMV a légèrement plus d'espaces modernes, mais Hanoï se rattrape vite. Mon comparatif détaillé : <a href="cafes-coworkings-hanoi">cafés et coworkings à Hanoï</a>.</p>

    <h2 id="section-4b">Transports et mobilité au quotidien</h2>

    <p>Dans les deux villes, la réalité quotidienne est la même : <strong>le scooter est roi, et Grab est ton meilleur ami</strong>. Mais quelques différences structurelles méritent d'entrer dans ta réflexion :</p>

    <ul>
      <li><strong>Le métro.</strong> Les deux villes construisent leur réseau, avec des philosophies différentes. Hanoï a ouvert la voie avec la ligne Cát Linh – Hà Đông puis la ligne de Nhổn ; HCMV a inauguré fin 2024 sa ligne 1 (Bến Thành – Suối Tiên), qui dessert précisément le corridor où vivent beaucoup d'expatriés, entre le centre et Thảo Điền. Dans les deux cas, le métro reste un complément : il ne remplace pas encore le deux-roues pour la vie de tous les jours.</li>
      <li><strong>L'aéroport.</strong> Détail qui n'en est pas un si tu voyages souvent : Tân Sơn Nhất est <em>dans</em> HCMV (20-30 minutes du centre hors embouteillage), tandis que Nội Bài est à une trentaine de kilomètres au nord de Hanoï — compte 45 minutes à 1 heure de trajet. Sur des dizaines d'allers-retours par an, ça finit par compter.</li>
      <li><strong>La marche à pied.</strong> Soyons honnêtes : aucune des deux villes n'est agréable pour le piéton, entre trottoirs occupés par les scooters et traversées sportives. Hanoï garde toutefois quelques zones vraiment marchables (le tour du lac Hoàn Kiếm piétonnisé le week-end, les ruelles du Vieux Quartier), là où HCMV se vit presque exclusivement motorisée.</li>
    </ul>

    <h2 id="section-4c">Les quartiers où vivent les Français</h2>

    <p>Le choix de la ville, c'est aussi le choix d'un quartier. Voici où gravitent la plupart des expatriés francophones :</p>

    <div class="table-wrap">
    <table>
      <thead>
        <tr>
          <th>Ville</th>
          <th>Quartier</th>
          <th>Profil</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Hanoï</td>
          <td><strong>Tây Hồ (lac de l'Ouest)</strong></td>
          <td>LE hub expat : cafés brunch, boulangeries, écoles internationales à proximité, ambiance résidentielle au bord du lac</td>
        </tr>
        <tr>
          <td>Hanoï</td>
          <td>Ba Đình / Hoàn Kiếm</td>
          <td>Central, historique, pratique pour les administrations et l'Institut français — plus bruyant</td>
        </tr>
        <tr>
          <td>HCMV</td>
          <td><strong>Thảo Điền (Thủ Đức, ex-D2)</strong></td>
          <td>L'équivalent saïgonnais de Tây Hồ : villas, écoles internationales, restaurants occidentaux, très anglophone</td>
        </tr>
        <tr>
          <td>HCMV</td>
          <td>Districts 1 et 3</td>
          <td>Le cœur urbain — pour ceux qui veulent vivre au centre de l'énergie saïgonnaise</td>
        </tr>
        <tr>
          <td>HCMV</td>
          <td>District 7 (Phú Mỹ Hưng)</td>
          <td>Ville nouvelle planifiée, très familiale, prisée des communautés coréenne et japonaise</td>
        </tr>
      </tbody>
    </table>
    </div>

    <p>Pour les détails pratiques côté Hanoï (prix par quartier, pièges des contrats), lis <a href="louer-appartement-hanoi-etranger">louer un appartement à Hanoï</a>.</p>

    <h2 id="section-4d">Le facteur belle-famille (le vrai critère n°1 des couples mixtes)</h2>

    <p>Si tu es en couple avec un(e) Vietnamien(ne), sois honnête avec toi-même : <strong>ce comparatif est probablement déjà tranché</strong>. Au Vietnam, la proximité familiale n'est pas un « plus », c'est un pilier de l'organisation de la vie — les repas de famille hebdomadaires, l'aide aux parents, les cérémonies d'anniversaire des ancêtres (đám giỗ), la garde des futurs enfants. S'installer à 1 700 km de la belle-famille, c'est possible, mais c'est un choix qui se discute sérieusement en couple, pas une variable d'ajustement.</p>

    <p>Il y a aussi une dimension culturelle interne au Vietnam qu'on sous-estime en tant que Français : <strong>le Nord et le Sud sont deux mondes</strong>. L'accent est différent (au point que ton vietnamien appris avec un professeur du Sud te fera galérer à Hanoï, et inversement), la cuisine est différente (le phở du Nord est épuré, la cuisine du Sud plus sucrée), et les mentalités aussi — les Vietnamiens eux-mêmes en plaisantent en permanence. Un(e) conjoint(e) hanoïen(ne) transplanté(e) à Saigon vit une vraie petite expatriation intérieure, et vice-versa.</p>

    <h2 id="section-5">Ambiance et cadre de vie</h2>
    <p>Hanoï est plus calme, plus historique, plus intérieure. Les Français qui aiment les ruelles, le lac Hoàn Kiếm, la culture vietnamienne traditionnelle et un rythme de vie moins trépidant choisissent souvent Hanoï.</p>
    <p>HCMV est plus ouverte, plus internationale, plus "tout est possible". La scène gastronomique et culturelle est très diverse. L'architecture mélange colonial, moderne et influences asiatiques. Si tu aimes l'énergie et la dynamique d'une métropole en expansion, HCMV est séduisante.</p>

    <h2 id="section-6">La communauté française</h2>
    <p>Les deux villes ont des communautés françaises importantes. En 2025, environ 6 968 Français étaient inscrits au registre consulaire au Vietnam (source : MEAE), répartis entre l'ambassade de Hanoï et le consulat de HCMV — HCMV concentre la majeure partie de la communauté d'affaires, Hanoï celle des fonctionnaires et coopérants.</p>
    <p>Les associations, clubs et événements pour les Français existent dans les deux villes. L'Institut français est actif dans les deux — concerts, expos, cinéma français, cours de langue.</p>

    <p>N'oublie pas non plus que le Vietnam garde un <strong>lien francophone historique</strong> unique en Asie du Sud-Est : le pays est membre de l'Organisation internationale de la Francophonie, une génération de médecins, d'ingénieurs et d'universitaires vietnamiens a été formée en français, et il n'est pas rare de croiser des Vietnamiens âgés qui te répondent dans un français impeccable appris il y a soixante ans. Ce lien se ressent un peu plus à Hanoï, ville des institutions — mais dans les deux villes, être Français ouvre des conversations que les autres nationalités n'ont pas.</p>

    <h2 id="section-7">Mon avis personnel</h2>
    <p>J'ai choisi Hanoï, et la raison première est simple : la famille de Giang est du Nord. Mais au-delà de ça, j'ai découvert une ville qui me convient vraiment au quotidien.</p>
    <p>Ce que j'apprécie : <strong>tout est là</strong>. Les commodités sont présentes, les démarches administratives se font (consulat, médecins, banques, livreurs), beaucoup de gens parlent anglais dans les quartiers centraux, et croiser des Français est facile — à l'Institut français, dans les cafés du Vieux Quartier ou simplement dans la rue. La ville est vivante, il y a une vraie énergie.</p>
    <p>Ce qui est difficile : <strong>le trafic</strong>. Hanoï est l'une des villes les plus denses en deux-roues d'Asie, et les embouteillages aux heures de pointe sont bien réels. Si tu viens d'une ville calme, prévois une période d'adaptation.</p>

    <p>Et puis il y a ce que je n'avais pas anticipé : les <strong>micro-plaisirs hanoïens</strong> qui finissent par te tenir. Le cà phê trứng (café à l'œuf, spécialité locale) en terrasse minuscule, le tour du lac de l'Ouest au coucher du soleil, les vendeuses de fleurs à vélo au petit matin, les saisons qui donnent un rythme à l'année — des choses qu'aucun tableau comparatif ne capture, et qui pèsent pourtant plus lourd que 100 dollars d'écart de loyer au moment de savoir si on se sent chez soi.</p>

    <div class="tip-box">
      <strong>Mon conseil :</strong> Avant de te décider, passe au moins une semaine dans chaque ville. Ce qui fait pencher la balance n'est souvent pas rationnel — c'est une question d'atmosphère et de feeling personnel.
    </div>

    <h2 id="section-verdict">Le verdict en un coup d'œil, selon ton profil</h2>

    <ul>
      <li><strong>Ton/ta conjoint(e) est du Nord</strong> → Hanoï, sauf raison professionnelle impérieuse. La proximité de la belle-famille structure toute la vie vietnamienne.</li>
      <li><strong>Ton/ta conjoint(e) est du Sud</strong> → HCMV, même logique en miroir.</li>
      <li><strong>Tu cherches un emploi corporate ou tu montes une boîte</strong> → HCMV, le marché privé y est nettement plus large.</li>
      <li><strong>Tu travailles dans la coopération, l'enseignement du français, la culture</strong> → Hanoï, où se concentre l'écosystème institutionnel français.</li>
      <li><strong>Tu télétravailles pour l'étranger</strong> → égalité technique ; choisis à l'ambiance. Hanoï pour l'atmosphère culturelle et les saisons, HCMV pour l'énergie et le réseau nomade.</li>
      <li><strong>Tu es sensible à la pollution ou à l'humidité froide</strong> → HCMV, ou sérieusement regarder Đà Nẵng.</li>
      <li><strong>Tu détestes la chaleur permanente</strong> → Hanoï et ses quatre saisons.</li>
    </ul>

    <h2 id="section-8">Et si la réponse n'était ni l'une ni l'autre ?</h2>

    <p>Le duel Hanoï-Saigon occulte une troisième voie que de plus en plus de Français choisissent : <strong>les villes moyennes</strong>. Elles offrent un coût de la vie encore plus doux, moins de pollution, moins de trafic — au prix d'une communauté expat plus réduite et de moins de services internationaux.</p>

    <ul>
      <li><strong>Đà Nẵng</strong> — le compromis star : grande ville moderne à taille humaine, plages en ville, aéroport international, scène nomade digitale en plein essor, et Hội An à 30 minutes. C'est la destination qui monte chez les expatriés qui trouvent les deux mégapoles épuisantes. → <a href="budget-mensuel-da-nang-2026">Budget mensuel à Đà Nẵng</a></li>
      <li><strong>Nha Trang</strong> — station balnéaire très internationale, climat sec une grande partie de l'année. → <a href="budget-mensuel-nha-trang-2026">Budget mensuel à Nha Trang</a></li>
      <li><strong>Huế</strong> — l'ancienne capitale impériale : calme, patrimoine, coût de vie mini. Pour les amoureux de culture plus que de dynamisme. → <a href="budget-mensuel-hue-2026">Budget mensuel à Huế</a></li>
    </ul>

    <p>La limite honnête de ces villes pour un couple franco-vietnamien : les services consulaires français, les écoles françaises homologuées et les hôpitaux internationaux de premier plan restent concentrés à Hanoï et HCMV. Ça n'empêche pas d'y vivre — ça veut dire quelques allers-retours de plus par an.</p>

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
$current_slug = 'hanoi-vs-ho-chi-minh-ville-installation';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
