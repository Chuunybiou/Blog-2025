<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix    = '../';
$page_lang      = 'vi';
$page_og_locale = 'vi_VN';
$page_lang_switch = [
  'href'  => '../merci-guide',
  'label' => '🇫🇷 Version française',
  'title' => 'Version française',
];

$page_title       = 'Cảm ơn bạn — Tải tài liệu miễn phí | Cap Vietnam';
$page_description = 'Gói tài liệu miễn phí của bạn đã sẵn sàng : hướng dẫn PDF kết hôn & visa, mẫu thư CCAM, mẫu thư nhắc nhở đại sứ quán, và checklist CCAM đầy đủ.';
$page_canonical   = SITE_URL . '/vi/merci';
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';

$page_extra_css = '
.merci-hero{padding-top:64px;min-height:70vh;background:linear-gradient(160deg,#0d1829 0%,#1a2744 60%,#0d1829 100%);display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.merci-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 60% at 50% 50%,rgba(212,168,75,0.06),transparent 70%)}
.merci-inner{max-width:600px;margin:0 auto;padding:4rem 2rem;text-align:center;position:relative;z-index:1}
.merci-check{width:70px;height:70px;background:linear-gradient(135deg,#4db890,#1b4a35);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:2rem;margin:0 auto 2rem;color:#fff}
.merci-hero h1{font-family:"DM Serif Display",serif;font-size:clamp(2rem,4vw,2.8rem);color:#faf8f4;line-height:1.2;margin-bottom:1rem}
.merci-hero h1 em{color:#4db890;font-style:normal}
.merci-hero p{color:rgba(250,248,244,0.55);line-height:1.7;margin-bottom:0;max-width:460px;margin-left:auto;margin-right:auto}
.dl-btn{display:inline-block;padding:0.9rem 2rem;background:#4db890;color:#0d2b1f;font-weight:700;border-radius:6px;text-decoration:none;font-size:0.95rem;transition:opacity 0.2s;margin-top:1.5rem}
.dl-btn:hover{opacity:0.88}
.dl-note{display:block;font-size:0.75rem;color:rgba(250,248,244,0.3);margin-top:0.6rem}
.step-section{max-width:680px;margin:0 auto;padding:4rem 2rem}
.step-card{background:#fff;border:1px solid #e5e1d8;border-radius:10px;padding:1.5rem;margin-bottom:1rem;display:flex;gap:1.25rem;align-items:flex-start;text-align:left}
.step-num{width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#d4a84b,#b8860b);color:#fff;font-weight:700;font-size:0.9rem;display:flex;align-items:center;justify-content:center;flex-shrink:0}
.step-card h3{font-family:"DM Serif Display",serif;font-size:1rem;color:#1a1206;margin:0 0 0.25rem}
.step-card p{font-size:0.85rem;color:#888;margin:0;line-height:1.5}
.step-card a{color:#1b4a35;font-weight:600;text-decoration:none}
.modeles-section{background:#f5f3ef;padding:3rem 2rem}
.modeles-inner{max-width:680px;margin:0 auto;text-align:center}
.modeles-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1rem;margin-top:1.5rem;text-align:left}
.modele-card{background:#fff;border:1px solid #e5e1d8;border-radius:8px;padding:1.25rem;display:flex;flex-direction:column;gap:0.5rem}
.modele-card-icon{font-size:1.5rem}
.modele-card h4{font-family:"DM Serif Display",serif;font-size:0.95rem;color:#1a1206;margin:0}
.modele-card p{font-size:0.8rem;color:#999;margin:0;line-height:1.5;flex:1}
.modele-card a{display:inline-block;margin-top:0.5rem;font-size:0.82rem;font-weight:700;color:#1b4a35;text-decoration:none}
.modele-card a:hover{text-decoration:underline}
';

include '../header.php';
?>

<div class="merci-hero">
  <div class="merci-inner">
    <div class="merci-check">✓</div>
    <h1>Tài liệu của bạn <em>đã sẵn sàng</em></h1>
    <p>Hướng dẫn PDF kết hôn & visa, 3 mẫu thư chính thức — tất cả miễn phí. Nhấn các nút bên dưới để tải về.</p>
    <a class="dl-btn" href="<?= SITE_URL ?>/Guide_Se_marier_et_vivre_au_Vietnam-1.pdf" download="Guide-Cap-Vietnam-2026.pdf">
      📥 Tải hướng dẫn PDF (tiếng Pháp)
    </a>
    <span class="dl-note">PDF · Phiên bản 2026 · Miễn phí</span>
    <div style="margin-top:1.75rem;background:rgba(255,255,255,0.06);border-radius:8px;padding:1.25rem 1.5rem;text-align:left;max-width:420px;margin-left:auto;margin-right:auto">
      <p style="font-size:0.72rem;color:rgba(250,248,244,0.4);margin:0 0 0.4rem;text-transform:uppercase;letter-spacing:1.5px;font-weight:700">✅ Checklist — In ra giấy</p>
      <p style="font-size:1rem;color:#faf8f4;font-weight:700;margin:0 0 0.4rem;line-height:1.3">Rời Việt Nam sang Pháp : 10 việc cần làm</p>
      <p style="font-size:0.8rem;color:rgba(250,248,244,0.4);margin:0 0 1rem;line-height:1.6">Visa, bảo hiểm sức khỏe quốc tế, tài khoản ngân hàng đa ngoại tệ, SIM địa phương, chỗ ở tạm thời... Danh sách ô vuông để đánh dấu, theo đúng thứ tự. In ra và tích dần.</p>
      <a class="dl-btn" href="<?= SITE_URL ?>/Checklist-Vietnam-CapVietnam.pdf" download="Checklist-Vietnam-CapVietnam.pdf" style="background:#1b4a35;font-size:0.88rem;padding:0.7rem 1.4rem;margin:0">
        📋 Tải checklist
      </a>
    </div>
  </div>
</div>

<!-- 3 MẪU THƯ -->
<div class="modeles-section">
  <div class="modeles-inner">
    <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#1b4a35;margin-bottom:0.5rem">📄 Mẫu thư chính thức</div>
    <h2 style="font-family:'DM Serif Display',serif;font-size:1.5rem;color:#1a1206;margin-bottom:0.5rem">3 mẫu thư — in hoặc lưu PDF</h2>
    <p style="color:#888;font-size:0.9rem;margin-bottom:0">Điền thông tin vào các ô, sau đó nhấn Ctrl+P → "Lưu dưới dạng PDF" từ trình duyệt của bạn.</p>
    <div class="modeles-grid">
      <div class="modele-card">
        <span class="modele-card-icon">✉️</span>
        <h4>Thư xin cấp CCAM</h4>
        <p>Mẫu thư hoàn chỉnh gửi đến Lãnh sự quán Pháp tại Việt Nam — đầy đủ tiêu đề, nội dung và danh sách giấy tờ.</p>
        <a href="<?= SITE_URL ?>/modeles/lettre-ccam">Mở mẫu thư →</a>
      </div>
      <div class="modele-card">
        <span class="modele-card-icon">📬</span>
        <h4>Thư nhắc nhở đại sứ quán</h4>
        <p>Khi Lãnh sự quán không trả lời sau 2 tháng. Mẫu thư nhắc nhở chính thức cho hồ sơ CCAM hoặc visa đang chờ xử lý.</p>
        <a href="<?= SITE_URL ?>/modeles/lettre-suivi-ambassade">Mở mẫu thư →</a>
      </div>
      <div class="modele-card">
        <span class="modele-card-icon">✅</span>
        <h4>Checklist CCAM đầy đủ</h4>
        <p>Ô vuông để tích, cả phía Pháp lẫn phía Việt Nam, hợp pháp hóa lãnh sự, dịch thuật, thứ tự nên làm theo thời gian.</p>
        <a href="<?= SITE_URL ?>/modeles/checklist-ccam">Mở checklist →</a>
      </div>
    </div>
  </div>
</div>

<!-- BƯỚC TIẾP THEO -->
<section class="step-section">
  <h2 style="font-family:'DM Serif Display',serif;font-size:1.5rem;color:#1a1206;margin-bottom:2rem;text-align:center">Các bước tiếp theo</h2>
  <div class="step-card">
    <div class="step-num">1</div>
    <div>
      <h3>Đọc hướng dẫn CCAM bằng tiếng Việt</h3>
      <p>Giấy phép kết hôn lãnh sự Pháp (CCAM) — điều kiện, hồ sơ, thời gian xử lý. <a href="<?= SITE_URL ?>/vi/giay-phep-ket-hon-lanh-su-phap-ccam">Đọc hướng dẫn →</a></p>
    </div>
  </div>
  <div class="step-card">
    <div class="step-num">2</div>
    <div>
      <h3>Chuẩn bị hồ sơ visa dài hạn (VLS-TS)</h3>
      <p>Sau kết hôn, visa VLS-TS là bước tiếp theo để sang Pháp định cư. <a href="<?= SITE_URL ?>/vi/visa-dai-han-vo-chong-sang-phap">Xem hướng dẫn visa →</a></p>
    </div>
  </div>
  <div class="step-card">
    <div class="step-num">3</div>
    <div>
      <h3>Tìm hiểu về cuộc sống thực tế ở Pháp</h3>
      <p>Đăng ký CAF, CPAM, tìm việc làm với bằng cấp Việt Nam, quyền lợi phụ nữ... <a href="<?= SITE_URL ?>/vi/">Xem tất cả bài viết →</a></p>
    </div>
  </div>
  <div style="text-align:center;margin-top:2rem">
    <a href="<?= SITE_URL ?>/vi/" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.8rem 1.8rem;background:#1b4a35;color:#fff;border-radius:6px;font-weight:700;text-decoration:none;font-size:0.9rem">Về trang chủ tiếng Việt →</a>
  </div>
</section>

<?php include '../footer.php'; ?>
