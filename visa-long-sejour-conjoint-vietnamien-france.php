<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Visa long séjour conjoint de Français : dossier complet 2026';
$page_description = 'Comment obtenir le visa long séjour pour ton conjoint vietnamien en France ? Documents requis, dépôt via VFS Global, délais et conseils pour un dossier solide.';
$page_canonical   = SITE_URL . '/visa-long-sejour-conjoint-vietnamien-france';
$page_og_title    = 'Visa long séjour conjoint de Français : le dossier complet 2026';
$page_og_desc     = 'Tout ce que tu dois rassembler pour que ton conjoint vietnamien obtienne son visa pour venir vivre en France avec toi.';
$page_og_url      = SITE_URL . '/visa-long-sejour-conjoint-vietnamien-france';
$page_og_image    = 'https://images.unsplash.com/photo-1467269204594-9661b134dd2b?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Visa long séjour conjoint de Français : dossier complet 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/visa-long-sejour-conjoint-vietnamien-france',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vivre ensemble : ici ou là-bas',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'terracotta';
$article_hero_bg      = '#3a1a0e';
$article_glow         = 'rgba(191,74,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Vivre ensemble';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vivre-ensemble';
$page_faq = [
  ['q' => 'Quelle est la différence entre un visa long séjour et un VLS-TS ?',
   'a' => 'Un visa long séjour ordinaire (D) autorise l\'entrée et le séjour mais ton conjoint doit se rendre en préfecture rapidement. Le VLS-TS (visa long séjour valant titre de séjour) lui permet de vivre et travailler en France pendant un an sans repasser par la préfecture — c\'est clairement la meilleure option à demander.'],
  ['q' => 'Faut-il que la transcription du mariage à Nantes soit terminée avant de déposer le visa ?',
   'a' => 'En théorie oui, car l\'extrait d\'acte de mariage transcrit fait partie du dossier. Dans certains cas, la demande peut être initiée avec un acte de mariage vietnamien légalisé et traduit, mais la transcription est fortement recommandée pour éviter le refus. Vérifie les exigences actuelles auprès de VFS Global au moment de ta demande.'],
  ['q' => 'Quels justificatifs de ressources sont acceptés ?',
   'a' => 'Les 3 derniers bulletins de salaire, le dernier avis d\'imposition, et les 3 derniers relevés de compte bancaire. Il n\'existe pas de seuil légal de ressources fixé pour le visa conjoint de Français — le consulat apprécie au cas par cas la capacité à subvenir aux besoins du foyer.'],
  ['q' => 'Peut-on travailler avec un visa long séjour conjoint de Français ?',
   'a' => 'Oui, le VLS-TS mention "vie privée et familiale" autorise l\'exercice d\'une activité professionnelle (salarié ou indépendant) dès l\'arrivée en France.'],
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
      <span>Visa long séjour</span>
    </div>
    <span class="article-badge-hero">Vivre ensemble</span>
    <h1>Visa long séjour conjoint de Français : le dossier complet 2026</h1>
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
      <li><a href="#section-1">VLS-TS vs visa ordinaire</a></li>
      <li><a href="#section-2">Conditions préalables</a></li>
      <li><a href="#section-3">Les documents requis</a></li>
      <li><a href="#section-4">Le dépôt via VFS Global</a></li>
      <li><a href="#section-5">Les délais et le suivi</a></li>
      <li><a href="#section-6">En cas de refus</a></li>
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
    <p><strong>C'est l'étape que tout le monde redoute — et pourtant c'est celle qui débloque tout.</strong> Une fois que ton conjoint vietnamien tient son visa long séjour en main, votre vie commune en France peut vraiment commencer. Ce guide t'explique exactement ce qu'il faut préparer, dans quel ordre, et comment éviter les erreurs classiques qui retardent ou font refuser la demande.</p>

    <p>Cet article fait partie du <a href="faire-venir-conjointe-vietnamienne-france">guide complet : faire venir son conjoint vietnamien en France</a>. Si tu débarques ici directement, lis d'abord le guide général pour avoir la vue d'ensemble.</p>

    <h2 id="section-1">VLS-TS ou visa long séjour ordinaire : quelle différence ?</h2>
    <p>Deux types de visa "long séjour" existent pour les conjoints de Français :</p>
    <ul>
      <li><strong>Le visa D ordinaire</strong> : autorise l'entrée et le séjour jusqu'à 3 mois, mais ton conjoint doit se rendre en préfecture dans les 2 mois suivant l'arrivée pour obtenir un titre de séjour. Risque de délais longs en préfecture.</li>
      <li><strong>Le VLS-TS (visa long séjour valant titre de séjour)</strong> : valable 1 an, autorise à vivre et travailler sans passage en préfecture la première année. Il suffit de le valider auprès de l'OFII à l'arrivée.</li>
    </ul>
    <p>Demande systématiquement le VLS-TS. C'est la formule recommandée pour les conjoints de Français, et les agents d'instruction le savent.</p>

    <h2 id="section-2">Conditions préalables à remplir avant de déposer</h2>
    <p>Avant même de constituer le dossier, assure-toi que ces conditions sont remplies :</p>
    <ul>
      <li>Vous êtes légalement mariés et le mariage est transcrit dans les registres français (Service Central d'État Civil de Nantes). <a href="transcription-mariage-service-central-nantes">→ Guide transcription Nantes</a></li>
      <li>Tu résides en France (ou as un projet de retour en France démontrable)</li>
      <li>Tu justifies de ressources suffisantes pour subvenir aux besoins du foyer (pas de seuil légal fixé pour le conjoint de Français — appréciation au cas par cas)</li>
    </ul>
    <div class="tip-box">
      <strong>Ressources insuffisantes ?</strong> Il n'existe pas de seuil légal minimal pour le visa conjoint de Français. Le consulat évalue la situation globale du foyer. Un emploi stable, un patrimoine ou le soutien d'un co-garant peuvent compenser des revenus modestes.
    </div>

    <h2 id="section-3">La liste des documents à préparer</h2>
    <p>La liste officielle est disponible sur <a href="https://france-visas.gouv.fr" target="_blank" rel="noopener">france-visas.gouv.fr</a>. Voici les documents habituellement demandés :</p>

    <table>
      <thead>
        <tr>
          <th>Document</th>
          <th>Qui le fournit</th>
          <th>Remarque</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Formulaire Cerfa de demande de visa</td>
          <td>Conjoint vietnamien</td>
          <td>Disponible sur France Visas</td>
        </tr>
        <tr>
          <td>Passeport vietnamien valide</td>
          <td>Conjoint vietnamien</td>
          <td>Validité &gt; 3 mois après fin du visa demandé</td>
        </tr>
        <tr>
          <td>Photos d'identité</td>
          <td>Conjoint vietnamien</td>
          <td>Format biométrique réglementaire</td>
        </tr>
        <tr>
          <td>Extrait d'acte de mariage transcrit (Nantes)</td>
          <td>Partenaire français</td>
          <td>Moins de 3 mois à la date de dépôt</td>
        </tr>
        <tr>
          <td>Acte de naissance du conjoint vietnamien</td>
          <td>Conjoint vietnamien</td>
          <td>Traduit (traducteur assermenté) + légalisation (ou apostille dès le 11/09/2026)</td>
        </tr>
        <tr>
          <td>Passeport ou CNI du conjoint français</td>
          <td>Partenaire français</td>
          <td>Copie de toutes les pages</td>
        </tr>
        <tr>
          <td>Justificatif de domicile en France</td>
          <td>Partenaire français</td>
          <td>Facture de moins de 3 mois</td>
        </tr>
        <tr>
          <td>3 derniers bulletins de salaire</td>
          <td>Partenaire français</td>
          <td>Ou justificatifs de revenus équivalents</td>
        </tr>
        <tr>
          <td>Dernier avis d'imposition</td>
          <td>Partenaire français</td>
          <td>Ou avis de situation déclarative</td>
        </tr>
        <tr>
          <td>3 derniers relevés de compte bancaire</td>
          <td>Partenaire français</td>
          <td>Du compte principal</td>
        </tr>
        <tr>
          <td>Lettre de motivation personnelle</td>
          <td>Conjoint vietnamien</td>
          <td>Recommandée, non obligatoire — en français</td>
        </tr>
        <tr>
          <td>Preuve de vie commune (photos, billets d'avion…)</td>
          <td>Les deux</td>
          <td>Très utile pour l'entretien</td>
        </tr>
      </tbody>
    </table>

    <div class="tip-box">
      <strong>Astuce :</strong> Prépare tous les documents en double ou triple exemplaire. Les agents VFS Global gardent parfois l'original. Pour les documents vietnamiens, assure-toi que la traduction est faite par un traducteur assermenté.
    </div>

    <div class="tip-box">
      <strong>Légalisation ou apostille ? (2026)</strong> Les documents vietnamiens (acte de naissance, acte de mariage…) nécessitent aujourd'hui une <strong>légalisation consulaire</strong>. À partir du <strong>11 septembre 2026</strong>, l'<strong>apostille</strong> (Convention de La Haye — adhésion du Vietnam déposée le 31/12/2025) remplacera la légalisation. Autorité compétente : MAE vietnamien (Hanoï / HCMV). <a href="https://www.hcch.net/fr/states/authorities/details3/?aid=1596" target="_blank" rel="noopener">Source : hcch.net</a>
    </div>

    <h2 id="section-4">Déposer le dossier via VFS Global</h2>
    <p>Les visas de long séjour pour la France sont traités par l'ambassade de France, mais le dépôt physique du dossier se fait via <strong>VFS Global</strong> — le prestataire mandaté. Des centres sont disponibles à <strong>Hanoï et à Hô Chi Minh-Ville</strong>.</p>
    <p>La prise de rendez-vous se fait en ligne sur le site de VFS Global. Les délais pour obtenir un rendez-vous peuvent varier de quelques jours à plusieurs semaines selon la période.</p>
    <p>Le jour du dépôt, ton conjoint doit se présenter seul avec l'intégralité du dossier. Le partenaire français n'est pas obligatoirement présent mais peut accompagner si les règles du centre le permettent.</p>
    <p>Frais à payer au dépôt :</p>
    <ul>
      <li>Droits de visa : <strong>99 €</strong></li>
      <li>Frais de service VFS Global : consulter <a href="https://www.vfsglobal.com/france/vietnam/" target="_blank" rel="noopener">vfsglobal.com/france/vietnam</a></li>
    </ul>

    <h2 id="section-5">Délais et suivi du dossier</h2>
    <p>Après le dépôt, l'ambassade instruit le dossier. Délai moyen constaté : <strong>2 à 3 mois</strong>. Ce délai peut être allongé si l'ambassade demande des documents complémentaires ou convoque ton conjoint à un entretien.</p>
    <p>Le suivi se fait via le site de VFS Global avec le numéro de référence remis au dépôt. En cas de convocation à un entretien, ton conjoint reçoit une notification par email ou SMS selon le centre.</p>
    <p>→ Lire notre article sur <a href="entretien-ambassade-france-vietnam-visa-conjoint">comment préparer l'entretien à l'ambassade</a>.</p>

    <h2 id="section-6">En cas de refus de visa</h2>
    <p>Un refus de visa mentionne un motif (ressources insuffisantes, doute sur la réalité du mariage, dossier incomplet…). Tu peux déposer un recours préalable obligatoire auprès de la <strong>Commission de Recours contre les Refus de Visa (CRRV)</strong> dans un délai de <strong>2 mois</strong> à compter de la notification du refus. Ce recours est obligatoire avant tout recours contentieux. La décision de la CRRV peut prendre plusieurs mois.</p>
    <p>En cas de refus lié aux ressources, améliore ta situation financière et redépose 6 mois plus tard avec un dossier renforcé. En cas de doute sur la sincérité du mariage, rassemble davantage de preuves de vie commune (photos, messages, billets d'avion, témoignages).</p>

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
$current_slug = 'visa-long-sejour-conjoint-vietnamien-france';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
