<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../blog-capvietnam.php',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang    = [
  'fr' => SITE_URL . '/',
  'vi' => SITE_URL . '/vi/',
  'x-default' => SITE_URL . '/',
];

$page_title       = 'Học tiếng Pháp miễn phí với người Pháp tại Hà Nội | Cap Vietnam';
$page_description = 'Anthony — người Pháp sống tại Hà Nội — dạy tiếng Pháp miễn phí trên TikTok. Video bài học, PDF từ vựng và tài liệu học tiếng Pháp cho người Việt.';
$page_canonical   = SITE_URL . '/vi/';
$page_og_title    = 'Học tiếng Pháp miễn phí | Cap Vietnam';
$page_og_desc     = 'Người Pháp tại Hà Nội dạy tiếng Pháp miễn phí — TikTok, PDF và bài học có cấu trúc.';
$page_og_url      = $page_canonical;
$page_og_image    = 'https://images.unsplash.com/photo-1573270689103-d7a4e42b609a?w=1200&q=80';

$page_extra_css = '
/* ══ VIETNAMESE SECTION ══ */
.vi-hero{padding-top:64px;background:linear-gradient(165deg,#0a0a2e 0%,#1a1050 45%,#0d1f44 100%);position:relative;overflow:hidden;min-height:90vh;display:flex;align-items:center}
.vi-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,rgba(191,74,42,0.12),transparent 60%),radial-gradient(ellipse 50% 40% at 80% 20%,rgba(26,95,138,0.15),transparent 60%)}
.vi-hero-inner{max-width:1200px;margin:0 auto;padding:5rem 2rem;display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;position:relative;z-index:1}
.vi-hero-badge{display:inline-block;font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:5px 14px;border-radius:3px;background:rgba(26,95,138,0.3);color:#6eb8e8;border:1px solid rgba(110,184,232,0.2);margin-bottom:1.5rem}
.vi-hero h1{font-family:"DM Serif Display",serif;font-size:clamp(2.2rem,5vw,3.5rem);color:#fff;line-height:1.2;margin-bottom:1.5rem}
.vi-hero h1 em{color:#6eb8e8;font-style:normal}
.vi-hero-sub{font-size:1.05rem;color:rgba(250,248,244,0.55);line-height:1.8;margin-bottom:2rem}
.vi-hero-ctas{display:flex;gap:1rem;flex-wrap:wrap}
.cta-tiktok-vi{display:inline-flex;align-items:center;gap:8px;padding:0.85rem 2rem;background:#ff0050;color:#fff;border-radius:4px;text-decoration:none;font-weight:700;font-size:0.95rem;transition:0.2s}
.cta-tiktok-vi:hover{background:#e6004a;transform:translateY(-2px)}
.cta-secondary-vi{display:inline-flex;align-items:center;gap:8px;padding:0.85rem 2rem;border:1px solid rgba(255,255,255,0.2);color:rgba(250,248,244,0.7);border-radius:4px;text-decoration:none;font-weight:600;font-size:0.95rem;transition:0.2s}
.cta-secondary-vi:hover{border-color:rgba(255,255,255,0.5);color:#fff}
.vi-stats{display:flex;gap:3rem;margin-top:3rem;padding-top:2rem;border-top:1px solid rgba(255,255,255,0.08)}
.vi-stat-num{font-family:"DM Serif Display",serif;font-size:1.8rem;color:#6eb8e8}
.vi-stat-label{font-size:0.7rem;letter-spacing:2px;text-transform:uppercase;color:rgba(250,248,244,0.35)}
/* Profile card */
.vi-profile-card{background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius);padding:2.5rem;text-align:center;backdrop-filter:blur(10px)}
.vi-profile-avatar{width:120px;height:120px;border-radius:50%;overflow:hidden;margin:0 auto 1.5rem;border:3px solid rgba(110,184,232,0.3)}
.vi-profile-avatar img{width:100%;height:100%;object-fit:cover}
.vi-profile-name{font-family:"DM Serif Display",serif;font-size:1.4rem;color:#fff;margin-bottom:0.25rem}
.vi-profile-role{font-size:0.85rem;color:#6eb8e8;margin-bottom:1rem}
.vi-profile-text{font-size:0.9rem;color:rgba(250,248,244,0.55);line-height:1.8}
.vi-profile-tags{display:flex;flex-wrap:wrap;gap:0.5rem;justify-content:center;margin-top:1.25rem}
.vi-tag{font-size:0.72rem;padding:3px 10px;border-radius:100px;background:rgba(255,255,255,0.05);color:rgba(250,248,244,0.5);border:1px solid rgba(255,255,255,0.08)}
/* Sections */
.vi-section{max-width:1200px;margin:0 auto;padding:5rem 2rem}
.vi-section-label{font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;color:var(--muted);margin-bottom:0.5rem}
.vi-section-title{font-family:"DM Serif Display",serif;font-size:clamp(1.8rem,3vw,2.5rem);margin-bottom:0.75rem}
.vi-section-desc{color:var(--muted);margin-bottom:3rem;font-size:1rem}
/* TikTok cards */
.tt-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.tt-card{background:var(--white);border-radius:var(--radius);overflow:hidden;text-decoration:none;color:inherit;box-shadow:var(--shadow-sm);transition:transform 0.3s,box-shadow 0.3s}
.tt-card:hover{transform:translateY(-5px);box-shadow:var(--shadow-lg)}
.tt-thumb{height:160px;display:flex;align-items:center;justify-content:center;position:relative;flex-direction:column;gap:0.5rem}
.tt-thumb-emoji{font-size:2.5rem}
.tt-thumb-text{font-size:0.78rem;font-weight:600;color:#fff;text-align:center;line-height:1.4}
.tt-lesson-num{position:absolute;top:0.75rem;left:0.75rem;font-size:0.6rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;background:rgba(0,0,0,0.3);backdrop-filter:blur(8px);color:#fff;padding:3px 10px;border-radius:3px}
.tt-views{position:absolute;bottom:0.75rem;right:0.75rem;font-size:0.75rem;color:rgba(255,255,255,0.7);background:rgba(0,0,0,0.25);padding:2px 8px;border-radius:100px}
.bg-vocab{background:linear-gradient(135deg,#1a5f8a,#0d3a57)}
.bg-grammar{background:linear-gradient(135deg,var(--jade),#0e4a38)}
.bg-convo{background:linear-gradient(135deg,var(--terracotta),#8b2f14)}
.bg-culture{background:linear-gradient(135deg,var(--amber),#7a5500)}
.tt-card-body{padding:1.25rem}
.tt-card-body h4{font-family:"DM Serif Display",serif;font-size:1rem;margin-bottom:0.25rem;line-height:1.3}
.tt-card-body span{font-size:0.8rem;color:var(--muted)}
/* Resources */
.vi-resources-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1.5rem}
.vi-res-card{background:var(--white);border-radius:var(--radius);padding:2rem;box-shadow:var(--shadow-sm);display:flex;gap:1.5rem;align-items:flex-start;text-decoration:none;color:inherit;transition:transform 0.2s,box-shadow 0.2s}
.vi-res-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-md)}
.vi-res-icon{font-size:2.5rem;flex-shrink:0}
.vi-res-body h3{font-family:"DM Serif Display",serif;font-size:1.1rem;margin-bottom:0.3rem}
.vi-res-body p{color:var(--muted);font-size:0.88rem;line-height:1.6;margin-bottom:0.75rem}
.vi-res-badge{display:inline-block;font-size:0.68rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:3px 10px;border-radius:100px}
.badge-free-vi{background:rgba(34,197,94,0.1);color:#16a34a}
.badge-ext{background:rgba(26,95,138,0.1);color:#1a5f8a}
/* Blog teaser */
.vi-blog-teaser{background:var(--warm-bg);padding:5rem 2rem}
.vi-blog-teaser-inner{max-width:800px;margin:0 auto;text-align:center}
/* CTA Final */
.vi-cta-final{background:linear-gradient(135deg,#ff0050,#cc0040);padding:5rem 2rem;text-align:center;color:#fff}
.vi-cta-final h2{font-family:"DM Serif Display",serif;font-size:clamp(1.8rem,3vw,2.5rem);margin-bottom:0.5rem}
.vi-cta-final p{color:rgba(255,255,255,0.7);margin-bottom:2rem;font-size:1rem}
.vi-cta-btns{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap}
.vi-cta-white{padding:0.9rem 2.5rem;background:#fff;color:#ff0050;border-radius:4px;text-decoration:none;font-weight:700;font-size:0.95rem;transition:0.2s}
.vi-cta-white:hover{background:rgba(255,255,255,0.9);transform:translateY(-2px)}
.vi-cta-outline{padding:0.9rem 2.5rem;border:2px solid rgba(255,255,255,0.4);color:#fff;border-radius:4px;text-decoration:none;font-weight:600;font-size:0.95rem;transition:0.2s}
.vi-cta-outline:hover{border-color:#fff}
/* Newsletter */
.vi-newsletter{background:var(--ink);color:var(--cream);padding:4rem 2rem;text-align:center}
.vi-newsletter h2{font-family:"DM Serif Display",serif;font-size:1.8rem;margin-bottom:0.25rem}
.vi-newsletter p{color:rgba(250,248,244,0.5);margin-bottom:1.5rem}
.vi-nl-form{display:flex;gap:0.75rem;max-width:420px;margin:0 auto}
.vi-nl-form input{flex:1;padding:0.8rem 1rem;border:1px solid rgba(255,255,255,0.15);background:rgba(255,255,255,0.05);border-radius:4px;color:var(--cream);font-family:inherit;font-size:0.95rem}
.vi-nl-form input::placeholder{color:rgba(250,248,244,0.3)}
.vi-nl-form button{padding:0.8rem 1.8rem;background:#1a5f8a;color:#fff;border:none;border-radius:4px;font-weight:600;font-family:inherit;cursor:pointer;transition:0.2s}
.vi-nl-form button:hover{background:#2a85b8}
@media(max-width:900px){.vi-hero-inner{grid-template-columns:1fr}.tt-grid{grid-template-columns:repeat(2,1fr)}.vi-resources-grid{grid-template-columns:1fr}}
@media(max-width:640px){.vi-hero-ctas{flex-direction:column}.tt-grid{grid-template-columns:repeat(2,1fr)}.vi-nl-form{flex-direction:column}.vi-cta-btns{flex-direction:column;align-items:center}}
/* Articles grid */
.vi-articles-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.vi-art-preview{display:block;background:var(--white);border-radius:var(--radius);overflow:hidden;text-decoration:none;color:inherit;box-shadow:var(--shadow-sm);transition:transform 0.3s,box-shadow 0.3s}
.vi-art-preview:hover{transform:translateY(-5px);box-shadow:var(--shadow-lg)}
.vi-art-preview-img{height:180px;overflow:hidden}
.vi-art-preview-img img{width:100%;height:100%;object-fit:cover;transition:transform 0.3s}
.vi-art-preview:hover .vi-art-preview-img img{transform:scale(1.05)}
.vi-art-preview-body{padding:1.5rem}
.vi-art-preview-cat{display:inline-block;font-size:0.65rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#1a5f8a;margin-bottom:0.75rem}
.vi-art-preview-body h3{font-family:"DM Serif Display",serif;font-size:1rem;line-height:1.4;margin-bottom:0.75rem;color:var(--ink)}
.vi-art-preview-body p{font-size:0.85rem;color:var(--muted);line-height:1.6;margin-bottom:1rem}
.vi-art-preview-more{font-size:0.82rem;font-weight:700;color:#1a5f8a}
@media(max-width:900px){.vi-articles-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:520px){.vi-articles-grid{grid-template-columns:1fr}}
';

include '../header.php';
?>

<!-- ══ HERO ══ -->
<header class="vi-hero">
  <div class="vi-hero-inner">
    <div>
      <div class="vi-hero-badge">🇫🇷 Tiếng Pháp · 🇻🇳 Hà Nội</div>
      <h1>Học tiếng Pháp<br>với <em>người Pháp</em><br>tại Hà Nội 🇻🇳</h1>
      <p class="vi-hero-sub">
        Anthony là người Pháp đang sống tại Hà Nội cùng vợ người Việt.<br>
        Anh dạy tiếng Pháp miễn phí trên TikTok — mỗi ngày một bài học ngắn.
      </p>
      <div class="vi-hero-ctas">
        <a class="cta-tiktok-vi" href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener">🎵 Theo dõi TikTok</a>
        <a class="cta-secondary-vi" href="#bai-hoc">📚 Xem bài học</a>
      </div>
      <div class="vi-stats">
        <div><div class="vi-stat-num">7</div><div class="vi-stat-label">Video bài học</div></div>
        <div><div class="vi-stat-num">500+</div><div class="vi-stat-label">Từ vựng PDF</div></div>
        <div><div class="vi-stat-num">100%</div><div class="vi-stat-label">Miễn phí</div></div>
      </div>
    </div>
    <div class="vi-profile-card">
      <div class="vi-profile-avatar">
        <img src="../<?= PROFILE_PHOTO ?>" alt="Anthony Bouillon" width="120" height="120" loading="eager" decoding="async">
      </div>
      <div class="vi-profile-name"><?= SITE_AUTHOR ?></div>
      <div class="vi-profile-role">🇫🇷 Người Pháp • 📍 Hà Nội, Việt Nam</div>
      <p class="vi-profile-text">
        Mình đến Việt Nam năm <?= SITE_YEAR ?> và yêu đất nước này ngay lần đầu tiên.<br>
        Trên TikTok, mình dạy tiếng Pháp cho người Việt — đơn giản, thực tế, miễn phí.
      </p>
      <div class="vi-profile-tags">
        <span class="vi-tag">📍 Hà Nội</span>
        <span class="vi-tag">🎵 TikTok</span>
        <span class="vi-tag">📹 YouTube</span>
        <span class="vi-tag">🇫🇷 Giáo viên tiếng Pháp</span>
      </div>
    </div>
  </div>
</header>

<!-- ══ TIKTOK BÀI HỌC ══ -->
<section class="vi-section" id="bai-hoc" style="background:var(--cream)">
  <div class="vi-section-label">Video bài học / Leçons TikTok</div>
  <h2 class="vi-section-title">📹 Video bài học mới nhất</h2>
  <p class="vi-section-desc">Mỗi video 60 giây — mỗi ngày một bài học mới. Học tiếng Pháp từng bước một!</p>
  <div class="tt-grid">
    <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7632490857555397908" target="_blank" rel="noopener">
      <div class="tt-thumb bg-convo"><span class="tt-lesson-num">Bài mới</span><div class="tt-thumb-emoji">🍽️</div><div class="tt-thumb-text">9 câu ở nhà hàng</div><span class="tt-views">▶ 121</span></div>
      <div class="tt-card-body"><h4>9 phrases au restaurant</h4><span>Hội thoại · Đặt món ăn bằng tiếng Pháp</span></div>
    </a>
    <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7631756032020155668" target="_blank" rel="noopener">
      <div class="tt-thumb bg-vocab"><span class="tt-lesson-num">Từ vựng</span><div class="tt-thumb-emoji">👨‍👩‍👧</div><div class="tt-thumb-text">La famille — Gia đình</div><span class="tt-views">▶ 1140</span></div>
      <div class="tt-card-body"><h4>La famille — [la fa-mi]</h4><span>Từ vựng · Phát âm chuẩn</span></div>
    </a>
    <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7631184251580321045" target="_blank" rel="noopener">
      <div class="tt-thumb bg-vocab"><span class="tt-lesson-num">Từ vựng</span><div class="tt-thumb-emoji">🥖</div><div class="tt-thumb-text">Le pain — Bánh mì</div><span class="tt-views">▶ 2366</span></div>
      <div class="tt-card-body"><h4>Le pain — Bánh mì</h4><span>Từ vựng · Từ gốc Pháp trong tiếng Việt</span></div>
    </a>
    <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7630256603576487188" target="_blank" rel="noopener">
      <div class="tt-thumb bg-grammar"><span class="tt-lesson-num">Ngữ pháp</span><div class="tt-thumb-emoji">⚡</div><div class="tt-thumb-text">Être — Je suis…</div><span class="tt-views">▶ 1078</span></div>
      <div class="tt-card-body"><h4>Être — Ê-trơ</h4><span>Ngữ pháp · Động từ quan trọng nhất</span></div>
    </a>
    <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7629530842746146068" target="_blank" rel="noopener">
      <div class="tt-thumb bg-convo"><span class="tt-lesson-num">Hội thoại</span><div class="tt-thumb-emoji">👋</div><div class="tt-thumb-text">Comment ça va ?</div><span class="tt-views">▶ 653</span></div>
      <div class="tt-card-body"><h4>Comment ça va ?</h4><span>Hội thoại · Chào hỏi thường ngày</span></div>
    </a>
    <a class="tt-card" href="https://www.tiktok.com/@proffrancaisetranger/photo/7628439542038646036" target="_blank" rel="noopener">
      <div class="tt-thumb bg-culture"><span class="tt-lesson-num">Từ vựng</span><div class="tt-thumb-emoji">🎨</div><div class="tt-thumb-text">Les couleurs — Màu sắc</div><span class="tt-views">▶ 894</span></div>
      <div class="tt-card-body"><h4>Les couleurs en français</h4><span>Từ vựng · Rouge, Bleu, Vert…</span></div>
    </a>
  </div>
  <div style="text-align:center;margin-top:2.5rem">
    <a href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:8px;padding:0.85rem 2rem;background:#ff0050;color:#fff;border-radius:4px;text-decoration:none;font-weight:700">🎵 Theo dõi để xem thêm video →</a>
  </div>
</section>

<!-- ══ BÀI VIẾT ══ -->
<section class="vi-section" style="background:var(--white)" id="bai-viet">
  <div class="vi-section-label">Bài viết / Articles</div>
  <h2 class="vi-section-title">✍️ Bài viết học tiếng Pháp</h2>
  <p class="vi-section-desc">Hướng dẫn chi tiết bằng tiếng Việt — lý do học, phát âm, tài nguyên miễn phí.</p>
  <div class="vi-articles-grid">
    <a class="vi-art-preview" href="tai-sao-hoc-tieng-phap.php">
      <div class="vi-art-preview-img">
        <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=600&q=80"
             alt="Tại sao nên học tiếng Pháp" loading="lazy">
      </div>
      <div class="vi-art-preview-body">
        <div class="vi-art-preview-cat">Lý do học</div>
        <h3>Tại Sao Nên Học Tiếng Pháp? 6 Lý Do Thực Tế Dành Cho Người Việt</h3>
        <p>Canada, châu Phi, du học Pháp... Mình chia sẻ 6 cơ hội thực tế đang chờ người Việt biết tiếng Pháp.</p>
        <span class="vi-art-preview-more">Đọc thêm →</span>
      </div>
    </a>
    <a class="vi-art-preview" href="loi-phat-am-tieng-phap-nguoi-viet.php">
      <div class="vi-art-preview-img">
        <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=600&q=80"
             alt="Lỗi phát âm tiếng Pháp của người Việt" loading="lazy">
      </div>
      <div class="vi-art-preview-body">
        <div class="vi-art-preview-cat">Phát âm</div>
        <h3>7 Lỗi Phát Âm Tiếng Pháp Mà Người Việt Thường Mắc (Và Cách Sửa)</h3>
        <p>Âm R, nguyên âm mũi, chữ U... Mình giải thích từng lỗi với ví dụ cụ thể và cách luyện.</p>
        <span class="vi-art-preview-more">Đọc thêm →</span>
      </div>
    </a>
    <a class="vi-art-preview" href="hoc-tieng-phap-online-mien-phi.php">
      <div class="vi-art-preview-img">
        <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600&q=80"
             alt="Học tiếng Pháp online miễn phí" loading="lazy">
      </div>
      <div class="vi-art-preview-body">
        <div class="vi-art-preview-cat">Tài nguyên</div>
        <h3>Học Tiếng Pháp Online Miễn Phí: 7 Nguồn Tốt Nhất Năm 2026</h3>
        <p>TikTok, YouTube, Duolingo, TV5Monde... Mình tổng hợp 7 nguồn học tiếng Pháp miễn phí tốt nhất.</p>
        <span class="vi-art-preview-more">Đọc thêm →</span>
      </div>
    </a>
  </div>
</section>

<!-- ══ TÀI LIỆU ══ -->
<section class="vi-section" style="background:var(--warm-bg)">
  <div class="vi-section-label">Tài liệu / Ressources</div>
  <h2 class="vi-section-title">📚 Tài liệu học tiếng Pháp miễn phí</h2>
  <p class="vi-section-desc">Tài liệu bổ sung cho các video TikTok — tất cả miễn phí.</p>
  <div class="vi-resources-grid">
    <a class="vi-res-card" href="../500-mots-essentiels-francais-vietnamien.pdf" target="_blank" rel="noopener">
      <div class="vi-res-icon">📄</div>
      <div class="vi-res-body">
        <h3>500 từ vựng cơ bản nhất</h3>
        <p>Danh sách PDF 500 từ tiếng Pháp được dùng nhiều nhất — có phiên âm và dịch nghĩa tiếng Việt. In ra và học mỗi ngày!</p>
        <span class="vi-res-badge badge-free-vi">Miễn phí — Tải xuống ↓</span>
      </div>
    </a>
    <a class="vi-res-card" href="../apprendre-francais-capvietnam.php">
      <div class="vi-res-icon">🎓</div>
      <div class="vi-res-body">
        <h3>Trang học tiếng Pháp đầy đủ</h3>
        <p>Xem tất cả video theo cấp độ (Cơ bản → Trung cấp → Nâng cao) và tài liệu học tập trên trang đầy đủ.</p>
        <span class="vi-res-badge badge-ext">Xem trang → </span>
      </div>
    </a>
    <a class="vi-res-card" href="../guide-cap-vietnam-2026.php">
      <div class="vi-res-icon">📘</div>
      <div class="vi-res-body">
        <h3>Cuốn sách hướng dẫn — 9 €</h3>
        <p>Hướng dẫn thực tế cho người Pháp đến Việt Nam: visa, hôn nhân, ngân hàng, làm việc online tại Hà Nội.</p>
        <span class="vi-res-badge" style="background:rgba(184,134,11,0.1);color:var(--amber)">9 € — Xem thêm →</span>
      </div>
    </a>
  </div>
</section>

<!-- ══ BLOG PHÁP NGỮ ══ -->
<section class="vi-blog-teaser">
  <div class="vi-blog-teaser-inner">
    <div class="vi-section-label" style="text-align:center">Blog tiếng Pháp</div>
    <h2 class="vi-section-title" style="text-align:center">Blog dành cho người Pháp tại Việt Nam</h2>
    <p style="color:var(--muted);margin-bottom:2rem;font-size:1rem">
      Blog chính của Anthony được viết bằng <strong>tiếng Pháp</strong> — dành cho người Pháp và Pháp ngữ đang sống hoặc chuẩn bị đến Việt Nam.<br>
      Nếu bạn đang học tiếng Pháp, đây là cơ hội tuyệt vời để luyện đọc thực tế!
    </p>
    <a href="../blog-capvietnam.php" style="display:inline-flex;align-items:center;gap:8px;padding:0.85rem 2rem;background:var(--ink);color:var(--cream);border-radius:4px;text-decoration:none;font-weight:600;transition:0.2s">
      🇫🇷 Đọc blog tiếng Pháp →
    </a>
  </div>
</section>

<!-- ══ CTA TIKTOK FINAL ══ -->
<section class="vi-cta-final">
  <h2>Bắt đầu học tiếng Pháp ngay hôm nay! 🇫🇷</h2>
  <p>Theo dõi @proffrancaisetranger — mỗi ngày một video, hoàn toàn miễn phí.</p>
  <div class="vi-cta-btns">
    <a class="vi-cta-white" href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener">🎵 Theo dõi TikTok</a>
    <a class="vi-cta-outline" href="../500-mots-essentiels-francais-vietnamien.pdf" target="_blank" rel="noopener">📄 Tải PDF 500 từ vựng</a>
  </div>
</section>

<!-- ══ NEWSLETTER ══ -->
<section class="vi-newsletter">
  <h2>Videos Tiktok ✉️</h2>
  <p>Đăng ký nhận bài học tiếng Pháp qua email — miễn phí, không spam.</p>
  <form class="vi-nl-form" action="<?= SITE_FORMSPREE ?>" method="POST">
    <input type="hidden" name="_subject" value="Newsletter VI — Cap Vietnam">
    <input type="hidden" name="source" value="vi/index">
    <input type="email" name="email" placeholder="Email của bạn…" required>
    <button type="submit">Đăng ký →</button>
  </form>
</section>

<script>
const _viObs = new IntersectionObserver(e => {
  e.forEach(x => { if(x.isIntersecting){x.target.style.opacity='1';x.target.style.transform='translateY(0)'} });
},{threshold:0.05});
document.querySelectorAll('.tt-card,.vi-res-card').forEach((el,i) => {
  el.style.opacity='0';el.style.transform='translateY(20px)';
  el.style.transition='opacity 0.4s ease '+(i*0.05)+'s, transform 0.4s ease '+(i*0.05)+'s';
  _viObs.observe(el);
});
</script>

<?php include '../footer.php'; ?>
