<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../certificat-capacite-mariage-vietnam',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang = [
  'fr'        => SITE_URL . '/certificat-capacite-mariage-vietnam',
  'vi'        => SITE_URL . '/vi/giay-phep-ket-hon-lanh-su-phap-ccam',
  'x-default' => SITE_URL . '/certificat-capacite-mariage-vietnam',
];

$page_title       = 'CCAM — Giấy Phép Kết Hôn Lãnh Sự Pháp : hướng dẫn đầy đủ 2026 | Cap Vietnam';
$page_description = 'CCAM là giấy tờ bắt buộc để kết hôn tại Việt Nam khi một bên là người Pháp. Hướng dẫn xin CCAM tại đại sứ quán Pháp : hồ sơ, thời gian, chi phí.';
$page_canonical   = SITE_URL . '/vi/giay-phep-ket-hon-lanh-su-phap-ccam';
$page_og_title    = 'CCAM — Giấy Phép Kết Hôn Lãnh Sự Pháp : hướng dẫn 2026';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/CCAM-DOCUMENTS.jpg';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'CCAM — Giấy Phép Kết Hôn Lãnh Sự Pháp : hướng dẫn đầy đủ 2026',
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

<!-- ══ HERO ══ -->
<header class="vi-art-hero">
  <div class="vi-art-hero-inner">
    <div class="vi-art-meta">
      <span class="vi-art-cat">Bước 1 — Trước khi kết hôn</span>
      <span class="vi-art-date">Tháng 6, 2026</span>
      <span class="vi-art-read">⏱ 7 phút đọc</span>
    </div>
    <h1>CCAM — Giấy Phép Kết Hôn Lãnh Sự Pháp :<br>Hướng dẫn đầy đủ 2026</h1>
    <p class="vi-art-hero-desc">
      Trước khi kết hôn tại Việt Nam, chú rể/cô dâu Pháp <strong>bắt buộc phải xin CCAM</strong> tại đại sứ quán hoặc lãnh sự quán Pháp. Miễn phí, mất 4–6 tuần. Đây là hướng dẫn đầy đủ.
    </p>
  </div>
  <div class="vi-art-hero-img-wrap">
    <img src="../assets/img/CCAM-DOCUMENTS.jpg"
         alt="Hồ sơ CCAM kết hôn Pháp-Việt"
         width="1200" height="420" loading="eager" decoding="async">
  </div>
</header>

<!-- ══ BREADCRUMB ══ -->
<div style="background:var(--warm-bg);padding:0.75rem 2rem;font-size:0.82rem;color:var(--muted)">
  <div style="max-width:860px;margin:0 auto">
    <a href="../vi/" style="color:#7b3f72">Trang chủ</a> ›
    <a href="../vi/#hanh-trinh" style="color:#7b3f72">Hành trình của bạn</a> ›
    <span>CCAM</span>
  </div>
</div>

<!-- ══ ARTICLE BODY ══ -->
<main>
<article class="vi-art-body">

  <p><strong>CCAM (Certificat de Capacité à Mariage — Giấy Chứng Nhận Năng Lực Kết Hôn) là giấy tờ đầu tiên và quan trọng nhất trong hành trình kết hôn Pháp-Việt.</strong> Không có CCAM, Ủy ban nhân dân Việt Nam sẽ từ chối đăng ký hôn nhân. Không có đăng ký hôn nhân, mọi bước tiếp theo đều bị chặn.</p>

  <p>Bài viết này là bước 1 của <a href="../vi/#hanh-trinh">hành trình đưa vợ/chồng Việt sang Pháp</a>. Xem <a href="../faire-venir-conjointe-vietnamienne-france">bản tiếng Pháp đầy đủ →</a></p>

  <h2>CCAM là gì?</h2>
  <p>CCAM là viết tắt của <em>Certificat de Capacité à Mariage</em> — một văn bản chính thức do <strong>đại sứ quán hoặc lãnh sự quán Pháp</strong> cấp, xác nhận rằng công dân Pháp có đủ điều kiện pháp lý để kết hôn theo luật Pháp:</p>
  <ul>
    <li>Chưa có vợ/chồng hợp pháp</li>
    <li>Không có bất kỳ trở ngại pháp lý nào cho hôn nhân</li>
    <li>Đạt độ tuổi kết hôn theo pháp luật Pháp</li>
  </ul>
  <p>CCAM được nộp cho chính quyền Việt Nam <strong>trước</strong> lễ đăng ký kết hôn tại UBND, không phải sau.</p>

  <div class="vi-art-tip">
    <strong>Lưu ý quan trọng:</strong> CCAM <em>không phải</em> do công chứng viên Việt Nam lập. Đây là văn bản ngoại giao của Pháp, do lãnh sự quán Pháp cấp — trước ngày cưới.
  </div>

  <h2>Tại sao CCAM bắt buộc?</h2>
  <p>Luật Việt Nam yêu cầu người nước ngoài muốn kết hôn tại Việt Nam phải chứng minh họ được phép kết hôn theo luật của nước họ. Đối với người Pháp, bằng chứng đó chính là CCAM.</p>
  <p>Nếu không có CCAM:</p>
  <ul>
    <li>UBND từ chối đăng ký kết hôn</li>
    <li>Không có giấy đăng ký kết hôn → không thể đăng ký hộ tịch tại Nantes</li>
    <li>Không đăng ký tại Nantes → không có visa dài hạn sang Pháp</li>
  </ul>
  <p>Đây là bước nền tảng của toàn bộ hành trình.</p>

  <h2>Ai cấp CCAM?</h2>
  <p>CCAM do hai cơ quan ngoại giao Pháp tại Việt Nam cấp:</p>
  <ul>
    <li><strong>Đại sứ quán Pháp tại Hà Nội</strong> — dành cho đám cưới ở miền Bắc và miền Trung</li>
    <li><strong>Lãnh sự quán Pháp tại TP. Hồ Chí Minh</strong> — dành cho đám cưới ở miền Nam</li>
  </ul>
  <p>Trước khi cấp CCAM, lãnh sự quán sẽ kiểm tra tình trạng hôn nhân của bạn với <strong>Trung tâm Hộ tịch Quốc gia tại Nantes (SCEC)</strong> — cơ quan lưu trữ hồ sơ hộ tịch của người Pháp ở nước ngoài. Quá trình này kéo dài khoảng 10 ngày làm việc và nằm trong thời gian xử lý chung.</p>

  <h2>Các bước xin CCAM</h2>
  <ol>
    <li><strong>Chuẩn bị hồ sơ</strong> (xem bảng bên dưới)</li>
    <li><strong>Nộp hồ sơ tại lãnh sự quán</strong> có thẩm quyền (Hà Nội hoặc TP.HCM) — trực tiếp hoặc qua người được ủy quyền</li>
    <li><strong>Đăng báo bao cao su (công bố hôn phối)</strong>: lãnh sự quán niêm yết thông báo trong <strong>10 ngày</strong></li>
    <li><strong>Kiểm tra tại SCEC Nantes</strong>: xác minh tình trạng hôn nhân trong hồ sơ người Pháp</li>
    <li><strong>Nhận CCAM</strong>: nếu không có trở ngại, lãnh sự quán phát hành chứng nhận</li>
    <li><strong>Đám cưới tại UBND</strong>: nộp CCAM cho chính quyền Việt Nam vào ngày đăng ký</li>
  </ol>
  <p>CCAM có <strong>hiệu lực 1 năm</strong> kể từ ngày cấp. Nếu hết hạn trước ngày cưới, bạn phải xin lại.</p>

  <h2>Hồ sơ cần chuẩn bị</h2>
  <p>Danh sách đầy đủ được đăng trên trang web của đại sứ quán/lãnh sự quán. Dưới đây là các giấy tờ thường yêu cầu:</p>

  <div style="overflow-x:auto;margin:1.5rem 0">
  <table class="vi-art-table">
    <thead>
      <tr><th>GIẤY TỜ</th><th>GHI CHÚ</th></tr>
    </thead>
    <tbody>
      <tr><td><strong>Đơn xin CCAM</strong></td><td>Lấy trên trang web của lãnh sự quán</td></tr>
      <tr><td><strong>Giấy khai sinh đầy đủ của người Pháp</strong></td><td>Không quá 3 tháng · có apostille nếu cần</td></tr>
      <tr><td><strong>Chứng nhận độc thân hoặc giấy ly hôn/giấy chứng tử</strong></td><td>Nếu đã từng kết hôn trước đây</td></tr>
      <tr><td><strong>Hộ chiếu người Pháp</strong> (bản gốc + sao chép)</td><td>Còn hiệu lực</td></tr>
      <tr><td><strong>Hộ chiếu người bạn đời Việt Nam</strong> (sao chép)</td><td>—</td></tr>
      <tr><td><strong>Giấy khai sinh người bạn đời Việt Nam</strong></td><td>Được dịch sang tiếng Pháp bởi phiên dịch viên có tuyên thệ</td></tr>
    </tbody>
  </table>
  </div>

  <div class="vi-art-tip">
    <strong>Luôn kiểm tra với lãnh sự quán của bạn</strong> trước khi nộp hồ sơ — danh sách có thể thay đổi nhỏ tùy địa điểm (Hà Nội / TP.HCM) và tình trạng cá nhân của bạn (đã từng ly hôn, có con…).
  </div>

  <h2>Thời gian và chi phí</h2>

  <div style="overflow-x:auto;margin:1.5rem 0">
  <table class="vi-art-table">
    <thead>
      <tr><th>GIAI ĐOẠN</th><th>THỜI GIAN</th><th>CHI PHÍ</th></tr>
    </thead>
    <tbody>
      <tr><td><strong>Đăng báo bao cao su (công bố hôn phối)</strong></td><td>10 ngày</td><td>Miễn phí</td></tr>
      <tr><td><strong>Xử lý hồ sơ tổng thể</strong></td><td><strong>4–6 tuần</strong></td><td>Miễn phí (miễn lệ phí lãnh sự)</td></tr>
      <tr><td><strong>Dịch thuật giấy tờ</strong> (nếu cần)</td><td>Thay đổi</td><td>Tự chi trả (phiên dịch viên có tuyên thệ)</td></tr>
    </tbody>
  </table>
  </div>

  <div class="vi-art-tip">
    <strong>Quy tắc vàng:</strong> Nộp hồ sơ <strong>ít nhất 4 tháng trước ngày cưới dự kiến</strong>. Điều này giúp bạn có đủ thời gian nếu thiếu giấy tờ hoặc có sự chậm trễ ngoài ý muốn.
  </div>

  <h2>Câu hỏi thường gặp</h2>

  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">CCAM có bắt buộc ở mọi tỉnh thành Việt Nam không?</summary>
    <p style="margin-top:0.75rem;color:#555">Có. Dù đám cưới diễn ra ở đâu tại Việt Nam — Hà Nội, TP.HCM hay tỉnh lẻ — UBND đều yêu cầu CCAM trước khi đăng ký kết hôn.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Xin CCAM có mất tiền không?</summary>
    <p style="margin-top:0.75rem;color:#555">Không. CCAM hoàn toàn miễn phí (lệ phí lãnh sự được miễn). Bạn chỉ tốn tiền nếu cần dịch giấy tờ sang tiếng Pháp.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">CCAM có hiệu lực bao lâu?</summary>
    <p style="margin-top:0.75rem;color:#555">1 năm kể từ ngày cấp. Nếu hết hạn trước khi cưới, bạn phải xin lại từ đầu.</p>
  </details>

  <div class="vi-art-nav">
    <div>
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">← Tổng quan</div>
      <a href="../faire-venir-conjointe-vietnamienne-france">Hướng dẫn tiếng Pháp đầy đủ</a>
    </div>
    <div style="text-align:right">
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">Bước tiếp theo →</div>
      <a href="dang-ky-ket-hon-ubnd">Đăng ký tại UBND — Bước 2</a>
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
