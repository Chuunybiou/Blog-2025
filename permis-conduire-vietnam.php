<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Permis de conduire Vietnam pour étrangers — Cap Vietnam';
$page_description = 'Obtenir un permis de conduire vietnamien : conversion du permis français, examen local, documents requis et règles de circulation à Hanoï.';
$page_canonical   = SITE_URL . '/permis-conduire-vietnam';
$page_og_title    = 'Permis de conduire au Vietnam : guide pour expatriés';
$page_og_desc     = 'Conversion du permis français au Vietnam, catégories de permis et règles de circulation.';
$page_og_url      = 'https://blog-capvietnam.fr/permis-conduire-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1200&q=80';
$page_schema      = '{"@context":"https://schema.org","@type":"BlogPosting","headline":"Permis de conduire au Vietnam : scooter, moto et voiture","datePublished":"2026-03-10","dateModified":"2026-03-10","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://blog-capvietnam.fr/a-propos"},"publisher":{"@type":"Organization","name":"Anthony Bouillon","logo":{"@type":"ImageObject","url":"https://blog-capvietnam.fr/logo-entreprise.png"}},"image":"https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1200&q=80","description":"Conversion du permis francais au Vietnam, categories de permis et regles de circulation.","timeRequired":"PT5M","inLanguage":"fr","url":"https://blog-capvietnam.fr/permis-conduire-vietnam"}';

$article_color   = 'terracotta';
$article_hero_bg = '#3a1a0a';
$article_glow    = 'rgba(191,74,42,0.15)';
$article_badge   = 'rgba(191,74,42,0.2)';
$article_badge_c = 'var(--terracotta-soft)';

$article_category     = 'Démarches Admin';
$article_category_url = 'https://blog-capvietnam.fr/articles-capvietnam';
$page_faq = [
  ['q' => 'Combien coûte la conversion d\'un permis étranger ?',
   'a' => 'Les frais officiels sont d\'environ 135 000 VND. Ajoute la traduction assermentée (300 000–500 000 VND selon le traducteur) et la visite médicale (150 000–250 000 VND). Compte environ 700 000 à 1 000 000 VND au total.'],
  ['q' => 'Le permis international est-il valable au Vietnam ?',
   'a' => 'Le Vietnam a ratifié la Convention de Vienne de 1968, donc le Permis International (PI) est théoriquement valable. En pratique, il est accepté pour les voitures et véhicules de tourisme mais peut poser problème pour les motos de plus de 50cc. Pour un séjour long, la conversion reste la solution la plus sûre.'],
  ['q' => 'Peut-on louer une moto sans permis ?',
   'a' => 'Les loueurs de motos demandent rarement un permis (surtout pour les touristes), mais conduire sans permis adapté est illégal et surtout très risqué en cas d\'accident : ton assurance ne couvrirait pas les dommages.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Démarches Administratives</a><span class="breadcrumb-sep">›</span>
      <span>Permis de conduire</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Permis de conduire au Vietnam : convertir son permis français ou passer l'examen</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 20 mars 2026</span>
      <span>⏱ 7 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Peut-on conduire avec le permis français ?</a></li>
      <li><a href="#section-2">Conversion du permis étranger</a></li>
      <li><a href="#section-3">Passer l'examen local</a></li>
      <li><a href="#section-4">Catégories de permis</a></li>
      <li><a href="#section-5">Sécurité routière à Hanoï</a></li>
      <li><a href="#section-6">L'assurance moto</a></li>
      <li><a href="#section-7">Acheter vs louer un scooter</a></li>
      <li><a href="#section-8">Infractions et contrôles</a></li>
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
    <p><strong>Conduire à Hanoï est une expérience à part entière.</strong> Scooters partout, klaxons constants, carrefours sans feux... Mais avec le bon permis et quelques règles de base, tu t'y feras. Voici comment être en règle avec la réglementation vietnamienne (Loi sur la circulation routière n°23/2008/QH12, modifiée en 2022).</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=1200&q=80" alt="Circulation à Hanoï" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Peut-on conduire avec son permis français ?</h2>
    <p>Le permis français n'est <strong>pas reconnu directement au Vietnam</strong>. La France et le Vietnam n'ont pas signé d'accord de reconnaissance mutuelle des permis de conduire. En théorie, le Permis International (PI — Convention de Vienne de 1968) est reconnu, mais son application pratique au Vietnam est limitée et les forces de l'ordre peuvent ne pas l'accepter pour certains types de véhicules.</p>

    <div class="warning-box">
      <strong>⚠️ Scooters de plus de 50cc :</strong>
      Le Permis International ne couvre généralement que les véhicules pour lesquels tu as une catégorie validée. Pour conduire un scooter de plus de 50cc (la norme à Hanoï), tu as besoin d'une catégorie A1 ou A au minimum. Vérifier ton PI avant de louer une moto.
    </div>

    <h2 id="section-2">Conversion du permis étranger en permis vietnamien</h2>
    <p>Depuis le Décret 138/2018/NĐ-CP et ses modifications, les titulaires d'un permis étranger valide peuvent le convertir en permis vietnamien sans passer l'examen de conduite, sous conditions :</p>
    <ul>
      <li>Permis en cours de validité</li>
      <li>Titulaire d'une carte de résidence temporaire (thẻ tạm trú) au Vietnam</li>
      <li>Permis original accompagné d'une traduction officielle en vietnamien (traducteur assermenté)</li>
    </ul>
    <p>La procédure se déroule auprès du <strong>Département des Transports (Sở Giao thông Vận tải)</strong> de la province ou ville où tu résides. À Hanoï, c'est à Đống Đa.</p>

    <div class="info-box">
      <strong>📋 Documents à préparer :</strong>
      Formulaire de demande (sur place) — Passeport original + copie — Carte de résidence temporaire — Permis de conduire original + traduction assermentée — 2 photos 3x4 cm — Attestation de santé d'un hôpital agréé (visite médicale simple, environ 200 000 VND).
    </div>

    <h2 id="section-3">Passer l'examen local</h2>
    <p>Si tu n'as pas de permis étranger à convertir, tu dois passer l'examen vietnamien complet. Il comprend :</p>
    <ul>
      <li><strong>Épreuve théorique</strong> : 25 questions sur le code de la route vietnamien (en anglais disponible dans certains centres). Questions accessibles en ligne sur le site officiel du Département des Transports.</li>
      <li><strong>Épreuve pratique</strong> : parcours standardisé en auto-école agréée.</li>
    </ul>
    <p>Compte 2 à 4 mois entre l'inscription et l'obtention du permis. Plusieurs auto-écoles à Hanoï proposent des cours en anglais, notamment pour les expatriés.</p>

    <h2 id="section-4">Catégories de permis au Vietnam</h2>
    <table class="comparison-table">
      <thead><tr><th>Catégorie</th><th>Véhicule</th><th>Âge minimum</th></tr></thead>
      <tbody>
        <tr><td><strong>A0</strong></td><td>Cyclomoteur jusqu'à 50cc</td><td>16 ans</td></tr>
        <tr><td><strong>A1</strong></td><td>Moto jusqu'à 175cc</td><td>18 ans</td></tr>
        <tr><td><strong>A</strong></td><td>Moto plus de 175cc</td><td>21 ans</td></tr>
        <tr><td><strong>B1</strong></td><td>Voiture jusqu'à 9 places (sans usage professionnel)</td><td>18 ans</td></tr>
        <tr><td><strong>B2</strong></td><td>Voiture jusqu'à 9 places (usage professionnel autorisé)</td><td>18 ans</td></tr>
      </tbody>
    </table>

    <div class="tip-box">
      <strong>💡 À Hanoï, le scooter est roi :</strong>
      La grande majorité des expatriés utilisent un scooter semi-automatique de 110 à 125cc (Honda Wave, Yamaha Nouvo). La catégorie A1 suffit pour ces véhicules. Si tu viens de France avec un permis A, la conversion donne un permis A vietnamien.
    </div>

    <h2 id="section-5">Sécurité routière à Hanoï</h2>
    <p>Le Vietnam a l'un des taux d'accidents de la route les plus élevés d'Asie du Sud-Est. Quelques règles essentielles :</p>
    <ul>
      <li><strong>Casque obligatoire</strong> sur toute moto ou scooter, y compris passager — amende de 100 000 à 200 000 VND</li>
      <li><strong>Alcoolémie zéro</strong> : tolérance 0g/L depuis 2020 (Loi sur la prévention de l'alcool 44/2019/QH14)</li>
      <li>Conduite à droite comme en France</li>
      <li>Les piétons traversent souvent n'importe où — anticipe et ralentis</li>
    </ul>

    <h2 id="section-6">L'assurance moto et scooter</h2>
    <p>Au Vietnam, l'assurance de responsabilité civile (<em>bảo hiểm trách nhiệm dân sự</em>) est <strong>obligatoire</strong> pour tous les véhicules à moteur, y compris les scooters. Elle coûte environ <strong>66 000 VND par an</strong> pour un deux-roues et est délivrée par des assureurs agréés comme Bảo Việt, PVI ou PTI.</p>
    <p>Mais cette couverture légale est très limitée : elle couvre uniquement la responsabilité civile tiers, avec des plafonds bas (40 M VND pour dommages corporels, 15 M VND pour dommages matériels). Pour une protection réelle :</p>
    <ul>
      <li><strong>Assurance tous risques moto</strong> : proposée par Bảo Việt, Pjico, PTI — compte 400 000 à 1 200 000 VND/an selon la valeur du véhicule. Couvre vol et dommages à ton propre scooter.</li>
      <li><strong>Couverture via mutuelle expatriée</strong> : la plupart des mutuelles expatriées couvrent les accidents de la route, y compris moto, tant que tu conduis légalement (permis valide). Vérifier les exclusions de ta police avant de prendre le volant.</li>
    </ul>
    <div class="warning-box">
      <strong>⚠️ Sans permis = sans couverture :</strong>
      Conduire sans permis adapté annule systématiquement les garanties de ton assurance en cas d'accident, qu'il soit de ta faute ou non. Les frais médicaux dans un hôpital international peuvent dépasser 10 000 USD pour un accident grave.
    </div>

    <h2 id="section-7">Acheter vs louer un scooter à Hanoï</h2>
    <p>La question se pose pour tout expatrié à moyen terme. Les deux options ont leurs avantages :</p>
    <table class="comparison-table">
      <thead><tr><th>Critère</th><th>Acheter (d'occasion)</th><th>Louer (mensuel)</th></tr></thead>
      <tbody>
        <tr><td>Coût initial</td><td>8–40 M VND selon modèle</td><td>1,5–3 M VND/mois</td></tr>
        <tr><td>Entretien</td><td>À ta charge (vidange 100k, pneu 150–300k VND)</td><td>Inclus ou partagé selon contrat</td></tr>
        <tr><td>Flexibilité</td><td>Revente facile sur Facebook Marketplace</td><td>Retour immédiat possible</td></tr>
        <tr><td>Documents requis</td><td>Permis + transfert de propriété</td><td>Passeport + dépôt</td></tr>
        <tr><td>Recommandé pour</td><td>Séjour de 3 mois et plus</td><td>Moins de 3 mois</td></tr>
      </tbody>
    </table>
    <div class="tip-box">
      <strong>💡 Modèles fiables à Hanoï :</strong>
      Honda Wave Alpha (110cc) : 8–12 M VND d'occasion, très répandu, pièces partout et peu chères. Honda SH (150cc, semi-auto) : 40–80 M VND, plus confortable, mais davantage ciblé par les voleurs. Pour une première installation, le Wave est le choix pragmatique.
    </div>

    <h2 id="section-8">Infractions et contrôles de police</h2>
    <p>Le Vietnam a durci son code de la route ces dernières années, notamment sur l'alcool au volant. Ce qu'il faut savoir pour éviter les mauvaises surprises :</p>
    <ul>
      <li><strong>Alcoolémie zéro (0g/L)</strong> depuis la Loi 44/2019/QH14 : amende de 6 à 8 M VND pour les deux-roues, 30 à 40 M VND pour les voitures, suspension de permis possible. Les contrôles sont fréquents le vendredi et samedi soir.</li>
      <li><strong>Casque non conforme</strong> : amende de 100 000 à 200 000 VND. Les casques à visière intégrale sont recommandés — les casques en mousse vendus sur les marchés touristiques ne sont pas conformes.</li>
      <li><strong>Téléphone au volant</strong> : amende de 800 000 à 1 000 000 VND, suspension possible.</li>
      <li><strong>Contrôles routiers (chốt kiểm tra)</strong> : fréquents en soirée et les week-ends. Avoir toujours sur soi : permis de conduire, carte de résidence, carte grise du véhicule.</li>
    </ul>
    <div class="info-box">
      <strong>En cas de contrôle :</strong>
      Reste calme et montre tes documents sans les lâcher des mains. Les amendes sont payées sur place (reçu obligatoire depuis 2022 — insiste pour l'obtenir). Si tu ne comprends pas le motif, note le numéro de badge du fonctionnaire et contacte ton ambassade si la situation devient problématique.
    </div>

    <h2 id="section-faq">Questions fréquentes</h2>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Combien coûte la conversion d'un permis étranger ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Les frais officiels sont d'environ 135 000 VND. Ajoute la traduction assermentée (300 000–500 000 VND selon le traducteur) et la visite médicale (150 000–250 000 VND). Compte environ 700 000 à 1 000 000 VND au total.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Le permis international est-il valable au Vietnam ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Le Vietnam a ratifié la Convention de Vienne de 1968, donc le Permis International (PI) est théoriquement valable. En pratique, il est accepté pour les voitures et véhicules de tourisme mais peut poser problème pour les motos de plus de 50cc. Pour un séjour long, la conversion reste la solution la plus sûre.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Peut-on louer une moto sans permis ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Les loueurs de motos demandent rarement un permis (surtout pour les touristes), mais conduire sans permis adapté est illégal et surtout très risqué en cas d'accident : ton assurance ne couvrirait pas les dommages.</div>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Blog d'un Français installé à Hanoï. Informations basées sur la réglementation officielle vietnamienne en vigueur en 2026.</p>
        <div class="author-links"><a href="a-propos-capvietnam">À propos →</a></div>
      </div>
    </div>

    <div class="cta-newsletter">
      <h3>Reçois les prochains guides</h3>
      <p>📥 <strong>Guide PDF + 3 modèles de lettres offerts</strong> dès l'inscription. Un email par mois, désinscription en 1 clic.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
$current_slug = 'permis-conduire-vietnam';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
