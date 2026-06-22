<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'PACS avec un(e) Vietnamien(ne) : reconnaissance en France et au Vietnam 2026';
$page_description = 'Le PACS avec un(e) partenaire vietnamien(ne) est possible mais limité. Il ne donne pas droit au visa conjoint en France. Voici ce que le PACS permet et ne permet pas en 2026.';
$page_canonical   = SITE_URL . '/pacs-vietnamienne-reconnaissance';
$page_og_title    = 'PACS avec un(e) Vietnamien(ne) : ce que ça change (et ne change pas) en 2026';
$page_og_desc     = 'PACS et conjoint vietnamien : droits en France, reconnaissance au Vietnam, alternatives au PACS pour l\'installation.';
$page_og_url      = SITE_URL . '/pacs-vietnamienne-reconnaissance';
$page_og_image    = 'https://images.unsplash.com/photo-1529636798458-92182e662485?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'PACS avec un(e) Vietnamien(ne) : reconnaissance en France et au Vietnam 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/pacs-vietnamienne-reconnaissance',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Démarches Administratives',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'jade';
$article_hero_bg      = '#1a3a2a';
$article_glow         = 'rgba(27,107,82,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Démarches Admin';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'Le PACS permet-il d\'obtenir un visa pour faire venir son/sa partenaire vietnamien(ne) en France ?',
   'a' => 'Non. Le PACS ne donne pas droit au visa "conjoint de Français". Pour qu\'un partenaire vietnamien puisse s\'installer en France par voie familiale, le mariage est la seule voie. Le PACS peut faciliter certains dossiers (concubinage notoire) mais ne crée pas de droit au séjour.'],
  ['q' => 'Le PACS est-il reconnu au Vietnam ?',
   'a' => 'Non. Le droit vietnamien ne reconnaît pas le PACS ni aucun équivalent. Côté vietnamien, votre relation n\'a pas de statut légal particulier. Cela peut poser des problèmes pratiques notamment pour les droits de succession ou l\'autorité parentale.'],
  ['q' => 'Peut-on se pacser et se marier ensuite pour régulariser la situation ?',
   'a' => 'Oui, le PACS peut être conclu puis dissoluit pour contracter mariage. Certains couples commencent par un PACS côté français pour certains avantages fiscaux (imposition commune en France), puis se marient ensuite pour les droits migratoires.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Démarches Administratives</a><span class="breadcrumb-sep">›</span>
      <span>PACS avec un(e) Vietnamien(ne)</span>
    </div>
    <span class="article-badge-hero">Couple Mixte</span>
    <h1>PACS avec un(e) Vietnamien(ne) : ce que ça change (et ne change pas) en 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 7 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Ce que le PACS permet en France</a></li>
      <li><a href="#section-2">Ce que le PACS ne permet pas</a></li>
      <li><a href="#section-3">Le PACS est-il reconnu au Vietnam ?</a></li>
      <li><a href="#section-4">Comment conclure un PACS avec un(e) Vietnamien(ne)</a></li>
      <li><a href="#section-5">PACS ou mariage : quelle stratégie ?</a></li>
      <li><a href="#section-6">Le concubinage notoire comme alternative</a></li>
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
    <p><strong>La question du PACS avec un(e) partenaire vietnamien(ne) mérite une réponse claire : le PACS donne des droits en France, mais pas celui de faire venir son/sa partenaire s'installer.</strong> Pour beaucoup de couples franco-vietnamiens, c'est la révélation qui les pousse finalement à se marier. Ce guide t'explique exactement ce que le PACS change — et ce qu'il ne change pas.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1529636798458-92182e662485?w=1200&q=80" alt="Couple partenariat civil PACS" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Ce que le PACS permet en France</h2>
    <p>En France, le PACS entre un Français et un(e) ressortissant(e) étranger(ère) crée des effets juridiques :</p>
    <ul>
      <li><strong>Régime fiscal commun</strong> : imposition commune pour les impôts français — potentiellement avantageux</li>
      <li><strong>Droits de succession allégés</strong> : entre partenaires pacsés, les droits de succession sont exonérés en ligne directe [À VÉRIFIER]</li>
      <li><strong>Certaines prestations sociales</strong> : la CAF prend en compte les ressources du partenaire même étranger</li>
      <li><strong>Protection du logement commun</strong> : si vous vivez ensemble en France</li>
      <li><strong>Prise en compte pour certains dossiers administratifs</strong> : mutuelles, certaines banques</li>
    </ul>

    <h2 id="section-2">Ce que le PACS ne permet pas</h2>
    <p>C'est là où beaucoup de couples sont surpris :</p>
    <ul>
      <li><strong>Le PACS ne donne pas droit au visa "conjoint de Français"</strong> pour faire venir son/sa partenaire en France</li>
      <li>Le PACS ne confère pas le statut de "conjoint de Français" au regard du droit des étrangers</li>
      <li>Il ne donne pas accès au regroupement familial</li>
      <li>Il ne remplace pas le mariage pour la plupart des démarches migratoires</li>
    </ul>
    <p>Si tu veux que ton/ta partenaire vietnamien(ne) s'installe en France par voie familiale, le mariage reste obligatoire. → <a href="faire-venir-conjointe-vietnamienne-france">Guide complet du regroupement familial franco-vietnamien</a></p>

    <h2 id="section-3">Le PACS est-il reconnu au Vietnam ?</h2>
    <p>Non. Le Vietnam ne connaît pas d'équivalent au PACS et ne reconnaît pas les unions civiles étrangères autres que le mariage. Pour les autorités vietnamiennes, tu es simplement un étranger vivant avec un(e) Vietnamien(ne) sans statut légal particulier.</p>
    <p>Conséquences pratiques :</p>
    <ul>
      <li>Pas de protection légale particulière en cas de séparation au Vietnam</li>
      <li>Pas de droits de succession automatiques côté vietnamien</li>
      <li>Le bail du logement, les comptes bancaires, etc. doivent être gérés individuellement</li>
    </ul>

    <h2 id="section-4">Comment conclure un PACS avec un(e) Vietnamien(ne)</h2>
    <p>Si ton/ta partenaire est en France avec un visa valide, vous pouvez vous pacser à la mairie (depuis 2017) ou chez un notaire.</p>
    <p>Documents requis [À VÉRIFIER liste complète] :</p>
    <ul>
      <li>Convention de PACS (rédigée par les partenaires ou chez un notaire)</li>
      <li>Acte de naissance de chacun (moins de 6 mois, traduit pour la pièce étrangère)</li>
      <li>Justificatif d'identité (passeport vietnamien + visa ou titre de séjour valide)</li>
      <li>Justificatif de domicile commun ou séparé</li>
      <li>Certificat de non-PACS (obtenu auprès du Service Central de l'État Civil de Nantes)</li>
    </ul>
    <p>Si le/la partenaire vietnamien(ne) est encore au Vietnam, il n'est pas possible de se pacser à distance. Il doit être physiquement présent en France avec un visa valide.</p>

    <h2 id="section-5">PACS ou mariage : quelle stratégie pour un couple franco-vietnamien ?</h2>

    <table>
      <thead>
        <tr>
          <th>Critère</th>
          <th>PACS</th>
          <th>Mariage</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Visa pour installation en France</td>
          <td>Non</td>
          <td>Oui (visa conjoint de Français)</td>
        </tr>
        <tr>
          <td>Avantages fiscaux en France</td>
          <td>Oui (imposition commune)</td>
          <td>Oui (idem)</td>
        </tr>
        <tr>
          <td>Succession</td>
          <td>Avantages partiels</td>
          <td>Droits plus étendus</td>
        </tr>
        <tr>
          <td>Reconnaissance au Vietnam</td>
          <td>Non</td>
          <td>Oui (après transcription CCAM/Nantes)</td>
        </tr>
        <tr>
          <td>Facilité de rupture</td>
          <td>Plus simple</td>
          <td>Divorce nécessaire</td>
        </tr>
      </tbody>
    </table>

    <p>Si l'objectif final est que votre partenaire vive en France avec toi, le mariage est incontournable. Le PACS peut être une étape intermédiaire pour officialiser la relation côté français pendant une période de transition.</p>

    <h2 id="section-6">Le concubinage notoire comme alternative partielle</h2>
    <p>Le concubinage (union libre) notoire peut être pris en compte dans certains dossiers de visa, notamment pour le renouvellement d'un titre de séjour déjà existant ("liens personnels et familiaux"). Mais il ne crée pas de droit d'entrée sur le territoire. Il faut des preuves solides de vie commune durable (au moins 2 ans selon les préfectures [À VÉRIFIER]).</p>

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
$current_slug = 'pacs-vietnamienne-reconnaissance';
$current_cat  = 'mariage';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
