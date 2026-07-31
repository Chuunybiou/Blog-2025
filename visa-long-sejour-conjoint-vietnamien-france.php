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
  ['q' => 'Mon conjoint peut-il voyager en Europe avec son VLS-TS ?',
   'a' => 'Oui. Un VLS-TS validé permet de circuler dans l\'espace Schengen pour des courts séjours (dans la limite de 90 jours sur 180 hors de France), comme un titre de séjour. Pratique pour découvrir l\'Europe — mais garde toujours passeport et confirmation de validation du VLS-TS sur toi lors de ces déplacements.'],
  ['q' => 'Le visa conjoint de Français est-il payant ?',
   'a' => 'Les conjoints de ressortissants français bénéficient en principe de la gratuité des droits de visa — c\'est l\'une des spécificités de la catégorie "famille de Français". En revanche, les frais de service du prestataire VFS Global restent dus, ainsi que les coûts annexes (traductions assermentées, légalisation ou apostille des documents vietnamiens, déplacements). Vérifie la grille tarifaire affichée par France-Visas pour ta catégorie au moment du dépôt.'],
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
      <span>⏱ 12 min de lecture</span>
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
      <li><a href="#section-preuves">Construire la preuve de vie commune</a></li>
      <li><a href="#section-6">En cas de refus</a></li>
      <li><a href="#section-apres">Après le visa : l'arrivée en France</a></li>
      <li><a href="#section-erreurs">Les erreurs fréquentes</a></li>
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
    <p><strong>C'est l'étape que tout le monde redoute — et pourtant c'est celle qui débloque tout.</strong> Une fois que ton conjoint vietnamien tient son visa long séjour en main, votre vie commune en France peut vraiment commencer. Ce guide t'explique exactement ce qu'il faut préparer, dans quel ordre, comment construire la preuve de vie commune qui fait la différence, ce qui se passe en cas de refus, et la check-list des premières semaines en France — avec les erreurs classiques qui retardent ou font refuser la demande.</p>

    <p>Cet article fait partie du <a href="faire-venir-conjointe-vietnamienne-france">guide complet : faire venir son conjoint vietnamien en France</a>. Si tu débarques ici directement, lis d'abord le guide général pour avoir la vue d'ensemble.</p>

    <h2 id="section-1">VLS-TS ou visa long séjour ordinaire : quelle différence ?</h2>
    <p>Deux types de visa "long séjour" existent pour les conjoints de Français :</p>
    <ul>
      <li><strong>Le visa D ordinaire</strong> : autorise l'entrée et le séjour jusqu'à 3 mois, mais ton conjoint doit se rendre en préfecture dans les 2 mois suivant l'arrivée pour obtenir un titre de séjour. Risque de délais longs en préfecture.</li>
      <li><strong>Le VLS-TS (visa long séjour valant titre de séjour)</strong> : valable 1 an, autorise à vivre et travailler sans passage en préfecture la première année. Il suffit de le valider auprès de l'OFII à l'arrivée.</li>
    </ul>
    <p>Demande systématiquement le VLS-TS. C'est la formule recommandée pour les conjoints de Français, et les agents d'instruction le savent. La différence n'est pas cosmétique : avec un visa D ordinaire, ton conjoint arriverait en France pour se retrouver aussitôt dans la file des préfectures — prise de rendez-vous difficile, récépissés successifs, impossibilité de voyager sereinement pendant l'attente. Le VLS-TS court-circuite tout ça : une validation en ligne, et la première année est réglée.</p>

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
      <strong>Légalisation ou apostille ? (2026)</strong> Les documents vietnamiens (acte de naissance, acte de mariage…) nécessitent aujourd'hui une <b>légalisation consulaire</b>. À partir du <b>11 septembre 2026</b>, l'<b>apostille</b> (Convention de La Haye — adhésion du Vietnam déposée le 31/12/2025) remplacera la légalisation. Autorité compétente : MAE vietnamien (Hanoï / HCMV). <a href="https://www.hcch.net/fr/states/authorities/details3/?aid=1596" target="_blank" rel="noopener">Source : hcch.net</a> — <a href="apostille-vietnam-francais-2026">Guide complet sur l'apostille au Vietnam</a>
    </div>

    <h2 id="section-4">Déposer le dossier via VFS Global</h2>
    <p>Les visas de long séjour pour la France sont traités par l'ambassade de France, mais le dépôt physique du dossier se fait via <strong>VFS Global</strong> — le prestataire mandaté. Des centres sont disponibles à <strong>Hanoï et à Hô Chi Minh-Ville</strong>.</p>
    <p>La prise de rendez-vous se fait en ligne sur le site de VFS Global, après avoir créé la demande sur France-Visas (qui génère le formulaire et la liste de pièces personnalisée). Les délais pour obtenir un rendez-vous peuvent varier de quelques jours à plusieurs semaines selon la période — les pics classiques sont l'été et les semaines qui précèdent le Tết.</p>
    <p>Le jour du dépôt, ton conjoint doit se présenter seul avec l'intégralité du dossier. Le partenaire français n'est pas obligatoirement présent mais peut accompagner si les règles du centre le permettent. Le rendez-vous comprend la remise du dossier, la collecte des <strong>données biométriques</strong> (empreintes et photo — c'est pour ça que la présence physique est obligatoire) et le paiement des frais. Le passeport est conservé pendant l'instruction : ton conjoint ne pourra pas voyager à l'international pendant cette période, un point à intégrer dans vos plans.</p>
    <p>Avant le rendez-vous, refaites ensemble le tour du dossier avec la check-list France-Visas imprimée : les agents VFS vérifient la complétude formelle, mais un document manquant repéré au comptoir signifie souvent reprendre un rendez-vous — et donc des semaines perdues. L'ordre de classement des pièces (suivre exactement l'ordre de la liste officielle) accélère le passage au guichet.</p>
    <p>Frais à payer au dépôt :</p>
    <ul>
      <li>Droits de visa : le tarif standard d'un visa long séjour est de <strong>99 €</strong>, mais les <strong>conjoints de Français bénéficient en principe de la gratuité des droits de visa</strong> — vérifie la grille tarifaire de ta catégorie sur France-Visas au moment du dépôt</li>
      <li>Frais de service VFS Global : dus dans tous les cas — consulter <a href="https://www.vfsglobal.com/france/vietnam/" target="_blank" rel="noopener">vfsglobal.com/france/vietnam</a></li>
    </ul>

    <h2 id="section-5">Délais et suivi du dossier</h2>
    <p>Après le dépôt, l'ambassade instruit le dossier. Délai moyen constaté : <strong>2 à 3 mois</strong>. Ce délai peut être allongé si l'ambassade demande des documents complémentaires ou convoque ton conjoint à un entretien. Pendant l'instruction, résiste à la tentation de multiplier les relances : elles n'accélèrent rien et encombrent les services. Une relance se justifie uniquement au-delà des délais annoncés ou en cas de changement matériel dans votre situation.</p>
    <p>Le suivi se fait via le site de VFS Global avec le numéro de référence remis au dépôt. En cas de convocation à un entretien, ton conjoint reçoit une notification par email ou SMS selon le centre.</p>
    <p>→ Lire notre article sur <a href="entretien-ambassade-france-vietnam-visa-conjoint">comment préparer l'entretien à l'ambassade</a>.</p>
    <p>Pour situer cette étape dans le calendrier d'ensemble : entre le début des démarches CCAM et l'arrivée en France, la plupart des couples comptent <strong>autour d'une année complète</strong> — audition CCAM, publication des bans, mariage vietnamien, transcription à Nantes, puis ce visa. Le visa lui-même n'est que le dernier tiers du parcours. Si vous êtes en train de planifier une date d'installation (rentrée scolaire, prise de poste, bail), partez de cette date et remontez le temps avec <a href="retroplanning-faire-venir-conjoint">le rétroplanning interactif</a> — c'est le meilleur antidote aux faux espoirs de calendrier.</p>

    <h2 id="section-preuves">Construire la preuve de vie commune (avant d'en avoir besoin)</h2>
    <p>Le cœur de l'instruction d'un visa conjoint, ce ne sont ni les ressources ni le logement — c'est la conviction que le mariage est réel. Cette conviction se nourrit de preuves matérielles, et la différence entre un dossier serein et un dossier fragile se joue des mois avant le dépôt. Ce qui pèse :</p>
    <ul>
      <li><strong>L'historique de la relation</strong> : photos datées à différentes périodes et différents lieux (pas dix photos du même jour), captures d'écran d'appels vidéo réguliers, historique de conversations sur la durée.</li>
      <li><strong>Les voyages</strong> : billets d'avion, tampons de passeport, réservations d'hôtel à deux — chaque séjour de l'un chez l'autre documente la réalité du couple.</li>
      <li><strong>Les engagements croisés</strong> : virements réguliers, colis, cadeaux tracés, éventuellement bail ou factures communes pour la période de vie au Vietnam.</li>
      <li><strong>La cohérence du récit</strong> : les dates racontées dans la lettre de motivation doivent correspondre exactement aux tampons, billets et photos. Une incohérence de date fait plus de dégâts qu'une preuve manquante.</li>
    </ul>
    <p>Organise tout ça chronologiquement dans un classeur (ou un PDF structuré) : rencontre, développement de la relation, CCAM, mariage. L'agent qui ouvre le dossier doit pouvoir reconstituer votre histoire en dix minutes. C'est exactement la même logique qui prévaut pour <a href="entretien-ambassade-france-vietnam-visa-conjoint">l'entretien à l'ambassade</a> — dossier et entretien racontent une seule et même histoire.</p>

    <h2 id="section-6">En cas de refus de visa</h2>
    <p>Un refus de visa mentionne un motif (ressources insuffisantes, doute sur la réalité du mariage, dossier incomplet…). Tu peux déposer un recours préalable obligatoire auprès de la <strong>Commission de Recours contre les Refus de Visa (CRRV)</strong> dans un délai de <strong>2 mois</strong> à compter de la notification du refus. Ce recours est obligatoire avant tout recours contentieux. La décision de la CRRV peut prendre plusieurs mois.</p>
    <p>Garde en tête un élément de contexte protecteur : le droit de mener une vie familiale normale est une garantie forte en droit français et européen, et le refus de visa à un conjoint de Français authentiquement marié doit être sérieusement motivé. Les refus qui tiennent devant la commission ou le juge concernent presque toujours des dossiers objectivement fragiles — incohérences, mariage très récent sans historique de relation, documents manquants. D'où l'importance de la section précédente sur la preuve de vie commune : un couple réel avec un dossier bien construit obtient son visa, même si les délais mettent les nerfs à l'épreuve.</p>
    <p>En cas de refus lié aux ressources, améliore ta situation financière et redépose 6 mois plus tard avec un dossier renforcé. En cas de doute sur la sincérité du mariage, rassemble davantage de preuves de vie commune (photos, messages, billets d'avion, témoignages).</p>

    <h2 id="section-apres">Après le visa : les premières semaines en France</h2>
    <p>Le visa en poche n'est pas la fin du parcours — c'est le début d'une check-list d'arrivée, avec un délai impératif en tête de liste :</p>
    <ol>
      <li><strong>Valider le VLS-TS en ligne dans les 3 mois</strong> suivant l'arrivée, sur la plateforme de l'administration des étrangers en France, avec paiement de la taxe. Sans cette validation, le séjour devient irrégulier à l'expiration des 3 mois — c'est LE piège de l'arrivée.</li>
      <li><strong>Répondre à la convocation OFII</strong> : signature du contrat d'intégration républicaine (CIR), test de positionnement en français, formations civiques. C'est obligatoire, et le respect du CIR conditionne les titres suivants.</li>
      <li><strong>Ouvrir les droits sociaux</strong> : numéro de sécurité sociale (via la CPAM), compte bancaire français, inscription à la complémentaire santé du foyer.</li>
      <li><strong>Travailler, tout de suite si souhaité</strong> : le VLS-TS « vie privée et familiale » autorise l'activité professionnelle dès l'arrivée, salariée ou indépendante — aucun délai d'attente.</li>
      <li><strong>Penser au renouvellement dès le 10e mois</strong> : la demande de titre « vie privée et familiale » se dépose avant l'expiration du VLS-TS. Le calendrier des titres suivants (carte pluriannuelle, carte de résident, <a href="naturalisation-conjoint-vietnamien">nationalité</a>) est détaillé dans nos autres guides.</li>
    </ol>

    <h2 id="section-erreurs">Les erreurs fréquentes</h2>
    <ul>
      <li><strong>Déposer avant la transcription du mariage</strong> : l'acte vietnamien seul fragilise tout le dossier. L'ordre CCAM → mariage → transcription → visa n'est pas négociable.</li>
      <li><strong>Des documents périmés au jour du dépôt</strong> : l'extrait d'acte de mariage et le justificatif de domicile ont des durées de validité courtes — cale leur obtention sur la date du rendez-vous VFS, pas sur le début de la préparation.</li>
      <li><strong>Une lettre de motivation générique</strong> : les modèles copiés-collés d'internet se repèrent immédiatement. Une lettre simple, personnelle, avec les vraies dates de votre histoire vaut mieux qu'une page de formules.</li>
      <li><strong>Sous-estimer le délai global</strong> : rendez-vous VFS + instruction + éventuel entretien, le tout s'additionne. Ne réserve aucun billet d'avion non modifiable avant la délivrance du visa.</li>
      <li><strong>Oublier la validation en ligne après l'arrivée</strong> : voir la section précédente — 3 mois, pas un de plus.</li>
    </ul>
    <p>Pour caler toutes les étapes dans le temps, utilise notre outil : <a href="retroplanning-faire-venir-conjoint">le rétroplanning interactif mariage + visa conjoint</a>.</p>

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
      <form class="cta-form" action="<?= SITE_URL ?>/subscribe-pack" method="POST">
        <input type="text" name="website" value="" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a> — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>

    <?php
$author_bio = <<<'BIO'
Français marié à une Vietnamienne, installé à Hanoï. Je partage notre parcours : démarches administratives, mariage franco-vietnamien, vie de couple mixte.
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
$current_slug = 'visa-long-sejour-conjoint-vietnamien-france';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
