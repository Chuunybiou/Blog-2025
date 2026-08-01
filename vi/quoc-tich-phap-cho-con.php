<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../enfant-couple-franco-vietnamien-nationalite',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang = [
  'fr'        => SITE_URL . '/enfant-couple-franco-vietnamien-nationalite',
  'vi'        => SITE_URL . '/vi/quoc-tich-phap-cho-con',
  'x-default' => SITE_URL . '/enfant-couple-franco-vietnamien-nationalite',
];

$page_title       = 'Con của cặp đôi Pháp-Việt : quốc tịch, khai sinh, hai hộ chiếu (2026)';
$page_description = 'Con của bố/mẹ Pháp tự động có quốc tịch Pháp. Hướng dẫn khai sinh hai bên, giữ hai quốc tịch Pháp-Việt, làm hộ chiếu Pháp cho con và quy tắc đi lại với hai hộ chiếu.';
$page_canonical   = SITE_URL . '/vi/quoc-tich-phap-cho-con';
$page_og_title    = 'Quốc tịch cho con của cặp đôi Pháp-Việt : hướng dẫn 2026';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/mariage-franco-vietnamien-ceremonie.jpg';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Con của cặp đôi Pháp-Việt : quốc tịch, khai sinh, hai hộ chiếu',
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
.vi-art-hero{padding-top:64px;background:linear-gradient(165deg,#0a1f2a 0%,#14425a 45%,#0d2a38 100%);position:relative;overflow:hidden}
.vi-art-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,rgba(41,128,185,0.2),transparent 60%),radial-gradient(ellipse 50% 40% at 80% 20%,rgba(191,74,42,0.1),transparent 60%)}
.vi-art-hero-inner{max-width:860px;margin:0 auto;padding:4rem 2rem 3rem;position:relative;z-index:1}
.vi-art-meta{display:flex;gap:1rem;align-items:center;flex-wrap:wrap;margin-bottom:1.5rem}
.vi-art-cat{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:4px 12px;border-radius:3px;background:rgba(41,128,185,0.3);color:#7cc0e8;border:1px solid rgba(124,192,232,0.25)}
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
.vi-art-body a{color:#1a5276;text-decoration:underline}
.vi-art-tip{background:rgba(41,128,185,0.06);border-left:3px solid #2471a3;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-art-tip strong{color:#1a5276}
.vi-art-table{width:100%;border-collapse:collapse;font-size:0.9rem;border-radius:10px;overflow:hidden;border:1px solid rgba(41,128,185,0.2);margin:1.5rem 0}
.vi-art-table thead tr{background:rgba(41,128,185,0.15)}
.vi-art-table th{padding:0.7rem 1rem;text-align:left;color:#1a5276;font-size:0.7rem;letter-spacing:1.5px;font-weight:700}
.vi-art-table td{padding:0.75rem 1rem;font-size:0.87rem;border-bottom:1px solid rgba(0,0,0,0.06)}
.vi-art-table tr:nth-child(even) td{background:rgba(41,128,185,0.03)}
.vi-art-nav{display:flex;justify-content:space-between;align-items:center;gap:1rem;flex-wrap:wrap;margin:3rem 0;padding:1.5rem;background:var(--warm-bg);border-radius:var(--radius)}
.vi-art-nav a{display:inline-flex;align-items:center;gap:6px;padding:0.7rem 1.4rem;background:#2471a3;color:#fff;border-radius:4px;text-decoration:none;font-weight:700;font-size:0.88rem}
.vi-art-nav a:hover{background:#1a5276}
';

include '../header.php';
?>

<header class="vi-art-hero">
  <div class="vi-art-hero-inner">
    <div class="vi-art-meta">
      <span class="vi-art-cat">Gia đình</span>
      <span class="vi-art-date">Tháng 8, 2026</span>
      <span class="vi-art-read">⏱ 10 phút đọc</span>
    </div>
    <h1>Con của cặp đôi Pháp-Việt :<br>quốc tịch, khai sinh và hai hộ chiếu</h1>
    <p class="vi-art-hero-desc">
      Con bạn tự động là công dân Pháp từ khi sinh. Nhưng còn quốc tịch Việt Nam ? Khai sinh ở đâu, trong bao lâu ? Đi máy bay dùng hộ chiếu nào ? Toàn bộ câu trả lời ở đây.
    </p>
  </div>
</header>

<div style="background:var(--warm-bg);padding:0.75rem 2rem;font-size:0.82rem;color:var(--muted)">
  <div style="max-width:860px;margin:0 auto">
    <a href="./" style="color:#1a5276">Trang chủ</a> ›
    <a href="./#song-o-phap" style="color:#1a5276">Gia đình Pháp-Việt</a> ›
    <span>Quốc tịch cho con</span>
  </div>
</div>

<main>
<article class="vi-art-body">

  <p><strong>Khi em bé của một cặp đôi Pháp-Việt chào đời, câu hỏi giấy tờ ập đến ngay tuần đầu tiên.</strong> Tin tốt : phần quan trọng nhất là tự động. Phần còn lại — khai sinh hai bên, quyết định về quốc tịch Việt Nam, hộ chiếu — cần làm đúng thứ tự và đúng hạn. Bài này hướng dẫn đầy đủ, đặc biệt cho trường hợp bé sinh tại Việt Nam.</p>

  <p>Xem <a href="../enfant-couple-franco-vietnamien-nationalite">bản tiếng Pháp đầy đủ →</a></p>

  <h2>Quốc tịch Pháp truyền cho con thế nào ?</h2>
  <p>Quốc tịch Pháp truyền theo <strong>huyết thống</strong> (jus sanguinis), không theo nơi sinh :</p>
  <ul>
    <li>Bố hoặc mẹ là công dân Pháp → con <strong>là công dân Pháp từ khi sinh</strong>, dù sinh ở Pháp, Việt Nam hay bất kỳ đâu ;</li>
    <li>Quy tắc áp dụng cả khi bố mẹ chưa đăng ký kết hôn, miễn là quan hệ cha/mẹ-con được xác lập hợp pháp (thủ tục nhận con) ;</li>
    <li><strong>Không có thủ tục « xin » quốc tịch Pháp cho con</strong> — quốc tịch là tự động. Việc cần làm chỉ là chính thức hóa qua hộ tịch lãnh sự (khai sinh với cơ quan Pháp).</li>
  </ul>

  <h2>Hai quốc tịch Pháp-Việt : có được không ?</h2>
  <p>Phía Pháp : hoàn toàn được — Pháp chấp nhận đa quốc tịch không hạn chế. Phía Việt Nam : Luật Quốc tịch 2008 về nguyên tắc không công nhận hai quốc tịch, nhưng <strong>có ngoại lệ cho trẻ em của các cặp hôn nhân hỗn hợp</strong> : theo Điều 16, khi khai sinh tại Việt Nam, nếu <strong>hai bố mẹ cùng thỏa thuận bằng văn bản</strong> chọn quốc tịch Việt Nam cho con, bé có thể mang quốc tịch Việt Nam song song với quốc tịch Pháp. Trên thực tế, con bạn có thể có :</p>
  <ul>
    <li>Giấy khai sinh Việt Nam (khai tại UBND) ;</li>
    <li>Giấy khai sinh Pháp (đăng ký qua lãnh sự, lưu tại SCEC Nantes) ;</li>
    <li>Hộ chiếu Pháp ;</li>
    <li>Hộ chiếu Việt Nam — nếu hai bố mẹ đã thỏa thuận chọn quốc tịch Việt Nam khi khai sinh.</li>
  </ul>

  <div class="vi-art-tip">
    <strong>Điều ít ai nói với bạn :</strong> nếu không làm thỏa thuận chọn quốc tịch Việt Nam, con bạn — trong mắt pháp luật Việt Nam — là <strong>người nước ngoài</strong> như bố/mẹ Pháp của bé : cần visa để về thăm ông bà, cần thẻ cư trú nếu sống tại Việt Nam. Với gia đình dự định sống ở Việt Nam hoặc về thường xuyên, đây là yếu tố rất đáng cân nhắc. Ngược lại, bé có cả hai quốc tịch thì không cần visa ở cả hai nước, học trường công cả hai nơi — kèm vài nghĩa vụ Pháp sau này (đăng ký công dân năm 16 tuổi, làm được từ nước ngoài qua lãnh sự).
  </div>

  <h2>Khai sinh phía Pháp : 2 con đường</h2>
  <p>Nếu bé sinh tại Việt Nam :</p>
  <ul>
    <li><strong>Khai báo (déclaration)</strong> : trong vòng <strong>30 ngày</strong> sau sinh, trực tiếp tại Đại sứ quán Pháp (Hà Nội) hoặc Tổng Lãnh sự quán (TP.HCM). Miễn phí. Bé không cần có mặt.</li>
    <li><strong>Chuyển ghi (transcription)</strong> : sau 30 ngày (hoặc nếu gia đình đã ở Pháp) — không giới hạn thời gian, miễn phí, làm được qua bưu điện, chỉ nhiều giấy tờ hơn một chút.</li>
  </ul>
  <p>Cả hai trường hợp, khai sinh được chuyển về Cơ quan Hộ tịch Trung ương (SCEC) tại Nantes — nơi lưu hộ tịch của mọi người Pháp sinh ở nước ngoài.</p>

  <h3>Giấy tờ cho khai báo trong 30 ngày</h3>
  <ul>
    <li>Tờ khai (lãnh sự cấp) ;</li>
    <li>Giấy chứng sinh gốc của bệnh viện + bản sao ;</li>
    <li>Giấy tờ chứng minh quốc tịch Pháp của bố/mẹ Pháp ;</li>
    <li>Giấy tờ tùy thân của cả hai bố mẹ ;</li>
    <li>Giấy đăng ký kết hôn (dưới 6 tháng) nếu đã kết hôn ;</li>
    <li>Sổ gia đình Pháp (livret de famille) để cập nhật, nếu đã có.</li>
  </ul>

  <h2>Bộ giấy tờ đầy đủ của bé</h2>
  <div style="overflow-x:auto;margin:1.5rem 0">
  <table class="vi-art-table">
    <thead><tr><th>Giấy tờ</th><th>Cơ quan cấp</th><th>Dùng để</th></tr></thead>
    <tbody>
      <tr><td><strong>Giấy khai sinh Việt Nam</strong></td><td>UBND</td><td>Cơ sở pháp lý phía Việt Nam</td></tr>
      <tr><td><strong>Giấy khai sinh Pháp</strong></td><td>SCEC Nantes (qua lãnh sự)</td><td>Cơ sở pháp lý phía Pháp</td></tr>
      <tr><td><strong>Sổ gia đình cập nhật</strong></td><td>Lãnh sự</td><td>Giấy tờ tham chiếu tại Pháp</td></tr>
      <tr><td><strong>Hộ chiếu Pháp</strong></td><td>Lãnh sự</td><td>Đi lại, nhập cảnh Pháp (5 năm, 30 €)</td></tr>
      <tr><td><strong>Hộ chiếu Việt Nam</strong> (nếu chọn)</td><td>Cơ quan Việt Nam</td><td>Đi lại, cư trú tại Việt Nam</td></tr>
    </tbody>
  </table>
  </div>

  <h2>Đặt tên con : bài toán đầu tiên của gia đình hai nước</h2>
  <ul>
    <li><strong>Thứ tự họ tên ngược nhau</strong> : Việt Nam viết họ trước (Nguyễn Văn A), Pháp viết họ sau. Cùng một em bé sẽ xuất hiện khác nhau trên giấy tờ hai nước — bình thường, nhưng <strong>kiểm tra kỹ từng giấy tờ</strong> xem họ và tên có bị viên chức đảo nhầm không. Đây là lỗi kinh điển của hồ sơ song tịch.</li>
    <li><strong>Dấu tiếng Việt không tồn tại trong hộ tịch Pháp</strong> : Đ, ư, ơ và các dấu thanh sẽ bị giản lược trên giấy tờ Pháp (Hương → Huong). Con bạn mặc nhiên có <strong>hai cách viết tên chính thức</strong> — biết trước để khỏi hoảng khi một cơ quan so sánh hai giấy tờ.</li>
    <li><strong>Bài kiểm tra thực tế : cả hai bà nội ngoại có gọi được tên cháu không ?</strong> Âm « j », « r » tiếng Pháp khó với người Việt ; thanh điệu tiếng Việt vô hình với tai Pháp. Vì thế nhiều gia đình chọn tên kép (một tên Pháp + một tên Việt) hoặc tên « lưỡng dụng » ngắn gọn không âm khó : Léo, Mila, Anna, Nam, Lan, An…</li>
  </ul>

  <h2>Đi lại với hai hộ chiếu : quy tắc vàng</h2>
  <p>Câu hỏi mọi bố mẹ song tịch đều hỏi : <em>« trình hộ chiếu nào, cho ai ? »</em> Quy tắc của công dân song tịch toàn thế giới : <strong>nước nào muốn thấy hộ chiếu của nước đó</strong>. Cụ thể chuyến Việt Nam → Pháp : xuất cảnh Việt Nam bằng hộ chiếu Việt Nam (với công an cửa khẩu, bé là người Việt), nhập cảnh Pháp bằng hộ chiếu Pháp (với cảnh sát biên phòng Pháp, bé là người Pháp). Chiều về ngược lại.</p>
  <ul>
    <li>Luôn kiểm tra <strong>cả hai hộ chiếu còn hạn</strong> trước mỗi chuyến đi — hộ chiếu trẻ em hết hạn nhanh (5 năm phía Pháp), phát hiện ở sân bay là kịch bản đau đớn kinh điển ;</li>
    <li>Nếu bé đi cùng một mình bố hoặc mẹ (khác họ), mang theo sổ gia đình hoặc giấy khai sinh trong hành lý xách tay — hãng bay đôi khi hỏi ;</li>
    <li>Đừng quên khai báo trước nhập cảnh Việt Nam (PAI) cho mỗi hành khách, kể cả em bé.</li>
  </ul>

  <h2>Trình tự chuẩn 3 tháng đầu (bé sinh tại Việt Nam)</h2>
  <ol>
    <li><strong>Tuần 1-2 : giấy khai sinh Việt Nam</strong> tại UBND với giấy chứng sinh. Đây là giấy tờ gốc — mọi thứ khác bắt nguồn từ đây. Muốn quốc tịch Việt Nam cho con thì thỏa thuận hai bố mẹ ký tại bước này.</li>
    <li><strong>Trước ngày thứ 30 : khai báo với lãnh sự Pháp.</strong> Cửa sổ 30 ngày là hạn chót duy nhất của cả hành trình — đặt lịch hẹn ngay khi bé chào đời. Lỡ hạn cũng đừng hoảng : chuyển ghi vẫn làm được, chỉ thêm giấy tờ.</li>
    <li><strong>Tiếp theo : cập nhật sổ gia đình + hộ chiếu Pháp cho bé.</strong> Chụp ảnh thẻ cho trẻ sơ sinh là một cuộc phiêu lưu (mắt mở, phông trắng, bé chịu hợp tác) — một số tiệm ảnh ở thành phố lớn quen chuẩn Pháp, hỏi cộng đồng để được giới thiệu.</li>
  </ol>

  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Bé sinh ở Pháp thì sao ?</summary>
    <p style="margin-top:0.75rem;color:#555">Đơn giản hơn : khai sinh tại tòa thị chính nơi sinh trong 5 ngày (bệnh viện hướng dẫn), bé là công dân Pháp qua bố/mẹ Pháp. Muốn thêm quốc tịch Việt Nam cho con, liên hệ Đại sứ quán Việt Nam tại Paris để được hướng dẫn thủ tục đăng ký khai sinh và xét quốc tịch phía Việt Nam.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Quá 30 ngày chưa khai báo với lãnh sự Pháp, có mất quốc tịch không ?</summary>
    <p style="margin-top:0.75rem;color:#555">Không. Quốc tịch Pháp của bé là tự động từ khi sinh, không phụ thuộc thời hạn khai báo. Quá 30 ngày chỉ có nghĩa là chuyển sang thủ tục « transcription » — không giới hạn thời gian, thêm vài giấy tờ (khai sinh Việt Nam dịch công chứng, khai sinh của bố mẹ).</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Certificat de nationalité française (CNF) là gì, có cần làm không ?</summary>
    <p style="margin-top:0.75rem;color:#555">Là bằng chứng pháp lý « nặng » nhất về quốc tịch, do tòa án Pháp cấp. Đời sống hàng ngày không cần : khai sinh Pháp + hộ chiếu là đủ. Chỉ khi nào một cơ quan yêu cầu bằng chứng chính thức trong trường hợp phức tạp mới cần làm — biết để đấy, không cần vội.</p>
  </details>

  <div class="vi-art-nav">
    <div>
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">← Đọc thêm</div>
      <a href="nhap-quoc-tich-phap-ket-hon">Nhập quốc tịch Pháp cho bạn</a>
    </div>
    <div style="text-align:right">
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">Đọc thêm →</div>
      <a href="visa-schengen-cho-bo-me">Đón bố mẹ sang Pháp</a>
    </div>
  </div>

  <div style="background:rgba(41,128,185,0.06);border-radius:var(--radius);padding:1.5rem;margin-top:2rem;display:flex;gap:1rem;align-items:center">
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
