<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../se-marier-vietnam-procedure-comite-populaire',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang = [
  'fr'        => SITE_URL . '/se-marier-vietnam-procedure-comite-populaire',
  'vi'        => SITE_URL . '/vi/dang-ky-ket-hon-ubnd',
  'x-default' => SITE_URL . '/se-marier-vietnam-procedure-comite-populaire',
];

$page_title       = 'Đăng Ký Kết Hôn tại UBND cho cặp đôi Pháp-Việt : thủ tục đầy đủ 2026';
$page_description = 'Thủ tục đăng ký kết hôn tại Ủy Ban Nhân Dân Việt Nam cho cặp đôi Pháp-Việt : giấy tờ cần thiết, diễn biến ngày lễ, những điều cần biết trước khi đến.';
$page_canonical   = SITE_URL . '/vi/dang-ky-ket-hon-ubnd';
$page_og_title    = 'Đăng Ký Kết Hôn tại UBND — Cặp đôi Pháp-Việt : hướng dẫn 2026';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/mariage-franco-vietnamien-ceremonie.png';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Đăng Ký Kết Hôn tại UBND cho cặp đôi Pháp-Việt : thủ tục đầy đủ 2026',
  'description'      => $page_description,
  'image'            => $page_og_image,
  'author'           => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/vi/'],
  'publisher'        => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'datePublished'    => '2026-06-16',
  'dateModified'     => '2026-06-16',
  'url'              => $page_canonical,
  'inLanguage'       => 'vi',
  'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $page_canonical],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$page_extra_css = '
.vi-art-hero{padding-top:64px;background:linear-gradient(165deg,#1a0a1f 0%,#3d1a3a 45%,#1f0d1c 100%);position:relative;overflow:hidden}
.vi-art-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,rgba(123,63,114,0.18),transparent 60%),radial-gradient(ellipse 50% 40% at 80% 20%,rgba(191,74,42,0.1),transparent 60%)}
.vi-art-hero-inner{max-width:860px;margin:0 auto;padding:4rem 2rem 3rem;position:relative;z-index:1}
.vi-art-meta{display:flex;gap:1rem;align-items:center;flex-wrap:wrap;margin-bottom:1.5rem}
.vi-art-cat{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:4px 12px;border-radius:3px;background:rgba(123,63,114,0.3);color:#c98ec4;border:1px solid rgba(201,142,196,0.2)}
.vi-art-date,.vi-art-read{font-size:0.8rem;color:rgba(250,248,244,0.45)}
.vi-art-hero h1{font-family:"DM Serif Display",serif;font-size:clamp(1.9rem,4.5vw,2.8rem);color:#fff;line-height:1.25;margin-bottom:1rem}
.vi-art-hero-desc{font-size:1.05rem;color:rgba(250,248,244,0.6);line-height:1.8;max-width:700px}
.vi-art-hero-img-wrap{overflow:hidden;max-height:420px}
.vi-art-hero-img-wrap img{width:100%;height:420px;object-fit:cover;display:block}
.vi-art-body{max-width:760px;margin:0 auto;padding:4rem 2rem}
.vi-art-body h2{font-family:"DM Serif Display",serif;font-size:1.65rem;margin:2.5rem 0 1rem;color:var(--ink);padding-top:1rem;border-top:2px solid var(--warm-bg)}
.vi-art-body p{font-size:1rem;line-height:1.9;color:#333;margin-bottom:1.25rem}
.vi-art-body ul,.vi-art-body ol{padding-left:1.5rem;margin-bottom:1.25rem}
.vi-art-body li{font-size:1rem;line-height:1.8;color:#333;margin-bottom:0.5rem}
.vi-art-body strong{color:var(--ink)}
.vi-art-body a{color:#7b3f72;text-decoration:underline}
.vi-art-tip{background:rgba(123,63,114,0.06);border-left:3px solid #7b3f72;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-art-tip strong{color:#7b3f72}
.vi-art-table{width:100%;border-collapse:collapse;font-size:0.9rem;border-radius:10px;overflow:hidden;border:1px solid rgba(123,63,114,0.18);margin:1.5rem 0}
.vi-art-table thead tr{background:rgba(123,63,114,0.22)}
.vi-art-table th{padding:0.7rem 1rem;text-align:left;color:#c98ec4;font-size:0.7rem;letter-spacing:1.5px;font-weight:700}
.vi-art-table td{padding:0.75rem 1rem;font-size:0.87rem;border-bottom:1px solid rgba(0,0,0,0.06)}
.vi-art-table tr:nth-child(even) td{background:rgba(123,63,114,0.03)}
.vi-art-nav{display:flex;justify-content:space-between;align-items:center;gap:1rem;flex-wrap:wrap;margin:3rem 0;padding:1.5rem;background:var(--warm-bg);border-radius:var(--radius)}
.vi-art-nav a{display:inline-flex;align-items:center;gap:6px;padding:0.7rem 1.4rem;background:#7b3f72;color:#fff;border-radius:4px;text-decoration:none;font-weight:700;font-size:0.88rem}
.vi-art-nav a:hover{background:#5d2e55}
';

include '../header.php';
?>

<header class="vi-art-hero">
  <div class="vi-art-hero-inner">
    <div class="vi-art-meta">
      <span class="vi-art-cat">Bước 2 — Hôn lễ</span>
      <span class="vi-art-date">Tháng 6, 2026</span>
      <span class="vi-art-read">⏱ 8 phút đọc</span>
    </div>
    <h1>Đăng Ký Kết Hôn tại UBND :<br>Thủ tục cho cặp đôi Pháp-Việt 2026</h1>
    <p class="vi-art-hero-desc">
      Buổi lễ đăng ký kết hôn dân sự tại Ủy Ban Nhân Dân — giấy tờ hai bên cần chuẩn bị, diễn biến ngày đó và những điều cần biết.
    </p>
  </div>
  <div class="vi-art-hero-img-wrap">
    <img src="../assets/img/mariage-franco-vietnamien-ceremonie.png"
         alt="Lễ cưới Pháp-Việt tại Việt Nam"
         width="1200" height="420" loading="eager" decoding="async">
  </div>
</header>

<div style="background:var(--warm-bg);padding:0.75rem 2rem;font-size:0.82rem;color:var(--muted)">
  <div style="max-width:860px;margin:0 auto">
    <a href="../vi/" style="color:#7b3f72">Trang chủ</a> ›
    <a href="../vi/#hanh-trinh" style="color:#7b3f72">Hành trình của bạn</a> ›
    <span>Đăng ký tại UBND</span>
  </div>
</div>

<main>
<article class="vi-art-body">

  <p><strong>Đây là ngày quan trọng nhất trong hành trình — ngày đăng ký kết hôn dân sự tại Ủy Ban Nhân Dân (UBND).</strong> Không cần chuẩn bị quá nhiều nếu hồ sơ đã đầy đủ. Buổi lễ thực chất là một thủ tục hành chính ngắn khoảng 30 phút — nhưng từ đó bạn mới có giấy tờ hợp pháp để làm các bước tiếp theo.</p>

  <p>Bài viết này là bước 2 của <a href="../vi/#hanh-trinh">hành trình đưa vợ/chồng Việt sang Pháp</a>. Xem <a href="../se-marier-vietnam-procedure-comite-populaire">bản tiếng Pháp đầy đủ →</a></p>

  <h2>Tổng quan quy trình</h2>
  <p>Kết hôn dân sự tại Việt Nam được đăng ký tại <strong>UBND cấp xã/phường/thị trấn</strong> nơi người bạn đời Việt Nam thường trú. Đối với hôn nhân có yếu tố nước ngoài, UBND cấp quận/huyện hoặc Sở Tư pháp tỉnh thành thường có thẩm quyền (tùy địa phương — nên xác nhận trước).</p>
  <p>Ba bước chính:</p>
  <ol>
    <li>Có CCAM từ lãnh sự quán Pháp (xem <a href="giay-phep-ket-hon-lanh-su-phap-ccam">Bước 1 — CCAM</a>)</li>
    <li>Chuẩn bị hồ sơ hai bên</li>
    <li>Có mặt tại UBND vào ngày ấn định để ký giấy đăng ký kết hôn</li>
  </ol>

  <h2>Hồ sơ phía người Pháp</h2>

  <div style="overflow-x:auto;margin:1.5rem 0">
  <table class="vi-art-table">
    <thead>
      <tr><th>GIẤY TỜ</th><th>GHI CHÚ</th><th>THỜI GIAN CHỜ</th></tr>
    </thead>
    <tbody>
      <tr><td><strong>CCAM</strong> — Giấy Phép Kết Hôn Lãnh Sự Pháp</td><td>Lãnh sự quán Pháp cấp (Hà Nội hoặc TP.HCM)</td><td>4–6 tuần</td></tr>
      <tr><td><strong>Hộ chiếu Pháp</strong> còn hiệu lực</td><td>Bản gốc + bản sao</td><td>—</td></tr>
      <tr><td><strong>Giấy khai sinh</strong> người Pháp</td><td>Bản đầy đủ, mới nhất (không quá 6 tháng)</td><td>5–10 ngày</td></tr>
      <tr><td><strong>Chứng nhận độc thân</strong> (nếu chưa từng kết hôn)</td><td>Hoặc bản án ly hôn nếu đã ly hôn</td><td>Thay đổi</td></tr>
    </tbody>
  </table>
  </div>

  <h2>Hồ sơ phía người Việt Nam</h2>

  <div style="overflow-x:auto;margin:1.5rem 0">
  <table class="vi-art-table">
    <thead>
      <tr><th>GIẤY TỜ</th><th>GHI CHÚ</th></tr>
    </thead>
    <tbody>
      <tr><td><strong>Đơn đăng ký kết hôn</strong> (tờ khai đăng ký kết hôn)</td><td>Lấy tại UBND có thẩm quyền</td></tr>
      <tr><td><strong>Giấy khai sinh</strong></td><td>Bản gốc</td></tr>
      <tr><td><strong>CCCD hoặc hộ chiếu</strong></td><td>Còn hiệu lực</td></tr>
      <tr><td><strong>Sổ hộ khẩu</strong> hoặc giấy xác nhận thông tin cư trú</td><td>—</td></tr>
      <tr><td><strong>Xác nhận tình trạng hôn nhân</strong> (chưa có vợ/chồng)</td><td>Do UBND nơi cư trú cấp, thường vài ngày</td></tr>
    </tbody>
  </table>
  </div>

  <div class="vi-art-tip">
    <strong>Lưu ý:</strong> Danh sách giấy tờ có thể thay đổi tùy tỉnh/thành phố và quận/huyện. Hãy liên hệ UBND địa phương để xác nhận danh sách chính xác trước khi nộp hồ sơ.
  </div>

  <h2>Diễn biến ngày đăng ký</h2>
  <p>Buổi lễ đăng ký kết hôn tại UBND không phải là buổi lễ hoành tráng — đây là thủ tục hành chính diễn ra trong khoảng <strong>30 phút</strong>. Cả hai vợ chồng cùng ký vào giấy đăng ký kết hôn trước sự chứng kiến của cán bộ hộ tịch.</p>
  <ul>
    <li><strong>Bắt buộc có mặt</strong> cả hai người — không thể ủy quyền</li>
    <li>Mang đủ giấy tờ gốc và bản sao</li>
    <li>Có thể cần phiên dịch nếu người Pháp không nói được tiếng Việt (hỏi UBND trước)</li>
  </ul>
  <p>Sau khi ký, UBND trao <strong>Giấy chứng nhận đăng ký kết hôn</strong> — đây là tài liệu gốc của hôn nhân, sẽ cần cho tất cả các bước tiếp theo.</p>

  <h2>Sau lễ đăng ký — bước tiếp theo</h2>
  <p>Xin chúc mừng! Nhưng thủ tục hành chính vẫn chưa kết thúc. Ngay sau đó cần:</p>
  <ol>
    <li><strong>Đăng ký hộ tịch tại Nantes</strong> — để hôn nhân có giá trị pháp lý tại Pháp → <a href="chuyen-ho-tich-nantes">Bước 3 : Đăng ký tại Nantes</a></li>
    <li>Nếu muốn bạn đời sang Pháp : <strong>xin visa dài hạn</strong> → <a href="visa-dai-han-vo-chong-sang-phap">Bước 4 : Visa VLS-TS</a></li>
  </ol>

  <h2>Câu hỏi thường gặp</h2>

  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Hôn nhân tại Việt Nam có được công nhận tại Pháp không?</summary>
    <p style="margin-top:0.75rem;color:#555">Có, với điều kiện đã có CCAM <em>trước</em> lễ cưới và sau đó đăng ký hộ tịch tại Trung tâm Hộ tịch Quốc gia Nantes. Thiếu một trong hai điều kiện này thì hôn nhân không có giá trị pháp lý tại Pháp.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Có cần cưới thêm một lần nữa ở Pháp không?</summary>
    <p style="margin-top:0.75rem;color:#555">Không. Nếu đã đăng ký hộ tịch tại Nantes, hôn nhân tại Việt Nam có giá trị pháp lý hoàn toàn tại Pháp — tương đương kết hôn tại tòa thị chính Pháp. Bạn có thể tổ chức lễ kỷ niệm nếu muốn, nhưng không bắt buộc.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Thủ tục mất bao lâu từ đầu đến cuối?</summary>
    <p style="margin-top:0.75rem;color:#555">Từ khi có CCAM đến ngày cưới tại UBND: tính từ 2 đến 6 tháng, tùy thời gian xử lý hồ sơ của UBND địa phương và độ hoàn chỉnh của hồ sơ.</p>
  </details>

  <div class="vi-art-nav">
    <div>
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">← Bước trước</div>
      <a href="giay-phep-ket-hon-lanh-su-phap-ccam">CCAM — Bước 1</a>
    </div>
    <div style="text-align:right">
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">Bước tiếp theo →</div>
      <a href="chuyen-ho-tich-nantes">Đăng ký tại Nantes — Bước 3</a>
    </div>
  </div>

  <div style="background:rgba(123,63,114,0.06);border-radius:var(--radius);padding:1.5rem;margin-top:2rem;display:flex;gap:1rem;align-items:center">
    <div style="overflow:hidden;border-radius:50%;width:60px;height:60px;flex-shrink:0;position:relative">
      <img src="../assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="60" height="60" loading="lazy" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0">
    </div>
    <div>
      <strong style="font-size:0.9rem">Anthony Bouillon</strong>
      <p style="margin:0;font-size:0.85rem;color:var(--muted)">Người Pháp kết hôn với người Việt Nam, đang sống tại Hà Nội. Mình chia sẻ hành trình thực tế — thủ tục hành chính, cuộc sống đôi lứa quốc tế.</p>
    </div>
  </div>

</article>
</main>

<?php include '../footer.php'; ?>
