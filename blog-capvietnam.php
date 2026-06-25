<?php
require_once __DIR__ . '/config/site.php';

$page_lang_switch = ['href' => 'vi/', 'label' => '🇻🇳 Tiếng Việt', 'title' => 'Phiên bản tiếng Việt'];
$page_hreflang    = ['fr' => SITE_URL . '/', 'vi' => SITE_URL . '/vi/', 'x-default' => SITE_URL . '/'];

// Load latest articles for home page section
$_art_data      = json_decode(file_get_contents(__DIR__ . '/data/articles.json'), true);
$_art_all       = $_art_data['articles'];
$_art_published = array_values(array_filter($_art_all, fn($a) => ($a['published'] ?? true) !== false));
$_art_count     = count($_art_published);
usort($_art_published, fn($a, $b) => strcmp($b['date'], $a['date']));
// 1 article le plus récent par catégorie canonique
$_art_latest = [];
foreach (['couple','mariage','vivre-ensemble','argent','vie-pratique'] as $_cat_key) {
    foreach ($_art_published as $_a) {
        if (($_a['home'] ?? true) === false) continue;
        if (($_a['category'] ?? '') === $_cat_key) {
            $_art_latest[] = $_a;
            break;
        }
    }
}

$page_title       = 'Le blog du couple franco-vietnamien — Cap Vietnam';
$page_description = 'Le blog d\'un Français en couple avec une Vietnamienne. Démarches mariage, comptes joints, budget couple mixte, vie entre Paris et Hanoï.';
$page_canonical   = SITE_URL . '/';
$page_og_title    = 'Cap Vietnam — Le blog du couple franco-vietnamien';
$page_og_desc     = 'Mariage, démarches, argent et vie quotidienne entre la France et le Vietnam — par un Français en couple avec une Vietnamienne.';
$page_og_url      = SITE_URL . '/';
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';
$page_schema      = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'       => 'WebSite',
      '@id'         => SITE_URL . '/#website',
      'name'        => SITE_NAME,
      'url'         => SITE_URL . '/',
      'inLanguage'  => 'fr',
      'description' => 'Le blog d\'un Français en couple avec une Vietnamienne. Démarches mariage, comptes joints, budget couple mixte, vie entre Paris et Hanoï.',
      'author'      => ['@id' => SITE_URL . '/#author'],
    ],
    [
      '@type'    => 'Blog',
      '@id'      => SITE_URL . '/#blog',
      'name'     => SITE_NAME,
      'url'      => SITE_URL . '/',
      'isPartOf' => ['@id' => SITE_URL . '/#website'],
      'inLanguage' => 'fr',
      'author'   => ['@id' => SITE_URL . '/#author'],
    ],
    [
      '@type'    => 'Person',
      '@id'      => SITE_URL . '/#author',
      'name'     => SITE_AUTHOR,
      'url'      => SITE_URL . '/a-propos-capvietnam',
      'jobTitle' => 'Expatrié français au Vietnam, auteur & créateur de contenu',
      'sameAs'   => [
        SITE_TIKTOK,
        'https://www.amazon.fr/stores/Anthony-Bouillon/author/B0CY93X8H5',
      ],
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
.hero-ctas { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
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
.hero-cta--ghost {
  background: transparent;
  border: 2px solid rgba(250,248,244,0.3);
  color: var(--cream);
}
.hero-cta--ghost:hover { background: rgba(250,248,244,0.08); border-color: rgba(250,248,244,0.55); }
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
  grid-template-columns: repeat(5, 1fr);
  gap: 1.5rem;
}
@media(max-width:1100px){.categories-grid{grid-template-columns:repeat(3,1fr)}}
@media(max-width:700px){.categories-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:480px){.categories-grid{grid-template-columns:1fr}}
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
  height: 160px;
  display: flex;
  align-items: flex-end;
  padding: 1.25rem;
  position: relative;
  overflow: hidden;
}
.cat-banner::after {
  content: \'\';
  position: absolute;
  inset: 0;
  background: linear-gradient(to top, rgba(0,0,0,0.6) 0%, transparent 70%);
}
.cat-banner-couple         { background-image: linear-gradient(to top, rgba(14,74,56,0.82), rgba(27,107,82,0.55), rgba(8,45,32,0.45)), url(\'assets/img/mariage-franco-vietnamien-ceremonie.png\'); background-size:cover; background-position:center top; }
.cat-banner-mariage        { background-image: linear-gradient(to top, rgba(61,26,58,0.82), rgba(123,63,114,0.55), rgba(40,12,38,0.45)), url(\'assets/img/mariage-franco-vietnamien-ceremonie.png\'); background-size:cover; background-position:center; }
.cat-banner-vivre-ensemble { background-image: linear-gradient(to top, rgba(143,47,20,0.82), rgba(191,74,42,0.55), rgba(80,20,8,0.45)), url(\'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=800&q=80\'); background-size:cover; background-position:center; }
.cat-banner-argent         { background-image: linear-gradient(to top, rgba(122,85,0,0.82), rgba(184,134,11,0.55), rgba(70,48,0,0.45)), url(\'assets/img/banh-mi-cafe-couple-hanoi.jpg\'); background-size:cover; background-position:center; }
.cat-banner-vie-pratique   { background-image: linear-gradient(to top, rgba(26,79,79,0.82), rgba(42,122,122,0.55), rgba(13,50,50,0.45)), url(\'assets/img/lac-ouest-hanoi-rive-ho-tay.jpg\'); background-size:cover; background-position:center; }
.cat-icon { position: relative; z-index: 1; font-size: 2.5rem; filter: drop-shadow(0 2px 8px rgba(0,0,0,0.3)); }
.cat-body { padding: 1.4rem; }
.cat-tag { font-size: 0.65rem; letter-spacing: 3px; text-transform: uppercase; font-weight: 600; margin-bottom: 0.5rem; }
.cat-tag-couple         { color: var(--jade); }
.cat-tag-mariage        { color: #7b3f72; }
.cat-tag-vivre-ensemble { color: var(--terracotta); }
.cat-tag-argent         { color: var(--amber); }
.cat-tag-vie-pratique   { color: #2a7a7a; }
.cat-card h3 { font-family: \'DM Serif Display\', serif; font-size: 1.2rem; margin-bottom: 0.65rem; line-height: 1.3; }
.cat-card p  { color: var(--muted); font-size: 0.88rem; line-height: 1.65; }
.cat-count   { margin-top: 1rem; padding-top: 0.85rem; border-top: 1px solid var(--border); font-size: 0.8rem; color: var(--muted); font-weight: 500; }

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
.badge-couple         { background: rgba(27,107,82,0.1);   color: var(--jade); }
.badge-mariage        { background: rgba(123,63,114,0.12); color: #7b3f72; }
.badge-vivre-ensemble { background: rgba(191,74,42,0.1);  color: var(--terracotta); }
.badge-argent         { background: rgba(184,134,11,0.1); color: var(--amber); }
.badge-vie-pratique   { background: rgba(42,122,122,0.12); color: #2a7a7a; }
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
  <img class="hero-bg-img" src="assets/img/lac-ouest-hanoi-rive-ho-tay.jpg" width="1600" height="900" alt="Lac de l'Ouest (Hồ Tây) à Hanoï" loading="eager">
  <div class="hero-grid"></div>
  <div class="hero-content">
    <div class="hero-tag">Couple franco-vietnamien</div>
    <h1>Le couple franco-vietnamien<br><em>de l'intérieur</em></h1>
    <p class="hero-desc">Se rencontrer, se marier, construire une vie entre la France et le Vietnam. Les démarches, l'argent, la belle-famille — par un Français marié à une Vietnamienne, pas par un guide touristique.</p>
    <div class="hero-ctas">
      <a href="se-marier-vietnamienne-demarches-france" class="hero-cta">Se marier franco-vietnamien →</a>
      <a href="articles-capvietnam?cat=couple" class="hero-cta hero-cta--ghost">La vie de couple mixte →</a>
    </div>
  </div>
  <div class="hero-scroll"></div>
</header>

<!-- ═══════ INTRO SEO ═══════ -->
<section style="background:var(--warm-bg);padding:2.5rem 2rem;text-align:center;border-bottom:1px solid var(--border);">
  <p style="max-width:720px;margin:0 auto;color:var(--muted);font-size:1.02rem;line-height:1.8;">
    Mariage franco-vietnamien, démarches administratives et vie pratique entre France et Vietnam. Tout vient du vécu — démarches faites, erreurs commises, chiffres réels. Rien de touristique.
  </p>
</section>

<!-- ═══════ OUTILS INTERACTIFS ═══════ -->
<section style="background:#fff;padding:4rem 2rem;border-bottom:1px solid var(--border)">
  <div style="max-width:1200px;margin:0 auto">
    <div class="section-label">Outils interactifs</div>
    <h2 class="section-title">Planifie ton projet</h2>
    <p class="section-desc">Quatre outils pour visualiser ta situation et projeter les étapes importantes.</p>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(260px,1fr));gap:1.5rem">
      <a href="parcours-couple-franco-vietnamien" style="text-decoration:none;color:inherit;background:var(--warm-bg);border:1px solid var(--border);border-radius:10px;padding:1.75rem;display:flex;flex-direction:column;gap:0.75rem;transition:box-shadow 0.2s,border-color 0.2s" onmouseover="this.style.boxShadow='var(--shadow-md)';this.style.borderColor='var(--terracotta)'" onmouseout="this.style.boxShadow='none';this.style.borderColor='var(--border)'">
        <div style="font-size:2rem">🗺️</div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:var(--terracotta)">Parcours guidé</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.1rem;line-height:1.3;margin:0">Le parcours du couple franco-vietnamien</h3>
        <p style="font-size:0.88rem;color:var(--muted);line-height:1.6;margin:0;flex:1">De la rencontre à la vie installée — coche chaque étape, choisis ta branche France ou Vietnam.</p>
        <span style="font-size:0.85rem;font-weight:700;color:var(--terracotta);margin-top:0.5rem">Commencer →</span>
      </a>
      <a href="retroplanning-faire-venir-conjoint" style="text-decoration:none;color:inherit;background:var(--warm-bg);border:1px solid var(--border);border-radius:10px;padding:1.75rem;display:flex;flex-direction:column;gap:0.75rem;transition:box-shadow 0.2s,border-color 0.2s" onmouseover="this.style.boxShadow='var(--shadow-md)';this.style.borderColor='var(--jade)'" onmouseout="this.style.boxShadow='none';this.style.borderColor='var(--border)'">
        <div style="font-size:2rem">📅</div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:var(--jade)">Simulateur</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.1rem;line-height:1.3;margin:0">Rétroplanning — visa &amp; titre de séjour conjoint</h3>
        <p style="font-size:0.88rem;color:var(--muted);line-height:1.6;margin:0;flex:1">Entre ta date de lancement CCAM, obtiens chaque échéance jusqu'à l'arrivée en France.</p>
        <span style="font-size:0.85rem;font-weight:700;color:var(--jade);margin-top:0.5rem">Calculer mes délais →</span>
      </a>
      <a href="simulateur-residence-vietnam" style="text-decoration:none;color:inherit;background:var(--warm-bg);border:1px solid var(--border);border-radius:10px;padding:1.75rem;display:flex;flex-direction:column;gap:0.75rem;transition:box-shadow 0.2s,border-color 0.2s" onmouseover="this.style.boxShadow='var(--shadow-md)';this.style.borderColor='var(--amber)'" onmouseout="this.style.boxShadow='none';this.style.borderColor='var(--border)'">
        <div style="font-size:2rem">⏱️</div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:var(--amber)">Simulateur</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.1rem;line-height:1.3;margin:0">Rétroplanning — résidence et installation Vietnam</h3>
        <p style="font-size:0.88rem;color:var(--muted);line-height:1.6;margin:0;flex:1">Entre ta date de départ, obtiens ton plan d'action personnalisé semaine par semaine.</p>
        <span style="font-size:0.85rem;font-weight:700;color:var(--amber);margin-top:0.5rem">Lancer le simulateur →</span>
      </a>
      <a href="calculateur-budget-vietnam" style="text-decoration:none;color:inherit;background:var(--warm-bg);border:1px solid var(--border);border-radius:10px;padding:1.75rem;display:flex;flex-direction:column;gap:0.75rem;transition:box-shadow 0.2s,border-color 0.2s" onmouseover="this.style.boxShadow='var(--shadow-md)';this.style.borderColor='var(--jade)'" onmouseout="this.style.boxShadow='none';this.style.borderColor='var(--border)'">
        <div style="font-size:2rem">💰</div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:var(--jade)">Calculateur</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.1rem;line-height:1.3;margin:0">Calculateur — coût de la vie au Vietnam</h3>
        <p style="font-size:0.88rem;color:var(--muted);line-height:1.6;margin:0;flex:1">Estime ton budget mensuel à Hanoï ou Hô Chi Minh-Ville avec des chiffres réels.</p>
        <span style="font-size:0.85rem;font-weight:700;color:var(--jade);margin-top:0.5rem">Calculer mon budget →</span>
      </a>
    </div>
  </div>
</section>

<!-- ═══════ CATEGORIES ═══════ -->
<section class="section" id="categories">
  <div class="section-label">Explorer</div>
  <h2 class="section-title">Par quoi tu commences ?</h2>
  <p class="section-desc">Cinq thématiques qui couvrent le couple franco-vietnamien de A à Z — choisis celle qui correspond à ta situation.</p>

  <div class="categories-grid">
    <a class="cat-card" href="articles-capvietnam?cat=couple">
      <div class="cat-banner cat-banner-couple"><div class="cat-icon">❤️</div></div>
      <div class="cat-body">
        <div class="cat-tag cat-tag-couple">Couple mixte</div>
        <h3>Notre histoire &amp; couple</h3>
        <p>La rencontre, la distance, les différences culturelles, la belle-famille, le Tết — le quotidien d'un couple franco-vietnamien vu de l'intérieur.</p>
        <div class="cat-count">→ Voir les articles</div>
      </div>
    </a>

    <a class="cat-card" href="articles-capvietnam?cat=mariage">
      <div class="cat-banner cat-banner-mariage"><div class="cat-icon">💍</div></div>
      <div class="cat-body">
        <div class="cat-tag cat-tag-mariage">Mariage</div>
        <h3>Se marier</h3>
        <p>CCAM, mariage au Vietnam ou en France, transcription à Nantes, faire venir son conjoint — toutes les démarches pour officialiser votre union.</p>
        <div class="cat-count">→ Voir les articles</div>
      </div>
    </a>

    <a class="cat-card" href="articles-capvietnam?cat=vivre-ensemble">
      <div class="cat-banner cat-banner-vivre-ensemble"><div class="cat-icon">🏠</div></div>
      <div class="cat-body">
        <div class="cat-tag cat-tag-vivre-ensemble">Installation</div>
        <h3>Vivre ensemble</h3>
        <p>Visa conjoint, titre de séjour, s'installer en France ou au Vietnam. Les démarches, les délais, les pièges.</p>
        <div class="cat-count">→ Voir les articles</div>
      </div>
    </a>

    <a class="cat-card" href="articles-capvietnam?cat=argent">
      <div class="cat-banner cat-banner-argent"><div class="cat-icon">💰</div></div>
      <div class="cat-body">
        <div class="cat-tag cat-tag-argent">Argent</div>
        <h3>L'argent à deux</h3>
        <p>Qui paie quoi, envoyer de l'argent à la belle-famille, financer le mariage, gérer deux pays et deux monnaies sans se faire avoir par les frais.</p>
        <div class="cat-count">→ Voir les articles</div>
      </div>
    </a>

    <a class="cat-card" href="articles-capvietnam?cat=vie-pratique">
      <div class="cat-banner cat-banner-vie-pratique"><div class="cat-icon">🌏</div></div>
      <div class="cat-body">
        <div class="cat-tag cat-tag-vie-pratique">Vie pratique</div>
        <h3>Vie pratique au Vietnam</h3>
        <p>Visa, logement, santé, transport et vie quotidienne au Vietnam — tout ce qu'il faut savoir pour vivre là-bas.</p>
        <div class="cat-count">→ Voir les articles</div>
      </div>
    </a>
  </div>
</section>

<!-- ═══════ GUIDE CTA ═══════ -->
<section style="background:linear-gradient(135deg,#0d2b1f 0%,#1b4a35 100%);padding:3rem 2rem;">
  <div style="max-width:760px;margin:0 auto;display:flex;align-items:center;justify-content:space-between;gap:2rem;flex-wrap:wrap;">
    <div>
      <span style="display:inline-block;font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:4px 12px;border-radius:3px;background:rgba(27,107,82,0.35);color:#6ee7b7;margin-bottom:0.75rem;">📘 Guide complet</span>
      <h2 style="font-family:'DM Serif Display',serif;font-size:clamp(1.4rem,3vw,2rem);color:#faf8f4;line-height:1.25;margin:0 0 0.5rem;">Nouveau au Vietnam ? Commence ici.</h2>
      <p style="color:rgba(250,248,244,0.6);font-size:0.95rem;margin:0;">Visa, logement, banques, santé, fiscalité, coût de la vie — tout en un seul guide. Chiffres réels, rien d'inventé.</p>
    </div>
    <a href="s-expatrier-vietnam-2026-guide-complet" style="flex-shrink:0;display:inline-flex;align-items:center;gap:0.5rem;padding:0.9rem 1.8rem;background:#4db890;color:#0d2b1f;border-radius:5px;font-weight:700;font-size:0.95rem;text-decoration:none;white-space:nowrap;">Lire le guide →</a>
  </div>
</section>

<!-- ═══════ ARTICLES ═══════ -->
<div class="articles-bg">
  <section class="section" id="articles">
    <div class="section-label">Derniers articles</div>
    <h2 class="section-title">Récemment publié</h2>
    <p class="section-desc">Les derniers articles — démarches pour vivre ensemble, vie pratique au Vietnam et finances à deux.</p>

    <div class="articles-grid">
<?php
$_cat_gradients = [
  'couple'         => 'linear-gradient(135deg,rgba(27,107,82,0.18) 0%,rgba(8,60,40,0.10) 100%)',
  'mariage'        => 'linear-gradient(135deg,rgba(123,63,114,0.18) 0%,rgba(70,25,65,0.10) 100%)',
  'vivre-ensemble' => 'linear-gradient(135deg,rgba(191,74,42,0.18) 0%,rgba(140,40,10,0.10) 100%)',
  'argent'         => 'linear-gradient(135deg,rgba(184,134,11,0.18) 0%,rgba(120,85,0,0.10) 100%)',
  'vie-pratique'   => 'linear-gradient(135deg,rgba(42,122,122,0.18) 0%,rgba(15,70,70,0.10) 100%)',
];
foreach ($_art_latest as $_a):
  $cat = htmlspecialchars($_a['category']);
  $_fallback_bg = $_cat_gradients[$_a['category']] ?? 'linear-gradient(135deg,rgba(100,100,100,0.1),rgba(50,50,50,0.05))';
?>
      <article class="article-card">
        <?php if (!empty($_a['image'])): ?>
        <img class="article-thumb" src="<?= htmlspecialchars($_a['image']) ?>" width="600" height="190" alt="<?= htmlspecialchars($_a['imageAlt']) ?>" loading="lazy" decoding="async">
        <?php else: ?>
        <div class="article-thumb" style="display:flex;flex-direction:column;align-items:center;justify-content:center;gap:0.6rem;padding:1.5rem;background:<?= $_fallback_bg ?>;text-align:center;">
          <span style="font-size:2.4rem;line-height:1;"><?= $_a['emoji'] ?? '📄' ?></span>
          <span style="font-size:0.78rem;font-weight:600;color:var(--ink-muted);line-height:1.3;max-width:180px;"><?= htmlspecialchars(mb_substr($_a['title'], 0, 55)) ?>…</span>
        </div>
        <?php endif; ?>
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
          <a href="<?= htmlspecialchars($_a['slug']) ?>" class="read-more">Lire →</a>
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
      <img src="assets/img/banh-mi-cafe-couple-hanoi.jpg" alt="Anthony et sa femme vietnamienne à Hanoï — bánh mì et café" loading="lazy">
    </div>
    <div class="about-text">
      <div class="section-label">À propos</div>
      <h2>Le couple franco-vietnamien derrière ce blog</h2>
      <p>Je suis Anthony, Français en couple avec une Vietnamienne. Je partage ma vie entre la France et le Vietnam. Ce blog est le journal de ce qu'on a appris, raté, payé, compris.</p>
      <p>Quand j'ai commencé les démarches pour mon couple, j'ai cherché des blogs sérieux en français sur le sujet. Beaucoup de blogs "expat au Vietnam" en mode touriste, presque rien sur la réalité d'un couple mixte franco-vietnamien. J'écris ce que j'aurais voulu lire avant de me lancer.</p>
      <div class="about-stats">
        <div><div class="stat-num"><?= $_art_count ?></div><div class="stat-label">Articles publiés</div></div>
        <div><div class="stat-num">Juin 2026</div><div class="stat-label">Dernière mise à jour</div></div>
        <div><a href="https://www.facebook.com/groups/vivreauvietnamcouplefrancovietnamiencap/" target="_blank" rel="noopener" style="text-decoration:none;color:inherit;"><div class="stat-num" style="color:var(--jade);">Communauté</div><div class="stat-label">Facebook · Discord</div></a></div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ NEWSLETTER ═══════ -->
<section class="newsletter-section" id="newsletter">
  <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:0.75rem">📦 Pack gratuit</div>
  <h2>4 ressources offertes dès l'inscription</h2>
  <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(190px,1fr));gap:0.75rem;max-width:700px;margin:1.5rem auto;text-align:left">
    <div style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);border-radius:8px;padding:1rem 1.1rem;display:flex;gap:0.75rem;align-items:flex-start">
      <span style="font-size:1.3rem;line-height:1">📘</span>
      <div><strong style="display:block;font-size:0.85rem;color:#faf8f4;margin-bottom:0.2rem">Guide PDF — Mariage & Visa</strong><span style="font-size:0.78rem;color:rgba(250,248,244,0.45)">Le parcours complet A→Z</span></div>
    </div>
    <div style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);border-radius:8px;padding:1rem 1.1rem;display:flex;gap:0.75rem;align-items:flex-start">
      <span style="font-size:1.3rem;line-height:1">✉️</span>
      <div><strong style="display:block;font-size:0.85rem;color:#faf8f4;margin-bottom:0.2rem">Lettre CCAM au consulat</strong><span style="font-size:0.78rem;color:rgba(250,248,244,0.45)">Modèle officiel à compléter</span></div>
    </div>
    <div style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);border-radius:8px;padding:1rem 1.1rem;display:flex;gap:0.75rem;align-items:flex-start">
      <span style="font-size:1.3rem;line-height:1">📬</span>
      <div><strong style="display:block;font-size:0.85rem;color:#faf8f4;margin-bottom:0.2rem">Lettre relance ambassade</strong><span style="font-size:0.78rem;color:rgba(250,248,244,0.45)">Si pas de réponse après 2 mois</span></div>
    </div>
    <div style="background:rgba(255,255,255,0.06);border:1px solid rgba(255,255,255,0.1);border-radius:8px;padding:1rem 1.1rem;display:flex;gap:0.75rem;align-items:flex-start">
      <span style="font-size:1.3rem;line-height:1">✅</span>
      <div><strong style="display:block;font-size:0.85rem;color:#faf8f4;margin-bottom:0.2rem">Checklist CCAM complète</strong><span style="font-size:0.78rem;color:rgba(250,248,244,0.45)">Tous les documents, dans l'ordre</span></div>
    </div>
  </div>
  <form class="newsletter-form" action="<?= SITE_FORMSPREE ?>" method="POST">
    <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
    <input type="email" name="email" placeholder="Ton adresse email" required>
    <button type="submit">📥 Recevoir le pack</button>
  </form>
  <p class="newsletter-rgpd">Gratuit · Accès immédiat · <a href="pack-gratuit" style="color:rgba(250,248,244,0.5)">Voir le détail du pack →</a> · <a href="confidentialite-capvietnam" onclick="openModal('privacy');return false;" style="color:rgba(250,248,244,0.35)">Confidentialité</a></p>
</section>

<!-- ═══════ CONTACT ═══════ -->
<section class="section" id="contact" style="text-align:center;padding-top:3rem;padding-bottom:3rem;">
  <div class="section-label">Contact</div>
  <h2 style="font-family:'DM Serif Display',serif;font-size:2rem;margin-bottom:0.75rem;">Une question ?</h2>
  <p style="color:var(--muted);max-width:480px;margin:0 auto 2rem;line-height:1.7;">Rejoins la communauté pour discuter avec d'autres expats, ou écris-moi directement.</p>
  <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;margin-bottom:1.5rem;">
    <a href="https://www.facebook.com/groups/vivreauvietnamcouplefrancovietnamiencap/" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.8rem 1.5rem;background:#1877f2;color:#fff;border-radius:5px;font-weight:600;text-decoration:none;font-size:0.9rem;">💬 Groupe Facebook</a>
    <a href="https://discord.gg/bJGHy7ZE7" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.8rem 1.5rem;background:#5865f2;color:#fff;border-radius:5px;font-weight:600;text-decoration:none;font-size:0.9rem;">🎮 Discord expats</a>
    <a href="contact-capvietnam" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.8rem 1.5rem;background:var(--warm-bg);color:var(--ink);border:1px solid var(--border);border-radius:5px;font-weight:600;text-decoration:none;font-size:0.9rem;">✉️ Formulaire de contact</a>
  </div>
  <p style="color:var(--muted);font-size:0.85rem;"><?= SITE_EMAIL ?></p>
</section>

<?php include 'footer.php'; ?>
