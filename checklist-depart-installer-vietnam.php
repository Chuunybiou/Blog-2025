<?php
$page_title       = 'Checklist complète pour s\'installer au Vietnam depuis la France — Cap Vietnam';
$page_description = 'La checklist complète pour s\'installer au Vietnam : 3 mois avant le départ jusqu\'à la première semaine sur place. Valise, admin, arrivée, premiers jours.';
$page_canonical   = 'https://www.blog-capvietnam.fr/checklist-depart-installer-vietnam';
$page_og_title    = 'Checklist installation Vietnam : de la France à Hanoï';
$page_og_desc     = 'Tout ce qu\'il faut faire avant de partir s\'installer au Vietnam — checklist semaine par semaine.';
$page_og_url      = 'https://www.blog-capvietnam.fr/checklist-depart-installer-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=1200&q=80';
$page_schema      = '{"@context":"https://schema.org","@type":"BlogPosting","headline":"Checklist complete pour s installer au Vietnam depuis la France","datePublished":"2026-04-26","dateModified":"2026-04-26","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://www.blog-capvietnam.fr/a-propos"},"publisher":{"@type":"Organization","name":"Cap Vietnam","logo":{"@type":"ImageObject","url":"https://www.blog-capvietnam.fr/logo-entreprise.png"}},"image":"https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=1200&q=80","description":"Tout ce qu il faut faire avant de partir s installer au Vietnam — checklist semaine par semaine.","timeRequired":"PT10M","inLanguage":"fr","url":"https://www.blog-capvietnam.fr/checklist-depart-installer-vietnam"}';

$article_color   = 'terracotta';
$article_hero_bg = '#3a1a0a';
$article_glow    = 'rgba(191,74,42,0.15)';
$article_badge   = 'rgba(191,74,42,0.2)';
$article_badge_c = 'var(--terracotta-soft)';

$article_category     = 'Démarches Admin';
$article_category_url = 'https://www.blog-capvietnam.fr/articles-capvietnam';
$page_faq = [
  ['q' => 'Combien de temps à l\'avance faut-il préparer son départ pour le Vietnam ?',
   'a' => 'Idéalement 3 mois. Certaines démarches prennent du temps : vaccins en plusieurs injections, apostille des diplômes (2–3 semaines en préfecture), casier judiciaire (5–10 jours), résiliation de bail (préavis 1 à 3 mois). Avec 1 mois seulement, c\'est faisable mais stressant.'],
  ['q' => 'Faut-il apporter beaucoup d\'affaires ou peut-on tout trouver au Vietnam ?',
   'a' => 'La règle pratique : tout ce qui se revend ou se rachète pour moins de 200 000 VND (~6,50€) n\'a pas besoin d\'être transporté. Les vêtements basiques, électronique courante, meubles, appareils électroménagers — tout se trouve à Hanoï et HCMC. Ce qui vaut la peine d\'apporter : médicaments sur ordonnance spécifiques, documents officiels, équipement professionnel spécialisé, lunettes et lentilles.'],
  ['q' => 'Faut-il apporter des euros en cash pour l\'arrivée ?',
   'a' => 'Oui, prévoir 200 à 500 euros en billets (ou USD équivalent). Sert pour le transport depuis l\'aéroport, les premiers jours avant l\'ouverture d\'un compte bancaire local, et les achats urgents. Change dans une bijouterie agréée ou une banque — jamais à l\'aéroport (taux très défavorable).'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam.php">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam.php">Démarches Administratives</a><span class="breadcrumb-sep">›</span>
      <span>Checklist départ Vietnam</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Checklist complète pour s'installer au Vietnam : de la France à Hanoï</h1>
    <div class="article-hero-meta">
      <span>Par <strong>Cap Vietnam</strong></span>
      <span>📅 26 avril 2026</span>
      <span>⏱ 10 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">3 mois avant le départ</a></li>
      <li><a href="#section-2">1 mois avant</a></li>
      <li><a href="#section-3">2 semaines avant</a></li>
      <li><a href="#section-4">Le jour J et le vol</a></li>
      <li><a href="#section-5">Première semaine au Vietnam</a></li>
      <li><a href="#section-6">Premier mois sur place</a></li>
      <li><a href="#section-7">Après 3 mois : les vérifications</a></li>
      <li><a href="#section-8">Ce qu'on regrette toujours</a></li>
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
    <p><strong>S'installer au Vietnam, c'est plus que réserver un vol et faire une valise.</strong> Il y a les démarches administratives françaises à boucler, les documents à rassembler, les vaccins à commencer des mois à l'avance, et les premières 48h sur place qui peuvent virer au cauchemar logistique si on n'est pas préparé. Voici la checklist que j'aurais voulu avoir avant mon départ.</p>

    <div class="info-box">
      <strong>Cet article se concentre sur la logistique pratique.</strong>
      Pour les démarches administratives (résidence fiscale, CPAM, CAF, auto-entreprise), consulte notre guide complet <a href="quitter-france-expat-vietnam.php">Quitter la France pour le Vietnam</a>.
    </div>

    <img class="article-photo" src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?w=1200&q=80" alt="Préparation départ voyage Vietnam" width="1200" height="675" loading="lazy">

    <h2 id="section-1">3 mois avant le départ</h2>
    <p>Certaines démarches ont des délais incompressibles. Commencer trop tard force à faire des compromis coûteux — notamment pour les vaccins et les apostilles.</p>
    <ul>
      <li>☐ <strong>Renouveler le passeport</strong> si moins de 12 mois de validité résiduelle. Le Vietnam exige 6 mois de validité à l'entrée — prévoir de la marge. Délai de renouvellement : 3 à 6 semaines en mairie, 1 à 2 semaines en préfecture en urgence.</li>
      <li>☐ <strong>Vaccins : démarrer les séries longues.</strong> L'hépatite B nécessite 3 injections sur 6 mois (schéma classique) ou 1 mois (schéma accéléré). L'hépatite A se fait en 2 injections à 6 mois d'intervalle. Rage si zones rurales prévues. Consulter un médecin voyageur ou une clinique des voyages.</li>
      <li>☐ <strong>Apostille des diplômes</strong> (si tu peux avoir besoin d'un emploi au Vietnam) : demande en préfecture du département d'obtention du diplôme. Délai : 2 à 4 semaines. Coût : 0 à 50€ selon les préfectures.</li>
      <li>☐ <strong>Trier et vendre ses affaires</strong> (Vinted, Leboncoin, Facebook Marketplace). Règle pratique : tout ce qui se rachète au Vietnam pour moins de 200 000 VND (~6,50€) n'a pas besoin d'être transporté.</li>
      <li>☐ <strong>Démarches administratives France</strong> (voir notre <a href="quitter-france-expat-vietnam.php">guide dédié</a>) : CPAM, CAF, impôts, auto-entreprise.</li>
      <li>☐ <strong>Ouvrir un compte Wise</strong> : le compte multi-devises indispensable pour convertir euros → VND au taux interbancaire. À ouvrir en France pour faciliter la vérification d'identité.</li>
    </ul>

    <h2 id="section-2">1 mois avant le départ</h2>
    <p>Le sprint administratif. Beaucoup de ces démarches se font en ligne ou par courrier, mais certaines nécessitent des originaux et des délais de traitement.</p>
    <ul>
      <li>☐ <strong>Casier judiciaire B3</strong> : certains emplois et démarches au Vietnam le requièrent. Gratuit en ligne sur service-public.fr, reçu en 2 à 5 jours ouvrés. Valable 3 mois.</li>
      <li>☐ <strong>Actes de naissance</strong> : demander des extraits récents (<em>avec filiation</em>) auprès de ta mairie. Nécessaire pour mariage au Vietnam, demande de visa familial, etc.</li>
      <li>☐ <strong>Stock de médicaments sur ordonnance</strong> : pour les traitements continus (contraception, traitement psychiatrique, hormones, médicaments cardiovasculaires), constitue un stock de 3 à 6 mois. Certains produits n'existent pas au Vietnam ou ont des formulations différentes. Demande à ton médecin des ordonnances anticipées.</li>
      <li>☐ <strong>Lunettes et lentilles</strong> : emporte 2 paires de lunettes et un stock suffisant de lentilles. Les opticiens vietnamiens sont bons mais la prescription en dioptries peut différer légèrement selon l'équipement.</li>
      <li>☐ <strong>Débloquer son téléphone</strong> : gratuit depuis la réforme de 2023 en France, en appelant ton opérateur. Indispensable pour utiliser une SIM locale vietnamienne.</li>
      <li>☐ <strong>Assurance santé internationale</strong> : souscrire avant de quitter la France. Certains assureurs appliquent des délais de carence, et quelques-uns refusent d'assurer si tu es déjà à l'étranger au moment de la demande. AXA Expatriate, Cigna Global, Allianz Care — voir notre <a href="assurance-sante-vietnam-expat.php">comparatif assurances</a>.</li>
      <li>☐ <strong>Scanner tous les documents</strong> : passeport, actes de naissance, diplômes, contrat d'assurance, ordonnances. Stocker dans Google Drive ou un coffre-fort numérique. Envoyer une copie par email à quelqu'un de confiance en France.</li>
      <li>☐ <strong>Résiliation du bail</strong> ou mise en location du logement (préavis 1 mois zone tendue, 3 mois hors zone tendue).</li>
    </ul>
    <div class="tip-box">
      <strong>Photographier chaque médicament :</strong>
      Prends en photo la notice et l'emballage de chaque médicament avant de partir. Certains noms commerciaux n'existent pas au Vietnam — le médecin ou le pharmacien aura besoin du DCI (dénomination commune internationale) et du dosage exact.
    </div>

    <h2 id="section-3">2 semaines avant le départ</h2>
    <ul>
      <li>☐ <strong>Prévenir sa banque française</strong> du départ à l'étranger : évite les blocages automatiques de carte lors des premières transactions depuis le Vietnam.</li>
      <li>☐ <strong>Annuler les prélèvements automatiques</strong> qui continueraient sans raison (salle de sport, presse, services en ligne français).</li>
      <li>☐ <strong>Récupérer les dépôts de garantie</strong> (logement, box de stockage, etc.) avant le départ.</li>
      <li>☐ <strong>Faire ses valises</strong> (voir liste ci-dessous).</li>
      <li>☐ <strong>Préparer le cash de départ</strong> : 200 à 500 euros ou USD en petites coupures pour les premiers jours. Change à éviter à l'aéroport (taux défavorable) — trouver une bijouterie agréée ou banque à Hanoï/HCMC dès l'arrivée.</li>
      <li>☐ <strong>Carte de crédit de secours</strong> : <a href="go.php?id=revolut" rel="noopener sponsored">Revolut</a> ou <a href="go.php?id=wise" rel="noopener sponsored">Wise</a> en carte de deuxième recours, chargée avec 300 à 500 euros, gardée séparément de ta carte principale.</li>
    </ul>
    <div class="info-box">
      <strong>Ce qu'il faut emporter — ce qui vaut vraiment la peine :</strong>
      Documents originaux • Médicaments sur ordonnance • Matériel professionnel spécialisé • Lunettes/lentilles • Chaussures (pointures >43 difficiles à trouver au Vietnam) • Vêtements chauds si retours France prévus en hiver (trop encombrant à acheter là-bas) • Disque dur de sauvegarde. Tout le reste : les vêtements basiques, l'électronique courante, les articles de toilette — disponibles à Hanoï ou HCMC pour moins cher qu'en France.
    </div>

    <h2 id="section-4">Le jour J et le vol</h2>
    <ul>
      <li>☐ <strong>Bagage cabine prioritaire</strong> : passeport, médicaments, ordonnances, assurance santé (carte), téléphone chargé, vêtements de rechange, argent cash. Si ta valise soute est perdue, tu dois pouvoir survivre 72h sans elle.</li>
      <li>☐ <strong>Télécharger les apps offline</strong> avant d'embarquer : Grab (VTC), Google Maps avec carte Vietnam offline, Google Translate (pack langue vietnamien offline), VDict (dictionnaire).</li>
      <li>☐ <strong>Charger toutes les batteries</strong> : téléphone, ordinateur, batterie externe. Les prises sont en Type A et C au Vietnam (compatibles françaises avec adaptateur).
      <li>☐ <strong>Fiche d'immigration</strong> : à l'arrivée à Nội Bài (Hanoï) ou Tân Sơn Nhất (HCMC), la file d'attente à l'immigration peut prendre 30 à 90 min selon l'heure. Passe en file e-passport si disponible.</li>
    </ul>
    <div class="tip-box">
      <strong>Astuce à l'atterrissage :</strong>
      Ne change pas d'argent à l'aéroport (taux 3 à 5% moins favorable qu'en ville). Retire juste assez au DAB (500 000 à 1 000 000 VND) pour prendre un taxi officiel vers l'hôtel. Grab fonctionne depuis les zones de retrait des bagages dans les deux aéroports principaux.
    </div>

    <h2 id="section-5">Première semaine au Vietnam</h2>
    <p>Les 7 premiers jours sont denses. Voici les priorités par ordre d'urgence :</p>
    <ul>
      <li>☐ <strong>Jour 1 — SIM locale</strong> : achète une SIM Viettel ou Vinaphone à l'aéroport ou dans une boutique opérateur en ville (50 000 à 100 000 VND pour la SIM + forfait données illimitées). Viettel a la meilleure couverture nationale.</li>
      <li>☐ <strong>Jour 1–2 — Enregistrement công an phường</strong> : obligation légale dans les 24h suivant l'arrivée dans un logement. C'est normalement la responsabilité du propriétaire — vérifie avec lui que c'est fait. Voir notre article sur le <a href="carte-residence-temporaire-vietnam.php">sổ tạm trú</a>.</li>
      <li>☐ <strong>Jour 2–3 — Repérage du quartier</strong> : localise la pharmacie la plus proche, le marché, un supermarché, une clinique internationale. Avoir ces adresses en tête avant d'en avoir besoin.</li>
      <li>☐ <strong>Jour 3–5 — Compte bancaire vietnamien</strong> : Vietcombank ou Techcombank, en agence. Apporte passeport + visa + adresse locale si possible. La carte de débit est souvent remise le jour même ou dans les 3 jours.</li>
      <li>☐ <strong>Semaine 1 — Casque de moto</strong> : si tu prévois d'utiliser un scooter, achète un casque certifié avant tout. Les casques en mousse vendus sur les marchés touristiques ne sont pas conformes et ne protègent pas.</li>
      <li>☐ <strong>Semaine 1 — Rejoindre des groupes expats locaux</strong> : Facebook "Hanoï Expats", "Saigon Expats", communautés sur Meetup. Le réseau expat est la ressource la plus efficace pour les bonnes adresses et les conseils pratiques.</li>
    </ul>

    <h2 id="section-6">Premier mois sur place</h2>
    <ul>
      <li>☐ <strong>Conversion du permis de conduire</strong> : si tu as un permis valide et une thẻ tạm trú, commence les démarches au Sở Giao thông Vận tải local. Voir notre <a href="permis-conduire-vietnam.php">guide complet</a>.</li>
      <li>☐ <strong>Demande de thẻ tạm trú</strong> : si tu es éligible (marié à un/une Vietnamien/ne, travail avec permis, investisseur). Voir notre <a href="carte-residence-temporaire-vietnam.php">guide sur la carte de résidence</a>.</li>
      <li>☐ <strong>Inscription consulaire</strong> : gratuite, facultative mais très recommandée. Sur service-public.fr (rubrique "Vivre à l'étranger") ou en se présentant au consulat de France à Hanoï (57 Trần Hưng Đạo) ou HCMC. Permet de voter, recevoir les alertes sécurité, accéder aux services consulaires.</li>
      <li>☐ <strong>Ouvrir MoMo ou ZaloPay</strong> : nécessite une SIM locale et un compte bancaire vietnamien. Ces apps de paiement mobile sont indispensables pour les marchés, restaurants de quartier et petits commerces.</li>
      <li>☐ <strong>Médecin référent</strong> : identifie une clinique internationale ou un médecin francophone/anglophone dans ton quartier avant d'en avoir besoin. Family Medical Practice (Hanoï et HCMC) et Vinmec sont les références.</li>
    </ul>
    <div class="warning-box">
      <strong>⚠️ Assurance santé — dernier délai :</strong>
      Si tu n'as pas souscrit d'assurance santé avant de partir, c'est la première semaine au Vietnam qu'il faut le faire — pas après ta première maladie. Certains assureurs refusent les demandes rétroactives ou appliquent des délais de carence si tu as consulté un médecin entre-temps.
    </div>

    <h2 id="section-7">Après 3 mois : les vérifications</h2>
    <ul>
      <li>☐ <strong>Visa / thẻ tạm trú</strong> : si tu es venu en e-visa 90 jours et que tu ne l'as pas renouvelé, il expire. Vérifier la date et anticiper : visa run, extension, ou basculement sur un autre statut.</li>
      <li>☐ <strong>Règle des 183 jours</strong> : si tu dépasses 183 jours de présence au Vietnam dans l'année civile, tu deviens potentiellement résident fiscal vietnamien. Lire notre <a href="fiscalite-expat-france-vietnam.php">guide sur la fiscalité expatriée</a>.</li>
      <li>☐ <strong>Renouvellement des ordonnances</strong> : si ton stock de médicaments français est épuisé, consulte un médecin pour voir si un équivalent local existe ou si une commande depuis la France est nécessaire.</li>
      <li>☐ <strong>Réévaluation du logement</strong> : les 3 premiers mois servent souvent à explorer différents quartiers. Si ton premier logement ne te convient pas, c'est le bon moment pour chercher avant la prochaine saison (loyers plus négociables hors saison haute).</li>
      <li>☐ <strong>Banque française</strong> : vérifier si ta banque française facture des frais supplémentaires aux non-résidents. Si oui, évaluer si Wise + compte bancaire vietnamien suffisent à ton usage.</li>
    </ul>

    <h2 id="section-8">Ce qu'on regrette toujours d'avoir oublié</h2>
    <p>Ces erreurs reviennent systématiquement dans les témoignages d'expatriés au Vietnam. Tu es prévenu :</p>
    <ul>
      <li><strong>Pas assez de médicaments spécifiques</strong> : les traitements hormonaux, certains antibiotiques, médicaments psychiatriques — obtenir le même traitement depuis le Vietnam peut prendre des semaines et des consultations coûteuses. Pars avec 3 à 6 mois de stock minimum.</li>
      <li><strong>Tout dans la soute</strong> : une valise perdue avec les médicaments et les documents originaux à l'intérieur, c'est un cauchemar. Les documents et médicaments vont toujours en cabine, sans exception.</li>
      <li><strong>Diplômes non apostillés</strong> : une apostille prend 3 à 4 semaines en préfecture. La faire depuis l'étranger est long (ambassade comme intermédiaire). Si tu penses avoir besoin de travailler légalement au Vietnam, apostille avant de partir.</li>
      <li><strong>Sous-estimer la chaleur</strong> : les vêtements d'hiver prennent de la place et du poids pour rien si tu n'as pas de retours France prévus. Au Vietnam, les pièces climatisées peuvent être froides — un pull léger suffit.</li>
      <li><strong>Pas de carte bancaire de secours</strong> : si ta carte principale est bloquée, volée ou avalée par un DAB, avoir une deuxième carte sur soi (<a href="go.php?id=revolut" rel="noopener sponsored">Revolut</a> ou <a href="go.php?id=wise" rel="noopener sponsored">Wise</a> séparée) évite de se retrouver sans accès à son argent pendant 5 à 10 jours.</li>
      <li><strong>Pas de sauvegarde cloud des documents</strong> : passeport, visa, actes de naissance, contrat d'assurance — tout doit être scanné et accessible depuis un cloud sécurisé. Utile pour reconstituer un passeport perdu, prouver une identité en urgence, ou refaire une demande administrative depuis l'étranger.</li>
    </ul>
    <div class="tip-box">
      <strong>La règle des 3 :</strong>
      Chaque document important doit exister en 3 versions : original (valise cabine), photocopy papier (valise soute), scan numérique (cloud). Cette redondance peut te sauver la mise lors d'un vol, d'une perte ou d'une urgence administrative.
    </div>

    <?php
    $aff_id    = 'wise';
    $aff_icon  = '💸';
    $aff_title = 'Ouvre Wise avant de prendre l\'avion';
    $aff_text  = 'Transférer des euros vers le Vietnam au taux interbancaire, sans les frais abusifs des banques — et garder une réserve en euros accessible partout dans le monde. Indispensable dès les premiers jours sur place.';
    $aff_cta   = 'Créer un compte Wise';
    $aff_note  = 'Lien affilié — premier transfert offert si tu utilises mon lien. Aucun impact sur le service ni le prix pour toi.';
    $aff_theme = 'green';
    include '_affiliate-cta.php';
    ?>

    <h2 id="section-faq">Questions fréquentes</h2>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Combien de temps à l'avance faut-il préparer son départ pour le Vietnam ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Idéalement 3 mois. Certaines démarches prennent du temps : vaccins en plusieurs injections, apostille des diplômes (2–3 semaines en préfecture), casier judiciaire (5–10 jours), résiliation de bail (préavis 1 à 3 mois). Avec 1 mois seulement, c'est faisable mais stressant et certaines options (schéma vaccinal complet) ne sont plus disponibles.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Faut-il apporter beaucoup d'affaires ou peut-on tout trouver au Vietnam ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">La règle pratique : tout ce qui se rachète au Vietnam pour moins de 200 000 VND (~6,50€) n'a pas besoin d'être transporté. Les vêtements basiques, l'électronique courante, les meubles, les articles de cuisine — tout se trouve à Hanoï et HCMC. Ce qui vaut la peine d'apporter : médicaments sur ordonnance spécifiques, documents officiels, équipement professionnel spécialisé, lunettes/lentilles.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Faut-il apporter des euros en cash pour l'arrivée ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Oui, prévoir 200 à 500 euros en billets (ou USD équivalent). Sert pour le transport depuis l'aéroport, les premiers jours avant l'ouverture d'un compte bancaire local, et les achats urgents. Change dans une bijouterie agréée ou une banque — jamais à l'aéroport (taux 3 à 5% moins favorable qu'en ville).</div>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Cap Vietnam</h4>
        <p>Français installé à Hanoï avec ma femme vietnamienne. Cette checklist compile tout ce que j'aurais voulu savoir — et tout ce que j'ai oublié — avant mon départ de France en 2026.</p>
        <div class="author-links"><a href="a-propos-capvietnam.php">À propos →</a></div>
      </div>
    </div>

    <div class="cta-newsletter">
      <h3>Reçois les prochains guides</h3>
      <p>Démarches admin, finances, vie pratique au Vietnam — dans ta boîte mail.</p>
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
$current_slug = 'checklist-depart-installer-vietnam';
$current_cat  = 'admin';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
