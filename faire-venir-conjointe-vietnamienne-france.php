<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Faire venir son conjoint(e) vietnamien(ne) en France : guide complet 2026';
$page_description = 'CCAM, mariage au Vietnam, transcription Nantes, visa long séjour, titre de séjour : toutes les étapes pour faire venir ton conjoint vietnamien en France. Procédures, délais et coûts.';
$page_canonical   = SITE_URL . '/faire-venir-conjointe-vietnamienne-france';
$page_og_title    = 'Faire venir son conjoint vietnamien en France : le guide complet 2026';
$page_og_desc     = 'Du CCAM consulaire jusqu\'au titre de séjour en France : toutes les étapes détaillées pour un couple franco-vietnamien.';
$page_og_url      = SITE_URL . '/faire-venir-conjointe-vietnamienne-france';
$page_og_image    = 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Faire venir son conjoint(e) vietnamien(ne) en France : guide complet 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-16',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/faire-venir-conjointe-vietnamienne-france',
  'image'           => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&q=80',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vivre ensemble : ici ou là-bas',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$page_faq_schema  = json_encode([
  '@context'   => 'https://schema.org',
  '@type'      => 'FAQPage',
  'mainEntity' => [
    [
      '@type'          => 'Question',
      'name'           => 'Combien de temps faut-il pour faire venir son conjoint vietnamien en France ?',
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Compte en moyenne 12 à 24 mois au total : quelques mois pour le CCAM, le mariage et la transcription au Vietnam, puis 2 à 3 mois de traitement du visa long séjour à l\'ambassade de France à Hanoï ou Hô Chi Minh-Ville.'],
    ],
    [
      '@type'          => 'Question',
      'name'           => 'Mon conjoint vietnamien doit-il parler français pour obtenir le visa ?',
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Non, mais lors de l\'entretien à l\'ambassade, les agents vérifient la réalité de la vie commune. Un niveau de français basique facilite l\'entretien mais n\'est pas obligatoire.'],
    ],
    [
      '@type'          => 'Question',
      'name'           => 'Faut-il obligatoirement se marier au Vietnam pour faire venir son conjoint en France ?',
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Le mariage est la condition requise pour le visa conjoint de Français. Si vous êtes déjà mariés en France ou dans un pays tiers, la transcription du mariage au SCEC de Nantes reste nécessaire. Le PACS ne donne pas droit au visa conjoint de Français — seul le mariage le permet.'],
    ],
    [
      '@type'          => 'Question',
      'name'           => 'Quel est le coût total de la procédure ?',
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Les coûts incompressibles : environ 99 € pour le visa long séjour (droits de chancellerie), 250 € pour la taxe OFII à l\'arrivée en France, plus les traductions assermentées et les frais de notaire au Vietnam. Budget total réaliste : 600 à 1 200 €.'],
    ],
    [
      '@type'          => 'Question',
      'name'           => 'Mon conjoint peut-il travailler en France avec un visa long séjour conjoint de Français ?',
      'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Oui. Le visa long séjour valant titre de séjour (VLS-TS) mention "vie privée et familiale" autorise l\'exercice d\'une activité professionnelle dès l\'arrivée en France.'],
    ],
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'jade';
$article_hero_bg      = '#1a3a2a';
$article_glow         = 'rgba(27,107,82,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Vivre ensemble';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vivre-ensemble';
$page_faq = [
  ['q' => 'Combien de temps faut-il pour faire venir son conjoint vietnamien en France ?',
   'a' => 'Compte en moyenne 12 à 24 mois au total : quelques mois pour le CCAM, le mariage et la transcription au Vietnam, puis 2 à 3 mois de traitement du visa long séjour à l\'ambassade de France à Hanoï ou Hô Chi Minh-Ville.'],
  ['q' => 'Mon conjoint vietnamien doit-il parler français pour obtenir le visa ?',
   'a' => 'Non, mais lors de l\'entretien à l\'ambassade, les agents vérifient la réalité de la vie commune. Un niveau de français basique facilite l\'entretien mais n\'est pas obligatoire.'],
  ['q' => 'Faut-il obligatoirement se marier au Vietnam pour faire venir son conjoint en France ?',
   'a' => 'Le mariage est la condition requise pour le visa conjoint de Français. Si vous êtes déjà mariés en France ou dans un pays tiers, la transcription du mariage au SCEC de Nantes reste nécessaire. Le PACS ne donne pas droit au visa conjoint de Français — seul le mariage le permet.'],
  ['q' => 'Quel est le coût total de la procédure ?',
   'a' => 'Les coûts incompressibles : environ 99 € pour le visa long séjour (droits de chancellerie), 250 € pour la taxe OFII à l\'arrivée en France, plus les traductions assermentées et les frais de notaire au Vietnam. Budget total réaliste : 600 à 1 200 €.'],
  ['q' => 'Mon conjoint peut-il travailler en France avec un visa long séjour conjoint de Français ?',
   'a' => 'Oui. Le visa long séjour valant titre de séjour (VLS-TS) mention "vie privée et familiale" autorise l\'exercice d\'une activité professionnelle dès l\'arrivée en France.'],
  ['q' => 'Mon conjoint peut-il visiter la France pendant que la procédure est en cours ?',
   'a' => 'Oui, via un visa Schengen court séjour, demandé normalement — le fait qu\'une procédure de visa long séjour soit en cours n\'interdit pas les visites. Deux règles d\'or cependant : chaque demande de court séjour est jugée sur ses propres mérites (un refus reste possible, surtout si le consulat soupçonne une installation anticipée), et il ne faut jamais dépasser la durée autorisée — un overstay Schengen ruinerait le dossier principal. La visite se fait, puis on repart, et le parcours long séjour suit son cours.'],
];
include '_article-css.php';
include 'header.php';
?>

<script type="application/ld+json"><?= $page_faq_schema ?></script>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=vivre-ensemble">Vivre ensemble</a><span class="breadcrumb-sep">›</span>
      <span>Faire venir son conjoint vietnamien</span>
    </div>
    <span class="article-badge-hero">Vivre ensemble</span>
    <h1>Faire venir son conjoint(e) vietnamien(ne) en France : le guide complet 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Vue d'ensemble du parcours</a></li>
      <li><a href="#section-2">Étape 1 — Le CCAM (avant le mariage)</a></li>
      <li><a href="#section-3">Étape 2 — Le mariage au comité populaire</a></li>
      <li><a href="#section-4">Étape 3 — La transcription à Nantes</a></li>
      <li><a href="#section-5">Étape 4 — Le visa long séjour</a></li>
      <li><a href="#section-6">Étape 5 — L'entretien à l'ambassade</a></li>
      <li><a href="#section-7">Étape 6 — L'arrivée en France et l'OFII</a></li>
      <li><a href="#section-8">Étape 7 — Le titre de séjour</a></li>
      <li><a href="#section-9">Faire venir la belle-famille</a></li>
      <li><a href="#section-attente">Vivre la période d'attente</a></li>
      <li><a href="#section-erreurs">Les erreurs fréquentes</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn share-copy" href="#" title="Copier le lien" aria-label="Copier le lien de l'article">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">
    <p><strong>Tu es en couple avec un(e) Vietnamien(ne) et tu veux construire votre vie commune en France ?</strong> La procédure est longue, parfois frustrante, mais elle est bien balisée. J'ai moi-même traversé ce parcours avec ma femme originaire de Hanoï. Dans ce guide, je te donne la carte complète du chemin — du CCAM consulaire jusqu'au titre de séjour en France.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&q=80" alt="Aéroport — faire venir son conjoint vietnamien en France" width="1200" height="675" loading="lazy">

    <div class="tip-box">
      <strong>Ce guide est un pilier.</strong> Chaque étape a son propre article détaillé (lié dans chaque section). Lis d'abord cette vue d'ensemble, puis plonge dans les articles spécifiques pour les détails et les documents requis.
    </div>

    <div style="background:linear-gradient(135deg,#0d2b1f,#1b4a35);border-radius:10px;padding:1.5rem 2rem;margin:1.5rem 0;display:flex;align-items:center;justify-content:space-between;gap:1.5rem;flex-wrap:wrap">
      <div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:0.4rem">📅 Outil interactif</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.05rem;color:#faf8f4;margin-bottom:0.25rem">Calcule tes délais réels</h3>
        <p style="font-size:0.87rem;color:rgba(250,248,244,0.55);margin:0">Entre ta date de lancement CCAM, obtiens chaque échéance jusqu'à l'arrivée en France.</p>
      </div>
      <a href="retroplanning-faire-venir-conjoint" style="flex-shrink:0;display:inline-flex;align-items:center;gap:0.5rem;padding:0.7rem 1.4rem;background:#4db890;color:#0d2b1f;border-radius:5px;font-weight:700;font-size:0.87rem;text-decoration:none;white-space:nowrap">Ouvrir le simulateur →</a>
    </div>

    <h2 id="section-1">Vue d'ensemble du parcours</h2>
    <p>Faire venir son conjoint vietnamien en France nécessite de valider plusieurs étapes dans un ordre précis. On ne peut pas sauter d'étape — chaque document ouvre la porte à la suivante, et c'est ce séquencement qui explique la durée totale du parcours.</p>

    <div style="overflow-x:auto;border-radius:10px;border:1px solid rgba(77,200,160,0.18);margin:1.5rem 0;">
    <table style="width:100%;border-collapse:collapse;font-size:0.89rem;">
      <thead>
        <tr style="background:rgba(27,107,82,0.25);">
          <th style="padding:0.65rem 0.75rem;text-align:center;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;width:2.8rem;">#</th>
          <th style="padding:0.65rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">ÉTAPE</th>
          <th style="padding:0.65rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">OÙ</th>
          <th style="padding:0.65rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">DÉLAI</th>
          <th style="padding:0.65rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">QUI</th>
        </tr>
      </thead>
      <tbody>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.8rem 0.75rem;text-align:center;vertical-align:middle;"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem;">1</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><strong style="font-size:0.9rem;">CCAM</strong><br><small style="opacity:0.6;font-size:0.78rem;">Certificat de Capacité à Mariage</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;">🇻🇳 Vietnam<br><small style="opacity:0.55;font-size:0.78rem;">Ambassade de France</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><span style="background:rgba(77,200,160,0.13);color:#4dc8a0;padding:3px 10px;border-radius:20px;font-size:0.78rem;font-weight:600;white-space:nowrap;">4–6 sem.</span><br><small style="opacity:0.55;font-size:0.76rem;">4 mois avant</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;opacity:0.82;">Partenaire français</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.8rem 0.75rem;text-align:center;vertical-align:middle;"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem;">2</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><strong style="font-size:0.9rem;">Mariage civil</strong><br><small style="opacity:0.6;font-size:0.78rem;">Comité populaire (UBND)</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;">🇻🇳 Vietnam</td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><span style="background:rgba(77,200,160,0.13);color:#4dc8a0;padding:3px 10px;border-radius:20px;font-size:0.78rem;font-weight:600;white-space:nowrap;">1–3 mois</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;opacity:0.82;">Couple + mairie</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.8rem 0.75rem;text-align:center;vertical-align:middle;"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem;">3</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><strong style="font-size:0.9rem;">Transcription Nantes</strong><br><small style="opacity:0.6;font-size:0.78rem;">Service Central d'État Civil</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;">🇫🇷 France<br><small style="opacity:0.55;font-size:0.78rem;">à distance</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><span style="background:rgba(232,133,106,0.14);color:#e8856a;padding:3px 10px;border-radius:20px;font-size:0.78rem;font-weight:600;white-space:nowrap;">6–12 mois</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;opacity:0.82;">SCEC Nantes</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.8rem 0.75rem;text-align:center;vertical-align:middle;"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem;">4</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><strong style="font-size:0.9rem;">Visa long séjour</strong><br><small style="opacity:0.6;font-size:0.78rem;">~99 € · conjoint de Français</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;">🇻🇳 Vietnam<br><small style="opacity:0.55;font-size:0.78rem;">VFS Global</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><span style="background:rgba(77,200,160,0.13);color:#4dc8a0;padding:3px 10px;border-radius:20px;font-size:0.78rem;font-weight:600;white-space:nowrap;">2–3 mois</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;opacity:0.82;">Ambassade + VFS</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.8rem 0.75rem;text-align:center;vertical-align:middle;"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem;">5</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><strong style="font-size:0.9rem;">Entretien ambassade</strong><br><small style="opacity:0.6;font-size:0.78rem;">Pas toujours convoqué</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;">🇻🇳 Vietnam</td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><span style="background:rgba(250,248,244,0.07);color:rgba(250,248,244,0.5);padding:3px 10px;border-radius:20px;font-size:0.78rem;white-space:nowrap;">inclus step 4</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;opacity:0.82;">Conjoint vietnamien</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.8rem 0.75rem;text-align:center;vertical-align:middle;"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem;">6</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><strong style="font-size:0.9rem;">Validation OFII</strong><br><small style="opacity:0.6;font-size:0.78rem;">250 € · obligatoire</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;">🇫🇷 France</td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><span style="background:rgba(77,200,160,0.13);color:#4dc8a0;padding:3px 10px;border-radius:20px;font-size:0.78rem;font-weight:600;white-space:nowrap;">3 mois max</span><br><small style="opacity:0.55;font-size:0.76rem;">après l'entrée</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;opacity:0.82;">OFII</td>
        </tr>
        <tr>
          <td style="padding:0.8rem 0.75rem;text-align:center;vertical-align:middle;"><span style="display:inline-flex;align-items:center;justify-content:center;width:1.65rem;height:1.65rem;background:rgba(77,200,160,0.18);border-radius:50%;color:#4dc8a0;font-weight:700;font-size:0.78rem;">7</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><strong style="font-size:0.9rem;">Titre de séjour</strong><br><small style="opacity:0.6;font-size:0.78rem;">ANEF · en ligne</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;">🇫🇷 France<br><small style="opacity:0.55;font-size:0.78rem;">Préfecture</small></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;"><span style="background:rgba(232,133,106,0.14);color:#e8856a;padding:3px 10px;border-radius:20px;font-size:0.78rem;font-weight:600;white-space:nowrap;">4–6 mois</span></td>
          <td style="padding:0.8rem 1rem;vertical-align:middle;font-size:0.85rem;opacity:0.82;">Préfecture / ANEF</td>
        </tr>
      </tbody>
    </table>
    </div>

    <p>Durée totale réaliste : <strong>12 à 24 mois</strong> selon la rapidité de chaque administration et la qualité du dossier. La bonne nouvelle : une fois le visa obtenu, ton conjoint peut vivre et travailler légalement en France sans attendre le titre de séjour.</p>

    <h3>Le budget global du parcours</h3>
    <p>Au-delà des frais officiels listés dans la FAQ (visa, taxe OFII), le vrai budget du parcours comprend des postes que personne n'annonce : les <strong>traductions assermentées</strong> de chaque document vietnamien (acte de naissance, certificat de situation matrimoniale, acte de mariage — souvent en plusieurs exemplaires), la <strong>légalisation ou l'apostille</strong> des documents, les <strong>déplacements</strong> (tes vols vers le Vietnam pour le CCAM et le mariage, les trajets vers Hanoï ou HCMV pour les rendez-vous), et les <strong>frais de la cérémonie familiale</strong> vietnamienne — qui, culturellement, n'est pas optionnelle et se budgète à part. Compte large, et garde une réserve : un document à refaire ou un rendez-vous reporté coûte plus en billets d'avion qu'en frais de dossier.</p>
    <p>Deux principes qui économisent gros sur la durée : <strong>toujours demander les documents vietnamiens en plusieurs exemplaires originaux</strong> dès le premier passage au guichet (un aller-retour au village de ta belle-famille coûte plus cher que trois copies supplémentaires), et <strong>numériser chaque pièce au fur et à mesure</strong> dans un dossier partagé du couple — chaque étape redemande des pièces des étapes précédentes.</p>

    <h2 id="section-2">Étape 1 — Le CCAM : le certificat qui rend le mariage possible</h2>
    <p>Avant de pouvoir se marier au Vietnam, le partenaire français doit obtenir un <strong>Certificat de Capacité à Mariage (CCAM)</strong> auprès de l'ambassade de France à Hanoï ou du consulat général à Hô Chi Minh-Ville. Ce document atteste que tu es légalement libre de te marier selon le droit français (pas déjà marié, aucun empêchement légal).</p>
    <ul>
      <li>À demander <strong>idéalement 4 mois avant</strong> la date prévue du mariage</li>
      <li>Délai de traitement : <strong>4 à 6 semaines</strong> (inclut 10 jours de publication des bans)</li>
      <li>Durée de validité : <strong>1 an</strong></li>
      <li>Les autorités vietnamiennes ne peuvent pas enregistrer le mariage sans ce document</li>
    </ul>
    <p><strong>→ Lire le guide complet :</strong> <a href="certificat-capacite-mariage-vietnam">Le CCAM : comment l'obtenir à l'ambassade de France au Vietnam</a></p>

    <h2 id="section-3">Étape 2 — Le mariage au comité populaire</h2>
    <p>Une fois le CCAM en main, le mariage civil peut être célébré au comité populaire (UBND) du district de résidence de ton conjoint au Vietnam. Tu dois être physiquement présent au Vietnam pour la cérémonie. Garde en tête la distinction vietnamienne entre l'enregistrement légal (la signature au comité populaire, sobre et administrative) et la fête familiale (le vrai « mariage » aux yeux de la famille, avec ses centaines d'invités) : les deux événements peuvent avoir lieu à des dates différentes, et seul le premier compte pour la suite administrative.</p>
    <ul>
      <li>Le CCAM est remis aux autorités vietnamiennes lors de l'enregistrement du mariage</li>
      <li>La cérémonie est planifiée après dépôt du dossier complet (délai variable selon le district)</li>
      <li>Tu reçois ensuite l'acte de mariage vietnamien (giấy chứng nhận đăng ký kết hôn)</li>
    </ul>

    <div class="tip-box">
      <strong>Attention :</strong> certains comités populaires locaux appliquent des règles additionnelles (entretien préalable, justificatifs de revenus, etc.). Renseigne-toi auprès de l'ambassade ou du consulat selon la province.
    </div>

    <h2 id="section-4">Étape 3 — La transcription du mariage à Nantes</h2>
    <p>Une fois marié(e) au Vietnam, il faut faire reconnaître ce mariage en France. La demande de transcription se dépose au <strong>Service Central d'État Civil (SCEC) de Nantes</strong> — l'unique organisme habilité à transcrire les mariages célébrés à l'étranger dans les registres français. C'est l'étape la plus longue et la plus passive du parcours : une fois le dossier déposé, il n'y a rien à faire qu'attendre — raison de plus pour la déclencher sans délai après le mariage, car chaque semaine de retard au dépôt est une semaine ajoutée à la fin du parcours.</p>
    <p>La demande se fait par courrier ou via ton consulat, avec l'acte de mariage vietnamien légalisé ou apostillé et ses traductions assermentées. Délai constaté : <strong>6 à 12 mois</strong> selon les périodes de charge.</p>
    <p><strong>→ Lire le guide complet :</strong> <a href="transcription-mariage-service-central-nantes">Transcription du mariage à Nantes : dossier et délais</a></p>

    <h2 id="section-5">Étape 4 — La demande de visa long séjour</h2>
    <p>Une fois le mariage transcrit, ton conjoint peut déposer une demande de visa long séjour mention "vie privée et familiale" — catégorie "conjoint de Français". Ce visa est déposé au Vietnam, auprès de VFS Global mandaté par l'ambassade de France.</p>

    <div class="tip-box">
      <strong>VLS-TS ou visa court séjour ?</strong> Vise toujours le visa long séjour valant titre de séjour (VLS-TS). Il permet à ton conjoint de s'installer directement sans repasser par la préfecture dans les premiers mois. Coût : environ <strong>99 €</strong>.
    </div>

    <p>Documents clés attendus dans le dossier : extrait d'acte de mariage transcrit, justificatifs de ressources françaises, logement en France, photos d'identité, acte de naissance du conjoint traduit et apostillé.</p>
    <p><strong>→ Lire le guide complet :</strong> <a href="visa-long-sejour-conjoint-vietnamien-france">Visa long séjour conjoint de Français : dossier complet</a></p>

    <h2 id="section-6">Étape 5 — L'entretien à l'ambassade</h2>
    <p>Pour les visas d'installation (long séjour vie privée), l'ambassade de France convoque souvent le demandeur pour un entretien. Son objectif : s'assurer de la réalité de la vie commune et que le mariage n'est pas de convenance.</p>
    <p>Cet entretien n'est pas systématique mais reste fréquent pour les conjoints vietnamiens. Prépare ton conjoint avec des photos de votre vie commune, des preuves de communication régulière, et une bonne connaissance de ta situation personnelle en France. Le principe à retenir : il ne s'agit pas d'un examen à réviser mais d'une conversation de vérification — un couple réel qui raconte simplement son histoire, avec des dates cohérentes entre le récit et les documents, n'a rien à craindre.</p>
    <p><strong>→ Lire le guide complet :</strong> <a href="entretien-ambassade-france-vietnam-visa-conjoint">Entretien à l'ambassade : ce qu'il faut préparer</a></p>

    <h2 id="section-7">Étape 6 — L'arrivée en France et la validation OFII</h2>
    <p>Dès l'arrivée en France avec le VLS-TS, ton conjoint doit valider son visa auprès de l'<strong>OFII</strong> (Office Français de l'Immigration et de l'Intégration) dans un délai de <strong>3 mois</strong> suivant l'entrée sur le territoire. Cette validation est obligatoire et coûte <strong>250 €</strong> (taxe réglée en ligne sur <a href="https://www.ofii.fr" target="_blank" rel="noopener">ofii.fr</a>).</p>
    <p>La validation OFII déclenche aussi l'accès aux formations linguistiques et civiques du Contrat d'Intégration Républicaine (CIR) — obligatoires pour tout étranger nouvellement arrivé.</p>
    <p>Profite de cette première période pour dérouler la check-list d'installation : numéro de Sécurité sociale via la CPAM, compte bancaire français, inscription éventuelle à des cours de français complémentaires, et — si ton conjoint veut travailler tout de suite — CV au format français et équivalences de diplômes. Le VLS-TS validé donne tous les droits d'un titre de séjour : autant s'en servir dès la première semaine plutôt que d'attendre « d'être en règle », puisque vous l'êtes déjà.</p>

    <h2 id="section-8">Étape 7 — La demande de titre de séjour</h2>
    <p>Le VLS-TS valable 1 an doit être suivi d'une demande de titre de séjour, à déposer <strong>2 à 4 mois avant son expiration</strong> sur le portail de l'<strong>ANEF</strong> (Administration Numérique pour les Étrangers en France). La demande se fait entièrement en ligne.</p>
    <p>Au passage, une confusion fréquente à dissiper : le visa de conjoint de Français n'a rien à voir avec le « regroupement familial », qui est une procédure distincte, plus longue et soumise à des conditions de ressources. Si tu hésites entre les deux notions, lis le comparatif : <a href="regroupement-familial-vs-visa-conjoint">regroupement familial ou visa conjoint, lequel te concerne ?</a></p>
    <p>Le premier titre est généralement une carte de séjour temporaire (1 an). Après 3 ans de mariage avec un ressortissant français, une carte de résident (10 ans) est possible sous conditions.</p>
    <p><strong>→ Lire le guide complet :</strong> <a href="titre-sejour-vie-privee-familiale-conjoint-vietnamien">Titre de séjour vie privée et familiale : comment le demander</a></p>

    <h2 id="section-9">Faire venir la belle-famille vietnamienne en France</h2>
    <p>Une fois ton conjoint installé en France, vous voudrez peut-être inviter ses parents ou ses proches — pour le mariage à la française, une naissance, ou simplement des vacances. Les Vietnamiens doivent obtenir un visa Schengen pour entrer en France, et le processus n'est pas simple — les taux de refus sont élevés, car le consulat évalue le risque que le visiteur ne reparte pas. Un dossier qui démontre les attaches au Vietnam (travail, propriété, famille restée au pays) et un hébergement solide en France fait toute la différence.</p>
    <p>Pour maximiser les chances d'obtention, tu devras fournir une lettre d'invitation officielle, une attestation d'hébergement, et justifier de tes ressources en France. La demande se dépose également via VFS Global au Vietnam.</p>
    <p><strong>→ Lire le guide complet :</strong> <a href="visa-schengen-belle-famille-vietnamienne">Visa Schengen pour la belle-famille vietnamienne : nos conseils</a></p>

    <h2 id="section-attente">Vivre la période d'attente : les stratégies des couples</h2>
    <p>Douze à vingt-quatre mois, c'est long — et la question que tous les couples se posent est : <em>où vit-on pendant ce temps ?</em> Trois stratégies reviennent :</p>
    <ul>
      <li><strong>Le Français s'installe au Vietnam pendant la procédure</strong> : c'est ce que nous avons fait. L'exemption de 45 jours, les e-visas puis le visa TT après le mariage permettent de vivre ensemble sur place pendant que Nantes et l'ambassade travaillent. Avantage énorme : la vie commune continue ET se documente (bail commun, quotidien partagé) — exactement ce que le dossier de visa devra prouver.</li>
      <li><strong>La distance avec des visites</strong> : chacun reste dans son pays, avec des allers-retours. C'est la configuration la plus dure moralement, mais elle fonctionne si elle est bien documentée (billets, appels, messages) — cette documentation devient la preuve de vie commune du dossier.</li>
      <li><strong>Les courts séjours du conjoint en France</strong> : pendant la procédure, ton/ta conjoint(e) peut demander des visas Schengen court séjour pour visiter la France. Attention à deux règles : chaque demande est examinée indépendamment (un refus est possible), et il ne faut <strong>jamais</strong> tenter de transformer un court séjour en installation — un dépassement ruinerait le dossier de visa long séjour.</li>
    </ul>
    <p>Quelle que soit la stratégie : archive tout, en continu. Le couple qui documente sa vie commune au fil de l'eau aborde l'entretien et l'instruction avec des mois d'avance sur celui qui reconstitue tout la veille du dépôt.</p>

    <h2 id="section-erreurs">Les erreurs fréquentes du parcours</h2>
    <ul>
      <li><strong>Faire les étapes dans le désordre</strong> : pas de mariage sans CCAM, pas de visa sans transcription. Chaque étape ouvre la suivante — vouloir paralléliser ce qui ne peut pas l'être fait perdre des mois.</li>
      <li><strong>Sous-estimer la transcription</strong> : c'est l'étape la plus longue du parcours (6-12 mois) et celle qu'on découvre en dernier. Dépose le dossier de transcription <em>immédiatement</em> après le mariage, pas « quand on aura le temps ».</li>
      <li><strong>Planifier la vie française avant le visa</strong> : démission, bail, inscription à une formation… rien d'irréversible tant que le visa n'est pas dans le passeport.</li>
      <li><strong>Négliger le français du conjoint</strong> : rien n'est exigé pour le visa, mais tout le parcours suivant (CIR, carte pluriannuelle, carte de résident, nationalité) demande des paliers de français croissants. Chaque mois d'attente est un mois de cours possible.</li>
      <li><strong>S'isoler dans la procédure</strong> : des milliers de couples franco-vietnamiens sont passés par là. Les groupes d'entraide, ce blog et les articles détaillés de chaque étape existent pour ça — les erreurs coûteuses sont presque toujours des erreurs déjà commises par d'autres.</li>
    </ul>

    <?php
    $page_sources = [
      ['label' => 'France-Visas — site officiel des visas pour la France', 'url' => 'https://france-visas.gouv.fr'],
      ['label' => 'Service-Public.fr — fiches officielles droits et démarches', 'url' => 'https://www.service-public.fr'],
      ['label' => 'OFII — Office français de l\'immigration et de l\'intégration', 'url' => 'https://www.ofii.fr'],
      ['label' => 'Ambassade de France au Vietnam', 'url' => 'https://vn.ambafrance.org'],
    ];
    include '_article-sources.php';
    ?>

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

    <?php
$author_bio = <<<'BIO'
Français marié à une Vietnamienne, installé à Hanoï. Je partage notre parcours : démarches administratives, mariage franco-vietnamien, vie de couple mixte.
BIO;
$author_links = <<<'LINKS'
<a href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">TikTok</a>
          <a href="a-propos-capvietnam">À propos</a>
LINKS;
include '_author-box.php';
?>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
require_once __DIR__ . '/config/site.php';
$current_slug = 'faire-venir-conjointe-vietnamienne-france';
$current_cat  = 'mariage';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
