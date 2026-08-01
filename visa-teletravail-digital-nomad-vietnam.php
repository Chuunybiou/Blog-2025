<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Télétravailler depuis le Vietnam : quel visa en 2026 ?';
$page_description = 'Quel visa choisir pour télétravailler depuis le Vietnam ? Le Vietnam n\'a pas de visa digital nomad officiel. Ce guide explique les options réelles, les zones grises et les risques.';
$page_canonical   = SITE_URL . '/visa-teletravail-digital-nomad-vietnam';
$page_og_title    = 'Visa pour télétravailler au Vietnam : digital nomad, e-visa, DL, TT — guide 2026';
$page_og_desc     = 'Pas de visa digital nomad officiel au Vietnam. Voici les vraies options, les zones grises et ce que font réellement les expats.';
$page_og_url      = SITE_URL . '/visa-teletravail-digital-nomad-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Visa pour télétravailler depuis le Vietnam : guide honnête 2026',
  'datePublished'   => '2026-06-11',
  'dateModified'    => '2026-06-11',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/visa-teletravail-digital-nomad-vietnam',
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
  ['q' => 'Le Vietnam a-t-il un visa digital nomad ?',
   'a' => 'Non, pas en 2026. Contrairement à l\'Indonésie (Bali), au Portugal ou à la Thaïlande qui ont créé des visas spécifiques pour les nomades digitaux, le Vietnam n\'a pas de visa "digital nomad" officiel à cette date. Les nomades utilisent le plus souvent l\'e-visa (90 jours) ou le visa d\'affaires DL. Si un tel visa était créé, ce serait annoncé sur le site du Département de l\'Immigration vietnamien.'],
  ['q' => 'Peut-on travailler légalement en e-visa Vietnam ?',
   'a' => 'L\'e-visa n\'autorise pas formellement à exercer une activité professionnelle au Vietnam. Télétravailler pour des clients étrangers depuis le Vietnam en e-visa est dans une zone grise : la réglementation vietnamienne n\'explicite pas clairement ce cas. En pratique, aucun cas d\'expulsion ou d\'amende pour simple télétravail en e-visa n\'est documenté à ce jour. Mais la situation peut changer — la réglementation est susceptible d\'évoluer.'],
  ['q' => 'L\'e-visa Vietnam est-il renouvelable plusieurs fois de suite ?',
   'a' => 'Formellement, l\'e-visa est accordé pour 90 jours. Le renouvellement consécutif (sortir du Vietnam et revenir immédiatement avec un nouvel e-visa) est pratiqué par beaucoup de nomades, mais les autorités commencent à questionner certains voyageurs qui font ça de façon répétée. C\'est légal aujourd\'hui mais reste à la discrétion des agents de l\'immigration — il est prudent d\'avoir une alternative pour les séjours longs.'],
  ['q' => 'Je suis marié(e) à un(e) Vietnamien(ne) : quel est le meilleur visa ?',
   'a' => 'Le visa TT ou la carte de résidence temporaire (TRC) sont les options les plus stables et légales pour un conjoint de Vietnamien. Ils permettent de rester au Vietnam longtemps sans visa-run, et sont compatibles avec le télétravail (qui n\'est pas considéré comme "travail au Vietnam" dans ce contexte, bien que la zone grise reste). Lien vers notre guide → visa TT et TRC pour conjoint de Vietnamien.'],
  ['q' => 'Dois-je payer des impôts au Vietnam si je télétravaille depuis le pays ?',
   'a' => 'Potentiellement, oui. Au-delà de 183 jours de présence sur une année, tu peux devenir résident fiscal vietnamien, imposable en principe sur tes revenus mondiaux. La convention fiscale entre la France et le Vietnam sert alors à départager les situations de double résidence et à éviter la double imposition. En dessous de 183 jours et sans autre attache au Vietnam, tu restes généralement résident fiscal français. C\'est un sujet à traiter sérieusement dès que le séjour se prolonge — pas après un contrôle.'],
  ['q' => 'Puis-je prendre des clients vietnamiens en freelance ?',
   'a' => 'Pas sans structure. Facturer des clients situés au Vietnam, c\'est exercer une activité économique dans le pays : il faut soit un permis de travail via un employeur local, soit une entreprise vietnamienne en règle, soit l\'exemption de permis de travail des conjoints de Vietnamiens (avec ses formalités). Le télétravail « toléré » concerne uniquement les clients étrangers — mélanger les deux fait sortir de la zone grise du mauvais côté.'],
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
      <span>Visa télétravail Vietnam</span>
    </div>
    <span class="article-badge-hero">Emploi &amp; Entreprendre</span>
    <h1>Quel visa pour télétravailler depuis le Vietnam ? Le guide honnête 2026</h1>
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
      <li><a href="#section-1">La réalité : pas de visa digital nomad au Vietnam</a></li>
      <li><a href="#section-2">Les options disponibles</a></li>
      <li><a href="#section-3">E-visa : pratique mais limité</a></li>
      <li><a href="#section-4">Visa DL (affaires)</a></li>
      <li><a href="#section-5">Visa TT et TRC pour conjoint</a></li>
      <li><a href="#section-6">Honnêteté sur les zones grises</a></li>
      <li><a href="#section-voisins">Ce que font les pays voisins</a></li>
      <li><a href="#section-fiscal">Fiscalité : l'autre moitié du sujet</a></li>
      <li><a href="#section-pratiques">Les bonnes pratiques du télétravailleur</a></li>
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

    <p><strong>La question que tout nomade digital se pose avant d'aller au Vietnam : "c'est légal de travailler là-bas ?"</strong> La réponse honnête : oui, dans une large mesure — mais dans une zone grise qu'il vaut mieux connaître avant de partir. Ce guide te donne l'état de la situation en 2026, sans survendre ni dramatiser : les options de visa réelles, ce que font les pays voisins, le volet fiscal que presque tout le monde oublie, et les bonnes pratiques qui gardent ton séjour du bon côté de la ligne.</p>

    <p>Cet article fait partie du dossier <a href="travailler-a-distance-depuis-vietnam">travailler à distance depuis le Vietnam</a>. Si tu es marié(e) à un(e) Vietnamien(ne), le <a href="visa-tt-carte-residence-trc-mariage">visa TT et TRC</a> est la solution la plus stable — et c'est aussi le lien entre ce dossier travail et le <a href="faire-venir-conjointe-vietnamienne-france">silo couple mixte franco-vietnamien</a>.</p>

    <h2 id="section-1">La réalité : pas de visa "digital nomad" au Vietnam</h2>
    <p>En 2026, le Vietnam n'a pas créé de visa dédié aux nomades digitaux, contrairement à d'autres destinations populaires de la région. Aucune des pages qui te vendent un « visa digital nomad Vietnam » ne repose donc sur un statut réel. Pourquoi ça compte :</p>
    <ul>
      <li>Il n'y a pas de cadre légal clair pour "télétravailler depuis le Vietnam pour des clients étrangers"</li>
      <li>Les lois sur l'immigration et le travail distinguent surtout "travailler <em>pour</em> une entité vietnamienne" (nécessite un permis) et "séjourner au Vietnam" (nécessite un visa)</li>
      <li>Le télétravail pour des clients étrangers depuis chez soi au Vietnam n'est formellement ni autorisé ni interdit par un texte spécifique</li>
    </ul>

    <div class="info-box">
      <strong>Le résultat pratique :</strong> La grande majorité des nomades digitaux et des expatriés qui travaillent à distance depuis le Vietnam le font en zone grise — tolérée, mais non officiellement légale. Jusqu'à présent, aucune mesure systématique n'a été prise contre cette pratique. Mais personne ne peut garantir que ça ne changera pas.
    </div>
    <p>Pourquoi cette tolérance de fait ? Parce que l'intérêt du Vietnam est du côté des télétravailleurs : ils dépensent localement des revenus gagnés à l'étranger, ne prennent l'emploi de personne, et remplissent cafés, coworkings et locations longue durée de Đà Nẵng à Tây Hồ. Réprimer cette population n'aurait guère de logique économique — c'est précisément pourquoi la plupart des observateurs anticipent plutôt, à terme, la création d'un statut que le durcissement. Mais « probable » n'est pas « garanti », et bâtir sa vie sur une tolérance reste un choix qu'il faut faire en connaissance de cause.</p>

    <h2 id="section-2">Les options de visa disponibles</h2>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Visa</th>
          <th>Durée</th>
          <th>Renouvelable</th>
          <th>Travail autorisé</th>
          <th>Pour qui</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>E-visa</td>
          <td>90 jours</td>
          <td>Oui mais limité</td>
          <td>Non formellement</td>
          <td>Court séjour, nomade de passage</td>
        </tr>
        <tr>
          <td>Visa DL (affaires)</td>
          <td>1–12 mois</td>
          <td>Selon conditions</td>
          <td>Affaires, pas emploi local</td>
          <td>Séjour moyen/long avec activité business</td>
        </tr>
        <tr>
          <td>Visa TT / TRC</td>
          <td>1–3 ans</td>
          <td>Oui</td>
          <td>Zone grise (pas travail local)</td>
          <td>Conjoint d'un(e) Vietnamien(ne)</td>
        </tr>
        <tr>
          <td>Permis de travail (giấy phép lao động)</td>
          <td>2 ans max renouvelable</td>
          <td>Oui</td>
          <td>✅ Oui (emploi local autorisé)</td>
          <td>Salarié d'une entreprise vietnamienne</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-3">E-visa : la solution la plus simple</h2>
    <p>L'e-visa Vietnam est la porte d'entrée de la majorité des nomades. Ses caractéristiques :</p>
    <ul>
      <li>Obtenu en ligne sur la plateforme officielle du Département de l'Immigration du Vietnam : <strong>evisa.xuatnhapcanh.gov.vn</strong></li>
      <li>Valide 90 jours, entrées multiples</li>
      <li>Prix : <strong>25 USD</strong> (tarif en vigueur depuis 2023)</li>
      <li>Traitement en <strong>3 jours ouvrés environ</strong></li>
    </ul>
    <p>Le problème des renouvellements consécutifs : sortir du pays (Cambodge, Laos, Thaïlande) et rentrer avec un nouvel e-visa est courant. Les autorités commencent à questionner certains voyageurs qui font ça de façon répétée, sans refuser systématiquement. La politique peut évoluer — il est prudent de prévoir une solution alternative pour les séjours longs.</p>
    <p>Conseils pratiques du quotidien en mode e-visa : demande le suivant <em>avant</em> que l'actuel expire si tu prévois une sortie-retour (les délais de traitement s'allongent autour des fêtes, Tết en tête) ; vérifie que le point d'entrée déclaré correspond bien à ton vol de retour ; et n'oublie pas la <a href="declaration-pre-arrivee-vietnam-pai-2026">déclaration PAI</a> à chaque arrivée dans les grands aéroports. Pour l'installation matérielle du télétravailleur — SIM, forfaits data, fibre — tout est dans <a href="sim-internet-applications-vietnam">l'article SIM et internet au Vietnam</a>, et le comparatif des espaces de travail dans celui sur <a href="coworkings-hanoi-hcmv-2026">les coworkings de Hanoï et HCMV</a>.</p>

    <h2 id="section-4">Visa DL (affaires)</h2>
    <p>Le visa DL est théoriquement pour les affaires — rencontres avec des partenaires vietnamiens, conférences, activités commerciales. Il est utilisé par certains nomades pour des séjours plus longs :</p>
    <ul>
      <li>Nécessite une lettre d'invitation d'une société vietnamienne (les conditions peuvent varier — renseigne-toi auprès de l'agence visa ou de la société qui t'invite)</li>
      <li>Peut être accordé pour 3 ou 12 mois</li>
      <li>N'autorise pas formellement le télétravail pour des clients étrangers — même zone grise que l'e-visa</li>
    </ul>
    <p>Un mot de prudence sur ce marché : la « lettre d'invitation » se monnaye auprès d'agences plus ou moins sérieuses, et la frontière entre le service administratif légitime et le montage de complaisance est parfois mince. Si la société qui t'« invite » n'a aucune activité réelle avec toi, tu construis ton séjour sur un document dont tu ne contrôles ni la validité ni les conséquences en cas de contrôle. Passe par des agences établies, garde les justificatifs, et considère le DL pour ce qu'il est : un outil de séjour moyen terme, pas un statut de travail.</p>

    <h2 id="section-5">La solution la plus stable : visa TT / TRC (conjoint de Vietnamien)</h2>
    <p>Si tu es marié(e) à un(e) Vietnamien(ne), le <strong>visa TT (thị thực TT) ou la carte de résidence temporaire (TRC)</strong> sont de loin les options les plus sereines pour vivre et télétravailler au Vietnam :</p>
    <ul>
      <li>Séjour légal de 1 à 3 ans renouvelable</li>
      <li>Pas de visa-run, pas d'incertitude</li>
      <li>Base légale claire pour la résidence</li>
      <li>Le télétravail pour des clients étrangers reste une zone grise, mais le statut de résident reconnu limite les risques pratiques</li>
    </ul>
    <p>Bonus considérable pour les conjoints : le Code du travail vietnamien exempte de permis de travail l'étranger marié à un(e) Vietnamien(ne) et résidant au Vietnam. Autrement dit, si un jour tu veux basculer du télétravail vers une activité locale (contrat vietnamien, clients sur place), la porte est administrativement bien plus simple à ouvrir pour toi que pour n'importe quel autre étranger — une confirmation d'exemption remplace tout le parcours du permis.</p>
    <div class="info-box">
      <strong>Guide dédié :</strong> → <a href="visa-tt-carte-residence-trc-mariage">Visa TT et TRC pour conjoint de Vietnamien : comment les obtenir</a>
    </div>

    <h2 id="section-6">Honnêteté sur les zones grises</h2>
    <p>Ce blog s'est engagé à ne jamais enjoliver les sujets administratifs. Alors je préfère te dire clairement ce que je sais avec certitude et ce que je ne sais pas :</p>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Affirmation</th>
          <th>Statut</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Télétravailler en e-visa est légal au Vietnam</td>
          <td>❌ Pas explicitement légal</td>
        </tr>
        <tr>
          <td>Des nomades se font régulièrement expulser pour télétravail</td>
          <td>❌ Aucun cas documenté en 2025–2026</td>
        </tr>
        <tr>
          <td>La situation peut changer</td>
          <td>✅ Oui — le Vietnam peut décider demain de créer un visa nomade OU de durcir les règles</td>
        </tr>
        <tr>
          <td>Le permis de travail résout tous les problèmes</td>
          <td>⚠️ Seulement si tu travailles pour une entité vietnamienne</td>
        </tr>
        <tr>
          <td>Le visa TT/TRC est la solution la plus stable</td>
          <td>✅ Pour les conjoints de Vietnamiens, oui</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="warning-box">
      <strong>Disclaimer :</strong> Cet article partage mon expérience et des informations générales, pas un conseil juridique ou migratoire personnalisé. La réglementation visa est sujette à changement. Pour une situation précise, consulte un avocat spécialisé en droit de l'immigration vietnamien.
    </div>

    <h2 id="section-voisins">Ce que font les pays voisins (et pourquoi ça éclaire le cas vietnamien)</h2>
    <p>Pour comprendre où en est le Vietnam, un coup d'œil à la région aide. La Thaïlande a lancé son visa <strong>DTV</strong> (Destination Thailand Visa), pensé notamment pour les travailleurs à distance ; l'Indonésie a créé des visas longue durée ciblant les nomades à Bali ; la Malaisie a son programme <strong>DE Rantau</strong> dédié aux professionnels du numérique. Ces pays ont fait un choix explicite : légaliser et encadrer une population qui, de toute façon, était déjà là.</p>
    <p>Le Vietnam observe, mais n'a pas franchi le pas. Sa stratégie visa récente a plutôt consisté à élargir les outils généralistes — e-visa ouvert à toutes les nationalités, allongement à 90 jours, exemptions élargies — qu'à créer des statuts spécialisés. Résultat paradoxal : le pays est l'une des destinations préférées des nomades en Asie du Sud-Est (coût de vie, fibre, cafés, sécurité) tout en étant l'un des rares à ne leur offrir aucun statut dédié. C'est aussi pour ça qu'aucune « astuce » miracle trouvée sur un forum ne remplacera la lecture lucide des options du tableau plus haut : le cadre n'existe pas encore, point.</p>

    <h2 id="section-fiscal">Fiscalité : l'autre moitié du sujet (souvent ignorée)</h2>
    <p>Le visa règle le droit de séjourner. Il ne dit rien de <strong>où tu dois payer tes impôts</strong> — et c'est le deuxième angle mort des nomades au Vietnam. Les grandes lignes, à connaître avant de partir :</p>
    <ul>
      <li><strong>La règle des 183 jours</strong> : au-delà de 183 jours de présence au Vietnam sur une année, tu peux être considéré comme résident fiscal vietnamien — avec, en théorie, une imposition sur tes revenus mondiaux, y compris ceux de tes clients français.</li>
      <li><strong>La convention fiscale France-Vietnam</strong> : elle existe, et elle sert précisément à départager les cas de double résidence et à éviter la double imposition. C'est elle qui détermine, critère par critère (foyer permanent, centre des intérêts vitaux…), de quel côté tu relèves.</li>
      <li><strong>Le statut français ne disparaît pas tout seul</strong> : une micro-entreprise française, par exemple, suppose des obligations qui se compliquent quand son titulaire ne réside plus en France. « Personne ne m'a rien dit » n'est pas un régime fiscal.</li>
    </ul>
    <p>Le sujet mérite un article à lui seul — il en a deux : <a href="residence-fiscale-france-vietnam-183-jours">la résidence fiscale France-Vietnam</a> et <a href="declarer-impots-france-depuis-vietnam">déclarer ses impôts français depuis le Vietnam</a>. Et si tu cherches une structure simple pour facturer tes clients sans gérer de société, regarde <a href="portage-salarial-depuis-vietnam">le portage salarial depuis le Vietnam</a>.</p>

    <h2 id="section-pratiques">Les bonnes pratiques du télétravailleur au Vietnam</h2>
    <p>En attendant un éventuel cadre officiel, voici la ligne de conduite qui ressort de l'expérience collective des expatriés installés :</p>
    <ul>
      <li><strong>Garde tes clients et tes revenus à l'étranger.</strong> La zone grise concerne le télétravail pour des clients hors Vietnam. Facturer des clients <em>vietnamiens</em> sans structure locale ni permis, c'est une autre catégorie : du travail non déclaré au sens plein.</li>
      <li><strong>Sois irréprochable sur tout le reste</strong> : visa valide, enregistrement de résidence à jour, pas d'overstay. La tolérance de fait dont bénéficient les télétravailleurs repose sur leur discrétion administrative.</li>
      <li><strong>Ne te présente pas comme « travaillant au Vietnam »</strong> dans tes démarches locales — tu séjournes au Vietnam et ton activité est à l'étranger. C'est exactement la réalité juridique, autant la formuler correctement.</li>
      <li><strong>Couvre ta santé sérieusement</strong> : aucun visa de cette page n'emporte de couverture maladie. Assurance voyage étendue au début, vraie solution de long terme ensuite — le <a href="assurance-sante-vietnam-expat">guide santé expatrié</a> compare les options.</li>
      <li><strong>Si ta situation le permet, sors de la zone grise par le haut</strong> : mariage → TT/TRC, contrat local → permis de travail, vraie activité récurrente → structure adaptée. La zone grise est un état transitoire acceptable, pas un plan de carrière.</li>
    </ul>

    <?php
    $page_sources = [
      ['label' => 'Portail e-visa officiel du Vietnam (Département de l\'immigration)', 'url' => 'https://evisa.xuatnhapcanh.gov.vn'],
      ['label' => 'impots.gouv.fr — fiscalité des particuliers et non-résidents', 'url' => 'https://www.impots.gouv.fr'],
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

    <div class="tip-box" style="margin-bottom:2rem;">
      <strong>🏥 Assurance santé au Vietnam</strong> La Sécurité sociale française ne couvre pas les soins au Vietnam. En tant que digital nomad ou télétravailler en mobilité, couvres-toi dès l'arrivée avec une assurance voyage étendue. Je recommande <strong>ACS</strong> (partenaire du blog) :
      <ul style="margin:0.75rem 0 0;padding-left:1.2rem;">
        <li><a href="https://www.acs-ami.com/fr/assurance-voyage/globe-traveller/?part=blogcapvietnam&utm_source=blog-capvietnam&utm_medium=aff-link" target="_blank" rel="noopener sponsored"><strong>Globe Traveller</strong></a> — jusqu'à 66 ans, couverture médicale jusqu'à 500 000 €, jusqu'à 12 mois, à partir de 25 €</li>
        <li><a href="https://www.acs-ami.com/fr/assurance-voyage/globe-partner/?part=blogcapvietnam&utm_source=blog-capvietnam&utm_medium=aff-link" target="_blank" rel="noopener sponsored"><strong>Globe Partner</strong></a> — moins de 40 ans, à partir de 16,50 €, idéal budget nomade</li>
      </ul>
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
Français expatrié à Hanoï. Je télétravaille depuis le Vietnam et partage ce que j'ai appris sur les visas et la vie pratique.
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
$current_slug = 'visa-teletravail-digital-nomad-vietnam';
$current_cat  = 'emploi';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
