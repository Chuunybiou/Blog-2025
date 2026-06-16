<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../transcription-mariage-service-central-nantes',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang = [
  'fr'        => SITE_URL . '/transcription-mariage-service-central-nantes',
  'vi'        => SITE_URL . '/vi/chuyen-ho-tich-nantes',
  'x-default' => SITE_URL . '/transcription-mariage-service-central-nantes',
];

$page_title       = 'Đăng Ký Hộ Tịch Hôn Nhân tại Nantes (SCEC) : hướng dẫn 2026 | Cap Vietnam';
$page_description = 'Sau khi cưới tại Việt Nam, phải đăng ký hộ tịch tại Trung tâm Hộ tịch Quốc gia Nantes (SCEC). Hồ sơ cần thiết, thời gian xử lý và cách gửi hồ sơ — hướng dẫn đầy đủ 2026.';
$page_canonical   = SITE_URL . '/vi/chuyen-ho-tich-nantes';
$page_og_title    = 'Đăng Ký Hộ Tịch Hôn Nhân tại Nantes : hướng dẫn 2026';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/mariage-franco-vietnamien-ceremonie.png';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Đăng Ký Hộ Tịch Hôn Nhân tại Nantes (SCEC) : hướng dẫn 2026',
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
.vi-art-hero-img-wrap{overflow:hidden;max-height:380px}
.vi-art-hero-img-wrap img{width:100%;height:380px;object-fit:cover;display:block}
.vi-art-body{max-width:760px;margin:0 auto;padding:4rem 2rem}
.vi-art-body h2{font-family:"DM Serif Display",serif;font-size:1.65rem;margin:2.5rem 0 1rem;color:var(--ink);padding-top:1rem;border-top:2px solid var(--warm-bg)}
.vi-art-body p{font-size:1rem;line-height:1.9;color:#333;margin-bottom:1.25rem}
.vi-art-body ul,.vi-art-body ol{padding-left:1.5rem;margin-bottom:1.25rem}
.vi-art-body li{font-size:1rem;line-height:1.8;color:#333;margin-bottom:0.5rem}
.vi-art-body strong{color:var(--ink)}
.vi-art-body a{color:#7b3f72;text-decoration:underline}
.vi-art-tip{background:rgba(123,63,114,0.06);border-left:3px solid #7b3f72;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-art-tip strong{color:#7b3f72}
.vi-art-table{width:100%;border-collapse:collapse;font-size:0.88rem;border-radius:10px;overflow:hidden;border:1px solid rgba(123,63,114,0.18);margin:1.5rem 0}
.vi-art-table thead tr{background:rgba(123,63,114,0.22)}
.vi-art-table th{padding:0.7rem 1rem;text-align:left;color:#c98ec4;font-size:0.7rem;letter-spacing:1.5px;font-weight:700}
.vi-art-table td{padding:0.75rem 1rem;font-size:0.85rem;border-bottom:1px solid rgba(0,0,0,0.06)}
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
      <span class="vi-art-cat">Bước 3 — Đăng ký hôn thú tại Pháp</span>
      <span class="vi-art-date">Tháng 6, 2026</span>
      <span class="vi-art-read">⏱ 8 phút đọc</span>
    </div>
    <h1>Đăng Ký Hộ Tịch Hôn Nhân tại Nantes (SCEC) :<br>Hướng dẫn đầy đủ 2026</h1>
    <p class="vi-art-hero-desc">
      Sau khi cưới tại Việt Nam, hôn nhân cần được đăng ký tại <strong>Trung tâm Hộ tịch Quốc gia Nantes</strong> mới có giá trị pháp lý tại Pháp. Hồ sơ, thời gian xử lý và cách gửi từ Việt Nam.
    </p>
  </div>
  <div class="vi-art-hero-img-wrap">
    <img src="../assets/img/mariage-franco-vietnamien-ceremonie.png"
         alt="Đăng ký hộ tịch hôn nhân tại Nantes — cặp đôi Pháp-Việt"
         width="1200" height="380" loading="eager" decoding="async">
  </div>
</header>

<div style="background:var(--warm-bg);padding:0.75rem 2rem;font-size:0.82rem;color:var(--muted)">
  <div style="max-width:860px;margin:0 auto">
    <a href="../vi/" style="color:#7b3f72">Trang chủ</a> ›
    <a href="../vi/#hanh-trinh" style="color:#7b3f72">Hành trình của bạn</a> ›
    <span>Đăng ký tại Nantes</span>
  </div>
</div>

<main>
<article class="vi-art-body">

  <p><strong>Đám cưới đã xong — chúc mừng!</strong> Nhưng để hôn nhân của bạn được công nhận đầy đủ tại Pháp, cần thêm một bước quan trọng: đăng ký hộ tịch tại <strong>Trung tâm Hộ tịch Quốc gia (SCEC)</strong> ở Nantes. Đây là cơ quan duy nhất của Pháp có thẩm quyền ghi nhận hôn nhân của người Pháp kết hôn ở nước ngoài.</p>

  <p>Bài viết này là bước 3 của <a href="../vi/#hanh-trinh">hành trình đưa vợ/chồng Việt sang Pháp</a>. Xem <a href="../transcription-mariage-service-central-nantes">bản tiếng Pháp đầy đủ →</a></p>

  <h2>Đăng ký hộ tịch là gì?</h2>
  <p>Đăng ký hộ tịch (transcription) là việc ghi nhận một giấy tờ hộ tịch nước ngoài vào sổ hộ tịch của Pháp. Sau khi được đăng ký, hôn nhân tại Việt Nam của bạn có đầy đủ giá trị pháp lý tại Pháp, tương đương với kết hôn tại tòa thị chính Pháp:</p>
  <ul>
    <li>Quyền thừa kế</li>
    <li>Xin visa dài hạn cho vợ/chồng sang Pháp</li>
    <li>Chứng minh hôn nhân với các cơ quan xã hội Pháp (CAF, CPAM…)</li>
    <li>Lập sổ gia đình Pháp</li>
  </ul>

  <h2>Tại sao phải làm ở Nantes?</h2>
  <p>SCEC (Service Central d'État Civil) ở Nantes là <strong>cơ quan duy nhất</strong> của Pháp có thẩm quyền xử lý yêu cầu đăng ký hộ tịch cho hôn nhân của người Pháp kết hôn ở nước ngoài. Địa chỉ: <em>11 rue de la Maison Blanche, 44941 Nantes Cedex 9</em>.</p>

  <h2>Điều kiện để được đăng ký</h2>
  <ul>
    <li>Ít nhất một trong hai vợ chồng <strong>mang quốc tịch Pháp</strong> tại thời điểm đăng ký</li>
    <li>Hôn nhân được tổ chức hợp pháp theo luật Việt Nam (đã có CCAM trước lễ cưới)</li>
    <li>Hôn nhân không vi phạm trật tự công cộng Pháp (không đa thê, tự nguyện, đủ tuổi kết hôn)</li>
  </ul>
  <p>→ Nếu chưa có CCAM, đọc trước <a href="giay-phep-ket-hon-lanh-su-phap-ccam">Bước 1 — CCAM</a>.</p>

  <h2>Hồ sơ cần chuẩn bị</h2>

  <div style="overflow-x:auto;margin:1.5rem 0">
  <table class="vi-art-table">
    <thead>
      <tr><th>GIẤY TỜ</th><th>MÔ TẢ</th><th>GHI CHÚ</th></tr>
    </thead>
    <tbody>
      <tr><td><strong>Đơn đăng ký hộ tịch</strong></td><td>Tải trên trang service-public.fr</td><td>—</td></tr>
      <tr><td><strong>CCAM</strong></td><td>Giấy Phép Kết Hôn Lãnh Sự Pháp</td><td>Không cần hợp pháp hóa (giấy tờ Pháp)</td></tr>
      <tr><td><strong>Giấy đăng ký kết hôn Việt Nam</strong></td><td>Bản chính thức từ UBND</td><td>Hợp pháp hóa (hoặc apostille từ 11/09/2026) + dịch công chứng</td></tr>
      <tr><td><strong>Giấy khai sinh người Pháp</strong></td><td>Bản đầy đủ, không quá 3 tháng</td><td>Có thể xin tại SCEC Nantes</td></tr>
      <tr><td><strong>Giấy khai sinh người Việt Nam</strong></td><td>Bản gốc</td><td>Dịch công chứng + hợp pháp hóa</td></tr>
      <tr><td><strong>Hộ chiếu cả hai vợ chồng</strong></td><td>Sao chép tất cả các trang</td><td>—</td></tr>
      <tr><td><strong>Chứng minh địa chỉ tại Pháp</strong></td><td>Hóa đơn không quá 3 tháng</td><td>Hoặc giấy xác nhận cư trú</td></tr>
    </tbody>
  </table>
  </div>

  <div class="vi-art-tip">
    <strong>Hợp pháp hóa hay apostille? (2026)</strong> Giấy tờ Việt Nam hiện nay cần được <strong>hợp pháp hóa lãnh sự</strong>. Từ <strong>11/09/2026</strong>, <strong>apostille</strong> (Công ước La Haye — Việt Nam đã ký kết 31/12/2025) sẽ thay thế hợp pháp hóa. Cơ quan cấp apostille: Bộ Ngoại giao Việt Nam (Hà Nội / TP.HCM).
  </div>

  <div class="vi-art-tip">
    <strong>Về dịch thuật:</strong> Tất cả giấy tờ bằng tiếng Việt phải được dịch sang tiếng Pháp bởi <strong>phiên dịch viên có tuyên thệ tại Tòa án Pháp</strong>. Các công ty dịch thuật tại Việt Nam thường không được SCEC chấp nhận.
  </div>

  <h2>Cách gửi hồ sơ đến Nantes</h2>
  <p>Có thể gửi theo 3 cách:</p>
  <ol>
    <li><strong>Bưu điện đảm bảo</strong> trực tiếp đến SCEC Nantes từ Việt Nam hoặc từ Pháp (kèm phong bì có tem hồi âm)</li>
    <li><strong>Qua lãnh sự quán Pháp</strong> tại Việt Nam (Hà Nội hoặc TP.HCM) — họ sẽ chuyển hồ sơ đến Nantes và có thể kiểm tra hồ sơ trước khi gửi</li>
    <li><strong>Qua cổng trực tuyến SCEC</strong> nếu có tại thời điểm nộp (kiểm tra trên service-public.fr)</li>
  </ol>
  <p>Nếu bạn còn ở Việt Nam, <strong>gửi qua lãnh sự quán</strong> thường an toàn hơn — họ có thể phát hiện thiếu sót trước khi hồ sơ đến Nantes.</p>

  <h2>Thời gian xử lý</h2>
  <p>Thời gian chính thức SCEC công bố: <strong>6 tháng</strong>. Trên thực tế:</p>
  <ul>
    <li>Hồ sơ đầy đủ, không có vấn đề: <strong>6–12 tháng</strong></li>
    <li>Hồ sơ thiếu giấy tờ: SCEC gửi yêu cầu bổ sung, kéo dài thêm vài tuần đến vài tháng</li>
    <li>Mùa cao điểm (xuân-hè): thường chậm hơn</li>
  </ul>
  <p>Không có hệ thống theo dõi trực tuyến chính thức. Bạn có thể liên hệ SCEC bằng thư để hỏi tiến độ.</p>

  <h2>Câu hỏi thường gặp</h2>

  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Đăng ký tại Nantes có bắt buộc để sang Pháp không?</summary>
    <p style="margin-top:0.75rem;color:#555">Có. Hồ sơ visa dài hạn (VLS-TS) cho vợ/chồng yêu cầu bản trích lục kết hôn đã được đăng ký tại Nantes. Thiếu giấy này, hồ sơ visa sẽ bị từ chối.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Có thể làm từ Việt Nam không?</summary>
    <p style="margin-top:0.75rem;color:#555">Có. Hồ sơ có thể gửi từ Việt Nam qua bưu điện hoặc qua lãnh sự quán Pháp. Không cần có mặt tại Pháp.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Nếu Nantes từ chối thì làm thế nào?</summary>
    <p style="margin-top:0.75rem;color:#555">Từ chối phải nêu lý do. Bạn có thể khiếu nại với Viện kiểm sát (Procureur de la République), và nếu vẫn bị từ chối, có thể kiện lên Tòa án Tư pháp.</p>
  </details>

  <div class="vi-art-nav">
    <div>
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">← Bước trước</div>
      <a href="dang-ky-ket-hon-ubnd">Đăng ký tại UBND — Bước 2</a>
    </div>
    <div style="text-align:right">
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">Bước tiếp theo →</div>
      <a href="visa-dai-han-vo-chong-sang-phap">Visa VLS-TS — Bước 4</a>
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
