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
   'a' => "Oui, via le service de virement international de ta banque. Les délais sont de 2 à 5 jours ouvrés, les frais varient de 20 à 50 USD selon la banque. Wise reste généralement moins cher pour les petites sommes."],
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
      <span>⏱ 8 min de lecture</span>
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
    <p>Les documents demandés varient légèrement d'une banque à l'autre, mais voici la liste standard à préparer :</p>
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

    <h2 id="section-4">Compte VND ou compte USD ?</h2>
    <p>Tu peux ouvrir les deux simultanément dans la même banque. Voici la logique :</p>
    <ul>
      <li><strong>Compte VND</strong> : pour toutes les dépenses quotidiennes (loyer, courses, restaurants, transports). C'est le compte principal si tu vis au Vietnam.</li>
      <li><strong>Compte USD</strong> : pour recevoir des virements internationaux, des revenus en devises ou pour convertir de l'argent sans passer par le marché noir. Les intérêts sur dépôt USD sont très faibles (proche de 0% depuis 2023 selon la réglementation de la Banque d'État).</li>
    </ul>

    <div class="warning-box">
      <strong>⚠️ Réglementation sur les devises :</strong>
      La réglementation vietnamienne (Ordonnance sur les changes de 2005, modifiée en 2013) interdit en principe les transactions courantes en devises étrangères sur le territoire entre résidents. Les paiements de loyer, salaires et achats doivent se faire en VND. Les comptes USD servent principalement à recevoir et convertir de l'argent étranger.
    </div>

    <h2 id="section-5">Les alternatives numériques</h2>
    <p>Si tu n'as pas encore de compte local ou que tu arrives tout juste au Vietnam, ces solutions numériques peuvent dépanner :</p>
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

    <h2 id="section-faq">Questions fréquentes</h2>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Combien de temps faut-il pour ouvrir un compte ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">En agence, comptez 30 à 60 minutes. La carte de débit est généralement remise immédiatement ou sous 3 à 5 jours ouvrés. Certaines banques comme Techcombank permettent une pré-inscription en ligne.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Peut-on ouvrir un compte avec un visa touriste ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">En théorie non, mais certaines agences Vietcombank et Techcombank acceptent un visa e-visa de 90 jours en pratique. Avec un visa de travail ou une carte de résidence temporaire, aucun problème. HSBC exige systématiquement un visa long séjour.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Puis-je envoyer de l'argent vers la France depuis mon compte vietnamien ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Oui, via le service de virement international (chuyển tiền quốc tế) de ta banque. Les délais sont de 2 à 5 jours ouvrés, les frais varient de 20 à 50 USD selon la banque. Wise reste généralement moins cher pour les petites sommes.</div>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Blog d'un Français installé à Hanoï avec sa femme vietnamienne. Démarches admin, vie quotidienne et finances d'expat — uniquement des informations vérifiées.</p>
        <div class="author-links"><a href="a-propos-capvietnam">À propos →</a></div>
      </div>
    </div>

    <div class="cta-newsletter">
      <h3>Reçois les prochains guides</h3>
      <p>Démarches admin, finances, vie pratique à Hanoï — dans ta boîte mail.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic.</p>
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
