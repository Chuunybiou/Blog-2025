<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Le couple franco-vietnamien derrière ce blog — Cap Vietnam';
$page_description = 'Je suis Anthony, Français en couple avec une Vietnamienne. Ce blog est le journal de ce qu\'on a appris, raté, payé, compris entre la France et le Vietnam.';
$page_canonical   = SITE_URL . '/a-propos-capvietnam';
$page_og_title    = 'Le couple franco-vietnamien derrière ce blog — Cap Vietnam';
$page_og_desc     = 'Français en couple avec une Vietnamienne. Ce blog raconte notre expérience commune : démarches, mariage, argent, vie entre Paris et Hanoï.';
$page_og_url      = SITE_URL . '/a-propos-capvietnam';
$page_og_image    = SITE_URL . '/assets/img/595605424_755082234270642_7802260515125357552_n.jpg';
$page_schema      = json_encode([
  '@context'   => 'https://schema.org',
  '@type'      => 'ProfilePage',
  'name'       => 'À propos — Anthony Bouillon',
  'url'        => SITE_URL . '/a-propos-capvietnam',
  'mainEntity' => [
    '@type'       => 'Person',
    '@id'         => SITE_URL . '/#author',
    'name'        => SITE_AUTHOR,
    'url'         => SITE_URL . '/a-propos-capvietnam',
    'jobTitle'    => 'Expatrié français au Vietnam, auteur & créateur de contenu',
    'description' => 'Français marié à une Vietnamienne, installé à Hanoï. Auteur de la méthode polyglotte, créateur TikTok @proffrancaisetranger et blogueur sur la vie de couple franco-vietnamien.',
    'nationality' => 'French',
    'knowsLanguage' => ['fr', 'en', 'vi'],
    'sameAs'      => [
      SITE_TIKTOK,
      'https://www.amazon.fr/stores/Anthony-Bouillon/author/B0CY93X8H5',
    ],
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
$page_extra_head  = '<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Young+Serif&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap" onload="this.onload=null;this.rel=\'stylesheet\'">'
  . '<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Young+Serif&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap"></noscript>';
$page_extra_css = '
/* ═══════════ ABOUT V2 — carnet papier, scopé pour ne pas toucher le reste du site ═══════════ */
.about-v2{
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
.about-v2 img{max-width:100%;display:block}
.about-v2 a{color:inherit}
.about-v2 .wrap{max-width:1120px;margin:0 auto;padding:0 24px}
.about-v2 .eyebrow{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--shutter);display:inline-flex;align-items:center;gap:.6em}
.about-v2 .eyebrow::before{content:"";width:26px;height:2px;background:var(--hanoi)}
.about-v2 .eyebrow.gold{color:var(--hanoi)}
.about-v2 .eyebrow.gold::before{background:var(--hanoi)}
.about-v2 .eyebrow.light{color:var(--hanoi)}
.about-v2 .eyebrow.light::before{background:var(--hanoi)}
.about-v2 h1,.about-v2 h2,.about-v2 h3,.about-v2 h4{font-family:var(--font-display2);font-weight:400;line-height:1.15}
.about-v2 h2{font-size:clamp(1.7rem,3.4vw,2.3rem);margin:.5rem 0 .9rem}
.about-v2 .section{padding:80px 0;max-width:none;margin:0}
.about-v2 .section-head{max-width:640px;margin-bottom:40px}
.about-v2 .section-head p{color:var(--ink-soft2)}
.about-v2 .mono{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.1em;text-transform:uppercase;color:var(--ink-soft2)}

.about-v2 .btn{display:inline-flex;align-items:center;gap:.5em;font-family:var(--font-body2);font-weight:600;font-size:.95rem;padding:.85em 1.5em;border-radius:999px;text-decoration:none;border:1.5px solid var(--ink2);transition:transform .15s ease,box-shadow .15s ease,background .15s ease;cursor:pointer}
.about-v2 .btn-primary{background:var(--ink2);color:var(--paper)}
.about-v2 .btn-primary:hover{background:var(--shutter-deep);border-color:var(--shutter-deep);transform:translateY(-2px);box-shadow:0 8px 20px rgba(35,40,31,.18)}
.about-v2 .btn-ghost{background:transparent;color:var(--ink2)}
.about-v2 .btn-ghost:hover{background:var(--paper-deep)}
.about-v2 .btn-ghost.light{border-color:rgba(251,246,236,.4);color:var(--paper)}
.about-v2 .btn-ghost.light:hover{background:rgba(251,246,236,.14)}
.about-v2 .btn-hanoi{background:var(--hanoi);border-color:var(--hanoi);color:var(--ink2)}
.about-v2 .btn-hanoi:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(222,158,40,.35)}

.about-v2 .stamp{border:2.5px solid var(--tampon);color:var(--tampon);border-radius:10px;padding:.55em .9em;background:rgba(251,246,236,.9);font-family:var(--font-mono2);font-size:.68rem;font-weight:500;letter-spacing:.16em;text-transform:uppercase;text-align:center;line-height:1.5;box-shadow:0 4px 14px rgba(166,57,43,.18)}
.about-v2 .stamp b{display:block;font-size:.84rem;font-weight:500}
.about-v2 .stamp.big{transform:rotate(7deg);font-size:.72rem}
.about-v2 .stamp.big b{font-size:.95rem}

/* --- hero plein écran --- */
.about-v2 .hero-full{position:relative;min-height:62vh;display:flex;align-items:flex-end;overflow:hidden}
.about-v2 .hero-bg{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center 42%}
.about-v2 .hero-shade{position:absolute;inset:0;background:linear-gradient(180deg,rgba(28,32,26,.25) 0%,rgba(28,32,26,.15) 40%,rgba(28,32,26,.8) 100%)}
.about-v2 .hero-inner{position:relative;padding-block:70px 64px;max-width:1120px}
.about-v2 .hero-full h1{font-size:clamp(2.1rem,4.6vw,3.4rem);color:#fff;margin:.6rem 0 1rem;max-width:15em;text-shadow:0 2px 24px rgba(28,32,26,.45)}
.about-v2 .hero-full h1 em{font-style:italic;color:var(--hanoi)}
.about-v2 .hero-full .lede{font-size:1.08rem;color:rgba(251,246,236,.92);max-width:38em;margin-bottom:1.4rem;text-shadow:0 1px 12px rgba(28,32,26,.5)}
.about-v2 .hero-ctas{display:flex;gap:14px;flex-wrap:wrap}
.about-v2 .hero-stamp{position:absolute;top:96px;right:5%;transform:rotate(8deg);z-index:2}
.about-v2 .ap-avatar{width:88px;height:88px;border-radius:50%;object-fit:cover;border:3px solid var(--hanoi);box-shadow:0 8px 26px rgba(28,32,26,.4);margin-bottom:16px}

/* --- histoire --- */
.about-v2 .ap-story{display:grid;grid-template-columns:1.15fr .85fr;gap:56px;align-items:start}
.about-v2 .ap-story-text p{color:var(--ink-soft2);margin-bottom:1rem}
.about-v2 .ap-story-text a{color:var(--shutter)}
.about-v2 .ap-story-text blockquote{font-family:var(--font-display2);font-size:1.18rem;color:var(--ink2);border-left:3px solid var(--hanoi);padding-left:18px;margin:1.4rem 0}
.about-v2 .ap-story-img{position:sticky;top:96px}
.about-v2 .ap-story-img img{border-radius:var(--radius2);box-shadow:0 18px 46px rgba(35,40,31,.16);width:100%}
.about-v2 .ap-story-img figcaption{margin-top:.7rem;font-size:.64rem}
.about-v2 .privacy-note{border:1px dashed var(--tampon);border-radius:var(--radius2);padding:16px 20px;background:#fff;margin-top:1.2rem;font-size:.9rem}
.about-v2 .privacy-note p{margin:6px 0 0!important;color:var(--ink-soft2)}
.about-v2 .alt-band{background:var(--paper-deep);border-block:1px solid var(--line2)}

/* --- parcours (timeline verticale) --- */
.about-v2 .timeline{list-style:none;max-width:780px;position:relative}
.about-v2 .timeline::before{content:"";position:absolute;left:138px;top:8px;bottom:8px;border-left:2px dashed var(--line2)}
.about-v2 .timeline li{display:grid;grid-template-columns:116px 1fr;gap:46px;padding:20px 0;position:relative}
.about-v2 .timeline li::before{content:"";position:absolute;left:132px;top:28px;width:14px;height:14px;border-radius:50%;background:var(--paper-deep);border:3px solid var(--shutter)}
.about-v2 .timeline li.is-key::before{background:var(--hanoi);border-color:var(--hanoi)}
.about-v2 .timeline li.is-next::before{background:var(--paper-deep);border-color:var(--tampon)}
.about-v2 .tl-date{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.06em;text-transform:uppercase;color:var(--shutter);text-align:right;padding-top:6px;display:flex;flex-direction:column;gap:8px;align-items:flex-end}
.about-v2 .timeline h3{font-size:1.12rem;margin-bottom:.35rem}
.about-v2 .timeline p{color:var(--ink-soft2);font-size:.94rem;max-width:36em}
.about-v2 .pill{font-family:var(--font-mono2);font-style:normal;font-size:.62rem;letter-spacing:.1em;text-transform:uppercase;border-radius:999px;padding:.35em .85em;width:max-content}
.about-v2 .pill-upcoming{color:var(--tampon);border:1.5px solid var(--tampon);background:transparent}

/* --- bandeau chiffres --- */
.about-v2 .proofbar{background:var(--shutter-deep);color:var(--paper)}
.about-v2 .proofbar-inner{display:flex;justify-content:space-between;gap:26px;padding-block:24px;flex-wrap:wrap}
.about-v2 .proofbar strong{font-family:var(--font-display2);font-size:1.5rem;display:block;color:var(--hanoi)}
.about-v2 .proofbar span{font-family:var(--font-mono2);font-size:.68rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(251,246,236,.7)}

/* --- galerie --- */
.about-v2 .gallery{display:grid;grid-template-columns:repeat(4,1fr);gap:14px}
.about-v2 .gallery figure{position:relative;border-radius:var(--radius2);overflow:hidden}
.about-v2 .gallery img{aspect-ratio:4/3;object-fit:cover;width:100%;transition:transform .3s ease}
.about-v2 .gallery figure:hover img{transform:scale(1.04)}
.about-v2 .gallery figcaption{position:absolute;bottom:0;left:0;right:0;padding:20px 12px 9px;background:linear-gradient(transparent,rgba(35,40,31,.75));color:rgba(251,246,236,.9);font-size:.58rem}

/* --- méthode --- */
.about-v2 .method-grid.six{display:grid;grid-template-columns:repeat(3,1fr);gap:16px}
.about-v2 .method{background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);padding:26px 24px}
.about-v2 .method h3{font-size:1.08rem;margin-bottom:.5rem;padding-bottom:.4rem;border-bottom:2px solid var(--hanoi);display:inline-block}
.about-v2 .method p{color:var(--ink-soft2);font-size:.88rem}

/* --- communauté (bandeau) --- */
.about-v2 .newsletter-band{background:var(--shutter-deep);color:var(--paper);border-radius:calc(var(--radius2) + 6px);padding:44px 48px;display:grid;grid-template-columns:1.2fr .8fr;gap:40px;align-items:center}
.about-v2 .newsletter-band h2{color:var(--paper);margin:0 0 .4rem}
.about-v2 .newsletter-band p{color:rgba(251,246,236,.8);font-size:.95rem}
.about-v2 .follow-list{list-style:none;border-top:2px dashed rgba(251,246,236,.25)}
.about-v2 .follow-list li{border-bottom:2px dashed rgba(251,246,236,.25)}
.about-v2 .follow-list a{display:block;padding:.9em 4px;text-decoration:none;font-weight:600;color:var(--paper);transition:padding-left .18s ease,color .15s}
.about-v2 .follow-list a:hover{padding-left:14px;color:var(--hanoi)}

/* --- ebook --- */
.about-v2 .ebook{border:2px dashed var(--line2);border-radius:calc(var(--radius2) + 6px);background:#fff;padding:36px 40px;display:flex;gap:34px;align-items:center;justify-content:space-between;flex-wrap:wrap}

@media(max-width:960px){
  .about-v2 .hero-full{min-height:auto;padding-top:20px}
  .about-v2 .ap-story{grid-template-columns:1fr;gap:32px}
  .about-v2 .ap-story-img{position:static;max-width:520px}
  .about-v2 .gallery{grid-template-columns:1fr 1fr}
  .about-v2 .method-grid.six{grid-template-columns:1fr 1fr}
  .about-v2 .newsletter-band{grid-template-columns:1fr;padding:36px 28px}
  .about-v2 .timeline::before{left:8px}
  .about-v2 .timeline li{grid-template-columns:1fr;gap:6px;padding-left:34px}
  .about-v2 .timeline li::before{left:2px;top:8px}
  .about-v2 .tl-date{text-align:left;padding-top:0;flex-direction:row;align-items:center}
}
@media(max-width:640px){
  .about-v2 .section{padding:60px 0}
  .about-v2 .gallery{grid-template-columns:1fr}
  .about-v2 .method-grid.six{grid-template-columns:1fr}
}
';
include 'header.php';
?>

<div class="about-v2">

<!-- ═══════ HERO plein écran : le couple, sans visages ═══════ -->
<section class="hero-full">
  <img class="hero-bg" src="assets/img/bain-pieds-herbier-spa-vietnam.jpg" alt="" fetchpriority="high">
  <div class="hero-shade" aria-hidden="true"></div>
  <div class="stamp big hero-stamp">Itinéraire<b>QUÉBEC → VIETNAM</b>Départ sept. 2026</div>
  <div class="wrap hero-inner">
    <img class="ap-avatar" src="<?= htmlspecialchars(PROFILE_PHOTO) ?>" alt="Anthony Bouillon — Blog Cap Vietnam" width="88" height="88">
    <span class="eyebrow light">À propos · Le couple franco-vietnamien derrière ce blog</span>
    <h1>Français au Québec, bientôt <em>installé au Vietnam</em></h1>
    <p class="lede">Je m'appelle Anthony. J'ai rencontré ma femme vietnamienne en juin 2025, je suis allé la voir deux fois au Vietnam, on a fait la cérémonie de mariage en mars 2026 — et je prépare mon départ définitif du Québec pour Hanoï en septembre 2026. Ce blog raconte tout ça.</p>
    <div class="hero-ctas">
      <a class="btn btn-ghost light" href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener">TikTok</a>
      <a class="btn btn-ghost light" href="https://www.facebook.com/groups/vivreauvietnamcouplefrancovietnamiencap/" target="_blank" rel="noopener">Groupe Facebook</a>
      <a class="btn btn-ghost light" href="https://discord.gg/MdDVNb7QZz" target="_blank" rel="noopener">Discord</a>
    </div>
  </div>
</section>

<!-- ═══════ L'HISTOIRE ═══════ -->
<section class="section">
  <div class="wrap ap-story">
    <div class="ap-story-text">
      <span class="eyebrow">L'histoire</span>
      <h2>Comment tout a commencé</h2>
      <p>C'est une histoire qui commence à distance, le 9 juin 2025. Je vivais au Québec, elle au Vietnam. On s'est rencontrés en ligne, on a commencé à parler — d'abord en anglais, parfois en vietnamien pour les choses simples. Et très vite, il était clair que c'était sérieux.</p>
      <p>En novembre 2025, je suis parti au Vietnam pour la première fois, le jour de son anniversaire. Ce voyage avait un objectif clair : vérifier si ce qu'on ressentait à distance tenait la route en vrai, face à face, dans sa vie, avec sa famille. La réponse, c'était oui.</p>
      <p>Je suis retourné au Vietnam en mars 2026. Cette fois, c'était pour la <strong>cérémonie traditionnelle du mariage</strong> — la cérémonie côté vietnamien, avec la belle-famille, les rituels, le tout. Un moment qu'on ne peut pas vraiment préparer depuis un écran.</p>
      <blockquote>« Je prépare mon départ définitif du Québec pour Hanoï en septembre 2026. Ce blog est le journal honnête de tout ce que j'apprends en chemin. »</blockquote>
      <p>Aujourd'hui je suis encore au Québec, et je prépare tout : les démarches administratives, les finances, l'organisation pratique. Le départ définitif est prévu pour <strong>septembre 2026</strong>. Ce n'est plus un projet vague — c'est une date.</p>
      <p>À côté du blog, je suis technicien IT et développeur web indépendant (<a href="https://anthony-bouillon.com" target="_blank" rel="noopener">anthony-bouillon.com</a>). Ma femme travaille pour Manulife Vietnam. On gère nos finances entre le Québec, la France et le Vietnam — et j'écris sur tout ça sans enjoliver.</p>
      <p class="mono" style="font-size:.66rem">AUTO-ENTREPRENEUR DÉCLARÉ EN FRANCE · SIRET 852 140 425 00038 · QUÉBEC, CANADA (BIENTÔT HANOÏ, VIETNAM)</p>
      <div class="privacy-note">
        <span class="mono" style="color:var(--tampon)">VIE PRIVÉE</span>
        <p>Ma femme a accepté que je raconte notre expérience commune, pas qu'elle soit identifiée publiquement. Je respecte ça. Pas de nom, pas de visage, juste les leçons qu'on tire ensemble.</p>
      </div>
    </div>
    <figure class="ap-story-img">
      <img src="assets/img/banh-mi-cafe-couple-hanoi.jpg" alt="Bánh mì et jus frais à Hanoï — premier voyage au Vietnam" loading="lazy">
      <figcaption class="mono">BÁNH MÌ &amp; JUS FRAIS À HANOÏ — PREMIER VOYAGE, NOV. 2025</figcaption>
    </figure>
  </div>
</section>

<!-- ═══════ LE PARCOURS ═══════ -->
<section class="section alt-band">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Le trajet</span>
      <h2>Le parcours, étape par étape</h2>
    </div>
    <ol class="timeline">
      <li>
        <span class="tl-date">France</span>
        <div><h3>Naissance, études, premiers boulots</h3><p>La France comme point de départ. Technicien IT, développeur web indépendant. L'envie de partir grandissait.</p></div>
      </li>
      <li>
        <span class="tl-date">Canada — Québec</span>
        <div><h3>Départ pour le Québec avec permis de travail ouvert</h3><p>Un nouveau continent, une nouvelle culture. Je m'installe au Québec et continue à travailler en ligne.</p></div>
      </li>
      <li class="is-key">
        <span class="tl-date">9 juin 2025</span>
        <div><h3>La rencontre — à distance</h3><p>On se rencontre en ligne. Elle est au Vietnam, je suis au Québec. On parle en anglais, parfois en vietnamien. Très vite c'est sérieux.</p></div>
      </li>
      <li>
        <span class="tl-date">Nov. 2025</span>
        <div><h3>Premier voyage au Vietnam — pour son anniversaire</h3><p>Hanoï pour la première fois. La street food, le chaos de la circulation, la famille de ma femme. Je comprends concrètement pourquoi les gens tombent amoureux de ce pays.</p></div>
      </li>
      <li class="is-key">
        <span class="tl-date">Mars 2026</span>
        <div><h3>Deuxième voyage — cérémonie traditionnelle de mariage</h3><p>Retour au Vietnam pour la cérémonie côté vietnamien. Famille, rituels, belle-famille. Ce qu'on ne peut pas vraiment préparer depuis un écran.</p></div>
      </li>
      <li class="is-next">
        <span class="tl-date">Sept. 2026 <span class="pill pill-upcoming">Prévu</span></span>
        <div><h3>Départ définitif du Québec pour Hanoï</h3><p>Ce n'est plus un projet vague. C'est une date. Je prépare tout : visa, finances, logement, santé. Et j'écris sur tout ça en temps réel.</p></div>
      </li>
    </ol>
  </div>
</section>

<!-- ═══════ BANDEAU CHIFFRES ═══════ -->
<div class="proofbar">
  <div class="wrap proofbar-inner">
    <div><strong>2</strong><span>voyages au Vietnam</span></div>
    <div><strong>3</strong><span>pays vécus</span></div>
    <div><strong>9 juin 25</strong><span>la rencontre</span></div>
    <div><strong>Sept. 2026</strong><span>départ pour Hanoï</span></div>
  </div>
</div>

<!-- ═══════ GALERIE ═══════ -->
<section class="section">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Mes voyages</span>
      <h2>Ce que j'ai vu au Vietnam</h2>
    </div>
    <div class="gallery">
      <figure><img src="assets/img/pagode-pilier-unique-hanoi.jpg" alt="Pagode du Pilier Unique (Chùa Một Cột) — Hanoï" loading="lazy"><figcaption class="mono">CHÙA MỘT CỘT, HANOÏ</figcaption></figure>
      <figure><img src="assets/img/bateaux-karsts-trang-an-ninh-binh.jpg" alt="Bateaux sur les karsts de Tràng An — Ninh Bình" loading="lazy"><figcaption class="mono">TRÀNG AN, NINH BÌNH</figcaption></figure>
      <figure><img src="assets/img/lac-ouest-hanoi-rive-ho-tay.jpg" alt="Lac de l'Ouest (Hồ Tây) — Hanoï" loading="lazy"><figcaption class="mono">HỒ TÂY, HANOÏ</figcaption></figure>
      <figure><img src="assets/img/grotte-barque-ninh-binh.jpg" alt="Grotte sur la rivière — Tràng An, Ninh Bình" loading="lazy"><figcaption class="mono">GROTTE SUR LA RIVIÈRE, TRÀNG AN</figcaption></figure>
      <figure><img src="assets/img/bain-pieds-herbier-spa-vietnam.jpg" alt="Bain de pieds en bois au Vietnam — moment de détente en couple" loading="lazy"><figcaption class="mono">SPA TRADITIONNEL, EN COUPLE</figcaption></figure>
      <figure><img src="assets/img/pagode-illuminee-fete-nuit-vietnam.jpg" alt="Pagode illuminée au bord de l'eau — Hanoï la nuit" loading="lazy"><figcaption class="mono">PAGODE ILLUMINÉE, HANOÏ</figcaption></figure>
      <figure><img src="assets/img/cathedrale-saint-joseph-hanoi-nuit.jpg" alt="Cathédrale Saint-Joseph de Hanoï la nuit" loading="lazy"><figcaption class="mono">SAINT-JOSEPH, LA NUIT</figcaption></figure>
      <figure><img src="assets/img/vieux-quartier-hanoi-colonial.jpg" alt="Vieux quartier de Hanoï" loading="lazy"><figcaption class="mono">VIEUX QUARTIER, HANOÏ</figcaption></figure>
    </div>
  </div>
</section>

<!-- ═══════ ENGAGEMENTS ═══════ -->
<section class="section alt-band">
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

<!-- ═══════ COMMUNAUTÉ + SUIVRE L'AVENTURE ═══════ -->
<section class="section">
  <div class="wrap">
    <div class="newsletter-band">
      <div>
        <span class="eyebrow gold">Rejoindre la communauté</span>
        <h2>Envie de suivre l'aventure ?</h2>
        <p>Un groupe Facebook privé et un serveur Discord pour discuter entre expats, couples mixtes, et personnes qui préparent leur installation au Vietnam. Que tu prépares ton expatriation ou que tu sois juste curieux, il y a plein de façons de rester connecté.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;margin-top:18px">
          <a class="btn btn-hanoi" href="https://www.facebook.com/groups/vivreauvietnamcouplefrancovietnamiencap/" target="_blank" rel="noopener">Groupe Facebook privé</a>
          <a class="btn btn-ghost light" href="https://discord.gg/MdDVNb7QZz" target="_blank" rel="noopener">Serveur Discord expats</a>
        </div>
      </div>
      <div>
        <ul class="follow-list">
          <li><a href="articles-capvietnam">Lire les articles →</a></li>
          <li><a href="contact-capvietnam">Me contacter →</a></li>
          <li><a href="pack-gratuit">Newsletter mensuelle →</a></li>
        </ul>
      </div>
    </div>
  </div>
</section>

</div><!-- /.about-v2 -->
<!-- Note : la bannière ebook n'est pas dupliquée ici — footer.php en affiche déjà une, juste avant le footer. -->

<?php include 'footer.php'; ?>
