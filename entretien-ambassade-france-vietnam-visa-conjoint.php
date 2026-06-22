<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Entretien à l\'ambassade de France au Vietnam pour visa conjoint : comment se préparer';
$page_description = 'L\'ambassade de France peut convoquer ton conjoint vietnamien à un entretien avant de délivrer le visa long séjour. Voici ce qu\'il faut préparer pour maximiser les chances de succès.';
$page_canonical   = SITE_URL . '/entretien-ambassade-france-vietnam-visa-conjoint';
$page_og_title    = 'Entretien ambassade France Vietnam pour visa conjoint : se préparer en 2026';
$page_og_desc     = 'Quelles questions pose l\'ambassade ? Comment préparer son conjoint ? Quelles preuves rassembler ? Guide complet pour l\'entretien visa.';
$page_og_url      = SITE_URL . '/entretien-ambassade-france-vietnam-visa-conjoint';
$page_og_image    = 'https://images.unsplash.com/photo-1560472355-109703aa3edc?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Entretien à l\'ambassade de France au Vietnam pour visa conjoint : comment se préparer',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/entretien-ambassade-france-vietnam-visa-conjoint',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vivre ensemble : ici ou là-bas',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'jade';
$article_hero_bg      = '#1a3a2a';
$article_glow         = 'rgba(27,107,82,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Vivre ensemble';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vivre-ensemble';
$page_faq = [
  ['q' => 'Est-ce que l\'entretien est systématique pour les conjoints vietnamiens ?',
   'a' => 'Non, il n\'est pas automatique mais il est fréquent. L\'ambassade de France au Vietnam convoque notamment les demandeurs dont le dossier présente des points à éclaircir ou pour lesquels la réalité de la vie commune mérite d\'être vérifiée.'],
  ['q' => 'Dans quelle langue se déroule l\'entretien ?',
   'a' => 'En français ou en anglais selon le niveau du demandeur. L\'entretien peut également se dérouler partiellement en vietnamien. Un interprète peut être autorisé — renseigne-toi auprès de l\'ambassade au moment de la convocation.'],
  ['q' => 'Mon conjoint peut-il être accompagné lors de l\'entretien ?',
   'a' => 'En général non : l\'entretien est individuel et le conjoint français n\'est pas admis. L\'objectif est de vérifier la sincérité du mariage en posant des questions séparément aux deux époux si nécessaire.'],
  ['q' => 'Que se passe-t-il si mon conjoint répond mal à une question ?',
   'a' => 'Une seule réponse erronée ne suffit pas à justifier un refus. L\'agent évalue l\'ensemble de l\'entretien et du dossier. Ce qui compte, c\'est la cohérence globale et la sincérité perçue.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=vivre-ensemble">Vivre ensemble</a><span class="breadcrumb-sep">›</span>
      <a href="faire-venir-conjointe-vietnamienne-france">Conjoint vietnamien en France</a><span class="breadcrumb-sep">›</span>
      <span>Entretien ambassade</span>
    </div>
    <span class="article-badge-hero">Vivre ensemble</span>
    <h1>Entretien à l'ambassade de France au Vietnam pour visa conjoint : se préparer efficacement</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 8 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi l'ambassade convoque ?</a></li>
      <li><a href="#section-2">Comment se préparer</a></li>
      <li><a href="#section-3">Les questions types posées</a></li>
      <li><a href="#section-4">Les preuves à apporter</a></li>
      <li><a href="#section-5">Le jour de l'entretien</a></li>
      <li><a href="#section-6">Après l'entretien</a></li>
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
    <p><strong>La convocation à l'entretien à l'ambassade fait souvent peur.</strong> C'est normal — c'est l'étape où tu as le moins de contrôle direct. Pourtant, si votre mariage est sincère et votre dossier solide, cet entretien ne devrait pas poser de problème. Ce guide te dit exactement comment préparer ton conjoint pour qu'il arrive confiant et bien préparé.</p>

    <p>Cet article fait partie du <a href="faire-venir-conjointe-vietnamienne-france">guide complet : faire venir son conjoint vietnamien en France</a>.</p>

    <h2 id="section-1">Pourquoi l'ambassade organise-t-elle un entretien ?</h2>
    <p>Le visa "conjoint de Français" est une voie d'installation régulière très demandée. L'ambassade est chargée de vérifier que le mariage est bien réel et non de convenance — un mariage de convenance étant défini comme un mariage contracté dans le seul but d'obtenir un droit au séjour, sans vie commune réelle.</p>
    <p>L'entretien permet à l'agent consulaire :</p>
    <ul>
      <li>De s'assurer que les deux époux se connaissent vraiment</li>
      <li>De vérifier la cohérence du récit de votre relation</li>
      <li>D'évaluer le projet de vie commun en France</li>
      <li>De détecter d'éventuelles incohérences avec le dossier écrit</li>
    </ul>
    <p>Attention : l'entretien n'est pas systématique. Il est convoqué selon le profil du dossier.</p>

    <div style="background:linear-gradient(135deg,#0d2b1f,#1b4a35);border-radius:10px;padding:1.5rem 2rem;margin:1.5rem 0;display:flex;align-items:center;justify-content:space-between;gap:1.5rem;flex-wrap:wrap">
      <div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:0.4rem">📅 Outil interactif</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.05rem;color:#faf8f4;margin-bottom:0.25rem">Rétroplanning — de la CCAM au visa</h3>
        <p style="font-size:0.87rem;color:rgba(250,248,244,0.55);margin:0">Planifiez vos démarches pour ne rien rater avant l'entretien</p>
      </div>
      <a href="simulateur-retroplanning-conjoint" style="flex-shrink:0;display:inline-flex;align-items:center;gap:0.5rem;padding:0.7rem 1.4rem;background:#4db890;color:#0d2b1f;border-radius:5px;font-weight:700;font-size:0.87rem;text-decoration:none;white-space:nowrap">Voir le simulateur →</a>
    </div>

    <h2 id="section-2">Comment préparer ton conjoint à l'entretien</h2>
    <p>La meilleure préparation, c'est la sincérité — mais ça ne suffit pas. Il faut que ton conjoint connaisse les informations de base sur toi, sur vous, et sur le projet commun. Voici ce qu'il doit maîtriser :</p>
    <ul>
      <li><strong>Ta situation en France</strong> : où tu habites exactement, dans quel logement, depuis quand, si tu travailles ou non</li>
      <li><strong>L'histoire de votre rencontre</strong> : comment vous vous êtes rencontrés, quand, à quelle occasion</li>
      <li><strong>Les dates clés de votre relation</strong> : premier voyage ensemble, demande en mariage, date du mariage civil</li>
      <li><strong>Le projet en France</strong> : dans quelle ville elle va s'installer, les proches qui seront là, ce qu'elle envisage de faire professionnellement</li>
      <li><strong>Ta famille</strong> : qui sont tes parents, as-tu des frères et sœurs, les connaît-il/elle ?</li>
    </ul>

    <h2 id="section-3">Questions types posées lors de l'entretien</h2>
    <p>Ces questions sont compilées à partir de retours de couples franco-vietnamiens — elles ne sont pas officielles et peuvent varier.</p>

    <div style="overflow-x:auto;border-radius:10px;border:1px solid rgba(77,200,160,0.18);margin:1.5rem 0;">
    <table style="width:100%;border-collapse:collapse;font-size:0.9rem;">
      <thead>
        <tr style="background:rgba(27,107,82,0.25);">
          <th style="padding:0.7rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;width:28%;">THÈME</th>
          <th style="padding:0.7rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">QUESTIONS POSSIBLES</th>
        </tr>
      </thead>
      <tbody>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">Votre rencontre</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Comment vous vous êtes rencontrés ? Quand ? Où ? Par l'intermédiaire de qui ?</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">Votre relation</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Depuis combien de temps êtes-vous ensemble ? Combien de fois vous êtes-vous vus en personne ?</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">Votre conjoint</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Où est-il né ? Que fait-il dans la vie ? Combien gagne-t-il environ ? Où habite-t-il ?</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">Le mariage</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Qui a fait la demande en mariage ? Où et quand a eu lieu le mariage ?</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">La vie en France</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Où allez-vous habiter ? Vous a-t-il déjà présenté à sa famille ?</td>
        </tr>
        <tr>
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">Le futur</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Qu'est-ce que vous comptez faire en France ? Avez-vous des projets d'enfants ?</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="tip-box">
      <strong>Ne récitez pas un script.</strong> Les agents sont formés pour repérer les réponses mémorisées. Préparez les faits, pas les réponses mot pour mot. La fluidité naturelle vaut mieux que la précision mécanique.
    </div>

    <h2 id="section-4">Les preuves de vie commune à apporter</h2>
    <p>Ton conjoint peut apporter un dossier de preuves de votre vie commune pour appuyer l'entretien. Ces preuves ne sont pas toujours demandées mais elles renforcent la crédibilité :</p>
    <ul>
      <li><strong>Photos</strong> : ensemble en différents lieux et différentes occasions (voyages, repas de famille, activités quotidiennes)</li>
      <li><strong>Billets d'avion</strong> : preuve de tes séjours au Vietnam et des siens éventuels</li>
      <li><strong>Captures d'écran de conversations</strong> (WhatsApp, Zalo…) sur une longue période</li>
      <li><strong>Preuves de transferts d'argent</strong> si vous vous êtes soutenus financièrement</li>
      <li><strong>Lettres ou emails</strong> échangés</li>
      <li><strong>Témoignages</strong> écrits de proches qui vous ont vus ensemble (valeur indicative — non officiellement requis mais peuvent renforcer le dossier)</li>
    </ul>

    <h2 id="section-5">Le déroulement du jour de l'entretien</h2>
    <p>Ton conjoint se présente à l'ambassade (Hanoï) ou au consulat général (Hô Chi Minh-Ville) à l'heure indiquée sur la convocation. Il faut généralement arriver <strong>en avance</strong> car les procédures de sécurité à l'entrée prennent du temps.</p>
    <p>À apporter le jour J :</p>
    <ul>
      <li>La convocation originale</li>
      <li>Le passeport</li>
      <li>Le dossier de demande de visa complet (au cas où des documents supplémentaires seraient demandés)</li>
      <li>Le dossier de preuves de vie commune</li>
    </ul>
    <p>L'entretien lui-même dure généralement entre 15 et 45 minutes. L'agent peut demander à voir certains documents apportés.</p>

    <h2 id="section-6">Après l'entretien</h2>
    <p>L'agent ne donne pas de réponse immédiate à l'issue de l'entretien. Le dossier repart en instruction et la décision (accord ou refus) est notifiée dans les semaines suivantes.</p>
    <p>Si le visa est accordé : ton conjoint récupère son passeport avec le visa auprès de VFS Global (en personne ou en le faisant envoyer par courrier sécurisé). Si le visa est refusé : un recours est possible. → Voir <a href="visa-long-sejour-conjoint-vietnamien-france">notre article sur les recours en cas de refus de visa</a>.</p>

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
        <p>Français marié à une Vietnamienne, installé à Hanoï. Je partage notre parcours : démarches administratives, mariage franco-vietnamien, vie de couple mixte.</p>
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
$current_slug = 'entretien-ambassade-france-vietnam-visa-conjoint';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
