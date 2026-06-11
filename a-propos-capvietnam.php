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
$page_extra_css = '
.about-hero{padding-top:64px;background:linear-gradient(165deg,#1c1917,#2d2319 50%,#1c1917);position:relative;overflow:hidden}
.about-hero::before{content:\'\';position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 30% 70%,rgba(191,74,42,0.12),transparent 60%),radial-gradient(ellipse 50% 40% at 70% 30%,rgba(27,107,82,0.08),transparent 60%)}
.about-hero-inner{max-width:1000px;margin:0 auto;padding:5rem 2rem 4rem;position:relative;z-index:1;display:grid;grid-template-columns:280px 1fr;gap:4rem;align-items:center}
.about-avatar{width:280px;height:340px;border-radius:var(--radius);background:linear-gradient(145deg,var(--terracotta),var(--jade));display:flex;align-items:center;justify-content:center;font-size:6rem;position:relative;overflow:hidden;box-shadow:0 20px 60px rgba(0,0,0,0.3)}
.about-avatar::before{content:\'\';position:absolute;inset:0;background:radial-gradient(circle at 30% 70%,rgba(255,255,255,0.08),transparent 50%)}
.about-avatar-label{position:absolute;bottom:0;left:0;right:0;padding:0.75rem;background:rgba(0,0,0,0.5);backdrop-filter:blur(10px);text-align:center;color:var(--cream);font-size:0.75rem;letter-spacing:2px;text-transform:uppercase}
.about-hero-text h1{font-family:\'DM Serif Display\',serif;font-size:clamp(2rem,4vw,3rem);color:var(--cream);line-height:1.2;margin-bottom:1rem}
.about-hero-text h1 em{color:var(--terracotta-soft);font-style:italic}
.about-hero-text p{color:rgba(250,248,244,0.55);font-size:1.05rem;margin-bottom:1.5rem;max-width:480px}
.hero-social{display:flex;gap:0.75rem}
.social-btn{padding:0.5rem 1.2rem;border-radius:100px;background:rgba(255,255,255,0.08);border:1px solid rgba(255,255,255,0.12);color:var(--cream);font-size:0.82rem;font-weight:500;text-decoration:none;transition:all 0.2s}
.social-btn:hover{background:rgba(255,255,255,0.15);border-color:rgba(255,255,255,0.25)}

.story-section{max-width:800px;margin:0 auto;padding:5rem 2rem}
.story-label{font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;color:var(--muted);margin-bottom:0.75rem}
.story-title{font-family:\'DM Serif Display\',serif;font-size:2.2rem;margin-bottom:2rem;line-height:1.25}
.story-text p{color:#3a3530;font-size:1.05rem;margin-bottom:1.5rem}
.story-text p:first-of-type::first-letter{font-family:\'DM Serif Display\',serif;font-size:3.5rem;float:left;line-height:1;margin:0.1rem 0.6rem 0 0;color:var(--terracotta)}
.story-highlight{background:var(--warm-bg);border-left:4px solid var(--terracotta);padding:1.5rem 2rem;border-radius:0 var(--radius) var(--radius) 0;margin:2.5rem 0;font-size:1.1rem;font-style:italic;color:var(--ink);line-height:1.8}

.timeline-section{background:var(--warm-bg);padding:5rem 2rem}
.timeline-inner{max-width:800px;margin:0 auto}
.timeline-title{font-family:\'DM Serif Display\',serif;font-size:2rem;text-align:center;margin-bottom:3rem}
.timeline{position:relative;padding-left:40px}
.timeline::before{content:\'\';position:absolute;left:15px;top:0;bottom:0;width:2px;background:var(--border)}
.timeline-item{position:relative;margin-bottom:2.5rem;padding-left:2rem}
.timeline-dot{position:absolute;left:-33px;top:6px;width:12px;height:12px;border-radius:50%;border:3px solid var(--terracotta);background:var(--cream)}
.timeline-item.active .timeline-dot{background:var(--terracotta)}
.timeline-date{font-size:0.75rem;letter-spacing:2px;text-transform:uppercase;color:var(--terracotta);font-weight:600;margin-bottom:0.25rem}
.timeline-item h3{font-family:\'DM Serif Display\',serif;font-size:1.15rem;margin-bottom:0.3rem}
.timeline-item p{color:var(--muted);font-size:0.92rem}

.values-section{max-width:1000px;margin:0 auto;padding:5rem 2rem}
.values-title{font-family:\'DM Serif Display\',serif;font-size:2rem;text-align:center;margin-bottom:0.5rem}
.values-subtitle{text-align:center;color:var(--muted);margin-bottom:3rem}
.values-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:2rem}
.value-card{background:var(--white);border-radius:var(--radius);padding:2rem;box-shadow:var(--shadow-sm);text-align:center;transition:transform 0.3s,box-shadow 0.3s}
.value-card:hover{transform:translateY(-4px);box-shadow:var(--shadow-md)}
.value-icon{font-size:2.5rem;margin-bottom:1rem}
.value-card h3{font-family:\'DM Serif Display\',serif;font-size:1.15rem;margin-bottom:0.5rem}
.value-card p{color:var(--muted);font-size:0.9rem}

.numbers-section{background:var(--ink);color:var(--cream);padding:4rem 2rem}
.numbers-grid{max-width:1000px;margin:0 auto;display:grid;grid-template-columns:repeat(4,1fr);gap:2rem;text-align:center}
.number-item .num{font-family:\'DM Serif Display\',serif;font-size:2.5rem;color:var(--terracotta-soft)}
.number-item .label{font-size:0.75rem;letter-spacing:2px;text-transform:uppercase;color:rgba(250,248,244,0.4);margin-top:0.25rem}

.cta-section{max-width:800px;margin:0 auto;padding:5rem 2rem;text-align:center}
.cta-section h2{font-family:\'DM Serif Display\',serif;font-size:2rem;margin-bottom:1rem}
.cta-section p{color:var(--muted);max-width:500px;margin:0 auto 2rem}
.cta-buttons{display:flex;gap:1rem;justify-content:center;flex-wrap:wrap}
.cta-primary{padding:0.9rem 2.2rem;background:var(--terracotta);color:#fff;text-decoration:none;font-weight:600;border-radius:4px;transition:all 0.2s}
.cta-primary:hover{background:var(--terracotta-soft);transform:translateY(-2px)}
.cta-secondary{padding:0.9rem 2.2rem;background:transparent;color:var(--ink);text-decoration:none;font-weight:600;border-radius:4px;border:1px solid var(--border);transition:all 0.2s}
.cta-secondary:hover{border-color:var(--ink)}

@media(max-width:900px){.about-hero-inner{grid-template-columns:1fr;text-align:center}.about-avatar{margin:0 auto;width:200px;height:250px;font-size:4rem}.values-grid{grid-template-columns:1fr}.numbers-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:640px){.hero-social{justify-content:center}.cta-buttons{flex-direction:column;align-items:center}}
';
include 'header.php';
?>

<!-- HERO -->
<header class="about-hero">
  <div class="about-hero-inner">
    <div class="about-avatar">
      <img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon — Cap Vietnam" width="280" height="340" loading="eager" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
      <div class="about-avatar-label">📍 Québec → Vietnam</div>
    </div>
    <div class="about-hero-text">
      <h1>Français au Québec,<br>bientôt <em>installé<br>au Vietnam</em></h1>
      <p>Je m'appelle Anthony. J'ai rencontré ma femme vietnamienne en juin 2025, je suis allé la voir deux fois au Vietnam, on a fait la cérémonie de mariage en mars 2026 — et je prépare mon départ définitif du Québec pour Hanoï en septembre 2026. Ce blog raconte tout ça.</p>
      <div class="hero-social">
        <a class="social-btn" href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener">🎵 TikTok</a>
        <a class="social-btn" href="https://www.facebook.com/groups/vivreauvietnamcouplefrancovietnamiencap/" target="_blank" rel="noopener">💬 Groupe Facebook</a>
        <a class="social-btn" href="https://discord.gg/MdDVNb7QZz" target="_blank" rel="noopener">🎮 Discord</a>
      </div>
    </div>
  </div>
</header>

<!-- STORY -->
<section class="story-section">
  <div class="story-label">L'histoire</div>
  <h2 class="story-title">Comment tout a commencé</h2>
  <div class="story-text">
    <p>C'est une histoire qui commence à distance, le 9 juin 2025. Je vivais au Québec, elle au Vietnam. On s'est rencontrés en ligne, on a commencé à parler — d'abord en anglais, parfois en vietnamien pour les choses simples. Et très vite, il était clair que c'était sérieux.</p>

    <img src="assets/img/595605424_755082234270642_7802260515125357552_n.jpg" alt="Bánh mì et jus frais à Hanoï — premier voyage au Vietnam" width="800" height="700" loading="lazy" style="width:100%;border-radius:12px;margin:2rem 0;object-fit:cover;max-height:420px;">

    <p>En novembre 2025, je suis parti au Vietnam pour la première fois, le jour de son anniversaire. Ce voyage avait un objectif clair : vérifier si ce qu'on ressentait à distance tenait la route en vrai, face à face, dans sa vie, avec sa famille. La réponse, c'était oui.</p>

    <p>Je suis retourné au Vietnam en mars 2026. Cette fois, c'était pour la <strong>cérémonie traditionnelle du mariage</strong> — la cérémonie côté vietnamien, avec la belle-famille, les rituels, le tout. Un moment qu'on ne peut pas vraiment préparer depuis un écran.</p>

    <div class="story-highlight">
      « Je prépare mon départ définitif du Québec pour Hanoï en septembre 2026. Ce blog est le journal honnête de tout ce que j'apprends en chemin. »
    </div>

    <p>Aujourd'hui je suis encore au Québec, et je prépare tout : les démarches administratives, les finances, l'organisation pratique. Le départ définitif est prévu pour <strong>septembre 2026</strong>. Ce n'est plus un projet vague — c'est une date.</p>

    <p>À côté du blog, je suis technicien IT et développeur web indépendant (<a href="https://anthony-bouillon.com" target="_blank" rel="noopener">anthony-bouillon.com</a>). Ma femme travaille pour Manulife Vietnam. On gère nos finances entre le Québec, la France et le Vietnam — et j'écris sur tout ça sans enjoliver.</p>

    <div style="margin-top:1.5rem;padding:1rem 1.25rem;background:var(--warm-bg);border-radius:8px;font-size:.9rem;color:var(--muted)">
      Auto-entrepreneur déclaré en France · SIRET 852 140 425 00038 · Québec, Canada (bientôt Hanoï, Vietnam).
    </div>

    <p style="margin-top:1.5rem;">Ma femme a accepté que je raconte notre expérience commune, pas qu'elle soit identifiée publiquement. Je respecte ça. Pas de nom, pas de visage, juste les leçons qu'on tire ensemble.</p>
  </div>
</section>

<!-- PHOTOS VOYAGES -->
<section style="background:var(--warm-bg);padding:5rem 2rem;">
  <div style="max-width:1000px;margin:0 auto;">
    <div style="font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;color:var(--muted);margin-bottom:0.5rem;">Mes voyages</div>
    <h2 style="font-family:'DM Serif Display',serif;font-size:2rem;margin-bottom:2rem;">Ce que j'ai vu au Vietnam</h2>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;">
      <img src="assets/img/595546396_755082490937283_1056395525782122860_n.jpg" alt="Pagode du Pilier Unique (Chùa Một Cột) — Hanoï" width="400" height="400" loading="lazy" style="width:100%;aspect-ratio:1;object-fit:cover;border-radius:8px;">
      <img src="assets/img/595501843_755082200937312_3487841786224209600_n.jpg" alt="Bateaux sur les karsts de Tràng An — Ninh Binh" width="400" height="400" loading="lazy" style="width:100%;aspect-ratio:1;object-fit:cover;border-radius:8px;">
      <img src="assets/img/596295808_755082580937274_5977220999229795732_n.jpg" alt="Lac de l'Ouest (Hồ Tây) — Hanoï" width="400" height="400" loading="lazy" style="width:100%;aspect-ratio:1;object-fit:cover;border-radius:8px;">
      <img src="assets/img/596295808_755082164270649_7756524143879926384_n.jpg" alt="Grotte sur la rivière — Tràng An, Ninh Binh" width="400" height="400" loading="lazy" style="width:100%;aspect-ratio:1;object-fit:cover;border-radius:8px;">
      <img src="assets/img/595604561_755082290937303_8005453321801884597_n.jpg" alt="Bain de pieds en bois au Vietnam — moment de détente en couple" width="400" height="400" loading="lazy" style="width:100%;aspect-ratio:1;object-fit:cover;border-radius:8px;">
      <img src="assets/img/594561710_755082120937320_5369234175441741259_n.jpg" alt="Pagode illuminée au bord de l'eau — Hanoï la nuit" width="400" height="400" loading="lazy" style="width:100%;aspect-ratio:1;object-fit:cover;border-radius:8px;">
    </div>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;margin-top:1rem;">
      <img src="assets/img/595541316_755082374270628_3117767301473988501_n.jpg" alt="Cathédrale Saint-Joseph de Hanoï la nuit" width="400" height="400" loading="lazy" style="width:100%;aspect-ratio:1;object-fit:cover;border-radius:8px;">
      <img src="assets/img/1618720727-hhhh.jpg" alt="Vieux quartier de Hanoï" width="400" height="400" loading="lazy" style="width:100%;aspect-ratio:1;object-fit:cover;border-radius:8px;">
      <img src="assets/img/596977934_755082304270635_2963209742693028438_n.jpg" alt="Intérieur d'une pagode bouddhiste dorée au Vietnam" width="400" height="400" loading="lazy" style="width:100%;aspect-ratio:1;object-fit:cover;border-radius:8px;">
    </div>
  </div>
</section>

<!-- TIMELINE -->
<section class="timeline-section">
  <div class="timeline-inner">
    <h2 class="timeline-title">Le parcours, étape par étape</h2>
    <div class="timeline">
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">France</div>
        <h3>Naissance, études, premiers boulots</h3>
        <p>La France comme point de départ. Technicien IT, développeur web indépendant. L'envie de partir grandissait.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">Canada — Québec</div>
        <h3>Départ pour le Québec avec permis de travail ouvert</h3>
        <p>Un nouveau continent, une nouvelle culture. Je m'installe au Québec et continue à travailler en ligne.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">9 juin 2025</div>
        <h3>La rencontre — à distance 💕</h3>
        <p>On se rencontre en ligne. Elle est au Vietnam, je suis au Québec. On parle en anglais, parfois en vietnamien. Très vite c'est sérieux.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">Novembre 2025</div>
        <h3>Premier voyage au Vietnam — pour son anniversaire</h3>
        <p>Hanoï pour la première fois. La street food, le chaos de la circulation, la famille de ma femme. Je comprends concrètement pourquoi les gens tombent amoureux de ce pays.</p>
      </div>
      <div class="timeline-item">
        <div class="timeline-dot"></div>
        <div class="timeline-date">Mars 2026</div>
        <h3>Deuxième voyage — cérémonie traditionnelle de mariage</h3>
        <p>Retour au Vietnam pour la cérémonie côté vietnamien. Famille, rituels, belle-famille. Ce qu'on ne peut pas vraiment préparer depuis un écran.</p>
      </div>
      <div class="timeline-item active">
        <div class="timeline-dot"></div>
        <div class="timeline-date">Septembre 2026 — prévu</div>
        <h3>Départ définitif du Québec pour Hanoï</h3>
        <p>Ce n'est plus un projet vague. C'est une date. Je prépare tout : visa, finances, logement, santé. Et j'écris sur tout ça en temps réel.</p>
      </div>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="values-section">
  <h2 class="values-title">Ce que tu trouveras ici</h2>
  <p class="values-subtitle">Mes engagements sur chaque article.</p>
  <div class="values-grid">
    <div class="value-card"><div class="value-icon">🎯</div><h3>Vécu</h3><p>Pas du recopiage de Wikipédia. Chaque article vient d'une expérience directe : les démarches que j'ai faites, les chiffres que j'ai payés.</p></div>
    <div class="value-card"><div class="value-icon">📊</div><h3>Pratique</h3><p>Vrais chiffres, vrais documents, vrais délais. Je n'invente pas de données pour remplir un article.</p></div>
    <div class="value-card"><div class="value-icon">✅</div><h3>Honnête</h3><p>Les liens affiliés sont signalés. Toujours. Ils ne changent ni mes recommandations ni mon classement.</p></div>
    <div class="value-card"><div class="value-icon">🌏</div><h3>De l'intérieur</h3><p>Je suis en couple franco-vietnamien et je prépare mon installation. Un point de vue que peu d'expats "touristes" peuvent offrir.</p></div>
    <div class="value-card"><div class="value-icon">🔒</div><h3>Vie privée respectée</h3><p>Ma femme a accepté que je raconte notre expérience commune, pas qu'elle soit identifiée. Pas de nom, pas de visage.</p></div>
    <div class="value-card"><div class="value-icon">🆓</div><h3>Gratuit</h3><p>Tout le contenu est gratuit. Le blog vit de l'affiliation signalée — jamais d'articles sponsorisés déguisés.</p></div>
  </div>
</section>

<!-- NUMBERS -->
<section class="numbers-section">
  <div class="numbers-grid">
    <div class="number-item"><div class="num">2</div><div class="label">Voyages au Vietnam</div></div>
    <div class="number-item"><div class="num">3</div><div class="label">Pays vécus</div></div>
    <div class="number-item"><div class="num">Sept. 2026</div><div class="label">Départ pour Hanoï</div></div>
    <div class="number-item"><div class="num">9 juin 25</div><div class="label">La rencontre</div></div>
  </div>
</section>

<!-- COMMUNAUTÉ -->
<section style="max-width:800px;margin:0 auto;padding:4rem 2rem;">
  <h2 style="font-family:'DM Serif Display',serif;font-size:1.8rem;margin-bottom:1rem;text-align:center;">Rejoindre la communauté</h2>
  <p style="text-align:center;color:var(--muted);margin-bottom:2rem;">Un groupe Facebook privé et un serveur Discord pour discuter entre expats, couples mixtes, et personnes qui préparent leur installation au Vietnam.</p>
  <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
    <a href="https://www.facebook.com/groups/vivreauvietnamcouplefrancovietnamiencap/" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:0.6rem;padding:0.8rem 1.6rem;background:#1877f2;color:#fff;border-radius:6px;font-weight:600;text-decoration:none;font-size:0.95rem;">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
      Groupe Facebook privé
    </a>
    <a href="https://discord.gg/MdDVNb7QZz" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:0.6rem;padding:0.8rem 1.6rem;background:#5865f2;color:#fff;border-radius:6px;font-weight:600;text-decoration:none;font-size:0.95rem;">
      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057.1 18.13.14 18.2.2 18.241a19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028c.462-.63.874-1.295 1.226-1.994.021-.041.001-.09-.041-.106a13.105 13.105 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/></svg>
      Serveur Discord expats
    </a>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <h2>Envie de suivre l'aventure ?</h2>
  <p>Que tu prépares ton expatriation ou que tu sois juste curieux, il y a plein de façons de rester connecté.</p>
  <div class="cta-buttons">
    <a class="cta-primary" href="articles-capvietnam">Lire les articles →</a>
    <a class="cta-secondary" href="blog-capvietnam#contact">Me contacter</a>
    <a class="cta-secondary" href="blog-capvietnam#newsletter">Newsletter mensuelle</a>
  </div>
</section>

<script>
const obs = new IntersectionObserver(e => {
  e.forEach(x => { if(x.isIntersecting){ x.target.style.opacity='1'; x.target.style.transform='translateY(0)'; } });
}, { threshold: 0.1 });
document.querySelectorAll('.value-card,.timeline-item,.cta-section').forEach((el,i) => {
  el.style.opacity='0'; el.style.transform='translateY(25px)';
  el.style.transition='opacity 0.5s ease '+(i%6)*0.08+'s, transform 0.5s ease '+(i%6)*0.08+'s';
  obs.observe(el);
});
</script>

<?php include 'footer.php'; ?>
