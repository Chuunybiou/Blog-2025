<?php
$page_title       = 'Fiscalité expatrié France-Vietnam — Cap Vietnam';
$page_description = 'Fiscalité des expatriés français au Vietnam : convention de non-double imposition, résidence fiscale, déclaration de revenus et obligations depuis l\'étranger.';
$page_canonical   = 'https://www.blog-capvietnam.fr/fiscalite-expat-france-vietnam';
$page_og_title    = 'Fiscalité expatrié France-Vietnam : ce que vous devez savoir';
$page_og_desc     = 'Convention fiscale France-Vietnam 1993, résidence fiscale et obligations déclaratives.';
$page_og_url      = 'https://www.blog-capvietnam.fr/fiscalite-expat-france-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80';
$page_schema      = '{"@context":"https://schema.org","@type":"BlogPosting","headline":"Fiscalite des expatries : convention France-Vietnam","datePublished":"2026-03-10","dateModified":"2026-03-10","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://www.blog-capvietnam.fr/a-propos"},"publisher":{"@type":"Organization","name":"Cap Vietnam","logo":{"@type":"ImageObject","url":"https://www.blog-capvietnam.fr/logo-entreprise.png"}},"image":"https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80","description":"Convention fiscale France-Vietnam 1993, residence fiscale et obligations declaratives.","timeRequired":"PT9M","inLanguage":"fr","url":"https://www.blog-capvietnam.fr/fiscalite-expat-france-vietnam"}';

$article_color   = 'amber';
$article_hero_bg = '#3a2800';
$article_glow    = 'rgba(184,134,11,0.15)';
$article_badge   = 'rgba(184,134,11,0.25)';
$article_badge_c = 'var(--amber-soft)';

$article_category     = 'Argent &amp; Travail';
$article_category_url = 'https://www.blog-capvietnam.fr/articles-capvietnam';
$page_faq = [
  ['q' => 'Si je vis au Vietnam mais garde mon compte courant en France, dois-je le déclarer au Vietnam ?',
   'a' => 'Non. L\'obligation de déclarer les comptes étrangers existe en France (pour les non-résidents qui perçoivent des revenus français) — pas au Vietnam. Le Vietnam n\'a pas d\'obligation déclarative similaire pour les comptes étrangers des résidents.'],
  ['q' => 'Puis-je me faire rembourser la TVA française si je vis au Vietnam ?',
   'a' => 'Non, la TVA n\'est pas remboursable dans ce cas. Le remboursement de TVA s\'applique aux achats lors de passages en France par des non-résidents qui repartent dans les 6 mois, pas aux expatriés domiciliés à l\'étranger.'],
  ['q' => 'Mon employeur français peut-il me détacher au Vietnam ?',
   'a' => 'Oui. Le détachement à l\'international (article L1261-1 du Code du travail) permet à un employeur français d\'envoyer un salarié au Vietnam temporairement, sous certaines conditions. Le salarié détaché reste soumis au droit du travail français et à la sécurité sociale française (dans la limite des accords bilatéraux existants).'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam.php">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam.php">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Fiscalité expatrié</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Fiscalité expatrié France-Vietnam : convention, résidence fiscale et obligations</h1>
    <div class="article-hero-meta">
      <span>Par <strong>Cap Vietnam</strong></span>
      <span>📅 20 février 2026</span>
      <span>⏱ 10 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">La convention fiscale France-Vietnam</a></li>
      <li><a href="#section-2">Résidence fiscale : France ou Vietnam ?</a></li>
      <li><a href="#section-3">Obligations déclaratives en France</a></li>
      <li><a href="#section-4">Impôt au Vietnam</a></li>
      <li><a href="#section-5">Comptes bancaires étrangers</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" onclick="window.open('https://twitter.com/intent/tweet?url='+encodeURIComponent(location.href))">𝕏</a>
        <a class="share-btn" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <div class="warning-box">
      <strong>⚠️ Avertissement :</strong> Cet article est fourni à titre informatif uniquement et ne constitue pas un conseil fiscal ou juridique professionnel. Les règles fiscales évoluent régulièrement et varient selon chaque situation personnelle. Consultez un expert-comptable ou un conseiller fiscal agréé avant toute décision.
    </div>

    <p><strong>La fiscalité est le sujet que tous les expatriés évitent jusqu'au moment où ils reçoivent un redressement.</strong> Comprendre les règles qui s'appliquent à ta situation — France ou Vietnam, résidence fiscale, comptes à déclarer — peut te faire économiser beaucoup d'argent et de stress. Voici les fondamentaux, basés sur les textes officiels en vigueur.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80" alt="Fiscalité et comptabilité" width="1200" height="675" loading="lazy">

    <h2 id="section-1">La convention fiscale France-Vietnam de 1993</h2>
    <p>La France et le Vietnam ont signé une <strong>convention fiscale contre la double imposition</strong> le 10 février 1993 (entrée en vigueur en 1994). Elle définit les règles pour éviter qu'un même revenu soit imposé deux fois — une fois en France, une fois au Vietnam.</p>
    <p>Points clés de la convention :</p>
    <ul>
      <li><strong>Revenus d'emploi</strong> : imposables dans le pays où le travail est exercé</li>
      <li><strong>Revenus immobiliers</strong> : imposables dans le pays où le bien est situé</li>
      <li><strong>Dividendes</strong> : imposables dans les deux pays (avec crédit d'impôt pour éviter la double imposition)</li>
      <li><strong>Pensions de retraite</strong> : imposables dans le pays de résidence du bénéficiaire</li>
    </ul>
    <div class="info-box">
      <strong>📋 Texte officiel :</strong>
      La convention est publiée au Journal Officiel de la République française. Elle est librement consultable sur le site de la Direction générale des finances publiques (impots.gouv.fr) dans la section "Conventions fiscales internationales".
    </div>

    <h2 id="section-2">Résidence fiscale : France ou Vietnam ?</h2>
    <p>C'est la question centrale. Tu ne peux être résident fiscal que d'un seul pays à la fois (en principe). La résidence fiscale détermine quel pays a le droit d'imposer l'ensemble de tes revenus mondiaux.</p>
    <p><strong>Selon le droit français (article 4B du CGI)</strong>, tu es résident fiscal français si l'une de ces conditions est remplie :</p>
    <ul>
      <li>Ton foyer ou lieu de séjour principal est en France</li>
      <li>Tu exerces une activité professionnelle en France (sauf accessoire)</li>
      <li>Ton centre de tes intérêts économiques est en France</li>
    </ul>
    <p><strong>Si les deux pays se réclament de ta résidence</strong>, la convention fiscal tranche selon des critères en cascade : foyer permanent → centre d'intérêts vitaux → séjour habituel → nationalité → accord amiable.</p>

    <div class="warning-box">
      <strong>⚠️ Erreur courante :</strong>
      Partir au Vietnam ne signifie pas automatiquement perdre sa résidence fiscale française. Si ta famille (conjoint, enfants) reste en France, si tu conserves un logement en France, ou si ton patrimoine principal est en France, tu restes probablement résident fiscal français — et tu dois déclarer tes revenus mondiaux en France.
    </div>

    <h2 id="section-3">Obligations déclaratives en France</h2>
    <p>Si tu es résident fiscal français vivant au Vietnam, tu dois :</p>
    <ul>
      <li><strong>Déclarer tous tes revenus mondiaux</strong> chaque année sur la déclaration de revenus (formulaire 2042)</li>
      <li><strong>Déclarer tes comptes bancaires étrangers</strong> (formulaire 3916) — y compris ton compte Vietcombank ou Techcombank</li>
      <li><strong>Payer les prélèvements sociaux</strong> (17,2%) sur les revenus du patrimoine français (loyers, dividendes)</li>
    </ul>
    <div class="tip-box">
      <strong>💡 Service des impôts des particuliers non-résidents :</strong>
      Si tu es officiellement non-résident fiscal français, tu dépends du Service des impôts des particuliers non-résidents (SIPNR) basé à Noisy-le-Grand. C'est à eux que tu adresses ta déclaration pour tes revenus de source française (loyers, dividendes français, etc.).
    </div>

    <h2 id="section-4">L'impôt sur le revenu au Vietnam</h2>
    <p>Si tu deviens résident fiscal vietnamien (plus de 183 jours sur 12 mois consécutifs, ou plus de 183 jours sur l'année civile), tu es en principe soumis à l'impôt sur le revenu vietnamien sur tes revenus mondiaux. Les taux sont progressifs :</p>
    <ul>
      <li>Jusqu'à 60 M VND/mois : 5%</li>
      <li>60–120 M VND/mois : 10%</li>
      <li>120–216 M VND/mois : 15%</li>
      <li>216–384 M VND/mois : 20%</li>
      <li>384–624 M VND/mois : 25%</li>
      <li>624–960 M VND/mois : 30%</li>
      <li>Au-delà : 35%</li>
    </ul>
    <p>En pratique, la plupart des nomades digitaux et expatriés travaillant pour des entités étrangères ne sont pas imposés au Vietnam sur leurs revenus étrangers — la réglementation est floue et peu appliquée. Mais la situation peut changer.</p>

    <h2 id="section-5">Déclaration des comptes bancaires étrangers</h2>
    <p>Obligation souvent ignorée : tout résident fiscal français doit déclarer chaque année ses comptes bancaires détenus à l'étranger, via le <strong>formulaire 3916</strong>, même si le compte est vide ou peu actif. L'amende pour non-déclaration est de 1 500 € par compte non déclaré (article 1649 A du CGI), portée à 10 000 € pour les comptes dans des pays non coopératifs.</p>
    <p>Le Vietnam est considéré comme un pays coopératif — l'amende est donc de 1 500 € par compte. La déclaration se fait en ligne sur impots.gouv.fr en même temps que la déclaration de revenus annuelle.</p>

    <h2 id="section-6">Comment couper sa résidence fiscale française</h2>
    <p>C'est la démarche la plus importante — et la plus souvent mal réalisée. Couper sa résidence fiscale française nécessite de rompre les liens significatifs avec la France selon l'article 4B du CGI :</p>
    <ol>
      <li><strong>Transférer ou résilier son logement en France</strong> : vente de la résidence principale, résiliation du bail ou mise en location du bien.</li>
      <li><strong>Déclarer sa non-résidence fiscale</strong> : remplir et transmettre le formulaire de cessation de résidence au centre des finances publiques de son ancienne commune.</li>
      <li><strong>Produire sa dernière déclaration de revenus en France</strong> : pour l'année de départ, tu déclares tes revenus jusqu'à la date de départ. Au-delà, seuls les revenus de source française sont imposables en France (loyers d'un bien immobilier, dividendes français, etc.).</li>
      <li><strong>Mettre à jour l'adresse auprès de toutes les institutions</strong> : banques, employeurs, CAF, CPAM.</li>
      <li><strong>Transférer son centre d'intérêts économiques</strong> : si possible, transférer l'essentiel de son activité économique vers le Vietnam ou un pays tiers évite toute ambiguïté.</li>
    </ol>
    <div class="warning-box">
      <strong>⚠️ La présomption de résidence :</strong>
      Si tu maintiens un logement à ta disposition en France (même une chambre chez tes parents), la Direction générale des finances publiques peut considérer que tu as un "foyer permanent" en France et contester ta non-résidence. Documente précisément la rupture de tous tes liens.
    </div>

    <h2 id="section-7">Le cas de l'auto-entrepreneur français vivant au Vietnam</h2>
    <p>Si tu exerces en tant que micro-entrepreneur (auto-entrepreneur) français depuis le Vietnam, la situation est particulière :</p>
    <ul>
      <li><strong>La micro-entreprise est liée à ton adresse française</strong> : tant que tu conserves ta micro-entreprise active, tu dois avoir une adresse de domiciliation en France. Beaucoup utilisent l'adresse de leurs parents ou une société de domiciliation.</li>
      <li><strong>Cotisations URSSAF</strong> : même depuis le Vietnam, tu dois cotiser à l'URSSAF sur ton chiffre d'affaires si tu maintiens ta micro-entreprise. Ces cotisations te donnent des droits à la retraite française et, avec option RSI, à l'assurance maladie de base.</li>
      <li><strong>La CFE (Cotisation Foncière des Entreprises)</strong> : taxe locale due annuellement par les micro-entrepreneurs. Exonération les deux premières années, puis entre 200 et 2 000 € selon le chiffre d'affaires.</li>
      <li><strong>Impôt sur le revenu</strong> : si tu restes résident fiscal français, tes bénéfices sont déclarés sur ta déclaration de revenus annuelle (case BIC ou BNC selon activité).</li>
    </ul>
    <div class="tip-box">
      <strong>💡 L'alternative : l'EIRL ou SASU</strong>
      Pour les revenus plus élevés (>40 000 €/an), une SASU avec rémunération de gérant unique peut être plus avantageuse qu'une micro-entreprise — les charges sociales sont comparables mais tu bénéficies d'une couverture maladie complète et d'une meilleure optimisation fiscale. Consulte un expert-comptable spécialisé en expatriation.
    </div>

    <h2 id="section-8">Cotisations sociales et protection sociale depuis l'étranger</h2>
    <p>Perdre sa résidence fiscale française ne signifie pas perdre tous ses droits sociaux français. Tu peux continuer à cotiser volontairement à :</p>
    <ul>
      <li><strong>La CFE (Caisse des Français de l'Étranger)</strong> : maintien des droits maladie-maternité-invalidité français depuis l'étranger. Cotisation selon revenus, à partir de ~70 €/mois. Très recommandée pour les séjours longs.</li>
      <li><strong>L'assurance vieillesse volontaire (CNAV)</strong> : continue d'accumuler des trimestres de retraite depuis l'étranger. Cotisation calculée sur une assiette forfaitaire ou réelle.</li>
      <li><strong>Pôle Emploi</strong> : tu perds les droits ARE (chômage) dès que tu n'es plus salarié en France ou que tu t'installes à l'étranger. Il n'existe pas d'équivalent pour les indépendants.</li>
    </ul>

    <h2 id="section-faq">Questions fréquentes</h2>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Si je vis au Vietnam mais garde mon compte courant en France, dois-je le déclarer au Vietnam ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Non. L'obligation de déclarer les comptes étrangers existe en France (pour les non-résidents qui perçoivent des revenus français) — pas au Vietnam. Le Vietnam n'a pas d'obligation déclarative similaire pour les comptes étrangers des résidents.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Puis-je me faire rembourser la TVA française si je vis au Vietnam ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Non, la TVA n'est pas remboursable dans ce cas. Le remboursement de TVA s'applique aux achats lors de passages en France par des non-résidents qui repartent dans les 6 mois, pas aux expatriés domiciliés à l'étranger.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Mon employeur français peut-il me détacher au Vietnam ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Oui. Le détachement à l'international (article L1261-1 du Code du travail) permet à un employeur français d'envoyer un salarié au Vietnam temporairement, sous certaines conditions. Le salarié détaché reste soumis au droit du travail français et à la sécurité sociale française (dans la limite des accords bilatéraux existants).</div>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Cap Vietnam</h4>
        <p>Ces informations sont générales et ne constituent pas un conseil fiscal. Pour ta situation spécifique, consulte un expert-comptable ou un avocat fiscaliste spécialisé en expatriation.</p>
        <div class="author-links"><a href="a-propos-capvietnam.php">À propos →</a></div>
      </div>
    </div>

    <div class="cta-newsletter">
      <h3>Reçois les prochains guides</h3>
      <p>Finances, vie pratique et démarches admin à Hanoï — dans ta boîte mail.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic.</p>
    </div>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
$current_slug = 'fiscalite-expat-france-vietnam';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
