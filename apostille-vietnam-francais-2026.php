<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Apostille au Vietnam dès le 11 septembre 2026 : ce qui change pour les Français';
$page_description = 'Le Vietnam rejoint la Convention de La Haye sur l\'apostille le 11 septembre 2026. Ce que ça change pour les couples franco-vietnamiens, expats et voyageurs : fini la double légalisation — procédure, coûts, délais.';
$page_canonical   = SITE_URL . '/apostille-vietnam-francais-2026';
$page_og_title    = 'Apostille au Vietnam dès le 11 septembre 2026 : guide complet pour les Français';
$page_og_desc     = 'Fini la double légalisation consulaire. À partir du 11 septembre 2026, un seul timbre apostille suffit pour la plupart des documents franco-vietnamiens.';
$page_og_url      = SITE_URL . '/apostille-vietnam-francais-2026';
$page_og_image    = SITE_URL . '/assets/img/documents-ccam-mariage-etranger.jpg';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Apostille au Vietnam dès le 11 septembre 2026 : ce qui change pour les Français',
  'datePublished'   => '2026-07-06',
  'dateModified'    => '2026-07-06',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/apostille-vietnam-francais-2026',
  'image'           => SITE_URL . '/assets/img/documents-ccam-mariage-etranger.jpg',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie pratique au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'jade';
$article_hero_bg  = '#0e2a20';
$article_glow     = 'rgba(27,107,82,0.18)';
$article_badge    = 'rgba(27,107,82,0.22)';
$article_badge_c  = '#6bc98a';

$article_category     = 'Vie pratique';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vie-pratique';

$page_faq = [
  ['q' => 'Qu\'est-ce qu\'une apostille exactement ?',
   'a' => 'C\'est un timbre officiel apposé sur un document public (naissance, mariage, diplôme, extrait de casier judiciaire…) par une autorité désignée du pays émetteur. Il certifie l\'authenticité du document pour tous les pays membres de la Convention de La Haye — sans avoir besoin en plus d\'une légalisation consulaire.'],
  ['q' => 'L\'apostille concerne-t-elle les actes de naissance et de mariage franco-vietnamiens ?',
   'a' => 'Partiellement. Grâce à la Convention bilatérale franco-vietnamienne de 1999, les actes d\'état civil (naissance, mariage, décès) échangés entre la France et le Vietnam sont déjà dispensés de légalisation. L\'apostille ne change rien pour ces documents dans ce cadre précis. En revanche, pour tous les autres types de documents (diplômes, casier judiciaire, documents notariaux, documents d\'entreprise…), l\'apostille simplifie considérablement la procédure.'],
  ['q' => 'Quand est-ce que la Convention entre vraiment en vigueur au Vietnam ?',
   'a' => 'Le 11 septembre 2026. Le Vietnam a déposé son instrument d\'accession le 31 décembre 2025 auprès du Ministère des Affaires Étrangères des Pays-Bas (dépositaire de la Convention). La période de 9 mois correspond au délai standard permettant aux États membres existants de formuler d\'éventuelles objections.'],
  ['q' => 'Si j\'ai une procédure en cours, dois-je attendre le 11 septembre ?',
   'a' => 'Non. Continue avec la légalisation consulaire actuelle pour toute procédure en cours ou dont le délai est avant le 11 septembre. Seuls les documents apostillés APRÈS le 11 septembre 2026 seront acceptés avec un simple apostille. Ne présume pas que les autorités accepteront l\'apostille avant cette date.'],
  ['q' => 'Où obtenir l\'apostille côté français pour mes documents ?',
   'a' => 'Depuis septembre 2025, toutes les apostilles françaises sont délivrées en ligne via la plateforme apostille.notaires.fr, gérée par les Chambres des notaires. Coût : 24 € par document. Délai : 3 jours ouvrés en moyenne.'],
  ['q' => 'Côté vietnamien, où s\'adresser pour apostiller un document ?',
   'a' => 'Le Ministère des Affaires Étrangères (Bộ Ngoại Giao) est l\'autorité compétente désignée, via le Département Consulaire à Hanoï et le Département des Affaires Étrangères à Hô Chi Minh-Ville. Le portail de dépôt en ligne (cong-dich-vu-cong.vn) devrait être opérationnel d\'ici septembre 2026.'],
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
      <span>Apostille Vietnam 2026</span>
    </div>
    <span class="article-badge-hero">Vie pratique</span>
    <h1>Apostille au Vietnam dès le 11 septembre 2026 : ce qui change concrètement pour les Français</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juillet 2026</span>
      <span>⏱ 8 min</span>
    </div>
    <p style="color:rgba(250,248,244,0.78);font-size:1.05rem;line-height:1.7;margin-top:1.25rem;">Depuis le 31 décembre 2025, le Vietnam est officiellement membre de la Convention de La Haye sur l'apostille. À partir du <strong style="color:var(--cream)">11 septembre 2026</strong>, la plupart des documents officiels échangés entre la France et le Vietnam n'auront plus besoin de la fastidieuse double légalisation consulaire. Mais avant de crier victoire — il y a des nuances importantes à connaître.</p>
  </div>
</header>

<div class="article-layout">
  <aside class="toc-sidebar">
    <div class="toc-title">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">C'est quoi l'apostille ?</a></li>
      <li><a href="#section-2">L'ancienne procédure de légalisation</a></li>
      <li><a href="#section-3">Ce qui change le 11 septembre 2026</a></li>
      <li><a href="#section-4">Ce que ça ne change PAS</a></li>
      <li><a href="#section-5">Quels documents sont concernés ?</a></li>
      <li><a href="#section-6">Obtenir l'apostille côté France</a></li>
      <li><a href="#section-7">Obtenir l'apostille côté Vietnam</a></li>
      <li><a href="#section-8">Si tu as une procédure en cours</a></li>
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

    <h2 id="section-1">C'est quoi l'apostille — et pourquoi c'est important ?</h2>
    <p>L'apostille est un <strong>certificat standardisé</strong>, défini par la Convention de La Haye du 5 octobre 1961, qui authentifie un document public auprès de tous les États membres. Concrètement, c'est un tampon ou une page annexée à ton document officiel — acte de naissance, diplôme, extrait de casier judiciaire, acte notarié… — qui dit : <em>« ce document est authentique, il a bien été émis par l'autorité qu'il mentionne. »</em></p>

    <p>Le principe clé : <strong>un seul timbre suffit.</strong> Si la France apostille ton diplôme, le Vietnam l'accepte sans vérification supplémentaire — et inversement dès le 11 septembre 2026. Avant la Convention, il fallait passer par plusieurs autorités dans plusieurs pays pour arriver au même résultat.</p>

    <div class="info-box">
      <strong>📌 Le Vietnam rejoint 129 pays :</strong> La Convention d'Apostille compte aujourd'hui 130 États membres (après l'adhésion vietnamienne). Y figurent la France, les États-Unis, les pays de l'UE, le Royaume-Uni, le Japon, la Corée du Sud, l'Australie, Singapour, la Chine… Utiliser un document d'un de ces pays au Vietnam deviendra beaucoup plus simple.
    </div>

    <h2 id="section-2">L'ancienne procédure de légalisation consulaire — ce que tu subissais jusqu'ici</h2>

    <p>Pour qu'un document vietnamien soit reconnu en France (ou inversement), il fallait traverser un véritable parcours du combattant :</p>

    <h3>Pour un document vietnamien à utiliser en France :</h3>
    <ol>
      <li>Faire authentifier le document par l'autorité locale compétente (Sở Ngoại vụ — Département des Affaires Étrangères de ta province)</li>
      <li>Faire légaliser ce document par l'Ambassade de France à Hanoï ou le Consulat Général à Hô Chi Minh-Ville</li>
      <li>Faire traduire le document par un traducteur assermenté</li>
    </ol>

    <h3>Pour un document français à utiliser au Vietnam :</h3>
    <ol>
      <li>Obtenir l'apostille française (ou faire légaliser via le Ministère des Affaires Étrangères français)</li>
      <li>Faire légaliser ensuite par l'Ambassade du Vietnam en France</li>
      <li>Faire traduire en vietnamien par un traducteur assermenté</li>
    </ol>

    <p>Résultat : des délais pouvant aller de <strong>plusieurs semaines à plusieurs mois</strong>, des allers-retours entre services consulaires, des risques d'erreur ou de perte, et des frais cumulés — notaire, légalisation, traducteur, courier recommandé international.</p>

    <h2 id="section-3">Ce qui change concrètement à partir du 11 septembre 2026</h2>

    <table class="comparison-table">
      <thead>
        <tr>
          <th></th>
          <th>Avant le 11/09/2026</th>
          <th>À partir du 11/09/2026</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Document vietnamien → France</strong></td>
          <td>Légalisation au Sở Ngoại vụ + sur-légalisation Ambassade de France</td>
          <td>Apostille délivrée par le MAE vietnamien (Hanoï ou HCMC) — c'est tout</td>
        </tr>
        <tr>
          <td><strong>Document français → Vietnam</strong></td>
          <td>Apostille française + légalisation Ambassade du Vietnam à Paris</td>
          <td>Apostille française uniquement — pas besoin de l'ambassade vietnamienne</td>
        </tr>
        <tr>
          <td><strong>Délai estimé</strong></td>
          <td>Plusieurs semaines à quelques mois</td>
          <td>Quelques jours à 2 semaines</td>
        </tr>
        <tr>
          <td><strong>Coût</strong></td>
          <td>Légalisation + frais consulaires + courrier international</td>
          <td>Apostille seule (côté français : 24 € — côté vietnamien : tarif en cours de définition)</td>
        </tr>
        <tr>
          <td><strong>Traduction assermentée</strong></td>
          <td>Toujours requise</td>
          <td>Toujours requise — l'apostille n'exempte pas de traduction</td>
        </tr>
      </tbody>
    </table>

    <div class="warning-box">
      <strong>⚠️ La traduction reste obligatoire :</strong> L'apostille authentifie le document, elle ne le traduit pas. Si tu soumets un acte vietnamien à une administration française, la traduction par un traducteur assermenté reste indispensable — et inversement.
    </div>

    <h2 id="section-4">Ce que ça ne change PAS — l'exception importante pour les couples franco-vietnamiens</h2>

    <p>Voilà une nuance que beaucoup vont rater : <strong>les actes d'état civil entre la France et le Vietnam sont déjà dispensés de légalisation</strong> depuis la <strong>Convention bilatérale franco-vietnamienne de 1999</strong>.</p>

    <p>Concrètement, cela signifie que les documents suivants <em>n'ont jamais eu besoin de légalisation</em> dans le cadre franco-vietnamien :</p>
    <ul>
      <li>Acte de naissance</li>
      <li>Acte de mariage</li>
      <li>Acte de décès</li>
    </ul>

    <p>Pour ces actes précis, l'apostille ne change donc pas grand-chose dans les démarches franco-vietnamiennes — la dispense de légalisation existait déjà. <strong>L'apostille change surtout la donne pour tout le reste.</strong></p>

    <div class="info-box">
      <strong>💡 Pour aller plus loin :</strong> La Convention de La Haye a une portée plus large — elle est valable pour 130 pays, pas seulement entre la France et le Vietnam. Si ton document vietnamien est apostillé, il sera reconnu en Espagne, aux États-Unis, au Japon ou en Australie sans procédure supplémentaire. C'est là qu'elle apporte une vraie valeur ajoutée même pour les actes d'état civil.
    </div>

    <h2 id="section-5">Quels documents sont réellement concernés ?</h2>

    <p>La Convention s'applique aux <strong>documents publics</strong> — c'est-à-dire ceux émis par une autorité officielle dans le cadre de ses fonctions. Voici ce qui est couvert et ce qui ne l'est pas :</p>

    <table class="comparison-table">
      <thead>
        <tr>
          <th>Type de document</th>
          <th>Apostille applicable ?</th>
          <th>Qui est concerné</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Diplômes universitaires (universités publiques)</td>
          <td>✅ Oui</td>
          <td>Recrutement, permis de travail, reconnaissance de diplôme</td>
        </tr>
        <tr>
          <td>Extrait de casier judiciaire (B3 / lý lịch tư pháp)</td>
          <td>✅ Oui</td>
          <td>TRC, visa long séjour, permis de travail</td>
        </tr>
        <tr>
          <td>Documents notariaux (procurations, actes de vente)</td>
          <td>✅ Oui</td>
          <td>Immobilier, succession, gestion à distance</td>
        </tr>
        <tr>
          <td>Documents judiciaires (jugements de divorce, tutelle)</td>
          <td>✅ Oui</td>
          <td>Divorce international, garde d'enfants</td>
        </tr>
        <tr>
          <td>Actes d'état civil (naissance, mariage, décès)</td>
          <td>✅ Oui (mais déjà dispensés entre FR/VN via convention 1999)</td>
          <td>Utile pour usage dans d'autres pays tiers</td>
        </tr>
        <tr>
          <td>Documents d'entreprise privée (bulletins de salaire, attestations employeur)</td>
          <td>❌ Non</td>
          <td>—</td>
        </tr>
        <tr>
          <td>Diplômes d'écoles privées sans reconnaissance officielle</td>
          <td>❌ Non</td>
          <td>—</td>
        </tr>
        <tr>
          <td>Documents diplomatiques ou consulaires</td>
          <td>❌ Non (exemptés par la Convention elle-même)</td>
          <td>—</td>
        </tr>
      </tbody>
    </table>

    <h2 id="section-6">Obtenir l'apostille côté France : procédure et tarif</h2>

    <p>Depuis <strong>septembre 2025</strong>, la procédure française a été centralisée et entièrement dématérialisée. Les cours d'appel ne traitent plus ces demandes.</p>

    <div class="info-box">
      <strong>📋 Comment apostiller un document français :</strong><br><br>
      1. Rends-toi sur <strong>apostille.notaires.fr</strong> (plateforme officielle des Chambres des notaires)<br>
      2. Crée un compte et téléverse ton document<br>
      3. Règle les frais : <strong>24 € par document</strong><br>
      4. Envoie l'original par courrier recommandé à l'adresse indiquée<br>
      5. Reçois le document apostillé sous <strong>3 jours ouvrés</strong> environ<br><br>
      Le tampon apostille est apposé directement sur le document original ou sur une page annexée.
    </div>

    <p>Pour les documents français courants que les expatriés doivent produire au Vietnam : casier judiciaire (demande via service-public.fr — délai 24h), acte de naissance (mairie ou Service Central d'État Civil à Nantes), diplômes (université ou rectorat d'académie).</p>

    <h2 id="section-7">Obtenir l'apostille côté Vietnam : où s'adresser</h2>

    <p>Le Vietnam a désigné <strong>deux autorités compétentes</strong> pour émettre les apostilles :</p>

    <table class="comparison-table">
      <thead>
        <tr>
          <th>Ville</th>
          <th>Autorité compétente</th>
          <th>Contact</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Hanoï</strong></td>
          <td>Ministère des Affaires Étrangères — Département Consulaire (Cục Lãnh sự)</td>
          <td>40 Trần Phú, Ba Đình, Hà Nội</td>
        </tr>
        <tr>
          <td><strong>Hô Chi Minh-Ville</strong></td>
          <td>Département des Affaires Étrangères de HCMC (Sở Ngoại vụ TP.HCM)</td>
          <td>6 Alexandre de Rhodes, Quận 1, TP.HCM</td>
        </tr>
      </tbody>
    </table>

    <p>Le gouvernement vietnamien a prévu le déploiement d'un <strong>service en ligne</strong> via le portail national de services publics (dichvucong.gov.vn) d'ici l'entrée en vigueur. Les délais et tarifs officiels côté vietnamien n'ont pas encore été publiés au moment de la rédaction de cet article — ils seront précisés dans le décret d'application attendu avant juin 2026.</p>

    <div class="warning-box">
      <strong>⚠️ En dehors de Hanoï et HCMC :</strong> Si tu résides dans une autre province (Da Nang, Hué, Can Tho…), il n'est pas encore clair si les Sở Ngoại vụ provinciaux seront habilités à émettre des apostilles, ou si tu devras te rendre à Hanoï ou HCMC. À confirmer auprès du MAE vietnamien dès septembre 2026.
    </div>

    <h2 id="section-8">Tu as une procédure en cours ? Voici quoi faire</h2>

    <p>La règle est simple : <strong>n'anticipe pas.</strong> Jusqu'au 11 septembre 2026 à minuit, la procédure de légalisation consulaire reste la seule voie valide. Les administrations vietnamiennes et françaises ne sont pas tenues d'accepter une apostille avant cette date.</p>

    <table class="comparison-table">
      <thead>
        <tr>
          <th>Ta situation</th>
          <th>Ce que tu dois faire</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Procédure dont le délai est <strong>avant le 11/09/2026</strong></td>
          <td>Continue avec la légalisation consulaire actuelle. Ne change rien.</td>
        </tr>
        <tr>
          <td>Procédure dont le dépôt est <strong>après le 11/09/2026</strong></td>
          <td>Tu pourras utiliser l'apostille. Attends la confirmation des procédures exactes de chaque administration avant de déposer.</td>
        </tr>
        <tr>
          <td>Documents <strong>déjà légalisés</strong> que tu veux soumettre après le 11/09</td>
          <td>Ils restent valides — la légalisation consulaire n'est pas invalidée, elle devient simplement facultative.</td>
        </tr>
        <tr>
          <td>Tu dois apostiller un document <strong>français maintenant</strong></td>
          <td>Tu peux le faire dès maintenant via apostille.notaires.fr. Côté vietnamien, la procédure d'acceptation de l'apostille seule sera active uniquement à partir du 11/09.</td>
        </tr>
      </tbody>
    </table>

    <div class="info-box">
      <strong>💬 Mon conseil :</strong> Avant de déposer tout dossier administratif après septembre 2026, vérifier directement auprès de l'autorité réceptrice (consulat, préfecture, ambassade, autorité vietnamienne) qu'elle accepte désormais l'apostille seule. Les pratiques administratives mettent souvent quelques mois à s'aligner sur les nouveaux textes.
    </div>

    <h2>L'essentiel à retenir</h2>
    <ul>
      <li>Le Vietnam rejoint la Convention d'Apostille le <strong>11 septembre 2026</strong></li>
      <li>À partir de cette date, un seul timbre apostille remplace la double légalisation consulaire pour la majorité des documents publics</li>
      <li>Les actes d'état civil franco-vietnamiens sont <strong>déjà dispensés de légalisation</strong> depuis 1999 — la Convention change surtout la donne pour les diplômes, casier judiciaire, actes notariaux, documents judiciaires</li>
      <li>Côté France : apostille via <strong>apostille.notaires.fr</strong> — 24 €, 3 jours</li>
      <li>Côté Vietnam : MAE à Hanoï (Cục Lãnh sự) ou Sở Ngoại vụ à HCMC — tarif à confirmer</li>
      <li>La traduction assermentée reste toujours obligatoire</li>
      <li>Ne devance pas la date du 11/09/2026 pour tes procédures en cours</li>
    </ul>

    <hr style="margin:2.5rem 0;opacity:0.15">

    <p><strong>Articles liés :</strong></p>
    <ul>
      <li><a href="certificat-capacite-mariage-vietnam">CCAM — Certificat de Capacité à Mariage : comment l'obtenir au consulat de France</a></li>
      <li><a href="transcription-mariage-service-central-nantes">Transcription du mariage vietnamien au Service Central d'État Civil de Nantes</a></li>
      <li><a href="visa-long-sejour-conjoint-vietnamien-france">Visa long séjour pour conjoint vietnamien en France : dossier et procédure</a></li>
      <li><a href="carte-residence-temporaire-vietnam">Carte de résidence temporaire au Vietnam (thẻ tạm trú)</a></li>
    </ul>

    <?php if (!empty($page_faq)): ?>
    <h2 id="section-faq">Questions fréquentes</h2>
    <div class="faq-list">
      <?php foreach ($page_faq as $faq): ?>
      <details class="faq-item">
        <summary><?= htmlspecialchars($faq['q']) ?></summary>
        <p><?= $faq['a'] ?></p>
      </details>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

  </main>
</div>

<?php include 'footer.php'; ?>
