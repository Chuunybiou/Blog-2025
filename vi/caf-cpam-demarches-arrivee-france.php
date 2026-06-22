<?php
require_once __DIR__ . '/../config/site.php';

$path_prefix      = '../';
$page_lang        = 'vi';
$page_lang_switch = [
  'href'  => '../vivre-ensemble',
  'label' => '🇫🇷 Français',
  'title' => 'Vivre ensemble en France — version française',
];
$page_hreflang = [
  'vi'        => SITE_URL . '/vi/caf-cpam-demarches-arrivee-france',
  'x-default' => SITE_URL . '/vi/',
];

$page_title       = 'Đăng ký CAF và CPAM khi mới đến Pháp — hướng dẫn từng bước (2026)';
$page_description = 'Cách đăng ký bảo hiểm y tế CPAM và trợ cấp CAF khi mới sang Pháp. Thứ tự các bước, giấy tờ cần thiết, thời gian chờ và những lỗi hay gặp.';
$page_canonical   = SITE_URL . '/vi/caf-cpam-demarches-arrivee-france';
$page_og_title    = 'Đăng ký CAF và CPAM khi đến Pháp — từng bước 2026';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = 'https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=1200&q=80';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Đăng ký CAF và CPAM khi mới đến Pháp — hướng dẫn từng bước (2026)',
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
.vi-art-hero{padding-top:64px;background:linear-gradient(165deg,#0a1a1f 0%,#1a3d3a 45%,#0d1f1c 100%);position:relative;overflow:hidden}
.vi-art-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,rgba(27,106,75,0.18),transparent 60%)}
.vi-art-hero-inner{max-width:860px;margin:0 auto;padding:4rem 2rem 3rem;position:relative;z-index:1}
.vi-art-meta{display:flex;gap:1rem;align-items:center;flex-wrap:wrap;margin-bottom:1.5rem}
.vi-art-cat{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:4px 12px;border-radius:3px;background:rgba(27,106,75,0.3);color:#6ee7b7;border:1px solid rgba(110,231,183,0.2)}
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
.vi-art-body a{color:#1b6b52;text-decoration:underline}
.vi-art-tip{background:rgba(27,106,75,0.06);border-left:3px solid #1b6b52;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-art-tip strong{color:#1b6b52}
.vi-art-warn{background:#fff8f0;border-left:3px solid #e8856a;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-art-warn strong{color:#c0622a}
.vi-art-good{background:#f0faf5;border-left:3px solid #1b6b52;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem}
.vi-art-good strong{color:#1b6b52}
.step-block{display:flex;gap:1rem;align-items:flex-start;margin:1rem 0;padding:1rem;background:#f9f7f4;border-radius:6px}
.step-num{background:#1b6b52;color:#fff;border-radius:50%;width:32px;height:32px;display:flex;align-items:center;justify-content:center;font-weight:700;font-size:0.9rem;flex-shrink:0}
.vi-art-nav{display:flex;justify-content:space-between;align-items:center;gap:1rem;flex-wrap:wrap;margin:3rem 0;padding:1.5rem;background:var(--warm-bg);border-radius:var(--radius)}
.vi-art-nav a{display:inline-flex;align-items:center;gap:6px;padding:0.7rem 1.4rem;background:#1b6b52;color:#fff;border-radius:4px;text-decoration:none;font-weight:700;font-size:0.88rem}
';

include '../header.php';
?>

<header class="vi-art-hero">
  <div class="vi-art-hero-inner">
    <div class="vi-art-meta">
      <span class="vi-art-cat">Sống ở Pháp</span>
      <span class="vi-art-date">Tháng 6, 2026</span>
      <span class="vi-art-read">⏱ 8 phút đọc</span>
    </div>
    <h1>Đăng ký CAF và CPAM<br>khi mới đến Pháp</h1>
    <p class="vi-art-hero-desc">
      Hai trong số những việc quan trọng nhất khi mới đặt chân đến Pháp. Hướng dẫn từng bước, thứ tự đúng, giấy tờ cần thiết — không bỏ sót gì.
    </p>
  </div>
  <div class="vi-art-hero-img-wrap">
    <img src="https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=1200&q=80"
         alt="Đăng ký CPAM và CAF ở Pháp"
         width="1200" height="380" loading="eager" decoding="async">
  </div>
</header>

<div style="background:var(--warm-bg);padding:0.75rem 2rem;font-size:0.82rem;color:var(--muted)">
  <div style="max-width:860px;margin:0 auto">
    <a href="../vi/" style="color:#1b6b52">Trang chủ (tiếng Việt)</a> ›
    <span>Đăng ký CAF và CPAM</span>
  </div>
</div>

<div class="vi-art-body">

  <p>Khi mới sang Pháp, bạn cần xử lý nhiều giấy tờ một lúc. Bài này giải thích đúng thứ tự — vì có những việc phải làm trước mới làm được việc sau. Đặc biệt là OFII, CPAM và CAF : ba cơ quan khác nhau, không liên thông tự động.</p>

  <div class="vi-art-tip">
    <strong>OFII, CPAM hay CAF — khác nhau như thế nào ?</strong><br>
    • <strong>OFII</strong> : cơ quan nhập cư — xác nhận visa VLS-TS của bạn, bắt buộc trong 3 tháng đầu<br>
    • <strong>CPAM</strong> : Assurance Maladie — bảo hiểm y tế<br>
    • <strong>CAF</strong> : Caisse d'Allocations Familiales — trợ cấp nhà ở và gia đình
  </div>

  <h2>Bước 1 — OFII : việc đầu tiên phải làm (trong 3 tháng)</h2>

  <p>Khi visa VLS-TS của bạn được dán vào hộ chiếu, đó chỉ là visa — chưa phải thẻ cư trú. Bạn phải <strong>xác nhận visa này với OFII trong vòng 3 tháng</strong> kể từ ngày nhập cảnh Pháp.</p>

  <div class="step-block">
    <span class="step-num">1</span>
    <div>
      <strong>Lên website ofii.fr</strong> → Phần "Attestation de validation VLS-TS" → Điền thông tin và chọn ngày hẹn
    </div>
  </div>
  <div class="step-block">
    <span class="step-num">2</span>
    <div>
      <strong>Đi hẹn tại trung tâm OFII</strong> với : hộ chiếu, visa VLS-TS gốc, 1 ảnh thẻ, justificatif de domicile
    </div>
  </div>
  <div class="step-block">
    <span class="step-num">3</span>
    <div>
      <strong>Ký CIR</strong> (Contrat d'Intégration Républicaine) — bao gồm quyền học tiếng Pháp miễn phí 400 giờ và Visite médicale
    </div>
  </div>

  <div class="vi-art-warn">
    <strong>Nếu không làm OFII đúng hạn :</strong> Visa VLS-TS hết hiệu lực — bạn cần xin thẻ cư trú mới tại préfecture ngay lập tức và thủ tục trở nên phức tạp hơn nhiều. Đừng bỏ qua bước này.
  </div>

  <h2>Bước 2 — CPAM : đăng ký bảo hiểm y tế</h2>

  <p>Sau khi có tembré OFII trên visa (hoặc có thẻ cư trú), bạn có thể đăng ký Assurance Maladie tại CPAM.</p>

  <p><strong>Điều kiện :</strong> Có visa VLS-TS xác nhận OFII hoặc thẻ cư trú + đã ở Pháp ổn định (thường 3 tháng).</p>

  <p><strong>Giấy tờ cần nộp :</strong></p>
  <ul>
    <li>Hộ chiếu + visa VLS-TS xác nhận hoặc thẻ cư trú</li>
    <li>Acte de naissance (giấy khai sinh) + bản dịch công chứng sang tiếng Pháp</li>
    <li>Justificatif de domicile (hóa đơn điện, nước, hoặc hợp đồng thuê nhà)</li>
    <li>RIB (số tài khoản ngân hàng Pháp)</li>
  </ul>

  <p><strong>Đăng ký :</strong> Trực tuyến trên ameli.fr (tạo tài khoản) hoặc đến trực tiếp CPAM. Sau khi hồ sơ được chấp nhận, bạn nhận số Sécurité Sociale (NIR). Thẻ Carte Vitale vật lý đến sau 3–6 tháng.</p>

  <div class="vi-art-good">
    <strong>Trong lúc chờ Carte Vitale :</strong> Bạn nhận Attestation de droits — tài liệu PDF từ ameli.fr chứng minh bạn có bảo hiểm y tế. Mang theo khi đi khám bác sĩ.
  </div>

  <h2>Bước 3 — Médecin traitant : chọn bác sĩ gia đình</h2>

  <p>Ngay sau khi có số Sécurité Sociale, hãy chọn một <strong>médecin traitant</strong> (bác sĩ gia đình). Đây là bước nhiều người bỏ qua và sau đó hối hận.</p>

  <p>Tại sao quan trọng :</p>
  <ul>
    <li>Nếu không khai báo médecin traitant, tiền khám bác sĩ chuyên khoa chỉ được hoàn trả 30% thay vì 70%</li>
    <li>Médecin traitant là cầu nối để được chuyển đến bác sĩ chuyên khoa</li>
  </ul>

  <p>Cách chọn : tìm bác sĩ nhận bệnh nhân mới (médecin conventionné secteur 1) trên ameli.fr → Mục "Mon médecin traitant" → Khai báo tên bác sĩ bạn chọn.</p>

  <h2>Bước 4 — CAF : đăng ký trợ cấp nhà ở</h2>

  <p>CAF là cơ quan cấp trợ cấp nhà ở (APL/ALS) và trợ cấp gia đình. Đây là bước làm sau CPAM — vì CAF cần số Sécurité Sociale của bạn.</p>

  <p><strong>APL (Aide Personnalisée au Logement) :</strong> Nếu bạn thuê nhà tư nhân hoặc HLM, bạn có thể được APL — khoản trợ cấp trừ thẳng vào tiền thuê. Số tiền phụ thuộc vào thu nhập và tiền thuê.</p>

  <p><strong>Giấy tờ cần nộp cho CAF :</strong></p>
  <ul>
    <li>Thẻ cư trú hoặc visa VLS-TS</li>
    <li>Acte de naissance + bản dịch</li>
    <li>Acte de mariage + bản dịch (nếu đã kết hôn)</li>
    <li>Justificatif de domicile</li>
    <li>RIB</li>
    <li>Bail de location (hợp đồng thuê nhà) nếu xin APL</li>
    <li>Avis d'imposition du conjoint français (tờ khai thuế của chồng)</li>
  </ul>

  <p><strong>Đăng ký :</strong> Trực tuyến trên caf.fr. Tạo tài khoản → "Demande de prestation" → Chọn APL hoặc ALS → Nộp hồ sơ.</p>

  <div class="vi-art-tip">
    <strong>Thời gian xử lý :</strong> CAF thường mất 1–3 tháng để xử lý hồ sơ. APL được thanh toán hồi tố từ ngày nộp hồ sơ, không phải từ ngày được chấp nhận — nên đừng chờ đợi mà hãy nộp ngay khi đủ điều kiện.
  </div>

  <h2>Tóm tắt : thứ tự đúng</h2>

  <div class="step-block">
    <span class="step-num">1</span>
    <div><strong>OFII</strong> — trong 3 tháng đầu sau nhập cảnh</div>
  </div>
  <div class="step-block">
    <span class="step-num">2</span>
    <div><strong>Mở tài khoản ngân hàng Pháp</strong> (Fortuneo, Boursorama, ou agence locale) — cần RIB cho tất cả les démarches</div>
  </div>
  <div class="step-block">
    <span class="step-num">3</span>
    <div><strong>CPAM</strong> — đăng ký Assurance Maladie sau khi có OFII</div>
  </div>
  <div class="step-block">
    <span class="step-num">4</span>
    <div><strong>Médecin traitant</strong> — khai báo ngay sau khi có số Sécurité Sociale</div>
  </div>
  <div class="step-block">
    <span class="step-num">5</span>
    <div><strong>CAF</strong> — đăng ký APL/ALS sau khi có số Sécu và hợp đồng thuê nhà</div>
  </div>
  <div class="step-block">
    <span class="step-num">6</span>
    <div><strong>Préfecture</strong> — xin thẻ cư trú 1 năm trước khi visa VLS-TS hết hạn</div>
  </div>

  <div class="vi-art-nav">
    <div>
      <strong style="display:block;margin-bottom:0.3rem;font-size:0.85rem;color:var(--muted)">Bài trước</strong>
      <a href="cuoc-song-thuc-te-o-phap">← Cuộc sống thực tế ở Pháp</a>
    </div>
    <div>
      <strong style="display:block;margin-bottom:0.3rem;font-size:0.85rem;color:var(--muted)">Bài liên quan</strong>
      <a href="droits-femme-vietnamienne-france">Quyền lợi phụ nữ Việt Nam →</a>
    </div>
  </div>

</div>

<?php include '../footer.php'; ?>
