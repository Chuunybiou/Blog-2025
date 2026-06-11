<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Transcription mariage au SCEC de Nantes : dossier et délais 2026';
$page_description = 'Comment faire transcrire ton mariage vietnamien au Service Central d\'État Civil de Nantes ? Documents requis, délais de traitement et erreurs à éviter pour une transcription réussie.';
$page_canonical   = SITE_URL . '/transcription-mariage-service-central-nantes';
$page_og_title    = 'Transcription du mariage à Nantes : comment ça marche en 2026 ?';
$page_og_desc     = 'Guide pratique pour faire transcrire ton mariage célébré au Vietnam au Service Central d\'État Civil de Nantes. Délais, documents, recours.';
$page_og_url      = SITE_URL . '/transcription-mariage-service-central-nantes';
$page_og_image    = 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Transcription mariage au SCEC de Nantes : dossier et délais 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/transcription-mariage-service-central-nantes',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Démarches Administratives',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'terracotta';
$article_hero_bg      = '#3a1a0e';
$article_glow         = 'rgba(191,74,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Démarches Admin';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'La transcription du mariage à Nantes est-elle obligatoire pour vivre en France ?',
   'a' => 'Oui, si tu veux demander un visa "conjoint de Français" pour ton partenaire vietnamien. La transcription inscrit votre mariage dans les registres français et en fait la preuve légale en France.'],
  ['q' => 'Peut-on initier la transcription depuis le Vietnam ?',
   'a' => 'Oui. La demande peut être transmise par courrier depuis le Vietnam ou déposée via le consulat français compétent. Elle peut aussi être initiée par le partenaire français directement depuis la France. Il n\'est pas nécessaire d\'être en France en personne.'],
  ['q' => 'Quel est le délai de traitement à Nantes ?',
   'a' => 'Le délai officiel est de [À VÉRIFIER] mois, mais les délais réels constatés sont souvent plus longs selon les périodes de forte activité. En cas d\'urgence absolue, un traitement accéléré peut être demandé mais reste exceptionnel.'],
  ['q' => 'Que faire si Nantes refuse la transcription ?',
   'a' => 'Le refus doit être motivé. Tu peux déposer un recours auprès du procureur de la République, qui dispose d\'un délai de [À VÉRIFIER] mois pour répondre. En cas de refus confirmé, un recours judiciaire devant le tribunal judiciaire est possible.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Démarches Administratives</a><span class="breadcrumb-sep">›</span>
      <a href="faire-venir-conjointe-vietnamienne-france">Conjoint vietnamien en France</a><span class="breadcrumb-sep">›</span>
      <span>Transcription Nantes</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Transcription du mariage au Service Central d'État Civil de Nantes : guide 2026</h1>
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
      <li><a href="#section-1">Qu'est-ce que la transcription ?</a></li>
      <li><a href="#section-2">Pourquoi Nantes ?</a></li>
      <li><a href="#section-3">Conditions préalables</a></li>
      <li><a href="#section-4">Les documents du dossier</a></li>
      <li><a href="#section-5">Comment envoyer le dossier</a></li>
      <li><a href="#section-6">Le délai de traitement</a></li>
      <li><a href="#section-7">Obtenir l'acte transcrit</a></li>
      <li><a href="#section-8">En cas de problème</a></li>
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
    <p><strong>Ton mariage a été célébré au Vietnam — félicitations.</strong> Maintenant commence la partie administrative. La première grande étape côté français, c'est la transcription du mariage au Service Central d'État Civil (SCEC) de Nantes. C'est ce bureau qui tient les registres de l'état civil des Français nés ou mariés à l'étranger, et c'est lui qui va "reconnaître" officiellement ton mariage en France.</p>

    <p>Cet article fait partie du <a href="faire-venir-conjointe-vietnamienne-france">guide complet sur le regroupement familial franco-vietnamien</a>.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=1200&q=80" alt="Lettres et documents administratifs" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Qu'est-ce que la transcription d'un mariage ?</h2>
    <p>La transcription est l'inscription d'un acte d'état civil étranger dans les registres français. Elle ne recrée pas l'acte — elle le reconnaît et lui donne force légale en France. Une fois transcrit, ton mariage vietnamien produit les mêmes effets juridiques qu'un mariage célébré en France : droits successoraux, nationalité, visa conjoint…</p>
    <p>La transcription est <strong>obligatoire pour tout Français marié à l'étranger</strong>. Elle est requise notamment pour :</p>
    <ul>
      <li>Faire une demande de visa long séjour conjoint de Français</li>
      <li>Prouver le mariage auprès des organismes sociaux français (CAF, CPAM…)</li>
      <li>Constituer un livret de famille français</li>
      <li>Engager une procédure de divorce en France si nécessaire</li>
    </ul>

    <h2 id="section-2">Pourquoi le SCEC de Nantes ?</h2>
    <p>Le Service Central d'État Civil de Nantes est le seul organisme habilité en France à recevoir et traiter les demandes de transcription des mariages contractés à l'étranger par des ressortissants français. Il est rattaché au ministère de l'Europe et des Affaires étrangères.</p>
    <p>Adresse : Service Central d'État Civil, 11 rue de la Maison Blanche, 44941 Nantes Cedex 9. Les dossiers s'envoient par courrier ou via le service en ligne du ministère (si disponible à la date de ta demande) [À VÉRIFIER].</p>

    <h2 id="section-3">Conditions préalables à la transcription</h2>
    <p>Pour que la transcription soit possible, les conditions suivantes doivent être remplies :</p>
    <ul>
      <li>Au moins l'un des époux est de nationalité française au moment de la transcription</li>
      <li>Le mariage a été célébré conformément à la loi du pays où il a eu lieu (attesté par le CCAM)</li>
      <li>Le mariage ne contrevient pas à l'ordre public français (pas de polygamie, consentement libre des deux parties, âge minimum légal respecté)</li>
      <li>Le mariage n'est pas entaché de fraude</li>
    </ul>
    <p>→ Si tu n'as pas encore le CCAM, lis d'abord <a href="certificat-coutumier-acte-mariage-vietnam-ccam">notre guide sur le CCAM vietnamien</a>.</p>

    <h2 id="section-4">Les documents à inclure dans le dossier</h2>

    <table>
      <thead>
        <tr>
          <th>Document</th>
          <th>Description</th>
          <th>Remarque</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Formulaire de demande de transcription</td>
          <td>Disponible sur le site du ministère</td>
          <td>[À VÉRIFIER URL actuelle]</td>
        </tr>
        <tr>
          <td>CCAM légalisé/apostillé</td>
          <td>Certificat de coutume et acte de mariage vietnamien</td>
          <td>Avec traduction assermentée en français</td>
        </tr>
        <tr>
          <td>Acte de naissance du Français (moins de 3 mois)</td>
          <td>Obtenu auprès du SCEC si né à l'étranger</td>
          <td>Intégral avec filiation</td>
        </tr>
        <tr>
          <td>Acte de naissance du conjoint vietnamien</td>
          <td>Extrait officiel vietnamien</td>
          <td>Traduit et légalisé</td>
        </tr>
        <tr>
          <td>Copie du passeport du Français</td>
          <td>Toutes les pages</td>
          <td>—</td>
        </tr>
        <tr>
          <td>Copie du passeport du conjoint vietnamien</td>
          <td>Toutes les pages</td>
          <td>—</td>
        </tr>
        <tr>
          <td>Justificatif de domicile en France</td>
          <td>Facture de moins de 3 mois</td>
          <td>Ou attestation de résidence</td>
        </tr>
        <tr>
          <td>Acte de divorce ou de décès (si applicable)</td>
          <td>Si l'un des époux a été précédemment marié</td>
          <td>Traduit et légalisé</td>
        </tr>
      </tbody>
    </table>

    <div class="tip-box">
      <strong>Attention aux traductions :</strong> Toutes les pièces en langue étrangère doivent être traduites par un traducteur assermenté près la Cour d'appel de France. Les traductions faites au Vietnam par des agences locales ne sont pas toujours acceptées. Si tu veux être tranquille, utilise un traducteur assermenté en France.
    </div>

    <h2 id="section-5">Comment envoyer le dossier à Nantes</h2>
    <p>Le dossier peut être transmis de trois manières :</p>
    <ol>
      <li><strong>Par courrier recommandé</strong> directement au SCEC de Nantes depuis la France ou depuis l'étranger (joindre une enveloppe de retour avec les timbres)</li>
      <li><strong>Via le consulat français compétent</strong> au Vietnam (Hanoï ou Hô Chi Minh-Ville) qui transmet le dossier au SCEC</li>
      <li><strong>Via le service en ligne du SCEC</strong> si disponible à la date de ta démarche [À VÉRIFIER]</li>
    </ol>
    <p>La voie consulaire est souvent plus sûre si tu es encore au Vietnam : le consulat peut signaler les pièces manquantes avant l'envoi à Nantes.</p>

    <h2 id="section-6">Délai de traitement</h2>
    <p>Le délai officiel affiché par le SCEC est de <strong>[À VÉRIFIER] mois</strong>. Dans les faits, les délais constatés varient selon la période et la qualité du dossier :</p>
    <ul>
      <li>Dossier complet et sans anomalie : entre [À VÉRIFIER] et [À VÉRIFIER] mois</li>
      <li>Dossier avec pièce manquante : le SCEC envoie une demande de complément, ce qui rallonge le délai de plusieurs semaines</li>
      <li>En période de forte activité (printemps-été) : prévoir un délai plus long</li>
    </ul>
    <p>Il n'y a pas de suivi en ligne officiel du dossier. Tu peux contacter le SCEC par courrier pour avoir un état d'avancement, mais les réponses par téléphone sont rares.</p>

    <h2 id="section-7">Obtenir une copie de l'acte transcrit</h2>
    <p>Une fois la transcription effectuée, le SCEC te notifie et inscrit le mariage dans ses registres. Tu peux ensuite demander des copies intégrales de l'acte de mariage transcrit, nécessaires notamment pour le dossier de visa de ton conjoint.</p>
    <p>Ces copies s'obtiennent :</p>
    <ul>
      <li>En ligne sur le site Service Public (démarche gratuite, délai [À VÉRIFIER] jours ouvrés)</li>
      <li>Par courrier auprès du SCEC</li>
      <li>Via le consulat si tu es à l'étranger</li>
    </ul>

    <h2 id="section-8">En cas de problème ou de refus</h2>
    <p>Le SCEC peut :</p>
    <ul>
      <li><strong>Demander des documents complémentaires</strong> : réponds rapidement pour ne pas rallonger le délai</li>
      <li><strong>Transmettre le dossier au procureur</strong> en cas de doute sur la sincérité du mariage (fraude suspectée). Dans ce cas, une enquête peut être diligentée.</li>
      <li><strong>Refuser la transcription</strong> : le refus peut faire l'objet d'un recours</li>
    </ul>

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
        <p>Français expatrié à Hanoï. Je partage mon parcours d'installation au Vietnam : démarches, vie de couple mixte et travail en ligne.</p>
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
$current_slug = 'transcription-mariage-service-central-nantes';
$current_cat  = 'admin';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
