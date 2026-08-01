<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Visa Vietnam pour un Français : guide complet 2026';
$page_description = 'E-visa 90 jours, exemption 45 jours, visa travail ou visa TT mariage : tout ce qu\'il faut savoir pour entrer et vivre au Vietnam en 2026.';
$page_canonical   = SITE_URL . '/visa-vietnam-francais-guide-2026';
$page_og_title    = 'Visa Vietnam pour un Français : le guide complet 2026';
$page_og_desc     = 'E-visa, visa de travail, regroupement familial… Tout savoir sur les visas pour vivre au Vietnam.';
$page_og_url      = 'https://blog-capvietnam.fr/visa-vietnam-francais-guide-2026';
$page_og_image    = SITE_URL . '/assets/img/village-route-karsts-phong-nha.jpg';
$page_schema      = '{"@context":"https://schema.org","@type":"Article","headline":"Visa Vietnam pour un Français : le guide complet 2026","datePublished":"2026-04-01","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://blog-capvietnam.fr"},"publisher":{"@type":"Organization","name":"Anthony Bouillon"},"mainEntityOfPage":"https://blog-capvietnam.fr/visa-vietnam-francais-guide-2026","inLanguage":"fr","articleSection":"Démarches Administratives"}';

$article_color   = 'jade';
$article_hero_bg = '#1a3a1e';
$article_glow    = 'rgba(27,107,82,0.15)';
$article_badge   = 'rgba(191,74,42,0.25)';
$article_badge_c = '#e8856a';

$article_category     = 'Démarches Admin';
$article_category_url = 'https://blog-capvietnam.fr/articles-capvietnam';
$page_faq = [
  ['q' => 'Quel visa pour vivre au Vietnam en tant que Français ?',
   'a' => "Selon ta situation : l'e-visa pour un séjour jusqu'à 90 jours, le visa de travail si tu as un employeur, ou le visa TT si ton conjoint est vietnamien."],
  ['q' => 'Faut-il un visa pour un séjour de moins de 45 jours ?',
   'a' => "Les citoyens français bénéficient d'une exemption de visa pour les séjours de 45 jours maximum. Au-delà, un e-visa ou un autre type de visa est nécessaire."],
  ['q' => 'Peut-on enchaîner plusieurs exemptions de 45 jours en sortant et rentrant ?',
   'a' => "Il n'y a pas de délai minimum officiel entre deux entrées en exemption. En pratique, sortir et rentrer fonctionne — mais l'admission reste à la discrétion de l'agent d'immigration, et des allers-retours répétés qui ressemblent à une résidence déguisée peuvent finir par poser question. Pour un projet de longue durée, un vrai statut (travail, TT) est la seule base saine."],
  ['q' => 'Que se passe-t-il en cas de dépassement de visa (overstay) ?',
   'a' => "L'overstay est une infraction au Vietnam : amende proportionnelle à la durée du dépassement, régularisation obligatoire avant de pouvoir sortir du territoire, et mention qui peut compliquer les demandes de visa suivantes. Même un dépassement d'un jour se paie. Mets une alerte dans ton téléphone dix jours avant l'échéance : c'est le bug le plus évitable de toute l'expatriation."],
  ['q' => 'Sur quel site demander l\'e-visa vietnamien ?',
   'a' => "Uniquement sur le portail officiel de l'immigration vietnamienne (domaine gouvernemental en .gov.vn). Des dizaines de sites privés imitent le site officiel et facturent le même e-visa deux à quatre fois plus cher, parfois avec des délais aléatoires. Avant de payer, vérifie le domaine : s'il ne se termine pas par .gov.vn, ce n'est pas le site officiel."],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Démarches Administratives</a><span class="breadcrumb-sep">›</span>
      <span>Visa Vietnam</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Visa Vietnam pour un Français : le guide complet 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 1er avril 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Les types de visa</a></li>
      <li><a href="#section-exemption">L'exemption de 45 jours</a></li>
      <li><a href="#section-2">L'e-visa (tourisme)</a></li>
      <li><a href="#section-3">Visa de travail</a></li>
      <li><a href="#section-4">Regroupement familial</a></li>
      <li><a href="#section-5">Comparatif des options</a></li>
      <li><a href="#section-6">Mon expérience</a></li>
      <li><a href="#section-7">L'enregistrement de séjour</a></li>
      <li><a href="#section-8">Renouveler sans partir</a></li>
      <li><a href="#section-erreurs">Les erreurs qui coûtent cher</a></li>
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
    <p><strong>Tu veux t'installer au Vietnam mais tu ne sais pas quel visa choisir ?</strong> Normal — entre l'exemption de 45 jours, l'e-visa, le visa de travail, le visa de regroupement familial et les multiples sous-catégories, c'est un vrai casse-tête. Dans cet article, je te résume tout ce que j'ai appris en préparant ma propre expatriation : les options réelles, leurs limites, et les pièges qui coûtent de l'argent ou des jours de blocage à l'aéroport.</p>

    <img class="article-photo" src="assets/img/village-route-karsts-phong-nha.jpg" alt="Village et route au milieu des karsts à Phong Nha — Vietnam" width="1200" height="675" loading="lazy">

    <div class="info-box">
      <strong>💡 Tu prévois de t'installer durablement ?</strong> Ce guide couvre les visas. Pour tout ce qui suit l'arrivée (logement, banque, santé, fiscalité), consulte le <a href="s-expatrier-vietnam-2026-guide-complet">guide complet s'expatrier au Vietnam 2026</a>.
    </div>

    <h2 id="section-1">Les différents types de visa pour le Vietnam</h2>
    <p>Le Vietnam propose plusieurs catégories de visa aux ressortissants français, désignées par des codes à deux lettres hérités de la loi vietnamienne sur l'immigration (DL pour le tourisme, DN pour les affaires, LD pour le travail, TT pour la famille…). Pas besoin de tous les connaître : le bon choix dépend de ta situation — tu viens en touriste, pour travailler, ou pour rejoindre ton conjoint vietnamien.</p>
    <ul>
      <li><strong>L'exemption de visa 45 jours</strong> — aucune formalité, pour les courts séjours</li>
      <li><strong>L'e-visa</strong> — pour les séjours de moins de 90 jours (tourisme, repérage)</li>
      <li><strong>Le visa de travail (DN/LD)</strong> — si tu as un employeur ou crées une entreprise</li>
      <li><strong>Le visa de regroupement familial (TT)</strong> — si ton conjoint est vietnamien</li>
    </ul>
    <p>Une précision de vocabulaire qui évite bien des confusions : au Vietnam, le <em>visa</em> (l'autorisation d'entrer et de séjourner) et le <em>permis de travail</em> (l'autorisation de travailler) sont deux documents distincts, délivrés par deux administrations différentes. Avoir l'un ne donne jamais l'autre. La plupart des malentendus d'expatriés viennent de là.</p>

    <h2 id="section-exemption">L'exemption de 45 jours : l'entrée la plus simple</h2>
    <p>Depuis août 2023, les ressortissants français bénéficient d'une <strong>exemption unilatérale de visa de 45 jours</strong> accordée par le gouvernement vietnamien (avec une poignée d'autres nationalités européennes). Concrètement : tu prends ton vol, tu passes l'immigration avec ton passeport, et tu ressors avec un tampon de 45 jours. Ni formulaire, ni frais, ni démarche préalable — à l'exception de la <a href="declaration-pre-arrivee-vietnam-pai-2026">déclaration PAI</a> pour les grands aéroports (voir plus bas).</p>
    <ul>
      <li><strong>Conditions</strong> : passeport valable au moins 6 mois à l'entrée, et les exigences classiques (billet de continuation parfois demandé à l'embarquement par la compagnie).</li>
      <li><strong>Ce qu'elle permet</strong> : tourisme, repérage, visites familiales. Pas de travail local.</li>
      <li><strong>Ce qu'elle ne permet pas</strong> : s'installer. C'est un tampon de court séjour, pas un statut.</li>
    </ul>
    <p>Point important : cette exemption est une <em>politique</em> vietnamienne, renouvelée par périodes par décision gouvernementale — pas un droit acquis gravé dans le marbre. Elle est en vigueur depuis des années et le Vietnam l'a plutôt élargie que restreinte, mais vérifie toujours son statut avant un voyage planifié de longue date.</p>

    <h2 id="section-2">L'e-visa : simple et rapide</h2>
    <p>L'e-visa est le plus facile à obtenir. Tu fais la demande en ligne sur le portail officiel du gouvernement vietnamien, et tu reçois ta réponse par email en 3 jours ouvrés en général (davantage en période de pointe ou autour du Tết — anticipe).</p>
    <div class="warning-box">
      <strong>⚠️ Le piège n°1 : les faux sites d'e-visa.</strong>
      Le seul site légitime est le portail officiel de l'immigration vietnamienne, sur un domaine gouvernemental en <strong>.gov.vn</strong>. Des dizaines de sites privés au design quasi identique arrivent en tête de Google et facturent le même e-visa deux à quatre fois plus cher, avec des délais imprévisibles. Vérifie le domaine avant de payer.
    </div>
    <div class="info-box">
      <strong>📋 Ce qu'il te faut pour l'e-visa :</strong>
      Un passeport valide 6 mois après la date d'entrée, une photo d'identité numérique, une carte bancaire pour le paiement (25 USD), et ton itinéraire de voyage.
    </div>
    <p>L'e-visa est valable <strong>90 jours</strong>, entrées multiples. C'est parfait pour un séjour de repérage.</p>
    <p>Deux subtilités à connaître au moment de remplir le formulaire. D'abord, <strong>le point d'entrée se choisit à la demande</strong> : l'e-visa mentionne le ou les postes-frontières par lesquels tu es autorisé à entrer (aéroport, poste terrestre). Entrer par un autre point que celui déclaré peut te bloquer à la frontière — si ton itinéraire est incertain, choisis l'aéroport le plus probable et évite les plans trop créatifs. Ensuite, <strong>les informations doivent correspondre au passeport à la lettre près</strong> : une faute de frappe dans le numéro de passeport ou le nom se règle en refaisant une demande, pas à l'aéroport.</p>
    <div class="warning-box">
      <strong>⚠️ Attention :</strong>
      L'e-visa ne te permet PAS de travailler au Vietnam, même en freelance. Travailler en ligne depuis le Vietnam avec un e-visa est dans une zone grise juridique.
    </div>

    <div class="tip-box">
      <strong>📋 Nouveau depuis avril 2026 — la déclaration pré-arrivée (PAI)</strong>
      Quel que soit ton visa, tous les voyageurs arrivant à <b>Hanoï, Hô Chi Minh-Ville, Đà Nẵng ou Phú Quốc</b> doivent remplir un formulaire PAI (Pre-Arrival Information) en ligne dans les <b>72h avant le vol</b>. Gratuit, obligatoire, en ligne sur le portail officiel des douanes vietnamiennes. Oubli ou refus : risque de refoulement à l'aéroport. → <a href="declaration-pre-arrivee-vietnam-pai-2026">Guide complet PAI 2026</a>
    </div>

    <h2 id="section-3">Le visa de travail : pour travailler légalement</h2>
    <p>Si tu as un employeur au Vietnam ou si tu crées une entreprise sur place, tu auras besoin d'un visa de travail. C'est le visa <strong>DN</strong> (business) ou <strong>LD</strong> (travailleur), accompagné d'un permis de travail. Le parcours type, piloté en grande partie par l'employeur :</p>
    <ol>
      <li>Ton employeur au Vietnam fait une demande de permis de travail auprès du Département du Travail</li>
      <li>Tu fournis un extrait de casier judiciaire, un certificat médical, et tes diplômes (apostillés et traduits)</li>
      <li>Le permis de travail est délivré (durée max : 2 ans)</li>
      <li>Avec le permis, tu demandes le visa de travail à l'ambassade ou au bureau d'immigration</li>
    </ol>
    <p>Bonne nouvelle pour les couples mixtes : le Code du travail vietnamien prévoit des <strong>cas d'exemption de permis de travail</strong>, et l'un d'eux concerne directement les lecteurs de ce blog — l'étranger <strong>marié à un(e) Vietnamien(ne) et vivant au Vietnam</strong> est dispensé de permis de travail pour travailler sur place. Attention, dispensé de permis ne veut pas dire dispensé de formalité : il faut faire confirmer l'exemption auprès des autorités du travail, et l'emploi doit rester déclaré. Le détail des deux parcours (permis classique et exemption conjoint) est dans notre article sur <a href="permis-de-travail-vietnam-francais">le permis de travail au Vietnam</a>.</p>

    <h2 id="section-4">Le visa familial (TT) et ses prolongements</h2>
    <p>Si ton conjoint est vietnamien et que vous êtes mariés, la voie familiale est la plus solide pour les couples franco-vietnamiens. Elle comporte en réalité <strong>trois outils complémentaires</strong>, qu'on confond souvent :</p>
    <ul>
      <li><strong>Le visa TT</strong> : le visa de regroupement familial proprement dit, délivré sur la base du lien de mariage. C'est la porte d'entrée du statut familial.</li>
      <li><strong>La carte de séjour temporaire (TRC, <em>thẻ tạm trú</em>)</strong> : une fois sur place avec un visa TT, tu peux demander cette carte pluriannuelle (jusqu'à 3 ans au titre familial), qui remplace le visa et supprime les renouvellements rapprochés. C'est le vrai statut de résident du conjoint étranger — notre guide dédié : <a href="carte-residence-temporaire-vietnam">la carte de résidence temporaire</a>.</li>
      <li><strong>Le certificat d'exemption de visa 5 ans (<em>giấy miễn thị thực</em>)</strong> : un document distinct, réservé notamment aux conjoints de Vietnamiens, valable jusqu'à 5 ans, qui permet d'entrer sans visa avec des séjours de 6 mois maximum par entrée. Idéal pour les couples qui vivent entre les deux pays sans résider au Vietnam en permanence.</li>
    </ul>
    <p>Documents de base du dossier familial :</p>
    <ul>
      <li>Acte de mariage transcrit (reconnu au Vietnam)</li>
      <li>Lettre d'invitation de ta femme (formulaire NA5)</li>
      <li>Copie du livret de famille vietnamien (<em>sổ hộ khẩu</em>) ou justificatif de résidence équivalent</li>
      <li>Passeport valide 6 mois + 2 photos d'identité</li>
    </ul>

    <h2 id="section-5">Comparatif : quel visa choisir ?</h2>
    <table class="comparison-table">
      <thead><tr><th>Critère</th><th>E-visa</th><th>Visa de travail</th><th>Visa TT (familial)</th></tr></thead>
      <tbody>
        <tr><td><strong>Durée</strong></td><td>90 jours</td><td>Jusqu'à 2 ans</td><td>Jusqu'à 5 ans</td></tr>
        <tr><td><strong>Coût</strong></td><td>~25 USD</td><td>100-300 USD</td><td>Faible / gratuit</td></tr>
        <tr><td><strong>Droit de travailler</strong></td><td>❌ Non</td><td>✅ Oui</td><td>❌ Non</td></tr>
        <tr><td><strong>Délai d'obtention</strong></td><td>3 jours</td><td>2-4 semaines</td><td>1-2 semaines</td></tr>
        <tr><td><strong>Idéal pour</strong></td><td>Repérage</td><td>Salariés</td><td>Couples mixtes</td></tr>
      </tbody>
    </table>

    <h3>Quel visa selon ton profil ?</h3>
    <ul>
      <li><strong>Tu viens découvrir ou repérer</strong> : exemption 45 jours si ton séjour tient dedans, e-visa 90 jours sinon. Ne complique pas.</li>
      <li><strong>Tu es nomade digital</strong> : il n'existe pas de visa « télétravail » au Vietnam — tu vivras d'e-visas successifs, avec les limites et les zones grises que ça implique. Lis le <a href="visa-teletravail-digital-nomad-vietnam">guide honnête pour digital nomads</a> avant de t'engager.</li>
      <li><strong>Tu as un contrat local ou tu montes une boîte</strong> : permis de travail + visa/carte correspondants, en passant par ton employeur ou ta société. C'est le parcours le plus procédurier mais le plus solide.</li>
      <li><strong>Ton conjoint est vietnamien</strong> : visa TT puis carte TRC, ou certificat d'exemption 5 ans selon votre mode de vie. C'est le statut le plus confortable du pays — et si tu veux travailler, l'exemption de permis de travail des conjoints est ton alliée.</li>
      <li><strong>Tu es retraité</strong> : pas de visa retraite au Vietnam — la stratégie se construit avec les outils ci-dessus, détaillée dans le <a href="retraite-vietnam-francais">guide retraite</a>.</li>
    </ul>

    <h2 id="section-6">Mon expérience personnelle</h2>
    <p>Dans mon cas : j'arrive d'abord avec un e-visa de 90 jours pour m'installer. Pendant ce temps, on prépare le dossier de mariage. Une fois mariés, je bascule sur un visa TT. Je travaille en ligne, activité déclarée en France.</p>
    <p>Avec le recul, deux leçons. La première : <strong>le visa se planifie en même temps que le projet, pas après</strong>. Le calendrier de notre mariage (CCAM, audition, célébration) a dicté le calendrier de mes visas, et si j'avais découvert les délais en cours de route, j'aurais enchaîné les sorties de territoire pour rien. La seconde : <strong>garde toujours une copie de tout</strong> — visas, tampons d'entrée, enregistrements de résidence. Au Vietnam, la charge de la preuve est de ton côté, et un dossier bien archivé transforme n'importe quelle démarche de suivi (TRC, banque, permis) en formalité.</p>
    <div class="tip-box">
      <strong>💡 L'astuce fiscale :</strong>
      Au-delà de 183 jours de présence au Vietnam, tu deviens résident fiscal vietnamien. C'est un sujet complexe — lire notre <a href="fiscalite-expat-france-vietnam">article sur la fiscalité expat</a>.
    </div>

    <h2 id="section-7">L'enregistrement de séjour : une obligation souvent oubliée</h2>
    <p>Quel que soit ton visa, tu es légalement tenu de t'enregistrer auprès du commissariat de police local (<em>công an phường</em>) dans les <strong>24 heures</strong> suivant ton arrivée dans un logement au Vietnam. Cette règle s'applique aussi bien à un hôtel qu'à un appartement loué à un particulier — et elle vaut à chaque changement d'adresse, pas seulement à la première arrivée dans le pays.</p>
    <p>Dans les hôtels et résidences hôtelières, l'établissement gère cet enregistrement automatiquement via le système VNPAS. Dans un appartement particulier, c'est légalement la responsabilité du propriétaire — mais en pratique, beaucoup l'oublient. Vérifier auprès de ton bailleur que la démarche a bien été effectuée.</p>
    <div class="info-box">
      <strong>Pourquoi c'est important :</strong>
      En cas de contrôle de police à ton domicile, l'absence d'enregistrement peut entraîner une amende de 1 500 000 à 3 000 000 VND. De plus, certaines démarches administratives (ouverture de compte bancaire, demande de carte de résidence temporaire) requièrent une preuve d'adresse qui peut être difficile à obtenir sans enregistrement régulier.
    </div>

    <h2 id="section-8">Renouveler ou changer de statut sans partir</h2>
    <p>Pour les nomades digitaux en e-visa 90 jours, la question du renouvellement revient vite. Options disponibles en 2026 :</p>
    <ul>
      <li><strong>La "visa run"</strong> : sortir du Vietnam et rentrer avec un nouveau visa. Destination classique : Laos (Vientiane, vol 1h30) ou Cambodge (Phnom Penh). Coût total : 150–300 € par sortie. Techniquement légal mais peu apprécié des autorités si répété plusieurs fois de suite.</li>
      <li><strong>Extension de visa (gia hạn)</strong> : possible dans certains cas via des agences agréées à Hanoï. L'e-visa 90 jours n'est généralement pas extensible directement — les agences utilisent des procédures officielles d'approbation (<em>công văn</em>). Compte 50–150 USD pour ce service.</li>
      <li><strong>Basculement sur visa de travail ou TT</strong> : si ta situation change (contrat local signé, mariage officialisé), il est possible de changer de catégorie de visa sans sortir du territoire, sous conditions. À initier impérativement avant l'expiration du visa en cours.</li>
    </ul>
    <div class="tip-box">
      <strong>Règle des 183 jours :</strong>
      Si tu enchaînes les renouvellements et dépasses 183 jours de présence par an au Vietnam, tu peux être considéré comme résident fiscal vietnamien. Lire notre <a href="fiscalite-expat-france-vietnam">guide sur la fiscalité expatriée</a> pour comprendre les implications pratiques.
    </div>

    <div class="info-box">
      <strong>Tu veux télétravailler depuis le Vietnam ?</strong> → <a href="visa-teletravail-digital-nomad-vietnam">Guide honnête sur les options visa pour digital nomads</a> et <a href="travailler-a-distance-depuis-vietnam">le dossier complet travail à distance</a>
    </div>
    <div class="info-box">
      <strong>Tu es retraité(e) ?</strong> → <a href="retraite-vietnam-francais">Guide complet : prendre sa retraite au Vietnam (visa, pension, santé, fiscalité)</a>
    </div>

    <h2 id="section-erreurs">Les erreurs qui coûtent cher</h2>
    <ul>
      <li><strong>Payer son e-visa sur un site-copie</strong> : même visa, prix multiplié, délais aléatoires. Le domaine officiel se termine en .gov.vn, point final.</li>
      <li><strong>Dépasser son visa, « juste de quelques jours »</strong> : l'overstay se paie en amende, en paperasse de régularisation avant de pouvoir sortir, et en méfiance sur les demandes suivantes. C'est l'erreur la plus chère du guide, et la plus évitable.</li>
      <li><strong>Oublier la déclaration PAI</strong> avant un vol vers Hanoï, HCMV, Đà Nẵng ou Phú Quốc : gratuite, trois minutes en ligne — et un embarquement potentiellement refusé si elle manque.</li>
      <li><strong>Entrer par un autre poste-frontière que celui de l'e-visa</strong> : le point d'entrée déclaré fait partie du visa.</li>
      <li><strong>Travailler « discrètement » en e-visa</strong> pour un employeur local : c'est le combo infraction au séjour + travail illégal, qui expose aussi l'employeur. La voie propre existe (permis de travail, ou exemption conjoint) — utilise-la.</li>
      <li><strong>Négliger l'enregistrement de résidence</strong> : voir la section dédiée — deux minutes de vérification avec ton bailleur t'évitent une amende et des blocages administratifs en chaîne.</li>
    </ul>

    <?php
    $page_sources = [
      ['label' => 'Portail e-visa officiel du Vietnam (Département de l\'immigration)', 'url' => 'https://evisa.xuatnhapcanh.gov.vn'],
      ['label' => 'France Diplomatie — services aux Français de l\'étranger', 'url' => 'https://www.diplomatie.gouv.fr'],
      ['label' => 'Ambassade de France au Vietnam', 'url' => 'https://vn.ambafrance.org'],
    ];
    include '_article-sources.php';
    ?>

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
$current_slug = 'visa-vietnam-francais-guide-2026';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
