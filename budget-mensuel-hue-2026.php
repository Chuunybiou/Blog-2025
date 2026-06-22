<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Budget mensuel à Hué en 2026 : vivre dans l\'ancienne capitale du Vietnam';
$page_description = 'Combien coûte la vie à Hué en 2026 ? Logement, nourriture locale, culture et transports. Hué est l\'une des villes les moins chères du Vietnam — idéale pour un séjour longue durée.';
$page_canonical   = SITE_URL . '/budget-mensuel-hue-2026';
$page_og_title    = 'Budget mensuel à Hué 2026 : vivre à l\'ancienne capitale du Vietnam';
$page_og_desc     = 'Hué est l\'une des villes les plus abordables du Vietnam. Voici ce que ça coûte d\'y vivre en 2026.';
$page_og_url      = SITE_URL . '/budget-mensuel-hue-2026';
$page_og_image    = 'https://images.unsplash.com/photo-1540261007661-d2c56aec1b2a?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Budget mensuel à Hué en 2026 : vivre dans l\'ancienne capitale du Vietnam',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/budget-mensuel-hue-2026',
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
  ['q' => 'Hué est-elle vraiment moins chère que les autres villes vietnamiennes ?',
   'a' => 'Oui, Hué est systématiquement citée comme l\'une des villes les moins chères du Vietnam pour les expatriés. Le logement et la nourriture locale sont nettement moins chers qu\'à Hanoï ou HCMV, et même moins chers qu\'à Da Nang.'],
  ['q' => 'Y a-t-il des expats et des francophones à Hué ?',
   'a' => 'Hué a une petite mais réelle communauté d\'expatriés occidentaux, attirée par la culture, les monuments UNESCO et la tranquillité. La présence française est historique — l\'influence coloniale est encore visible dans l\'architecture. Des groupes Facebook et des associations existent.'],
  ['q' => 'L\'internet est-il fiable à Hué pour travailler à distance ?',
   'a' => 'Oui, la fibre optique est disponible en ville et les cafés ont généralement un bon WiFi. Des espaces de coworking commencent à s\'ouvrir à Hué. Pour un nomade digital, c\'est tout à fait viable, même si l\'offre reste plus limitée qu\'à Da Nang.'],
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
      <span>Budget Hué 2026</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Budget mensuel à Hué en 2026 : vivre dans l'ancienne capitale du Vietnam</h1>
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
      <li><a href="#section-1">Hué : profil de la ville</a></li>
      <li><a href="#section-2">Logement</a></li>
      <li><a href="#section-3">Alimentation</a></li>
      <li><a href="#section-4">Transport</a></li>
      <li><a href="#section-5">Culture et loisirs</a></li>
      <li><a href="#section-6">Budget récapitulatif</a></li>
      <li><a href="#section-7">Pour qui Hué est-elle idéale ?</a></li>
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
    <p><strong>Hué est la ville que beaucoup de voyageurs traversent en deux jours — et regrettent de ne pas y avoir passé deux semaines.</strong> Ancienne capitale impériale, classée UNESCO, baignée par la rivière des Parfums, réputée pour sa gastronomie unique et son rythme tranquille — c'est aussi l'une des villes les moins chères du Vietnam pour y vivre. Ce guide te donne les chiffres bruts.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1540261007661-d2c56aec1b2a?w=1200&q=80" alt="Hué citadelle impériale Vietnam" width="1200" height="675" loading="lazy">

    <div class="tip-box">
      <strong>Comparatif :</strong> <a href="budget-mensuel-da-nang-2026">Budget Da Nang</a> | <a href="budget-mensuel-nha-trang-2026">Budget Nha Trang</a> | <a href="budget-mensuel-hanoi-2026">Budget Hanoï</a>
    </div>

    <h2 id="section-1">Hué : profil de la ville</h2>
    <p>Hué (~[À VÉRIFIER] habitants) est la capitale de la province de Thừa Thiên Huế, dans le centre du Vietnam. Elle est classée à l'UNESCO pour sa Citadelle impériale et ses tombeaux royaux, et réputée dans tout le Vietnam pour sa cuisine (bún bò Huế, bánh khoái, cơm hến…).</p>
    <p>Ce qui distingue Hué des autres villes vietnamiennes :</p>
    <ul>
      <li>Rythme de vie lent et serein — la ville qui fait du bien</li>
      <li>Architecture et patrimoine exceptionnels</li>
      <li>Cuisine locale unique et abordable</li>
      <li>Beaucoup moins touristique que Da Nang ou Hội An</li>
      <li>Accès rapide à Da Nang (1h de route) et à Hội An</li>
    </ul>
    <p>Point faible : la saison des pluies à Hué est l'une des plus pluvieuses du Vietnam (octobre-décembre) — certaines années avec des inondations importantes.</p>

    <h2 id="section-2">Logement</h2>
    <p>Hué est l'une des villes les plus abordables du pays pour se loger :</p>
    <table>
      <thead>
        <tr><th>Type de logement</th><th>Prix mensuel</th></tr>
      </thead>
      <tbody>
        <tr><td>Chambre / studio (local)</td><td>[À VÉRIFIER] – [À VÉRIFIER] USD</td></tr>
        <tr><td>Appartement 1 chambre (bon standing)</td><td>[À VÉRIFIER] – [À VÉRIFIER] USD</td></tr>
        <tr><td>Maison traditionnelle (jardin)</td><td>[À VÉRIFIER] – [À VÉRIFIER] USD</td></tr>
      </tbody>
    </table>
    <p>Des maisons anciennes avec jardin à proximité de la rivière des Parfums sont disponibles à des prix très raisonnables — le type de logement impossible à trouver à ce prix à Hanoï ou HCMV.</p>

    <h2 id="section-3">Alimentation</h2>
    <p>La gastronomie huéenne est réputée comme la plus raffinée du Vietnam. Et paradoxalement, les prix sont parmi les plus bas du pays :</p>
    <ul>
      <li>Bol de bún bò Huế : <strong>[À VÉRIFIER] VND</strong></li>
      <li>Repas au marché couvert : <strong>[À VÉRIFIER] VND</strong></li>
      <li>Restaurant mi-gamme : <strong>[À VÉRIFIER] USD</strong> par personne</li>
      <li>Courses en supermarché : prix similaires au reste du Vietnam</li>
    </ul>
    <p>Budget nourriture mensuel : <strong>[À VÉRIFIER] – [À VÉRIFIER] USD</strong>.</p>

    <h2 id="section-4">Transport</h2>
    <ul>
      <li>Scooter (location longue durée) : <strong>[À VÉRIFIER] USD/mois</strong></li>
      <li>Vélo : possible pour les trajets courts dans la vieille ville</li>
      <li>Bus régional pour Da Nang : <strong>[À VÉRIFIER] VND</strong></li>
    </ul>
    <p>La ville est compacte — un scooter ou même un vélo suffisent pour se déplacer au quotidien. Pas de bouchons comparables à Hanoï ou HCMV.</p>

    <h2 id="section-5">Culture et loisirs</h2>
    <p>Hué est une ville culturellement riche — et une bonne partie des activités y sont gratuites ou bon marché :</p>
    <ul>
      <li>Visite de la Citadelle impériale : <strong>[À VÉRIFIER] VND</strong></li>
      <li>Croisière sur la rivière des Parfums : <strong>[À VÉRIFIER] USD</strong></li>
      <li>Festivals (Festival de Hué) : événements culturels réguliers</li>
      <li>Plage de Lăng Cô : 30 minutes en scooter</li>
      <li>Coworking : offre limitée mais croissante [À VÉRIFIER]</li>
    </ul>

    <h2 id="section-6">Budget mensuel récapitulatif</h2>
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
        <tr><td>Loisirs / culture</td><td>[À VÉRIFIER] $</td><td>[À VÉRIFIER] $</td></tr>
        <tr><td><strong>Total estimé</strong></td><td><strong>~550 $</strong></td><td><strong>~900 $</strong></td></tr>
      </tbody>
    </table>
    <p>Hué est systématiquement la ville la moins chère des quatre comparées dans ce blog — si le budget est un critère prioritaire, c'est une option sérieuse.</p>

    <h2 id="section-7">Pour qui Hué est-elle idéale ?</h2>
    <p>Hué convient particulièrement à :</p>
    <ul>
      <li>Les amateurs de culture, d'histoire et de patrimoine</li>
      <li>Ceux qui cherchent un rythme de vie lent et authentique</li>
      <li>Les retraités avec un budget modeste</li>
      <li>Les enseignants (quelques écoles et instituts de langues)</li>
      <li>Les nomades digitaux qui veulent un cadre inspirant sans la frénésie d'une grande ville</li>
    </ul>
    <p>Elle conviendra moins aux expatriés qui ont besoin de services médicaux avancés (prévoir de se déplacer à Da Nang ou HCMV), d'une scène économique dynamique, ou d'une large communauté expat.</p>

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
$current_slug = 'budget-mensuel-hue-2026';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
