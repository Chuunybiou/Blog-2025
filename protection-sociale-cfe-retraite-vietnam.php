<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'CFE, protection sociale et retraite quand on travaille depuis le Vietnam : guide 2026';
$page_description = 'Que se passe-t-il pour la Sécurité sociale, la retraite et la CFE quand on s\'installe au Vietnam ? Ce que tu perds, ce que tu gardes, les options pour ne pas se retrouver sans couverture.';
$page_canonical   = SITE_URL . '/protection-sociale-cfe-retraite-vietnam';
$page_og_title    = 'CFE, Sécu et retraite au Vietnam : ce que tout expat doit savoir en 2026';
$page_og_desc     = 'Sécurité sociale, CFE, retraite, assurance privée : guide complet pour les Français qui travaillent depuis le Vietnam et ne veulent pas perdre leurs droits sociaux.';
$page_og_url      = SITE_URL . '/protection-sociale-cfe-retraite-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1559526324-593bc073d938?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'CFE, protection sociale et retraite quand on travaille depuis le Vietnam : guide 2026',
  'datePublished'   => '2026-06-11',
  'dateModified'    => '2026-06-11',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/protection-sociale-cfe-retraite-vietnam',
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
  ['q' => 'La CFE couvre-t-elle bien les soins au Vietnam ?',
   'a' => 'La CFE est une couverture de base — elle rembourse une partie des soins selon le barème de la Sécurité sociale française, ce qui peut laisser un reste à charge important dans des cliniques internationales au Vietnam. La plupart des expatriés couplent la CFE avec une assurance complémentaire internationale pour avoir une couverture réelle sur place. [À VÉRIFIER : taux de remboursement CFE pour soins à l\'étranger en 2026]'],
  ['q' => 'Est-ce que je perds mes trimestres de retraite si je pars au Vietnam ?',
   'a' => 'Si tu cesses toute cotisation retraite française, tu n\'accumules plus de trimestres. Mais tu ne perds pas ceux déjà acquis. Les options pour continuer à cotiser : rester salarié ou en portage (cotisations automatiques), adhérer à l\'assurance vieillesse volontaire de la CNAV depuis l\'étranger, ou cotiser via la CFE. Le calcul de ta retraite finale tiendra compte des trimestres étrangers si une convention bilatérale de sécurité sociale existe entre la France et le Vietnam. [À VÉRIFIER : convention de sécurité sociale France-Vietnam, si elle existe]'],
  ['q' => 'Quel est le coût annuel de la CFE ?',
   'a' => 'Les cotisations CFE sont calculées selon ta tranche de revenus et ta situation familiale. Elles démarrent à environ [À VÉRIFIER : 70–100 €/mois pour une couverture de base 2026]. Il existe plusieurs niveaux de couverture. La CFE publie un simulateur de cotisation sur son site officiel (cfe.fr). [À VÉRIFIER : tarifs exacts 2026]'],
  ['q' => 'Faut-il adhérer à la CFE dès l\'arrivée au Vietnam ou peut-on attendre ?',
   'a' => 'Il y a une condition d\'ancienneté en Sécurité sociale française avant de pouvoir adhérer à la CFE [À VÉRIFIER : condition exacte, généralement 3 mois d\'affiliation préalable]. Surtout, l\'adhésion doit se faire dans un délai à compter de ton départ de France [À VÉRIFIER : délai exact — souvent 3 ou 6 mois]. Passé ce délai, tu ne peux plus adhérer pour certaines garanties. À faire en priorité dès l\'installation.'],
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
      <span>CFE et protection sociale Vietnam</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>CFE, protection sociale et retraite quand on travaille depuis le Vietnam</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 10 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Ce qu'on perd en quittant la Sécu française</a></li>
      <li><a href="#section-2">La CFE : ce qu'elle couvre et son coût</a></li>
      <li><a href="#section-3">L'assurance santé privée internationale</a></li>
      <li><a href="#section-4">La retraite : l'arbre de décision</a></li>
      <li><a href="#section-5">Tableau récapitulatif selon le statut</a></li>
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

    <p><strong>La Sécurité sociale et la retraite sont les deux points qui font le plus peur aux Français qui partent à l'étranger.</strong> À raison : quitter la France sans avoir réfléchi à sa couverture sociale, c'est s'exposer à des frais médicaux énormes ou à une retraite amputée. Ce guide explique ce qui change, ce qu'on peut maintenir et comment.</p>

    <p>Cet article fait partie du dossier <a href="travailler-a-distance-depuis-vietnam">travailler à distance depuis le Vietnam</a>. Pour la partie retraite spécifique au séjour longue durée, lis aussi <a href="retraite-vietnam-francais">prendre sa retraite au Vietnam : guide pour Français</a>.</p>

    <h2 id="section-1">Ce qu'on perd en quittant la Sécu française</h2>
    <p>La perte n'est pas immédiate, mais elle est réelle. Quand tu quittes un emploi salarié français et t'installes au Vietnam :</p>
    <ul>
      <li><strong>Maintien de droits temporaire :</strong> tu conserves tes droits à la Sécu pendant <strong>[À VÉRIFIER : 12 mois maximum, sous conditions de mise à jour CPAM]</strong> après avoir cessé de cotiser</li>
      <li><strong>Remboursements diminués :</strong> la CPAM rembourse les soins à l'étranger selon le barème français, souvent très inférieur aux tarifs réels des hôpitaux vietnamiens</li>
      <li><strong>Chômage :</strong> les droits ARE s'éteignent dès que tu t'installes durablement à l'étranger</li>
      <li><strong>Retraite :</strong> tu cesses d'accumuler des trimestres si tu n'as plus de cotisations</li>
    </ul>

    <h2 id="section-2">La CFE (Caisse des Français de l'Étranger)</h2>
    <p>La CFE est une caisse d'adhésion volontaire créée pour les Français qui vivent à l'étranger. Elle permet de maintenir une couverture maladie-maternité-invalidité française depuis l'étranger.</p>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Caractéristique</th>
          <th>Détails</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Organisme</td>
          <td>CFE — Caisse des Français de l'Étranger (cfe.fr)</td>
        </tr>
        <tr>
          <td>Ce qu'elle couvre</td>
          <td>Maladie, maternité, invalidité, accidents du travail (selon formule)</td>
        </tr>
        <tr>
          <td>Retraite</td>
          <td>Option séparée — assurance vieillesse volontaire via CNAV</td>
        </tr>
        <tr>
          <td>Coût mensuel</td>
          <td>[À VÉRIFIER : ~70–200 €/mois selon tranche de revenus et formule en 2026]</td>
        </tr>
        <tr>
          <td>Condition d'accès</td>
          <td>Avoir été affilié à la Sécu française préalablement [À VÉRIFIER : durée minimum]</td>
        </tr>
        <tr>
          <td>Délai d'adhésion après départ</td>
          <td>[À VÉRIFIER : typiquement 3 ou 6 mois — à vérifier sur cfe.fr]</td>
        </tr>
        <tr>
          <td>Remboursements</td>
          <td>Sur base du barème Sécu française — reste à charge possible sur soins coûteux</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="tip-box">
      <strong>À faire en priorité :</strong> Si tu envisages d'adhérer à la CFE, fais-le dans les premières semaines après ton arrivée au Vietnam. Passé le délai d'adhésion, certaines garanties (notamment invalidité, maternité) ne sont plus accessibles.
    </div>

    <h2 id="section-3">L'assurance santé privée internationale</h2>
    <p>La CFE seule est souvent insuffisante pour les soins au Vietnam, où les cliniques internationales (Vinmec, Family Medical Practice, Hôpital Franco-Vietnamien) pratiquent des tarifs élevés [À VÉRIFIER : tarifs consultation 2026]. La plupart des Français au Vietnam cumulent la CFE avec une assurance complémentaire internationale :</p>
    <ul>
      <li><strong>April International Expat</strong> : courant chez les francophones à l'étranger [À VÉRIFIER : tarifs et couverture actuels]</li>
      <li><strong>Cigna Global</strong>, <strong>ACS</strong>, <strong>AXA International</strong> : autres références du marché</li>
      <li>Prix moyen pour un expat de 30-40 ans : <strong>[À VÉRIFIER : 80–200 €/mois]</strong> selon la couverture et les franchises</li>
    </ul>
    <p>Pour des soins d'urgence et d'hospitalisation, une couverture internationale correcte est indispensable. Le rapatriement sanitaire seul (si nécessaire) peut coûter <strong>[À VÉRIFIER : 20 000–100 000 €]</strong>.</p>
    <div class="info-box">
      <strong>À lire aussi :</strong> → <a href="assurance-sante-vietnam-expat">Assurance santé pour expatrié au Vietnam : le comparatif</a>
    </div>

    <h2 id="section-4">La retraite : l'arbre de décision</h2>
    <p>Partir au Vietnam ne signifie pas sacrifier sa retraite française — mais ça demande d'agir proactivement.</p>

    <div class="info-box">
      <strong>Option 1 — Rester salarié ou en portage salarial</strong><br>
      C'est la solution la plus simple : tes cotisations retraite continuent automatiquement. Tu accumules des trimestres comme si tu travaillais en France. Inconvénient : les charges sont importantes.
    </div>

    <div class="info-box">
      <strong>Option 2 — Assurance vieillesse volontaire (CNAV)</strong><br>
      Tu peux cotiser volontairement à la retraite française depuis l'étranger, via la CNAV (Caisse nationale d'assurance vieillesse). La cotisation est calculée sur une assiette forfaitaire ou réelle. [À VÉRIFIER : montants et conditions d'accès en 2026 sur retraite.gouv.fr]
    </div>

    <div class="info-box">
      <strong>Option 3 — Capitalisation individuelle</strong><br>
      Placements en assurance-vie (contrat luxembourgeois, compte-titres), PEA si tu restes résident fiscal français, fonds de pension privés. À construire en parallèle de la retraite obligatoire, pas en remplacement.
    </div>

    <p>La vraie question est : <strong>combien de trimestres te manquent ?</strong> Si tu pars à 35 ans et reviens à 45 ans, 10 ans sans cotisation, c'est potentiellement 40 trimestres manquants sur 172 requis pour une retraite à taux plein. Le calcul vaut la peine d'être fait.</p>

    <h2 id="section-5">Tableau récapitulatif selon le statut</h2>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Statut</th>
          <th>Sécu</th>
          <th>Retraite</th>
          <th>Chômage</th>
          <th>Ce qu'il faut faire en plus</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Salarié FR en télétravail</td>
          <td>✅ Maintenu</td>
          <td>✅ Trimestres</td>
          <td>✅ ARE</td>
          <td>Souscrire une complémentaire internationale</td>
        </tr>
        <tr>
          <td>Portage salarial</td>
          <td>✅ Régime général</td>
          <td>✅ Trimestres</td>
          <td>✅ ARE (si éligible)</td>
          <td>Complémentaire internationale recommandée</td>
        </tr>
        <tr>
          <td>Micro-entreprise</td>
          <td>Partielle (SSI)</td>
          <td>Partielle (SSI)</td>
          <td>❌</td>
          <td>CFE + complémentaire + CNAV volontaire</td>
        </tr>
        <tr>
          <td>Indépendant sans structure FR</td>
          <td>❌ Rien</td>
          <td>❌ Rien</td>
          <td>❌</td>
          <td>CFE + complémentaire + CNAV volontaire (urgent)</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="warning-box">
      <strong>Disclaimer :</strong> Cet article partage mon expérience et des informations générales, pas un conseil en protection sociale ou juridique personnalisé. Les règles CFE et retraite évoluent. Pour ta situation précise, consulte la CFE directement (cfe.fr) et un expert-comptable spécialisé expatriation.
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
      <p>Un email par mois. Désabonnement en un clic.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a>.</p>
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
$current_slug = 'protection-sociale-cfe-retraite-vietnam';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
