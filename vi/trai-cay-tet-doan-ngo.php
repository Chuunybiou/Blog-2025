<?php
require_once __DIR__ . '/../config/site.php';
$page_title       = 'Đây là những loại quả để giết sâu bọ ngày Tết Đoan Ngọ';
$page_description = 'Vào ngày mùng 5 tháng 5 âm lịch, người Việt ăn những loại quả đặc biệt để diệt sâu bọ trong người. Tìm hiểu phong tục và các loại trái cây truyền thống ngày Tết Đoan Ngọ.';
$page_canonical   = SITE_URL . '/vi/trai-cay-tet-doan-ngo';
$page_og_title    = 'Những loại quả giết sâu bọ ngày Tết Đoan Ngọ mùng 5/5 âm lịch';
$page_og_desc     = 'Mận, vải, dưa hấu, cơm rượu — những loại quả không thể thiếu trong ngày Tết Đoan Ngọ. Nguồn gốc và ý nghĩa phong tục truyền thống Việt Nam.';
$page_og_url      = SITE_URL . '/vi/trai-cay-tet-doan-ngo';
$page_og_image    = 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Đây là những loại quả để giết sâu bọ ngày Tết Đoan Ngọ',
  'datePublished'   => '2026-06-25',
  'dateModified'    => '2026-06-25',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/vi/trai-cay-tet-doan-ngo',
  'inLanguage'      => 'vi',
  'articleSection'  => 'Văn hóa Việt Nam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'jade';
$article_hero_bg  = '#0e2a1a';
$article_glow     = 'rgba(42,154,100,0.15)';
$article_badge    = 'rgba(42,154,100,0.25)';
$article_badge_c  = '#4db890';

$article_category     = 'Văn hóa Việt Nam';
$article_category_url = SITE_URL . '/vi/';
$page_lang            = 'vi';
$page_faq = [
  ['q' => 'Tết Đoan Ngọ 2026 rơi vào ngày nào dương lịch?',
   'a' => 'Tết Đoan Ngọ luôn là ngày mùng 5 tháng 5 âm lịch, nên ngày dương lịch thay đổi theo từng năm, thường rơi vào khoảng cuối tháng 5 đến cuối tháng 6. Cách chắc chắn nhất là xem lịch vạn niên hoặc hỏi ông bà, bố mẹ — vì với nhiều gia đình Việt, đây vẫn là một ngày lễ được nhớ và chuẩn bị từ trước.'],
  ['q' => 'Vì sao phải ăn cơm rượu và trái cây vào buổi sáng sớm, lúc bụng đói?',
   'a' => 'Theo quan niệm dân gian, sâu bọ (ký sinh trùng) trong cơ thể "ngoi lên" vào sáng mùng 5. Ăn cơm rượu nếp có men cay nồng và các loại quả chua ngay khi vừa ngủ dậy, lúc bụng còn đói, được tin là cách "đánh úp" khiến sâu bọ say và chết. Đây là tín ngưỡng truyền thống chứ không phải kiến thức y học — nhưng chính nghi thức ấy làm nên nét đẹp và không khí riêng của ngày này.'],
  ['q' => 'Miền Bắc, miền Trung và miền Nam ăn Tết Đoan Ngọ khác nhau thế nào?',
   'a' => 'Khác nhau khá rõ ở mâm cúng. Miền Bắc chuộng rượu nếp cái, nếp cẩm để rời từng hạt, mận và vải đầu mùa, bánh gio chấm mật. Miền Trung nhiều nơi có tục ăn thịt vịt, chè kê (đặc biệt ở Huế). Miền Nam có cơm rượu viên tròn ngâm nước đường, bánh ú tro và chè trôi nước. Điểm chung của cả ba miền là tinh thần "diệt sâu bọ" buổi sáng và sự sum họp gia đình.'],
  ['q' => 'Người nước ngoài (như chồng/vợ Pháp) có thể tham gia Tết Đoan Ngọ không?',
   'a' => 'Hoàn toàn có thể, và gia đình Việt thường rất vui khi con rể, con dâu ngoại quốc nhập cuộc. Trải nghiệm dễ nhất: dậy sớm, thử một chén cơm rượu nếp, ăn vài quả mận, quả vải và nghe ông bà kể chuyện "giết sâu bọ". Lưu ý nhỏ: cơm rượu có men, vị cay nồng hơi bất ngờ với người mới thử lần đầu — nên nếm từ từ.'],
];

$path_prefix = '../';
include '../_article-css.php';
include '../header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="../vi/">Trang chủ tiếng Việt</a><span class="breadcrumb-sep">›</span>
      <span>Tết Đoan Ngọ</span>
    </div>
    <span class="article-badge-hero">Văn hóa Việt Nam</span>
    <h1>Đây là những loại quả để giết sâu bọ ngày Tết Đoan Ngọ</h1>
    <div class="article-hero-meta">
      <span>Bởi <a href="../a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Tháng 6, 2026</span>
      <span>⏱ 12 phút đọc</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Mục lục</div>
    <ol class="toc-list">
      <li><a href="#section-1">Tết Đoan Ngọ là gì?</a></li>
      <li><a href="#section-2">Nguồn gốc và truyền thuyết</a></li>
      <li><a href="#section-3">Vì sao "giết sâu bọ" bằng trái cây?</a></li>
      <li><a href="#section-4">Những loại quả không thể thiếu</a></li>
      <li><a href="#section-5">Cơm rượu nếp — linh hồn của ngày lễ</a></li>
      <li><a href="#section-6">Món ăn ba miền</a></li>
      <li><a href="#section-7">Các phong tục khác trong ngày</a></li>
      <li><a href="#section-8">Tết Đoan Ngọ thời nay</a></li>
      <li><a href="#section-9">Góc nhìn gia đình Pháp-Việt</a></li>
      <li><a href="#section-faq">Câu hỏi thường gặp</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Chia sẻ</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" onclick="window.open('https://twitter.com/intent/tweet?url='+encodeURIComponent(location.href))">𝕏</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <p class="article-intro">Sáng sớm mùng 5 tháng 5 âm lịch, khắp các chợ Việt Nam nhộn nhịp từ tờ mờ: người ta chen nhau mua mận, vải, cơm rượu nếp về "giết sâu bọ". Tết Đoan Ngọ — hay Tết diệt sâu bọ — là một trong những ngày lễ truyền thống được giữ gìn bền bỉ nhất trong các gia đình Việt, sau Tết Nguyên Đán. Bài viết này kể lại nguồn gốc, ý nghĩa và những loại quả, món ăn không thể thiếu của ngày đặc biệt ấy.</p>

    <h2 id="section-1">1. Tết Đoan Ngọ là gì?</h2>
    <p>Tết Đoan Ngọ diễn ra vào ngày <strong>mùng 5 tháng 5 âm lịch</strong> hằng năm. Tên gọi mang nghĩa khá thú vị: "Đoan" là mở đầu, "Ngọ" là giờ Ngọ — khoảng từ 11 giờ đến 13 giờ trưa. Đoan Ngọ tức là bắt đầu vào giữa trưa, thời khắc mặt trời gần với mặt đất nhất theo quan niệm xưa, dương khí thịnh nhất trong năm. Vì thế nhiều nghi thức của ngày này — hái lá thuốc, phơi nắng — đều gắn với giờ trưa.</p>
    <p>Trong dân gian, ngày này còn có tên gọi mộc mạc hơn nhiều: <strong>Tết diệt sâu bọ</strong> (hoặc "giết sâu bọ" theo cách nói miền Bắc). Đây là cách gọi phản ánh đúng nhất nghi thức trung tâm của ngày lễ: sáng sớm ngủ dậy, cả nhà ăn cơm rượu nếp và trái cây chua để "diệt" sâu bọ, ký sinh trong cơ thể.</p>
    <p>Thời điểm mùng 5 tháng 5 cũng không ngẫu nhiên chút nào. Đây là lúc giao mùa giữa xuân và hạ, khi thời tiết nóng ẩm khiến sâu bệnh sinh sôi mạnh trên đồng ruộng, còn con người dễ ốm đau. Với một nền văn minh lúa nước như Việt Nam, một ngày lễ "trừ sâu bệnh" cho cả mùa màng lẫn con người vào đúng thời điểm này là điều rất tự nhiên. Nhiều nơi xưa kia còn coi đây là dịp cúng tạ sau vụ chiêm, cầu cho vụ mùa mới ít sâu bệnh, bội thu.</p>

    <h2 id="section-2">2. Nguồn gốc và truyền thuyết</h2>
    <p>Tết Đoan Ngọ tồn tại ở nhiều nước Đông Á — Trung Quốc, Hàn Quốc, và Việt Nam — mỗi nước một sắc thái riêng. Ở Trung Quốc, ngày mùng 5 tháng 5 gắn với truyền thuyết Khuất Nguyên, vị trung thần nước Sở trầm mình dưới sông Mịch La, và từ đó có tục đua thuyền rồng, ăn bánh ú. Nhưng người Việt có cách giải thích riêng của mình, gần gũi với đời sống nông nghiệp hơn nhiều.</p>
    <p>Truyền thuyết Việt Nam kể rằng: một năm nọ, sau vụ mùa bội thu, sâu bọ bỗng kéo đến dày đặc, ăn sạch cây trái, thực phẩm đã thu hoạch. Dân làng đau đầu không biết làm sao thì một ông lão tự xưng là <strong>Đôi Truân</strong> xuất hiện. Ông chỉ cho dân mỗi nhà lập một đàn cúng đơn giản gồm bánh tro và trái cây, rồi ra trước nhà vận động thân thể. Dân làng làm theo, và chỉ một lúc sau, sâu bọ té ngã rã rượi rồi tan biến. Ông lão dặn: sâu bọ hằng năm vào đúng ngày này rất hung hăng, cứ làm theo như thế thì sẽ trị được chúng. Để tưởng nhớ, dân gian đặt tên ngày này là Tết diệt sâu bọ.</p>
    <p>Dù truyền thuyết mang màu sắc huyền thoại, thông điệp của nó rất thực tế: đây là ngày cả cộng đồng cùng nhau "thanh lọc" — trừ sâu bệnh cho cây trồng, trừ bệnh tật cho con người, và làm mới lại tinh thần giữa năm. Có lẽ chính vì ý nghĩa gần gũi ấy mà hơn cả nghìn năm sau, người Việt vẫn đều đặn dậy sớm ăn cơm rượu mỗi sáng mùng 5 tháng 5.</p>

    <h2 id="section-3">3. Vì sao phải "giết sâu bọ" bằng trái cây?</h2>
    <p>Quan niệm dân gian giải thích thế này: trong cơ thể con người, nhất là bộ máy tiêu hóa, thường có "sâu bọ" — cách gọi xưa của giun sán, ký sinh trùng. Ngày thường chúng ẩn sâu, khó trị. Nhưng vào sáng mùng 5 tháng 5, chúng "ngoi lên", và đó là thời cơ duy nhất trong năm để tiêu diệt.</p>
    <p>Vũ khí được chọn là những thứ có vị <strong>chua, cay, nóng, chát</strong> — những vị được tin là khiến sâu bọ "say" rồi chết:</p>
    <ul>
      <li><strong>Cơm rượu nếp</strong> ăn ngay khi bụng còn đói, vừa ngủ dậy: men rượu cay nồng làm sâu bọ choáng váng;</li>
      <li><strong>Trái cây chua đầu mùa</strong> — mận, xoài xanh — tiếp thêm đòn quyết định;</li>
      <li>Một số nơi còn ăn <strong>trứng vịt luộc</strong>, uống nước lá, hoặc bôi vôi vào thóp trẻ nhỏ để "trừ độc".</li>
    </ul>
    <p>Cần nói rõ: đây là tín ngưỡng dân gian, không phải y học. Nhưng nếu nhìn kỹ, phong tục này chứa một lớp nghĩa rất hợp lý: giữa mùa nóng ẩm, ông bà ta nhắc con cháu chú ý đến ăn uống, vệ sinh, sức khỏe tiêu hóa — bằng một nghi thức vui, dễ nhớ, cả nhà cùng làm. Hình thức là "diệt sâu bọ", nội dung là giữ gìn sức khỏe khi giao mùa.</p>

    <h2 id="section-4">4. Những loại quả không thể thiếu</h2>
    <p>Tết Đoan Ngọ rơi đúng vào mùa trái cây rực rỡ nhất của miền Bắc và cũng là mùa quả phong phú ở miền Nam. Mâm quả "giết sâu bọ" vì thế vừa mang ý nghĩa tín ngưỡng, vừa là bữa tiệc của mùa hè:</p>
    <ul>
      <li><strong>Mận (mận hậu, mận Bắc)</strong> — ngôi sao số một của ngày lễ ở miền Bắc. Vị chua giòn, chát nhẹ của mận đầu mùa được coi là "đòn" hiệu quả nhất với sâu bọ. Đĩa mận đỏ tím mọng nước gần như là hình ảnh mặc định của Tết Đoan Ngọ.</li>
      <li><strong>Vải thiều</strong> — mùng 5 tháng 5 thường trùng ngay vụ vải chín rộ. Vị ngọt sắc, tính "nóng" của quả vải theo quan niệm dân gian cũng góp phần "đốt" sâu bọ. Với nhiều gia đình, chùm vải đỏ au trên bàn thờ là thứ không thể thiếu.</li>
      <li><strong>Đào</strong> — quả đào đầu hè, chua ngọt thanh mát, thường xuất hiện trên mâm cúng miền Bắc.</li>
      <li><strong>Xoài xanh, cóc, ổi</strong> — những loại quả chua, chát quen thuộc hơn ở miền Nam, chấm muối ớt đúng "tinh thần" cay nóng của ngày lễ.</li>
      <li><strong>Dưa hấu</strong> — sắc đỏ may mắn và vị mát lành, cân bằng lại những vị chua cay nồng của mâm cúng.</li>
      <li><strong>Chôm chôm, măng cụt, sầu riêng</strong> — ở miền Nam, Đoan Ngọ rơi vào chính vụ trái cây miệt vườn, nên mâm quả phương Nam thường "hào phóng" hơn hẳn với đủ loại quả nhiệt đới.</li>
    </ul>
    <p>Điểm chung của mâm quả ba miền: ưu tiên <strong>quả đầu mùa, tươi mới nhất</strong> — vì dâng lên tổ tiên những gì tinh túy nhất của vụ mùa là một phần ý nghĩa của ngày lễ. Đi chợ sáng mùng 5, bạn sẽ thấy các bà, các mẹ chọn từng chùm vải, từng quả mận kỹ đến mức nào.</p>

    <h2 id="section-5">5. Cơm rượu nếp — linh hồn của ngày Tết Đoan Ngọ</h2>
    <p>Nếu phải chọn một món duy nhất đại diện cho Tết Đoan Ngọ, đó chắc chắn là <strong>cơm rượu nếp</strong> (rượu nếp). Gạo nếp đồ chín, để nguội, rắc men, ủ vài ba ngày cho lên men — thành thứ cơm ngọt lịm, cay nồng, thơm men rượu, ăn vào lâng lâng dễ chịu.</p>
    <p>Mỗi miền một kiểu cơm rượu:</p>
    <ul>
      <li><strong>Miền Bắc</strong>: rượu nếp để rời từng hạt, làm từ nếp cái hoa vàng hoặc <strong>nếp cẩm</strong> tím than — hạt cơm căng bóng, ăn bằng thìa nhỏ, nhấm nháp từng chút một. Bát rượu nếp cẩm màu tím sẫm là đặc sản của sáng mùng 5.</li>
      <li><strong>Miền Trung</strong>: cơm rượu thường được ép thành khối, cắt miếng vuông vắn.</li>
      <li><strong>Miền Nam</strong>: cơm rượu vo thành <strong>viên tròn</strong> nhỏ, ngâm trong nước rượu ngọt, ăn gần như một món chè.</li>
    </ul>
    <p>Nghi thức chuẩn của buổi sáng diệt sâu bọ, theo lời các bà các mẹ: ngủ dậy, chưa ăn gì cả, súc miệng xong là ăn ngay một chén cơm rượu cho sâu bọ "say", rồi ăn tiếp trái cây chua cho chúng "chết hẳn". Trẻ con háo hức vì được ăn ngọt từ sáng sớm; người lớn thì coi chén rượu nếp đầu ngày như một thói quen gợi nhớ tuổi thơ. Vài ngày trước mùng 5, các chợ và hàng xôi chè đều bày bán cơm rượu, nhưng nhiều gia đình vẫn giữ nếp tự ủ lấy — vì cơm rượu nhà làm bao giờ cũng "chuẩn vị" hơn.</p>

    <h2 id="section-6">6. Món ăn Tết Đoan Ngọ theo ba miền</h2>
    <p>Ngoài trái cây và cơm rượu, mâm Tết Đoan Ngọ mỗi vùng lại có những món riêng rất đáng thử:</p>
    <ul>
      <li><strong>Bánh gio (bánh tro, bánh ú tro)</strong> — gạo nếp ngâm nước tro thảo mộc, gói lá, luộc chín thành thứ bánh trong vắt màu hổ phách, mát lành, chấm mật mía. Đây là món bánh đặc trưng nhất của ngày này ở miền Bắc và cũng phổ biến ở miền Nam dưới dạng bánh ú. Vị thanh mát của bánh gio được coi là để "hạ hỏa" giữa mùa nóng.</li>
      <li><strong>Thịt vịt</strong> — ở nhiều vùng miền Trung, mùng 5 tháng 5 phải có bát bún, đĩa thịt vịt. Quan niệm dân gian cho rằng thịt vịt tính mát, giải nhiệt tốt cho ngày dương khí cực thịnh; cũng có cách giải thích thực tế hơn: từ thời điểm này vịt bắt đầu béo, thịt thơm ngon nhất.</li>
      <li><strong>Chè kê</strong> — món chè nấu từ hạt kê vàng óng, sánh mịn, ăn kèm bánh tráng vừng, đặc sản Đoan Ngọ của xứ Huế.</li>
      <li><strong>Chè trôi nước</strong> — những viên bột nếp nhân đậu xanh ngập trong nước đường gừng, món ngọt quen thuộc của mâm cúng miền Nam.</li>
      <li><strong>Trứng vịt luộc</strong> — nhiều nơi thêm vào mâm "diệt sâu bọ" buổi sáng, mỗi người một quả.</li>
    </ul>
    <p>Nhìn cả mâm cúng, có thể thấy một logic chung: món nào cũng hoặc thanh mát "giải nhiệt", hoặc cay nóng "diệt sâu bọ" — hai mặt của cùng một mục đích là giữ cơ thể khỏe mạnh khi bước vào những tháng nóng nhất của năm.</p>

    <h2 id="section-7">7. Các phong tục khác trong ngày mùng 5 tháng 5</h2>
    <p>Ăn uống chỉ là phần nổi tiếng nhất. Tết Đoan Ngọ truyền thống còn cả một chuỗi phong tục thú vị, nhiều tục nay chỉ còn ở làng quê:</p>
    <ul>
      <li><strong>Hái lá thuốc giờ Ngọ</strong> — đúng 12 giờ trưa, người ta đi hái các loại lá như ngải cứu, tía tô, kinh giới, lá vối… vì tin rằng vào giờ dương khí thịnh nhất, dược tính của cây cỏ đạt đỉnh. Lá hái về phơi khô để nấu nước uống, xông giải cảm quanh năm.</li>
      <li><strong>Treo ngải cứu trước cửa</strong> — bó ngải cứu, có nơi thêm cành xương rồng, treo trước nhà để trừ tà, đuổi côn trùng độc.</li>
      <li><strong>Khảo cây (đánh cây)</strong> — tục vui nhất: với cây ăn quả lười ra trái, một người trèo lên cây "đóng vai" cây, người dưới gốc cầm dao gõ vào thân "tra khảo" — mùa sau có chịu ra quả không? Người trên cây thay cây "van xin" và hứa sai quả. Một nghi thức nông nghiệp đầy chất sân khấu dân gian.</li>
      <li><strong>Nhuộm móng tay, móng chân bằng lá móng</strong> cho trẻ nhỏ — vừa làm đẹp, vừa được tin là trừ tà khí.</li>
      <li><strong>Tắm nước lá</strong> — lá mùi, lá tía tô, sả… đun nước tắm cho sạch sẽ, thơm tho, "tẩy" hết bệnh tật nửa năm cũ.</li>
      <li><strong>Cúng gia tiên buổi sáng</strong> — mâm quả, cơm rượu, bánh gio dâng lên bàn thờ trước, cả nhà "diệt sâu bọ" sau. Lòng biết ơn tổ tiên và trời đất cho vụ mùa vẫn là gốc của ngày lễ.</li>
    </ul>

    <h2 id="section-8">8. Tết Đoan Ngọ thời nay</h2>
    <p>Ở thành phố, không còn ruộng đồng hay sâu bệnh mùa màng, nhưng Tết Đoan Ngọ không hề biến mất — nó chỉ gọn lại quanh hai thứ: <strong>mâm cúng buổi sáng và bữa quây quần gia đình</strong>. Từ 5-6 giờ sáng mùng 5, các chợ Hà Nội, Sài Gòn đã đông nghịt; các hàng cơm rượu, bánh gio bán hết veo trước giờ trưa. Dân văn phòng bận rộn đến mấy cũng cố ghé chợ mua túi mận, hộp cơm rượu về thắp hương rồi mới đi làm.</p>
    <p>Điều thú vị là ngày lễ này sống khỏe qua chính các gia đình: không cần nghỉ lễ chính thức, không cần sự kiện lớn — chỉ cần bà và mẹ còn nhớ, thì sáng mùng 5 cả nhà vẫn có chén cơm rượu. Với nhiều người Việt xa quê, mùi men cơm rượu nếp là một trong những mùi "gây thương nhớ" nhất, ngang với mùi bánh chưng ngày <a href="../tet-nouvel-an-lunaire-vietnam">Tết Nguyên Đán</a>.</p>
    <p>Ở nước ngoài, cộng đồng người Việt vẫn giữ lễ này theo cách giản dị: đặt cơm rượu ở chợ Việt, thay mận vải bằng trái cây địa phương có vị chua, và quan trọng nhất — kể cho con cháu nghe vì sao sáng nay cả nhà lại ăn "rượu" từ lúc mới ngủ dậy.</p>

    <h2 id="section-9">9. Góc nhìn của một gia đình Pháp-Việt</h2>
    <p>Blog này viết về cuộc sống của các cặp đôi Pháp-Việt, nên xin kết bằng góc nhìn ấy. Với một người Pháp sống trong gia đình Việt, Tết Đoan Ngọ là một trong những ngày lễ dễ tham gia và dễ yêu nhất: không nghi lễ phức tạp, không quà cáp cầu kỳ — chỉ cần dậy sớm hơn thường lệ, ngồi xuống mâm cùng cả nhà, thử chén cơm rượu đầu tiên trong đời (vị men cay ngọt ấy thật sự gây bất ngờ!), ăn mận chấm muối ớt và nghe ông bà giải thích chuyện "sâu bọ ngoi lên".</p>
    <p>Đây cũng là dịp tuyệt vời để hai vợ chồng kể cho nhau nghe về văn hóa của mình: người Việt giải thích Đoan Ngọ, người Pháp có thể kể lại những lễ hội mùa hè ở quê nhà. Chính những buổi sáng như thế — bình dị, thơm mùi men nếp và đầy tiếng cười — làm nên chất keo của một gia đình đa văn hóa. Nếu bạn muốn tìm hiểu thêm về các phong tục Việt Nam qua lăng kính của một chàng rể Pháp, mời đọc thêm các bài về <a href="../tet-nouvel-an-lunaire-vietnam">Tết Nguyên Đán</a> và <a href="../belle-famille-vietnamienne-guide">gia đình bên vợ/chồng Việt</a> (tiếng Pháp).</p>
    <p>Chúc bạn và gia đình một mùa Đoan Ngọ vui vẻ — và đừng quên: sáng mùng 5, cơm rượu trước, trái cây sau, sâu bọ mới "chết" đúng bài nhé!</p>

    <div id="section-faq">
      <h2>Câu hỏi thường gặp</h2>
      <?php foreach ($page_faq as $i => $item): ?>
      <details <?= $i===0?'open':'' ?>>
        <summary><?= htmlspecialchars($item['q']) ?></summary>
        <p><?= $item['a'] ?></p>
      </details>
      <?php endforeach; ?>
    </div>

  </main>
</div>

<div class="author-box">
  <img src="../assets/img/anthony-vietnam.jpg" alt="Anthony Bouillon - Cap Vietnam" class="author-avatar" onerror="this.style.display='none'">
  <div class="author-box-text">
    <div class="author-box-name">Anthony Bouillon</div>
    <div class="author-box-bio">Chàng rể Pháp sống tại Việt Nam cùng vợ. Trên blog này, tôi chia sẻ cuộc sống thường ngày, thủ tục hành chính và những khám phá văn hóa của một gia đình Pháp-Việt.</div>
    <a href="../a-propos-capvietnam" class="author-box-link">Về tác giả</a>
  </div>
</div>

<?php include '../_article-js.php'; ?>
<?php include '../footer.php'; ?>
