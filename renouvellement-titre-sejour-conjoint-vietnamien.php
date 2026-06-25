<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Renouveler le titre de séjour de son conjoint vietnamien en France (2026)';
$page_description = 'Délais, documents, ANEF, récépissé et carte de résidence : guide complet pour renouveler le titre de séjour vie privée et familiale de votre conjoint vietnamien.';
$page_canonical   = SITE_URL . '/renouvellement-titre-sejour-conjoint-vietnamien';
$page_og_title    = 'Renouveler le titre de séjour de son conjoint vietnamien en France';
$page_og_desc     = 'Quand déposer, quels documents, ANEF, récépissé : guide complet pour le renouvellement du titre de séjour vie privée et familiale. Infos officielles 2026.';
$page_og_url      = $page_canonical;
$page_og_image    = 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=1200&q=80';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Renouveler le titre de séjour de son conjoint vietnamien en France (2026)',
  'description'      => $page_description,
  'image'            => 'https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=1200&q=80',
  'datePublished'    => '2026-06-22',
  'dateModified'     => '2026-06-22',
  'author'           => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'        => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage' => $page_canonical,
  'inLanguage'       => 'fr',
  'articleSection'   => 'Vivre ensemble',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color   = 'terracotta';
$article_hero_bg = '#3a1a0e';
$article_glow    = 'rgba(191,74,42,0.15)';
$article_badge   = 'rgba(191,74,42,0.25)';
$article_badge_c = '#e8856a';
$current_slug    = 'renouvellement-titre-sejour-conjoint-vietnamien';
$current_cat     = 'vivre-ensemble';

$page_faq = [
  ['q' => 'Combien de temps à l\'avance doit-on déposer la demande de renouvellement ?',
   'a' => 'Officiellement, 2 mois minimum (3 à 4 mois recommandés) avant l\'expiration du titre. En pratique, dans les grandes préfectures (Paris, Lyon, Marseille), les délais pour obtenir un rendez-vous via l\'ANEF peuvent dépasser 2 mois. Il vaut mieux commencer les démarches 3 à 4 mois à l\'avance pour éviter de se retrouver sans titre valide pendant l\'attente — même si le récépissé couvre légalement cette période.'],
  ['q' => 'Le récépissé de demande de renouvellement permet-il de voyager ?',
   'a' => 'Le récépissé autorise votre conjoint(e) à rester en France légalement pendant l\'instruction du dossier. En revanche, pour les voyages hors de France (y compris vers le Vietnam), vérifiez au cas par cas avec la préfecture ou consulez service-public.fr : le récépissé seul ne garantit pas forcément le droit de revenir en France si le titre d\'origine est expiré. En pratique, beaucoup de voyages sont suspendus pendant la période d\'instruction pour éviter les complications.'],
  ['q' => 'Quels documents prouvent la vie commune pour le renouvellement ?',
   'a' => 'La préfecture accepte généralement : un bail de location aux deux noms, des factures EDF/eau/internet à l\'adresse commune, des relevés de compte bancaire commun ou des virements réguliers entre comptes, des courriers officiels (CAF, CPAM, impôts) envoyés à la même adresse pour les deux conjoints. L\'ensemble forme un faisceau de preuves — aucun document unique n\'est strictement exigé, mais plus c\'est documenté, mieux c\'est.'],
  ['q' => 'La carte de résidence de 10 ans est-elle automatique après 3 ans ?',
   'a' => 'Non. Après 3 ans de résidence régulière en tant que conjoint(e) de Français, vous avez le droit de DEMANDER la carte de résidence. Ce n\'est pas automatique. Il faut en faire la demande et remplir les conditions : mariage non dissous, vie commune prouvée, niveau de français suffisant (A2 minimum reconnu par l\'OFII ou un diplôme), et absence de menace à l\'ordre public. La demande se fait de la même façon qu\'un renouvellement de titre.'],
  ['q' => 'Que se passe-t-il si le titre de séjour expire avant l\'obtention du récépissé ?',
   'a' => 'Si la demande de renouvellement a été déposée AVANT l\'expiration du titre et que vous attendez le récépissé, votre conjoint(e) est en situation régulière par application de l\'article L. 431-2 du CESEDA. Le titre expiré ne crée pas d\'irrégularité si la demande est prouvée. En revanche, si aucune demande n\'a été déposée avant l\'expiration, la situation devient irrégulière — c\'est pour ça que le délai de dépôt est crucial.'],
];

$page_extra_head = '
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Accueil","item":"' . SITE_URL . '"},{"@type":"ListItem","position":2,"name":"Vivre ensemble","item":"' . SITE_URL . '/articles-capvietnam"},{"@type":"ListItem","position":3,"name":"Renouvellement titre de séjour"}]}</script>
';

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Vivre ensemble</a><span class="breadcrumb-sep">›</span>
      <span>Renouvellement titre de séjour</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">📋 Démarches administratives</span>
    <h1>Renouveler le titre de séjour de son conjoint vietnamien en France : guide complet 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 22 juin 2026</span>
      <span>⏱ 8 min de lecture</span>
      <span>Mis à jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Titre temporaire vs carte de résidence</a></li>
      <li><a href="#section-2">Quand déposer la demande</a></li>
      <li><a href="#section-3">L'ANEF — la plateforme numérique</a></li>
      <li><a href="#section-4">Les documents à rassembler</a></li>
      <li><a href="#section-5">Le récépissé — vos droits pendant l'instruction</a></li>
      <li><a href="#section-6">La carte de résidence (10 ans)</a></li>
      <li><a href="#section-7">Divorce et séparation</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" title="Facebook" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" title="LinkedIn" onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url='+encodeURIComponent(location.href))">in</a>
        <a class="share-btn" title="Copier le lien" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <article class="article-body">

    <p>La première carte de séjour "vie privée et familiale" est en main. Un an passe vite — et la question du renouvellement arrive souvent plus tôt qu'on ne le pense. Ce guide couvre le renouvellement du titre de séjour pour conjoint de ressortissant français (CESEDA, art. L. 423-1), basé sur les procédures en vigueur en 2026.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=1200&q=80" alt="Passeport et documents — renouvellement titre de séjour conjoint vietnamien" width="1200" height="675" loading="lazy">

    <div class="info-box">
      <strong>📋 Ce que ce guide couvre :</strong><br>
      ✅ Renouvellement du titre de séjour temporaire (1 an) pour conjoint(e) de Français<br>
      ✅ Documents à fournir et délais à respecter<br>
      ✅ Rôle de l'ANEF (plateforme numérique officielle)<br>
      ✅ La carte de résidence (10 ans) — quand et comment y accéder<br>
      ❌ Ne couvre pas : le visa initial, le regroupement familial, les titres étudiants ou travail
    </div>

    <h2 id="section-1">Titre de séjour temporaire et carte de résidence : deux choses différentes</h2>

    <p>La carte de séjour temporaire "vie privée et familiale" est valable 1 an. Elle peut être renouvelée autant de fois que nécessaire, à condition que les conditions de délivrance soient toujours remplies (mariage en cours, vie commune prouvée).</p>

    <p>La carte de résidence est différente : elle est valable 10 ans, renouvelée automatiquement si les conditions restent réunies. Elle représente une stabilité bien plus grande. <strong>Elle n'est pas accordée d'office</strong> — il faut la demander, après avoir rempli des conditions précises.</p>

    <div class="info-box">
      <strong>🔄 La progression classique :</strong><br>
      → VLS-TS (visa long séjour) — validé par l'OFII à l'arrivée<br>
      → Carte de séjour temporaire (1 an) — renouvelable<br>
      → Après 3 ans de résidence régulière + conditions : carte de résidence (10 ans)<br>
      → Après 5 ans de résidence régulière : naturalisation possible
    </div>

    <h2 id="section-2">Quand déposer la demande de renouvellement</h2>

    <p><strong>La règle officielle : 2 mois minimum (3 à 4 mois recommandés) avant l'expiration du titre.</strong> Ne pas attendre la date d'expiration pour déposer — si le titre expire avant que votre conjoint(e) ait obtenu un récépissé de demande, la situation peut devenir compliquée.</p>

    <p>En pratique, dans les grandes préfectures (Paris, Lyon, Marseille, Bordeaux), les délais pour obtenir un créneau sur l'ANEF dépassent parfois 4 à 6 semaines. Commencer les démarches <strong>3 à 4 mois avant l'expiration</strong> est une précaution raisonnable.</p>

    <div class="warning-box" style="background:#fff8f0;border-left:3px solid #e8856a;padding:1rem 1.25rem;border-radius:0 6px 6px 0;margin:1.5rem 0">
      <strong>⚠️ Point important :</strong> Le renouvellement n'est jamais automatique. Même si le premier titre a été accordé sans difficultés, il faut refaire une demande complète. La préfecture vérifie à nouveau que les conditions sont remplies (vie commune, ressources, intégration).
    </div>

    <h2 id="section-3">L'ANEF — la plateforme numérique officielle</h2>

    <p>Depuis 2021, la majorité des demandes de titres de séjour en France se font via l'ANEF (<em>Administration Numérique pour les Étrangers en France</em>), sur le site <strong>administration-etrangers-en-france.interieur.gouv.fr</strong>.</p>

    <p>La procédure sur l'ANEF se déroule en deux temps :</p>

    <ol>
      <li><strong>Pré-demande en ligne</strong> : saisie des informations, téléversement des documents numérisés, prise de rendez-vous en préfecture si demandé.</li>
      <li><strong>Convocation en préfecture</strong> : selon les préfectures, un rendez-vous physique est nécessaire pour la remise des originaux et la prise des données biométriques (empreintes digitales, photo).</li>
    </ol>

    <p>Certaines préfectures (notamment en Île-de-France) ont migré vers un traitement entièrement numérique. D'autres maintiennent un rendez-vous physique obligatoire. Vérifiez le fonctionnement de votre préfecture directement sur l'ANEF.</p>

    <h2 id="section-4">Les documents à rassembler</h2>

    <p>Cette liste est basée sur les exigences standards de service-public.fr pour le renouvellement d'une carte de séjour temporaire "vie privée et familiale". <strong>Toujours vérifier la liste exacte demandée par votre préfecture</strong> — certaines ajoutent des pièces spécifiques.</p>

    <div class="info-box">
      <strong>📁 Documents standards pour le renouvellement :</strong><br><br>
      <strong>Identité et séjour :</strong><br>
      → Passeport en cours de validité (original + copie de toutes les pages utilisées)<br>
      → Titre de séjour actuel (original)<br>
      → 3 photos d'identité conformes (35×45 mm, fond blanc, moins de 6 mois)<br><br>
      <strong>Domicile :</strong><br>
      → Justificatif de domicile de moins de 3 mois (quittance de loyer, facture EDF ou internet)<br><br>
      <strong>Mariage et vie commune :</strong><br>
      → Acte de mariage traduit et légalisé (ou acte de mariage français si transcrit au SCEC de Nantes)<br>
      → Justificatifs de vie commune (bail aux deux noms, relevés bancaires communs, courriers officiels à la même adresse pour les deux conjoints)<br><br>
      <strong>Ressources :</strong><br>
      → 3 derniers bulletins de salaire du conjoint français, OU dernier avis d'imposition + justificatif de situation professionnelle<br><br>
      <strong>Formalités :</strong><br>
      → Formulaire de demande (généré via l'ANEF ou disponible en préfecture)<br>
      → Timbre fiscal (montant à vérifier sur service-public.fr au moment de la demande — prévoir environ 225€ en 2026)
    </div>

    <p>Un point souvent oublié : le <strong>Contrat d'Intégration Républicaine (CIR)</strong>. Si votre conjoint(e) l'a signé à l'OFII lors de son arrivée, la préfecture peut vérifier qu'il ou elle a bien suivi les formations prescrites (cours de français, journée civique). Une non-assiduité peut bloquer le renouvellement.</p>

    <h2 id="section-5">Le récépissé — vos droits pendant l'instruction</h2>

    <p>Dès que la demande de renouvellement est déposée et jugée recevable, la préfecture remet un <strong>récépissé de demande de renouvellement</strong>. Ce document a la même valeur légale que le titre de séjour lui-même pendant toute la durée de l'instruction.</p>

    <p>Concrètement : votre conjoint(e) peut rester en France, travailler (les droits au travail sont maintenus), circuler librement sur le territoire. La durée d'un récépissé est généralement de 4 mois, renouvelable si l'instruction n'est pas terminée.</p>

    <div class="info-box">
      <strong>✅ Ce que le récépissé autorise :</strong><br>
      → Rester en France légalement<br>
      → Continuer à travailler (si autorisé sur le titre précédent)<br>
      → Accéder aux droits sociaux (CPAM, CAF si droits ouverts)<br><br>
      <strong>⚠️ Point à vérifier avec la préfecture :</strong><br>
      → Les voyages à l'étranger (notamment retour au Vietnam) pendant la période d'instruction — la re-entrée en France avec un récépissé seul peut poser des difficultés selon les situations.
    </div>

    <h2 id="section-6">La carte de résidence (10 ans) — quand y accéder</h2>

    <p>La carte de résidence est l'étape suivante, plus stable. Pour en bénéficier en tant que conjoint(e) de Français, les conditions générales sont (CESEDA, art. L. 433-1 et suivants) :</p>

    <ul>
      <li><strong>3 ans de résidence régulière</strong> en France en tant que conjoint(e) de ressortissant français</li>
      <li><strong>Mariage non dissous</strong> à la date de la demande</li>
      <li><strong>Vie commune maintenue</strong> avec le conjoint français</li>
      <li><strong>Niveau de français suffisant</strong> : niveau A2 minimum, attesté par un diplôme ou par le résultat du test passé à l'OFII lors du CIR</li>
      <li><strong>Absence de menace à l'ordre public</strong></li>
      <li>Ressources stables du foyer</li>
    </ul>

    <p>La demande de carte de résidence se fait de la même façon qu'un renouvellement classique, via l'ANEF. Ce n'est pas automatique — c'est une nouvelle demande avec évaluation des conditions.</p>

    <div style="background:linear-gradient(135deg,#0d2b1f,#1b4a35);border-radius:10px;padding:1.5rem 2rem;margin:1.5rem 0;display:flex;align-items:center;justify-content:space-between;gap:1.5rem;flex-wrap:wrap">
      <div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:0.4rem">📅 Outil interactif</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.05rem;color:#faf8f4;margin-bottom:0.25rem">Rétroplanning — CCAM et visa conjoint</h3>
        <p style="font-size:0.87rem;color:rgba(250,248,244,0.55);margin:0">Calculez les délais de vos démarches étape par étape</p>
      </div>
      <a href="retroplanning-faire-venir-conjoint" style="flex-shrink:0;display:inline-flex;align-items:center;gap:0.5rem;padding:0.7rem 1.4rem;background:#4db890;color:#0d2b1f;border-radius:5px;font-weight:700;font-size:0.87rem;text-decoration:none;white-space:nowrap">Voir le simulateur →</a>
    </div>

    <h2 id="section-7">Divorce et séparation — ce qui change</h2>

    <p>C'est un sujet difficile mais utile à connaître. En cas de divorce ou de séparation, les règles du titre de séjour changent radicalement. Par défaut, un conjoint(e) étranger qui divorce d'un Français perd le fondement de son titre de séjour "vie privée et familiale".</p>

    <p>Des exceptions existent, notamment si :</p>
    <ul>
      <li>Le mariage a duré au moins 3 ans et le conjoint étranger justifie d'une résidence régulière depuis au moins 3 ans en France</li>
      <li>Des enfants communs sont à charge, avec exercice effectif de l'autorité parentale</li>
      <li>La rupture est liée à des violences conjugales exercées par le conjoint français (des dispositions spécifiques protègent les victimes)</li>
    </ul>

    <p>En cas de séparation, consultez impérativement un avocat spécialisé en droit des étrangers avant de prendre toute décision. Les délais et les droits dépendent précisément des circonstances. Voir notre page <a href="ressources-recommandees">ressources recommandées</a>.</p>

    <h2 id="section-faq">Questions fréquentes</h2>

    <?php foreach($page_faq as $i => $item): ?>
    <div class="faq-item" id="faq-<?= $i ?>">
      <button class="faq-question" aria-expanded="false" onclick="toggleFaq(this)">
        <?= htmlspecialchars($item['q']) ?>
        <span class="faq-arrow">▾</span>
      </button>
      <div class="faq-answer"><?= $item['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <hr style="margin:3rem 0;border:none;border-top:1px solid var(--border,#e5e2dc)">

    <div class="info-box">
      <strong>📚 Sources officielles utilisées dans cet article :</strong><br>
      → <a href="https://www.service-public.fr/particuliers/vosdroits/F2771" target="_blank" rel="noopener">Service-Public.fr — Renouvellement carte de séjour temporaire</a><br>
      → <a href="https://www.service-public.fr/particuliers/vosdroits/F1519" target="_blank" rel="noopener">Service-Public.fr — Carte de résidence (10 ans)</a><br>
      → <a href="https://administration-etrangers-en-france.interieur.gouv.fr" target="_blank" rel="noopener">ANEF — Administration Numérique pour les Étrangers en France</a><br>
      → Code de l'entrée et du séjour des étrangers et du droit d'asile (CESEDA) — <a href="https://www.legifrance.gouv.fr/codes/id/LEGITEXT000006070158" target="_blank" rel="noopener">Légifrance</a>
    </div>

    <div class="cta-newsletter">
      <h3>Le prochain article dans ta boîte mail</h3>
      <p>Naturalisation, regroupement familial, scolarité des enfants franco-vietnamiens — je couvre toutes les étapes administratives du couple mixte.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
        <input type="hidden" name="_subject" value="Newsletter — Cap Vietnam">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>

  </article>
</div>

<?php include '_article-comments.php'; ?>

<?php
$current_slug = 'renouvellement-titre-sejour-conjoint-vietnamien';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
