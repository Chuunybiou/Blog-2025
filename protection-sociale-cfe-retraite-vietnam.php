<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'CFE, sécu et retraite : guide pour les expats au Vietnam';
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
   'a' => 'La CFE est une couverture de base — elle rembourse une partie des soins selon le barème de la Sécurité sociale française, ce qui peut laisser un reste à charge important dans des cliniques internationales au Vietnam. La plupart des expatriés couplent la CFE avec une assurance complémentaire internationale pour avoir une couverture réelle sur place. Consulte cfe.fr pour les taux de remboursement exacts selon les formules.'],
  ['q' => 'Est-ce que je perds mes trimestres de retraite si je pars au Vietnam ?',
   'a' => 'Si tu cesses toute cotisation retraite française, tu n\'accumules plus de trimestres. Mais tu ne perds pas ceux déjà acquis. Les options pour continuer à cotiser : rester salarié ou en portage (cotisations automatiques), adhérer à l\'assurance vieillesse volontaire de la CNAV depuis l\'étranger, ou cotiser via la CFE. À noter : il n\'existe pas de convention bilatérale de sécurité sociale entre la France et le Vietnam permettant de totaliser les périodes de cotisation des deux pays — renseigne-toi auprès de la CNAV pour ta situation.'],
  ['q' => 'Quel est le coût annuel de la CFE ?',
   'a' => 'Les cotisations CFE sont calculées selon ta tranche de revenus et ta situation familiale. Plusieurs niveaux de couverture existent. La CFE publie un simulateur de cotisation sur son site officiel — consulte <a href="https://www.cfe.fr" target="_blank" rel="noopener">cfe.fr</a> pour les tarifs exacts en vigueur.'],
  ['q' => 'Faut-il adhérer à la CFE dès l\'arrivée au Vietnam ou peut-on attendre ?',
   'a' => 'Il faut avoir été affilié à la Sécurité sociale française préalablement (généralement au moins 3 mois d\'affiliation). Surtout, l\'adhésion doit se faire dans les 3 mois suivant ton départ de France ou la fin de ta couverture Sécu. Passé ce délai, tu ne peux plus adhérer pour certaines garanties. À faire en priorité dès l\'installation — consulte <a href="https://www.cfe.fr" target="_blank" rel="noopener">cfe.fr</a> pour les conditions exactes en vigueur.'],
  ['q' => 'Mon conjoint vietnamien et mes enfants peuvent-ils être couverts par la CFE ?',
   'a' => 'La CFE prévoit la couverture des membres de la famille (conjoint et enfants ayants droit) selon la formule choisie et moyennant cotisation adaptée — la nationalité française n\'est pas exigée pour les ayants droit d\'un adhérent français. C\'est une option particulièrement pertinente pour un couple mixte qui envisage des séjours en France ou veut une couverture cohérente pour toute la famille. Les conditions et tarifs famille sont détaillés sur cfe.fr — compare avec le coût d\'une assurance internationale familiale avant de choisir.'],
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
      <span>⏱ 12 min de lecture</span>
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
      <li><a href="#section-famille">Le conjoint et les enfants dans l'équation</a></li>
      <li><a href="#section-retour">Préparer le retour en France</a></li>
      <li><a href="#section-checklist">Check-list chronologique du départ</a></li>
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

    <p><strong>La Sécurité sociale et la retraite sont les deux points qui font le plus peur aux Français qui partent à l'étranger.</strong> À raison : quitter la France sans avoir réfléchi à sa couverture sociale, c'est s'exposer à des frais médicaux énormes ou à une retraite amputée. Ce guide explique ce qui change, ce qu'on peut maintenir et comment — la CFE et son rôle de pont, les complémentaires internationales, les trois voies pour continuer à préparer sa retraite, la protection de la famille mixte, et la check-list chronologique pour ne rien rater dans les délais.</p>

    <p>Cet article fait partie du dossier <a href="travailler-a-distance-depuis-vietnam">travailler à distance depuis le Vietnam</a>. Pour la partie retraite spécifique au séjour longue durée, lis aussi <a href="retraite-vietnam-francais">prendre sa retraite au Vietnam : guide pour Français</a>.</p>

    <h2 id="section-1">Ce qu'on perd en quittant la Sécu française</h2>
    <p>La perte n'est pas immédiate, mais elle est réelle — et c'est précisément ce caractère différé qui la rend dangereuse : rien ne casse le jour du départ, aucun courrier ne t'alerte, et la facture n'arrive que des années plus tard, à la première hospitalisation sérieuse ou au calcul de la pension. Quand tu quittes un emploi salarié français et t'installes au Vietnam :</p>
    <ul>
      <li><strong>Maintien de droits temporaire :</strong> tu conserves tes droits à la Sécu pendant <strong>12 mois maximum</strong> après avoir cessé de cotiser, sous conditions (mise à jour CPAM requise) — mais attention, ce maintien vaut pour des soins en France, pas pour ta vie quotidienne au Vietnam</li>
      <li><strong>Remboursements diminués :</strong> la CPAM rembourse les soins à l'étranger selon le barème français, souvent très inférieur aux tarifs réels des hôpitaux vietnamiens, et uniquement sur dossier</li>
      <li><strong>Chômage :</strong> les droits ARE s'éteignent dès que tu t'installes durablement à l'étranger</li>
      <li><strong>Retraite :</strong> tu cesses d'accumuler des trimestres si tu n'as plus de cotisations — le compteur s'arrête sans bruit</li>
      <li><strong>Prévoyance :</strong> invalidité et capital décès du régime général cessent aussi — le grand oublié des check-lists, crucial si des proches dépendent de tes revenus</li>
    </ul>

    <h2 id="section-2">La CFE (Caisse des Français de l'Étranger)</h2>
    <p>La CFE est une caisse d'adhésion volontaire créée pour les Français qui vivent à l'étranger. Elle permet de maintenir une couverture maladie-maternité-invalidité française depuis l'étranger. Son rôle est souvent mal compris : ce n'est ni une mutuelle privée ni la Sécu classique, mais un <strong>pont</strong> — elle garde ton dossier ouvert dans le système français pendant que tu vis ailleurs, rembourse au barème français, et te réintègre sans friction au retour. Ceux qui la jugent « chère pour ce qu'elle rembourse » oublient la moitié de ce qu'ils achètent : la continuité.</p>

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
          <td>Variable selon tranche de revenus et formule — consulte <a href="https://www.cfe.fr" target="_blank" rel="noopener">cfe.fr</a> pour le simulateur</td>
        </tr>
        <tr>
          <td>Condition d'accès</td>
          <td>Avoir été affilié à la Sécurité sociale française préalablement (généralement au moins 3 mois)</td>
        </tr>
        <tr>
          <td>Délai d'adhésion après départ</td>
          <td>3 mois après la fin de ta couverture Sécu — vérifie sur <a href="https://www.cfe.fr" target="_blank" rel="noopener">cfe.fr</a></td>
        </tr>
        <tr>
          <td>Remboursements</td>
          <td>Sur base du barème Sécu française — reste à charge possible sur soins coûteux</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="tip-box">
      <strong>À faire en priorité :</strong> Si tu envisages d'adhérer à la CFE, fais-le dans les premières semaines après ton arrivée au Vietnam. Passé le délai d'adhésion, certaines garanties (notamment invalidité, maternité) ne sont plus accessibles — et des délais d'attente peuvent s'appliquer aux adhésions tardives. C'est LA démarche à date limite de toute cette page.
    </div>

    <h2 id="section-3">L'assurance santé privée internationale</h2>
    <p>La CFE seule est souvent insuffisante pour les soins au Vietnam, où les cliniques internationales (Vinmec, Family Medical Practice, Hôpital Franco-Vietnamien) pratiquent des tarifs élevés (consultation : 40-150 USD selon l'établissement) — très au-dessus des bases de remboursement françaises. La plupart des Français au Vietnam cumulent la CFE avec une assurance complémentaire internationale :</p>
    <ul>
      <li><strong>April International Expat</strong> : courant chez les francophones à l'étranger — consulte leur site pour les tarifs et couvertures actuels</li>
      <li><strong>Cigna Global</strong>, <strong>ACS</strong>, <strong>AXA International</strong> : autres références du marché</li>
      <li>Prix moyen pour un expat de 30-40 ans : <strong>80 à 200 €/mois environ</strong> selon la couverture et les franchises</li>
    </ul>
    <p>Vocabulaire du marché à maîtriser avant de comparer : les assurances expatriés se vendent soit <strong>« au 1er euro »</strong> (elles couvrent seules, sans CFE — tu paies tout le risque chez l'assureur privé), soit <strong>« en complément de la CFE »</strong> (la CFE rembourse sa part au barème français, la complémentaire couvre le reste — souvent moins chère à garanties équivalentes, puisque la CFE porte une partie du risque). Le montage CFE + complémentaire a un autre mérite, invisible à 30 ans et décisif à 60 : il maintient un lien continu avec le système français, sans questionnaire médical au retour, là où une assurance privée seule peut devenir chère ou sélective avec l'âge et les antécédents.</p>
    <p>Pour des soins d'urgence et d'hospitalisation, une couverture internationale correcte est indispensable. Le rapatriement sanitaire seul (si nécessaire) peut coûter <strong>20 000 à 100 000 €</strong> — c'est la garantie qu'on espère ne jamais utiliser et qui justifie à elle seule une partie de la prime. Vérifie qu'elle figure explicitement dans ton contrat, avec l'organisation logistique incluse (pas seulement le remboursement a posteriori).</p>
    <div class="info-box">
      <strong>À lire aussi :</strong> → <a href="assurance-sante-vietnam-expat">Assurance santé pour expatrié au Vietnam : le comparatif</a>
    </div>

    <h2 id="section-4">La retraite : l'arbre de décision</h2>
    <p>Partir au Vietnam ne signifie pas sacrifier sa retraite française — mais ça demande d'agir proactivement, parce qu'aucune des solutions ci-dessous ne s'active toute seule. Trois voies, cumulables :</p>

    <div class="info-box">
      <strong>Option 1 — Rester salarié ou en portage salarial</strong><br>
      C'est la solution la plus simple : tes cotisations retraite continuent automatiquement, régime général et complémentaire compris. Tu accumules des trimestres comme si tu travaillais en France. Inconvénient : les charges sont importantes — c'est le prix du filet complet, chômage inclus.
    </div>

    <div class="info-box">
      <strong>Option 2 — Assurance vieillesse volontaire (CNAV)</strong><br>
      Tu peux cotiser volontairement à la retraite française depuis l'étranger, via la CNAV (Caisse nationale d'assurance vieillesse). La cotisation est calculée sur une assiette forfaitaire ou réelle. Montants et conditions d'accès disponibles sur <a href="https://www.retraite.gouv.fr" target="_blank" rel="noopener">retraite.gouv.fr</a>.
    </div>

    <div class="info-box">
      <strong>Option 3 — Capitalisation individuelle</strong><br>
      Placements en assurance-vie (contrat luxembourgeois, compte-titres), PEA si tu restes résident fiscal français, fonds de pension privés. À construire en parallèle de la retraite obligatoire, pas en remplacement. L'atout du Vietnam ici : un coût de vie bas dégage une capacité d'épargne que la France ne permettait peut-être pas — encore faut-il l'épargner plutôt que la dépenser. Le sort de chaque enveloppe en expatriation est détaillé dans <a href="fortuneo-expat-compte-france">l'article banque et épargne d'expatrié</a>.
    </div>

    <p>La vraie question est : <strong>combien de trimestres te manquent ?</strong> Si tu pars à 35 ans et reviens à 45 ans, 10 ans sans cotisation, c'est potentiellement 40 trimestres manquants sur 172 requis pour une retraite à taux plein. Le calcul vaut la peine d'être fait — d'autant que le manque à gagner est double : moins de trimestres (donc décote possible sur la date de départ) et moins de salaires portés au compte (donc pension calculée sur une carrière amputée). N'oublie pas non plus la <strong>retraite complémentaire</strong> (AGIRC-ARRCO pour les salariés) : les statuts qui cotisent au régime général y cotisent aussi, ceux qui n'y cotisent pas creusent un second trou, moins visible mais bien réel sur la pension finale.</p>
    <p>Le bon outil pour objectiver tout ça : ton <strong>relevé de carrière</strong>, consultable en ligne sur ton compte retraite. Télécharge-le avant de partir, puis vérifie-le chaque année — c'est lui qui te dira, noir sur blanc, ce que chaque année vietnamienne coûte ou ne coûte pas à ta future pension, et c'est sur cette base que se décide rationnellement l'adhésion à l'assurance volontaire.</p>

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

    <p>Lecture du tableau en une phrase : plus ton statut est « français » (salarié, portage), plus ta protection est automatique et chère ; plus il est « local ou sans structure », plus la protection devient ta responsabilité personnelle — et plus la ligne « ce qu'il faut faire en plus » devient urgente. La dernière ligne du tableau décrit la situation de beaucoup de nomades au Vietnam : elle n'est pas une fatalité, c'est un choix par défaut qui se corrige en quelques semaines de démarches. Le statut lui-même se choisit — le comparatif complet est dans <a href="portage-salarial-ou-micro-entreprise-vietnam">portage vs micro-entreprise</a> et <a href="portage-salarial-depuis-vietnam">le guide du portage depuis le Vietnam</a>.</p>

    <div class="warning-box">
      <strong>Disclaimer :</strong> Cet article partage mon expérience et des informations générales, pas un conseil en protection sociale ou juridique personnalisé. Les règles CFE et retraite évoluent. Pour ta situation précise, consulte la CFE directement (cfe.fr) et un expert-comptable spécialisé expatriation.
    </div>

    <h2 id="section-famille">Le conjoint vietnamien et les enfants dans l'équation</h2>
    <p>La protection sociale d'un couple mixte se pense à deux systèmes — et c'est souvent une force, chaque membre apportant son filet :</p>
    <ul>
      <li><strong>Ton/ta conjoint(e) vietnamien(ne)</strong> a souvent déjà sa propre couverture : la BHYT via son emploi local, éventuellement complétée d'une <a href="assurance-sante-privee-manulife-vietnam">assurance privée vietnamienne</a>. Côté français, la CFE permet sous conditions de couvrir les membres de la famille (ayants droit) — une option à chiffrer si vous envisagez des séjours ou une installation en France, où sa couverture vietnamienne ne vaudra rien.</li>
      <li><strong>Les enfants franco-vietnamiens</strong> : au Vietnam, ils relèvent de vos couvertures respectives (CFE famille, assurance internationale ou locale). En France, ils seront couverts par la Sécu dès la résidence établie. Le point de vigilance est la <strong>transition</strong> : lors d'un déménagement France ↔ Vietnam, vérifie qu'aucune période de flottement ne laisse un enfant sans couverture.</li>
      <li><strong>La maternité</strong> mérite une planification à part : délais de carence des assurances, choix du pays de naissance, prise en charge — tout est dans <a href="grossesse-vietnam-hopital-cout-demarches">le guide grossesse au Vietnam</a>.</li>
    </ul>

    <h2 id="section-retour">Préparer le retour en France (même hypothétique)</h2>
    <p>La moitié des décisions de cette page se jugent au retour — même si tu jures aujourd'hui ne jamais rentrer. Ce qu'il faut savoir dès maintenant :</p>
    <ul>
      <li><strong>La réaffiliation à la Sécu</strong> se fait sur critère de résidence (protection universelle maladie) : de retour en France de façon stable, tu récupères une couverture — prévois les justificatifs de retour et un délai administratif, et renseigne-toi sur les dispositifs applicables aux Français de retour de l'étranger au moment venu.</li>
      <li><strong>Les trimestres acquis ne se perdent jamais</strong> : ta retraite française reprendra le fil là où tu l'as laissé. Ce sont les trous qui coûtent, pas le départ lui-même.</li>
      <li><strong>L'absence de convention de sécurité sociale France-Vietnam</strong> signifie que tes années cotisées au régime vietnamien (si tu travailles en contrat local) ne se totaliseront pas avec tes trimestres français. Raison de plus pour maintenir un fil français (CNAV volontaire, CFE) si ta carrière repassera par la France.</li>
      <li><strong>Documente tout</strong> : attestations de cotisations vietnamiennes, relevés CFE, certificats de radiation — le dossier du retour se construit pendant l'expatriation, pas après.</li>
    </ul>

    <h2 id="section-checklist">Check-list chronologique du départ</h2>
    <ol>
      <li><strong>Avant le départ</strong> : relevé de carrière à jour sur ton compte retraite en ligne, point sur tes droits ARE (ils ne t'attendront pas), ouverture des comptes/contrats qui exigent la résidence française.</li>
      <li><strong>Premier mois au Vietnam</strong> : décision CFE (le délai d'adhésion court !), souscription de la complémentaire internationale ou de l'assurance voyage de transition — ne laisse jamais un jour sans aucune couverture, l'accident de scooter n'attend pas la fin de la paperasse.</li>
      <li><strong>Premier trimestre</strong> : signalements CPAM/CAF/impôts (voir <a href="declarer-impots-france-depuis-vietnam">le guide déclaration d'impôts</a>), décision sur l'assurance vieillesse volontaire.</li>
      <li><strong>Chaque année</strong> : vérification du relevé de carrière, réévaluation de la couverture santé selon l'évolution familiale (mariage, naissance — chaque événement change l'équation), et un œil sur les réformes françaises des retraites — elles te concernent toujours, même à 10 000 km.</li>
    </ol>

    <?php
    $page_sources = [
      ['label' => 'Caisse des Français de l\'Étranger (CFE)', 'url' => 'https://www.cfe.fr'],
      ['label' => 'CLEISS — protection sociale internationale', 'url' => 'https://www.cleiss.fr'],
      ['label' => 'L\'Assurance retraite — retraite et résidence à l\'étranger', 'url' => 'https://www.lassuranceretraite.fr'],
    ];
    include '_article-sources.php';
    ?>

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
$current_slug = 'protection-sociale-cfe-retraite-vietnam';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
