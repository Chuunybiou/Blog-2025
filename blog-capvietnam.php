<?php
require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/config/taxonomy.php';

$page_lang_switch = ['href' => 'vi/', 'label' => '🇻🇳 Tiếng Việt', 'title' => 'Phiên bản tiếng Việt'];
$page_hreflang    = ['fr' => SITE_URL . '/', 'vi' => SITE_URL . '/vi/', 'x-default' => SITE_URL . '/'];

// ─── Données articles pour la page d'accueil ────────────────────────────────
$_art_data      = json_decode(file_get_contents(__DIR__ . '/data/articles.json'), true);
$_art_all       = $_art_data['articles'];
$_art_published = array_values(array_filter($_art_all, fn($a) => ($a['published'] ?? true) !== false));
$_art_count     = count($_art_published);
usort($_art_published, fn($a, $b) => strtotime($b['date'] ?? '2000-01-01') <=> strtotime($a['date'] ?? '2000-01-01'));

// Nombre d'articles publiés par catégorie (même logique que articles-capvietnam.php)
$_cat_counts = [];
foreach (array_keys(TAXONOMY) as $_cat_key) {
    $_cat_counts[$_cat_key] = count(array_filter($_art_published, fn($a) => ($a['category'] ?? '') === $_cat_key || in_array($_cat_key, $a['tags'] ?? [])));
}

// 1 article le plus récent par catégorie (pour "Récemment publié") — 100% automatique,
// aucune catégorie codée en dur : une nouvelle catégorie avec des articles publiés
// apparaît toute seule, une catégorie encore sans article publié n'apparaît pas ici.
$_art_latest       = [];
$_art_latest_slugs = [];
foreach (array_keys(TAXONOMY) as $_cat_key) {
    foreach ($_art_published as $_a) {
        if (($_a['home'] ?? true) === false) continue;
        if (($_a['category'] ?? '') === $_cat_key) {
            $_art_latest[]       = $_a;
            $_art_latest_slugs[] = $_a['slug'];
            break;
        }
    }
}

// 2 articles publiés les plus récents non déjà affichés ci-dessus ("Ce qui a changé récemment")
$_art_recent_log = [];
foreach ($_art_published as $_a) {
    if (in_array($_a['slug'], $_art_latest_slugs, true)) continue;
    $_art_recent_log[] = $_a;
    if (count($_art_recent_log) >= 2) break;
}

// Le prochain article programmé (data/publish-schedule.json), pour la puce "À venir" — 100% réel
$_fr_months = [1=>'janv.',2=>'févr.',3=>'mars',4=>'avr.',5=>'mai',6=>'juin',7=>'juil.',8=>'août',9=>'sept.',10=>'oct.',11=>'nov.',12=>'déc.'];
$_next_upcoming = null;
$_schedule = json_decode(file_get_contents(__DIR__ . '/data/publish-schedule.json'), true)['schedule'] ?? [];
if ($_schedule) {
    $_next_slug = $_schedule[0]['slug'];
    $_next_ts   = strtotime($_schedule[0]['publish_on']);
    foreach ($_art_all as $_a) {
        if ($_a['slug'] === $_next_slug) {
            $_next_upcoming = $_a;
            $_next_upcoming['dateLabel'] = date('j', $_next_ts) . ' ' . $_fr_months[(int)date('n', $_next_ts)] . ' ' . date('Y', $_next_ts);
            break;
        }
    }
}

$page_title       = 'Le blog du couple franco-vietnamien — Cap Vietnam';
$page_description = 'Le blog d\'un Français en couple avec une Vietnamienne. Démarches mariage, comptes joints, budget couple mixte, vie entre Paris et Hanoï.';
$page_canonical   = SITE_URL . '/';
$page_og_title    = 'Cap Vietnam — Le blog du couple franco-vietnamien';
$page_og_desc     = 'Mariage, démarches, argent et vie quotidienne entre la France et le Vietnam — par un Français en couple avec une Vietnamienne.';
$page_og_url      = SITE_URL . '/';
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';
$page_extra_head  = '<link rel="preload" as="image" href="/assets/img/chapeau-conique-barque-phong-nha.webp" type="image/webp" fetchpriority="high">';
$page_schema      = json_encode([
  '@context' => 'https://schema.org',
  '@graph'   => [
    [
      '@type'       => 'WebSite',
      '@id'         => SITE_URL . '/#website',
      'name'        => SITE_NAME,
      'url'         => SITE_URL . '/',
      'inLanguage'  => 'fr',
      'description' => 'Le blog d\'un Français en couple avec une Vietnamienne. Démarches mariage, comptes joints, budget couple mixte, vie entre Paris et Hanoï.',
      'author'      => ['@id' => SITE_URL . '/#author'],
    ],
    [
      '@type'    => 'Blog',
      '@id'      => SITE_URL . '/#blog',
      'name'     => SITE_NAME,
      'url'      => SITE_URL . '/',
      'isPartOf' => ['@id' => SITE_URL . '/#website'],
      'inLanguage' => 'fr',
      'author'   => ['@id' => SITE_URL . '/#author'],
    ],
    [
      '@type'    => 'Person',
      '@id'      => SITE_URL . '/#author',
      'name'     => SITE_AUTHOR,
      'url'      => SITE_URL . '/a-propos-capvietnam',
      'jobTitle' => 'Expatrié français au Vietnam, auteur & créateur de contenu',
      'sameAs'   => [
        SITE_TIKTOK,
        'https://www.amazon.fr/stores/Anthony-Bouillon/author/B0CY93X8H5',
      ],
    ],
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
$page_extra_css = '
/* ═══════════ HOME V2 — carnet papier, scopé pour ne pas toucher le reste du site ═══════════ */
.home-v2{
  --paper:#FBF6EC;
  --paper-deep:#F3EBDB;
  --ink2:#23281F;
  --ink-soft2:#5A5F53;
  --hanoi:#DE9E28;
  --shutter:#2E5641;
  --shutter-deep:#1F3D2E;
  --tampon:#A6392B;
  --line2:#E2D8C2;
  --radius2:14px;
  --font-display2:\'Young Serif\',Georgia,serif;
  --font-body2:\'Instrument Sans\',system-ui,sans-serif;
  --font-mono2:\'IBM Plex Mono\',ui-monospace,monospace;
  font-family:var(--font-body2);
  background:var(--paper);
  color:var(--ink2);
  line-height:1.65;
  font-size:17px;
  -webkit-font-smoothing:antialiased;
}
.home-v2 img{max-width:100%;display:block}
.home-v2 a{color:inherit}
.home-v2 .wrap{max-width:1120px;margin:0 auto;padding:0 24px}
.home-v2 .wrap-narrow{max-width:760px;margin:0 auto;padding:0 24px}
.home-v2 .eyebrow{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--shutter);display:inline-flex;align-items:center;gap:.6em}
.home-v2 .eyebrow::before{content:"";width:26px;height:2px;background:var(--hanoi)}
.home-v2 .eyebrow.gold{color:var(--hanoi)}
.home-v2 .eyebrow.gold::before{background:var(--hanoi)}
.home-v2 .eyebrow.light{color:var(--hanoi)}
.home-v2 .eyebrow.light::before{background:var(--hanoi)}
.home-v2 h1,.home-v2 h2,.home-v2 h3,.home-v2 h4{font-family:var(--font-display2);font-weight:400;line-height:1.15}
.home-v2 h2{font-size:clamp(1.7rem,3.4vw,2.3rem);margin:.5rem 0 .9rem}
.home-v2 .section{padding:80px 0;max-width:none;margin:0}
.home-v2 .section-head{max-width:640px;margin-bottom:40px}
.home-v2 .section-head p{color:var(--ink-soft2)}
.home-v2 .mono{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.1em;text-transform:uppercase;color:var(--ink-soft2)}

.home-v2 .btn{display:inline-flex;align-items:center;gap:.5em;font-family:var(--font-body2);font-weight:600;font-size:.95rem;padding:.85em 1.5em;border-radius:999px;text-decoration:none;border:1.5px solid var(--ink2);transition:transform .15s ease,box-shadow .15s ease,background .15s ease;cursor:pointer}
.home-v2 .btn-primary{background:var(--ink2);color:var(--paper)}
.home-v2 .btn-primary:hover{background:var(--shutter-deep);border-color:var(--shutter-deep);transform:translateY(-2px);box-shadow:0 8px 20px rgba(35,40,31,.18)}
.home-v2 .btn-ghost{background:transparent;color:var(--ink2)}
.home-v2 .btn-ghost:hover{background:var(--paper-deep)}
.home-v2 .btn-ghost.light{border-color:rgba(251,246,236,.4);color:var(--paper)}
.home-v2 .btn-ghost.light:hover{background:rgba(251,246,236,.14)}
.home-v2 .btn-hanoi{background:var(--hanoi);border-color:var(--hanoi);color:var(--ink2)}
.home-v2 .btn-hanoi:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(222,158,40,.35)}

.home-v2 .stamp{border:2.5px solid var(--tampon);color:var(--tampon);border-radius:10px;padding:.55em .9em;background:rgba(251,246,236,.9);font-family:var(--font-mono2);font-size:.68rem;font-weight:500;letter-spacing:.16em;text-transform:uppercase;text-align:center;line-height:1.5;box-shadow:0 4px 14px rgba(166,57,43,.18)}
.home-v2 .stamp b{display:block;font-size:.84rem;font-weight:500}
.home-v2 .stamp.big{transform:rotate(7deg);font-size:.72rem}
.home-v2 .stamp.big b{font-size:.95rem}

.home-v2 .card{background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);overflow:hidden;text-decoration:none;display:flex;flex-direction:column;transition:transform .18s ease,box-shadow .18s ease,border-color .18s ease}
.home-v2 .card:hover{transform:translateY(-4px);box-shadow:0 16px 34px rgba(35,40,31,.12);border-color:var(--hanoi)}
.home-v2 .card-body{padding:22px 22px 24px;display:flex;flex-direction:column;gap:.55rem;flex:1}
.home-v2 .card-meta{font-family:var(--font-mono2);font-size:.66rem;letter-spacing:.1em;text-transform:uppercase;color:var(--shutter);display:flex;gap:1.1em;flex-wrap:wrap}
.home-v2 .card h3{font-size:1.08rem;line-height:1.32}
.home-v2 .card p{color:var(--ink-soft2);font-size:.9rem;flex:1}
.home-v2 .card .go{font-weight:600;font-size:.88rem;color:var(--shutter)}

/* --- hero plein écran --- */
.home-v2 .hero-full{position:relative;min-height:78vh;display:flex;align-items:flex-end;overflow:hidden}
.home-v2 .hero-bg{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center 60%}
.home-v2 .hero-shade{position:absolute;inset:0;background:linear-gradient(180deg,rgba(28,32,26,.25) 0%,rgba(28,32,26,.15) 40%,rgba(28,32,26,.78) 100%)}
.home-v2 .hero-inner{position:relative;padding-block:70px 74px;max-width:1120px;width:100%}
.home-v2 .hero-full h1{font-size:clamp(1.6rem,8vw,4rem);color:#fff;margin:.6rem 0 1rem;max-width:15em;text-shadow:0 2px 24px rgba(28,32,26,.45)}
.home-v2 .hero-full h1 em{font-style:italic;color:var(--hanoi)}
.home-v2 .hero-full .lede{font-size:1.12rem;color:rgba(251,246,236,.92);max-width:36em;margin-bottom:1rem;text-shadow:0 1px 12px rgba(28,32,26,.5)}
/* --- bandeau annonce, épinglé au-dessus du nav (page d\'accueil uniquement) --- */
#nav{top:40px}
.home-v2 .alertbar{position:fixed;top:0;left:0;right:0;z-index:1001;height:40px;background:#23281F;display:flex;align-items:center;overflow:hidden;text-decoration:none;color:inherit;cursor:pointer}
.home-v2 .alertbar:hover{background:#2c3227}
.home-v2 .alertbar-inner{max-width:1120px;margin:0 auto;padding:0 24px;display:flex;align-items:center;gap:12px;width:100%;min-width:0}
.home-v2 .alertbar p{margin:0;font-size:.8rem;color:rgba(251,246,236,.85);font-family:var(--font-body2);overflow:hidden;text-overflow:ellipsis;white-space:nowrap;min-width:0;flex:1}
.home-v2 .alertbar-short{display:none}
.home-v2 .alertbar-cta{color:var(--hanoi);font-weight:600;white-space:nowrap}
nav{top:40px !important}
.home-v2 .hero-full{padding-top:104px}
@media(max-width:640px){
  .home-v2 .alertbar-full{display:none}
  .home-v2 .alertbar-short{display:inline}
}
.home-v2 .alert-tag{flex:none;font-family:var(--font-mono2);font-size:.6rem;letter-spacing:.12em;text-transform:uppercase;color:var(--hanoi);border:1px solid var(--hanoi);border-radius:6px;padding:.2em .6em}
@media(max-width:640px){.home-v2 .alert-tag{display:none}}
.home-v2 .hero-ctas{display:flex;gap:14px;flex-wrap:wrap}
.home-v2 .hero-stamp{position:absolute;top:96px;right:5%;transform:rotate(8deg);z-index:2}
.home-v2 .hero-caption{position:absolute;bottom:14px;right:20px;color:rgba(251,246,236,.55);font-size:.6rem!important;z-index:2}

/* --- ligne de vie --- */
.home-v2 .journey-zone{background:linear-gradient(180deg,var(--paper-deep),var(--paper));padding:56px 0 64px}
.home-v2 .journey-label{margin-bottom:22px;color:var(--tampon)}
.home-v2 .journey-line{display:flex;align-items:flex-start;gap:0;position:relative;padding:0 6px}
.home-v2 .journey-line::before{content:"";position:absolute;left:34px;right:34px;top:11px;border-top:2px dashed var(--line2)}
.home-v2 .terminus{font-family:var(--font-mono2);font-size:.7rem;font-weight:500;letter-spacing:.08em;color:var(--paper);background:var(--shutter-deep);border-radius:6px;padding:.35em .6em;position:relative;z-index:1;flex:none;margin-top:-4px}
.home-v2 .station{flex:1;background:none;border:0;cursor:pointer;display:flex;flex-direction:column;align-items:center;gap:10px;position:relative;z-index:1;font-family:var(--font-body2);padding:0}
.home-v2 .station i{width:24px;height:24px;border-radius:50%;background:var(--paper);border:3px solid var(--shutter);display:block;transition:transform .18s ease,background .18s ease,border-color .18s ease}
.home-v2 .station span{font-size:.86rem;font-weight:600;color:var(--ink-soft2);line-height:1.25;text-align:center;transition:color .15s}
.home-v2 .station:hover i{transform:scale(1.2)}
.home-v2 .station:hover span{color:var(--ink2)}
.home-v2 .station[aria-selected="true"] i{background:var(--hanoi);border-color:var(--hanoi);transform:scale(1.3);box-shadow:0 0 0 6px rgba(222,158,40,.22)}
.home-v2 .station[aria-selected="true"] span{color:var(--ink2)}
.home-v2 .journey-panels .journey-panel{margin-top:34px;background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);padding:34px 38px;box-shadow:0 18px 44px rgba(35,40,31,.08)}
.home-v2 .journey-panels .journey-panel[hidden]{display:none}
.home-v2 .jp-head{display:flex;justify-content:space-between;align-items:baseline;gap:20px;flex-wrap:wrap;margin-bottom:.6rem}
.home-v2 .jp-head h2{margin:0;font-size:clamp(1.4rem,2.6vw,1.8rem)}
.home-v2 .jp-head .mono{color:var(--tampon)}
.home-v2 .jp-cols{display:grid;grid-template-columns:1.2fr .8fr;gap:32px;align-items:stretch}
.home-v2 .jp-links ul{list-style:none;border-top:2px dashed var(--line2);margin-bottom:6px}
.home-v2 .jp-links li{border-bottom:2px dashed var(--line2)}
.home-v2 .jp-links a{display:block;padding:.7em 4px;text-decoration:none;font-weight:600;font-size:.93rem;transition:padding-left .18s ease,color .15s}
.home-v2 .jp-links a::before{content:"→ ";color:var(--hanoi)}
.home-v2 .jp-links a:hover{padding-left:14px;color:var(--shutter)}
.home-v2 .branch{color:var(--tampon)!important;margin:14px 0 6px;font-size:.68rem!important}
.home-v2 .branch:first-child{margin-top:0}
.home-v2 .jp-tool{background:var(--shutter-deep);color:var(--paper);border-radius:var(--radius2);padding:24px;text-decoration:none;display:flex;flex-direction:column;gap:.6rem;justify-content:center;transition:transform .18s ease,box-shadow .18s ease}
.home-v2 .jp-tool:hover{transform:translateY(-3px);box-shadow:0 14px 30px rgba(31,61,46,.35)}
.home-v2 .jp-tool strong{font-family:var(--font-display2);font-weight:400;font-size:1.15rem;line-height:1.3}
.home-v2 .jp-tool-desc{font-size:.85rem;color:rgba(251,246,236,.7)}
.home-v2 .jp-tool .go{color:var(--hanoi);font-weight:600;font-size:.9rem}

/* --- bandeau chiffres --- */
.home-v2 .proofbar{background:var(--shutter-deep);color:var(--paper)}
.home-v2 .proofbar-inner{display:flex;justify-content:space-between;gap:26px;padding-block:24px;flex-wrap:wrap}
.home-v2 .proofbar strong{font-family:var(--font-display2);font-size:1.5rem;display:block;color:var(--hanoi)}
.home-v2 .proofbar span{font-family:var(--font-mono2);font-size:.68rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(251,246,236,.7)}

/* --- méthode --- */
.home-v2 .method-grid.six{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
.home-v2 .method{background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);padding:26px 24px}
.home-v2 .method h3{font-size:1.08rem;margin-bottom:.5rem;padding-bottom:.4rem;border-bottom:2px solid var(--hanoi);display:inline-block}
.home-v2 .method p{color:var(--ink-soft2);font-size:.88rem}

/* --- sections sombres --- */
.home-v2 .section.dark{background:var(--ink2);color:var(--paper)}
.home-v2 .section.dark h2{color:var(--paper)}
.home-v2 .section.dark .section-head p{color:rgba(251,246,236,.7)}

/* --- simulateurs --- */
.home-v2 .sim-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:18px}
.home-v2 .sim{background:rgba(251,246,236,.05);border:1px solid rgba(251,246,236,.16);border-radius:var(--radius2);padding:30px 28px;text-decoration:none;color:var(--paper);display:flex;flex-direction:column;gap:.6rem;transition:transform .18s ease,border-color .18s ease,background .18s ease}
.home-v2 .sim:hover{transform:translateY(-4px);border-color:var(--hanoi);background:rgba(251,246,236,.08)}
.home-v2 .sim-tag{font-family:var(--font-mono2);font-size:.64rem;letter-spacing:.14em;text-transform:uppercase;color:var(--hanoi);border:1px solid var(--hanoi);border-radius:6px;padding:.3em .7em;width:max-content;margin-bottom:.3rem}
.home-v2 .sim h3{font-size:1.25rem}
.home-v2 .sim p{color:rgba(251,246,236,.75);font-size:.93rem;flex:1}
.home-v2 .sim-meta{color:rgba(251,246,236,.65)!important;font-size:.64rem!important}

/* --- cartes catégories avec photos --- */
.home-v2 .catcards{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.home-v2 .catcard{background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);overflow:hidden;text-decoration:none;display:flex;flex-direction:column;transition:transform .18s ease,box-shadow .18s ease,border-color .18s ease}
.home-v2 a.catcard:hover{transform:translateY(-4px);box-shadow:0 16px 34px rgba(35,40,31,.12);border-color:var(--hanoi)}
.home-v2 .catcard img{height:300px;object-fit:cover;width:100%}
.home-v2 picture{display:block;width:100%}
.home-v2 .catcard-body{padding:20px 22px 22px}
.home-v2 .catcard h3{font-size:1.14rem;margin-bottom:.4rem;display:flex;align-items:baseline;gap:.6em}
.home-v2 .catcard h3 b{font-family:var(--font-mono2);font-weight:500;font-size:.72rem;color:var(--shutter)}
.home-v2 .catcard h3 b.soon{color:var(--tampon);text-transform:uppercase;letter-spacing:.06em}
.home-v2 .catcard p{color:var(--ink-soft2);font-size:.9rem}
.home-v2 .catcard.is-soon{border-style:dashed;justify-content:center;background:transparent;align-items:center;text-align:center;padding:20px}

/* --- bibliothèque --- */
.home-v2 .lib-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.home-v2 .section-foot{margin-top:34px;display:flex;gap:14px;justify-content:center;flex-wrap:wrap}

/* --- fraîchement publié --- */
.home-v2 .log{max-width:none;background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);overflow:hidden;list-style:none}
.home-v2 .log li{display:grid;grid-template-columns:210px 1fr;gap:42px;padding:26px 32px;border-bottom:1px solid var(--paper-deep);position:relative;transition:background .15s ease}
.home-v2 .log li:last-child{border-bottom:0}
.home-v2 .log li:hover{background:var(--paper)}
.home-v2 .log li::before{content:"";position:absolute;left:0;top:0;bottom:0;width:4px;background:var(--line2);transition:background .15s ease}
.home-v2 .log li:hover::before{background:var(--hanoi)}
.home-v2 .log-date{display:flex;flex-direction:column;gap:9px;align-items:flex-start;padding-top:2px;color:var(--shutter)}
.home-v2 .pill{font-family:var(--font-mono2);font-style:normal;font-size:.62rem;letter-spacing:.1em;text-transform:uppercase;border-radius:999px;padding:.35em .85em;width:max-content}
.home-v2 .pill-published{color:var(--ink2);background:var(--hanoi)}
.home-v2 .pill-upcoming{color:var(--tampon);background:transparent;border:1.5px solid var(--tampon)}
.home-v2 .log h3{font-size:1.16rem}
.home-v2 .log p{max-width:52em;color:var(--ink-soft2);font-size:.93rem}
.home-v2 .log a{color:var(--shutter);font-weight:600;text-decoration:none}
.home-v2 .log a:hover{text-decoration:underline}

/* --- bande photo --- */
.home-v2 .photoband{display:grid;grid-template-columns:repeat(4,1fr);gap:14px;max-width:1120px;margin:0 auto 80px;padding:0 24px}
.home-v2 .photoband figure{position:relative;border-radius:var(--radius2);overflow:hidden}
.home-v2 .photoband img{aspect-ratio:4/3;object-fit:cover;width:100%;transition:transform .3s ease}
.home-v2 .photoband figure:hover img{transform:scale(1.04)}
.home-v2 .photoband figcaption{position:absolute;bottom:0;left:0;right:0;padding:22px 12px 9px;background:linear-gradient(transparent,rgba(35,40,31,.75));color:rgba(251,246,236,.9);font-size:.6rem}

/* --- section vietnamienne --- */
.home-v2 .vi-grid{display:grid;grid-template-columns:1.2fr .8fr;gap:52px;align-items:center}
.home-v2 .vi-grid>div>p{color:rgba(251,246,236,.75)}
.home-v2 .vi-card{border:2px dashed rgba(222,158,40,.5);border-radius:var(--radius2);padding:32px;background:rgba(222,158,40,.06)}
.home-v2 .vi-card h3{color:var(--paper);font-size:1.35rem;margin:.5rem 0 .6rem}
.home-v2 .vi-card p{color:rgba(251,246,236,.75);font-size:.95rem}

/* --- communauté --- */
.home-v2 .comm-grid{display:grid;grid-template-columns:1fr 1fr;gap:52px;align-items:center}
.home-v2 .comm-quote{background:#fff;border:1px solid var(--line2);border-left:4px solid var(--hanoi);border-radius:var(--radius2);padding:30px 34px;margin-top:26px}
.home-v2 .comm-quote p{font-family:var(--font-display2);font-size:1.18rem;line-height:1.45;margin-bottom:1.1rem}
.home-v2 .comm-quote footer{display:flex;align-items:center;gap:12px;font-size:.9rem;color:var(--ink-soft2)}
.home-v2 .comm-quote img{width:42px;height:42px;border-radius:50%;object-fit:cover;border:2px solid var(--hanoi)}
.home-v2 .comm-quote a{color:var(--shutter)}
.home-v2 .comm-photo{position:relative}
.home-v2 .comm-photo img{border-radius:var(--radius2);box-shadow:0 22px 55px rgba(35,40,31,.18);width:100%;height:600px;object-fit:cover}
.home-v2 .comm-photo figcaption{margin-top:.7rem;font-size:.64rem}

/* --- pack --- */
.home-v2 .pack{background:var(--shutter-deep);color:var(--paper);border-radius:calc(var(--radius2) + 8px);padding:56px 52px;position:relative;overflow:hidden}
.home-v2 .pack::after{content:"CAP VIETNAM · DOSSIER COMPLET · CAP VIETNAM · DOSSIER COMPLET · ";position:absolute;bottom:14px;left:0;white-space:nowrap;font-family:var(--font-mono2);font-size:.66rem;letter-spacing:.3em;color:rgba(251,246,236,.14)}
.home-v2 .pack-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:46px;align-items:center;position:relative}
.home-v2 .pack h2{color:var(--paper)}
.home-v2 .pack ul{list-style:none;margin:1.1rem 0 0;display:grid;gap:.7rem}
.home-v2 .pack li{display:flex;gap:.7em;font-size:.95rem;color:rgba(251,246,236,.88)}
.home-v2 .pack li::before{content:"✓";color:var(--hanoi);font-weight:700}
.home-v2 .pack-form{background:rgba(251,246,236,.06);border:1px solid rgba(251,246,236,.2);border-radius:var(--radius2);padding:30px}
.home-v2 .pack-form label{font-family:var(--font-mono2);font-size:.7rem;letter-spacing:.12em;text-transform:uppercase;color:rgba(251,246,236,.7);display:block;margin-bottom:.6rem}
.home-v2 .pack-form input{width:100%;padding:.9em 1.1em;border-radius:10px;border:1px solid rgba(251,246,236,.3);background:rgba(251,246,236,.95);font-family:var(--font-body2);font-size:1rem;margin-bottom:14px}
.home-v2 .pack-form .btn{width:100%;justify-content:center}
.home-v2 .pack-form small{display:block;margin-top:12px;font-size:.78rem;color:rgba(251,246,236,.75);text-align:center}
.home-v2 .pack-form small a{color:rgba(251,246,236,.8)}

/* --- FAQ --- */
.home-v2 details{border:1px solid var(--line2);border-radius:var(--radius2);background:#fff;margin-bottom:12px;padding:0 20px}
.home-v2 summary{cursor:pointer;font-weight:600;padding:16px 0;list-style:none;position:relative;padding-right:30px;font-family:var(--font-body2);color:var(--ink2)}
.home-v2 summary::-webkit-details-marker{display:none}
.home-v2 summary::after{content:"+";position:absolute;right:2px;top:12px;font-family:var(--font-mono2);font-size:1.2rem;color:var(--hanoi)}
.home-v2 details[open] summary::after{content:"–"}
.home-v2 details p{padding-bottom:16px;color:var(--ink-soft2);font-size:.95rem}
.home-v2 details a{color:var(--shutter)}

/* --- responsive --- */
@media(max-width:960px){
  .home-v2 .hero-full{min-height:66vh}
  .home-v2 .hero-stamp{top:20px;right:16px}
  .home-v2 .method-grid.six,.home-v2 .sim-grid,.home-v2 .lib-grid,.home-v2 .catcards{grid-template-columns:1fr 1fr}
  .home-v2 .vi-grid,.home-v2 .comm-grid,.home-v2 .pack-grid{grid-template-columns:1fr;gap:32px}
  .home-v2 .jp-cols{grid-template-columns:1fr}
  .home-v2 .journey-line{flex-wrap:nowrap;overflow-x:auto;padding-bottom:6px}
  .home-v2 .station span{font-size:.76rem}
  .home-v2 .photoband{grid-template-columns:1fr 1fr}
}
@media(max-width:680px){
  .home-v2 .section{padding:60px 0}
}
@media(max-width:640px){
  .home-v2 .hero-full{min-height:80vh}
  .home-v2 .hero-inner{padding-block:48px 56px}
  .home-v2 .hero-caption{left:20px;right:auto}
  .home-v2 .method-grid.six,.home-v2 .sim-grid,.home-v2 .lib-grid,.home-v2 .catcards{grid-template-columns:1fr}
  .home-v2 .log li{grid-template-columns:1fr;gap:10px;padding:20px 22px}
  .home-v2 .log-date{flex-direction:row;align-items:center;gap:12px}
  .home-v2 .journey-panels .journey-panel{padding:24px 20px}
  .home-v2 .terminus{display:none}
  .home-v2 .journey-line::before{left:8px;right:8px}
  .home-v2 .pack{padding:38px 24px}
  .home-v2 .proofbar-inner{justify-content:flex-start;gap:22px}
}
';
include 'header.php';
?>

<div class="home-v2">

<!-- ═══════ BANDEAU ANNONCE (épinglé au-dessus du nav) ═══════ -->
<a class="alertbar" href="apostille-vietnam-francais-2026">
  <div class="alertbar-inner">
    <span class="alert-tag">Nouveau</span>
    <p><span class="alertbar-full">Apostille au Vietnam dès le 11 septembre 2026 : le Vietnam rejoint la Convention de La Haye — fin de la double légalisation consulaire.</span><span class="alertbar-short">Apostille au Vietnam dès le 11 septembre 2026</span> <span class="alertbar-cta">Ce qui change →</span></p>
  </div>
</a>

<!-- ═══════ HERO plein écran ═══════ -->
<header class="hero-full" id="home">
  <picture>
    <source srcset="assets/img/chapeau-conique-barque-phong-nha.webp" type="image/webp">
    <img class="hero-bg" src="assets/img/chapeau-conique-barque-phong-nha.jpg" width="1600" height="900" alt="Barque sur la rivière face au village de Phong Nha, Quảng Bình" loading="eager" fetchpriority="high">
  </picture>
  <div class="hero-shade" aria-hidden="true"></div>
  <div class="stamp big hero-stamp">Rien de touristique<b>100 % VÉCU</b>Québec → Hanoï</div>
  <div class="wrap hero-inner">
    <span class="eyebrow light">Le blog du couple franco-vietnamien</span>
    <h1>Le couple franco-vietnamien, <em>de l'intérieur</em>.</h1>
    <p class="lede">Se rencontrer, se marier, construire une vie entre la France et le Vietnam. Les démarches, l'argent, la belle-famille — par un Français marié à une Vietnamienne, pas par un guide touristique.</p>
    <div class="hero-ctas">
      <a class="btn btn-hanoi" href="par-ou-commencer-couple-franco-vietnamien">Par où commencer ? →</a>
      <a class="btn btn-ghost light" href="articles-capvietnam">Voir les <?= $_art_count ?> articles</a>
    </div>
  </div>
  <span class="hero-caption mono">PHONG NHA, QUẢNG BÌNH — PHOTO DU BLOG</span>
</header>

<!-- ═══════ LIGNE DE VIE (panneaux statiques, indexables) ═══════ -->
<section class="journey-zone">
  <div class="wrap">
    <div class="journey">
      <p class="journey-label mono">TOUTES LES ÉTAPES DANS L'ORDRE — DE LA RENCONTRE À LA RETRAITE. CLIQUE SUR LA TIENNE.</p>
      <div class="journey-line" role="tablist" aria-label="Les étapes du couple franco-vietnamien, dans l'ordre">
        <span class="terminus" aria-hidden="true">01</span>
        <button class="station" id="hv-st-0" role="tab" aria-selected="false" aria-controls="hv-panel-0" data-step="0"><i></i><span>Comprendre<br>&amp; se préparer</span></button>
        <button class="station" id="hv-st-1" role="tab" aria-selected="true" aria-controls="hv-panel-1" data-step="1"><i></i><span>Se marier</span></button>
        <button class="station" id="hv-st-2" role="tab" aria-selected="false" aria-controls="hv-panel-2" data-step="2"><i></i><span>Vivre ensemble —<br>choisir où s'installer</span></button>
        <button class="station" id="hv-st-3" role="tab" aria-selected="false" aria-controls="hv-panel-3" data-step="3"><i></i><span>Avoir<br>des enfants</span></button>
        <button class="station" id="hv-st-4" role="tab" aria-selected="false" aria-controls="hv-panel-4" data-step="4"><i></i><span>Long terme<br>&amp; retraite</span></button>
        <span class="terminus" aria-hidden="true">05</span>
      </div>

      <div class="journey-panels">

        <div class="journey-panel" id="hv-panel-0" role="tabpanel" aria-labelledby="hv-st-0" data-panel="0">
          <div class="jp-head"><h2>Comprendre et se préparer</h2><span class="mono">AVANT LE MARIAGE — LA RELATION, LA CULTURE, LA COMMUNICATION</span></div>
          <div class="jp-cols">
            <div class="jp-links"><ul>
              <li><a href="differences-culturelles-couple-franco-vietnamien">Différences culturelles franco-vietnamiennes — les vrais chocs à anticiper</a></li>
              <li><a href="belle-famille-vietnamienne-guide">Gérer la belle-famille vietnamienne — codes, attentes, trouver sa place</a></li>
              <li><a href="apprendre-vietnamien-couple">Apprendre le vietnamien en couple — méthodes et ressources</a></li>
              <li><a href="argent-couple-franco-vietnamien">Gérer l'argent en couple franco-vietnamien — compte joint, dépenses, famille</a></li>
            </ul></div>
            <a class="jp-tool" href="par-ou-commencer-couple-franco-vietnamien">
              <span class="mono" style="color:var(--hanoi)">HUB LIÉ</span>
              <strong>Par où commencer ?</strong>
              <span class="jp-tool-desc">De la rencontre à la vie installée — toutes les étapes classées, choisis ta branche France ou Vietnam.</span>
              <span class="go">Ouvrir →</span>
            </a>
          </div>
        </div>

        <div class="journey-panel" id="hv-panel-1" role="tabpanel" aria-labelledby="hv-st-1" data-panel="1">
          <div class="jp-head"><h2>Se marier</h2><span class="mono">CCAM, MARIAGE AU VIETNAM OU EN FRANCE, TRANSCRIPTION</span></div>
          <div class="jp-cols">
            <div class="jp-links"><ul>
              <li><a href="certificat-capacite-mariage-vietnam">Certificat de capacité à mariage (CCAM) — délais 4–6 semaines, gratuit</a></li>
              <li><a href="se-marier-vietnam-procedure-comite-populaire">Mariage au Vietnam — le déroulé au Comité populaire</a></li>
              <li><a href="se-marier-vietnamienne-demarches-france">Se marier en France avec un(e) Vietnamien(ne)</a></li>
              <li><a href="transcription-mariage-service-central-nantes">Transcription du mariage à Nantes (SCEC) — délais 6–12 mois</a></li>
              <li><a href="prix-mariage-franco-vietnamien">Coût d'un mariage franco-vietnamien — budget réel</a></li>
            </ul></div>
            <a class="jp-tool" href="retroplanning-faire-venir-conjoint">
              <span class="mono" style="color:var(--hanoi)">SIMULATEUR LIÉ</span>
              <strong>Rétroplanning — visa &amp; titre de séjour conjoint</strong>
              <span class="jp-tool-desc">Entre ta date de lancement CCAM, obtiens chaque échéance jusqu'à l'arrivée en France.</span>
              <span class="go">Ouvrir →</span>
            </a>
          </div>
        </div>

        <div class="journey-panel" id="hv-panel-2" role="tabpanel" aria-labelledby="hv-st-2" data-panel="2">
          <div class="jp-head"><h2>Vivre ensemble — choisir où s'installer</h2><span class="mono">VISA, TITRE DE SÉJOUR, LOGEMENT, BUDGET</span></div>
          <div class="jp-cols">
            <div class="jp-links">
              <p class="branch mono">→ Si vous vous installez au Vietnam</p>
              <ul>
                <li><a href="visa-vietnam-francais-guide-2026">Visa Vietnam pour Français — e-visa 90 jours, visa TT, conditions 2026</a></li>
                <li><a href="s-expatrier-vietnam-2026-guide-complet">S'expatrier au Vietnam — le guide complet</a></li>
                <li><a href="louer-appartement-hanoi-etranger">Louer un appartement à Hanoï — quartiers, prix, contrat, pièges</a></li>
              </ul>
              <p class="branch mono">→ Si vous vous installez en France</p>
              <ul>
                <li><a href="faire-venir-conjointe-vietnamienne-france">Faire venir son/sa conjoint(e) vietnamien(ne) — le guide complet</a></li>
                <li><a href="visa-long-sejour-conjoint-vietnamien-france">Visa long séjour conjoint (VLS-TS) — dossier, délais, entretien</a></li>
                <li><a href="titre-sejour-vie-privee-familiale-conjoint-vietnamien">Titre de séjour vie privée et familiale — dossier, préfecture, renouvellement</a></li>
              </ul>
            </div>
            <a class="jp-tool" href="simulateur-residence-vietnam">
              <span class="mono" style="color:var(--hanoi)">SIMULATEUR LIÉ</span>
              <strong>Rétroplanning — résidence et installation Vietnam</strong>
              <span class="jp-tool-desc">Entre ta date de départ, obtiens ton plan d'action personnalisé semaine par semaine.</span>
              <span class="go">Ouvrir →</span>
            </a>
          </div>
        </div>

        <div class="journey-panel" id="hv-panel-3" role="tabpanel" aria-labelledby="hv-st-3" data-panel="3">
          <div class="jp-head"><h2>Avoir des enfants</h2><span class="mono">GROSSESSE, NATIONALITÉ, SCOLARITÉ</span></div>
          <div class="jp-cols">
            <div class="jp-links"><ul>
              <li><a href="grossesse-vietnam-hopital-cout-demarches">Grossesse au Vietnam — hôpitaux HFH, Vinmec, FV et tarifs vérifiés 2026</a></li>
              <li><a href="enfant-couple-franco-vietnamien-nationalite">Nationalité de l'enfant franco-vietnamien — double nationalité, passeport</a></li>
              <li><a href="vivre-hanoi-avec-enfant-ecole-creche">Vivre à Hanoï avec un enfant — LFAY, crèches bilingues, frais 2026-2027</a></li>
            </ul></div>
            <a class="jp-tool" href="calculateur-budget-vietnam">
              <span class="mono" style="color:var(--hanoi)">CALCULATEUR LIÉ</span>
              <strong>Coût de la vie au Vietnam</strong>
              <span class="jp-tool-desc">Estime ton budget mensuel à Hanoï ou Hô Chi Minh-Ville avec des chiffres réels.</span>
              <span class="go">Ouvrir →</span>
            </a>
          </div>
        </div>

        <div class="journey-panel" id="hv-panel-4" role="tabpanel" aria-labelledby="hv-st-4" data-panel="4">
          <div class="jp-head"><h2>Long terme et retraite</h2><span class="mono">IMMOBILIER, RETRAITE, FISCAL, PROTECTION SOCIALE</span></div>
          <div class="jp-cols">
            <div class="jp-links"><ul>
              <li><a href="achat-immobilier-vietnam-couple-mixte">Acheter un bien immobilier au Vietnam — ce qu'un Français peut acheter</a></li>
              <li><a href="retraite-vietnam-francais">Prendre sa retraite au Vietnam — visa, budget, santé, démarches</a></li>
              <li><a href="residence-fiscale-france-vietnam-183-jours">Résidence fiscale France / Vietnam — règle des 183 jours, convention</a></li>
              <li><a href="protection-sociale-cfe-retraite-vietnam">CFE et protection sociale à l'étranger — santé, retraite, chômage</a></li>
              <li><a href="pacs-vietnamienne-reconnaissance">PACS avec un(e) Vietnamien(ne) — reconnaissance et droits</a></li>
            </ul></div>
            <a class="jp-tool" href="calculateur-budget-vietnam">
              <span class="mono" style="color:var(--hanoi)">CALCULATEUR LIÉ</span>
              <strong>Coût de la vie au Vietnam</strong>
              <span class="jp-tool-desc">Estime ton budget mensuel à Hanoï ou Hô Chi Minh-Ville avec des chiffres réels.</span>
              <span class="go">Ouvrir →</span>
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ═══════ BANDEAU CHIFFRES ═══════ -->
<div class="proofbar">
  <div class="wrap proofbar-inner">
    <div><strong><?= $_art_count ?></strong><span>articles publiés</span></div>
    <div><strong><?= count(TAXONOMY) ?></strong><span>thèmes</span></div>
    <div><strong>4</strong><span>outils interactifs</span></div>
    <div><strong>FR + VI</strong><span>deux langues</span></div>
    <div><strong>Gratuit</strong><span>tout le contenu</span></div>
  </div>
</div>

<!-- ═══════ ENGAGEMENTS ═══════ -->
<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Ce que tu trouveras ici</span>
      <h2>Mes engagements sur chaque article</h2>
    </div>
    <div class="method-grid six">
      <div class="method"><h3>Vécu</h3><p>Pas du recopiage de Wikipédia. Chaque article vient d'une expérience directe : les démarches que j'ai faites, les chiffres que j'ai payés.</p></div>
      <div class="method"><h3>Pratique</h3><p>Vrais chiffres, vrais documents, vrais délais. Je n'invente pas de données pour remplir un article.</p></div>
      <div class="method"><h3>Honnête</h3><p>Les liens affiliés sont signalés. Toujours. Ils ne changent ni mes recommandations ni mon classement.</p></div>
      <div class="method"><h3>De l'intérieur</h3><p>Je suis en couple franco-vietnamien et je prépare mon installation. Un point de vue que peu d'expats « touristes » peuvent offrir.</p></div>
      <div class="method"><h3>Vie privée respectée</h3><p>Ma femme a accepté que je raconte notre expérience commune, pas qu'elle soit identifiée. Pas de nom, pas de visage.</p></div>
      <div class="method"><h3>Gratuit</h3><p>Tout le contenu est gratuit. Le blog vit de l'affiliation signalée — jamais d'articles sponsorisés déguisés.</p></div>
    </div>
  </div>
</section>

<!-- ═══════ OUTILS INTERACTIFS ═══════ -->
<section class="section dark" id="outils">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow gold">Outils interactifs</span>
      <h2>Planifie ton projet</h2>
      <p>Quatre outils pour visualiser ta situation et projeter les étapes importantes.</p>
    </div>
    <div class="sim-grid">
      <a class="sim" href="par-ou-commencer-couple-franco-vietnamien">
        <span class="sim-tag">Parcours guidé</span>
        <h3>Le parcours du couple franco-vietnamien</h3>
        <p>De la rencontre à la vie installée — toutes les étapes classées, choisis ta branche France ou Vietnam.</p>
        <span class="sim-meta mono">GRATUIT · SANS INSCRIPTION</span>
      </a>
      <a class="sim" href="retroplanning-faire-venir-conjoint">
        <span class="sim-tag">Simulateur</span>
        <h3>Rétroplanning — visa &amp; titre de séjour conjoint</h3>
        <p>Entre ta date de lancement CCAM, obtiens chaque échéance jusqu'à l'arrivée en France.</p>
        <span class="sim-meta mono">GRATUIT · SANS INSCRIPTION</span>
      </a>
      <a class="sim" href="simulateur-residence-vietnam">
        <span class="sim-tag">Simulateur</span>
        <h3>Rétroplanning — résidence et installation Vietnam</h3>
        <p>Entre ta date de départ, obtiens ton plan d'action personnalisé semaine par semaine.</p>
        <span class="sim-meta mono">GRATUIT · SANS INSCRIPTION</span>
      </a>
      <a class="sim" href="calculateur-budget-vietnam">
        <span class="sim-tag">Calculateur</span>
        <h3>Coût de la vie au Vietnam</h3>
        <p>Estime ton budget mensuel à Hanoï ou Hô Chi Minh-Ville avec des chiffres réels.</p>
        <span class="sim-meta mono">RÉSULTAT EN € ET EN VND</span>
      </a>
    </div>
  </div>
</section>

<!-- ═══════ CATÉGORIES ═══════ -->
<section class="section" id="categories">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Explorer</span>
      <h2>Par quoi tu commences ?</h2>
    </div>
    <div class="catcards">
<?php
$_cat_photos = [
  'couple'         => ['assets/img/banh-mi-cafe-couple-hanoi.jpg', 'Anthony et sa femme à Hanoï, bánh mì et café', 675, 900, true],
  'mariage'        => ['assets/img/mariage-franco-vietnamien-ceremonie.jpg', 'Cérémonie de mariage franco-vietnamienne', 1439, 1093, true],
  'vivre-ensemble' => ['assets/img/lac-hoan-kiem-tour-tortue-hanoi.jpg', 'Tour de la Tortue, lac Hoàn Kiếm, Hanoï', 675, 900, true],
  'argent'         => ['assets/img/capvietnam-money.jpg', 'Dong vietnamien et euros', 571, 700, false],
  'vie-pratique'   => ['assets/img/cafe-leva-hanoi-bougainvillees.jpg', 'Café Leva à Hanoï, quartier Tây Hồ', 675, 900, true],
  'emploi'         => ['assets/img/rue-hanoi-bougainvillees-scooters.jpg', 'Rue animée à Hanoï', 675, 900, true],
];
foreach (TAXONOMY as $_cat_key => $_cat):
  $_n = $_cat_counts[$_cat_key] ?? 0;
  if ($_n > 0):
    [$_photo, $_alt, $_pw, $_ph, $_hasWebp] = $_cat_photos[$_cat_key] ?? ['', '', 0, 0, false];
?>
      <a class="catcard" href="articles-capvietnam?cat=<?= htmlspecialchars($_cat_key) ?>">
        <?php if ($_hasWebp): ?>
        <picture>
          <source srcset="<?= htmlspecialchars(preg_replace('/\.jpg$/', '.webp', $_photo)) ?>" type="image/webp">
          <img src="<?= htmlspecialchars($_photo) ?>" alt="<?= htmlspecialchars($_alt) ?>" width="<?= $_pw ?>" height="<?= $_ph ?>" loading="lazy">
        </picture>
        <?php else: ?>
        <img src="<?= htmlspecialchars($_photo) ?>" alt="<?= htmlspecialchars($_alt) ?>" width="<?= $_pw ?>" height="<?= $_ph ?>" loading="lazy">
        <?php endif; ?>
        <div class="catcard-body"><h3><?= htmlspecialchars($_cat['label']) ?> <b><?= $_n ?></b></h3><p><?= htmlspecialchars($_cat['desc_fr']) ?></p></div>
      </a>
<?php else: ?>
      <div class="catcard is-soon">
        <div class="catcard-body"><h3><?= htmlspecialchars($_cat['label']) ?> <b class="soon">À venir</b></h3><p><?= htmlspecialchars($_cat['desc_fr']) ?></p></div>
      </div>
<?php endif; endforeach; ?>
    </div>
  </div>
</section>

<!-- ═══════ GUIDE CTA ═══════ -->
<section style="background:linear-gradient(135deg,var(--shutter-deep) 0%,var(--shutter) 100%);padding:3rem 2rem;">
  <div class="wrap" style="max-width:760px;display:flex;align-items:center;justify-content:space-between;gap:2rem;flex-wrap:wrap;">
    <div>
      <span class="mono" style="display:inline-block;padding:4px 12px;border-radius:3px;background:rgba(222,158,40,.18);color:var(--hanoi);margin-bottom:.75rem;">📘 Guide complet</span>
      <h2 style="color:var(--paper);margin:0 0 .5rem;font-size:clamp(1.4rem,3vw,2rem)">Nouveau au Vietnam ? Commence ici.</h2>
      <p style="color:rgba(251,246,236,.7);font-size:.95rem;margin:0;">Visa, logement, banques, santé, fiscalité, coût de la vie — tout en un seul guide. Chiffres réels, rien d'inventé.</p>
    </div>
    <a class="btn btn-hanoi" href="s-expatrier-vietnam-2026-guide-complet">Lire le guide →</a>
  </div>
</section>

<!-- ═══════ DERNIERS ARTICLES (auto — 1 par catégorie ayant au moins un article publié) ═══════ -->
<section class="section" id="bibliotheque">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Les articles</span>
      <h2>Récemment publié</h2>
    </div>
    <div class="lib-grid">
<?php foreach ($_art_latest as $_a): ?>
      <a class="card" href="<?= htmlspecialchars($_a['slug']) ?>">
        <div class="card-body">
          <span class="card-meta"><span><?= htmlspecialchars($_a['categoryLabel'] ?? TAXONOMY[$_a['category']]['label']) ?></span><span><?= htmlspecialchars($_a['dateLabel']) ?> · <?= htmlspecialchars($_a['readTime']) ?></span></span>
          <h3><?= htmlspecialchars($_a['title']) ?></h3>
          <p><?= htmlspecialchars($_a['excerpt']) ?></p>
          <span class="go">Lire →</span>
        </div>
      </a>
<?php endforeach; ?>
    </div>
    <div class="section-foot">
      <a class="btn btn-ghost" href="articles-capvietnam">Tous les articles →</a>
      <a class="btn btn-ghost" href="s-expatrier-vietnam-2026-guide-complet">Nouveau au Vietnam ? Commence ici →</a>
    </div>
  </div>
</section>

<?php if ($_art_recent_log || $_next_upcoming): ?>
<!-- ═══════ CE QUI A CHANGÉ RÉCEMMENT (auto — le prochain article programmé + les 2 derniers publiés) ═══════ -->
<section class="section" style="padding-top:0" id="veille">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Procédures : du nouveau</span>
      <h2>Ce qui a changé récemment</h2>
      <p>Les règles franco-vietnamiennes bougent. Les derniers ajouts et changements couverts sur le blog, avec leur date.</p>
    </div>
    <ol class="log">
<?php if ($_next_upcoming): ?>
      <li>
        <span class="log-date mono"><?= htmlspecialchars(mb_strtoupper($_next_upcoming['dateLabel'])) ?><span class="pill pill-upcoming">À venir</span></span>
        <div><h3><?= htmlspecialchars($_next_upcoming['title']) ?></h3><p><?= htmlspecialchars($_next_upcoming['excerpt']) ?></p></div>
      </li>
<?php endif; ?>
<?php foreach ($_art_recent_log as $_a): ?>
      <li>
        <span class="log-date mono"><?= htmlspecialchars(mb_strtoupper($_a['dateLabel'])) ?><span class="pill pill-published">Publié</span></span>
        <div><h3><?= htmlspecialchars($_a['title']) ?></h3><p><?= htmlspecialchars($_a['excerpt']) ?> <a href="<?= htmlspecialchars($_a['slug']) ?>">Lire l'article →</a></p></div>
      </li>
<?php endforeach; ?>
    </ol>
  </div>
</section>
<?php endif; ?>

<!-- ═══════ BANDE PHOTO ═══════ -->
<div class="photoband" aria-label="Photos publiées sur le blog">
  <figure><img src="assets/img/bateaux-karsts-trang-an-ninh-binh.jpg" alt="Barques entre les karsts de Tràng An, Ninh Bình" loading="lazy"><figcaption class="mono">TRÀNG AN, NINH BÌNH</figcaption></figure>
  <figure><img src="assets/img/temple-lac-karsts-ninh-binh.jpg" alt="Temple au bord de l'eau entre les karsts, Ninh Bình" loading="lazy"><figcaption class="mono">TEMPLE SUR L'EAU, NINH BÌNH</figcaption></figure>
  <figure><img src="assets/img/tour-stupa-tran-quoc-hanoi.jpg" alt="Tour de la pagode Trấn Quốc, Hanoï" loading="lazy"><figcaption class="mono">PAGODE TRẤN QUỐC, HANOÏ</figcaption></figure>
  <figure><img src="assets/img/baie-bateaux-galets-nha-trang.jpg" alt="Baie aux eaux turquoise, Nha Trang" loading="lazy"><figcaption class="mono">BAIE DE NHA TRANG</figcaption></figure>
</div>

<!-- ═══════ SECTION VIETNAMIENNE ═══════ -->
<section class="section dark" id="tieng-viet">
  <div class="wrap vi-grid">
    <div>
      <span class="eyebrow gold" lang="vi">Dành cho người Việt</span>
      <h2>Pour ta moitié vietnamienne, <span lang="vi">bằng tiếng Việt</span></h2>
      <p>Le blog existe aussi en vietnamien : le parcours administratif vers la France expliqué en 5 étapes (CCAM, mariage à l'UBND, transcription à Nantes, visa VLS-TS, carte de séjour), des guides pour apprendre le français, et un PDF gratuit de 500 mots essentiels français-vietnamien.</p>
      <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:20px">
        <a class="btn btn-hanoi" href="vi/" hreflang="vi">Trang tiếng Việt →</a>
        <a class="btn btn-ghost light" href="vi/hanh-trinh-doi.html" hreflang="vi">Hành trình đôi →</a>
        <a class="btn btn-ghost light" href="500-mots-essentiels-francais-vietnamien.pdf">PDF 500 từ vựng ↓</a>
      </div>
    </div>
    <div class="vi-card" lang="vi">
      <span class="mono" style="color:var(--hanoi)">LẤY CHỒNG PHÁP · SANG PHÁP ĐỊNH CƯ</span>
      <h3>Hành trình của bạn — từng bước một</h3>
      <p>Từ hôn lễ tại Việt Nam đến thẻ cư trú tại Pháp — 5 bước hành chính, mỗi bước có hướng dẫn chi tiết. 100% miễn phí.</p>
    </div>
  </div>
</section>

<!-- ═══════ COMMUNAUTÉ ═══════ -->
<section class="section" id="communaute">
  <div class="wrap comm-grid">
    <div>
      <span class="eyebrow">Contact &amp; communauté</span>
      <h2>Une question ?</h2>
      <p style="color:var(--ink-soft2)">Rejoins la communauté pour discuter avec d'autres expats, couples mixtes et personnes qui préparent leur installation au Vietnam — ou écris-moi directement.</p>
      <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:20px">
        <a class="btn btn-primary" href="https://www.facebook.com/groups/vivreauvietnamcouplefrancovietnamiencap/" target="_blank" rel="noopener">Groupe Facebook privé</a>
        <a class="btn btn-ghost" href="https://discord.gg/MdDVNb7QZz" target="_blank" rel="noopener">Serveur Discord expats</a>
        <a class="btn btn-ghost" href="contact-capvietnam">Formulaire de contact</a>
      </div>
      <p class="mono" style="margin-top:18px"><?= htmlspecialchars(mb_strtoupper(SITE_EMAIL)) ?></p>
      <blockquote class="comm-quote">
        <p>« Je prépare mon départ définitif du Québec pour Hanoï en septembre 2026. Ce blog est le journal honnête de tout ce que j'apprends en chemin. »</p>
        <p> <span><?= htmlspecialchars(SITE_AUTHOR) ?> — <a href="a-propos-capvietnam">la page À propos</a></span></p>
      </blockquote>
    </div>
    <figure class="comm-photo">
      <picture>
        <source srcset="assets/img/mariage-franco-vietnamien-ceremonie.webp" type="image/webp">
        <img src="assets/img/mariage-franco-vietnamien-ceremonie.jpg" alt="Cérémonie de mariage franco-vietnamienne — les mariés devant l'arche fleurie" width="1439" height="1093" loading="lazy">
      </picture>
      <figcaption class="mono">CÉRÉMONIE DE MARIAGE — PHOTO DU BLOG</figcaption>
    </figure>
  </div>
</section>

<!-- ═══════ PACK GRATUIT ═══════ -->
<section class="section" style="padding-top:0" id="pack">
  <div class="wrap">
    <div class="pack">
      <div class="pack-grid">
        <div>
          <span class="eyebrow gold">Pack gratuit</span>
          <h2>4 ressources offertes dès l'inscription</h2>
          <ul>
            <li><strong>Guide PDF — Mariage &amp; Visa</strong> : le parcours complet A→Z</li>
            <li><strong>Lettre CCAM au consulat</strong> : modèle officiel à compléter</li>
            <li><strong>Lettre relance ambassade</strong> : si pas de réponse après 2 mois</li>
            <li><strong>Checklist CCAM complète</strong> : tous les documents, dans l'ordre</li>
          </ul>
          <p style="margin-top:14px;font-size:.85rem"><a href="pack-gratuit" style="color:rgba(251,246,236,.75)">Voir le détail du pack →</a></p>
          <p style="margin-top:6px;font-size:.85rem"><a href="pack-mariage-visa-2026" style="color:var(--hanoi)">💍 Besoin d'aller plus loin ? Le pack complet à 9,99 € →</a></p>
        </div>
        <form class="pack-form" action="subscribe-pack" method="post">
          <input type="text" name="website" value="" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off" aria-hidden="true">
          <label for="hv-email">Ton adresse email</label>
          <input id="hv-email" name="email" type="email" required placeholder="prenom@exemple.fr" autocomplete="email">
          <button class="btn btn-hanoi" type="submit">Recevoir le pack →</button>
          <small>Gratuit · Accès immédiat · Un email par mois, pas de spam · <a href="confidentialite-capvietnam" onclick="openModal('privacy');return false;">Confidentialité</a></small>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ═══════ FAQ ═══════ -->
<section class="section" style="padding-top:0">
  <div class="wrap-narrow">
    <div class="section-head" style="margin-bottom:24px">
      <span class="eyebrow">Questions fréquentes</span>
      <h2>Avant de te lancer</h2>
    </div>
    <details>
      <summary>Combien de temps prennent les démarches ?</summary>
      <p>Ça dépend de l'étape : le CCAM prend 4 à 6 semaines (et il est gratuit), la transcription du mariage au SCEC de Nantes 6 à 12 mois. Le <a href="retroplanning-faire-venir-conjoint">rétroplanning interactif</a> calcule chaque échéance à partir de ta date de lancement CCAM.</p>
    </details>
    <details>
      <summary>Se marier au Vietnam ou en France ?</summary>
      <p>Les deux parcours existent et sont documentés sur le blog : le mariage au Comité populaire côté Vietnam (<a href="se-marier-vietnam-procedure-comite-populaire">déroulé de la cérémonie officielle</a>) et le mariage en mairie côté France (<a href="se-marier-vietnamienne-demarches-france">documents et procédure</a>). Le <a href="par-ou-commencer-couple-franco-vietnamien">hub « Par où commencer ? »</a> présente les deux branches dans l'ordre.</p>
    </details>
    <details>
      <summary>Ces guides remplacent-ils un avocat ?</summary>
      <p>Non. Comme indiqué dans les <a href="mentions-legales-capvietnam">mentions légales</a> du site, les informations sont fournies à titre indicatif, sont susceptibles d'évoluer et ne constituent pas un conseil juridique, fiscal ou administratif. Pour un cas particulier, consulte le consulat compétent ou un professionnel.</p>
    </details>
  </div>
</section>

</div><!-- /.home-v2 -->

<script>
(function(){
  var btns=[].slice.call(document.querySelectorAll('.home-v2 .station'));
  var panels=[].slice.call(document.querySelectorAll('.home-v2 .journey-panel'));
  function show(i){
    panels.forEach(function(p){p.hidden=(+p.dataset.panel!==i);});
    btns.forEach(function(b,j){b.setAttribute('aria-selected',j===i?'true':'false');});
  }
  btns.forEach(function(b){b.addEventListener('click',function(){show(+b.dataset.step);});});
  show(1); /* sans JS, les 5 panneaux restent visibles et indexables */
})();
</script>

<?php include 'footer.php'; ?>
