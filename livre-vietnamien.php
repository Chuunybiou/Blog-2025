<?php
require_once __DIR__ . '/config/site.php';

$path_prefix      = '';
$page_lang        = 'fr';
$page_title       = 'Apprendre le Vietnamien — Méthode Polyglotte | Livre Cap Vietnam';
$page_description = 'Le livre pour apprendre le vietnamien sans frustration. Méthode polyglotte adaptée aux francophones : tons, vocabulaire essentiel, phrases du quotidien. Écrit depuis Hanoï.';
$page_canonical   = 'https://www.blog-capvietnam.fr/livre-vietnamien';
$page_og_title    = 'Apprendre le Vietnamien — la méthode polyglotte pour francophones';
$page_og_desc     = 'Démarrez le vietnamien avec une méthode qui marche : 1 000 mots les plus fréquents, logique tonale expliquée, dialogues du quotidien. Disponible sur Amazon.';
$page_og_image    = 'https://images.unsplash.com/photo-1583417319070-4a69db38a482?w=1200&q=80';

/* Lien Amazon — pense à ajouter ton tag d'affiliation Amazon Partenaires si tu en as un (?tag=tonid-21) */
$amazon_url       = 'https://www.amazon.fr/dp/B0H1CHWKF8';

/* Schema.org Book — améliore les rich results Google */
$page_schema = json_encode([
  '@context'    => 'https://schema.org',
  '@type'       => 'Book',
  'name'        => 'Apprendre le Vietnamien — Méthode Polyglotte',
  'inLanguage'  => 'fr',
  'about'       => 'Méthode d\'apprentissage du vietnamien pour francophones',
  'author'      => [
    '@type' => 'Person',
    'name'  => defined('SITE_AUTHOR') ? SITE_AUTHOR : 'Cap Vietnam',
    'url'   => 'https://www.blog-capvietnam.fr/a-propos-capvietnam.php'
  ],
  'publisher'   => [
    '@type' => 'Organization',
    'name'  => 'Cap Vietnam'
  ],
  'image'       => $page_og_image,
  'url'         => $page_canonical,
  'productID'   => 'amazon:B0H1CHWKF8',
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
/* ═══════════ HERO LIVRE ═══════════ */
.book-hero {
  background: linear-gradient(135deg, #f3ede4 0%, #ebe0d2 100%);
  padding: 9rem 2rem 5rem;
  position: relative;
  overflow: hidden;
}
.book-hero::before {
  content: '';
  position: absolute;
  top: 20%; right: -10%;
  width: 500px; height: 500px;
  background: radial-gradient(circle, rgba(191,74,42,0.08) 0%, transparent 70%);
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
  color: var(--terracotta);
  background: rgba(191,74,42,0.08);
  padding: 0.4rem 1rem;
  border-radius: 100px;
  margin-bottom: 1.25rem;
  font-weight: 600;
}
.book-hero h1 {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(2.2rem, 5vw, 3.8rem);
  line-height: 1.1;
  margin-bottom: 1.5rem;
  color: var(--ink);
}
.book-hero h1 em {
  color: var(--terracotta);
  font-style: italic;
}
.book-hero .lead {
  font-size: 1.15rem;
  line-height: 1.75;
  color: var(--muted);
  margin-bottom: 2rem;
  max-width: 540px;
}
.book-hero-ctas {
  display: flex;
  gap: 1rem;
  flex-wrap: wrap;
  margin-bottom: 2rem;
}
.btn-primary {
  background: var(--terracotta);
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
  box-shadow: 0 4px 16px rgba(191,74,42,0.25);
}
.btn-primary:hover { background: var(--terracotta-soft); transform: translateY(-2px); box-shadow: 0 6px 20px rgba(191,74,42,0.35); }
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

.book-trust {
  display: flex;
  flex-wrap: wrap;
  gap: 1.5rem;
  font-size: 0.85rem;
  color: var(--muted);
}
.book-trust-item { display: flex; align-items: center; gap: 0.5rem; }
.book-trust-item strong { color: var(--ink); }

.book-cover-wrap {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  perspective: 1500px;
}
.book-cover {
  width: 100%;
  max-width: 360px;
  aspect-ratio: 3/4.4;
  background: linear-gradient(135deg, #bf4a2a 0%, #8b3320 100%);
  border-radius: 4px 12px 12px 4px;
  box-shadow:
    -3px 0 0 rgba(0,0,0,0.05),
    -6px 0 0 rgba(0,0,0,0.05),
    25px 30px 60px rgba(28,25,23,0.25),
    inset 0 0 60px rgba(0,0,0,0.15);
  transform: rotateY(-12deg) rotateX(2deg);
  padding: 3rem 2.5rem;
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
  top: 0; left: 12px;
  bottom: 0;
  width: 4px;
  background: rgba(0,0,0,0.2);
}
.book-cover-tag {
  font-size: 0.75rem;
  letter-spacing: 3px;
  text-transform: uppercase;
  opacity: 0.7;
  font-weight: 600;
}
.book-cover-title {
  font-family: 'DM Serif Display', serif;
  font-size: 2rem;
  line-height: 1.1;
}
.book-cover-title em { font-style: italic; opacity: 0.85; }
.book-cover-footer {
  font-size: 0.85rem;
  border-top: 1px solid rgba(255,255,255,0.3);
  padding-top: 1rem;
}
.book-cover-footer strong { display: block; font-size: 1rem; margin-bottom: 0.2rem; }
.book-cover-vn {
  font-family: 'DM Serif Display', serif;
  font-size: 1.5rem;
  font-style: italic;
  opacity: 0.5;
  margin-top: 0.5rem;
}

/* ═══════════ HOOK SECTION ═══════════ */
.book-hook {
  background: var(--ink);
  color: var(--cream);
  padding: 5rem 2rem;
}
.book-hook-inner {
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
}
.book-hook h2 {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(1.8rem, 4vw, 2.6rem);
  line-height: 1.25;
  margin-bottom: 2.5rem;
}
.book-hook h2 em { color: var(--amber-soft); font-style: italic; }
.book-hook-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 1.5rem;
  text-align: left;
}
.book-hook-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius: var(--radius);
  padding: 1.75rem;
}
.book-hook-card .num {
  font-family: 'DM Serif Display', serif;
  font-size: 2rem;
  color: var(--amber-soft);
  display: block;
  margin-bottom: 0.5rem;
}
.book-hook-card p { font-size: 0.95rem; line-height: 1.65; color: rgba(250,248,244,0.85); }

/* ═══════════ METHODE SECTION ═══════════ */
.book-method { padding: 6rem 2rem; }
.book-method-inner { max-width: 1100px; margin: 0 auto; }
.book-method-header { text-align: center; max-width: 700px; margin: 0 auto 4rem; }
.book-method-header .eyebrow {
  font-size: 0.7rem;
  letter-spacing: 4px;
  text-transform: uppercase;
  color: var(--terracotta);
  margin-bottom: 1rem;
  font-weight: 600;
}
.book-method-header h2 {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(1.8rem, 4vw, 2.6rem);
  line-height: 1.2;
  margin-bottom: 1rem;
}
.book-method-header p { color: var(--muted); font-size: 1.05rem; }
.method-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 1.5rem;
}
.method-card {
  background: var(--white);
  padding: 2rem 1.75rem;
  border-radius: var(--radius);
  border: 1px solid var(--border);
  transition: transform 0.2s, box-shadow 0.2s;
}
.method-card:hover { transform: translateY(-4px); box-shadow: var(--shadow-md); }
.method-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 48px; height: 48px;
  background: var(--warm-bg);
  border-radius: 50%;
  font-size: 1.3rem;
  margin-bottom: 1rem;
}
.method-card h3 {
  font-family: 'DM Serif Display', serif;
  font-size: 1.25rem;
  margin-bottom: 0.6rem;
}
.method-card p { color: var(--muted); font-size: 0.92rem; line-height: 1.7; }

/* ═══════════ TOC SECTION ═══════════ */
.book-toc {
  background: var(--warm-bg);
  padding: 6rem 2rem;
}
.book-toc-inner { max-width: 1100px; margin: 0 auto; display: grid; grid-template-columns: 1fr 1.4fr; gap: 4rem; align-items: start; }
.book-toc-aside h2 {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(1.8rem, 4vw, 2.4rem);
  line-height: 1.2;
  margin-bottom: 1rem;
}
.book-toc-aside p { color: var(--muted); margin-bottom: 1.5rem; }
.book-toc-aside .btn-primary { margin-top: 0.5rem; }
.book-toc-list {
  background: var(--white);
  border-radius: var(--radius);
  padding: 2rem 2.5rem;
  list-style: none;
  box-shadow: var(--shadow-sm);
}
.book-toc-list li {
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  padding: 1rem 0;
  border-bottom: 1px solid var(--border);
}
.book-toc-list li:last-child { border-bottom: none; }
.book-toc-num {
  font-family: 'DM Serif Display', serif;
  font-size: 1.4rem;
  color: var(--terracotta);
  min-width: 40px;
  line-height: 1;
}
.book-toc-text strong { display: block; margin-bottom: 0.2rem; }
.book-toc-text span { color: var(--muted); font-size: 0.88rem; }

/* ═══════════ PERSONAS ═══════════ */
.book-personas { padding: 6rem 2rem; }
.book-personas-inner { max-width: 1100px; margin: 0 auto; }
.book-personas-header { text-align: center; margin-bottom: 4rem; }
.book-personas-header h2 {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(1.8rem, 4vw, 2.6rem);
  margin-bottom: 1rem;
}
.book-personas-header p { color: var(--muted); max-width: 600px; margin: 0 auto; }
.personas-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1.5rem;
}
.persona-card {
  background: var(--white);
  border: 1px solid var(--border);
  border-left: 4px solid var(--terracotta);
  border-radius: var(--radius);
  padding: 1.75rem;
}
.persona-card:nth-child(2) { border-left-color: var(--jade); }
.persona-card:nth-child(3) { border-left-color: var(--amber); }
.persona-card:nth-child(4) { border-left-color: var(--ink); }
.persona-card h3 {
  font-family: 'DM Serif Display', serif;
  font-size: 1.15rem;
  margin-bottom: 0.6rem;
}
.persona-card p { color: var(--muted); font-size: 0.92rem; line-height: 1.7; }

/* ═══════════ AUTHOR ═══════════ */
.book-author {
  background: var(--ink);
  color: var(--cream);
  padding: 5rem 2rem;
}
.book-author-inner {
  max-width: 900px;
  margin: 0 auto;
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 3rem;
  align-items: center;
}
.author-photo {
  width: 160px; height: 160px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--terracotta), var(--amber-soft));
  display: flex; align-items: center; justify-content: center;
  font-family: 'DM Serif Display', serif;
  font-size: 3.5rem;
  color: #fff;
}
.book-author-content .eyebrow { font-size: 0.7rem; letter-spacing: 4px; text-transform: uppercase; color: var(--amber-soft); margin-bottom: 0.75rem; font-weight: 600; }
.book-author-content h2 {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(1.5rem, 3vw, 2rem);
  margin-bottom: 1rem;
}
.book-author-content p { color: rgba(250,248,244,0.8); line-height: 1.75; margin-bottom: 1rem; }
.book-author-content a { color: var(--amber-soft); text-decoration: underline; }

/* ═══════════ FAQ ═══════════ */
.book-faq { padding: 6rem 2rem; }
.book-faq-inner { max-width: 800px; margin: 0 auto; }
.book-faq-header { text-align: center; margin-bottom: 3rem; }
.book-faq-header h2 {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(1.8rem, 4vw, 2.4rem);
  margin-bottom: 0.75rem;
}
.book-faq-header p { color: var(--muted); }
.faq-item {
  border-bottom: 1px solid var(--border);
}
.faq-question {
  width: 100%;
  background: none;
  border: none;
  padding: 1.5rem 0;
  font-family: inherit;
  font-size: 1.05rem;
  font-weight: 600;
  text-align: left;
  cursor: pointer;
  color: var(--ink);
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 1rem;
}
.faq-question::after {
  content: '+';
  font-size: 1.5rem;
  color: var(--terracotta);
  transition: transform 0.3s;
  flex-shrink: 0;
}
.faq-item.open .faq-question::after { transform: rotate(45deg); }
.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.3s, padding 0.3s;
  color: var(--muted);
  line-height: 1.8;
}
.faq-item.open .faq-answer {
  max-height: 500px;
  padding-bottom: 1.5rem;
}

/* ═══════════ FINAL CTA ═══════════ */
.book-final-cta {
  background: linear-gradient(135deg, var(--terracotta) 0%, #8b3320 100%);
  color: #fff;
  padding: 5rem 2rem;
  text-align: center;
}
.book-final-cta-inner { max-width: 700px; margin: 0 auto; }
.book-final-cta h2 {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(1.8rem, 4vw, 2.6rem);
  line-height: 1.2;
  margin-bottom: 1rem;
}
.book-final-cta p { font-size: 1.05rem; opacity: 0.9; margin-bottom: 2rem; }
.book-final-cta .btn-primary {
  background: var(--cream);
  color: var(--ink);
  font-size: 1.05rem;
  padding: 1.1rem 2rem;
  box-shadow: 0 6px 24px rgba(0,0,0,0.25);
}
.book-final-cta .btn-primary:hover { background: #fff; }
.book-final-cta-note { display: block; margin-top: 1rem; font-size: 0.82rem; opacity: 0.75; }

/* ═══════════ BREADCRUMB ═══════════ */
.book-breadcrumb {
  max-width: 1200px;
  margin: 0 auto;
  padding: 7rem 2rem 0;
  font-size: 0.85rem;
  color: var(--muted);
}
.book-breadcrumb a { color: var(--muted); text-decoration: none; }
.book-breadcrumb a:hover { color: var(--terracotta); }
.book-breadcrumb span { margin: 0 0.5rem; }

/* ═══════════ RESPONSIVE ═══════════ */
@media (max-width: 900px) {
  .book-hero-inner { grid-template-columns: 1fr; gap: 3rem; text-align: center; }
  .book-hero-content .eyebrow { display: inline-block; }
  .book-hero .lead { margin: 0 auto 2rem; }
  .book-hero-ctas { justify-content: center; }
  .book-trust { justify-content: center; }
  .book-toc-inner { grid-template-columns: 1fr; gap: 2rem; }
  .book-author-inner { grid-template-columns: 1fr; text-align: center; gap: 1.5rem; }
  .author-photo { margin: 0 auto; }
}
@media (max-width: 640px) {
  .book-hero { padding-top: 7rem; }
  .book-cover { max-width: 280px; }
  .book-toc-list { padding: 1.5rem; }
}
CSS;

include __DIR__ . '/header.php';
?>



<!-- ═══════ HERO ═══════ -->
<section class="book-hero">
  <div class="book-hero-inner">
    <div class="book-hero-content">
      <span class="eyebrow">📕 Méthode Polyglotte</span>
      <h1>Apprendre le vietnamien — <em>la méthode pensée pour les francophones</em></h1>
      <p class="lead">
        Les six tons vous font peur. Vous avez essayé Duolingo et lâché au bout de trois semaines. Vous habitez ou rêvez de Hanoï, Saïgon ou Da Nang, et chaque tentative de prononcer "phở" se solde par un sourire poli du serveur. Ce livre change la donne. Une méthode structurée, testée sur le terrain, qui vous mène à vos premières vraies conversations en quelques mois.
      </p>
      <div class="book-hero-ctas">
        <a href="<?= htmlspecialchars($amazon_url) ?>" target="_blank" rel="noopener noreferrer sponsored" class="btn-primary" data-track="hero">
          Acheter sur Amazon
          <span>→</span>
        </a>
        <a href="#sommaire" class="btn-secondary">
          Voir le sommaire
        </a>
      </div>
      <div class="book-trust">
        <div class="book-trust-item">📍 <span>Écrit depuis <strong>Hanoï</strong></span></div>
        <div class="book-trust-item">🎯 <span><strong>1 000 mots</strong> essentiels</span></div>
        <div class="book-trust-item">🇫🇷 <span>Conçu pour <strong>francophones</strong></span></div>
      </div>
    </div>
    <div class="book-cover-wrap">
      <!-- Couverture stylisée — remplace par l'image réelle du livre quand tu l'as -->
      <div class="book-cover" aria-label="Couverture du livre">
        <div>
          <div class="book-cover-tag">Méthode Polyglotte</div>
        </div>
        <div>
          <div class="book-cover-title">Apprendre<br>le <em>Vietnamien</em></div>
          <div class="book-cover-vn">Tiếng Việt</div>
        </div>
        <div class="book-cover-footer">
          <strong>Cap Vietnam</strong>
          <span>Pour francophones débutants</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ HOOK ═══════ -->
<section class="book-hook">
  <div class="book-hook-inner">
    <h2>Le vietnamien n'est pas plus difficile que l'anglais. <em>Il demande juste la bonne approche.</em></h2>
    <div class="book-hook-grid">
      <div class="book-hook-card">
        <span class="num">6</span>
        <p>Les tons font peur sur le papier. En réalité, votre oreille les attrape en quelques semaines avec les bons exercices.</p>
      </div>
      <div class="book-hook-card">
        <span class="num">1 000</span>
        <p>Le nombre de mots qui couvrent <strong>80 %</strong> de la conversation quotidienne. C'est par là qu'on commence — pas par la grammaire.</p>
      </div>
      <div class="book-hook-card">
        <span class="num">0</span>
        <p>Zéro caractère chinois à apprendre. Le vietnamien s'écrit en alphabet latin (quốc ngữ) depuis le XVIIe siècle.</p>
      </div>
      <div class="book-hook-card">
        <span class="num">3 mois</span>
        <p>Le temps qu'il faut, avec 20 min/jour, pour tenir vos premières conversations au marché ou au café.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ MÉTHODE ═══════ -->
<section class="book-method">
  <div class="book-method-inner">
    <div class="book-method-header">
      <div class="eyebrow">La méthode</div>
      <h2>Pourquoi la méthode polyglotte fonctionne</h2>
      <p>Inspirée des techniques des plus grands polyglottes, adaptée à la réalité du vietnamien et au cerveau francophone.</p>
    </div>
    <div class="method-grid">
      <div class="method-card">
        <div class="method-icon">🎯</div>
        <h3>Fréquence d'abord</h3>
        <p>On commence par les mots qui reviennent vraiment dans la vraie vie, pas par "où est la bibliothèque". Priorité au rendement.</p>
      </div>
      <div class="method-card">
        <div class="method-icon">👂</div>
        <h3>Oreille avant grammaire</h3>
        <p>On entraîne d'abord l'oreille aux tons et aux sons, puis on enchaîne sur les structures. Comme un enfant apprend sa langue.</p>
      </div>
      <div class="method-card">
        <div class="method-icon">🗣️</div>
        <h3>Parler dès le jour 1</h3>
        <p>Pas d'attente. Vous prononcez, vous fautez, vous corrigez. La honte de l'erreur est le premier obstacle à faire tomber.</p>
      </div>
      <div class="method-card">
        <div class="method-icon">🔁</div>
        <h3>Répétition espacée</h3>
        <p>Le cerveau n'apprend pas en bachotant. Il apprend en revoyant la même info à intervalles croissants. Le livre vous guide.</p>
      </div>
      <div class="method-card">
        <div class="method-icon">🇻🇳</div>
        <h3>Immersion progressive</h3>
        <p>Dialogues du quotidien réels : taxi, café, négociation au marché, présentation à la belle-famille. Pas de phrases hors sol.</p>
      </div>
      <div class="method-card">
        <div class="method-icon">🧠</div>
        <h3>Pont vers le français</h3>
        <p>Beaucoup de mots vietnamiens viennent du français (cà phê, ga, ô tô…). On utilise ces ponts pour accélérer.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ SOMMAIRE ═══════ -->
<section class="book-toc" id="sommaire">
  <div class="book-toc-inner">
    <div class="book-toc-aside">
      <h2>Ce que vous trouverez à l'intérieur</h2>
      <p>Un parcours progressif en 10 chapitres, du déclic à votre première conversation autonome. Chaque chapitre se boucle en une à deux semaines.</p>
      <p>Format ebook + papier, lecture sur Kindle, tablette, téléphone ou ordinateur.</p>
      <a href="<?= htmlspecialchars($amazon_url) ?>" target="_blank" rel="noopener noreferrer sponsored" class="btn-primary" data-track="toc">
        Voir sur Amazon <span>→</span>
      </a>
    </div>
    <ol class="book-toc-list">
      <li><span class="book-toc-num">01</span><div class="book-toc-text"><strong>Avant de commencer</strong><span>Démonter les 5 mythes qui bloquent les francophones face au vietnamien.</span></div></li>
      <li><span class="book-toc-num">02</span><div class="book-toc-text"><strong>Les sons et les tons</strong><span>Méthode pratique pour entendre et reproduire les 6 tons. Avec exercices d'écoute.</span></div></li>
      <li><span class="book-toc-num">03</span><div class="book-toc-text"><strong>L'alphabet quốc ngữ</strong><span>Lire le vietnamien en 30 minutes. Les lettres qui changent tout : đ, ơ, ư.</span></div></li>
      <li><span class="book-toc-num">04</span><div class="book-toc-text"><strong>Les 300 mots indispensables</strong><span>Le noyau de base : se présenter, compter, demander, remercier.</span></div></li>
      <li><span class="book-toc-num">05</span><div class="book-toc-text"><strong>Les pronoms — le piège vietnamien</strong><span>Pourquoi "je" et "tu" n'existent pas, et comment s'en sortir sans froisser personne.</span></div></li>
      <li><span class="book-toc-num">06</span><div class="book-toc-text"><strong>La grammaire en 7 règles</strong><span>Pas de conjugaison, pas de genre. La langue est plus simple qu'on ne le dit.</span></div></li>
      <li><span class="book-toc-num">07</span><div class="book-toc-text"><strong>Survivre au quotidien</strong><span>Taxi, marché, café, restaurant, hôtel. 80 dialogues prêts à l'emploi.</span></div></li>
      <li><span class="book-toc-num">08</span><div class="book-toc-text"><strong>Parler à la famille vietnamienne</strong><span>Le vocabulaire familial (le plus complexe) expliqué clairement. Spécial couples mixtes.</span></div></li>
      <li><span class="book-toc-num">09</span><div class="book-toc-text"><strong>Construire son plan d'étude</strong><span>20 minutes par jour, 3 mois, et un cap clair. Les apps qui complètent le livre.</span></div></li>
      <li><span class="book-toc-num">10</span><div class="book-toc-text"><strong>Bonus : 100 expressions de Hanoï</strong><span>Pour qu'on vous prenne pour un local et pas un touriste.</span></div></li>
    </ol>
  </div>
</section>

<!-- ═══════ POUR QUI ═══════ -->
<section class="book-personas">
  <div class="book-personas-inner">
    <div class="book-personas-header">
      <h2>Ce livre est fait pour vous si…</h2>
      <p>Quatre profils typiques pour qui cette méthode a été pensée.</p>
    </div>
    <div class="personas-grid cat-card">
      <div class="persona-card">
        <h3>✈️ Vous préparez votre installation</h3>
        <p>Vous partez vivre au Vietnam dans 3, 6 ou 12 mois. Vous voulez arriver avec un socle qui change tout : bail, banque, vie sociale.</p>
      </div>
      <div class="persona-card">
        <h3>💑 Vous êtes en couple mixte</h3>
        <p>Votre conjoint(e) est vietnamien(ne). Vous voulez parler à ses parents, comprendre les conversations de famille, ne plus rester en marge.</p>
      </div>
      <div class="persona-card">
        <h3>🎒 Vous voyagez profond</h3>
        <p>Vous ne voulez pas du tourisme de surface. Quelques mois ou semestres sur place. Parler la langue change le voyage du tout au tout.</p>
      </div>
      <div class="persona-card">
        <h3>🧠 Vous aimez les langues</h3>
        <p>Polyglotte en herbe, vous cherchez votre prochain défi. Le vietnamien est une porte fascinante sur une logique linguistique très différente.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ AUTEUR ═══════ -->
<section class="book-author">
  <div class="book-author-inner">
    <div class="author-photo"><img alt="" src="https://www.blog-capvietnam.fr/assets/img/profile/anthony-profil.jpg" class="img-fluid rounded-circle" width="150px" style="border-radius: 100%!important; "></div>
    <div class="book-author-content">
      <div class="eyebrow">L'auteur</div>
      <h2>Un Français installé à Hanoï depuis plusieurs années</h2>
      <p>
        J'ai débarqué à Hanoï sans parler un mot de vietnamien. J'ai testé toutes les méthodes : applications, profs particuliers, manuels universitaires, vidéos YouTube. La plupart sont mal pensées pour un francophone adulte qui veut des résultats concrets, pas de théorie.
      </p>
      <p>
        Ce livre, c'est la synthèse de ce qui a réellement marché — pour moi, pour mes amis expats, et pour les lecteurs du blog Cap Vietnam. Pas de promesse magique. Une méthode honnête, exigeante, qui marche si vous y mettez 20 minutes par jour.
      </p>
      <p>
        <a href="<?= $path_prefix ?>a-propos-capvietnam.php">En savoir plus sur le projet Cap Vietnam →</a>
      </p>
    </div>
  </div>
</section>

<!-- ═══════ FAQ ═══════ -->
<section class="book-faq">
  <div class="book-faq-inner">
    <div class="book-faq-header">
      <h2>Questions fréquentes</h2>
      <p>Les questions que vous m'envoyez le plus souvent, regroupées ici.</p>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Je débute totalement, ce livre est-il adapté ?</button>
      <div class="faq-answer">Oui, c'est même le profil-cible. Le chapitre 1 part du niveau zéro et installe les bons réflexes avant tout vocabulaire. Pas de prérequis.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Y a-t-il des audios pour la prononciation ?</button>
      <div class="faq-answer">Le livre ne renvoie pas à des ressources audio.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Le livre couvre-t-il le vietnamien du Nord ou du Sud ?</button>
      <div class="faq-answer">Le livre se base sur l'accent du Nord (Hanoï), qui est la norme officielle utilisée à la télévision, à la radio et dans l'enseignement. </div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Combien de temps avant de tenir une conversation ?</button>
      <div class="faq-answer">Avec 20 minutes par jour et la méthode du livre, comptez 8 à 12 semaines pour des échanges simples du quotidien (marché, taxi, restaurant). 6 mois pour des conversations plus profondes avec la famille ou des amis. Ce n'est pas magique — c'est régulier.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Le livre est-il disponible au format numérique ?</button>
      <div class="faq-answer">Oui, disponible en Kindle (lisible sur tous appareils via l'app Kindle gratuite) et en papier. Vous choisissez le format depuis la page Amazon.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Est-ce différent du Guide Cap Vietnam à 9 € ?</button>
      <div class="faq-answer">Oui, complètement. Le <a href="<?= $path_prefix ?>guide-cap-vietnam-2026.php">Guide Cap Vietnam</a> traite de l'installation pratique : démarches, budget, logement, banque. Le livre vietnamien traite uniquement de l'apprentissage de la langue. Les deux sont complémentaires.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="toggleFaq(this)">Comment puis-je vous contacter avant l'achat ?</button>
      <div class="faq-answer">Page <a href="<?= $path_prefix ?>blog-capvietnam.php#contact">Contact</a> du blog. Je réponds à tous les messages, généralement sous 48h. N'hésitez pas si vous voulez vous assurer que le livre correspond bien à votre situation.</div>
    </div>
  </div>
</section>

<!-- ═══════ CTA FINAL ═══════ -->
<section class="book-final-cta">
  <div class="book-final-cta-inner">
    <h2>Prêt à arrêter de mimer au marché ?</h2>
    <p>Achetez le livre sur Amazon. Livraison rapide en France et en Europe. Disponible aussi en numérique.</p>
    <a href="<?= htmlspecialchars($amazon_url) ?>" target="_blank" rel="noopener noreferrer sponsored" class="btn-primary" data-track="footer">
      Acheter sur Amazon <span>→</span>
    </a>

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
