<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Budget mensuel à Hanoï 2026 — Cap Vietnam';
$page_description = 'Budget réel d\'un expatrié à Hanoï en 2026 : loyer, nourriture, transports, loisirs et santé. Chiffres concrets pour différents styles de vie.';
$page_canonical   = SITE_URL . '/budget-mensuel-hanoi-2026';
$page_og_title    = 'Budget mensuel à Hanoï en 2026 : chiffres réels d\'un expatrié';
$page_og_desc     = 'Loyer, nourriture, transport et loisirs : budget détaillé pour vivre à Hanoï en 2026.';
$page_og_url      = 'https://blog-capvietnam.fr/budget-mensuel-hanoi-2026';
$page_og_image    = 'https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=1200&q=80';
$page_schema      = '{"@context":"https://schema.org","@type":"BlogPosting","headline":"Budget mensuel a Hanoi en 2026 : combien ca coute vraiment","datePublished":"2026-04-01","dateModified":"2026-04-01","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://blog-capvietnam.fr/a-propos"},"publisher":{"@type":"Organization","name":"Anthony Bouillon","logo":{"@type":"ImageObject","url":"https://blog-capvietnam.fr/logo-entreprise.png"}},"image":"https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=1200&q=80","description":"Loyer, nourriture, transport et loisirs : budget detaille pour vivre a Hanoi en 2026.","timeRequired":"PT6M","inLanguage":"fr","url":"https://blog-capvietnam.fr/budget-mensuel-hanoi-2026"}';

$article_color   = 'amber';
$article_hero_bg = '#3a2800';
$article_glow    = 'rgba(184,134,11,0.15)';
$article_badge   = 'rgba(184,134,11,0.25)';
$article_badge_c = 'var(--amber-soft)';

$article_category     = 'Argent &amp; Travail';
$article_category_url = 'https://blog-capvietnam.fr/articles-capvietnam';
$page_faq = [
  ['q' => 'Peut-on vraiment vivre confortablement à Hanoï avec 1 000 €/mois ?',
   'a' => 'Oui, avec un appartement correct dans un quartier résidentiel, une alimentation mixte local/restaurants, un scooter et une assurance santé de base. Ce n\'est pas du luxe mais c\'est une vie très confortable comparée à Paris avec ce budget.'],
  ['q' => 'Les prix ont-ils beaucoup augmenté ces dernières années ?',
   'a' => 'Oui, significativement. Les loyers dans les quartiers centraux ont augmenté de 25 à 40% entre 2020 et 2026. Les restaurants internationaux ont aussi monté leurs prix. La nourriture locale reste très abordable. L\'inflation VND est réelle mais les salaires expats en EUR ou USD compensent l\'impact.'],
  ['q' => 'Quel quartier choisir pour un premier logement à Hanoï ?',
   'a' => 'Pour un premier bail, Tây Hồ reste la valeur sûre des expatriés (lac, cafés, services internationaux, communauté), au prix d\'un loyer plus élevé. Ba Đình et Đống Đa offrent un bon compromis centre/prix. Les quartiers plus récents de l\'ouest (Cầu Giấy, Mỹ Đình) sont moins chers et très bien équipés, mais plus loin de la vie expat. Le bon réflexe : deux semaines en location courte durée dans le quartier pressenti avant de signer.'],
  ['q' => 'L\'hiver à Hanoï coûte-t-il quelque chose au budget ?',
   'a' => 'Oui, et ça surprend tout le monde : de décembre à février, Hanoï connaît un vrai hiver humide (parfois 10-15°C pendant des semaines) dans des logements sans chauffage central ni isolation. Radiateur d\'appoint, couette sérieuse et parfois déshumidificateur s\'achètent dès le premier hiver. C\'est aussi la saison des pics de pollution, où un purificateur d\'air devient un investissement raisonnable pour un foyer.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Budget Hanoï 2026</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Budget mensuel à Hanoï en 2026 : chiffres réels d'un expatrié</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 1er avril 2026</span>
      <span>⏱ 12 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Loyer et logement</a></li>
      <li><a href="#section-quartiers">Choisir son quartier</a></li>
      <li><a href="#section-2">Alimentation</a></li>
      <li><a href="#section-3">Transports</a></li>
      <li><a href="#section-4">Santé et assurance</a></li>
      <li><a href="#section-5">Budget récapitulatif</a></li>
      <li><a href="#section-6">Loisirs et divertissements</a></li>
      <li><a href="#section-7">Hanoï vs Hô-Chi-Minh-Ville</a></li>
      <li><a href="#section-8">Dépenses cachées et imprévues</a></li>
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
    <p><strong>Hanoï est encore une des capitales les moins chères d'Asie pour un expatrié occidental.</strong> Mais les coûts ont augmenté de 20 à 30% depuis 2020, portés par l'inflation post-COVID et la montée du marché immobilier. Voici les chiffres réels pour 2026, pas les estimations optimistes des articles de travel bloggers.</p>

    <p>Un mot de méthode : les montants de cette page sont des <strong>fourchettes constatées</strong>, tirées de mes dépenses réelles et de celles d'expatriés installés — pas des prix garantis. Le marché locatif bouge vite, le taux de change EUR/VND aussi, et deux profils « identiques » peuvent avoir des budgets du simple au double selon leurs habitudes. Sers-toi de ces fourchettes pour dimensionner ton projet, puis affine sur place avant tout engagement long.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=1200&q=80" alt="Gestion du budget à Hanoï" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Loyer et logement</h2>
    <p>Le loyer est le poste de dépense le plus variable selon le quartier et le type de logement — c'est lui qui décide si ton mois coûte 500 € ou 1 500 €. Les fourchettes du marché en 2026 :</p>
    <table class="comparison-table">
      <thead><tr><th>Type de logement</th><th>Quartier central</th><th>Quartier résidentiel</th></tr></thead>
      <tbody>
        <tr><td>Chambre seul (T1)</td><td>10 – 16 M VND/mois</td><td>4 – 7 M VND/mois</td></tr>
        <tr><td>Appartement 2 pièces (T2)</td><td>10 – 18 M VND/mois</td><td>7 – 12 M VND/mois</td></tr>
        <tr><td>Appartement 3 pièces (T3)</td><td>15 – 30 M VND/mois</td><td>10 – 20 M VND/mois</td></tr>
        <tr><td>Serviced apartment</td><td>20 – 50 M VND/mois</td><td>—</td></tr>
      </tbody>
    </table>
    <p>Les charges (électricité, eau, internet) s'ajoutent : compte 1 à 3 M VND/mois selon la consommation de climatisation. L'internet fibre optique est excellent et peu cher (150 000 à 300 000 VND/mois pour 100 Mb/s). Pour le mobile, une SIM prépayée locale coûte entre 100 000 et 200 000 VND/mois — voir le <a href="sim-internet-applications-vietnam">guide complet SIM et internet au Vietnam</a>.</p>
    <p>Réflexes de signature valables partout au Vietnam : caution d'un à deux mois à provisionner, contrat écrit exigé (c'est lui qui permet l'enregistrement de ta résidence auprès de la police — obligatoire), vérification du tarif du kWh appliqué par le propriétaire (certains facturent au-dessus du tarif officiel), et négociation systématique sur un engagement de six mois ou un an.</p>

    <h2 id="section-quartiers">Choisir son quartier : le vrai levier du budget</h2>
    <p>À Hanoï, le quartier détermine ton loyer bien plus que la surface. Les grands profils :</p>
    <ul>
      <li><strong>Tây Hồ (West Lake)</strong> : le quartier expat par excellence — le lac, les cafés, les restaurants internationaux, les écoles maternelles françaises. C'est aussi le plus cher, et le plus « bulle » : on peut y vivre des années sans vraiment habiter au Vietnam. Idéal pour un atterrissage en douceur ou une famille.</li>
      <li><strong>Ba Đình / Đống Đa</strong> : le centre historique et administratif, entre ambassades et vieilles ruelles. Bon compromis localisation/prix, vie de quartier vietnamienne authentique, et proximité du Lycée français (Đống Đa) — un critère décisif pour les familles.</li>
      <li><strong>Hoàn Kiếm (vieille ville)</strong> : charmant à visiter, épuisant à habiter — bruit, tourisme, logements anciens. Peu d'expatriés y restent au-delà de la première année.</li>
      <li><strong>Cầu Giấy / Mỹ Đình / Nam Từ Liêm</strong> : le Hanoï moderne des tours résidentielles, moins cher à surface égale, très bien équipé (centres commerciaux, salles de sport), mais loin de la scène expat. C'est là que vivent les classes moyennes vietnamiennes — et les couples mixtes qui optimisent leur budget.</li>
      <li><strong>Long Biên et l'est du fleuve</strong> : loyers doux, maisons avec de l'espace, à condition d'accepter les ponts aux heures de pointe.</li>
    </ul>
    <p>La règle d'or reste la même que dans toutes les villes vietnamiennes : <strong>ne signe rien à distance</strong>. Deux semaines de location courte durée dans le quartier visé t'apprendront plus que cent annonces — et le prix « visite en personne » est presque toujours meilleur que le prix « réservation en ligne ».</p>

    <h2 id="section-2">Alimentation</h2>
    <p>C'est là que Hanoï brille par rapport à Paris, dans une ville où la cuisine de rue est un patrimoine à part entière. Les options vont de l'ultra-économique au restaurant gastronomique :</p>
    <ul>
      <li><strong>Phở ou bún chả du marché</strong> : 30 000 – 50 000 VND (1,0 – 1,6 €)</li>
      <li><strong>Restaurant de quartier (cơm bình dân)</strong> : 50 000 – 100 000 VND par repas</li>
      <li><strong>Restaurant expatrié / cuisine internationale</strong> : 150 000 – 400 000 VND par repas</li>
      <li><strong>Courses au supermarché (BigC, Vinmart)</strong> : 2 – 4 M VND/semaine pour deux personnes</li>
      <li><strong>Marché local (chợ)</strong> : 1 – 2 M VND/semaine pour deux personnes</li>
    </ul>
    <p>Un expatrié qui mange souvent local dépense 3 à 5 M VND par mois en nourriture. Celui qui mange souvent en restaurant occidental compte 8 à 15 M VND.</p>
    <p>La variable décisive, c'est la <strong>part de produits importés</strong> dans ton caddie : fromage, vin, charcuterie, céréales et cosmétiques européens se paient au prix de l'import, et un caddie « comme en France » chez les épiceries spécialisées de Tây Hồ peut coûter plus cher qu'à Paris. Le schéma des expatriés installés : marché de quartier pour le frais, supermarché vietnamien pour la base, et quelques produits français en « luxe assumé » — complétés par la valise à chaque retour de France (<a href="ramener-produits-francais-vietnam">la liste de ce qui vaut le coup est ici</a>). Les applications de livraison (GrabFood et consorts) sont omniprésentes et peu chères, mais c'est le poste qui gonfle en silence quand on ne cuisine jamais.</p>

    <h2 id="section-3">Transports</h2>
    <ul>
      <li><strong>Scooter (essence)</strong> : 300 000 – 600 000 VND/mois selon usage</li>
      <li><strong>Grab (VTC) quotidien</strong> : 2 – 4 M VND/mois</li>
      <li><strong>Bus public</strong> : 9 000 VND par trajet — réseau étendu mais lent</li>
      <li><strong>Taxi classique</strong> : tarif au compteur, environ 12 000 VND/km</li>
      <li><strong>Métro</strong> : Hanoï a désormais ses lignes de métro aérien (Cát Linh–Hà Đông, et la ligne de Nhổn) — billets à prix très modiques, pratique si tu vis et travailles le long d'un axe desservi, encore anecdotique sinon</li>
    </ul>
    <div class="tip-box">
      <strong>💡 Le scooter reste le roi :</strong>
      Acheter un scooter d'occasion (Honda Wave : 8 – 15 M VND, Honda SH : 40 – 80 M VND) est l'investissement qui change le plus la vie à Hanoï. Liberté totale, faible coût d'usage, vente facile au départ.
    </div>

    <h2 id="section-4">Santé et assurance</h2>
    <ul>
      <li><strong>Mutuelle expatriée</strong> : 80 – 150 € / mois (voir <a href="assurance-sante-vietnam-expat">notre guide assurance santé</a>)</li>
      <li><strong>Consultation médecin clinique internationale</strong> : 50 – 100 USD</li>
      <li><strong>Pharmacie courante</strong> : 200 000 – 1 M VND/mois selon besoins</li>
    </ul>
    <p>Ne fais pas de la ligne santé la variable d'ajustement de ton budget : c'est précisément parce que le quotidien est bon marché qu'une hospitalisation privée non couverte fait des dégâts. Selon ton profil, la solution n'est pas la même — mutuelle internationale, CFE, ou <a href="assurance-sante-privee-manulife-vietnam">assurance privée locale</a> pour les installés durables. Et pour savoir où consulter en français à Hanoï : <a href="hopitaux-medecins-francophones-vietnam">hôpitaux et médecins francophones</a>.</p>

    <h3>Le poste que personne ne budgète : les saisons de Hanoï</h3>
    <p>Contrairement au sud du pays, Hanoï a <strong>quatre vraies saisons</strong>, et deux d'entre elles coûtent de l'argent. L'été (mai-septembre) fait tourner la climatisation en continu — c'est le pic de la facture d'électricité, qui peut doubler par rapport au printemps. L'hiver (décembre-février) surprend tous les nouveaux arrivants : humide, gris, parfois 10-15°C pendant des semaines, dans des logements conçus sans chauffage ni isolation. Radiateur d'appoint, sèche-linge ou déshumidificateur (l'humidité de la saison <em>nồm</em>, où les murs « transpirent », est une expérience locale inoubliable) et vraie couette entrent au budget dès la première année. Ajoute la saison des pics de pollution (novembre-mars) où un purificateur d'air devient un achat raisonnable — surtout avec des enfants.</p>

    <h2 id="section-5">Budget récapitulatif mensuel</h2>
    <table class="comparison-table">
      <thead><tr><th>Poste</th><th>Budget "local"</th><th>Budget "confort"</th><th>Budget "expat luxe"</th></tr></thead>
      <tbody>
        <tr><td>Loyer</td><td>6 M VND</td><td>12 M VND</td><td>25 M VND</td></tr>
        <tr><td>Nourriture</td><td>3 M VND</td><td>6 M VND</td><td>12 M VND</td></tr>
        <tr><td>Transports</td><td>1 M VND</td><td>2 M VND</td><td>4 M VND</td></tr>
        <tr><td>Santé/assurance</td><td>2 M VND</td><td>3 M VND</td><td>5 M VND</td></tr>
        <tr><td>Loisirs / sorties</td><td>1 M VND</td><td>3 M VND</td><td>8 M VND</td></tr>
        <tr><td><strong>TOTAL</strong></td><td><strong>~13 M VND (~420 €)</strong></td><td><strong>~26 M VND (~845 €)</strong></td><td><strong>~54 M VND (~1 750 €)</strong></td></tr>
      </tbody>
    </table>
    <div class="info-box">
      <strong>📅 Taux de change avril 2026 :</strong>
      1 EUR ≈ 30 800 VND (taux indicatif avril 2026 — vérifier le taux actuel avant de planifier).
    </div>

    <div class="tip-box" style="display:flex;align-items:center;gap:1.25rem;">
      <div style="font-size:1.8rem;line-height:1;flex-shrink:0">🧮</div>
      <div>
        <strong>Ces chiffres te correspondent-ils ?</strong>
        Ce tableau donne des moyennes. <a href="calculateur-budget-vietnam">Essaie le calculateur de budget interactif →</a> pour obtenir une estimation selon ton profil exact : type de logement, pourcentage de repas locaux, transport et assurance.
      </div>
    </div>

    <h2 id="section-6">Loisirs et divertissements</h2>
    <p>Souvent sous-estimés dans les budgets expats, les loisirs peuvent représenter un poste significatif si tu vis à Hanoï à l'occidentale. La bonne nouvelle : la version vietnamienne de chaque loisir coûte une fraction de sa version expat — le café au bord du lac plutôt que le brunch à Tây Hồ, le bia hơi de trottoir plutôt que le craft bar, le badminton du parc plutôt que la salle premium. Le mix des deux fait un budget loisirs très raisonnable pour une capitale :</p>
    <ul>
      <li><strong>Bar / soirée</strong> : bière locale (bia hơi) à 10 000–20 000 VND. Cocktail dans un bar expat : 80 000–150 000 VND. Une soirée à Tạ Hiện (vieille ville) : 200 000–500 000 VND selon les consommations.</li>
      <li><strong>Gym / fitness</strong> : salles basiques à 200 000–400 000 VND/mois. Clubs internationaux (California Fitness, Cleverfit) : 700 000–1 500 000 VND/mois.</li>
      <li><strong>Yoga et cours collectifs</strong> : 100 000–200 000 VND par cours, abonnements mensuels à 800 000–2 000 000 VND.</li>
      <li><strong>Cinéma</strong> : 80 000–130 000 VND la séance (CGV, Lotte Cinema). Films en version originale souvent disponibles.</li>
      <li><strong>Week-ends et excursions</strong> : Sapa (train nuit 300 000–700 000 VND), Baie d'Halong (1–2 jours : 1 500 000–5 000 000 VND selon croisière), Ha Giang (3–4 jours moto : 3–8 M VND). Prévoir 5–15 M VND par weekend d'excursion.</li>
    </ul>

    <h2 id="section-7">Hanoï vs Hô-Chi-Minh-Ville : différences de coût</h2>
    <p>Si tu hésites entre les deux grandes villes, le budget est un facteur à considérer — mais pas le seul : Hanoï offre la profondeur culturelle, les quatre saisons et l'accès au Nord ; Saïgon, le dynamisme économique, le climat constant et le plus grand marché de l'emploi. Pour des budgets détaillés dans d'autres villes : <a href="budget-mensuel-da-nang-2026">budget Đà Nẵng</a>, <a href="budget-mensuel-hue-2026">budget mensuel à Huế</a> et <a href="budget-mensuel-nha-trang-2026">budget mensuel à Nha Trang</a>.</p>
    <table class="comparison-table">
      <thead><tr><th>Poste</th><th>Hanoï</th><th>Hô-Chi-Minh-Ville</th></tr></thead>
      <tbody>
        <tr><td>Loyer T2 central</td><td>10–18 M VND/mois</td><td>12–22 M VND/mois</td></tr>
        <tr><td>Repas local</td><td>30 000–60 000 VND</td><td>40 000–80 000 VND</td></tr>
        <tr><td>Vie nocturne</td><td>Modérée, concentrée</td><td>Plus développée, prix similaires</td></tr>
        <tr><td>Cafés de travail</td><td>Nombreux, très abordables</td><td>Plus large offre, légèrement plus cher</td></tr>
        <tr><td>Coût de vie global</td><td>~10–15% moins cher</td><td>Base de référence</td></tr>
      </tbody>
    </table>
    <p>Hanoï est globalement légèrement moins chère que HCMC, surtout pour le logement. Mais les deux villes sont accessibles avec un budget de 1 000 à 1 500 € par mois en mode confort.</p>

    <h3>Le budget du couple mixte : la ligne invisible</h3>
    <p>Si tu vis à Hanoï en couple franco-vietnamien, ton budget comporte une ligne qu'aucun tableau d'expat solo ne mentionne : <strong>la famille</strong>. Les enveloppes de mariage (tiền mừng) des cousins qui se marient, les lì xì du Tết pour les enfants et les aînés, la participation aux événements familiaux (anniversaires de décès, fêtes de village), le coup de main ponctuel à un parent : tout cela fait partie du contrat social vietnamien, et c'est un poste réel — variable selon la taille de la famille et la saison des mariages. Ce n'est ni négociable ni à vivre comme une charge : c'est le prix d'appartenance à un réseau qui te le rendra au centuple (garde d'enfants, logement au village, réseau professionnel). On en parle en détail dans <a href="argent-couple-franco-vietnamien">l'article sur l'argent dans le couple franco-vietnamien</a>.</p>

    <h2 id="section-8">Les dépenses cachées et imprévues</h2>
    <p>Plusieurs postes sont systématiquement oubliés dans les estimations de budget expat — et ce sont eux qui expliquent l'écart entre le budget théorique du premier mois et la réalité de la première année :</p>
    <ul>
      <li><strong>Dépôt de garantie logement</strong> : 2 à 3 mois de loyer à l'entrée dans les lieux — non inclus dans les budgets mensuels mais à prévoir en trésorerie initiale (souvent 20–50 M VND).</li>
      <li><strong>Voyages en France</strong> : un aller-retour Hanoï–Paris coûte 600–1 400 € selon la saison et l'anticipation. Prévoir 1 à 2 voyages par an selon la situation familiale.</li>
      <li><strong>Frais administratifs</strong> : traductions assermentées (300 000–500 000 VND), renouvellements de carte de résidence, légalisations d'actes. Prévoir 1–3 M VND par an.</li>
      <li><strong>Entretien scooter</strong> : un scooter d'occasion demande de l'entretien. Compte 500 000–2 000 000 VND par an pour les imprévus mécaniques (pneu crevé, câble de frein, carburateur).</li>
      <li><strong>Réserve d'urgence</strong> : si ton assurance n'inclut pas le rapatriement, un billet de dernière minute Paris–Hanoï coûte 1 500–3 000 €. Maintiens une réserve minimum de 3 000 € intouchable.</li>
    </ul>
    <div class="tip-box">
      <strong>Règle des 20% :</strong>
      Ajoute systématiquement 20% à tes estimations de budget mensuel pour couvrir les imprévus et les fluctuations de taux de change. Un mois à 800 € est souvent suivi d'un mois à 1 400 €.
    </div>

    <?php
    $aff_id    = 'wise';
    $aff_icon  = '💸';
    $aff_title = 'Gérer son budget expatrié avec Wise';
    $aff_text  = 'Garde une réserve en euros et convertis en VND au taux interbancaire quand tu en as besoin — sans les marges cachées des banques françaises. L\'outil que j\'utilise chaque mois pour gérer mon budget entre France et Vietnam.';
    $aff_cta   = 'Ouvrir Wise gratuitement';
    $aff_note  = 'Lien affilié — premier transfert offert. Aucun impact sur le service ni le prix pour toi.';
    $aff_theme = 'green';
    include '_affiliate-cta.php';
    ?>

    <?php
    $aff_id    = 'revolut';
    $aff_icon  = '💳';
    $aff_title = 'Revolut — zéro frais de change pour ton budget à Hanoï';
    $aff_text  = 'Dépense en VND directement depuis ta carte sans commission. Idéal pour gérer ton budget expatrié au quotidien. Bonus : <strong>liens affiliés transparents.</strong>';
    $aff_cta   = 'Ouvrir Revolut (bonus + 50% reversé)';
    $aff_note  = 'Lien de parrainage — sans coût supplémentaire pour toi.';
    $aff_theme = 'blue';
    include '_affiliate-cta.php';
    ?>

    <div class="info-box">
      <strong>Tu travailles en ligne depuis Hanoï ?</strong> → <a href="travailler-a-distance-depuis-vietnam">Statut juridique, résidence fiscale, visa et protection sociale : le guide complet</a>
    </div>
    <div class="info-box">
      <strong>Tu prépares ta retraite à Hanoï ?</strong> → <a href="retraite-vietnam-francais">Guide retraite au Vietnam : visa, pension, santé, fiscalité, budget réaliste</a>
    </div>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <?php
$author_bio = <<<'BIO'
Chiffres basés sur mes propres dépenses et celles d'amis expatriés à Hanoï en 2026. Mis à jour régulièrement.
BIO;
include '_author-box.php';
?>

    <div class="cta-newsletter">
      <h3>Reçois les prochains guides</h3>
      <p>📥 <strong>Guide PDF + 3 modèles de lettres offerts</strong> dès l'inscription. Un email par mois, désinscription en 1 clic.</p>
      <form class="cta-form" action="<?= SITE_URL ?>/subscribe-pack" method="POST">
        <input type="text" name="website" value="" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
$current_slug = 'budget-mensuel-hanoi-2026';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
