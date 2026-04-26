<?php
require_once __DIR__ . '/config/site.php';
$path_prefix      = $path_prefix      ?? '';
$page_lang        = $page_lang        ?? 'fr';
$page_hreflang    = $page_hreflang    ?? [];
$page_lang_switch = $page_lang_switch ?? null;
$page_title       = $page_title       ?? 'Cap Vietnam — Un Français s\'installe au Vietnam | Blog Expat Hanoï';
$page_description = $page_description ?? 'Blog d\'un expatrié français au Vietnam. Démarches administratives, vie en couple mixte franco-vietnamien, et gagner sa vie en ligne depuis Hanoï.';
$page_canonical   = $page_canonical   ?? 'https://www.blog-capvietnam.fr/';
$page_og_title    = $page_og_title    ?? $page_title;
$page_og_desc     = $page_og_desc     ?? $page_description;
$page_og_url      = $page_og_url      ?? $page_canonical;
$page_og_image    = $page_og_image    ?? 'https://images.unsplash.com/photo-1583417319070-4a69db38a482?w=1200&q=80';
$page_schema      = $page_schema      ?? null;
$page_extra_head  = $page_extra_head  ?? '';
$page_extra_css   = $page_extra_css   ?? '';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($page_lang) ?>">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="description" content="<?= htmlspecialchars($page_description) ?>">
<meta name="author" content="Cap Vietnam">
<meta name="robots" content="index, follow">
<meta name="google-site-verification" content="8oAHVfQ6RoBt-EnNRRPUOwcZOCZibxOHSAKwPsh-AwY" />
<link rel="canonical" href="<?= htmlspecialchars($page_canonical) ?>">
<?php foreach ($page_hreflang as $lang => $url): ?>
<link rel="alternate" hreflang="<?= htmlspecialchars($lang) ?>" href="<?= htmlspecialchars($url) ?>">
<?php endforeach; ?>

<!-- Open Graph -->
<meta property="og:title" content="<?= htmlspecialchars($page_og_title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($page_og_desc) ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= htmlspecialchars($page_og_url) ?>">
<meta property="og:image" content="<?= htmlspecialchars($page_og_image) ?>">
<meta property="og:locale" content="fr_FR">
<meta property="og:site_name" content="Cap Vietnam">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= htmlspecialchars($page_og_title) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($page_og_desc) ?>">

<?php if ($page_schema): ?>
<!-- Schema.org -->
<script type="application/ld+json"><?= $page_schema ?></script>
<?php endif; ?>

<?php if ($page_extra_head): ?>
<?= $page_extra_head ?>
<?php endif; ?>

<meta name="theme-color" content="#1c1917">
<link rel="icon" type="image/png" href="logo-entreprise.png">

<!-- Resource hints -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://images.unsplash.com">
<link rel="dns-prefetch" href="//www.paypal.com">
<link rel="dns-prefetch" href="//formspree.io">

<!-- Non-render-blocking font load -->
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Libre+Franklin:wght@300;400;500;600;700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Libre+Franklin:wght@300;400;500;600;700&display=swap"></noscript>

<!-- Font fallback while web fonts load -->
<style>body{font-family:Georgia,serif}nav,footer,.section-label,.article-badge-hero,.breadcrumb,.toc-label,.toc-list,.article-hero-meta,.author-info p,.related-card p{font-family:system-ui,-apple-system,sans-serif}</style>

<style>
:root {
  --ink: #1c1917;
  --cream: #faf8f4;
  --warm-bg: #f3ede4;
  --terracotta: #bf4a2a;
  --terracotta-soft: #d4714f;
  --jade: #1b6b52;
  --jade-soft: #2a9474;
  --amber: #b8860b;
  --amber-soft: #d4a84b;
  --muted: #8c8279;
  --border: #ddd5c9;
  --white: #fff;
  --shadow-sm: 0 1px 3px rgba(28,25,23,0.06);
  --shadow-md: 0 4px 20px rgba(28,25,23,0.08);
  --shadow-lg: 0 12px 40px rgba(28,25,23,0.12);
  --radius: 8px;
}

* { margin: 0; padding: 0; box-sizing: border-box; }
html { scroll-behavior: smooth; }
body {
  font-family: 'Libre Franklin', sans-serif;
  background: var(--cream);
  color: var(--ink);
  line-height: 1.75;
  font-size: 16px;
}

/* ═══════════ COOKIE BANNER (RGPD) ═══════════ */
#cookie-banner {
  position: fixed;
  bottom: 0; left: 0; right: 0;
  background: var(--ink);
  color: var(--cream);
  padding: 1.25rem 2rem;
  z-index: 9999;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  gap: 1rem;
  font-size: 0.9rem;
  line-height: 1.5;
  box-shadow: 0 -4px 30px rgba(0,0,0,0.2);
  transform: translateY(0);
  transition: transform 0.4s ease;
}
#cookie-banner.hidden { transform: translateY(100%); pointer-events: none; }
#cookie-banner p { max-width: 700px; }
#cookie-banner a { color: var(--amber-soft); text-decoration: underline; }
.cookie-btn {
  padding: 0.6rem 1.5rem;
  border: none;
  border-radius: 4px;
  font-size: 0.85rem;
  font-weight: 600;
  cursor: pointer;
  transition: 0.2s;
  font-family: inherit;
}
.cookie-accept { background: var(--jade); color: #fff; }
.cookie-accept:hover { background: var(--jade-soft); }
.cookie-refuse { background: transparent; color: var(--cream); border: 1px solid rgba(255,255,255,0.3); }
.cookie-refuse:hover { border-color: #fff; }

/* ═══════════ NAV ═══════════ */
nav {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  background: rgba(250,248,244,0.92);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--border);
  transition: box-shadow 0.3s;
}
nav.scrolled { box-shadow: var(--shadow-md); }
.nav-inner {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
  height: 64px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.nav-logo {
  font-family: 'DM Serif Display', serif;
  font-size: 1.4rem;
  color: var(--ink);
  text-decoration: none;
}
.nav-logo span { color: var(--terracotta); }
.nav-links { display: flex; gap: 2rem; list-style: none; }
.nav-links a {
  text-decoration: none;
  color: var(--muted);
  font-size: 0.85rem;
  font-weight: 500;
  letter-spacing: 0.5px;
  text-transform: uppercase;
  transition: color 0.2s;
}
.nav-links a:hover, .nav-links a.active { color: var(--ink); }
.nav-guide-cta {
  background: var(--amber-soft);
  color: var(--ink) !important;
  padding: 0.35rem 0.9rem;
  border-radius: 100px;
  font-weight: 700 !important;
  text-transform: none !important;
  letter-spacing: 0 !important;
  transition: background 0.2s, transform 0.2s !important;
}
.nav-guide-cta:hover { background: var(--amber) !important; color: var(--ink) !important; transform: translateY(-1px); }
.nav-toggle { display: none; background: none; border: none; cursor: pointer; padding: 8px; }
.nav-toggle span { display: block; width: 22px; height: 2px; background: var(--ink); margin: 5px 0; transition: 0.3s; }
.nav-lang-switch { font-size: 1.1rem !important; padding: 0.2rem 0.5rem !important; border-radius: 4px !important; background: var(--warm-bg) !important; color: var(--ink) !important; }

/* ═══════════ SECTIONS ═══════════ */
.section {
  max-width: 1200px;
  margin: 0 auto;
  padding: 6rem 2rem;
}
.section-label {
  font-size: 0.7rem;
  letter-spacing: 4px;
  text-transform: uppercase;
  color: var(--muted);
  margin-bottom: 0.75rem;
}
.section-title {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(2rem, 4vw, 3rem);
  line-height: 1.2;
  margin-bottom: 1rem;
}
.section-desc {
  color: var(--muted);
  max-width: 600px;
  margin-bottom: 3rem;
  font-size: 1.05rem;
}

/* ═══════════ FOOTER ═══════════ */
footer {
  background: var(--ink);
  color: rgba(250,248,244,0.6);
  padding: 4rem 2rem 2rem;
}
.footer-grid {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1.5fr 1fr 1fr 1fr;
  gap: 3rem;
  padding-bottom: 3rem;
  border-bottom: 1px solid rgba(255,255,255,0.08);
}
.footer-brand .nav-logo { font-size: 1.6rem; }
.footer-brand p { margin-top: 1rem; font-size: 0.9rem; line-height: 1.7; }
.footer-col h4 {
  color: var(--cream);
  font-size: 0.75rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 1.25rem;
}
.footer-col a {
  display: block;
  color: rgba(250,248,244,0.5);
  text-decoration: none;
  font-size: 0.9rem;
  margin-bottom: 0.6rem;
  transition: color 0.2s;
}
.footer-col a:hover { color: var(--cream); }
.footer-bottom {
  max-width: 1200px;
  margin: 0 auto;
  padding-top: 2rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 1rem;
  font-size: 0.8rem;
}
.footer-legal { display: flex; gap: 1.5rem; }
.footer-legal a { color: rgba(250,248,244,0.4); text-decoration: none; }
.footer-legal a:hover { color: var(--cream); }

/* ═══════════ MODALS ═══════════ */
.modal-overlay {
  position: fixed;
  inset: 0;
  background: rgba(28,25,23,0.6);
  backdrop-filter: blur(8px);
  z-index: 10000;
  display: none;
  justify-content: center;
  align-items: flex-start;
  padding: 4rem 2rem;
  overflow-y: auto;
}
.modal-overlay.active { display: flex; }
.modal-content {
  background: var(--white);
  max-width: 800px;
  width: 100%;
  border-radius: var(--radius);
  padding: 3rem;
  position: relative;
  animation: modalIn 0.3s ease;
}
@keyframes modalIn {
  from { opacity: 0; transform: translateY(20px); }
  to   { opacity: 1; transform: translateY(0); }
}
.modal-close {
  position: absolute;
  top: 1.25rem; right: 1.25rem;
  background: var(--warm-bg);
  border: none;
  width: 36px; height: 36px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 1.2rem;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: 0.2s;
}
.modal-close:hover { background: var(--border); }
.modal-content h2 { font-family: 'DM Serif Display', serif; font-size: 1.8rem; margin-bottom: 1.5rem; }
.modal-content h3 { font-family: 'DM Serif Display', serif; font-size: 1.2rem; margin: 2rem 0 0.75rem; }
.modal-content p, .modal-content li { color: var(--muted); font-size: 0.92rem; margin-bottom: 0.75rem; line-height: 1.8; }
.modal-content ul { padding-left: 1.5rem; }
.modal-content li { margin-bottom: 0.4rem; }

/* ═══════════ RESPONSIVE ═══════════ */
@media (max-width: 900px) {
  .footer-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 640px) {
  .nav-links { display: none; position: absolute; top: 64px; left: 0; right: 0; background: var(--cream); flex-direction: column; padding: 1.5rem 2rem; gap: 1rem; border-bottom: 1px solid var(--border); }
  .nav-links.open { display: flex; }
  .nav-toggle { display: block; }
  .footer-grid { grid-template-columns: 1fr; }
  #cookie-banner { flex-direction: column; text-align: center; }
}
</style>

<?php if ($page_extra_css): ?>
<style>
<?= $page_extra_css ?>
</style>
<?php endif; ?>

</head>
<body>

<!-- ═══════ COOKIE BANNER RGPD ═══════ -->
<div id="cookie-banner">
  <p>Ce site utilise des cookies pour améliorer votre expérience. Consultez notre <a href="<?= $path_prefix ?>confidentialite-capvietnam.php" onclick="openModal('privacy');return false;">politique de confidentialité</a> pour en savoir plus.</p>
  <button class="cookie-btn cookie-accept" onclick="acceptCookies()">Accepter</button>
  <button class="cookie-btn cookie-refuse" onclick="refuseCookies()">Refuser</button>
</div>

<!-- ═══════ NAV ═══════ -->
<nav id="nav">
  <div class="nav-inner">
    <a href="<?= $path_prefix ?>blog-capvietnam.php" class="nav-logo">Cap<span>Vietnam</span></a>
    <ul class="nav-links" id="navLinks">
      <li><a href="<?= $path_prefix ?>blog-capvietnam.php">Accueil</a></li>
      <li><a href="<?= $path_prefix ?>articles-capvietnam.php">Articles</a></li>
      <li><a href="<?= $path_prefix ?>calculateur-budget-vietnam.php">🧮 Calculateur</a></li>
      <li><a href="<?= $path_prefix ?>a-propos-capvietnam.php">À propos</a></li>
      <li><a href="<?= $path_prefix ?>apprendre-francais-capvietnam.php">Apprendre le français</a></li>
      <li><a href="<?= $path_prefix ?>blog-capvietnam.php#contact">Contact</a></li>
      <li><a href="<?= $path_prefix ?>guide-cap-vietnam-2026.php" class="nav-guide-cta">Guide 9&nbsp;€ 📘</a></li>
      <?php if ($page_lang_switch): ?>
      <li><a href="<?= htmlspecialchars($page_lang_switch['href']) ?>" title="<?= htmlspecialchars($page_lang_switch['title']) ?>" class="nav-lang-switch"><?= $page_lang_switch['label'] ?></a></li>
      <?php endif; ?>
    </ul>
    <button class="nav-toggle" onclick="document.getElementById('navLinks').classList.toggle('open')" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>
