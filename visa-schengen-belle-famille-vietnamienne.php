<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Visa Schengen pour la belle-famille vietnamienne : guide pratique 2026';
$page_description = 'Faire venir les parents ou proches vietnamiens en France ? Le visa Schengen pour la belle-famille vietnamienne est exigeant. Voici comment monter un dossier solide pour maximiser les chances.';
$page_canonical   = SITE_URL . '/visa-schengen-belle-famille-vietnamienne';
$page_og_title    = 'Visa Schengen belle-famille vietnamienne : comment ça marche en 2026 ?';
$page_og_desc     = 'Invitation, attestation d\'hébergement, dossier financier : tout ce qu\'il faut savoir pour faire venir sa belle-famille vietnamienne en France.';
$page_og_url      = SITE_URL . '/visa-schengen-belle-famille-vietnamienne';
$page_og_image    = 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Visa Schengen pour la belle-famille vietnamienne : guide pratique 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/visa-schengen-belle-famille-vietnamienne',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vivre ensemble : ici ou là-bas',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'jade';
$article_hero_bg      = '#1a3a2a';
$article_glow         = 'rgba(27,107,82,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Vivre ensemble';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vivre-ensemble';
$page_faq = [
  ['q' => 'Quel est le taux de refus de visa Schengen pour les Vietnamiens ?',
   'a' => 'Le taux de refus pour les ressortissants vietnamiens est parmi les plus élevés d\'Asie du Sud-Est. Les chiffres officiels sont publiés par la Commission européenne (ec.europa.eu/home-affairs) et varient selon les années et les postes. Un dossier solide reste indispensable.'],
  ['q' => 'Est-ce que l\'attestation d\'accueil est obligatoire ?',
   'a' => 'Non, mais elle est fortement conseillée si les parents logent chez vous. Elle est établie par la mairie de ton domicile en France (timbre fiscal : 30 €) et prouve officiellement que tu te portes garant de l\'accueil. Validité : 1 an.'],
  ['q' => 'Combien de temps à l\'avance faut-il déposer la demande de visa ?',
   'a' => 'La demande peut être déposée jusqu\'à 6 mois avant le départ prévu. Le délai de traitement officiel est de 15 jours ouvrés, mais prévois 3 à 4 semaines de marge en haute saison (juin-août, décembre).'],
  ['q' => 'Peut-on faire venir la belle-famille pour un mariage en France ?',
   'a' => 'Oui, et une invitation à un mariage peut être un motif de visa recevable. Dans ce cas, inclus dans le dossier une preuve de la cérémonie (faire-part, attestation du lieu de réception…) et une lettre d\'invitation personnalisée.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=vivre-ensemble">Vivre ensemble</a><span class="breadcrumb-sep">›</span>
      <a href="faire-venir-conjointe-vietnamienne-france">Conjoint vietnamien en France</a><span class="breadcrumb-sep">›</span>
      <span>Visa Schengen belle-famille</span>
    </div>
    <span class="article-badge-hero">Vivre ensemble</span>
    <h1>Visa Schengen pour la belle-famille vietnamienne : dossier et conseils 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 8 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi c'est compliqué</a></li>
      <li><a href="#section-2">Qui peut demander ?</a></li>
      <li><a href="#section-3">Le dossier côté Vietnam</a></li>
      <li><a href="#section-4">Le dossier côté France</a></li>
      <li><a href="#section-5">L'attestation d'accueil</a></li>
      <li><a href="#section-6">Le dépôt via VFS Global</a></li>
      <li><a href="#section-7">En cas de refus</a></li>
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
    <p><strong>Faire venir ses beaux-parents vietnamiens en France, c'est un désir légitime — et un vrai parcours du combattant.</strong> Le taux de refus de visa Schengen pour les Vietnamiens est élevé, et les agents consulaires sont attentifs aux dossiers qui présentent un risque d'immigration irrégulière. Ce guide t'aide à construire un dossier solide qui répond aux attentes du consulat.</p>

    <p>Cet article fait partie du <a href="faire-venir-conjointe-vietnamienne-france">guide complet : faire venir son conjoint vietnamien en France</a>.</p>

    <h2 id="section-1">Pourquoi le visa Schengen est difficile à obtenir pour les Vietnamiens</h2>
    <p>Le visa Schengen de court séjour (type C, 90 jours max dans l'espace Schengen) est délivré pour des visites privées, du tourisme, ou des séjours familiaux. Pour les ressortissants vietnamiens, les critères sont stricts car le consulat cherche à éviter :</p>
    <ul>
      <li>Le maintien illégal sur le territoire après expiration du visa</li>
      <li>L'utilisation du visa court séjour pour s'installer durablement</li>
      <li>Les fausses déclarations de motif</li>
    </ul>
    <p>Un profil "à risque" aux yeux du consulat : personne âgée, peu de ressources propres, peu d'attaches économiques ou familiales au Vietnam. C'est souvent le profil des parents vietnamiens — d'où l'importance d'un dossier irréprochable.</p>

    <h2 id="section-2">Qui peut déposer la demande ?</h2>
    <p>La demande de visa est déposée par le demandeur vietnamien lui-même (les beaux-parents) auprès du consulat français compétent via VFS Global. En tant que garant en France, tu fournis un dossier d'invitation et d'hébergement.</p>
    <p>Le visa court séjour "visite privée" est la catégorie appropriée. La durée maximale est de 90 jours sur une période de 180 jours.</p>

    <h2 id="section-3">Le dossier côté Vietnam (le demandeur)</h2>

    <div style="overflow-x:auto;border-radius:10px;border:1px solid rgba(77,200,160,0.18);margin:1.5rem 0;">
    <table style="width:100%;border-collapse:collapse;font-size:0.9rem;">
      <thead>
        <tr style="background:rgba(27,107,82,0.25);">
          <th style="padding:0.7rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;width:42%;">DOCUMENT</th>
          <th style="padding:0.7rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">REMARQUE</th>
        </tr>
      </thead>
      <tbody>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Passeport valide</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Validité min <strong>3 mois après la date de retour</strong> prévue</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Photos d'identité biométriques</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Format Schengen réglementaire</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Formulaire de demande de visa Schengen</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Disponible sur le site du consulat / VFS Global</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Preuve d'attachement au Vietnam</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Titre de propriété, livret de retraite, actes de naissance d'autres enfants restés au Vietnam…</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Justificatifs de ressources propres (si dispo.)</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Relevés bancaires des 3 derniers mois, pension de retraite…</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Assurance voyage</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Couverture min <strong>30 000 €</strong> · espace Schengen · toute la durée</td>
        </tr>
        <tr>
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Billets d'avion (aller-retour)</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Recommandé : preuve de réservation non-remboursable</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-4">Le dossier côté France (toi, le garant)</h2>

    <div style="overflow-x:auto;border-radius:10px;border:1px solid rgba(77,200,160,0.18);margin:1.5rem 0;">
    <table style="width:100%;border-collapse:collapse;font-size:0.9rem;">
      <thead>
        <tr style="background:rgba(27,107,82,0.25);">
          <th style="padding:0.7rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;width:42%;">DOCUMENT</th>
          <th style="padding:0.7rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">REMARQUE</th>
        </tr>
      </thead>
      <tbody>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Lettre d'invitation personnalisée</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Expliquer le lien familial, la durée du séjour, les activités prévues</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Attestation d'accueil (mairie)</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">30 € (timbre fiscal) · délivrée par ta mairie · valable 1 an</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Copie de ta CNI ou passeport</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">—</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Justificatif de domicile</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Facture de moins de 3 mois</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">3 derniers bulletins de salaire</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Prouve ta capacité à subvenir aux besoins des visiteurs</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Acte de mariage avec ton conjoint vietnamien</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Prouve le lien familial avec les demandeurs</td>
        </tr>
        <tr>
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Titre de séjour de ton conjoint</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Si ton conjoint est déjà en France</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-5">L'attestation d'accueil : comment l'obtenir</h2>
    <p>L'<strong>attestation d'accueil</strong> (terme légal exact — ne pas confondre avec "attestation d'hébergement") est un document officiel délivré par la mairie de ta commune de résidence. Elle certifie que tu t'engages à accueillir et héberger les demandeurs à ton domicile pendant leur séjour.</p>
    <p>Pour l'obtenir :</p>
    <ol>
      <li>Rends-toi à la mairie de ton domicile (ou utilise le service en ligne si disponible)</li>
      <li>Apporte : ta pièce d'identité, un justificatif de domicile, les informations sur les personnes invitées (nom, prénom, date de naissance, numéro de passeport)</li>
      <li>Paye le timbre fiscal : <strong>30 €</strong> par attestation</li>
    </ol>
    <p>L'attestation est délivrée sur place ou dans un délai de quelques jours. Elle est valable <strong>1 an</strong>.</p>

    <div class="tip-box">
      <strong>Surface habitable :</strong> La mairie vérifie que ton logement est suffisamment grand. La norme réglementaire (Code de l'action sociale et des familles, art. R.211-12) est d'environ <strong>9 m²</strong> pour la première personne hébergée, puis <strong>7 m² par personne supplémentaire</strong>. Certaines mairies appliquent des critères locaux légèrement différents.
    </div>

    <h2 id="section-6">Le dépôt via VFS Global et les délais</h2>
    <p>Le dépôt se fait au centre VFS Global compétent au Vietnam — consulter la liste à jour des centres sur <a href="https://www.vfsglobal.com/france/vietnam/" target="_blank" rel="noopener">vfsglobal.com/france/vietnam</a>. La prise de rendez-vous se fait en ligne.</p>
    <p>Frais :</p>
    <ul>
      <li>Droits de visa Schengen : <strong>90 €</strong> (non remboursable en cas de refus)</li>
      <li>Frais de service VFS Global : consulter <a href="https://www.vfsglobal.com/france/vietnam/" target="_blank" rel="noopener">vfsglobal.com/france/vietnam</a></li>
    </ul>
    <p>Délai de traitement : <strong>15 jours ouvrés</strong> officiellement, mais prévois <strong>3 à 4 semaines</strong> en haute saison (juin-août, décembre).</p>

    <h2 id="section-7">Que faire en cas de refus ?</h2>
    <p>Un refus de visa Schengen mentionne un motif parmi une liste de codes standard (ressources insuffisantes, doute sur le retour, dossier incomplet…). Tu peux :</p>
    <ul>
      <li>Saisir la <strong>Commission de recours contre les refus de visa (CRRV)</strong> dans un délai de <strong>2 mois</strong> (recours préalable obligatoire avant tout recours contentieux)</li>
      <li>Redéposer un dossier renforcé après avoir corrigé les points faibles identifiés dans le refus</li>
      <li>Attendre quelques mois et redéposer : un historique de visas accordés précédemment joue positivement</li>
    </ul>
    <p>Si les beaux-parents ont déjà voyagé (autres pays d'Asie, Europe, Amérique), mentionner les voyages précédents et les visas obtenus peut aider.</p>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="cta-newsletter">
      <h3>Reçois mes prochains articles</h3>
      <p>Un email par mois. Désabonnement en un clic.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a>.</p>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français marié à une Vietnamienne, installé à Hanoï. Je partage notre parcours : démarches administratives, mariage franco-vietnamien, vie de couple mixte.</p>
        <div class="author-links">
          <a href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">TikTok</a>
          <a href="a-propos-capvietnam">À propos</a>
        </div>
      </div>
    </div>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
require_once __DIR__ . '/config/site.php';
$current_slug = 'visa-schengen-belle-famille-vietnamienne';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
