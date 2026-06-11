<?php
require_once __DIR__ . '/config/site.php';
$page_lang_switch = ['href' => 'vi/', 'label' => '🇻🇳 Tiếng Việt', 'title' => 'Phiên bản tiếng Việt'];
$page_hreflang    = ['fr' => SITE_URL . '/apprendre-francais-capvietnam', 'vi' => SITE_URL . '/vi/', 'x-default' => SITE_URL . '/vi/'];
$page_title       = 'Học tiếng Pháp miễn phí | Cap Vietnam Hanoï';
$page_description = 'Học tiếng Pháp miễn phí với người Pháp tại Hà Nội. Video TikTok, bài học và PDF. Apprenez le français avec un Français à Hanoï.';
$page_canonical   = 'https://www.blog-capvietnam.fr/apprendre-francais';
$page_og_title    = 'Học tiếng Pháp miễn phí | Cap Vietnam';
$page_og_desc     = 'Học tiếng Pháp với video TikTok và bài học miễn phí từ một người Pháp sống tại Hà Nội.';
$page_og_url      = 'https://www.blog-capvietnam.fr/apprendre-francais';
$page_og_image    = 'https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=1200&q=80';
$page_schema      = '{
  "@context": "https://schema.org",
  "@type": "Course",
  "name": "Học tiếng Pháp miễn phí — Apprendre le français",
  "description": "Free French lessons for Vietnamese speakers. Video TikTok, PDF resources and structured lessons.",
  "provider": { "@type": "Person", "name": "Cap Vietnam" },
  "inLanguage": ["fr","vi"],
  "isAccessibleForFree": true,
  "url": "https://www.blog-capvietnam.fr/apprendre-francais"
}';
$page_extra_css   = '
.lang-toggle{display:flex;gap:0;border:1px solid var(--border);border-radius:100px;overflow:hidden;font-size:0.8rem}
.lang-btn{padding:0.35rem 1rem;background:none;border:none;cursor:pointer;font-family:inherit;font-weight:500;color:var(--muted);transition:all 0.2s}
.lang-btn.active{background:var(--ink);color:var(--cream)}
.learn-hero{padding-top:64px;background:linear-gradient(165deg,#0a0a2e,#1a1050 40%,#2a0a40);position:relative;overflow:hidden}
.learn-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,rgba(37,99,235,0.12),transparent 60%),radial-gradient(ellipse 50% 40% at 80% 20%,rgba(191,74,42,0.08),transparent 60%)}
.hero-particles{position:absolute;inset:0;opacity:0.03;background-image:repeating-radial-gradient(circle at 20% 50%,rgba(255,255,255,0.8) 1px,transparent 1px,transparent 40px)}
.learn-hero-inner{max-width:1200px;margin:0 auto;padding:5rem 2rem 4rem;position:relative;z-index:1;display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center}
.learn-hero-text h1{font-family:"DM Serif Display",serif;font-size:clamp(2rem,4.5vw,3.2rem);color:var(--cream);line-height:1.15;margin-bottom:1rem}
.learn-hero-text h1 .vi{color:#3b82f6}
.learn-hero-text h1 .fr{color:var(--terracotta-soft)}
.learn-hero-desc{font-size:1.05rem;color:rgba(250,248,244,0.5);margin-bottom:0.5rem}
.learn-hero-desc2{font-size:0.95rem;color:rgba(250,248,244,0.35);margin-bottom:2rem;font-style:italic}
.hero-ctas{display:flex;gap:1rem;flex-wrap:wrap}
.cta-tiktok{padding:0.85rem 2rem;border-radius:100px;background:linear-gradient(135deg,#ff0050,#00f2ea);color:#fff;font-weight:700;font-size:0.9rem;text-decoration:none;transition:transform 0.2s,box-shadow 0.2s;display:inline-flex;align-items:center;gap:8px}
.cta-tiktok:hover{transform:translateY(-2px);box-shadow:0 8px 30px rgba(255,0,80,0.3)}
.cta-lessons{padding:0.85rem 2rem;border-radius:100px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.15);color:var(--cream);font-weight:600;font-size:0.9rem;text-decoration:none;transition:all 0.2s}
.cta-lessons:hover{background:rgba(255,255,255,0.12);border-color:rgba(255,255,255,0.25)}
.hero-phone{width:280px;height:500px;background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);border-radius:32px;margin:0 auto;position:relative;overflow:hidden;display:flex;flex-direction:column}
.phone-notch{width:120px;height:24px;background:rgba(0,0,0,0.5);border-radius:0 0 12px 12px;margin:0 auto}
.phone-screen{flex:1;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:1rem;padding:1.5rem}
.phone-tiktok-logo{font-size:2rem}
.phone-username{color:var(--cream);font-weight:700;font-size:1.1rem}
.phone-followers{color:rgba(250,248,244,0.4);font-size:0.85rem}
.phone-stat-row{display:flex;gap:2rem;margin-top:0.5rem}
.phone-stat{text-align:center}
.phone-stat-num{color:var(--cream);font-weight:700;font-size:1.1rem}
.phone-stat-label{color:rgba(250,248,244,0.35);font-size:0.7rem}
.phone-follow-btn{margin-top:1rem;padding:0.6rem 3rem;border-radius:4px;background:#ff0050;color:#fff;border:none;font-weight:700;font-size:0.85rem}
.stats-bar{background:var(--white);border-bottom:1px solid var(--border);padding:1.5rem 2rem}
.stats-bar-inner{max-width:1200px;margin:0 auto;display:flex;justify-content:center;gap:4rem;flex-wrap:wrap}
.stat-item{text-align:center}
.stat-num{font-family:"DM Serif Display",serif;font-size:1.8rem;color:#2563eb}
.stat-label{font-size:0.75rem;letter-spacing:1px;text-transform:uppercase;color:var(--muted)}
.levels-section{max-width:1200px;margin:0 auto;padding:5rem 2rem}
.section-header{text-align:center;margin-bottom:3rem}
.section-label{font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;color:var(--muted);margin-bottom:0.5rem}
.section-title{font-family:"DM Serif Display",serif;font-size:2rem;margin-bottom:0.5rem}
.section-subtitle{color:var(--muted);max-width:500px;margin:0 auto}
.levels-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem}
.level-card{background:var(--white);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-sm);transition:transform 0.3s,box-shadow 0.3s;text-decoration:none;color:inherit}
.level-card:hover{transform:translateY(-5px);box-shadow:var(--shadow-lg)}
.level-banner{padding:2rem;text-align:center;color:#fff}
.level-banner.beginner{background:linear-gradient(135deg,#22c55e,#16a34a)}
.level-banner.intermediate{background:linear-gradient(135deg,#2563eb,#1d4ed8)}
.level-banner.advanced{background:linear-gradient(135deg,#8b5cf6,#6d28d9)}
.level-emoji{font-size:2.5rem;margin-bottom:0.5rem}
.level-name{font-family:"DM Serif Display",serif;font-size:1.4rem}
.level-name-vi{font-size:0.85rem;opacity:0.7;margin-top:0.2rem}
.level-body{padding:1.75rem}
.level-body p{color:var(--muted);font-size:0.92rem;margin-bottom:1rem}
.level-topics{list-style:none}
.level-topics li{padding:0.4rem 0;font-size:0.88rem;display:flex;align-items:center;gap:0.5rem;border-bottom:1px solid var(--border)}
.level-topics li:last-child{border:none}
.level-topics .check{color:#22c55e;font-size:0.8rem}
.level-count{margin-top:1rem;padding-top:1rem;border-top:1px solid var(--border);font-size:0.82rem;color:var(--muted);font-weight:500}
.tiktok-lessons{background:var(--ink);padding:5rem 2rem}
.tiktok-inner{max-width:1200px;margin:0 auto}
.tiktok-header{display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:2rem;flex-wrap:wrap;gap:1rem}
.tiktok-header h2{font-family:"DM Serif Display",serif;font-size:2rem;color:var(--cream)}
.tiktok-header p{color:rgba(250,248,244,0.4);max-width:400px}
.tiktok-follow{padding:0.6rem 1.5rem;border-radius:100px;background:linear-gradient(135deg,#ff0050,#00f2ea);color:#fff;font-weight:700;font-size:0.82rem;text-decoration:none;transition:transform 0.2s}
.tiktok-follow:hover{transform:translateY(-2px)}
.tiktok-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:1rem}
.tt-card{background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.06);border-radius:var(--radius);overflow:hidden;transition:all 0.3s;cursor:pointer;text-decoration:none;color:inherit;display:block}
.tt-card:hover{background:rgba(255,255,255,0.08);border-color:rgba(255,255,255,0.12);transform:translateY(-3px)}
.tt-thumb{aspect-ratio:9/16;max-height:260px;display:flex;flex-direction:column;align-items:center;justify-content:center;gap:0.5rem;padding:1rem;text-align:center;position:relative}
.tt-lesson-num{position:absolute;top:8px;left:8px;background:rgba(0,0,0,0.5);backdrop-filter:blur(8px);color:#fff;font-size:0.6rem;font-weight:700;padding:3px 8px;border-radius:3px;letter-spacing:1px}
.tt-views{position:absolute;bottom:8px;left:8px;display:flex;align-items:center;gap:4px;color:rgba(255,255,255,0.7);font-size:0.72rem}
.tt-thumb-emoji{font-size:2.5rem}
.tt-thumb-text{color:var(--cream);font-size:0.88rem;font-weight:600;line-height:1.3}
.tt-card-body{padding:0.75rem 1rem}
.tt-card-body h4{color:var(--cream);font-size:0.82rem;font-weight:500;margin-bottom:0.15rem}
.tt-card-body span{color:rgba(250,248,244,0.3);font-size:0.72rem}
.bg-vocab{background:linear-gradient(160deg,#1a3a1a,#0a200a)}
.bg-grammar{background:linear-gradient(160deg,#1a1a3a,#0a0a20)}
.bg-culture{background:linear-gradient(160deg,#3a1a1a,#200a0a)}
.bg-pronun{background:linear-gradient(160deg,#1a2a3a,#0a1520)}
.bg-convo{background:linear-gradient(160deg,#2a1a3a,#150a20)}
.resources-section{max-width:1200px;margin:0 auto;padding:5rem 2rem}
.resource-card{background:var(--white);border-radius:var(--radius);padding:2rem;box-shadow:var(--shadow-sm);text-align:center;transition:transform 0.3s,box-shadow 0.3s;text-decoration:none;color:inherit;display:block}
.resource-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-md)}
.resource-icon{font-size:2.5rem;margin-bottom:1rem}
.resource-card h3{font-family:"DM Serif Display",serif;font-size:1.15rem;margin-bottom:0.3rem}
.resource-card .vi-text{font-size:0.85rem;color:#2563eb;margin-bottom:0.5rem}
.resource-card p{color:var(--muted);font-size:0.88rem;margin-bottom:1rem}
.resource-badge{display:inline-block;padding:0.3rem 0.9rem;border-radius:100px;font-size:0.72rem;font-weight:700;letter-spacing:1px;text-transform:uppercase}
.badge-free{background:rgba(34,197,94,0.1);color:#16a34a}
.cta-bottom{background:linear-gradient(135deg,#0a0a2e,#1a1050);padding:5rem 2rem;text-align:center}
.cta-bottom h2{font-family:"DM Serif Display",serif;font-size:clamp(1.6rem,3vw,2.5rem);color:var(--cream);margin-bottom:0.5rem}
.cta-bottom .vi-sub{color:rgba(250,248,244,0.4);font-size:1rem;margin-bottom:2rem}
.cta-bottom-btns{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap}
@media(max-width:900px){.learn-hero-inner{grid-template-columns:1fr}.hero-phone{display:none}.levels-grid{grid-template-columns:1fr}.tiktok-grid{grid-template-columns:repeat(2,1fr)}.stats-bar-inner{gap:2rem}}
@media(max-width:640px){.hero-ctas{flex-direction:column}.cta-bottom-btns{flex-direction:column;align-items:center}.tiktok-grid{grid-template-columns:repeat(2,1fr)}}
';
include 'header.php';
?>

<header class="learn-hero">
  <div class="hero-particles"></div>
  <div class="learn-hero-inner">
    <div class="learn-hero-text">
      <h1><span class="vi">Học tiếng Pháp</span><br><span class="fr">miễn phí 🇫🇷</span></h1>
      <p class="learn-hero-desc">Apprends le français avec un Français qui vit au Vietnam. Vidéos TikTok, leçons structurées et ressources gratuites.</p>
      <p class="learn-hero-desc2">Học tiếng Pháp với một người Pháp sống tại Việt Nam. Video TikTok, bài học có cấu trúc và tài liệu miễn phí.</p>
      <div class="hero-ctas">
        <a class="cta-tiktok" href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">🎵 Theo dõi TikTok</a>
        <a class="cta-lessons" href="#levels">📚 Xem bài học</a>
      </div>
    </div>
    <div class="hero-phone">
      <div class="phone-notch"></div>
      <div class="phone-screen">
        <div class="phone-tiktok-logo">🎵</div>
        <div class="phone-username">@proffrancaisetranger</div>
        <div class="phone-followers">Học tiếng Pháp mỗi ngày</div>
        <div class="phone-stat-row">
          <div class="phone-stat"><div class="phone-stat-num">7</div><div class="phone-stat-label">Videos</div></div>
          <div class="phone-stat"><div class="phone-stat-num">250</div><div class="phone-stat-label">Followers</div></div>
          <div class="phone-stat"><div class="phone-stat-num">1.8k</div><div class="phone-stat-label">Likes</div></div>
        </div>
        <button class="phone-follow-btn">+ Follow</button>
      </div>
    </div>
  </div>
</header>

<div class="stats-bar">
  <div class="stats-bar-inner">
    <div class="stat-item"><div class="stat-num">7</div><div class="stat-label">Video bài học</div></div>
    <div class="stat-item"><div class="stat-num">3</div><div class="stat-label">Cấp độ</div></div>
    <div class="stat-item"><div class="stat-num">500+</div><div class="stat-label">Từ vựng</div></div>
    <div class="stat-item"><div class="stat-num">100%</div><div class="stat-label">Miễn phí</div></div>
  </div>
</div>

<section class="levels-section" id="levels">
  <div class="section-header">
    <div class="section-label">Cấp độ / Niveaux</div>
    <h2 class="section-title">Chọn cấp độ của bạn</h2>
    <p class="section-subtitle">Choisis ton niveau — từ cơ bản đến nâng cao</p>
  </div>
  <div class="levels-grid">
    <div class="level-card">
      <div class="level-banner beginner">
        <div class="level-emoji">🌱</div>
        <div class="level-name">Débutant</div>
        <div class="level-name-vi">Cơ bản — Bắt đầu từ số 0</div>
      </div>
      <div class="level-body">
        <p>Bạn chưa biết tiếng Pháp? Bắt đầu từ đây! Tu ne parles pas français ? Commence ici !</p>
        <ul class="level-topics">
          <li><span class="check">✓</span> Xin chào — Les salutations</li>
          <li><span class="check">✓</span> Số đếm 1-100 — Les nombres</li>
          <li><span class="check">✓</span> Tự giới thiệu — Se présenter</li>
          <li><span class="check">✓</span> Màu sắc — Les couleurs</li>
          <li><span class="check">✓</span> Đồ ăn — La nourriture</li>
        </ul>
        <div class="level-count">📹 5 vidéos TikTok disponibles</div>
      </div>
    </div>
    <div class="level-card">
      <div class="level-banner intermediate">
        <div class="level-emoji">🌿</div>
        <div class="level-name">Intermédiaire</div>
        <div class="level-name-vi">Trung cấp — Nâng cao kỹ năng</div>
      </div>
      <div class="level-body">
        <p>Bạn đã biết cơ bản? Hãy đi xa hơn! Tu connais les bases ? Allons plus loin !</p>
        <ul class="level-topics">
          <li><span class="check">✓</span> Ngữ pháp — Grammaire essentielle</li>
          <li><span class="check">✓</span> Hội thoại — Conversations du quotidien</li>
          <li><span class="check">✓</span> Phát âm — Prononciation française</li>
          <li><span class="check">✓</span> Thành ngữ — Expressions idiomatiques</li>
          <li><span class="check">✓</span> Văn hóa — Différences culturelles FR/VN</li>
        </ul>
        <div class="level-count">📹 Bientôt disponible</div>
      </div>
    </div>
    <div class="level-card">
      <div class="level-banner advanced">
        <div class="level-emoji">🌳</div>
        <div class="level-name">Avancé</div>
        <div class="level-name-vi">Nâng cao — Nói như người Pháp</div>
      </div>
      <div class="level-body">
        <p>Bạn muốn nói như người Pháp thật sự? Tu veux parler comme un vrai Français ?</p>
        <ul class="level-topics">
          <li><span class="check">✓</span> Tiếng lóng — L'argot français</li>
          <li><span class="check">✓</span> Tranh luận — Débattre en français</li>
          <li><span class="check">✓</span> Viết — Écrire correctement</li>
          <li><span class="check">✓</span> Kinh doanh — Le français professionnel</li>
          <li><span class="check">✓</span> Tin tức — Comprendre les médias</li>
        </ul>
        <div class="level-count">📹 Bientôt disponible</div>
      </div>
    </div>
  </div>
</section>

<section class="tiktok-lessons">
  <div class="tiktok-inner">
    <div class="tiktok-header">
      <div>
        <h2>📹 Video bài học mới nhất</h2>
        <p>Dernières leçons TikTok — mỗi video 60 giây, mỗi ngày một bài học mới.</p>
      </div>
      <a class="tiktok-follow" href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">Theo dõi TikTok</a>
    </div>
    <div class="tiktok-grid">
      <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7632490857555397908" target="_blank" rel="noopener">
        <div class="tt-thumb bg-convo"><span class="tt-lesson-num">Bài mới</span><div class="tt-thumb-emoji">🍽️</div><div class="tt-thumb-text">9 câu<br>ở nhà hàng</div><span class="tt-views">▶ 121</span></div>
        <div class="tt-card-body"><h4>9 phrases au restaurant</h4><span>Hội thoại · Commander en français</span></div>
      </a>
      <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7631756032020155668" target="_blank" rel="noopener">
        <div class="tt-thumb bg-vocab"><span class="tt-lesson-num">Từ vựng</span><div class="tt-thumb-emoji">👨‍👩‍👧</div><div class="tt-thumb-text">La famille<br>Gia đình</div><span class="tt-views">▶ 1140</span></div>
        <div class="tt-card-body"><h4>La famille — [la fa-mi]</h4><span>Từ vựng · Phát âm</span></div>
      </a>
      <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7631184251580321045" target="_blank" rel="noopener">
        <div class="tt-thumb bg-vocab"><span class="tt-lesson-num">Từ vựng</span><div class="tt-thumb-emoji">🥖</div><div class="tt-thumb-text">Le pain<br>Bánh mì</div><span class="tt-views">▶ 2366</span></div>
        <div class="tt-card-body"><h4>Le pain — Bánh mì</h4><span>Từ vựng · Mot commun FR/VN</span></div>
      </a>
      <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7630256603576487188" target="_blank" rel="noopener">
        <div class="tt-thumb bg-grammar"><span class="tt-lesson-num">Ngữ pháp</span><div class="tt-thumb-emoji">⚡</div><div class="tt-thumb-text">Être<br>Je suis…</div><span class="tt-views">▶ 1078</span></div>
        <div class="tt-card-body"><h4>Être — Ê-trơ</h4><span>Ngữ pháp · Verbe essentiel</span></div>
      </a>
      <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7629530842746146068" target="_blank" rel="noopener">
        <div class="tt-thumb bg-convo"><span class="tt-lesson-num">Hội thoại</span><div class="tt-thumb-emoji">👋</div><div class="tt-thumb-text">Comment ça va ?<br>Bạn khỏe không ?</div><span class="tt-views">▶ 653</span></div>
        <div class="tt-card-body"><h4>Comment ça va ?</h4><span>Hội thoại · Salutations</span></div>
      </a>
      <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7628439542038646036" target="_blank" rel="noopener">
        <div class="tt-thumb bg-culture"><span class="tt-lesson-num">Từ vựng</span><div class="tt-thumb-emoji">🎨</div><div class="tt-thumb-text">Les couleurs<br>Rouge, Bleu, Vert…</div><span class="tt-views">▶ 894</span></div>
        <div class="tt-card-body"><h4>Les couleurs en français</h4><span>Từ vựng · Màu sắc</span></div>
      </a>
    </div>
  </div>
</section>

<section class="resources-section">
  <div class="section-header">
    <div class="section-label">Tài liệu / Ressources</div>
    <h2 class="section-title">Tài liệu học tập</h2>
    <p class="section-subtitle">Ressources pour compléter les vidéos TikTok</p>
  </div>
  <div style="max-width:420px;margin:0 auto">
    <a class="resource-card" href="500-mots-essentiels-francais-vietnamien.pdf" target="_blank" rel="noopener">
      <div class="resource-icon">📄</div>
      <h3>500 từ vựng cơ bản</h3>
      <div class="vi-text">500 mots essentiels FR/VN</div>
      <p>Liste PDF bilingue des 500 mots les plus utilisés en français avec traduction vietnamienne et prononciation.</p>
      <span class="resource-badge badge-free">Miễn phí / Gratuit — Télécharger ↓</span>
    </a>
  </div>
</section>

<section class="cta-bottom">
  <h2>Bắt đầu học tiếng Pháp ngay hôm nay 🇫🇷</h2>
  <p class="vi-sub">Commence à apprendre le français aujourd'hui</p>
  <div class="cta-bottom-btns">
    <a class="cta-tiktok" href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">🎵 Theo dõi TikTok</a>
    <a class="cta-lessons" href="500-mots-essentiels-francais-vietnamien.pdf">📄 Tải PDF miễn phí</a>
    <a class="cta-lessons" href="blog-capvietnam#newsletter">✉️ Đăng ký nhận bài học qua email</a>
  </div>
</section>

<script>
const obs = new IntersectionObserver(e => {
  e.forEach(x => { if(x.isIntersecting){x.target.style.opacity='1';x.target.style.transform='translateY(0)'} });
},{threshold:0.05});
document.querySelectorAll('.level-card,.tt-card,.resource-card').forEach((el,i) => {
  el.style.opacity='0';el.style.transform='translateY(20px)';
  el.style.transition='opacity 0.4s ease '+(i%8)*0.06+'s, transform 0.4s ease '+(i%8)*0.06+'s';
  obs.observe(el);
});
</script>

<?php include 'footer.php'; ?>
