<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Portage salarial ou micro-entreprise au Vietnam : lequel choisir ?';
$page_description = 'Portage salarial ou micro-entreprise quand on vit au Vietnam ? Tableau comparatif complet, piège de la domiciliation, arbre de décision pour freelances français expatriés.';
$page_canonical   = SITE_URL . '/portage-salarial-ou-micro-entreprise-vietnam';
$page_og_title    = 'Portage salarial ou micro-entreprise au Vietnam : comparatif 2026';
$page_og_desc     = 'Le piège de la micro-entreprise quand on n\'est plus résident fiscal français, et pourquoi le portage salarial est souvent plus sûr pour un expat au Vietnam.';
$page_og_url      = SITE_URL . '/portage-salarial-ou-micro-entreprise-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Portage salarial ou micro-entreprise au Vietnam : lequel choisir ?',
  'datePublished'   => '2026-06-11',
  'dateModified'    => '2026-06-11',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/portage-salarial-ou-micro-entreprise-vietnam',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Argent & Travail',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'amber';
$article_hero_bg      = '#2a1f00';
$article_glow         = 'rgba(184,134,11,0.18)';
$article_badge        = 'rgba(184,134,11,0.25)';
$article_badge_c      = 'var(--amber-soft)';

$article_category     = 'Argent & Travail';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=argent';

$page_faq = [
  ['q' => 'Peut-on garder sa micro-entreprise quand on s\'installe au Vietnam ?',
   'a' => 'Techniquement oui, mais ça pose des problèmes. La micro-entreprise requiert une domiciliation en France [À VÉRIFIER : article L123-11 du Code de commerce]. Si tu n\'es plus résident fiscal français, cette domiciliation peut être contestée par l\'URSSAF ou l\'administration fiscale. La situation est floue, pas automatiquement illégale, mais risquée si tu es contrôlé.'],
  ['q' => 'La micro-entreprise fonctionne-t-elle pour facturer des clients au Vietnam ?',
   'a' => 'Pour facturer des clients vietnamiens depuis une micro-entreprise française, les clients devront régler en euros vers ton compte français. Ce n\'est pas interdit, mais peu pratique pour des clients locaux. Pour des clients français ou européens depuis le Vietnam, ça fonctionne mieux.'],
  ['q' => 'Y a-t-il une limite de CA pour la micro-entreprise pertinente pour un expat ?',
   'a' => 'Les plafonds micro-entreprise sont [À VÉRIFIER : 77 700 € pour les prestations de services BNC/BIC en 2026]. Si tu dépasses ces seuils, tu bascules en régime réel, ce qui complexifie la comptabilité. Pour un freelance avec un bon CA, le portage salarial offre souvent plus de souplesse.'],
  ['q' => 'Peut-on passer de la micro-entreprise au portage salarial facilement ?',
   'a' => 'Oui. La fermeture d\'une micro-entreprise se fait en ligne sur autoentrepreneur.urssaf.fr. Dès que tu ouvres ton compte avec une société de portage et signes ton premier contrat, tu passes en portage. Il n\'y a pas de délai de carence obligatoire. Attention aux missions en cours et aux clients déjà facturés depuis la micro.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=argent">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Portage ou micro-entreprise au Vietnam</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Portage salarial ou micro-entreprise quand on vit au Vietnam ? Le vrai comparatif</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 9 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Le piège de la micro-entreprise à l'étranger</a></li>
      <li><a href="#section-2">Tableau comparatif complet</a></li>
      <li><a href="#section-3">Arbre de décision</a></li>
      <li><a href="#section-4">Le cas "résident fiscal vietnamien"</a></li>
      <li><a href="#section-5">Le cas "résident fiscal français"</a></li>
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

    <p><strong>La micro-entreprise a une réputation de simplicité qui attire beaucoup d'expats. Mais dès qu'on n'est plus résident fiscal français, cette simplicité devient un flou juridique inconfortable.</strong> Le portage salarial coûte plus cher, mais il est plus propre pour un Français installé au Vietnam à long terme.</p>

    <p>Cet article fait partie du dossier <a href="travailler-a-distance-depuis-vietnam">travailler à distance depuis le Vietnam</a>. Si tu es sûr de vouloir le portage, le <a href="portage-salarial-depuis-vietnam">guide complet du portage salarial depuis le Vietnam</a> t'attend.</p>

    <h2 id="section-1">Le piège de la micro-entreprise quand on n'est plus résident fiscal français</h2>
    <p>Voici le problème concret. La micro-entreprise est un régime fiscal et social français. Elle suppose que :</p>
    <ul>
      <li>Ton activité est domiciliée en France [À VÉRIFIER : conditions exactes de domiciliation URSSAF]</li>
      <li>Tu paies tes cotisations sociales en France (SSI / Sécurité sociale des indépendants)</li>
      <li>Tu remplis une déclaration de revenus française</li>
    </ul>
    <p>Si tu passes 10 mois par an au Vietnam, que tu y vis, que tu y travailles depuis ton appartement à Hanoï… l'administration française peut estimer que ton activité n'est plus domiciliée en France. Et là, la situation devient compliquée :</p>
    <ul>
      <li>L'URSSAF peut remettre en cause tes cotisations</li>
      <li>L'administration fiscale peut demander des arriérés si elle considère que tu aurais dû payer au Vietnam</li>
      <li>La domiciliation fictive (tu louges une adresse en France sans y travailler) est légalement risquée</li>
    </ul>

    <div class="warning-box">
      <strong>Ce n'est pas automatiquement interdit</strong>, et des milliers de Français le font sans problème. Mais en cas de contrôle fiscal, la situation est difficile à défendre si ta vie entière est au Vietnam. [À VÉRIFIER : jurisprudence récente URSSAF sur les micro-entrepreneurs non-résidents]
    </div>

    <h2 id="section-2">Tableau comparatif complet</h2>
    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Critère</th>
          <th>Portage salarial</th>
          <th>Micro-entreprise</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Retraite française</td>
          <td>✅ Cotisations complètes</td>
          <td>Partielle (SSI/RSI)</td>
        </tr>
        <tr>
          <td>Assurance chômage</td>
          <td>✅ Oui (si éligible ARE)</td>
          <td>❌ Non</td>
        </tr>
        <tr>
          <td>Sécurité sociale</td>
          <td>✅ Régime général</td>
          <td>Partielle (SSI)</td>
        </tr>
        <tr>
          <td>Charges sociales</td>
          <td>Élevées (~45–50 % sur brut)</td>
          <td>Faibles (micro)</td>
        </tr>
        <tr>
          <td>Complexité admin</td>
          <td>Délégué à la société</td>
          <td>✅ Très simple</td>
        </tr>
        <tr>
          <td>Crédibilité client FR</td>
          <td>✅ Facture pro, contrat</td>
          <td>Correcte</td>
        </tr>
        <tr>
          <td>Compatibilité expatriation longue durée</td>
          <td>✅ Bonne</td>
          <td>⚠️ Risquée si non-résident fiscal</td>
        </tr>
        <tr>
          <td>CA maximum annuel</td>
          <td>Illimité</td>
          <td>[À VÉRIFIER : ~77 700 € en 2026 pour services]</td>
        </tr>
        <tr>
          <td>Coût pour 3 000 € CA/mois</td>
          <td>~[À VÉRIFIER] € nets</td>
          <td>~[À VÉRIFIER] € nets</td>
        </tr>
        <tr>
          <td>Problème domiciliation</td>
          <td>Non (société en France)</td>
          <td>⚠️ Oui si non-résident</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-3">Arbre de décision simplifié</h2>

    <div class="info-box">
      <strong>Passe plus de 183 jours/an au Vietnam ?</strong><br><br>
      → <strong>OUI</strong> : tu es potentiellement résident fiscal vietnamien → le portage salarial est plus sécurisé<br>
      → <strong>NON</strong> : tu restes résident fiscal français → la micro-entreprise est plus facile à maintenir<br><br>
      <strong>Ton CA dépasse 5 000 €/mois ?</strong><br><br>
      → <strong>OUI</strong> : le portage salarial devient compétitif même en charges (meilleure protection sociale)<br>
      → <strong>NON</strong> : la micro-entreprise reste souvent plus avantageuse si résident fiscal français<br><br>
      <strong>Tu veux les droits au chômage ?</strong><br><br>
      → <strong>OUI</strong> : portage salarial obligatoire<br>
      → <strong>NON</strong> : les deux options sont possibles
    </div>

    <h2 id="section-4">Le cas "résident fiscal vietnamien"</h2>
    <p>Si tu passes l'essentiel de ton temps au Vietnam (183+ jours) et que tes intérêts économiques principaux y sont, la loi vietnamienne te considère résident fiscal local. Dans ce cas :</p>
    <ul>
      <li>Le Vietnam a le droit d'imposer tes revenus mondiaux [À VÉRIFIER : article 2 de la Loi sur l'impôt sur le revenu des personnes physiques du Vietnam]</li>
      <li>La convention France-Vietnam de 1993 répartit les droits d'imposition entre les deux pays</li>
      <li>Maintenir une micro-entreprise française dans ce contexte est très ambigu</li>
      <li>Le portage salarial, lui, est clairement un revenu de source française — la convention lui applique des règles précises</li>
    </ul>
    <p>Lire l'article complet : <a href="residence-fiscale-france-vietnam-183-jours">résidence fiscale France-Vietnam et règle des 183 jours</a>.</p>

    <h2 id="section-5">Le cas "résident fiscal français"</h2>
    <p>Si tu passes moins de 183 jours au Vietnam dans l'année ET que ton foyer principal, tes comptes, ta famille restent en France… tu restes résident fiscal français. Dans ce cas :</p>
    <ul>
      <li>La micro-entreprise fonctionne normalement</li>
      <li>Tu paies tes impôts en France sur l'ensemble de tes revenus</li>
      <li>Le portage reste une option (et souvent meilleure pour la protection sociale), mais la micro n'est pas problématique</li>
    </ul>

    <div class="warning-box">
      <strong>Disclaimer :</strong> Cet article partage mon expérience et des informations générales, pas un conseil fiscal ou juridique personnalisé. Pour ta situation précise, consulte un expert-comptable ou un avocat fiscaliste spécialisé en expatriation.
    </div>

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
$current_slug = 'portage-salarial-ou-micro-entreprise-vietnam';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
