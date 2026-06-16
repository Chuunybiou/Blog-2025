<?php
$page_title       = 'Quitter le Canada pour le Vietnam — Cap Vietnam';
$page_description = 'Ce qu\'il faut régler avant de quitter le Canada pour le Vietnam : résidence fiscale, comptes bancaires, permis de travail et démarches Service Canada.';
$page_canonical   = 'https://blog-capvietnam.fr/quitter-canada-expat-vietnam';
$page_og_title    = 'Quitter le Canada pour le Vietnam : le guide complet';
$page_og_desc     = 'Toutes les démarches administratives pour quitter le Canada et s\'installer au Vietnam.';
$page_og_url      = 'https://blog-capvietnam.fr/quitter-canada-expat-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1488085061387-422e29b40080?w=1200&q=80';
$page_schema      = '{"@context":"https://schema.org","@type":"BlogPosting","headline":"Quitter le Canada pour le Vietnam : guide complet","datePublished":"2026-04-01","dateModified":"2026-04-01","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://blog-capvietnam.fr/a-propos"},"publisher":{"@type":"Organization","name":"Anthony Bouillon","logo":{"@type":"ImageObject","url":"https://blog-capvietnam.fr/logo-entreprise.png"}},"image":"https://images.unsplash.com/photo-1488085061387-422e29b40080?w=1200&q=80","description":"Toutes les demarches administratives pour quitter le Canada et installer au Vietnam.","timeRequired":"PT10M","inLanguage":"fr","url":"https://blog-capvietnam.fr/quitter-canada-expat-vietnam"}';

$article_color   = 'terracotta';
$article_hero_bg = '#3a1a0a';
$article_glow    = 'rgba(191,74,42,0.15)';
$article_badge   = 'rgba(191,74,42,0.2)';
$article_badge_c = 'var(--terracotta-soft)';

$article_category     = 'Démarches Admin';
$article_category_url = 'https://blog-capvietnam.fr/articles-capvietnam';
$page_faq = [
  ['q' => 'Dois-je déclarer mes revenus vietnamiens au Canada ?',
   'a' => 'Si tu n\'es plus résident fiscal canadien, tu ne déclares tes revenus étrangers au Canada que s\'ils ont une source canadienne. Tes revenus gagnés au Vietnam n\'ont aucune source canadienne et ne sont donc pas imposables au Canada une fois ta résidence fiscale coupée.'],
  ['q' => 'Que faire avec mon REER ?',
   'a' => 'Tu peux laisser ton REER actif au Canada sans le retirer. Les gains à l\'intérieur du REER ne sont pas imposés tant que tu n\'effectues pas de retraits. Si tu retires des fonds depuis l\'étranger, une retenue à la source de 25% s\'applique (réduite selon les conventions fiscales).'],
  ['q' => 'Mon NAS (numéro d\'assurance sociale) reste-t-il valide ?',
   'a' => 'Oui, ton NAS reste valide indéfiniment. Il n\'expire pas lorsque tu quittes le Canada. Tu en auras besoin si tu retournes travailler au Canada à l\'avenir.'],
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
      <span>Quitter le Canada</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Quitter le Canada pour le Vietnam : impôts, banque et permis de travail</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 5 avril 2026</span>
      <span>⏱ 10 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Prévenir les administrations</a></li>
      <li><a href="#section-2">Résidence fiscale canadienne</a></li>
      <li><a href="#section-3">Comptes bancaires</a></li>
      <li><a href="#section-4">Permis de travail et statut</a></li>
      <li><a href="#section-5">Checklist de départ</a></li>
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
    <p><strong>Quitter le Canada, ce n'est pas juste acheter un billet d'avion.</strong> Il y a une série de démarches administratives à régler avant de partir, sous peine de continuer à payer des impôts canadiens depuis Hanoï, ou de perdre l'accès à tes comptes bancaires. Voici tout ce que j'ai dû faire avant mon départ.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1488085061387-422e29b40080?w=1200&q=80" alt="Passeport et valise de voyage" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Prévenir les administrations canadiennes</h2>
    <p>La première étape est d'informer les organismes gouvernementaux de ton départ. Service Canada est le point d'entrée principal. Si tu reçois des prestations (assurance-emploi, pension, crédit TPS/TVH), tu dois signaler ton départ du Canada et la perte de résidence.</p>
    <p>L'Agence du revenu du Canada (ARC) doit également être notifiée. Tu devras produire une <strong>déclaration de revenus de départ</strong> pour l'année où tu quittes le Canada, en indiquant la date exacte de ton départ. C'est cette date qui détermine la fin de ta résidence fiscale canadienne.</p>
    <div class="info-box">
      <strong>📋 Organismes à contacter :</strong>
      Agence du revenu du Canada (ARC), Service Canada (assurance-emploi, RPC), Régie de l'assurance maladie de la province (RAMQ au Québec), CNESST si tu avais des indemnités en cours.
    </div>

    <h2 id="section-2">La résidence fiscale canadienne</h2>
    <p>Ce point est crucial et souvent mal compris. Le Canada utilise le concept de <strong>résidence fiscale</strong> basée sur les liens que tu maintiens avec le pays — pas simplement sur ta présence physique.</p>
    <p>Selon l'ARC, les <em>liens significatifs</em> qui maintiennent ta résidence fiscale canadienne incluent : un conjoint ou des personnes à charge restés au Canada, une résidence principale conservée, des comptes bancaires canadiens actifs, ou un permis de conduire provincial valide. Si tu coupes ces liens, tu peux devenir non-résident fiscal à la date de ton départ.</p>
    <div class="warning-box">
      <strong>⚠️ Convention fiscale Canada-Vietnam :</strong>
      Le Canada et le Vietnam ont signé une convention fiscale en 1997. Elle évite la double imposition mais ne t'exonère pas automatiquement d'impôts canadiens si tu maintiens des liens de résidence. Consulte un comptable spécialisé en fiscalité internationale avant ton départ.
    </div>
    <p>En pratique, pour établir clairement ta non-résidence : ferme ou convertis tes comptes bancaires canadiens, résilie ton bail, rends ta carte d'assurance-maladie provinciale, et remplis le formulaire <strong>NR73</strong> (Détermination du statut de résidence) si tu veux une confirmation officielle de l'ARC.</p>

    <h2 id="section-3">Les comptes bancaires canadiens</h2>
    <p>Fermer tous tes comptes avant de partir n'est pas obligatoire, mais conserver un compte actif au Canada peut te maintenir comme résident fiscal. Voici tes options :</p>
    <ul>
      <li><strong>Fermer le compte</strong> : la solution propre qui coupe le lien fiscal.</li>
      <li><strong>Garder un compte non-résident</strong> : certaines banques (RBC, TD, BMO) permettent de convertir un compte en statut "non-résident". Les revenus d'intérêts sont alors soumis à une retenue à la source de 25% (réduite à 15% selon la convention Canada-Vietnam).</li>
      <li><strong><a href="go.php?id=wise" rel="noopener sponsored">Wise</a> ou <a href="go.php?id=revolut" rel="noopener sponsored">Revolut</a></strong> : avant de fermer, ouvre un compte Wise pour recevoir et envoyer de l'argent sans frais bancaires internationaux.</li>
    </ul>
    <div class="tip-box">
      <strong>💡 Conseil pratique :</strong>
      Garde un compte canadien pendant 3 à 6 mois après ton départ pour recevoir les derniers remboursements (ARC, dépôts de garantie, etc.), puis ferme-le proprement en envoyant le solde par virement Wise.
    </div>

    <h2 id="section-4">Permis de travail et statut d'immigration</h2>
    <p>Si tu étais titulaire d'un permis de travail ouvert (comme le PVT ou un permis post-diplôme), il expirera automatiquement à ta sortie du Canada. Tu n'as aucune démarche à faire pour l'annuler — il suffit de quitter le territoire.</p>
    <p>Si tu étais en cours de demande de résidence permanente, la situation est plus complexe. Une demande de RP en cours ne t'oblige pas à rester au Canada, mais certains statuts (comme le PR déjà obtenu) exigent une présence minimale de 730 jours sur 5 ans. Si tu pars sans ce quota rempli, tu risques de perdre ta résidence permanente.</p>
    <div class="warning-box">
      <strong>⚠️ Résidence permanente :</strong>
      Si tu es résident permanent canadien et que tu pars pour le Vietnam pour plus de 3 ans, tu perdras probablement ton statut. Pèse bien cette décision — la RP canadienne est difficile à obtenir et très précieuse.
    </div>

    <h2 id="section-5">Checklist complète avant le départ</h2>
    <ul>
      <li>☑ Déclaration de départ auprès de l'ARC (formulaire T1161 si actifs > 25 000 $)</li>
      <li>☑ Annulation ou conversion de l'assurance-maladie provinciale</li>
      <li>☑ Résiliation du bail ou vente du logement</li>
      <li>☑ Fermeture ou conversion des comptes bancaires</li>
      <li>☑ Résiliation de l'abonnement téléphonique canadien</li>
      <li>☑ Transfert des derniers remboursements (ARC, dépôts de garantie)</li>
      <li>☑ Vérification du statut d'immigration (permis, RP)</li>
      <li>☑ Mise à jour de l'adresse auprès de toutes les institutions</li>
      <li>☑ Souscription à une assurance santé internationale avant le départ</li>
      <li>☑ Ouverture d'un compte Wise pour les transferts internationaux</li>
    </ul>

    <h2 id="section-6">Santé : la transition entre RAMQ et assurance privée</h2>
    <p>La Régie de l'assurance maladie du Québec (RAMQ) — ou son équivalent provincial — cesse de couvrir à la date où tu quittes formellement la province. La plupart des provinces exigent une absence d'au moins 183 jours consécutifs hors Canada pour mettre fin à la couverture. Voici comment gérer la transition :</p>
    <ul>
      <li><strong>Avant le départ</strong> : obtiens une attestation de bonne santé et fais le point sur tes prescriptions médicales. Stock 3 à 6 mois de médicaments si possible — certains médicaments courants en France ou au Canada sont indisponibles au Vietnam.</li>
      <li><strong>Assurance de transition</strong> : souscris une assurance voyage/expat avant de quitter le Canada. La couverture doit démarrer au moment du départ, sans délai de carence. World Nomads, Cigna Global et la CFE (si tu as des droits en France) sont des options solides.</li>
      <li><strong>Délai de résiliation RAMQ</strong> : au Québec, tu dois signaler ton départ à la RAMQ par écrit et rendre ta carte. Les soins après la résiliation ne sont plus couverts.</li>
    </ul>
    <div class="warning-box">
      <strong>⚠️ Attention aux délais de carence :</strong>
      Certaines assurances internationales ont des délais de carence de 30 à 90 jours pour les maladies préexistantes. Souscris bien avant ton départ, pas depuis Hanoï.
    </div>

    <h2 id="section-7">Les cartes de crédit et les points fidélité</h2>
    <p>Les cartes de crédit canadiennes (Visa, Mastercard) fonctionnent au Vietnam dans les hôtels, les restaurants internationaux et les centres commerciaux. Quelques points importants :</p>
    <ul>
      <li><strong>Frais de transaction étrangère</strong> : la plupart des cartes canadiennes facturent 2,5% de frais sur les transactions en devises étrangères. Avant de partir, ouvre une carte sans frais de transaction étrangère : la Scotiabank Passport Visa Infinite ou la HSBC World Elite Mastercard sont des options reconnues.</li>
      <li><strong>Points fidélité Aeroplan, Air Miles</strong> : ils restent utilisables depuis l'étranger. Les billets de retour Canada–Vietnam coûtent 120 000 à 250 000 points Aeroplan selon la classe — valorise-les avant de les laisser expirer.</li>
      <li><strong>Crédit au Canada depuis l'étranger</strong> : ne pas utiliser ses cartes pendant plusieurs années peut mener à leur fermeture automatique. Une petite transaction mensuelle suffit à maintenir le compte actif.</li>
    </ul>

    <h2 id="section-8">Rapatriement de biens et logistique déménagement</h2>
    <p>Si tu pars de façon définitive (ou pour plusieurs années), la question du mobilier et des affaires se pose. Options pratiques depuis le Canada :</p>
    <ul>
      <li><strong>Vente / don avant départ</strong> : Facebook Marketplace Canada est très actif. Compte 2 à 4 semaines pour tout liquider selon le volume.</li>
      <li><strong>Box de stockage</strong> : pour les objets de valeur sentimentale ou les équipements professionnels. Coût mensuel : 80 à 200 CAD selon la taille et la ville.</li>
      <li><strong>Conteneur maritime</strong> : pour un déménagement complet, un conteneur 20 pieds Canada–Vietnam coûte 3 000 à 6 000 USD. Délai : 25 à 40 jours. Rarement justifié si tu viens d'un appartement — le mobilier vietnamien est bon marché et abondant.</li>
      <li><strong>Excédent de bagages</strong> : Air Canada et Vietnam Airlines permettent jusqu'à 2 bagages enregistrés sur leurs vols directs. Au-delà, 100 à 200 CAD par pièce supplémentaire.</li>
    </ul>
    <div class="tip-box">
      <strong>💡 Ce qui vaut le coup d'emporter :</strong>
      Matériel électronique (le Canada a les meilleures offres), médicaments sur ordonnance, vêtements de travail, matériel de sport spécialisé. Laisse le mobilier, l'électroménager, les livres papier.
    </div>

    <h2 id="section-faq">Questions fréquentes</h2>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Dois-je déclarer mes revenus vietnamiens au Canada ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Si tu n'es plus résident fiscal canadien, tu ne déclares tes revenus étrangers au Canada que s'ils ont une source canadienne. Tes revenus gagnés au Vietnam n'ont aucune source canadienne et ne sont donc pas imposables au Canada une fois ta résidence fiscale coupée.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Que faire avec mon REER ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Tu peux laisser ton REER actif au Canada sans le retirer. Les gains à l'intérieur du REER ne sont pas imposés tant que tu n'effectues pas de retraits. Si tu retires des fonds depuis l'étranger, une retenue à la source de 25% s'applique (réduite selon les conventions fiscales).</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Mon NAS (numéro d'assurance sociale) reste-t-il valide ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Oui, ton NAS reste valide indéfiniment. Il n'expire pas lorsque tu quittes le Canada. Tu en auras besoin si tu retournes travailler au Canada à l'avenir.</div>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
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
$current_slug = 'quitter-canada-expat-vietnam';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
