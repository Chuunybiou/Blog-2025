<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Se marier au Vietnam avec un Français : procédure au comité populaire 2026';
$page_description = 'Comment se marier au Vietnam entre un Français et un(e) Vietnamien(ne) ? Certificat de capacité matrimoniale, comité populaire, documents requis. Guide complet 2026.';
$page_canonical   = SITE_URL . '/se-marier-vietnam-procedure-comite-populaire';
$page_og_title    = 'Mariage franco-vietnamien au comité populaire : la procédure complète';
$page_og_desc     = 'Tout ce qu\'il faut savoir pour célébrer un mariage mixte franco-vietnamien au Vietnam : documents, délais et ce qui vous attend le jour J.';
$page_og_url      = SITE_URL . '/se-marier-vietnam-procedure-comite-populaire';
$page_og_image    = 'https://images.unsplash.com/photo-1519741497674-611481863552?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Se marier au Vietnam avec un Français : procédure au comité populaire 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/se-marier-vietnam-procedure-comite-populaire',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Démarches Administratives',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'jade';
$article_hero_bg      = '#1a3a2a';
$article_glow         = 'rgba(27,107,82,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Démarches Admin';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'Est-ce que le mariage au Vietnam est reconnu en France ?',
   'a' => 'Oui, à condition d\'avoir fait transcrire le mariage au Service Central d\'État Civil de Nantes et d\'avoir obtenu au préalable le CCAM (certificat de coutume et acte de mariage). Sans transcription, le mariage n\'a aucun effet légal en France.'],
  ['q' => 'Dois-je être présent physiquement au Vietnam pour le mariage ?',
   'a' => 'Oui, obligatoirement. Les deux époux doivent être physiquement présents lors de la cérémonie civile au comité populaire. Le mariage par procuration n\'est pas possible pour un mariage franco-vietnamien.'],
  ['q' => 'Combien de temps dure la procédure au Vietnam de bout en bout ?',
   'a' => 'Compte entre 2 et 6 mois depuis l\'obtention du certificat de capacité matrimoniale jusqu\'au jour du mariage, selon les délais du comité populaire local et la rapidité de constitution du dossier.'],
  ['q' => 'Faut-il aussi se marier en France ?',
   'a' => 'Non, si le mariage au Vietnam est transcrit à Nantes, il a la même valeur légale qu\'un mariage célébré en France. Vous n\'avez pas à vous marier une seconde fois à la mairie française — sauf si vous le souhaitez pour le symbolique.'],
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
      <span>Se marier au Vietnam</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Se marier au Vietnam : procédure complète pour un couple franco-vietnamien</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 9 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Vue d'ensemble du mariage mixte</a></li>
      <li><a href="#section-2">Le certificat de capacité matrimoniale</a></li>
      <li><a href="#section-3">Les documents côté vietnamien</a></li>
      <li><a href="#section-4">La cérémonie au comité populaire</a></li>
      <li><a href="#section-5">Après le mariage</a></li>
      <li><a href="#section-6">Et la cérémonie traditionnelle ?</a></li>
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
    <p><strong>Se marier au Vietnam quand on est Français : c'est possible, et ça ouvre la porte au regroupement familial si ton conjoint veut ensuite t'accompagner en France.</strong> La procédure est un peu plus complexe que pour un mariage entre deux Vietnamiens, mais elle est bien définie. Ce guide te donne toutes les étapes dans l'ordre.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1519741497674-611481863552?w=1200&q=80" alt="Mariage traditionnel vietnamien" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Vue d'ensemble : comment se passe un mariage franco-vietnamien</h2>
    <p>Au Vietnam, le mariage civil se célèbre obligatoirement au comité populaire (UBND — Ủy ban nhân dân) du district de résidence du conjoint vietnamien. C'est lui qui enregistre le mariage et délivre l'acte officiel.</p>
    <p>Pour un mariage mixte impliquant un ressortissant étranger, des démarches supplémentaires côté français sont nécessaires avant la cérémonie :</p>
    <ol>
      <li>Obtenir un <strong>certificat de capacité matrimoniale</strong> auprès de l'ambassade de France au Vietnam</li>
      <li>Constituer les dossiers des deux côtés</li>
      <li>Se présenter ensemble au comité populaire pour la cérémonie</li>
    </ol>
    <p>Après le mariage, d'autres démarches permettront de faire reconnaître ce mariage en France (CCAM, transcription à Nantes). → <a href="faire-venir-conjointe-vietnamienne-france">Guide complet du regroupement familial franco-vietnamien</a></p>

    <h2 id="section-2">Le certificat de capacité matrimoniale : la démarche française</h2>
    <p>Le certificat de capacité matrimoniale (CCM) est un document délivré par l'ambassade de France à Hanoï (ou le consulat à Hô Chi Minh-Ville) qui atteste que tu n'as pas d'empêchement à te marier selon la loi française.</p>
    <p>Documents à fournir à l'ambassade [À VÉRIFIER la liste complète] :</p>
    <ul>
      <li>Acte de naissance de moins de 6 mois (obtenu au SCEC de Nantes si né à l'étranger)</li>
      <li>Attestation de célibat (ou acte de divorce, si précédemment marié)</li>
      <li>Passeport français</li>
      <li>Formulaire de demande</li>
    </ul>
    <p>Délai : <strong>[À VÉRIFIER] semaines</strong> après dépôt du dossier complet. Coût : <strong>[À VÉRIFIER] €</strong>.</p>
    <p>La publication de bans à l'ambassade est obligatoire avant la délivrance du certificat. L'affichage dure [À VÉRIFIER] jours.</p>

    <div class="tip-box">
      <strong>Anticipe !</strong> Si tu n'as pas encore ton acte de naissance récent, commande-le en ligne sur le site du SCEC (Service Central d'État Civil de Nantes) ou via Service Public. Délai : [À VÉRIFIER] jours ouvrés.
    </div>

    <h2 id="section-3">Les documents requis côté vietnamien</h2>
    <p>En parallèle, ton/ta futur(e) conjoint(e) vietnamien(ne) doit préparer son propre dossier [À VÉRIFIER selon le comité populaire concerné] :</p>
    <ul>
      <li>Demande de mariage (đơn xin kết hôn) — formulaire fourni par le comité populaire</li>
      <li>Acte de naissance</li>
      <li>Carte d'identité nationale (CCCD) ou passeport</li>
      <li>Sổ hộ khẩu (livret de famille) ou giấy xác nhận thông tin cư trú</li>
      <li>Attestation de célibat (xác nhận tình trạng hôn nhân) délivrée par le comité populaire local</li>
    </ul>

    <table>
      <thead>
        <tr>
          <th>Document</th>
          <th>Délivré par</th>
          <th>Délai</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Certificat de capacité matrimoniale (Français)</td>
          <td>Ambassade de France</td>
          <td>[À VÉRIFIER] semaines</td>
        </tr>
        <tr>
          <td>Attestation de célibat (Vietnamien)</td>
          <td>Comité populaire local</td>
          <td>Quelques jours</td>
        </tr>
        <tr>
          <td>Acte de naissance (Français)</td>
          <td>SCEC Nantes</td>
          <td>[À VÉRIFIER] jours</td>
        </tr>
        <tr>
          <td>Dossier de mariage complet</td>
          <td>Les deux</td>
          <td>—</td>
        </tr>
      </tbody>
    </table>

    <h2 id="section-4">La cérémonie au comité populaire</h2>
    <p>Une fois tous les documents réunis, le comité populaire instruit le dossier et fixe une date pour la cérémonie. Ce n'est pas une cérémonie grandiose — c'est une formalité administrative qui dure environ 30 minutes. Les deux époux signent l'acte de mariage en présence d'un officier d'état civil.</p>
    <p>En pratique :</p>
    <ul>
      <li>Tu dois être physiquement présent — pas de procuration possible</li>
      <li>Apporte tes documents originaux + copies</li>
      <li>Un interprète peut être requis si tu ne parles pas vietnamien [À VÉRIFIER selon le comité]</li>
      <li>Des témoins peuvent être demandés [À VÉRIFIER]</li>
    </ul>
    <p>À l'issue de la cérémonie, le comité populaire vous remet le <strong>giấy chứng nhận đăng ký kết hôn</strong> (certificat d'enregistrement de mariage) — c'est votre acte de mariage officiel.</p>

    <h2 id="section-5">Ce qu'il faut faire après le mariage</h2>
    <p>Le mariage est célébré — félicitations ! Mais côté administratif, il reste du travail :</p>
    <ol>
      <li><strong>Obtenir le CCAM</strong> (certificat de coutume et acte de mariage) auprès d'un notaire vietnamien → <a href="certificat-coutumier-acte-mariage-vietnam-ccam">Guide CCAM</a></li>
      <li><strong>Faire transcrire le mariage</strong> au Service Central d'État Civil de Nantes → <a href="transcription-mariage-service-central-nantes">Guide transcription Nantes</a></li>
      <li>Si ton conjoint veut venir en France : <strong>demander le visa long séjour</strong> → <a href="visa-long-sejour-conjoint-vietnamien-france">Guide visa conjoint</a></li>
      <li>Si tu restes au Vietnam : mettre à jour votre situation légale côté vietnam (enregistrement domicile, etc.)</li>
    </ol>

    <h2 id="section-6">La cérémonie traditionnelle : séparée ou combinée ?</h2>
    <p>La cérémonie civile au comité populaire n'a rien de festif. La plupart des couples franco-vietnamiens organisent une <strong>cérémonie traditionnelle séparée</strong> (lễ cưới) avec les familles, avant ou après le mariage civil. Cette cérémonie n'a pas de valeur légale mais elle est culturellement très importante au Vietnam.</p>
    <p>[TON EXPÉRIENCE ICI — comment vous avez organisé votre mariage à toi et ta femme, ce qui a bien marché et ce qui a été surprenant]</p>

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
$current_slug = 'se-marier-vietnam-procedure-comite-populaire';
$current_cat  = 'admin';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
