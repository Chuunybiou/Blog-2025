<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Organiser ses finances entre France et Vietnam : comptes, outils et stratégie';
$page_description = 'Wise, Fortuneo, Revolut, compte vietnamien : comment structurer ses finances entre France et Vietnam. Les outils à ouvrir, dans quel ordre.';
$page_canonical   = SITE_URL . '/organiser-finances-expat-france-vietnam';
$page_og_title    = 'Finances d\'expat France-Vietnam : quels comptes, quels outils, dans quel ordre';
$page_og_desc     = 'Wise, Revolut, Fortuneo, Boursobank, compte vietnamien : comment structurer ses finances quand on s\'installe entre France et Vietnam.';
$page_og_url      = 'https://blog-capvietnam.fr/organiser-finances-expat-france-vietnam';
$page_og_image    = 'https://blog-capvietnam.fr/assets/img/capvietnam-money.jpg';

$page_schema = '{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Organiser ses finances entre France et Vietnam : comptes, outils et stratégie",
  "description": "Guide pratique pour structurer ses finances d\'expatrié entre la France et le Vietnam : quel compte France garder, comment transférer, quand ouvrir un compte vietnamien, et les erreurs à éviter.",
  "datePublished": "2026-06-06",
  "dateModified": "2026-06-06",
  "author": {"@type": "Person", "name": "Anthony Bouillon", "url": "https://blog-capvietnam.fr/a-propos-capvietnam"},
  "publisher": {"@type": "Organization", "name": "Cap Vietnam", "url": "https://blog-capvietnam.fr"},
  "mainEntityOfPage": "https://blog-capvietnam.fr/organiser-finances-expat-france-vietnam",
  "inLanguage": "fr",
  "articleSection": "Argent & Travail"
}';

$article_color        = 'amber';
$article_hero_bg      = '#1c1200';
$article_glow         = 'rgba(184,134,11,0.18)';
$article_badge        = 'var(--amber)';
$article_badge_c      = '#1c1917';
$current_slug         = 'organiser-finances-expat-france-vietnam';
$current_cat          = 'argent';

$page_faq = [
  ['q' => 'Faut-il fermer ses comptes français avant de partir au Vietnam ?',
   'a' => 'Non, au contraire. Garder un compte français actif est souvent indispensable : recevoir des virements depuis la France, payer des abonnements, accéder à ses investissements, ou préparer un retour éventuel. La vraie question est plutôt : quels comptes réduire ou simplifier avant le départ pour ne pas payer des frais inutiles sur des comptes dormants.'],
  ['q' => 'Wise suffit-il pour vivre au Vietnam sans compte local ?',
   'a' => 'Pour les premières semaines, oui. À terme, non. Les distributeurs automatiques au Vietnam facturent des frais sur les retraits avec carte étrangère (généralement 40 000 à 66 000 ₫ par retrait, soit 1,5 à 2,5€). À raison de plusieurs retraits par semaine, ça monte vite. Un compte local en VND devient nécessaire dès que vous vous installez durablement.'],
  ['q' => 'Quelle est la différence entre Revolut et Wise pour un expat ?',
   'a' => 'Wise est plus fiable pour les virements bancaires internationaux (IBAN dans plusieurs devises, virement vers un compte vietnamien). Revolut est plus pratique au quotidien pour les paiements par carte et les échanges de devises instantanés. Les deux se complètent : Wise pour les gros flux et les virements, Revolut pour les petites dépenses. En pratique, j\'utilise les deux.'],
  ['q' => 'Peut-on recevoir un salaire vietnamien sur Wise ?',
   'a' => 'Certains employeurs vietnamiens peuvent virer sur un compte étranger, mais c\'est rare et souvent compliqué administrativement. Dans la pratique, un employeur vietnamien vire sur un compte en VND dans une banque vietnamienne. C\'est l\'une des raisons pour lesquelles un compte local devient incontournable dès que vous avez un emploi au Vietnam.'],
  ['q' => 'Et pour un compte au Canada — c\'est utile si on s\'installe au Vietnam ?',
   'a' => 'Uniquement si vous avez des liens avec le Canada : revenus canadiens, résidence permanente, investissements CELI/REER à gérer. Pour quelqu\'un qui n\'a jamais vécu au Canada, ouvrir un compte canadien n\'est pas une priorité dans le cadre d\'une expatriation France-Vietnam.'],
];

$page_extra_head = '

<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Accueil","item":"https://blog-capvietnam.fr"},{"@type":"ListItem","position":2,"name":"Argent & Travail","item":"https://blog-capvietnam.fr/articles-capvietnam"},{"@type":"ListItem","position":3,"name":"Finances expat France Vietnam"}]}</script>
';

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Finances expat France-Vietnam</span>
    </div>
    <span class="article-badge-hero" style="background:var(--amber);color:var(--ink)">💻 Argent &amp; Travail</span>
    <h1>Organiser ses finances entre France et Vietnam : comptes, outils et stratégie</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 6 juin 2026</span>
      <span>⏱ 7 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi plusieurs comptes</a></li>
      <li><a href="#section-2">Le compte France : lequel garder</a></li>
      <li><a href="#section-3">Wise : le pivot des transferts</a></li>
      <li><a href="#section-4">Le compte Vietnam : nécessaire à terme</a></li>
      <li><a href="#section-5">Le cas Canada</a></li>
      <li><a href="#section-6">Ce qu'il faut éviter</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
  </aside>

  <article class="article-body">

    <!-- INTRO -->
    <p>Quand on s'installe entre la France et le Vietnam, la question des finances n'est pas qu'une question de carte bancaire. C'est une architecture — plusieurs comptes, plusieurs pays, plusieurs devises — et si on ne la pense pas dès le début, on se retrouve à payer des frais à chaque conversion, à bloquer sur des virements internationaux, ou à découvrir qu'on ne peut pas retirer d'argent à Ho Chi Minh le dimanche soir.</p>

    <p>Cet article ne décrit pas un setup parfait ou universel. Il pose les bonnes questions dans le bon ordre, et présente les outils que je connais pour y répondre.</p>

    <!-- H2 #1 -->
    <h2 id="section-1">Pourquoi un expat a souvent besoin de plusieurs comptes</h2>

    <p>La tentation, au départ, est de se dire qu'on va simplifier — tout centraliser sur un seul compte. En pratique, ce n'est pas possible, pour des raisons concrètes :</p>

    <ul>
      <li><strong>Un compte français</strong> reste nécessaire pour recevoir des flux depuis la France (remboursements, virements, revenus) et maintenir une adresse bancaire en euros</li>
      <li><strong>Un outil de transfert international</strong> est indispensable dès qu'on envoie de l'argent vers le Vietnam — les banques classiques prennent des frais prohibitifs</li>
      <li><strong>Un compte local vietnamien</strong> devient nécessaire à terme pour la vie quotidienne et la réception d'un salaire local</li>
    </ul>

    <p>Ce n'est pas de la complexité pour la complexité — c'est le minimum fonctionnel pour vivre entre deux pays sans perdre d'argent à chaque transaction.</p>

    <!-- H2 #2 -->
    <h2 id="section-2">Le compte France : lequel garder — et lequel fermer</h2>

    <p>Si vous avez plusieurs comptes en France, l'expatriation est un bon moment pour faire le tri. Le critère principal : <strong>la carte sans frais de change</strong>. C'est ce qui fait la différence au quotidien à l'étranger.</p>

    <table class="comparison-table">
      <thead>
        <tr><th>Banque</th><th>Frais de change</th><th>Frais de gestion</th><th>Intérêt pour l'expat</th></tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Fortuneo</strong></td>
          <td style="color:green;font-weight:700">0€ (Gold)</td>
          <td style="color:green;font-weight:700">0€ (sous cond.)</td>
          <td>Banque complète, accès marchés financiers, IBAN FR</td>
        </tr>
        <tr>
          <td><strong>Boursobank</strong></td>
          <td style="color:green;font-weight:700">0€ (Welcome+)</td>
          <td style="color:green;font-weight:700">0€</td>
          <td>Interface moderne, très utilisée, facile à maintenir depuis l'étranger</td>
        </tr>
        <tr>
          <td><strong>Revolut</strong></td>
          <td style="color:green;font-weight:700">0€ (dans la limite)</td>
          <td style="color:orange">0€ à 99€/an selon plan</td>
          <td>Excellent pour les paiements quotidiens en devises, moins pour les virements bancaires</td>
        </tr>
        <tr>
          <td><strong>Banque traditionnelle</strong></td>
          <td style="color:red;font-weight:700">1,5–3%</td>
          <td style="color:red">5–30€/mois</td>
          <td>À fermer ou réduire au minimum si vous avez une des options ci-dessus</td>
        </tr>
      </tbody>
    </table>

    <p><strong>Ma recommandation pour un départ au Vietnam :</strong> conserver un compte Fortuneo ou Boursobank (ou les deux si vous les avez déjà), et garder Revolut pour les petites dépenses quotidiennes en devises. Ce sont les outils que j'utilise.</p>

    <div class="tip-box">
      <strong>💡 Fortuneo — code parrainage 13036009 :</strong>
      Si vous n'avez pas encore Fortuneo et que vous partez bientôt, c'est le moment d'ouvrir le compte — l'ouverture nécessite une adresse française. Code à saisir manuellement à l'inscription :
      <span style="font-family:monospace;font-weight:700;color:var(--terracotta);letter-spacing:2px;margin-left:.3rem">13036009</span>
      <button onclick="navigator.clipboard.writeText('13036009');this.textContent='✓';setTimeout(()=>this.textContent='Copier',2000)"
        style="margin-left:.5rem;padding:.2rem .6rem;background:var(--terracotta);color:#fff;border:none;border-radius:4px;font-size:.78rem;cursor:pointer">Copier</button>
    </div>

    <!-- H2 #3 -->
    <h2 id="section-3">Wise : le pivot indispensable pour les transferts</h2>

    <p>Wise n'est pas une banque au sens classique. C'est un outil de transfert et de conversion de devises — et c'est probablement <strong>l'outil le plus important de votre setup d'expatrié</strong>.</p>

    <p>Ce que Wise permet concrètement :</p>
    <ul>
      <li><strong>Envoyer des euros depuis la France vers le Vietnam</strong> — en VND sur un compte Vietcombank, par exemple — avec le taux de change réel et des frais de 0,4 à 1 % selon le montant</li>
      <li><strong>Recevoir des paiements en plusieurs devises</strong> (EUR, CAD, USD, GBP…) via des IBAN locaux</li>
      <li><strong>Payer par carte en devises locales</strong> sans commission</li>
      <li><strong>Retirer des espèces gratuitement</strong> jusqu'à 200€/mois (2 retraits), puis frais</li>
    </ul>

    <p>Sur un virement de 1 000€ vers le Vietnam, une banque classique peut prendre 30 à 50€ de frais. Wise en prend 8 à 12€. Sur 12 virements par an, la différence est de 250 à 500€ économisés.</p>

    <?php
    $aff_id    = 'wise';
    $aff_icon  = '💱';
    $aff_title = 'Wise — le pivot des transferts France ↔ Vietnam';
    $aff_text  = 'Taux de change réel, frais parmi les plus bas du marché, carte internationale. L\'outil que j\'utilise pour tous mes transferts entre la France et le Vietnam.';
    $aff_cta   = 'Ouvrir un compte Wise';
    $aff_note  = 'Lien affilié — sans coût supplémentaire pour toi.';
    $aff_theme = 'green';
    include '_affiliate-cta.php';
    ?>

    <!-- H2 #4 -->
    <h2 id="section-4">Le compte vietnamien : pas immédiatement, mais incontournable à terme</h2>

    <p>Au départ, Wise + votre carte française suffisent pour les premières semaines. Mais à mesure que vous vous installez, un compte local en VND devient nécessaire. Pour deux raisons concrètes.</p>

    <h3>Les frais des distributeurs automatiques</h3>
    <p>Au Vietnam, la grande majorité des DAB facturent des frais aux porteurs de cartes étrangères — indépendamment des conditions de votre banque. Ces frais sont prélevés directement par le distributeur, pas par votre banque : <strong>entre 40 000 et 66 000 ₫ par retrait</strong> (soit 1,5 à 2,5€). Si vous retirez du cash deux à trois fois par semaine pour les marchés, les restaurants, les taxis — ça représente 15 à 25€ par mois de frais inutiles.</p>

    <p>Avec un compte Vietcombank ou Techcombank local, les retraits dans le réseau de la même banque sont <strong>gratuits ou quasi-gratuits</strong>.</p>

    <h3>Le salaire local</h3>
    <p>Si vous travaillez au Vietnam pour un employeur vietnamien, votre salaire sera versé en VND sur un compte bancaire vietnamien. Il n'y a pas d'alternative : les employeurs locaux ne font pas de virements internationaux vers des comptes étrangers en règle générale.</p>

    <div class="info-box">
      <strong>📋 Quelle banque vietnamienne choisir ?</strong>
      Vietcombank est la plus répandue et la plus accessible pour les expatriés : réseau de DAB partout au Vietnam, application mobile en anglais, habituée aux clients étrangers. J'en ai un aperçu au quotidien via le compte de ma femme.
      <br><br>
      <a href="banque-vietnam-francais" style="color:var(--terracotta);font-weight:600">→ Lire mon article complet sur les banques vietnamiennes</a>
    </div>

    <!-- H2 #5 -->
    <h2 id="section-5">Le cas du Canada : uniquement si vous avez ce passé</h2>

    <p>Si vous avez vécu au Canada — résidence permanente, citoyenneté, ou plusieurs années de travail — vous avez probablement des comptes là-bas qu'il vaut la peine de conserver. Pour les autres, ouvrir un compte canadien en vue d'une expatriation au Vietnam n'a aucun sens.</p>

    <p>Pour ceux qui ont un passé canadien, la combinaison connue est :</p>
    <ul>
      <li><strong>Wealthsimple</strong> — investissement (CELI, REER) et compte chèques en ligne, sans frais. Code parrainage : <span style="font-family:monospace;font-weight:700;color:var(--terracotta)">HTBVCA</span></li>
      <li><strong>Tangerine</strong> — compte bancaire traditionnel en ligne, en français, sans frais. Code : <span style="font-family:monospace;font-weight:700;color:var(--terracotta)">76919587S1</span></li>
      <li><strong>Wise</strong> (encore lui) — pour convertir les CAD en EUR ou VND selon vos besoins</li>
    </ul>

    <p>Le reste (grandes banques canadiennes TD, RBC, BMO…) peut être maintenu si vous y avez des produits spécifiques, mais les frais mensuels méritent d'être vérifiés — beaucoup proposent des options "non-résident" à coût réduit.</p>

    <!-- H2 #6 -->
    <h2 id="section-6">Ce qu'il faut éviter</h2>

    <h3>Dépendre d'une seule carte à l'étranger</h3>
    <p>La carte peut être bloquée, avalée par un DAB, ou simplement refusée dans certains endroits. Avoir au minimum deux cartes de deux émetteurs différents est la base. En pratique : une carte principale (Wise ou Revolut), une carte de secours (votre banque française).</p>

    <h3>Utiliser sa banque française pour les virements internationaux</h3>
    <p>Les frais de change d'une banque classique sur un virement international peuvent atteindre 3 à 4 %. Sur des flux réguliers, c'est significatif. Wise ou Revolut pour les virements, toujours.</p>

    <h3>Oublier de déclarer ses comptes étrangers aux impôts français</h3>
    <p>Si vous êtes résident fiscal en France, vous devez déclarer tous vos comptes bancaires étrangers (formulaire 3916 de votre déclaration de revenus). Cela inclut Wise, Revolut, et tout compte vietnamien ou canadien. L'amende pour non-déclaration est de 1 500€ par compte non déclaré (10 000€ dans les pays non coopératifs). C'est facile à faire — et facile à oublier.</p>

    <h3>Attendre d'être arrivé pour ouvrir les comptes</h3>
    <p>Fortuneo et Boursobank nécessitent une adresse française pour l'ouverture. Wealthsimple nécessite une adresse canadienne. Si vous attendez d'être installé à l'étranger, vous ne pourrez plus ouvrir ces comptes. L'ordre logique : ouvrir les comptes <em>avant</em> de partir.</p>

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
      <strong>📖 Articles liés :</strong>
      <ul style="margin:0.75rem 0 0.5rem;padding-left:1.2rem;">
        <li><a href="travailler-a-distance-depuis-vietnam">Travailler à distance depuis le Vietnam : le guide complet (statuts, fiscal, visa)</a></li>
        <li><a href="banque-vietnam-francais">Compte bancaire au Vietnam pour Français : Vietcombank, Techcombank ou pas du tout ?</a></li>
        <li><a href="transferer-argent-vietnam-wise">Transférer de l'argent vers le Vietnam avec Wise</a></li>
        <li><a href="fortuneo-expat-compte-france">Fortuneo en expatriation : ce qu'on peut garder et ce qu'il faut vérifier</a></li>
        <li><a href="compte-bancaire-canada-europe-wealthsimple">Compte bancaire Canada depuis l'Europe : guide Wealthsimple</a></li>
      </ul>
    </div>

    <!-- CTA NEWSLETTER -->
    <div class="cta-newsletter" style="background:linear-gradient(135deg,#1c1200,#3a2500);margin-top:3rem;">
      <h3>📥 Alertes admin &amp; bons plans du mois</h3>
      <p>Finances d'expat, démarches, vie entre deux pays — ce que je vis concrètement.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
        <input type="hidden" name="_subject" value="Newsletter Cap Vietnam — finances-expat">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit" style="background:var(--amber);color:var(--ink);">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>

    <!-- AUTHOR BOX -->
    <div class="author-box">
      <img src="<?= PROFILE_PHOTO ?>" alt="Anthony Bouillon — Cap Vietnam" width="72" height="72" loading="lazy" decoding="async" style="width:72px;height:72px;border-radius:50%;object-fit:cover;flex-shrink:0;">
      <div class="author-info">
        <p><strong>Anthony Bouillon</strong> — Français entre la France, le Canada et le Vietnam. Je gère des finances sur plusieurs pays — je partage ce qui fonctionne, sans prétendre que mon cas est universel.</p>
        <a href="a-propos-capvietnam" class="author-link">En savoir plus →</a>
      </div>
    </div>

  </article>
</div>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
