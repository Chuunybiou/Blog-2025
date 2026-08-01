<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../visa-schengen-belle-famille-vietnamienne',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang = [
  'fr'        => SITE_URL . '/visa-schengen-belle-famille-vietnamienne',
  'vi'        => SITE_URL . '/vi/visa-schengen-cho-bo-me',
  'x-default' => SITE_URL . '/visa-schengen-belle-famille-vietnamienne',
];

$page_title       = 'Xin visa Schengen cho bố mẹ sang Pháp thăm con : hồ sơ đầy đủ 2026';
$page_description = 'Mời bố mẹ từ Việt Nam sang Pháp thăm con : hồ sơ visa Schengen ngắn hạn, attestation d\'accueil, thư mời, chứng minh ràng buộc tại Việt Nam và cách tránh bị từ chối.';
$page_canonical   = SITE_URL . '/vi/visa-schengen-cho-bo-me';
$page_og_title    = 'Visa Schengen cho bố mẹ sang Pháp : hướng dẫn đầy đủ 2026';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/mariage-franco-vietnamien-ceremonie.jpg';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Xin visa Schengen cho bố mẹ sang Pháp thăm con : hồ sơ đầy đủ',
  'description'      => $page_description,
  'author'           => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/vi/'],
  'publisher'        => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'datePublished'    => '2026-08-01',
  'dateModified'     => '2026-08-01',
  'url'              => $page_canonical,
  'inLanguage'       => 'vi',
  'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $page_canonical],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$page_extra_css = '
.vi-art-hero{padding-top:64px;background:linear-gradient(165deg,#2a1a05 0%,#5a3a10 45%,#2a1c08 100%);position:relative;overflow:hidden}
.vi-art-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,rgba(222,158,40,0.18),transparent 60%),radial-gradient(ellipse 50% 40% at 80% 20%,rgba(191,74,42,0.12),transparent 60%)}
.vi-art-hero-inner{max-width:860px;margin:0 auto;padding:4rem 2rem 3rem;position:relative;z-index:1}
.vi-art-meta{display:flex;gap:1rem;align-items:center;flex-wrap:wrap;margin-bottom:1.5rem}
.vi-art-cat{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:4px 12px;border-radius:3px;background:rgba(222,158,40,0.28);color:#e8c06a;border:1px solid rgba(232,192,106,0.3)}
.vi-art-date,.vi-art-read{font-size:0.8rem;color:rgba(250,248,244,0.45)}
.vi-art-hero h1{font-family:"DM Serif Display",serif;font-size:clamp(1.9rem,4.5vw,2.8rem);color:#fff;line-height:1.25;margin-bottom:1rem}
.vi-art-hero-desc{font-size:1.05rem;color:rgba(250,248,244,0.6);line-height:1.8;max-width:700px}
.vi-art-body{max-width:760px;margin:0 auto;padding:4rem 2rem}
.vi-art-body h2{font-family:"DM Serif Display",serif;font-size:1.65rem;margin:2.5rem 0 1rem;color:var(--ink);padding-top:1rem;border-top:2px solid var(--warm-bg)}
.vi-art-body h3{font-size:1.1rem;font-weight:700;margin:1.75rem 0 0.75rem;color:var(--ink)}
.vi-art-body p{font-size:1rem;line-height:1.9;color:#333;margin-bottom:1.25rem}
.vi-art-body ul,.vi-art-body ol{padding-left:1.5rem;margin-bottom:1.25rem}
.vi-art-body li{font-size:1rem;line-height:1.8;color:#333;margin-bottom:0.5rem}
.vi-art-body strong{color:var(--ink)}
.vi-art-body a{color:#8a5a10;text-decoration:underline}
.vi-art-tip{background:rgba(222,158,40,0.08);border-left:3px solid #b8860b;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-art-tip strong{color:#8a5a10}
.vi-art-table{width:100%;border-collapse:collapse;font-size:0.9rem;border-radius:10px;overflow:hidden;border:1px solid rgba(184,134,11,0.22);margin:1.5rem 0}
.vi-art-table thead tr{background:rgba(184,134,11,0.16)}
.vi-art-table th{padding:0.7rem 1rem;text-align:left;color:#8a5a10;font-size:0.7rem;letter-spacing:1.5px;font-weight:700}
.vi-art-table td{padding:0.75rem 1rem;font-size:0.87rem;border-bottom:1px solid rgba(0,0,0,0.06)}
.vi-art-table tr:nth-child(even) td{background:rgba(184,134,11,0.04)}
.vi-art-nav{display:flex;justify-content:space-between;align-items:center;gap:1rem;flex-wrap:wrap;margin:3rem 0;padding:1.5rem;background:var(--warm-bg);border-radius:var(--radius)}
.vi-art-nav a{display:inline-flex;align-items:center;gap:6px;padding:0.7rem 1.4rem;background:#b8860b;color:#fff;border-radius:4px;text-decoration:none;font-weight:700;font-size:0.88rem}
.vi-art-nav a:hover{background:#8a5a10}
';

include '../header.php';
?>

<header class="vi-art-hero">
  <div class="vi-art-hero-inner">
    <div class="vi-art-meta">
      <span class="vi-art-cat">Gia đình</span>
      <span class="vi-art-date">Tháng 8, 2026</span>
      <span class="vi-art-read">⏱ 9 phút đọc</span>
    </div>
    <h1>Xin visa Schengen cho bố mẹ<br>sang Pháp thăm con</h1>
    <p class="vi-art-hero-desc">
      Bạn đã sang Pháp sống — và muốn đón bố mẹ sang chơi, thăm cháu, dự đám cưới. Visa Schengen cho người Việt lớn tuổi bị từ chối khá nhiều. Đây là cách xây dựng một bộ hồ sơ vững chắc.
    </p>
  </div>
</header>

<div style="background:var(--warm-bg);padding:0.75rem 2rem;font-size:0.82rem;color:var(--muted)">
  <div style="max-width:860px;margin:0 auto">
    <a href="./" style="color:#8a5a10">Trang chủ</a> ›
    <a href="./#song-o-phap" style="color:#8a5a10">Sống ở Pháp</a> ›
    <span>Visa Schengen cho bố mẹ</span>
  </div>
</div>

<main>
<article class="vi-art-body">

  <p><strong>Đón bố mẹ sang Pháp là mong muốn chính đáng của mọi người con xa quê — và là một thủ tục thật sự gian nan.</strong> Tỷ lệ từ chối visa Schengen với người Việt không thấp, vì lãnh sự quán luôn cảnh giác với nguy cơ ở lại quá hạn. Bài này hướng dẫn cách chuẩn bị hồ sơ từ cả hai phía : bố mẹ ở Việt Nam, và vợ chồng bạn ở Pháp.</p>

  <p>Xem <a href="../visa-schengen-belle-famille-vietnamienne">bản tiếng Pháp đầy đủ →</a> (viết cho chồng/vợ Pháp của bạn — gửi link này cho anh/cô ấy đọc phần việc bên Pháp).</p>

  <h2>Vì sao visa Schengen khó với bố mẹ Việt Nam ?</h2>
  <p>Visa Schengen ngắn hạn (loại C) cho phép ở tối đa <strong>90 ngày trong mỗi 180 ngày</strong> trong khối Schengen, với mục đích thăm thân, du lịch. Với người Việt, lãnh sự quán xét kỹ vì muốn tránh : ở lại quá hạn visa, dùng visa ngắn hạn để định cư lâu dài, khai sai mục đích.</p>
  <p>Nghịch lý cần nói thẳng : hồ sơ « rủi ro » trong mắt lãnh sự là <em>người lớn tuổi, thu nhập thấp, ít ràng buộc tại Việt Nam</em> — nghĩa là đúng chân dung của nhiều ông bà bố mẹ Việt sống giản dị ở quê. Câu trả lời không phải là tô vẽ hồ sơ, mà là <strong>chứng minh bằng giấy tờ những ràng buộc có thật</strong> : căn nhà ở quê dù nhỏ vẫn là giấy tờ nhà đất ; các con, các cháu còn ở Việt Nam là ràng buộc gia đình vững chắc ; bàn thờ tổ tiên mà ông bà đang hương khói — về mặt văn hóa — là sợi dây níu giữ mạnh nhất, và thư mời hoàn toàn có thể giải thích điều đó cho viên chức Pháp hiểu.</p>

  <h2>Hồ sơ phía bố mẹ (người xin visa)</h2>
  <p>Bố mẹ tự đứng tên xin visa, nộp qua trung tâm VFS Global tại Việt Nam :</p>

  <div style="overflow-x:auto;margin:1.5rem 0">
  <table class="vi-art-table">
    <thead><tr><th>Giấy tờ</th><th>Ghi chú</th></tr></thead>
    <tbody>
      <tr><td><strong>Hộ chiếu</strong></td><td>Còn hạn ít nhất 3 tháng sau ngày dự kiến về</td></tr>
      <tr><td><strong>Ảnh thẻ sinh trắc học</strong></td><td>Đúng chuẩn Schengen</td></tr>
      <tr><td><strong>Tờ khai xin visa Schengen</strong></td><td>Trên trang France-Visas / VFS Global</td></tr>
      <tr><td><strong>Chứng minh ràng buộc tại Việt Nam</strong></td><td>Sổ đỏ/giấy tờ nhà, sổ lương hưu, giấy khai sinh các con còn ở Việt Nam…</td></tr>
      <tr><td><strong>Chứng minh tài chính (nếu có)</strong></td><td>Sao kê 3 tháng, lương hưu — nếu không có, xem phần « bảo lãnh » bên dưới</td></tr>
      <tr><td><strong>Bảo hiểm du lịch</strong></td><td>Mức bồi thường tối thiểu <strong>30 000 €</strong>, toàn khối Schengen, suốt thời gian ở</td></tr>
      <tr><td><strong>Vé máy bay khứ hồi</strong></td><td>Nên đặt chỗ (chưa cần xuất vé không hoàn)</td></tr>
    </tbody>
  </table>
  </div>

  <h2>Hồ sơ phía Pháp (con và con rể/con dâu bảo lãnh)</h2>
  <div style="overflow-x:auto;margin:1.5rem 0">
  <table class="vi-art-table">
    <thead><tr><th>Giấy tờ</th><th>Ghi chú</th></tr></thead>
    <tbody>
      <tr><td><strong>Thư mời</strong></td><td>Nêu rõ quan hệ gia đình, thời gian, mục đích chuyến thăm (xem cấu trúc bên dưới)</td></tr>
      <tr><td><strong>Attestation d'accueil</strong></td><td>Giấy xác nhận đón tiếp, xin tại tòa thị chính (mairie) — 30 € tem thuế, có giá trị 1 năm</td></tr>
      <tr><td><strong>CMND/hộ chiếu người bảo lãnh</strong></td><td>Bản sao</td></tr>
      <tr><td><strong>Chứng minh chỗ ở</strong></td><td>Hóa đơn dưới 3 tháng</td></tr>
      <tr><td><strong>3 phiếu lương gần nhất</strong></td><td>Chứng minh khả năng lo cho khách trong thời gian ở Pháp</td></tr>
      <tr><td><strong>Giấy đăng ký kết hôn</strong></td><td>Chứng minh quan hệ gia đình với người xin visa</td></tr>
      <tr><td><strong>Thẻ cư trú của bạn</strong></td><td>Nếu bạn (người con Việt) đang ở Pháp</td></tr>
    </tbody>
  </table>
  </div>

  <div class="vi-art-tip">
    <strong>Về attestation d'accueil :</strong> tòa thị chính kiểm tra diện tích nhà — chuẩn khoảng <strong>9 m²</strong> cho khách đầu tiên, cộng <strong>7 m²</strong> cho mỗi khách thêm. Xin sớm : giấy được cấp ngay hoặc sau vài ngày.
  </div>

  <h3>Thư mời : cấu trúc hiệu quả</h3>
  <p>Thư mời là giấy tờ « con người » nhất của bộ hồ sơ — nơi gia đình bạn có thể tạo khác biệt. Một lá thư tốt gói trong một trang, viết bằng tiếng Pháp (chồng/vợ Pháp của bạn viết và ký), theo thứ tự :</p>
  <ol>
    <li><strong>Người mời là ai</strong> : tên, quốc tịch, địa chỉ, nghề nghiệp — và quan hệ chính xác (« con rể của ông bà X, chồng của con gái ông bà từ ngày… ») ;</li>
    <li><strong>Mời ai</strong> : danh tính đầy đủ của bố mẹ <em>đúng như trên hộ chiếu</em> (chú ý chính tả — tên tiếng Việt phiên âm hay sai lệch giữa các giấy tờ) ;</li>
    <li><strong>Lý do cụ thể, có ngày tháng</strong> : « thăm gia đình từ ngày… đến ngày…, nhân dịp cháu đầu lòng chào đời / đám cưới / nghỉ hè ». Lý do cụ thể và có giới hạn làm yên lòng ; « sang khám phá nước Pháp » chung chung gây lo ngại ;</li>
    <li><strong>Hậu cần</strong> : ở đâu (nhà hai bạn, kèm số attestation d'accueil), ai chi trả gì ;</li>
    <li><strong>Cam kết trở về</strong> : một câu nêu các ràng buộc của bố mẹ tại Việt Nam (các con khác, nhà cửa, công việc) và ý định về đúng ngày.</li>
  </ol>

  <h3>Nếu bố mẹ không có thu nhập riêng : bảo lãnh tài chính</h3>
  <p>Trường hợp rất phổ biến : bố mẹ về hưu ở quê, không có sao kê ngân hàng « đẹp ». Giải pháp là <strong>cam kết bảo lãnh tài chính chính thức</strong> từ phía Pháp : con rể/con dâu Pháp viết cam kết chi trả toàn bộ chi phí chuyến đi, kèm 3 sao kê tài khoản và phiếu lương gần nhất. Việc bố mẹ không có thu nhập riêng <strong>không phải lý do từ chối</strong> khi người bảo lãnh chứng minh được năng lực tài chính rõ ràng — điều gây từ chối là sự mập mờ, không phải sự giản dị.</p>

  <h2>Nộp hồ sơ tại VFS Global : phí và thời gian</h2>
  <ul>
    <li><strong>Phí visa Schengen : 90 €</strong> (không hoàn nếu bị từ chối) + phí dịch vụ VFS ;</li>
    <li><strong>Thời gian xử lý</strong> : chính thức 15 ngày làm việc — nên dự phòng <strong>3-4 tuần</strong> vào mùa cao điểm (hè, tháng 12) ;</li>
    <li>Đặt lịch hẹn online trên trang VFS Global (Hà Nội, TP.HCM, Đà Nẵng).</li>
  </ul>
  <p>Lần đầu nộp, bố mẹ sẽ lấy <strong>dấu vân tay và ảnh sinh trắc học</strong> (lưu trong hệ thống VIS của Schengen). Tin vui cho các lần sau : dữ liệu này dùng lại được trong <strong>59 tháng</strong> — xin visa lần hai trong vòng 5 năm có thể không cần đến trung tâm nữa. Ngày nộp hồ sơ, gia đình nên cử một người đi cùng ông bà — được phép đưa đến tận cửa trung tâm.</p>

  <h2>Chiến lược dài hạn : xây dựng lịch sử du lịch</h2>
  <p>Nguyên tắc nhiều gia đình biết quá muộn : <strong>visa đầu tiên quyết định các visa sau</strong>. Bố mẹ đi đúng hạn, về đúng ngày ở lần đầu — lần sau xin dễ hơn hẳn, và dần dần có thể được cấp visa nhiều lần vào (multi-entry) thời hạn dài. Vì vậy, dù rất muốn ông bà ở thêm : <strong>đừng bao giờ để quá hạn visa</strong>, kể cả một ngày. Kỷ luật của lần đầu là món quà cho mọi chuyến thăm sau.</p>

  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Bố mẹ có thể ở Pháp bao lâu ?</summary>
    <p style="margin-top:0.75rem;color:#555">Tối đa 90 ngày trong mỗi chu kỳ 180 ngày trong toàn khối Schengen. Muốn ở lâu hơn (ví dụ chăm cháu mới sinh nhiều tháng), cần loại visa khác (visa dài hạn thăm thân) — thủ tục nặng hơn nhiều và không phải lúc nào cũng được cấp.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Bị từ chối thì làm gì ?</summary>
    <p style="margin-top:0.75rem;color:#555">Đọc kỹ lý do từ chối (được ghi trong thông báo). Có thể khiếu nại (qua ủy ban CRRV tại Nantes trong 2 tháng), nhưng với visa ngắn hạn, thường nhanh hơn là <strong>nộp lại hồ sơ mới</strong> đã khắc phục đúng điểm yếu : thêm chứng minh ràng buộc, thư mời cụ thể hơn, cam kết bảo lãnh đầy đủ hơn.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Có nên nhờ dịch vụ làm visa không ?</summary>
    <p style="margin-top:0.75rem;color:#555">Không bắt buộc — toàn bộ thủ tục tự làm được và bài viết này + bản tiếng Pháp đã hướng dẫn đủ. Nếu dùng dịch vụ, chỉ nên xem đó là hỗ trợ giấy tờ ; cảnh giác với nơi hứa « bao đậu » : không ai bảo đảm được kết quả visa, và hồ sơ khai sai sự thật sẽ hại các lần xin sau.</p>
  </details>

  <div class="vi-art-nav">
    <div>
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">← Đọc thêm</div>
      <a href="cuoc-song-thuc-te-o-phap">Cuộc sống thực tế ở Pháp</a>
    </div>
    <div style="text-align:right">
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">Đọc thêm →</div>
      <a href="quoc-tich-phap-cho-con">Quốc tịch cho con</a>
    </div>
  </div>

  <div style="background:rgba(184,134,11,0.06);border-radius:var(--radius);padding:1.5rem;margin-top:2rem;display:flex;gap:1rem;align-items:center">
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
