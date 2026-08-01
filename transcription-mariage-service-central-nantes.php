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
  'articleSection'  => 'Se marier',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'terracotta';
$article_hero_bg      = '#3a1a0e';
$article_glow         = 'rgba(191,74,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Se marier';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=mariage';
$page_faq = [
  ['q' => 'La transcription du mariage à Nantes est-elle obligatoire pour vivre en France ?',
   'a' => 'Oui, si tu veux demander un visa "conjoint de Français" pour ton partenaire vietnamien. La transcription inscrit votre mariage dans les registres français et en fait la preuve légale en France.'],
  ['q' => 'Peut-on initier la transcription depuis le Vietnam ?',
   'a' => 'Oui. La demande peut être transmise par courrier depuis le Vietnam ou déposée via le consulat français compétent. Elle peut aussi être initiée par le partenaire français directement depuis la France. Il n\'est pas nécessaire d\'être en France en personne.'],
  ['q' => 'Quel est le délai de traitement à Nantes ?',
   'a' => 'Le délai officiel affiché par le SCEC est de 6 mois, mais les délais réels constatés varient de 6 à 12 mois selon les périodes de charge. En cas d\'urgence absolue, un traitement accéléré peut être demandé mais reste exceptionnel.'],
  ['q' => 'Que faire si Nantes refuse la transcription ?',
   'a' => 'Le refus doit être motivé. Tu peux déposer un recours auprès du procureur de la République, qui dispose d\'un délai de 2 mois pour répondre. En cas de refus confirmé, un recours judiciaire devant le tribunal judiciaire est possible.'],
  ['q' => 'Peut-on demander le visa conjoint avant la fin de la transcription ?',
   'a' => 'Non — l\'acte de mariage transcrit est la pièce maîtresse du dossier de visa long séjour conjoint de Français. C\'est précisément pour ça que la transcription doit être lancée immédiatement après le mariage : chaque semaine de retard au dépôt repousse d\'autant l\'arrivée en France. Utilise l\'attente pour préparer tout le reste du dossier de visa.'],
  ['q' => 'Les traductions faites au Vietnam sont-elles acceptées par Nantes ?',
   'a' => 'Pas toujours : le SCEC attend des traductions réalisées par un traducteur assermenté près une cour d\'appel française (ou agréé par le consulat). Une traduction d\'agence locale vietnamienne non reconnue est le motif classique de demande de complément — qui coûte des semaines. Sécurise ce point dès le départ.'],
  ['q' => 'Le mariage est-il valable en France pendant l\'attente de la transcription ?',
   'a' => 'Le mariage existe juridiquement dès sa célébration au Vietnam, mais sans transcription il est inopposable en France : tu ne peux pas t\'en prévaloir auprès des administrations françaises (visa, CAF, impôts, livret de famille). La transcription ne « crée » pas le mariage, elle le rend utilisable en France.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=mariage">Se marier</a><span class="breadcrumb-sep">›</span>
      <a href="faire-venir-conjointe-vietnamienne-france">Conjoint vietnamien en France</a><span class="breadcrumb-sep">›</span>
      <span>Transcription Nantes</span>
    </div>
    <span class="article-badge-hero">Se marier</span>
    <h1>Transcription du mariage au Service Central d'État Civil de Nantes : guide 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 11 min de lecture</span>
      <span>Mis &agrave; jour : Juillet 2026</span>
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
      <li><a href="#section-7b">La cascade des démarches débloquées</a></li>
      <li><a href="#section-8">En cas de problème</a></li>
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
    <p><strong>Ton mariage a été célébré au Vietnam — félicitations.</strong> Maintenant commence la partie administrative. La première grande étape côté français, c'est la transcription du mariage au Service Central d'État Civil (SCEC) de Nantes. C'est ce bureau qui tient les registres de l'état civil des Français nés ou mariés à l'étranger, et c'est lui qui va "reconnaître" officiellement ton mariage en France.</p>

    <p>Cet article fait partie du <a href="faire-venir-conjointe-vietnamienne-france">guide complet : faire venir son conjoint vietnamien en France</a>.</p>

    <h2 id="section-1">Qu'est-ce que la transcription d'un mariage ?</h2>
    <p>La transcription est l'inscription d'un acte d'état civil étranger dans les registres français. Elle ne recrée pas l'acte — elle le reconnaît et lui donne force légale en France. Une fois transcrit, ton mariage vietnamien produit les mêmes effets juridiques qu'un mariage célébré en France : droits successoraux, nationalité, visa conjoint…</p>
    <p>Une image simple pour comprendre : l'état civil français est un grand registre, et ton mariage vietnamien n'y figure pas encore. Tant qu'il n'y est pas inscrit, la France ne « sait » pas que tu es marié — tu restes célibataire dans tous ses fichiers, avec toutes les conséquences pratiques que ça implique. La transcription, c'est l'opération d'écriture dans le registre. Rien de plus, rien de moins — mais tout en découle.</p>

    <p>La transcription est <strong>obligatoire pour tout Français marié à l'étranger</strong>. Elle est requise notamment pour :</p>
    <ul>
      <li>Faire une demande de visa long séjour conjoint de Français</li>
      <li>Prouver le mariage auprès des organismes sociaux français (CAF, CPAM…)</li>
      <li>Constituer un livret de famille français</li>
      <li>Engager une procédure de divorce en France si nécessaire</li>
    </ul>

    <h2 id="section-2">Pourquoi le SCEC de Nantes ?</h2>
    <p>Le Service Central d'État Civil de Nantes est le seul organisme habilité en France à recevoir et traiter les demandes de transcription des mariages contractés à l'étranger par des ressortissants français. Il est rattaché au ministère de l'Europe et des Affaires étrangères.</p>
    <p>Adresse : Service Central d'État Civil, 11 rue de la Maison Blanche, 44941 Nantes Cedex 9. Les dossiers s'envoient par voie postale ou via le consulat — il n'existe pas de dépôt en ligne. Pourquoi Nantes et pas Paris ? Héritage historique : c'est là qu'ont été centralisés les registres d'état civil des Français de l'étranger et des anciennes colonies — dont, ironie de l'histoire, ceux de l'Indochine française.</p>

    <h2 id="section-3">Conditions préalables à la transcription</h2>
    <p>Pour que la transcription soit possible, les conditions suivantes doivent être remplies :</p>
    <ul>
      <li>Au moins l'un des époux est de nationalité française au moment de la transcription</li>
      <li>Le mariage a été célébré conformément à la loi du pays où il a eu lieu (attesté par le CCAM)</li>
      <li>Le mariage ne contrevient pas à l'ordre public français (pas de polygamie, consentement libre des deux parties, âge minimum légal respecté)</li>
      <li>Le mariage n'est pas entaché de fraude</li>
    </ul>
    <p>→ Si tu n'as pas encore le CCAM, lis d'abord <a href="certificat-capacite-mariage-vietnam">notre guide sur le CCAM vietnamien</a>.</p>

    <h2 id="section-4">Les documents à inclure dans le dossier</h2>

    <div style="overflow-x:auto;border-radius:10px;border:1px solid rgba(232,133,106,0.18);margin:1.5rem 0;">
    <table style="width:100%;border-collapse:collapse;font-size:0.89rem;">
      <thead>
        <tr style="background:rgba(191,74,42,0.22);">
          <th style="padding:0.7rem 1rem;text-align:left;color:#e8856a;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;width:32%;">DOCUMENT</th>
          <th style="padding:0.7rem 1rem;text-align:left;color:#e8856a;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;width:32%;">DESCRIPTION</th>
          <th style="padding:0.7rem 1rem;text-align:left;color:#e8856a;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">REMARQUE</th>
        </tr>
      </thead>
      <tbody>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.85rem;">Formulaire de transcription</td>
          <td style="padding:0.75rem 1rem;font-size:0.85rem;opacity:0.82;">Disponible sur le site du ministère</td>
          <td style="padding:0.75rem 1rem;font-size:0.82rem;opacity:0.6;"><a href="https://www.service-public.fr/particuliers" target="_blank" rel="noopener">service-public.fr</a></td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.85rem;">CCAM</td>
          <td style="padding:0.75rem 1rem;font-size:0.85rem;opacity:0.82;">Certificat de capacité à mariage (document consulaire français)</td>
          <td style="padding:0.75rem 1rem;font-size:0.82rem;opacity:0.6;">Pas de légalisation requise (doc. français)</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.85rem;">Acte de mariage vietnamien</td>
          <td style="padding:0.75rem 1rem;font-size:0.85rem;opacity:0.82;">Extrait officiel vietnamien</td>
          <td style="padding:0.75rem 1rem;font-size:0.82rem;opacity:0.6;">Légalisation (ou apostille dès le 11/09/2026) + trad. assermentée</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.85rem;">Acte de naissance du Français</td>
          <td style="padding:0.75rem 1rem;font-size:0.85rem;opacity:0.82;">Moins de 3 mois · SCEC si né à l'étranger</td>
          <td style="padding:0.75rem 1rem;font-size:0.82rem;opacity:0.6;">Intégral avec filiation</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.85rem;">Acte de naissance du conjoint vietnamien</td>
          <td style="padding:0.75rem 1rem;font-size:0.85rem;opacity:0.82;">Extrait officiel vietnamien</td>
          <td style="padding:0.75rem 1rem;font-size:0.82rem;opacity:0.6;">Traduit et légalisé</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.85rem;">Passeports des deux époux</td>
          <td style="padding:0.75rem 1rem;font-size:0.85rem;opacity:0.82;">Copie de toutes les pages</td>
          <td style="padding:0.75rem 1rem;font-size:0.82rem;opacity:0.6;">—</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.85rem;">Justificatif de domicile en France</td>
          <td style="padding:0.75rem 1rem;font-size:0.85rem;opacity:0.82;">Facture de moins de 3 mois</td>
          <td style="padding:0.75rem 1rem;font-size:0.82rem;opacity:0.6;">Ou attestation de résidence</td>
        </tr>
        <tr>
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.85rem;">Acte de divorce / décès (si applicable)</td>
          <td style="padding:0.75rem 1rem;font-size:0.85rem;opacity:0.82;">Si l'un des époux a été précédemment marié</td>
          <td style="padding:0.75rem 1rem;font-size:0.82rem;opacity:0.6;">Traduit et légalisé</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="tip-box">
      <strong>Légalisation ou apostille ? (2026)</strong> Les documents vietnamiens (acte de mariage, acte de naissance…) nécessitent aujourd'hui une <b>légalisation consulaire</b>. À partir du <b>11 septembre 2026</b>, l'<b>apostille</b> (Convention de La Haye — adhésion du Vietnam déposée le 31/12/2025) remplacera la légalisation. Autorité compétente : MAE vietnamien (Hanoï / HCMV). <a href="https://www.hcch.net/fr/states/authorities/details3/?aid=1596" target="_blank" rel="noopener">Source : hcch.net</a> — <a href="apostille-vietnam-francais-2026">Guide complet sur l'apostille au Vietnam</a>
    </div>

    <div class="tip-box">
      <strong>Attention aux traductions :</strong> Toutes les pièces en langue étrangère doivent être traduites par un traducteur assermenté près la Cour d'appel de France. Les traductions faites au Vietnam par des agences locales ne sont pas toujours acceptées. Si tu veux être tranquille, utilise un traducteur assermenté en France.
    </div>

    <h2 id="section-5">Comment envoyer le dossier à Nantes</h2>
    <p>Le dossier peut être transmis de deux manières :</p>
    <ul>
      <li><strong>Si tu résides à l'étranger (Vietnam) :</strong> dépose le dossier auprès du consulat ou de l'ambassade de France au Vietnam, qui le transmet au SCEC de Nantes pour traitement (et création du livret de famille).</li>
      <li><strong>Si tu résides en France :</strong> envoie ta demande directement par voie postale au Service Central d'État Civil de Nantes (Ministère de l'Europe et des Affaires étrangères).</li>
    </ul>
    <p>La voie consulaire est souvent plus sûre si tu es encore au Vietnam : le consulat peut signaler les pièces manquantes avant l'envoi à Nantes.</p>

    <h3>Quel circuit selon votre configuration ?</h3>

    <ul>
      <li><strong>Vous vivez tous les deux au Vietnam</strong> (le cas le plus fréquent juste après le mariage) : voie consulaire sans hésiter. Vous êtes sur place pour compléter une pièce en 48h, le consulat pré-vérifie, et le livret de famille suivra le même canal.</li>
      <li><strong>Tu es rentré en France, ton conjoint est au Vietnam</strong> : les deux voies fonctionnent. La voie postale directe depuis la France t'évite de dépendre des rendez-vous consulaires, mais exige un dossier auto-vérifié avec une rigueur absolue — personne ne relira avant Nantes. Utilise la liste ci-dessus comme une checklist à cocher physiquement.</li>
      <li><strong>Vous êtes tous les deux en France</strong> (mariage au Vietnam pendant un séjour) : voie postale directe, et anticipe que ton conjoint est probablement en France sous un statut à horloge (visa court séjour) — le calendrier de la transcription et celui de son droit au séjour sont deux horloges différentes qu'il faut regarder ensemble. Le cas est assez fréquent pour mériter une consultation juridique si les délais se croisent mal.</li>
    </ul>

    <h3>Les erreurs qui coûtent des mois</h3>

    <ul>
      <li><strong>L'acte de naissance français périmé.</strong> Moins de 3 mois au moment du dépôt — pas au moment où tu as commencé à préparer le dossier. Commande-le en dernier, juste avant l'envoi.</li>
      <li><strong>La traduction non assermentée</strong> (voir encadré plus haut) : motif n°1 des demandes de complément.</li>
      <li><strong>Le dossier « presque complet » envoyé pour gagner du temps.</strong> C'est l'inverse qui se produit : une demande de complément te renvoie en fin de pile. Un dossier complet à J+30 bat un dossier incomplet à J+1.</li>
      <li><strong>Les incohérences de noms.</strong> Les noms vietnamiens translittérés varient d'un document à l'autre (avec/sans diacritiques, ordre des éléments). Vérifie que l'identité de ton conjoint est strictement identique sur l'acte de mariage, l'acte de naissance, la traduction et le passeport — et si un écart existe, joins une note explicative plutôt que de laisser l'agent le découvrir.</li>
    </ul>

    <h2 id="section-6">Délai de traitement</h2>
    <p>Le délai officiel affiché par le SCEC est de <strong>6 mois</strong>. Dans les faits, les délais constatés varient selon la période et la qualité du dossier :</p>
    <ul>
      <li>Dossier complet et sans anomalie : entre 6 et 12 mois</li>
      <li>Dossier avec pièce manquante : le SCEC envoie une demande de complément, ce qui rallonge le délai de plusieurs semaines</li>
      <li>En période de forte activité (printemps-été) : prévoir un délai plus long</li>
    </ul>
    <p>Il n'y a pas de suivi en ligne officiel du dossier. Tu peux contacter le SCEC par courrier pour avoir un état d'avancement, mais les réponses par téléphone sont rares.</p>

    <h3>Vivre l'attente intelligemment : ce que tu peux préparer pendant les 6-12 mois</h3>

    <p>La transcription est la plus longue traversée du désert de tout le parcours franco-vietnamien — des mois sans nouvelles, sans suivi en ligne, sans prise. Plutôt que de rafraîchir ta boîte aux lettres, utilise ce temps : <strong>presque tout le dossier de visa de ton conjoint peut se préparer en parallèle</strong>.</p>

    <ul>
      <li><strong>Côté conjoint au Vietnam :</strong> commencer (ou intensifier) le français — chaque mois d'attente transformé en mois de cours à l'Institut Français, c'est de l'intégration gagnée pour l'arrivée et le futur <a href="titre-sejour-vie-privee-familiale-conjoint-vietnamien">parcours OFII</a>.</li>
      <li><strong>Côté dossier :</strong> rassembler les preuves de vie commune et de relation (photos datées, conversations, séjours) qui serviront pour <a href="visa-long-sejour-conjoint-vietnamien-france">le visa long séjour</a> et, éventuellement, <a href="entretien-ambassade-france-vietnam-visa-conjoint">l'entretien à l'ambassade</a>.</li>
      <li><strong>Côté France :</strong> préparer le nid — logement adapté, budget d'installation, et si vous visez une région précise, repérage des <a href="associations-franco-vietnamiennes-france">communautés vietnamiennes locales</a> qui aideront ton conjoint à ne pas atterrir dans le vide social.</li>
      <li><strong>Côté envoi :</strong> si tu passes par la voie postale, envoie <strong>toujours en recommandé avec avis de réception</strong> et garde une copie numérisée intégrale du dossier envoyé. En cas de pièce « jamais reçue », c'est ta seule preuve — et le point de départ de toute relance sérieuse.</li>
    </ul>

    <div class="tip-box">
      <strong>La relance utile :</strong> passé le délai officiel de 6 mois sans nouvelles, une relance écrite (courrier au SCEC, ou via le consulat si le dossier est parti par voie consulaire) mentionnant la date d'envoi, le mode d'envoi et les références des époux est légitime. Reste factuel et courtois — le SCEC traite des dizaines de milliers d'actes par an, l'agressivité ne fait remonter aucun dossier.
    </div>

    <h2 id="section-7">Obtenir une copie de l'acte transcrit</h2>
    <p>Une fois la transcription effectuée, le SCEC te notifie et inscrit le mariage dans ses registres. Tu peux ensuite demander des copies intégrales de l'acte de mariage transcrit, nécessaires notamment pour le dossier de visa de ton conjoint.</p>
    <p>Ces copies s'obtiennent :</p>
    <ul>
      <li>En ligne sur le site Service Public (démarche gratuite, délai 5 à 10 jours ouvrés)</li>
      <li>Par courrier auprès du SCEC</li>
      <li>Via le consulat si tu es à l'étranger</li>
    </ul>

    <h2 id="section-7b">Une fois l'acte transcrit : la cascade des démarches débloquées</h2>

    <p>Le jour où l'acte transcrit arrive, tout ce qui était en attente se débloque d'un coup. Dans l'ordre logique :</p>

    <ol>
      <li><strong>Commande plusieurs copies intégrales</strong> immédiatement (la démarche en ligne est gratuite) : il t'en faudra pour le visa, la banque, la CAF, les impôts — et les administrations veulent souvent des copies « de moins de 3 mois », donc tu en recommanderas régulièrement.</li>
      <li><strong>Le livret de famille français</strong> est établi ou mis à jour — c'est LE document du quotidien administratif français pour un couple.</li>
      <li><strong>Le visa long séjour conjoint de Français</strong> peut enfin être déposé : l'acte transcrit est la pièce maîtresse du dossier. → <a href="visa-long-sejour-conjoint-vietnamien-france">Guide du visa conjoint</a></li>
      <li><strong>Ta situation fiscale et sociale française</strong> se met à jour : déclaration d'impôts commune (le mariage produit ses effets), mention du mariage à ta banque, ta mutuelle, ton employeur si pertinent.</li>
      <li><strong>Le nom d'usage</strong> : si ton conjoint souhaite utiliser ton nom (ou l'inverse), l'acte transcrit en est le fondement.</li>
    </ol>

    <p>Et si vous vivez au Vietnam, n'oublie pas le miroir de cette démarche côté vietnamien : un mariage célébré au comité populaire est déjà dans l'état civil vietnamien, mais un couple installé durablement au Vietnam a aussi intérêt à ce que le versant français soit propre — c'est lui qui portera <a href="enfant-couple-franco-vietnamien-nationalite">la nationalité française de vos futurs enfants</a> et tous vos droits en France.</p>

    <h2 id="section-8">En cas de problème ou de refus</h2>
    <p>Le SCEC peut :</p>
    <ul>
      <li><strong>Demander des documents complémentaires</strong> : réponds rapidement pour ne pas rallonger le délai</li>
      <li><strong>Transmettre le dossier au procureur</strong> en cas de doute sur la sincérité du mariage (fraude suspectée). Dans ce cas, une enquête peut être diligentée.</li>
      <li><strong>Refuser la transcription</strong> : le refus peut faire l'objet d'un recours</li>
    </ul>

    <p>Le scénario « procureur » mérite d'être dédramatisé : la transmission au procureur de la République (celui de Nantes est compétent pour l'état civil consulaire) n'est pas une accusation — c'est la procédure normale quand l'administration veut une vérification supplémentaire, et elle peut déboucher sur une audition des époux, séparément, sur le modèle de <a href="entretien-ambassade-france-vietnam-visa-conjoint">l'entretien de communauté de vie</a>. Si le procureur ne s'oppose pas dans les délais prévus, la transcription reprend son cours. Pour un couple sincère avec un dossier documenté, c'est du temps perdu, pas un danger. En cas de refus formel, en revanche, ne reste pas seul : un avocat en droit de la famille internationale saura si le recours (devant le tribunal judiciaire de Nantes) vaut d'être engagé ou si un vice du dossier peut être corrigé plus simplement.</p>

    <?php
    $page_sources = [
      ['label' => 'France Diplomatie — services aux Français de l\'étranger', 'url' => 'https://www.diplomatie.gouv.fr'],
      ['label' => 'Service-Public.fr — fiches officielles droits et démarches', 'url' => 'https://www.service-public.fr'],
      ['label' => 'Légifrance — textes de loi et conventions', 'url' => 'https://www.legifrance.gouv.fr'],
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
$current_slug = 'transcription-mariage-service-central-nantes';
$current_cat  = 'mariage';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
