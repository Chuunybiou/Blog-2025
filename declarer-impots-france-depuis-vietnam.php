<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Déclarer ses impôts en France depuis le Vietnam : guide pratique 2026';
$page_description = 'Comment déclarer ses impôts en France quand on vit au Vietnam ? Formulaires non-résidents, revenus de source française, changement de statut fiscal, calendrier officiel.';
$page_canonical   = SITE_URL . '/declarer-impots-france-depuis-vietnam';
$page_og_title    = 'Déclarer ses impôts en France depuis le Vietnam : guide 2026';
$page_og_desc     = 'Formulaire 2042 NR, SIPNR, revenus de source française, déclaration de départ : tout ce qu\'il faut faire pour être en règle avec le fisc français depuis le Vietnam.';
$page_og_url      = SITE_URL . '/declarer-impots-france-depuis-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Déclarer ses impôts en France depuis le Vietnam : guide pratique 2026',
  'datePublished'   => '2026-06-11',
  'dateModified'    => '2026-06-11',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/declarer-impots-france-depuis-vietnam',
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
  ['q' => 'Dois-je déclarer mes revenus en France si je vis au Vietnam ?',
   'a' => 'Cela dépend de ta résidence fiscale. Si tu es résident fiscal français (foyer en France, moins de 183 jours au Vietnam, intérêts économiques en France), oui tu dois déclarer tous tes revenus mondiaux en France. Si tu es résident fiscal vietnamien, tu ne déclares en France que tes revenus de source française (loyers, dividendes de sociétés françaises, etc.).'],
  ['q' => 'Qu\'est-ce que la déclaration de non-résident (formulaire 2042 NR) ?',
   'a' => 'Le formulaire 2042 NR est la déclaration de revenus pour les non-résidents fiscaux français qui ont des revenus de source française. Il se remplit en ligne sur impots.gouv.fr, via le service des impôts des particuliers non-résidents (SIPNR) à Noisy-le-Grand. Les non-résidents bénéficient généralement de délais plus tardifs que les résidents — consulte impots.gouv.fr pour les dates exactes en vigueur.'],
  ['q' => 'Comment signaler son départ à l\'étranger au fisc français ?',
   'a' => 'Il faut déposer une déclaration de revenus pour l\'année de départ (déclarant les revenus jusqu\'à la date de départ), cocher la case "transfert du domicile fiscal hors de France", et signaler ta nouvelle adresse au centre des impôts. Les banques, la CAF, la CPAM doivent également être informées. Consulte impots.gouv.fr pour la procédure en vigueur.'],
  ['q' => 'Les impôts au Vietnam sont-ils déduits de ceux que je paie en France ?',
   'a' => 'La convention de 1993 prévoit un mécanisme de crédit d\'impôt pour éviter la double imposition. Si tu as payé de l\'impôt sur le revenu au Vietnam sur un revenu, tu peux en principe en déduire le montant de ta déclaration française sur ce même revenu. Le mécanisme exact dépend du type de revenu et de l\'article de la convention applicable (salaires, dividendes, plus-values…) — consulte un expert-comptable spécialisé pour les modalités de déclaration du crédit d\'impôt dans ta situation.'],
  ['q' => 'Et côté vietnamien, dois-je déclarer quelque chose ?',
   'a' => 'Si tu es devenu résident fiscal vietnamien (plus de 183 jours de présence, notamment), le Vietnam t\'impose en principe sur tes revenus mondiaux, avec ses propres obligations déclaratives — pour un salarié local, l\'employeur gère l\'essentiel via le prélèvement à la source, mais des revenus étrangers (loyers français, dividendes) peuvent créer des obligations propres. La convention fiscale répartit ensuite les droits d\'imposer entre les deux pays. C\'est le cas type où l\'accompagnement d\'un professionnel maîtrisant les deux systèmes se rentabilise dès la première année.'],
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
      <span>Déclarer ses impôts depuis le Vietnam</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Déclarer ses impôts en France depuis le Vietnam : ce qu'il faut faire</h1>
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
      <li><a href="#section-1">Résident ou non-résident fiscal ?</a></li>
      <li><a href="#section-2">L'année de départ : la plus critique</a></li>
      <li><a href="#section-3">Si tu es résident fiscal français</a></li>
      <li><a href="#section-4">Si tu es non-résident fiscal français</a></li>
      <li><a href="#section-5">Calendrier et services fiscaux</a></li>
      <li><a href="#section-6">Ce qu'il faut signaler en dehors des impôts</a></li>
      <li><a href="#section-enligne">Déclarer en ligne depuis Hanoï</a></li>
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

    <p><strong>Vivre au Vietnam ne te dispense pas automatiquement de déclarer en France.</strong> Selon ta résidence fiscale, tu peux avoir des obligations déclaratives dans les deux pays simultanément, ou seulement en France sur tes revenus de source française. Ce guide clarifie ce que tu dois faire — et quand : le statut qui détermine tout, l'année charnière du départ, les formulaires de chaque situation, la mécanique en ligne depuis l'étranger, et les erreurs qui coûtent le plus cher aux expatriés.</p>

    <p>Cet article fait partie du dossier <a href="travailler-a-distance-depuis-vietnam">travailler à distance depuis le Vietnam</a>. Avant de lire ce guide, assure-toi d'avoir compris ta <a href="residence-fiscale-france-vietnam-183-jours">résidence fiscale</a> et la <a href="fiscalite-expat-france-vietnam">convention France-Vietnam de 1993</a> — les trois articles forment un tout : la convention dit qui a le droit d'imposer, la résidence dit de quel côté tu te trouves, et celui-ci dit quels formulaires remplir en conséquence.</p>

    <div class="warning-box">
      <strong>Article technique :</strong> Les règles fiscales évoluent chaque année (lois de finances, barèmes, dates). Les informations ci-dessous sont générales — pour ta situation précise, consulte un expert-comptable spécialisé en expatriation ou le service des impôts des non-résidents.
    </div>

    <h2 id="section-1">Résident ou non-résident fiscal français ?</h2>
    <p>Tout dépend de cette question — et elle ne se tranche pas à l'intuition mais avec les critères du droit interne français (foyer, séjour principal, activité, centre des intérêts économiques) puis, en cas de conflit, ceux de la convention fiscale de 1993. Le raisonnement détaillé est dans <a href="residence-fiscale-france-vietnam-183-jours">l'article résidence fiscale et 183 jours</a> ; retiens ici que ta situation déclarative est l'une des suivantes :</p>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Situation</th>
          <th>Ce que tu déclares en France</th>
          <th>Formulaire principal</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Résident fiscal français vivant au Vietnam</td>
          <td>Tous tes revenus mondiaux (France + Vietnam + autres)</td>
          <td>2042 + annexes selon revenus</td>
        </tr>
        <tr>
          <td>Non-résident fiscal français (résident VN)</td>
          <td>Uniquement tes revenus de source française (loyers FR, dividendes FR, etc.)</td>
          <td>2042 NR (non-résidents)</td>
        </tr>
        <tr>
          <td>Non-résident sans revenus de source française</td>
          <td>Rien à déclarer en France</td>
          <td>—</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-2">L'année de départ : la plus critique</h2>
    <p>L'année où tu t'installes au Vietnam est souvent la plus complexe fiscalement — c'est celle où se commettent 80 % des erreurs, parce qu'on déménage, on change de vie et on remet la paperasse « à plus tard ». Tu peux changer de statut fiscal en cours d'année. Dans ce cas :</p>
    <ul>
      <li>Tu déclares tes revenus <strong>jusqu'à la date de départ</strong> comme résident fiscal français</li>
      <li>Tu indiques ton transfert de domicile fiscal hors de France sur ta déclaration (rubrique dédiée sur le formulaire 2042 — consulte la notice ou impots.gouv.fr)</li>
      <li>Tu communiques ta nouvelle adresse au fisc français — l'adresse vietnamienne réelle, pas celle des parents</li>
      <li>À partir de ta date de départ, seuls les revenus de source française restent imposables en France</li>
    </ul>
    <div class="tip-box">
      <strong>Conseil pratique :</strong> Garde une trace écrite de ta date d'installation au Vietnam (contrat de bail, enregistrement de domicile temporaire, billets d'avion). En cas de contrôle, ce sont ces documents qui servent de preuve.
    </div>
    <p>Pour visualiser : un départ en septembre donne, au printemps suivant, une déclaration « mixte » — huit mois de revenus mondiaux comme résident, puis quatre mois limités aux seuls revenus de source française. L'année suivante, si ta non-résidence est établie, tu bascules entièrement sur le régime 2042 NR (ou plus rien si tu n'as aucun revenu français). Le dossier passe alors administrativement de ton centre des impôts local au service des non-résidents — une transition qui se fait sur la base de tes déclarations, d'où l'importance de bien cocher les bonnes cases dès l'année du départ.</p>

    <h2 id="section-3">Si tu es résident fiscal français vivant au Vietnam</h2>
    <p>C'est le cas du semi-nomade, du salarié en mission courte, ou de celui dont le foyer (conjoint, enfants) est resté en France. Tu dois déclarer l'ensemble de tes revenus mondiaux en France — y compris tes revenus gagnés depuis le Vietnam :</p>
    <ul>
      <li>Revenus de travail (salaire, portage, freelance), quelle que soit leur origine</li>
      <li>Revenus immobiliers (loyers en France ET au Vietnam si applicable)</li>
      <li>Revenus de capitaux mobiliers (dividendes, intérêts — y compris ceux d'un livret vietnamien)</li>
      <li>Comptes bancaires étrangers à déclarer séparément sur le formulaire 3916 — banque vietnamienne, Wise, Revolut et toute autre institution hors de France, chacun sa ligne</li>
      <li>Le cas échéant, contrats d'assurance-vie souscrits à l'étranger, soumis à leur propre obligation déclarative</li>
    </ul>
    <p>Si tu as payé des impôts sur ces revenus au Vietnam, la convention de 1993 prévoit un crédit d'impôt pour éviter la double imposition — consulte un expert-comptable spécialisé en expatriation pour les modalités de déclaration applicables à ton type de revenu. Conserve précieusement les justificatifs d'impôt vietnamien (attestations de retenue à la source de ton employeur local, avis d'imposition vietnamiens) : c'est la pièce maîtresse du crédit d'impôt, et elle est difficile à reconstituer après coup.</p>

    <h2 id="section-4">Si tu es non-résident fiscal français</h2>
    <p>Tu ne déclares en France que tes <strong>revenus de source française</strong> — la « source » désignant l'origine géographique du revenu, pas la banque où il arrive. Les revenus typiques à déclarer :</p>
    <ul>
      <li>Loyers d'un appartement en France</li>
      <li>Dividendes de sociétés françaises</li>
      <li>Revenus d'un emploi exercé en France (détachement temporaire)</li>
      <li>Pensions de retraite versées par un organisme français (selon la convention, certaines restent imposables en France)</li>
      <li>Plus-values de cession de biens immobiliers situés en France, avec leur régime propre de prélèvement</li>
    </ul>
    <p>Tes revenus gagnés intégralement au Vietnam pour des clients internationaux ne sont pas imposables en France si tu es résident fiscal vietnamien.</p>
    <p>Deux particularités du régime des non-résidents à connaître avant de faire tes projections : d'une part, l'impôt sur les revenus de source française des non-résidents obéit à des règles propres, avec notamment un <strong>taux minimum d'imposition</strong> spécifique (sauf à démontrer que ton taux moyen mondial serait inférieur — une option qui demande de déclarer tes revenus mondiaux pour justification) ; d'autre part, des <strong>prélèvements sociaux</strong> s'appliquent aux revenus immobiliers français selon ta situation. Traduction pratique : un studio loué en France ne rapporte pas le même net à un résident de Hanoï qu'à un résident de Lyon — fais le calcul complet avant de décider de garder ou vendre.</p>

    <h3>Le cas du couple franco-vietnamien</h3>
    <p>Si ton/ta conjoint(e) est vietnamien(ne), quelques situations mixtes classiques : un couple <strong>résident fiscal français</strong> déclare ensemble, y compris les revenus vietnamiens du conjoint (avec crédit d'impôt conventionnel le cas échéant) — et le conjoint vietnamien nouvellement arrivé en France entre dans le foyer fiscal dès son installation. Un couple <strong>installé au Vietnam</strong>, à l'inverse, voit chacun suivre sa logique : toi sur tes éventuels revenus de source française via le 2042 NR, ton/ta conjoint(e) vietnamien(ne) n'ayant en principe rien à déclarer en France s'il/elle n'a aucun revenu français. Les ennuis naissent des situations hybrides non clarifiées — un conjoint resté « rattaché » à un foyer fiscal français alors qu'il vit à Hanoï, par exemple. Là encore : cohérence entre la vie réelle et les déclarations, des deux côtés.</p>

    <h2 id="section-5">Calendrier et services fiscaux</h2>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Démarche</th>
          <th>Délai</th>
          <th>Service compétent</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Déclaration de revenus résidents</td>
          <td>Généralement mai-juin de l'année suivante — consulte impots.gouv.fr pour les dates exactes</td>
          <td>Centre des finances publiques habituel</td>
        </tr>
        <tr>
          <td>Déclaration de revenus non-résidents (2042 NR)</td>
          <td>Délai plus tardif que pour les résidents — consulte le SIPNR ou impots.gouv.fr</td>
          <td>SIPNR — Noisy-le-Grand (09 72 72 39 39, messagerie sécurisée recommandée depuis l'étranger)</td>
        </tr>
        <tr>
          <td>Déclaration comptes étrangers (3916)</td>
          <td>Avec la déclaration de revenus annuelle, un formulaire par compte</td>
          <td>En ligne impots.gouv.fr</td>
        </tr>
        <tr>
          <td>Signalement départ à l'étranger</td>
          <td>Dès l'installation — ne pas attendre la déclaration suivante</td>
          <td>Centre des finances publiques + banques, CAF, CPAM</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-6">Ce qu'il faut signaler en dehors des impôts</h2>
    <p>La déclaration fiscale n'est qu'une partie des démarches — le départ à l'étranger est en réalité une mise à jour de toute ta relation avec les administrations françaises, et chaque organisme non prévenu est une source future de courriers perdus, de droits mal calculés ou d'indus à rembourser. Selon ta situation :</p>
    <ul>
      <li><strong>Banque française</strong> : signaler ton adresse vietnamienne (obligation légale de mise à jour de la connaissance client / KYC) — voir <a href="fortuneo-expat-compte-france">ce que ça change concrètement pour ta banque en ligne</a></li>
      <li><strong>CPAM</strong> : signaler ton départ pour clôturer ta couverture maladie obligatoire — ou basculer sur la CFE</li>
      <li><strong>CAF</strong> : signaler ton départ pour arrêter les allocations (APL, etc.) si applicable — continuer à percevoir des prestations sous condition de résidence après un départ non déclaré, c'est de l'indu récupérable avec pénalités</li>
      <li><strong>Caisse de retraite</strong> (Carsat, AGIRC-ARRCO) : signaler ton adresse à l'étranger pour continuer à recevoir les relevés de points</li>
      <li><strong>Mutuelle santé</strong> : résiliation ou basculement vers une couverture internationale</li>
      <li><strong>Registre des Français de l'étranger</strong> : l'inscription consulaire n'est pas fiscale mais simplifie tout le reste (papiers, élections, urgences) — profite du grand ménage administratif du départ pour la faire</li>
    </ul>
    <div class="info-box">
      <strong>À lire aussi :</strong> → <a href="protection-sociale-cfe-retraite-vietnam">CFE, protection sociale et retraite quand on travaille depuis le Vietnam</a>
    </div>
    <p>Un mot d'organisation pour finir : crée-toi un <strong>dossier « fiscalité expat » numérique</strong> unique — avis d'imposition français, justificatifs vietnamiens (contrat, fiches de paie, attestations fiscales locales), décompte des jours de présence, échanges avec les administrations. La fiscalité internationale se gagne à la documentation : celui qui peut tout produire en dix minutes traverse les contrôles et les demandes de justificatifs comme une formalité ; celui qui doit reconstituer trois ans d'historique vit un enfer. Dix minutes de classement par mois, c'est le tarif de la tranquillité.</p>

    <div class="warning-box">
      <strong>Disclaimer :</strong> Cet article partage mon expérience et des informations générales, pas un conseil fiscal ou juridique personnalisé. Pour ta situation précise, consulte un expert-comptable ou un avocat fiscaliste spécialisé en expatriation.
    </div>

    <h2 id="section-enligne">Déclarer en ligne depuis Hanoï : la partie facile</h2>
    <p>Bonne nouvelle dans cet océan de technique : la mécanique déclarative elle-même fonctionne parfaitement à distance. Ton espace particulier sur <strong>impots.gouv.fr</strong> reste accessible du Vietnam (ton numéro fiscal te suit à vie, résident ou non), la déclaration se fait intégralement en ligne, et la <strong>messagerie sécurisée</strong> de l'espace particulier est le canal idéal pour poser tes questions au fisc — réponse écrite, traçable, opposable, bien plus fiable qu'un appel international vers une plateforme téléphonique.</p>
    <p>Trois réflexes techniques d'expatrié : garde un moyen de connexion qui ne dépend pas d'un numéro de téléphone français résilié (mets à jour tes coordonnées AVANT de rendre ta SIM française, ou conserve ton numéro via une eSIM à petit prix) ; vérifie ton <strong>taux de prélèvement à la source</strong> après tout changement de situation — un départ mal paramétré peut te faire prélever sur des revenus qui ne sont plus imposables en France, remboursés seulement l'année suivante ; et télécharge chaque année tes avis d'imposition en PDF — c'est LE justificatif que réclament les banques, les consulats et, un jour, ton dossier de <a href="naturalisation-conjoint-vietnamien">naturalisation de conjoint</a> ou de retour en France.</p>

    <h2 id="section-erreurs">Les erreurs fréquentes des expatriés au Vietnam</h2>
    <ul>
      <li><strong>Oublier le formulaire 3916</strong> : chaque compte détenu à l'étranger (banque vietnamienne, Wise, Revolut…) doit être déclaré par les résidents fiscaux français. L'amende par compte non déclaré est dissuasive, et l'oubli est massivement répandu chez les expatriés « récents ».</li>
      <li><strong>Ne jamais officialiser le départ</strong> : rester déclaré comme résident français « parce que c'est plus simple » alors qu'on vit à Hanoï crée une situation incohérente qui se complique à chaque année qui passe — et se dénoue douloureusement lors d'un contrôle ou d'une vente immobilière.</li>
      <li><strong>Croire que non-résident = plus rien à faire</strong> : les loyers français, les dividendes français et certaines pensions restent déclarables en France via le 2042 NR. Le statut de non-résident change le périmètre, pas l'existence des obligations.</li>
      <li><strong>Oublier les impôts locaux</strong> : si tu gardes un bien en France, la taxe foncière continue de tomber — et un logement conservé à ta disposition peut compter comme « foyer » dans l'analyse de ta résidence fiscale. Cohérence, toujours.</li>
      <li><strong>Ignorer le côté vietnamien du miroir</strong> : devenir résident fiscal vietnamien crée des obligations déclaratives au Vietnam. Un montage qui n'est déclaré nulle part n'est pas de l'optimisation, c'est une bombe à retardement des deux côtés.</li>
    </ul>

    <?php
    $page_sources = [
      ['label' => 'impots.gouv.fr — fiscalité des particuliers et non-résidents', 'url' => 'https://www.impots.gouv.fr'],
      ['label' => 'Service-Public.fr — fiches officielles droits et démarches', 'url' => 'https://www.service-public.fr'],
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
$current_slug = 'declarer-impots-france-depuis-vietnam';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
