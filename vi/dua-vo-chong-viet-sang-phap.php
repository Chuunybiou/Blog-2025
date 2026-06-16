<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../faire-venir-conjointe-vietnamienne-france',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang = [
  'fr'        => SITE_URL . '/faire-venir-conjointe-vietnamienne-france',
  'vi'        => SITE_URL . '/vi/dua-vo-chong-viet-sang-phap',
  'x-default' => SITE_URL . '/faire-venir-conjointe-vietnamienne-france',
];

$page_title       = 'Đưa vợ/chồng Việt sang Pháp : hướng dẫn đầy đủ 2026 (7 bước)';
$page_description = 'CCAM, kết hôn tại UBND, đăng ký Nantes, visa dài hạn, OFII, thẻ cư trú — toàn bộ hành trình đưa vợ/chồng Việt sang Pháp từng bước. Thủ tục, thời gian, chi phí 2026.';
$page_canonical   = SITE_URL . '/vi/dua-vo-chong-viet-sang-phap';
$page_og_title    = 'Đưa vợ/chồng Việt sang Pháp : hướng dẫn đầy đủ 2026';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/CCAM-DOCUMENTS.jpg';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Đưa vợ/chồng Việt sang Pháp : hướng dẫn đầy đủ 2026 (7 bước)',
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

$page_faq_schema = json_encode([
  '@context'   => 'https://schema.org',
  '@type'      => 'FAQPage',
  'mainEntity' => [
    [
      '@type'          => 'Question',
      'name'           => 'Mất bao lâu để đưa vợ/chồng Việt sang Pháp?',
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Trung bình từ 12 đến 24 tháng: vài tháng cho CCAM, hôn lễ và đăng ký Nantes tại Việt Nam, sau đó 2–3 tháng để đại sứ quán Pháp xử lý visa dài hạn tại Hà Nội hoặc TP. HCM.'],
    ],
    [
      '@type'          => 'Question',
      'name'           => 'Vợ/chồng Việt có cần biết tiếng Pháp để xin visa không?',
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Không bắt buộc, nhưng trong buổi phỏng vấn tại đại sứ quán, nhân viên sẽ kiểm tra tính thực chất của cuộc sống chung. Biết một chút tiếng Pháp cơ bản sẽ giúp buổi phỏng vấn thuận lợi hơn.'],
    ],
    [
      '@type'          => 'Question',
      'name'           => 'Có bắt buộc phải kết hôn tại Việt Nam không?',
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Kết hôn là điều kiện bắt buộc để xin visa vợ/chồng người Pháp. Nếu đã kết hôn ở nước khác, vẫn cần đăng ký tại SCEC Nantes. PACS không đủ điều kiện — chỉ hôn nhân hợp lệ mới được xét.'],
    ],
    [
      '@type'          => 'Question',
      'name'           => 'Chi phí toàn bộ thủ tục là bao nhiêu?',
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Chi phí cố định: khoảng 99 € lệ phí visa dài hạn, 250 € thuế OFII khi đến Pháp, cộng thêm chi phí dịch thuật công chứng và công chứng viên tại Việt Nam. Tổng thực tế: từ 600 đến 1.200 €.'],
    ],
    [
      '@type'          => 'Question',
      'name'           => 'Vợ/chồng Việt có được đi làm ngay khi sang Pháp không?',
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Có. Visa dài hạn VLS-TS mục "đời tư và gia đình" cho phép làm việc (hợp đồng lao động hoặc tự doanh) ngay từ khi đặt chân đến Pháp, không cần chờ thẻ cư trú.'],
    ],
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$page_extra_css = '
.vi-art-hero{padding-top:64px;background:linear-gradient(165deg,#0a1f14 0%,#1b4a32 45%,#0e2a1d 100%);position:relative;overflow:hidden}
.vi-art-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,rgba(27,107,82,0.2),transparent 60%),radial-gradient(ellipse 50% 40% at 80% 20%,rgba(191,74,42,0.1),transparent 60%)}
.vi-art-hero-inner{max-width:860px;margin:0 auto;padding:4rem 2rem 3rem;position:relative;z-index:1}
.vi-art-meta{display:flex;gap:1rem;align-items:center;flex-wrap:wrap;margin-bottom:1.5rem}
.vi-art-cat{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:4px 12px;border-radius:3px;background:rgba(77,200,160,0.2);color:#4dc8a0;border:1px solid rgba(77,200,160,0.2)}
.vi-art-date,.vi-art-read{font-size:0.8rem;color:rgba(250,248,244,0.45)}
.vi-art-hero h1{font-family:"DM Serif Display",serif;font-size:clamp(1.9rem,4.5vw,2.8rem);color:#fff;line-height:1.25;margin-bottom:1rem}
.vi-art-hero-desc{font-size:1.05rem;color:rgba(250,248,244,0.6);line-height:1.8;max-width:700px}
.vi-art-hero-img-wrap{overflow:hidden;max-height:380px}
.vi-art-hero-img-wrap img{width:100%;height:380px;object-fit:cover;display:block}

.vi-art-layout{display:grid;grid-template-columns:220px 1fr;gap:3rem;max-width:1100px;margin:0 auto;padding:4rem 2rem;align-items:start}
.vi-toc{position:sticky;top:80px}
.vi-toc-label{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;color:var(--muted);margin-bottom:1rem}
.vi-toc ol{list-style:decimal;padding-left:1.2rem;margin:0}
.vi-toc li{margin-bottom:0.5rem}
.vi-toc a{font-size:0.83rem;color:var(--muted);text-decoration:none;line-height:1.4;display:block}
.vi-toc a:hover{color:var(--jade)}

.vi-art-body h2{font-family:"DM Serif Display",serif;font-size:1.65rem;margin:2.5rem 0 1rem;color:var(--ink);padding-top:1rem;border-top:2px solid var(--warm-bg)}
.vi-art-body p{font-size:1rem;line-height:1.9;color:#333;margin-bottom:1.25rem}
.vi-art-body ul,.vi-art-body ol{padding-left:1.5rem;margin-bottom:1.25rem}
.vi-art-body li{font-size:1rem;line-height:1.8;color:#333;margin-bottom:0.5rem}
.vi-art-body strong{color:var(--ink)}
.vi-art-body a{color:var(--jade);text-decoration:underline}

.vi-tip{background:rgba(27,107,82,0.07);border-left:3px solid var(--jade);padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-tip strong{color:var(--jade)}

.vi-art-table{width:100%;border-collapse:collapse;font-size:0.88rem;border-radius:10px;overflow:hidden;border:1px solid rgba(77,200,160,0.18);margin:1.5rem 0}
.vi-art-table thead tr{background:rgba(27,107,82,0.25)}
.vi-art-table th{padding:0.65rem 0.75rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700}
.vi-art-table td{padding:0.8rem 0.75rem;font-size:0.85rem;border-bottom:1px solid rgba(250,248,244,0.06);vertical-align:middle}
.vi-art-table tr:nth-child(even) td{background:rgba(255,255,255,0.02)}
.step-pill-green{background:rgba(77,200,160,0.13);color:#4dc8a0;padding:3px 10px;border-radius:20px;font-size:0.78rem;font-weight:600;white-space:nowrap}
.step-pill-amber{background:rgba(232,133,106,0.14);color:#e8856a;padding:3px 10px;border-radius:20px;font-size:0.78rem;font-weight:600;white-space:nowrap}

.vi-faq-item{border:1px solid var(--border);border-radius:8px;margin-bottom:0.75rem;overflow:hidden}
.vi-faq-q{width:100%;background:none;border:none;text-align:left;padding:1rem 1.25rem;font-weight:700;font-size:0.95rem;cursor:pointer;display:flex;justify-content:space-between;align-items:center;font-family:inherit}
.vi-faq-q .arrow{transition:transform 0.2s;flex-shrink:0}
.vi-faq-item.open .arrow{transform:rotate(180deg)}
.vi-faq-a{display:none;padding:0 1.25rem 1rem;font-size:0.93rem;color:#555;line-height:1.7}
.vi-faq-item.open .vi-faq-a{display:block}

@media(max-width:860px){.vi-art-layout{grid-template-columns:1fr}.vi-toc{display:none}}
';

include '../header.php';
?>

<script type="application/ld+json"><?= $page_faq_schema ?></script>

<header class="vi-art-hero">
  <div class="vi-art-hero-inner">
    <div style="margin-bottom:1rem;font-size:0.82rem">
      <a href="../vi/" style="color:rgba(250,248,244,0.5)">Trang chủ</a>
      <span style="color:rgba(250,248,244,0.3);margin:0 0.5rem">›</span>
      <a href="../vi/#hanh-trinh" style="color:rgba(250,248,244,0.5)">Hành trình</a>
      <span style="color:rgba(250,248,244,0.3);margin:0 0.5rem">›</span>
      <span style="color:rgba(250,248,244,0.4)">Hướng dẫn đầy đủ</span>
    </div>
    <div class="vi-art-meta">
      <span class="vi-art-cat">Hướng dẫn tổng quan</span>
      <span class="vi-art-date">Tháng 6, 2026</span>
      <span class="vi-art-read">⏱ 12 phút đọc</span>
    </div>
    <h1>Đưa vợ/chồng Việt sang Pháp :<br>Hướng dẫn đầy đủ 2026 (7 bước)</h1>
    <p class="vi-art-hero-desc">
      CCAM, kết hôn tại UBND, đăng ký Nantes, visa dài hạn, OFII, thẻ cư trú — toàn bộ hành trình từ A đến Z. Mình đã trải qua từng bước với vợ người Hà Nội và chia sẻ lại để bạn không đi lạc đường.
    </p>
  </div>
  <div class="vi-art-hero-img-wrap">
    <img src="../assets/img/CCAM-DOCUMENTS.jpg"
         alt="Hồ sơ CCAM và kết hôn Franco-Việt"
         width="1200" height="380" loading="eager" decoding="async">
  </div>
</header>

<main>
<div class="vi-art-layout">

  <!-- Sommaire -->
  <aside class="vi-toc">
    <div class="vi-toc-label">Mục lục</div>
    <ol class="vi-toc-list">
      <li><a href="#tong-quan">Tổng quan hành trình</a></li>
      <li><a href="#buoc-1">Bước 1 — CCAM</a></li>
      <li><a href="#buoc-2">Bước 2 — Kết hôn UBND</a></li>
      <li><a href="#buoc-3">Bước 3 — Đăng ký Nantes</a></li>
      <li><a href="#buoc-4">Bước 4 — Visa dài hạn</a></li>
      <li><a href="#buoc-5">Bước 5 — Phỏng vấn đại sứ quán</a></li>
      <li><a href="#buoc-6">Bước 6 — OFII</a></li>
      <li><a href="#buoc-7">Bước 7 — Thẻ cư trú</a></li>
      <li><a href="#faq">Câu hỏi thường gặp</a></li>
    </ol>
  </aside>

  <!-- Contenu -->
  <article class="vi-art-body">

    <p><strong>Bạn đang yêu hoặc đã kết hôn với người Pháp và muốn cùng nhau xây dựng cuộc sống tại Pháp?</strong> Thủ tục dài, đôi khi mệt mỏi — nhưng con đường đã được vạch rõ. Mình là Anthony, người Pháp có vợ người Hà Nội, và đã đi qua từng bước này. Trong hướng dẫn này, mình cho bạn toàn bộ bản đồ — từ CCAM đến thẻ cư trú.</p>

    <div class="vi-tip">
      <strong>Hướng dẫn này là cột trụ.</strong> Mỗi bước đều có trang chi tiết riêng (được liên kết trong từng phần). Đọc tổng quan này trước, rồi vào từng trang cụ thể để xem danh sách giấy tờ và chi tiết thủ tục.
    </div>

    <h2 id="tong-quan">Tổng quan hành trình</h2>
    <p>Đưa vợ/chồng Việt sang Pháp đòi hỏi thực hiện các bước theo đúng thứ tự. Không thể bỏ qua bước nào — mỗi giấy tờ là điều kiện để bước tiếp theo.</p>

    <div style="overflow-x:auto;border-radius:10px;border:1px solid rgba(77,200,160,0.18);margin:1.5rem 0">
    <table class="vi-art-table">
      <thead>
        <tr>
          <th style="width:2.5rem;text-align:center">#</th>
          <th>BƯỚC</th>
          <th>NƠI THỰC HIỆN</th>
          <th>THỜI GIAN</th>
          <th>AI LÀM</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="text-align:center"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem">1</span></td>
          <td><strong>CCAM</strong><br><small style="opacity:0.6;font-size:0.78rem">Giấy phép kết hôn lãnh sự</small></td>
          <td>🇻🇳 Việt Nam<br><small style="opacity:0.55;font-size:0.78rem">Đại sứ quán Pháp</small></td>
          <td><span class="step-pill-green">4–6 tuần</span><br><small style="opacity:0.55;font-size:0.76rem">trước 4 tháng</small></td>
          <td style="font-size:0.85rem;opacity:0.82">Người Pháp</td>
        </tr>
        <tr>
          <td style="text-align:center"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem">2</span></td>
          <td><strong>Kết hôn dân sự</strong><br><small style="opacity:0.6;font-size:0.78rem">UBND (Comité populaire)</small></td>
          <td>🇻🇳 Việt Nam</td>
          <td><span class="step-pill-green">1–3 tháng</span></td>
          <td style="font-size:0.85rem;opacity:0.82">Cặp đôi + UBND</td>
        </tr>
        <tr>
          <td style="text-align:center"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem">3</span></td>
          <td><strong>Đăng ký tại Nantes</strong><br><small style="opacity:0.6;font-size:0.78rem">SCEC — Trung tâm Hộ tịch</small></td>
          <td>🇫🇷 Pháp<br><small style="opacity:0.55;font-size:0.78rem">từ xa</small></td>
          <td><span class="step-pill-amber">6–12 tháng</span></td>
          <td style="font-size:0.85rem;opacity:0.82">SCEC Nantes</td>
        </tr>
        <tr>
          <td style="text-align:center"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem">4</span></td>
          <td><strong>Visa dài hạn</strong><br><small style="opacity:0.6;font-size:0.78rem">~99 € · vợ/chồng người Pháp</small></td>
          <td>🇻🇳 Việt Nam<br><small style="opacity:0.55;font-size:0.78rem">VFS Global</small></td>
          <td><span class="step-pill-green">2–3 tháng</span></td>
          <td style="font-size:0.85rem;opacity:0.82">ĐSQ + VFS</td>
        </tr>
        <tr>
          <td style="text-align:center"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem">5</span></td>
          <td><strong>Phỏng vấn đại sứ quán</strong><br><small style="opacity:0.6;font-size:0.78rem">Không phải lúc nào cũng có</small></td>
          <td>🇻🇳 Việt Nam</td>
          <td><span style="background:rgba(250,248,244,0.07);color:rgba(250,248,244,0.5);padding:3px 10px;border-radius:20px;font-size:0.78rem;white-space:nowrap">gộp vào bước 4</span></td>
          <td style="font-size:0.85rem;opacity:0.82">Người Việt</td>
        </tr>
        <tr>
          <td style="text-align:center"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem">6</span></td>
          <td><strong>Xác nhận OFII</strong><br><small style="opacity:0.6;font-size:0.78rem">250 € · bắt buộc</small></td>
          <td>🇫🇷 Pháp</td>
          <td><span class="step-pill-green">trong 3 tháng</span><br><small style="opacity:0.55;font-size:0.76rem">sau khi nhập cảnh</small></td>
          <td style="font-size:0.85rem;opacity:0.82">OFII</td>
        </tr>
        <tr>
          <td style="text-align:center"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem">7</span></td>
          <td><strong>Thẻ cư trú</strong><br><small style="opacity:0.6;font-size:0.78rem">ANEF · trực tuyến</small></td>
          <td>🇫🇷 Pháp<br><small style="opacity:0.55;font-size:0.78rem">Sở ngoại kiều</small></td>
          <td><span class="step-pill-amber">4–6 tháng</span></td>
          <td style="font-size:0.85rem;opacity:0.82">Préfecture / ANEF</td>
        </tr>
      </tbody>
    </table>
    </div>

    <p>Tổng thời gian thực tế: <strong>12 đến 24 tháng</strong> tùy tốc độ xử lý của từng cơ quan và chất lượng hồ sơ. Tin vui: một khi đã có visa, vợ/chồng bạn có thể sống và làm việc hợp pháp tại Pháp mà không cần chờ thẻ cư trú.</p>

    <h2 id="buoc-1">Bước 1 — CCAM : giấy phép kết hôn lãnh sự</h2>
    <p>Trước khi kết hôn tại Việt Nam, người Pháp phải xin <strong>Giấy Phép Kết Hôn Lãnh Sự (CCAM)</strong> tại đại sứ quán Pháp ở Hà Nội hoặc tổng lãnh sự quán tại TP. HCM. Giấy này xác nhận người Pháp đủ điều kiện kết hôn theo luật Pháp (chưa kết hôn, không có trở ngại pháp lý).</p>
    <ul>
      <li>Nộp đơn trước ngày dự kiến kết hôn <strong>ít nhất 4 tháng</strong></li>
      <li>Thời gian xử lý: <strong>4 đến 6 tuần</strong> (gồm 10 ngày niêm yết hôn ước)</li>
      <li>Thời hạn hiệu lực: <strong>1 năm</strong></li>
      <li>Không có CCAM, UBND Việt Nam không thể đăng ký kết hôn</li>
    </ul>
    <p><strong>→ Xem hướng dẫn chi tiết :</strong> <a href="giay-phep-ket-hon-lanh-su-phap-ccam">CCAM : cách xin tại đại sứ quán Pháp tại Việt Nam</a></p>

    <h2 id="buoc-2">Bước 2 — Kết hôn tại Ủy Ban Nhân Dân</h2>
    <p>Khi đã có CCAM, hôn lễ dân sự diễn ra tại UBND của quận/huyện nơi người Việt có hộ khẩu. Người Pháp bắt buộc phải có mặt tại Việt Nam vào ngày lễ.</p>
    <ul>
      <li>CCAM được nộp cho UBND khi đăng ký hồ sơ kết hôn</li>
      <li>Ngày lễ được ấn định sau khi hồ sơ đầy đủ (thời gian chờ tùy từng quận)</li>
      <li>Sau lễ, bạn nhận <strong>Giấy chứng nhận đăng ký kết hôn</strong></li>
    </ul>

    <div class="vi-tip">
      <strong>Lưu ý:</strong> Một số UBND địa phương áp dụng thêm yêu cầu riêng (phỏng vấn sơ bộ, bằng chứng tài chính…). Nên hỏi trước tại đại sứ quán hoặc tổng lãnh sự quán tùy theo tỉnh thành.
    </div>

    <p><strong>→ Xem hướng dẫn chi tiết :</strong> <a href="dang-ky-ket-hon-ubnd">Đăng ký kết hôn tại UBND : hồ sơ và ngày lễ</a></p>

    <h2 id="buoc-3">Bước 3 — Đăng ký hôn nhân tại Nantes</h2>
    <p>Sau khi kết hôn tại Việt Nam, cần được công nhận hôn nhân tại Pháp. Hồ sơ đăng ký nộp tại <strong>SCEC Nantes</strong> — cơ quan duy nhất được phép đăng ký các cuộc hôn nhân ở nước ngoài vào sổ hộ tịch Pháp.</p>
    <p>Hồ sơ gửi qua bưu điện hoặc qua lãnh sự quán, kèm giấy kết hôn Việt Nam đã hợp pháp hóa hoặc apostille và bản dịch công chứng. Thời gian chờ: <strong>6 đến 12 tháng</strong> tùy thời điểm.</p>
    <p><strong>→ Xem hướng dẫn chi tiết :</strong> <a href="chuyen-ho-tich-nantes">Đăng ký hôn nhân tại Nantes : hồ sơ và thời gian</a></p>

    <h2 id="buoc-4">Bước 4 — Visa dài hạn (VLS-TS)</h2>
    <p>Khi hôn nhân đã được đăng ký tại Nantes, vợ/chồng bạn có thể nộp đơn xin visa dài hạn mục "đời tư và gia đình" — dành cho vợ/chồng người Pháp. Visa được nộp tại Việt Nam, qua trung tâm <strong>VFS Global</strong> được ủy quyền bởi đại sứ quán Pháp.</p>

    <div class="vi-tip">
      <strong>VLS-TS hay visa thường?</strong> Luôn xin visa dài hạn VLS-TS. Nó cho phép vợ/chồng bạn định cư ngay tại Pháp mà không cần qua sở ngoại kiều trong những tháng đầu. Chi phí: khoảng <strong>99 €</strong>.
    </div>

    <p>Giấy tờ chủ yếu trong hồ sơ: bản trích lục kết hôn đã đăng ký Nantes, bằng chứng thu nhập tại Pháp, địa chỉ chỗ ở tại Pháp, ảnh thẻ, giấy khai sinh người Việt đã dịch và apostille.</p>
    <p><strong>→ Xem hướng dẫn chi tiết :</strong> <a href="visa-dai-han-vo-chong-sang-phap">Visa dài hạn vợ/chồng người Pháp : hồ sơ đầy đủ</a></p>

    <h2 id="buoc-5">Bước 5 — Phỏng vấn tại đại sứ quán</h2>
    <p>Với visa định cư dài hạn, đại sứ quán Pháp thường triệu tập người nộp đơn để phỏng vấn. Mục đích: xác minh tính thực chất của cuộc sống chung và hôn nhân không phải hôn nhân giả.</p>
    <p>Phỏng vấn không bắt buộc trong mọi trường hợp nhưng khá phổ biến với người Việt. Chuẩn bị cho vợ/chồng bạn: ảnh cuộc sống chung, bằng chứng liên lạc thường xuyên, và hiểu biết về tình hình cá nhân của bạn tại Pháp.</p>

    <h2 id="buoc-6">Bước 6 — Đến Pháp và xác nhận OFII</h2>
    <p>Ngay khi đến Pháp với VLS-TS, vợ/chồng bạn phải xác nhận visa với <strong>OFII</strong> trong vòng <strong>3 tháng</strong> kể từ ngày nhập cảnh. Xác nhận này bắt buộc và tốn <strong>250 €</strong> (thanh toán trực tuyến trên ofii.fr).</p>
    <p>Xác nhận OFII cũng mở ra quyền tham gia các khóa học tiếng Pháp và giá trị cộng hòa trong khuôn khổ Hợp đồng Hòa nhập Cộng hòa (CIR) — bắt buộc với mọi người nước ngoài mới đến.</p>
    <p><strong>→ Xem hướng dẫn chi tiết :</strong> <a href="the-cu-tru-tai-phap">Thẻ cư trú và OFII : tất cả những gì bạn cần biết</a></p>

    <h2 id="buoc-7">Bước 7 — Xin thẻ cư trú</h2>
    <p>Visa VLS-TS có hiệu lực 1 năm phải được tiếp nối bằng đơn xin thẻ cư trú, nộp <strong>trước 2 đến 4 tháng khi visa hết hạn</strong> trên cổng <strong>ANEF</strong> (Administration Numérique pour les Étrangers en France). Toàn bộ thủ tục thực hiện trực tuyến.</p>
    <p>Thẻ đầu tiên thường là thẻ cư trú tạm thời 1 năm. Sau <strong>3 năm hôn nhân</strong> với người Pháp, có thể xin thẻ cư trú thường trú 10 năm.</p>
    <p><strong>→ Xem hướng dẫn chi tiết :</strong> <a href="the-cu-tru-tai-phap">Thẻ cư trú đời tư và gia đình : cách xin và gia hạn</a></p>

    <h2 id="faq">Câu hỏi thường gặp</h2>

    <div class="vi-faq-item">
      <button class="vi-faq-q" onclick="this.parentElement.classList.toggle('open')">Mất bao lâu để đưa vợ/chồng Việt sang Pháp? <span class="arrow">▼</span></button>
      <div class="vi-faq-a">Trung bình từ 12 đến 24 tháng: vài tháng cho CCAM, hôn lễ và đăng ký Nantes tại Việt Nam, sau đó 2–3 tháng để đại sứ quán Pháp xử lý visa dài hạn tại Hà Nội hoặc TP. HCM.</div>
    </div>
    <div class="vi-faq-item">
      <button class="vi-faq-q" onclick="this.parentElement.classList.toggle('open')">Vợ/chồng Việt có cần biết tiếng Pháp để xin visa không? <span class="arrow">▼</span></button>
      <div class="vi-faq-a">Không bắt buộc, nhưng trong buổi phỏng vấn tại đại sứ quán, nhân viên sẽ kiểm tra tính thực chất của cuộc sống chung. Biết một chút tiếng Pháp cơ bản sẽ giúp buổi phỏng vấn thuận lợi hơn.</div>
    </div>
    <div class="vi-faq-item">
      <button class="vi-faq-q" onclick="this.parentElement.classList.toggle('open')">Có bắt buộc phải kết hôn tại Việt Nam không? <span class="arrow">▼</span></button>
      <div class="vi-faq-a">Kết hôn là điều kiện bắt buộc để xin visa vợ/chồng người Pháp. Nếu đã kết hôn ở nước khác, vẫn cần đăng ký tại SCEC Nantes. PACS không đủ điều kiện — chỉ hôn nhân hợp lệ mới được xét.</div>
    </div>
    <div class="vi-faq-item">
      <button class="vi-faq-q" onclick="this.parentElement.classList.toggle('open')">Chi phí toàn bộ thủ tục là bao nhiêu? <span class="arrow">▼</span></button>
      <div class="vi-faq-a">Chi phí cố định: khoảng 99 € lệ phí visa dài hạn, 250 € thuế OFII khi đến Pháp, cộng thêm chi phí dịch thuật công chứng và công chứng viên tại Việt Nam. Tổng thực tế: từ 600 đến 1.200 €.</div>
    </div>
    <div class="vi-faq-item">
      <button class="vi-faq-q" onclick="this.parentElement.classList.toggle('open')">Vợ/chồng Việt có được đi làm ngay khi sang Pháp không? <span class="arrow">▼</span></button>
      <div class="vi-faq-a">Có. Visa dài hạn VLS-TS mục "đời tư và gia đình" cho phép làm việc (hợp đồng lao động hoặc tự doanh) ngay từ khi đặt chân đến Pháp, không cần chờ thẻ cư trú.</div>
    </div>

    <!-- Newsletter -->
    <div style="background:rgba(27,107,82,0.07);border-radius:var(--radius);padding:2rem;margin-top:3rem;text-align:center">
      <h3 style="font-family:'DM Serif Display',serif;margin-bottom:0.3rem">Nhận bài viết qua email ✉️</h3>
      <p style="color:var(--muted);margin-bottom:1.25rem;font-size:0.95rem">Một email mỗi tháng. Hủy đăng ký bất cứ lúc nào.</p>
      <form style="display:flex;gap:0.75rem;max-width:420px;margin:0 auto;flex-wrap:wrap" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_subject" value="Newsletter VI — Cap Vietnam">
        <input type="hidden" name="source" value="vi/dua-vo-chong-viet-sang-phap">
        <input type="email" name="email" placeholder="Email của bạn…" required
               style="flex:1;padding:0.75rem 1rem;border:1px solid var(--border);border-radius:4px;font-family:inherit;font-size:0.95rem">
        <button type="submit"
                style="padding:0.75rem 1.5rem;background:var(--jade);color:#fff;border:none;border-radius:4px;font-weight:700;font-family:inherit;cursor:pointer">Đăng ký →</button>
      </form>
    </div>

    <!-- Author -->
    <div style="background:rgba(27,107,82,0.06);border-radius:var(--radius);padding:1.5rem;margin-top:2rem;display:flex;gap:1rem;align-items:center">
      <div style="overflow:hidden;border-radius:50%;width:60px;height:60px;flex-shrink:0;position:relative">
        <img src="../assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="60" height="60" loading="lazy" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0">
      </div>
      <div>
        <strong style="font-size:0.9rem">Anthony Bouillon</strong>
        <p style="margin:0;font-size:0.85rem;color:var(--muted)">Người Pháp kết hôn với người Việt Nam, đang sống tại Hà Nội. Mình chia sẻ hành trình thực tế — thủ tục hành chính, cuộc sống đôi lứa quốc tế.</p>
      </div>
    </div>

  </article>
</div>
</main>

<script>
document.querySelectorAll('.vi-faq-q').forEach(btn => {
  btn.addEventListener('click', () => btn.parentElement.classList.toggle('open'));
});
</script>

<?php include '../footer.php'; ?>
