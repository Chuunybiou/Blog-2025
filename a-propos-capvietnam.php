<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'À propos — Anthony Bouillon | Cap Vietnam';
$page_description = 'Qui se cache derrière Cap Vietnam ? Un Français installé au Vietnam avec sa femme vietnamienne. Mon histoire et pourquoi j\'ai créé ce blog.';
$page_canonical   = 'https://www.blog-capvietnam.fr/a-propos';
$page_og_title    = 'À propos — Cap Vietnam';
$page_og_desc     = 'Un Français, une Vietnamienne, une nouvelle vie au Vietnam. Découvrez l\'histoire derrière le blog Cap Vietnam.';
$page_og_url      = 'https://www.blog-capvietnam.fr/a-propos';
$page_og_image    = 'https://images.unsplash.com/photo-1528360983277-13d401cdc186?w=1200&q=80';
$page_schema      = '{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "name": "À propos de Cap Vietnam",
  "url": "https://www.blog-capvietnam.fr/a-propos",
  "mainEntity": {
    "@type": "Person",
    "name": "Anthony Bouillon",
    "description": "Expatrié français au Vietnam, professeur de français pour vietnamiens, créateur de contenu",
    "nationality": "French",
    "knowsLanguage": ["fr","en","vi"],
    "sameAs": [
      "https://www.tiktok.com/@proffrancaisetranger",
      "https://www.youtube.com/@Apprendre-Learn-Hoc-Tieng-Phap/videos"
    ]
  }
}';
$page_extra_css = '
.about-hero{padding-top:64px;background:linear-gradient(165deg,#1c1917,#2d2319 50%,#1c1917);position:relative;overflow:hidden}
.about-hero::before{content:\'\';position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 30% 70%,rgba(191,74,42,0.12),transparent 60%),radial-gradient(ellipse 50% 40% at 70% 30%,rgba(27,107,82,0.08),transparent 60%)}
.about-hero-inner{max-width:1000px;margin:0 auto;padding:5rem 2rem 4rem;position:relative;z-index:1;display:grid;grid-template-columns:280px 1fr;gap:4rem;align-items:center}
.about-avatar{width:280px;height:340px;border-radius:var(--radius);background:linear-gradient(145deg,var(--terracotta),var(--jade));display:flex;align-items:center;justify-content:center;font-size:6rem;position:relative;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,0.3)}
.about-avatar::before{content:\'\';position:absolute;inset:0;background:radial-gradient(circle at 30% 70%,rgba(255,255,255,0.08),transparent 50%)}
.about-avatar-label{position:absolute;bottom:0;left:0;right:0;padding:0.75rem;background:rgba(0,0,0,0.5);backdrop-filter:blur(10px);text-align:center;color:var(--cream);font-size:0.75rem;letter-spacing:2px;text-transform:uppercase}
.about-hero-text h1{font-family:\'DM Serif Display\',serif;font-size:clamp(2rem,4vw,3rem);color:var(--cream);line-height:1.2;margin-bottom:1rem}
.about-hero-text h1 em{color:var(--terracotta-soft);font-style:italic}
.about-hero-text p{color:rgba(250,248,244,0.55);font-size:1.05rem;margin-bottom:1.5rem;max-width:480px}
.hero-social{display:flex;gap:0.75rem}
.social-btn{padding:0.5rem 1.2rem;border-radius:100px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);color:var(--cream);font-size:0.82rem;font-weight:500;text-decoration:none;transition:all 0.2s}
.social-btn:hover{background:rgba(255,255,255,0.15);border-color:rgba(255,255,255,0.25)}

.story-section{max-width:800px;margin:0 auto;padding:5rem 2rem}
.story-label{font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;color:var(--muted);margin-bottom:0.75rem}
.story-title{font-family:\'DM Serif Display\',serif;font-size:2.2rem;margin-bottom:2rem;line-height:1.25}
.story-text p{color:#3a3530;font-size:1.05rem;margin-bottom:1.5rem}
.story-text p:first-of-type::first-letter{font-family:\'DM Serif Display\',serif;font-size:3.5rem;float:left;line-height:1;margin:0.1rem 0.6rem 0 0;color:var(--terracotta)}
.story-highlight{background:var(--warm-bg);border-left:4px solid var(--terracotta);padding:1.5rem 2rem;border-radius:0 var(--radius) var(--radius) 0;margin:2.5rem 0;font-size:1.1rem;font-style:italic;color:var(--ink);line-height:1.8}

.timeline-section{background:var(--warm-bg);padding:5rem 2rem}
.timeline-inner{max-width:800px;margin:0 auto}
.timeline-title{font-family:\'DM Serif Display\',serif;font-size:2rem;text-align:center;margin-bottom:3rem}
.timeline{position:relative;padding-left:40px}
.timeline::before{content:\'\';position:absolute;left:15px;top:0;bottom:0;width:2px;background:var(--border)}
.timeline-item{position:relative;margin-bottom:2.5rem;padding-left:2rem}
.timeline-dot{position:absolute;left:-33px;top:6px;width:12px;height:12px;border-radius:50%;border:3px solid var(--terracotta);background:var(--cream)}
.timeline-item.active .timeline-dot{background:var(--terracotta)}
.timeline-date{font-size:0.75rem;letter-spacing:2px;text-transform:uppercase;color:var(--terracotta);font-weight:600;margin-bottom:0.25rem}
.timeline-item h3{font-family:\'DM Serif Display\',serif;font-size:1.15rem;margin-bottom:0.3rem}
.timeline-item p{color:var(--muted);font-size:0.92rem}

.values-section{max-width:1000px;margin:0 auto;padding:5rem 2rem}
.values-title{font-family:\'DM Serif Display\',serif;font-size:2rem;text-align:center;margin-bottom:0.5rem}
.values-subtitle{text-align:center;color:var(--muted);margin-bottom:3rem}
.values-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem}
.value-card{background:var(--white);border-radius:var(--radius);padding:2rem;box-shadow:var(--shadow-sm);text-align:center;transition:transform 0.3s,box-shadow 0.3s}
.value-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-md)}
.value-icon{font-size:2.5rem;margin-bottom:1rem}
.value-card h3{font-family:\'DM Serif Display\',serif;font-size:1.15rem;margin-bottom:0.5rem}
.value-card p{color:var(--muted);font-size:0.9rem}

.numbers-section{background:var(--ink);color:var(--cream);padding:4rem 2rem}
.numbers-grid{max-width:1000px;margin:0 auto;display:grid;grid-template-columns:repeat(4,1fr);gap:2rem;text-align:center}
.number-item .num{font-family:\'DM Serif Display\',serif;font-size:2.5rem;color:var(--terracotta-soft)}
.number-item .label{font-size:0.75rem;letter-spacing:2px;text-transform:uppercase;color:rgba(250,248,244,0.4);margin-top:0.25rem}

.cta-section{max-width:800px;margin:0 auto;padding:5rem 2rem;text-align:center}
.cta-section h2{font-family:\'DM Serif Display\',serif;font-size:2rem;margin-bottom:1rem}
.cta-section p{color:var(--muted);max-width:500px;margin:0 auto 2rem}
.cta-buttons{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap}
.cta-primary{padding:0.9rem 2.2rem;background:var(--terracotta);color:#fff;text-decoration:none;font-weight:600;border-radius:4px;transition:all 0.2s}
.cta-primary:hover{background:var(--terracotta-soft);transform:translateY(-2px)}
.cta-secondary{padding:0.9rem 2.2rem;background:transparent;color:var(--ink);text-decoration:none;font-weight:600;border-radius:4px;border:1px solid var(--border);transition:all 0.2s}
.cta-secondary:hover{border-color:var(--ink)}

@media(max-width:900px){.about-hero-inner{grid-template-columns:1fr;text-align:center}.about-avatar{margin:0 auto;width:200px;height:250px;font-size:4rem}.values-grid{grid-template-columns:1fr}.numbers-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:640px){.hero-social{justify-content:center}.cta-buttons{flex-direction:column;align-items:center}}
';
include 'header.php';
?>

<!-- HERO -->
<header class="about-hero">
  <div class="about-hero-inner">
    <div class="about-avatar">
      <img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="280" height="340" loading="eager" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
      <div class="about-avatar-label">📍 Vietnam</div>
    </div>
    <div class="about-hero-text">
      <h1>Salut, moi c'est<br><em>Anthony</em></h1>
      <p>Français, ancien résident canadien, installé au Vietnam avec ma femme vietnamienne. Je documente mon expatriation et j'enseigne le français aux Vietnamiens sur TikTok et YouTube — sans filtre.</p>
      <div class="hero-social">
        <a class="social-btn" href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener">🎵 TikTok</a>
        <a class="social-btn" href="<?= SITE_YOUTUBE ?>" target="_blank" rel="noopener">🎬 YouTube</a>
      </div>
    </div>
  </div>
</header>

<!-- STORY -->
<section class="story-section">
  <div class="story-label">Mon histoire</div>
  <h2 class="story-title">De la France au Canada,<br>du Canada au Vietnam</h2>
  <div class="story-text">
    <p>Tout a commencé quand j'ai quitté la France pour le Canada avec un permis de travail ouvert. J'y ai vécu, travaillé, appris l'anglais et découvert une liberté que je n'avais pas en France. Mais quelque chose me manquait — l'aventure, la vraie.</p>
    <p>Puis j'ai rencontré ma femme. Une Vietnamienne avec qui tout a cliqué. Les appels vidéo, les visites au Vietnam, les projets ensemble… Très vite, la décision s'est imposée : je quitte tout et je m'installe avec elle à Hanoï.</p>
    <div class="story-highlight">
      « On m'a dit que j'étais fou. Quitter un permis de travail canadien pour aller vivre au Vietnam ? Peut-être. Mais la seule folie, c'est de ne pas essayer. »
    </div>
    <p>Ce blog est né de ce projet. Je voulais documenter chaque étape de cette transition — les démarches administratives, les galères, les surprises culturelles, les solutions que j'ai trouvées — pour que ceux qui veulent faire pareil n'aient pas à chercher les réponses dans 40 forums différents.</p>
    <p>En parallèle, j'ai lancé un compte TikTok pour enseigner le français aux Vietnamiens. Ma copine m'aide avec les traductions et le contexte culturel. C'est devenu un projet qui nous rapproche encore plus.</p>
    <p>Aujourd'hui, je construis ma vie en ligne depuis le Vietnam. Ce blog, mes vidéos et mes réseaux sont à la fois mon journal de bord et ma source de revenus. Tout est réel, tout est vécu, rien n'est inventé.</p>
  </div>
</section>

<!-- TIMELINE -->
<section class="timeline-section">
  <div class="timeline-inner">
    <h2 class="timeline-title">Mon parcours</h2>
    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">France</div>
        <h3>Naissance et vie en France</h3>
        <p>Grandir en France, les études, les premiers boulots… et l'envie de voir ailleurs.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">Départ au Canada</div>
        <h3>Permis de travail ouvert au Canada</h3>
        <p>Le grand saut. Nouveau pays, nouvelle langue, nouvelle vie. Le Québec m'accueille.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">La rencontre</div>
        <h3>Je rencontre ma femme 💕</h3>
        <p>Une rencontre qui change tout. Premiers échanges, première visite au Vietnam, coup de foudre.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">Premier voyage</div>
        <h3>Découverte du Vietnam</h3>
        <p>Hanoï, la street food, le chaos magnifique. Je comprends pourquoi les gens tombent amoureux de ce pays.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">La décision</div>
        <h3>Je quitte le Canada pour le Vietnam</h3>
        <p>Démarches administratives, fermeture des comptes, préparation du départ. Cap Vietnam est lancé.</p>
      </div>
      <div class="timeline-item active">
        <div class="timeline-dot"></div>
        <div class="timeline-date">2026 — Maintenant</div>
        <h3>Installation au Vietnam</h3>
        <p>La vie commence ici. Blog, TikTok, vie en couple mixte, et construction d'une nouvelle existence.</p>
      </div>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="values-section">
  <h2 class="values-title">Ce que tu trouveras ici</h2>
  <p class="values-subtitle">Les principes qui guident chaque article de ce blog.</p>
  <div class="values-grid">
    <div class="value-card"><div class="value-icon">🎯</div><h3>Du concret, pas du blabla</h3><p>Des guides pratiques basés sur mon expérience réelle. Pas de théorie recyclée depuis d'autres blogs.</p></div>
    <div class="value-card"><div class="value-icon">💬</div><h3>Honnêteté totale</h3><p>Le Vietnam c'est incroyable, mais c'est pas parfait. Je parle aussi des galères, des arnaques et des moments difficiles.</p></div>
    <div class="value-card"><div class="value-icon">🔄</div><h3>Toujours à jour</h3><p>Les règles changent souvent au Vietnam. Je mets mes articles à jour régulièrement avec les dernières infos.</p></div>
    <div class="value-card"><div class="value-icon">🤝</div><h3>Communauté</h3><p>Ce blog est aussi un espace d'échange. Tes commentaires, questions et témoignages enrichissent le contenu.</p></div>
    <div class="value-card"><div class="value-icon">🌏</div><h3>Deux cultures, un regard</h3><p>Grâce à ma femme vietnamienne, je te donne un point de vue que peu d'expats peuvent offrir : le regard de l'intérieur.</p></div>
    <div class="value-card"><div class="value-icon">🆓</div><h3>Gratuit et indépendant</h3><p>Tout le contenu est gratuit. Le blog est financé par l'affiliation et mes propres projets — jamais par des articles sponsorisés déguisés.</p></div>
  </div>
</section>

<!-- NUMBERS -->
<section class="numbers-section">
  <div class="numbers-grid">
    <div class="number-item"><div class="num">18+</div><div class="label">Articles publiés</div></div>
    <div class="number-item"><div class="num">4</div><div class="label">Catégories</div></div>
    <div class="number-item"><div class="num">1</div><div class="label">Pays d'adoption</div></div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <h2>Envie de suivre l'aventure ?</h2>
  <p>Que tu prépares ton expatriation ou que tu sois juste curieux, il y a plein de façons de me suivre.</p>
  <div class="cta-buttons">
    <a class="cta-primary" href="articles-capvietnam.php">Lire les articles →</a>
    <a class="cta-secondary" href="blog-capvietnam.php#contact">Me contacter</a>
    <a class="cta-secondary" href="blog-capvietnam.php#newsletter">S'inscrire à la newsletter</a>
  </div>
</section>

<script>
const obs = new IntersectionObserver(e => {
  e.forEach(x => { if(x.isIntersecting){ x.target.style.opacity='1'; x.target.style.transform='translateY(0)'; } });
}, { threshold: 0.1 });
document.querySelectorAll('.value-card,.timeline-item,.cta-section').forEach((el,i) => {
  el.style.opacity='0'; el.style.transform='translateY(25px)';
  el.style.transition='opacity 0.5s ease '+(i%6)*0.08+'s, transform 0.5s ease '+(i%6)*0.08+'s';
  obs.observe(el);
});
</script>

<?php include 'footer.php'; ?>
