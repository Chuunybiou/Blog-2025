<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../apprendre-vietnamien-couple',
  'label' => '🇫🇷 Français',
  'title' => 'Apprendre le vietnamien en couple — version française',
];
$page_hreflang = [
  'vi'        => SITE_URL . '/vi/apprendre-francais-avant-darriver',
  'x-default' => SITE_URL . '/apprendre-vietnamien-couple',
];

$page_title       = 'Học tiếng Pháp trước khi sang Pháp — những gì thực sự có ích (2026)';
$page_description = 'Alliance Française ở Việt Nam, DELF/DALF, ứng dụng, học online — hướng dẫn thực tế để học tiếng Pháp từ Việt Nam trước khi chuyển sang Pháp sống. Trình độ nào cần thiết?';
$page_canonical   = SITE_URL . '/vi/apprendre-francais-avant-darriver';
$page_og_title    = 'Học tiếng Pháp từ Việt Nam trước khi sang Pháp';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=1200&q=80';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Học tiếng Pháp trước khi sang Pháp — những gì thực sự có ích (2026)',
  'description'      => $page_description,
  'image'            => $page_og_image,
  'author'           => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/vi/'],
  'publisher'        => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'datePublished'    => '2026-06-22',
  'dateModified'     => '2026-06-22',
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
.vi-art-warn{background:#fff8f0;border-left:3px solid #e8856a;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-art-warn strong{color:#c0622a}
.vi-art-good{background:#f0faf5;border-left:3px solid #1b6b52;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-art-good strong{color:#1b6b52}
.vi-art-nav{display:flex;justify-content:space-between;align-items:center;gap:1rem;flex-wrap:wrap;margin:3rem 0;padding:1.5rem;background:var(--warm-bg);border-radius:var(--radius)}
.vi-art-nav a{display:inline-flex;align-items:center;gap:6px;padding:0.7rem 1.4rem;background:#7b3f72;color:#fff;border-radius:4px;text-decoration:none;font-weight:700;font-size:0.88rem}
.vi-art-nav a:hover{background:#5d2e55}
';

include '../header.php';
?>

<header class="vi-art-hero">
  <div class="vi-art-hero-inner">
    <div class="vi-art-meta">
      <span class="vi-art-cat">Chuẩn bị sang Pháp</span>
      <span class="vi-art-date">Tháng 6, 2026</span>
      <span class="vi-art-read">⏱ 6 phút đọc</span>
    </div>
    <h1>Học tiếng Pháp từ Việt Nam —<br>những gì thực sự có ích</h1>
    <p class="vi-art-hero-desc">
      Học ở đâu, học bao nhiêu, trình độ nào cần thiết để làm thẻ cư trú 10 năm và nhập tịch ? Hướng dẫn thực tế từ kinh nghiệm của người đã qua.
    </p>
  </div>
  <div class="vi-art-hero-img-wrap">
    <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=1200&q=80"
         alt="Học tiếng Pháp trước khi sang Pháp"
         width="1200" height="380" loading="eager" decoding="async">
  </div>
</header>

<div style="background:var(--warm-bg);padding:0.75rem 2rem;font-size:0.82rem;color:var(--muted)">
  <div style="max-width:860px;margin:0 auto">
    <a href="../vi/" style="color:#7b3f72">Trang chủ (tiếng Việt)</a> ›
    <span>Học tiếng Pháp trước khi sang</span>
  </div>
</div>

<div class="vi-art-body">

  <p>Tiếng Pháp không phải là tiếng dễ học. Nhưng nó quan trọng hơn bạn nghĩ — không chỉ vì "để giao tiếp", mà vì nó ảnh hưởng trực tiếp đến <strong>quyền cư trú lâu dài của bạn ở Pháp</strong>. Bài này giải thích cần học bao nhiêu và học ở đâu.</p>

  <h2>1. Trình độ nào là bắt buộc ?</h2>

  <p>Hệ thống ngôn ngữ châu Âu chia ra 6 cấp độ: A1 (sơ cấp), A2, B1, B2, C1, C2 (thành thạo như người bản ngữ).</p>

  <p><strong>Những mốc pháp lý quan trọng :</strong></p>
  <ul>
    <li><strong>A2</strong> — Bắt buộc để làm thẻ cư trú 10 năm (carte de résidence) sau 3 năm ở Pháp. Bạn cần được đánh giá đạt A2 tối thiểu bởi OFII hoặc nộp bằng ngôn ngữ được công nhận.</li>
    <li><strong>B1</strong> — Bắt buộc để xin nhập tịch Pháp (naturalisation). Được đánh giá qua cuộc phỏng vấn trực tiếp.</li>
    <li>Không có yêu cầu ngôn ngữ để làm visa VLS-TS (thị thực sang Pháp đầu tiên).</li>
  </ul>

  <div class="vi-art-warn">
    <strong>Lưu ý :</strong> Nhiều người sang Pháp và nghĩ "chồng sẽ dịch cho mình" — điều đó làm bạn phụ thuộc hoàn toàn và rất mệt mỏi về lâu dài. Tiếng Pháp dù chỉ ở mức A2 sẽ thay đổi rất nhiều chất lượng cuộc sống hàng ngày.
  </div>

  <h2>2. Alliance Française ở Việt Nam — phương án tốt nhất</h2>

  <p>Alliance Française là tổ chức văn hoá Pháp có mặt tại nhiều thành phố Việt Nam. Họ dạy tiếng Pháp chất lượng cao và tổ chức kỳ thi DELF/DALF được công nhận quốc tế.</p>

  <p><strong>Địa điểm tại Việt Nam :</strong></p>
  <ul>
    <li><strong>Hà Nội</strong> : L'Espace — 24 Tràng Tiền (gần Hồ Gươm)</li>
    <li><strong>TP. Hồ Chí Minh</strong> : 26 Lê Lợi (Quận 1)</li>
    <li><strong>Đà Nẵng, Huế, Cần Thơ</strong> : có chi nhánh hoặc đối tác</li>
  </ul>

  <p>Khoá học có thể theo nhóm hoặc học riêng (tốn hơn). Chi phí dao động từ 3 đến 8 triệu đồng/khoá tùy cấp độ và thành phố. Nếu mục tiêu là lấy bằng DELF A2 hoặc B1 trước khi sang Pháp, đây là con đường đáng tin cậy nhất.</p>

  <h2>3. DELF / DALF — bằng cấp được công nhận</h2>

  <p>DELF (Diplôme d'Études en Langue Française) là bằng tiếng Pháp được Bộ Giáo dục Pháp cấp, có giá trị vĩnh viễn (không hết hạn), được công nhận tại Pháp và trên toàn thế giới.</p>

  <ul>
    <li><strong>DELF A2</strong> — đủ điều kiện thẻ 10 năm</li>
    <li><strong>DELF B1</strong> — đủ điều kiện nhập tịch</li>
    <li>Kỳ thi tổ chức tại Alliance Française hoặc các trung tâm được uỷ quyền ở Việt Nam</li>
    <li>Lệ phí : khoảng 2–4 triệu đồng tuỳ cấp độ</li>
  </ul>

  <div class="vi-art-good">
    <strong>Mẹo :</strong> Nếu đã có bằng DELF, bạn không cần qua đánh giá OFII nữa khi ở Pháp. Điều đó tiết kiệm thời gian và tránh lo lắng về buổi đánh giá sau này.
  </div>

  <h2>4. Học online — cái gì thực sự có ích</h2>

  <p><strong>Có ích :</strong></p>
  <ul>
    <li><strong>RFI Savoirs</strong> (rfi.fr/savoirs) — bài tập nghe tiếng Pháp đơn giản và trung bình, miễn phí</li>
    <li><strong>TV5Monde Apprendre le français</strong> — video và bài tập, miễn phí, nội dung thực tế</li>
    <li><strong>Assimil "Le Français"</strong> (sách + audio) — phương pháp học từng bước, hiệu quả cho người bắt đầu từ đầu</li>
    <li><strong>YouTube</strong> : kênh "Easy French", "InnerFrench" (cho B1/B2)</li>
  </ul>

  <p><strong>Ít có ích hơn :</strong></p>
  <ul>
    <li><strong>Duolingo</strong> — hữu ích để tạo thói quen hàng ngày, nhưng không đủ để đạt A2/B1. Dùng như bổ sung, không phải chính.</li>
    <li>Video TikTok học tiếng Pháp — thường quá ngắn, không có cấu trúc học tập rõ ràng</li>
  </ul>

  <h2>5. Lời khuyên thực tế : bắt đầu ít nhất 6 tháng trước khi sang</h2>

  <p>6 tháng là thời gian tối thiểu để đạt A2 nếu học đều đặn 1 giờ/ngày. Đây là lịch gợi ý :</p>

  <ul>
    <li><strong>Tháng 1–2</strong> : A1 — học bảng chữ cái, phát âm, từ vựng cơ bản, se présenter</li>
    <li><strong>Tháng 3–4</strong> : A2 — ngữ pháp cơ bản, bài tập nghe, nói về gia đình và cuộc sống hàng ngày</li>
    <li><strong>Tháng 5–6</strong> : Ôn thi DELF A2, luyện nghe nói với giáo viên hoặc chồng</li>
    <li><strong>Sau khi sang Pháp</strong> : học tiếp B1 với OFII (400 giờ miễn phí)</li>
  </ul>

  <div class="vi-art-tip">
    <strong>Quan trọng :</strong> Nói tiếng Pháp với chồng bạn mỗi ngày — dù sai, dù chậm. Đó là cách học nhanh nhất và cũng giúp cả hai gần nhau hơn.
  </div>

  <div class="vi-art-nav">
    <div>
      <strong style="display:block;margin-bottom:0.3rem;font-size:0.85rem;color:var(--muted)">Bài liên quan</strong>
      <a href="cuoc-song-thuc-te-o-phap">Cuộc sống thực tế ở Pháp →</a>
    </div>
  </div>

</div>

<?php include '../footer.php'; ?>
