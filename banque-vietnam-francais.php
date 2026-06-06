<?php
$page_title       = 'Compte bancaire au Vietnam pour Français — Vietcombank, Techcombank, Wise';
$page_description = 'Faut-il vraiment ouvrir un compte bancaire au Vietnam quand on a un visa touriste 90 jours ? Mon analyse + comparatif Vietcombank, Techcombank, HSBC, et pourquoi j\'utilise Wise à la place.';
$page_canonical   = 'https://www.blog-capvietnam.fr/banque-vietnam-francais';
$page_og_title    = 'Compte bancaire Vietnam pour Français : Vietcombank, Techcombank ou pas du tout ?';
$page_og_desc     = 'Mon analyse + comparatif des banques vietnamiennes. Pourquoi je n\'ai pas ouvert de compte local malgré plusieurs séjours, et comment je gère mes finances au quotidien.';
$page_og_url      = 'https://www.blog-capvietnam.fr/banque-vietnam-francais';

$page_schema = '{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Compte bancaire au Vietnam pour Français : Vietcombank, Techcombank ou… pas du tout ?",
  "description": "Faut-il ouvrir un compte bancaire au Vietnam avec un visa touriste 90 jours ? Analyse personnelle + comparatif Vietcombank, Techcombank, HSBC.",
  "datePublished": "2026-06-01",
  "dateModified": "2026-06-01",
  "author": {"@type": "Person", "name": "Anthony Bouillon", "url": "https://www.blog-capvietnam.fr/a-propos-capvietnam"},
  "publisher": {"@type": "Organization", "name": "Cap Vietnam", "url": "https://www.blog-capvietnam.fr"},
  "mainEntityOfPage": "https://www.blog-capvietnam.fr/banque-vietnam-francais",
  "inLanguage": "fr",
  "articleSection": "Argent & travail à distance"
}';

$article_color        = 'terracotta';
$article_hero_bg      = '#3a1a0a';
$article_glow         = 'rgba(191,74,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.2)';
$article_badge_c      = 'var(--terracotta-soft)';
$article_category     = 'Argent & travail à distance';
$article_category_url = 'https://www.blog-capvietnam.fr/articles-capvietnam';

$page_faq = [
  ['q' => "Est-ce vraiment possible d'ouvrir un compte bancaire au Vietnam avec un visa touriste 90 jours ?",
   'a' => "Techniquement oui : certaines agences Vietcombank ou Techcombank l'acceptent en pratique. Mais le risque est réel — si ton visa n'est pas renouvelé et que le Vietnam bloque ton compte, récupérer l'argent depuis la France peut s'avérer très difficile. C'est précisément la raison pour laquelle je n'ai pas ouvert de compte à mon nom avec un visa touriste."],
  ['q' => "Combien de temps prend l'ouverture d'un compte en agence au Vietnam ?",
   'a' => "En général, comptez 30 minutes à 1 heure en agence selon la banque et l'affluence du jour. La carte de débit peut être remise immédiatement ou sous quelques jours ouvrés selon les établissements. À confirmer directement en agence au moment de ta démarche."],
  ['q' => "Faut-il parler vietnamien pour ouvrir un compte ?",
   'a' => "Non, ce n'est pas obligatoire. Les grandes agences Vietcombank et Techcombank à Hanoï et Hô-Chi-Minh-Ville ont l'habitude des clients étrangers. Les applications mobiles des deux banques sont disponibles en anglais. Avoir un accompagnant vietnamophone facilite tout de même les démarches, surtout pour les formulaires. Mon ebook Français-Vietnamien peut t'aider à communiquer en agence."],
  ['q' => "Quels frais mensuels faut-il prévoir pour un compte bancaire vietnamien ?",
   'a' => "D'après mon observation du compte Vietcombank de ma femme, les frais mensuels sont d'environ 20 000 ₫ (~0,75 €). Pour les autres banques et types de comptes, les conditions varient. Référez-vous aux sites officiels de chaque établissement pour les tarifs à jour."],
  ['q' => "Peut-on ouvrir un compte bancaire vietnamien à distance, avant d'arriver au Vietnam ?",
   'a' => "En général non. L'ouverture nécessite une présence physique en agence avec tes documents originaux. Techcombank permet une pré-inscription en ligne, mais la validation reste à effectuer en agence. Vérifiez les options actuelles directement sur techcombank.com.vn ou vietcombank.com.vn/en."],
  ['q' => "La carte bancaire vietnamienne fonctionne-t-elle à l'étranger ?",
   'a' => "Les cartes Visa et Mastercard émises par les banques vietnamiennes fonctionnent en principe à l'étranger. Des frais et restrictions peuvent s'appliquer selon le type de carte et les conditions du contrat. À vérifier directement auprès de votre banque avant tout départ du territoire."],
  ['q' => "Quels sont les plafonds de retrait quotidiens habituels ?",
   'a' => "D'après les informations publiques des banques vietnamiennes, les plafonds courants se situent généralement autour de 5 à 10 millions ₫ par transaction DAB, et 20 à 30 millions ₫ par jour selon le type de carte et le compte souscrit. Ces chiffres sont indicatifs et peuvent varier — à confirmer directement sur les sites officiels Vietcombank.com.vn/en et Techcombank.com.vn avant d'ouvrir."],
  ['q' => "Que se passe-t-il pour mon argent si je quitte le Vietnam ?",
   'a' => "C'est le point central de cet article. Si ton visa n'est pas renouvelé et que tu n'es plus physiquement sur place, récupérer des fonds bloqués sur un compte local peut être très difficile. La prudence recommande de ne mettre sur un compte vietnamien que le strict nécessaire pour tes dépenses immédiates — surtout tant que ta situation visa n'est pas stabilisée avec un titre long séjour."],
];


include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam.php">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam.php">Argent & travail à distance</a><span class="breadcrumb-sep">›</span>
      <span>Compte bancaire Vietnam</span>
    </div>
    <span class="article-badge-hero">💻 Argent & travail à distance</span>
    <h1>Compte bancaire au Vietnam pour Français : Vietcombank, Techcombank ou… pas du tout ? Mon analyse en visa touriste</h1>
    <div class="article-hero-meta">
      <span>Par <strong>Cap Vietnam</strong></span>
      <span>📅 1er juin 2026</span>
      <span>⏱ 9 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi je n'ai pas ouvert de compte VN</a></li>
      <li><a href="#section-2">Le QR code partout au Vietnam</a></li>
      <li><a href="#section-3">Comment je gère sans compte local</a></li>
      <li><a href="#section-4">Les 2 cas où c'est indispensable</a></li>
      <li><a href="#section-5">Comparatif des banques</a></li>
      <li><a href="#section-6">Documents et conditions</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" title="Facebook" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" title="X / Twitter" onclick="window.open('https://twitter.com/intent/tweet?url='+encodeURIComponent(location.href)+'&text=Compte+bancaire+Vietnam+pour+Fran%C3%A7ais')">𝕏</a>
        <a class="share-btn" title="LinkedIn" onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url='+encodeURIComponent(location.href))">in</a>
        <a class="share-btn" title="Copier le lien" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <!-- ============================
         INTRO
    ============================= -->
    <p>Quand je dis aux Français qui s'installent au Vietnam que je n'ai <strong>toujours pas ouvert</strong> de compte bancaire vietnamien à mon nom, ils me regardent souvent étonnés. La vraie raison est simple, mais peu de blogs la disent honnêtement. Voici mon analyse après plusieurs allers-retours entre la France et le Vietnam, et pourquoi je continue de gérer mes finances là-bas sans compte local.</p>

    <p>Dans cet article, je t'explique d'abord <strong>pourquoi je n'ai pas ouvert</strong> de compte vietnamien — et le risque concret que ça représente avec un visa touriste. Ensuite, je détaille <strong>comment je gère mes finances au quotidien</strong> sans en avoir besoin. Je précise aussi <strong>les deux seuls cas</strong> où un compte local devient vraiment indispensable. Enfin, je te donne un <strong>comparatif des banques</strong> (Vietcombank, Techcombank, HSBC) si tu veux tout de même en ouvrir un.</p>

    <!-- ============================
         H2 #1 — Pourquoi pas de compte VN à mon nom
    ============================= -->
    <h2 id="section-1">Pourquoi je n'ai pas ouvert de compte bancaire vietnamien à mon nom</h2>

    <p>La raison principale n'est pas administrative — elle est <strong>stratégique</strong>. Voici comment j'y pense :</p>

    <blockquote style="border-left:4px solid var(--terracotta);margin:1.5rem 0;padding:1rem 1.5rem;background:var(--warm-bg);font-style:italic;border-radius:0 var(--radius) var(--radius) 0;">
      « Lorsqu'on a qu'un visa de 90 jours (touriste), même s'il est renouvelable, si un jour le renouvellement est refusé, le Vietnam peut bloquer mon compte et il peut être très difficile de récupérer mon argent. C'est un risque que je ne veux pas prendre tant que ma situation n'est pas stabilisée avec un visa long séjour. »
    </blockquote>

    <p>C'est le vrai argument — celui que peu d'articles sur "comment ouvrir un compte au Vietnam" prennent le temps d'exposer. Un visa touriste de 90 jours est <em>renouvelable</em>, oui. Mais un refus de renouvellement reste possible à tout moment. Et si ce refus intervient alors que tu as de l'argent sur un compte local, tu te retrouves dans une situation délicate : compte potentiellement bloqué, impossibilité de faire des démarches en agence à distance, procédures longues et incertaines pour récupérer les fonds.</p>

    <p>La vérité peu dite : <strong>on peut très bien vivre au Vietnam sans compte bancaire local</strong>, du moment que tu n'es pas dans l'une des deux situations que je décrirai plus bas. Si tu viens en visa touriste pour plusieurs mois, explorer le pays, télétravailler ou préparer ton installation — tu n'en as pas forcément besoin.</p>

    <div class="info-box">
      <strong>📋 À retenir — les conditions pour ouvrir en toute sérénité :</strong>
      Ouvrir un compte au Vietnam exige idéalement un <strong>visa long séjour</strong> (visa TT familial, visa de travail, e-visa multiple entrées + justificatif de domicile enregistré). Avec un visa touriste 90 jours, c'est techniquement possible dans certaines agences — mais à tes risques si le renouvellement venait à être refusé.
    </div>

    <!-- ============================
         H2 #2 — Le QR code partout
    ============================= -->
    <h2 id="section-2">Le système de paiement local : le QR code partout au Vietnam</h2>

    <p>Avant de parler de comment je gère sans compte vietnamien, il faut comprendre <em>ce qu'on rate</em> réellement sans en avoir un. Et le principal avantage d'une carte vietnamienne aujourd'hui, c'est une chose : <strong>payer par QR code</strong>.</p>

    <p>J'observe au quotidien comment ça se passe avec le compte Vietcombank de ma femme :</p>

    <blockquote style="border-left:4px solid var(--terracotta);margin:1.5rem 0;padding:1rem 1.5rem;background:var(--warm-bg);font-style:italic;border-radius:0 var(--radius) var(--radius) 0;">
      « Ils utilisent beaucoup le QR code de leur banque pour payer — même les petits vendeurs ambulants avec leur sonnette dans la rue. Le virement via QR code se fait directement de banque à banque ou via une application intermédiaire bancaire. C'est utilisé énormément dans la vie de tous les jours. »
    </blockquote>

    <p>Ce système s'appelle <strong>VietQR</strong> — c'est le standard interbancaire vietnamien qui permet à n'importe quel compte d'une banque partenaire d'émettre et de scanner un QR code pour payer instantanément. Ce qui est remarquable, c'est son adoption : <strong>les marchés, les restaurants de quartier, les taxis, les petits vendeurs ambulants</strong> — tout le monde l'utilise.</p>

    <p>Concrètement : le marchand affiche son QR code (souvent imprimé et plastifié). Tu ouvres l'application de ta banque, tu scannes, tu valides. La transaction est débitée en quelques secondes, directement de banque à banque ou via une app intermédiaire comme MoMo ou ZaloPay.</p>

    <p><strong>Sans compte local, tu payes en cash</strong> pour toutes ces petites transactions. Ce n'est pas dramatique — le cash est toujours parfaitement accepté — mais c'est moins pratique, surtout pour les petites sommes quotidiennes. C'est l'inconvénient numéro un de mon setup actuel.</p>

    <!-- ============================
         H2 #3 — Comment je gère
    ============================= -->
    <h2 id="section-3">Comment je gère mes finances sans compte bancaire vietnamien à mon nom</h2>

    <p>Mon système repose sur <strong>trois piliers</strong> qui couvrent environ 95 % de mes besoins au quotidien.</p>

    <h3>Pilier 1 — Wise pour les transferts internationaux</h3>

    <p><a href="<?= SITE_URL ?>/go?id=wise" rel="noopener sponsored" target="_blank"><strong>Wise</strong></a> est l'outil central de ma gestion financière entre la France et le Vietnam. Trois raisons principales :</p>
    <ul>
      <li><strong>Taux de change réel</strong> (taux interbancaire, sans marge cachée)</li>
      <li><strong>Frais très faibles</strong> sur les conversions EUR → VND</li>
      <li><strong>Compatible avec les DAB vietnamiens</strong> — je peux retirer du cash directement (des frais de retrait s'appliquent)</li>
    </ul>

    <?php
    $aff_id    = 'wise';
    $aff_icon  = '💳';
    $aff_title = 'Wise — le compte multi-devises que j\'utilise au Vietnam';
    $aff_text  = 'Taux de change réel, frais parmi les plus bas du marché, carte internationale acceptée aux DAB vietnamiens. L\'outil indispensable pour gérer son argent entre la France et le Vietnam sans compte local.';
    $aff_cta   = 'Ouvrir un compte Wise';
    $aff_note  = 'Lien affilié — sans coût supplémentaire pour toi.';
    $aff_theme = 'green';
    include '_affiliate-cta.php';
    ?>

    <h3>Pilier 2 — Le compte Vietcombank de ma femme</h3>

    <p>Pour tout ce qui se paye par QR code dans la vie quotidienne (restaurants, marchés, services locaux), je transfère l'argent via Wise à ma femme, qui règle les dépenses depuis son compte <strong>Vietcombank</strong>. C'est le setup le plus pragmatique pour notre situation.</p>

    <p>Ce que j'observe sur ce compte :</p>
    <ul>
      <li>Frais mensuels d'environ <strong>20 000 ₫ (~0,75 €)</strong></li>
      <li>Application mobile disponible <strong>en anglais ou en vietnamien</strong></li>
      <li>Paiement QR partout, de banque à banque, instantané</li>
      <li>Grand réseau d'agences et de DAB sur tout le territoire</li>
    </ul>

    <p>Pour plus de détails techniques officiels (carte Visa, plafonds, services en ligne) : <a href="https://www.vietcombank.com.vn/en" rel="noopener" target="_blank">Vietcombank.com.vn/en</a>.</p>

    <div class="info-box" style="background:var(--warm-bg);border-left:4px solid var(--jade)">
      <strong>🏦 Ouvrir un compte Vietcombank</strong><br>
      Ma femme utilise Vietcombank depuis des années — c'est la banque que je recommande pour les expatriés au Vietnam. Si tu veux ouvrir un compte, tu peux utiliser son lien de parrainage :<br>
      <a href="go.php?id=vietcombank" target="_blank" rel="noopener sponsored"
         style="display:inline-block;margin-top:0.75rem;padding:0.5rem 1.25rem;background:var(--jade);color:#fff;border-radius:4px;font-weight:700;font-size:0.9rem;text-decoration:none;">
        Ouvrir un compte Vietcombank →
      </a>
      <span style="display:block;margin-top:0.4rem;font-size:0.75rem;color:var(--muted)">Lien de parrainage — aucun coût supplémentaire pour toi.</span>
    </div>

    <h3>Pilier 3 — Cash local</h3>

    <p>Pour les petits commerçants qui n'acceptent pas le QR, et pour les dépenses courantes en espèces, je retire du cash avec :</p>
    <ul>
      <li><strong>Revolut</strong> : 2 retraits gratuits par mois (selon abonnement), pratique pour les petits montants</li>
      <li><strong>Ma carte française</strong> en secours</li>
    </ul>

    <?php
    $aff_id    = 'revolut';
    $aff_icon  = '💸';
    $aff_title = 'Revolut — pour les retraits cash au Vietnam';
    $aff_text  = 'Retraits DAB gratuits chaque mois (selon abonnement), paiements sans frais de change, carte internationale. Utile en complément de Wise pour les petites dépenses en espèces au quotidien.';
    $aff_cta   = 'Ouvrir Revolut';
    $aff_note  = 'Lien de parrainage — sans coût supplémentaire pour toi.';
    $aff_theme = 'blue';
    include '_affiliate-cta.php';
    ?>

    <p>Ces trois piliers ensemble couvrent <strong>~95 % de mes besoins au quotidien</strong> au Vietnam. Le seul vrai inconvénient est de passer par le compte de ma femme pour les paiements QR — ce qui implique une organisation à deux. Si tu es seul, c'est là que ça coince.</p>

    <!-- ============================
         H2 #4 — Les 2 cas indispensables
    ============================= -->
    <h2 id="section-4">Les 2 cas où il te faut absolument un compte bancaire vietnamien</h2>

    <p>Mon setup actuel a des limites très précises. Voici les deux situations concrètes qui m'ont fait dire "là, j'aurais besoin d'un compte VN à mon nom" :</p>

    <div class="warning-box">
      <strong>⚠️ Situation 1 — Recevoir un salaire d'une entreprise vietnamienne locale</strong><br>
      Si tu travailles pour un employeur local au Vietnam, le salaire sera versé en VND sur un compte bancaire vietnamien. Sans compte à ton nom, c'est <strong>impossible à recevoir</strong>.
    </div>

    <div class="warning-box">
      <strong>⚠️ Situation 2 — Recevoir des virements locaux d'autres Vietnamiens</strong><br>
      Paiements de clients vietnamiens, remboursements entre particuliers, transactions locales : sans compte vietnamien à ton nom, <strong>impossible à recevoir directement</strong>.
    </div>

    <p>En dehors de ces deux cas, tu peux <strong>100 % t'en passer</strong>. Si tu travailles en ligne pour des clients à l'étranger, si tu es en repérage, si tu télétravailles pour une entreprise française — Wise + cash couvre tout.</p>

    <p><strong>La question à te poser avant d'ouvrir :</strong> est-ce que je vais recevoir un salaire ou des paiements locaux en VND ? Si non — pas besoin urgent de compte vietnamien, surtout avec un visa touriste.</p>

    <!-- ============================
         H2 #5 — Comparatif des banques
    ============================= -->
    <h2 id="section-5">Si tu veux quand même ouvrir un compte : comparatif des banques vietnamiennes</h2>

    <p>Si tu es dans une des deux situations ci-dessus, ou si tu as un visa long séjour et que tu veux simplifier ta gestion au quotidien, voici les principales banques à considérer :</p>

    <table class="comparison-table">
      <thead>
        <tr>
          <th>Banque</th>
          <th>Pour qui</th>
          <th>Avantages</th>
          <th>Limites</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Vietcombank</strong></td>
          <td>Tout le monde, expats inclus</td>
          <td>Réseau énorme, DAB partout au pays, app en anglais/vietnamien, banque la plus populaire du Vietnam</td>
          <td>Service en agence parfois lent aux heures de pointe</td>
        </tr>
        <tr>
          <td><strong>Techcombank</strong></td>
          <td>Profils jeunes et tech-friendly</td>
          <td>Application mobile de pointe, transferts internes et externes gratuits, programme Inspire (remboursements jusqu'à 20% selon partenaires), authentification biométrique avancée</td>
          <td>Réseau d'agences physiques moins étendu que Vietcombank</td>
        </tr>
        <tr>
          <td><strong>HSBC Vietnam</strong></td>
          <td>Expats avec visa long séjour</td>
          <td>Habituée aux expatriés, service en anglais, standards bancaires internationaux</td>
          <td>Frais plus élevés, conditions d'ouverture plus strictes, moins accessible avec un petit budget</td>
        </tr>
        <tr>
          <td><strong>BIDV</strong></td>
          <td>Expats avec visa de travail ou résidence ; profils cherchant la sécurité d'une grande banque d'État<sup>*</sup></td>
          <td>2e banque d'État du Vietnam, très vaste réseau d'agences et DAB, app BIDV SmartBanking (interface en anglais disponible), large gamme de produits<sup>*</sup></td>
          <td>Interface moins orientée expat que Vietcombank, service en anglais en agence variable selon les villes<sup>*</sup></td>
        </tr>
        <tr>
          <td><strong>VPBank</strong></td>
          <td>Profils digitaux, jeunes actifs, télétravailleurs ; adapté aux ouvertures sans trop de démarches<sup>*</sup></td>
          <td>Application VPBank NEO moderne et bien notée, compte NEO sans frais mensuels, carte virtuelle pour les achats en ligne, cashback sur certaines dépenses<sup>*</sup></td>
          <td>Moins connue des expats francophones, réseau d'agences physiques moins dense que les banques d'État<sup>*</sup></td>
        </tr>
      </tbody>
    </table>

    <p style="font-size:0.82rem;color:var(--muted);margin-top:0.5rem;"><sup>*</sup> Informations issues de sources publiques (sites officiels des banques, presse spécialisée). À vérifier directement auprès de chaque établissement — les conditions peuvent évoluer.</p>

    <h3>Ma recommandation pour un ami avec un visa de travail 1 an</h3>

    <p><strong>Techcombank</strong> — c'est la banque que je conseillerais à un ami qui arrive avec un visa de travail d'un an. Jeune, en ligne, moderne. Voici ce que Techcombank communique officiellement sur son positionnement :</p>
    <ul>
      <li>Application mobile de pointe avec authentification biométrique avancée</li>
      <li>Transferts internes et externes gratuits</li>
      <li>Programme de fidélité Inspire : remboursements et remises jusqu'à 20 % sur les dépenses (selon partenaires)</li>
      <li>Services dédiés à la gestion des dépenses de groupe</li>
    </ul>
    <p>Source et vérification : <a href="https://www.techcombank.com.vn" rel="noopener" target="_blank">Techcombank.com.vn</a></p>

    <div class="tip-box">
      <strong>💡 Note importante :</strong>
      Ces informations sont issues de la communication officielle de Techcombank. Je n'ai pas testé ce compte personnellement — ma femme utilise Vietcombank. Vérifiez les conditions en vigueur directement sur le site officiel avant toute démarche.
    </div>

    <h3>La solution la plus "safe" et la plus connue</h3>

    <p><strong>Vietcombank</strong> — la plus populaire et présente partout au Vietnam. C'est le standard : le réseau d'agences et de DAB le plus dense du pays, une application mobile en anglais et en vietnamien, et une banque habituée aux clients étrangers. Si tu veux la solution la plus reconnue et la plus simple à trouver partout sur le territoire, c'est celle-là.</p>
    <p>Source et vérification : <a href="https://www.vietcombank.com.vn/en" rel="noopener" target="_blank">Vietcombank.com.vn/en</a></p>

    <p>Et si tu as besoin de gérer des flux internationaux en parallèle de ton compte vietnamien (recevoir depuis la France, envoyer à des clients étrangers), <a href="<?= SITE_URL ?>/go?id=wise" rel="noopener sponsored" target="_blank"><strong>Wise reste plus avantageux</strong></a> qu'un virement bancaire classique depuis le Vietnam.</p>

    <!-- ============================
         H2 #6 — Documents
    ============================= -->
    <h2 id="section-6">Documents et conditions générales pour ouvrir un compte</h2>

    <p>Les exigences varient d'une banque à l'autre et évoluent régulièrement. La liste ci-dessous est <strong>indicative</strong> — vérifie impérativement les conditions exactes sur le site officiel de la banque choisie avant de te déplacer en agence.</p>

    <ul>
      <li><strong>Passeport en cours de validité</strong> + photocopie</li>
      <li><strong>Visa en cours de validité</strong> — visa TT familial, visa de travail ou e-visa multiple entrées + justificatif de domicile ; un visa touriste 90 jours peut être refusé selon les banques</li>
      <li><strong>Justificatif de domicile vietnamien</strong> — contrat de bail signé ou attestation d'enregistrement de séjour délivrée par la police de quartier (<em>so tạm trú</em>)</li>
      <li><strong>Numéro de téléphone vietnamien</strong> — une SIM locale suffit (~200 000 ₫ disponible à l'aéroport)</li>
      <li><strong>Premier dépôt</strong> — généralement symbolique (~100 000 à 500 000 ₫ selon la banque)</li>
    </ul>

    <div class="warning-box">
      <strong>⚠️ Pas d'affirmations précises par banque :</strong>
      Les conditions exactes (montant du dépôt initial, type de visa accepté, délais) varient et changent sans préavis. Ne te base pas uniquement sur cet article — consulte les sites officiels <a href="https://www.vietcombank.com.vn/en" rel="noopener" target="_blank">Vietcombank.com.vn/en</a>, <a href="https://www.techcombank.com.vn" rel="noopener" target="_blank">Techcombank.com.vn</a> et <a href="https://www.hsbc.com.vn" rel="noopener" target="_blank">HSBC.com.vn</a> pour les informations à jour.
    </div>

    <!-- ============================
         FAQ
    ============================= -->
    <h2 id="section-faq">Questions fréquentes</h2>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Est-ce vraiment possible d'ouvrir un compte avec un visa touriste 90 jours ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Techniquement oui : certaines agences Vietcombank ou Techcombank l'acceptent en pratique. Mais le risque est réel — si ton visa n'est pas renouvelé et que le Vietnam bloque ton compte, récupérer l'argent depuis la France peut s'avérer très difficile. C'est précisément la raison pour laquelle je n'ai pas ouvert de compte à mon nom avec un visa touriste.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Combien de temps prend l'ouverture d'un compte en agence ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">En général, comptez 30 minutes à 1 heure en agence selon la banque et l'affluence du jour. La carte de débit peut être remise immédiatement ou sous quelques jours ouvrés selon les établissements. À confirmer directement en agence au moment de ta démarche.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Faut-il parler vietnamien pour ouvrir un compte ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Non, ce n'est pas obligatoire. Les grandes agences Vietcombank et Techcombank à Hanoï et Hô-Chi-Minh-Ville ont l'habitude des clients étrangers, et les applications mobiles sont disponibles en anglais. Avoir un accompagnant vietnamophone facilite tout de même les démarches, en particulier pour remplir les formulaires. Pour communiquer en agence, mon <a href="<?= SITE_URL ?>/go?id=amazon-g7" rel="noopener sponsored" target="_blank">ebook Français-Vietnamien</a> peut t'aider à échanger les bases avec le conseiller.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Quels frais mensuels faut-il prévoir ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">D'après mon observation du compte Vietcombank de ma femme, les frais mensuels sont d'environ 20 000 ₫ (~0,75 €). Pour les autres banques et types de comptes, les conditions varient. Référez-vous aux sites officiels de chaque établissement pour les tarifs à jour.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Peut-on ouvrir un compte à distance avant d'arriver au Vietnam ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">En général non. L'ouverture nécessite une présence physique en agence avec tes documents originaux. Techcombank permet une pré-inscription en ligne, mais la validation reste à effectuer en agence. Vérifiez les options actuelles directement sur techcombank.com.vn ou vietcombank.com.vn/en.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        La carte bancaire vietnamienne fonctionne-t-elle à l'étranger ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Les cartes Visa et Mastercard émises par les banques vietnamiennes fonctionnent en principe à l'étranger. Des frais et restrictions peuvent s'appliquer selon le type de carte et les conditions du contrat. À vérifier directement auprès de votre banque avant tout départ du territoire.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Quels sont les plafonds de retrait quotidiens habituels ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">D'après les informations publiques des banques vietnamiennes, les plafonds courants se situent généralement autour de <strong>5 à 10 millions ₫ par transaction DAB</strong>, et <strong>20 à 30 millions ₫ par jour</strong> selon le type de carte et le compte souscrit. Ces chiffres sont indicatifs et peuvent varier — à confirmer directement sur Vietcombank.com.vn/en ou Techcombank.com.vn.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Que se passe-t-il pour mon argent si je quitte le Vietnam ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">C'est le point central de cet article. Si ton visa n'est pas renouvelé et que tu n'es plus physiquement sur place, récupérer des fonds bloqués sur un compte local peut être très difficile. La prudence recommande de ne mettre sur un compte vietnamien que le strict nécessaire pour tes dépenses immédiates — surtout tant que ta situation visa n'est pas stabilisée avec un titre long séjour.</div>
    </div>

    <!-- ============================
         POUR ALLER PLUS LOIN
    ============================= -->
    <div class="info-box" style="margin-top:3rem;">
      <strong>📚 Pour aller plus loin sur les finances au Vietnam :</strong>
      <ul style="margin:0.75rem 0 0.5rem;padding-left:1.2rem;">
        <li><a href="compte-joint-franco-vietnamien.php">Ouvrir un compte joint franco-vietnamien — les démarches</a></li>
        <li><a href="argent-couple-franco-vietnamien.php">L'argent dans un couple franco-vietnamien</a></li>
        <li><a href="prix-mariage-franco-vietnamien.php">Coût d'un mariage franco-vietnamien : le budget réel</a></li>
        <li><a href="transferer-argent-vietnam-wise.php">Transférer de l'argent en France → Vietnam avec <strong>Wise</strong></a></li>
      </ul>
      <p style="margin-top:1rem;margin-bottom:0;">
        💡 Pour communiquer avec les conseillers Vietcombank en agence, mon
        <a href="<?= SITE_URL ?>/go?id=amazon-g7" rel="noopener sponsored" target="_blank"><strong>ebook Français-Vietnamien</strong></a>
        t'aide à maîtriser les bases du vocabulaire bancaire et du quotidien.
      </p>
    </div>

    <!-- ============================
         CTA NEWSLETTER — terracotta
    ============================= -->
    <div class="cta-newsletter" style="background:var(--terracotta);margin-top:3rem;">
      <h3>📥 Tu prépares ton installation au Vietnam ?</h3>
      <p>Inscris-toi à ma newsletter mensuelle — un email par mois avec mes vraies retours d'expérience entre la France et le Vietnam. Pas de spam.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_subject" value="Newsletter Cap Vietnam — banque-vietnam-francais">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit" style="background:var(--ink);">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Désinscription en un clic. <a href="confidentialite-capvietnam.php">Politique de confidentialité</a>.</p>
    </div>

    <!-- ============================
         AUTHOR BOX
    ============================= -->
    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;">
        <img src="<?= PROFILE_PHOTO ?>" alt="Anthony Bouillon — Cap Vietnam" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
      </div>
      <div class="author-info">
        <h4>Cap Vietnam</h4>
        <p>Français installé au Vietnam avec ma femme vietnamienne. Je partage mes retours d'expérience concrets sur les démarches, les finances et la vie au quotidien — sans inventer ce que je n'ai pas vécu.</p>
        <div class="author-links">
          <a href="a-propos-capvietnam.php">À propos →</a>
          <a href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">TikTok</a>
          <a href="<?= SITE_YOUTUBE ?>" target="_blank" rel="noopener">YouTube</a>
        </div>
      </div>
    </div>

  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
$current_slug = 'banque-vietnam-francais';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
