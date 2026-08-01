<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../naturalisation-conjoint-vietnamien',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang = [
  'fr'        => SITE_URL . '/naturalisation-conjoint-vietnamien',
  'vi'        => SITE_URL . '/vi/nhap-quoc-tich-phap-ket-hon',
  'x-default' => SITE_URL . '/naturalisation-conjoint-vietnamien',
];

$page_title       = 'Nhập quốc tịch Pháp theo diện kết hôn : điều kiện, hồ sơ, thời gian (2026)';
$page_description = 'Vợ/chồng Việt của công dân Pháp có thể nhập quốc tịch Pháp sau 4 năm kết hôn : điều kiện, trình độ tiếng Pháp B1, hồ sơ, phỏng vấn hòa nhập và vấn đề hai quốc tịch Pháp-Việt.';
$page_canonical   = SITE_URL . '/vi/nhap-quoc-tich-phap-ket-hon';
$page_og_title    = 'Nhập quốc tịch Pháp theo diện kết hôn : hướng dẫn 2026';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/mariage-franco-vietnamien-ceremonie.jpg';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Nhập quốc tịch Pháp theo diện kết hôn : điều kiện, hồ sơ, thời gian',
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
.vi-art-hero{padding-top:64px;background:linear-gradient(165deg,#1a1230 0%,#2b2258 45%,#151030 100%);position:relative;overflow:hidden}
.vi-art-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,rgba(80,70,160,0.25),transparent 60%),radial-gradient(ellipse 50% 40% at 80% 20%,rgba(191,74,42,0.1),transparent 60%)}
.vi-art-hero-inner{max-width:860px;margin:0 auto;padding:4rem 2rem 3rem;position:relative;z-index:1}
.vi-art-meta{display:flex;gap:1rem;align-items:center;flex-wrap:wrap;margin-bottom:1.5rem}
.vi-art-cat{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:4px 12px;border-radius:3px;background:rgba(80,70,160,0.35);color:#a89ee0;border:1px solid rgba(168,158,224,0.25)}
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
.vi-art-body a{color:#453a85;text-decoration:underline}
.vi-art-tip{background:rgba(80,70,160,0.06);border-left:3px solid #574ba0;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-art-tip strong{color:#453a85}
.vi-art-table{width:100%;border-collapse:collapse;font-size:0.9rem;border-radius:10px;overflow:hidden;border:1px solid rgba(80,70,160,0.18);margin:1.5rem 0}
.vi-art-table thead tr{background:rgba(80,70,160,0.18)}
.vi-art-table th{padding:0.7rem 1rem;text-align:left;color:#453a85;font-size:0.7rem;letter-spacing:1.5px;font-weight:700}
.vi-art-table td{padding:0.75rem 1rem;font-size:0.87rem;border-bottom:1px solid rgba(0,0,0,0.06)}
.vi-art-table tr:nth-child(even) td{background:rgba(80,70,160,0.03)}
.vi-art-nav{display:flex;justify-content:space-between;align-items:center;gap:1rem;flex-wrap:wrap;margin:3rem 0;padding:1.5rem;background:var(--warm-bg);border-radius:var(--radius)}
.vi-art-nav a{display:inline-flex;align-items:center;gap:6px;padding:0.7rem 1.4rem;background:#574ba0;color:#fff;border-radius:4px;text-decoration:none;font-weight:700;font-size:0.88rem}
.vi-art-nav a:hover{background:#453a85}
';

include '../header.php';
?>

<header class="vi-art-hero">
  <div class="vi-art-hero-inner">
    <div class="vi-art-meta">
      <span class="vi-art-cat">Định cư lâu dài</span>
      <span class="vi-art-date">Tháng 8, 2026</span>
      <span class="vi-art-read">⏱ 10 phút đọc</span>
    </div>
    <h1>Nhập quốc tịch Pháp theo diện kết hôn :<br>điều kiện, hồ sơ và thời gian chờ</h1>
    <p class="vi-art-hero-desc">
      Hộ chiếu Pháp, quyền bầu cử, sự ổn định trọn vẹn — quốc tịch Pháp là đích đến cuối cùng của hành trình hành chính. Sau 4 năm kết hôn, cánh cửa mở ra. Đây là những gì bạn cần biết.
    </p>
  </div>
</header>

<div style="background:var(--warm-bg);padding:0.75rem 2rem;font-size:0.82rem;color:var(--muted)">
  <div style="max-width:860px;margin:0 auto">
    <a href="./" style="color:#453a85">Trang chủ</a> ›
    <a href="./#song-o-phap" style="color:#453a85">Sống ở Pháp</a> ›
    <span>Nhập quốc tịch Pháp</span>
  </div>
</div>

<main>
<article class="vi-art-body">

  <p><strong>Sau visa, sau thẻ cư trú, đích đến cuối cùng là quốc tịch Pháp.</strong> Với người đã kết hôn với công dân Pháp, có một con đường riêng — nhanh hơn và chắc chắn hơn con đường thông thường. Bài viết này giải thích điều kiện, hồ sơ, buổi phỏng vấn hòa nhập, và câu hỏi lớn của người Việt : <em>có giữ được quốc tịch Việt Nam không ?</em></p>

  <p>Xem <a href="../naturalisation-conjoint-vietnamien">bản tiếng Pháp đầy đủ →</a> · Bước trước đó : <a href="the-cu-tru-tai-phap">thẻ cư trú tại Pháp</a>.</p>

  <h2>Con đường « theo diện kết hôn » là gì ?</h2>
  <p>Vợ/chồng nước ngoài của công dân Pháp có thể nhận quốc tịch Pháp sau <strong>4 năm kết hôn</strong> (hoặc <strong>5 năm</strong> nếu hai vợ chồng không chứng minh được 3 năm cư trú liên tục tại Pháp kể từ khi kết hôn).</p>
  <p>Một điểm quan trọng ít người biết : về mặt pháp lý, đây không phải là « naturalisation » (nhập tịch theo quyết định của chính phủ) mà là <strong>« déclaration de nationalité »</strong> — tuyên bố nhận quốc tịch theo Điều 21-2 Bộ luật Dân sự Pháp. Khác biệt rất có lợi cho bạn : nếu bạn đáp ứng đủ các điều kiện khách quan (thời gian kết hôn, đời sống chung, tiếng Pháp, không có án tích), chính quyền có <strong>rất ít quyền từ chối</strong> — khác với con đường nhập tịch thông thường nơi chính phủ toàn quyền quyết định. Chính phủ chỉ giữ quyền phản đối trong trường hợp đặc biệt (không xứng đáng hoặc không hòa nhập), và phải nêu rõ lý do.</p>

  <div class="vi-art-tip">
    <strong>Lộ trình đầy đủ :</strong> VLS-TS (visa dài hạn) → Thẻ cư trú tạm thời (1 năm, gia hạn) → Thẻ cư trú 10 năm (có thể xin sau 3 năm) → Quốc tịch Pháp (có thể xin sau 4 năm kết hôn). Lưu ý : không bắt buộc phải có thẻ 10 năm trước khi xin quốc tịch.
  </div>

  <h2>Các điều kiện cần đáp ứng cùng lúc</h2>

  <div style="overflow-x:auto;margin:1.5rem 0">
  <table class="vi-art-table">
    <thead><tr><th>Điều kiện</th><th>Chi tiết</th></tr></thead>
    <tbody>
      <tr><td><strong>Thời gian kết hôn</strong></td><td>4 năm (5 năm nếu chưa đủ 3 năm cư trú liên tục tại Pháp từ khi cưới)</td></tr>
      <tr><td><strong>Đời sống chung</strong></td><td>Hai vợ chồng phải đang sống cùng nhau — nếu đời sống chung gián đoạn, thời hạn tính lại từ đầu</td></tr>
      <tr><td><strong>Cư trú tại Pháp</strong></td><td>Cư trú hợp pháp và liên tục trong suốt thời hạn</td></tr>
      <tr><td><strong>Trình độ tiếng Pháp</strong></td><td>Tối thiểu B1 (đánh giá trong buổi phỏng vấn — kiểm tra yêu cầu hiện hành khi nộp, vì mức yêu cầu đã được nâng dần qua các cải cách)</td></tr>
      <tr><td><strong>Hòa nhập cộng hòa</strong></td><td>Hiểu biết về quyền và nghĩa vụ tại Pháp, các giá trị của nền Cộng hòa</td></tr>
      <tr><td><strong>Lý lịch tư pháp</strong></td><td>Trong sạch hoặc không có án tích nghiêm trọng</td></tr>
      <tr><td><strong>Thu nhập</strong></td><td>Không có ngưỡng cố định, nhưng gia đình phải có tình hình ổn định</td></tr>
    </tbody>
  </table>
  </div>

  <p>Điều kiện gây rắc rối nhiều nhất cho các cặp Pháp-Việt là <strong>« đời sống chung »</strong> : nếu bạn về Việt Nam nhiều tháng liền (bố mẹ ốm, sinh con…), chính quyền có thể coi là gián đoạn. Nếu buộc phải vắng lâu, hãy giữ bằng chứng rằng tổ ấm tại Pháp vẫn duy trì : nhà vẫn giữ, chồng/vợ vẫn ở đó, vé máy bay khứ hồi.</p>

  <h2>Trình độ tiếng Pháp : mục tiêu B1</h2>
  <p>Khác với thẻ cư trú (A2 là đủ), quốc tịch đòi hỏi trình độ cao hơn — <strong>B1</strong> : hiểu hội thoại thường ngày, tự diễn đạt không cần trợ giúp, kể lại sự việc, nêu ý kiến. Viên chức không tìm tiếng Pháp hoàn hảo — họ tìm khả năng giao tiếp thực tế.</p>
  <div class="vi-art-tip">
    <strong>Lời khuyên quan trọng nhất của cả bài :</strong> đừng đợi đến năm thứ 4 mới học tiếng Pháp. Hãy thi lấy bằng <strong>DELF B1</strong> ngay từ năm thứ 2-3 tại Pháp, khi động lực từ các khóa học OFII còn nóng. Một tấm bằng trong hồ sơ giúp phần đánh giá ngôn ngữ trở nên chắc chắn. Bắt đầu từ bây giờ : <a href="hoc-tieng-phap-online-mien-phi">7 nguồn học tiếng Pháp online miễn phí</a>.
  </div>

  <h2>Hồ sơ cần chuẩn bị</h2>
  <p>Hồ sơ nộp tại tỉnh trưởng (préfecture) nơi cư trú. Các giấy tờ chính :</p>
  <ul>
    <li>Tờ khai cerfa n° 12753 ;</li>
    <li>Giấy khai sinh của bạn (hợp pháp hóa + dịch công chứng sang tiếng Pháp) ;</li>
    <li>Giấy đăng ký kết hôn (bản đầy đủ, dưới 3 tháng) ;</li>
    <li>Chứng minh cư trú hợp pháp liên tục (các thẻ cư trú, biên nhận gia hạn) ;</li>
    <li>Giấy tờ tùy thân của chồng/vợ Pháp ;</li>
    <li>Chứng minh thu nhập (3 tờ khai thuế gần nhất, phiếu lương) ;</li>
    <li><strong>Lý lịch tư pháp Việt Nam</strong> — xin tại Việt Nam, mất thời gian và cần dịch công chứng : đây là giấy tờ nên xin <em>đầu tiên</em>, không phải cuối cùng ;</li>
    <li>Bằng chứng đời sống chung (hợp đồng thuê nhà chung, tài khoản chung, khai thuế chung, CAF) ;</li>
    <li>4 ảnh thẻ ; bằng DELF/DALF nếu có.</li>
  </ul>

  <h2>Buổi phỏng vấn hòa nhập</h2>
  <p>Sau khi nộp hồ sơ, préfecture mời bạn phỏng vấn (30-45 phút, hoàn toàn bằng lời nói, không có bài thi viết). Hai mục tiêu : đánh giá tiếng Pháp và kiểm tra sự « hòa nhập cộng hòa » :</p>
  <ul>
    <li>Câu hỏi về cuộc sống cá nhân, gia đình, công việc của bạn ;</li>
    <li>Quyền và nghĩa vụ tại Pháp (quyền bầu cử, thế tục — laïcité, bình đẳng nam nữ) ;</li>
    <li>Các thể chế Pháp (Quốc hội, Hiến pháp, Tổng thống) ;</li>
    <li>Cam kết tôn trọng các giá trị của nền Cộng hòa.</li>
  </ul>
  <p>Mẹo chuẩn bị thực tế : hãy tập kể <strong>câu chuyện nước Pháp của bạn</strong> — tại sao là nước Pháp, bạn đã xây dựng gì ở đó, cuộc sống khu phố, công việc. Buổi phỏng vấn không phải bài kiểm tra thuộc lòng ngày tháng lịch sử ; đó là cuộc trò chuyện để viên chức cảm nhận một sự hòa nhập <em>thật</em>. Người kể chuyện tự nhiên về cô bán bánh mì đầu phố, hội chợ trường con, và tờ khai thuế vừa nộp — thuyết phục hơn nhiều so với người đọc vanh vách danh sách tổng thống. Riêng các giá trị cộng hòa (thế tục, bình đẳng nam nữ, tự do ngôn luận) phải được hiểu và chấp nhận rõ ràng — đó là điểm duy nhất không thể thỏa hiệp.</p>

  <h2>Thời gian chờ và kết quả</h2>
  <p>Sau khi nộp đủ hồ sơ và phỏng vấn, thời gian xử lý là <strong>12 đến 24 tháng</strong> (2026) — bao gồm các cuộc điều tra hành chính trước khi hồ sơ được chuyển lên bộ. Ba kết quả có thể :</p>
  <ul>
    <li><strong>Đăng ký tuyên bố</strong> : bạn chính thức có quốc tịch Pháp — có hiệu lực từ ngày nộp tuyên bố ;</li>
    <li><strong>Từ chối đăng ký</strong> : điều kiện chưa đủ (đời sống chung, tiếng Pháp…) — quyết định phải nêu lý do, có thể khiếu nại, và có thể nộp lại khi đủ điều kiện ;</li>
    <li><strong>Chính phủ phản đối</strong> : hiếm, chỉ trong trường hợp đặc biệt, bằng nghị định có nêu lý do.</li>
  </ul>
  <p>Khi có quốc tịch, bạn được mời dự <strong>lễ đón nhận công dân Pháp</strong>, rồi làm các giấy tờ « người Pháp mới » : căn cước, hộ chiếu Pháp, đăng ký bầu cử. Hộ tịch của bạn từ nay do Cơ quan Hộ tịch Trung ương (SCEC) tại <strong>Nantes</strong> quản lý — đúng nơi hành trình của bạn bắt đầu với hồ sơ CCAM năm nào. Vòng tròn hành chính khép lại.</p>

  <h2>Câu hỏi lớn : còn quốc tịch Việt Nam ?</h2>
  <p>Pháp cho phép hai quốc tịch không hạn chế. Việt Nam thì phức tạp hơn : Luật Quốc tịch Việt Nam 2008 (Điều 26) quy định về nguyên tắc việc mất quốc tịch Việt Nam khi nhập quốc tịch nước ngoài. <strong>Trên thực tế</strong>, rất nhiều người Việt (Việt kiều) nhập quốc tịch nước ngoài vẫn giữ hộ chiếu Việt Nam trong nhiều năm — tình trạng này thường được chấp nhận trên thực tế nhưng về mặt kỹ thuật vẫn chưa đúng quy định phía Việt Nam.</p>
  <div class="vi-art-tip">
    <strong>Nếu việc giữ quốc tịch Việt Nam quan trọng với bạn</strong> (thừa kế, nhà đất tại Việt Nam), hãy tham khảo luật sư chuyên môn <em>trước khi</em> nộp hồ sơ quốc tịch Pháp — không phải sau. Đây là quyết định cần cân nhắc kỹ trong gia đình.
  </div>

  <h3>Hai hệ quả nên biết</h3>
  <ul>
    <li><strong>Con chưa thành niên</strong> : con đang sống cùng bạn về nguyên tắc nhận quốc tịch Pháp cùng lúc với bạn (nếu được ghi trong hồ sơ). Với con chung của hai vợ chồng thì thường đã là công dân Pháp từ khi sinh — điểm này chủ yếu quan trọng với con riêng của bạn từ cuộc hôn nhân trước.</li>
    <li><strong>« Pháp hóa » tên</strong> : khi nộp hồ sơ, bạn có thể xin thêm một tên Pháp hoặc điều chỉnh cách viết tên. Hoàn toàn tự nguyện — nhiều người giữ nguyên tên Việt, những người khác thích có một tên gọi tiện cho đời sống hành chính. Xin trong hồ sơ, không xin sau được.</li>
  </ul>

  <h2>Những sai lầm thường gặp</h2>
  <ul>
    <li><strong>Nhầm trình độ tiếng Pháp giữa các giai đoạn</strong> : A2 cho thẻ 10 năm, B1 cho quốc tịch. Chuẩn bị nhầm mức là mất trọn một chu kỳ.</li>
    <li><strong>Nộp hồ sơ « non »</strong> để tiết kiệm thời gian : một lần bị từ chối tốn 12-24 tháng — đắt hơn nhiều so với vài tháng « tiết kiệm » được.</li>
    <li><strong>Để lý lịch tư pháp Việt Nam đến phút cuối</strong> : giấy này xin từ Việt Nam, lâu, và phải dịch công chứng. Xin đầu tiên.</li>
    <li><strong>Quên rằng sự nhất quán của cặp đôi vẫn được kiểm tra</strong> : địa chỉ, hoàn cảnh, hiểu biết về nhau — như mọi giai đoạn từ ngày xin visa.</li>
    <li><strong>Để câu hỏi quốc tịch Việt Nam « tính sau »</strong> : quyết định trước khi nộp, nhất là khi có nhà đất hay thừa kế tại Việt Nam.</li>
  </ul>

  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Có bắt buộc phải có thẻ cư trú 10 năm trước khi xin quốc tịch không ?</summary>
    <p style="margin-top:0.75rem;color:#555">Không. Quốc tịch theo diện kết hôn chỉ yêu cầu cư trú hợp pháp và liên tục — bạn có thể nộp hồ sơ quốc tịch với thẻ cư trú 1 năm gia hạn đều đặn, không cần đợi thẻ 10 năm.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Nếu ly hôn sau khi có quốc tịch thì sao ?</summary>
    <p style="margin-top:0.75rem;color:#555">Quốc tịch Pháp đã được đăng ký hợp lệ là của bạn — ly hôn sau đó không làm mất quốc tịch. Nhưng chú ý : đời sống chung phải là thật cho đến thời điểm đăng ký ; hôn nhân giả bị phát hiện có thể dẫn đến hủy đăng ký và truy cứu.</p>
  </details>
  <details style="border:1px solid var(--border);border-radius:8px;padding:1rem 1.25rem;margin-bottom:0.75rem">
    <summary style="font-weight:700;cursor:pointer;font-size:0.95rem">Đang sống ở Việt Nam có xin quốc tịch Pháp theo diện kết hôn được không ?</summary>
    <p style="margin-top:0.75rem;color:#555">Được — con đường tuyên bố theo Điều 21-2 không bắt buộc cư trú tại Pháp, nhưng khi đó thời gian kết hôn yêu cầu là 5 năm (thay vì 4), và hồ sơ nộp qua cơ quan lãnh sự Pháp. Đời sống chung và các điều kiện khác vẫn phải chứng minh đầy đủ.</p>
  </details>

  <div class="vi-art-nav">
    <div>
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">← Bước trước</div>
      <a href="the-cu-tru-tai-phap">Thẻ cư trú tại Pháp</a>
    </div>
    <div style="text-align:right">
      <div style="font-size:0.75rem;color:var(--muted);margin-bottom:4px">Đọc thêm →</div>
      <a href="quoc-tich-phap-cho-con">Quốc tịch cho con</a>
    </div>
  </div>

  <div style="background:rgba(80,70,160,0.06);border-radius:var(--radius);padding:1.5rem;margin-top:2rem;display:flex;gap:1rem;align-items:center">
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
