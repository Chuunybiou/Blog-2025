<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Vivre à Hanoï avec un enfant : crèches, école française et vie pratique en 2026';
$page_description = 'Crèches bilingues, Lycée Français Alexandre Yersin (LFAY), tarifs, inscription via EDUKA : guide pratique pour les couples franco-vietnamiens qui élèvent un enfant à Hanoï.';
$page_canonical   = SITE_URL . '/vivre-hanoi-avec-enfant-ecole-creche';
$page_og_title    = 'Vivre à Hanoï avec un enfant en 2026 : école, crèche et tarifs';
$page_og_desc     = 'Lycée Français Alexandre Yersin, La Petite École, Acacia : tout sur l\'école française à Hanoï — frais de scolarité, procédure d\'inscription EDUKA, crèches bilingues.';
$page_og_url      = SITE_URL . '/vivre-hanoi-avec-enfant-ecole-creche';
$page_og_image    = 'https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Vivre à Hanoï avec un enfant : crèches, école française et vie pratique en 2026',
  'datePublished'   => '2026-07-06',
  'dateModified'    => '2026-07-06',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/vivre-hanoi-avec-enfant-ecole-creche',
  'image'           => 'https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=1200&q=80',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie pratique au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'jade';
$article_hero_bg  = '#1a3a2a';
$article_glow     = 'rgba(27,107,82,0.15)';
$article_badge    = 'rgba(191,74,42,0.25)';
$article_badge_c  = '#e8856a';

$article_category     = 'Vie Pratique';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vie-pratique';

$page_faq = [
  ['q' => 'Les enfants d\'expats s\'adaptent-ils bien à Hanoï ?',
   'a' => 'En général oui. Les grandes écoles françaises et internationales créent un environnement sécurisant avec d\'autres enfants d\'expats. La difficulté principale est la pollution de l\'air en hiver (novembre-mars) qui peut nécessiter un purificateur à la maison et des masques pour les sorties. Les enfants s\'adaptent très vite à la vie au Vietnam, notamment grâce aux interactions naturelles avec les voisins et la famille vietnamienne.'],
  ['q' => 'Mon enfant peut-il rejoindre le LFAY en cours d\'année scolaire ?',
   'a' => 'Oui, des inscriptions en cours d\'année sont possibles pour les familles arrivant pour des raisons professionnelles. Contacte directement le service des inscriptions du LFAY (lfay.com.vn) — ils ont une procédure spécifique pour les arrivées hors période standard EDUKA.'],
  ['q' => 'Quelle est la différence entre LFAY et La Petite École ?',
   'a' => 'Le LFAY est le lycée français homologué AEFE couvrant de la maternelle (PS) au baccalauréat, situé en centre-ville de Hanoï. La Petite École (LPE) accueille uniquement les enfants de 12 mois à 6 ans (crèche et maternelle), dans le quartier Tay Ho. Les deux établissements sont affiliés à l\'AEFE et suivent le programme français, mais LPE est plus petite et plus spécialisée dans la petite enfance.'],
  ['q' => 'Mon enfant doit-il parler français pour entrer au LFAY ?',
   'a' => 'Pour la maternelle et le CP, non — c\'est l\'âge où les enfants apprennent. Pour les classes supérieures, un niveau en français est requis. Le LFAY peut organiser des tests de niveau avant l\'admission pour les plus grands.'],
];

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero" style="background:<?= $article_hero_bg ?>;">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Articles</a><span class="breadcrumb-sep">›</span>
      <span>Vivre à Hanoï avec un enfant</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">Famille</span>
    <h1>Vivre à Hanoï avec un enfant : crèches, école française et vie pratique</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juillet 2026</span>
      <span>⏱ 7 min de lecture</span>
    </div>
    <p style="color:rgba(250,248,244,0.78);font-size:1.05rem;line-height:1.7;margin-top:1.25rem;">
      Hanoï avec un enfant, c'est plus accessible qu'on ne le croit. Le réseau scolaire français est solide, les crèches bilingues existent, et la vie de quartier est naturellement adaptée aux familles. Ce guide fait le point sur les options concrètes pour les couples franco-vietnamiens.
    </p>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-creche">Crèches et petite enfance</a></li>
      <li><a href="#section-lfay">Lycée Français Alexandre Yersin (LFAY)</a></li>
      <li><a href="#section-tarifs">Frais de scolarité 2026-2027</a></li>
      <li><a href="#section-inscription">Inscription : procédure EDUKA</a></li>
      <li><a href="#section-vie">Vie pratique avec un enfant à Hanoï</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">
    <p><strong>Un enfant change tout dans la gestion d'une vie d'expat.</strong> Les questions d'école, de pédiatre, de crèche et de sécurité quotidienne deviennent prioritaires. À Hanoï, les familles franco-vietnamiennes ont accès à un réseau d'établissements français solides — mais les tarifs et les procédures d'inscription méritent d'être anticipés.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=1200&q=80" alt="Enfants en classe école" width="1200" height="675" loading="lazy">

    <h2 id="section-creche">Crèches et petite enfance (0-6 ans)</h2>
    <p>Avant l'entrée à l'école maternelle, plusieurs options s'offrent aux familles à Hanoï selon l'âge de l'enfant et la langue souhaitée.</p>

    <h3>La Petite École Hanoï (LPE)</h3>
    <p>La Petite École est une école française bilingue (français + anglais) accueillant les enfants <strong>de 12 mois à 6 ans</strong>. Elle est affiliée à l'AEFE (Agence pour l'Enseignement Français à l'Étranger) et suit le programme français, avec une certification du Ministère de l'Éducation nationale française obtenue en 2024. Elle fait partie du groupe Odyssey Education.</p>
    <ul>
      <li><strong>Adresse</strong> : 52B Duong Tay Ho, Quang An, Tay Ho, Hanoï</li>
      <li><strong>Contact</strong> : <a href="mailto:contact@lpehanoi.com">contact@lpehanoi.com</a> — <a href="https://www.lpehanoi.com" target="_blank" rel="noopener">lpehanoi.com</a></li>
      <li><strong>Langue</strong> : immersion français et anglais, introduction au vietnamien</li>
      <li><strong>Tarifs</strong> : non affichés en ligne — contacter directement l'école pour un devis</li>
    </ul>

    <h3>Acacia Hanoï Tay Ho</h3>
    <p>École maternelle française homologuée AEFE depuis juin 2024, située dans le quartier de Tay Ho (rue To Ngoc Van). Environnement à taille humaine avec jardin.</p>
    <ul>
      <li><strong>Site</strong> : <a href="https://acacia-education.com/fr/creche-et-ecole-maternelle-francaise-de-hanoi-tay-ho/" target="_blank" rel="noopener">acacia-education.com</a></li>
      <li><strong>Tarifs</strong> : sur demande directe à l'école</li>
    </ul>

    <h3>Crèches vietnamiennes</h3>
    <p>Pour les enfants de moins de 12 mois ou les familles souhaitant une immersion en vietnamien dès le plus jeune âge, des crèches privées vietnamiennes de qualité existent dans tous les quartiers. Les tarifs sont nettement inférieurs aux établissements français (comptez 3 à 8 millions VND par mois selon le quartier et les prestations). Le bouche-à-oreille au sein de la famille vietnamienne est souvent le meilleur guide pour en trouver une de confiance.</p>

    <h2 id="section-lfay">Lycée Français Alexandre Yersin (LFAY)</h2>
    <p>Le LFAY est l'établissement de référence pour la scolarité française à Hanoï, de la maternelle (Petite Section, 3 ans) au baccalauréat. Il fait partie du réseau AEFE et accueille environ 900 élèves de nationalités diverses.</p>
    <ul>
      <li><strong>Site</strong> : <a href="https://lfay.com.vn" target="_blank" rel="noopener">lfay.com.vn</a></li>
      <li><strong>Localisation</strong> : Hanoï, centre-ville (Dong Da)</li>
      <li><strong>Programme</strong> : programme français de l'Éducation nationale, de la maternelle au bac (général et technologique)</li>
    </ul>

    <h2 id="section-tarifs">Frais de scolarité 2026-2027</h2>
    <p>Les frais de scolarité au LFAY varient selon le niveau. Les tarifs ci-dessous s'appliquent aux élèves de nationalité française. Pour les autres nationalités, contacter directement l'école. Source : <a href="https://www.international-schools-database.com/in/hanoi/lyc-e-francais-alexandre-yersin-de-hanoi/fees" target="_blank" rel="noopener">International Schools Database</a> (données 2026-2027).</p>

    <table>
      <thead>
        <tr>
          <th>Niveau</th>
          <th>Âge</th>
          <th>Frais annuels (VND)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Maternelle (PS, MS, GS)</td>
          <td>3-5 ans</td>
          <td>149 523 074 VND</td>
        </tr>
        <tr>
          <td>Primaire (CP au CM2)</td>
          <td>6-10 ans</td>
          <td>165 703 928 VND</td>
        </tr>
        <tr>
          <td>Collège (6e à 3e)</td>
          <td>11-14 ans</td>
          <td>191 773 081 VND</td>
        </tr>
        <tr>
          <td>Lycée (2nde à Terminale)</td>
          <td>15-17 ans</td>
          <td>206 455 707 VND</td>
        </tr>
      </tbody>
    </table>

    <p><strong>Frais d'inscription (one-time, première année) : 11 985 818 VND</strong></p>

    <div class="tip-box">
      <strong>Aide à la scolarité pour les Français</strong>
      Les familles françaises expatriées peuvent solliciter une bourse scolaire auprès de l'Agence pour l'Enseignement Français à l'Étranger (AEFE). Les dossiers sont instruits par le consulat. Plus d'infos : <a href="https://aefe.gouv.fr" target="_blank" rel="noopener">aefe.gouv.fr</a>
    </div>

    <h2 id="section-inscription">Inscription au LFAY : la procédure EDUKA</h2>
    <p>Toutes les inscriptions au LFAY se font via le portail en ligne <strong>EDUKA</strong>. Un appel téléphonique ou une visite à l'école ne constituent pas une inscription.</p>

    <h3>Calendrier d'inscription (année scolaire 2026-2027)</h3>
    <ul>
      <li><strong>Ouverture du portail EDUKA</strong> : début février (généralement 1er-2 février)</li>
      <li><strong>Clôture des inscriptions</strong> : début mars</li>
      <li><strong>Décisions maternelle</strong> : début avril</li>
      <li><strong>Décisions primaire/secondaire</strong> : début mai (avec convocation aux tests de niveau si nécessaire)</li>
    </ul>

    <h3>Documents généralement demandés</h3>
    <ul>
      <li>Acte de naissance de l'enfant</li>
      <li>Livret de famille ou passeport</li>
      <li>Derniers bulletins scolaires (pour les classes supérieures à la maternelle)</li>
      <li>Carnet de vaccination à jour</li>
      <li>Preuve de résidence à Hanoï</li>
    </ul>

    <div class="warning-box">
      Le calendrier EDUKA peut varier d'une année à l'autre. Vérifie toujours les dates exactes sur <a href="https://lfay.com.vn" target="_blank" rel="noopener">lfay.com.vn</a> avant de planifier ton arrivée à Hanoï.
    </div>

    <h2 id="section-vie">Vie pratique avec un enfant à Hanoï</h2>

    <h3>Pédiatre et santé</h3>
    <p>Les hôpitaux privés internationaux disposent de services pédiatriques anglophones et francophones. L'<strong>Hôpital Français de Hanoï (HFH)</strong> est souvent la première référence pour les familles francophones. Vinmec dispose également d'une pédiatrie complète. Pour les urgences, les hôpitaux publics (Bệnh viện Nhi Trung Ương — Hôpital National Pédiatrique) restent très compétents médicalement.</p>

    <h3>Pharmacies</h3>
    <p>Les pharmacies sont très accessibles à Hanoï. La chaîne <strong>Long Châu</strong> est l'une des plus fiables et des mieux approvisionnées. Pour les médicaments français spécifiques, certaines pharmacies du quartier expat (Tay Ho, Ba Dinh) en importent.</p>

    <h3>Pollution de l'air</h3>
    <p>La qualité de l'air à Hanoï est un point à surveiller, surtout en hiver (novembre à mars). Consulter <strong>IQAir</strong> ou <strong>AirVisual</strong> quotidiennement est utile. Pour un enfant en bas âge, un purificateur d'air dans la chambre et les salles de vie est recommandé lors des pics de pollution.</p>

    <h3>Activités et loisirs</h3>
    <p>Hanoï propose de nombreuses activités adaptées aux enfants en dehors de l'école : parcs (Hồ Tây, Thống Nhất), piscines dans les complexes résidentiels et les hôtels, cours de natation, arts martiaux, musique. La vie de quartier — notamment à Tay Ho, le quartier le plus prisé des expats — est assez animée et familiale.</p>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="cta-newsletter">
      <h3>Reçois mes prochains articles</h3>
      <p>📥 <strong>Guide PDF + 3 modèles de lettres offerts</strong> dès l'inscription. Un email par mois, désinscription en 1 clic.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a> — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français expatrié à Hanoï. Je partage mon parcours d'installation au Vietnam : démarches, vie de couple mixte et travail en ligne.</p>
        <div class="author-links">
          <a href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">TikTok</a>
          <a href="a-propos-capvietnam">À propos</a>
        </div>
      </div>
    </div>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
require_once __DIR__ . '/config/site.php';
$current_slug = 'vivre-hanoi-avec-enfant-ecole-creche';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
