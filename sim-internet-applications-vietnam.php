<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'SIM, internet et applications au Vietnam : guide pratique 2026';
$page_description = 'Quelle SIM prendre au Vietnam ? Quel opérateur choisir ? Quelles applications sont indispensables ? Internet en 4G, eSIM, applications locales : le guide pratique pour expatriés.';
$page_canonical   = SITE_URL . '/sim-internet-applications-vietnam';
$page_og_title    = 'SIM, internet et applications au Vietnam : tout ce qu\'il faut savoir';
$page_og_desc     = 'Viettel, Mobifone, Vietnamobile, eSIM : quelle SIM choisir au Vietnam ? Quelles apps installer ? Le guide 2026 pour rester connecté.';
$page_og_url      = SITE_URL . '/sim-internet-applications-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'SIM, internet et applications au Vietnam : guide pratique 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/sim-internet-applications-vietnam',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Voyager au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'amber';
$article_hero_bg      = '#3a2a0e';
$article_glow         = 'rgba(211,154,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Voyager au Vietnam';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'Peut-on acheter une SIM vietnamienne à l\'aéroport ?',
   'a' => 'Oui, les trois grands opérateurs (Viettel, Mobifone, Vietnamobile) ont des comptoirs à l\'aéroport de Hanoï (Nội Bài) et à Tân Sơn Nhất (HCMV). C\'est pratique mais parfois plus cher qu\'en ville. Apporte ton passeport — il est obligatoire pour l\'achat d\'une SIM au Vietnam.'],
  ['q' => 'Est-ce qu\'une eSIM fonctionne bien au Vietnam ?',
   'a' => 'Oui, les eSIM fonctionnent bien en 4G dans les grandes villes et sur les axes touristiques. Pour un court séjour, c\'est très pratique (achat depuis la France avant le départ). Pour une installation longue durée, une SIM locale reste souvent plus économique.'],
  ['q' => 'Zalo ou WhatsApp pour communiquer avec les Vietnamiens ?',
   'a' => 'Zalo. C\'est l\'application de messagerie dominante au Vietnam — quasiment tous les Vietnamiens l\'utilisent pour le quotidien. WhatsApp existe mais est moins répandu. Télécharge Zalo dès ton arrivée si tu veux communiquer facilement avec ta belle-famille ou tes voisins.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Voyager au Vietnam</a><span class="breadcrumb-sep">›</span>
      <span>SIM et applications</span>
    </div>
    <span class="article-badge-hero">Voyager au Vietnam</span>
    <h1>SIM, internet et applications au Vietnam : guide pratique 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 7 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Opérateurs et qualité du réseau</a></li>
      <li><a href="#section-2">SIM locale ou eSIM ?</a></li>
      <li><a href="#section-3">Comparatif des forfaits</a></li>
      <li><a href="#section-4">Internet fixe et WiFi</a></li>
      <li><a href="#section-5">Applications indispensables</a></li>
      <li><a href="#section-6">VPN et accès aux contenus</a></li>
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
    <p><strong>Dès que tu poses le pied au Vietnam, la première question pratique c'est souvent : comment rester connecté ?</strong> La bonne nouvelle : le Vietnam a une couverture 4G solide dans les villes et les zones touristiques, les forfaits sont bon marché, et les applications locales facilitent vraiment le quotidien. Ce guide te donne tout ce qu'il faut savoir.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=1200&q=80" alt="Smartphone SIM Vietnam internet" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Les opérateurs vietnamiens et la qualité du réseau</h2>
    <p>Trois opérateurs dominent le marché mobile vietnamien :</p>
    <ul>
      <li><strong>Viettel</strong> : le leader avec la meilleure couverture nationale, y compris en zone rurale. Bon choix pour les voyages hors des grandes villes.</li>
      <li><strong>Mobifone</strong> : deuxième opérateur, très bon dans les grandes villes et les zones touristiques. Interface plus conviviale.</li>
      <li><strong>Vietnamobile</strong> : moins cher, moins bon en zone rurale. Correct pour rester dans les grandes villes.</li>
    </ul>
    <p>La 4G est disponible dans toutes les grandes villes et sur les principaux axes. La 5G est en déploiement dans certaines zones [À VÉRIFIER couverture actuelle]. En zone rurale ou dans les îles, seule la 3G voire la 2G peut être disponible.</p>
    <p>[TON EXPÉRIENCE ICI — quel opérateur tu utilises à Hanoï et pourquoi]</p>

    <h2 id="section-2">SIM locale ou eSIM ?</h2>
    <p>Deux options pour rester connecté :</p>
    <ul>
      <li><strong>SIM locale physique</strong> : à acheter sur place à l'aéroport ou dans n'importe quelle boutique de l'opérateur. Nécessite ton passeport. Idéal pour un séjour long ou une installation. Coût : <strong>[À VÉRIFIER] VND</strong> pour une SIM prépayée avec données.</li>
      <li><strong>eSIM</strong> : configurable depuis la France avant le départ (via Airalo, Holafly…). Pratique pour les premières semaines. Souvent plus cher qu'une SIM locale mais très confortable à l'arrivée.</li>
    </ul>

    <h2 id="section-3">Comparatif des forfaits data</h2>

    <table>
      <thead>
        <tr>
          <th>Opérateur</th>
          <th>Forfait mensuel</th>
          <th>Données</th>
          <th>Prix approx.</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Viettel</td>
          <td>Đăng ký gói tháng</td>
          <td>[À VÉRIFIER] Go / mois</td>
          <td>[À VÉRIFIER] VND/mois</td>
        </tr>
        <tr>
          <td>Mobifone</td>
          <td>Gói cước data</td>
          <td>[À VÉRIFIER] Go / mois</td>
          <td>[À VÉRIFIER] VND/mois</td>
        </tr>
        <tr>
          <td>Vietnamobile</td>
          <td>Gói data</td>
          <td>[À VÉRIFIER] Go / mois</td>
          <td>[À VÉRIFIER] VND/mois</td>
        </tr>
      </tbody>
    </table>

    <div class="tip-box">
      <strong>Recharge en ligne :</strong> Tu peux recharger ta SIM vietnamienne via l'application de ton opérateur ou via des sites comme Nạp Tiền Online. Pratique pour éviter de chercher des points de vente.
    </div>

    <h2 id="section-4">Internet fixe à domicile</h2>
    <p>Pour un appartement, l'internet fixe par fibre optique est disponible dans la plupart des villes via FPT, Viettel Home ou VNPT. Les débits sont excellents et les tarifs très attractifs — compte environ <strong>[À VÉRIFIER] USD/mois</strong> pour une connexion fibre 100 Mb/s. L'installation est généralement rapide ([À VÉRIFIER] jours ouvrés).</p>
    <p>Le WiFi est également très présent dans les cafés, restaurants et espaces de coworking — souvent rapide et fiable.</p>

    <h2 id="section-5">Les applications indispensables au Vietnam</h2>

    <table>
      <thead>
        <tr>
          <th>Application</th>
          <th>Usage</th>
          <th>Remarque</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Zalo</td>
          <td>Messagerie principale au Vietnam</td>
          <td>Indispensable pour communiquer avec les Vietnamiens</td>
        </tr>
        <tr>
          <td>Grab</td>
          <td>VTC, livraison, taxis moto</td>
          <td>L'Uber local — fonctionne parfaitement</td>
        </tr>
        <tr>
          <td>Xe.com / Timo</td>
          <td>Taux de change</td>
          <td>Pour vérifier les taux en temps réel</td>
        </tr>
        <tr>
          <td>Google Maps</td>
          <td>Navigation</td>
          <td>Très fiable au Vietnam, cartographie récente</td>
        </tr>
        <tr>
          <td>Google Translate</td>
          <td>Traduction instantanée</td>
          <td>Mode appareil photo très utile pour lire les menus</td>
        </tr>
        <tr>
          <td>Shopeefood / BeFood</td>
          <td>Livraison de repas</td>
          <td>Plus large que Grab Food dans certaines villes</td>
        </tr>
        <tr>
          <td>Wise ou Revolut</td>
          <td>Paiements et retraits</td>
          <td>Meilleurs taux de change — voir notre <a href="banque-vietnam-francais">guide bancaire</a></td>
        </tr>
      </tbody>
    </table>

    <h2 id="section-6">VPN et accès aux contenus</h2>
    <p>Certains contenus sont bloqués au Vietnam ou accessibles avec des latences élevées. Netflix fonctionne mais avec un catalogue différent. Facebook et Google fonctionnent normalement. Les sites de presse française sont généralement accessibles.</p>
    <p>Un VPN est utile pour accéder à du contenu géo-restreint (streaming français par exemple). Les VPN grand public fonctionnent bien au Vietnam — le gouvernement les tolère pour l'usage privé [À VÉRIFIER la situation réglementaire actuelle].</p>

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
$current_slug = 'sim-internet-applications-vietnam';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
