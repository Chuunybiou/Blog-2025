<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../titre-sejour-vie-privee-familiale-conjoint-vietnamien',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang = [
  'fr'        => SITE_URL . '/titre-sejour-vie-privee-familiale-conjoint-vietnamien',
  'vi'        => SITE_URL . '/vi/the-cu-tru-tai-phap',
  'x-default' => SITE_URL . '/titre-sejour-vie-privee-familiale-conjoint-vietnamien',
];

$page_title       = 'Thẻ Cư Trú tại Pháp cho vợ/chồng Việt : gia hạn & thẻ 10 năm 2026';
$page_description = 'Sau visa VLS-TS, làm thế nào để có thẻ cư trú "đời tư và gia đình" tại Pháp? Xác nhận OFII, thẻ 1 năm, gia hạn và con đường đến thẻ 10 năm. Hướng dẫn 2026.';
$page_canonical   = SITE_URL . '/vi/the-cu-tru-tai-phap';
$page_og_title    = 'Thẻ Cư Trú tại Pháp cho vợ/chồng Việt : gia hạn & thẻ 10 năm 2026';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/CCAM-DOCUMENTS.jpg';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Thẻ Cư Trú tại Pháp cho vợ/chồng Việt : gia hạn & thẻ 10 năm 2026',
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
.vi-timeline{list-style:none;padding:0;margin:1.5rem 0}
.vi-timeline li{position:relative;padding:0 0 1.5rem 2rem;border-left:2px solid rgba(123,63,114,0.3)}
.vi-timeline li::before{content:"";position:absolute;left:-6px;top:4px;width:10px;height:10px;border-radius:50%;background:#7b3f72}
.vi-timeline li:last-child{border-left:none;padding-bottom:0}
.vi-timeline strong{display:block;margin-bottom:4px}
';

include '../header.php';
?>

<header class="vi-art-hero">
  <div class="vi-art-hero-inner">
    <div class="vi-art-meta">
      <span class="vi-art-cat">Bước 5 — Định cư</span>
      <span class="vi-art-date">Tháng 6, 2026</span>
      <span class="vi-art-read">⏱ 8 phút đọc</span>
    </div>
    <h1>Thẻ Cư Trú tại Pháp :<br>Từ VLS-TS đến Thẻ 10 Năm</h1>
    <p class="vi-art-hero-desc">
      Khi đã đến Pháp với visa VLS-TS, hành trình pháp lý chưa kết thúc. Đây là lộ trình từ xác nhận OFII đến thẻ cư trú 10 năm — và xa hơn là quốc tịch Pháp.
    </p>
  </div>
  <div class="vi-art-hero-img-wrap">
    <img src="../assets/img/CCAM-DOCUMENTS.jpg"
         alt="Thẻ cư trú Pháp cho vợ/chồng Việt"
         width="1200" height="380" loading="eager" decoding="async">
  </div>
</header>

<div style="background:var(--warm-bg);padding:0.75rem 2rem;font-size:0.82rem;color:var(--muted)">
  <div style="max-width:860px;margin:0 auto">
    <a href="../vi/" style="color:#7b3f72">Trang chủ</a> ›
    <a href="../vi/#hanh-trinh" style="color:#7b3f72">Hành trình của bạn</a> ›
    <span>Thẻ cư trú</span>
  </div>
</div>

<main>
<article class="vi-art-body">

  <p>Bạn vừa đến Pháp với <strong>visa VLS-TS</strong>. Xin chúc mừng — đây là bước đầu tiên thực sự trên đất Pháp! Nhưng visa này không tự động thành thẻ cư trú. Cần thực hiện một số thủ tục để xây dựng tư cách cư trú lâu dài.</p>

  <p>Bài viết này là bước 5 và cũng là bước cuối của <a href="../vi/#hanh-trinh">hành trình đưa vợ/chồng Việt sang Pháp</a>. Xem <a href="../titre-sejour-vie-privee-familiale-conjoint-vietnamien">bản tiếng Pháp đầy đủ →</a></p>

  <h2>Lộ trình tổng quan</h2>

  <ul class="vi-timeline">
    <li>
      <strong>Trong vòng 3 tháng đầu — Xác nhận OFII</strong>
      Đăng ký trực tuyến trên trang OFII, nộp phí <strong>250 €</strong>, đến khám y tế (kiểm tra sức khỏe, X-quang phổi, kiểm tra thị lực), ký hợp đồng hòa nhập cộng hòa (CIR).
    </li>
    <li>
      <strong>Năm thứ 2 — Gia hạn thẻ "đời tư và gia đình"</strong>
      Qua cổng ANEF trực tuyến, nộp trước khi visa hết hạn 2–3 tháng. Được cấp thẻ cư trú mới hiệu lực 1 năm.
    </li>
    <li>
      <strong>Sau 3 năm hôn nhân — Thẻ 10 năm</strong>
      Đủ điều kiện xin thẻ cư trú thường trú 10 năm.
    </li>
    <li>
      <strong>Sau 4 năm hôn nhân với người Pháp — Quốc tịch Pháp</strong>
      Có thể nộp đơn xin nhập quốc tịch Pháp qua hôn nhân (nếu đáp ứng điều kiện tiếng Pháp và hòa nhập).
    </li>
  </ul>

  <h2>Bước 1 — Xác nhận với OFII (3 tháng đầu)</h2>
  <p>OFII (Office Français de l'Immigration et de l'Intégration) là tổ chức quản lý nhập cư Pháp. Ngay khi đến Pháp, bạn phải đăng ký trực tuyến tại <strong>administration-etrangers-en-france.interieur.gouv.fr</strong> để xác nhận visa VLS-TS.</p>
  <p>Sau khi đăng ký, OFII sẽ gửi thư mời đến khám sức khỏe. Đây là bắt buộc — không đến sẽ bị ghi nhận vi phạm điều kiện cư trú.</p>
  <p>Trong buổi khám, bạn cũng ký <strong>Hợp đồng Hòa nhập Cộng hòa (CIR)</strong> — cam kết tham gia các khóa học tiếng Pháp và giá trị cộng hòa nếu cần thiết (tùy trình độ tiếng Pháp được đánh giá tại chỗ).</p>

  <div class="vi-art-tip">
    <strong>Quan trọng:</strong> Phí OFII là <strong>250 €</strong>, nộp bằng timbre fiscal (tem thuế điện tử). Mua trực tuyến tại timbres.impots.gouv.fr hoặc tại điểm bán timbre.
  </div>

  <h2>Bước 2 — Thẻ "đời tư và gia đình" (1 năm)</h2>
  <p>Sau khi OFII xác nhận, visa VLS-TS của bạn hoạt động như thẻ cư trú trong năm đầu. Trước khi hết hạn, bạn cần nộp đơn gia hạn qua <strong>cổng ANEF (Administration Numérique des Étrangers en France)</strong>.</p>

  <p>Hồ sơ gia hạn thẻ cư trú "đời tư và gia đình" mục "vợ/chồng người Pháp" gồm:</p>

  <div style="overflow-x:auto;margin:1.5rem 0">
  <table class="vi-art-table">
    <thead>
      <tr><th>GIẤY TỜ</th><th>GHI CHÚ</th></tr>
    </thead>
    <tbody>
      <tr><td><strong>Hộ chiếu</strong> còn hiệu lực</td><td>—</td></tr>
      <tr><td><strong>Bản trích lục kết hôn</strong> Nantes</td><td>Không quá 3 tháng</td></tr>
      <tr><td><strong>Bằng chứng sống chung</strong></td><td>Hóa đơn điện/nước, hợp đồng thuê nhà cùng tên…</td></tr>
      <tr><td><strong>Bằng chứng tư cách vợ/chồng người Pháp</strong></td><td>Hộ chiếu/CMND người Pháp</td></tr>
      <tr><td><strong>Ảnh thẻ sinh trắc học</strong></td><td>—</td></tr>
      <tr><td><strong>Bằng chứng thu nhập/chỗ ở</strong></td><td>Tùy yêu cầu sở ngoại kiều</td></tr>
    </tbody>
  </table>
  </div>

  <p>Nộp đơn trực tuyến qua ANEF ít nhất <strong>2 tháng trước ngày hết hạn</strong>. Khi hồ sơ đầy đủ, bạn nhận <strong>récépissé</strong> (giấy xác nhận đang chờ xử lý) cho phép tiếp tục cư trú và làm việc trong khi chờ.</p>

  <h2>Bước 3 — Thẻ cư trú 10 năm</h2>
  <p>Sau <strong>3 năm hôn nhân hợp lệ</strong> với người Pháp và 3 năm thường trú tại Pháp, bạn có thể xin <strong>thẻ cư trú thường trú 10 năm</strong> (carte de résident). Đây là loại thẻ ổn định nhất — hiệu lực 10 năm, gia hạn dễ dàng, không cần chứng minh thu nhập hay sống chung.</p>

  <div class="vi-art-tip">
    <strong>Điều kiện:</strong> Hôn nhân vẫn đang tồn tại, cuộc sống chung thực tế, không có án tích nghiêm trọng, và đủ điều kiện hòa nhập (tiếng Pháp, giá trị cộng hòa).
  </div>

  <h2>Con đường đến quốc tịch Pháp</h2>
  <p>Vợ/chồng người Pháp có thể nộp đơn xin quốc tịch Pháp <strong>bằng hôn nhân (naturalisation par mariage)</strong> sau <strong>4 năm hôn nhân</strong> (hoặc 5 năm nếu không thường trú tại Pháp hoặc không nói tiếng Pháp đủ tốt).</p>

  <p>Điều kiện cơ bản:</p>
  <ul>
    <li>Hôn nhân ít nhất 4 năm</li>
    <li>Sống chung thực tế</li>
    <li>Tiếng Pháp đạt tối thiểu B1</li>
    <li>Hòa nhập tốt vào xã hội Pháp (không có án tích, đóng thuế…)</li>
  </ul>

  <h2>Câu hỏi thường gặp</h2>

  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Nếu chưa xác nhận OFII trong 3 tháng đầu, có sao không?</summary>
    <p style="margin-top:0.75rem;color:#555">Sẽ gặp khó khăn khi gia hạn thẻ cư trú. OFII là điều kiện bắt buộc. Nếu đã quá hạn, vẫn nên đăng ký muộn và giải thích lý do với OFII — trường hợp bất khả kháng (bệnh tật, sự cố khách quan) thường được xem xét.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Có được làm việc trong khi chờ thẻ cư trú gia hạn không?</summary>
    <p style="margin-top:0.75rem;color:#555">Có. Récépissé được cấp khi nộp hồ sơ gia hạn qua ANEF cho phép tiếp tục làm việc và cư trú hợp pháp trong thời gian chờ quyết định.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Nếu hai người ly thân, thẻ cư trú có bị thu hồi không?</summary>
    <p style="margin-top:0.75rem;color:#555">Về nguyên tắc, việc không sống chung thực tế là lý do để từ chối gia hạn. Tuy nhiên trong giai đoạn đầu (thẻ 1 năm đầu tiên) có nhiều bảo vệ hơn, đặc biệt khi có con chung hoặc bạo lực gia đình. Cần tham khảo luật sư nếu rơi vào tình huống này.</p>
  </details>

  <div class="vi-art-nav">
    <div>
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">← Bước trước</div>
      <a href="visa-dai-han-vo-chong-sang-phap">Visa VLS-TS — Bước 4</a>
    </div>
    <div style="text-align:right">
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">Xem toàn bộ hành trình</div>
      <a href="../vi/#hanh-trinh">Hành trình của bạn →</a>
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
