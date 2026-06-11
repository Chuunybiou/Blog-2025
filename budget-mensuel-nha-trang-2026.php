<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Budget mensuel à Nha Trang en 2026 : combien ça coûte vraiment ?';
$page_description = 'Loyer, nourriture, mer, transports : budget réel d\'un expatrié à Nha Trang en 2026. Avantages et inconvénients de la ville balnéaire pour s\'installer durablement.';
$page_canonical   = SITE_URL . '/budget-mensuel-nha-trang-2026';
$page_og_title    = 'Budget mensuel à Nha Trang 2026 : ce que ça coûte vraiment';
$page_og_desc     = 'Combien coûte la vie à Nha Trang en 2026 ? Loyer, nourriture, mer et transports — le budget complet.';
$page_og_url      = SITE_URL . '/budget-mensuel-nha-trang-2026';
$page_og_image    = 'https://images.unsplash.com/photo-1559592413-7cbb6e42f800?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Budget mensuel à Nha Trang en 2026 : combien ça coûte vraiment ?',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/budget-mensuel-nha-trang-2026',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Argent & Travail',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'amber';
$article_hero_bg      = '#3a2a0e';
$article_glow         = 'rgba(211,154,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Argent & Travail';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'Nha Trang est-elle vraiment une bonne ville pour s\'expatrier durablement ?',
   'a' => 'Ça dépend du profil. Nha Trang est magnifique pour des séjours de 1 à 6 mois — la plage, la mer, les îles. Mais pour une installation à l\'année, certains expats trouvent la ville un peu limitée sur le plan culturel et la vie nocturne peut peser. La communauté russe est très présente dans certains quartiers. À toi de voir si l\'ambiance te convient.'],
  ['q' => 'L\'internet est-il fiable à Nha Trang pour le télétravail ?',
   'a' => 'Oui, la fibre optique est disponible dans la plupart des appartements et les coworkings se développent. La 4G est également bonne. Nha Trang devient de plus en plus populaire auprès des nomades digitaux.'],
  ['q' => 'Quelle est la meilleure saison pour vivre à Nha Trang ?',
   'a' => 'La saison sèche (janvier à août) est idéale — mer calme, soleil. La saison des pluies (septembre à décembre) apporte des précipitations parfois intenses et la mer peut être agitée. Beaucoup d\'expatriés quittent Nha Trang pendant cette période.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Budget Nha Trang 2026</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Budget mensuel à Nha Trang en 2026 : chiffres réels pour expatriés</h1>
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
      <li><a href="#section-1">Nha Trang pour les expatriés</a></li>
      <li><a href="#section-2">Logement</a></li>
      <li><a href="#section-3">Alimentation</a></li>
      <li><a href="#section-4">Transport</a></li>
      <li><a href="#section-5">Santé</a></li>
      <li><a href="#section-6">Loisirs</a></li>
      <li><a href="#section-7">Budget récapitulatif</a></li>
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
    <p><strong>Nha Trang est la station balnéaire de référence du Vietnam.</strong> Plages de sable blanc, baie turquoise, îles à explorer en bateau — c'est une carte postale permanente. Mais qu'est-ce que ça donne quand on y vit à l'année ? Combien ça coûte, et est-ce que ça conviendrait à un expatrié français ? Voici les chiffres bruts de 2026.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1559592413-7cbb6e42f800?w=1200&q=80" alt="Nha Trang baie Vietnam" width="1200" height="675" loading="lazy">

    <div class="tip-box">
      <strong>Comparatif :</strong> <a href="budget-mensuel-da-nang-2026">Budget Da Nang</a> | <a href="budget-mensuel-hue-2026">Budget Hué</a> | <a href="budget-mensuel-hanoi-2026">Budget Hanoï</a>
    </div>

    <h2 id="section-1">Nha Trang pour les expatriés : ce qu'il faut savoir</h2>
    <p>Nha Trang est une ville de taille moyenne (environ [À VÉRIFIER] habitants) dans la province de Khánh Hòa, sur la côte centrale du Vietnam. La ville attire beaucoup de touristes, notamment russes depuis les années 2000, et une communauté d'expatriés occidentaux croissante depuis le développement du télétravail.</p>
    <p>Avantages :</p>
    <ul>
      <li>Mer et plage accessibles immédiatement</li>
      <li>Climat chaud et ensoleillé la majeure partie de l'année</li>
      <li>Coût de la vie légèrement inférieur à Da Nang</li>
      <li>Atmosphère détendue</li>
    </ul>
    <p>Inconvénients :</p>
    <ul>
      <li>Ville très touristique — ambiance parfois artificielle</li>
      <li>Forte présence de touristes russes qui a modifié certains quartiers</li>
      <li>Saison des pluies octobre-décembre — mer impraticable</li>
      <li>Moins de services culturels et d'écoles internationales qu'à Da Nang</li>
    </ul>

    <h2 id="section-2">Logement</h2>
    <table>
      <thead>
        <tr><th>Type</th><th>Prix mensuel estimé</th></tr>
      </thead>
      <tbody>
        <tr><td>Studio / chambre en coloc</td><td>[À VÉRIFIER] – [À VÉRIFIER] USD</td></tr>
        <tr><td>Appartement 1 chambre (quartier local)</td><td>[À VÉRIFIER] – [À VÉRIFIER] USD</td></tr>
        <tr><td>Appartement 1 chambre (bord de mer)</td><td>[À VÉRIFIER] – [À VÉRIFIER] USD</td></tr>
        <tr><td>Villa / maison avec jardin</td><td>[À VÉRIFIER] – [À VÉRIFIER] USD</td></tr>
      </tbody>
    </table>
    <p>Les prix sont généralement inférieurs à Da Nang pour des logements équivalents hors zone touristique. Les plateformes Batdongsan.com.vn et des groupes Facebook locaux sont les meilleures sources pour chercher.</p>

    <h2 id="section-3">Alimentation</h2>
    <p>La cuisine de Nha Trang est remarquable pour ses fruits de mer — bún cá (soupe de poisson), hải sản nướng (grillades de fruits de mer) sont des incontournables. Manger local est très abordable :</p>
    <ul>
      <li>Repas local (pho, bún) : <strong>[À VÉRIFIER] – [À VÉRIFIER] VND</strong></li>
      <li>Plateau de fruits de mer pour 2 (restaurant local) : <strong>[À VÉRIFIER] VND</strong></li>
      <li>Restaurant expat / cuisine étrangère : <strong>[À VÉRIFIER] USD</strong> par personne</li>
    </ul>
    <p>Budget nourriture mensuel : <strong>[À VÉRIFIER] – [À VÉRIFIER] USD</strong>.</p>

    <h2 id="section-4">Transport</h2>
    <p>La ville est relativement compacte — un scooter suffit pour tout faire. Les excursions en bateau vers les îles (Hon Mun, Hon Tam, etc.) sont faciles à organiser :</p>
    <ul>
      <li>Scooter en location longue durée : <strong>[À VÉRIFIER] USD/mois</strong></li>
      <li>Grab moto (5 km) : <strong>[À VÉRIFIER] VND</strong></li>
      <li>Excursion bateau îles : <strong>[À VÉRIFIER] USD</strong> la journée</li>
    </ul>

    <h2 id="section-5">Santé</h2>
    <p>Nha Trang a des hôpitaux locaux et quelques cliniques privées anglophones. Pour les cas sérieux, un transfert sur HCMV peut être nécessaire. Une assurance santé internationale reste indispensable.</p>

    <h2 id="section-6">Loisirs</h2>
    <ul>
      <li>Plage : gratuite</li>
      <li>Plongée sous-marine : <strong>[À VÉRIFIER] USD</strong> la plongée guidée</li>
      <li>Sports nautiques (kayak, paddle, surf) : <strong>[À VÉRIFIER] USD</strong> la session</li>
      <li>Coworking : <strong>[À VÉRIFIER] USD/mois</strong></li>
    </ul>

    <h2 id="section-7">Budget mensuel récapitulatif</h2>
    <table>
      <thead>
        <tr>
          <th>Poste</th>
          <th>Budget serré</th>
          <th>Budget confort</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Logement</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td></tr>
        <tr><td>Nourriture</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td></tr>
        <tr><td>Transport</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td></tr>
        <tr><td>Santé / assurance</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td></tr>
        <tr><td>Loisirs</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td></tr>
        <tr><td><strong>Total estimé</strong></td><td><strong>~600 $</strong></td><td><strong>~1 100 $</strong></td></tr>
      </tbody>
    </table>

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
$current_slug = 'budget-mensuel-nha-trang-2026';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
