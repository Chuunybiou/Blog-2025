<?php
require_once __DIR__ . '/config/site.php';
$path_prefix      = $path_prefix      ?? '';
$page_lang        = $page_lang        ?? 'fr';
$page_hreflang    = $page_hreflang    ?? [];
$page_lang_switch = $page_lang_switch ?? null;
$page_title       = $page_title       ?? 'Cap Vietnam — Le blog du couple franco-vietnamien';
$page_description = $page_description ?? 'Le blog d\'un Français en couple avec une Vietnamienne. Démarches mariage, comptes joints, budget couple mixte, vie entre Paris et Hanoï.';
$page_canonical   = $page_canonical   ?? 'https://blog-capvietnam.fr/';
$page_og_title    = $page_og_title    ?? $page_title;
$page_og_desc     = $page_og_desc     ?? $page_description;
$page_og_url      = $page_og_url      ?? $page_canonical;
$page_og_image    = $page_og_image    ?? 'https://blog-capvietnam.fr/assets/img/blog-vietnam.png';
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
<meta name="author" content="<?= SITE_AUTHOR ?>">
<meta name="robots" content="index, follow">
<meta name="google-site-verification" content="8oAHVfQ6RoBt-EnNRRPUOwcZOCZibxOHSAKwPsh-AwY">
<link rel="canonical" href="<?= htmlspecialchars($page_canonical) ?>">
<?php foreach ($page_hreflang as $lang => $url): ?>
<link rel="alternate" hreflang="<?= htmlspecialchars($lang) ?>" href="<?= htmlspecialchars($url) ?>">
<?php endforeach; ?>

<meta property="og:title"       content="<?= htmlspecialchars($page_og_title) ?>">
<meta property="og:description" content="<?= htmlspecialchars($page_og_desc) ?>">
<meta property="og:type"        content="website">
<meta property="og:url"         content="<?= htmlspecialchars($page_og_url) ?>">
<meta property="og:image"       content="<?= htmlspecialchars($page_og_image) ?>">
<meta property="og:locale"      content="fr_FR">
<meta property="og:site_name"   content="<?= SITE_NAME ?>">
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:title"       content="<?= htmlspecialchars($page_og_title) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($page_og_desc) ?>">

<?php if ($page_schema): ?>
<script type="application/ld+json"><?= $page_schema ?></script>
<?php endif; ?>
<?php if ($page_extra_head): ?><?= $page_extra_head ?><?php endif; ?>

<meta name="theme-color" content="#c9986a">
<link rel="icon" type="image/png"     href="<?= $path_prefix ?>assets/img/blog-vietnam.png">
<link rel="apple-touch-icon"          href="<?= $path_prefix ?>assets/img/blog-vietnam.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://images.unsplash.com">
<link rel="dns-prefetch" href="//formspree.io">
<link rel="dns-prefetch" href="//www.amazon.fr">

<!-- Inter — police commune de l'écosystème -->
<link rel="preload" as="style"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
      onload="this.onload=null;this.rel='stylesheet'">
<noscript>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
</noscript>
<style>body{font-family:system-ui,-apple-system,sans-serif}</style>

<style>
/* ═══ CHARTE COMMUNE — ÉCOSYSTÈME CAP VIETNAM ═══ */
:root {
  --background:    #fafaf9;
  --surface:       #ffffff;
  --ink:           #1c1917;
  --ink-muted:     #57534e;
  --accent:        #c9986a;
  --accent-dark:   #8b6a3e;
  --border:        #e7e5e4;
  --success:       #4d7c5f;
  --font-sans:     'Inter', system-ui, -apple-system, sans-serif;
  --container-max: 1100px;
  --radius:        8px;
  --shadow-sm:     0 1px 3px rgba(28,25,23,0.06);
  --shadow-md:     0 4px 16px rgba(28,25,23,0.10);
  --card-hover:    translateY(-2px);
}

/* ═══ BASE ═══ */
*  { margin: 0; padding: 0; box-sizing: border-box; }
html { scroll-behavior: smooth; }
body {
  font-family: var(--font-sans);
  background: var(--background);
  color: var(--ink);
  line-height: 1.75;
  font-size: 16px;
}

/* ═══ COOKIE BANNER RGPD ═══ */
#cookie-banner {
  position: fixed;
  bottom: 0; left: 0; right: 0;
  background: var(--ink);
  color: var(--background);
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
#cookie-banner a { color: var(--accent); text-decoration: underline; }
.cookie-btn {
  padding: 0.6rem 1.5rem;
  border: none;
  border-radius: var(--radius);
  font-size: 0.85rem;
  font-weight: 600;
  cursor: pointer;
  transition: 0.2s;
  font-family: inherit;
}
.cookie-accept { background: var(--success); color: #fff; }
.cookie-accept:hover { background: #3d6b4f; }
.cookie-refuse {
  background: transparent;
  color: var(--background);
  border: 1px solid rgba(255,255,255,0.3);
}
.cookie-refuse:hover { border-color: #fff; }

/* ═══ NAV ═══ */
nav {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 1000;
  background: rgba(250,250,249,0.93);
  backdrop-filter: blur(20px);
  border-bottom: 1px solid var(--border);
  transition: box-shadow 0.3s;
}
nav.scrolled { box-shadow: var(--shadow-md); }
.nav-inner {
  max-width: var(--container-max);
  margin: 0 auto;
  padding: 0 2rem;
  height: 64px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

/* Logo SVG + texte */
.nav-logo {
  display: flex;
  align-items: center;
  text-decoration: none;
  gap: 10px;
  flex-shrink: 0;
}
.nav-logo svg { width: 34px; height: 34px; }
.nav-logo-text {
  display: flex;
  flex-direction: column;
  line-height: 1.15;
}
.nav-logo-name {
  font-size: 0.98rem;
  font-weight: 700;
  color: var(--ink);
  letter-spacing: -0.02em;
}
.nav-logo-name span { color: var(--accent); }
.nav-logo-sub {
  font-size: 0.62rem;
  font-weight: 600;
  color: var(--ink-muted);
  letter-spacing: 0.08em;
  text-transform: uppercase;
}

/* Liens */
.nav-links { display: flex; gap: 0.5rem; list-style: none; align-items: center; }
.nav-links a {
  text-decoration: none;
  color: var(--ink-muted);
  font-size: 0.82rem;
  font-weight: 500;
  padding: 0.3rem 0.5rem;
  border-radius: 6px;
  transition: color 0.2s, background 0.2s;
}
.nav-links a:hover,
.nav-links a.active { color: var(--ink); background: rgba(28,25,23,0.05); }

.nav-cta-book {
  background: var(--accent) !important;
  color: #fff !important;
  padding: 0.35rem 1rem !important;
  border-radius: 100px !important;
  font-weight: 700 !important;
  transition: background 0.2s, transform 0.2s !important;
}
.nav-cta-book:hover {
  background: var(--accent-dark) !important;
  transform: translateY(-1px);
}
.nav-cta-guide {
  background: var(--ink) !important;
  color: #fff !important;
  padding: 0.35rem 1rem !important;
  border-radius: 100px !important;
  font-weight: 700 !important;
  transition: background 0.2s, transform 0.2s !important;
}
.nav-cta-guide:hover {
  background: #333 !important;
  transform: translateY(-1px);
}
.nav-lang-switch {
  background: #2d2d2d !important;
  color: #fff !important;
  padding: 0.35rem 0.9rem !important;
  border-radius: 100px !important;
  font-weight: 700 !important;
  font-size: 0.82rem !important;
  transition: background 0.2s, transform 0.2s !important;
}
.nav-lang-switch:hover { background: #444 !important; transform: translateY(-1px); }

.nav-toggle { display: none; background: none; border: none; cursor: pointer; padding: 8px; }
.nav-toggle span { display: block; width: 22px; height: 2px; background: var(--ink); margin: 5px 0; transition: 0.3s; }

/* ═══ LAYOUT ═══ */
.section {
  max-width: var(--container-max);
  margin: 0 auto;
  padding: 5rem 2rem;
}
.section-label {
  font-size: 0.68rem;
  letter-spacing: 4px;
  text-transform: uppercase;
  color: var(--ink-muted);
  margin-bottom: 0.75rem;
  font-weight: 600;
}
.section-title {
  font-size: clamp(1.8rem, 3.5vw, 2.6rem);
  font-weight: 700;
  line-height: 1.2;
  letter-spacing: -0.02em;
  margin-bottom: 1rem;
}
.section-desc {
  color: var(--ink-muted);
  max-width: 560px;
  margin-bottom: 2.5rem;
  font-size: 1.05rem;
}

/* ═══ CARDS ═══ */
.card {
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  box-shadow: var(--shadow-sm);
  transition: transform 0.2s, box-shadow 0.2s;
}
.card:hover {
  transform: var(--card-hover);
  box-shadow: var(--shadow-md);
}

/* ═══ MODALS ═══ */
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
  background: var(--surface);
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
  background: var(--background);
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
.modal-content h2 { font-size: 1.6rem; font-weight: 700; margin-bottom: 1.5rem; }
.modal-content h3 { font-size: 1.1rem; font-weight: 600; margin: 2rem 0 0.75rem; }
.modal-content p,
.modal-content li { color: var(--ink-muted); font-size: 0.92rem; margin-bottom: 0.75rem; line-height: 1.8; }
.modal-content ul { padding-left: 1.5rem; }
.modal-content li { margin-bottom: 0.4rem; }

/* ═══ RESPONSIVE ═══ */
@media (max-width: 640px) {
  .nav-links {
    display: none;
    position: absolute;
    top: 64px; left: 0; right: 0;
    background: var(--background);
    flex-direction: column;
    padding: 1.5rem 2rem;
    gap: 0.5rem;
    border-bottom: 1px solid var(--border);
    align-items: flex-start;
  }
  .nav-links.open { display: flex; }
  .nav-toggle { display: block; }
  #cookie-banner { flex-direction: column; text-align: center; }
}
</style>

<?php if ($page_extra_css): ?>
<style><?= $page_extra_css ?></style>
<?php endif; ?>

</head>
<body>

<!-- ═══════ COOKIE BANNER RGPD ═══════ -->
<div id="cookie-banner">
  <p>Ce site utilise des cookies pour améliorer votre expérience. Consultez notre
    <a href="<?= $path_prefix ?>confidentialite-capvietnam"
       onclick="openModal('privacy');return false;">politique de confidentialité</a>.</p>
  <button class="cookie-btn cookie-accept" onclick="acceptCookies()">Accepter</button>
  <button class="cookie-btn cookie-refuse" onclick="refuseCookies()">Refuser</button>
</div>

<!-- ═══════ NAV ═══════ -->
<nav id="nav">
  <div class="nav-inner">
    <!-- Logo inline SVG + wordmark -->
    <a href="<?= $path_prefix ?>blog-capvietnam" class="nav-logo" aria-label="Cap Vietnam — Accueil">
      <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <path d="M6 32 L20 8 L34 32" stroke="#c9986a" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M3 35 Q11.5 31 20 35 Q28.5 39 37 35" stroke="#c9986a" stroke-width="2" stroke-linecap="round" fill="none"/>
      </svg>
      <div class="nav-logo-text">
        <span class="nav-logo-name">Cap<span>Vietnam</span></span>
        <span class="nav-logo-sub">Blog</span>
      </div>
    </a>

    <ul class="nav-links" id="navLinks">
      <li><a href="<?= $path_prefix ?>blog-capvietnam">Accueil</a></li>
      <li><a href="<?= $path_prefix ?>articles-capvietnam">Articles</a></li>
      <li><a href="<?= $path_prefix ?>calculateur-budget-vietnam">Calculateur</a></li>
      <li><a href="<?= $path_prefix ?>a-propos-capvietnam">À propos</a></li>
      <li><a href="<?= $path_prefix ?>blog-capvietnam#contact">Contact</a></li>
      <li><a href="<?= $path_prefix ?>livre-vietnamien" class="nav-cta-book">📕 Livre VN</a></li>
      <li><a href="<?= $path_prefix ?>guide-cap-vietnam-2026" class="nav-cta-guide">Guide 2026</a></li>
      <?php if ($page_lang_switch): ?>
      <li>
        <a href="<?= htmlspecialchars($page_lang_switch['href']) ?>"
           title="<?= htmlspecialchars($page_lang_switch['title']) ?>"
           class="nav-lang-switch"><?= $page_lang_switch['label'] ?></a>
      </li>
      <?php endif; ?>
    </ul>

    <button class="nav-toggle"
            onclick="document.getElementById('navLinks').classList.toggle('open')"
            aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<?php if (($page_lang ?? 'fr') === 'fr'): ?>
<?php $_vi_href = $page_lang_switch ? htmlspecialchars($page_lang_switch['href']) : ($path_prefix . 'vi/'); ?>
<div id="vi-banner" style="display:none;background:#c8102e;color:#fff;text-align:center;padding:0.65rem 1rem;font-size:0.88rem;line-height:1.4">
  🇻🇳 Bạn đang ở Việt Nam? &nbsp;
  <a href="<?= $_vi_href ?>" style="color:#fff;font-weight:700;text-decoration:underline;white-space:nowrap">Xem phiên bản tiếng Việt →</a>
  <button onclick="document.getElementById('vi-banner').style.display='none';document.cookie='vi_ok=1;max-age=7776000;path=/'"
          style="margin-left:0.75rem;background:rgba(255,255,255,0.2);border:none;color:#fff;border-radius:4px;padding:2px 10px;cursor:pointer;font-size:0.82rem">
    Không, cảm ơn ✕
  </button>
</div>
<script>
(function(){
  if(document.cookie.split(';').some(function(c){return c.trim().indexOf('vi_ok=')===0;}))return;
  var b=document.getElementById('vi-banner');
  var langs=((navigator.languages||[navigator.language||'']).join(',')).toLowerCase();
  if(/\bvi\b/.test(langs)){b.style.display='block';return;}
  window.addEventListener('load',function(){
    fetch('https://ipapi.co/country/')
      .then(function(r){return r.text();})
      .then(function(c){if(c.trim()==='VN')b.style.display='block';})
      .catch(function(){});
  });
})();
</script>
<?php endif; ?>
