<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Prendre sa retraite au Vietnam : le guide 2026';
$page_description = 'Visa, pension, santé, fiscalité, budget : tout ce qu\'un retraité français doit savoir avant de s\'installer au Vietnam. Sans visa retraité, voici comment font les expatriés.';
$page_canonical   = SITE_URL . '/retraite-vietnam-francais';
$page_og_title    = 'Prendre sa retraite au Vietnam : le guide 2026';
$page_og_desc     = 'Pas de visa retraité au Vietnam, mais des milliers de retraités français y vivent. Pension, santé, fiscalité, budget : le guide complet.';
$page_og_url      = SITE_URL . '/retraite-vietnam-francais';
$page_og_image    = 'https://images.unsplash.com/photo-1534483509719-3feaee7c30da?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Prendre sa retraite au Vietnam : le guide 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-11',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/retraite-vietnam-francais',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Argent & Travail',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'amber';
$article_hero_bg      = '#2a1f00';
$article_glow         = 'rgba(184,134,11,0.18)';
$article_badge        = 'rgba(184,134,11,0.25)';
$article_badge_c      = 'var(--amber-soft)';

$article_category     = 'Argent & Travail';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=argent';

$page_faq = [
  ['q' => 'Existe-t-il un visa retraité au Vietnam ?',
   'a' => 'Non. Le Vietnam ne propose pas de visa spécifique pour les retraités, contrairement à la Thaïlande, aux Philippines ou à la Malaisie. Les retraités français utilisent l\'e-visa 90 jours (demande en ligne, non prorogeable sur place), l\'exemption de 45 jours sans visa [À VÉRIFIER : date de reconduction], ou le visa TT s\'ils sont mariés à un(e) Vietnamien(ne). Beaucoup alternent entre sorties du territoire pour renouveler leur e-visa.'],
  ['q' => 'Ma pension française est-elle versée au Vietnam ?',
   'a' => 'Oui. La retraite française est versée normalement sur ton compte bancaire en France, quel que soit ton pays de résidence. Tu transfères ensuite les fonds au Vietnam via un service comme Wise ou Revolut (taux de change bien meilleurs que les banques traditionnelles). Attention : certaines caisses demandent un certificat de vie (certificat d\'existence) annuellement pour continuer à verser la pension. Renseigne-toi auprès de la CNAV et d\'AGIRC-ARRCO avant de partir [À VÉRIFIER : procédure exacte pour les non-résidents au Vietnam, possibilité dématérialisée].'],
  ['q' => 'Où paie-t-on ses impôts sur sa pension de retraite ?',
   'a' => 'Ça dépend du type de pension et de ta résidence fiscale. Les pensions de fonctionnaire restent en principe imposables en France selon les conventions fiscales. Les pensions du régime général et des complémentaires peuvent être imposées au Vietnam si tu es résident fiscal vietnamien (plus de 183 jours par an au Vietnam). La convention fiscale France-Vietnam de 1993 définit les règles — consulte un expert-comptable spécialisé en expatriation pour ta situation précise [À VÉRIFIER : articles exacts de la convention de 1993].'],
  ['q' => 'Quel budget mensuel prévoir pour vivre au Vietnam à la retraite ?',
   'a' => 'Le budget varie énormément selon la ville et le style de vie. Dans les grandes villes (Hanoï, HCMV), une vie confortable (logement climatisé en résidence, restaurants mixtes local/international, taxi Grab) est possible entre 1 500 et 2 500 €/mois selon les habitudes. Dans les villes moyennes (Da Nang, Hué), moins. Utilise le calculateur du site pour personnaliser ton estimation — et lis les guides budget par ville.'],
  ['q' => 'Peut-on rester plus de 90 jours au Vietnam sans visa de long séjour ?',
   'a' => 'Avec l\'e-visa, le séjour est limité à 90 jours. L\'e-visa n\'est pas prorogeable sur place : il faut sortir du territoire vietnamien puis revenir pour un nouveau séjour (source : France Diplomatie). En pratique, beaucoup de retraités font des "border runs" (sortie courte vers le Cambodge ou la Thaïlande). C\'est légal aujourd\'hui mais reste à la discrétion des autorités vietnamiennes [À VÉRIFIER : pratique actuelle en 2026, évolution possible des règles].'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=argent">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Retraite au Vietnam</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Prendre sa retraite au Vietnam : le guide complet 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 14 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">La réponse courte</a></li>
      <li><a href="#section-2">Les 3 solutions visa réelles</a></li>
      <li><a href="#section-3">Toucher sa pension depuis le Vietnam</a></li>
      <li><a href="#section-4">Fiscalité des pensions</a></li>
      <li><a href="#section-5">La santé : le point critique</a></li>
      <li><a href="#section-6">Quel budget prévoir ?</a></li>
      <li><a href="#section-7">Les démarches avant le départ</a></li>
      <li><a href="#section-8">Vivre sa retraite au quotidien</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <h2 id="section-1">La réponse courte</h2>
    <p><strong>Non, le Vietnam n'a pas de visa retraité.</strong> Pas de "retirement visa" comme en Thaïlande ou en Malaisie, pas de programme d'installation dédié aux seniors étrangers. Et pourtant, des milliers de retraités français y vivent parfaitement et légalement — grâce à trois voies que je détaille ci-dessous.</p>
    <p>Ce qu'il faut organiser avant de partir est souvent sous-estimé : ta pension continue d'être versée en France (avec un certificat de vie à fournir périodiquement), ta Sécurité sociale cesse dès que tu n'es plus résident, la fiscalité de ta pension dépend de ton type de retraite et de ta résidence fiscale, et les assurances santé coûtent significativement plus cher passé un certain âge. Ce guide rassemble tout ça, dans l'ordre où tu en auras besoin.</p>

    <h2 id="section-2">Pas de visa retraité : les 3 solutions réelles</h2>
    <p>Voici les trois options légales utilisées par les retraités français installés au Vietnam. Chacune a ses contraintes — aucune n'est parfaite pour un séjour permanent sans attachement local.</p>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Option</th>
          <th>Durée</th>
          <th>Coût</th>
          <th>Contrainte principale</th>
          <th>Pour quel profil</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>E-visa</strong></td>
          <td>90 jours</td>
          <td>~23 € (25 USD) / ~46 € (50 USD) [À VÉRIFIER tarif actuel]</td>
          <td>Non prorogeable sur place — il faut sortir du territoire puis revenir (Source : France Diplomatie)</td>
          <td>Phase de test, retraités mobiles, premiers mois</td>
        </tr>
        <tr>
          <td><strong>Exemption 45 jours</strong></td>
          <td>45 jours</td>
          <td>Gratuit</td>
          <td>Valable jusqu'en 2028 [À VÉRIFIER : date exacte de reconduction]. Séjour plus court, moins de confort</td>
          <td>Retraités qui alternent France et Vietnam sur l'année</td>
        </tr>
        <tr>
          <td><strong>Visa TT / TRC</strong></td>
          <td>1 à 5 ans</td>
          <td>[À VÉRIFIER : coût au Département de l'Immigration]</td>
          <td>Réservé aux conjoints de ressortissants vietnamiens</td>
          <td>Retraités en couple mixte franco-vietnamien</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="info-box">
      <strong>Le point honnête sur l'e-visa :</strong> La plupart des retraités sans conjoint vietnamien s'installent sur des renouvellements d'e-visa successifs, avec une "border run" (sortie courte au Cambodge ou en Thaïlande) tous les 3 mois. Ça fonctionne aujourd'hui — mais ça reste à la discrétion des autorités de l'immigration vietnamienne et peut évoluer sans préavis. [À VÉRIFIER : pratique actuelle en 2026, les règles sur les entrées répétées]
    </div>

    <p>Pour les retraités mariés à un(e) Vietnamien(ne) : lire le <a href="visa-vietnam-francais-guide-2026">guide visa complet</a> et <a href="visa-tt-carte-residence-trc-mariage">le guide TT/TRC pour conjoint</a> — c'est de loin la solution la plus stable.</p>

    <h2 id="section-3">Toucher sa pension française depuis le Vietnam</h2>
    <p>Bonne nouvelle : ta pension de retraite continue d'être versée normalement sur ton compte bancaire français, où que tu sois dans le monde. Le déménagement au Vietnam n'interrompt pas les versements — à condition de respecter une obligation que beaucoup de retraités découvrent trop tard.</p>

    <h3>Le certificat de vie : ne pas l'oublier</h3>
    <p>La CNAV (caisse nationale d'assurance vieillesse) et certaines caisses complémentaires comme AGIRC-ARRCO exigent périodiquement un <strong>certificat de vie</strong> (aussi appelé certificat d'existence) pour continuer à verser la pension aux retraités résidant à l'étranger. Sans ce document, la caisse peut suspendre les versements.</p>
    <ul>
      <li><strong>Fréquence :</strong> [À VÉRIFIER : annuelle dans la plupart des cas — consulter directement la CNAV et AGIRC-ARRCO avant le départ]</li>
      <li><strong>Comment l'obtenir au Vietnam :</strong> en principe via le consulat général de France à Hanoï ou HCMV, ou via une autorité locale habilitée [À VÉRIFIER : procédure exacte 2026, existence d'une dématérialisation via attestation notariée vietnamienne]</li>
      <li><strong>À anticiper :</strong> récupère le formulaire de ta caisse avant ton départ et renseigne-toi sur la procédure à l'étranger auprès de <a href="https://www.lassuranceretraite.fr" target="_blank" rel="noopener">lassuranceretraite.fr</a> et d'<a href="https://www.agirc-arrco.fr" target="_blank" rel="noopener">agirc-arrco.fr</a></li>
    </ul>

    <h3>Recevoir et transférer sa pension</h3>
    <p>Conserver un compte bancaire en France est indispensable : c'est là que ta pension arrive, et c'est depuis ce compte que tu paies tes éventuels impôts français. Certaines banques en ligne françaises (Fortuneo, Boursobank) restent accessibles depuis l'étranger — vérifie les conditions avant de partir. Renvoi : <a href="organiser-finances-expat-france-vietnam">Organiser ses finances entre France et Vietnam</a>.</p>
    <p>Pour transférer l'argent au Vietnam, deux options bien meilleures que le virement bancaire classique :</p>
    <ul>
      <li><strong>Wise</strong> : taux de change au cours du marché, frais bas, virement vers un compte bancaire vietnamien ou retrait en VND. <a href="<?= AFF_WISE ?>">Ouvrir un compte Wise →</a></li>
      <li><strong>Revolut</strong> : similaire, avec un plafond de conversion gratuit par mois. <a href="<?= AFF_REVOLUT ?>">Essayer Revolut →</a></li>
    </ul>
    <p>Pour aller plus loin sur les transferts : <a href="transferer-argent-vietnam-wise">Transférer son argent vers le Vietnam avec Wise</a>.</p>

    <h2 id="section-4">La fiscalité des pensions : France ou Vietnam ?</h2>
    <p>C'est le sujet le plus sensible de ce guide. <strong>Ne te base sur aucun chiffre que tu liras en ligne sans vérification auprès d'un expert</strong> — y compris ici. Voici le cadre général.</p>

    <h3>Deux types de pensions, deux traitements différents</h3>
    <p>La convention fiscale France-Vietnam de 1993 distingue les pensions selon leur source :</p>
    <ul>
      <li><strong>Pensions de fonctionnaire</strong> (ex-agents de l'État, collectivités territoriales, hôpitaux publics) : en principe imposables en France quoi qu'il arrive — même si tu deviens résident fiscal vietnamien. [À VÉRIFIER : article exact de la convention de 1993 applicable à ta caisse]</li>
      <li><strong>Pensions du régime général et des complémentaires</strong> (CNAV, AGIRC-ARRCO, Malakoff Humanis, etc.) : imposables selon ta résidence fiscale. Si tu restes résident fiscal français (foyer en France, intérêts principaux en France), elles sont imposées en France. Si tu deviens résident fiscal vietnamien, elles pourraient être imposables au Vietnam [À VÉRIFIER : modalités exactes, traitement de la retenue à la source française pour les non-résidents]</li>
    </ul>

    <div class="warning-box">
      <strong>Point clé :</strong> Devenir résident fiscal vietnamien n'est pas automatique dès que tu t'installes au Vietnam. Ça dépend de ta durée de présence, de l'emplacement de ton foyer permanent et de tes intérêts économiques. Avant toute décision, consulte un expert-comptable spécialisé en expatriation et lis notre guide sur la <a href="residence-fiscale-france-vietnam-183-jours">résidence fiscale France-Vietnam et la règle des 183 jours</a>.
    </div>

    <p>Pour le détail complet de la convention de 1993 et savoir dans quel pays tes revenus sont imposables : <a href="fiscalite-expat-france-vietnam">Guide de la fiscalité de l'expat France-Vietnam</a>.</p>

    <h2 id="section-5">La santé : le point critique de la retraite au Vietnam</h2>
    <p>C'est souvent ce qui pousse les retraités à rentrer en France. L'organisation de ta couverture santé avant le départ est non négociable.</p>

    <h3>Ce que tu perds en quittant la France</h3>
    <p>Dès que tu cesses d'être résident en France, la Sécurité sociale française ne couvre plus tes soins courants à l'étranger. Les remboursements CPAM s'arrêtent. Tu as deux options pour continuer à être couvert :</p>

    <h3>Option 1 : La CFE (Caisse des Français de l'Étranger)</h3>
    <p>La CFE est une assurance maladie volontaire réservée aux Français vivant hors de France. Elle fonctionne comme une assurance complémentaire sur un socle de type Sécu.</p>
    <ul>
      <li><strong>Ce qu'elle couvre :</strong> maladie, maternité, invalidité — remboursements sur la base des tarifs français [À VÉRIFIER : couverture exacte, niveaux de formules]</li>
      <li><strong>Retraite :</strong> la CFE ne remplace pas la retraite (elle ne cotise pas pour toi à la retraite, elle n'assure que la santé)</li>
      <li><strong>Coût :</strong> les tarifs augmentent avec l'âge. [À VÉRIFIER : grille tarifaire actuelle sur cfe.fr, notamment pour les 60-75 ans]</li>
      <li><strong>Condition d'accès :</strong> l'adhésion doit en principe se faire dans les 3 mois suivant le départ de France ou la fin d'une couverture précédente [À VÉRIFIER : délais exacts 2026]</li>
    </ul>

    <h3>Option 2 : Assurance santé internationale privée</h3>
    <p>Les assureurs spécialisés expats (Allianz Care, AXA International, Henner, Cigna, etc.) proposent des couvertures mondiales. Avantage : plus de flexibilité dans le choix des établissements.</p>
    <ul>
      <li><strong>Primes avec l'âge :</strong> les cotisations augmentent significativement après 60 ans et plus encore après 65-70 ans. Certains assureurs ont une limite d'âge à l'entrée dans le contrat [À VÉRIFIER : âge limite typique selon les assureurs]. Souscris avant de partir, pas depuis le Vietnam</li>
      <li><strong>Clause de rapatriement sanitaire :</strong> indispensable — vérifie qu'elle figure au contrat</li>
      <li><strong>Maladies préexistantes :</strong> elles peuvent être exclues ou entraîner une surprime — déclare-les honnêtement</li>
    </ul>

    <h3>Les hôpitaux au Vietnam : une réalité contrastée</h3>
    <p>Dans les grandes villes, les hôpitaux internationaux (Vinmec, FV Hospital à HCMV, Family Medical Practice à Hanoï) offrent une qualité correcte pour les soins courants. En dehors des centres urbains, l'accès à des soins de niveau international est très limité. Pour les cas complexes (chirurgie lourde, cancer, neurologie), un rapatriement en France ou vers Bangkok reste souvent la meilleure option. → <a href="hopitaux-medecins-francophones-vietnam">Hôpitaux et médecins francophones au Vietnam</a> | <a href="assurance-sante-vietnam-expat">Guide assurance santé expatrié</a>.</p>

    <h2 id="section-6">Quel budget prévoir pour une retraite au Vietnam ?</h2>
    <p>Pas de chiffre inventé ici — le budget dépend trop de ta ville, ton logement et tes habitudes. Ce que je peux dire en observant les retraités français autour de moi :</p>
    <ul>
      <li>Une retraite de <strong>1 500 €/mois</strong> permet de vivre correctement en logement local à Hanoï ou Da Nang</li>
      <li>À <strong>2 000–2 500 €</strong>, tu vis très confortablement, avec la clim, un bon appartement, des restaurants mixtes et des voyages dans la région</li>
      <li>La grande variable retraité : <strong>l'assurance santé</strong> (qui peut représenter 200–400 €/mois selon ton âge et ta formule) et la <strong>climatisation</strong> (facture électrique élevée en été)</li>
      <li><strong>L'aide à domicile</strong> est très accessible et abordable — ce qui change vraiment la vie pour certains retraités [À VÉRIFIER : prix marché actuel à Hanoï/HCMV]</li>
    </ul>
    <p>Pour des chiffres détaillés par poste : <a href="budget-mensuel-hanoi-2026">Budget mensuel à Hanoï</a> | <a href="budget-mensuel-hcmc-2026">Budget mensuel à HCMV</a> | <a href="budget-mensuel-da-nang-2026">Budget à Da Nang</a>.</p>
    <p>→ <strong><a href="calculateur-budget-vietnam">Utilise le calculateur de budget Vietnam</a></strong> pour estimer ton budget retraité avec ton style de vie exact.</p>

    <h2 id="section-7">Les démarches avant de partir</h2>
    <p>La retraite au Vietnam nécessite quelques démarches spécifiques en plus de la checklist habituelle d'expatriation.</p>

    <h3>Côté caisses de retraite</h3>
    <ul>
      <li><strong>Prévenir la CNAV et tes caisses complémentaires</strong> de ton départ à l'étranger — ils mettront à jour ton dossier et t'indiqueront la procédure pour le certificat de vie</li>
      <li><strong>Récupérer le formulaire de certificat de vie</strong> et noter les délais de remise [À VÉRIFIER]</li>
      <li><strong>Vérifier ton relevé de carrière</strong> sur <a href="https://www.info-retraite.fr" target="_blank" rel="noopener">info-retraite.fr</a> avant de partir — corriger les anomalies depuis la France est beaucoup plus simple</li>
      <li><strong>Mettre à jour l'IBAN de versement</strong> si tu changes de compte bancaire français</li>
    </ul>

    <h3>Côté santé</h3>
    <ul>
      <li>Souscrire à la CFE ou à une assurance internationale <strong>avant ton départ</strong> (délais d'adhésion à respecter)</li>
      <li>Consulter ton médecin traitant : ordonnances pour les traitements chroniques (3 à 6 mois de stock conseillés), vaccinations recommandées (hépatites A/B, typhoïde, rage selon les régions) [À VÉRIFIER : recommandations actuelles du Ministère de la Santé]</li>
      <li>Résiliation ou adaptation de ta mutuelle française</li>
    </ul>

    <h3>Côté administratif général</h3>
    <p>→ Lire : <a href="quitter-france-expat-vietnam">Quitter la France : impôts, Sécu et démarches de départ</a> + <a href="checklist-depart-installer-vietnam">Checklist complète pour s'installer au Vietnam</a>. Ces deux articles couvrent les démarches CPAM, CAF, résidence fiscale, banques — je ne les répète pas ici.</p>

    <h2 id="section-8">Vivre sa retraite au Vietnam au quotidien</h2>
    <p><strong>[TON EXPÉRIENCE ICI : ce que tu observes chez les retraités français autour de toi à Hanoï — leurs difficultés non anticipées, ce qu'ils apprécient, ce qui les surprend.]</strong></p>

    <p>Quelques réalités que je vois souvent :</p>

    <h3>La langue, un vrai obstacle hors des grandes villes</h3>
    <p>Le français a laissé des traces dans la culture vietnamienne mais il est peu parlé au quotidien, surtout chez les moins de 50 ans. L'anglais fonctionne dans les grandes villes et les zones touristiques — mais au marché local, chez le médecin de quartier ou à la banque de province, tu te retrouves vite sans interlocuteur. Apprendre quelques bases de vietnamien change vraiment le quotidien. → <a href="apprendre-vietnamien-couple">Apprendre le vietnamien</a>.</p>

    <h3>La communauté française : un filet de sécurité</h3>
    <p>Hanoï et Hô-Chi-Minh-Ville ont des communautés d'expatriés français actives — associations, clubs sportifs, groupes Facebook, réunions régulières. L'Institut français organise des événements culturels. Ces réseaux sont précieux, surtout les premiers mois. Les retraités qui les rejoignent dès l'arrivée s'adaptent bien plus vite que ceux qui restent isolés.</p>

    <h3>Le climat : à anticiper selon la région</h3>
    <p>Le Vietnam n'a pas un seul climat. Hanoï a quatre saisons avec un hiver frais (15–20°C en décembre-janvier) — acceptable pour la plupart. Hô-Chi-Minh-Ville et le Sud sont chauds et humides toute l'année. Da Nang a une saison cyclonique d'octobre à décembre. La chaleur humide de l'été (mai–octobre dans le Sud) est éprouvante sans climatisation.</p>

    <h3>L'éloignement familial : la difficulté la plus souvent citée</h3>
    <p>C'est systématiquement ce que les retraités français mentionnent comme difficulté principale : la distance avec les enfants et les petits-enfants. Un vol Paris-Hanoï dure 11–12 heures avec escale, et coûte entre 600 et 1 500 € selon la saison. Anticipe ce paramètre dans ton budget et dans ta décision.</p>

    <div class="warning-box">
      <strong>Disclaimer :</strong> Cet article partage des informations générales sur la retraite au Vietnam, pas un conseil fiscal, juridique ou médical personnalisé. Pour ta situation précise — pension, fiscalité, assurance santé —, consulte les organismes concernés (CNAV, CFE, expert-comptable spécialisé expatriation) avant de prendre une décision.
    </div>

    <div class="info-box">
      <strong>Articles liés :</strong>
      <ul style="margin:0.6rem 0 0.25rem;padding-left:1.2rem;line-height:1.9">
        <li><a href="visa-vietnam-francais-guide-2026">Visa Vietnam pour un Français : guide complet</a></li>
        <li><a href="assurance-sante-vietnam-expat">Assurance santé expatrié au Vietnam</a></li>
        <li><a href="fiscalite-expat-france-vietnam">Fiscalité expat France-Vietnam : convention de 1993</a></li>
        <li><a href="quitter-france-expat-vietnam">Quitter la France : impôts, Sécu et démarches</a></li>
        <li><a href="transferer-argent-vietnam-wise">Transférer son argent vers le Vietnam</a></li>
        <li><a href="organiser-finances-expat-france-vietnam">Organiser ses finances entre France et Vietnam</a></li>
      </ul>
    </div>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="cta-newsletter">
      <h3>Reçois mes prochains articles</h3>
      <p>Un email par mois. Désabonnement en un clic.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a>.</p>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français expatrié à Hanoï. Je partage mon parcours d'installation au Vietnam : démarches, vie de couple mixte et travail en ligne.</p>
        <div class="author-links">
          <a href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">TikTok</a>
          <a href="a-propos-capvietnam">À propos</a>
        </div>
      </div>
    </div>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
$current_slug = 'retraite-vietnam-francais';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
