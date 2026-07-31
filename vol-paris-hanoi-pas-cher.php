<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Vol Paris-Hanoï pas cher : escales, compagnies et comment comparer les prix';
$page_description = 'Paris-Hanoï en avion : pas de vol direct régulier, mais deux options d\'escale qui reviennent souvent. J\'ai fait le trajet deux fois — via Francfort, puis via Bangkok. Ce que j\'ai appris, et comment comparer les prix.';
$page_canonical   = SITE_URL . '/vol-paris-hanoi-pas-cher';
$page_og_title    = 'Vol Paris-Hanoï pas cher : escales, timing et outil de comparaison';
$page_og_desc     = 'Comment trouver un vol Paris-Hanoï au meilleur prix : les hubs d\'escale, quand réserver, et l\'outil que j\'utilise pour comparer.';
$page_og_url      = 'https://blog-capvietnam.fr/vol-paris-hanoi-pas-cher';
$page_og_image    = 'https://blog-capvietnam.fr/assets/img/og-capvietnam.png';

$page_schema = '{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Vol Paris-Hanoï pas cher : escales, compagnies et comment comparer les prix",
  "description": "Guide pratique pour trouver un vol Paris-Hanoï au meilleur prix : hubs d\'escale (Francfort, Bangkok), timing de réservation, Hanoï vs HCMC, et outil de comparaison.",
  "datePublished": "2026-06-07",
  "dateModified": "2026-06-07",
  "author": {"@type": "Person", "name": "Anthony Bouillon", "url": "https://blog-capvietnam.fr/a-propos-capvietnam"},
  "publisher": {"@type": "Organization", "name": "Cap Vietnam", "url": "https://blog-capvietnam.fr"},
  "mainEntityOfPage": "https://blog-capvietnam.fr/vol-paris-hanoi-pas-cher",
  "inLanguage": "fr",
  "articleSection": "Voyager au Vietnam"
}';

$article_color        = 'jade';
$article_hero_bg      = '#001a0d';
$article_glow         = 'rgba(27,107,82,0.18)';
$article_badge        = 'var(--jade)';
$article_badge_c      = '#fff';
$current_slug         = 'vol-paris-hanoi-pas-cher';
$current_cat          = 'vie-pratique';

$page_faq = [
  ['q' => 'Y a-t-il des vols directs Paris-Hanoï ?',
   'a' => 'Air France propose des vols directs Paris CDG → Hanoï sur certaines périodes, mais à des tarifs généralement bien plus élevés qu\'un vol avec escale. La grande majorité des vols Paris-Hanoï passent par un hub européen (Francfort, Amsterdam, Doha) ou asiatique (Bangkok, Kuala Lumpur). Comparer les deux options avant d\'acheter est toujours rentable.'],
  ['q' => 'Combien de temps dure un vol Paris-Hanoï avec escale ?',
   'a' => 'Comptez entre 13 et 18 heures de voyage total selon l\'escale et l\'attente en transit. Le temps de vol pur représente environ 11 à 12 heures cumulées. Une escale courte à Francfort ou Amsterdam peut permettre d\'arriver en 13-14h. Une escale longue à Bangkok peut dépasser 18h mais parfois à moindre coût.'],
  ['q' => 'Est-il moins cher d\'aller à Hô-Chi-Minh-Ville qu\'à Hanoï depuis Paris ?',
   'a' => 'Souvent oui. HCMC (Tân Sơn Nhất) est un hub plus fréquenté que Hanoï (Nội Bài), avec plus de compagnies en concurrence. Si votre destination finale est le nord du Vietnam (Hanoï, Ninh Binh, Sapa), préférez Hanoï. Si vous visitez le centre ou le sud, HCMC peut être moins cher à l\'arrivée — mais un vol intérieur en plus rognera l\'économie.'],
  ['q' => 'Quand réserver pour avoir le meilleur tarif ?',
   'a' => 'Entre 6 semaines et 3 mois avant le départ reste la fenêtre la plus favorable pour la route Paris-Vietnam. En dessous de 3 semaines, les tarifs remontent fortement. Évitez les périodes de pointe : Tết (janvier-février), vacances scolaires françaises (juillet-août), et les ponts de mai.'],
  ['q' => 'Vaut-il mieux partir de Paris CDG ou d\'un autre aéroport français ?',
   'a' => 'CDG donne accès au plus grand choix de vols avec correspondance, notamment vers les hubs asiatiques. Si vous êtes en province, Lyon, Marseille ou Bordeaux ont parfois des vols avec correspondance vers Francfort ou Amsterdam qui peuvent être compétitifs — à vérifier selon votre point de départ.'],
  ['q' => 'Les programmes de fidélité valent-ils le coup sur cette route ?',
   'a' => 'Oui, dès que le trajet devient récurrent — expatriés, couples mixtes qui rentrent chaque année. Chaque alliance a son programme (Flying Blue côté Air France-KLM, Lotusmiles chez Vietnam Airlines, et les programmes des compagnies du Golfe) et les miles d\'un aller-retour long-courrier s\'accumulent vite, surtout combinés aux dépenses courantes. Le bon réflexe : choisir l\'alliance que tu voleras le plus souvent et concentrer tout dessus, plutôt que d\'éparpiller trois soldes de miles inutilisables.'],
  ['q' => 'Comment survivre au vol avec un bébé ou un jeune enfant ?',
   'a' => 'Réserve tôt pour obtenir le berceau de cloison (bassinet) sur les vols de nuit — les places sont limitées et partent vite. Cale le vol de nuit sur le rythme de sommeil de l\'enfant, prévois biberon ou tétée au décollage et à l\'atterrissage (la succion soulage les oreilles), et un sac de change accessible avec le double de ce que tu crois nécessaire. Les compagnies asiatiques et du Golfe sont généralement très accueillantes avec les familles — n\'hésite pas à solliciter l\'équipage.'],
];

$page_extra_head = '

<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Accueil","item":"https://blog-capvietnam.fr"},{"@type":"ListItem","position":2,"name":"Voyager au Vietnam","item":"https://blog-capvietnam.fr/articles-capvietnam"},{"@type":"ListItem","position":3,"name":"Vol Paris Hanoï pas cher"}]}</script>
';

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Voyager au Vietnam</a><span class="breadcrumb-sep">›</span>
      <span>Vol Paris-Hanoï</span>
    </div>
    <span class="article-badge-hero" style="background:var(--jade);color:#fff">✈️ Voyager au Vietnam</span>
    <h1>Vol Paris-Hanoï pas cher : les escales que j'ai prises et comment comparer les prix</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 7 juin 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pas de vol direct régulier</a></li>
      <li><a href="#section-2">Mes deux trajets</a></li>
      <li><a href="#section-3">Les escales qui reviennent</a></li>
      <li><a href="#section-4">Comment comparer les prix</a></li>
      <li><a href="#section-5">Quand réserver</a></li>
      <li><a href="#section-6">Hanoï ou HCMC</a></li>
      <li><a href="#section-7">Dans le sac de cabine</a></li>
      <li><a href="#section-arrivee">L'arrivée à Nội Bài</a></li>
      <li><a href="#section-jetlag">Gérer le décalage horaire</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
  </aside>

  <article class="article-body">

    <!-- INTRO -->
    <p>Quand on part pour la première fois au Vietnam depuis la France, la première surprise c'est souvent ça : le vol. Paris-Hanoï, ce n'est pas comme Paris-New York ou Paris-Tokyo — les options ne sont pas légion, et les prix varient beaucoup selon la compagnie, la date, et surtout l'escale choisie.</p>

    <p>J'ai fait le trajet deux fois. Deux escales différentes, deux expériences différentes. Ce que j'écris ici, c'est ce que j'aurais voulu savoir avant de réserver le premier billet : les escales qui reviennent, le bon moment pour réserver, l'arbitrage Hanoï/HCMC, et les deux sujets que les comparateurs ne t'apprendront jamais — l'arrivée à Nội Bài et le décalage horaire.</p>

    <!-- H2 #1 -->
    <h2 id="section-1">Il n'existe pas de vol direct Paris-Hanoï régulier et abordable</h2>

    <p>Techniquement, des vols directs existent — Air France propose la liaison Paris CDG → Hanoï Nội Bài. Mais la fréquence est limitée et les tarifs s'envolent. En pratique, la grande majorité des voyageurs font une escale. Ce n'est pas un inconvénient — c'est juste la réalité du réseau aérien sur cette destination.</p>

    <p>La distance Paris-Hanoï est d'environ 9 200 km. Avec une escale bien choisie, le trajet total se fait en 13 à 16 heures. C'est long mais gérable, surtout si vous préparez votre nuit à bord. Petite consolation géographique : l'aller vers Hanoï se fait « avec » le sens du décalage — départ de Paris en fin de journée, nuit dans l'avion, arrivée au Vietnam le lendemain — un schéma qui aide naturellement à basculer sur l'heure locale, contrairement au retour vers la France où la journée n'en finit plus.</p>

    <!-- H2 #2 -->
    <h2 id="section-2">Mes deux trajets : via Francfort, puis via Bangkok</h2>

    <p>Premier voyage : escale en Allemagne. Correspondance courte, départ tôt le matin, arrivée à Hanoï en fin de soirée heure locale. L'avantage d'un hub européen : le trajet total reste court, les horaires sont lisibles, et l'aéroport de correspondance est généralement bien organisé. L'inconvénient : le prix peut être plus élevé qu'un hub asiatique.</p>

    <p>Deuxième voyage : escale à Bangkok. Trajet plus long au total, mais le billet était nettement moins cher. L'escale à Bangkok (Suvarnabhumi) m'a donné quelques heures dans un grand aéroport confortable — pas désagréable si on a de quoi s'occuper. L'arrivée à Hanoï était en pleine nuit.</p>

    <div class="info-box">
      <strong>📋 Ce que j'en retiens :</strong><br>
      Via hub européen (Francfort, Amsterdam) → trajet plus court, souvent plus cher<br>
      Via hub asiatique (Bangkok, Kuala Lumpur, Doha) → trajet plus long, souvent moins cher<br>
      Le meilleur choix dépend de votre budget et de vos contraintes d'horaire
    </div>

    <!-- H2 #3 -->
    <h2 id="section-3">Les escales qui reviennent souvent sur Paris-Hanoï</h2>

    <h3>Hubs européens</h3>
    <ul>
      <li><strong>Francfort (FRA)</strong> — correspondance courte possible, vol de nuit depuis Paris pratique</li>
      <li><strong>Amsterdam (AMS)</strong> — bon hub, vols vers Hanoï réguliers</li>
      <li><strong>Helsinki (HEL)</strong> — Finnair propose souvent une liaison intéressante en prix via le Nord</li>
      <li><strong>Londres (LHR)</strong> — option si vous partez depuis une région desservie par l'Eurostar</li>
    </ul>

    <h3>Hubs du Moyen-Orient et d'Asie</h3>
    <ul>
      <li><strong>Bangkok (BKK)</strong> — Thai Airways, souvent compétitif, escale agréable</li>
      <li><strong>Doha (DOH)</strong> — Qatar Airways, ponctuel et confortable, fréquemment en promotion</li>
      <li><strong>Dubaï (DXB)</strong> — Emirates, option si on veut profiter d'une correspondance dans une grande plateforme</li>
      <li><strong>Kuala Lumpur (KUL)</strong> — AirAsia ou Malaysia Airlines, souvent parmi les moins chers</li>
    </ul>

    <div class="tip-box">
      <strong>💡 Le bon réflexe :</strong>
      Ne fixez pas une compagnie d'avance. Cherchez par prix et par durée totale de trajet — vous pouvez tomber sur des options que vous n'auriez pas envisagées.
    </div>

    <!-- H2 #4 -->
    <h2 id="section-4">Comment comparer les prix efficacement</h2>

    <p>Le problème des comparateurs de vols, c'est qu'ils ne donnent pas tous les mêmes résultats. Certains manquent des compagnies asiatiques, d'autres n'affichent pas les bagages inclus. Pour cette destination, j'utilise <strong>BudgetAir</strong> — un comparateur spécialisé qui couvre bien les routes longue distance vers l'Asie, avec une interface lisible et les filtres qui comptent vraiment (durée totale, nombre d'escales, inclusion des bagages). Quel que soit ton comparateur, garde le réflexe de la <strong>vérification croisée finale</strong> : une fois le vol identifié, regarde son prix en direct sur le site de la compagnie — parfois identique (et le service après-vente est meilleur en direct), parfois plus cher, mais tu décides en connaissance de cause.</p>

    <?php
    $aff_id    = 'budgetair';
    $aff_icon  = '✈️';
    $aff_title = 'BudgetAir — comparer les vols Paris-Hanoï';
    $aff_text  = 'Comparateur de vols longue distance avec filtres durée totale, escales et bagages. Couvre les compagnies asiatiques souvent absentes des autres outils. Idéal pour la route Paris-Hanoï.';
    $aff_cta   = 'Rechercher mon vol →';
    $aff_note  = 'Lien affilié — prix identiques à la réservation directe.';
    $aff_theme = 'green';
    include '_affiliate-cta.php';
    ?>

    <h3>Les filtres à utiliser en priorité</h3>
    <ul>
      <li><strong>Durée totale du voyage</strong> — pas seulement le temps de vol, mais aussi l'escale</li>
      <li><strong>Nombre d'escales</strong> — 1 escale maximum reste raisonnable sur cette route</li>
      <li><strong>Bagages inclus</strong> — les vols low-cost intercontinentaux proposent parfois des tarifs sans bagage enregistré, ce qui peut changer la donne</li>
      <li><strong>Dates ±3 jours</strong> — un départ mercredi ou jeudi coûte souvent moins cher qu'un vendredi</li>
    </ul>

    <!-- H2 #5 -->
    <h2 id="section-5">Quand réserver pour avoir un bon prix</h2>

    <p>La règle générale pour Paris-Vietnam : <strong>réservez entre 6 semaines et 3 mois avant le départ</strong>. En dessous de 3 semaines, les prix remontent fortement — les sièges restants sont vendus à prime. Plus de 4 mois à l'avance, les tarifs promotionnels ne sont pas encore disponibles pour toutes les dates. L'exception qui inverse la règle : le <strong>Tết</strong>. Pour un vol pendant le nouvel an lunaire, réserve dès que les billets s'ouvrent, plusieurs mois à l'avance — c'est la seule période où attendre coûte systématiquement plus cher, car la demande de la diaspora sature les avions bien avant le départ.</p>

    <h3>Les périodes à éviter</h3>
    <ul>
      <li><strong>Tết (janvier-février)</strong> — pic de demande côté vietnamien, les familles rentrent au pays, les prix explosent</li>
      <li><strong>Juillet-août</strong> — vacances scolaires françaises, forte demande, et il fait très chaud et humide à Hanoï</li>
      <li><strong>Ponts de mai et de novembre</strong> — hausse ponctuelle sur les départs de CDG</li>
    </ul>

    <h3>Les bonnes fenêtres</h3>
    <p>Mars-avril et septembre-octobre sont les meilleures périodes pour cumuler un bon prix de billet et un climat agréable à Hanoï. Ce n'est pas un hasard si mon premier voyage date de ces fenêtres-là. L'automne hanoïen (octobre-novembre) est même considéré par les Hanoïens eux-mêmes comme la plus belle saison de leur ville — ciel dégagé, chaleur douce, lumière dorée : si tu as le choix total de tes dates, c'est celle-là.</p>

    <!-- H2 #6 -->
    <h2 id="section-6">Hanoï (HAN) ou Hô-Chi-Minh-Ville (SGN) : lequel choisir</h2>

    <p>Si votre destination est Hanoï, Ninh Binh, Sapa ou Ha Long — arrivez à Hanoï. Simple. Tout le nord du pays s'organise depuis la capitale.</p>

    <p>Si votre destination est HCMC, Mũi Né ou le Delta du Mékong — arrivez à HCMC (aéroport Tân Sơn Nhất, code SGN).</p>

    <p>Parfois, un vol Paris → HCMC est moins cher qu'un Paris → Hanoï. Si l'écart est significatif (plus de 100-150€), ça peut valoir la peine d'ajouter un vol intérieur Vietnam Airlines ou VietJet (Hanoï ↔ HCMC, moins de 30-50€ souvent). Vérifiez la combinaison avant de vous décider uniquement sur le vol international — en intégrant les vraies contraintes du montage : bagages à récupérer et réenregistrer entre les deux vols, marge de correspondance suffisante (les vols intérieurs low-cost se décalent), et la fatigue d'une étape de plus après douze heures d'avion. L'économie sur le papier fond vite quand elle coûte une demi-journée et des nerfs.</p>

    <!-- H2 #7 -->
    <h2 id="section-7">Ce que je glisse dans le sac de cabine pour un vol de 13h</h2>

    <p>Un vol avec escale vers Hanoï, c'est entre 13 et 18 heures de voyage. Le temps se passe mieux si on l'anticipe. Quelques incontournables de mon sac de cabine :</p>

    <ul>
      <li>Écouteurs anti-bruit (indispensable en cabine économique)</li>
      <li>Masque de sommeil + bouchons d'oreilles de secours</li>
      <li>Vêtements chauds — les avions sont froids, même sur les vols asiatiques</li>
      <li>Snacks secs — les repas servis ne sont pas toujours au rendez-vous</li>
      <li>Lecture ou formation — 13 heures, c'est aussi du temps qu'on ne récupère pas autrement</li>
      <li>Les documents en accessible : passeport, e-visa imprimé, confirmation PAI, adresse de la première nuit (l'immigration peut la demander) — une pochette dédiée évite la fouille de sac paniquée devant le guichet</li>
      <li>Batteries externes en cabine uniquement — les batteries au lithium sont interdites en soute, règle universelle que les aéroports asiatiques appliquent strictement</li>
    </ul>

    <p>Pour ma part, j'ai mis à profit ces longues heures de vol pour travailler sur mon anglais avec la transcription phonétique — une méthode que j'ai ensuite formalisée dans un ebook disponible sur Amazon. Si vous avez l'anglais en tête avant de partir (utile au Vietnam pour communiquer avec les locaux anglophones, négocier, ou travailler), ça peut être un bon moment pour s'y mettre.</p>

    <div style="border:1px solid var(--border);border-radius:10px;padding:1.25rem 1.5rem;background:var(--bg-alt);margin:2rem 0">
      <div style="font-size:.85rem;color:var(--muted);margin-bottom:.4rem">📘 Mon ebook</div>
      <strong style="font-size:1rem;color:var(--navy)">Apprendre l'anglais avec la transcription phonétique</strong>
      <p style="font-size:.9rem;color:var(--muted);margin:.5rem 0 .9rem">Méthode conçue pour les francophones : chaque mot anglais accompagné de sa transcription phonétique pour prononcer correctement dès le départ. Idéal pour lire pendant un long vol.</p>
      <a href="go.php?id=amazon-ebook-en" target="_blank" rel="noopener sponsored" class="btn btn-primary" style="font-size:.88rem">Voir sur Amazon →</a>
    </div>

    <!-- H2 arrivée -->
    <h2 id="section-arrivee">L'arrivée à Nội Bài : les 90 premières minutes</h2>
    <p>Le vol n'est que la moitié du voyage — l'atterrissage à Hanoï a ses propres règles du jeu, surtout la première fois :</p>
    <ul>
      <li><strong>Avant même d'embarquer</strong> : n'oublie pas la <a href="declaration-pre-arrivee-vietnam-pai-2026">déclaration pré-arrivée (PAI)</a>, obligatoire pour les grands aéroports vietnamiens — gratuite, en ligne, dans les 72h avant le vol.</li>
      <li><strong>L'immigration</strong> : passeport (et e-visa imprimé si tu en as un — l'impression papier évite bien des discussions). Les files varient énormément selon l'heure d'arrivée des gros porteurs.</li>
      <li><strong>La SIM</strong> : des comptoirs d'opérateurs t'attendent dans le hall — pratique pour être connecté immédiatement, même si les boutiques en ville sont un peu moins chères. Le comparatif est dans <a href="sim-internet-applications-vietnam">le guide SIM et internet</a>.</li>
      <li><strong>Le change</strong> : change juste le minimum à l'aéroport (taux défavorable) — ou saute l'étape si tu as une carte sans frais type Wise, les DAB du hall font l'affaire.</li>
      <li><strong>Le trajet vers la ville</strong> : Nội Bài est à une trentaine de kilomètres du centre. Grab fonctionne depuis l'aéroport (suis les panneaux vers la zone de prise en charge), les taxis officiels ont des comptoirs à prix affichés, et le bus 86 relie le centre pour trois fois rien si tu voyages léger. Évite les rabatteurs qui t'abordent dans le hall.</li>
    </ul>

    <!-- H2 jetlag -->
    <h2 id="section-jetlag">Gérer le décalage horaire (+5h à +6h)</h2>
    <p>Hanoï vit avec 5 heures d'avance sur la France en été, 6 en hiver — et le vol vers l'est est réputé, à juste titre, plus dur pour l'organisme que le retour. Les stratégies qui marchent :</p>
    <ul>
      <li><strong>Choisis ton horaire d'arrivée en réservant</strong> : une arrivée en fin d'après-midi ou en soirée est idéale — tu tiens quelques heures, tu dors à l'heure locale, et le gros du décalage est absorbé dès la première nuit.</li>
      <li><strong>Bascule à l'heure vietnamienne dès l'embarquement</strong> : montre réglée, repas et sommeil calés sur Hanoï, pas sur Paris.</li>
      <li><strong>Le lendemain, vis dehors</strong> : la lumière du jour est le meilleur synchroniseur de l'horloge interne. Un petit-déjeuner phở au soleil vaut tous les compléments de mélatonine.</li>
      <li><strong>Prévois 2-3 jours souples</strong> : ne cale ni rendez-vous administratif ni rencontre de belle-famille décisive dans les 48 premières heures — ton cerveau ne sera pas à son meilleur.</li>
    </ul>

    <!-- FAQ -->
    <h2 id="section-faq">Questions fréquentes</h2>

    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        <?= htmlspecialchars($faq['q']) ?>
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer"><?= htmlspecialchars($faq['a']) ?></div>
    </div>
    <?php endforeach; ?>

    <!-- POUR ALLER PLUS LOIN -->
    <div class="info-box" style="margin-top:3rem;">
      <strong>📖 À lire aussi :</strong>
      <ul style="margin:0.75rem 0 0.5rem;padding-left:1.2rem;">
        <li><a href="checklist-depart-installer-vietnam">Checklist complète pour s'installer au Vietnam depuis la France</a></li>
        <li><a href="organiser-finances-expat-france-vietnam">Organiser ses finances entre France et Vietnam</a></li>
        <li><a href="visa-vietnam-francais-guide-2026">Visa Vietnam pour un Français : le guide complet 2026</a></li>
      </ul>
    </div>

    <!-- ASSURANCE ACS -->
    <div class="tip-box" style="margin-top:2rem;">
      <strong>✈️ Et l'assurance voyage ?</strong> Ne pars pas sans couverture médicale — les hôpitaux internationaux à Hanoï facturent en dollars et la Sécu française ne rembourse pas hors UE. Deux options recommandées chez <strong>ACS</strong> (partenaire du blog) :
      <ul style="margin:0.75rem 0 0;padding-left:1.2rem;">
        <li><a href="https://www.acs-ami.com/fr/assurance-voyage/globe-traveller/?part=blogcapvietnam&utm_source=blog-capvietnam&utm_medium=aff-link" target="_blank" rel="noopener sponsored"><strong>Globe Traveller</strong></a> — tous voyageurs jusqu'à 66 ans, à partir de 25 €, jusqu'à 12 mois</li>
        <li><a href="https://www.acs-ami.com/fr/assurance-voyage/globe-partner/?part=blogcapvietnam&utm_source=blog-capvietnam&utm_medium=aff-link" target="_blank" rel="noopener sponsored"><strong>Globe Partner</strong></a> — moins de 40 ans, à partir de 16,50 €, idéal pour un voyage long ou une première installation</li>
      </ul>
    </div>

    <!-- CTA NEWSLETTER -->
    <div class="cta-newsletter" style="background:linear-gradient(135deg,#001a0d,#003a1a);margin-top:3rem;">
      <h3>📥 Alertes admin &amp; bons plans du mois</h3>
      <p>Bons plans, préparer son départ, vie quotidienne — ce que je vis et ce que j'aurais voulu savoir avant.</p>
      <form class="cta-form" action="<?= SITE_URL ?>/subscribe-pack" method="POST">
        <input type="text" name="website" value="" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit" style="background:var(--jade);color:#fff;">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>

    <!-- AUTHOR BOX -->
    <div class="author-box">
      <img src="<?= PROFILE_PHOTO ?>" alt="Anthony Bouillon — Cap Vietnam" width="72" height="72" loading="lazy" decoding="async" style="width:72px;height:72px;border-radius:50%;object-fit:cover;flex-shrink:0;">
      <div class="author-info">
        <p><strong>Anthony Bouillon</strong> — Français installé entre la France et le Vietnam. J'ai fait le trajet Paris-Hanoï deux fois et j'écris ce que j'aurais voulu lire avant de réserver mes billets.</p>
        <a href="a-propos-capvietnam" class="author-link">En savoir plus →</a>
      </div>
    </div>

  </article>
</div>

<?php include '_article-comments.php'; ?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
