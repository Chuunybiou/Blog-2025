<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Visa pour télétravailler depuis le Vietnam : digital nomad, e-visa, TT — guide honnête 2026';
$page_description = 'Quel visa choisir pour télétravailler depuis le Vietnam ? Le Vietnam n\'a pas de visa digital nomad officiel. Ce guide explique les options réelles, les zones grises et les risques.';
$page_canonical   = SITE_URL . '/visa-teletravail-digital-nomad-vietnam';
$page_og_title    = 'Visa pour télétravailler au Vietnam : digital nomad, e-visa, DL, TT — guide 2026';
$page_og_desc     = 'Pas de visa digital nomad officiel au Vietnam. Voici les vraies options, les zones grises et ce que font réellement les expats.';
$page_og_url      = SITE_URL . '/visa-teletravail-digital-nomad-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Visa pour télétravailler depuis le Vietnam : guide honnête 2026',
  'datePublished'   => '2026-06-11',
  'dateModified'    => '2026-06-11',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/visa-teletravail-digital-nomad-vietnam',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Argent & Travail',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'amber';
$article_hero_bg      = '#2a1f00';
$article_glow         = 'rgba(184,134,11,0.18)';
$article_badge        = 'rgba(184,134,11,0.25)';
$article_badge_c      = 'var(--amber-soft)';

$article_category     = 'Argent & Travail';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=argent';

$page_faq = [
  ['q' => 'Le Vietnam a-t-il un visa digital nomad ?',
   'a' => 'Non, pas en 2026. Contrairement à l\'Indonésie (Bali), au Portugal ou à la Thaïlande qui ont créé des visas spécifiques pour les nomades digitaux, le Vietnam n\'a pas de visa "digital nomad" officiel. Les nomades utilisent le plus souvent l\'e-visa (90 jours) ou le visa d\'affaires DL. [À VÉRIFIER : annonces du gouvernement vietnamien sur ce sujet en 2025-2026]'],
  ['q' => 'Peut-on travailler légalement en e-visa Vietnam ?',
   'a' => 'L\'e-visa n\'autorise pas formellement à exercer une activité professionnelle au Vietnam. Télétravailler pour des clients étrangers depuis le Vietnam en e-visa est dans une zone grise : la loi vietnamienne n\'explicite pas clairement ce cas. En pratique, aucun cas d\'expulsion ou d\'amende pour simple télétravail en e-visa n\'est documenté à ce jour. Mais la situation peut changer. [À VÉRIFIER : texte exact de la réglementation sur les activités autorisées en e-visa]'],
  ['q' => 'L\'e-visa Vietnam est-il renouvelable plusieurs fois de suite ?',
   'a' => 'Formellement, l\'e-visa est accordé pour 90 jours. Le renouvellement consécutif (sortir du Vietnam et revenir immédiatement avec un nouvel e-visa) était courant mais les autorités commencent à le limiter dans certains cas. Il est prudent d\'avoir une autre solution pour les séjours longs. [À VÉRIFIER : règles actuelles de l\'Immigration vietnamienne sur les renouvellements consécutifs en 2026]'],
  ['q' => 'Je suis marié(e) à un(e) Vietnamien(ne) : quel est le meilleur visa ?',
   'a' => 'Le visa TT ou la carte de résidence temporaire (TRC) sont les options les plus stables et légales pour un conjoint de Vietnamien. Ils permettent de rester au Vietnam longtemps sans visa-run, et sont compatibles avec le télétravail (qui n\'est pas considéré comme "travail au Vietnam" dans ce contexte, bien que la zone grise reste). Lien vers notre guide → visa TT et TRC pour conjoint de Vietnamien.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=argent">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Visa télétravail Vietnam</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Quel visa pour télétravailler depuis le Vietnam ? Le guide honnête 2026</h1>
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
      <li><a href="#section-1">La réalité : pas de visa digital nomad au Vietnam</a></li>
      <li><a href="#section-2">Les options disponibles</a></li>
      <li><a href="#section-3">E-visa : pratique mais limité</a></li>
      <li><a href="#section-4">Visa DL (affaires)</a></li>
      <li><a href="#section-5">Visa TT et TRC pour conjoint</a></li>
      <li><a href="#section-6">Honnêteté sur les zones grises</a></li>
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

    <p><strong>La question que tout nomade digital se pose avant d'aller au Vietnam : "c'est légal de travailler là-bas ?"</strong> La réponse honnête : oui, dans une large mesure — mais dans une zone grise qu'il vaut mieux connaître avant de partir. Ce guide te donne l'état de la situation en 2026, sans survendre ni dramatiser.</p>

    <p>Cet article fait partie du dossier <a href="travailler-a-distance-depuis-vietnam">travailler à distance depuis le Vietnam</a>. Si tu es marié(e) à un(e) Vietnamien(ne), le <a href="visa-tt-carte-residence-trc-mariage">visa TT et TRC</a> est la solution la plus stable — et c'est aussi le lien entre ce dossier travail et le <a href="faire-venir-conjointe-vietnamienne-france">silo couple mixte franco-vietnamien</a>.</p>

    <h2 id="section-1">La réalité : pas de visa "digital nomad" au Vietnam</h2>
    <p>En 2026, le Vietnam n'a pas créé de visa dédié aux nomades digitaux, contrairement à d'autres destinations populaires. Pourquoi ça compte :</p>
    <ul>
      <li>Il n'y a pas de cadre légal clair pour "télétravailler depuis le Vietnam pour des clients étrangers"</li>
      <li>Les lois sur l'immigration et le travail distinguent surtout "travailler <em>pour</em> une entité vietnamienne" (nécessite un permis) et "séjourner au Vietnam" (nécessite un visa)</li>
      <li>Le télétravail pour des clients étrangers depuis chez soi au Vietnam n'est formellement ni autorisé ni interdit par un texte spécifique</li>
    </ul>

    <div class="info-box">
      <strong>Le résultat pratique :</strong> La grande majorité des nomades digitaux et des expatriés qui travaillent à distance depuis le Vietnam le font en zone grise — tolérée, mais non officiellement légale. Jusqu'à présent, aucune mesure systématique n'a été prise contre cette pratique. Mais personne ne peut garantir que ça ne changera pas.
    </div>

    <h2 id="section-2">Les options de visa disponibles</h2>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Visa</th>
          <th>Durée</th>
          <th>Renouvelable</th>
          <th>Travail autorisé</th>
          <th>Pour qui</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>E-visa</td>
          <td>90 jours</td>
          <td>Oui mais limité</td>
          <td>Non formellement</td>
          <td>Court séjour, nomade de passage</td>
        </tr>
        <tr>
          <td>Visa DL (affaires)</td>
          <td>1–12 mois</td>
          <td>Selon conditions</td>
          <td>Affaires, pas emploi local</td>
          <td>Séjour moyen/long avec activité business</td>
        </tr>
        <tr>
          <td>Visa TT / TRC</td>
          <td>1–3 ans</td>
          <td>Oui</td>
          <td>Zone grise (pas travail local)</td>
          <td>Conjoint d'un(e) Vietnamien(ne)</td>
        </tr>
        <tr>
          <td>Permis de travail (giấy phép lao động)</td>
          <td>2 ans max renouvelable</td>
          <td>Oui</td>
          <td>✅ Oui (emploi local autorisé)</td>
          <td>Salarié d'une entreprise vietnamienne</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-3">E-visa : la solution la plus simple</h2>
    <p>L'e-visa Vietnam est la porte d'entrée de la majorité des nomades. Ses caractéristiques :</p>
    <ul>
      <li>Obtenu en ligne sur la plateforme officielle du Département de l'Immigration du Vietnam [À VÉRIFIER : URL officielle en vigueur]</li>
      <li>Valide 90 jours, entrées multiples</li>
      <li>Prix : <strong>[À VÉRIFIER : 25 USD en 2024, vérifier tarif 2026]</strong></li>
      <li>Traitement en <strong>[À VÉRIFIER : 3 jours ouvrés environ]</strong></li>
    </ul>
    <p>Le problème des renouvellements consécutifs : sortir du pays (Cambodge, Laos, Thaïlande) et rentrer avec un nouvel e-visa était courant. Les autorités commencent à questionner certains voyageurs qui font ça de façon répétée, sans refuser systématiquement. [À VÉRIFIER : politique actuelle de l'Immigration en 2026]</p>

    <h2 id="section-4">Visa DL (affaires)</h2>
    <p>Le visa DL est théoriquement pour les affaires — rencontres avec des partenaires vietnamiens, conférences, activités commerciales. Il est utilisé par certains nomades pour des séjours plus longs :</p>
    <ul>
      <li>Nécessite une lettre d'invitation d'une société vietnamienne [À VÉRIFIER : conditions exactes]</li>
      <li>Peut être accordé pour 3 ou 12 mois</li>
      <li>N'autorise pas formellement le télétravail pour des clients étrangers — même zone grise que l'e-visa</li>
    </ul>

    <h2 id="section-5">La solution la plus stable : visa TT / TRC (conjoint de Vietnamien)</h2>
    <p>Si tu es marié(e) à un(e) Vietnamien(ne), le <strong>visa TT (thị thực TT) ou la carte de résidence temporaire (TRC)</strong> sont de loin les options les plus sereines pour vivre et télétravailler au Vietnam :</p>
    <ul>
      <li>Séjour légal de 1 à 3 ans renouvelable</li>
      <li>Pas de visa-run, pas d'incertitude</li>
      <li>Base légale claire pour la résidence</li>
      <li>Le télétravail pour des clients étrangers reste une zone grise, mais le statut de résident reconnu limite les risques pratiques</li>
    </ul>
    <div class="info-box">
      <strong>Guide dédié :</strong> → <a href="visa-tt-carte-residence-trc-mariage">Visa TT et TRC pour conjoint de Vietnamien : comment les obtenir</a>
    </div>

    <h2 id="section-6">Honnêteté sur les zones grises</h2>
    <p>Je préfère te dire clairement ce que je sais avec certitude et ce que je ne sais pas :</p>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Affirmation</th>
          <th>Statut</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Télétravailler en e-visa est légal au Vietnam</td>
          <td>❌ Pas explicitement légal</td>
        </tr>
        <tr>
          <td>Des nomades se font régulièrement expulser pour télétravail</td>
          <td>❌ Aucun cas documenté en 2025–2026</td>
        </tr>
        <tr>
          <td>La situation peut changer</td>
          <td>✅ Oui — le Vietnam peut décider demain de créer un visa nomade OU de durcir les règles</td>
        </tr>
        <tr>
          <td>Le permis de travail résout tous les problèmes</td>
          <td>⚠️ Seulement si tu travailles pour une entité vietnamienne</td>
        </tr>
        <tr>
          <td>Le visa TT/TRC est la solution la plus stable</td>
          <td>✅ Pour les conjoints de Vietnamiens, oui</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="warning-box">
      <strong>Disclaimer :</strong> Cet article partage mon expérience et des informations générales, pas un conseil juridique ou migratoire personnalisé. La réglementation visa est sujette à changement. Pour une situation précise, consulte un avocat spécialisé en droit de l'immigration vietnamien.
    </div>

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
        <p>Français expatrié à Hanoï. Je télétravaille depuis le Vietnam et partage ce que j'ai appris sur les visas et la vie pratique.</p>
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
$current_slug = 'visa-teletravail-digital-nomad-vietnam';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
