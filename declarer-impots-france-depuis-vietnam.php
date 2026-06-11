<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Déclarer ses impôts en France depuis le Vietnam : guide pratique 2026';
$page_description = 'Comment déclarer ses impôts en France quand on vit au Vietnam ? Formulaires non-résidents, revenus de source française, changement de statut fiscal, calendrier officiel.';
$page_canonical   = SITE_URL . '/declarer-impots-france-depuis-vietnam';
$page_og_title    = 'Déclarer ses impôts en France depuis le Vietnam : guide 2026';
$page_og_desc     = 'Formulaire 2042 NR, SIPNR, revenus de source française, déclaration de départ : tout ce qu\'il faut faire pour être en règle avec le fisc français depuis le Vietnam.';
$page_og_url      = SITE_URL . '/declarer-impots-france-depuis-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Déclarer ses impôts en France depuis le Vietnam : guide pratique 2026',
  'datePublished'   => '2026-06-11',
  'dateModified'    => '2026-06-11',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/declarer-impots-france-depuis-vietnam',
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
  ['q' => 'Dois-je déclarer mes revenus en France si je vis au Vietnam ?',
   'a' => 'Cela dépend de ta résidence fiscale. Si tu es résident fiscal français (foyer en France, moins de 183 jours au Vietnam, intérêts économiques en France), oui tu dois déclarer tous tes revenus mondiaux en France. Si tu es résident fiscal vietnamien, tu ne déclares en France que tes revenus de source française (loyers, dividendes de sociétés françaises, etc.).'],
  ['q' => 'Qu\'est-ce que la déclaration de non-résident (formulaire 2042 NR) ?',
   'a' => 'Le formulaire 2042 NR est la déclaration de revenus pour les non-résidents fiscaux français qui ont des revenus de source française. Il se remplit en ligne sur impots.gouv.fr, via le service des impôts des particuliers non-résidents (SIPNR) à Noisy-le-Grand. [À VÉRIFIER : délais exacts de dépôt pour non-résidents 2026]'],
  ['q' => 'Comment signaler son départ à l\'étranger au fisc français ?',
   'a' => 'Il faut déposer une déclaration de revenus pour l\'année de départ (déclarant les revenus jusqu\'à la date de départ), cocher la case "transfert du domicile fiscal hors de France", et signaler ta nouvelle adresse. Les banques, la CAF, la CPAM doivent également être informées. [À VÉRIFIER : formulaire spécifique si disponible en 2026]'],
  ['q' => 'Les impôts au Vietnam sont-ils déduits de ceux que je paie en France ?',
   'a' => 'La convention de 1993 prévoit un mécanisme de crédit d\'impôt pour éviter la double imposition. Si tu as payé de l\'impôt sur le revenu au Vietnam sur un revenu, tu peux en principe en déduire le montant de ta déclaration française sur ce même revenu. Le mécanisme exact dépend du type de revenu. [À VÉRIFIER : articles spécifiques de la convention de 1993]'],
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
      <span>Déclarer ses impôts depuis le Vietnam</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Déclarer ses impôts en France depuis le Vietnam : ce qu'il faut faire</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 9 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Résident ou non-résident fiscal ?</a></li>
      <li><a href="#section-2">L'année de départ : la plus critique</a></li>
      <li><a href="#section-3">Si tu es résident fiscal français</a></li>
      <li><a href="#section-4">Si tu es non-résident fiscal français</a></li>
      <li><a href="#section-5">Calendrier et services fiscaux</a></li>
      <li><a href="#section-6">Ce qu'il faut signaler en dehors des impôts</a></li>
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

    <p><strong>Vivre au Vietnam ne te dispense pas automatiquement de déclarer en France.</strong> Selon ta résidence fiscale, tu peux avoir des obligations déclaratives dans les deux pays simultanément, ou seulement en France sur tes revenus de source française. Ce guide clarifie ce que tu dois faire — et quand.</p>

    <p>Cet article fait partie du dossier <a href="travailler-a-distance-depuis-vietnam">travailler à distance depuis le Vietnam</a>. Avant de lire ce guide, assure-toi d'avoir compris ta <a href="residence-fiscale-france-vietnam-183-jours">résidence fiscale</a> et la <a href="fiscalite-expat-france-vietnam">convention France-Vietnam de 1993</a>.</p>

    <div class="warning-box">
      <strong>Article technique :</strong> Les règles fiscales évoluent. Les informations ci-dessous sont générales — pour ta situation précise, consulte un expert-comptable spécialisé en expatriation ou le service des impôts des non-résidents.
    </div>

    <h2 id="section-1">Résident ou non-résident fiscal français ?</h2>
    <p>Tout dépend de cette question. Ta situation est l'une des deux suivantes :</p>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Situation</th>
          <th>Ce que tu déclares en France</th>
          <th>Formulaire principal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Résident fiscal français vivant au Vietnam</td>
          <td>Tous tes revenus mondiaux (France + Vietnam + autres)</td>
          <td>2042 + annexes selon revenus</td>
        </tr>
        <tr>
          <td>Non-résident fiscal français (résident VN)</td>
          <td>Uniquement tes revenus de source française (loyers FR, dividendes FR, etc.)</td>
          <td>2042 NR (non-résidents)</td>
        </tr>
        <tr>
          <td>Non-résident sans revenus de source française</td>
          <td>Rien à déclarer en France</td>
          <td>—</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-2">L'année de départ : la plus critique</h2>
    <p>L'année où tu t'installes au Vietnam est souvent la plus complexe fiscalement. Tu peux changer de statut fiscal en cours d'année. Dans ce cas :</p>
    <ul>
      <li>Tu déclares tes revenus <strong>jusqu'à la date de départ</strong> comme résident fiscal français</li>
      <li>Tu indiques ton transfert de domicile fiscal hors de France sur ta déclaration [À VÉRIFIER : case spécifique sur formulaire 2042]</li>
      <li>Tu communiques ta nouvelle adresse au fisc français</li>
      <li>À partir de ta date de départ, seuls les revenus de source française restent imposables en France</li>
    </ul>
    <div class="tip-box">
      <strong>Conseil pratique :</strong> Garde une trace écrite de ta date d'installation au Vietnam (contrat de bail, enregistrement de domicile temporaire, billets d'avion). En cas de contrôle, ce sont ces documents qui servent de preuve.
    </div>

    <h2 id="section-3">Si tu es résident fiscal français vivant au Vietnam</h2>
    <p>Tu dois déclarer l'ensemble de tes revenus mondiaux en France — y compris tes revenus gagnés depuis le Vietnam :</p>
    <ul>
      <li>Revenus de travail (salaire, portage, freelance), quelle que soit leur origine</li>
      <li>Revenus immobiliers (loyers en France ET au Vietnam si applicable)</li>
      <li>Revenus de capitaux mobiliers (dividendes, intérêts)</li>
      <li>Comptes bancaires étrangers à déclarer séparément sur le formulaire 3916</li>
    </ul>
    <p>Si tu as payé des impôts sur ces revenus au Vietnam, la convention de 1993 prévoit un crédit d'impôt pour éviter la double imposition [À VÉRIFIER : article précis et modalités de déclaration du crédit d'impôt].</p>

    <h2 id="section-4">Si tu es non-résident fiscal français</h2>
    <p>Tu ne déclares en France que tes <strong>revenus de source française</strong>. Les revenus typiques à déclarer :</p>
    <ul>
      <li>Loyers d'un appartement en France</li>
      <li>Dividendes de sociétés françaises</li>
      <li>Revenus d'un emploi exercé en France (détachement temporaire)</li>
      <li>Pensions de retraite versées par un organisme français (selon la convention, certaines restent imposables en France)</li>
    </ul>
    <p>Tes revenus gagnés intégralement au Vietnam pour des clients internationaux ne sont pas imposables en France si tu es résident fiscal vietnamien.</p>

    <h2 id="section-5">Calendrier et services fiscaux</h2>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Démarche</th>
          <th>Délai</th>
          <th>Service compétent</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Déclaration de revenus résidents</td>
          <td>[À VÉRIFIER : mai/juin de l'année suivante]</td>
          <td>Centre des finances publiques habituel</td>
        </tr>
        <tr>
          <td>Déclaration de revenus non-résidents (2042 NR)</td>
          <td>[À VÉRIFIER : délai spécifique non-résidents, généralement plus tardif]</td>
          <td>SIPNR — Noisy-le-Grand (09 72 72 39 39)</td>
        </tr>
        <tr>
          <td>Déclaration comptes étrangers (3916)</td>
          <td>Avec la déclaration de revenus annuelle</td>
          <td>En ligne impots.gouv.fr</td>
        </tr>
        <tr>
          <td>Signalement départ à l'étranger</td>
          <td>Dès l'installation</td>
          <td>Centre des finances publiques + banques, CAF, CPAM</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-6">Ce qu'il faut signaler en dehors des impôts</h2>
    <p>La déclaration fiscale n'est qu'une partie des démarches. Selon ta situation :</p>
    <ul>
      <li><strong>Banque française</strong> : signaler ton adresse vietnamienne (obligation légale de mise à jour de la connaissance client / KYC)</li>
      <li><strong>CPAM</strong> : signaler ton départ pour clôturer ta couverture maladie obligatoire — ou basculer sur la CFE</li>
      <li><strong>CAF</strong> : signaler ton départ pour arrêter les allocations (APL, etc.) si applicable</li>
      <li><strong>Caisse de retraite</strong> (Carsat, AGIRC-ARRCO) : signaler ton adresse à l'étranger pour continuer à recevoir les relevés de points</li>
      <li><strong>Mutuelle santé</strong> : résiliation ou basculement vers une couverture internationale</li>
    </ul>
    <div class="info-box">
      <strong>À lire aussi :</strong> → <a href="protection-sociale-cfe-retraite-vietnam">CFE, protection sociale et retraite quand on travaille depuis le Vietnam</a>
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
$current_slug = 'declarer-impots-france-depuis-vietnam';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
