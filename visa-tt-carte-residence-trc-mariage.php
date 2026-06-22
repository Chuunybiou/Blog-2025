<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Visa TT et carte de résidence temporaire (TRC) pour mariage au Vietnam : guide 2026';
$page_description = 'Si tu es marié(e) avec un(e) Vietnamien(ne) et tu vis au Vietnam, le visa TT et la carte de résidence temporaire (TRC) sont ta solution légale de long séjour. Guide pratique 2026.';
$page_canonical   = SITE_URL . '/visa-tt-carte-residence-trc-mariage';
$page_og_title    = 'Visa TT et TRC pour conjoint de Vietnamien : comment les obtenir en 2026';
$page_og_desc     = 'Marié(e) à un(e) Vietnamien(ne) et installé au Vietnam ? Le visa TT + TRC est la bonne solution. Voici comment faire.';
$page_og_url      = SITE_URL . '/visa-tt-carte-residence-trc-mariage';
$page_og_image    = 'https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Visa TT et carte de résidence temporaire (TRC) pour mariage au Vietnam : guide 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/visa-tt-carte-residence-trc-mariage',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Démarches Administratives',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'terracotta';
$article_hero_bg      = '#3a1a0e';
$article_glow         = 'rgba(191,74,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Démarches Admin';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'Quelle est la différence entre le visa TT et la TRC ?',
   'a' => 'Le visa TT (thị thực TT) est un visa long séjour délivré pour les conjoints de Vietnamiens. La TRC (thẻ tạm trú — carte de résidence temporaire) est une carte physique délivrée par le Département de l\'Immigration qui remplace le visa pour les séjours de plus de [À VÉRIFIER] mois. La TRC est plus pratique au quotidien.'],
  ['q' => 'Combien de temps dure la TRC pour conjoint de Vietnamien ?',
   'a' => 'La TRC pour conjoint de Vietnamien est généralement accordée pour [À VÉRIFIER] ans, renouvelable. La durée peut varier selon le Département de l\'Immigration local.'],
  ['q' => 'Peut-on travailler avec un visa TT ou une TRC ?',
   'a' => 'Le visa TT et la TRC n\'autorisent pas automatiquement à travailler au Vietnam. Pour exercer une activité salariée, un permis de travail (giấy phép lao động) reste nécessaire dans la plupart des cas. Des exemptions existent — [À VÉRIFIER selon ta situation].'],
  ['q' => 'Que se passe-t-il si le mariage est dissous ?',
   'a' => 'En cas de divorce, la TRC basée sur le mariage perd sa justification et doit être annulée ou convertie vers un autre type de visa. Il faut en informer le Département de l\'Immigration dans un délai [À VÉRIFIER].'],
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
      <span>Visa TT et TRC mariage</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Visa TT et carte de résidence temporaire (TRC) pour conjoint de Vietnamien(ne) : guide 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 8 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Visa TT vs TRC : comprendre la différence</a></li>
      <li><a href="#section-2">Les conditions requises</a></li>
      <li><a href="#section-3">Documents à préparer</a></li>
      <li><a href="#section-4">Faire la demande</a></li>
      <li><a href="#section-5">Durée et renouvellement</a></li>
      <li><a href="#section-6">Droits et limitations</a></li>
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
    <p><strong>Si tu es marié(e) à un(e) Vietnamien(ne) et que tu vis au Vietnam, tu n'as pas besoin de jongler avec des visa-runs ou des e-visas renouvelés tous les 90 jours.</strong> Le visa TT (thị thực TT) ou la carte de résidence temporaire (TRC) sont les solutions légales conçues pour ta situation. Ce guide t'explique comment les obtenir et ce que tu peux faire avec.</p>

    <p>Pour la situation inverse — ton conjoint vietnamien voulant venir en France — lis notre <a href="faire-venir-conjointe-vietnamienne-france">guide complet du regroupement familial franco-vietnamien</a>.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=1200&q=80" alt="Carte de résidence Vietnam" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Visa TT vs TRC : comprendre la différence</h2>
    <p>Ces deux documents permettent de séjourner légalement au Vietnam pour les étrangers mariés à un(e) Vietnamien(ne), mais ils n'ont pas la même nature :</p>

    <table>
      <thead>
        <tr>
          <th>Caractéristique</th>
          <th>Visa TT</th>
          <th>TRC (Thẻ tạm trú)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nature</td>
          <td>Visa apposé dans le passeport</td>
          <td>Carte physique séparée</td>
        </tr>
        <tr>
          <td>Durée</td>
          <td>[À VÉRIFIER] mois max</td>
          <td>[À VÉRIFIER] ans</td>
        </tr>
        <tr>
          <td>Délivré par</td>
          <td>Département de l'Immigration</td>
          <td>Département de l'Immigration</td>
        </tr>
        <tr>
          <td>Praticité</td>
          <td>Pratique pour commencer</td>
          <td>Plus commode au quotidien</td>
        </tr>
        <tr>
          <td>Autorisation de travail</td>
          <td>Non automatique</td>
          <td>Non automatique</td>
        </tr>
      </tbody>
    </table>

    <p>Dans la pratique, beaucoup de Français mariés au Vietnam commencent par le visa TT, puis convertissent vers la TRC pour plus de confort. La TRC évite d'avoir à renouveler fréquemment et de sortir du territoire.</p>

    <h2 id="section-2">Les conditions pour obtenir le visa TT / la TRC par mariage</h2>
    <ul>
      <li>Être légalement marié(e) à un(e) ressortissant(e) vietnamien(ne)</li>
      <li>Avoir un acte de mariage reconnu au Vietnam (acte du comité populaire)</li>
      <li>Ne pas avoir de casier judiciaire incompatible avec le séjour [À VÉRIFIER]</li>
      <li>Avoir un passeport valide</li>
    </ul>
    <p>Attention : si le mariage a eu lieu à l'étranger (en France par exemple), il faut que ce mariage soit reconnu au Vietnam. Une démarche de reconnaissance peut être nécessaire. [À VÉRIFIER]</p>

    <h2 id="section-3">Documents à préparer</h2>
    <ul>
      <li>Formulaire de demande de TRC ou de visa TT (fourni par le Département de l'Immigration)</li>
      <li>Passeport valide (validité > [À VÉRIFIER] mois)</li>
      <li>Photos d'identité</li>
      <li>Acte de mariage vietnamien original (giấy chứng nhận đăng ký kết hôn)</li>
      <li>Carte d'identité nationale (CCCD) ou livret de famille (sổ hộ khẩu) du conjoint vietnamien</li>
      <li>Justificatif de domicile (contrat de bail ou attestation)</li>
      <li>Enregistrement de domicile temporaire (đăng ký tạm trú) auprès du comité populaire local</li>
    </ul>

    <h2 id="section-4">Faire la demande</h2>
    <p>La demande se dépose au <strong>Département de l'Immigration (Cục Quản lý Xuất nhập cảnh)</strong> de la province ou de la ville où tu résides — à Hanoï ou à Hô Chi Minh-Ville, selon ton lieu de résidence.</p>
    <p>La présence physique du demandeur est généralement requise. Ton conjoint vietnamien peut t'accompagner mais n'est pas toujours obligatoire [À VÉRIFIER selon le bureau local].</p>
    <p>Délai de traitement : <strong>[À VÉRIFIER] jours ouvrés</strong>. Coût : <strong>[À VÉRIFIER] USD ou VND équivalent</strong>.</p>

    <div class="tip-box">
      <strong>Conseil pratique :</strong> Fais l'enregistrement de résidence temporaire (đăng ký tạm trú) AVANT de déposer la demande de TRC — le Département de l'Immigration le demande souvent. Cet enregistrement se fait au comité populaire de ton quartier avec ton contrat de bail et le passeport.
    </div>

    <h2 id="section-5">Durée de validité et renouvellement</h2>
    <p>La TRC pour conjoint de Vietnamien est délivrée pour une durée de <strong>[À VÉRIFIER] ans</strong>. Elle est renouvelable aussi longtemps que le mariage est en vigueur.</p>
    <p>Le renouvellement doit être initié <strong>[À VÉRIFIER] mois avant</strong> l'expiration de la TRC actuelle. Les documents à fournir sont similaires à la première demande.</p>

    <h2 id="section-6">Ce que tu peux (et ne peux pas) faire avec la TRC</h2>
    <p>Avec la TRC conjoint de Vietnamien :</p>
    <ul>
      <li>Séjourner légalement au Vietnam sans visa-run ni e-visa</li>
      <li>Entrer et sortir du Vietnam librement pendant la validité de la carte</li>
      <li>Ouvrir un compte bancaire au Vietnam plus facilement</li>
      <li>Accéder à certains services administratifs locaux</li>
    </ul>
    <p>Ce que la TRC ne permet pas automatiquement :</p>
    <ul>
      <li>Travailler pour un employeur vietnamien (un permis de travail reste souvent requis)</li>
      <li>Exercer certaines professions libérales réglementées</li>
      <li>Acheter des biens immobiliers dans les mêmes conditions qu'un Vietnamien [À VÉRIFIER]</li>
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
      <p>📥 <strong>Guide PDF + 3 modèles de lettres offerts</strong> dès l'inscription. Un email par mois, désinscription en 1 clic.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a> — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
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
$current_slug = 'visa-tt-carte-residence-trc-mariage';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
