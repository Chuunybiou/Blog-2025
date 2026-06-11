<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Portage salarial depuis le Vietnam : guide complet 2026';
$page_description = 'Comment utiliser le portage salarial pour travailler légalement depuis le Vietnam ? Choix de la société, simulation de salaire net, résidence fiscale et protection sociale.';
$page_canonical   = SITE_URL . '/portage-salarial-depuis-vietnam';
$page_og_title    = 'Portage salarial depuis le Vietnam : guide 2026';
$page_og_desc     = 'Tout ce qu\'un Français au Vietnam doit savoir sur le portage salarial : fonctionnement, frais, simulation nette, choix de la société.';
$page_og_url      = SITE_URL . '/portage-salarial-depuis-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Portage salarial depuis le Vietnam : guide complet 2026',
  'datePublished'   => '2026-06-11',
  'dateModified'    => '2026-06-11',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/portage-salarial-depuis-vietnam',
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
  ['q' => 'Peut-on vraiment être en portage salarial depuis le Vietnam ?',
   'a' => 'Oui. Le portage salarial est un contrat entre toi et une société de portage française. Le fait que tu travailles physiquement depuis le Vietnam ne pose pas de problème côté français à proprement parler — tu restes salarié d\'une société basée en France. La question qui se pose est plutôt fiscale (résidence fiscale) et pratique (communication avec la société de portage).'],
  ['q' => 'Quels sont les frais de gestion d\'une société de portage ?',
   'a' => 'Les frais de gestion varient selon les sociétés, mais se situent généralement entre [À VÉRIFIER : 5 % et 12 % du CA HT]. Certaines sociétés prennent un forfait mensuel fixe. Il faut comparer le pourcentage prélevé, les services inclus (comptabilité, assurance RC pro, avances sur salaire) et la réactivité du support.'],
  ['q' => 'Le portage salarial permet-il de toucher le chômage après une mission ?',
   'a' => 'Oui, sous conditions. Si tu as cotisé suffisamment (en jours travaillés et en montants), tu peux ouvrir des droits à l\'allocation chômage (ARE) via France Travail. Le portage salarial ouvre bien des droits, contrairement à la micro-entreprise. [À VÉRIFIER : conditions d\'affiliation France Travail pour les portés en 2026]'],
  ['q' => 'Mes clients doivent-ils être en France pour utiliser le portage ?',
   'a' => 'Non. Tes clients peuvent être basés n\'importe où : France, Europe, États-Unis, Asie. La société de portage facture en leur nom dans la devise convenue. Pour des clients étrangers, il faudra vérifier avec la société de portage les modalités de facturation internationale (TVA, frais de change, etc.)'],
  ['q' => 'Portage salarial ou micro-entreprise : lequel choisir depuis le Vietnam ?',
   'a' => 'Si tu es résident fiscal vietnamien (plus de 183 jours/an au Vietnam, centre d\'intérêts économiques sur place), le portage salarial est généralement plus sûr car il maintient ton ancrage social en France. La micro-entreprise pose des questions sur la domiciliation de l\'activité si tu n\'es plus résident fiscal français. Le comparatif complet est dans notre article dédié.'],
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
      <span>Portage salarial depuis le Vietnam</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Portage salarial depuis le Vietnam : comment ça marche, quelle société choisir</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 10 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Qu'est-ce que le portage salarial ?</a></li>
      <li><a href="#section-2">Portage depuis le Vietnam : ça marche vraiment ?</a></li>
      <li><a href="#section-3">Simulation de salaire net</a></li>
      <li><a href="#section-4">Choisir sa société de portage</a></li>
      <li><a href="#section-5">Portage et résidence fiscale</a></li>
      <li><a href="#section-6">Portage vs autres statuts</a></li>
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

    <p><strong>Le portage salarial est, à mon sens, le statut le plus propre pour un freelance français qui travaille depuis le Vietnam.</strong> Tu restes salarié d'une société française, tu cotises pour ta retraite et ton chômage, tes clients reçoivent des factures professionnelles — et tu évites les casse-têtes administratifs de la micro-entreprise à l'étranger.</p>

    <p>Cet article fait partie du dossier <a href="travailler-a-distance-depuis-vietnam">travailler à distance depuis le Vietnam</a>. Si tu hésites encore entre portage et micro-entreprise, lis aussi notre <a href="portage-salarial-ou-micro-entreprise-vietnam">comparatif portage vs micro-entreprise pour expats</a>.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=1200&q=80" alt="Portage salarial depuis le Vietnam" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Qu'est-ce que le portage salarial ?</h2>
    <p>Le portage salarial est un arrangement à trois parties :</p>
    <ul>
      <li><strong>Toi</strong> (le salarié porté) : tu trouves tes clients, tu réalises les missions</li>
      <li><strong>La société de portage</strong> : elle signe le contrat avec le client, encaisse le paiement, paie les cotisations sociales et te verse un salaire</li>
      <li><strong>Le client</strong> : il paie la société de portage (pas toi directement)</li>
    </ul>
    <p>Ce qui te revient en salaire net est typiquement le CA HT de la mission, <strong>moins les frais de gestion de la société de portage</strong> [À VÉRIFIER : 5–12 %], <strong>moins les charges patronales et salariales</strong> [À VÉRIFIER : environ 45–50 % sur salaire brut en France]. Résultat : sur 1 000 € HT facturé, tu touches généralement entre [À VÉRIFIER : 450 et 580 €] nets selon le taux de charges et les frais.</p>

    <div class="tip-box">
      <strong>Avantage clé :</strong> Le portage salarial est encadré par la loi française depuis 2008 et réglementé par une convention collective. La société de portage doit être immatriculée et respecter des obligations précises — contrairement aux montages offshore parfois proposés sur internet.
    </div>

    <h2 id="section-2">Portage depuis le Vietnam : ça marche vraiment ?</h2>
    <p>Oui. Voici ce qui change (et ce qui ne change pas) quand tu es physiquement au Vietnam :</p>
    <ul>
      <li>✅ Ton contrat reste un contrat de travail français — aucun obstacle légal à être ailleurs</li>
      <li>✅ Tes cotisations sont versées en France — retraite, chômage, Sécu maintenus</li>
      <li>✅ Tes clients reçoivent une facture française avec TVA — pas de complexité particulière pour eux</li>
      <li>⚠️ Ta résidence fiscale évolue si tu passes l'essentiel de l'année au Vietnam → lire notre article sur la <a href="residence-fiscale-france-vietnam-183-jours">résidence fiscale et les 183 jours</a></li>
      <li>⚠️ Certaines sociétés de portage sont réticentes à travailler avec des portés hors de France — demande-le explicitement avant de signer</li>
    </ul>

    <h2 id="section-3">Simulation de salaire net</h2>
    <p>Ces chiffres sont indicatifs. Pour ta simulation précise, utilise le simulateur de ta société de portage ou consulte un comptable spécialisé.</p>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>CA HT facturé/mois</th>
          <th>Frais gestion (8 %)</th>
          <th>Base salariale brute</th>
          <th>Salaire net estimé</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2 000 €</td>
          <td>160 €</td>
          <td>[À VÉRIFIER]</td>
          <td>[À VÉRIFIER] €</td>
        </tr>
        <tr>
          <td>3 500 €</td>
          <td>280 €</td>
          <td>[À VÉRIFIER]</td>
          <td>[À VÉRIFIER] €</td>
        </tr>
        <tr>
          <td>5 000 €</td>
          <td>400 €</td>
          <td>[À VÉRIFIER]</td>
          <td>[À VÉRIFIER] €</td>
        </tr>
        <tr>
          <td>8 000 €</td>
          <td>640 €</td>
          <td>[À VÉRIFIER]</td>
          <td>[À VÉRIFIER] €</td>
        </tr>
      </tbody>
    </table>
    </div>

    <p>Pour avoir les chiffres exacts, le plus simple est de demander une simulation à la société de portage qui t'intéresse — c'est gratuit et elles le font sur demande.</p>

    <h2 id="section-4">Choisir sa société de portage</h2>
    <p>Il existe des dizaines de sociétés de portage en France. Voici les critères qui comptent vraiment pour un expat au Vietnam :</p>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Critère</th>
          <th>Ce qu'il faut vérifier</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Acceptation des portés à l'étranger</td>
          <td>Certaines refusent ou ajoutent des conditions — demande-le explicitement par écrit</td>
        </tr>
        <tr>
          <td>Taux de frais de gestion</td>
          <td>[À VÉRIFIER : 5–12 % selon les sociétés] — plus bas n'est pas toujours mieux si le service est mauvais</td>
        </tr>
        <tr>
          <td>Délai de versement du salaire</td>
          <td>Dès réception du paiement client ou à date fixe ? Important pour ta trésorerie</td>
        </tr>
        <tr>
          <td>Avances sur salaire</td>
          <td>Certaines proposent une avance si le client tarde à payer</td>
        </tr>
        <tr>
          <td>Facturation internationale</td>
          <td>Peuvent-elles facturer des clients hors France (en USD, EUR, etc.) ?</td>
        </tr>
        <tr>
          <td>Assurance RC Pro incluse</td>
          <td>Important si tu interviens dans des domaines sensibles (conseil, juridique, médical)</td>
        </tr>
        <tr>
          <td>Convention collective appliquée</td>
          <td>La convention du portage salarial [À VÉRIFIER : IDCC 3219] est obligatoire depuis 2017</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="warning-box">
      <strong>Méfie-toi des promesses :</strong> Certains sites proposent du "portage offshore" ou des montages en société étrangère pour "payer moins de charges". Ces montages peuvent être illégaux ou fiscalement risqués. Le portage salarial français légal implique des charges sociales françaises — c'est le prix de la protection.
    </div>

    <h2 id="section-5">Portage salarial et résidence fiscale</h2>
    <p>C'est le point le plus complexe. Être en portage salarial ne définit pas automatiquement ta résidence fiscale. Si tu passes la majorité de l'année au Vietnam et que tes intérêts économiques principaux y sont, tu peux devenir résident fiscal vietnamien — même en restant salarié d'une société de portage française.</p>
    <p>Dans ce cas :</p>
    <ul>
      <li>La France n'a plus le droit d'imposer tous tes revenus (seulement les "revenus de source française" selon la convention de 1993)</li>
      <li>Tu dois remplir une déclaration de revenus au Vietnam [À VÉRIFIER : obligations exactes pour les salariés de sociétés étrangères]</li>
      <li>Tes cotisations sociales restent françaises même si tu n'es plus résident fiscal français</li>
    </ul>
    <div class="info-box">
      <strong>Lectures indispensables :</strong><br>
      → <a href="residence-fiscale-france-vietnam-183-jours">Résidence fiscale et règle des 183 jours</a><br>
      → <a href="fiscalite-expat-france-vietnam">Convention fiscale France-Vietnam 1993 expliquée</a>
    </div>

    <h2 id="section-6">Portage vs autres statuts : récapitulatif</h2>
    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Critère</th>
          <th>Portage salarial</th>
          <th>Micro-entreprise</th>
          <th>Salarié FR</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Retraite française</td>
          <td>✅ Oui (cotisations)</td>
          <td>Partielle (RSI/SSI)</td>
          <td>✅ Oui</td>
        </tr>
        <tr>
          <td>Droit au chômage</td>
          <td>✅ Oui (si éligible)</td>
          <td>❌ Non</td>
          <td>✅ Oui</td>
        </tr>
        <tr>
          <td>Sécu française</td>
          <td>✅ Oui</td>
          <td>Partielle</td>
          <td>✅ Oui</td>
        </tr>
        <tr>
          <td>Simplicité admin</td>
          <td>Moyenne</td>
          <td>✅ Simple</td>
          <td>✅ Simple</td>
        </tr>
        <tr>
          <td>Coût (charges)</td>
          <td>Élevé (~45–50 % + frais)</td>
          <td>Faible (micro)</td>
          <td>Élevé (employeur)</td>
        </tr>
        <tr>
          <td>Problème expatriation</td>
          <td>Faible</td>
          <td>⚠️ Domiciliation si non-résident</td>
          <td>⚠️ Établissement stable</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="info-box">
      <strong>Pour aller plus loin :</strong>
      <ul style="margin:0.6rem 0 0.25rem;padding-left:1.2rem;line-height:1.9">
        <li><a href="travailler-a-distance-depuis-vietnam">Tous les statuts pour travailler depuis le Vietnam</a> — portage, micro, salariat, contrat local</li>
        <li><a href="travailler-en-ligne-vietnam">Travailler en ligne depuis le Vietnam</a> — les plateformes et le quotidien</li>
        <li><a href="organiser-finances-expat-france-vietnam">Organiser ses finances entre France et Vietnam</a> — comptes, Wise, stratégie</li>
        <li><a href="quitter-france-expat-vietnam">Quitter la France</a> — résidence fiscale, Sécu, démarches de départ</li>
        <li>→ <a href="calculateur-budget-vietnam">Calculateur de budget Vietnam</a> — pour savoir quel revenu viser selon ton style de vie</li>
      </ul>
    </div>

    <div class="warning-box">
      <strong>Disclaimer :</strong> Cet article partage mon expérience et des informations générales, pas un conseil fiscal ou juridique personnalisé. Pour ta situation précise, consulte un expert-comptable ou un avocat fiscaliste spécialisé en expatriation.
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
$current_slug = 'portage-salarial-depuis-vietnam';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
