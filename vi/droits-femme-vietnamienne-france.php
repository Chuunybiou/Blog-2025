<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../vivre-ensemble',
  'label' => '🇫🇷 Français',
  'title' => 'Articles Vivre ensemble en français',
];
$page_hreflang = [
  'vi'        => SITE_URL . '/vi/droits-femme-vietnamienne-france',
  'x-default' => SITE_URL . '/vi/',
];

$page_title       = 'Quyền lợi của phụ nữ Việt Nam khi sống ở Pháp (2026)';
$page_description = 'Quyền làm việc, bảo vệ trước bạo lực gia đình, CPAM, CAF, quyền ly hôn — những quyền lợi cụ thể của phụ nữ Việt Nam khi chuyển đến Pháp sống cùng vợ/chồng người Pháp.';
$page_canonical   = SITE_URL . '/vi/droits-femme-vietnamienne-france';
$page_og_title    = 'Quyền lợi của phụ nữ Việt Nam ở Pháp';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=1200&q=80';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Quyền lợi của phụ nữ Việt Nam khi sống ở Pháp (2026)',
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
      <span class="vi-art-read">⏱ 7 phút đọc</span>
    </div>
    <h1>Quyền lợi của phụ nữ Việt Nam<br>khi sống ở Pháp</h1>
    <p class="vi-art-hero-desc">
      Khi sang Pháp sống cùng chồng người Pháp, bạn có những quyền lợi cụ thể mà nhiều người Việt không biết. Bài này giải thích rõ ràng — không dùng thuật ngữ pháp lý phức tạp.
    </p>
  </div>
  <div class="vi-art-hero-img-wrap">
    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=1200&q=80"
         alt="Quyền lợi phụ nữ Việt Nam ở Pháp"
         width="1200" height="380" loading="eager" decoding="async">
  </div>
</header>

<div style="background:var(--warm-bg);padding:0.75rem 2rem;font-size:0.82rem;color:var(--muted)">
  <div style="max-width:860px;margin:0 auto">
    <a href="../vi/" style="color:#7b3f72">Trang chủ (tiếng Việt)</a> ›
    <span>Quyền lợi phụ nữ Việt Nam ở Pháp</span>
  </div>
</div>

<div class="vi-art-body">

  <p>Nhiều phụ nữ Việt Nam khi mới sang Pháp không biết rõ mình có những quyền gì. Họ phụ thuộc vào chồng về thông tin, về giấy tờ, về mọi thứ. Bài này giải thích thẳng thắn những quyền lợi quan trọng nhất — để bạn biết và tự bảo vệ mình nếu cần.</p>

  <div class="vi-art-tip">
    <strong>Lưu ý :</strong> Bài này dành cho phụ nữ Việt Nam đã kết hôn với người Pháp và đang sống ở Pháp. Các quyền lợi có thể thay đổi tùy theo tình trạng cư trú và hoàn cảnh cụ thể.
  </div>

  <h2>1. Quyền làm việc ở Pháp</h2>

  <p>Khi bạn có thẻ cư trú "vie privée et familiale" (cuộc sống riêng tư và gia đình), bạn <strong>có quyền làm việc ở Pháp</strong> — không cần xin phép riêng, không cần giấy phép lao động thêm. Thẻ cư trú đó là đủ.</p>

  <p>Điều này có nghĩa là :</p>
  <ul>
    <li>Bạn có thể làm việc cho bất kỳ công ty nào ở Pháp</li>
    <li>Bạn có thể tự kinh doanh (auto-entrepreneur)</li>
    <li>Bạn có thể đăng ký tìm việc tại Pôle Emploi (France Travail)</li>
    <li>Chồng bạn không có quyền "cấm" bạn đi làm theo luật Pháp</li>
  </ul>

  <div class="vi-art-tip">
    <strong>Thực tế :</strong> Rào cản thường là ngôn ngữ, không phải là pháp lý. Nếu tiếng Pháp còn yếu, hãy bắt đầu với OFII — họ có chương trình học tiếng Pháp <strong>miễn phí</strong> dành cho người mới nhập cư.
  </div>

  <h2>2. Quyền được bảo vệ trước bạo lực gia đình</h2>

  <p>Pháp có luật rất nghiêm về bạo lực gia đình — <strong>nghiêm hơn nhiều so với Việt Nam</strong>. Bạo lực thể chất, tâm lý, kinh tế và tình dục trong hôn nhân đều bị xử lý hình sự.</p>

  <p>Nếu bạn bị bạo hành :</p>
  <ul>
    <li>Gọi <strong>3919</strong> (đường dây hỗ trợ nạn nhân bạo lực gia đình — miễn phí, 24/7)</li>
    <li>Gọi cảnh sát <strong>17</strong> trong trường hợp khẩn cấp</li>
    <li>Bạn có thể yêu cầu toà án cấm chồng đến gần bạn (ordonnance de protection) <strong>dù chưa ly hôn</strong></li>
    <li>Bạo lực không ảnh hưởng đến quyền cư trú của bạn — bạn không bị trục xuất vì báo bạo hành</li>
  </ul>

  <div class="vi-art-warn">
    <strong>Quan trọng :</strong> Ở Pháp, nếu bạn bị bạo hành và bạn không tố cáo, người khác (hàng xóm, bác sĩ) cũng có thể báo cáo thay bạn. Luật Pháp không bắt buộc nạn nhân phải im lặng để "giữ hòa khí gia đình".
  </div>

  <h2>3. Quyền ly hôn và giữ con</h2>

  <p>Bạn có quyền ly hôn ở Pháp bất kể lý do gì. Ly hôn tại Pháp không cần sự đồng ý của chồng (ly hôn đơn phương sau 1 năm ly thân, hoặc ly hôn do lỗi). Bạn không cần phải ở lại Pháp vì sợ mất thẻ cư trú — thẻ cư trú sau ly hôn phụ thuộc vào hoàn cảnh, nhưng il existe des protections.</p>

  <p>Đối với con cái :</p>
  <ul>
    <li>Quyền nuôi con (garde) được phân chia theo lợi ích của trẻ, không phải theo quốc tịch của bố hay mẹ</li>
    <li>Thẩm phán xem xét tình trạng thực tế : ai chăm sóc con hàng ngày, điều kiện sống</li>
    <li>Mẹ nước ngoài <strong>không tự động bị thiệt thòi</strong> chỉ vì không phải người Pháp</li>
  </ul>

  <h2>4. Bảo hiểm y tế — CPAM</h2>

  <p>Khi bạn có thẻ cư trú hợp lệ và đã ở Pháp ổn định (<strong>từ 3 tháng trở lên</strong>), bạn có quyền đăng ký Assurance Maladie (bảo hiểm y tế Nhà nước) thông qua CPAM.</p>

  <p>Điều đó có nghĩa là :</p>
  <ul>
    <li>Khám bác sĩ được hoàn trả <strong>70%</strong> (nếu có médecin traitant)</li>
    <li>Thuốc được hoàn trả một phần</li>
    <li>Nếu không làm việc và thu nhập thấp : PUMA (Protection Universelle Maladie) — miễn phí</li>
    <li>Sau 6 tháng : nhận <strong>Carte Vitale</strong> (thẻ bảo hiểm y tế xanh)</li>
  </ul>

  <div class="vi-art-good">
    <strong>Điểm mạnh của hệ thống y tế Pháp :</strong> Thuốc tránh thai, phá thai, theo dõi thai sản — tất cả đều miễn phí hoặc gần miễn phí. Quyền kiểm soát sức khoẻ sinh sản là hoàn toàn của bạn, không cần sự cho phép của chồng.
  </div>

  <h2>5. Trợ cấp xã hội — CAF</h2>

  <p>CAF (Caisse d'Allocations Familiales) là cơ quan phát trợ cấp nhà ở và gia đình. Bạn có thể có quyền hưởng :</p>

  <ul>
    <li><strong>APL</strong> (Aide Personnalisée au Logement) — trợ cấp thuê nhà nếu bạn thuê</li>
    <li><strong>ALS</strong> — trợ cấp nhà ở cho người không đủ điều kiện APL</li>
    <li><strong>Allocations familiales</strong> — nếu có con (từ 2 con trở lên)</li>
    <li><strong>RSA</strong> (Revenu de Solidarité Active) — nếu không có thu nhập và đã ở Pháp 5 năm hợp pháp</li>
  </ul>

  <p>Để đăng ký CAF, bạn cần : thẻ cư trú hợp lệ, RIB (tài khoản ngân hàng Pháp), justificatif de domicile. Đăng ký trực tuyến trên caf.fr.</p>

  <h2>6. Quyền học tiếng Pháp miễn phí</h2>

  <p>Khi bạn mới sang Pháp, OFII (cơ quan nhập cư) ký hợp đồng tích hợp cộng đồng (CIR) với bạn. Trong khuôn khổ đó, bạn có quyền theo học <strong>400 giờ tiếng Pháp miễn phí</strong> — được điều phối bởi OFII, không tốn tiền.</p>

  <p>Đây là cơ hội quan trọng. Tiếng Pháp mở ra :</p>
  <ul>
    <li>Khả năng làm việc</li>
    <li>Tự xử lý hành chính mà không cần nhờ chồng</li>
    <li>Trình độ A2 (bắt buộc sau 5 năm cho thẻ 10 năm) và B1 (cho nhập tịch)</li>
  </ul>

  <div class="vi-art-nav">
    <div>
      <strong style="display:block;margin-bottom:0.3rem;font-size:0.85rem;color:var(--muted)">Bài tiếp theo</strong>
      <a href="caf-cpam-demarches-arrivee-france">Đăng ký CAF và CPAM ngay khi đến Pháp →</a>
    </div>
  </div>

  <div style="background:var(--warm-bg);border-radius:8px;padding:1.5rem;margin-top:2rem;font-size:0.9rem">
    <strong>📌 Tất cả bài viết tiếng Việt :</strong> <a href="../vi/" style="color:#7b3f72">Trang chủ tiếng Việt</a> — hướng dẫn thực tế cho người Việt sang Pháp sống cùng vợ/chồng Pháp.
  </div>

</div>

<?php include '../footer.php'; ?>
