<?php
require_once __DIR__ . '/config/site.php';

$path_prefix      = '';
$page_lang        = 'fr';
$page_title       = 'Comment marche le vietnamien ? — Cahier d\'initiation pour francophones | Cap Vietnam';
$page_description = 'Cahier d\'entraînement Amazon : accents, sons, tons et construction des phrases du vietnamien, expliqués pour les francophones. 146 pages, exercices corrigés, vietnamien du Nord (Hanoï).';
$page_canonical   = SITE_URL . '/comment-marche-le-vietnamien';
$page_og_title    = 'Comment marche le vietnamien ? — le cahier qui démonte les tons';
$page_og_desc     = 'Accents, sons, tons, construction des phrases : le cahier d\'initiation au vietnamien pensé pour les francophones. Exercices + corrigés. Disponible sur Amazon.';
$page_og_image    = 'https://blog-capvietnam.fr/assets/img/livre-vietnamien-methode-polyglotte.jpg';

/* Lien Amazon du cahier */
$amazon_url = 'https://www.amazon.fr/dp/B0HC9876V7';

/* Schema.org Book */
$page_schema = json_encode([
  '@context'    => 'https://schema.org',
  '@type'       => 'Book',
  'name'        => 'Comment marche le vietnamien ? — Méthode d\'initiation pour francophones',
  'inLanguage'  => 'fr',
  'about'       => 'Initiation à la prononciation et à l\'écriture du vietnamien pour francophones : accents, sons, tons et construction des phrases',
  'numberOfPages' => 146,
  'author'      => [
    '@type' => 'Person',
    'name'  => defined('SITE_AUTHOR') ? SITE_AUTHOR : 'Anthony Bouillon',
    'url'   => 'https://blog-capvietnam.fr/a-propos-capvietnam'
  ],
  'publisher'   => [
    '@type' => 'Organization',
    'name'  => 'Cap Vietnam'
  ],
  'image'       => $page_og_image,
  'url'         => $page_canonical,
  'productID'   => 'amazon:B0HC9876V7',
  'offers'      => [
    '@type'         => 'Offer',
    'url'           => $amazon_url,
    'priceCurrency' => 'EUR',
    'availability'  => 'https://schema.org/InStock',
    'seller'        => [
      '@type' => 'Organization',
      'name'  => 'Amazon'
    ]
  ]
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$page_extra_css = <<<'CSS'
/* ═══════════ HERO CAHIER ═══════════ */
.book-hero {
  background: linear-gradient(135deg, #edf2ec 0%, #dde8de 100%);
  padding: 9rem 2rem 5rem;
  position: relative;
  overflow: hidden;
}
.book-hero::before {
  content: '';
  position: absolute;
  top: 20%; right: -10%;
  width: 500px; height: 500px;
  background: radial-gradient(circle, rgba(27,107,82,0.09) 0%, transparent 70%);
  pointer-events: none;
}
.book-hero-inner {
  max-width: 1200px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1.1fr 1fr;
  gap: 4rem;
  align-items: center;
  position: relative;
  z-index: 1;
}
.book-hero-content .eyebrow {
  display: inline-block;
  font-size: 0.7rem;
  letter-spacing: 4px;
  text-transform: uppercase;
  color: #1b6b52;
  background: rgba(27,107,82,0.08);
  padding: 0.4rem 1rem;
  border-radius: 100px;
  margin-bottom: 1.25rem;
  font-weight: 600;
}
.book-hero h1 {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(2.2rem, 5vw, 3.6rem);
  line-height: 1.12;
  margin-bottom: 1.5rem;
  color: var(--ink);
}
.book-hero h1 em { color: #1b6b52; font-style: italic; }
.book-hero .lead {
  font-size: 1.15rem;
  line-height: 1.75;
  color: var(--muted);
  margin-bottom: 2rem;
  max-width: 540px;
}
.book-hero-ctas { display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 2rem; }
.btn-primary {
  background: #1b6b52;
  color: #fff;
  padding: 1rem 1.75rem;
  border-radius: 100px;
  text-decoration: none;
  font-weight: 700;
  font-size: 0.95rem;
  display: inline-flex;
  align-items: center;
  gap: 0.6rem;
  transition: all 0.2s;
  box-shadow: 0 4px 16px rgba(27,107,82,0.25);
}
.btn-primary:hover { background: #14523f; transform: translateY(-2px); box-shadow: 0 6px 20px rgba(27,107,82,0.35); }
.btn-secondary {
  background: transparent;
  color: var(--ink);
  padding: 1rem 1.75rem;
  border: 1.5px solid var(--ink);
  border-radius: 100px;
  text-decoration: none;
  font-weight: 600;
  font-size: 0.95rem;
  display: inline-flex;
  align-items: center;
  gap: 0.6rem;
  transition: all 0.2s;
}
.btn-secondary:hover { background: var(--ink); color: #fff; }
.book-trust { display: flex; flex-wrap: wrap; gap: 1.5rem; font-size: 0.85rem; color: var(--muted); }
.book-trust-item { display: flex; align-items: center; gap: 0.5rem; }
.book-trust-item strong { color: var(--ink); }

.book-cover-wrap { position: relative; display: flex; justify-content: center; align-items: center; perspective: 1500px; }
.book-cover {
  width: 100%;
  max-width: 360px;
  aspect-ratio: 3/4.4;
  background: linear-gradient(150deg, #12503d 0%, #0a352a 100%);
  border-radius: 4px 12px 12px 4px;
  box-shadow:
    -3px 0 0 rgba(0,0,0,0.05),
    -6px 0 0 rgba(0,0,0,0.05),
    25px 30px 60px rgba(28,25,23,0.25),
    inset 0 0 60px rgba(0,0,0,0.18);
  transform: rotateY(-12deg) rotateX(2deg);
  padding: 2.75rem 2.5rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  color: #fff;
  position: relative;
  transition: transform 0.4s;
}
.book-cover:hover { transform: rotateY(-6deg) rotateX(0deg); }
.book-cover::before {
  content: '';
  position: absolute;
  top: 0; left: 12px; bottom: 0;
  width: 4px;
  background: rgba(0,0,0,0.22);
}
.book-cover-tag { font-size: 0.72rem; letter-spacing: 3px; text-transform: uppercase; opacity: 0.7; font-weight: 600; }
.book-cover-title { font-family: 'DM Serif Display', serif; font-size: 1.9rem; line-height: 1.15; }
.book-cover-title em { font-style: italic; opacity: 0.85; }
.book-cover-tones {
  font-family: 'DM Serif Display', serif;
  font-size: 1.5rem;
  letter-spacing: 0.35em;
  color: #7fc9ab;
  margin-top: 0.75rem;
}
.book-cover-footer { font-size: 0.82rem; border-top: 1px solid rgba(255,255,255,0.3); padding-top: 1rem; }
.book-cover-footer strong { display: block; font-size: 0.98rem; margin-bottom: 0.2rem; }

/* ═══════════ HOOK ═══════════ */
.book-hook { background: var(--ink); color: var(--cream); padding: 5rem 2rem; }
.book-hook-inner { max-width: 900px; margin: 0 auto; text-align: center; }
.book-hook h2 {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(1.8rem, 4vw, 2.6rem);
  line-height: 1.25;
  margin-bottom: 1.25rem;
}
.book-hook h2 em { color: #7fc9ab; font-style: italic; }
.book-hook > .book-hook-inner > p.hook-sub { color: rgba(250,248,244,0.75); max-width: 640px; margin: 0 auto 2.5rem; line-height: 1.75; }
.book-hook-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem; text-align: left; }
.book-hook-card { background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08); border-radius: var(--radius); padding: 1.75rem; }
.book-hook-card .num { font-family: 'DM Serif Display', serif; font-size: 2rem; color: #7fc9ab; display: block; margin-bottom: 0.5rem; }
.book-hook-card p { font-size: 0.95rem; line-height: 1.65; color: rgba(250,248,244,0.85); }

/* ═══════════ EXTRAIT ═══════════ */
.book-extract { padding: 6rem 2rem; background: var(--warm-bg); }
.book-extract-inner { max-width: 860px; margin: 0 auto; }
.book-extract-header { text-align: center; margin-bottom: 3rem; }
.book-extract-header .eyebrow { font-size: 0.7rem; letter-spacing: 4px; text-transform: uppercase; color: #1b6b52; margin-bottom: 1rem; font-weight: 600; }
.book-extract-header h2 { font-family: 'DM Serif Display', serif; font-size: clamp(1.8rem, 4vw, 2.6rem); line-height: 1.2; margin-bottom: 0.75rem; }
.book-extract-header p { color: var(--muted); }
.extract-page {
  background: #fffdf8;
  border: 1px solid #e8e0d0;
  border-radius: 6px;
  box-shadow: 0 10px 40px rgba(28,25,23,0.09), 0 2px 8px rgba(28,25,23,0.05);
  padding: 3rem clamp(1.5rem, 5vw, 3.5rem);
  position: relative;
}
.extract-page + .extract-page { margin-top: 2rem; }
.extract-ref {
  position: absolute;
  top: 1.1rem; right: 1.5rem;
  font-size: 0.7rem;
  letter-spacing: 2px;
  text-transform: uppercase;
  color: #b0a894;
  font-weight: 600;
}
.extract-page h3 { font-family: 'DM Serif Display', serif; font-size: 1.5rem; margin-bottom: 1rem; color: var(--ink); }
.extract-page p { line-height: 1.85; color: #3d3a35; margin-bottom: 1.25rem; font-size: 1.02rem; }
.extract-page p:last-child { margin-bottom: 0; }
.extract-table { width: 100%; border-collapse: collapse; margin: 1.75rem 0; font-size: 0.97rem; }
.extract-table th {
  text-align: left;
  font-size: 0.72rem;
  letter-spacing: 1.5px;
  text-transform: uppercase;
  color: #1b6b52;
  border-bottom: 2px solid #1b6b52;
  padding: 0.5rem 0.75rem;
  font-weight: 700;
}
.extract-table td { padding: 0.7rem 0.75rem; border-bottom: 1px solid #eee5d5; vertical-align: top; line-height: 1.5; }
.extract-table tr:last-child td { border-bottom: none; }
.extract-table .vn { font-family: 'DM Serif Display', serif; font-size: 1.15rem; color: var(--ink); white-space: nowrap; }
.extract-table .say { font-weight: 700; color: #1b6b52; white-space: nowrap; }
.extract-note {
  background: rgba(27,107,82,0.06);
  border-left: 3px solid #1b6b52;
  padding: 1.1rem 1.4rem;
  border-radius: 0 6px 6px 0;
  margin-top: 1.5rem;
  font-size: 0.95rem;
  line-height: 1.7;
  color: #3d3a35;
}
.extract-note strong { color: #1b6b52; display: block; font-size: 0.72rem; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 0.4rem; }
.extract-cta { text-align: center; margin-top: 2.5rem; }
.extract-cta .small-note { display: block; margin-top: 0.75rem; font-size: 0.82rem; color: var(--muted); }

/* ═══════════ HONNÊTETÉ ═══════════ */
.book-honest { padding: 6rem 2rem; }
.book-honest-inner { max-width: 1000px; margin: 0 auto; }
.book-honest-header { text-align: center; max-width: 700px; margin: 0 auto 3.5rem; }
.book-honest-header h2 { font-family: 'DM Serif Display', serif; font-size: clamp(1.8rem, 4vw, 2.5rem); margin-bottom: 1rem; }
.book-honest-header p { color: var(--muted); }
.honest-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }
.honest-col { border-radius: var(--radius); padding: 2rem; }
.honest-col.is { background: rgba(27,107,82,0.06); border: 1px solid rgba(27,107,82,0.15); }
.honest-col.isnot { background: var(--white); border: 1px solid var(--border); }
.honest-col h3 { font-family: 'DM Serif Display', serif; font-size: 1.25rem; margin-bottom: 1rem; }
.honest-col ul { list-style: none; }
.honest-col li { padding: 0.55rem 0; line-height: 1.6; color: var(--muted); font-size: 0.95rem; display: flex; gap: 0.6rem; align-items: flex-start; }
.honest-col li::before { flex-shrink: 0; font-weight: 700; }
.honest-col.is li::before { content: '✓'; color: #1b6b52; }
.honest-col.isnot li::before { content: '✗'; color: #bf4a2a; }
.honest-promise {
  margin-top: 1.5rem;
  background: var(--ink);
  color: var(--cream);
  border-radius: var(--radius);
  padding: 2rem 2.5rem;
  font-size: 1.05rem;
  line-height: 1.8;
}
.honest-promise em { color: #7fc9ab; }

/* ═══════════ SOMMAIRE ═══════════ */
.book-toc { background: var(--warm-bg); padding: 6rem 2rem; }
.book-toc-inner { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1.4fr; gap: 4rem; align-items: start; }
.book-toc-aside h2 { font-family: 'DM Serif Display', serif; font-size: clamp(1.8rem, 4vw, 2.4rem); line-height: 1.2; margin-bottom: 1rem; }
.book-toc-aside p { color: var(--muted); margin-bottom: 1.5rem; }
.book-toc-list { background: var(--white); border-radius: var(--radius); padding: 2rem 2.5rem; list-style: none; box-shadow: var(--shadow-sm); }
.book-toc-list li { display: flex; align-items: flex-start; gap: 1rem; padding: 0.85rem 0; border-bottom: 1px solid var(--border); }
.book-toc-list li:last-child { border-bottom: none; }
.book-toc-num { font-family: 'DM Serif Display', serif; font-size: 1.3rem; color: #1b6b52; min-width: 38px; line-height: 1.2; }
.book-toc-text strong { display: block; margin-bottom: 0.15rem; }
.book-toc-text span { color: var(--muted); font-size: 0.87rem; }

/* ═══════════ PERSONAS ═══════════ */
.book-personas { padding: 6rem 2rem; }
.book-personas-inner { max-width: 1100px; margin: 0 auto; }
.book-personas-header { text-align: center; margin-bottom: 4rem; }
.book-personas-header h2 { font-family: 'DM Serif Display', serif; font-size: clamp(1.8rem, 4vw, 2.6rem); margin-bottom: 1rem; }
.book-personas-header p { color: var(--muted); max-width: 600px; margin: 0 auto; }
.personas-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; }
.persona-card { background: var(--white); border: 1px solid var(--border); border-left: 4px solid #1b6b52; border-radius: var(--radius); padding: 1.75rem; }
.persona-card:nth-child(2) { border-left-color: var(--terracotta); }
.persona-card:nth-child(3) { border-left-color: var(--amber); }
.persona-card h3 { font-family: 'DM Serif Display', serif; font-size: 1.15rem; margin-bottom: 0.6rem; }
.persona-card p { color: var(--muted); font-size: 0.92rem; line-height: 1.7; }

/* ═══════════ DUO LIVRES ═══════════ */
.book-duo { background: var(--warm-bg); padding: 5rem 2rem; }
.book-duo-inner { max-width: 900px; margin: 0 auto; text-align: center; }
.book-duo h2 { font-family: 'DM Serif Display', serif; font-size: clamp(1.7rem, 3.5vw, 2.3rem); margin-bottom: 1rem; }
.book-duo > .book-duo-inner > p { color: var(--muted); max-width: 640px; margin: 0 auto 2.5rem; line-height: 1.75; }
.duo-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; text-align: left; }
.duo-card { background: var(--white); border: 1px solid var(--border); border-radius: var(--radius); padding: 2rem; }
.duo-card .duo-step { font-size: 0.7rem; letter-spacing: 3px; text-transform: uppercase; font-weight: 700; margin-bottom: 0.75rem; }
.duo-card.this .duo-step { color: #1b6b52; }
.duo-card.other .duo-step { color: var(--terracotta); }
.duo-card h3 { font-family: 'DM Serif Display', serif; font-size: 1.2rem; margin-bottom: 0.6rem; }
.duo-card p { color: var(--muted); font-size: 0.92rem; line-height: 1.7; margin-bottom: 1rem; }
.duo-card a { color: var(--terracotta); font-weight: 600; text-decoration: underline; font-size: 0.92rem; }
.duo-card.this { border: 2px solid #1b6b52; }

/* ═══════════ AUTEUR ═══════════ */
.book-author { background: var(--ink); color: var(--cream); padding: 5rem 2rem; }
.book-author-inner { max-width: 900px; margin: 0 auto; display: grid; grid-template-columns: auto 1fr; gap: 3rem; align-items: center; }
.author-photo { width: 160px; height: 160px; border-radius: 50%; overflow: hidden; background: linear-gradient(135deg, #1b6b52, #7fc9ab); display: flex; align-items: center; justify-content: center; }
.author-photo img { width: 100%; height: 100%; object-fit: cover; }
.book-author-content .eyebrow { font-size: 0.7rem; letter-spacing: 4px; text-transform: uppercase; color: #7fc9ab; margin-bottom: 0.75rem; font-weight: 600; }
.book-author-content h2 { font-family: 'DM Serif Display', serif; font-size: clamp(1.5rem, 3vw, 2rem); margin-bottom: 1rem; }
.book-author-content p { color: rgba(250,248,244,0.8); line-height: 1.75; margin-bottom: 1rem; }
.book-author-content a { color: #7fc9ab; text-decoration: underline; }

/* ═══════════ FAQ ═══════════ */
.book-faq { padding: 6rem 2rem; }
.book-faq-inner { max-width: 800px; margin: 0 auto; }
.book-faq-header { text-align: center; margin-bottom: 3rem; }
.book-faq-header h2 { font-family: 'DM Serif Display', serif; font-size: clamp(1.8rem, 4vw, 2.4rem); margin-bottom: 0.75rem; }
.book-faq-header p { color: var(--muted); }
.faq-item { border-bottom: 1px solid var(--border); }
.faq-question {
  width: 100%; background: none; border: none; padding: 1.5rem 0;
  font-family: inherit; font-size: 1.05rem; font-weight: 600; text-align: left;
  cursor: pointer; color: var(--ink); display: flex; justify-content: space-between; align-items: center; gap: 1rem;
}
.faq-question::after { content: '+'; font-size: 1.5rem; color: #1b6b52; transition: transform 0.3s; flex-shrink: 0; }
.faq-item.open .faq-question::after { transform: rotate(45deg); }
.faq-answer { max-height: 0; overflow: hidden; transition: max-height 0.3s, padding 0.3s; color: var(--muted); line-height: 1.8; }
.faq-item.open .faq-answer { max-height: 500px; padding-bottom: 1.5rem; }

/* ═══════════ CTA FINAL ═══════════ */
.book-final-cta { background: linear-gradient(135deg, #1b6b52 0%, #0a352a 100%); color: #fff; padding: 5rem 2rem; text-align: center; }
.book-final-cta-inner { max-width: 700px; margin: 0 auto; }
.book-final-cta h2 { font-family: 'DM Serif Display', serif; font-size: clamp(1.8rem, 4vw, 2.6rem); line-height: 1.2; margin-bottom: 1rem; }
.book-final-cta p { font-size: 1.05rem; opacity: 0.9; margin-bottom: 2rem; }
.book-final-cta .btn-primary { background: var(--cream); color: var(--ink); font-size: 1.05rem; padding: 1.1rem 2rem; box-shadow: 0 6px 24px rgba(0,0,0,0.25); }
.book-final-cta .btn-primary:hover { background: #fff; }
.book-final-cta-note { display: block; margin-top: 1rem; font-size: 0.82rem; opacity: 0.75; }
.book-final-cta-note a { color: rgba(255,255,255,0.85); text-decoration: underline; }

/* ═══════════ RESPONSIVE ═══════════ */
@media (max-width: 900px) {
  .book-hero-inner { grid-template-columns: 1fr; gap: 3rem; text-align: center; }
  .book-hero .lead { margin: 0 auto 2rem; }
  .book-hero-ctas, .book-trust { justify-content: center; }
  .book-toc-inner { grid-template-columns: 1fr; gap: 2rem; }
  .honest-grid, .duo-grid { grid-template-columns: 1fr; }
  .book-author-inner { grid-template-columns: 1fr; text-align: center; gap: 1.5rem; }
  .author-photo { margin: 0 auto; }
}
@media (max-width: 640px) {
  .book-hero { padding-top: 7rem; }
  .book-cover { max-width: 280px; }
  .book-toc-list { padding: 1.5rem; }
  .extract-page { padding: 2rem 1.25rem; }
  .extract-table { font-size: 0.85rem; }
  .extract-table td, .extract-table th { padding: 0.5rem 0.4rem; }
}
CSS;

include __DIR__ . '/header.php';
?>

<!-- ═══════ HERO ═══════ -->
<section class="book-hero">
  <div class="book-hero-inner">
    <div class="book-hero-content">
      <span class="eyebrow">📗 Cahier d'entraînement — Méthode Polyglotte</span>
      <h1>Comment marche le vietnamien ? <em>Accents, sons, tons</em> — enfin expliqués aux francophones</h1>
      <p class="lead">
        Toutes les méthodes expédient les tons en trois pages pour courir au vocabulaire. Ce cahier fait l'inverse : il reste sur ces trois pages pendant 146 pages, parce que c'est là que tout se joue. À la fin, tu sais lire à voix haute n'importe quel mot vietnamien — même un mot jamais vu — et l'écrire avec tous ses signes.
      </p>
      <div class="book-hero-ctas">
        <a href="<?= htmlspecialchars($amazon_url) ?>" target="_blank" rel="noopener noreferrer sponsored" class="btn-primary" data-track="hero">
          Voir sur Amazon <span>→</span>
        </a>
        <a href="#extrait" class="btn-secondary">Lire un extrait</a>
      </div>
      <div class="book-trust">
        <div class="book-trust-item">📄 <span><strong>146 pages</strong> d'entraînement</span></div>
        <div class="book-trust-item">✏️ <span>Exercices <strong>+ corrigés</strong></span></div>
        <div class="book-trust-item">🇻🇳 <span>Vietnamien du <strong>Nord (Hanoï)</strong></span></div>
      </div>
    </div>
    <div class="book-cover-wrap">
      <div class="book-cover" aria-label="Couverture du cahier Comment marche le vietnamien ?">
        <div>
          <div class="book-cover-tag">Cahier d'initiation</div>
        </div>
        <div>
          <div class="book-cover-title">Comment marche le <em>vietnamien&nbsp;?</em></div>
          <div class="book-cover-tones">ma mà má mả mã mạ</div>
        </div>
        <div class="book-cover-footer">
          <strong>Anthony Bouillon</strong>
          <span>Méthode polyglotte — pour francophones</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ HOOK ═══════ -->
<section class="book-hook">
  <div class="book-hook-inner">
    <h2>Six mots. Une seule syllabe. <em>Tout le problème du vietnamien tient là.</em></h2>
    <p class="hook-sub">ma, mà, má, mả, mã, mạ : fantôme, mais, joue, tombe, cheval, jeune plant de riz. Six mots sans aucun rapport, distingués uniquement par le mouvement de la voix. C'est ça qu'il faut apprendre en premier — et c'est exactement ce que les applications sautent.</p>
    <div class="book-hook-grid">
      <div class="book-hook-card">
        <span class="num">6</span>
        <p>Six tons, et <strong>aucune oreille musicale requise</strong>. Un ton n'est pas une note à atteindre : c'est un mouvement à produire, relatif à ta propre voix.</p>
      </div>
      <div class="book-hook-card">
        <span class="num">0</span>
        <p>Zéro conjugaison, zéro genre, zéro pluriel, zéro lettre muette, zéro liaison. Ce que le vietnamien n'a pas, tu n'auras jamais à l'apprendre.</p>
      </div>
      <div class="book-hook-card">
        <span class="num">2</span>
        <p>Deux lectures par mot : la lettre, puis le ton. Le cahier installe ce réflexe une bonne fois — après, <strong>ce qui est écrit se lit</strong>, sans exception.</p>
      </div>
      <div class="book-hook-card">
        <span class="num">13</span>
        <p>Treize parties progressives : l'œil, la main, la mémoire, la bouche, puis la phrase. Avec banque d'exercices, corrigés, planches de référence et glossaire.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ EXTRAIT ═══════ -->
<section class="book-extract" id="extrait">
  <div class="book-extract-inner">
    <div class="book-extract-header">
      <div class="eyebrow">Extrait du cahier</div>
      <h2>Tu produis déjà les six tons, tous les jours</h2>
      <p>Deux passages tirés du livre, tels quels. Si cette façon d'expliquer te parle, le reste du cahier est du même bois.</p>
    </div>

    <div class="extract-page">
      <span class="extract-ref">Extrait — Partie 1</span>
      <h3>Les cinq marques de ton</h3>
      <p>Celles-ci ne changent pas la lettre. Elles changent le mot entier. Le même groupe de lettres, avec cinq marques différentes plus l'absence de marque, donne six mots sans aucun rapport de sens.</p>
      <table class="extract-table">
        <thead><tr><th>Marque</th><th>Nom</th><th>Exemple</th><th>Sens</th></tr></thead>
        <tbody>
          <tr><td class="vn">a</td><td>ngang</td><td class="vn">ma</td><td>fantôme</td></tr>
          <tr><td class="vn">à</td><td>huyền</td><td class="vn">mà</td><td>mais, que</td></tr>
          <tr><td class="vn">á</td><td>sắc</td><td class="vn">má</td><td>joue</td></tr>
          <tr><td class="vn">ả</td><td>hỏi</td><td class="vn">mả</td><td>tombe</td></tr>
          <tr><td class="vn">ã</td><td>ngã</td><td class="vn">mã</td><td>cheval, code</td></tr>
          <tr><td class="vn">ạ</td><td>nặng</td><td class="vn">mạ</td><td>jeune plant de riz</td></tr>
        </tbody>
      </table>
      <p>Six mots. Une seule syllabe. C'est tout le problème du vietnamien, et il est entièrement contenu dans ce tableau.</p>
    </div>

    <div class="extract-page">
      <span class="extract-ref">Extrait — Partie 3</span>
      <h3>Tu produis déjà les six tons, tous les jours</h3>
      <p>Le français utilise exactement les mêmes mouvements de voix — simplement, il s'en sert pour exprimer une émotion, là où le vietnamien s'en sert pour distinguer un mot. Tu n'as donc rien de nouveau à apprendre physiquement.</p>
      <table class="extract-table">
        <thead><tr><th>Ton</th><th>Le même mouvement, en français</th><th>Dis-le à voix haute</th></tr></thead>
        <tbody>
          <tr><td class="vn">ngang</td><td>le ton plat de l'indifférence</td><td class="say">« bof »</td></tr>
          <tr><td class="vn">huyền</td><td>la fin calme d'une phrase affirmative</td><td class="say">« voilà. »</td></tr>
          <tr><td class="vn">sắc</td><td>la montée d'une question</td><td class="say">« ah bon ? »</td></tr>
          <tr><td class="vn">hỏi</td><td>le doute qui creuse puis remonte</td><td class="say">« mouais… ? »</td></tr>
          <tr><td class="vn">ngã</td><td>la surprise, avec un accroc dans la gorge</td><td class="say">« quoi ?! »</td></tr>
          <tr><td class="vn">nặng</td><td>le refus sec, bas et coupé</td><td class="say">« non. »</td></tr>
        </tbody>
      </table>
      <div class="extract-note">
        <strong>Ce qui est vraiment difficile</strong>
        Toute la difficulté du vietnamien tient dans un seul déplacement : ces six mouvements, tu les fais déjà sans y penser et par émotion. Il s'agit maintenant de les faire à la demande, sur une syllabe choisie, sans émotion. Ce n'est pas un problème de gorge, c'est un problème de contrôle.
      </div>
    </div>

    <div class="extract-cta">
      <a href="<?= htmlspecialchars($amazon_url) ?>" target="_blank" rel="noopener noreferrer sponsored" class="btn-primary" data-track="extract">
        Feuilleter le cahier sur Amazon <span>→</span>
      </a>
      <span class="small-note">L'aperçu Amazon permet de feuilleter les premières pages.</span>
    </div>
  </div>
</section>

<!-- ═══════ HONNÊTETÉ ═══════ -->
<section class="book-honest">
  <div class="book-honest-inner">
    <div class="book-honest-header">
      <h2>Ce que ce cahier est — et ce qu'il n'est pas</h2>
      <p>Autant le dire avant l'achat, pas après. C'est écrit dès la page 3 du livre.</p>
    </div>
    <div class="honest-grid">
      <div class="honest-col is">
        <h3>Ce cahier est</h3>
        <ul>
          <li>Un cahier d'entraînement : voir les signes, les écrire, les retenir, les prononcer</li>
          <li>Une méthode d'initiation complète aux accents, sons et tons du Nord (Hanoï)</li>
          <li>La grammaire minimale pour construire une phrase, et la mécanique du débit réel</li>
          <li>Des exercices à chaque partie, une banque d'exercices, tous les corrigés</li>
          <li>Un atelier de tracé pour écrire les signes à la main</li>
          <li>Des planches de référence et un glossaire à garder sous la main</li>
        </ul>
      </div>
      <div class="honest-col isnot">
        <h3>Ce cahier n'est pas</h3>
        <ul>
          <li>Un cours de langue complet avec leçons thématiques et conversation</li>
          <li>Un livre de vocabulaire — les deux cents mots présents illustrent des sons</li>
          <li>Un livre du vietnamien du Sud (les différences sont résumées en deux pages en fin d'ouvrage)</li>
          <li>Une promesse magique du type « parlez couramment en 30 jours »</li>
        </ul>
      </div>
    </div>
    <div class="honest-promise">
      « À la fin, tu ne parleras pas vietnamien. Tu sauras lire à voix haute n'importe quel mot vietnamien, même jamais vu, l'écrire correctement avec tous ses signes, et entendre ce qui te manque encore. <em>C'est le socle sur lequel tout le reste se pose — et c'est exactement ce que la plupart des méthodes sautent pour aller plus vite.</em> »
    </div>
  </div>
</section>

<!-- ═══════ SOMMAIRE ═══════ -->
<section class="book-toc" id="sommaire">
  <div class="book-toc-inner">
    <div class="book-toc-aside">
      <h2>Le parcours, en 13 parties</h2>
      <p>D'abord l'œil (reconnaître), puis la main (écrire), la mémoire (retenir), la bouche (prononcer) — et enfin la phrase. Chaque partie renvoie à ses exercices, tous corrigés en fin d'ouvrage.</p>
      <p>Suivent une banque d'exercices, deux pages sur le vietnamien du Sud, les corrigés, des planches de référence et un glossaire.</p>
      <a href="<?= htmlspecialchars($amazon_url) ?>" target="_blank" rel="noopener noreferrer sponsored" class="btn-primary" data-track="toc">
        Voir sur Amazon <span>→</span>
      </a>
    </div>
    <ol class="book-toc-list">
      <li><span class="book-toc-num">01</span><div class="book-toc-text"><strong>Reconnaître les accents</strong><span>Deux familles de signes, deux métiers : ceux qui fabriquent une lettre, ceux qui portent un ton.</span></div></li>
      <li><span class="book-toc-num">02</span><div class="book-toc-text"><strong>Les écrire</strong><span>Le toit, la corne, le sourire, la barre — et où poser la marque de ton, en trois questions.</span></div></li>
      <li><span class="book-toc-num">03</span><div class="book-toc-text"><strong>Les mémoriser</strong><span>Un crochet mental par ton, la série d'ancrage ma-mà-má-mả-mã-mạ, la main qui trace en l'air.</span></div></li>
      <li><span class="book-toc-num">04</span><div class="book-toc-text"><strong>Positionner sa langue</strong><span>Chaque voyelle est une position de langue et une forme de lèvres. La carte complète.</span></div></li>
      <li><span class="book-toc-num">05</span><div class="book-toc-text"><strong>Les diphtongues</strong><span>La langue en mouvement : glisser d'une voyelle à l'autre sans en fabriquer une troisième.</span></div></li>
      <li><span class="book-toc-num">06</span><div class="book-toc-text"><strong>L'alphabet, son par son</strong><span>Toutes les consonnes, y compris celles que le français n'a pas (ng-, kh-, tr-…).</span></div></li>
      <li><span class="book-toc-num">07</span><div class="book-toc-text"><strong>S'entraîner sur les mots venus du français</strong><span>cà phê, ga, ô tô… le pont le plus court entre ta bouche et le vietnamien.</span></div></li>
      <li><span class="book-toc-num">08</span><div class="book-toc-text"><strong>Ce que l'écrit vietnamien fait autrement</strong><span>La syllabe comme unité, le gabarit universel, les onze lettres à plusieurs caractères.</span></div></li>
      <li><span class="book-toc-num">09</span><div class="book-toc-text"><strong>Construire une phrase</strong><span>La grammaire minimale : assez pour fabriquer tes premières phrases correctes.</span></div></li>
      <li><span class="book-toc-num">10</span><div class="book-toc-text"><strong>Parler et comprendre à vitesse réelle</strong><span>Le débit, le rythme, l'intonation — ce qu'on ne travaille jamais sur des syllabes isolées.</span></div></li>
      <li><span class="book-toc-num">11</span><div class="book-toc-text"><strong>Atelier de tracé</strong><span>Écrire les signes à la main, parce que le tracé installe la reconnaissance mieux que la lecture.</span></div></li>
      <li><span class="book-toc-num">12</span><div class="book-toc-text"><strong>Banque d'exercices</strong><span>À piocher dès qu'une partie est terminée — pas à garder pour la fin.</span></div></li>
      <li><span class="book-toc-num">13</span><div class="book-toc-text"><strong>Deux pages sur le Sud</strong><span>Les différences essentielles avec l'accent de Hô-Chi-Minh-Ville, résumées honnêtement.</span></div></li>
      <li><span class="book-toc-num">+</span><div class="book-toc-text"><strong>Corrigés, planches de référence, glossaire</strong><span>Tout ce qu'il faut pour travailler seul, sans rien chercher ailleurs.</span></div></li>
    </ol>
  </div>
</section>

<!-- ═══════ POUR QUI ═══════ -->
<section class="book-personas">
  <div class="book-personas-inner">
    <div class="book-personas-header">
      <h2>Ce cahier est fait pour toi si…</h2>
      <p>Il est né d'une frustration très simple : vouloir dire correctement le prénom des gens qu'on aime, et s'apercevoir que personne n'explique comment.</p>
    </div>
    <div class="personas-grid">
      <div class="persona-card">
        <h3>💑 Ta belle-famille est vietnamienne</h3>
        <p>Tu veux prononcer les prénoms sans les écorcher, lire le menu du bún chả sans mimer, et qu'on arrête de te répondre en anglais. Tout commence par les tons — pas par le vocabulaire.</p>
      </div>
      <div class="persona-card">
        <h3>📱 Les applications t'ont largué</h3>
        <p>Elles t'ont fait répéter des phrases sans jamais t'expliquer pourquoi « ma » et « mạ » sont deux mots différents. Ce cahier reprend à zéro, dans l'ordre, et t'explique le pourquoi de chaque signe.</p>
      </div>
      <div class="persona-card">
        <h3>✈️ Tu pars vivre ou voyager au Vietnam</h3>
        <p>Savoir lire les panneaux, les noms de rues et les menus dès l'arrivée change tout. Avec le gabarit de la syllabe, tu peux prononcer n'importe quel mot jamais vu — sans exception.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ DUO LIVRES ═══════ -->
<section class="book-duo">
  <div class="book-duo-inner">
    <h2>Deux livres, deux rôles</h2>
    <p>Ce cahier pose le socle : lire, écrire, prononcer. La méthode « 1 100 mots » prend le relais pour le vocabulaire et la conversation. Ils se complètent, dans cet ordre.</p>
    <div class="duo-grid">
      <div class="duo-card this">
        <div class="duo-step">Étape 1 — le socle</div>
        <h3>Comment marche le vietnamien ?</h3>
        <p>Accents, sons, tons, construction des phrases. Le cahier d'entraînement pour recâbler l'œil, la main et l'oreille — avant d'apprendre le moindre mot de vocabulaire.</p>
        <a href="<?= htmlspecialchars($amazon_url) ?>" target="_blank" rel="noopener noreferrer sponsored">Voir sur Amazon →</a>
      </div>
      <div class="duo-card other">
        <div class="duo-step">Étape 2 — le vocabulaire</div>
        <h3>La méthode polyglotte 1 100 mots</h3>
        <p>Les 1 100 mots qui couvrent 80 % des conversations quotidiennes, les pronoms, les dialogues du quotidien. À attaquer une fois les tons en place — tu apprendras chaque mot juste du premier coup.</p>
        <a href="<?= $path_prefix ?>livre-vietnamien">Découvrir la méthode 1 100 mots →</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ AUTEUR ═══════ -->
<section class="book-author">
  <div class="book-author-inner">
    <div class="author-photo"><img alt="Anthony Bouillon" src="https://blog-capvietnam.fr/assets/img/profile/anthony-profil.jpg" width="160" height="160"></div>
    <div class="book-author-content">
      <div class="eyebrow">L'auteur</div>
      <h2>Français marié à une Vietnamienne, installé à Hanoï</h2>
      <p>
        Ce cahier est né d'une frustration très ordinaire : vouloir dire correctement le prénom des gens qu'on aime, et s'apercevoir que personne n'explique comment. Les méthodes existantes passent en trois pages sur les tons pour arriver au vocabulaire. J'ai voulu faire l'inverse : rester sur ces trois pages pendant tout un livre, parce que c'est là que tout se joue.
      </p>
      <p>
        Je publie seul, sans éditeur. Chaque page a été relue, testée et corrigée à table, en famille — souvent en riant, toujours avec bienveillance. Ce cahier leur doit à peu près tout.
      </p>
      <p>
        <a href="<?= $path_prefix ?>a-propos-capvietnam">En savoir plus sur le projet Cap Vietnam →</a>
      </p>
    </div>
  </div>
</section>

<!-- ═══════ FAQ ═══════ -->
<section class="book-faq">
  <div class="book-faq-inner">
    <div class="book-faq-header">
      <h2>Questions fréquentes</h2>
      <p>Pour être sûr(e) que ce cahier correspond à ce que tu cherches.</p>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Je pars de zéro absolu, c'est adapté ?</button>
      <div class="faq-answer">Oui — c'est même le lecteur pour lequel il est écrit. Le cahier commence avant la première leçon des autres méthodes : il t'apprend d'abord à voir les signes, puis à les écrire, les mémoriser et les prononcer. Aucun prérequis, ni en vietnamien ni en phonétique.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Faut-il une oreille musicale pour les tons ?</button>
      <div class="faq-answer">Non, et le livre s'attache à démonter ce mythe dès les premières pages. Un ton n'est pas une note à atteindre mais un mouvement de voix à produire — des mouvements que tu fais déjà tous les jours en français pour exprimer une émotion (voir l'extrait plus haut). La difficulté est un problème de contrôle, pas de don.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Y a-t-il de l'audio ?</button>
      <div class="faq-answer">Un livre ne fait pas de bruit — et le cahier le dit franchement dès le début plutôt que de le cacher. Il t'installe une « boussole sonore » dès le premier jour : il te guide vers les enregistrements de locuteurs natifs (dictionnaires de prononciation en ligne, dont Forvo), avec une méthode d'écoute et d'auto-enregistrement précise pour comparer ta voix au modèle.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Vietnamien du Nord ou du Sud ?</button>
      <div class="faq-answer">Le cahier enseigne le vietnamien du Nord (Hanoï), avec ses six tons — la norme utilisée à la télévision et dans l'enseignement. Le choix est expliqué dans le livre, et une section dédiée en fin d'ouvrage résume les différences essentielles avec l'accent du Sud.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Quelle différence avec la méthode « 1 100 mots » ?</button>
      <div class="faq-answer">Les deux livres ne font pas le même travail. Ce cahier construit le socle : lire, écrire et prononcer n'importe quelle syllabe vietnamienne, tons compris. La <a href="<?= $path_prefix ?>livre-vietnamien">méthode 1 100 mots</a> construit le vocabulaire et la conversation. L'ordre idéal : le cahier d'abord, le vocabulaire ensuite — tu apprendras chaque mot correctement dès la première fois, au lieu de devoir les réapprendre plus tard.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Vais-je parler vietnamien à la fin ?</button>
      <div class="faq-answer">Non, et le livre te le dit lui-même — c'est un cahier honnête. À la fin, tu sauras lire à voix haute n'importe quel texte vietnamien (menu, panneau, message), écrire n'importe quel mot dicté avec ses signes au bon endroit, et chercher un mot dans un dictionnaire. Il te manquera le vocabulaire — la partie facile, celle qui ne demande que du temps, pas de recâbler ton oreille.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Comment te contacter avant l'achat ?</button>
      <div class="faq-answer">Via la page <a href="<?= $path_prefix ?>contact-capvietnam">Contact</a> du blog. Je réponds à tous les messages, généralement sous 48h. N'hésite pas si tu veux vérifier que le cahier correspond à ta situation.</div>
    </div>
  </div>
</section>

<!-- ═══════ CTA FINAL ═══════ -->
<section class="book-final-cta">
  <div class="book-final-cta-inner">
    <h2>Prêt(e) à prononcer enfin leur prénom correctement ?</h2>
    <p>Le cahier d'entraînement qui reste sur les tons le temps qu'il faut. Disponible sur Amazon, livraison rapide en France et en Europe.</p>
    <a href="<?= htmlspecialchars($amazon_url) ?>" target="_blank" rel="noopener noreferrer sponsored" class="btn-primary" data-track="footer">
      Commander sur Amazon <span>→</span>
    </a>
    <span class="book-final-cta-note">Pas encore prêt(e) ? <a href="<?= $path_prefix ?>apprendre-vietnamien-couple">Lis d'abord le guide gratuit pour apprendre le vietnamien en couple</a>.</span>
  </div>
</section>

<!-- ═══════ FAQ ACCORDION JS ═══════ -->
<script>
function toggleFaq(btn) {
  const item = btn.parentElement;
  const open = item.classList.contains('open');
  document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
  if (!open) item.classList.add('open');
}
</script>

<?php include __DIR__ . '/footer.php'; ?>
