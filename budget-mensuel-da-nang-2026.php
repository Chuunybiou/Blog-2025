<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Budget mensuel à Da Nang en 2026 : combien ça coûte vraiment ?';
$page_description = 'Loyer, nourriture, transport, activités : budget réel d\'un expatrié à Da Nang en 2026. Comparaison avec Hanoï et HCMV, et pourquoi Da Nang attire de plus en plus de Français.';
$page_canonical   = SITE_URL . '/budget-mensuel-da-nang-2026';
$page_og_title    = 'Budget mensuel à Da Nang 2026 : chiffres concrets pour les expatriés';
$page_og_desc     = 'Combien coûte la vie à Da Nang ? Loyer, resto, plage, internet : budget détaillé pour 2026.';
$page_og_url      = SITE_URL . '/budget-mensuel-da-nang-2026';
$page_og_image    = 'https://images.unsplash.com/photo-1559592413-7cbb6e42f800?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Budget mensuel à Da Nang en 2026 : combien ça coûte vraiment ?',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/budget-mensuel-da-nang-2026',
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
  ['q' => 'Da Nang est-elle moins chère que Hanoï ou HCMV ?',
   'a' => 'En général oui, surtout pour le logement — les appartements sont moins chers qu\'à Hanoï centre ou dans les quartiers expats de HCMV. La nourriture locale reste dans les mêmes gammes de prix. Les activités liées à la plage et aux sports nautiques sont un poste supplémentaire spécifique à Da Nang.'],
  ['q' => 'Y a-t-il une communauté française à Da Nang ?',
   'a' => 'Oui, Da Nang a une communauté d\'expatriés occidentaux en croissance, dont des Français. Des groupes Facebook et des associations existent. La ville est de plus en plus populaire auprès des nomades digitaux et des expatriés qui veulent éviter les grandes métropoles.'],
  ['q' => 'Quel est le meilleur quartier pour un expatrié à Da Nang ?',
   'a' => 'Le quartier Mỹ Khê (bord de mer) est prisé des expats mais plus cher. Les quartiers Hải Châu et An Hải Bắc offrent un bon compromis entre prix et commodités. [TON EXPÉRIENCE ICI si tu connais Da Nang]'],
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
      <span>Budget Da Nang 2026</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Budget mensuel à Da Nang en 2026 : chiffres réels pour les expatriés</h1>
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
      <li><a href="#section-1">Pourquoi Da Nang</a></li>
      <li><a href="#section-2">Logement</a></li>
      <li><a href="#section-3">Alimentation</a></li>
      <li><a href="#section-4">Transport</a></li>
      <li><a href="#section-5">Santé et assurance</a></li>
      <li><a href="#section-6">Loisirs et activités</a></li>
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
    <p><strong>Da Nang est en train de devenir la ville préférée des expatriés qui ne veulent pas vivre dans une mégapole.</strong> Mer, montagne, taille humaine, aéroport international, internet rapide et coût de la vie raisonnable — c'est la combinaison idéale pour beaucoup de nomades et d'expatriés. Voici ce que ça coûte vraiment d'y vivre en 2026.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1559592413-7cbb6e42f800?w=1200&q=80" alt="Da Nang plage Vietnam" width="1200" height="675" loading="lazy">

    <div class="tip-box">
      <strong>Comparatif :</strong> Voir aussi <a href="budget-mensuel-hanoi-2026">Budget Hanoï</a> et <a href="budget-mensuel-hcmc-2026">Budget HCMV</a> pour comparer les trois grandes villes.
    </div>

    <h2 id="section-1">Pourquoi Da Nang pour les expatriés</h2>
    <p>Da Nang cumule des atouts rares : plages de sable blanc à 10 minutes du centre-ville, montagne de Bà Nà Hills en arrière-plan, ville propre et bien organisée, internet fibre omniprésent, et une infrastructure en développement rapide. La ville est suffisamment grande pour avoir tous les services nécessaires sans être envahissante comme Hanoï ou HCMV.</p>
    <p>Le climat est chaud (28-34°C en été) mais tempéré par la brise marine. La saison des typhons (septembre-décembre) peut apporter des pluies intenses — à anticiper.</p>

    <h2 id="section-2">Logement</h2>
    <p>Le marché locatif de Da Nang est attractif comparé aux grandes métropoles :</p>
    <table>
      <thead>
        <tr><th>Type de logement</th><th>Fourchette de prix mensuelle</th></tr>
      </thead>
      <tbody>
        <tr><td>Studio/1 pièce (quartier local)</td><td>[À VÉRIFIER] – [À VÉRIFIER] USD</td></tr>
        <tr><td>Appartement 1 chambre (expat)</td><td>[À VÉRIFIER] – [À VÉRIFIER] USD</td></tr>
        <tr><td>Appartement 2 chambres (bord de mer)</td><td>[À VÉRIFIER] – [À VÉRIFIER] USD</td></tr>
        <tr><td>Villa avec piscine partagée</td><td>[À VÉRIFIER] – [À VÉRIFIER] USD</td></tr>
      </tbody>
    </table>
    <p>Les quartiers proches de la plage Mỹ Khê sont plus chers mais très demandés. Les quartiers résidentiels comme Hòa Cường Bắc ou An Hải Bắc sont moins chers et bien desservis.</p>

    <h2 id="section-3">Alimentation</h2>
    <p>Da Nang est réputée pour sa cuisine locale (bánh mì, mì Quảng, bánh xèo, fruits de mer frais). Manger local est très bon marché :</p>
    <ul>
      <li>Repas de rue / cantine locale : <strong>[À VÉRIFIER] – [À VÉRIFIER] VND</strong></li>
      <li>Café avec gâteaux : <strong>[À VÉRIFIER] VND</strong></li>
      <li>Restaurant mi-gamme pour 2 personnes : <strong>[À VÉRIFIER] VND</strong></li>
      <li>Supermarché (produits importés) : prix proches de Hanoï</li>
    </ul>
    <p>Budget nourriture mensuel réaliste : <strong>[À VÉRIFIER] – [À VÉRIFIER] USD</strong> selon ton mode de vie.</p>

    <h2 id="section-4">Transport</h2>
    <p>Da Nang est une ville à taille humaine — moins dense que Hanoï ou HCMV. Les déplacements sont plus faciles :</p>
    <ul>
      <li>Scooter en location longue durée : <strong>[À VÉRIFIER] USD/mois</strong></li>
      <li>Grab (moto) : <strong>[À VÉRIFIER] VND</strong> pour 5 km</li>
      <li>Taxi/Grab voiture : disponible mais moins utilisé</li>
      <li>Vélo électrique : option croissante pour les distances courtes</li>
    </ul>

    <h2 id="section-5">Santé et assurance</h2>
    <p>Da Nang a plusieurs hôpitaux et cliniques, dont des établissements privés anglophones. Pour les cas graves, un transfert sur Hanoï ou HCMV peut être nécessaire. Une assurance santé internationale reste fortement conseillée.</p>
    <p>→ <a href="assurance-sante-vietnam-expat">Guide assurance santé expatriée</a> | <a href="hopitaux-medecins-francophones-vietnam">Hôpitaux au Vietnam</a></p>

    <h2 id="section-6">Loisirs et activités</h2>
    <p>C'est là où Da Nang se distingue :</p>
    <ul>
      <li>Plage gratuite, accès permanent — pas de frais d'entrée</li>
      <li>Sports nautiques (surf, paddle, plongée) : <strong>[À VÉRIFIER] USD</strong> la session</li>
      <li>Randonnée dans les montagnes (Bà Nà, Sơn Trà) : gratuite ou très bon marché</li>
      <li>Coworking : <strong>[À VÉRIFIER] USD/mois</strong> pour un espace ouvert</li>
      <li>Sortie bar / restaurant western : <strong>[À VÉRIFIER] USD</strong> pour une soirée</li>
    </ul>

    <h2 id="section-7">Budget mensuel récapitulatif</h2>

    <table>
      <thead>
        <tr>
          <th>Poste</th>
          <th>Budget serré</th>
          <th>Budget confort</th>
          <th>Budget expat+</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Logement</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td></tr>
        <tr><td>Nourriture</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td></tr>
        <tr><td>Transport</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td></tr>
        <tr><td>Santé / assurance</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td></tr>
        <tr><td>Loisirs / activités</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td></tr>
        <tr><td><strong>Total estimé</strong></td><td><strong>~700 $</strong></td><td><strong>~1 200 $</strong></td><td><strong>~2 000 $</strong></td></tr>
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
$current_slug = 'budget-mensuel-da-nang-2026';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
