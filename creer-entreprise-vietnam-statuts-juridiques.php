<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Créer une entreprise au Vietnam en 2026 : statuts juridiques pour les Français';
$page_description = 'SARL à capital étranger, bureau de représentation, joint-venture : les statuts juridiques pour ouvrir une entreprise au Vietnam en 2026. Procédure, délais et coûts pour les Français.';
$page_canonical   = SITE_URL . '/creer-entreprise-vietnam-statuts-juridiques';
$page_og_title    = 'Créer une entreprise au Vietnam en 2026 : les statuts juridiques';
$page_og_desc     = 'LLC 100% étrangère, bureau de représentation, joint-venture : comment créer une société au Vietnam ? Étapes, délais et conseils pour les entrepreneurs français.';
$page_og_url      = SITE_URL . '/creer-entreprise-vietnam-statuts-juridiques';
$page_og_image    = 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Créer une entreprise au Vietnam en 2026 : statuts juridiques pour les Français',
  'datePublished'   => '2026-10-12',
  'dateModified'    => '2026-10-12',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/creer-entreprise-vietnam-statuts-juridiques',
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
  ['q' => 'Y a-t-il un capital minimum pour créer une société au Vietnam ?',
   'a' => 'La loi sur les entreprises vietnamienne (Luật Doanh Nghiệp 2020) ne fixe pas de capital minimum général pour la plupart des secteurs d\'activité. Le capital déclaré est librement choisi par les fondateurs, mais il doit être proportionnel à l\'activité envisagée et cohérent avec le business plan. Pour certains secteurs réglementés (banque, assurance, télécommunications, immobilier), des minimums légaux spécifiques existent. Il est recommandé de consulter un cabinet juridique local pour ton secteur d\'activité.'],
  ['q' => 'Faut-il obligatoirement un associé vietnamien pour créer une société au Vietnam ?',
   'a' => 'Non, pour la majorité des secteurs d\'activité. Un ressortissant français peut créer une SARL à 100% de capital étranger (LLC 100% foreign-owned) sans associé vietnamien. Cependant, certains secteurs dits "conditionnés" ou "restreints" imposent un plafond de participation étrangère ou exigent un partenaire local : média, télécommunications, transport, certains services éducatifs. La liste des secteurs conditionnés figure dans les engagements du Vietnam à l\'OMC et dans la loi sur l\'investissement (Luật Đầu Tư 2020).'],
  ['q' => 'Combien de temps faut-il pour créer une société au Vietnam ?',
   'a' => 'Pour une SARL à 100% capital étranger dans un secteur non conditionné, le processus complet (IRC + ERC + numéro fiscal + ouverture compte bancaire) prend généralement entre 3 et 6 semaines si les documents sont complets et traduits. Le délai légal de délivrance de l\'IRC est de 15 jours ouvrés selon la Loi sur l\'investissement, et de l\'ERC de 3 jours ouvrés. En pratique, des allers-retours de documents allongent souvent le délai. Passer par un cabinet de services juridiques locaux accélère significativement le processus.'],
  ['q' => 'Un bureau de représentation peut-il encaisser des revenus au Vietnam ?',
   'a' => 'Non. Le bureau de représentation (văn phòng đại diện) n\'est pas autorisé à exercer des activités commerciales, signer des contrats au nom de l\'entreprise ou encaisser des revenus au Vietnam. Son rôle est limité à la représentation de la société-mère, à la veille de marché, aux liaisons et contacts commerciaux. Toute activité génératrice de revenus doit passer par une entité distincte (SARL ou succursale). Source : Luật Thương Mại 2005, article 31.'],
  ['q' => 'Peut-on rapatrier les bénéfices de sa société vietnamienne vers la France ?',
   'a' => 'Oui, c\'est un droit de l\'investisseur étranger — à condition de respecter le circuit : bénéfices constatés par des comptes en règle, impôt sur les sociétés acquitté, distribution décidée formellement, et transfert via le compte de capital d\'investissement ouvert à la création. C\'est exactement pour cela que la discipline comptable et la traçabilité des flux dès le premier jour ne sont pas de la bureaucratie gratuite : elles sont la clé qui ouvre, des années plus tard, la porte de sortie de ton argent. Côté français, ces revenus se déclarent selon ta résidence fiscale et la convention de 1993.'],
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
      <span>Créer une entreprise au Vietnam</span>
    </div>
    <span class="article-badge-hero">Emploi &amp; Entreprendre</span>
    <h1>Créer une entreprise au Vietnam en 2026 : les statuts juridiques pour les Français</h1>
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
      <li><a href="#section-1">Vue d'ensemble des structures possibles</a></li>
      <li><a href="#section-2">La SARL à 100% capital étranger</a></li>
      <li><a href="#section-3">Le bureau de représentation</a></li>
      <li><a href="#section-4">La joint-venture</a></li>
      <li><a href="#section-5">La procédure de création</a></li>
      <li><a href="#section-6">Coûts et intervenants</a></li>
      <li><a href="#section-7">La vie de l'entreprise après création</a></li>
      <li><a href="#section-8">Le cas du couple mixte</a></li>
      <li><a href="#section-erreurs">Les erreurs fréquentes</a></li>
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

    <p class="article-intro">Le Vietnam est ouvert aux investissements étrangers depuis les réformes du Đổi Mới et les différents accords de libre-échange (EVFTA signé en 2020 entre l'UE et le Vietnam). Un ressortissant français peut créer sa propre société au Vietnam dans la majorité des secteurs d'activité. Mais la procédure, les statuts disponibles et les contraintes varient selon ton projet — de la SARL à capital 100 % étranger au modeste hộ kinh doanh familial des couples mixtes. Tour d'horizon sans jargon, avec les obligations de la vie courante d'une société et les erreurs qui coûtent cher.</p>

    <div class="article-alert">
      <strong>Avertissement :</strong> Cet article est informatif. La création d'une société au Vietnam implique des aspects juridiques et fiscaux complexes. <strong>Consulte impérativement un cabinet juridique local spécialisé</strong> (avocat d'affaires ou société de services aux entreprises) avant de lancer les démarches. Les informations ci-dessous se basent sur la Loi sur l'investissement (Luật Đầu Tư 2020) et la Loi sur les entreprises (Luật Doanh Nghiệp 2020), mais peuvent évoluer.
    </div>

    <h2 id="section-1">1. Vue d'ensemble des structures disponibles</h2>
    <p>Avant le tableau, la question qui doit précéder tout choix de structure : <strong>où seront tes clients ?</strong> Des clients étrangers uniquement → interroge-toi d'abord sur la nécessité même d'une structure vietnamienne (le télétravail et le portage couvrent souvent ce cas). Des clients vietnamiens → la structure locale devient incontournable, et le tableau ci-dessous te concerne directement :</p>

    <div class="table-wrapper">
    <table>
      <thead><tr><th>Structure</th><th>Capital 100% étranger possible ?</th><th>Génère des revenus ?</th><th>Cas d'usage typique</th></tr></thead>
      <tbody>
        <tr><td>SARL à capital étranger (LLC)</td><td>Oui (secteurs non restreints)</td><td>Oui</td><td>Activité commerciale principale</td></tr>
        <tr><td>Joint-venture (JV)</td><td>Non (associé VN requis)</td><td>Oui</td><td>Secteurs conditionnés ou accès au marché local</td></tr>
        <tr><td>Bureau de représentation</td><td>Oui</td><td>Non</td><td>Veille de marché, liaison commerciale</td></tr>
        <tr><td>Succursale</td><td>Oui (société-mère étrangère)</td><td>Oui</td><td>Extension d'une société étrangère existante</td></tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-2">2. La SARL à 100% capital étranger : la structure la plus courante</h2>
    <p>La <strong>Công ty TNHH một thành viên</strong> (SARL à un associé) ou <strong>Công ty TNHH hai thành viên</strong> (SARL à plusieurs associés) à 100% de capital étranger est la forme juridique la plus utilisée par les entrepreneurs français au Vietnam — l'équivalent fonctionnel de notre SARL/EURL, dans un cadre que l'EVFTA a rendu largement accessible aux Européens. Elle offre :</p>
    <ul>
      <li>Responsabilité limitée au capital apporté — ton patrimoine personnel est protégé, sauf fautes de gestion caractérisées</li>
      <li>Possibilité d'être le seul propriétaire (SARL unipersonnelle)</li>
      <li>Liberté de rapatrier les bénéfices (sous réserve d'obligations fiscales et du circuit du compte de capital)</li>
      <li>Exemption de permis de travail pour le représentant légal propriétaire</li>
      <li>Accès à l'ensemble des activités non restreintes, avec la capacité de facturer des clients vietnamiens — ce qu'aucun statut de télétravailleur ne permet</li>
    </ul>
    <p>Le représentant légal (người đại diện theo pháp luật) peut être de nationalité française. Il n'a pas besoin d'être résident au Vietnam, mais en pratique une présence locale facilite la gestion — et la loi exige qu'au moins un représentant légal réside au Vietnam ou qu'un mandataire soit désigné pendant les absences. Bonus non négligeable du statut : la société te permet d'obtenir un <strong>visa/carte de résidence d'investisseur (ĐT)</strong>, dont la durée dépend du montant investi — pour beaucoup d'entrepreneurs, la structure règle donc d'un coup la question professionnelle ET la question du séjour.</p>

    <h2 id="section-3">3. Le bureau de représentation : pour tester le marché</h2>
    <p>Le bureau de représentation (văn phòng đại diện) permet à une société étrangère existante d'avoir une présence officielle au Vietnam sans y créer une entité commerciale distincte — précision importante : il suppose donc une société-mère à l'étranger, ce n'est pas une option pour partir de zéro. Il est utile pour :</p>
    <ul>
      <li>Étudier le marché vietnamien avant de s'y installer</li>
      <li>Coordonner les relations avec des partenaires locaux et fournisseurs (sourcing, contrôle qualité)</li>
      <li>Recruter du personnel local pour des activités de liaison</li>
      <li>Donner un statut au représentant sur place (permis de travail de chef de bureau)</li>
    </ul>
    <p>Attention : il <strong>ne peut pas générer de revenus ni signer de contrats commerciaux</strong> au nom de la société. Sa durée de validité est de 5 ans renouvelables. Base légale : Luật Thương Mại 2005, articles 31 et suivants. Le bureau de représentation intéresse donc surtout deux profils : la PME française qui veut « sentir » le marché vietnamien avant d'investir, et le professionnel qui a besoin d'une base légale de présence (avec permis de travail de chef de bureau à la clé) sans activité commerciale locale. Pour l'entrepreneur individuel qui veut facturer, c'est une impasse — vise directement la SARL.</p>

    <h2 id="section-4">4. La joint-venture : pour les secteurs conditionnés</h2>
    <p>Certains secteurs d'activité au Vietnam sont dits "conditionnés" : ils imposent un plafond de participation étrangère, voire exigent qu'un partenaire vietnamien détienne une part minimale du capital. Dans ce cas, la joint-venture (liên doanh) avec un associé local est la solution. Elle implique de trouver un partenaire de confiance, de rédiger un accord d'actionnaires solide et de prévoir les mécanismes de gouvernance et de sortie. Un avocat est indispensable.</p>
    <p>Un conseil issu de l'expérience collective des investisseurs étrangers : dans une JV, le contrat vaut ce que vaut la relation. Investis autant dans la connaissance réelle de ton partenaire (historique, réputation, incitations alignées) que dans les clauses — et méfie-toi du réflexe consistant à prendre « quelqu'un de la famille » comme associé de complaisance pour contourner une restriction : tu cumules alors les risques juridiques du montage artificiel et les risques relationnels familiaux. Si le secteur exige un vrai partenaire, prends un vrai partenaire.</p>

    <h2 id="section-5">5. La procédure de création d'une SARL étrangère</h2>
    <p>La création d'une SARL à capital étranger se déroule en plusieurs étapes séquentielles — la logique vietnamienne distingue l'autorisation du <em>projet d'investissement</em> (IRC) de l'immatriculation de la <em>société</em> elle-même (ERC), une architecture en deux temps qui surprend les Français habitués au guichet unique :</p>

    <ol>
      <li>
        <strong>Obtention du Certificat d'Enregistrement d'Investissement (IRC)</strong><br>
        Déposé auprès du Service provincial du Plan et de l'Investissement (Sở Kế Hoạch và Đầu Tư). Documents requis : formulaire de demande, projet de charte d'entreprise, pièce d'identité des fondateurs, justificatif de capacité financière. Délai légal : 15 jours ouvrés.
      </li>
      <li>
        <strong>Obtention du Certificat d'Enregistrement d'Entreprise (ERC)</strong><br>
        Auprès du même service (ou via le portail national dangkykinhdoanh.gov.vn). Délai légal : 3 jours ouvrés après obtention de l'IRC.
      </li>
      <li>
        <strong>Enregistrement fiscal</strong><br>
        Obtention du numéro d'identification fiscale (mã số thuế) auprès de l'administration fiscale. Obligatoire pour facturer et payer la TVA et l'impôt sur les sociétés.
      </li>
      <li>
        <strong>Fabrication du sceau (con dấu)</strong><br>
        Le sceau officiel de l'entreprise est obligatoire pour signer les documents officiels. Il est fabriqué après l'obtention de l'ERC.
      </li>
      <li>
        <strong>Ouverture des comptes bancaires professionnels</strong><br>
        Dans une banque vietnamienne ou une banque étrangère ayant une présence au Vietnam (BNP Paribas, HSBC, Standard Chartered, etc.). Une société à capital étranger ouvre en réalité deux comptes : le <em>compte de capital d'investissement</em> (par lequel transitent obligatoirement l'apport initial et, plus tard, les rapatriements de bénéfices) et le compte courant d'exploitation. Le capital social doit être versé sur le premier dans le délai légal.
      </li>
      <li>
        <strong>Publication de l'avis de constitution</strong><br>
        Annonce dans le Journal officiel des entreprises vietnamiennes (Cổng thông tin quốc gia về đăng ký doanh nghiệp).
      </li>
      <li>
        <strong>Facturation électronique et premières déclarations</strong><br>
        Activation du système de factures électroniques (hóa đơn điện tử, obligatoire au Vietnam) et calage du calendrier déclaratif avec ton comptable — la société est alors réellement opérationnelle.
      </li>
    </ol>

    <h2 id="section-6">6. Coûts et intervenants recommandés</h2>

    <div class="table-wrapper">
    <table>
      <thead><tr><th>Poste</th><th>Coût indicatif</th></tr></thead>
      <tbody>
        <tr><td>Honoraires cabinet juridique local (dossier IRC + ERC)</td><td>500 – 2 000 USD</td></tr>
        <tr><td>Traductions officielles et apostilles (côté France)</td><td>200 – 600 EUR</td></tr>
        <tr><td>Taxes gouvernementales d'enregistrement</td><td>Faibles (montant fixé par l'État — vérifier)</td></tr>
        <tr><td>Sceau officiel</td><td>20 – 50 USD</td></tr>
        <tr><td>Comptable local (mensuel, une fois créée)</td><td>100 – 400 USD/mois</td></tr>
      </tbody>
    </table>
    </div>
    <p>Lecture honnête du tableau : la création elle-même n'est pas chère — c'est le <strong>coût de fonctionnement récurrent</strong> (comptable, déclarations, renouvellements de licences) qui doit entrer dans ton business plan. Une SARL vietnamienne « coûte » son socle administratif chaque mois, activité ou pas : c'est le seuil de rentabilité minimal que ton projet doit dépasser pour que la structure ait un sens.</p>

    <p>Pour trouver un cabinet juridique ou une société de services aux entreprises étrangères au Vietnam, les Chambres de Commerce franco-vietnamiennes (CCI France Vietnam — ccifv.org) et l'Ambassade de France à Hanoï disposent d'annuaires de prestataires francophones.</p>

    <h2 id="section-7">7. La vie de l'entreprise après création : les obligations qu'on découvre trop tard</h2>
    <p>Créer la société est la partie visible ; la faire vivre en conformité est le vrai travail, et c'est là que se départagent les projets sérieux des aventures. Les obligations récurrentes d'une SARL vietnamienne :</p>
    <ul>
      <li><strong>La comptabilité aux normes vietnamiennes</strong> : tenue selon le référentiel comptable local, en vietnamien et en dong. Ce n'est pas optionnel et ce n'est pas transposable de ta compta française — d'où le comptable local du tableau des coûts, qui n'est pas un luxe mais une pièce du moteur.</li>
      <li><strong>Les déclarations fiscales périodiques</strong> : TVA, impôt sur les sociétés, impôt sur le revenu des salariés — un calendrier de déclarations qui tourne toute l'année, même si l'activité est faible. Une société « en sommeil » non déclarée accumule les pénalités.</li>
      <li><strong>Les rapports d'investissement</strong> : une société à capital étranger doit rendre compte périodiquement de l'exécution de son projet d'investissement aux autorités du Plan.</li>
      <li><strong>Les licences sectorielles (sub-licenses)</strong> : l'ERC autorise l'existence de la société, mais beaucoup d'activités (restauration, éducation, santé, import-export de certains produits) exigent des licences d'exploitation additionnelles. C'est l'angle mort classique du créateur pressé.</li>
      <li><strong>Le versement effectif du capital</strong> : le capital déclaré doit être versé sur le compte de la société dans le délai légal après création — le déclarer sans le verser est une infraction, pas une astuce.</li>
    </ul>

    <h2 id="section-8">8. Entreprendre en couple mixte : l'option du hộ kinh doanh</h2>
    <p>Pour les petits projets (café, boutique, services de proximité), les couples franco-vietnamiens disposent d'une voie que les expatriés « solo » n'ont pas : le <strong>hộ kinh doanh</strong>, le régime vietnamien de l'entreprise individuelle/familiale, réservé aux citoyens vietnamiens. Concrètement, ton/ta conjoint(e) enregistre l'activité sous ce régime ultra-simplifié (l'équivalent fonctionnel de la micro-entreprise française), et le foyer exploite l'affaire ensemble — toi avec l'exemption de permis de travail du conjoint pour ta participation.</p>
    <p>Avantages : simplicité et coûts sans commune mesure avec une SARL à capital étranger. Limites à regarder en face : l'affaire est juridiquement <em>celle de ton/ta conjoint(e)</em> — retrouve ici toute la discussion sur la protection du conjoint étranger de <a href="achat-immobilier-vietnam-couple-mixte">l'article immobilier</a> (documentation des apports, testament, confiance) ; et le régime plafonne naturellement l'ambition (embauches limitées, pas de levée de fonds, crédibilité moindre face aux gros clients). La progression naturelle : hộ kinh doanh pour tester, SARL quand l'activité décolle. Le projet complet de A à Z est détaillé dans <a href="ouvrir-restaurant-cafe-boutique-vietnam">ouvrir un restaurant, café ou boutique au Vietnam</a>.</p>

    <h2 id="section-erreurs">Les erreurs fréquentes des créateurs français</h2>
    <ul>
      <li><strong>Le montage « au nom du conjoint » sans rien formaliser</strong> : mettre toute l'entreprise au nom de son épouse (ou pire, d'un tiers vietnamien « de confiance ») sans accord écrit ni traçabilité des apports — juridiquement, tu n'as alors rien. Choisis en conscience entre SARL à ton nom et hộ kinh doanh assumé, mais documente toujours.</li>
      <li><strong>Déclarer un capital incohérent</strong> : trop bas, il bloque les licences et le sérieux du dossier ; trop haut, il crée une obligation de versement intenable.</li>
      <li><strong>Découvrir les secteurs conditionnés après coup</strong> : vérifie le statut de ton activité AVANT de structurer le projet — la liste des restrictions transforme certains business plans du tout au tout.</li>
      <li><strong>Mélanger les caisses</strong> : compte personnel et compte société étanches dès le premier jour — le rapatriement futur des bénéfices dépend de cette propreté.</li>
      <li><strong>Économiser sur le juridique et la compta la première année</strong> : c'est l'année où tout se structure. Les centaines de dollars « économisées » se paient en milliers lors des régularisations, avec les intérêts de retard en prime.</li>
    </ul>

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
      <strong>Tu envisages de créer une société au Vietnam ?</strong>
      <span>Reçois les prochains guides sur l'entrepreneuriat et la fiscalité des expatriés au Vietnam.</span>
    </div>
    <a href="newsletter-capvietnam" class="cta-newsletter-btn">Recevoir la newsletter</a>
  </div>
</div>

<div class="author-box">
  <img src="assets/img/anthony-vietnam.jpg" alt="Anthony Bouillon - Cap Vietnam" class="author-avatar" onerror="this.style.display='none'">
  <div class="author-box-text">
    <div class="author-box-name">Anthony Bouillon</div>
    <div class="author-box-bio">Expatrié français installé au Vietnam. Je partage mon expérience du quotidien vietnamien : vie pratique, démarches, travail et couple franco-vietnamien.</div>
    <a href="a-propos-capvietnam" class="author-box-link">En savoir plus sur l'auteur</a>
  </div>
</div>

<?php include '_article-comments.php'; ?>
<?php include '_related-articles.php'; ?>
<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
