<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Déclaration pré-arrivée Vietnam (PAI) : la nouvelle formalité obligatoire 2026';
$page_description = 'Depuis avril 2026, une déclaration en ligne est obligatoire avant tout vol vers les principaux aéroports du Vietnam. Formulaire gratuit, QR code, étapes et site officiel.';
$page_canonical   = SITE_URL . '/declaration-pre-arrivee-vietnam-pai-2026';
$page_og_title    = 'Déclaration pré-arrivée Vietnam (PAI) — Nouvelle formalité obligatoire 2026';
$page_og_desc     = 'Formulaire PAI gratuit à remplir dans les 72h avant votre vol vers HCMV, Hanoï, Da Nang ou Phu Quoc. Mode d\'emploi complet et lien officiel.';
$page_og_url      = SITE_URL . '/declaration-pre-arrivee-vietnam-pai-2026';
$page_og_image    = 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Déclaration pré-arrivée Vietnam (PAI) : la nouvelle formalité obligatoire 2026',
  'datePublished'   => '2026-06-23',
  'dateModified'    => '2026-06-23',
  'author'          => ['@type' => 'Person', 'name' => 'Anthony Bouillon', 'url' => SITE_URL],
  'publisher'       => ['@type' => 'Organization', 'name' => 'Cap Vietnam'],
  'mainEntityOfPage'=> SITE_URL . '/declaration-pre-arrivee-vietnam-pai-2026',
  'image'           => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&q=80',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie pratique au Vietnam',
]);

$article_color   = 'jade';
$article_hero_bg = '#1a3a2e';
$article_glow    = 'rgba(27,107,82,0.15)';
$article_badge   = 'rgba(191,74,42,0.25)';
$article_badge_c = '#e8856a';

$article_category     = 'Vie pratique au Vietnam';
$article_category_url = SITE_URL . '/articles-capvietnam';

$page_faq = [
  ['q' => 'Le PAI remplace-t-il le visa ?',
   'a' => 'Non. Le PAI est une déclaration administrative séparée. Si vous avez besoin d\'un visa pour entrer au Vietnam (e-visa, visa d\'affaires, etc.), vous devez l\'obtenir avant le vol en plus du PAI.'],
  ['q' => 'Combien de temps avant mon vol dois-je remplir le PAI ?',
   'a' => 'Le formulaire n\'est accessible que dans les 72 heures précédant votre arrivée. Ne le remplissez pas trop tôt — le système refusera votre demande.'],
  ['q' => 'Le PAI est-il gratuit ?',
   'a' => 'Oui, totalement gratuit. Méfiez-vous des sites tiers qui facturent une "aide à la complétion" — le seul site officiel est <a href="https://prearrival.immigration.gov.vn/" target="_blank" rel="noopener">prearrival.immigration.gov.vn</a>.'],
  ['q' => 'Que se passe-t-il si j\'oublie de le remplir ?',
   'a' => 'Les autorités peuvent refuser l\'embarquement ou retarder votre passage à l\'immigration à l\'arrivée. Dans les aéroports concernés, le PAI est contrôlé au check-in et à l\'arrivée.'],
  ['q' => 'Les Vietnamiens résidant en France doivent-ils aussi le remplir ?',
   'a' => 'Oui. La formalité s\'applique à tous les voyageurs étrangers ainsi qu\'aux Vietnamiens résidant à l\'étranger (Việt kiều) arrivant dans les aéroports concernés.'],
];

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="<?= SITE_URL ?>">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="<?= SITE_URL ?>/articles-capvietnam">Vie pratique</a><span class="breadcrumb-sep">›</span>
      <span>Déclaration pré-arrivée PAI</span>
    </div>
    <span class="article-badge-hero">Vie pratique au Vietnam</span>
    <h1>Déclaration pré-arrivée Vietnam (PAI) : la nouvelle formalité obligatoire 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="<?= SITE_URL ?>/a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 23 juin 2026</span>
      <span>⏱ 6 min de lecture</span>
      <span>Mis&nbsp;à&nbsp;jour&nbsp;: Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-quoi">C'est quoi le PAI ?</a></li>
      <li><a href="#section-aeroports">Aéroports concernés</a></li>
      <li><a href="#section-comment">Comment remplir le formulaire</a></li>
      <li><a href="#section-infos">Informations requises</a></li>
      <li><a href="#section-qr">Le QR code</a></li>
      <li><a href="#section-piege">Ce que le PAI ne remplace pas</a></li>
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

    <p><strong>Depuis le 15 avril 2026, une nouvelle formalité s'impose à tous les voyageurs arrivant dans les grands aéroports du Vietnam.</strong> Cette déclaration en ligne — appelée PAI pour <em>Pre-Arrival Information</em> — doit être remplie dans les 72 heures avant votre vol. Elle est gratuite, rapide, et obligatoire. Voici tout ce qu'il faut savoir pour ne pas se faire bloquer à l'embarquement.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&q=80" alt="Aéroport — déclaration pré-arrivée Vietnam PAI 2026" width="1200" height="675" loading="lazy">

    <div class="info-box">
      <strong>📌 En résumé :</strong> rendez-vous sur <a href="https://prearrival.immigration.gov.vn/" target="_blank" rel="noopener"><strong>prearrival.immigration.gov.vn</strong></a>, remplissez le formulaire dans les 72h avant votre arrivée, conservez le QR code reçu. Gratuit, 5 minutes à remplir.
    </div>

    <h2 id="section-quoi">C'est quoi le PAI ?</h2>

    <p>Le PAI (<em>Pre-Arrival Information</em>) est un formulaire d'enregistrement électronique obligatoire, mis en place par la Direction de l'immigration du ministère de la Sécurité publique du Vietnam. Son objectif est de <strong>fluidifier les contrôles aux frontières</strong> en permettant aux autorités de vérifier les informations des voyageurs avant leur atterrissage.</p>

    <p>Concrètement, vous renseignez vos coordonnées, vos détails de vol, votre visa (ou votre exemption) et votre adresse d'hébergement. En retour, vous recevez un QR code à présenter à l'immigration.</p>

    <div class="warning-box">
      <strong>⚠️ Méfiez-vous des sites tiers :</strong> des sites privés proposent de remplir le PAI à votre place contre paiement. Le formulaire officiel est <strong>totalement gratuit</strong> sur <a href="https://prearrival.immigration.gov.vn/" target="_blank" rel="noopener">prearrival.immigration.gov.vn</a>. Ne payez rien.
    </div>

    <h2 id="section-aeroports">Aéroports concernés et dates d'entrée en vigueur</h2>

    <p>Le déploiement du PAI s'est fait progressivement depuis avril 2026 :</p>

    <div style="overflow-x:auto;margin:1.5rem 0">
      <table style="width:100%;border-collapse:collapse;font-size:.93rem">
        <thead>
          <tr style="background:#1b4a35;color:#fff">
            <th style="padding:.75rem 1rem;text-align:left">Aéroport</th>
            <th style="padding:.75rem 1rem;text-align:left">Code</th>
            <th style="padding:.75rem 1rem;text-align:left">Obligatoire depuis</th>
          </tr>
        </thead>
        <tbody>
          <tr style="background:#fff;border-bottom:1px solid #e5e1d8">
            <td style="padding:.75rem 1rem">Tan Son Nhat — Hô Chi Minh-Ville</td>
            <td style="padding:.75rem 1rem"><strong>SGN</strong></td>
            <td style="padding:.75rem 1rem">15 avril 2026</td>
          </tr>
          <tr style="background:#f9f7f4;border-bottom:1px solid #e5e1d8">
            <td style="padding:.75rem 1rem">Phu Quoc International</td>
            <td style="padding:.75rem 1rem"><strong>PQC</strong></td>
            <td style="padding:.75rem 1rem">1er juin 2026</td>
          </tr>
          <tr style="background:#fff;border-bottom:1px solid #e5e1d8">
            <td style="padding:.75rem 1rem">Noi Bai — Hanoï</td>
            <td style="padding:.75rem 1rem"><strong>HAN</strong></td>
            <td style="padding:.75rem 1rem">8 juin 2026</td>
          </tr>
          <tr style="background:#f9f7f4">
            <td style="padding:.75rem 1rem">Da Nang International</td>
            <td style="padding:.75rem 1rem"><strong>DAD</strong></td>
            <td style="padding:.75rem 1rem">15 juin 2026</td>
          </tr>
        </tbody>
      </table>
    </div>

    <p>Les autres aéroports (Cam Ranh, Cat Bi, Phu Cat…) ne sont pas encore soumis à cette obligation à la date de publication de cet article, mais l'extension est probable dans les prochains mois.</p>

    <h2 id="section-comment">Comment remplir le formulaire PAI</h2>

    <p>Le site officiel est : <a href="https://prearrival.immigration.gov.vn/" target="_blank" rel="noopener" style="font-weight:700;font-size:1.05rem">→ prearrival.immigration.gov.vn</a></p>

    <p>Quelques points importants avant de commencer :</p>

    <ul class="article-list">
      <li><strong>Fenêtre de 72 heures :</strong> le système n'accepte les soumissions que dans les 72h précédant votre heure d'atterrissage prévue. Ne tentez pas de le remplir une semaine avant — ça ne fonctionnera pas.</li>
      <li><strong>Délai de traitement :</strong> dans la pratique, la validation est rapide (quelques minutes à quelques heures). Ne faites pas ça à la dernière minute — visez 24h avant le départ.</li>
      <li><strong>Langue disponible :</strong> le formulaire est disponible en anglais et en vietnamien.</li>
    </ul>

    <h2 id="section-infos">Informations requises</h2>

    <p>Préparez les éléments suivants avant de commencer :</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin:1.5rem 0">
      <div style="background:#f0faf5;border:1px solid #c7e8d8;border-radius:8px;padding:1.25rem">
        <div style="font-weight:700;color:#1b4a35;margin-bottom:.5rem">🛂 Votre passeport</div>
        <ul style="font-size:.9rem;color:#555;margin:0;padding-left:1.1rem;line-height:1.8">
          <li>Numéro de passeport</li>
          <li>Date d'expiration</li>
          <li>Nationalité</li>
          <li>Copie scannée (page photo)</li>
        </ul>
      </div>
      <div style="background:#f0faf5;border:1px solid #c7e8d8;border-radius:8px;padding:1.25rem">
        <div style="font-weight:700;color:#1b4a35;margin-bottom:.5rem">✈️ Votre vol</div>
        <ul style="font-size:.9rem;color:#555;margin:0;padding-left:1.1rem;line-height:1.8">
          <li>Numéro de vol</li>
          <li>Date et heure d'arrivée</li>
          <li>Aéroport d'arrivée</li>
        </ul>
      </div>
      <div style="background:#f0faf5;border:1px solid #c7e8d8;border-radius:8px;padding:1.25rem">
        <div style="font-weight:700;color:#1b4a35;margin-bottom:.5rem">🏨 Votre séjour</div>
        <ul style="font-size:.9rem;color:#555;margin:0;padding-left:1.1rem;line-height:1.8">
          <li>Adresse d'hébergement complète</li>
          <li>Date de départ prévu</li>
          <li>Motif du séjour</li>
          <li>Visa ou justificatif d'exemption</li>
        </ul>
      </div>
    </div>

    <h2 id="section-qr">Le QR code</h2>

    <p>Une fois le formulaire validé, vous recevez un <strong>QR code par email</strong>. Conservez-le bien — vous devrez le présenter :</p>

    <ul class="article-list">
      <li>Au moment de l'enregistrement (check-in) auprès de la compagnie aérienne</li>
      <li>À l'arrivée au contrôle des passeports</li>
    </ul>

    <p>Imprimez-le ou gardez-le visible sur votre téléphone. Assurez-vous d'avoir accès à votre email avant de décoller — ne comptez pas sur une connexion WiFi à bord pour le retrouver.</p>

    <h2 id="section-piege">Ce que le PAI ne remplace pas</h2>

    <p>Point essentiel à comprendre : <strong>le PAI n'est pas un visa</strong>. C'est une déclaration administrative qui s'ajoute aux formalités d'entrée, elle ne les remplace pas.</p>

    <p>Si vous avez besoin d'un visa pour entrer au Vietnam, vous devez continuer à l'obtenir séparément (e-visa, visa ambassade, etc.) <em>en plus</em> du PAI. Pour les Français bénéficiant de l'exemption de 45 jours, l'exemption reste valable — le PAI est simplement une formalité additionnelle.</p>

    <div class="info-box">
      <strong>📌 Récapitulatif pour un Français en tourisme :</strong><br>
      Séjour ≤ 45 jours → exemption de visa (inchangée) <strong>+ PAI obligatoire</strong><br>
      Séjour &gt; 45 jours → e-visa <strong>+ PAI obligatoire</strong>
    </div>

    <p>Pour tout ce qui concerne les visas, consultez le <a href="<?= SITE_URL ?>/visa-vietnam-francais-guide-2026">guide complet des visas Vietnam pour Français</a>.</p>

    <h2 id="section-faq">Questions fréquentes</h2>

    <?php foreach ($page_faq as $item): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($item['q'], ENT_QUOTES) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $item['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="article-cta-box">
      <div class="article-cta-icon">📦</div>
      <div>
        <strong>Vous préparez votre arrivée au Vietnam ?</strong><br>
        <span>Téléchargez le pack gratuit Cap Vietnam : guide PDF mariage &amp; visa, checklist et modèles de lettres.</span>
        <a href="<?= SITE_URL ?>/pack-gratuit" class="article-cta-link">Obtenir le pack →</a>
      </div>
    </div>

  </main>
</div>

<?php
$lm_context = 'popup';
include 'lead-magnet.php';
?>

<?php include '_related-articles.php'; ?>
<?php include 'footer.php'; ?>
