<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Compte bancaire au Vietnam pour étrangers — Cap Vietnam';
$page_description = 'Ouvrir un compte bancaire au Vietnam : banques acceptant les étrangers, documents requis, comptes VND et USD, et alternatives Wise pour les expatriés.';
$page_canonical   = SITE_URL . '/compte-bancaire-vietnam-etranger';
$page_og_title    = 'Ouvrir un compte bancaire au Vietnam en tant qu\'étranger';
$page_og_desc     = 'Quelle banque choisir au Vietnam pour un expatrié français : Vietcombank, BIDV, HSBC.';
$page_og_url      = SITE_URL . '/compte-bancaire-vietnam-etranger';
$page_og_image    = 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=1200&q=80';
$page_schema      = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Ouvrir un compte bancaire au Vietnam en tant qu\'étranger',
  'description'      => 'Quelle banque choisir au Vietnam pour un expatrié français : Vietcombank, BIDV, HSBC.',
  'image'            => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=1200&q=80',
  'datePublished'    => '2026-04-03',
  'dateModified'     => '2026-06-15',
  'author'           => ['@type' => 'Person', 'name' => 'Anthony Bouillon', 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'        => ['@type' => 'Organization', 'name' => 'Cap Vietnam', 'url' => SITE_URL],
  'mainEntityOfPage' => SITE_URL . '/compte-bancaire-vietnam-etranger',
  'inLanguage'       => 'fr',
  'articleSection'   => 'Démarches Administratives',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'terracotta';
$article_hero_bg      = '#3a1a0a';
$article_glow         = 'rgba(191,74,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.2)';
$article_badge_c      = 'var(--terracotta-soft)';
$article_category     = 'Démarches Admin';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => "Combien de temps faut-il pour ouvrir un compte bancaire au Vietnam ?",
   'a' => "En agence, comptez 30 à 60 minutes. La carte de débit est généralement remise immédiatement ou sous 3 à 5 jours ouvrés. Certaines banques comme Techcombank permettent une pré-inscription en ligne."],
  ['q' => "Peut-on ouvrir un compte bancaire au Vietnam avec un visa touriste ?",
   'a' => "En théorie non, mais certaines agences Vietcombank et Techcombank acceptent un e-visa de 90 jours en pratique. Avec un visa de travail ou une carte de résidence temporaire, aucun problème. HSBC exige systématiquement un visa long séjour."],
  ['q' => "Puis-je envoyer de l'argent vers la France depuis mon compte vietnamien ?",
   'a' => "Oui, via le service de virement international (chuyển tiền quốc tế) de ta banque. Les délais sont de 2 à 5 jours ouvrés, les frais varient de 20 à 50 USD selon la banque. Wise reste généralement moins cher pour les petites sommes."],
  ['q' => "Dois-je déclarer mon compte vietnamien aux impôts français ?",
   'a' => "Oui, tant que tu es résident fiscal français : tout compte ouvert, détenu, utilisé ou clos à l'étranger se déclare chaque année via le formulaire 3916/3916-bis joint à ta déclaration de revenus, sous peine d'amende par compte omis. Si tu deviens résident fiscal vietnamien, l'obligation cesse pour les années concernées. Voir le guide <a href=\"residence-fiscale-france-vietnam-183-jours\">résidence fiscale France-Vietnam</a>."],
  ['q' => "Que devient mon compte si je quitte le Vietnam ou si mon visa expire ?",
   'a' => "Le compte est lié à ton séjour légal : à l'expiration de ton visa ou de ta carte de résidence, la banque peut restreindre les services (validité de la carte, plafonds, banque en ligne) jusqu'à présentation d'un nouveau titre. Avant un départ définitif, solde le compte en agence : vide-le par virement ou retrait, fais clôturer officiellement et garde le justificatif — un compte dormant à l'étranger reste un compte à déclarer côté français."],
  ['q' => "Peut-on ouvrir un compte joint avec son conjoint vietnamien ?",
   'a' => "Les banques vietnamiennes proposent des comptes joints (tài khoản chung), mais la pratique varie selon les établissements et la combinaison étranger + Vietnamien ajoute de la paperasse. Beaucoup de couples mixtes fonctionnent plus simplement avec deux comptes individuels et des virements internes instantanés gratuits, ou une carte supplémentaire sur le compte principal. Demande en agence ce que ta banque accepte réellement."],
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
      <span>Compte bancaire</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Ouvrir un compte bancaire au Vietnam en tant qu'étranger</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 3 avril 2026</span>
      <span>⏱ 12 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Peut-on ouvrir un compte ?</a></li>
      <li><a href="#section-2">Documents requis</a></li>
      <li><a href="#section-3">Comparatif des banques</a></li>
      <li><a href="#section-4">Compte VND ou USD ?</a></li>
      <li><a href="#section-5">Alternatives numériques</a></li>
      <li><a href="#section-6">Paiements mobiles</a></li>
      <li><a href="#section-7">Sécurité et fraude</a></li>
      <li><a href="#section-8">Convertir des devises</a></li>
      <li><a href="#section-9">Le jour J en agence</a></li>
      <li><a href="#section-10">Compte vietnamien et fisc français</a></li>
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

    <div class="warning-box">
      <strong>⚠️ Avertissement :</strong> Cet article est fourni à titre informatif uniquement et ne constitue pas un conseil financier ou bancaire professionnel. Les conditions d'ouverture de compte varient selon les banques et évoluent régulièrement. Vérifiez les informations directement auprès des établissements concernés.
    </div>

    <p><strong>Avoir un compte bancaire local au Vietnam change radicalement la vie quotidienne.</strong> Payer le loyer en virement, retirer du cash sans frais, recevoir un salaire en VND : autant de démarches impossibles sans un compte vietnamien. Voici comment en ouvrir un en tant qu'étranger.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=1200&q=80" alt="Opérations bancaires au Vietnam" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Un étranger peut-il ouvrir un compte au Vietnam ?</h2>
    <p>Oui, c'est tout à fait possible. La réglementation bancaire vietnamienne (Décret 70/2014/NĐ-CP et circulaires de la Banque d'État du Vietnam) autorise les étrangers en séjour légal à ouvrir des comptes en VND et en devises étrangères. La condition principale est de disposer d'un visa ou d'un titre de séjour en cours de validité — pas nécessairement une carte de résidence temporaire.</p>

    <div class="info-box">
      <strong>📋 Conditions générales :</strong>
      Passeport valide + visa en cours de validité (tout type). Certaines banques demandent en plus une preuve d'adresse locale (attestation de logement ou contrat de bail).
    </div>

    <h2 id="section-2">Documents requis</h2>
    <p>Les documents demandés varient légèrement d'une banque à l'autre — et parfois d'une agence à l'autre de la même banque, c'est une réalité du système vietnamien qu'il faut accepter avec philosophie. Si une agence refuse ton dossier, une autre agence de la même enseigne peut très bien l'accepter la semaine suivante. Voici la liste standard à préparer :</p>
    <ul>
      <li><strong>Passeport original</strong> (et photocopie) avec visa valide</li>
      <li><strong>Formulaire d'ouverture de compte</strong> fourni par la banque (en vietnamien, rempli sur place)</li>
      <li><strong>Attestation d'hébergement</strong> (so tạm trú) délivrée par la police de quartier — de plus en plus demandée</li>
      <li><strong>Dépôt initial</strong> : généralement 500 000 à 2 000 000 VND selon la banque</li>
    </ul>

    <div class="tip-box">
      <strong>💡 Conseil :</strong>
      Si tu n'as pas encore de so tạm trú, commence par l'obtenir auprès de la police de quartier (phường). C'est gratuit et ta propriétaire ou ton agence de location peut t'aider à le faire dans les 24h suivant ton installation.
    </div>

    <h2 id="section-3">Comparatif des principales banques</h2>
    <p>Toutes les banques ne sont pas également accessibles aux étrangers. Voici celles qui acceptent le plus facilement les ressortissants étrangers :</p>

    <table class="comparison-table">
      <thead><tr><th>Banque</th><th>Accueil étrangers</th><th>Application mobile</th><th>Frais mensuels</th></tr></thead>
      <tbody>
        <tr><td><strong>Vietcombank</strong></td><td>✅ Très bon</td><td>VCB Digibank (EN)</td><td>0–11 000 VND</td></tr>
        <tr><td><strong>Techcombank</strong></td><td>✅ Très bon</td><td>TCB Mobile (EN)</td><td>0 (compte F@st)</td></tr>
        <tr><td><strong>VPBank</strong></td><td>✅ Bon</td><td>VPBank NEO (EN)</td><td>0 (compte NEO)</td></tr>
        <tr><td><strong>BIDV</strong></td><td>✅ Bon</td><td>BIDV SmartBanking</td><td>0–15 000 VND</td></tr>
        <tr><td><strong>HSBC Vietnam</strong></td><td>✅ Excellent</td><td>HSBC Vietnam (EN)</td><td>0 (sous conditions)</td></tr>
      </tbody>
    </table>

    <p><strong>Vietcombank</strong> reste la référence pour les expatriés : le réseau est le plus dense, l'application mobile propose une interface en anglais complète, et les guichetiers de Hanoï et Hô-Chi-Minh-Ville ont l'habitude des clients étrangers. <strong>Techcombank</strong> est prisé pour ses virements gratuits et son service client réactif. <strong>HSBC Vietnam</strong> convient mieux aux expats percevant des revenus élevés (seuil de dépôt minimum plus élevé).</p>

    <h3>Frais et retraits au quotidien</h3>
    <p>Une fois le compte ouvert, le système bancaire vietnamien est remarquablement bon marché à l'usage : les <strong>virements domestiques instantanés</strong> entre banques vietnamiennes (via le réseau interbancaire NAPAS) sont gratuits ou quasi gratuits chez la plupart des banques, 24h/24 — c'est le mode de paiement standard pour tout, du loyer au remboursement entre amis. Les <strong>retraits aux DAB de ta propre banque</strong> sont gratuits ou facturés quelques milliers de VND ; les retraits dans les DAB d'autres banques coûtent un peu plus, mais restent dérisoires comparés aux 3-5 % que prélèvent les DAB vietnamiens sur une carte française classique. C'est précisément l'intérêt du compte local : sortir du circuit « carte étrangère » où chaque retrait cumule frais du DAB local, frais de ta banque française et marge de change.</p>
    <p>Deux limites à connaître : les DAB plafonnent le montant par retrait (souvent 2 à 5 millions de VND selon la banque — il faut parfois enchaîner plusieurs opérations pour sortir une grosse somme), et la <strong>carte de débit locale de base fonctionne mal hors du Vietnam</strong> : pour tes voyages dans la région ou tes achats en ligne internationaux, demande une carte Visa ou Mastercard internationale en complément de la carte domestique, ou garde ta carte Wise/Revolut pour cet usage.</p>

    <h2 id="section-4">Compte VND ou compte USD ?</h2>
    <p>Tu peux ouvrir les deux simultanément dans la même banque. Voici la logique :</p>
    <ul>
      <li><strong>Compte VND</strong> : pour toutes les dépenses quotidiennes (loyer, courses, restaurants, transports). C'est le compte principal si tu vis au Vietnam.</li>
      <li><strong>Compte USD</strong> : pour recevoir des virements internationaux, des revenus en devises ou pour convertir de l'argent sans passer par le marché noir. Les intérêts sur dépôt USD sont très faibles (proche de 0% depuis 2023 selon la réglementation de la Banque d'État).</li>
    </ul>
    <p>À noter côté épargne : les <strong>dépôts à terme en VND</strong> (sổ tiết kiệm) servent des taux d'intérêt sensiblement supérieurs à ceux des livrets français, ce qui attire certains expatriés. Garde en tête la contrepartie : le risque de change du VND face à l'euro, et le fait que ces intérêts sont imposables selon ta situation fiscale. Ce n'est pas un placement à faire par défaut, c'est un arbitrage à comprendre.</p>

    <div class="warning-box">
      <strong>⚠️ Réglementation sur les devises :</strong>
      La réglementation vietnamienne (Ordonnance sur les changes de 2005, modifiée en 2013) interdit en principe les transactions courantes en devises étrangères sur le territoire entre résidents. Les paiements de loyer, salaires et achats doivent se faire en VND. Les comptes USD servent principalement à recevoir et convertir de l'argent étranger.
    </div>

    <h2 id="section-5">Les alternatives numériques</h2>
    <p>Si tu n'as pas encore de compte local ou que tu arrives tout juste au Vietnam, ces solutions numériques peuvent dépanner pendant les premières semaines — elles ne remplacent pas un compte local sur la durée, mais elles évitent de payer des frais de change abusifs le temps de s'installer :</p>
    <ul>
      <li><strong>Wise</strong> : compte multi-devises avec IBAN européen, carte de débit internationale. Idéal pour les premiers temps et pour convertir de l'argent au taux interbancaire.</li>
      <li><strong><a href="go.php?id=revolut" rel="noopener sponsored">Revolut</a></strong> : similaire à Wise, fonctionne bien pour les retraits d'espèces (limites selon l'abonnement).</li>
      <li><strong>MoMo</strong> : portefeuille électronique vietnamien. Très répandu pour les petits paiements (restaurants, taxis), mais nécessite un numéro de téléphone vietnamien et peut nécessiter un compte bancaire local pour les rechargements.</li>
    </ul>

    <div class="tip-box">
      <strong>💡 La stratégie recommandée :</strong>
      À l'arrivée, utilise Wise pour tes premières semaines. Dès que tu as ton attestation d'hébergement (so tạm trú), ouvre un compte Vietcombank ou Techcombank. Garde Wise pour recevoir les virements depuis la France et convertir vers ton compte VND local.
    </div>

    <?php
    $aff_id    = 'wise';
    $aff_icon  = '💳';
    $aff_title = 'Ouvre un compte Wise avant de partir';
    $aff_text  = 'Compte multi-devises, IBAN européen et carte internationale : l\'outil indispensable pour les premières semaines au Vietnam. Premier transfert offert via mon lien.';
    $aff_cta   = 'Ouvrir Wise gratuitement';
    $aff_note  = 'Lien affilié — commission perçue si tu effectues un premier transfert, sans coût supplémentaire pour toi.';
    $aff_theme = 'green';
    include '_affiliate-cta.php';
    ?>

    <?php
    $aff_id    = 'revolut';
    $aff_icon  = '💳';
    $aff_title = 'Revolut — la carte à avoir dans le portefeuille au Vietnam';
    $aff_text  = 'Paiements sans frais de change, retraits DAB à l\'étranger, et compte multi-devises. En plus : <strong>liens affiliés transparents.</strong>';
    $aff_cta   = 'Ouvrir Revolut (bonus + 50% reversé)';
    $aff_note  = 'Lien de parrainage — sans coût supplémentaire pour toi.';
    $aff_theme = 'blue';
    include '_affiliate-cta.php';
    ?>

    <h2 id="section-6">Les paiements mobiles : MoMo, ZaloPay et VNPay</h2>
    <p>Le Vietnam a connu une révolution des paiements mobiles entre 2020 et 2026. Trois applications dominent le marché :</p>
    <ul>
      <li><strong>MoMo</strong> : le leader incontesté avec plus de 30 millions d'utilisateurs. Accepté dans la quasi-totalité des restaurants, supermarchés, pharmacies et services. Nécessite un numéro de téléphone vietnamien et peut être lié à un compte bancaire local ou rechargé en espèces dans un agent MoMo.</li>
      <li><strong>ZaloPay</strong> : intégré à l'application de messagerie Zalo (l'équivalent vietnamien de WhatsApp). Très pratique pour payer entre particuliers et dans les commerces partenaires.</li>
      <li><strong>VNPay</strong> : solution inter-bancaire large, notamment acceptée pour le paiement des factures d'eau et d'électricité en ligne, les transports en commun (bus, métro en construction à Hanoï) et les achats e-commerce.</li>
    </ul>
    <div class="info-box">
      <strong>📱 Les QR codes partout :</strong>
      Le paiement par QR code (VietQR) est omniprésent au Vietnam depuis 2023. Presque tous les commerces affichent leur QR code à la caisse. Il suffit de scanner avec l'app de ta banque ou MoMo. Les transactions sont instantanées et sans frais.
    </div>

    <h2 id="section-7">Sécurité bancaire et protection contre la fraude</h2>
    <p>Les fraudes bancaires au Vietnam ciblent principalement les transactions en ligne et les faux SMS (smishing). Quelques règles importantes :</p>
    <ul>
      <li><strong>Ne jamais partager ton OTP</strong> (one-time password) par téléphone ou SMS — aucune banque ne le demandera jamais</li>
      <li><strong>Activer les notifications SMS/push</strong> sur toutes les transactions : tu es alerté en temps réel de tout mouvement sur ton compte</li>
      <li><strong>Plafond de virement en ligne</strong> : configure un plafond quotidien raisonnable sur ton application bancaire pour limiter les dommages en cas de compromission</li>
      <li><strong>Carte virtuelle</strong> : certaines banques (Techcombank, VPBank) proposent des cartes virtuelles pour les achats en ligne — jamais le numéro de ta carte physique sur internet</li>
      <li><strong>Vérification des DAB</strong> : inspecte visuellement le lecteur de carte avant utilisation (les skimmers sont rares mais existent). Préfère les DAB situés dans les agences bancaires.</li>
    </ul>
    <div class="tip-box">
      <strong>💡 En cas de fraude :</strong>
      Appelle immédiatement le numéro d'urgence de ta banque (disponible 24h/24) pour bloquer ta carte. Vietcombank : 1800 545 413 — Techcombank : 1800 588 822 — HSBC : 1800 588 822. Dépose une plainte à la police locale dans les 24h pour lancer la procédure de remboursement.
    </div>

    <h2 id="section-8">Convertir des devises : les pièges à éviter</h2>
    <p>La réglementation vietnamienne sur les changes (Ordonnance sur les changes 28/2005/PL-UBTVQH11) encadre strictement les transactions en devises. Pratiquement, pour un expatrié :</p>
    <ul>
      <li>Les transactions en VND sont obligatoires pour les achats courants, loyers, salaires</li>
      <li>Les virements internationaux depuis ton compte VND sont possibles mais nécessitent des justificatifs au-delà d'un certain seuil (en général 10 000 USD)</li>
      <li>Conserver un compte USD en parallèle de ton compte VND t'offre de la flexibilité pour les virements internationaux et te protège partiellement contre une dévaluation du VND</li>
    </ul>

    <h3>Recevoir un salaire ou des revenus sur ton compte</h3>
    <p>Si tu travailles pour un employeur vietnamien, le salaire arrive en VND sur ton compte local — c'est d'ailleurs souvent l'employeur qui impose sa banque partenaire pour la paie, quitte à ce que tu re-vires ensuite vers ta banque préférée (virement domestique gratuit, donc sans importance). Si tu reçois des <strong>revenus depuis l'étranger</strong> (salaire français, clients freelance, pension), deux canaux : le virement SWIFT classique vers ton compte USD ou VND (la banque te demandera parfois l'origine des fonds pour les montants importants — c'est normal, prépare une facture ou un contrat), ou un service comme Wise vers ton compte VND, généralement plus rapide et moins cher pour les montants courants. Les détails et comparatifs chiffrés sont dans <a href="transferer-argent-vietnam-wise">le guide des transferts d'argent France-Vietnam</a>.</p>
    <p>Dans l'autre sens, rapatrier de l'argent du Vietnam vers la France est plus encadré : la réglementation des changes vietnamienne exige des justificatifs de l'origine des fonds (salaire déclaré, impôts payés) pour les virements sortants significatifs. Garde systématiquement tes contrats de travail, fiches de paie et justificatifs fiscaux — c'est le dossier qui fluidifie tout virement sortant.</p>

    <h2 id="section-9">Le jour J en agence : déroulé et pièges à éviter</h2>
    <p>Concrètement, voici comment se passe une ouverture de compte pour un étranger, et les petits accrocs qui font perdre du temps :</p>
    <ul>
      <li><strong>Choisis une grande agence de centre-ville</strong> plutôt qu'une agence de quartier : les guichetiers y ont l'habitude des dossiers étrangers et le personnel anglophone y est plus fréquent. À Hanoï et HCMV, les agences des quartiers expatriés (Tây Hồ, Thảo Điền) traitent ces demandes tous les jours.</li>
      <li><strong>Viens tôt et en semaine</strong> : les agences vietnamiennes fonctionnent avec un système de tickets, et les fins de journée comme les lundis sont chargés. Prévois large : l'ouverture elle-même prend 30 à 60 minutes une fois ton tour venu.</li>
      <li><strong>L'orthographe de ton nom</strong> : vérifie chaque champ avant signature — le nom enregistré doit correspondre exactement au passeport (ordre prénom/nom compris). Une coquille bloquera plus tard les virements internationaux entrants, où la correspondance des noms est contrôlée.</li>
      <li><strong>Le numéro de téléphone vietnamien est indispensable</strong> : c'est lui qui reçoit les OTP de validation. Prends ta SIM locale avant d'aller à la banque, et enregistre-la à ton nom.</li>
      <li><strong>Demande l'activation de la banque en ligne et du service de notification</strong> le jour même : certains services ne s'activent qu'en agence, et y retourner pour un oubli est une perte de temps réelle.</li>
      <li><strong>Signature</strong> : ta signature enregistrée sert de référence pour les opérations au guichet — utilise la même que celle de ton passeport et mémorise-la, les banques vietnamiennes comparent réellement.</li>
    </ul>

    <h2 id="section-10">Compte vietnamien et fisc français : ce qu'il faut déclarer</h2>
    <p>Ouvrir un compte à l'étranger crée des obligations déclaratives côté français qu'il vaut mieux connaître dès le départ :</p>
    <ul>
      <li><strong>Si tu restes résident fiscal français</strong> (mission courte, aller-retours, famille restée en France) : tout compte ouvert, détenu, utilisé ou clos à l'étranger doit être déclaré chaque année avec ta déclaration de revenus via le <strong>formulaire 3916 / 3916-bis</strong>. L'omission est sanctionnée par une amende par compte non déclaré (1 500 €, portée à 10 000 € pour les comptes dans certains États non coopératifs).</li>
      <li><strong>Si tu deviens résident fiscal vietnamien</strong>, cette obligation française tombe pour les années où tu n'es plus résident — mais l'année du départ et celle du retour sont des années mixtes : voir <a href="residence-fiscale-france-vietnam-183-jours">le guide résidence fiscale 183 jours</a> et <a href="declarer-impots-france-depuis-vietnam">déclarer ses impôts depuis le Vietnam</a>.</li>
      <li><strong>L'échange automatique d'informations (norme CRS/AEOI)</strong> se déploie progressivement dans le monde ; ne pars jamais du principe qu'un compte étranger est « invisible ». La règle simple et sans risque : déclarer tout compte étranger tant que tu es résident fiscal français.</li>
      <li><strong>À l'inverse</strong>, tes comptes français n'ont pas à être cachés au Vietnam : les intérêts et revenus mondiaux d'un résident fiscal vietnamien relèvent en principe de l'impôt vietnamien, et la convention fiscale franco-vietnamienne évite la double imposition.</li>
    </ul>
    <div class="info-box">
      <strong>📌 En résumé :</strong>
      le compte bancaire vietnamien est un outil de vie quotidienne, pas un outil d'optimisation. Déclare-le en France tant que tu es résident fiscal français (3916), et bascule proprement ta situation fiscale quand ton installation au Vietnam devient durable.
    </div>

    <?php
    $page_sources = [
      ['label' => 'impots.gouv.fr — fiscalité des particuliers et non-résidents', 'url' => 'https://www.impots.gouv.fr'],
      ['label' => 'Thư Viện Pháp Luật — base des textes juridiques vietnamiens (en vietnamien)', 'url' => 'https://thuvienphapluat.vn'],
    ];
    include '_article-sources.php';
    ?>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $item): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($item['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $item['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <?php
$author_bio = <<<'BIO'
Blog d'un Français installé à Hanoï avec sa femme vietnamienne. Démarches admin, vie quotidienne et finances d'expat — uniquement des informations vérifiées.
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
$current_slug = 'compte-bancaire-vietnam-etranger';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
