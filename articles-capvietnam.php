<?php
require_once __DIR__ . '/config/site.php';

// Load articles from JSON
$_data     = json_decode(file_get_contents(__DIR__ . '/data/articles.json'), true);
$_all      = $_data['articles'];
$_featured_slug = $_data['featured_slug'];

// Separate featured from grid
$_featured = null;
$_grid     = [];
foreach ($_all as $a) {
    if ($a['slug'] === $_featured_slug) $_featured = $a;
    else $_grid[] = $a;
}

// Stats
$_count      = count($_all);
$_categories = count(array_unique(array_column($_all, 'category')));

// Category filter from URL
$_valid_cats = ['admin' => 'Démarches Administratives', 'couple' => 'Couple Mixte & Famille', 'argent' => 'Argent & Travail en Ligne', 'voyager' => 'Voyager au Vietnam', 'vie-pratique' => 'Vie Pratique'];
$_active_cat = isset($_GET['cat']) && array_key_exists($_GET['cat'], $_valid_cats) ? $_GET['cat'] : 'all';
$_cat_label  = $_active_cat !== 'all' ? $_valid_cats[$_active_cat] : null;

$page_title       = $_cat_label ? $_cat_label . ' — Cap Vietnam | Blog Expat Hanoï' : 'Tous les articles — Cap Vietnam | Blog Expat Hanoï';
$page_description = $_cat_label ? 'Articles ' . $_cat_label . ' du blog Cap Vietnam : guides pratiques pour réussir ton expatriation au Vietnam.' : 'Tous les articles du blog Cap Vietnam : démarches administratives, couple mixte franco-vietnamien et travail en ligne depuis le Vietnam.';
$page_canonical   = SITE_URL . '/articles-capvietnam';
$page_og_title    = 'Tous les articles — Cap Vietnam';
$page_og_desc     = 'Démarches, couple mixte, travail en ligne : tous les articles pour réussir son expatriation au Vietnam.';
$page_og_url      = $page_canonical;
$page_og_image    = 'https://images.unsplash.com/photo-1573270689103-d7a4e42b609a?w=1200&q=80';
$page_schema      = json_encode([
  '@context'    => 'https://schema.org',
  '@type'       => 'CollectionPage',
  'name'        => 'Tous les articles — Cap Vietnam',
  'description' => "Archive de tous les articles du blog Cap Vietnam sur l'expatriation au Vietnam.",
  'url'         => $page_canonical,
  'isPartOf'    => ['@type' => 'WebSite', 'name' => SITE_NAME, 'url' => SITE_URL],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$page_extra_css = '
.page-hero{padding-top:64px;background:linear-gradient(165deg,#1c1917 0%,#2d2319 50%,#1c1917 100%);position:relative;overflow:hidden}
.page-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 70% 50% at 15% 85%,rgba(191,74,42,0.1) 0%,transparent 60%),radial-gradient(ellipse 50% 40% at 85% 15%,rgba(27,107,82,0.08) 0%,transparent 60%),radial-gradient(ellipse 40% 30% at 50% 50%,rgba(184,134,11,0.05) 0%,transparent 60%)}
.page-hero-inner{max-width:1200px;margin:0 auto;padding:4rem 2rem 3.5rem;position:relative;z-index:1}
.page-hero .breadcrumb{display:flex;align-items:center;gap:0.5rem;font-size:0.8rem;color:rgba(250,248,244,0.4);margin-bottom:1.5rem}
.page-hero .breadcrumb a{color:rgba(250,248,244,0.5);text-decoration:none}
.page-hero .breadcrumb a:hover{color:var(--cream)}
.page-hero h1{font-family:"DM Serif Display",serif;font-size:clamp(2.2rem,5vw,3.5rem);color:var(--cream);line-height:1.15;margin-bottom:1rem}
.page-hero p{font-size:1.1rem;font-weight:300;color:rgba(250,248,244,0.5);max-width:550px}
.hero-stats{display:flex;gap:2.5rem;margin-top:2rem}
.hero-stat-num{font-family:"DM Serif Display",serif;font-size:1.8rem;color:var(--terracotta-soft)}
.hero-stat-label{font-size:0.7rem;letter-spacing:2px;text-transform:uppercase;color:rgba(250,248,244,0.35)}
.filters-bar{max-width:1200px;margin:0 auto;padding:2rem 2rem 0;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:1rem}
.filter-tabs{display:flex;gap:0.5rem;flex-wrap:wrap}
.filter-tab{padding:0.55rem 1.3rem;border-radius:100px;border:1px solid var(--border);background:var(--white);font-family:inherit;font-size:0.85rem;font-weight:500;color:var(--muted);cursor:pointer;transition:all 0.2s}
.filter-tab:hover{border-color:var(--ink);color:var(--ink)}
.filter-tab.active{background:var(--ink);color:var(--cream);border-color:var(--ink)}
.filter-tab.active-admin{background:var(--terracotta);color:#fff;border-color:var(--terracotta)}
.filter-tab.active-couple{background:var(--jade);color:#fff;border-color:var(--jade)}
.filter-tab.active-argent{background:var(--amber);color:#fff;border-color:var(--amber)}
.filter-tab.active-voyager{background:#1a5f8a;color:#fff;border-color:#1a5f8a}
.filter-tab.active-vie-pratique{background:#2a7a7a;color:#fff;border-color:#2a7a7a}
.search-box{display:flex;align-items:center;gap:0.5rem;border:1px solid var(--border);border-radius:100px;padding:0.4rem 1rem;background:var(--white)}
.search-box input{border:none;background:none;font-family:inherit;font-size:0.9rem;color:var(--ink);width:200px;outline:none}
.search-box input::placeholder{color:var(--muted)}
.search-icon{color:var(--muted);font-size:0.9rem}
.results-count{max-width:1200px;margin:0 auto;padding:1.25rem 2rem 0;font-size:0.85rem;color:var(--muted)}
.featured{max-width:1200px;margin:0 auto;padding:2rem 2rem 0}
.featured-card{display:grid;grid-template-columns:1.2fr 1fr;gap:0;background:var(--white);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-md);cursor:pointer;text-decoration:none;color:inherit;transition:transform 0.3s,box-shadow 0.3s}
.featured-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-lg)}
.featured-visual{background:linear-gradient(135deg,var(--terracotta),#6b1a08);display:flex;align-items:center;justify-content:center;font-size:5rem;min-height:320px;position:relative;overflow:hidden}
.featured-visual::before{content:"";position:absolute;inset:0;background:radial-gradient(circle at 30% 70%,rgba(255,255,255,0.06) 0%,transparent 50%)}
.featured-star{position:absolute;top:1.25rem;left:1.25rem;background:rgba(0,0,0,0.3);backdrop-filter:blur(10px);color:#fff;font-size:0.65rem;letter-spacing:2px;text-transform:uppercase;padding:5px 14px;border-radius:3px;font-weight:600}
.featured-body{padding:2.5rem;display:flex;flex-direction:column;justify-content:center}
.featured-badge{font-size:0.6rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;color:var(--terracotta);margin-bottom:0.75rem}
.featured-body h2{font-family:"DM Serif Display",serif;font-size:1.7rem;line-height:1.25;margin-bottom:0.75rem}
.featured-body p{color:var(--muted);font-size:0.95rem;margin-bottom:1.5rem;line-height:1.7}
.featured-meta{display:flex;gap:1.5rem;font-size:0.8rem;color:var(--muted)}
.featured-cta{display:inline-flex;align-items:center;gap:6px;margin-top:1.25rem;font-size:0.9rem;font-weight:600;color:var(--terracotta)}
.articles-section{max-width:1200px;margin:0 auto;padding:2rem}
.articles-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.article-card{background:var(--white);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-sm);transition:transform 0.3s,box-shadow 0.3s;text-decoration:none;color:inherit;display:flex;flex-direction:column}
.article-card:hover{transform:translateY(-5px);box-shadow:var(--shadow-lg)}
.card-banner{height:160px;display:flex;align-items:center;justify-content:center;font-size:2.8rem;position:relative}
.card-banner::after{content:"";position:absolute;bottom:0;left:0;right:0;height:60px;background:linear-gradient(to top,rgba(0,0,0,0.15),transparent)}
.bg-admin{background:linear-gradient(135deg,var(--terracotta),#8b2f14)}
.bg-couple{background:linear-gradient(135deg,var(--jade),#0e4a38)}
.bg-argent{background:linear-gradient(135deg,var(--amber),#7a5500)}
.bg-voyager{background:linear-gradient(135deg,#1a5f8a,#0d3a57)}
.bg-vie-pratique{background:linear-gradient(135deg,#2a7a7a,#1a4f4f)}
.card-body{padding:1.5rem;flex:1;display:flex;flex-direction:column}
.card-meta{display:flex;align-items:center;gap:0.6rem;margin-bottom:0.6rem}
.card-badge{font-size:0.58rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;padding:3px 9px;border-radius:3px}
.badge-admin{background:rgba(191,74,42,0.1);color:var(--terracotta)}
.badge-couple{background:rgba(27,107,82,0.1);color:var(--jade)}
.badge-argent{background:rgba(184,134,11,0.1);color:var(--amber)}
.badge-voyager{background:rgba(26,95,138,0.1);color:#1a5f8a}
.badge-vie-pratique{background:rgba(42,122,122,0.12);color:#2a7a7a}
.card-date{font-size:0.78rem;color:var(--muted)}
.card-body h3{font-family:"DM Serif Display",serif;font-size:1.15rem;line-height:1.3;margin-bottom:0.5rem}
.card-body p{color:var(--muted);font-size:0.88rem;line-height:1.65;flex:1}
.card-footer{padding:1rem 1.5rem;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-between}
.card-read-time{font-size:0.78rem;color:var(--muted)}
.card-read-more{font-size:0.8rem;font-weight:600;color:var(--terracotta)}
.newsletter-band{background:var(--ink);color:var(--cream);padding:4rem 2rem;text-align:center}
.newsletter-band h2{font-family:"DM Serif Display",serif;font-size:clamp(1.6rem,3vw,2.2rem);margin-bottom:0.5rem}
.newsletter-band > p{color:rgba(250,248,244,0.5);max-width:420px;margin:0 auto 1.5rem}
.nl-form{display:flex;gap:0.75rem;max-width:460px;margin:0 auto}
.nl-form input{flex:1;padding:0.8rem 1rem;border:1px solid rgba(255,255,255,0.15);background:rgba(255,255,255,0.05);border-radius:4px;color:var(--cream);font-family:inherit;font-size:0.95rem}
.nl-form input::placeholder{color:rgba(250,248,244,0.3)}
.nl-form button{padding:0.8rem 1.8rem;background:var(--terracotta);color:#fff;border:none;border-radius:4px;font-weight:600;font-family:inherit;cursor:pointer}
.nl-rgpd{font-size:0.75rem;color:rgba(250,248,244,0.3);max-width:460px;margin:0.75rem auto 0}
.nl-rgpd a{color:rgba(250,248,244,0.45)}
@media(max-width:1000px){.articles-grid{grid-template-columns:repeat(2,1fr)}.featured-card{grid-template-columns:1fr}.featured-visual{min-height:220px}}
@media(max-width:640px){.articles-grid{grid-template-columns:1fr}.hero-stats{flex-direction:column;gap:1rem}.search-box input{width:140px}.filters-bar{flex-direction:column;align-items:flex-start}.nl-form{flex-direction:column}}
';
include 'header.php';
?>

<header class="page-hero">
  <div class="page-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam.php">Accueil</a>
      <span>›</span>
      <span style="color:rgba(250,248,244,0.6)">Tous les articles</span>
    </div>
    <h1><?= $_cat_label ? htmlspecialchars($_cat_label) : 'Tous les articles' ?></h1>
    <p><?= $_cat_label ? 'Articles filtrés par catégorie · <a href="articles-capvietnam.php" style="color:rgba(250,248,244,0.5);text-decoration:underline">Voir tous les articles</a>' : 'Guides pratiques, retours d\'expérience et conseils pour réussir ton expatriation au Vietnam.' ?></p>
    <div class="hero-stats">
      <div>
        <div class="hero-stat-num"><?= $_count ?></div>
        <div class="hero-stat-label">Articles publiés</div>
      </div>
      <div>
        <div class="hero-stat-num"><?= $_categories ?></div>
        <div class="hero-stat-label">Catégories</div>
      </div>
      <div>
        <div class="hero-stat-num"><?= SITE_YEAR ?></div>
        <div class="hero-stat-label">Mis à jour</div>
      </div>
    </div>
  </div>
</header>

<div class="filters-bar">
  <div class="filter-tabs">
    <button class="filter-tab active" data-filter="all">Tous</button>
    <button class="filter-tab" data-filter="admin">📋 Démarches</button>
    <button class="filter-tab" data-filter="couple">💕 Couple Mixte</button>
    <button class="filter-tab" data-filter="argent">💻 Argent &amp; Travail</button>
    <button class="filter-tab" data-filter="voyager">✈️ Voyager au Vietnam</button>
    <button class="filter-tab" data-filter="vie-pratique">🏠 Vie Pratique</button>
  </div>
  <div class="search-box">
    <span class="search-icon">🔍</span>
    <input type="text" id="searchInput" placeholder="Rechercher un article…" oninput="filterArticles()">
  </div>
</div>
<div class="results-count" id="resultsCount"><?= $_count ?> articles</div>

<?php if ($_featured): ?>
<div class="featured">
  <a class="featured-card" href="<?= htmlspecialchars($_featured['slug']) ?>.php" data-cat="<?= htmlspecialchars($_featured['category']) ?>">
    <div class="featured-visual" <?= !empty($_featured['image']) ? 'style="background:url(\''.htmlspecialchars($_featured['image']).'\') center/cover no-repeat;background-blend-mode:normal;"' : '' ?>>
      <div class="featured-star">⭐ À la une</div>
      <?= $_featured['emoji'] ?>
    </div>
    <div class="featured-body">
      <div class="featured-badge"><?= htmlspecialchars($_featured['categoryLabel']) ?></div>
      <h2><?= htmlspecialchars($_featured['title']) ?></h2>
      <p><?= htmlspecialchars($_featured['excerpt']) ?></p>
      <div class="featured-meta">
        <span>📅 <?= htmlspecialchars($_featured['dateLabel']) ?></span>
        <span>⏱ <?= htmlspecialchars($_featured['readTime']) ?></span>
      </div>
      <div class="featured-cta">Lire l'article →</div>
    </div>
  </a>
</div>
<?php endif; ?>

<section class="articles-section">
  <div class="articles-grid" id="articlesGrid">

<?php foreach ($_grid as $a):
  $cat = htmlspecialchars($a['category']);
  $kw  = htmlspecialchars($a['keywords'] ?? strtolower($a['title']));
?>
    <a class="article-card" href="<?= htmlspecialchars($a['slug']) ?>.php" data-cat="<?= $cat ?>" data-title="<?= $kw ?>">
      <?php if (!empty($a['image'])): ?>
      <div class="card-banner" style="background:url('<?= htmlspecialchars($a['image']) ?>') center/cover no-repeat;">
        <span style="position:absolute;bottom:.5rem;right:.6rem;font-size:1.6rem;filter:drop-shadow(0 1px 3px rgba(0,0,0,.4))"><?= $a['emoji'] ?></span>
      </div>
      <?php else: ?>
      <div class="card-banner bg-<?= $cat ?>"><?= $a['emoji'] ?></div>
      <?php endif; ?>
      <div class="card-body">
        <div class="card-meta">
          <span class="card-badge badge-<?= $cat ?>"><?= htmlspecialchars($a['categoryLabel']) ?></span>
          <span class="card-date"><?= htmlspecialchars($a['dateLabel']) ?></span>
        </div>
        <h3><?= htmlspecialchars($a['title']) ?></h3>
        <p><?= htmlspecialchars($a['excerpt']) ?></p>
      </div>
      <div class="card-footer">
        <span class="card-read-time">⏱ <?= htmlspecialchars($a['readTime']) ?></span>
        <span class="card-read-more">Lire →</span>
      </div>
    </a>
<?php endforeach; ?>

  </div>
</section>

<section class="newsletter-band">
  <h2>La Newsletter Mensuelle</h2>
  <p>Alertes administratives et bons plans du mois. Un email par mois, pas de spam.</p>
  <form class="nl-form" action="<?= SITE_FORMSPREE ?>" method="POST">
    <input type="hidden" name="_subject" value="Inscription newsletter — Cap Vietnam">
    <input type="email" name="email" placeholder="Ton adresse email" required>
    <button type="submit">S'inscrire</button>
  </form>
  <p class="nl-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam.php">politique de confidentialité</a>.</p>
</section>

<script>
let activeFilter = '<?= $_active_cat ?>';
const tabs = document.querySelectorAll('.filter-tab');
const cards = document.querySelectorAll('.article-card');
const featured = document.querySelector('.featured-card');
const featuredWrap = document.querySelector('.featured');
const filterClassMap = { admin:'active-admin', couple:'active-couple', argent:'active-argent', voyager:'active-voyager', 'vie-pratique':'active-vie-pratique' };

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => { t.className = 'filter-tab'; });
    const f = tab.dataset.filter;
    activeFilter = f;
    tab.classList.add(f === 'all' ? 'active' : (filterClassMap[f] || 'active'));
    filterArticles();
  });
});

// Pre-activate tab from URL param
if (activeFilter !== 'all') {
  tabs.forEach(t => { t.className = 'filter-tab'; });
  const preTab = document.querySelector(`.filter-tab[data-filter="${activeFilter}"]`);
  if (preTab) preTab.classList.add(filterClassMap[activeFilter] || 'active');
}

function filterArticles() {
  const search = document.getElementById('searchInput').value.toLowerCase();
  let count = 0;
  if (featured && featuredWrap) {
    const featShow = (activeFilter === 'all' || featured.dataset.cat === activeFilter) &&
                     (search === '' || featured.textContent.toLowerCase().includes(search));
    featuredWrap.style.display = featShow ? '' : 'none';
    if (featShow) count++;
  }
  cards.forEach(card => {
    const title = (card.dataset.title || '') + ' ' + card.textContent.toLowerCase();
    const show = (activeFilter === 'all' || card.dataset.cat === activeFilter) &&
                 (search === '' || title.includes(search));
    card.style.display = show ? '' : 'none';
    if (show) count++;
  });
  document.getElementById('resultsCount').textContent = count + ' article' + (count > 1 ? 's' : '');
}

if (activeFilter !== 'all') filterArticles();

const _observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting){e.target.style.opacity='1';e.target.style.transform='translateY(0)';}});
},{threshold:0.05});
document.querySelectorAll('.article-card,.featured-card').forEach(el=>{
  el.style.opacity='0';el.style.transform='translateY(25px)';el.style.transition='opacity 0.5s ease, transform 0.5s ease';
  _observer.observe(el);
});
</script>

<?php include 'footer.php'; ?>
