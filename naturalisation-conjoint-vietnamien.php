<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Naturalisation du conjoint vietnamien en France : conditions, dossier et délais (2026)';
$page_description = 'Après combien d\'années, quelles conditions, quels documents, quel niveau de français ? Guide complet pour la naturalisation du conjoint vietnamien par mariage avec un Français.';
$page_canonical   = SITE_URL . '/naturalisation-conjoint-vietnamien';
$page_og_title    = 'Naturalisation du conjoint vietnamien en France : guide 2026';
$page_og_desc     = 'Conditions, délais, niveau de français requis et constitution du dossier pour naturaliser son conjoint vietnamien après mariage avec un Français.';
$page_og_url      = $page_canonical;
$page_og_image    = 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Naturalisation du conjoint vietnamien en France : conditions, dossier et délais (2026)',
  'description'      => $page_description,
  'image'            => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80',
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
$current_slug    = 'naturalisation-conjoint-vietnamien';
$current_cat     = 'vivre-ensemble';

$page_faq = [
  ['q' => 'Combien d\'années de mariage faut-il avant de demander la naturalisation ?',
   'a' => 'En règle générale, 4 ans de mariage avec un ressortissant français, avec une communauté de vie ininterrompue. Ce délai est porté à 5 ans si le couple ne peut pas justifier d\'au moins 3 ans de résidence ininterrompue en France depuis le mariage. Il n\'existe pas de voie "automatique" : la déclaration à raison du mariage est instruite et vérifiée (communauté de vie, niveau de français, assimilation), et le gouvernement dispose d\'un droit d\'opposition motivé. Mais lorsque toutes les conditions sont remplies, la déclaration a vocation à être enregistrée — ce n\'est pas une faveur discrétionnaire.'],
  ['q' => 'Quel niveau de français est exigé pour la naturalisation ?',
   'a' => 'Un niveau B1 à l\'oral, évalué lors de l\'entretien d\'assimilation. Contrairement au renouvellement du titre de séjour (A2 pour la carte de résidence), la naturalisation exige le niveau B1 du Cadre européen commun de référence. Il n\'est pas obligatoire de présenter un diplôme : l\'agent évalue la capacité à s\'exprimer et à comprendre lors d\'une conversation. En pratique, les candidats qui parlent couramment le français au quotidien passent généralement cet entretien sans difficulté.'],
  ['q' => 'Que se passe-t-il si la demande est refusée ?',
   'a' => 'Un refus d\'enregistrement de la déclaration doit être motivé et peut être contesté devant le juge — le contentieux de la nationalité relève du tribunal judiciaire, dans le délai indiqué sur la notification de refus. Les motifs les plus fréquents : communauté de vie insuffisamment démontrée, niveau de français insuffisant, rupture de régularité du séjour, ou mentions au casier judiciaire. Un refus ne signifie pas que la demande ne peut jamais aboutir — il est possible de représenter un nouveau dossier après avoir rempli les conditions manquantes.'],
  ['q' => 'La nationalité vietnamienne est-elle perdue lors de la naturalisation ?',
   'a' => 'En théorie, le droit vietnamien prévoit la perte de la nationalité lors de l\'acquisition d\'une nationalité étrangère. En pratique, de nombreux Vietnamiens naturalisés en France conservent leur passeport vietnamien pendant des années. Officiellement, la double nationalité n\'est pas reconnue par le Vietnam pour les nationaux qui s\'en vont, sauf exceptions (Viet kieu, etc.). Il vaut mieux consulter un avocat spécialisé avant la démarche si conserver la nationalité vietnamienne est important.'],
  ['q' => 'Peut-on demander la naturalisation sans avoir encore la carte de résidence ?',
   'a' => 'Oui. La naturalisation n\'exige pas d\'avoir la carte de résidence (10 ans) — elle exige une résidence régulière et continue en France pendant le délai requis. Les titres de séjour temporaires annuels successifs constituent une résidence régulière, à condition qu\'il n\'y ait pas eu de rupture de régularité (délai de renouvellement respecté, récépissé obtenu à chaque fois).'],
];

$page_extra_head = '
<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Accueil","item":"' . SITE_URL . '"},{"@type":"ListItem","position":2,"name":"Vivre ensemble","item":"' . SITE_URL . '/articles-capvietnam"},{"@type":"ListItem","position":3,"name":"Naturalisation conjoint vietnamien"}]}</script>
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
      <span>Naturalisation conjoint vietnamien</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">📋 Démarches administratives</span>
    <h1>Naturalisation du conjoint vietnamien en France : conditions, dossier et délais (2026)</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 22 juin 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis à jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Naturalisation par mariage : rappel</a></li>
      <li><a href="#section-2">Conditions à remplir</a></li>
      <li><a href="#section-3">Niveau de français requis</a></li>
      <li><a href="#section-4">Le dossier à constituer</a></li>
      <li><a href="#section-5">L'entretien d'assimilation</a></li>
      <li><a href="#section-6">Délais et décision</a></li>
      <li><a href="#section-7">Double nationalité et Vietnam</a></li>
      <li><a href="#section-preparer">Préparer sa demande sur la durée</a></li>
      <li><a href="#section-erreurs">Les erreurs fréquentes</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" title="Facebook" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" title="LinkedIn" onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url='+encodeURIComponent(location.href))">in</a>
        <a class="share-btn share-copy" href="#" title="Copier le lien" aria-label="Copier le lien de l'article">🔗</a>
      </div>
    </div>
  </aside>

  <article class="article-body">

    <p>La naturalisation est l'étape finale du parcours administratif d'un conjoint vietnamien en France — celle qui offre les droits les plus solides : passeport français, droit de vote, et une stabilité complète. Ce guide couvre les conditions, le dossier et les délais réalistes pour 2026.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80" alt="Paris — naturalisation du conjoint vietnamien en France" width="1200" height="675" loading="lazy">

    <div class="info-box">
      <strong>📋 Ce guide traite uniquement :</strong><br>
      ✅ La naturalisation par mariage avec un ressortissant français (article L. 21-2 du Code civil)<br>
      ✅ Les conditions, le dossier et l'entretien d'assimilation<br>
      ✅ La question de la double nationalité franco-vietnamienne<br>
      ❌ Ne couvre pas : la naturalisation par résidence simple (5 ans), l'acquisition par déclaration
    </div>

    <h2 id="section-1">Naturalisation par mariage : de quoi parle-t-on ?</h2>

    <p>En France, le conjoint étranger d'un(e) Français(e) peut acquérir la nationalité française après <strong>4 ans de mariage</strong> (délai porté à 5 ans si le couple ne justifie pas de 3 ans de résidence ininterrompue en France depuis le mariage). Précision de vocabulaire importante : on parle couramment de « naturalisation », mais juridiquement il s'agit d'une <strong>déclaration de nationalité à raison du mariage</strong> (article 21-2 du Code civil) — une voie distincte de la naturalisation par décret des étrangers sans conjoint français. La déclaration se souscrit auprès de l'administration, qui l'instruit et l'enregistre si les conditions sont remplies ; le gouvernement conserve un droit d'opposition motivé (indignité ou défaut d'assimilation). Ce n'est donc pas automatique, mais ce n'est pas non plus une faveur discrétionnaire.</p>

    <p>C'est une étape distincte de la carte de résidence (10 ans). On peut tout à fait être naturalisé sans avoir préalablement obtenu la carte de résidence — la naturalisation demande uniquement une résidence régulière et continue.</p>

    <div class="info-box">
      <strong>🔄 La progression classique :</strong><br>
      → VLS-TS → Titre de séjour temporaire (1 an, renouvelable) → Carte de résidence (10 ans, possible après 3 ans) → Naturalisation (possible après 4 ans de mariage)<br><br>
      <strong>Textes de référence :</strong> Articles L. 21-2, L. 21-4 et L. 23-7 du Code civil français
    </div>

    <h2 id="section-2">Les conditions à remplir</h2>

    <p>La naturalisation par mariage impose de remplir simultanément plusieurs conditions :</p>

    <table class="comparison-table">
      <thead><tr><th>Condition</th><th>Détail</th></tr></thead>
      <tbody>
        <tr><td><strong>Durée du mariage</strong></td><td>4 ans (5 ans sans 3 ans de résidence ininterrompue en France depuis le mariage)</td></tr>
        <tr><td><strong>Vie commune</strong></td><td>Le couple doit vivre ensemble — vie commune interrompue = délai remis à zéro</td></tr>
        <tr><td><strong>Résidence en France</strong></td><td>Résidence régulière et continue pendant le délai de 4 ans</td></tr>
        <tr><td><strong>Niveau de français</strong></td><td>B1 oral minimum (évalué à l'entretien)</td></tr>
        <tr><td><strong>Assimilation républicaine</strong></td><td>Connaissance des droits et devoirs en France (Constitution, valeurs de la République)</td></tr>
        <tr><td><strong>Casier judiciaire</strong></td><td>Vierge ou sans condamnations incompatibles (certaines condamnations peuvent bloquer)</td></tr>
        <tr><td><strong>Ressources</strong></td><td>Ressources "suffisantes" — pas de seuil fixe mais le foyer doit être en situation stable</td></tr>
      </tbody>
    </table>

    <p>La condition de "vie commune" est celle qui cause le plus de complications dans les couples franco-vietnamiens : si votre conjoint(e) a passé plusieurs mois au Vietnam (maladie familiale, naissance d'un enfant, etc.), cela peut relancer le délai ou créer une rupture que l'administration devra apprécier.</p>
    <p>À l'inverse, un point rassurant méconnu : la voie « par mariage » relève de la <strong>déclaration</strong>, pas de la naturalisation discrétionnaire de droit commun. En clair, si toutes les conditions sont objectivement remplies (durée du mariage, communauté de vie, français, absence d'obstacle d'ordre public), l'administration a beaucoup moins de latitude pour refuser que face à une demande « par résidence ». Le gouvernement conserve un droit d'opposition (indignité, défaut d'assimilation), mais il doit le motiver — la charge s'inverse. Concrètement : un dossier solide de conjoint de Français aboutit, même si les délais éprouvent la patience.</p>

    <h2 id="section-3">Le niveau de français requis</h2>

    <p>Le niveau B1 est évalué lors de l'entretien d'assimilation. Contrairement au renouvellement du titre de séjour (A2 suffisant pour la carte de résidence), l'acquisition de la nationalité exige un palier plus élevé — vérifie les exigences en vigueur au moment de ton dépôt, car les niveaux requis ont été relevés au fil des réformes.</p>

    <p><strong>Ce que cela signifie concrètement :</strong> pouvoir comprendre une conversation en français standard sur des sujets du quotidien, s'exprimer sans aide, raconter des événements, décrire des expériences, donner son avis. Les agents ne cherchent pas un français parfait — ils cherchent une communication fonctionnelle.</p>

    <div class="info-box">
      <strong>💡 Préparer le niveau B1 depuis le Vietnam :</strong><br>
      → Alliance Française de Hanoï ou Hô Chi Minh-Ville (cours de niveau, prépa DELF)<br>
      → Diplôme DELF B1 : valable et reconnu dans le dossier de naturalisation<br>
      → <a href="apprendre-vietnamien-couple">Ressources pour les couples franco-vietnamiens</a> (French + Vietnamese ensemble)
    </div>

    <h2 id="section-4">Le dossier à constituer</h2>

    <p>Le dossier de naturalisation est déposé en préfecture (ou sous-préfecture) selon le département de résidence. Il n'y a pas de dépôt en ligne centralisé pour cette démarche — tout se fait en personne ou par courrier recommandé selon les préfectures.</p>

    <p><strong>Documents principaux :</strong></p>
    <ul>
      <li>Formulaire cerfa n° 12753*05 (demande de naturalisation)</li>
      <li>Acte de naissance du demandeur (apostillé + traduit en français)</li>
      <li>Acte de mariage (copie intégrale, datant de moins de 3 mois)</li>
      <li>Justificatif de résidence régulière en France (titres de séjour successifs, récépissés)</li>
      <li>Pièce d'identité du conjoint français</li>
      <li>Justificatifs de ressources (3 dernières déclarations fiscales, bulletins de salaire)</li>
      <li>Extrait de casier judiciaire n° 3 (obtenu au Vietnam : lý lịch tư pháp)</li>
      <li>Preuves de vie commune (bail commun, relevés bancaires, CAF, impôts communs)</li>
      <li>Photos d'identité récentes (4 photos format identité)</li>
      <li>Si diplôme DELF/DALF disponible : y joindre la copie</li>
    </ul>

    <p>Certaines préfectures demandent des documents supplémentaires. Vérifiez toujours la liste exacte sur le site de votre préfecture avant de déposer.</p>

    <h2 id="section-5">L'entretien d'assimilation</h2>

    <p>Convoqué par la préfecture après dépôt du dossier, l'entretien dure généralement 30 à 45 minutes. Il est conduit par un agent préfectoral. L'objectif est double : évaluer le niveau de français et vérifier l'"assimilation républicaine".</p>

    <p><strong>Ce qui est abordé :</strong></p>
    <ul>
      <li>Questions sur le parcours personnel, la situation familiale, le travail</li>
      <li>Questions sur les droits et devoirs en France (droit de vote, laïcité, égalité hommes-femmes)</li>
      <li>Questions sur les institutions françaises (Parlement, Constitution, Président)</li>
      <li>Engagement sur les valeurs de la République</li>
    </ul>

    <p>Il n'y a pas de "test écrit" — tout est oral. La préparation recommandée : lire le <em>Guide du citoyen</em> disponible sur service-public.fr, et s'entraîner à parler du quotidien en français.</p>
    <p>Un conseil de préparation qui vaut pour les conjoints vietnamiens en particulier : entraînez-vous à raconter <em>votre histoire française</em> — pourquoi la France, ce que vous y avez construit, comment se passe votre vie de quartier, ce que vous faites au travail. L'entretien d'assimilation n'est pas un quiz de dates ; c'est une conversation où l'agent se forge une conviction sur une intégration réelle. Une personne qui parle avec naturel de sa boulangère, de la kermesse de l'école et de sa dernière déclaration d'impôts démontre plus d'assimilation qu'une récitation parfaite de la liste des présidents. Les valeurs républicaines (laïcité, égalité femmes-hommes, liberté d'expression), elles, doivent être comprises et acceptées sans ambiguïté — c'est le seul point non négociable de l'entretien.</p>

    <h2 id="section-6">Délais et décision</h2>

    <p>Après dépôt du dossier complet et entretien, le délai de traitement est de <strong>12 à 24 mois</strong> en 2026. Ce délai est long — il inclut des enquêtes administratives (renseignements généraux, préfecture de police) avant que le dossier ne soit transmis au ministère.</p>

    <p>Trois issues possibles :</p>
    <ul>
      <li><strong>Enregistrement de la déclaration</strong> : la nationalité est acquise — avec effet à la date de souscription de la déclaration</li>
      <li><strong>Refus d'enregistrement</strong> : conditions non remplies (vie commune, français, régularité) — la décision est motivée et contestable, et un nouveau dossier peut être présenté une fois les conditions réunies</li>
      <li><strong>Opposition du gouvernement</strong> : rare, réservée aux cas d'indignité ou de défaut d'assimilation caractérisé, prononcée par décret motivé</li>
    </ul>

    <p>Une fois la nationalité acquise, une <strong>cérémonie d'accueil dans la citoyenneté française</strong> est organisée par la préfecture ou la mairie. C'est aussi le moment des démarches de « premier Français » : carte nationale d'identité, passeport, inscription sur les listes électorales — et la mise à jour de l'état civil, désormais tenu par le Service Central d'État Civil de Nantes pour les personnes nées à l'étranger. Un dernier passage par Nantes, pour la bonne bouche : la boucle administrative ouverte au moment du CCAM se referme exactement là où elle avait commencé.</p>

    <h2 id="section-7">Double nationalité et Vietnam</h2>

    <p>La France autorise la double nationalité sans restriction. Le Vietnam, en revanche, prévoit officiellement la perte de la nationalité vietnamienne lors de l'acquisition d'une autre nationalité (Loi sur la nationalité vietnamienne de 2008, art. 26).</p>

    <p>Dans la pratique, <strong>de nombreux Vietnamiens naturalisés conservent leur passeport vietnamien pendant des années</strong>, notamment les Viet kieu — cette situation est souvent tolérée mais reste techniquement irrégulière côté vietnamien. Si conserver la nationalité vietnamienne est crucial (héritage, propriété immobilière), consultez un avocat spécialisé avant de déposer la demande de naturalisation.</p>

    <h3>Deux effets de la naturalisation à connaître</h3>
    <ul>
      <li><strong>Les enfants mineurs</strong> : l'enfant mineur qui réside habituellement avec le parent qui devient français acquiert en principe la nationalité française en même temps que lui (effet collectif), s'il est mentionné dans le décret. Pour une famille franco-vietnamienne, c'est souvent déjà réglé — l'enfant d'un parent français est français de naissance — mais le point compte pour les enfants d'une précédente union du conjoint vietnamien.</li>
      <li><strong>La francisation du nom ou du prénom</strong> : au moment de la demande, il est possible de demander la francisation du prénom ou du nom (par exemple ajouter un prénom français, ou adapter l'orthographe). C'est un choix strictement personnel — beaucoup gardent leur prénom vietnamien tel quel, d'autres apprécient d'avoir un prénom d'usage plus simple pour le quotidien administratif français. La demande se fait dans le dossier, pas après.</li>
    </ul>

    <h2 id="section-preparer">Préparer sa demande sur la durée : ce qui se joue dès l'arrivée</h2>
    <p>Le dossier de naturalisation se dépose après 4 ans de mariage, mais il se <em>construit</em> dès la première année en France. Les couples qui l'ont compris déposent des dossiers qui passent tout seuls :</p>
    <ul>
      <li><strong>Le français, tôt et certifié</strong> : viser le DELF B1 dès la deuxième ou troisième année, pendant que la dynamique des cours OFII est encore là. Un diplôme dans le dossier sécurise l'évaluation orale.</li>
      <li><strong>La vie commune, documentée en continu</strong> : impôts communs dès la première déclaration, bail ou titre de propriété aux deux noms, comptes joints. Ce sont les pièces qui prouveront les 4 ans sans trou.</li>
      <li><strong>La régularité sans faille</strong> : chaque renouvellement de titre déposé dans les temps, chaque récépissé conservé. Une rupture de régularité au milieu du parcours est le grain de sable classique.</li>
      <li><strong>Les absences longues gérées</strong> : un séjour prolongé au Vietnam (parent malade, naissance) n'est pas interdit, mais garde les preuves de la continuité du foyer en France (le logement conservé, le conjoint resté, les billets aller-retour).</li>
      <li><strong>L'ancrage local</strong> : travail, bénévolat, association de parents d'élèves — tout ce qui montre une vie réellement construite en France nourrit le critère d'assimilation et donne de la chair à l'entretien.</li>
    </ul>

    <h2 id="section-erreurs">Les erreurs fréquentes</h2>
    <ul>
      <li><strong>Confondre les niveaux de français des différentes étapes</strong> : A2 pour la carte de résident, B1 pour la naturalisation. Préparer le mauvais palier fait perdre un cycle complet.</li>
      <li><strong>Déposer un dossier « limite » pour gagner du temps</strong> : un refus d'enregistrement coûte un cycle complet d'instruction — bien plus que les quelques mois « gagnés » en déposant trop tôt ou incomplet.</li>
      <li><strong>Négliger le casier judiciaire vietnamien</strong> : le lý lịch tư pháp se demande au Vietnam, prend du temps, et doit être traduit. C'est la pièce à lancer en premier, pas en dernier.</li>
      <li><strong>Oublier que l'entretien évalue aussi le conjoint français</strong> : la cohérence du couple (adresses, situation, connaissance mutuelle) reste vérifiée à ce stade, comme à chaque étape depuis le visa.</li>
      <li><strong>Trancher la question vietnamienne après coup</strong> : la position sur la double nationalité (voir section précédente) se réfléchit avant le dépôt, surtout s'il y a un héritage ou un bien immobilier au Vietnam dans l'équation.</li>
    </ul>

    <div style="background:linear-gradient(135deg,#0d2b1f,#1b4a35);border-radius:10px;padding:1.5rem 2rem;margin:1.5rem 0;display:flex;align-items:center;justify-content:space-between;gap:1.5rem;flex-wrap:wrap">
      <div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:0.4rem">📅 Outil interactif</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.05rem;color:#faf8f4;margin-bottom:0.25rem">Rétroplanning — Mariage et titre de séjour conjoint</h3>
        <p style="font-size:0.87rem;color:rgba(250,248,244,0.55);margin:0">Calculez les délais de chaque étape depuis le mariage jusqu'à la carte de résidence</p>
      </div>
      <a href="retroplanning-faire-venir-conjoint" style="flex-shrink:0;display:inline-flex;align-items:center;gap:0.5rem;padding:0.7rem 1.4rem;background:#4db890;color:#0d2b1f;border-radius:5px;font-weight:700;font-size:0.87rem;text-decoration:none;white-space:nowrap">Voir le simulateur →</a>
    </div>

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

  </article>

</div>

<?php include '_article-comments.php'; ?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
