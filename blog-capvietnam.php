<?php
require_once __DIR__ . '/config/site.php';

$page_lang_switch = ['href' => 'vi/', 'label' => '🇻🇳 VI', 'title' => 'Phiên bản tiếng Việt'];
$page_hreflang    = ['fr' => SITE_URL . '/', 'vi' => SITE_URL . '/vi/', 'x-default' => SITE_URL . '/'];

// Load latest articles for home page section
$_art_data   = json_decode(file_get_contents(__DIR__ . '/data/articles.json'), true);
$_art_all    = $_art_data['articles'];
usort($_art_all, fn($a, $b) => strcmp($b['date'], $a['date']));
$_art_latest = array_slice($_art_all, 0, 6);

$page_title       = 'Cap Vietnam — Blog expat français à Hanoï';
$page_description = 'Blog d\'un Français expatrié à Hanoï. Démarches admin, couple mixte franco-vietnamien et travail en ligne au Vietnam.';
$page_canonical   = SITE_URL . '/';
$page_og_title    = 'Cap Vietnam — Blog d\'un Français expatrié au Vietnam';
$page_og_desc     = 'Démarches, couple mixte, travail en ligne : tout sur la vie d\'expat à Hanoï.';
$page_og_url      = SITE_URL . '/';
$page_schema      = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'       => 'WebSite',
      '@id'         => SITE_URL . '/#website',
      'name'        => SITE_NAME,
      'url'         => SITE_URL . '/',
      'inLanguage'  => 'fr',
      'description' => 'Blog d\'un expatrié français installé au Vietnam. Démarches administratives, vie de couple mixte et travail en ligne depuis Hanoï.',
      'author'      => ['@type' => 'Person', 'name' => SITE_AUTHOR],
    ],
    [
      '@type'    => 'Blog',
      '@id'      => SITE_URL . '/#blog',
      'name'     => SITE_NAME,
      'url'      => SITE_URL . '/',
      'isPartOf' => ['@id' => SITE_URL . '/#website'],
      'inLanguage' => 'fr',
    ],
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
$page_extra_css = '
/* ═══════════ HERO ═══════════ */
.hero {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  position: relative;
  background: linear-gradient(160deg, #1c1917 0%, #2d2319 50%, #1c1917 100%);
  overflow: hidden;
}
.hero-bg-img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  opacity: 0.28;
  z-index: 0;
}
.hero::before {
  content: \'\';
  position: absolute;
  inset: 0;
  z-index: 1;
  background:
    radial-gradient(ellipse 70% 50% at 15% 85%, rgba(191,74,42,0.18) 0%, transparent 60%),
    radial-gradient(ellipse 50% 40% at 85% 15%, rgba(27,107,82,0.12) 0%, transparent 60%),
    radial-gradient(ellipse 40% 30% at 50% 50%, rgba(184,134,11,0.08) 0%, transparent 60%);
}
.hero-grid {
  position: absolute;
  inset: 0;
  opacity: 0.03;
  background-image:
    repeating-linear-gradient(0deg, transparent, transparent 80px, rgba(255,255,255,0.4) 80px, rgba(255,255,255,0.4) 81px),
    repeating-linear-gradient(90deg, transparent, transparent 80px, rgba(255,255,255,0.4) 80px, rgba(255,255,255,0.4) 81px);
}
.hero-content {
  position: relative;
  z-index: 3;
  padding: 2rem;
  max-width: 800px;
  animation: heroIn 1s ease-out;
}
@keyframes heroIn {
  from { opacity: 0; transform: translateY(50px); }
  to   { opacity: 1; transform: translateY(0); }
}
.hero-tag {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  font-size: 0.7rem;
  letter-spacing: 5px;
  text-transform: uppercase;
  color: var(--amber-soft);
  margin-bottom: 2.5rem;
}
.hero-tag::before, .hero-tag::after {
  content: \'\';
  width: 35px;
  height: 1px;
  background: var(--amber-soft);
  opacity: 0.4;
}
.hero h1 {
  font-family: \'DM Serif Display\', serif;
  font-size: clamp(3rem, 7vw, 5.5rem);
  color: var(--cream);
  line-height: 1.1;
  margin-bottom: 1.5rem;
  letter-spacing: -0.5px;
}
.hero h1 em { color: var(--terracotta-soft); font-style: italic; }
.hero-desc {
  font-size: 1.15rem;
  font-weight: 300;
  color: rgba(250,248,244,0.55);
  max-width: 520px;
  margin: 0 auto 2.5rem;
}
.hero-cta {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 0.9rem 2.2rem;
  background: var(--terracotta);
  color: #fff;
  text-decoration: none;
  font-weight: 600;
  font-size: 0.9rem;
  border-radius: 4px;
  transition: background 0.25s, transform 0.2s;
}
.hero-cta:hover { background: var(--terracotta-soft); transform: translateY(-2px); }
.hero-scroll {
  position: absolute;
  z-index: 3;
  bottom: 2rem;
  left: 50%;
  transform: translateX(-50%);
  width: 24px;
  height: 40px;
  border: 2px solid rgba(250,248,244,0.2);
  border-radius: 20px;
  display: flex;
  justify-content: center;
}
.hero-scroll::after {
  content: \'\';
  width: 3px;
  height: 8px;
  background: rgba(250,248,244,0.4);
  border-radius: 3px;
  margin-top: 6px;
  animation: scrollDot 1.8s ease-in-out infinite;
}
@keyframes scrollDot {
  0%, 100% { opacity: 0.4; transform: translateY(0); }
  50%       { opacity: 1; transform: translateY(10px); }
}

/* ═══════════ CATEGORIES ═══════════ */
.categories-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2rem;
}
.cat-card {
  background: var(--white);
  border-radius: var(--radius);
  overflow: hidden;
  box-shadow: var(--shadow-sm);
  transition: transform 0.3s, box-shadow 0.3s;
  text-decoration: none;
  color: inherit;
  display: block;
}
.cat-card:hover { transform: translateY(-6px); box-shadow: var(--shadow-lg); }
.cat-banner {
  height: 200px;
  display: flex;
  align-items: flex-end;
  padding: 1.5rem;
  position: relative;
  overflow: hidden;
}
.cat-banner::after {
  content: \'\';
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.6) 0%, transparent 70%);
}
.cat-banner-admin  { background-image: linear-gradient(to top, rgba(143,47,20,0.82), rgba(191,74,42,0.55), rgba(80,20,8,0.45)), url(\'https://images.unsplash.com/photo-1568992688065-536aad8a12f6?w=600&q=80\'); background-size:cover; background-position:center; }
.cat-banner-couple { background-image: linear-gradient(to top, rgba(14,74,56,0.82), rgba(27,107,82,0.55), rgba(8,45,32,0.45)), url(\'https://images.unsplash.com/photo-1573495627361-d9b87960b12d?w=600&q=80\'); background-size:cover; background-position:center; }
.cat-banner-argent { background-image: linear-gradient(to top, rgba(122,85,0,0.82), rgba(184,134,11,0.55), rgba(70,48,0,0.45)), url(\'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=600&q=80\'); background-size:cover; background-position:center; }
.cat-banner-voyager{ background-image: linear-gradient(to top, rgba(13,58,87,0.82), rgba(26,95,138,0.55), rgba(8,35,55,0.45)), url(\'https://images.unsplash.com/photo-1573270689103-d7a4e42b609a?w=600&q=80\'); background-size:cover; background-position:center; }
.cat-icon { position: relative; z-index: 1; font-size: 2.8rem; filter: drop-shadow(0 2px 8px rgba(0,0,0,0.3)); }
.cat-body { padding: 1.75rem; }
.cat-tag { font-size: 0.65rem; letter-spacing: 3px; text-transform: uppercase; font-weight: 600; margin-bottom: 0.5rem; }
.cat-tag-admin   { color: var(--terracotta); }
.cat-tag-couple  { color: var(--jade); }
.cat-tag-argent  { color: var(--amber); }
.cat-tag-voyager { color: #1a5f8a; }
.cat-card h3 { font-family: \'DM Serif Display\', serif; font-size: 1.4rem; margin-bottom: 0.75rem; line-height: 1.3; }
.cat-card p  { color: var(--muted); font-size: 0.92rem; line-height: 1.7; }
.cat-count   { margin-top: 1.25rem; padding-top: 1rem; border-top: 1px solid var(--border); font-size: 0.8rem; color: var(--muted); font-weight: 500; }

/* ═══════════ ARTICLES ═══════════ */
.articles-bg { background: var(--warm-bg); }
.articles-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 2rem; }
.article-card { background: var(--white); border-radius: var(--radius); overflow: hidden; box-shadow: var(--shadow-sm); transition: transform 0.3s, box-shadow 0.3s; cursor: pointer; }
.article-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.article-thumb { width: 100%; height: 190px; object-fit: cover; display: block; transition: transform 0.4s ease; }
.article-card:hover .article-thumb { transform: scale(1.04); }
.article-top { padding: 1.75rem 1.75rem 0; }
.article-meta { display: flex; align-items: center; gap: 0.75rem; margin-bottom: 0.75rem; }
.article-badge { font-size: 0.6rem; letter-spacing: 2px; text-transform: uppercase; font-weight: 700; padding: 3px 10px; border-radius: 3px; }
.badge-admin   { background: rgba(191,74,42,0.1); color: var(--terracotta); }
.badge-couple  { background: rgba(27,107,82,0.1); color: var(--jade); }
.badge-argent  { background: rgba(184,134,11,0.1); color: var(--amber); }
.badge-voyager { background: rgba(26,95,138,0.1); color: #1a5f8a; }
.article-date { font-size: 0.8rem; color: var(--muted); }
.article-card h3 { font-family: \'DM Serif Display\', serif; font-size: 1.25rem; line-height: 1.35; margin-bottom: 0.6rem; }
.article-card p  { color: var(--muted); font-size: 0.9rem; line-height: 1.7; padding: 0 1.75rem; }
.article-footer  { padding: 1.25rem 1.75rem; display: flex; align-items: center; justify-content: space-between; }
.read-time  { font-size: 0.8rem; color: var(--muted); }
.read-more  { font-size: 0.8rem; font-weight: 600; color: var(--terracotta); text-decoration: none; transition: 0.2s; }
.read-more:hover { color: var(--terracotta-soft); }

/* ═══════════ ABOUT ═══════════ */
.about-grid { display: grid; grid-template-columns: 1fr 1.2fr; gap: 4rem; align-items: center; }
.about-visual { aspect-ratio: 4/5; border-radius: var(--radius); overflow: hidden; }
.about-visual img { width: 100%; height: 100%; object-fit: cover; display: block; }
.about-text h2 { font-family: \'DM Serif Display\', serif; font-size: 2.2rem; margin-bottom: 1.5rem; line-height: 1.2; }
.about-text p  { color: var(--muted); margin-bottom: 1rem; font-size: 1.02rem; }
.about-stats { display: flex; gap: 2.5rem; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border); }
.stat-num   { font-family: \'DM Serif Display\', serif; font-size: 2rem; color: var(--terracotta); }
.stat-label { font-size: 0.8rem; color: var(--muted); text-transform: uppercase; letter-spacing: 1px; }

/* ═══════════ NEWSLETTER ═══════════ */
.newsletter-section { background: var(--ink); color: var(--cream); text-align: center; padding: 5rem 2rem; }
.newsletter-section h2 { font-family: \'DM Serif Display\', serif; font-size: clamp(1.8rem, 3vw, 2.5rem); margin-bottom: 0.75rem; }
.newsletter-section p  { color: rgba(250,248,244,0.5); max-width: 450px; margin: 0 auto 2rem; }
.newsletter-form { display: flex; gap: 0.75rem; max-width: 480px; margin: 0 auto; }
.newsletter-form input  { flex: 1; padding: 0.85rem 1.2rem; border: 1px solid rgba(255,255,255,0.15); background: rgba(255,255,255,0.05); border-radius: 4px; color: var(--cream); font-family: inherit; font-size: 0.95rem; }
.newsletter-form input::placeholder { color: rgba(250,248,244,0.3); }
.newsletter-form input:focus { outline: none; border-color: var(--terracotta-soft); }
.newsletter-form button { padding: 0.85rem 2rem; background: var(--terracotta); color: #fff; border: none; border-radius: 4px; font-weight: 600; font-family: inherit; cursor: pointer; transition: 0.2s; }
.newsletter-form button:hover { background: var(--terracotta-soft); }
.newsletter-rgpd { font-size: 0.75rem; color: rgba(250,248,244,0.35); max-width: 480px; margin: 1rem auto 0; line-height: 1.5; }
.newsletter-rgpd a { color: rgba(250,248,244,0.5); }

/* ═══════════ CONTACT ═══════════ */
.contact-grid { display: grid; grid-template-columns: 1fr 1.3fr; gap: 4rem; }
.contact-info h2 { font-family: \'DM Serif Display\', serif; font-size: 2.2rem; margin-bottom: 1rem; line-height: 1.2; }
.contact-info > p { color: var(--muted); margin-bottom: 2rem; }
.contact-item { display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1.5rem; }
.contact-item-icon { width: 42px; height: 42px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.1rem; flex-shrink: 0; background: var(--warm-bg); }
.contact-item-text strong { display: block; font-size: 0.9rem; margin-bottom: 2px; }
.contact-item-text span   { color: var(--muted); font-size: 0.9rem; }
.contact-form { background: var(--white); padding: 2.5rem; border-radius: var(--radius); box-shadow: var(--shadow-md); }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1rem; }
.form-group { margin-bottom: 1rem; }
.form-group label { display: block; font-size: 0.8rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; color: var(--muted); margin-bottom: 0.4rem; }
.form-group input, .form-group textarea, .form-group select { width: 100%; padding: 0.8rem 1rem; border: 1px solid var(--border); border-radius: 4px; font-family: inherit; font-size: 0.95rem; background: var(--cream); transition: border-color 0.2s; }
.form-group input:focus, .form-group textarea:focus, .form-group select:focus { outline: none; border-color: var(--jade); }
.form-group textarea { min-height: 140px; resize: vertical; }
.form-consent { display: flex; align-items: flex-start; gap: 0.6rem; margin-bottom: 1.5rem; font-size: 0.82rem; color: var(--muted); line-height: 1.5; }
.form-consent input { margin-top: 3px; accent-color: var(--jade); }
.form-consent a { color: var(--jade); }
.form-submit { width: 100%; padding: 1rem; background: var(--jade); color: #fff; border: none; border-radius: 4px; font-size: 1rem; font-weight: 600; font-family: inherit; cursor: pointer; transition: 0.2s; }
.form-submit:hover { background: var(--jade-soft); }

@media (max-width: 1100px) {
  .categories-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 900px) {
  .about-grid, .contact-grid { grid-template-columns: 1fr; }
  .form-row { grid-template-columns: 1fr; }
}
@media (max-width: 640px) {
  .newsletter-form { flex-direction: column; }
  .about-stats { flex-direction: column; gap: 1.5rem; }
  .hero h1 { font-size: 2.5rem; }
}
';
include 'header.php';
?>

<!-- ═══════ HERO ═══════ -->
<header class="hero" id="home">
  <img class="hero-bg-img" src="https://images.unsplash.com/photo-1583417319070-4a69db38a482?w=1600&q=80" width="1600" height="900" alt="Rue animée de Hanoï" loading="eager">
  <div class="hero-grid"></div>
  <div class="hero-content">
    <div class="hero-tag">Blog Expat</div>
    <h1>Un Français<br>à <em>Hanoï</em></h1>
    <p class="hero-desc">Démarches administratives, vie de couple mixte et travail en ligne — le journal d'une installation au Vietnam.</p>
    <a href="#articles" class="hero-cta">Lire les articles →</a>
  </div>
  <div class="hero-scroll"></div>
</header>

<!-- ═══════ CATEGORIES ═══════ -->
<section class="section" id="categories">
  <div class="section-label">Explorer</div>
  <h2 class="section-title">Quatre piliers, un seul voyage</h2>
  <p class="section-desc">Tout ce qu'il faut savoir pour s'installer au Vietnam en tant que Français, organisé autour de quatre thématiques essentielles.</p>

  <div class="categories-grid">
    <a class="cat-card" href="articles-capvietnam.php?cat=admin">
      <div class="cat-banner cat-banner-admin"><div class="cat-icon">📋</div></div>
      <div class="cat-body">
        <div class="cat-tag cat-tag-admin">Catégorie 01</div>
        <h3>Démarches Administratives</h3>
        <p>Visa, mariage, impôts, banque, assurance santé… Toutes les étapes pour s'installer légalement au Vietnam sans galérer.</p>
        <div class="cat-count">→ Voir les articles</div>
      </div>
    </a>

    <a class="cat-card" href="articles-capvietnam.php?cat=couple">
      <div class="cat-banner cat-banner-couple"><div class="cat-icon">💕</div></div>
      <div class="cat-body">
        <div class="cat-tag cat-tag-couple">Catégorie 02</div>
        <h3>Couple Mixte &amp; Famille</h3>
        <p>Vivre en couple franco-vietnamien, les différences culturelles, la belle-famille, construire une vie à deux entre deux mondes.</p>
        <div class="cat-count">→ Voir les articles</div>
      </div>
    </a>

    <a class="cat-card" href="articles-capvietnam.php?cat=argent">
      <div class="cat-banner cat-banner-argent"><div class="cat-icon">💻</div></div>
      <div class="cat-body">
        <div class="cat-tag cat-tag-argent">Catégorie 03</div>
        <h3>Argent &amp; Travail en Ligne</h3>
        <p>Gagner sa vie à distance, transférer son argent, budget mensuel à Hanoï et fiscalité de l'expatrié digital.</p>
        <div class="cat-count">→ Voir les articles</div>
      </div>
    </a>

    <a class="cat-card" href="articles-capvietnam.php?cat=voyager">
      <div class="cat-banner cat-banner-voyager"><div class="cat-icon">✈️</div></div>
      <div class="cat-body">
        <div class="cat-tag cat-tag-voyager">Catégorie 04</div>
        <h3>Voyager au Vietnam</h3>
        <p>Tết, adresses locales, vie de quartier à Hanoï et expériences culturelles à vivre de l'intérieur.</p>
        <div class="cat-count">→ Voir les articles</div>
      </div>
    </a>
  </div>
</section>

<!-- ═══════ ARTICLES ═══════ -->
<div class="articles-bg">
  <section class="section" id="articles">
    <div class="section-label">Derniers articles</div>
    <h2 class="section-title">Récemment publié</h2>
    <p class="section-desc">Les derniers articles pour préparer et réussir ton expatriation au Vietnam.</p>

    <div class="articles-grid">
<?php foreach ($_art_latest as $_a):
  $cat = htmlspecialchars($_a['category']);
?>
      <article class="article-card">
        <img class="article-thumb" src="<?= htmlspecialchars($_a['image']) ?>" width="600" height="190" alt="<?= htmlspecialchars($_a['imageAlt']) ?>" loading="lazy" decoding="async">
        <div class="article-top">
          <div class="article-meta">
            <span class="article-badge badge-<?= $cat ?>"><?= htmlspecialchars($_a['categoryLabel']) ?></span>
            <span class="article-date"><?= htmlspecialchars($_a['dateLabel']) ?></span>
          </div>
          <h3><?= htmlspecialchars($_a['title']) ?></h3>
        </div>
        <p><?= htmlspecialchars($_a['excerpt']) ?></p>
        <div class="article-footer">
          <span class="read-time">⏱ <?= htmlspecialchars($_a['readTime']) ?> de lecture</span>
          <a href="<?= htmlspecialchars($_a['slug']) ?>.php" class="read-more">Lire →</a>
        </div>
      </article>
<?php endforeach; ?>
    </div>
  </section>
</div>

<!-- ═══════ ABOUT ═══════ -->
<section class="section" id="about">
  <div class="about-grid">
    <div class="about-visual">
      <img src="https://images.unsplash.com/photo-1583417319070-4a69db38a482?w=800&q=80" alt="Rue de Hanoï, Vietnam" loading="lazy">
    </div>
    <div class="about-text">
      <div class="section-label">À propos</div>
      <h2>Un Français, une Vietnamienne, une nouvelle vie à Hanoï</h2>
      <p>Je suis un Français qui a décidé de tout quitter pour s'installer au Vietnam avec ma future femme vietnamienne. Ce blog est mon journal de bord : les démarches administratives que je traverse, les réalités du couple mixte, et comment je construis mes revenus en ligne.</p>
      <p>Ici, pas de théorie — que du vécu. Chaque article est basé sur mon expérience directe ou celle d'autres expats que je rencontre en chemin.</p>
      <div class="about-stats">
        <div><div class="stat-num">Hanoï</div><div class="stat-label">Ville d'adoption</div></div>
        <div><div class="stat-num">2026</div><div class="stat-label">Année de départ</div></div>
        <div><div class="stat-num">4</div><div class="stat-label">Catégories</div></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ NEWSLETTER ═══════ -->
<section class="newsletter-section" id="newsletter">
  <h2>Reçois les nouveaux articles</h2>
  <p>Un email par mois, pas de spam. Désabonnement en un clic.</p>
  <form class="newsletter-form" action="<?= SITE_FORMSPREE ?>" method="POST">
    <input type="email" name="email" placeholder="Ton adresse email" required>
    <button type="submit">S'inscrire</button>
  </form>
  <p class="newsletter-rgpd">En t'inscrivant, tu acceptes de recevoir mes emails. Tes données sont traitées conformément à la <a href="#" onclick="openModal('privacy');return false;">politique de confidentialité</a>. Tu peux te désinscrire à tout moment.</p>
</section>

<!-- ═══════ CONTACT ═══════ -->
<section class="section" id="contact">
  <div class="contact-grid">
    <div class="contact-info">
      <div class="section-label">Contact</div>
      <h2>Une question ?<br>Écris-moi.</h2>
      <p>Que ce soit pour une collaboration, une question sur l'expatriation ou simplement dire bonjour — je réponds à tous les messages.</p>
      <div class="contact-item">
        <div class="contact-item-icon">✉️</div>
        <div class="contact-item-text">
          <strong>Email</strong>
          <span><?= SITE_EMAIL ?></span>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-item-icon">📍</div>
        <div class="contact-item-text">
          <strong>Localisation</strong>
          <span>Hanoï, Vietnam</span>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-item-icon">📱</div>
        <div class="contact-item-text">
          <strong>Réseaux sociaux</strong>
          <span>TikTok · YouTube</span>
        </div>
      </div>
    </div>

    <form class="contact-form" action="<?= SITE_FORMSPREE ?>" method="POST">
      <input type="hidden" name="_subject" value="Nouveau message depuis Cap Vietnam">
      <div class="form-row">
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" id="nom" name="nom" required>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
        </div>
      </div>
      <div class="form-group">
        <label for="sujet">Sujet</label>
        <select id="sujet" name="sujet">
          <option value="question">Question sur l'expatriation</option>
          <option value="collab">Collaboration / Partenariat</option>
          <option value="temoignage">Partager mon témoignage</option>
          <option value="autre">Autre</option>
        </select>
      </div>
      <div class="form-group">
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Écris ton message ici..." required></textarea>
      </div>
      <label class="form-consent">
        <input type="checkbox" name="consent" required>
        <span>J'accepte que mes données soient utilisées pour répondre à ma demande conformément à la <a href="#" onclick="openModal('privacy');return false;">politique de confidentialité</a>. Aucune donnée ne sera transmise à des tiers.</span>
      </label>
      <button type="submit" class="form-submit">Envoyer le message</button>
    </form>
  </div>
</section>

<?php include 'footer.php'; ?>
