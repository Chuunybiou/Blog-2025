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
      <span>⏱ 10 min de lecture</span>
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

    <p class="article-intro">Le Vietnam est ouvert aux investissements étrangers depuis les réformes du Đổi Mới et les différents accords de libre-échange (EVFTA signé en 2020 entre l'UE et le Vietnam). Un ressortissant français peut créer sa propre société au Vietnam dans la majorité des secteurs d'activité. Mais la procédure, les statuts disponibles et les contraintes varient selon ton projet. Tour d'horizon sans jargon.</p>

    <div class="article-alert">
      <strong>Avertissement :</strong> Cet article est informatif. La création d'une société au Vietnam implique des aspects juridiques et fiscaux complexes. <strong>Consulte impérativement un cabinet juridique local spécialisé</strong> (avocat d'affaires ou société de services aux entreprises) avant de lancer les démarches. Les informations ci-dessous se basent sur la Loi sur l'investissement (Luật Đầu Tư 2020) et la Loi sur les entreprises (Luật Doanh Nghiệp 2020), mais peuvent évoluer.
    </div>

    <h2 id="section-1">1. Vue d'ensemble des structures disponibles</h2>

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
    <p>La <strong>Công ty TNHH một thành viên</strong> (SARL à un associé) ou <strong>Công ty TNHH hai thành viên</strong> (SARL à plusieurs associés) à 100% de capital étranger est la forme juridique la plus utilisée par les entrepreneurs français au Vietnam. Elle offre :</p>
    <ul>
      <li>Responsabilité limitée au capital apporté</li>
      <li>Possibilité d'être le seul propriétaire (SARL unipersonnelle)</li>
      <li>Liberté de rapatrier les bénéfices (sous réserve d'obligations fiscales)</li>
      <li>Exemption de permis de travail pour le représentant légal propriétaire</li>
      <li>Accès à l'ensemble des activités non restreintes</li>
    </ul>
    <p>Le représentant légal (người đại diện theo pháp luật) peut être de nationalité française. Il n'a pas besoin d'être résident au Vietnam, mais en pratique une présence locale facilite la gestion.</p>

    <h2 id="section-3">3. Le bureau de représentation : pour tester le marché</h2>
    <p>Le bureau de représentation (văn phòng đại diện) permet à une société étrangère d'avoir une présence officielle au Vietnam sans y créer une entité commerciale distincte. Il est utile pour :</p>
    <ul>
      <li>Étudier le marché vietnamien avant de s'y installer</li>
      <li>Coordonner les relations avec des partenaires locaux</li>
      <li>Recruter du personnel local pour des activités de liaison</li>
    </ul>
    <p>Attention : il <strong>ne peut pas générer de revenus ni signer de contrats commerciaux</strong> au nom de la société. Sa durée de validité est de 5 ans renouvelables. Base légale : Luật Thương Mại 2005, articles 31 et suivants.</p>

    <h2 id="section-4">4. La joint-venture : pour les secteurs conditionnés</h2>
    <p>Certains secteurs d'activité au Vietnam sont dits "conditionnés" : ils imposent un plafond de participation étrangère, voire exigent qu'un partenaire vietnamien détienne une part minimale du capital. Dans ce cas, la joint-venture (liên doanh) avec un associé local est la solution. Elle implique de trouver un partenaire de confiance, de rédiger un accord d'actionnaires solide et de prévoir les mécanismes de gouvernance et de sortie. Un avocat est indispensable.</p>

    <h2 id="section-5">5. La procédure de création d'une SARL étrangère</h2>
    <p>La création d'une SARL à capital étranger se déroule en plusieurs étapes séquentielles :</p>

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
        <strong>Ouverture d'un compte bancaire professionnel</strong><br>
        Dans une banque vietnamienne ou une banque étrangère ayant une présence au Vietnam (BNP Paribas, HSBC, Standard Chartered, etc.). Le capital social doit être versé sur ce compte.
      </li>
      <li>
        <strong>Publication de l'avis de constitution</strong><br>
        Annonce dans le Journal officiel des entreprises vietnamiennes (Cổng thông tin quốc gia về đăng ký doanh nghiệp).
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

    <p>Pour trouver un cabinet juridique ou une société de services aux entreprises étrangères au Vietnam, les Chambres de Commerce franco-vietnamiennes (CCI France Vietnam — ccifv.org) et l'Ambassade de France à Hanoï disposent d'annuaires de prestataires francophones.</p>

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
