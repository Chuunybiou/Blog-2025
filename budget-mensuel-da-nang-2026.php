<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Budget mensuel à Da Nang en 2026 : combien ça coûte vraiment ?';
$page_description = 'Loyer, nourriture, transport, activités : budget réel d\'un expatrié à Da Nang en 2026. Comparaison avec Hanoï et HCMV, et pourquoi Da Nang attire de plus en plus de Français.';
$page_canonical   = SITE_URL . '/budget-mensuel-da-nang-2026';
$page_og_title    = 'Budget mensuel à Da Nang 2026 : chiffres concrets pour les expatriés';
$page_og_desc     = 'Combien coûte la vie à Da Nang ? Loyer, resto, plage, internet : budget détaillé pour 2026.';
$page_og_url      = SITE_URL . '/budget-mensuel-da-nang-2026';
$page_og_image    = SITE_URL . '/assets/img/pont-dragon-nuit-da-nang.jpg';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Budget mensuel à Da Nang en 2026 : combien ça coûte vraiment ?',
  'datePublished'   => '2026-09-01',
  'dateModified'    => '2026-09-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/budget-mensuel-da-nang-2026',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Argent & Travail',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'amber';
$article_hero_bg      = '#3a2a0e';
$article_glow         = 'rgba(211,154,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Argent & Travail';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'Da Nang est-elle moins chère que Hanoï ou HCMV ?',
   'a' => 'En général oui, surtout pour le logement — les appartements sont moins chers qu\'à Hanoï centre ou dans les quartiers expats de HCMV. La nourriture locale reste dans les mêmes gammes de prix. Les activités liées à la plage et aux sports nautiques sont un poste supplémentaire spécifique à Da Nang.'],
  ['q' => 'Y a-t-il une communauté française à Da Nang ?',
   'a' => 'Oui, Da Nang a une communauté d\'expatriés occidentaux en croissance, dont des Français. Des groupes Facebook et des associations existent. La ville est de plus en plus populaire auprès des nomades digitaux et des expatriés qui veulent éviter les grandes métropoles.'],
  ['q' => 'Quel est le meilleur quartier pour un expatrié à Da Nang ?',
   'a' => 'Le quartier Mỹ Khê (bord de mer) est prisé des expats mais plus cher. Le quartier Hải Châu (centre-ville) est bien desservi et plus abordable. An Hải Bắc et Mỹ An offrent un bon compromis entre vie de quartier locale et proximité de la plage.'],
  ['q' => 'Da Nang convient-elle aux nomades digitaux ?',
   'a' => 'C\'est même devenu l\'une des bases préférées des nomades en Asie du Sud-Est : fibre quasi généralisée, cafés où travailler à tous les coins de rue, espaces de coworking, communauté internationale active et plage pour décompresser. Attention simplement au cadre légal : travailler à distance depuis le Vietnam a ses subtilités de visa, détaillées dans l\'article dédié au télétravail au Vietnam.'],
  ['q' => 'La saison des typhons rend-elle la vie difficile à Da Nang ?',
   'a' => 'De septembre à décembre, la côte centrale peut connaître pluies intenses, inondations ponctuelles et quelques typhons. La ville est habituée et bien organisée, mais certaines journées se passent à l\'intérieur, et le choix du logement compte (étanchéité, étage élevé, quartier qui ne retient pas l\'eau). Le reste de l\'année, le climat est l\'un des grands arguments de la ville.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Budget Da Nang 2026</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Budget mensuel à Da Nang en 2026 : chiffres réels pour les expatriés</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Septembre 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis &agrave; jour : Septembre 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi Da Nang</a></li>
      <li><a href="#section-2">Logement</a></li>
      <li><a href="#section-3">Alimentation</a></li>
      <li><a href="#section-4">Transport</a></li>
      <li><a href="#section-5">Santé et assurance</a></li>
      <li><a href="#section-6">Loisirs et activités</a></li>
      <li><a href="#section-oublies">Les coûts qu'on oublie</a></li>
      <li><a href="#section-7">Budget récapitulatif</a></li>
      <li><a href="#section-comparaison">Da Nang face à Hanoï et HCMV</a></li>
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
    <p><strong>Da Nang est en train de devenir la ville préférée des expatriés qui ne veulent pas vivre dans une mégapole.</strong> Mer, montagne, taille humaine, aéroport international, internet rapide et coût de la vie raisonnable — c'est la combinaison idéale pour beaucoup de nomades et d'expatriés. Voici ce que ça coûte vraiment d'y vivre en 2026.</p>

    <p>Un mot de méthode avant les chiffres. Les montants de cet article sont des <strong>fourchettes</strong>, pas des prix au dong près : le marché locatif bouge vite, le taux de change USD/VND aussi, et deux expatriés au « même » profil peuvent avoir des budgets du simple au double selon leurs habitudes. Utilise ces fourchettes pour dimensionner ton projet — et vérifie les prix du moment sur place ou dans les groupes d'expatriés avant de t'engager sur un bail. Les loyers sont exprimés en dollars parce que c'est l'usage du marché locatif expat au Vietnam ; les dépenses du quotidien, elles, se vivent en dong.</p>

    <img class="article-photo" src="assets/img/pont-dragon-nuit-da-nang.jpg" alt="Pont du Dragon illuminé la nuit, Da Nang — Vietnam" width="1200" height="675" loading="lazy">

    <div class="tip-box">
      <strong>Comparatif :</strong> Voir aussi <a href="budget-mensuel-hanoi-2026">Budget Hanoï</a> et <a href="budget-mensuel-hcmc-2026">Budget HCMV</a> pour comparer les trois grandes villes.
    </div>

    <h2 id="section-1">Pourquoi Da Nang pour les expatriés</h2>
    <p>Da Nang cumule des atouts rares : plages de sable blanc à 10 minutes du centre-ville, montagne de Bà Nà Hills en arrière-plan, ville propre et bien organisée, internet fibre omniprésent, et une infrastructure en développement rapide. La ville est suffisamment grande pour avoir tous les services nécessaires sans être envahissante comme Hanoï ou HCMV.</p>
    <p>Sa position est un autre atout sous-estimé : Hội An, la vieille ville classée à l'UNESCO, est à une trentaine de kilomètres au sud ; Huế, l'ancienne capitale impériale, à deux heures au nord par le col des Nuages. Le week-end, tu changes de décor sans prendre l'avion. Et quand tu dois voyager, l'aéroport international est littéralement <em>dans</em> la ville — un luxe que mesurent vite ceux qui ont connu les trajets vers Nội Bài à Hanoï.</p>
    <p>Le profil des expatriés qu'on y croise a évolué : aux retraités et couples mixtes se sont ajoutés des vagues de nomades digitaux, attirés par le trio plage-cafés-fibre. Le quartier d'An Thượng, derrière la plage Mỹ Khê, est devenu leur épicentre — cafés pour travailler, restaurants western, écoles de surf. Si tu travailles à distance, l'article sur <a href="visa-teletravail-digital-nomad-vietnam">le télétravail au Vietnam</a> complète bien ce budget.</p>
    <p>Le climat est chaud (28-34°C en été) mais tempéré par la brise marine. La saison des typhons (septembre-décembre) peut apporter des pluies intenses — à anticiper. C'est une vraie donnée budgétaire et pratique : logements à vérifier (étanchéité, étage), climatisation qui tourne fort le reste de l'année, et quelques journées par an où la ville vit au ralenti. Rien de rédhibitoire, mais mieux vaut le savoir avant de signer un bail en août.</p>

    <h2 id="section-2">Logement</h2>
    <p>Le logement est le poste qui décide de tout le reste de ton budget — et c'est ici que Da Nang creuse l'écart avec les métropoles. Le parc est récent, l'offre abondante, et la concurrence entre propriétaires joue en faveur du locataire. Le marché locatif de Da Nang est attractif comparé aux grandes métropoles :</p>
    <table>
      <thead>
        <tr><th>Type de logement</th><th>Fourchette de prix mensuelle</th></tr>
      </thead>
      <tbody>
        <tr><td>Studio/1 pièce (quartier local)</td><td>350 – 500 USD</td></tr>
        <tr><td>Appartement 1 chambre (expat)</td><td>400 – 700 USD</td></tr>
        <tr><td>Appartement 2 chambres (bord de mer)</td><td>700 – 1 200 USD</td></tr>
        <tr><td>Villa avec piscine partagée</td><td>1 000 – 2 000 USD</td></tr>
      </tbody>
    </table>
    <p>Les quartiers proches de la plage Mỹ Khê sont plus chers mais très demandés. Les quartiers résidentiels comme Hòa Cường Bắc ou An Hải Bắc sont moins chers et bien desservis.</p>

    <h3>Comment chercher (et éviter les pièges)</h3>
    <p>Le marché fonctionne essentiellement par <strong>groupes Facebook</strong> (recherche « Da Nang apartment for rent ») et par agents locaux, gratuits pour le locataire car rémunérés par le propriétaire. Quelques règles qui économisent de l'argent et des ennuis :</p>
    <ul>
      <li><strong>Réserve une ou deux semaines d'hébergement temporaire</strong> et visite sur place. Louer à distance sur photos, c'est payer le prix « en ligne » — souvent gonflé — pour un bien que tu n'as pas vu.</li>
      <li><strong>Tout se négocie</strong>, surtout sur un engagement de six mois ou un an, et surtout hors haute saison touristique. Le prix affiché est un point de départ.</li>
      <li><strong>Vérifie ce que le loyer inclut</strong> : eau, internet, ménage parfois — mais l'électricité est presque toujours en plus, au compteur. Avec la climatisation en été, c'est le poste qui surprend le plus les nouveaux arrivants. Vérifie aussi le tarif du kWh appliqué par le propriétaire : certains facturent au-dessus du tarif officiel.</li>
      <li><strong>Prévois une caution</strong> (un à deux mois de loyer, l'usage local) dans ton budget d'installation, en plus du premier mois.</li>
      <li><strong>Exige un contrat écrit</strong>, même simple : c'est aussi lui qui permet l'enregistrement de ta résidence auprès de la police locale, obligatoire pour tout étranger.</li>
    </ul>

    <h2 id="section-3">Alimentation</h2>
    <p>Da Nang est réputée pour sa cuisine locale (bánh mì, mì Quảng, bánh xèo, fruits de mer frais). La cuisine du Centre est l'une des plus savoureuses du pays, et c'est un vrai poste d'économies : bien manger local ici n'est pas une contrainte budgétaire, c'est un des plaisirs de la ville. Manger local est très bon marché :</p>
    <ul>
      <li>Repas de rue / cantine locale : <strong>30 000 – 60 000 VND</strong></li>
      <li>Café : <strong>30 000 – 50 000 VND</strong></li>
      <li>Restaurant mi-gamme pour 2 personnes : <strong>150 000 – 350 000 VND</strong></li>
      <li>Supermarché (produits importés) : prix proches de Hanoï</li>
    </ul>
    <p>Budget nourriture mensuel réaliste : <strong>150 – 300 USD</strong> (alimentation locale) à <strong>350 – 600 USD</strong> (mode expat).</p>
    <p>La variable qui fait passer d'une fourchette à l'autre, c'est la <strong>part de cuisine occidentale</strong> dans ta semaine. Le mì Quảng du marché coûte une fraction du burger d'An Thượng, et le fromage, le vin ou les céréales importées se paient au prix de produits… importés. Le schéma gagnant de la plupart des expatriés installés : local en semaine (marchés de quartier, cantines cơm, fruits de mer du matin), western en sortie. Les applications de livraison (Grab Food et consorts) sont omniprésentes et bon marché en frais de livraison — pratique, mais c'est aussi le poste qui gonfle silencieusement un budget quand on ne cuisine jamais.</p>

    <h2 id="section-4">Transport</h2>
    <p>Da Nang est une ville à taille humaine — moins dense que Hanoï ou HCMV. Les déplacements sont plus faciles :</p>
    <ul>
      <li>Scooter en location longue durée : <strong>80 – 120 USD/mois</strong></li>
      <li>Grab (moto) : <strong>25 000 – 40 000 VND</strong> pour 5 km</li>
      <li>Taxi/Grab voiture : disponible mais moins utilisé</li>
      <li>Vélo électrique : option croissante pour les distances courtes</li>
    </ul>
    <p>Le scooter reste le mode de vie par défaut, et Da Nang est probablement la grande ville vietnamienne la plus agréable pour s'y mettre : larges boulevards, circulation moins agressive qu'à Hanoï, distances courtes. Deux rappels tout de même. D'abord, <strong>rouler légalement exige un permis valide au Vietnam</strong> — le point complet est dans l'article sur <a href="permis-conduire-vietnam">le permis de conduire au Vietnam</a> ; au-delà de l'amende, un permis non valide peut faire sauter ta couverture d'assurance en cas d'accident. Ensuite, le casque n'est pas négociable, quoi qu'en disent les habitudes locales. Si tu ne veux pas de deux-roues, la combinaison Grab + marche fonctionne très bien dans les quartiers centraux et près de la plage — c'est un budget, mais il reste modeste comparé à une grande ville européenne.</p>

    <h2 id="section-5">Santé et assurance</h2>
    <p>Da Nang a plusieurs hôpitaux et cliniques, dont des établissements privés anglophones. L'offre médicale s'est nettement étoffée avec la croissance de la ville, mais elle reste un cran en dessous de Hanoï et HCMV pour les spécialités pointues : pour les cas graves ou les pathologies rares, un transfert vers l'une des deux métropoles peut être nécessaire. C'est un paramètre à intégrer si tu as un suivi médical régulier.</p>
    <p>Côté budget, la ligne « santé » du tableau récapitulatif correspond à une prime d'assurance lissée au mois plus les petites consultations courantes. Ne fais pas l'impasse dessus : c'est précisément parce que tout paraît bon marché au quotidien qu'une hospitalisation privée non assurée fait si mal. Selon ton profil — installé durablement ou mobile entre la France et le Vietnam — la bonne réponse n'est pas la même : le <a href="assurance-sante-vietnam-expat">guide assurance santé expatrié</a> couvre la CFE et les mutuelles internationales, et l'article sur <a href="assurance-sante-privee-manulife-vietnam">l'assurance santé privée locale</a> explique l'option vietnamienne. Pour savoir où consulter en français : <a href="hopitaux-medecins-francophones-vietnam">hôpitaux et médecins francophones au Vietnam</a>.</p>

    <h2 id="section-6">Loisirs et activités</h2>
    <p>C'est là où Da Nang se distingue :</p>
    <ul>
      <li>Plage gratuite, accès permanent — pas de frais d'entrée</li>
      <li>Sports nautiques (surf, paddle, plongée) : <strong>15 – 40 USD</strong> la session</li>
      <li>Randonnée dans les montagnes (Bà Nà, Sơn Trà) : gratuite ou très bon marché</li>
      <li>Coworking : <strong>70 – 150 USD/mois</strong> (hot desk)</li>
      <li>Sortie bar / restaurant western : <strong>20 – 50 USD</strong> pour une soirée</li>
    </ul>
    <p>La particularité de Da Nang, c'est que <strong>le loisir principal est gratuit</strong> : la plage, le lever de soleil sur la mer, la boucle de la péninsule de Sơn Trà en scooter, les marchés du soir. À budget loisirs égal, la qualité de vie perçue y est nettement supérieure à celle d'une mégapole où chaque sortie se paie. C'est ce qui explique le paradoxe des expatriés de Da Nang : beaucoup dépensent <em>moins</em> qu'à Hanoï tout en ayant l'impression de vivre mieux. Les salles de sport et studios de yoga se sont multipliés à tous les prix, et la scène des cafés — où l'on peut travailler des heures pour le prix d'un cà phê sữa đá — fait office de deuxième bureau pour toute la communauté nomade.</p>

    <h2 id="section-oublies">Les coûts qu'on oublie (et qui font dérailler les budgets)</h2>
    <p>Les tableaux de budget mensuels sont trompeurs par construction : ils lissent des dépenses qui, elles, arrivent par à-coups. Avant de valider ton budget Da Nang, provisionne :</p>
    <ul>
      <li><strong>Le visa</strong> : e-visas à renouveler, sorties de territoire éventuelles, ou frais de dossier selon ta situation — le détail des options est dans le <a href="visa-vietnam-francais-guide-2026">guide des visas</a>. Poste modeste au mois, mais réel à l'année.</li>
      <li><strong>L'installation</strong> : caution du logement, premier équipement (casque, ventilateurs, ustensiles), achat ou location du scooter. Le premier mois coûte toujours plus cher que les suivants.</li>
      <li><strong>L'électricité d'été</strong> : la climatisation de juin à septembre peut faire varier ta facture du simple au double d'une saison à l'autre.</li>
      <li><strong>Les vols vers la France</strong> : un aller-retour par an, ramené au mois, pèse plus lourd que ton abonnement internet.</li>
      <li><strong>Les transferts et frais bancaires</strong> : retraits, change, virements internationaux — optimisables avec les bonnes solutions (<a href="transferer-argent-vietnam-wise">transférer de l'argent au Vietnam</a>, <a href="banque-vietnam-francais">ouvrir un compte local</a>), coûteux si on les subit.</li>
      <li><strong>La SIM et l'internet mobile</strong> : peu cher, mais à choisir correctement dès l'arrivée — voir <a href="sim-internet-applications-vietnam">SIM et internet au Vietnam</a>.</li>
    </ul>

    <h2 id="section-7">Budget mensuel récapitulatif</h2>

    <table>
      <thead>
        <tr>
          <th>Poste</th>
          <th>Budget serré</th>
          <th>Budget confort</th>
          <th>Budget expat+</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Logement</td><td>350 $</td><td>500 $</td><td>1 000 $</td></tr>
        <tr><td>Nourriture</td><td>150 $</td><td>300 $</td><td>500 $</td></tr>
        <tr><td>Transport</td><td>80 $</td><td>100 $</td><td>150 $</td></tr>
        <tr><td>Santé / assurance</td><td>50 $</td><td>100 $</td><td>200 $</td></tr>
        <tr><td>Loisirs / activités</td><td>50 $</td><td>200 $</td><td>400 $</td></tr>
        <tr><td><strong>Total estimé</strong></td><td><strong>~680 $</strong></td><td><strong>~1 200 $</strong></td><td><strong>~2 250 $</strong></td></tr>
      </tbody>
    </table>

    <p>Comment lire ce tableau ? Le <strong>budget serré</strong> correspond à une vie très locale : logement simple en quartier vietnamien, cuisine de rue, loisirs gratuits. C'est viable, des expatriés le vivent — mais il laisse peu de marge pour l'imprévu. Le <strong>budget confort</strong> est celui de la majorité des expatriés installés : appartement correct, mix local/western, quelques sorties, une vraie assurance. Le <strong>budget expat+</strong> ajoute le logement vue mer, les restaurants sans regarder l'addition et les week-ends à Hội An. Dans les trois cas, ajoute les « coûts oubliés » de la section précédente pour obtenir ton vrai coût annuel, et garde une réserve de sécurité de quelques mois de dépenses — la règle d'or de toute expatriation.</p>

    <h2 id="section-comparaison">Da Nang face à Hanoï et HCMV : le verdict budget</h2>
    <p>À niveau de vie équivalent, Da Nang est généralement la moins chère des trois grandes destinations d'expatriation — l'écart se joue surtout sur le logement, où l'on obtient pour le prix d'un studio de Hanoï centre un appartement plus grand, plus récent, et parfois avec vue mer. La nourriture locale, elle, coûte sensiblement la même chose partout au Vietnam ; c'est l'offre western qui est un peu moins développée (et donc moins tentante) qu'à Saïgon.</p>
    <p>Mais le choix entre les trois villes n'est pas d'abord budgétaire. Hanoï offre la profondeur culturelle et l'accès au nord ; HCMV, le dynamisme économique et le plus grand marché de l'emploi ; Da Nang, la qualité de vie et la mer. Compare les trois postes par postes avec le <a href="budget-mensuel-hanoi-2026">budget Hanoï</a> et le <a href="budget-mensuel-hcmc-2026">budget HCMV</a> — et si ton cœur balance, va passer deux semaines dans chacune : c'est le seul comparatif qui compte vraiment.</p>

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
$current_slug = 'budget-mensuel-da-nang-2026';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
