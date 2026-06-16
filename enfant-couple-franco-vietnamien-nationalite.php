<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Nationalité d\'un enfant de couple franco-vietnamien : les règles en 2026';
$page_description = 'Un enfant né d\'un Français et d\'un(e) Vietnamien(ne) peut avoir la double nationalité. Voici les règles de transmission, les démarches pour déclarer la naissance et les documents à obtenir.';
$page_canonical   = SITE_URL . '/enfant-couple-franco-vietnamien-nationalite';
$page_og_title    = 'Nationalité d\'un enfant franco-vietnamien : double nationalité et démarches';
$page_og_desc     = 'Double nationalité franco-vietnamienne pour votre enfant : comment ça marche, comment la déclarer et quels documents obtenir.';
$page_og_url      = SITE_URL . '/enfant-couple-franco-vietnamien-nationalite';
$page_og_image    = 'https://images.unsplash.com/photo-1476703993599-0035a21b17a9?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Nationalité d\'un enfant de couple franco-vietnamien : les règles en 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/enfant-couple-franco-vietnamien-nationalite',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Démarches Administratives',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'jade';
$article_hero_bg      = '#1a3a2a';
$article_glow         = 'rgba(27,107,82,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Démarches Admin';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'Un enfant né au Vietnam d\'un père français et d\'une mère vietnamienne est-il automatiquement français ?',
   'a' => 'Oui, par filiation paternelle. Mais il ne sera pas automatiquement inscrit dans les registres français — une déclaration de naissance doit être faite auprès de l\'ambassade ou du consulat français au Vietnam dans un délai de [À VÉRIFIER] jours suivant la naissance.'],
  ['q' => 'La double nationalité franco-vietnamienne est-elle légalement reconnue ?',
   'a' => 'La France accepte la double nationalité sans restriction. Le Vietnam ne reconnaît pas officiellement la double nationalité mais la tolère dans les faits. Ton enfant peut donc avoir les deux passeports, mais en pratique les autorités vietnamiennes le considèrent comme vietnamien sur le sol vietnamien.'],
  ['q' => 'Peut-on choisir la nationalité de l\'enfant ?',
   'a' => 'Non, la nationalité française se transmet automatiquement si l\'un des parents est français. La nationalité vietnamienne dépend du droit vietnamien — en général elle est attribuée si l\'un des parents est vietnamien et l\'enfant est né au Vietnam ou enregistré selon les règles vietnamiennes. [À VÉRIFIER]'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Démarches Administratives</a><span class="breadcrumb-sep">›</span>
      <span>Nationalité enfant franco-vietnamien</span>
    </div>
    <span class="article-badge-hero">Couple Mixte</span>
    <h1>Nationalité d'un enfant de couple franco-vietnamien : double nationalité et démarches</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 8 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Comment se transmet la nationalité française</a></li>
      <li><a href="#section-2">La double nationalité franco-vietnamienne</a></li>
      <li><a href="#section-3">Déclarer la naissance côté français</a></li>
      <li><a href="#section-4">Documents à obtenir</a></li>
      <li><a href="#section-5">Le passeport français de l'enfant</a></li>
      <li><a href="#section-6">L'enfant en France vs au Vietnam</a></li>
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
    <p><strong>Quand un couple franco-vietnamien attend un enfant, la question de la nationalité arrive vite.</strong> Bonne nouvelle : un enfant né d'un parent français est français, que la naissance ait lieu en France ou au Vietnam. Mais il faut faire les démarches pour que ça soit officiel — et c'est là que ça se complique un peu.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1476703993599-0035a21b17a9?w=1200&q=80" alt="Famille enfant franco-vietnamien" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Comment se transmet la nationalité française</h2>
    <p>La nationalité française se transmet par filiation (jus sanguinis) — pas par le lieu de naissance. Les règles :</p>
    <ul>
      <li>Si le père ou la mère est français(e), l'enfant est français de droit, qu'il soit né en France, au Vietnam ou ailleurs</li>
      <li>Cette règle s'applique même si l'enfant est né hors mariage, à condition que la filiation soit établie légalement (reconnaissance)</li>
      <li>Il n'y a pas de démarche à faire pour "octroyer" la nationalité — elle est automatique. Mais il faut l'officialiser via l'état civil consulaire.</li>
    </ul>

    <h2 id="section-2">La double nationalité franco-vietnamienne</h2>
    <p>La France autorise la double nationalité sans restriction depuis 1973. Les Français peuvent donc détenir un passeport d'un autre pays librement.</p>
    <p>Le Vietnam a une position plus complexe : officiellement, la loi vietnamienne ne reconnaît pas la double nationalité, mais en pratique elle est tolérée notamment pour les enfants issus de couples mixtes. En pratique, ton enfant peut avoir :</p>
    <ul>
      <li>Un acte de naissance vietnamien (déclaré au comité populaire)</li>
      <li>Un acte de naissance français (transcrit au consulat puis au SCEC de Nantes)</li>
      <li>Un passeport français</li>
      <li>Un passeport vietnamien [À VÉRIFIER les conditions d'obtention]</li>
    </ul>
    <p>Attention : sur le sol vietnamien, les autorités considèrent en général ton enfant comme vietnamien et lui appliquent le droit vietnamien. En France, il est français.</p>

    <h2 id="section-3">Déclarer la naissance côté français</h2>
    <p>Si l'enfant naît au Vietnam, tu dois déclarer sa naissance à l'ambassade de France à Hanoï (ou au consulat général à HCMV) dans les <strong>[À VÉRIFIER] jours</strong> suivant la naissance. Cette déclaration est gratuite.</p>
    <p>Documents à fournir à l'ambassade [À VÉRIFIER liste complète] :</p>
    <ul>
      <li>Extrait d'acte de naissance vietnamien de l'enfant (délivré par l'hôpital ou le comité populaire)</li>
      <li>Acte de mariage des parents (si mariés) — transcrit ou légalisé</li>
      <li>CNI ou passeport du parent français</li>
      <li>Carte d'identité ou passeport du parent vietnamien</li>
      <li>Formulaire de déclaration de naissance (fourni par l'ambassade)</li>
    </ul>
    <p>Le consul enregistre la naissance dans les registres consulaires. L'acte est ensuite transmis au Service Central d'État Civil de Nantes pour inscription dans les registres français.</p>

    <h2 id="section-4">Documents à obtenir pour l'enfant</h2>

    <table>
      <thead>
        <tr>
          <th>Document</th>
          <th>Délivré par</th>
          <th>Utilité</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Acte de naissance vietnamien</td>
          <td>Comité populaire vietnamien</td>
          <td>Base légale côté vietnamien</td>
        </tr>
        <tr>
          <td>Acte de naissance français (transcrit)</td>
          <td>SCEC de Nantes via consulat</td>
          <td>Base légale côté français</td>
        </tr>
        <tr>
          <td>Livret de famille français mis à jour</td>
          <td>Consulat</td>
          <td>Document de référence en France</td>
        </tr>
        <tr>
          <td>Passeport français</td>
          <td>Consulat (dossier instruction)</td>
          <td>Voyager, entrer en France</td>
        </tr>
      </tbody>
    </table>

    <h2 id="section-5">Le passeport français de l'enfant</h2>
    <p>Une fois l'acte de naissance enregistré au consulat, tu peux demander un passeport français pour ton enfant. La demande se fait au consulat, avec :</p>
    <ul>
      <li>Acte de naissance consulaire</li>
      <li>Photos d'identité de l'enfant (format réglementaire)</li>
      <li>Présence du parent français (et de l'enfant si exigé)</li>
    </ul>
    <p>Le passeport français d'un mineur est valable [À VÉRIFIER] ans.</p>

    <h2 id="section-6">L'enfant en France vs au Vietnam</h2>
    <p>Si l'enfant réside en France :</p>
    <ul>
      <li>Il est rattaché au régime français (école, Sécurité sociale, etc.)</li>
      <li>Il entre en France avec son passeport français</li>
    </ul>
    <p>Si l'enfant réside au Vietnam avec le parent vietnamien (cas de séparation notamment) :</p>
    <ul>
      <li>Le droit vietnamien s'applique pour la garde et les autorités locales</li>
      <li>En cas de litige de garde internationale, des règles spécifiques s'appliquent [À VÉRIFIER — consulter l'ambassade]</li>
    </ul>

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
require_once __DIR__ . '/config/site.php';
$current_slug = 'enfant-couple-franco-vietnamien-nationalite';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
