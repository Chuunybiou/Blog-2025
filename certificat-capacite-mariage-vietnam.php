<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'CCAM — Certificat de Capacité à Mariage : comment l\'obtenir au consulat de France';
$page_description = 'Le CCAM (Certificat de Capacité à Mariage) est délivré par le consulat français AVANT le mariage au Vietnam. À demander 4 mois avant : mode d\'emploi complet, documents, délais.';
$page_canonical   = SITE_URL . '/certificat-capacite-mariage-vietnam';
$page_og_title    = 'CCAM — Certificat de Capacité à Mariage au Vietnam : guide complet 2026';
$page_og_desc     = 'Le CCAM est délivré par l\'ambassade de France AVANT le mariage. Étapes, documents, délais et coûts pour le couple franco-vietnamien.';
$page_og_url      = SITE_URL . '/certificat-capacite-mariage-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'CCAM — Certificat de Capacité à Mariage : comment l\'obtenir au consulat de France',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-16',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/certificat-capacite-mariage-vietnam',
  'image'           => 'https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80',
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
      <span>⏱ 7 min de lecture</span>
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
      <li><a href="#section-5">Documents à fournir au consulat</a></li>
      <li><a href="#section-6">Légalisation et apostille (2026)</a></li>
      <li><a href="#section-7">Délais et coûts</a></li>
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
    <p><strong>Avant de pouvoir se marier au Vietnam, le partenaire français doit passer par le consulat.</strong> Le CCAM — Certificat de Capacité à Mariage — est la première pièce maîtresse : sans lui, le comité populaire vietnamien refuse d'enregistrer le mariage. Ce guide t'explique exactement ce que c'est, qui le délivre et comment l'obtenir.</p>

    <p>Cet article fait partie du <a href="faire-venir-conjointe-vietnamienne-france">guide complet : faire venir son conjoint vietnamien en France</a>.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200&q=80" alt="Paris — certificat de capacité à mariage au consulat de France" width="1200" height="675" loading="lazy">

    <h2 id="section-1">C'est quoi le CCAM ?</h2>
    <p>Le CCAM est l'acronyme de <strong>Certificat de Capacité à Mariage</strong> (aussi appelé Certificat de Capacité Matrimoniale). C'est un document officiel <strong>français</strong>, délivré par <strong>l'ambassade de France à Hanoï</strong> ou le <strong>consulat général à Hô Chi Minh-Ville</strong>.</p>
    <p>Il atteste que tu es légalement libre de te marier selon le droit français :</p>
    <ul>
      <li>Tu n'es pas déjà marié(e)</li>
      <li>Tu ne fais l'objet d'aucun empêchement légal au mariage (tutelle incompatible, âge légal non respecté…)</li>
    </ul>
    <p>Le CCAM est obtenu <strong>avant le mariage</strong>, remis aux autorités vietnamiennes lors de l'enregistrement du mariage au comité populaire.</p>

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

    <h2 id="section-3">Qui délivre le CCAM ?</h2>
    <p>Le CCAM est délivré exclusivement par les postes consulaires français au Vietnam :</p>
    <ul>
      <li><strong>L'ambassade de France à Hanoï</strong> — pour les mariages prévus dans le Nord et le Centre</li>
      <li><strong>Le consulat général à Hô Chi Minh-Ville</strong> — pour les mariages dans le Sud</li>
    </ul>
    <p>Avant de délivrer le CCAM, le consulat vérifie ta situation auprès du <strong>Service Central d'État Civil de Nantes</strong> (SCEC) — l'organisme qui tient les registres de l'état civil des Français à l'étranger. Cette vérification fait partie du délai de traitement.</p>

    <h2 id="section-4">Les étapes pour obtenir le CCAM</h2>
    <ol>
      <li><strong>Constitue ton dossier</strong> (voir section suivante)</li>
      <li><strong>Dépose-le au consulat</strong> compétent (Hanoï ou HCMV) — en personne ou via mandataire</li>
      <li><strong>Publication des bans</strong> : le consulat affiche les bans pendant <strong>10 jours</strong> sur son tableau officiel</li>
      <li><strong>Vérification au SCEC de Nantes</strong> : le consulat contrôle ta situation matrimoniale dans les registres français</li>
      <li><strong>Délivrance du CCAM</strong> : si aucun empêchement n'est constaté, le consulat émet le certificat</li>
      <li><strong>Mariage au comité populaire</strong> : tu remets le CCAM aux autorités vietnamiennes le jour du mariage</li>
    </ol>
    <p>Durée de validité du CCAM : <strong>1 an</strong>. S'il expire avant le mariage, tu dois en redemander un.</p>

    <div style="background:linear-gradient(135deg,#0d2b1f,#1b4a35);border-radius:10px;padding:1.5rem 2rem;margin:1.5rem 0;display:flex;align-items:center;justify-content:space-between;gap:1.5rem;flex-wrap:wrap">
      <div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:0.4rem">📅 Outil interactif</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.05rem;color:#faf8f4;margin-bottom:0.25rem">Rétroplanning — CCAM et visa conjoint</h3>
        <p style="font-size:0.87rem;color:rgba(250,248,244,0.55);margin:0">Calculez les délais de vos démarches étape par étape</p>
      </div>
      <a href="retroplanning-faire-venir-conjoint" style="flex-shrink:0;display:inline-flex;align-items:center;gap:0.5rem;padding:0.7rem 1.4rem;background:#4db890;color:#0d2b1f;border-radius:5px;font-weight:700;font-size:0.87rem;text-decoration:none;white-space:nowrap">Voir le simulateur →</a>
    </div>

    <h2 id="section-5">Documents à fournir au consulat</h2>
    <p>La liste exacte est publiée sur le site de l'ambassade de France à Hanoï (ambafrance-vn.org). Voici les pièces habituellement demandées :</p>

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
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Acte de naissance intégral du Français</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Moins de 3 mois · avec apostille si requis</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Justificatif de situation matrimoniale</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Certificat de célibat de la mairie — ou acte de divorce / décès si précédemment marié</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Passeport du Français (original + copie)</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">En cours de validité</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Passeport du conjoint vietnamien (copie)</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">—</td>
        </tr>
        <tr>
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;">Acte de naissance du conjoint vietnamien</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.82;">Traduit en français par traducteur assermenté</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="tip-box">
      <strong>Consulte toujours le site du consulat compétent</strong> pour la liste à jour — les pièces peuvent varier légèrement selon le poste (Hanoï / HCMV) et ta situation personnelle (divorcé, enfants reconnus, etc.).
    </div>

    <h2 id="section-6">Légalisation et apostille des documents vietnamiens (2026)</h2>
    <div class="tip-box">
      <strong>Légalisation ou apostille ?</strong> Les documents vietnamiens utilisés en France (acte de mariage, acte de naissance…) nécessitent aujourd'hui une <strong>légalisation consulaire</strong>. À partir du <strong>11 septembre 2026</strong>, l'<strong>apostille</strong> (Convention de La Haye — adhésion du Vietnam déposée le 31/12/2025) remplacera la légalisation. Autorité compétente pour l'apostille : MAE vietnamien (Hanoï / HCMV). <a href="https://www.hcch.net/fr/states/authorities/details3/?aid=1596" target="_blank" rel="noopener">Source : hcch.net</a>
    </div>
    <p>Note : le CCAM lui-même est un document officiel français — il ne nécessite aucune légalisation ni apostille. C'est l'acte de mariage vietnamien (émis après la cérémonie) qui devra être légalisé ou apostillé pour être utilisé en France dans le cadre de la transcription à Nantes.</p>

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

    <p>Une fois le CCAM obtenu et le mariage célébré, l'étape suivante est la transcription du mariage à Nantes.<br>
    → <a href="transcription-mariage-service-central-nantes">Guide : transcription du mariage au SCEC de Nantes</a></p>

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
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a> — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
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
$current_slug = 'certificat-capacite-mariage-vietnam';
$current_cat  = 'mariage';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
