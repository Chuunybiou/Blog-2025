<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Permis de travail au Vietnam pour les Français en 2026 : procédure complète';
$page_description = 'Giấy phép lao động (GPLĐ) : qui doit l\'obtenir, quels documents préparer, délais et coût. Guide complet du permis de travail au Vietnam pour les ressortissants français.';
$page_canonical   = SITE_URL . '/permis-de-travail-vietnam-francais';
$page_og_title    = 'Permis de travail au Vietnam pour les Français en 2026';
$page_og_desc     = 'Tout sur le giấy phép lao động : documents requis, procédure étape par étape, délais de traitement, exemptions et renouvellement.';
$page_og_url      = SITE_URL . '/permis-de-travail-vietnam-francais';
$page_og_image    = 'https://images.unsplash.com/photo-1568992687947-868a62a9f521?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Permis de travail au Vietnam pour les Français en 2026 : procédure complète',
  'datePublished'   => '2026-10-01',
  'dateModified'    => '2026-10-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/permis-de-travail-vietnam-francais',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Emploi & Entreprendre',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'jade';
$article_hero_bg      = '#001f18';
$article_glow         = 'rgba(27,107,82,0.18)';
$article_badge        = 'rgba(27,107,82,0.25)';
$article_badge_c      = '#4dbe94';

$article_category     = 'Emploi & Entreprendre';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=emploi';

$page_faq = [
  ['q' => 'Peut-on travailler pendant que la demande de permis est en cours de traitement ?',
   'a' => 'Non, légalement. L\'employeur est censé déposer et obtenir le permis avant la prise de poste effective. Dans la pratique, certains employeurs font commencer leurs salariés pendant le traitement du dossier, mais cette situation est irrégulière et expose l\'employeur à une amende. Il est plus sûr de n\'exercer qu\'après réception du permis de travail.'],
  ['q' => 'Que se passe-t-il si je change d\'employeur en cours de permis ?',
   'a' => 'Le permis de travail vietnamien est lié à l\'employeur. Si tu changes d\'entreprise, l\'ancien permis n\'est plus valide pour le nouvel emploi. Il faut déposer une nouvelle demande de permis de travail auprès du nouvel employeur. Dans certains cas, une procédure simplifiée est possible si le permis initial n\'est pas expiré. Consulte un cabinet juridique spécialisé pour les démarches exactes.'],
  ['q' => 'Mon diplôme doit-il être d\'un certain niveau pour obtenir le permis de travail ?',
   'a' => 'En règle générale, le Décret 152/2020/NĐ-CP prévoit que le travailleur étranger doit justifier d\'un diplôme universitaire correspondant au poste et d\'une expérience professionnelle d\'au moins 3 ans dans le domaine. Des exigences spécifiques peuvent s\'appliquer selon le secteur. Pour certains postes, une expérience professionnelle solide peut parfois compenser l\'absence de diplôme, mais cela reste à l\'appréciation des autorités locales.'],
  ['q' => 'Les propriétaires de leur propre société au Vietnam ont-ils besoin d\'un permis de travail ?',
   'a' => 'Non, si tu es propriétaire et représentant légal (người đại diện theo pháp luật) de ta propre SARL vietnamienne, tu es exempté de permis de travail selon le Décret 152/2020/NĐ-CP. Cette exemption est l\'une des raisons pour lesquelles certains expatriés choisissent de créer leur propre structure au Vietnam plutôt que de travailler pour un employeur local. Voir l\'article <a href="creer-entreprise-vietnam-statuts-juridiques">Créer une entreprise au Vietnam</a>.'],
  ['q' => 'Je suis marié(e) à un(e) Vietnamien(ne) : quelle est la démarche exacte ?',
   'a' => 'Tu relèves de l\'exemption de permis prévue par le Code du travail pour les étrangers mariés à des ressortissants vietnamiens et résidant au Vietnam. En pratique : ton employeur (ou toi-même selon les provinces) demande la confirmation d\'exemption au Service du Travail, avec un dossier centré sur la preuve du mariage reconnu au Vietnam et de ta résidence. Pas de diplôme apostillé ni d\'attestation de trois ans d\'expérience à produire — c\'est le raccourci administratif le plus précieux du statut de conjoint. Le mariage doit toutefois être pleinement reconnu côté vietnamien (mariage local ou mariage français enregistré au Vietnam).'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=emploi">Emploi &amp; Entreprendre</a><span class="breadcrumb-sep">›</span>
      <span>Permis de travail au Vietnam</span>
    </div>
    <span class="article-badge-hero">Emploi &amp; Entreprendre</span>
    <h1>Permis de travail au Vietnam pour les Français en 2026 : la procédure complète</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Octobre 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis à jour : Octobre 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Qu'est-ce que le permis de travail vietnamien ?</a></li>
      <li><a href="#section-2">Qui doit en avoir un ?</a></li>
      <li><a href="#section-3">Qui est exempté ?</a></li>
      <li><a href="#section-4">Documents à préparer</a></li>
      <li><a href="#section-5">La procédure étape par étape</a></li>
      <li><a href="#section-6">Délais, coût et renouvellement</a></li>
      <li><a href="#section-7">Anticiper depuis la France</a></li>
      <li><a href="#section-8">Travailler sans permis : les risques</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" onclick="window.open('https://twitter.com/intent/tweet?url='+encodeURIComponent(location.href))">𝕏</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <p class="article-intro">Pour travailler légalement au Vietnam, tout ressortissant étranger — y compris les Français — doit obtenir un permis de travail, appelé <strong>giấy phép lao động</strong> (GPLĐ) en vietnamien, sauf à relever d'une exemption (dont celle, précieuse, du conjoint de Vietnamien). C'est l'employeur qui en est responsable, pas le salarié, mais il est indispensable de comprendre le processus pour anticiper les délais et préparer les documents nécessaires côté français — c'est là que se joue le vrai calendrier.</p>

    <div class="article-alert">
      <strong>Base légale :</strong> La réglementation du permis de travail est définie par le <strong>Décret 152/2020/NĐ-CP</strong> du gouvernement vietnamien (modifié par le Décret 70/2023/NĐ-CP). Ces textes peuvent évoluer ; vérifier auprès de l'employeur ou d'un cabinet juridique local avant toute démarche.
    </div>

    <h2 id="section-1">1. Qu'est-ce que le permis de travail vietnamien ?</h2>
    <p>Le permis de travail (GPLĐ) est un document officiel délivré par le <strong>Service provincial du Travail, des Invalides de Guerre et des Affaires sociales</strong> (Sở Lao Động - Thương Binh và Xã Hội, abrégé Sở LĐTBXH). Il autorise un étranger à exercer une activité salariée au Vietnam pour un employeur précis et un poste précis — retiens bien cette double spécificité : le permis n'est pas un droit général de travailler au Vietnam, c'est l'autorisation d'occuper CE poste chez CET employeur.</p>
    <p>Sa durée de validité est limitée à <strong>24 mois maximum</strong> (2 ans), correspondant à la durée du contrat de travail si elle est inférieure. Il est renouvelable.</p>
    <p>Pour bien situer l'objet dans le paysage administratif : le permis de travail répond à la question « as-tu le droit d'occuper cet emploi ? », le <a href="visa-vietnam-francais-guide-2026">visa</a> à la question « as-tu le droit d'être sur le territoire ? », et la <a href="carte-residence-temporaire-vietnam">carte de résidence (TRC)</a> à « peux-tu y résider durablement ? ». Les trois s'emboîtent — le permis de travail est d'ailleurs le document qui fonde le visa LD puis la TRC au titre du travail — mais aucun ne remplace les autres. Beaucoup de confusions d'expatriés viennent du mélange de ces trois questions.</p>

    <h2 id="section-2">2. Qui doit obtenir un permis de travail ?</h2>
    <p>Toute personne de nationalité étrangère qui :</p>
    <ul>
      <li>Travaille pour une entreprise ou organisation établie au Vietnam (vietnamienne ou étrangère)</li>
      <li>Est en contrat de travail local</li>
      <li>Exerce une fonction de direction ou d'expert au sein d'une entité au Vietnam</li>
      <li>Est détachée par une entreprise étrangère pour travailler au Vietnam au-delà du seuil d'exemption</li>
    </ul>
    <p>À noter que la logique vietnamienne classe les travailleurs étrangers en catégories (expert, dirigeant, technicien…), chacune avec ses justificatifs de qualification : ton employeur doit d'abord faire approuver le <em>besoin</em> de recruter un étranger pour le poste, puis prouver que tu rentres dans la case. C'est pour ça que l'intitulé de poste du dossier compte autant : il détermine les qualifications à documenter. Un point à caler avec l'employeur dès l'offre, pas au dépôt.</p>
    <p>Cas hors périmètre : le <strong>télétravailleur pour des clients étrangers</strong>, sans employeur ni client vietnamien, ne rentre dans aucune de ces cases — sa situation, non couverte par le permis de travail, est celle de la zone grise décrite dans <a href="visa-teletravail-digital-nomad-vietnam">le guide des nomades digitaux</a>.</p>

    <h2 id="section-3">3. Qui est exempté du permis de travail ?</h2>
    <p>Le Décret 152/2020/NĐ-CP et le Code du travail listent plusieurs catégories exemptées :</p>
    <ul>
      <li><strong>L'étranger marié à un(e) Vietnamien(ne) et résidant au Vietnam</strong> — l'exemption prévue par le Code du travail qui concerne le plus les lecteurs de ce blog : le conjoint étranger peut travailler sans permis de travail, moyennant la confirmation d'exemption décrite ci-dessous</li>
      <li><strong>Propriétaires ou membres de SARL</strong> qui sont en même temps représentants légaux de leur société vietnamienne</li>
      <li><strong>Experts en mission courte</strong> : moins de 30 jours consécutifs, dans la limite de 90 jours cumulés par an</li>
      <li><strong>Étudiants</strong> en alternance ou stage intégré à leur formation</li>
      <li><strong>Personnel diplomatique</strong> et assimilé</li>
      <li>Certaines autres catégories prévues par des traités internationaux</li>
    </ul>
    <p>Pour les exemptés, une <strong>confirmation d'exemption</strong> (xác nhận không thuộc diện cấp GPLĐ) doit tout de même être obtenue auprès du Sở LĐTBXH. « Exempté de permis » ne signifie donc pas « rien à faire » : c'est un dossier allégé, mais un dossier quand même — la nuance qui distingue le travail légal du travail au noir.</p>
    <p>Zoom sur le cas du <strong>conjoint de Vietnamien(ne)</strong>, tant il change la donne pour un couple mixte : là où un étranger « ordinaire » doit justifier d'un diplôme, de trois ans d'expérience et d'un employeur sponsor, le conjoint marié présente essentiellement la preuve de son mariage reconnu au Vietnam et de sa résidence. C'est l'exemption qui permet au Français marié de prendre un emploi local, de donner des cours ou de rejoindre l'entreprise familiale sans le parcours du combattant documentaire. Elle ne dispense ni du contrat de travail en règle ni des impôts locaux — elle supprime seulement la barrière d'entrée. Combinée au <a href="visa-tt-carte-residence-trc-mariage">visa TT/TRC</a>, elle fait du conjoint de Vietnamien l'étranger le plus libre du marché du travail vietnamien.</p>

    <h2 id="section-4">4. Documents à préparer</h2>
    <p>La constitution du dossier est à la charge de l'employeur, mais plusieurs documents viennent du futur salarié — et ce sont eux qui déterminent le calendrier réel, car ils voyagent entre la France et le Vietnam avec apostilles et traductions. Voici les pièces généralement requises :</p>

    <div class="table-wrapper">
    <table>
      <thead><tr><th>Document</th><th>Remarques</th></tr></thead>
      <tbody>
        <tr><td>Formulaire de demande de GPLĐ (officiel)</td><td>Fourni et rempli par l'employeur</td></tr>
        <tr><td>Photo d'identité (4×6 cm, fond blanc)</td><td>Prise récemment</td></tr>
        <tr><td>Copie certifiée du passeport</td><td>Pages photo et visa</td></tr>
        <tr><td>Diplôme le plus élevé</td><td>Apostillé + traduit en vietnamien par traducteur assermenté</td></tr>
        <tr><td>Attestation d'expérience professionnelle</td><td>Au moins 3 ans dans le domaine (lettres d'employeurs ou attestation)</td></tr>
        <tr><td>Casier judiciaire</td><td>Bulletins nº 3 (France) de moins de 6 mois, apostillé + traduit en vietnamien</td></tr>
        <tr><td>Certificat médical</td><td>Délivré par un hôpital agréé au Vietnam ou à l'étranger</td></tr>
      </tbody>
    </table>
    </div>

    <p><strong>Sur l'apostille du diplôme depuis la France</strong> : l'apostille est délivrée par le procureur de la République du tribunal judiciaire dont dépend l'établissement émetteur du diplôme. Pour les diplômes d'État (licence, master, doctorat), la demande se fait auprès du rectorat ou du ministère de l'Éducation nationale selon le niveau. La traduction en vietnamien doit être réalisée par un traducteur assermenté — en France via une liste de la cour d'appel, au Vietnam via un bureau de traduction officiel (souvent l'option la plus rapide et la moins chère : apostille en France, traduction sur place à Hanoï).</p>

    <p><strong>Sur le casier judiciaire depuis la France</strong> : le bulletin n°3 s'obtient gratuitement en ligne sur casier.justice.fr ou par courrier auprès du Casier Judiciaire National (Nantes). L'apostille est apposée par le parquet du TJ dont dépend le casier (généralement Nantes). Alternative pour ceux déjà installés : un étranger résidant au Vietnam depuis un certain temps peut se voir demander le casier judiciaire <em>vietnamien</em> (lý lịch tư pháp), délivré par le Département de la Justice provincial — ton employeur précisera lequel des deux (ou les deux) le dossier exige selon ta durée de présence.</p>

    <h2 id="section-5">5. La procédure étape par étape</h2>
    <ol>
      <li><strong>Approbation du besoin de main-d'œuvre étrangère</strong> : en amont, l'employeur fait valider par les autorités le principe même du recrutement d'un étranger sur ce poste</li>
      <li><strong>Constitution du dossier</strong> : l'employeur rassemble tous les documents (côté entreprise : actes de constitution, liste des postes, etc. ; côté salarié : les documents du tableau ci-dessus)</li>
      <li><strong>Dépôt au Sở LĐTBXH</strong> : le dossier complet est déposé au Service du Travail de la province ou ville où l'entreprise est établie (Hanoï ou Hô-Chi-Minh-Ville selon le cas)</li>
      <li><strong>Instruction du dossier</strong> : les autorités vérifient la conformité des documents</li>
      <li><strong>Délivrance du permis</strong> : le Sở LĐTBXH remet le GPLĐ physique à l'employeur</li>
      <li><strong>Visa LD puis TRC</strong> : avec le permis de travail obtenu, le salarié peut demander un visa de travail (type LD) pour régulariser son séjour, puis la <a href="carte-residence-temporaire-vietnam">carte de résidence temporaire</a> qui stabilise le tout</li>
      <li><strong>Signature du contrat définitif et affiliation sociale</strong> : contrat de travail vietnamien en bonne et due forme, affiliation aux assurances sociales locales — le permis n'est pas une fin, c'est le feu vert du reste</li>
    </ol>

    <h2 id="section-6">6. Délais, coût et renouvellement</h2>

    <h3>Délais de traitement</h3>
    <p>Le délai légal de traitement est de <strong>5 jours ouvrés</strong> à compter du dépôt d'un dossier complet. En pratique, comptez 7 à 15 jours ouvrés pour inclure les allers-retours en cas de documents manquants ou de demandes de compléments — et ajoutez à ce délai celui de l'étape préalable d'approbation du besoin de main-d'œuvre étrangère, que l'employeur doit avoir obtenue avant même de déposer ta demande individuelle. Le « vrai » délai de bout en bout se compte donc en semaines, pas en jours : intègre-le dans la négociation de ta date de prise de poste.</p>

    <h3>Coût</h3>
    <p>La taxe officielle de délivrance du permis est fixée par le Ministère des Finances vietnamien. Consulte l'employeur ou un cabinet local pour le montant exact au moment de la démarche, ce montant pouvant être révisé. Les coûts d'apostille et de traduction en France sont à la charge du salarié ou de l'employeur selon accord — un point à négocier explicitement à l'embauche, car multiplié par le nombre de documents, il n'est pas anodin. L'usage des bons employeurs : prise en charge intégrale des frais de permis, salarié compris.</p>

    <h3>Renouvellement</h3>
    <p>Le permis de travail peut être renouvelé avant son expiration. L'employeur doit soumettre une demande de renouvellement au moins <strong>5 jours ouvrés avant</strong> la date d'expiration. Le dossier de renouvellement est généralement plus léger (mise à jour du casier judiciaire, photo, contrat renouvelé). Attention toutefois : le renouvellement au sens strict n'est possible qu'un nombre limité de fois — au-delà, la réglementation impose de repasser par une nouvelle demande complète. Ton employeur (ou son cabinet) doit suivre ce compteur ; toi, garde en tête que « permis renouvelé » ne veut pas dire « permis éternel », et que chaque échéance déclenche aussi celle du visa LD ou de la TRC adossés au permis. Un permis qui expire sans relais, c'est toute la pile administrative qui vacille.</p>

    <h2 id="section-7">7. Le calendrier vu du salarié : anticiper depuis la France</h2>
    <p>Le point aveugle de la procédure : les documents français demandent plus de temps que la procédure vietnamienne elle-même. Si tu es encore en France avec une embauche vietnamienne en vue, lance immédiatement :</p>
    <ol>
      <li><strong>Le casier judiciaire n°3</strong> (rapide à obtenir) puis son apostille et sa traduction — attention à sa durée de validité de 6 mois : ne le demande pas trop tôt non plus.</li>
      <li><strong>L'apostille du diplôme</strong> — la démarche la moins intuitive du lot, avec des circuits différents selon le type de diplôme ; compte plusieurs semaines.</li>
      <li><strong>Les attestations d'expérience</strong> — contacte tes anciens employeurs pendant que les RH se souviennent de toi ; une attestation datée, signée, mentionnant poste et durée suffit généralement.</li>
      <li><strong>Le certificat médical</strong> — le plus simple est souvent de le faire au Vietnam dans un hôpital agréé, à l'arrivée.</li>
    </ol>
    <p>Rétroplanning réaliste : deux à trois mois entre « je commence à réunir les papiers » et « je peux légalement commencer à travailler », l'essentiel du délai étant français, pas vietnamien. Un candidat qui arrive à Hanoï avec ses documents apostillés et traduits fait gagner un mois à tout le monde — et marque des points auprès de son futur employeur, qui y lit exactement ce qu'il espère : quelqu'un qui comprend comment les choses fonctionnent ici.</p>

    <h2 id="section-8">8. Travailler sans permis : ce que ça coûte vraiment</h2>
    <p>La tentation existe — employeurs pressés, périodes d'essai « informelles », petits contrats. Les conséquences sont pourtant asymétriques et sérieuses : pour l'<strong>employeur</strong>, amendes administratives substantielles par travailleur irrégulier ; pour le <strong>salarié</strong>, amende, possible expulsion et mention qui compliquera les demandes de visa suivantes — sans parler de l'absence totale de protection (pas de contrat opposable, pas d'assurance sociale, aucun recours en cas de salaire impayé). Et le travail non déclaré fragilise tout le reste de ton édifice administratif : renouvellements de visa, TRC, un jour la résidence permanente. La voie légale existe pour tous les profils de cette page — permis classique, exemption conjoint, structure propre. L'emprunter n'est pas du zèle, c'est de la gestion de risque élémentaire.</p>

    <?php
    $page_sources = [
      ['label' => 'Thư Viện Pháp Luật — base des textes juridiques vietnamiens (en vietnamien)', 'url' => 'https://thuvienphapluat.vn'],
      ['label' => 'Portail du Gouvernement vietnamien (en vietnamien)', 'url' => 'https://chinhphu.vn'],
    ];
    include '_article-sources.php';
    ?>

    <div id="section-faq">
      <h2>Questions fréquentes</h2>
      <?php foreach ($page_faq as $i => $item): ?>
      <details <?= $i===0?'open':'' ?>>
        <summary><?= htmlspecialchars($item['q']) ?></summary>
        <p><?= $item['a'] ?></p>
      </details>
      <?php endforeach; ?>
    </div>

  </main>
</div>

<div class="cta-newsletter">
  <div class="cta-newsletter-inner">
    <div class="cta-newsletter-text">
      <strong>Tu prépares ton installation professionnelle au Vietnam ?</strong>
      <span>Reçois les prochains guides sur l'emploi, les visas et l'entrepreneuriat au Vietnam.</span>
    </div>
    <a href="newsletter-capvietnam" class="cta-newsletter-btn">Recevoir la newsletter</a>
  </div>
</div>

<div class="author-box">
  <img src="assets/img/anthony-vietnam.jpg" alt="Anthony Bouillon - Cap Vietnam" class="author-avatar" onerror="this.style.display='none'">
  <div class="author-box-text">
    <div class="author-box-name">Anthony Bouillon</div>
    <div class="author-box-bio">Expatrié français installé au Vietnam. Je partage mon expérience du quotidien vietnamien : vie pratique, démarches, travail et couple franco-vietnamien.</div>
    <a href="a-propos-capvietnam" class="author-box-link">En savoir plus sur l'auteur</a> · <a href="mes-livres" class="author-box-link">📚 Mes livres</a>
  </div>
</div>

<?php include '_article-comments.php'; ?>
<?php include '_related-articles.php'; ?>
<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
