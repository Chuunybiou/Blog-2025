<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'CCAM Vietnam : certificat de coutume et acte de mariage pour la France';
$page_description = 'Le CCAM (certificat de coutume et acte de mariage) est indispensable pour faire reconnaître ton mariage au Vietnam en France. Comment l\'obtenir, auprès de qui et combien ça coûte.';
$page_canonical   = SITE_URL . '/certificat-coutumier-acte-mariage-vietnam-ccam';
$page_og_title    = 'CCAM Vietnam : obtenir le certificat de coutume et l\'acte de mariage';
$page_og_desc     = 'Le CCAM est le premier document clé pour faire reconnaître votre mariage vietnamien en France. Guide pratique 2026.';
$page_og_url      = SITE_URL . '/certificat-coutumier-acte-mariage-vietnam-ccam';
$page_og_image    = 'https://images.unsplash.com/photo-1562564055-71e051d33c19?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'CCAM Vietnam : certificat de coutume et acte de mariage pour la France',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/certificat-coutumier-acte-mariage-vietnam-ccam',
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
  ['q' => 'Qu\'est-ce que le CCAM exactement ?',
   'a' => 'Le CCAM (certificat de coutume et acte de mariage) est un document établi par un notaire vietnamien qui certifie que ton mariage a été célébré conformément au droit vietnamien et qu\'il est reconnu comme valide au Vietnam. Il est ensuite légalisé ou apostillé pour être utilisable en France.'],
  ['q' => 'Peut-on se passer du CCAM si le mariage a eu lieu dans une grande ville comme Hanoï ?',
   'a' => 'Non. Quelle que soit la ville vietnamienne où le mariage a eu lieu, le CCAM est requis pour initier la transcription du mariage au Service Central d\'État Civil de Nantes.'],
  ['q' => 'Combien coûte l\'obtention du CCAM ?',
   'a' => 'Les honoraires du notaire vietnamien sont de l\'ordre de [À VÉRIFIER] VND à [À VÉRIFIER] VND. Les frais de légalisation ou d\'apostille à l\'ambassade s\'y ajoutent : [À VÉRIFIER] €.'],
  ['q' => 'Dans quel délai le CCAM est-il délivré ?',
   'a' => 'Compter environ [À VÉRIFIER] semaines entre la demande auprès du notaire et la réception du document légalisé. Prévois une marge pour les contretemps administratifs.'],
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
      <span>CCAM</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>CCAM Vietnam : le certificat de coutume et l'acte de mariage pour la France</h1>
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
      <li><a href="#section-3">Qui l'établit ?</a></li>
      <li><a href="#section-4">Les étapes pour l'obtenir</a></li>
      <li><a href="#section-5">Documents à fournir</a></li>
      <li><a href="#section-6">Légalisation ou apostille ?</a></li>
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
    <p><strong>Quatre lettres qui reviennent dans toutes les conversations de couples franco-vietnamiens : CCAM.</strong> Ce document, méconnu avant de se lancer dans les démarches, est la clé qui permet à l'état civil français de reconnaître ton mariage célébré au Vietnam. Sans lui, pas de transcription à Nantes. Sans transcription, pas de visa pour ton conjoint.</p>

    <p>Cet article fait partie du <a href="faire-venir-conjointe-vietnamienne-france">guide complet sur le regroupement familial franco-vietnamien</a>.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1562564055-71e051d33c19?w=1200&q=80" alt="Documents officiels mariage vietnam" width="1200" height="675" loading="lazy">

    <h2 id="section-1">C'est quoi le CCAM ?</h2>
    <p>Le CCAM est l'acronyme de <strong>Certificat de Coutume et Acte de Mariage</strong>. Il s'agit d'un document établi par un <em>notaire vietnamien</em> (ou parfois désigné sous le nom de "bureau des affaires étrangères" selon la province) qui certifie :</p>
    <ul>
      <li>Que ton mariage a été célébré conformément au droit vietnamien</li>
      <li>Que les deux parties étaient libres de se marier au regard de la loi vietnamienne (absence d'empêchement)</li>
      <li>Que le mariage est légalement reconnu au Vietnam</li>
    </ul>
    <p>Ce document fait ensuite l'objet d'une légalisation ou d'une apostille pour être reconnu en France.</p>

    <h2 id="section-2">Pourquoi le CCAM est indispensable</h2>
    <p>La France ne reconnaît pas automatiquement les mariages célébrés à l'étranger. Pour que ton mariage vietnamien soit inscrit dans les registres français (transcription au SCEC de Nantes), tu dois apporter la preuve que ce mariage est valide selon le droit du pays où il a été célébré — c'est exactement ce que certifie le CCAM.</p>
    <p>Sans CCAM correctement légalisé, le Service Central d'État Civil de Nantes refusera le dossier de transcription. Et sans acte de mariage français transcrit, la demande de visa long séjour "conjoint de Français" n'a pas de base légale.</p>

    <h2 id="section-3">Qui établit le CCAM ?</h2>
    <p>Le CCAM est établi par :</p>
    <ul>
      <li>Un <strong>notaire vietnamien (phòng công chứng)</strong> agréé dans la province où le mariage a été célébré, ou</li>
      <li>Le <strong>Département de Justice (Sở Tư pháp)</strong> de la province concernée [À VÉRIFIER selon la province]</li>
    </ul>
    <p>Attention : tous les notaires vietnamiens ne sont pas habilités à établir des CCAM pour des mariages mixtes. Il vaut mieux demander conseil à l'ambassade de France ou au consulat français le plus proche pour obtenir une liste des prestataires reconnus.</p>

    <h2 id="section-4">Les étapes pour obtenir le CCAM</h2>
    <ol>
      <li><strong>Obtenir votre acte de mariage officiel</strong> (giấy chứng nhận đăng ký kết hôn) auprès du comité populaire (UBND) du district où le mariage a été enregistré</li>
      <li><strong>Contacter un notaire vietnamien habilité</strong> pour lui soumettre le dossier</li>
      <li><strong>Attendre l'établissement du certificat de coutume</strong> par le notaire</li>
      <li><strong>Faire légaliser ou apostiller</strong> le document pour utilisation en France (voir section suivante)</li>
    </ol>

    <h2 id="section-5">Documents à fournir au notaire</h2>
    <p>La liste varie selon le notaire et la province. Voici les documents habituellement demandés [À VÉRIFIER selon votre notaire] :</p>

    <table>
      <thead>
        <tr>
          <th>Document</th>
          <th>Qui le fournit</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Acte de mariage original (giấy chứng nhận đăng ký kết hôn)</td>
          <td>UBND / comité populaire</td>
        </tr>
        <tr>
          <td>Actes de naissance des deux époux</td>
          <td>Les deux époux</td>
        </tr>
        <tr>
          <td>Passeports des deux époux</td>
          <td>Les deux époux</td>
        </tr>
        <tr>
          <td>Certificat de célibat ou acte de divorce antérieur (si applicable)</td>
          <td>Partenaire français (via consulat)</td>
        </tr>
        <tr>
          <td>Livret de famille vietnamien (sổ hộ khẩu) du conjoint vietnamien</td>
          <td>Conjoint vietnamien</td>
        </tr>
      </tbody>
    </table>

    <h2 id="section-6">Légalisation ou apostille ?</h2>
    <p>Le Vietnam a adhéré à la Convention de La Haye sur l'apostille [À VÉRIFIER la date d'entrée en vigueur effective et les documents concernés]. En théorie, une apostille apposée sur le document vietnamien devrait suffire pour son utilisation en France.</p>
    <p>En pratique, <strong>certains postes consulaires français demandent encore une légalisation en bonne et due forme</strong>, c'est-à-dire un tampon de l'ambassade de France au Vietnam sur le document notarié. Vérifie auprès de ton consulat ou de l'ambassade ce qui est accepté au moment de ta demande. [À VÉRIFIER]</p>

    <div class="tip-box">
      <strong>Légalisation à l'ambassade de France :</strong> Si une légalisation est requise, dépose le document au service notarial de l'ambassade (Hanoï) ou du consulat (Hô Chi Minh-Ville). Délai : [À VÉRIFIER] jours ouvrés. Coût : [À VÉRIFIER] €.
    </div>

    <h2 id="section-7">Délais et coûts estimés</h2>

    <table>
      <thead>
        <tr>
          <th>Étape</th>
          <th>Délai</th>
          <th>Coût estimé</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Établissement du CCAM par le notaire</td>
          <td>[À VÉRIFIER] semaines</td>
          <td>[À VÉRIFIER] VND</td>
        </tr>
        <tr>
          <td>Apostille ou légalisation</td>
          <td>[À VÉRIFIER] jours</td>
          <td>[À VÉRIFIER] €</td>
        </tr>
        <tr>
          <td>Traduction assermentée en français</td>
          <td>[À VÉRIFIER] jours</td>
          <td>[À VÉRIFIER] €</td>
        </tr>
        <tr>
          <td><strong>Total</strong></td>
          <td><strong>[À VÉRIFIER] semaines</strong></td>
          <td><strong>[À VÉRIFIER] €</strong></td>
        </tr>
      </tbody>
    </table>

    <p>Une fois le CCAM en main (légalisé et traduit), tu peux l'inclure dans le dossier de transcription du mariage à Nantes. → <a href="transcription-mariage-service-central-nantes">Lire le guide complet sur la transcription à Nantes</a>.</p>

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
$current_slug = 'certificat-coutumier-acte-mariage-vietnam-ccam';
$current_cat  = 'admin';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
