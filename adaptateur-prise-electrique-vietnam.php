<?php
$page_title       = 'Adaptateur prise électrique Vietnam : ce qu\'il faut savoir avant de partir';
$page_description = 'Au Vietnam, la tension est la même qu\'en France (220 V), mais les prises plates Type A sont très répandues et incompatibles avec les fiches françaises. Quel adaptateur emporter, et comment éviter la prise de tête à l\'arrivée.';
$page_canonical   = 'https://www.blog-capvietnam.fr/adaptateur-prise-electrique-vietnam';
$page_og_title    = 'Prise électrique au Vietnam : adaptateur nécessaire pour les Français ?';
$page_og_desc     = '220 V comme en France, mais les prises plates Type A sont partout dans les anciens appartements. Ce que j\'ai découvert à l\'arrivée et l\'adaptateur que j\'utilise depuis.';
$page_og_url      = 'https://www.blog-capvietnam.fr/adaptateur-prise-electrique-vietnam';
$page_og_image    = 'https://www.blog-capvietnam.fr/assets/img/capvietnam-prise.jpg';

$page_schema = '{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Adaptateur prise électrique Vietnam : ce qu\'il faut savoir avant de partir",
  "description": "Au Vietnam, la tension est identique à la France (220 V/50 Hz), mais les prises Type A plates sont très répandues et incompatibles avec les fiches françaises. Guide complet pour partir serein.",
  "datePublished": "2026-06-02",
  "dateModified": "2026-06-02",
  "author": {"@type": "Person", "name": "Anthony Bouillon", "url": "https://www.blog-capvietnam.fr/a-propos-capvietnam"},
  "publisher": {"@type": "Organization", "name": "Cap Vietnam", "url": "https://www.blog-capvietnam.fr"},
  "mainEntityOfPage": "https://www.blog-capvietnam.fr/adaptateur-prise-electrique-vietnam",
  "inLanguage": "fr",
  "articleSection": "Vie pratique au Vietnam"
}';

$article_color        = 'terracotta';
$article_hero_bg      = '#1a0d0a';
$article_glow         = 'rgba(191,74,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.2)';
$article_badge_c      = 'var(--terracotta-soft)';
$article_category     = 'Vie pratique';
$article_category_url = 'https://www.blog-capvietnam.fr/articles-capvietnam';

$page_faq = [
  ['q' => 'Faut-il un adaptateur électrique pour aller au Vietnam ?',
   'a' => 'Oui, dans la plupart des cas. La tension est la même qu\'en France (220 V / 50 Hz), donc aucun convertisseur de voltage n\'est nécessaire. Mais le Vietnam utilise beaucoup les prises Type A (deux fiches plates, style américain), incompatibles avec les fiches rondes françaises. Un adaptateur universel de voyage couvre tous les cas et évite toute mauvaise surprise.'],
  ['q' => 'La tension au Vietnam est-elle la même qu\'en France ?',
   'a' => 'Oui. Le Vietnam fonctionne en 220 V / 50 Hz. La France est officiellement à 230 V / 50 Hz, mais les 10 volts de différence sont dans la plage de tolérance de tous les appareils modernes (chargeurs, ordinateurs portables, appareils photo). Aucun convertisseur de tension n\'est nécessaire.'],
  ['q' => 'Quels types de prises trouve-t-on au Vietnam ?',
   'a' => 'Principalement le Type A (deux lames plates parallèles, style américain) et le Type C (deux broches rondes, standard européen). Les bâtiments anciens n\'ont souvent que du Type A. Les constructions modernes et les hôtels internationaux ont fréquemment des prises universelles acceptant les deux. Le Type G (anglais, 3 broches rectangulaires) se retrouve parfois dans les hôtels internationaux.'],
  ['q' => 'La fiche française fonctionne-t-elle directement au Vietnam ?',
   'a' => 'Pas systématiquement. La fiche française (Type E, deux broches rondes avec trou de mise à la terre) est compatible avec les prises Type C rondes, présentes dans les bâtiments modernes. Mais elle ne rentre pas dans une prise Type A plate — et ces prises sont très répandues dans les appartements et maisons anciennes. Un adaptateur universel évite toute surprise.'],
  ['q' => 'Les multiprises françaises fonctionnent-elles au Vietnam ?',
   'a' => 'Oui, si la prise murale est de Type C ou universelle — une multiprise française branchée via l\'adaptateur fonctionne très bien. C\'est même mon astuce principale : un seul adaptateur + une multiprise française, et je charge tous mes appareils simultanément sans courir après les prises.'],
  ['q' => 'Où acheter un adaptateur pour le Vietnam ?',
   'a' => 'Sur Amazon avant le départ, c\'est l\'option la plus simple et la moins chère. On en trouve aussi en Fnac et en aéroport (plus cher). Au Vietnam même, les marchés locaux (Đồng Xuân à Hanoï, Bến Thành à Saïgon) en vendent, mais la qualité est variable. Mieux vaut prévoir avant de partir.'],
];

$page_extra_head = '
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Accueil","item":"https://www.blog-capvietnam.fr"},{"@type":"ListItem","position":2,"name":"Vie pratique","item":"https://www.blog-capvietnam.fr/articles-capvietnam"},{"@type":"ListItem","position":3,"name":"Adaptateur prise électrique Vietnam"}]}</script>
';

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Vie pratique</a><span class="breadcrumb-sep">›</span>
      <span>Prise électrique Vietnam</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">🔌 Vie pratique</span>
    <h1>Prise électrique et adaptateur au Vietnam : ce que les Français doivent savoir avant de partir</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 2 juin 2026</span>
      <span>⏱ 5 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Tension vs prise : deux choses distinctes</a></li>
      <li><a href="#section-2">La tension : bonne nouvelle</a></li>
      <li><a href="#section-3">Les types de prises au Vietnam</a></li>
      <li><a href="#section-4">Fiches françaises : ce qui marche</a></li>
      <li><a href="#section-5">L'adaptateur que j'utilise</a></li>
      <li><a href="#section-6">Conseils pratiques</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" title="Facebook" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" title="LinkedIn" onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url='+encodeURIComponent(location.href))">in</a>
        <a class="share-btn" title="Copier le lien" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <!-- INTRO -->
    <p>Premier soir à Hanoï. Je pose les valises dans l'appartement qu'on avait loué — un immeuble ancien du vieux quartier — je sors mon chargeur de téléphone, et là, je reste planté devant la prise murale. <strong>Deux fentes plates et horizontales</strong>, style américain. Ma fiche française avec ses deux broches rondes ne rentrait tout simplement pas dedans.</p>

    <p>J'avais lu quelque part que "le Vietnam, c'est la même tension qu'en France, pas de souci". C'est vrai — mais personne ne m'avait prévenu que <strong>certains vieux bâtiments ont encore des prises plates</strong> incompatibles avec les fiches françaises. J'ai fini la soirée avec le chargeur de ma femme. Le lendemain, un adaptateur acheté au marché a réglé le problème.</p>

    <p>La majorité des logements modernes et des hôtels au Vietnam sont équipés de prises compatibles — votre chargeur français y rentre sans problème. Mais pour éviter ce genre de surprise dans un vieux bâtiment, un adaptateur universel dans la valise reste la précaution la plus simple. Voici tout ce qu'il faut savoir.</p>

    <img src="assets/img/capvietnam-prise.jpg" alt="Prise électrique de type A dans un appartement de Hanoï — incompatible avec les fiches françaises rondes" width="800" height="600" loading="eager" style="width:100%;border-radius:var(--radius);margin:1.5rem 0;object-fit:cover;max-height:420px;">

    <!-- H2 #1 -->
    <h2 id="section-1">Avant tout : tension et type de prise sont deux choses distinctes</h2>

    <p>Il y a deux éléments distincts à considérer quand on parle de "compatibilité électrique" à l'étranger : <strong>la tension</strong> (les volts — c'est le courant lui-même) et <strong>le type de prise</strong> (la forme physique de la fiche et du connecteur). Les deux sont indépendants. Un appareil peut être parfaitement compatible en tension et ne pas rentrer dans la prise — c'est exactement le cas entre la France et le Vietnam.</p>

    <div class="info-box">
      <strong>📋 Résumé en deux lignes :</strong><br>
      ✅ <strong>Tension identique</strong> à la France (220 V / 50 Hz) → pas de convertisseur de voltage nécessaire<br>
      ✅ <strong>La majorité des prises sont compatibles</strong> avec les fiches françaises (Type C ou universelles A/C)<br>
      💡 <strong>Certains vieux bâtiments</strong> ont encore des prises Type A plates — un adaptateur universel reste utile à glisser dans la valise
    </div>

    <!-- H2 #2 -->
    <h2 id="section-2">La tension : la bonne nouvelle</h2>

    <p>Le Vietnam utilise le <strong>220 V / 50 Hz</strong>. La France est officiellement à 230 V / 50 Hz — mais les 10 volts de différence restent dans la plage de tolérance de tous les appareils modernes. En pratique, aucun appareil standard ne fait la distinction entre 220 V et 230 V.</p>

    <p>Concrètement, <strong>tous vos appareils courants fonctionnent sans convertisseur</strong> :</p>
    <ul>
      <li>Smartphones et leurs chargeurs</li>
      <li>Ordinateurs portables</li>
      <li>Appareils photo et chargeurs de batterie</li>
      <li>Rasoirs et sèche-cheveux <em>à double tension</em> (si l'étiquette indique « 100–240 V », vous êtes bon)</li>
    </ul>

    <div class="tip-box">
      <strong>💡 Le seul appareil à vérifier — le sèche-cheveux :</strong>
      La plupart des modèles vendus en France acceptent la double tension (100–240 V). Regardez le petit texte gravé sur la prise ou sur l'appareil. Si vous y voyez « 100–240 V » : aucun problème au Vietnam. Un modèle spécifiquement 110 V (rare en France) serait à ne pas brancher directement.
    </div>

    <!-- H2 #3 -->
    <h2 id="section-3">Les types de prises au Vietnam</h2>

    <p>C'est là que la situation se complique. Le Vietnam n'a pas de standard national unique — vous pouvez rencontrer plusieurs types de prises dans le même appartement ou le même couloir d'hôtel.</p>

    <table class="comparison-table">
      <thead>
        <tr>
          <th>Type</th>
          <th>Forme</th>
          <th>Présence au Vietnam</th>
          <th>Compatible fiche française ?</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Type A</strong></td>
          <td>2 lames plates parallèles 🇺🇸</td>
          <td>Présent dans certains bâtiments anciens</td>
          <td>❌ Non</td>
        </tr>
        <tr>
          <td><strong>Type C</strong></td>
          <td>2 broches rondes 🇪🇺</td>
          <td>Très courant — bâtiments modernes, hôtels, appartements récents</td>
          <td>✅ Oui</td>
        </tr>
        <tr>
          <td><strong>Type A/C universel</strong></td>
          <td>Accepte fiches plates et rondes</td>
          <td>Standard dans la majorité des logements modernes</td>
          <td>✅ Oui</td>
        </tr>
        <tr>
          <td><strong>Type G</strong></td>
          <td>3 broches rectangulaires 🇬🇧</td>
          <td>Rare — certains hôtels internationaux</td>
          <td>❌ Non</td>
        </tr>
      </tbody>
    </table>

    <p style="font-size:0.82rem;color:var(--muted);margin-top:0.5rem;">La réalité sur le terrain : la majorité des logements modernes à Hanoï et HCMV sont équipés en Type C ou en prises universelles A/C — votre fiche française passe sans problème. C'est dans les bâtiments anciens ou les petites guesthouses qu'on peut encore tomber sur du Type A seul.</p>

    <!-- H2 #4 -->
    <h2 id="section-4">Les fiches françaises : dans la majorité des cas, ça passe</h2>

    <p>La fiche française standard est le <strong>Type E</strong> : deux broches rondes avec un trou de mise à la terre dans la prise. Voici ce qui se passe selon la prise rencontrée :</p>

    <ul>
      <li><strong>Prise Type C (ronde)</strong> → votre fiche française rentre, ça fonctionne ✅</li>
      <li><strong>Prise Type A/C universel</strong> → votre fiche française rentre, ça fonctionne ✅</li>
      <li><strong>Prise Type A (plates)</strong> → votre fiche française ne rentre <em>physiquement pas</em> — il faut un adaptateur ❌</li>
      <li><strong>Prise Type G (anglaise)</strong> → incompatible — il faut un adaptateur ❌</li>
    </ul>

    <p>Dans la grande majorité des hôtels, résidences modernes et appartements récents — votre chargeur français branche directement. La situation Type A "pur" se rencontre surtout dans des <strong>bâtiments anciens</strong>, des petites guesthouses ou des maisons de quartier. Ce n'est pas la norme, mais ça arrive — et c'est suffisant pour justifier d'avoir un adaptateur universel dans la valise en guise de précaution.</p>

    <div class="tip-box">
      <strong>💡 Mon expérience :</strong>
      Mon premier appartement loué à Hanoï avait du Type A dans la chambre — ma fiche française n'est pas rentrée. Depuis, j'emporte systématiquement mon adaptateur. Ce n'est pas tous les logements, mais ça peut arriver, et ça coûte rien d'avoir l'adaptateur.
    </div>

    <!-- H2 #5 — CTA AFFILIÉ -->
    <h2 id="section-5">L'adaptateur que j'emporte à chaque voyage</h2>

    <p>La solution la plus simple : un <strong>adaptateur universel de voyage</strong> qui couvre le Type A, le Type C et le Type G. Un seul accessoire dans la valise, et vous êtes tranquille au Vietnam — et dans tous les autres pays que vous traversez en Asie du Sud-Est.</p>

    <p>Ce que je regarde à l'achat :</p>
    <ul>
      <li><strong>Compatibilité multi-types</strong> (A, C, G minimum)</li>
      <li><strong>Ports USB intégrés</strong> — pour charger téléphone + tablette sans occuper la prise murale</li>
      <li><strong>Compact</strong> — ça ne prend pas de place dans le sac à dos</li>
      <li><strong>Qualité des contacts</strong> — les modèles très bon marché chauffent anormalement et sont à éviter</li>
    </ul>

    <?php
    $aff_id    = 'amazon-adapter';
    $aff_icon  = '🔌';
    $aff_title = 'Adaptateur universel de voyage — celui que j\'emporte au Vietnam';
    $aff_text  = 'Compatible prises Type A, C, G et I. Ports USB intégrés pour charger plusieurs appareils simultanément sans occuper de prise supplémentaire. Compact, livré rapidement en France avant votre départ.';
    $aff_cta   = 'Voir sur Amazon';
    $aff_note  = 'Lien affilié Amazon — même prix pour toi, commission pour moi.';
    $aff_theme = 'green';
    include '_affiliate-cta.php';
    ?>

    <!-- H2 #6 -->
    <h2 id="section-6">Conseils pratiques</h2>

    <h3>L'astuce de la multiprise française</h3>

    <p>Ce que j'utilise systématiquement dans les appartements : <strong>un seul adaptateur + une multiprise française</strong>. Je branche l'adaptateur dans la prise vietnamienne, ma multiprise dans l'adaptateur — et j'ai immédiatement trois ou quatre prises françaises disponibles pour tous mes appareils. Plus besoin de courir après les prises dans la pièce.</p>

    <p>C'est particulièrement utile dans les appartements en location qui n'ont que deux prises murales dans la chambre — situation très courante à Hanoï dans les immeubles classiques.</p>

    <h3>Où acheter votre adaptateur</h3>

    <ul>
      <li><strong>Amazon avant le départ</strong> — option la plus simple, livraison rapide, prix correct</li>
      <li><strong>Fnac ou Boulanger</strong> — disponible en magasin, souvent plus cher qu'en ligne</li>
      <li><strong>À éviter : aéroports</strong> — prix 2 à 3 fois plus élevés qu'en ligne</li>
      <li><strong>À éviter : marchés locaux au Vietnam</strong> — on en trouve au marché Đồng Xuân à Hanoï ou Bến Thành à Saïgon, mais la qualité des contacts est très variable et certains chauffent anormalement</li>
    </ul>

    <h3>Ce qu'il ne faut PAS emporter</h3>

    <ul>
      <li><strong>Un convertisseur de tension</strong> — complètement inutile au Vietnam (même voltage), volumineux et lourd pour rien</li>
      <li><strong>Un adaptateur spécifique à un seul pays</strong> — un adaptateur universel couvre tout le Vietnam, le reste de l'Asie du Sud-Est et bien au-delà</li>
    </ul>

    <div class="tip-box">
      <strong>💡 Pour les séjours longue durée :</strong>
      Si vous vous installez plusieurs mois à Hanoï ou à HCMV, ramener une bonne multiprise française dans vos bagages vaut vraiment le coup. Sur place, les multiprises vendues en grande surface (Vinmart, Co.opmart) ont souvent des prises mixtes — fonctionnelles mais sans norme de sécurité européenne. Une multiprise française reste plus fiable pour des appareils électroniques de valeur.
    </div>

    <!-- FAQ -->
    <h2 id="section-faq">Questions fréquentes</h2>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Faut-il un adaptateur électrique pour aller au Vietnam ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Dans la majorité des cas, votre fiche française passe directement : les bâtiments modernes et les hôtels ont souvent des prises Type C ou universelles A/C compatibles. Mais dans certains vieux bâtiments ou petites guesthouses, vous pouvez tomber sur des prises Type A plates (style américain) où la fiche française ne rentre pas. Un adaptateur universel dans la valise couvre tous les cas pour une somme modique.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        La tension au Vietnam est-elle la même qu'en France ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Oui. Le Vietnam fonctionne en 220 V / 50 Hz. La France est officiellement à 230 V / 50 Hz, mais les 10 volts de différence sont dans la plage de tolérance de tous les appareils modernes (chargeurs, ordinateurs portables, appareils photo). Aucun convertisseur de tension n'est nécessaire.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Quels types de prises trouve-t-on au Vietnam ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Principalement le Type C (deux broches rondes, standard européen) et des prises universelles A/C dans les bâtiments modernes et les hôtels. Le Type A (deux lames plates, style américain) se retrouve encore dans certains vieux bâtiments. Le Type G (anglais, 3 broches rectangulaires) est rare, limité à quelques hôtels internationaux.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        La fiche française fonctionne-t-elle directement au Vietnam ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Dans la majorité des cas oui : la fiche française (Type E, deux broches rondes) est compatible avec les prises Type C et les prises universelles A/C, très répandues dans les bâtiments modernes et les hôtels. Dans les vieux bâtiments ou petites guesthouses, vous pouvez tomber sur des prises Type A plates où elle ne rentrera pas. Un adaptateur universel dans la valise évite cette surprise.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Les multiprises françaises fonctionnent-elles au Vietnam ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Oui, si la prise murale est de Type C ou universelle — une multiprise française branchée via l'adaptateur fonctionne très bien. C'est même mon astuce principale : un seul adaptateur + une multiprise française, et je charge tous mes appareils simultanément.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Où acheter un adaptateur pour le Vietnam ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Sur Amazon avant le départ, c'est l'option la plus simple et la moins chère. On en trouve aussi en Fnac et en aéroport (plus cher). Au Vietnam même, les marchés locaux (Đồng Xuân à Hanoï, Bến Thành à Saïgon) en vendent, mais la qualité est variable. Mieux vaut prévoir avant de partir.</div>
    </div>

    <!-- POUR ALLER PLUS LOIN -->
    <div class="info-box" style="margin-top:3rem;">
      <strong>📚 Pour préparer votre voyage ou installation au Vietnam :</strong>
      <ul style="margin:0.75rem 0 0.5rem;padding-left:1.2rem;">
        <li><a href="telephone-vietnam-quelle-sim-choisir">Quelle SIM choisir au Vietnam — comparatif des opérateurs</a></li>
        <li><a href="louer-appartement-hanoi-etranger">Louer un appartement à Hanoï en tant qu'étranger</a></li>
        <li><a href="transferer-argent-vietnam-wise">Transférer de l'argent en France → Vietnam avec Wise</a></li>
        <li><a href="ramener-produits-francais-vietnam">Ce qu'on peut (et ne peut pas) ramener de France au Vietnam</a></li>
      </ul>
    </div>

    <!-- CTA NEWSLETTER -->
    <div class="cta-newsletter" style="margin-top:3rem;">
      <h3>📥 Vous préparez un voyage ou une installation au Vietnam ?</h3>
      <p>Un email par mois avec mes retours d'expérience concrets — pas de spam, désinscription en un clic.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_subject" value="Newsletter Cap Vietnam — adaptateur-prise-electrique">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Désinscription en un clic. <a href="confidentialite-capvietnam">Politique de confidentialité</a>.</p>
    </div>

    <!-- AUTHOR BOX -->
    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;">
        <img src="<?= PROFILE_PHOTO ?>" alt="Anthony Bouillon — Cap Vietnam" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
      </div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français installé au Vietnam avec ma femme vietnamienne. Je partage mes retours d'expérience concrets — les démarches, les finances, la vie au quotidien — sans inventer ce que je n'ai pas vécu.</p>
        <div class="author-links">
          <a href="a-propos-capvietnam">À propos →</a>
          <a href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener">TikTok</a>
        </div>
      </div>
    </div>

  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
$current_slug = 'adaptateur-prise-electrique-vietnam';
$current_cat  = 'voyager';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
