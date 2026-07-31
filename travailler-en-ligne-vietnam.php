<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Travailler en ligne depuis le Vietnam — Cap Vietnam';
$page_description = 'Travailler en ligne depuis le Vietnam légalement : statut juridique, obligations fiscales, visas adaptés et vie de nomade digital à Hanoï.';
$page_canonical   = SITE_URL . '/travailler-en-ligne-vietnam';
$page_og_title    = 'Travailler en ligne depuis le Vietnam : guide légal et pratique';
$page_og_desc     = 'Comment travailler en ligne depuis le Vietnam : visa, obligations fiscales et coworkings à Hanoï.';
$page_og_url      = SITE_URL . '/travailler-en-ligne-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=1200&q=80';
$page_schema      = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Travailler en ligne depuis le Vietnam : statut légal, impôts et vie pratique',
  'description'      => 'Comment travailler en ligne depuis le Vietnam : visa, obligations fiscales et coworkings à Hanoï.',
  'image'            => 'https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=1200&q=80',
  'datePublished'    => '2026-03-15',
  'dateModified'     => '2026-06-15',
  'author'           => ['@type' => 'Person', 'name' => 'Anthony Bouillon', 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'        => ['@type' => 'Organization', 'name' => 'Cap Vietnam', 'url' => SITE_URL],
  'mainEntityOfPage' => SITE_URL . '/travailler-en-ligne-vietnam',
  'inLanguage'       => 'fr',
  'articleSection'   => 'Argent & Travail',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color   = 'amber';
$article_hero_bg = '#3a2800';
$article_glow    = 'rgba(184,134,11,0.15)';
$article_badge   = 'rgba(184,134,11,0.25)';
$article_badge_c = 'var(--amber-soft)';

$article_category     = 'Argent &amp; Travail';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'Peut-on travailler depuis un café sans être repéré par les autorités ?',
   'a' => 'Oui, aucun contrôle n\'existe pour ce type d\'usage. Les autorités vietnamiennes ne surveillent pas les cafés pour repérer des nomades digitaux étrangers. La préoccupation légale est plutôt fiscale (dans ton pays d\'origine) que policière (au Vietnam).'],
  ['q' => 'Peut-on créer une société au Vietnam pour travailler légalement ?',
   'a' => 'Oui. Un étranger peut créer une société à responsabilité limitée (SARL - Công ty TNHH) au Vietnam avec 100% de capital étranger. Cela permet d\'obtenir un permis de travail, de facturer des clients vietnamiens et d\'employer du personnel local. Le capital minimum recommandé est d\'environ 10 000 USD selon l\'activité.'],
  ['q' => 'Quel est le décalage horaire entre le Vietnam et la France ?',
   'a' => 'Le Vietnam est à UTC+7 toute l\'année (pas de changement d\'heure) : +6 heures sur la France en hiver, +5 heures en été. Quand il est 9h à Paris, il est 15h ou 16h à Hanoï. Pour un télétravailleur, cela signifie des matinées vietnamiennes sans sollicitations françaises, et une fenêtre de réunions l\'après-midi — une organisation très vivable une fois les limites posées.'],
  ['q' => 'Faut-il apporter son matériel informatique ou acheter sur place ?',
   'a' => 'Apporte ton ordinateur principal : tu connais son clavier (AZERTY introuvable au Vietnam, où le QWERTY règne) et tu évites toute friction de garantie. Sur place, tout le reste s\'achète très bien — écrans, périphériques, accessoires — dans les grandes enseignes d\'électronique des villes, à des prix corrects. Vérifie simplement que tes appareils supportent le 220V (standard vietnamien, comme en France) et prévois des adaptateurs pour les prises plates rencontrées ici et là.'],
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
      <span>Travailler en ligne Vietnam</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Travailler en ligne depuis le Vietnam : statut légal, impôts et vie pratique</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 15 mars 2026</span>
      <span>⏱ 12 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">La situation légale</a></li>
      <li><a href="#section-2">Quel visa pour les nomades ?</a></li>
      <li><a href="#section-3">Obligations fiscales</a></li>
      <li><a href="#section-4">Connexion Internet à Hanoï</a></li>
      <li><a href="#section-5">Les meilleurs espaces de travail</a></li>
      <li><a href="#section-6">Protection sociale et retraite</a></li>
      <li><a href="#section-7">Plateformes freelance francophones</a></li>
      <li><a href="#section-8">Gérer ses revenus multi-pays</a></li>
      <li><a href="#section-fuseau">Travailler avec le décalage horaire</a></li>
      <li><a href="#section-erreurs">Les erreurs fréquentes</a></li>
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
    <p><strong>Hanoï est devenu un hub pour les nomades digitaux francophones.</strong> Internet rapide, coût de vie bas, vie sociale riche — mais la situation légale pour travailler à distance depuis le Vietnam est floue. Voici ce que dit réellement la loi, comment gérer la fiscalité et la protection sociale (les deux vrais sujets), où travailler au quotidien, et comment tirer parti du décalage horaire au lieu de le subir.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=1200&q=80" alt="Télétravail depuis un café à Hanoï" width="1200" height="675" loading="lazy">

    <h2 id="section-1">La situation légale pour les nomades digitaux</h2>
    <p>Il n'existe pas (en 2026) de visa "nomade digital" au Vietnam. La réglementation vietnamienne (Loi sur l'entrée et la résidence n°51/2019/QH14) ne reconnaît pas formellement le statut de nomade digital — contrairement à la Thaïlande, l'Indonésie ou la Malaisie qui ont créé des programmes dédiés. Le Vietnam attire pourtant massivement cette population, sur ses seuls arguments de fond : coût de vie, fibre, sécurité, qualité de vie.</p>
    <p>Dans les faits, deux situations coexistent :</p>
    <ul>
      <li><strong>Travail pour un employeur étranger</strong> (France, Canada, etc.) depuis le Vietnam : légalement, tu travailles pour une entité étrangère et ton revenu est généré hors Vietnam. Tu n'exerces pas d'activité économique vietnamienne. C'est la situation la plus courante et la moins risquée.</li>
      <li><strong>Travail en freelance avec des clients vietnamiens</strong> : là, tu exerces une activité économique au Vietnam sans permis de travail — ce qui est théoriquement illégal selon le Code du travail vietnamien.</li>
    </ul>
    <div class="warning-box">
      <strong>Zone grise légale :</strong>
      Le Vietnam n'a pas de mécanisme d'application stricte contre les nomades qui travaillent pour des entités étrangères. En pratique, cette situation est tolérée. Mais elle reste formellement non réglementée — prends tes précautions et consulte un juriste si tu envisages une installation longue durée.
    </div>

    <h2 id="section-2">Quel visa utiliser ?</h2>
    <ul>
      <li><strong>E-visa 90 jours multi-entrées</strong> : accessible en ligne, renouvelable en sortant du pays. Solution utilisée par beaucoup de nomades courts et moyens séjours.</li>
      <li><strong>Visa business (DN/DL)</strong> : délivré pour motif d'affaires, valable 3 à 12 mois selon demande. Mieux adapté aux séjours longs avec activité professionnelle.</li>
      <li><strong>Carte de résidence temporaire (LĐ, ĐT)</strong> : pour ceux qui ont un contrat local ou qui investissent. Voir notre <a href="carte-residence-temporaire-vietnam">guide complet</a>.</li>
    </ul>

    <h2 id="section-3">Obligations fiscales</h2>
    <p>Le point le plus important et le moins discuté. Deux régimes peuvent s'appliquer :</p>
    <p><strong>France :</strong> Si tu restes résident fiscal français (liens significatifs conservés), tu dois déclarer l'ensemble de tes revenus mondiaux en France, y compris ceux perçus au Vietnam. La convention fiscale franco-vietnamienne de 1993 évite la double imposition mais ne t'exonère pas de déclaration.</p>
    <p><strong>Vietnam :</strong> Si tu séjournes plus de 183 jours par an au Vietnam, tu peux être considéré comme résident fiscal vietnamien. Les revenus de source étrangère sont en principe non imposés au Vietnam si tu n'exerces pas d'activité économique locale. Mais la réglementation est floue pour les cas hybrides.</p>
    <div class="tip-box">
      <strong>💡 La bonne démarche :</strong>
      Consulte un expert-comptable spécialisé en fiscalité internationale avant de passer plus de 6 mois au Vietnam. Les règles évoluent et une situation non clarifiée peut créer des arriérés d'impôts des deux côtés.
    </div>
    <p>En attendant ce rendez-vous, un geste simple qui coûte zéro : <strong>tiens le décompte de tes jours de présence</strong> dans chaque pays (un tableur, ou simplement tes tampons de passeport photographiés). C'est LA donnée de base de toute analyse de résidence fiscale, et celle que personne n'a sous la main quand la question devient sérieuse. Les deux articles compagnons pour creuser : <a href="residence-fiscale-france-vietnam-183-jours">la règle des 183 jours</a> et <a href="declarer-impots-france-depuis-vietnam">déclarer ses impôts français depuis le Vietnam</a>.</p>

    <h2 id="section-4">La connexion Internet à Hanoï</h2>
    <p>Hanoï a une des meilleures infrastructures Internet d'Asie du Sud-Est — et c'est un point que les nouveaux arrivants sous-estiment systématiquement, en imaginant un pays « en développement » côté réseau. La réalité : les débits fibre domestiques atteignent couramment 100 à 500 Mb/s pour 150 000 à 400 000 VND/mois, soit une fraction du prix français. Les quatre opérateurs principaux (Viettel, VNPT, FPT, CMC) couvrent 95% de la ville avec de la fibre optique.</p>
    <ul>
      <li>4G mobile : excellent partout à Hanoï, 30 à 70 000 VND/mois pour données illimitées</li>
      <li>Coupures : rares dans les quartiers centraux, plus fréquentes lors des typhons</li>
      <li>VPN : recommandé pour accéder à certains services (quelques sites internationaux peuvent être lents sans VPN)</li>
    </ul>
    <p>Le kit de continuité du professionnel : une <strong>SIM data en secours</strong> du partage de connexion (opérateur différent de ta fibre, pour ne pas tomber avec elle), une batterie externe capable de tenir un appel visio, et le repérage du café à fibre le plus proche pour les jours de coupure. Avec ce trio à quelques dizaines d'euros, tu peux promettre à tes clients une disponibilité que bien des télétravailleurs français ne tiennent pas. Détail des forfaits et opérateurs dans le <a href="sim-internet-applications-vietnam">guide SIM et internet</a>.</p>

    <h2 id="section-5">Les meilleurs espaces de travail</h2>
    <ul>
      <li><strong>Toong Coworking</strong> (plusieurs adresses à Hanoï) : espaces professionnels, salles de réunion, abonnements flexibles (200 000 VND/jour, 2 M VND/mois)</li>
      <li><strong>Kafé</strong> (Tây Hồ) : café spécialisé nomades digitaux, WiFi solide, ambiance internationale</li>
      <li><strong>The Coffee House, Highland Coffee</strong> : cafés de chaîne avec WiFi fiable et prises électriques — idéal pour 2 à 3 heures de travail</li>
      <li><strong>Le café vietnamien de quartier</strong> : l'option sous-cotée — WiFi correct, cà phê à prix local, et personne ne te presse de partir. La culture du café-où-l'on-reste-des-heures est vietnamienne avant d'être nomade</li>
    </ul>
    <p>Le bon mix dépend de ton métier : les appels visio à répétition réclament le calme d'un coworking ou du bureau à domicile (la fibre résidentielle est excellente), le travail de production s'accommode parfaitement des cafés. Beaucoup alternent : maison le matin, café l'après-midi — la variété fait partie de l'hygiène mentale du travail à distance.</p>
    <p>Voir aussi notre <a href="cafes-coworkings-hanoi">guide complet des cafés et coworkings à Hanoï</a>.</p>

    <h2 id="section-6">Protection sociale et retraite du nomade digital</h2>
    <p>C'est le point aveugle de beaucoup de nomades digitaux installés au Vietnam — le sujet dont personne ne parle sur les forums entre deux photos de plage, et qui fait pourtant la différence entre une parenthèse réussie et un trou de dix ans dans une carrière sociale. En quittant la France sans situation employeur active, tu perds progressivement tes droits :</p>
    <ul>
      <li><strong>Assurance maladie</strong> : les droits sont maintenus 6 à 12 mois après le départ selon ta situation. Après ce délai, tu n'as plus de couverture française — d'où l'intérêt de la CFE ou d'une mutuelle expatriée dès le départ.</li>
      <li><strong>Chômage (ARE)</strong> : les droits ARE sont perdus si tu t'expatries sans maintenir une recherche active d'emploi en France. Pôle Emploi ne "met pas en pause" tes droits pour une expatriation volontaire.</li>
      <li><strong>Retraite</strong> : chaque trimestre non cotisé est un trimestre perdu. Deux solutions pour les indépendants français expatriés :
        <ul>
          <li><strong>CFE Assurance Vieillesse</strong> : cotisation volontaire. Environ 100–200 €/trimestre selon les revenus déclarés.</li>
          <li><strong>Assurance Vieillesse des Français de l'Étranger (AVFE)</strong> : option de la CNAV permettant de valider des trimestres depuis l'étranger. Cumul possible avec CFE maladie.</li>
        </ul>
      </li>
    </ul>
    <div class="warning-box">
      <strong>L'effet invisible des trimestres manquants :</strong>
      Un nomade digital de 30 ans installé au Vietnam sans cotisation volontaire pendant 5 ans perd 20 trimestres de retraite. Cela représente une décote permanente sur la pension française. L'investissement de 1 200–2 400 €/an en cotisations volontaires est souvent très rentable sur le long terme.
    </div>

    <h2 id="section-7">Les plateformes freelance adaptées au marché francophone</h2>
    <p>Si tu travailles en freelance depuis le Vietnam pour des clients francophones ou internationaux, certaines plateformes sont nettement mieux adaptées. Précision d'expérience : les plateformes servent à <em>amorcer</em> — les freelances installés au Vietnam qui vivent bien de leur activité tirent l'essentiel de leurs revenus de clients directs et de recommandations, la plateforme n'étant plus qu'un canal d'appoint. Vise cette trajectoire dès le départ :</p>
    <table class="comparison-table">
      <thead><tr><th>Plateforme</th><th>Marché cible</th><th>Types de missions</th><th>Commission</th></tr></thead>
      <tbody>
        <tr><td><strong>Malt</strong></td><td>France / Europe francophone</td><td>Dev, design, marketing, conseil</td><td>10% (1re mission), 5% ensuite</td></tr>
        <tr><td><strong>Upwork</strong></td><td>International anglophone</td><td>Toutes catégories</td><td>10% jusqu'à 10 000 $, 5% après</td></tr>
        <tr><td><strong>Fiverr</strong></td><td>International</td><td>Missions courtes / micro-services</td><td>20%</td></tr>
        <tr><td><strong>Toptal</strong></td><td>Tech international</td><td>Dev senior, finance, design</td><td>Sélectif — pas de commission visible</td></tr>
        <tr><td><strong>LinkedIn</strong></td><td>International B2B</td><td>Conseil, formation, SaaS</td><td>0% (réseau direct)</td></tr>
      </tbody>
    </table>
    <div class="tip-box">
      <strong>Stratégie recommandée :</strong>
      Commence sur Malt si tu cibles les clients français (profils vérifiés, facturation automatique, TVA gérée). Développe en parallèle un réseau LinkedIn avec mention de ta localisation Vietnam — l'exotisme joue souvent en faveur dans les appels d'offres tech et conseil.
    </div>

    <div class="tip-box">
      <strong>💬 Enseigner le français en ligne depuis Hanoï :</strong> Si tu es francophone, <a href="go.php?id=italki" rel="noopener sponsored">italki</a> te permet de donner des cours particuliers à des apprenants du monde entier — depuis un café ou ton appartement. Pas de diplôme requis en tant que tuteur communautaire. Revenus typiques : 10–25 €/h selon ta réputation. Une option concrète pour compléter tes revenus dès ton arrivée au Vietnam.
    </div>

    <h2 id="section-8">Gérer ses revenus multi-pays depuis le Vietnam</h2>
    <p>Travailler depuis le Vietnam pour des clients en France, Belgique, Canada ou Suisse implique de gérer plusieurs devises et systèmes bancaires — et chaque point de friction évité sur les paiements est de la marge gagnée. Voici les outils utilisés par la communauté expat :</p>
    <ul>
      <li><strong>Wise (multi-devises)</strong> : compte avec IBAN français/belge/britannique, conversion EUR→VND au taux interbancaire, frais 0,4–0,7%. Idéal pour recevoir des paiements clients et convertir en VND pour les dépenses locales.</li>
      <li><strong><a href="go.php?id=revolut" rel="noopener sponsored">Revolut Business</a></strong> : même concept avec plus de fonctionnalités comptables et facturation intégrée. Plans à partir de 7 €/mois.</li>
      <li><strong>PayPal</strong> : encore utilisé par beaucoup de clients, mais les frais (3,4% + frais fixe) le rendent peu intéressant pour les montants importants. Acceptable pour les petites missions.</li>
      <li><strong>Compte bancaire vietnamien (VCB, TCB)</strong> : pratique pour les dépenses quotidiennes en VND et les virements locaux. Nécessite une carte de résidence pour l'ouverture.</li>
    </ul>
    <p>Pour la facturation : si tu es auto-entrepreneur français, tu peux facturer tes clients depuis la France avec ton numéro SIRET même depuis le Vietnam. La domiciliation reste en France, les factures sont émises en euros. La règle des 183 jours s'applique pour définir ta résidence fiscale — voir notre <a href="fiscalite-expat-france-vietnam">guide sur la fiscalité expatriée</a>.</p>
    <p>Si la gestion d'une structure te rebute, deux alternatives sérieuses existent : le <a href="portage-salarial-depuis-vietnam">portage salarial</a> (tu factures via une société française qui te salarie — retraite et chômage inclus, idéal pour les missions au TJM correct) et, pour les projets d'implantation réelle au Vietnam, la <a href="creer-entreprise-vietnam-statuts-juridiques">création d'une société locale</a>. Le comparatif complet des statuts est dans le <a href="portage-salarial-ou-micro-entreprise-vietnam">face-à-face portage vs micro-entreprise</a>.</p>

    <?php
    $aff_id    = 'wise';
    $aff_icon  = '💸';
    $aff_title = 'Wise : l\'outil indispensable du nomade francophone';
    $aff_text  = 'IBAN français pour recevoir tes clients, compte multi-devises EUR/VND/USD, conversion au taux interbancaire sans frais cachés. C\'est l\'outil que j\'utilise pour gérer mes revenus freelance depuis Hanoï.';
    $aff_cta   = 'Ouvrir un compte Wise gratuit';
    $aff_note  = 'Lien affilié — je touche une petite commission si tu effectues un premier transfert. Aucun impact sur le service ou le prix.';
    $aff_theme = 'green';
    include '_affiliate-cta.php';
    ?>

    <?php
    $aff_id    = 'revolut';
    $aff_icon  = '💳';
    $aff_title = 'Revolut — encaisser et dépenser sans frais depuis le Vietnam';
    $aff_text  = 'Reçois tes paiements clients, échange en VND au taux réel, retire des espèces sans frais. Et lien affilié transparent.';
    $aff_cta   = 'Ouvrir Revolut (bonus + 50% reversé)';
    $aff_note  = 'Lien de parrainage — sans coût supplémentaire pour toi.';
    $aff_theme = 'blue';
    include '_affiliate-cta.php';
    ?>

    <div class="info-box">
      <strong>Dossier complet :</strong> → <a href="travailler-a-distance-depuis-vietnam">Travailler à distance depuis le Vietnam : statuts, fiscalité, visa et protection sociale</a><br>
      <strong>📱 Rester connecté :</strong> → <a href="sim-internet-applications-vietnam">SIM, internet et applications au Vietnam — Viettel, Mobifone, Zalo, Grab (guide 2026)</a>
    </div>

    <h2 id="section-fuseau">Travailler avec le décalage horaire : l'atout caché du Vietnam</h2>
    <p>Le Vietnam vit à UTC+7, sans changement d'heure : soit <strong>+6 heures sur la France en hiver, +5 heures en été</strong>. Pour un télétravailleur avec des clients français, ce décalage structure toute la journée — et bien géré, c'est un avantage compétitif :</p>
    <ul>
      <li><strong>Tes matinées sont libres</strong> : quand tu commences ta journée à Hanoï, la France dort. Ces heures sans email ni notification sont idéales pour le travail de fond — production, code, rédaction. Beaucoup de nomades n'ont jamais été aussi productifs qu'avec ce « bouclier horaire » naturel.</li>
      <li><strong>Le recouvrement se joue l'après-midi</strong> : 14h-19h à Hanoï = 8h-13h (hiver) ou 9h-14h (été) à Paris. C'est ta fenêtre de réunions, d'appels et de réactivité client — largement suffisante pour une collaboration fluide.</li>
      <li><strong>Le piège du soir</strong> : l'après-midi français déborde sur ta soirée vietnamienne. Sans discipline, tu réponds aux messages jusqu'à 22h et ta vie locale (et ton couple) en pâtit. Fixe une heure de coupure et annonce-la à tes clients — « joignable jusqu'à 18h heure de Paris » est une limite parfaitement professionnelle.</li>
      <li><strong>Annonce ton fuseau, pas ta localisation précise si tu préfères</strong> : la plupart des clients se moquent d'où tu es tant que les créneaux sont clairs et tenus. La fiabilité des rendez-vous vaut tous les arguments.</li>
    </ul>

    <h2 id="section-erreurs">Les erreurs fréquentes du nomade au Vietnam</h2>
    <ul>
      <li><strong>Ignorer la retraite parce qu'on a 30 ans</strong> : les trimestres perdus ne se rattrapent pas — voir la section protection sociale, c'est LE conseil que les nomades de 45 ans donnent à ceux de 30.</li>
      <li><strong>Laisser sa micro-entreprise française en pilote automatique</strong> : la domiciliation, la TVA et la résidence fiscale évoluent quand ta présence au Vietnam s'allonge. Un point annuel avec un comptable évite l'accumulation silencieuse de problèmes.</li>
      <li><strong>Prendre des clients vietnamiens « pour arrondir »</strong> : c'est le geste qui transforme une situation tolérée en travail illégal caractérisé. Les clients locaux exigent une structure locale ou un permis — pas d'exception.</li>
      <li><strong>Négliger l'assurance santé</strong> : aucun statut de cette page n'apporte de couverture maladie. L'accident de scooter n'attend pas que tu aies « le temps de t'en occuper ».</li>
      <li><strong>Vivre en pointillé sur des e-visas sans plan B</strong> : ça fonctionne, jusqu'au jour où un agent d'immigration trouve que ça fait beaucoup. Si ta vie se construit ici (couple, logement), commence à bâtir un vrai statut — les options sont dans le <a href="visa-teletravail-digital-nomad-vietnam">guide visa des nomades</a>.</li>
    </ul>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <?php
$author_bio = <<<'BIO'
Télétravailleur depuis Hanoï depuis 2026. Ces informations ne constituent pas un conseil juridique — consulte un professionnel pour ta situation spécifique.
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
$current_slug = 'travailler-en-ligne-vietnam';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
