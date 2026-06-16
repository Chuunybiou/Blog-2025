<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../visa-long-sejour-conjoint-vietnamien-france',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang = [
  'fr'        => SITE_URL . '/visa-long-sejour-conjoint-vietnamien-france',
  'vi'        => SITE_URL . '/vi/visa-dai-han-vo-chong-sang-phap',
  'x-default' => SITE_URL . '/visa-long-sejour-conjoint-vietnamien-france',
];

$page_title       = 'Visa Dài Hạn Sang Pháp (VLS-TS) cho vợ/chồng Việt : hướng dẫn 2026';
$page_description = 'Xin visa dài hạn VLS-TS sang Pháp với tư cách vợ/chồng người Pháp : hồ sơ đầy đủ, nộp qua VFS Global, thời gian chờ và cách tránh từ chối. Hướng dẫn 2026.';
$page_canonical   = SITE_URL . '/vi/visa-dai-han-vo-chong-sang-phap';
$page_og_title    = 'Visa Dài Hạn Sang Pháp (VLS-TS) cho vợ/chồng Việt : hướng dẫn 2026';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/CCAM-DOCUMENTS.jpg';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Visa Dài Hạn Sang Pháp (VLS-TS) cho vợ/chồng Việt : hướng dẫn 2026',
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
      <span class="vi-art-cat">Bước 4 — Sang Pháp</span>
      <span class="vi-art-date">Tháng 6, 2026</span>
      <span class="vi-art-read">⏱ 9 phút đọc</span>
    </div>
    <h1>Visa Dài Hạn Sang Pháp (VLS-TS) :<br>Hồ sơ đầy đủ cho vợ/chồng Việt 2026</h1>
    <p class="vi-art-hero-desc">
      Đây là bước mọi người chờ đợi nhất — và cũng là bước quyết định. Hướng dẫn chuẩn bị hồ sơ, nộp qua VFS Global và tránh những lỗi thường gặp khiến hồ sơ bị từ chối.
    </p>
  </div>
  <div class="vi-art-hero-img-wrap">
    <img src="../assets/img/CCAM-DOCUMENTS.jpg"
         alt="Hồ sơ xin visa dài hạn sang Pháp — vợ/chồng Việt"
         width="1200" height="380" loading="eager" decoding="async">
  </div>
</header>

<div style="background:var(--warm-bg);padding:0.75rem 2rem;font-size:0.82rem;color:var(--muted)">
  <div style="max-width:860px;margin:0 auto">
    <a href="../vi/" style="color:#7b3f72">Trang chủ</a> ›
    <a href="../vi/#hanh-trinh" style="color:#7b3f72">Hành trình của bạn</a> ›
    <span>Visa VLS-TS</span>
  </div>
</div>

<main>
<article class="vi-art-body">

  <p><strong>Đây là bước mà tất cả các bước trước đó đều hướng tới.</strong> Sau khi có giấy đăng ký kết hôn được công nhận tại Nantes, bạn có thể xin <strong>visa dài hạn VLS-TS</strong> — loại visa cho phép vợ/chồng người Pháp sang sống và làm việc tại Pháp trong 1 năm đầu mà không cần đến sở ngoại kiều.</p>

  <p>Bài viết này là bước 4 của <a href="../vi/#hanh-trinh">hành trình đưa vợ/chồng Việt sang Pháp</a>. Xem <a href="../visa-long-sejour-conjoint-vietnamien-france">bản tiếng Pháp đầy đủ →</a></p>

  <h2>VLS-TS là gì? Khác gì visa thường?</h2>
  <p>Có hai loại visa dài hạn dành cho vợ/chồng người Pháp:</p>
  <ul>
    <li><strong>Visa D thông thường</strong>: cho phép nhập cảnh và lưu trú tối đa 3 tháng, nhưng sau đó phải đến sở ngoại kiều để xin thẻ cư trú (có thể mất nhiều tháng chờ đợi).</li>
    <li><strong>VLS-TS (Visa Long Séjour valant Titre de Séjour)</strong>: hiệu lực 1 năm, được sống và làm việc tại Pháp ngay — chỉ cần xác nhận với OFII khi đến nơi. Không cần qua sở ngoại kiều năm đầu.</li>
  </ul>
  <p>Luôn xin <strong>VLS-TS</strong>. Đây là loại visa được khuyến nghị cho vợ/chồng người Pháp và nhân viên đại sứ quán cũng biết điều này.</p>

  <h2>Điều kiện cần đáp ứng trước khi nộp hồ sơ</h2>
  <ul>
    <li>Hai người đã kết hôn hợp pháp và hôn nhân đã được đăng ký tại <strong>SCEC Nantes</strong> → <a href="chuyen-ho-tich-nantes">Xem Bước 3</a></li>
    <li>Người Pháp đang sống tại Pháp (hoặc có kế hoạch về Pháp có thể chứng minh)</li>
    <li>Có khả năng tài chính đủ để nuôi sống gia đình (không có ngưỡng thu nhập cụ thể — đánh giá từng trường hợp)</li>
  </ul>

  <div class="vi-art-tip">
    <strong>Tài chính không đủ mạnh?</strong> Không có ngưỡng tối thiểu bắt buộc cho visa vợ/chồng người Pháp. Đại sứ quán đánh giá tổng thể: việc làm ổn định, tài sản, hoặc người bảo lãnh đồng hành đều có thể bù đắp thu nhập thấp.
  </div>

  <h2>Hồ sơ cần chuẩn bị</h2>

  <div style="overflow-x:auto;margin:1.5rem 0">
  <table class="vi-art-table">
    <thead>
      <tr><th>GIẤY TỜ</th><th>AI CUNG CẤP</th><th>GHI CHÚ</th></tr>
    </thead>
    <tbody>
      <tr><td><strong>Mẫu Cerfa xin visa</strong></td><td>Vợ/chồng Việt</td><td>Tải trên France Visas</td></tr>
      <tr><td><strong>Hộ chiếu Việt Nam</strong> còn hiệu lực</td><td>Vợ/chồng Việt</td><td>Hiệu lực > 3 tháng sau khi visa kết thúc</td></tr>
      <tr><td><strong>Ảnh thẻ sinh trắc học</strong></td><td>Vợ/chồng Việt</td><td>Đúng quy cách</td></tr>
      <tr><td><strong>Bản trích lục kết hôn đã đăng ký Nantes</strong></td><td>Người Pháp</td><td>Không quá 3 tháng kể từ ngày nộp hồ sơ</td></tr>
      <tr><td><strong>Giấy khai sinh vợ/chồng Việt</strong></td><td>Vợ/chồng Việt</td><td>Dịch công chứng + hợp pháp hóa (hoặc apostille từ 11/09/2026)</td></tr>
      <tr><td><strong>Hộ chiếu hoặc CMND người Pháp</strong></td><td>Người Pháp</td><td>Sao chép tất cả các trang</td></tr>
      <tr><td><strong>Chứng minh địa chỉ tại Pháp</strong></td><td>Người Pháp</td><td>Hóa đơn không quá 3 tháng</td></tr>
      <tr><td><strong>3 phiếu lương gần nhất</strong></td><td>Người Pháp</td><td>Hoặc bằng chứng thu nhập tương đương</td></tr>
      <tr><td><strong>Tờ khai thuế thu nhập gần nhất</strong></td><td>Người Pháp</td><td>—</td></tr>
      <tr><td><strong>3 sao kê ngân hàng gần nhất</strong></td><td>Người Pháp</td><td>Tài khoản chính</td></tr>
      <tr><td><strong>Bằng chứng cuộc sống chung</strong> (ảnh, vé máy bay…)</td><td>Cả hai</td><td>Rất hữu ích cho phỏng vấn</td></tr>
    </tbody>
  </table>
  </div>

  <div class="vi-art-tip">
    <strong>Mẹo:</strong> Chuẩn bị tất cả giấy tờ thành 2–3 bộ. VFS Global đôi khi giữ lại bản gốc. Với giấy tờ tiếng Việt, đảm bảo dịch bởi phiên dịch viên có tuyên thệ tại Pháp.
  </div>

  <h2>Nộp hồ sơ qua VFS Global</h2>
  <p>Visa dài hạn vào Pháp được xử lý bởi đại sứ quán Pháp, nhưng hồ sơ được nộp trực tiếp qua <strong>VFS Global</strong> — đơn vị được ủy quyền. Có trung tâm VFS Global tại <strong>Hà Nội và TP. Hồ Chí Minh</strong>.</p>
  <p>Đặt lịch hẹn trực tuyến trên trang VFS Global. Vào ngày hẹn, <strong>vợ/chồng Việt đến nộp hồ sơ</strong> — người Pháp không bắt buộc có mặt.</p>
  <p>Chi phí phải nộp tại chỗ:</p>
  <ul>
    <li>Lệ phí visa: <strong>99 €</strong></li>
    <li>Phí dịch vụ VFS Global: xem trên trang vfsglobal.com/france/vietnam</li>
  </ul>

  <h2>Thời gian chờ và theo dõi hồ sơ</h2>
  <p>Sau khi nộp, đại sứ quán xử lý hồ sơ. Thời gian trung bình: <strong>2–3 tháng</strong>. Có thể lâu hơn nếu đại sứ quán yêu cầu bổ sung giấy tờ hoặc mời phỏng vấn.</p>
  <p>Theo dõi tình trạng hồ sơ qua trang VFS Global với mã số tham chiếu được cấp khi nộp.</p>

  <h2>Nếu bị từ chối</h2>
  <p>Từ chối phải nêu lý do. Trong vòng <strong>2 tháng</strong> kể từ khi nhận thông báo, bạn có thể khiếu nại lên <strong>Ủy ban xét khiếu nại từ chối visa (CRRV)</strong> — đây là bước bắt buộc trước khi khởi kiện. Nếu bị từ chối vì tài chính, củng cố hồ sơ và nộp lại sau 6 tháng.</p>

  <h2>Câu hỏi thường gặp</h2>

  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Có cần đăng ký tại Nantes xong hẳn mới nộp visa không?</summary>
    <p style="margin-top:0.75rem;color:#555">Về nguyên tắc là có, vì bản trích lục kết hôn Nantes là giấy tờ bắt buộc trong hồ sơ. Trong một số trường hợp có thể nộp với giấy đăng ký kết hôn Việt Nam đã hợp pháp hóa, nhưng không được khuyến khích vì dễ bị từ chối.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Có được đi làm khi có visa VLS-TS không?</summary>
    <p style="margin-top:0.75rem;color:#555">Có. VLS-TS mục "đời tư và gia đình" cho phép làm việc (hợp đồng lao động hoặc tự doanh) ngay từ khi đến Pháp.</p>
  </details>

  <div class="vi-art-nav">
    <div>
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">← Bước trước</div>
      <a href="chuyen-ho-tich-nantes">Đăng ký tại Nantes — Bước 3</a>
    </div>
    <div style="text-align:right">
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">Bước cuối →</div>
      <a href="the-cu-tru-tai-phap">Thẻ cư trú — Bước 5</a>
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
