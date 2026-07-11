<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Associations franco-vietnamiennes en France : UGVF, AAFV et autres ressources';
$page_description = 'Quelles associations franco-vietnamiennes peuvent aider un conjoint vietnamien à s\'intégrer en France ? UGVF, AAFV, cours de vietnamien, fêtes culturelles, réseau d\'entraide — guide complet.';
$page_canonical   = SITE_URL . '/associations-franco-vietnamiennes-france';
$page_og_title    = 'Associations franco-vietnamiennes en France : trouver un réseau, des cours et du soutien';
$page_og_desc     = 'UGVF, AAFV, antennes régionales : comment les associations franco-vietnamiennes peuvent aider votre conjoint vietnamien à s\'intégrer en France.';
$page_og_url      = SITE_URL . '/associations-franco-vietnamiennes-france';
$page_og_image    = 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Associations franco-vietnamiennes en France : UGVF, AAFV et autres ressources',
  'datePublished'   => '2026-07-06',
  'dateModified'    => '2026-07-06',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/associations-franco-vietnamiennes-france',
  'image'           => 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1200&q=80',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie de couple franco-vietnamien',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'jade';
$article_hero_bg  = '#1a3a2a';
$article_glow     = 'rgba(27,107,82,0.15)';
$article_badge    = 'rgba(191,74,42,0.25)';
$article_badge_c  = '#e8856a';

$article_category     = 'Vivre Ensemble';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vivre-ensemble';

$page_faq = [
  ['q' => 'Mon conjoint vietnamien parle peu français — les associations peuvent-elles aider ?',
   'a' => 'Oui. L\'UGVF et ses sections régionales organisent des cours de langue, des activités communautaires et des permanences administratives en vietnamien. C\'est un point de départ concret pour trouver un réseau social et des informations dans sa langue maternelle, en attendant une meilleure maîtrise du français.'],
  ['q' => 'Y a-t-il des associations dans toutes les villes de France ?',
   'a' => 'Les grandes villes ont généralement une section UGVF active (Paris, Lyon, Grenoble, Marseille, Lille). Pour les villes moyennes, recherche sur les réseaux sociaux des groupes Facebook locaux comme "Vietnamiens de [ta ville]" — ils sont souvent actifs même sans structure associative formelle.'],
  ['q' => 'Est-ce que ces associations offrent une aide juridique ou administrative ?',
   'a' => 'Certaines sections proposent des permanences d\'accueil et d\'orientation administrative (démarches de visa, titre de séjour, inscription consulaire). Elles n\'ont pas de juristes, mais peuvent orienter vers les bonnes structures. Pour des questions légales précises, consulte un avocat spécialisé en droit des étrangers.'],
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
      <span>Associations franco-vietnamiennes</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">Couple Mixte</span>
    <h1>Associations franco-vietnamiennes en France : trouver un réseau et du soutien</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juillet 2026</span>
      <span>⏱ 6 min de lecture</span>
    </div>
    <p style="color:rgba(250,248,244,0.78);font-size:1.05rem;line-height:1.7;margin-top:1.25rem;">
      Quand ton ou ta conjoint(e) vietnamien(ne) arrive en France, le réseau associatif peut faire une vraie différence : cours de langue, fêtes culturelles, entraide administrative, communauté. Voici les principales associations, comment les contacter et ce qu'elles peuvent apporter.
    </p>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi rejoindre une association</a></li>
      <li><a href="#section-ugvf">UGVF — Union Générale des Vietnamiens de France</a></li>
      <li><a href="#section-aafv">AAFV — Association d'Amitié Franco-Vietnamienne</a></li>
      <li><a href="#section-autres">Autres réseaux et ressources</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn share-copy" href="#" title="Copier le lien" aria-label="Copier le lien de l'article">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">
    <p><strong>Arriver dans un nouveau pays, c'est souvent se sentir seul(e) face aux démarches, à la langue et aux codes culturels.</strong> Pour les conjoints vietnamiens qui rejoignent leur partenaire français en France, les associations franco-vietnamiennes représentent souvent le premier filet social — et une façon de rester connecté à sa culture tout en s'intégrant.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1200&q=80" alt="Personnes autour d'une table lors d'un événement communautaire" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Pourquoi rejoindre une association franco-vietnamienne ?</h2>
    <p>Au-delà du côté social, les associations peuvent concrètement aider à :</p>
    <ul>
      <li><strong>Trouver des repères</strong> dans les démarches administratives françaises (titre de séjour, CAF, CPAM…) grâce à des membres qui sont passés par là</li>
      <li><strong>Garder le lien avec la culture vietnamienne</strong> — langue, cuisine, célébrations du Têt et de la Fête de la mi-automne</li>
      <li><strong>Construire un réseau</strong> professionnel et personnel dans la diaspora</li>
      <li><strong>Trouver des cours de vietnamien</strong> pour les enfants (ou pour le partenaire français)</li>
    </ul>

    <h2 id="section-ugvf">UGVF — Union Générale des Vietnamiens de France</h2>
    <p>L'UGVF est la principale fédération associative de la diaspora vietnamienne en France. Créée en 1976, elle regroupe plusieurs sections régionales et est reconnue au titre de la loi de 1901.</p>

    <h3>Ce que propose l'UGVF</h3>
    <ul>
      <li><strong>Cours de vietnamien</strong> via les écoles Măng Non et Về Nguồn — pour les enfants comme pour les adultes</li>
      <li><strong>Événements culturels</strong> : Têt (Nouvel An lunaire), Tết Trung Thu (Fête de la mi-automne), olympiades sportives, festival Ici Vietnam</li>
      <li><strong>Action humanitaire</strong> : collectes pour les victimes de catastrophes naturelles au Vietnam, programmes d'aide à l'éducation</li>
      <li><strong>Orientation administrative</strong> : conseils pour les démarches, mises en relation</li>
      <li><strong>Offres d'emploi et réseau pro</strong> dans la communauté</li>
    </ul>

    <h3>Sections régionales</h3>
    <table>
      <thead>
        <tr>
          <th>Section</th>
          <th>Ville</th>
          <th>Sigle</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Union des Vietnamiens d'Isère</td><td>Grenoble</td><td>UGVI</td></tr>
        <tr><td>Union des Vietnamiens du Rhône</td><td>Lyon</td><td>UGVR</td></tr>
        <tr><td>Union des Vietnamiens de Marseille</td><td>Marseille</td><td>UGVM</td></tr>
        <tr><td>Union des Vietnamiens du Nord</td><td>Lille</td><td>UGVL</td></tr>
        <tr><td>Siège national</td><td>Paris (Île-de-France)</td><td>UGVF</td></tr>
      </tbody>
    </table>

    <div class="tip-box">
      <strong>Comment contacter l'UGVF</strong>
      Site officiel : <a href="https://www.ugvf.org" target="_blank" rel="noopener">ugvf.org</a>. Les contacts des sections régionales sont listés sur le site. L'adhésion est payante (cotisation annuelle) et donne accès aux services et événements.
    </div>

    <h2 id="section-aafv">AAFV — Association d'Amitié Franco-Vietnamienne</h2>
    <p>L'AAFV est l'une des plus anciennes associations franco-vietnamiennes de France, fondée en 1961. Elle n'est pas une association de la diaspora au sens strict, mais une association d'amitié bilatérale regroupant des Français et des Vietnamiens engagés pour les relations entre les deux pays.</p>

    <h3>Les axes de l'AAFV</h3>
    <ul>
      <li><strong>Agent Orange</strong> : l'AAFV documente et porte à la connaissance du public les conséquences sanitaires et environnementales des défoliants utilisés entre 1961 et 1971 (2,6 millions d'hectares affectés) — un sujet qui touche de nombreuses familles vietnamiennes</li>
      <li><strong>Échanges culturels</strong> : colloques (dont au Sénat français), expositions, coopérations avec des médias (ARTE)</li>
      <li><strong>Solidarité</strong> : aide à l'éducation pour des enfants vietnamiens</li>
      <li><strong>Publication</strong> : revue trimestrielle <em>Perspectives</em>, sur abonnement</li>
    </ul>

    <h3>Comités locaux</h3>
    <p>L'AAFV dispose de comités locaux à Paris, Lyon, Marseille, Bordeaux et dans d'autres villes. Contact national :</p>
    <ul>
      <li>44 rue Alexis Lepère, 93100 Montreuil</li>
      <li><a href="mailto:contact@aafv.org">contact@aafv.org</a></li>
      <li>Site : <a href="https://www.aafv.org" target="_blank" rel="noopener">aafv.org</a></li>
    </ul>

    <div class="tip-box">
      <strong>À qui s'adresse l'AAFV ?</strong>
      L'AAFV convient davantage à ceux qui veulent s'engager sur les relations franco-vietnamiennes, la mémoire historique ou l'action solidaire. Pour une intégration quotidienne et un réseau communautaire, l'UGVF et ses sections régionales sont plus adaptées.
    </div>

    <h2 id="section-autres">Autres réseaux et ressources</h2>
    <p>Au-delà des grandes associations nationales, plusieurs ressources informelles sont très actives :</p>

    <h3>Groupes Facebook et Zalo</h3>
    <p>La diaspora vietnamienne est très présente sur Facebook (groupes "Vietnamiens de Paris", "Viet France", etc.) et sur Zalo (messagerie très utilisée au Vietnam). Ces groupes sont souvent les plus réactifs pour des questions pratiques du quotidien : trouver un coiffeur, une épicerie asiatique, un plombier francophone, ou simplement partager une recette.</p>

    <h3>Épiceries et restaurants vietnamiens</h3>
    <p>Dans les grandes villes, les commerces tenus par la communauté sont souvent des hubs d'information informels. À Paris notamment, le 13e arrondissement (autour d'Olympiades) est historiquement le quartier de la diaspora asiatique.</p>

    <h3>Cours de langue</h3>
    <p>Pour un(e) Français(e) qui souhaite apprendre le vietnamien afin de mieux communiquer avec la famille de son ou sa conjoint(e), plusieurs options existent : cours particuliers via des plateformes de mise en relation (Italki, Preply), cours en présentiel dans les sections UGVF, et certaines universités (INALCO à Paris propose un cursus vietnamien).</p>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="warning-box">
      Les informations de contact et les activités des associations peuvent évoluer. Vérifie toujours sur le site officiel avant de te déplacer ou de prendre contact.
    </div>

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

    <?php
$author_bio = <<<'BIO'
Français expatrié à Hanoï. Je partage mon parcours d'installation au Vietnam : démarches, vie de couple mixte et travail en ligne.
BIO;
$author_links = <<<'LINKS'
<a href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">TikTok</a>
          <a href="a-propos-capvietnam">À propos</a>
LINKS;
include '_author-box.php';
?>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
require_once __DIR__ . '/config/site.php';
$current_slug = 'associations-franco-vietnamiennes-france';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
