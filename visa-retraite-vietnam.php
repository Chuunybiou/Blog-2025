<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Visa retraite au Vietnam : conditions, démarches et durée de séjour (2026)';
$page_description = 'Le Vietnam n\'a pas de visa retraité officiel, mais il existe des solutions pour y vivre longtemps : visa DL, visa TT, ou visa électronique renouvelable. Le point complet.';
$page_canonical   = SITE_URL . '/visa-retraite-vietnam';
$page_og_title    = 'Visa retraite au Vietnam : quelles options pour les Français ?';
$page_og_desc     = 'Visa DL, visa TT conjoint, visa électronique renouvelable — comment rester longtemps au Vietnam en tant que retraité français.';
$page_og_url      = SITE_URL . '/visa-retraite-vietnam';
$page_og_image    = SITE_URL . '/assets/img/rue-village-karsts-phong-nha.jpg';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Visa retraite au Vietnam : conditions, démarches et durée de séjour (2026)',
  'datePublished'   => '2026-08-21',
  'dateModified'    => '2026-08-21',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/visa-retraite-vietnam',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie pratique au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'amber';
$article_hero_bg  = '#1a2a0e';
$article_glow     = 'rgba(154,180,42,0.15)';
$article_badge    = 'rgba(154,180,42,0.25)';
$article_badge_c  = '#b4d04a';

$article_category     = 'Vie pratique au Vietnam';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vie-pratique';
$page_faq = [
  ['q' => 'Le Vietnam a-t-il un visa retraite comme la Thaïlande ?',
   'a' => 'Non. Contrairement à la Thaïlande (visa O-A/O-X), aux Philippines (SRRV) ou à la Malaisie (MM2H), le Vietnam n\'a pas créé de visa dédié aux retraités étrangers à ce jour. Il faut construire son séjour avec les visas existants : exemption de 45 jours, e-visa 90 jours, ou — si tu es marié(e) à un(e) Vietnamien(ne) — visa TT et carte de résidence temporaire.'],
  ['q' => 'Puis-je enchaîner les e-visas indéfiniment pour vivre au Vietnam à la retraite ?',
   'a' => 'En pratique, beaucoup de retraités fonctionnent ainsi : e-visa de 90 jours, sortie du territoire, nouveau e-visa. C\'est légal aujourd\'hui, mais ça reste un statut de visiteur, pas de résident — et les autorités peuvent questionner les renouvellements très répétés. Considère cette approche comme une phase de test, pas comme un plan de vie définitif.'],
  ['q' => 'Acheter un appartement au Vietnam donne-t-il un droit au séjour ?',
   'a' => 'Non. Contrairement à une idée répandue, l\'achat immobilier au Vietnam n\'ouvre aucun droit automatique à un visa ou à une résidence. Tu peux posséder un appartement et n\'avoir qu\'un e-visa de 90 jours. Ne construis jamais un projet de retraite sur cette confusion.'],
  ['q' => 'Le mariage avec un(e) Vietnamien(ne) est-il vraiment la meilleure voie ?',
   'a' => 'Administrativement, oui, et de très loin : le visa TT puis la carte de résidence temporaire (TRC) offrent un séjour stable de longue durée, renouvelable, avec entrées-sorties libres. Mais évidemment, on ne se marie pas pour un visa — c\'est la situation de fait des couples franco-vietnamiens qui rend cette voie naturelle pour eux.'],
  ['q' => 'Les règles peuvent-elles changer ?',
   'a' => 'Oui, et plutôt dans le bon sens : le Vietnam assouplit progressivement sa politique de visas pour attirer visiteurs et talents (allongement de l\'exemption, e-visa élargi). Un visa retraite ou un visa longue durée pour les étrangers « à revenus passifs » est régulièrement évoqué dans le débat public vietnamien. Surveille la section actualités du blog — si ça bouge, on le couvrira.'],
];

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=vie-pratique">Vie pratique</a><span class="breadcrumb-sep">›</span>
      <span>Visa retraite Vietnam</span>
    </div>
    <span class="article-badge-hero">Vie pratique au Vietnam</span>
    <h1>Visa retraite au Vietnam : les vraies options pour un Français en 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Août 2026</span>
      <span>⏱ 12 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">La vérité : pas de visa retraite</a></li>
      <li><a href="#section-2">Option 1 — Exemption et e-visa</a></li>
      <li><a href="#section-3">Option 2 — Le visa TT / TRC (conjoint)</a></li>
      <li><a href="#section-4">Option 3 — Le visa DL et les autres pistes</a></li>
      <li><a href="#section-5">Les fausses pistes à éviter</a></li>
      <li><a href="#section-6">Quelle stratégie selon ton profil ?</a></li>
      <li><a href="#section-6b">La retraite en alternance</a></li>
      <li><a href="#section-6c">Bonnes pratiques du long séjour</a></li>
      <li><a href="#section-7">Et si le Vietnam créait un visa retraite ?</a></li>
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

    <p><strong>Tu cherches « visa retraite Vietnam » et tu tombes sur des sites qui te promettent la lune ? Voici la vérité, sans détour : ce visa n'existe pas.</strong> Mais des milliers de retraités étrangers vivent pourtant au Vietnam. Cet article t'explique comment ils font réellement, quelles options sont solides, lesquelles sont des zones grises, et lesquelles sont des pièges à éviter.</p>

    <p>Cet article traite du <em>droit au séjour</em>, la fondation administrative du projet. Pour la vie de retraité sur place (budget, santé, logement, vie sociale), lis le guide compagnon : <a href="vivre-retraite-vietnam-guide">vivre sa retraite au Vietnam</a>.</p>

    <h2 id="section-1">La vérité de départ : le Vietnam n'a pas de visa retraite</h2>

    <p>Ses voisins ont tous construit des programmes pour attirer les pensions étrangères : la Thaïlande avec ses visas O-A et O-X, les Philippines avec le SRRV, la Malaisie avec le MM2H, l'Indonésie avec son KITAS retraite. Le Vietnam, lui, n'a rien de tel à ce jour — aucune catégorie de visa de sa loi sur l'immigration ne correspond au profil « étranger de plus de 55 ans avec des revenus passifs ».</p>

    <p>Conséquence directe : <strong>tout projet de retraite au Vietnam est un montage à partir des visas existants</strong>, chacun conçu pour autre chose. C'est faisable — des milliers de personnes le font — mais il faut comprendre précisément ce que chaque outil permet, et surtout ce qu'il ne permet pas. Méfie-toi particulièrement des sites commerciaux qui vendent un « visa retraite Vietnam » clé en main : derrière ce nom marketing se cache toujours l'un des visas décrits ci-dessous, avec une marge d'agence par-dessus — et parfois un montage dont tu ne comprendras la fragilité que le jour où il cassera.</p>

    <h2 id="section-2">Option 1 — L'exemption de 45 jours et l'e-visa : la vie en pointillés</h2>

    <p>C'est la voie par défaut du retraité sans attache familiale vietnamienne :</p>

    <ul>
      <li><strong>L'exemption de visa de 45 jours</strong> dont bénéficient les Français à chaque entrée — gratuite, sans formalité préalable (hors <a href="declaration-pre-arrivee-vietnam-pai-2026">déclaration PAI</a> pour les grands aéroports). Idéale pour les repérages et les séjours d'hiver courts.</li>
      <li><strong>L'e-visa de 90 jours</strong>, à entrées multiples, demandé en ligne sur le site officiel de l'immigration vietnamienne, pour un coût modique — le détail complet des deux dispositifs, avec le pas-à-pas de la demande, est dans le <a href="visa-vietnam-francais-guide-2026">guide des visas Vietnam pour Français</a>.</li>
    </ul>

    <p>En pratique, le rythme de vie ressemble à ceci : trois mois au Vietnam, une sortie (souvent un saut au Cambodge, en Thaïlande ou un retour en France), puis un nouveau cycle. Certains retraités vivent ainsi des années — et les « visa-runs » deviennent une routine bien rodée : le bus pour Phnom Penh ou le vol pas cher pour Bangkok, une ou deux nuits sur place, et retour avec un compteur remis à zéro. Il faut néanmoins être honnête sur ce que cette vie implique :</p>

    <ul>
      <li><strong>Les plus :</strong> aucune condition de ressources à prouver, une souplesse totale, et des sorties obligatoires qui deviennent des occasions de voyager dans la région.</li>
      <li><strong>Les moins :</strong> tu restes juridiquement un <em>visiteur</em>. Pas de statut de résident, un bail et une banque plus compliqués, un billet de sortie à prévoir en permanence, un budget visa-runs récurrent — et le risque, documenté dans <a href="visa-teletravail-digital-nomad-vietnam">l'article sur les visas des télétravailleurs</a>, que les renouvellements très répétés finissent par attirer les questions de l'immigration.</li>
      <li><strong>Le vrai statut de cette option :</strong> excellente pour <em>tester</em> la vie vietnamienne une ou deux années, inconfortable comme plan définitif à 75 ans.</li>
    </ul>

    <h2 id="section-3">Option 2 — Marié(e) à un(e) Vietnamien(ne) : le visa TT et la TRC</h2>

    <p>Si ton projet de retraite au Vietnam s'inscrit dans un couple franco-vietnamien — le cœur des lecteurs de ce blog — la situation change du tout au tout. Le mariage ouvre la seule voie de séjour stable et durable :</p>

    <ul>
      <li><strong>Le visa TT</strong>, délivré aux conjoints de citoyens vietnamiens, avec ton conjoint comme parrain de la demande ;</li>
      <li><strong>La carte de résidence temporaire (TRC)</strong>, valable jusqu'à 3 ans renouvelables, qui fait de toi un résident avec entrées-sorties libres — fini les visa-runs, pour de bon.</li>
    </ul>

    <p>Toute la mécanique (conditions, documents, enregistrement d'un mariage célébré en France, pièges du renouvellement) est détaillée dans le <a href="visa-tt-carte-residence-trc-mariage">guide complet du visa TT et de la TRC</a>. Pour un couple mixte qui prépare sa retraite au Vietnam, c'est LE document de référence du projet — et l'une des raisons pour lesquelles tant de couples franco-vietnamiens choisissent le Vietnam plutôt que la France pour cette étape de vie : le droit au séjour y est simple, là où le parcours inverse (<a href="titre-sejour-vie-privee-familiale-conjoint-vietnamien">titre de séjour français du conjoint vietnamien</a>) demande des années.</p>

    <p>Point de calendrier à anticiper si vous n'êtes pas encore mariés : la <a href="se-marier-vietnam-procedure-comite-populaire">procédure de mariage au Vietnam</a> (CCAM, comité populaire) prend plusieurs mois. Si le projet de retraite au Vietnam accompagne un projet de mariage, lance les démarches matrimoniales en premier — c'est elles qui débloquent tout le reste du statut.</p>

    <h2 id="section-4">Option 3 — Le visa DL et les autres pistes sérieuses</h2>

    <ul>
      <li><strong>Le visa DL (affaires)</strong> : régulièrement utilisé par des étrangers pour des séjours plus longs, il suppose une entreprise vietnamienne qui « t'invite ». Des agences en font commerce — c'est une zone grise assumée : ça fonctionne, mais ton séjour repose sur un lien d'affaires largement fictif. Pour un retraité, je le mentionne par honnêteté, pas par recommandation : le jour où les autorités resserrent les contrôles sur ces lettres d'invitation de complaisance — c'est arrivé par vagues dans le passé — tu ne veux pas être celui dont tout le projet de vie repose dessus.</li>
      <li><strong>Le regroupement familial élargi</strong> : les parents d'un citoyen vietnamien peuvent aussi être parrainés — pertinent dans certaines configurations familiales (ton enfant a la double nationalité et vit au Vietnam, par exemple — voir <a href="enfant-couple-franco-vietnamien-nationalite">la nationalité des enfants franco-vietnamiens</a>).</li>
      <li><strong>La résidence permanente</strong> : elle existe en droit vietnamien, mais avec des conditions d'ancienneté et de situation strictes qui la réservent en pratique aux conjoints de longue date et à quelques profils particuliers. C'est un horizon lointain, pas une porte d'entrée.</li>
    </ul>

    <h2 id="section-5">Les fausses pistes qui circulent (et coûtent cher)</h2>

    <ul>
      <li><strong>« Achète un appartement, tu auras un visa. »</strong> Faux. L'<a href="achat-immobilier-vietnam-couple-mixte">achat immobilier au Vietnam</a> n'ouvre aucun droit au séjour — tu peux posséder un bien et rester limité à 90 jours de présence. Cette confusion, importée d'autres pays qui lient résidence et investissement, est le piège n°1 vendu aux retraités.</li>
      <li><strong>« Prends un visa étudiant pour apprendre le vietnamien. »</strong> La piste existe formellement (inscription dans une université), mais construire une retraite sur un statut étudiant est un montage fragile et contraignant — cours obligatoires, renouvellements dépendants de l'établissement.</li>
      <li><strong>« L'agence s'occupe de tout, ne pose pas de questions. »</strong> Les services d'agences sont utiles pour la paperasse légitime ; ils deviennent dangereux quand tu ne comprends plus sur quelle base légale repose ton propre séjour. Règle simple : ne signe jamais pour un visa dont tu ne peux pas expliquer la catégorie et la justification.</li>
    </ul>

    <h2 id="section-6">Quelle stratégie selon ton profil ?</h2>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Ton profil</th>
          <th>Stratégie réaliste</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Marié(e) à un(e) Vietnamien(ne)</strong></td>
          <td>Visa TT → TRC, sans hésitation. Séjour stable, le projet de retraite peut se construire sereinement.</td>
        </tr>
        <tr>
          <td><strong>Célibataire ou couple 100 % français, phase de découverte</strong></td>
          <td>Exemption 45 jours + e-visas sur 1-2 ans pour tester villes et saisons, en assumant le statut de visiteur.</td>
        </tr>
        <tr>
          <td><strong>Couple français décidé à rester longtemps</strong></td>
          <td>Lucidité : sans attache familiale, le Vietnam n'offre pas de résidence stable aujourd'hui. Soit accepter la vie en pointillés, soit comparer avec la Thaïlande ou la Malaisie qui offrent de vrais visas retraite, quitte à faire du Vietnam sa destination secondaire.</td>
        </tr>
        <tr>
          <td><strong>Semi-retraite avec activité en ligne</strong></td>
          <td>Ta situation rejoint celle des télétravailleurs — statuts et zones grises détaillés dans <a href="travailler-a-distance-depuis-vietnam">travailler à distance depuis le Vietnam</a>.</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-6b">La retraite en alternance : le modèle « hirondelle » France-Vietnam</h2>

    <p>Il existe une stratégie que les limites actuelles des visas rendent paradoxalement très élégante : <strong>l'alternance saisonnière</strong>. Six mois d'hiver au Vietnam (novembre à avril — la belle saison du sud et du centre), l'été en France près des enfants et petits-enfants. Ce modèle, que les Canadiens appellent « snowbird », colle remarquablement bien aux contraintes vietnamiennes :</p>

    <ul>
      <li><strong>Côté visas :</strong> un e-visa de 90 jours + un renouvellement (ou une exemption + un e-visa) couvrent la saison sans acrobaties. Tu n'es jamais dans la zone des renouvellements suspects, puisque tu repars réellement chaque année.</li>
      <li><strong>Côté fiscalité :</strong> en restant moins de 183 jours au Vietnam et en gardant ton foyer en France, tu demeures résident fiscal français — ta pension, tes impôts, ta Sécurité sociale continuent comme avant, sans montage. C'est LA grande simplification de ce modèle (les détails dans <a href="residence-fiscale-france-vietnam-183-jours">résidence fiscale France-Vietnam</a>).</li>
      <li><strong>Côté santé :</strong> tu restes dans le système français pour le suivi lourd (bilans annuels, spécialistes) et tu couvres les séjours vietnamiens avec une <a href="assurance-voyage-vietnam">assurance voyage longue durée</a> — bien plus simple et moins coûteux qu'une couverture expatrié permanente à 70 ans.</li>
      <li><strong>Côté famille :</strong> tu ne choisis plus entre tes petits-enfants et ta vie vietnamienne — tu as les deux, chaque année.</li>
    </ul>

    <p>Pour beaucoup de couples franco-vietnamiens retraités, c'est même le modèle idéal dans l'autre sens : l'hiver au chaud auprès de la famille vietnamienne, l'été en France. Le meilleur des deux mondes, avec le droit le plus simple des deux côtés.</p>

    <h2 id="section-6c">Les bonnes pratiques du long séjour, quel que soit ton visa</h2>

    <ul>
      <li><strong>Un passeport toujours largement valide.</strong> Six mois de validité au-delà du séjour est la norme de sécurité en Asie, et un passeport bien rempli de tampons vietnamiens réguliers se renouvelle au consulat de France à Hanoï ou HCMV — n'attends jamais les dernières pages ni les derniers mois.</li>
      <li><strong>Le billet de sortie.</strong> Avec une exemption ou un e-visa, les compagnies aériennes peuvent exiger une preuve de sortie du territoire avant l'embarquement. Un billet de bus pour le Cambodge ou un vol low-cost remboursable fait l'affaire — mais il faut l'avoir.</li>
      <li><strong>Des dates respectées à la lettre.</strong> Le dépassement de séjour (overstay) se paie en amendes, en mentions dans ton dossier, et en difficultés pour tous les visas futurs. À l'âge de la retraite, on a mieux à faire que de négocier avec l'immigration — mets les dates limites dans ton téléphone avec une alarme à J-7.</li>
      <li><strong>L'enregistrement de résidence.</strong> Où que tu loges, ton hébergement doit déclarer ta présence (les hôtels le font automatiquement ; en location, vérifie que le propriétaire fait le đăng ký tạm trú). C'est une formalité invisible quand elle est faite, un vrai problème quand elle ne l'est pas.</li>
      <li><strong>Garde l'historique propre.</strong> Chaque entrée-sortie sans incident est un point de crédit pour la suite — exactement comme pour le <a href="visa-schengen-belle-famille-vietnamienne">visa Schengen de ta belle-famille</a> dans l'autre sens. Les administrations des deux pays aiment les dossiers prévisibles.</li>
    </ul>

    <h2 id="section-7">Et si le Vietnam créait enfin un visa retraite ?</h2>

    <p>Le sujet revient régulièrement dans le débat public vietnamien : le pays voit ses voisins capter les pensions étrangères, et sa politique de visas s'assouplit d'année en année (allongement de l'exemption pour plusieurs nationalités, e-visa généralisé, discussions sur des visas longue durée pour les talents et investisseurs). Un dispositif pour les retraités à revenus passifs serait la suite logique — mais à la date de cet article, <strong>rien de concret n'est en vigueur</strong>, et je ne construirais pas un projet de vie sur une rumeur d'annonce.</p>

    <p>Ce que je peux te promettre : le jour où ça bouge, ce blog le couvrira en détail, comme on l'a fait pour <a href="apostille-vietnam-francais-2026">l'adhésion du Vietnam à l'apostille</a>. Inscris-toi à la newsletter en bas de page pour ne pas rater l'info — c'est exactement le genre d'alerte administrative pour lequel elle existe.</p>

    <p>En attendant, la meilleure décision reste la plus simple : <strong>construis ton projet avec les règles d'aujourd'hui, pas avec celles que tu espères demain</strong>. Si le montage actuel (alternance, e-visas, ou TT/TRC pour les couples mixtes) te convient, le futur visa retraite ne sera qu'un bonus. S'il ne te convient pas, aucune rumeur ne devrait te faire signer un bail de trois ans à Đà Nẵng.</p>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="warning-box">
      <strong>Disclaimer :</strong> les règles migratoires vietnamiennes évoluent et leur application varie selon les bureaux locaux. Cet article donne le paysage général à sa date de publication — vérifie toujours les conditions en vigueur auprès des sources officielles ou d'un professionnel avant de t'engager.
    </div>

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
$current_slug = 'visa-retraite-vietnam';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
