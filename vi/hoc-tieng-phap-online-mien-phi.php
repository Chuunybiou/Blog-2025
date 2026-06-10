<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../blog-capvietnam.php',
  'label' => '🇫🇷 Français',
  'title' => 'Version française',
];
$page_hreflang = [
  'vi'        => SITE_URL . '/vi/hoc-tieng-phap-online-mien-phi',
  'x-default' => SITE_URL . '/vi/',
];

$page_title       = 'Học Tiếng Pháp Online Miễn Phí: 7 Nguồn Tốt Nhất Năm 2026 | Cap Vietnam';
$page_description = 'Học tiếng Pháp online miễn phí với TikTok, YouTube, Duolingo, TV5Monde, RFI Savoirs... Mình tổng hợp 7 nguồn tốt nhất và lộ trình thực tế dành cho người Việt.';
$page_canonical   = SITE_URL . '/vi/hoc-tieng-phap-online-mien-phi';
$page_og_title    = 'Học Tiếng Pháp Online Miễn Phí — 7 Nguồn Tốt Nhất 2026';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1200&q=80';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Học Tiếng Pháp Online Miễn Phí: 7 Nguồn Tốt Nhất Năm 2026',
  'description'      => $page_description,
  'image'            => $page_og_image,
  'author'           => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/vi/'],
  'publisher'        => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'datePublished'    => '2026-04-27',
  'dateModified'     => '2026-04-27',
  'url'              => $page_canonical,
  'inLanguage'       => 'vi',
  'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => $page_canonical],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$page_extra_css = '
/* ══ ARTICLE VI ══ */
.vi-art-hero{padding-top:64px;background:linear-gradient(165deg,#0a0a2e 0%,#1a1050 45%,#0d1f44 100%);position:relative;overflow:hidden}
.vi-art-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,rgba(191,74,42,0.1),transparent 60%),radial-gradient(ellipse 50% 40% at 80% 20%,rgba(26,95,138,0.12),transparent 60%)}
.vi-art-hero-inner{max-width:860px;margin:0 auto;padding:4rem 2rem 3rem;position:relative;z-index:1}
.vi-art-meta{display:flex;gap:1rem;align-items:center;flex-wrap:wrap;margin-bottom:1.5rem}
.vi-art-cat{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:4px 12px;border-radius:3px;background:rgba(26,95,138,0.3);color:#6eb8e8;border:1px solid rgba(110,184,232,0.2)}
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
.vi-art-body a{color:#1a5f8a;text-decoration:underline}
.vi-art-body em{color:var(--terracotta);font-style:italic}
.vi-art-tip{background:rgba(26,95,138,0.06);border-left:3px solid #1a5f8a;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-art-tip strong{color:#1a5f8a}
.vi-art-example{background:var(--warm-bg);padding:1rem 1.25rem;border-radius:6px;margin:1rem 0;font-size:0.95rem;line-height:1.7}
.vi-res-row{display:flex;gap:1rem;align-items:flex-start;background:var(--white);border:1px solid var(--border);border-radius:var(--radius);padding:1.5rem;margin-bottom:1rem;box-shadow:var(--shadow-sm)}
.vi-res-num{font-family:"DM Serif Display",serif;font-size:2rem;color:var(--border);flex-shrink:0;line-height:1;min-width:2.5rem;text-align:center}
.vi-res-info h3{font-family:"DM Serif Display",serif;font-size:1.05rem;margin-bottom:0.4rem;color:var(--ink)}
.vi-res-info p{font-size:0.92rem;line-height:1.7;color:#555;margin-bottom:0.5rem}
.vi-res-badge{display:inline-block;font-size:0.68rem;font-weight:700;letter-spacing:1px;text-transform:uppercase;padding:3px 10px;border-radius:100px}
.vi-badge-main{background:rgba(255,0,80,0.1);color:#cc0040}
.vi-badge-free{background:rgba(34,197,94,0.1);color:#16a34a}
.vi-badge-supp{background:rgba(26,95,138,0.1);color:#1a5f8a}
.vi-roadmap{background:var(--ink);color:var(--cream);border-radius:var(--radius);padding:2rem;margin:2rem 0}
.vi-roadmap h3{font-family:"DM Serif Display",serif;font-size:1.1rem;margin-bottom:1.25rem;color:#fff}
.vi-roadmap-step{display:flex;gap:1rem;align-items:flex-start;margin-bottom:1rem}
.vi-roadmap-step:last-child{margin-bottom:0}
.vi-step-label{font-size:0.7rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#6eb8e8;min-width:5rem;padding-top:2px}
.vi-step-desc{font-size:0.9rem;color:rgba(250,248,244,0.7);line-height:1.7}
.vi-art-cta{background:linear-gradient(135deg,#ff0050,#cc0040);padding:4rem 2rem;text-align:center;color:#fff}
.vi-art-cta h2{font-family:"DM Serif Display",serif;font-size:clamp(1.6rem,3vw,2.2rem);margin-bottom:0.5rem}
.vi-art-cta p{color:rgba(255,255,255,0.75);margin-bottom:2rem}
.vi-art-cta-btns{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap}
.vi-art-cta-white{padding:0.85rem 2rem;background:#fff;color:#ff0050;border-radius:4px;text-decoration:none;font-weight:700;font-size:0.95rem;transition:0.2s}
.vi-art-cta-white:hover{opacity:0.9;transform:translateY(-2px)}
.vi-art-cta-outline{padding:0.85rem 2rem;border:2px solid rgba(255,255,255,0.4);color:#fff;border-radius:4px;text-decoration:none;font-weight:600;font-size:0.95rem;transition:0.2s}
.vi-art-cta-outline:hover{border-color:#fff}
.vi-art-related-wrap{background:var(--warm-bg);padding:3.5rem 2rem}
.vi-art-related{max-width:760px;margin:0 auto}
.vi-art-related h3{font-family:"DM Serif Display",serif;font-size:1.3rem;margin-bottom:1.5rem;color:var(--ink)}
.vi-rel-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:1.25rem}
.vi-rel-card{display:block;background:var(--white);border-radius:var(--radius);overflow:hidden;text-decoration:none;color:inherit;box-shadow:var(--shadow-sm);transition:transform 0.2s,box-shadow 0.2s}
.vi-rel-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-md)}
.vi-rel-thumb{height:130px;overflow:hidden}
.vi-rel-thumb img{width:100%;height:100%;object-fit:cover}
.vi-rel-body{padding:1rem}
.vi-rel-body h4{font-family:"DM Serif Display",serif;font-size:0.95rem;line-height:1.4;margin-bottom:0.4rem;color:var(--ink)}
.vi-rel-body span{font-size:0.78rem;color:#1a5f8a;font-weight:600}
@media(max-width:640px){.vi-rel-grid{grid-template-columns:1fr}.vi-art-cta-btns{flex-direction:column;align-items:center}.vi-res-row{flex-direction:column}.vi-roadmap-step{flex-direction:column;gap:0.25rem}}
';

include '../header.php';
?>

<!-- ══ HERO ══ -->
<header class="vi-art-hero">
  <div class="vi-art-hero-inner">
    <div class="vi-art-meta">
      <span class="vi-art-cat">Tài nguyên học tiếng Pháp</span>
      <span class="vi-art-date">27 tháng 4, 2026</span>
      <span class="vi-art-read">⏱ 5 phút đọc</span>
    </div>
    <h1>Học Tiếng Pháp Online Miễn Phí:<br>7 Nguồn Tốt Nhất Năm 2026</h1>
    <p class="vi-art-hero-desc">
      TikTok, YouTube, Duolingo, TV5Monde, RFI Savoirs... Mình tổng hợp 7 nguồn học
      tiếng Pháp miễn phí tốt nhất và lộ trình thực tế để dùng chúng hiệu quả.
    </p>
  </div>
  <div class="vi-art-hero-img-wrap">
    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=1400&q=80"
         alt="Học tiếng Pháp online miễn phí với laptop"
         width="1400" height="420" loading="eager" decoding="async">
  </div>
</header>

<!-- ══ ARTICLE BODY ══ -->
<main>
<article class="vi-art-body" itemscope itemtype="https://schema.org/Article">

  <p>Một trong những câu hỏi mình nhận được nhiều nhất: <em>"Học tiếng Pháp thì phải tốn tiền không anh?"</em></p>

  <p>Câu trả lời ngắn: <strong>Không nhất thiết.</strong> Tất nhiên có những khóa học trả phí tốt — giáo viên riêng, lớp học có cấu trúc, thi bằng DELF. Nhưng để bắt đầu và thậm chí đạt trình độ B1, bạn hoàn toàn có thể làm miễn phí nếu biết dùng đúng nguồn.</p>

  <p>Bài này mình tổng hợp 7 nguồn tốt nhất — theo thứ tự từ cái mình tin nhất đến các công cụ hỗ trợ thêm. Cuối bài có lộ trình cụ thể theo từng giai đoạn.</p>

  <h2>7 Nguồn Học Tiếng Pháp Miễn Phí Tốt Nhất</h2>

  <div class="vi-res-row">
    <div class="vi-res-num">1</div>
    <div class="vi-res-info">
      <h3>TikTok @proffrancaisetranger — Người Pháp Dạy Tại Hà Nội</h3>
      <p>Đây là kênh của mình — và mình nói thẳng vì đây là nguồn mình biết rõ nhất từ bên trong. Mình là người Pháp, đang sống ở Hà Nội, dạy tiếng Pháp cho người Việt mỗi ngày. Mỗi video 60 giây tập trung vào <strong>một điểm duy nhất</strong>: một từ vựng, một cấu trúc ngữ pháp, một lỗi phát âm.</p>
      <p>Điểm mạnh: mình biết người Việt hay gặp khó khăn ở đâu vì mình sống ở đây, có vợ người Việt, dạy trực tiếp. Các video đã được xem <strong>hàng chục nghìn lượt</strong> — không phải con số lớn nhất, nhưng học viên thực sự tiến bộ.</p>
      <a href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener" class="vi-res-badge vi-badge-main">🎵 Theo dõi TikTok — Miễn phí</a>
    </div>
  </div>

  <div class="vi-res-row">
    <div class="vi-res-num">2</div>
    <div class="vi-res-info">
      <h3>Anki — Ứng Dụng Luyện Từ Vựng Hiệu Quả Nhất</h3>
      <p>Anki là ứng dụng thẻ ghi nhớ (flashcard) dựa trên thuật toán <strong>spaced repetition</strong> — hệ thống nhắc lại từ vựng đúng lúc bạn sắp quên. Đây là công cụ mà hầu hết người học ngôn ngữ chuyên nghiệp đều dùng.</p>
      <p>Có sẵn bộ thẻ tiếng Pháp miễn phí trên AnkiWeb, hoặc tự tạo từ PDF 500 từ của mình (nguồn số 7). Anki desktop và web hoàn toàn miễn phí — bản Android cũng miễn phí.</p>
      <span class="vi-res-badge vi-badge-free">Miễn phí (desktop + Android + web)</span>
    </div>
  </div>

  <div class="vi-res-row">
    <div class="vi-res-num">3</div>
    <div class="vi-res-info">
      <h3>Duolingo — Tốt Để Xây Dựng Thói Quen</h3>
      <p>Duolingo là ứng dụng học ngôn ngữ phổ biến nhất thế giới — và có lý do chính đáng. Giao diện gamified giúp dễ tạo thói quen mỗi ngày. Phiên bản miễn phí đủ dùng, có tiếng Việt → tiếng Pháp.</p>
      <p><strong>Hạn chế thực tế:</strong> Duolingo không dạy phát âm tốt, và khó đạt cao hơn A2 chỉ với Duolingo. Dùng nó như công cụ <em>duy trì thói quen 10–15 phút/ngày</em> — không phải nguồn học chính.</p>
      <span class="vi-res-badge vi-badge-free">Miễn phí (có bản Plus trả phí)</span>
    </div>
  </div>

  <div class="vi-res-row">
    <div class="vi-res-num">4</div>
    <div class="vi-res-info">
      <h3>TV5Monde — Nghe Tiếng Pháp Thật</h3>
      <p>TV5Monde là kênh truyền hình quốc tế của Pháp, với mục học tiếng Pháp miễn phí tại <em>apprendre.tv5monde.com</em>. Điểm đặc biệt: xem phóng sự tin tức với <strong>phụ đề song ngữ</strong> và bài tập kèm theo.</p>
      <p>Đây là tiếng Pháp thật — không phải câu học thuật — nên giúp bạn quen với nhịp điệu và tốc độ nói thực tế. Mình khuyên bắt đầu dùng từ trình độ <strong>A2 trở lên</strong>.</p>
      <span class="vi-res-badge vi-badge-free">Miễn phí hoàn toàn</span>
    </div>
  </div>

  <div class="vi-res-row">
    <div class="vi-res-num">5</div>
    <div class="vi-res-info">
      <h3>Français Facile — Bài Tập Có Hệ Thống</h3>
      <p>Francaisfacile.com là trang tổng hợp bài tập ngữ pháp từ A1 đến C2, podcast học tiếng Pháp, và bài đọc hiểu có câu hỏi. Giao diện cũ một chút nhưng <strong>nội dung rất chắc</strong>.</p>
      <p>Đặc biệt tốt để luyện ngữ pháp có hệ thống — biết mình đang ở đâu và cần học gì tiếp theo.</p>
      <span class="vi-res-badge vi-badge-free">Miễn phí</span>
    </div>
  </div>

  <div class="vi-res-row">
    <div class="vi-res-num">6</div>
    <div class="vi-res-info">
      <h3>RFI Savoirs — Tiếng Pháp Qua Thời Sự</h3>
      <p>RFI Savoirs (<em>savoirs.rfi.fr</em>) là mục học tiếng Pháp của đài Radio France Internationale. Tin tức thời sự được đơn giản hóa cho người học (A2–B2), kèm audio và bản viết.</p>
      <p>Học tiếng Pháp qua thời sự thế giới giúp bạn vừa mở rộng vốn từ vừa hiểu thế giới — <strong>hai lợi ích một lúc</strong>.</p>
      <span class="vi-res-badge vi-badge-free">Miễn phí</span>
    </div>
  </div>

  <div class="vi-res-row">
    <div class="vi-res-num">7</div>
    <div class="vi-res-info">
      <h3>PDF 500 Từ Vựng Cơ Bản — Tài Liệu Của Mình</h3>
      <p>Mình đã tổng hợp <strong>500 từ vựng tiếng Pháp được dùng nhiều nhất</strong> — có phiên âm và dịch nghĩa tiếng Việt. In ra, học 10–15 từ mỗi ngày.</p>
      <p>Đây là nền tảng từ vựng cần thiết — không cần học hết trước khi bắt đầu các nguồn khác, nhưng nên song song.</p>
      <a href="../500-mots-essentiels-francais-vietnamien.pdf" target="_blank" rel="noopener" class="vi-res-badge vi-badge-main">📄 Tải PDF — Miễn phí</a>
    </div>
  </div>

  <h2>Lộ Trình Thực Tế Theo Giai Đoạn</h2>

  <p>Không cần dùng tất cả 7 nguồn cùng lúc — đó là cách dẫn đến kiệt sức và bỏ cuộc. Đây là lộ trình mình khuyên:</p>

  <div class="vi-roadmap">
    <h3>📍 Lộ trình học tiếng Pháp từ đầu</h3>
    <div class="vi-roadmap-step">
      <div class="vi-step-label">A0 → A2</div>
      <div class="vi-step-desc">Duolingo hàng ngày (10 phút) + TikTok @proffrancaisetranger + PDF 500 từ vựng. Tập trung vào từ vựng cơ bản và phát âm đúng từ đầu.</div>
    </div>
    <div class="vi-roadmap-step">
      <div class="vi-step-label">A2 → B1</div>
      <div class="vi-step-desc">Giảm Duolingo + tăng YouTube (bài học dài hơn) + bắt đầu Français Facile + TV5Monde với phụ đề tiếng Pháp.</div>
    </div>
    <div class="vi-roadmap-step">
      <div class="vi-step-label">B1 → B2</div>
      <div class="vi-step-desc">RFI Savoirs + TV5Monde tin tức thật (bỏ phụ đề) + tìm người Pháp bản địa để nói chuyện thực tế. Cân nhắc thi DELF B2.</div>
    </div>
  </div>

  <div class="vi-art-tip"><strong>Quan trọng nhất:</strong> Tính <em>đều đặn</em> quan trọng hơn cường độ. 20 phút mỗi ngày trong 6 tháng tốt hơn 3 giờ mỗi cuối tuần. Não bộ học ngôn ngữ tốt nhất qua tiếp xúc thường xuyên, không phải nhồi nhét.</div>

  <p>Xem toàn bộ tài liệu học tiếng Pháp, video theo cấp độ và hướng dẫn của mình tại <a href="./">trang hub học tiếng Pháp cho người Việt</a>. Tất cả đều miễn phí.</p>

</article>
</main>

<!-- ══ CTA ══ -->
<section class="vi-art-cta">
  <h2>Bắt đầu ngay hôm nay — hoàn toàn miễn phí 🇫🇷</h2>
  <p>TikTok mỗi ngày + PDF từ vựng = nền tảng vững chắc trong 3 tháng đầu.</p>
  <div class="vi-art-cta-btns">
    <a class="vi-art-cta-white" href="./">📚 Trang học tiếng Pháp</a>
    <a class="vi-art-cta-outline" href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener">🎵 Theo dõi TikTok</a>
    <a class="vi-art-cta-outline" href="../500-mots-essentiels-francais-vietnamien.pdf" target="_blank" rel="noopener">📄 Tải PDF 500 từ</a>
  </div>
</section>

<!-- ══ BÀI VIẾT LIÊN QUAN ══ -->
<div class="vi-art-related-wrap">
  <div class="vi-art-related">
    <h3>📖 Bài viết liên quan</h3>
    <div class="vi-rel-grid">
      <a class="vi-rel-card" href="tai-sao-hoc-tieng-phap.php">
        <div class="vi-rel-thumb">
          <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=400&q=80"
               alt="Tại sao nên học tiếng Pháp" loading="lazy">
        </div>
        <div class="vi-rel-body">
          <h4>Tại Sao Nên Học Tiếng Pháp? 6 Lý Do Thực Tế Dành Cho Người Việt</h4>
          <span>Đọc thêm →</span>
        </div>
      </a>
      <a class="vi-rel-card" href="loi-phat-am-tieng-phap-nguoi-viet.php">
        <div class="vi-rel-thumb">
          <img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=400&q=80"
               alt="Lỗi phát âm tiếng Pháp của người Việt" loading="lazy">
        </div>
        <div class="vi-rel-body">
          <h4>7 Lỗi Phát Âm Tiếng Pháp Mà Người Việt Thường Mắc (Và Cách Sửa)</h4>
          <span>Đọc thêm →</span>
        </div>
      </a>
    </div>
  </div>
</div>

<?php include '../footer.php'; ?>
