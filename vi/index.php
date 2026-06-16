<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_og_locale   = 'vi_VN';
$page_lang_switch = [
  'href'  => '../',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang    = [
  'fr' => SITE_URL . '/',
  'vi' => SITE_URL . '/vi/',
  'x-default' => SITE_URL . '/',
];

$page_title       = 'Lấy chồng Pháp · Sang Pháp định cư : hành trình từng bước | Cap Vietnam';
$page_description = 'Blog của người Pháp có vợ người Việt tại Hà Nội — hướng dẫn CCAM, kết hôn, visa và thẻ cư trú cho cặp đôi Franco-Vietnamien. Tất cả bằng tiếng Pháp.';
$page_canonical   = SITE_URL . '/vi/';
$page_og_title    = 'Lấy chồng Pháp · Sang Pháp định cư | Cap Vietnam';
$page_og_desc     = 'Hành trình sang Pháp theo chồng Pháp — CCAM, kết hôn tại Việt Nam, visa, thẻ cư trú. Hướng dẫn bằng tiếng Pháp, từng bước.';
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/mariage-franco-vietnamien-ceremonie.png';

$page_extra_css = '
/* ══ VIETNAMESE SECTION ══ */
.vi-hero{padding-top:64px;background:linear-gradient(165deg,#0a0a2e 0%,#1a1050 45%,#0d1f44 100%);position:relative;overflow:hidden;min-height:90vh;display:flex;align-items:center}
.vi-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,rgba(191,74,42,0.12),transparent 60%),radial-gradient(ellipse 50% 40% at 80% 20%,rgba(26,95,138,0.15),transparent 60%)}
.vi-hero-inner{max-width:1200px;margin:0 auto;padding:5rem 2rem;display:grid;grid-template-columns:1fr 1fr;gap:4rem;align-items:center;position:relative;z-index:1}
.vi-hero-badge{display:inline-block;font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:5px 14px;border-radius:3px;background:rgba(191,74,42,0.25);color:#e8856a;border:1px solid rgba(232,133,106,0.25);margin-bottom:1.5rem}
.vi-hero h1{font-family:"DM Serif Display",serif;font-size:clamp(2.2rem,5vw,3.5rem);color:#fff;line-height:1.2;margin-bottom:1.5rem}
.vi-hero h1 em{color:#e8856a;font-style:normal}
.vi-hero-sub{font-size:1.05rem;color:rgba(250,248,244,0.55);line-height:1.8;margin-bottom:2rem}
.vi-hero-ctas{display:flex;gap:1rem;flex-wrap:wrap}
.cta-primary-vi{display:inline-flex;align-items:center;gap:8px;padding:0.85rem 2rem;background:rgba(191,74,42,0.85);color:#fff;border-radius:4px;text-decoration:none;font-weight:700;font-size:0.95rem;transition:0.2s}
.cta-primary-vi:hover{background:rgba(191,74,42,1);transform:translateY(-2px)}
.cta-secondary-vi{display:inline-flex;align-items:center;gap:8px;padding:0.85rem 2rem;border:1px solid rgba(255,255,255,0.2);color:rgba(250,248,244,0.7);border-radius:4px;text-decoration:none;font-weight:600;font-size:0.95rem;transition:0.2s}
.cta-secondary-vi:hover{border-color:rgba(255,255,255,0.5);color:#fff}
.vi-stats{display:flex;gap:3rem;margin-top:3rem;padding-top:2rem;border-top:1px solid rgba(255,255,255,0.08)}
.vi-stat-num{font-family:"DM Serif Display",serif;font-size:1.8rem;color:#e8856a}
.vi-stat-label{font-size:0.7rem;letter-spacing:2px;text-transform:uppercase;color:rgba(250,248,244,0.35)}
/* Profile card */
.vi-profile-card{background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);border-radius:var(--radius);padding:2.5rem;text-align:center;backdrop-filter:blur(10px)}
.vi-profile-avatar{width:120px;height:120px;border-radius:50%;overflow:hidden;margin:0 auto 1.5rem;border:3px solid rgba(232,133,106,0.35)}
.vi-profile-avatar img{width:100%;height:100%;object-fit:cover}
.vi-profile-name{font-family:"DM Serif Display",serif;font-size:1.4rem;color:#fff;margin-bottom:0.25rem}
.vi-profile-role{font-size:0.85rem;color:#e8856a;margin-bottom:1rem}
.vi-profile-text{font-size:0.9rem;color:rgba(250,248,244,0.55);line-height:1.8}
.vi-profile-tags{display:flex;flex-wrap:wrap;gap:0.5rem;justify-content:center;margin-top:1.25rem}
.vi-tag{font-size:0.72rem;padding:3px 10px;border-radius:100px;background:rgba(255,255,255,0.05);color:rgba(250,248,244,0.5);border:1px solid rgba(255,255,255,0.08)}
/* Sections */
.vi-section{max-width:1200px;margin:0 auto;padding:5rem 2rem}
.vi-section-label{font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;color:var(--muted);margin-bottom:0.5rem}
.vi-section-title{font-family:"DM Serif Display",serif;font-size:clamp(1.8rem,3vw,2.5rem);margin-bottom:0.75rem}
.vi-section-desc{color:var(--muted);margin-bottom:3rem;font-size:1rem}
/* Hành trình */
.hanh-trinh-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem;margin-top:1.5rem}
.hanh-trinh-card{background:rgba(255,255,255,0.04);border:1px solid rgba(255,255,255,0.08);border-radius:12px;padding:1.5rem;display:flex;flex-direction:column;transition:border-color 0.2s}
.hanh-trinh-card:hover{border-color:rgba(232,133,106,0.3)}
.step-num{width:36px;height:36px;border-radius:50%;background:rgba(232,133,106,0.15);border:1px solid rgba(232,133,106,0.35);display:flex;align-items:center;justify-content:center;font-family:"DM Serif Display",serif;font-size:1rem;color:#e8856a;font-weight:700;margin-bottom:1rem;flex-shrink:0}
.step-link{display:inline-flex;align-items:center;gap:0.5rem;font-size:0.82rem;color:#e8856a;text-decoration:none;font-weight:600;margin-top:auto;padding-top:1rem}
.step-link:hover{color:#faf8f4}
.step-soon-badge{display:inline-block;font-size:0.58rem;letter-spacing:1.5px;text-transform:uppercase;font-weight:700;padding:2px 7px;border-radius:100px;background:rgba(250,248,244,0.07);color:rgba(250,248,244,0.38);border:1px solid rgba(250,248,244,0.1)}
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
/* Articles grid */
.vi-articles-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.vi-art-preview{display:block;background:var(--white);border-radius:var(--radius);overflow:hidden;text-decoration:none;color:inherit;box-shadow:var(--shadow-sm);transition:transform 0.3s,box-shadow 0.3s}
.vi-art-preview:hover{transform:translateY(-5px);box-shadow:var(--shadow-lg)}
.vi-art-preview-img{height:180px;overflow:hidden}
.vi-art-preview-body{padding:1.5rem}
.vi-art-preview-cat{display:inline-block;font-size:0.65rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#1a5f8a;margin-bottom:0.75rem}
.vi-art-preview-body h3{font-family:"DM Serif Display",serif;font-size:1rem;line-height:1.4;margin-bottom:0.75rem;color:var(--ink)}
.vi-art-preview-body p{font-size:0.85rem;color:var(--muted);line-height:1.6;margin-bottom:1rem}
.vi-art-preview-more{font-size:0.82rem;font-weight:700;color:#1a5f8a}
/* CTA Final */
.vi-cta-final{background:linear-gradient(135deg,rgba(191,74,42,0.9),#8b2f14);padding:5rem 2rem;text-align:center;color:#fff}
.vi-cta-final h2{font-family:"DM Serif Display",serif;font-size:clamp(1.8rem,3vw,2.5rem);margin-bottom:0.5rem}
.vi-cta-final p{color:rgba(255,255,255,0.7);margin-bottom:2rem;font-size:1rem}
.vi-cta-btns{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap}
.vi-cta-white{padding:0.9rem 2.5rem;background:#fff;color:var(--terracotta);border-radius:4px;text-decoration:none;font-weight:700;font-size:0.95rem;transition:0.2s}
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
.vi-nl-form button{padding:0.8rem 1.8rem;background:rgba(191,74,42,0.85);color:#fff;border:none;border-radius:4px;font-weight:600;font-family:inherit;cursor:pointer;transition:0.2s}
.vi-nl-form button:hover{background:rgba(191,74,42,1)}
@media(max-width:900px){.vi-hero-inner{grid-template-columns:1fr}.tt-grid{grid-template-columns:repeat(2,1fr)}.vi-resources-grid{grid-template-columns:1fr}.hanh-trinh-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:640px){.vi-hero-ctas{flex-direction:column}.tt-grid{grid-template-columns:repeat(2,1fr)}.vi-nl-form{flex-direction:column}.vi-cta-btns{flex-direction:column;align-items:center}}
@media(max-width:520px){.vi-articles-grid{grid-template-columns:1fr}.hanh-trinh-grid{grid-template-columns:1fr}}
';

include '../header.php';
?>

<!-- ══ HERO ══ -->
<header class="vi-hero">
  <div class="vi-hero-inner">
    <div>
      <div class="vi-hero-badge">Lấy chồng Pháp · Sang Pháp định cư</div>
      <h1>Bạn lấy chồng Pháp —<br>chúng tôi giúp bạn<br><em>sang Pháp định cư</em></h1>
      <p class="vi-hero-sub">
        Anthony — người Pháp có vợ người Việt, sống tại Hà Nội.<br>
        Blog tiếng Pháp chia sẻ từng bước thủ tục cho các cặp đôi Franco-Vietnamien — từ hôn lễ đến thẻ cư trú.
      </p>
      <div class="vi-hero-ctas">
        <a class="cta-primary-vi" href="dua-vo-chong-viet-sang-phap">📖 Hướng dẫn đầy đủ</a>
        <a class="cta-secondary-vi" href="#hanh-trinh">🗺️ Hành trình của bạn</a>
      </div>
      <div class="vi-stats">
        <div><div class="vi-stat-num">5</div><div class="vi-stat-label">Bước hành chính</div></div>
        <div><div class="vi-stat-num">6</div><div class="vi-stat-label">Video bài học</div></div>
        <div><div class="vi-stat-num">100%</div><div class="vi-stat-label">Miễn phí</div></div>
      </div>
    </div>
    <div class="vi-profile-card">
      <div class="vi-profile-avatar">
        <img src="../<?= PROFILE_PHOTO ?>" alt="Anthony Bouillon" width="120" height="120" loading="eager" decoding="async">
      </div>
      <div class="vi-profile-name"><?= SITE_AUTHOR ?></div>
      <div class="vi-profile-role">🇫🇷 Người Pháp • 💍 Có vợ người Việt • 📍 Hà Nội</div>
      <p class="vi-profile-text">
        Mình đến Việt Nam năm <?= SITE_YEAR ?> và lấy vợ người Việt.<br>
        Blog tiếng Pháp của mình giải thích từng bước thủ tục — để cặp đôi cùng chuẩn bị hành trình sang Pháp.
      </p>
      <div class="vi-profile-tags">
        <span class="vi-tag">📍 Hà Nội</span>
        <span class="vi-tag">💍 Vợ người Việt</span>
        <span class="vi-tag">🇫🇷 Blog tiếng Pháp</span>
        <span class="vi-tag">✈️ Sang Pháp</span>
      </div>
    </div>
  </div>
</header>

<!-- ══ HÀNH TRÌNH CỦA BẠN ══ -->
<section id="hanh-trinh" style="background:var(--ink);padding:5rem 2rem">
  <div style="max-width:1200px;margin:0 auto">
    <div class="vi-section-label" style="color:rgba(250,248,244,0.4)">Lộ trình · Parcours</div>
    <h2 class="vi-section-title" style="color:#faf8f4">🗺️ Hành trình của bạn — từng bước một</h2>
    <p class="vi-section-desc" style="color:rgba(250,248,244,0.5);margin-bottom:2rem">Từ hôn lễ tại Việt Nam đến thẻ cư trú tại Pháp — 5 bước hành chính, mỗi bước có hướng dẫn chi tiết bằng tiếng Pháp.</p>

    <!-- Overview banner -->
    <div style="background:rgba(191,74,42,0.12);border:1px solid rgba(232,133,106,0.22);border-radius:12px;padding:1.5rem 2rem;margin-bottom:2rem;display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap">
      <div style="font-size:2rem;flex-shrink:0">📖</div>
      <div style="flex:1;min-width:200px">
        <div style="font-size:0.62rem;letter-spacing:3px;text-transform:uppercase;color:#e8856a;margin-bottom:0.3rem;font-weight:700">Tổng quan</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.1rem;color:#faf8f4;margin-bottom:0.25rem">Hướng dẫn đầy đủ : đưa vợ/chồng Việt sang Pháp</h3>
        <p style="font-size:0.87rem;color:rgba(250,248,244,0.5);margin:0">Toàn bộ hành trình từ A đến Z — bài viết tổng hợp bằng tiếng Pháp.</p>
      </div>
      <a href="dua-vo-chong-viet-sang-phap" style="display:inline-flex;align-items:center;gap:8px;padding:0.7rem 1.5rem;background:rgba(232,133,106,0.18);border:1px solid rgba(232,133,106,0.35);color:#e8856a;border-radius:6px;text-decoration:none;font-weight:700;font-size:0.87rem;white-space:nowrap">Xem hướng dẫn →</a>
    </div>

    <!-- Step cards -->
    <div class="hanh-trinh-grid">
      <div class="hanh-trinh-card">
        <div class="step-num">1</div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;color:rgba(250,248,244,0.4);margin-bottom:0.4rem;font-weight:600">Trước khi kết hôn</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1rem;color:#faf8f4;margin-bottom:0.5rem;line-height:1.35">Giấy Phép Kết Hôn Lãnh Sự Pháp (CCAM)</h3>
        <p style="font-size:0.84rem;color:rgba(250,248,244,0.5);line-height:1.6;flex:1">Chú rể Pháp phải xin giấy này tại Lãnh sự quán trước buổi lễ. Miễn phí, 4–6 tuần.</p>
        <a href="giay-phep-ket-hon-lanh-su-phap-ccam" class="step-link">Xem hướng dẫn →</a>
      </div>

      <div class="hanh-trinh-card">
        <div class="step-num">2</div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;color:rgba(250,248,244,0.4);margin-bottom:0.4rem;font-weight:600">Hôn lễ</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1rem;color:#faf8f4;margin-bottom:0.5rem;line-height:1.35">Đăng Ký Kết Hôn tại Ủy Ban Nhân Dân</h3>
        <p style="font-size:0.84rem;color:rgba(250,248,244,0.5);line-height:1.6;flex:1">Buổi lễ dân sự tại UBND — giấy tờ cần thiết và điều cần biết ngày đó.</p>
        <a href="dang-ky-ket-hon-ubnd" class="step-link">Xem hướng dẫn →</a>
      </div>

      <div class="hanh-trinh-card">
        <div class="step-num">3</div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;color:rgba(250,248,244,0.4);margin-bottom:0.4rem;font-weight:600">Đăng ký hôn thú tại Pháp</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1rem;color:#faf8f4;margin-bottom:0.5rem;line-height:1.35">Chuyển Hộ Tịch Về Nantes</h3>
        <p style="font-size:0.84rem;color:rgba(250,248,244,0.5);line-height:1.6;flex:1">Hôn thú Việt Nam phải được đăng ký tại Trung tâm Hộ tịch Nantes để có giá trị pháp lý tại Pháp.</p>
        <a href="chuyen-ho-tich-nantes" class="step-link">Xem hướng dẫn →</a>
      </div>

      <div class="hanh-trinh-card">
        <div class="step-num">4</div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;color:rgba(250,248,244,0.4);margin-bottom:0.4rem;font-weight:600">Sang Pháp</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1rem;color:#faf8f4;margin-bottom:0.5rem;line-height:1.35">Visa Dài Hạn Sang Pháp (VLS-TS)</h3>
        <p style="font-size:0.84rem;color:rgba(250,248,244,0.5);line-height:1.6;flex:1">Xin visa dài hạn tại Lãnh sự quán Pháp — hồ sơ, thời gian chờ và chi phí.</p>
        <a href="visa-dai-han-vo-chong-sang-phap" class="step-link">Xem hướng dẫn →</a>
      </div>

      <div class="hanh-trinh-card">
        <div class="step-num">5</div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;color:rgba(250,248,244,0.4);margin-bottom:0.4rem;font-weight:600">Định cư tại Pháp</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1rem;color:#faf8f4;margin-bottom:0.5rem;line-height:1.35">Thẻ Cư Trú Tại Pháp</h3>
        <p style="font-size:0.84rem;color:rgba(250,248,244,0.5);line-height:1.6;flex:1">Sau khi đến Pháp, xác nhận visa với OFII rồi xin thẻ cư trú qua cổng ANEF.</p>
        <a href="the-cu-tru-tai-phap" class="step-link">Xem hướng dẫn →</a>
      </div>
    </div>
  </div>
</section>

<!-- ══ TIKTOK BÀI HỌC ══ -->
<section class="vi-section" id="bai-hoc" style="background:var(--cream)">
  <div class="vi-section-label">Học tiếng Pháp / Intégration</div>
  <h2 class="vi-section-title">📹 Học tiếng Pháp — công cụ hội nhập</h2>
  <p class="vi-section-desc">Tiếng Pháp là chìa khóa để hội nhập cuộc sống tại Pháp. Mỗi video 60 giây — đơn giản, thực tế, miễn phí.</p>
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
    <a class="vi-art-preview" href="tai-sao-hoc-tieng-phap">
      <div class="vi-art-preview-img">
        <div class="tt-thumb bg-vocab" style="height:180px;border-radius:0"><span class="tt-lesson-num">Lý do học</span><div class="tt-thumb-emoji">🗺️</div></div>
      </div>
      <div class="vi-art-preview-body">
        <div class="vi-art-preview-cat">Lý do học</div>
        <h3>Tại Sao Nên Học Tiếng Pháp? 6 Lý Do Thực Tế Dành Cho Người Việt</h3>
        <p>Canada, châu Phi, du học Pháp... Mình chia sẻ 6 cơ hội thực tế đang chờ người Việt biết tiếng Pháp.</p>
        <span class="vi-art-preview-more">Đọc thêm →</span>
      </div>
    </a>
    <a class="vi-art-preview" href="loi-phat-am-tieng-phap-nguoi-viet">
      <div class="vi-art-preview-img">
        <div class="tt-thumb bg-convo" style="height:180px;border-radius:0"><span class="tt-lesson-num">Phát âm</span><div class="tt-thumb-emoji">🗣️</div></div>
      </div>
      <div class="vi-art-preview-body">
        <div class="vi-art-preview-cat">Phát âm</div>
        <h3>7 Lỗi Phát Âm Tiếng Pháp Mà Người Việt Thường Mắc (Và Cách Sửa)</h3>
        <p>Âm R, nguyên âm mũi, chữ U... Mình giải thích từng lỗi với ví dụ cụ thể và cách luyện.</p>
        <span class="vi-art-preview-more">Đọc thêm →</span>
      </div>
    </a>
    <a class="vi-art-preview" href="hoc-tieng-phap-online-mien-phi">
      <div class="vi-art-preview-img">
        <div class="tt-thumb bg-grammar" style="height:180px;border-radius:0"><span class="tt-lesson-num">Tài nguyên</span><div class="tt-thumb-emoji">📚</div></div>
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
    <a class="vi-res-card" href="../apprendre-francais-capvietnam">
      <div class="vi-res-icon">🎓</div>
      <div class="vi-res-body">
        <h3>Trang học tiếng Pháp đầy đủ</h3>
        <p>Xem tất cả video theo cấp độ (Cơ bản → Trung cấp → Nâng cao) và tài liệu học tập trên trang đầy đủ.</p>
        <span class="vi-res-badge badge-ext">Xem trang →</span>
      </div>
    </a>
  </div>
</section>

<!-- ══ CTA FINAL ══ -->
<section class="vi-cta-final">
  <h2>Bắt đầu hành trình sang Pháp 🇫🇷</h2>
  <p>Toàn bộ hướng dẫn thủ tục — miễn phí, bằng tiếng Pháp, từng bước một.</p>
  <div class="vi-cta-btns">
    <a class="vi-cta-white" href="dua-vo-chong-viet-sang-phap">📖 Tổng quan hành trình</a>
    <a class="vi-cta-outline" href="../500-mots-essentiels-francais-vietnamien.pdf" target="_blank" rel="noopener">📄 Tải PDF 500 từ vựng</a>
  </div>
</section>

<!-- ══ NEWSLETTER ══ -->
<section class="vi-newsletter">
  <h2>Nhận bài viết qua email ✉️</h2>
  <p>Đăng ký nhận hướng dẫn mới — miễn phí, không spam.</p>
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
document.querySelectorAll('.tt-card,.vi-res-card,.hanh-trinh-card').forEach((el,i) => {
  el.style.opacity='0';el.style.transform='translateY(20px)';
  el.style.transition='opacity 0.4s ease '+(i*0.05)+'s, transform 0.4s ease '+(i*0.05)+'s';
  _viObs.observe(el);
});
</script>

<?php include '../footer.php'; ?>
