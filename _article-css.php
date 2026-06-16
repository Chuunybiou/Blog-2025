<?php
/*
 * Generates $page_extra_css for article pages.
 * Set before including this file:
 *   $article_color   = 'terracotta' | 'jade' | 'amber'
 *   $article_hero_bg = CSS hex/color for hero gradient endpoint (e.g. '#3a1a0a')
 *   $article_glow    = rgba color for hero radial glow (e.g. 'rgba(191,74,42,0.15)')
 *   $article_badge   = CSS background for badge (e.g. 'rgba(191,74,42,0.2)')
 *   $article_badge_c = CSS color for badge text (e.g. 'var(--terracotta-soft)')
 */

require_once __DIR__ . '/config/site.php';

// Auto-noindex: if this article is marked published=false in articles.json, block indexing
if (!isset($page_noindex)) {
    $_articles_data = json_decode(file_get_contents(__DIR__ . '/data/articles.json'), true);
    $_current_slug  = basename(rtrim($page_canonical ?? '', '/'));
    foreach ($_articles_data['articles'] ?? [] as $_a) {
        if (($_a['slug'] ?? '') === $_current_slug && ($_a['published'] ?? true) === false) {
            $page_noindex = true;
            break;
        }
    }
    unset($_articles_data, $_current_slug, $_a);
}

$_c  = $article_color   ?? 'terracotta';
$_bg = $article_hero_bg ?? '#3a1a0a';
$_gl = $article_glow    ?? 'rgba(191,74,42,0.15)';
$_bd = $article_badge   ?? 'rgba(191,74,42,0.2)';
$_bc = $article_badge_c ?? 'var(--terracotta-soft)';

// Auto-generate BreadcrumbList schema
$_cat_name  = $article_category      ?? 'Articles';
$_cat_url   = $article_category_url  ?? (SITE_URL . '/articles-capvietnam');
$_art_title = $page_title            ?? '';
$_art_url   = $page_canonical        ?? '';
$_breadcrumb_schema = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'BreadcrumbList',
  'itemListElement' => [
    ['@type' => 'ListItem', 'position' => 1, 'name' => 'Accueil', 'item' => SITE_URL],
    ['@type' => 'ListItem', 'position' => 2, 'name' => $_cat_name, 'item' => $_cat_url],
    ['@type' => 'ListItem', 'position' => 3, 'name' => $_art_title, 'item' => $_art_url],
  ]
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$page_extra_head = ($page_extra_head ?? '') .
  "\n<script type=\"application/ld+json\">{$_breadcrumb_schema}</script>";

// Optional FAQPage schema — set $page_faq = [['q'=>'...','a'=>'...'], ...] before include
if (!empty($page_faq) && is_array($page_faq)) {
  $_faq_items = array_map(fn($i) => [
    '@type'          => 'Question',
    'name'           => $i['q'],
    'acceptedAnswer' => ['@type' => 'Answer', 'text' => $i['a']],
  ], $page_faq);
  $_faq_schema = json_encode([
    '@context'   => 'https://schema.org',
    '@type'      => 'FAQPage',
    'mainEntity' => $_faq_items,
  ], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
  $page_extra_head .= "\n<script type=\"application/ld+json\">{$_faq_schema}</script>";
  unset($_faq_items, $_faq_schema);
}

$page_extra_css = "
.progress-bar{position:fixed;top:64px;left:0;height:3px;z-index:999;background:var(--{$_c});width:0%;transition:width 0.1s}
.article-hero{padding-top:64px;background:linear-gradient(165deg,#1c1917 0%,#2d2319 50%,{$_bg} 100%);position:relative;overflow:hidden}
.article-hero::before{content:\"\";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,{$_gl},transparent 60%)}
.article-hero-inner{max-width:800px;margin:0 auto;padding:5rem 2rem 4rem;position:relative;z-index:1}
.breadcrumb{display:flex;align-items:center;gap:0.5rem;font-size:0.8rem;color:rgba(250,248,244,0.4);margin-bottom:2rem}
.breadcrumb a{color:rgba(250,248,244,0.5);text-decoration:none;transition:color 0.2s}.breadcrumb a:hover{color:var(--cream)}
.breadcrumb-sep{font-size:0.7rem}
.article-badge-hero{display:inline-block;font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:5px 14px;border-radius:3px;margin-bottom:1.5rem;background:{$_bd};color:{$_bc}}
.article-hero h1{font-family:\"DM Serif Display\",serif;font-size:clamp(2rem,5vw,3.2rem);color:var(--cream);line-height:1.2;margin-bottom:1.5rem}
.article-hero-meta{display:flex;align-items:center;gap:1.5rem;flex-wrap:wrap;font-size:0.88rem;color:rgba(250,248,244,0.45)}
.article-hero-meta strong{color:rgba(250,248,244,0.7)}
.article-layout{max-width:1200px;margin:0 auto;padding:3rem 2rem;display:grid;grid-template-columns:240px 1fr;gap:4rem}
.toc{position:sticky;top:90px;align-self:start}
.toc-label{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;color:var(--muted);font-weight:600;margin-bottom:1rem}
.toc-list{list-style:none}.toc-list li{margin-bottom:0.4rem}
.toc-list a{text-decoration:none;font-size:0.85rem;color:var(--muted);display:block;padding:4px 0 4px 12px;border-left:2px solid transparent;transition:all 0.2s}
.toc-list a:hover,.toc-list a.active{color:var(--{$_c});border-left-color:var(--{$_c})}
.toc-share{margin-top:2.5rem}.toc-share-label{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;color:var(--muted);font-weight:600;margin-bottom:0.75rem}
.share-btns{display:flex;gap:0.5rem}
.share-btn{width:38px;height:38px;border-radius:50%;border:1px solid var(--border);background:var(--white);display:flex;align-items:center;justify-content:center;font-size:0.9rem;transition:all 0.2s;cursor:pointer}
.share-btn:hover{background:var(--warm-bg)}
.article-content{max-width:720px}
.article-content>p{font-size:1.05rem;color:#3a3530;margin-bottom:1.5rem}
.article-content h2{font-family:\"DM Serif Display\",serif;font-size:1.8rem;margin:3rem 0 1rem;line-height:1.25;padding-top:1rem}
.article-content h3{font-family:\"DM Serif Display\",serif;font-size:1.3rem;margin:2rem 0 0.75rem;line-height:1.3}
.article-content a{color:var(--{$_c});text-decoration:underline;text-underline-offset:3px}
.article-content ul,.article-content ol{padding-left:1.5rem;margin-bottom:1.5rem}
.article-content li{margin-bottom:0.5rem;font-size:1.02rem;color:#3a3530}
.article-content strong{color:var(--ink)}
.info-box{background:var(--warm-bg);border-left:4px solid var(--{$_c});padding:1.25rem 1.5rem;border-radius:0 var(--radius) var(--radius) 0;margin:2rem 0;font-size:0.95rem}
.info-box strong{display:block;margin-bottom:0.3rem}
.tip-box{background:rgba(27,107,82,0.06);border-left:4px solid var(--jade);padding:1.25rem 1.5rem;border-radius:0 var(--radius) var(--radius) 0;margin:2rem 0;font-size:0.95rem}
.tip-box strong{display:block;margin-bottom:0.3rem;color:var(--jade)}
.warning-box{background:rgba(184,134,11,0.06);border-left:4px solid var(--amber);padding:1.25rem 1.5rem;border-radius:0 var(--radius) var(--radius) 0;margin:2rem 0;font-size:0.95rem}
.warning-box strong{display:block;margin-bottom:0.3rem;color:var(--amber)}
.table-wrap{overflow-x:auto;-webkit-overflow-scrolling:touch;margin:2rem 0;border-radius:var(--radius);box-shadow:var(--shadow-sm)}
.comparison-table{width:100%;border-collapse:collapse;font-size:0.9rem;background:var(--white);border-radius:var(--radius);overflow:hidden;min-width:420px}
.table-wrap .comparison-table{margin:0;box-shadow:none;border-radius:0}
.comparison-table thead{background:var(--ink);color:var(--cream)}
.comparison-table thead th{position:sticky;top:0;z-index:1}
.comparison-table th{text-align:left;padding:0.9rem 1.2rem;font-size:0.75rem;text-transform:uppercase;letter-spacing:1px;font-weight:600}
.comparison-table td{padding:0.8rem 1.2rem;border-bottom:1px solid var(--border);color:#3a3530}
.comparison-table tbody tr:nth-child(even){background:rgba(0,0,0,0.025)}
.comparison-table tbody tr:last-child td{border-bottom:none}
.comparison-table tbody tr:hover{background:var(--warm-bg)}
.comparison-table td:first-child{font-weight:500;color:var(--ink)}
@media(max-width:640px){.comparison-table{font-size:0.82rem}.comparison-table th,.comparison-table td{padding:0.65rem 0.9rem}}
.article-img,.article-photo{width:100%;aspect-ratio:16/9;border-radius:var(--radius);margin:2rem 0;object-fit:cover;display:flex;align-items:center;justify-content:center;font-size:3rem;color:var(--muted);background:linear-gradient(135deg,var(--warm-bg),var(--border))}
.faq-item{border:1px solid var(--border);border-radius:var(--radius);margin-bottom:0.75rem;overflow:hidden;background:var(--white)}
.faq-question{width:100%;padding:1rem 1.25rem;background:none;border:none;text-align:left;font-family:inherit;font-size:1rem;font-weight:600;cursor:pointer;display:flex;justify-content:space-between;align-items:center;transition:background 0.2s}
.faq-question:hover{background:var(--warm-bg)}
.faq-arrow{transition:transform 0.3s;font-size:0.8rem;color:var(--muted)}
.faq-item.open .faq-arrow{transform:rotate(180deg)}
.faq-answer{max-height:0;overflow:hidden;transition:max-height 0.3s ease,padding 0.3s;padding:0 1.25rem;font-size:0.95rem;color:var(--muted);line-height:1.8}
.faq-item.open .faq-answer{max-height:400px;padding:0 1.25rem 1.25rem}
.author-box{display:flex;gap:1.5rem;align-items:flex-start;background:var(--white);padding:2rem;border-radius:var(--radius);box-shadow:var(--shadow-sm);margin:3rem 0}
.author-avatar{width:72px;height:72px;border-radius:50%;flex-shrink:0;background:linear-gradient(135deg,var(--{$_c}),var(--jade));display:flex;align-items:center;justify-content:center;font-size:1.8rem}
.author-info h4{font-family:\"DM Serif Display\",serif;font-size:1.1rem;margin-bottom:0.3rem}
.author-info p{color:var(--muted);font-size:0.9rem;margin-bottom:0.5rem}
.author-links{display:flex;gap:0.75rem}.author-links a{font-size:0.8rem;color:var(--{$_c});text-decoration:none;font-weight:600;transition:0.2s}
.article-nav{display:grid;grid-template-columns:1fr 1fr;gap:1.5rem;margin:3rem 0;padding-top:3rem;border-top:1px solid var(--border)}
.article-nav-item{padding:1.5rem;background:var(--white);border-radius:var(--radius);text-decoration:none;color:inherit;box-shadow:var(--shadow-sm);transition:transform 0.2s,box-shadow 0.2s}
.article-nav-item:hover{transform:translateY(-3px);box-shadow:var(--shadow-md)}
.article-nav-label{font-size:0.7rem;letter-spacing:2px;text-transform:uppercase;color:var(--muted);margin-bottom:0.4rem;font-weight:600}
.article-nav-item h4{font-family:\"DM Serif Display\",serif;font-size:1.05rem;line-height:1.3}.nav-next{text-align:right}
.related-section{background:var(--warm-bg);padding:5rem 2rem}
.related-inner{max-width:1200px;margin:0 auto}
.related-label{font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;color:var(--muted);margin-bottom:0.5rem}
.related-title{font-family:\"DM Serif Display\",serif;font-size:2rem;margin-bottom:2rem}
.related-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.related-card{background:var(--white);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-sm);text-decoration:none;color:inherit;transition:transform 0.3s,box-shadow 0.3s}
.related-card:hover{transform:translateY(-5px);box-shadow:var(--shadow-lg)}
.related-card-banner{height:140px;display:flex;align-items:center;justify-content:center;font-size:2.5rem}
.related-card-body{padding:1.5rem}.related-card-badge{font-size:0.6rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;margin-bottom:0.5rem}
.related-card h3{font-family:\"DM Serif Display\",serif;font-size:1.1rem;line-height:1.3;margin-bottom:0.5rem}.related-card p{font-size:0.85rem;color:var(--muted)}
.bg-couple{background:linear-gradient(135deg,var(--jade),#0e4a38)}
.bg-mariage{background:linear-gradient(135deg,#7b3f72,#3d1a3a)}
.bg-vivre-ensemble{background:linear-gradient(135deg,var(--terracotta),#8b2f14)}
.bg-argent{background:linear-gradient(135deg,var(--amber),#7a5500)}
.bg-vie-pratique{background:linear-gradient(135deg,#2a7a7a,#0d4040)}
.text-couple{color:var(--jade)}.text-mariage{color:#7b3f72}.text-vivre-ensemble{color:var(--terracotta)}.text-argent{color:var(--amber)}.text-vie-pratique{color:#2a7a7a}
.cta-newsletter{background:var(--ink);color:var(--cream);text-align:center;padding:4rem 2rem;margin:3rem 0;border-radius:var(--radius)}
.cta-newsletter h3{font-family:\"DM Serif Display\",serif;font-size:1.6rem;margin-bottom:0.5rem}
.cta-newsletter p{color:rgba(250,248,244,0.5);margin-bottom:1.5rem}
.cta-form{display:flex;gap:0.75rem;max-width:440px;margin:0 auto}
.cta-form input{flex:1;padding:0.8rem 1rem;border:1px solid rgba(255,255,255,0.15);background:rgba(255,255,255,0.05);border-radius:4px;color:var(--cream);font-family:inherit;font-size:0.95rem}
.cta-form input::placeholder{color:rgba(250,248,244,0.3)}
.cta-form button{padding:0.8rem 1.8rem;background:var(--{$_c});color:#fff;border:none;border-radius:4px;font-weight:600;font-family:inherit;cursor:pointer}
.cta-rgpd{font-size:0.75rem;color:rgba(250,248,244,0.3);margin-top:0.75rem}.cta-rgpd a{color:rgba(250,248,244,0.45)}
.comments-section{margin:3rem 0;padding:2.5rem;background:var(--white);border-radius:var(--radius);box-shadow:var(--shadow-sm)}
.comments-section h3{font-family:\"DM Serif Display\",serif;font-size:1.4rem;margin-bottom:0.5rem}
.comments-section p{color:var(--muted);font-size:0.95rem;margin-bottom:1.5rem}
.comment-form-row{display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin-bottom:1rem}
.comment-input{width:100%;padding:0.75rem 1rem;border:1px solid var(--border);border-radius:4px;font-family:inherit;font-size:0.95rem;background:var(--cream)}
.comment-input:focus{outline:none;border-color:var(--jade)}
textarea.comment-input{min-height:120px;resize:vertical}
.comment-consent{display:flex;align-items:flex-start;gap:0.6rem;font-size:0.82rem;color:var(--muted);margin:1rem 0}
.comment-consent input{margin-top:3px;accent-color:var(--jade)}
.comment-submit{padding:0.8rem 2rem;background:var(--jade);color:#fff;border:none;border-radius:4px;font-weight:600;font-family:inherit;cursor:pointer}
@media(max-width:900px){.article-layout{grid-template-columns:1fr}.toc{position:static;background:var(--white);padding:1.5rem;border-radius:var(--radius);box-shadow:var(--shadow-sm);margin-bottom:2rem}.related-grid{grid-template-columns:1fr}.article-nav{grid-template-columns:1fr}}
@media(max-width:640px){.author-box{flex-direction:column;text-align:center;align-items:center}.comment-form-row{grid-template-columns:1fr}.cta-form{flex-direction:column}}
.aff-cta{display:flex;gap:1.25rem;align-items:flex-start;border-radius:var(--radius);padding:1.75rem 2rem;margin:2.5rem 0;box-shadow:var(--shadow-sm)}
.aff-cta--green{background:linear-gradient(135deg,rgba(27,107,82,0.07),rgba(27,107,82,0.03));border:1px solid rgba(27,107,82,0.18)}
.aff-cta--blue{background:linear-gradient(135deg,rgba(26,95,138,0.07),rgba(26,95,138,0.03));border:1px solid rgba(26,95,138,0.18)}
.aff-cta__icon{font-size:2rem;line-height:1;flex-shrink:0;padding-top:2px}
.aff-cta__body{flex:1}
.aff-cta__title{font-family:\"DM Serif Display\",serif;font-size:1.15rem;font-weight:700;color:var(--ink);margin-bottom:0.4rem}
.aff-cta__text{font-size:0.92rem;color:var(--muted);margin-bottom:1rem;line-height:1.6}
.aff-cta__btn{display:inline-block;padding:0.65rem 1.4rem;border-radius:4px;font-weight:600;font-size:0.9rem;text-decoration:none;transition:opacity 0.2s}
.aff-cta--green .aff-cta__btn{background:var(--jade);color:#fff}
.aff-cta--blue .aff-cta__btn{background:#1a5f8a;color:#fff}
.aff-cta__btn:hover{opacity:0.88}
.aff-cta__note{font-size:0.75rem;color:var(--muted);margin-top:0.6rem;font-style:italic}
@media(max-width:640px){.aff-cta{flex-direction:column}.aff-cta__icon{font-size:1.6rem}}
.community-cta{background:linear-gradient(135deg,#1a1f3a 0%,#1e2a1a 100%);border-radius:var(--radius);padding:2rem 2.5rem;margin:3rem 0;color:var(--cream)}
.community-cta h3{font-family:\"DM Serif Display\",serif;font-size:1.3rem;margin-bottom:0.4rem;color:var(--cream)}
.community-cta>p{color:rgba(250,248,244,0.55);font-size:0.95rem;margin-bottom:1.5rem}
.community-cta-btns{display:flex;gap:1rem;flex-wrap:wrap}
.community-btn{display:inline-flex;align-items:center;gap:0.6rem;padding:0.7rem 1.4rem;border-radius:6px;font-weight:600;font-size:0.9rem;text-decoration:none;transition:opacity 0.2s,transform 0.2s}
.community-btn:hover{opacity:0.88;transform:translateY(-1px)}
.community-btn--fb{background:#1877f2;color:#fff}
.community-btn--discord{background:#5865f2;color:#fff}
.community-btn svg{flex-shrink:0}
@media(max-width:600px){.community-cta-btns{flex-direction:column}}
";
?>
