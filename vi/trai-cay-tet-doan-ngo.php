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
$page_faq = [];

$path_prefix = '../';
include '../_article-css.php';
include '../header.php';
?>

<!-- BROUILLON — bài viết đang được soạn -->
<div style="padding:4rem 2rem;text-align:center;color:#999">
  <p>🚧 Bài viết đang được soạn thảo</p>
</div>

<?php include '../_article-js.php'; ?>
<?php include '../footer.php'; ?>
