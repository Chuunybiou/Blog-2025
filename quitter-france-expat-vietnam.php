<?php
$page_title       = 'Quitter la France pour le Vietnam — Cap Vietnam';
$page_description = 'Ce qu\'il faut régler avant de quitter la France pour le Vietnam : résidence fiscale, CPAM, CAF, comptes bancaires et checklist de départ complète.';
$page_canonical   = 'https://blog-capvietnam.fr/quitter-france-expat-vietnam';
$page_og_title    = 'Quitter la France pour le Vietnam : le guide complet';
$page_og_desc     = 'Toutes les démarches administratives pour quitter la France et s\'installer au Vietnam.';
$page_og_url      = 'https://blog-capvietnam.fr/quitter-france-expat-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80';
$page_schema      = '{"@context":"https://schema.org","@type":"BlogPosting","headline":"Quitter la France pour le Vietnam : guide complet","datePublished":"2026-04-25","dateModified":"2026-04-25","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://blog-capvietnam.fr/a-propos"},"publisher":{"@type":"Organization","name":"Anthony Bouillon","logo":{"@type":"ImageObject","url":"https://blog-capvietnam.fr/logo-entreprise.png"}},"image":"https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80","description":"Toutes les démarches administratives pour quitter la France et s\'installer au Vietnam.","timeRequired":"PT10M","inLanguage":"fr","url":"https://blog-capvietnam.fr/quitter-france-expat-vietnam"}';

$article_color   = 'terracotta';
$article_hero_bg = '#3a1a0a';
$article_glow    = 'rgba(191,74,42,0.15)';
$article_badge   = 'rgba(191,74,42,0.2)';
$article_badge_c      = 'var(--terracotta-soft)';
$article_category     = 'Démarches Admin';
$article_category_url = 'https://blog-capvietnam.fr/articles-capvietnam';
$page_faq = [
  ['q' => 'Dois-je continuer à déclarer mes revenus vietnamiens en France ?',
   'a' => "Si tu n'es plus résident fiscal français, tu ne déclares en France que tes revenus de source française (loyers d'un bien immobilier en France, dividendes d'une société française, etc.). Tes revenus gagnés et perçus au Vietnam ne sont pas imposables en France une fois ta résidence fiscale coupée, grâce à la convention bilatérale de 1993."],
  ['q' => 'Ma retraite française est-elle affectée si je pars maintenant ?',
   'a' => "Tes trimestres cotisés restent acquis définitivement. Si tu cesses de cotiser en France, tu n'accumules plus de nouveaux trimestres. Au moment de la retraite, tu demanderas tes droits auprès de l'Assurance Retraite depuis l'étranger. Les droits sont versés par virement international sans problème."],
  ['q' => 'Puis-je voter aux élections françaises depuis le Vietnam ?',
   'a' => "Oui. Une fois inscrit au Registre des Français de l'étranger auprès du consulat de France à Hanoï, tu peux voter à l'ambassade ou par procuration pour les élections nationales (présidentielle, législatives)."],
  ['q' => 'Comment se passe le rapatriement sanitaire si je tombe gravement malade au Vietnam ?',
   'a' => "C'est uniquement possible si tu as souscrit une assurance incluant cette garantie (CFE avec option rapatriement, ou assurance internationale privée). Sans assurance, les frais de rapatriement médical depuis l'Asie du Sud-Est peuvent dépasser 30 000 euros."],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Démarches Administratives</a><span class="breadcrumb-sep">›</span>
      <span>Quitter la France</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Quitter la France pour le Vietnam : impôts, Sécu et démarches</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 25 avril 2026</span>
      <span>⏱ 10 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Prévenir les administrations</a></li>
      <li><a href="#section-2">Résidence fiscale française</a></li>
      <li><a href="#section-3">Sécurité sociale et santé</a></li>
      <li><a href="#section-4">Comptes bancaires</a></li>
      <li><a href="#section-5">Statut professionnel</a></li>
      <li><a href="#section-6">Checklist de départ</a></li>
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
    <p><strong>Quitter la France pour le Vietnam, c'est bien plus que faire sa valise.</strong> Sécu, impôts, CAF, banque, auto-entreprise… Si tu ne coupes pas proprement ces liens administratifs avant de partir, tu risques de continuer à payer des cotisations que tu ne dois plus, ou de perdre des droits que tu aurais pu conserver. Voici tout ce que j'ai dû régler avant mon départ depuis Paris.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80" alt="Tour Eiffel, Paris" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Prévenir les administrations françaises</h2>
    <p>Le premier réflexe est d'informer les organismes qui gèrent tes droits sociaux. Il n'existe pas de guichet unique « départ à l'étranger » en France — il faut contacter chaque organisme séparément.</p>
    <ul>
      <li><strong>CPAM</strong> : signale ton changement de situation (départ hors UE) par courrier ou via Ameli.fr. Tes droits à l'assurance maladie s'éteignent progressivement (voir section Sécu).</li>
      <li><strong>CAF</strong> : toutes les prestations (APL, allocations) cessent dès lors que tu n'as plus ta résidence principale en France. Déclare ton départ immédiatement, sous peine de devoir rembourser des trop-perçus.</li>
      <li><strong>Pôle Emploi (France Travail)</strong> : si tu touches l'ARE (allocation chômage), elle s'arrête dès que tu travailles à l'étranger ou que tu t'y installes. Avertis-les avant ton départ.</li>
      <li><strong>Service des impôts des particuliers</strong> : indique ton changement d'adresse ; tu seras transféré au Service des Impôts des Particuliers Non-Résidents (SIPNR), basé à Noisy-le-Grand.</li>
    </ul>
    <div class="info-box">
      <strong>📋 Organismes à contacter :</strong>
      CPAM (via Ameli.fr), CAF, France Travail / Pôle Emploi, Service des impôts des particuliers non-résidents (SIPNR — Noisy-le-Grand), CARSAT ou Agirc-Arrco si tu cotises à une retraite complémentaire.
    </div>

    <h2 id="section-2">La résidence fiscale française</h2>
    <p>C'est le point le plus important, et celui que beaucoup négligent. En France, la résidence fiscale est définie par l'<strong>article 4B du Code général des impôts (CGI)</strong>. Tu es considéré comme résident fiscal français si au moins un de ces critères est rempli :</p>
    <ul>
      <li>Ton <strong>foyer</strong> (famille, conjoint, enfants) reste en France ;</li>
      <li>Tu séjournes plus de <strong>183 jours par an</strong> en France ;</li>
      <li>Ton <strong>activité professionnelle principale</strong> est exercée en France ;</li>
      <li>Le <strong>centre de tes intérêts économiques</strong> est en France (revenus fonciers, placements, etc.).</li>
    </ul>
    <p>Si tu coupes ces liens, tu peux devenir non-résident fiscal à la date de ton départ effectif. Dans ce cas, tu déclares l'année de départ normalement — mais uniquement pour les revenus de source française ou perçus pendant ta période de résidence.</p>
    <div class="warning-box">
      <strong>⚠️ Convention fiscale France-Vietnam :</strong>
      La France et le Vietnam ont signé une convention fiscale en 1993 (entrée en vigueur en 1994). Elle évite la double imposition mais ne t'exonère pas automatiquement d'impôts français si tu maintiens des liens de résidence. En cas de doute, consulte un conseiller fiscal spécialisé expatriation avant de partir.
    </div>
    <p>En pratique : ferme ton bail ou mets ton logement en location, mets fin à tes abonnements français inutiles, et assure-toi que ton conjoint ou ta famille ne maintient pas de foyer fiscal français à ton nom. Déclare ta nouvelle adresse au Vietnam auprès du SIPNR dès ton installation.</p>

    <h2 id="section-3">Sécurité sociale et couverture santé</h2>
    <p>La <strong>PUMA</strong> (Protection Universelle Maladie) couvre tous les résidents en France. Quand tu pars à l'étranger, tes droits ne s'arrêtent pas immédiatement : tu peux conserver une couverture résiduelle pendant environ <strong>3 mois</strong> après ton départ, le temps de t'organiser. Passé ce délai, tu n'es plus couvert.</p>
    <p>Plusieurs options s'offrent à toi pour continuer à avoir une protection santé depuis le Vietnam :</p>
    <ul>
      <li><strong>CFE — Caisse des Français de l'Étranger</strong> : c'est l'option officielle. Elle fonctionne comme l'Assurance Maladie française mais pour les expatriés. Les cotisations varient selon l'âge (environ 70 à 150 €/mois). Elle rembourse sur la base des tarifs français, pas vietnamiens, mais c'est une bonne base complétée par une mutuelle internationale.</li>
      <li><strong>Assurance santé internationale privée</strong> : des assureurs comme AXA Expatriés, Allianz Care ou Cigna Global proposent des couvertures complètes adaptées au Vietnam. Souvent plus réactives que la CFE pour les soins locaux.</li>
      <li><strong>Assurance locale vietnamienne</strong> : peu recommandée seule — les remboursements sont très bas et l'accès aux cliniques internationales n'est pas garanti.</li>
    </ul>
    <div class="tip-box">
      <strong>💡 Mon conseil :</strong>
      Souscris à une assurance internationale <em>avant</em> de quitter la France. Une fois parti, certains assureurs refusent de te couvrir si tu as quitté ton pays de résidence sans assurance continue (clause de continuité de couverture).
    </div>

    <h2 id="section-4">Les comptes bancaires français</h2>
    <p>Contrairement à une idée reçue, tu n'es <strong>pas obligé de fermer ton compte bancaire français</strong> en partant. Mais certaines banques appliquent des frais supplémentaires aux non-résidents, et conserver un compte actif peut parfois maintenir un lien de résidence fiscale.</p>
    <ul>
      <li><strong>Banques traditionnelles</strong> (BNP, Société Générale, Crédit Agricole) : généralement tolérantes avec les non-résidents, mais peuvent demander une mise à jour de situation. Certaines proposent des comptes "non-résident" avec des frais réduits.</li>
      <li><strong>Banques en ligne</strong> (Boursorama, Fortuneo) : vérifier les CGU — beaucoup exigent une résidence en France ou dans l'UE. En pratique, tant que tu gardes une adresse française de contact, elles ne vérifient pas systématiquement.</li>
      <li><strong>N26</strong> : ferme ton compte si tu quittes la zone UE — c'est dans leurs conditions générales.</li>
      <li><strong><a href="go.php?id=wise" rel="noopener sponsored">Wise</a></strong> : indispensable. Ouvre un compte Wise avant de partir pour transférer ton argent en VND sans frais excessifs. Tu peux recevoir des euros sur ton IBAN européen Wise depuis n'importe où.</li>
    </ul>
    <div class="tip-box">
      <strong>💡 Conseil pratique :</strong>
      Garde ton compte français pendant les 6 premiers mois pour recevoir les derniers remboursements (impôts, CAF, dépôts de garantie). Ensuite, évalue si les frais sont justifiés ou si Wise + compte bancaire vietnamien suffisent.
    </div>

    <h2 id="section-5">Ton statut professionnel</h2>
    <p>La question du statut dépend entièrement de <strong>où se situe ton activité</strong> au moment du départ.</p>
    <p><strong>Si tu es salarié en France :</strong> une démission ou une rupture conventionnelle clôt proprement la relation. La rupture conventionnelle peut t'ouvrir droit à l'ARE, mais elle cesse dès ton installation à l'étranger — à peser selon ta situation.</p>
    <p><strong>Si tu es auto-entrepreneur :</strong> c'est plus complexe. Le régime auto-entrepreneur impose une domiciliation en France. Si tu continues à facturer des clients français depuis le Vietnam, tu peux théoriquement maintenir ton micro, mais l'URSSAF peut contester ta domiciliation. La solution propre est de <strong>radier ton auto-entreprise</strong> et, si tu continues à facturer, de créer une structure adaptée : société, portage salarial, ou statut local vietnamien. → <a href="portage-salarial-depuis-vietnam">Guide complet sur le portage salarial depuis le Vietnam</a>. Consulte un comptable expat avant de décider.</p>
    <div class="warning-box">
      <strong>⚠️ URSSAF et cotisations sociales :</strong>
      Tant que ton auto-entreprise est active, l'URSSAF prélève des cotisations même si tu vis au Vietnam. Si tu oublies de radier avant de partir et que tu continues à déclarer des revenus, tu cotises à des caisses françaises sans en bénéficier.
    </div>

    <h2 id="section-6">Checklist complète avant le départ</h2>
    <ul>
      <li>☑ Déclaration de départ à la CAF (arrêt des aides)</li>
      <li>☑ Notification à la CPAM (fin de la couverture PUMA)</li>
      <li>☑ Souscription à une assurance santé internationale avant le départ</li>
      <li>☑ Notification à France Travail si tu perçois l'ARE</li>
      <li>☑ Déclaration de changement d'adresse au Service des Impôts (→ SIPNR)</li>
      <li>☑ Résiliation du bail ou mise en location du logement</li>
      <li>☑ Vérification des conditions de ta banque pour les non-résidents</li>
      <li>☑ Ouverture d'un <a href="go.php?id=wise" rel="noopener sponsored">compte Wise</a> pour les transferts internationaux</li>
      <li>☑ Radiation de l'auto-entreprise si applicable</li>
      <li>☑ Résiliation ou portabilité de l'abonnement téléphonique français</li>
      <li>☑ Mise à jour de l'adresse auprès de toutes les institutions (impôts, banque, assurances)</li>
      <li>☑ Inscription consulaire (Registre des Français établis hors de France) à l'ambassade de France à Hanoï</li>
    </ul>
    <div class="info-box">
      <strong>📋 Inscription consulaire :</strong>
      Très recommandée, gratuite et facultative. Elle te permet d'accéder aux services de l'ambassade, de recevoir des alertes de sécurité et de participer aux élections françaises depuis le Vietnam. À faire sur le portail <strong>service-public.fr</strong> rubrique « Vivre à l'étranger ».
    </div>

    <?php
    $aff_id    = 'wise';
    $aff_icon  = '💸';
    $aff_title = 'Ouvre Wise avant de prendre l\'avion';
    $aff_text  = 'Transférer des euros vers le Vietnam au taux interbancaire, sans les frais abusifs des banques. Indispensable dès les premiers jours sur place.';
    $aff_cta   = 'Créer un compte Wise';
    $aff_note  = 'Lien affilié — commission perçue si tu effectues un premier transfert, sans coût supplémentaire pour toi.';
    $aff_theme = 'green';
    include '_affiliate-cta.php';
    ?>

    <div class="info-box">
      <strong>Tu pars à la retraite ?</strong> → <a href="retraite-vietnam-francais">Guide complet : visa, pension française, CFE, fiscalité et budget pour les retraités français au Vietnam</a>
    </div>

    <h2 id="section-faq">Questions fréquentes</h2>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Dois-je continuer à déclarer mes revenus vietnamiens en France ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Si tu n'es plus résident fiscal français, tu ne déclares en France que tes revenus de <em>source française</em> (loyers d'un bien immobilier en France, dividendes d'une société française, etc.). Tes revenus gagnés et perçus au Vietnam ne sont pas imposables en France une fois ta résidence fiscale coupée, grâce à la convention bilatérale de 1993.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Ma retraite française est-elle affectée si je pars maintenant ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Tes trimestres cotisés restent acquis définitivement. Si tu cesses de cotiser en France (fin de salariat ou radiation auto-entreprise), tu n'accumules plus de nouveaux trimestres. Au moment de la retraite, tu demanderas tes droits auprès de l'Assurance Retraite depuis l'étranger — c'est possible et courant. Les droits sont versés par virement international sans problème.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Puis-je voter aux élections françaises depuis le Vietnam ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Oui. Une fois inscrit au Registre des Français de l'étranger auprès du consulat de France à Hanoï, tu peux voter à l'ambassade ou par procuration pour les élections nationales (présidentielle, législatives). Les élections consulaires se tiennent également localement.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Comment se passe le rapatriement sanitaire si je tombe gravement malade au Vietnam ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">C'est uniquement possible si tu as souscrit une assurance incluant cette garantie (CFE avec option rapatriement, ou assurance internationale privée). Sans assurance, les frais de rapatriement médical depuis l'Asie du Sud-Est peuvent dépasser 30 000 €. Ne pars jamais sans cette couverture.</div>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;">
        <img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
      </div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français expatrié à Hanoï. Je partage mon parcours d'installation au Vietnam avec ma femme vietnamienne : démarches administratives, vie de couple mixte et travail en ligne.</p>
        <div class="author-links"><a href="a-propos-capvietnam">À propos →</a></div>
      </div>
    </div>

    <div class="cta-newsletter">
      <h3>Reçois les prochains articles</h3>
      <p>Un email par mois sur l'expatriation au Vietnam. Pas de spam.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic.</p>
    </div>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
$current_slug = 'quitter-france-expat-vietnam';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
