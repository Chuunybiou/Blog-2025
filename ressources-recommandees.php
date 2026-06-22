<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Ressources recommandées — avocats, traducteurs, assurances | Cap Vietnam';
$page_description = 'Avocats en droit des étrangers, traducteurs assermentés français-vietnamien, assurances santé expat et ressources officielles recommandés pour les couples franco-vietnamiens.';
$page_canonical   = SITE_URL . '/ressources-recommandees';
$page_og_title    = 'Ressources recommandées pour couples franco-vietnamiens — Cap Vietnam';
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';

include 'header.php';
?>

<style>
.res-hero{background:linear-gradient(165deg,#0d2b1f 0%,#1b4a35 60%,#0d2b1f 100%);color:#fff;padding:5rem 2rem 4rem;text-align:center}
.res-hero-label{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:1rem;display:block}
.res-hero h1{font-family:'DM Serif Display',serif;font-size:clamp(2rem,4vw,2.8rem);margin-bottom:1rem;color:#faf8f4}
.res-hero p{color:rgba(250,248,244,0.6);max-width:600px;margin:0 auto;font-size:1.05rem;line-height:1.8}
.res-body{max-width:920px;margin:0 auto;padding:4rem 2rem 5rem}
.res-notice{background:rgba(27,107,82,0.07);border-left:3px solid #1b6b52;padding:1rem 1.5rem;border-radius:0 8px 8px 0;font-size:0.9rem;color:#333;margin-bottom:3.5rem;line-height:1.7}
.res-section{margin-bottom:4rem}
.res-section h2{font-family:'DM Serif Display',serif;font-size:1.65rem;color:var(--ink);margin-bottom:0.4rem;padding-bottom:0.75rem;border-bottom:2px solid var(--warm-bg)}
.res-section > p.res-intro{color:var(--muted);font-size:0.9rem;margin:0.75rem 0 1.5rem;line-height:1.7}
.res-grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:1.25rem}
.res-card{background:#fff;border:1px solid #e5e2dc;border-radius:10px;padding:1.5rem;transition:box-shadow 0.2s;display:flex;flex-direction:column}
.res-card:hover{box-shadow:0 4px 18px rgba(0,0,0,0.07)}
.res-card-icon{font-size:1.7rem;margin-bottom:0.75rem}
.res-card h3{font-size:1rem;font-weight:700;color:var(--ink);margin-bottom:0.4rem}
.res-card p{font-size:0.87rem;color:var(--muted);line-height:1.7;margin:0 0 1rem;flex:1}
.res-card a.res-link{font-size:0.85rem;font-weight:600;color:#1b6b52;text-decoration:none;display:inline-flex;align-items:center;gap:4px}
.res-card a.res-link:hover{text-decoration:underline}
.res-tag{display:inline-block;font-size:0.62rem;letter-spacing:1.5px;text-transform:uppercase;font-weight:700;padding:3px 10px;border-radius:3px;background:rgba(27,107,82,0.1);color:#1b6b52;margin-bottom:0.75rem}
.res-placeholder{background:var(--warm-bg);border:2px dashed #d4cfc7;border-radius:10px;padding:2rem;color:var(--muted);font-size:0.9rem;line-height:1.7}
.res-placeholder strong{color:var(--ink);display:block;margin-bottom:0.4rem}
.res-tip{font-size:0.84rem;color:var(--muted);margin-top:1rem;padding:0.75rem 1rem;background:var(--warm-bg);border-radius:6px}
.res-guide-cta{background:linear-gradient(135deg,#0d2b1f,#1b4a35);border-radius:12px;padding:2.5rem;text-align:center;margin-top:1rem}
.res-guide-cta h3{font-family:'DM Serif Display',serif;font-size:1.6rem;color:#faf8f4;margin-bottom:0.75rem}
.res-guide-cta p{color:rgba(250,248,244,0.55);max-width:500px;margin:0 auto 1.5rem;font-size:0.95rem}
.res-guide-cta a{display:inline-flex;align-items:center;gap:0.5rem;padding:0.85rem 1.8rem;background:#4db890;color:#0d2b1f;border-radius:5px;font-weight:700;font-size:0.95rem;text-decoration:none}
</style>

<header class="res-hero">
  <span class="res-hero-label">Cap Vietnam — annuaire</span>
  <h1>Ressources recommandées</h1>
  <p>Avocats, traducteurs, assurances, associations et liens officiels — les ressources que je recommande aux couples franco-vietnamiens pour leurs démarches.</p>
</header>

<div class="res-body">

  <div class="res-notice">
    <strong>Comment fonctionne cette page :</strong> Je ne référence que des ressources que j'ai personnellement vérifiées ou utilisées, ou dont la fiabilité est établie parmi les couples franco-vietnamiens. Je ne suis pas rémunéré pour la majorité des recommandations ci-dessous. Les liens commerciaux sont signalés explicitement. Cette page est mise à jour régulièrement.
  </div>

  <!-- ═══ AVOCATS ═══ -->
  <section class="res-section">
    <h2>⚖️ Avocats — droit des étrangers et famille internationale</h2>
    <p class="res-intro">Pour les situations complexes : recours contre un refus de visa, divorce international, questions de nationalité, problème de titre de séjour. Un avocat spécialisé peut faire la différence et éviter des erreurs irréversibles.</p>
    <div class="res-placeholder">
      <strong>Partenaire avocat — sélection en cours</strong>
      Je recherche un avocat spécialisé en droit des étrangers et droit de la famille internationale, avec une expérience vérifiée sur les dossiers franco-vietnamiens. Je publierai une recommandation dès qu'elle sera validée.
      <br><br>
      En attendant : l'annuaire du <a href="https://www.avocatparis.org" target="_blank" rel="noopener" style="color:#1b6b52">barreau de Paris</a> permet de rechercher un avocat par spécialité (filtre "droit des étrangers" ou "droit de la famille"). Pour les autres villes, chaque barreau dispose d'un annuaire équivalent.
    </div>
  </section>

  <!-- ═══ TRADUCTEURS ═══ -->
  <section class="res-section">
    <h2>📄 Traducteurs assermentés français–vietnamien</h2>
    <p class="res-intro">Indispensable pour les actes de naissance, actes de mariage et documents officiels à présenter à l'ambassade de France, au SCEC de Nantes ou à la préfecture. Seuls les traducteurs assermentés (experts judiciaires) sont acceptés par les administrations françaises.</p>
    <div class="res-grid">
      <div class="res-card">
        <div class="res-tag">Annuaire officiel</div>
        <div class="res-card-icon">🏛️</div>
        <h3>Cour d'appel de Paris</h3>
        <p>Liste officielle des experts traducteurs assermentés, classée par langue et par ville. La référence pour trouver un traducteur français-vietnamien reconnu par les juridictions françaises.</p>
        <a class="res-link" href="https://www.ca-paris.justice.fr/pages/experts-judiciaires-traducteurs" target="_blank" rel="noopener">Consulter la liste →</a>
      </div>
      <div class="res-card">
        <div class="res-tag">Annuaire national</div>
        <div class="res-card-icon">📋</div>
        <h3>Répertoire national des experts judiciaires</h3>
        <p>Tous les experts judiciaires en France, y compris les traducteurs assermentés. Recherche par langue et par région. Couvre les préfectures en dehors de Paris.</p>
        <a class="res-link" href="https://www.experts-judiciaires.fr" target="_blank" rel="noopener">Rechercher un traducteur →</a>
      </div>
    </div>
    <p class="res-tip">💡 Conseil pratique : demandez toujours un devis avant de confier un document. Compter environ 40–90€ par page pour un acte officiel traduit et certifié. Les délais varient de 3 jours à 3 semaines selon les traducteurs.</p>
  </section>

  <!-- ═══ ASSURANCES ═══ -->
  <section class="res-section">
    <h2>🏥 Assurances santé — expat et conjoint étranger</h2>
    <p class="res-intro">Pour les Français installés au Vietnam (avant affiliation à la CFE) et pour les conjoints vietnamiens pendant leurs premiers mois en France (avant affiliation à la CPAM).</p>
    <div class="res-grid">
      <div class="res-card">
        <div class="res-tag">Français à l'étranger · Officiel</div>
        <div class="res-card-icon">🛡️</div>
        <h3>CFE — Caisse des Français de l'Étranger</h3>
        <p>La sécurité sociale volontaire pour les Français vivant hors de France. Remboursements selon le barème de la Sécu française. Recommandé si vous avez encore un médecin traitant ou des soins à suivre en France.</p>
        <a class="res-link" href="https://www.cfe.fr" target="_blank" rel="noopener">Site de la CFE →</a>
      </div>
      <div class="res-card">
        <div class="res-tag">Assurance internationale</div>
        <div class="res-card-icon">🌏</div>
        <h3>April International</h3>
        <p>Assurance santé internationale pour expatriés. Couverture France et Vietnam, comparateur en ligne, plusieurs niveaux de garantie. Devis gratuit et immédiat sur leur site.</p>
        <a class="res-link" href="https://www.april-international.com" target="_blank" rel="noopener sponsored">Obtenir un devis →</a>
      </div>
      <div class="res-card">
        <div class="res-tag">Voyage et expatriation</div>
        <div class="res-card-icon">✈️</div>
        <h3>Chapka Assurances</h3>
        <p>Assurance voyage et expatriation adaptée aux séjours au Vietnam. Bonne option pour les premières semaines ou les allers-retours fréquents France–Vietnam avant une installation définitive.</p>
        <a class="res-link" href="https://www.chapkassurances.fr" target="_blank" rel="noopener">Voir les offres Chapka →</a>
      </div>
    </div>
  </section>

  <!-- ═══ APPRENDRE LE FRANÇAIS ═══ -->
  <section class="res-section">
    <h2>🗣️ Apprendre le français — ressources gratuites</h2>
    <p class="res-intro">Pour la conjointe vietnamienne qui prépare son arrivée en France. Le niveau A2 est requis pour la carte de résidence (10 ans). Ces ressources sont gratuites et officielement reconnues.</p>
    <div class="res-grid">
      <div class="res-card">
        <div class="res-tag">Gratuit · Dès le début</div>
        <div class="res-card-icon">📺</div>
        <h3>TV5Monde Apprendre</h3>
        <p>La plateforme gratuite de référence pour apprendre le français. Exercices classés du niveau A1 au C2, vidéos avec sous-titres, podcasts, quiz. 100% gratuit, sans inscription obligatoire.</p>
        <a class="res-link" href="https://apprendre.tv5monde.com" target="_blank" rel="noopener">Accéder à TV5Monde →</a>
      </div>
      <div class="res-card">
        <div class="res-tag">Certification officielle</div>
        <div class="res-card-icon">🎓</div>
        <h3>DELF / DALF</h3>
        <p>Les certifications officielles de français reconnues dans le monde entier. Le DELF A2 est le minimum requis pour la carte de résidence. Préparation possible via l'Alliance Française à Hanoï ou HCMV.</p>
        <a class="res-link" href="https://www.france-education-international.fr/delf-dalf" target="_blank" rel="noopener">En savoir plus sur le DELF →</a>
      </div>
      <div class="res-card">
        <div class="res-tag">Cours en présentiel · Vietnam</div>
        <div class="res-card-icon">🏫</div>
        <h3>Alliance Française au Vietnam</h3>
        <p>Centres à Hanoï et Hô Chi Minh-Ville. Cours en présentiel du niveau A1 au C2, examens DELF sur place, médiathèque. La meilleure option pour apprendre avec une structure pédagogique en restant au Vietnam.</p>
        <a class="res-link" href="https://www.afhcm.org" target="_blank" rel="noopener">Alliance Française HCMV →</a>
      </div>
    </div>
  </section>

  <!-- ═══ ASSOCIATIONS ═══ -->
  <section class="res-section">
    <h2>🤝 Associations franco-vietnamiennes</h2>
    <p class="res-intro">Pour créer du lien avec d'autres couples mixtes, trouver des événements culturels ou ne pas être seul dans ses démarches d'installation en France.</p>
    <div class="res-grid">
      <div class="res-card">
        <div class="res-tag">France · Réseau national</div>
        <div class="res-card-icon">🇫🇷</div>
        <h3>UGVF — Union Générale des Vietnamiens de France</h3>
        <p>La principale association de Vietnamiens en France, fondée en 1919. Réseau de sections régionales, événements culturels, soutien aux nouveaux arrivants et aux étudiants.</p>
        <a class="res-link" href="https://www.ugvf.fr" target="_blank" rel="noopener">Site de l'UGVF →</a>
      </div>
      <div class="res-card">
        <div class="res-tag">France · Échanges culturels</div>
        <div class="res-card-icon">🌸</div>
        <h3>Association des Amis du Vietnam</h3>
        <p>Échanges culturels franco-vietnamiens, événements, soutien aux familles mixtes. Présente dans plusieurs villes françaises. Bonne porte d'entrée pour trouver une communauté locale.</p>
        <a class="res-link" href="https://www.amisvietnam.org" target="_blank" rel="noopener">Site de l'AAV →</a>
      </div>
    </div>
  </section>

  <!-- ═══ RESSOURCES OFFICIELLES ═══ -->
  <section class="res-section">
    <h2>🏛️ Ressources officielles — démarches administratives</h2>
    <p class="res-intro">Les sites à consulter en priorité avant toute démarche. Ces informations sont gratuites, à jour et font foi. Un forum ou un groupe Facebook ne remplacent pas ces sources.</p>
    <div class="res-grid">
      <div class="res-card">
        <div class="res-card-icon">🇫🇷</div>
        <h3>Service-Public.fr</h3>
        <p>Le portail officiel de l'administration française. Titre de séjour, naturalisation, CAF, CPAM, regroupement familial — toutes les procédures officielles y sont décrites, avec les formulaires à jour.</p>
        <a class="res-link" href="https://www.service-public.fr" target="_blank" rel="noopener">Accéder à Service-Public →</a>
      </div>
      <div class="res-card">
        <div class="res-card-icon">💻</div>
        <h3>ANEF — Administration Numérique pour les Étrangers</h3>
        <p>La plateforme officielle pour toutes les demandes de titres de séjour en France. Pré-demandes, suivi de dossier, renouvellements — tout se fait ici depuis 2021.</p>
        <a class="res-link" href="https://administration-etrangers-en-france.interieur.gouv.fr" target="_blank" rel="noopener">Accéder à l'ANEF →</a>
      </div>
      <div class="res-card">
        <div class="res-card-icon">🏥</div>
        <h3>OFII — Office Français de l'Immigration</h3>
        <p>Gère la validation du VLS-TS à l'arrivée en France, la visite médicale, les cours de français obligatoires (Contrat d'Intégration Républicaine), et le titre de séjour initial.</p>
        <a class="res-link" href="https://www.ofii.fr" target="_blank" rel="noopener">Site de l'OFII →</a>
      </div>
      <div class="res-card">
        <div class="res-card-icon">📍</div>
        <h3>SCEC — Nantes</h3>
        <p>Service Central d'État Civil. Transcription des actes de mariage célébrés à l'étranger sur les registres français. Étape indispensable après un mariage civil au Vietnam.</p>
        <a class="res-link" href="https://www.diplomatie.gouv.fr/fr/services-aux-citoyens/etat-civil-et-identite/etat-civil/" target="_blank" rel="noopener">Informations SCEC →</a>
      </div>
      <div class="res-card">
        <div class="res-card-icon">🇻🇳</div>
        <h3>Ambassade de France au Vietnam</h3>
        <p>Informations officielles sur les visas (VLS-TS, visa conjoint), la CCAM (certificat de capacité à mariage), les inscriptions consulaires et l'état civil.</p>
        <a class="res-link" href="https://vn.ambafrance.org" target="_blank" rel="noopener">Ambassade France à Hanoï →</a>
      </div>
      <div class="res-card">
        <div class="res-card-icon">📋</div>
        <h3>CESEDA — Code de l'entrée et du séjour</h3>
        <p>Le texte de loi de référence sur le séjour des étrangers en France. Pour vérifier vos droits dans les textes. Version consolidée disponible gratuitement sur Légifrance.</p>
        <a class="res-link" href="https://www.legifrance.gouv.fr/codes/id/LEGITEXT000006070158" target="_blank" rel="noopener">Consulter le CESEDA →</a>
      </div>
    </div>
  </section>

  <!-- CTA Guide -->
  <div class="res-guide-cta">
    <p style="font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:0.75rem">Guide gratuit</p>
    <h3>Guide complet — Se marier et vivre au Vietnam</h3>
    <p>Visa, CCAM, mariage civil, vie à Hanoï, finances — tout en un seul guide gratuit, basé sur le vécu.</p>
    <a href="guide-cap-vietnam-2026">Accéder au guide gratuit →</a>
  </div>

</div>

<?php include 'footer.php'; ?>
