<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'CCAM — Certificat de Capacité à Mariage : comment l\'obtenir au consulat de France';
$page_description = 'Le CCAM (Certificat de Capacité à Mariage) est délivré par le consulat français AVANT le mariage au Vietnam. À demander 4 mois avant : mode d\'emploi complet, documents, délais.';
$page_canonical   = SITE_URL . '/certificat-capacite-mariage-vietnam';
$page_og_title    = 'CCAM — Certificat de Capacité à Mariage au Vietnam : guide complet 2026';
$page_og_desc     = 'Le CCAM est délivré par l\'ambassade de France AVANT le mariage. Étapes, documents, délais et coûts pour le couple franco-vietnamien.';
$page_og_url      = SITE_URL . '/certificat-capacite-mariage-vietnam';
$page_og_image    = SITE_URL . '/assets/img/documents-ccam-mariage-etranger.jpg';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'CCAM — Certificat de Capacité à Mariage : comment l\'obtenir au consulat de France',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-16',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/certificat-capacite-mariage-vietnam',
  'image'           => 'assets/img/documents-ccam-mariage-etranger.jpg',
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
  ['q' => 'Qu\'est-ce que le CCAM exactement ?',
   'a' => 'Le CCAM (Certificat de Capacité à Mariage, aussi appelé Certificat de Capacité Matrimoniale) est un document officiel français délivré par l\'ambassade ou le consulat de France AVANT le mariage. Il atteste que le ressortissant français est légalement libre de se marier : pas déjà marié, pas d\'empêchement légal. Les autorités vietnamiennes l\'exigent avant d\'enregistrer le mariage mixte.'],
  ['q' => 'Peut-on se passer du CCAM si le mariage a lieu à Hanoï ou Hô Chi Minh-Ville ?',
   'a' => 'Non. Quelle que soit la ville ou la province, les autorités vietnamiennes exigent le CCAM avant le mariage — pas après. C\'est une condition sine qua non pour que le comité populaire accepte d\'enregistrer le mariage franco-vietnamien.'],
  ['q' => 'Combien coûte l\'obtention du CCAM ?',
   'a' => 'Le CCAM est gratuit. Les droits de chancellerie pour les actes d\'état civil (dont le CCAM) sont exonérés pour les ressortissants français. Seuls les éventuels frais de traduction de tes documents (acte de naissance…) sont à ta charge.'],
  ['q' => 'Dans quel délai le CCAM est-il délivré ?',
   'a' => 'Compte 4 à 6 semaines entre le dépôt de ton dossier au consulat et la délivrance du CCAM. Ce délai inclut 10 jours de publication des bans et la vérification au SCEC de Nantes. Prévois de déposer ton dossier au moins 4 mois avant la date prévue du mariage.'],
  ['q' => 'L\'audition au consulat est-elle systématique ?',
   'a' => 'Elle n\'est pas obligatoire dans tous les cas — l\'officier d\'état civil peut en dispenser le couple —, mais pour les mariages franco-vietnamiens elle est très fréquente en pratique. Considère-la comme une étape normale du parcours plutôt que comme un signe de suspicion : elle vise à vérifier la réalité du consentement, et un couple sincère la traverse sans difficulté.'],
  ['q' => 'Le CCAM sert-il aussi pour un mariage célébré en France ?',
   'a' => 'Non. Le CCAM est spécifique au mariage d\'un Français à l\'étranger devant des autorités locales. Si vous choisissez de vous marier en France, la procédure est différente : dossier de mariage déposé à la mairie française, publication des bans en mairie, et pour le/la futur(e) époux/se vietnamien(ne), un visa court séjour en vue du mariage. Les deux parcours mènent au même résultat, mais leurs pièces et leurs interlocuteurs diffèrent.'],
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
      <span>CCAM</span>
    </div>
    <span class="article-badge-hero">Se marier</span>
    <h1>Le CCAM : certificat de capacité à mariage — comment l'obtenir au consulat de France</h1>
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
      <li><a href="#section-1">C'est quoi le CCAM ?</a></li>
      <li><a href="#section-2">Pourquoi il est indispensable</a></li>
      <li><a href="#section-3">Qui délivre le CCAM ?</a></li>
      <li><a href="#section-4">Les étapes pour l'obtenir</a></li>
      <li><a href="#section-audition">L'audition consulaire</a></li>
      <li><a href="#section-5">Documents à fournir au consulat</a></li>
      <li><a href="#section-6">Légalisation et apostille (2026)</a></li>
      <li><a href="#section-7">Délais et coûts</a></li>
      <li><a href="#section-cas">Cas particuliers</a></li>
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
    <p><strong>Avant de pouvoir se marier au Vietnam, le partenaire français doit passer par le consulat.</strong> Le CCAM — Certificat de Capacité à Mariage — est la première pièce maîtresse : sans lui, le comité populaire vietnamien refuse d'enregistrer le mariage. Ce guide t'explique exactement ce que c'est, qui le délivre, comment l'obtenir, comment se déroule l'audition consulaire, et les erreurs de calendrier qui coûtent des mois aux couples mal informés.</p>

    <p>Cet article fait partie du <a href="faire-venir-conjointe-vietnamienne-france">guide complet : faire venir son conjoint vietnamien en France</a>.</p>

    <img class="article-photo" src="assets/img/documents-ccam-mariage-etranger.jpg" alt="Documents CCAM pour mariage franco-vietnamien à l'étranger" width="1200" height="675" loading="lazy">

    <h2 id="section-1">C'est quoi le CCAM ?</h2>
    <p>Le CCAM est l'acronyme de <strong>Certificat de Capacité à Mariage</strong> (aussi appelé Certificat de Capacité Matrimoniale). C'est un document officiel <strong>français</strong>, délivré par <strong>l'ambassade de France à Hanoï</strong> ou le <strong>consulat général à Hô Chi Minh-Ville</strong>.</p>
    <p>Il atteste que tu es légalement libre de te marier selon le droit français :</p>
    <ul>
      <li>Tu n'es pas déjà marié(e)</li>
      <li>Tu ne fais l'objet d'aucun empêchement légal au mariage (tutelle incompatible, âge légal non respecté…)</li>
    </ul>
    <p>Le CCAM est obtenu <strong>avant le mariage</strong>, remis aux autorités vietnamiennes lors de l'enregistrement du mariage au comité populaire. Il ne dit rien sur ton/ta partenaire ni sur votre couple : il ne parle que de <em>ta</em> capacité juridique à te marier.</p>

    <div class="tip-box">
      <strong>À ne pas confondre :</strong> Le CCAM n'est PAS établi par un notaire vietnamien, et il n'a rien à voir avec le "certificat de coutume" (un document différent demandé dans d'autres contextes). Le CCAM est un <strong>acte consulaire français</strong>, délivré AVANT le mariage.
    </div>

    <h2 id="section-2">Pourquoi le CCAM est indispensable</h2>
    <p>Le Vietnam exige que tout étranger souhaitant se marier sur son territoire prouve qu'il est libre de le faire selon sa loi nationale. Pour un Français, cette preuve prend la forme du CCAM délivré par le consulat.</p>
    <p>Concrètement, sans CCAM en main :</p>
    <ul>
      <li>Le comité populaire (UBND) refuse d'enregistrer le mariage</li>
      <li>Pas de mariage = pas d'acte de mariage vietnamien</li>
      <li>Pas d'acte de mariage = pas de transcription à Nantes</li>
      <li>Pas de transcription = pas de visa long séjour conjoint de Français</li>
    </ul>
    <p>C'est la première pierre du parcours. Elle conditionne toutes les étapes suivantes.</p>
    <p>Ce mécanisme n'a rien de spécifique au couple franco-vietnamien : chaque pays applique sa propre loi aux conditions de fond du mariage de ses ressortissants (âge, absence de mariage en cours, consentement), et le pays qui célèbre exige la preuve que la loi de l'autre est respectée. Le CCAM est exactement cette preuve, dans le sens France → Vietnam. Dans l'autre sens, le certificat de situation matrimoniale vietnamien (giấy xác nhận tình trạng hôn nhân) joue le rôle symétrique pour ton/ta futur(e) épouse/époux. Comprendre cette symétrie aide à ne pas vivre les exigences des deux administrations comme des tracasseries arbitraires : chacune vérifie sa moitié du puzzle.</p>

    <h2 id="section-3">Qui délivre le CCAM ?</h2>
    <p>Le CCAM est délivré exclusivement par les postes consulaires français au Vietnam :</p>
    <ul>
      <li><strong>L'ambassade de France à Hanoï</strong> — pour les mariages prévus dans le Nord et le Centre</li>
      <li><strong>Le consulat général à Hô Chi Minh-Ville</strong> — pour les mariages dans le Sud</li>
    </ul>
    <p>Avant de délivrer le CCAM, le consulat vérifie ta situation auprès du <strong>Service Central d'État Civil de Nantes</strong> (SCEC) — l'organisme qui tient les registres de l'état civil des Français à l'étranger. Cette vérification fait partie du délai de traitement. Tu retrouveras ce même SCEC deux fois dans ton parcours de couple mixte : ici pour le CCAM, puis après le mariage pour la <a href="transcription-mariage-service-central-nantes">transcription de l'acte vietnamien</a> — autant retenir le nom tout de suite.</p>

    <h2 id="section-4">Les étapes pour obtenir le CCAM</h2>
    <ol>
      <li><strong>Constitue ton dossier</strong> (voir section suivante)</li>
      <li><strong>Dépose-le au consulat</strong> compétent (Hanoï ou HCMV) — en personne ou via mandataire</li>
      <li><strong>Publication des bans</strong> : le consulat affiche les bans pendant <strong>10 jours</strong> sur son tableau officiel</li>
      <li><strong>Vérification au SCEC de Nantes</strong> : le consulat contrôle ta situation matrimoniale dans les registres français</li>
      <li><strong>Délivrance du CCAM</strong> : si aucun empêchement n'est constaté, le consulat émet le certificat</li>
      <li><strong>Mariage au comité populaire</strong> : tu remets le CCAM aux autorités vietnamiennes le jour du mariage</li>
    </ol>
    <p>Après la remise du CCAM, la balle passe côté vietnamien : le dossier de mariage se dépose au comité populaire compétent, qui instruit à son tour (avec ses propres pièces, traductions vers le vietnamien et délais) avant de convoquer les époux pour la signature des registres et la remise du <em>giấy chứng nhận kết hôn</em>, l'acte de mariage vietnamien. Les deux époux doivent être physiquement présents à cette signature. Le déroulé complet côté vietnamien est dans le <a href="se-marier-vietnamienne-demarches-france">guide du mariage franco-vietnamien</a>.</p>
    <p>Durée de validité du CCAM : <strong>1 an</strong>. S'il expire avant le mariage, tu dois en redemander un.</p>

    <h2 id="section-audition">L'audition consulaire : l'étape que personne n'anticipe</h2>
    <p>Avant de délivrer le CCAM, le consulat peut — et en pratique le fait très souvent pour les mariages franco-vietnamiens — convoquer les futurs époux à une <strong>audition</strong>. C'est une exigence du Code civil français : l'officier d'état civil doit s'assurer de la réalité du consentement et de l'absence de mariage de complaisance ou forcé. Concrètement :</p>
    <ul>
      <li>L'audition peut concerner les deux partenaires, <strong>ensemble ou séparément</strong> — le format séparé est courant, précisément pour comparer les réponses.</li>
      <li>Les questions portent sur l'histoire du couple : rencontre, communication au quotidien (dans quelle langue ?), rencontres avec les familles, projets communs, connaissance mutuelle des vies de chacun.</li>
      <li>Le partenaire vietnamien est généralement entendu en vietnamien — pas besoin de paniquer sur son niveau de français à ce stade.</li>
      <li>Il n'y a rien à « réviser » : un couple réel qui répond simplement et honnêtement passe cette étape sans difficulté. Les incohérences flagrantes (dates contradictoires, ignorance mutuelle manifeste) sont ce que l'audition cherche à détecter.</li>
    </ul>
    <p>Cette audition est le premier des deux entretiens possibles du parcours — le second pouvant intervenir au moment du visa. Les deux obéissent à la même logique, détaillée dans notre guide de <a href="entretien-ambassade-france-vietnam-visa-conjoint">l'entretien à l'ambassade</a>. Si le consulat détecte un risque sérieux, il peut saisir le procureur de la République de Nantes, qui peut s'opposer au mariage — c'est rare, et ça vise les fraudes caractérisées, pas les couples sincères.</p>

    <div style="background:linear-gradient(135deg,#0d2b1f,#1b4a35);border-radius:10px;padding:1.5rem 2rem;margin:1.5rem 0;display:flex;align-items:center;justify-content:space-between;gap:1.5rem;flex-wrap:wrap">
      <div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:0.4rem">📅 Outil interactif</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.05rem;color:#faf8f4;margin-bottom:0.25rem">Rétroplanning — CCAM et visa conjoint</h3>
        <p style="font-size:0.87rem;color:rgba(250,248,244,0.55);margin:0">Calculez les délais de vos démarches étape par étape</p>
      </div>
      <a href="retroplanning-faire-venir-conjoint" style="flex-shrink:0;display:inline-flex;align-items:center;gap:0.5rem;padding:0.7rem 1.4rem;background:#4db890;color:#0d2b1f;border-radius:5px;font-weight:700;font-size:0.87rem;text-decoration:none;white-space:nowrap">Voir le simulateur →</a>
    </div>

    <h2 id="section-5">Documents à fournir au consulat</h2>
    <p>La liste exacte est publiée sur le site de l'ambassade de France à Hanoï (ambafrance-vn.org) — c'est elle qui fait foi, et elle évolue. Voici les pièces habituellement demandées, pour te donner une vision d'ensemble et lancer la collecte des deux côtés en parallèle :</p>

    <div style="overflow-x:auto;border-radius:10px;border:1px solid rgba(232,133,106,0.18);margin:1.5rem 0;">
    <table style="width:100%;border-collapse:collapse;font-size:0.9rem;">
      <thead>
        <tr style="background:rgba(191,74,42,0.22);">
          <th style="padding:0.7rem 1rem;text-align:left;color:#e8856a;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;width:50%;">DOCUMENT</th>
          <th style="padding:0.7rem 1rem;text-align:left;color:#e8856a;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">REMARQUE</th>
        </tr>
      </thead>
      <tbody>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Formulaire de demande de CCAM</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Disponible sur le site de l'ambassade / consulat</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Acte de naissance intégral du Français (copie intégrale)</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Moins de 3 mois · la copie intégrale fait office de justificatif de situation matrimoniale (le certificat de célibat a été supprimé en France en 2000) · si divorcé(e) : joindre aussi le jugement de divorce · si veuf/ve : acte de décès du conjoint précédent</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Justificatif de domicile</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Moins de 6 mois à ton nom (facture EDF, quittance de loyer…)</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Passeport du Français (original + copie)</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">En cours de validité</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Passeport du conjoint vietnamien (copie)</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Page d'identité + pages avec cachets/visas</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Acte de naissance du conjoint vietnamien</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Bản sao — délivré par le service judiciaire · traduit en français par traducteur assermenté</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Certificat de situation matrimoniale du conjoint vietnamien</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Giấy xác nhận tình trạng hôn nhân — délivré par la mairie vietnamienne · traduit en français</td>
        </tr>
        <tr>
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Attestation de résidence du conjoint vietnamien</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Modèle CT07 — délivré par la police locale · certifiée conforme et traduite en français</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="tip-box">
      <strong>Consulte toujours le site du consulat compétent</strong> pour la liste à jour — les pièces peuvent varier légèrement selon le poste (Hanoï / HCMV) et ta situation personnelle (divorcé, enfants reconnus, etc.).
    </div>

    <h2 id="section-6">Légalisation et apostille des documents vietnamiens (2026)</h2>
    <div class="tip-box">
      <strong>Légalisation ou apostille ?</strong> Les documents vietnamiens utilisés en France (acte de mariage, acte de naissance…) nécessitent aujourd'hui une <b>légalisation consulaire</b>. À partir du <b>11 septembre 2026</b>, l'<b>apostille</b> (Convention de La Haye — adhésion du Vietnam déposée le 31/12/2025) remplacera la légalisation. Autorité compétente pour l'apostille : MAE vietnamien (Hanoï / HCMV). <a href="https://www.hcch.net/fr/states/authorities/details3/?aid=1596" target="_blank" rel="noopener">Source : hcch.net</a> — <a href="apostille-vietnam-francais-2026">Guide complet sur l'apostille au Vietnam</a>
    </div>
    <p>Note : le CCAM lui-même est un document officiel français — il ne nécessite aucune légalisation ni apostille pour être remis au consulat. En revanche, pour son usage auprès des autorités vietnamiennes (comité populaire), une traduction en vietnamien et des formalités de certification locales peuvent être exigées selon les provinces — le consulat et le comité populaire t'indiqueront la marche exacte. Et c'est l'acte de mariage vietnamien (émis après la cérémonie) qui devra être légalisé ou apostillé pour être utilisé en France dans le cadre de la transcription à Nantes.</p>

    <h2 id="section-7">Délais et coûts</h2>

    <div style="overflow-x:auto;border-radius:10px;border:1px solid rgba(232,133,106,0.18);margin:1.5rem 0;">
    <table style="width:100%;border-collapse:collapse;font-size:0.9rem;">
      <thead>
        <tr style="background:rgba(191,74,42,0.22);">
          <th style="padding:0.7rem 1rem;text-align:left;color:#e8856a;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;width:40%;">ÉTAPE</th>
          <th style="padding:0.7rem 1rem;text-align:left;color:#e8856a;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;width:30%;">DÉLAI</th>
          <th style="padding:0.7rem 1rem;text-align:left;color:#e8856a;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">COÛT</th>
        </tr>
      </thead>
      <tbody>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Publication des bans (consulat)</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">10 jours</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Gratuit</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Traitement complet du dossier</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;"><strong>4 à 6 semaines</strong></td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Gratuit (droits de chancellerie exonérés)</td>
        </tr>
        <tr>
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Traduction de documents (si besoin)</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Variable</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">À ta charge (traducteur assermenté)</td>
        </tr>
      </tbody>
    </table>
    </div>

    <p><strong>Règle d'or :</strong> dépose ton dossier <strong>au moins 4 mois avant la date prévue du mariage</strong>. Cela te laisse une marge en cas de pièce manquante ou de délai imprévu.</p>
    <p>Et n'oublie pas d'additionner les délais des deux côtés : au CCAM français s'ajoute ensuite l'instruction vietnamienne du dossier de mariage par le comité populaire, avec ses propres semaines d'attente. C'est la somme des deux qui fait le vrai calendrier — et c'est pour ça que les couples qui visent une date symbolique (anniversaire de rencontre, date choisie par la famille pour sa bonne fortune) s'y prennent six mois à un an à l'avance. Le simulateur de rétroplanning ci-dessus fait précisément ce calcul cumulé.</p>

    <p>Une fois le CCAM obtenu et le mariage célébré, l'étape suivante est la transcription du mariage à Nantes.<br>
    → <a href="transcription-mariage-service-central-nantes">Guide : transcription du mariage au SCEC de Nantes</a></p>

    <h2 id="section-cas">Cas particuliers : divorce, veuvage, remariage</h2>
    <ul>
      <li><strong>Tu es divorcé(e)</strong> : la mention du divorce doit figurer en marge de ton acte de naissance français — vérifie-le en demandant ta copie intégrale <em>avant</em> de constituer le dossier. Si le divorce est récent et pas encore mentionné, fais d'abord la mise à jour auprès de ta mairie de naissance ; joindre le jugement ne suffit pas toujours.</li>
      <li><strong>Tu es veuf/veuve</strong> : l'acte de décès du précédent conjoint s'ajoute au dossier.</li>
      <li><strong>Ton/ta futur(e) époux/se vietnamien(ne) est divorcé(e)</strong> : côté vietnamien, le certificat de situation matrimoniale (giấy xác nhận tình trạng hôn nhân) mentionnera le divorce, et le jugement vietnamien peut être demandé. Prévois les traductions correspondantes.</li>
      <li><strong>Le mariage aura lieu dans une province éloignée</strong> : le CCAM reste délivré par le poste consulaire (Hanoï pour le Nord et le Centre, HCMV pour le Sud), mais c'est le comité populaire provincial du lieu de résidence du conjoint vietnamien qui enregistrera le mariage. Les usages locaux varient d'une province à l'autre — la famille vietnamienne est ton meilleur radar sur les pratiques du comité populaire local.</li>
    </ul>

    <h2 id="section-erreurs">Les erreurs fréquentes</h2>
    <ul>
      <li><strong>Sous-estimer le calendrier</strong> : entre la collecte des pièces françaises (acte de naissance de moins de 3 mois envoyé depuis la France), la publication des bans et la vérification à Nantes, le CCAM se prépare des mois avant la date de mariage rêvée — pas des semaines.</li>
      <li><strong>Laisser expirer une pièce pendant que les autres arrivent</strong> : l'acte de naissance de moins de 3 mois est la pièce la plus périssable du dossier. Commande-le en dernier, quand tout le reste est prêt.</li>
      <li><strong>Confondre CCAM et certificat de coutume</strong> : des intermédiaires vietnamiens demandent parfois un « certificat de coutume » aux Français — c'est un document d'un autre contexte. Pour un mariage au Vietnam, c'est le CCAM, délivré par le consulat, point.</li>
      <li><strong>Réserver la fête avant d'avoir le CCAM</strong> : au Vietnam, la cérémonie familiale et l'enregistrement légal sont deux événements distincts. Beaucoup de couples fêtent le mariage à la date choisie par la famille, mais l'enregistrement au comité populaire, lui, ne peut pas précéder le CCAM. Ne bloque pas de date d'enregistrement sans marge.</li>
      <li><strong>Oublier que le CCAM expire</strong> : un an de validité. Si le projet glisse (grossesse, mutation, pandémie…), recale le calendrier et redemande à temps.</li>
    </ul>

    <?php
    $page_sources = [
      ['label' => 'France Diplomatie — services aux Français de l\'étranger', 'url' => 'https://www.diplomatie.gouv.fr'],
      ['label' => 'Ambassade de France au Vietnam', 'url' => 'https://vn.ambafrance.org'],
      ['label' => 'Service-Public.fr — fiches officielles droits et démarches', 'url' => 'https://www.service-public.fr'],
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
$current_slug = 'certificat-capacite-mariage-vietnam';
$current_cat  = 'mariage';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
