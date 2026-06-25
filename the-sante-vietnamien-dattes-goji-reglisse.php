<?php
require_once __DIR__ . '/config/site.php';

// Raccourcis pour les noms de fichiers images (éviter la répétition des longs hashs)
define('IMG_TEA_DIR', 'assets/img/recette-tea/');
$img_hero      = 'assets/img/capvietnam-tea.jpg';
$img_ambiance  = 'assets/img/capvietnam-tea-3.jpg';
$img_mijotage  = IMG_TEA_DIR . '9fXxLDpCcUQPCd0cxOOB1oHbGOZ3Zr8L-YWDg9YDj6aK3qPDa4Li3untk8kbzzh9cJyzGnpjHpGcaTiDa-yCHN98dmbS80H5mnoweWriojN_Lw_n1z21xSQCFE_9irDAyVWxSGkQpCHeIQz4Vk8KZl5OA4f3izlbhTQOUXDivf2SmklqNdOI0d1eRz7Q-aBL.jpg';
$img_dore      = 'assets/img/capvietnam-tea-2.jpg';
$img_service   = IMG_TEA_DIR . 'CWpjA21BdGxe7vlMJAlV0rdbSKNiEvhNZ-q_b1j6BpTD9Tqq7MqoYJzVbupza3nOWw0Dw_3yxPiXNPxnIvcIsrxw6XGGimenIlYmNTGkfM9WPFk6m1Z6Bn-40dFcbByp1R_ACpnM5RSwBVcuyhvoeztffs3XcKFWO4SCMrYZswwWQZm4lQawTDBKT0PBWJ4g.jpg';

$page_title       = 'Thé dattes-goji-réglisse : recette de ma belle-mère vietnamienne';
$page_description = 'Une couleur jaune dorée, un goût naturellement sucré, des notes de miel et de réglisse — je n\'avais jamais bu quelque chose comme ça. La recette du thé santé vietnamien préparé par ma belle-mère pour les grandes occasions.';
$page_canonical   = SITE_URL . '/the-sante-vietnamien-dattes-goji-reglisse';
$page_og_title    = 'Thé vietnamien aux dattes, réglisse et goji rouge — recette de belle-mère';
$page_og_desc     = 'Un thé doré, sucré naturellement, que je n\'avais jamais goûté en France. Recette, ingrédients, secret de la couleur et où les trouver en épicerie asiatique.';
$page_og_url      = 'https://blog-capvietnam.fr/the-sante-vietnamien-dattes-goji-reglisse';
$page_og_image    = 'https://blog-capvietnam.fr/' . $img_hero;

$page_schema = '{
  "@context": "https://schema.org",
  "@type": "Recipe",
  "name": "Thé vietnamien aux dattes rouges, réglisse et goji rouge",
  "image": ["https://blog-capvietnam.fr/assets/img/capvietnam-tea.jpg","https://blog-capvietnam.fr/assets/img/capvietnam-tea-2.jpg","https://blog-capvietnam.fr/assets/img/capvietnam-tea-3.jpg"],
  "description": "Thé santé traditionnel vietnamien préparé avec des dattes rouges séchées, de la réglisse, des gojis rouges et du jiaogulan. Couleur jaune dorée, goût naturellement sucré.",
  "recipeYield": "3 à 4 tasses",
  "prepTime": "PT5M",
  "cookTime": "PT30M",
  "totalTime": "PT40M",
  "recipeCategory": "Boisson",
  "recipeCuisine": "Vietnamienne",
  "keywords": "thé vietnamien dattes rouges réglisse goji rouge jiaogulan recette santé",
  "datePublished": "2026-06-01",
  "author": {"@type": "Person", "name": "Anthony Bouillon", "url": "https://blog-capvietnam.fr/a-propos-capvietnam"},
  "nutrition": {
    "@type": "NutritionInformation",
    "servingSize": "1 tasse (125 ml)",
    "calories": "55 kcal",
    "carbohydrateContent": "13 g",
    "sugarContent": "11 g",
    "proteinContent": "0.4 g",
    "fatContent": "0.1 g",
    "fiberContent": "0.5 g"
  },
  "recipeIngredient": [
    "500 ml d\'eau",
    "10 dattes rouges séchées (jujubes)",
    "2 à 3 rondelles de réglisse séchée (~5 g)",
    "1 poignée de gojis rouges (10 à 15 baies)",
    "1 à 1,5 g de Gynostemma pentaphyllum (jiaogulan) séché"
  ],
  "recipeInstructions": [
    {
      "@type": "HowToStep",
      "name": "Préparer la casserole",
      "url": "https://blog-capvietnam.fr/the-sante-vietnamien-dattes-goji-reglisse#section-3",
      "image": "https://blog-capvietnam.fr/assets/img/capvietnam-tea.jpg",
      "text": "Verser 500 ml d\'eau froide dans une casserole. Ajouter les dattes rouges, les rondelles de réglisse et le jiaogulan séché."
    },
    {
      "@type": "HowToStep",
      "name": "Mijoter à feu doux",
      "url": "https://blog-capvietnam.fr/the-sante-vietnamien-dattes-goji-reglisse#section-3",
      "image": "https://blog-capvietnam.fr/assets/img/capvietnam-tea-3.jpg",
      "text": "Porter à frémissement puis laisser mijoter à feu doux pendant 20 à 30 minutes."
    },
    {
      "@type": "HowToStep",
      "name": "Infuser les gojis rouges",
      "url": "https://blog-capvietnam.fr/the-sante-vietnamien-dattes-goji-reglisse#section-3",
      "image": "https://blog-capvietnam.fr/assets/img/capvietnam-tea-2.jpg",
      "text": "Éteindre le feu. Ajouter les gojis rouges. Laisser infuser 5 à 10 minutes."
    },
    {
      "@type": "HowToStep",
      "name": "Servir",
      "url": "https://blog-capvietnam.fr/the-sante-vietnamien-dattes-goji-reglisse#section-3",
      "image": "https://blog-capvietnam.fr/assets/img/capvietnam-tea-2.jpg",
      "text": "Filtrer si souhaité ou servir tel quel, chaud ou sur glaçons."
    }
  ]
}';

$article_color        = 'amber';
$article_hero_bg      = '#2a1f00';
$article_glow         = 'rgba(184,134,11,0.18)';
$article_badge        = 'rgba(184,134,11,0.2)';
$article_badge_c      = 'var(--amber)';
$article_category     = 'Voyager au Vietnam';
$article_category_url = 'https://blog-capvietnam.fr/articles-capvietnam';

$page_faq = [
  ['q' => 'Où trouver des gojis rouges en France ?',
   'a' => 'Les gojis rouges sont faciles à trouver en France : en épicerie asiatique, en magasin bio, sur Amazon. Cherchez « baies de goji séchées » ou « wolfberry ». C\'est l\'un des ingrédients les plus simples à trouver de cette recette.'],
  ['q' => 'Peut-on mettre plus de 10 dattes ?',
   'a' => 'Oui, la quantité est ajustable selon le goût. Avec 10 dattes pour 500 ml, le thé est naturellement sucré et bien coloré. En mettre davantage rend la boisson plus sucrée et la couleur plus ambrée. En dessous de 8, le goût est plus léger.'],
  ['q' => 'Peut-on ajouter du miel ou du sucre ?',
   'a' => 'Les dattes rouges donnent déjà une douceur naturelle à la tisane. Si tu veux plus de douceur, ajoute une petite cuillère de miel toutes fleurs hors du feu. Goûte d\'abord — souvent ce n\'est pas nécessaire.'],
  ['q' => 'Ce thé contient-il de la caféine ?',
   'a' => 'Non. Aucun des ingrédients (dattes, réglisse, goji, jiaogulan) ne contient de caféine. C\'est une tisane, pas un thé à proprement parler — idéale en soirée ou pour les personnes sensibles à la caféine.'],
];

$page_extra_head = '

<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Accueil","item":"https://blog-capvietnam.fr"},{"@type":"ListItem","position":2,"name":"Voyager au Vietnam","item":"https://blog-capvietnam.fr/articles-capvietnam"},{"@type":"ListItem","position":3,"name":"Thé vietnamien dattes goji réglisse"}]}</script>
<style>
.recipe-card{background:var(--white);border:2px solid var(--amber);border-radius:var(--radius);padding:2rem;margin:2.5rem 0;box-shadow:var(--shadow-sm)}
.recipe-card h3{font-family:"DM Serif Display",serif;font-size:1.3rem;margin-bottom:1.2rem;color:var(--ink);display:flex;align-items:center;gap:0.5rem}
.recipe-meta{display:flex;gap:2rem;flex-wrap:wrap;margin-bottom:1.5rem;padding-bottom:1.2rem;border-bottom:1px solid var(--border);font-size:0.88rem;color:var(--muted)}
.recipe-meta span{display:flex;align-items:center;gap:0.4rem;font-weight:600}
.recipe-ingredients{margin-bottom:1.5rem}
.recipe-ingredients h4,.recipe-steps h4{font-size:0.7rem;letter-spacing:3px;text-transform:uppercase;color:var(--muted);font-weight:700;margin-bottom:0.8rem}
.ingredient-list{list-style:none;padding:0;display:grid;grid-template-columns:1fr 1fr;gap:0.5rem}
.ingredient-list li{font-size:0.95rem;padding:0.5rem 0.75rem;background:var(--warm-bg);border-radius:4px;display:flex;align-items:center;gap:0.5rem}
.ingredient-list li::before{content:"•";color:var(--amber);font-weight:700}
.step-list{list-style:none;padding:0;counter-reset:step}
.step-list li{counter-increment:step;display:flex;gap:1rem;margin-bottom:1.2rem;align-items:flex-start}
.step-num{min-width:2rem;height:2rem;background:var(--amber);color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:0.8rem;font-weight:700;flex-shrink:0;margin-top:0.1rem}
.step-text{font-size:0.97rem;color:#3a3530;line-height:1.7}
.step-sub{margin-top:0.4rem;font-size:0.88rem;color:var(--muted);font-style:italic}
@media(max-width:640px){.ingredient-list{grid-template-columns:1fr}.recipe-meta{gap:1rem}}
</style>
';

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero" style="background:linear-gradient(165deg,<?= $article_hero_bg ?> 0%,#3d2e00 50%,#2a1800 100%);">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Voyager au Vietnam</a><span class="breadcrumb-sep">›</span>
      <span>Thé vietnamien</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">🍵 Recette & Culture</span>
    <h1>Le thé de ma belle-mère vietnamienne : dattes, réglisse et goji rouge</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 1er juin 2026</span>
      <span>⏱ 6 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">La première gorgée</a></li>
      <li><a href="#section-2">Les ingrédients</a></li>
      <li><a href="#section-3">La recette pas à pas</a></li>
      <li><a href="#section-4">Le secret de la couleur dorée</a></li>
      <li><a href="#section-5">Les vertus</a></li>
      <li><a href="#section-6">Trouver les ingrédients en France</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" title="Facebook" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" title="LinkedIn" onclick="window.open('https://www.linkedin.com/sharing/share-offsite/?url='+encodeURIComponent(location.href))">in</a>
        <a class="share-btn" title="Copier le lien" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <!-- INTRO -->
    <p>Je bois du thé depuis des années. Thé vert, thé noir, infusions du soir — j'en avais goûté pas mal. Mais ce jour-là, dans la maison de la maman de ma femme, pendant une fête de famille, j'ai eu une tasse entre les mains que je n'arrivais pas à identifier. Une couleur <strong>jaune dorée</strong>, légèrement trouble. Un parfum doux, presque caramélisé. Et au premier contact avec les lèvres — un goût <strong>naturellement sucré</strong>, avec des notes que je n'aurais pas su nommer sur le coup.</p>

    <p>J'ai regardé ma femme : <em>« C'est quoi ça ? »</em><br>
    Elle a souri. <em>« C'est le thé de ma mère. »</em></p>

    <p>Pas de sachet. Pas de théière classique. Juste une casserole, quatre ingrédients, et une recette transmise comme ça, sans livre, par habitude de famille. J'en bois régulièrement depuis — et j'ai même réussi à le reproduire en France.</p>

    <img class="article-photo" src="<?= $img_hero ?>" alt="Thé vietnamien aux dattes rouges, gojis et réglisse dans une théière en verre" width="800" height="600" loading="lazy" style="width:100%;border-radius:var(--radius);margin:2rem 0;object-fit:cover;max-height:450px;">

    <!-- H2 #1 -->
    <h2 id="section-1">La première gorgée : une surprise totale</h2>

    <p>Ce qui m'a d'abord frappé, c'est la <strong>couleur</strong>. Pas le brun habituel d'un thé noir, pas le vert pâle d'un thé vert. Un jaune dorée, lumineux, comme du miel dilué. Chaud dans la tasse, ça avait quelque chose d'apaisant rien qu'à regarder.</p>

    <img src="<?= $img_dore ?>" alt="Thé doré vietnamien versé dans une tasse blanche" width="800" height="530" loading="lazy" style="width:100%;border-radius:var(--radius);margin:1.5rem 0;object-fit:cover;max-height:380px;">

    <p>Et le goût — doux, avec un arrière-goût floral et une touche de réglisse qui reste en bouche. Naturellement sucré sans qu'on y ait ajouté du sucre. Pas de pointe d'amertume. Pas de caféine. C'est le genre de boisson qui ne ressemble à rien d'autre qu'on aurait goûté en Europe, et qui pourtant paraît évidente une fois en main.</p>

    <p>J'ai demandé ce qu'il y avait dedans. La liste m'a surpris par sa simplicité : <strong>quatre ingrédients</strong>, tous séchés, que les familles vietnamiennes gardent dans leurs placards comme nous gardons du thé Earl Grey.</p>

    <!-- H2 #2 -->
    <h2 id="section-2">Les quatre ingrédients</h2>

    <img src="<?= $img_mijotage ?>" alt="Tasse en verre avec gojis rouges et dattes séchées flottant dans un thé doré" width="800" height="533" loading="lazy" style="width:100%;border-radius:var(--radius);margin:1.5rem 0;object-fit:cover;max-height:400px;">

    <p>Ce thé n'est pas vraiment un "thé" au sens botanique — il ne contient pas de feuilles de <em>Camellia sinensis</em>. C'est une <strong>tisane mijotée</strong>, un remède-boisson de la médecine traditionnelle vietnamienne et chinoise, connu sous le nom de <em>nước sâm</em> ou tout simplement de thé aux herbes (<em>trà thảo mộc</em>).</p>

    <div class="recipe-card">
      <h3>🧡 Ingrédients — pour 500 ml</h3>
      <div class="recipe-meta">
        <span>⏱ Préparation : 5 min</span>
        <span>🔥 Cuisson : 20–30 min</span>
        <span>🫖 Infusion : 5–10 min</span>
        <span>🍵 Pour : 3–4 tasses</span>
      </div>
      <div class="recipe-ingredients">
        <h4>Ce qu'il faut</h4>
        <ul class="ingredient-list">
          <li>500 ml d'eau</li>
          <li><a href="https://amzn.to/4dxe7Jd" rel="noopener sponsored" target="_blank">10 dattes rouges séchées ↗</a></li>
          <li><a href="https://amzn.to/3PFOehg" rel="noopener sponsored" target="_blank">2–3 rondelles de réglisse séchée ↗</a></li>
          <li><a href="https://www.amazon.fr/Amazon-BAIES-GOJI-D%C3%89SHYDRAT%C3%89ES-200g/dp/B0CCV4LQN7" rel="noopener sponsored" target="_blank">Gojis rouges séchés ↗</a></li>
          <li><a href="https://amzn.to/4nZhQme" rel="noopener sponsored" target="_blank">1–1,5 g Jiaogulan séché ↗</a></li>
        </ul>
        <p style="font-size:0.78rem;color:var(--muted);margin-top:0.75rem;">↗ Liens Amazon affiliés — prix identiques pour toi.</p>
      </div>
    </div>

    <p><strong>Les dattes rouges</strong> (<em>táo tàu</em> en vietnamien, <em>jujubes</em> en français) sont le cœur de la recette. Ce ne sont pas les dattes méditerranéennes qu'on mange à Noël — ce sont des petits fruits séchés, rouge foncé, avec un noyau dur et une saveur douce et légèrement caramélisée. Elles donnent au thé son goût naturellement sucré et sa belle couleur.</p>

    <p><strong>La réglisse séchée</strong> apporte les notes anisées et la profondeur aromatique. En très petite quantité, elle se fond dans l'ensemble sans dominer. C'est elle qui crée l'arrière-goût floral qu'on a du mal à identifier au premier essai.</p>

    <p><strong>Les gojis rouges</strong> (<em>Lycium barbarum</em>) — les baies orangées qu'on trouve en épicerie bio ou asiatique. Une poignée pour 500 ml, ajoutée hors du feu pour qu'elles restent tendres. Elles ne modifient pas le profil aromatique mais apportent une note douce et se mangent directement dans la tasse.</p>

    <p><strong>Le jiaogulan</strong> (<em>Gynostemma pentaphyllum</em>) — c'est celui que j'ai découvert plus tard, en cherchant comment enrichir la recette. Une petite herbe séchée, 1 à 1,5 g suffit, qu'on ajoute en début de cuisson avec les dattes et la réglisse. Son goût est discret, légèrement herbacé, et il se fond dans l'ensemble sans modifier la couleur dorée. Dans la médecine traditionnelle asiatique, il est surnommé « herbe de l'immortalité » — une réputation qui ne manque pas d'ambition.</p>

    <!-- H2 #3 -->
    <h2 id="section-3">La recette pas à pas</h2>

    <div class="recipe-card">
      <h3>📋 Préparation</h3>
      <div class="recipe-steps">
        <h4>Étapes</h4>
        <ol class="step-list">
          <li>
            <div class="step-num">1</div>
            <div class="step-text">
              <strong>Verser 500 ml d'eau dans une casserole.</strong> Ajouter les dattes rouges (entières ou légèrement incisées pour libérer plus de saveur), les rondelles de réglisse séchée et le jiaogulan séché.
              <div class="step-sub">Eau froide de départ — on monte en température doucement pour extraire les arômes.</div>
            </div>
          </li>
          <li>
            <div class="step-num">2</div>
            <div class="step-text">
              <strong>Porter à frémissement, puis mijoter à feu doux.</strong> Laisser sur feu très doux pendant <strong>20 à 30 minutes</strong>. La couleur va progressivement passer du transparent au jaune pâle, puis au jaune doré.
              <div class="step-sub">Ne pas faire bouillir à gros bouillons — ça rend l'amertume de la réglisse plus prononcée.</div>
            </div>
          </li>
          <li>
            <div class="step-num">3</div>
            <div class="step-text">
              <strong>Éteindre le feu.</strong> C'est seulement là qu'on ajoute les gojis rouges. On ne les cuit pas — on les <strong>infuse</strong> dans le liquide chaud hors du feu.
              <div class="step-sub">Couvrir la casserole et laisser infuser 5 à 10 minutes.</div>
            </div>
          </li>
          <li>
            <div class="step-num">4</div>
            <div class="step-text">
              <strong>Servir.</strong> Tel quel en laissant les ingrédients dans la tasse, ou filtré si on préfère un thé plus limpide. Chaud en hiver, sur glaçons en été.
            </div>
          </li>
        </ol>
      </div>
    </div>

    <!-- H2 #4 -->
    <h2 id="section-4">Le secret de la couleur jaune dorée</h2>

    <img src="<?= $img_service ?>" alt="Vue de dessus d'une tasse de thé vietnamien doré avec rondelles de dattes et gojis sur plateau en bois" width="800" height="800" loading="lazy" style="width:100%;border-radius:var(--radius);margin:1.5rem 0;object-fit:cover;max-height:420px;">

    <p>C'est la question que je me suis posée après en voyant la couleur dans ma tasse : <em>d'où vient ce jaune doré ?</em> Ce n'est pas un colorant, pas une épice particulière. La réponse est dans la chimie des ingrédients.</p>

    <p>La couleur vient principalement de <strong>trois facteurs combinés</strong> :</p>

    <ul>
      <li><strong>Les dattes rouges bouillies longuement</strong> libèrent des pigments caroténoïdes et des sucres naturels qui teintent l'eau en jaune ambré — plus elles mijotent, plus la couleur s'intensifie</li>
      <li><strong>La réglisse</strong> apporte ses propres composés (glycyrrhizine) qui contribuent à la teinte chaude</li>
      <li><strong>Les gojis rouges ajoutés hors du feu</strong> — ils se réhydratent dans le liquide chaud sans cuire, restent tendres et se mangent directement dans la tasse. Leurs caroténoïdes n'altèrent pas la couleur dorée des dattes.</li>
    </ul>

    <div class="tip-box">
      <strong>💡 Gojis rouges dans la tasse :</strong>
      On les ajoute toujours hors du feu — ils gonflent, restent moelleux et sont très bons à manger. Une petite poignée (10 à 15 baies) pour 500 ml suffit.
    </div>

    <!-- H2 #5 -->
    <h2 id="section-5">Les vertus — ce que j'ai découvert après</h2>

    <img src="<?= $img_ambiance ?>" alt="Verres de thé ambré posés sur un tissu vert, ambiance chaleureuse" width="800" height="800" loading="lazy" style="width:100%;border-radius:var(--radius);margin:1.5rem 0;object-fit:cover;max-height:380px;">

    <p>Sur le moment, personne ne m'a fait de liste de bienfaits. Ce thé était simplement là, posé sur la table, comme une évidence. C'est plus tard, en cherchant sur internet, que j'ai compris pourquoi ces ingrédients sont si ancrés dans la médecine traditionnelle vietnamienne et chinoise.</p>

    <p><strong>Les dattes rouges (jujubes)</strong> sont utilisées depuis des siècles pour leurs propriétés supposées tonifiantes et leur apport en vitamine C. Dans la pharmacopée asiatique, on les dit bonnes pour le sommeil, la digestion et l'énergie générale.</p>

    <p><strong>La réglisse</strong> est connue pour ses vertus apaisantes sur les voies respiratoires et digestives. En petite quantité dans une tisane, elle aide à adoucir la gorge — d'où sa présence dans beaucoup de remèdes traditionnels contre les rhumes.</p>

    <p><strong>Les gojis rouges</strong> (<em>wolfberry</em>) sont riches en zéaxanthine, en bêta-carotène et en vitamine C. Utilisés depuis des siècles dans la médecine traditionnelle asiatique, ils sont l'un des ingrédients les mieux documentés de la pharmacopée orientale.</p>

    <p><strong>Le jiaogulan</strong> (<em>Gynostemma pentaphyllum</em>) est l'un des adaptogènes les plus étudiés en Asie du Sud-Est. Surnommé « herbe de l'immortalité » dans la littérature traditionnelle chinoise, il est réputé pour ses propriétés antioxydantes et son soutien au système cardiovasculaire. Des recherches préliminaires s'y intéressent, notamment pour ses saponines (les gypenosides) qui en font un profil proche de certains ginsénosides du ginseng.</p>

    <div class="info-box">
      <strong>📋 Une précision honnête :</strong>
      Je ne suis pas médecin, et ces informations sont issues de lectures personnelles. Les vertus de ces ingrédients sont reconnues dans la médecine traditionnelle — leur efficacité clinique varie selon les études. Ce thé est avant tout une boisson savoureuse et réconfortante. Si vous avez des conditions médicales particulières (notamment liées à la réglisse), consultez un professionnel de santé.
    </div>

    <!-- H2 #6 -->
    <h2 id="section-6">Trouver les ingrédients en France</h2>

    <p>Quand je suis rentré, j'avais envie de refaire ce thé. La bonne nouvelle : tout se trouve en France. J'ai tout commandé sur Amazon — livré en deux jours, pas besoin de courir les épiceries asiatiques.</p>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;margin:1.5rem 0;">

      <div style="border:1px solid var(--border);border-radius:var(--radius);padding:1.2rem;background:var(--white);">
        <div style="font-size:1.5rem;margin-bottom:0.5rem;">🔴</div>
        <p style="font-weight:700;font-size:0.95rem;margin-bottom:0.3rem;">Dattes rouges séchées</p>
        <p style="font-size:0.83rem;color:var(--muted);margin-bottom:0.8rem;">Aussi en épicerie asiatique (200–500 g). L'ingrédient le plus facile à trouver.</p>
        <a href="https://amzn.to/4dxe7Jd" rel="noopener sponsored" target="_blank"
           style="display:inline-block;padding:0.5rem 1rem;background:var(--amber);color:var(--ink);border-radius:4px;font-size:0.82rem;font-weight:700;text-decoration:none;">
          Voir sur Amazon →
        </a>
      </div>

      <div style="border:1px solid var(--border);border-radius:var(--radius);padding:1.2rem;background:var(--white);">
        <div style="font-size:1.5rem;margin-bottom:0.5rem;">🟤</div>
        <p style="font-weight:700;font-size:0.95rem;margin-bottom:0.3rem;">Réglisse séchée en morceaux</p>
        <p style="font-size:0.83rem;color:var(--muted);margin-bottom:0.8rem;">Réglisse pure en rondelles prêtes à l'emploi. Aussi en herboristerie.</p>
        <a href="https://amzn.to/3PFOehg" rel="noopener sponsored" target="_blank"
           style="display:inline-block;padding:0.5rem 1rem;background:var(--amber);color:var(--ink);border-radius:4px;font-size:0.82rem;font-weight:700;text-decoration:none;">
          Voir sur Amazon →
        </a>
      </div>

      <div style="border:1px solid var(--border);border-radius:var(--radius);padding:1.2rem;background:var(--white);">
        <div style="font-size:1.5rem;margin-bottom:0.5rem;">🔴</div>
        <p style="font-weight:700;font-size:0.95rem;margin-bottom:0.3rem;">Gojis rouges séchés (Wolfberry)</p>
        <p style="font-size:0.83rem;color:var(--muted);margin-bottom:0.8rem;">Faciles à trouver en bio ou épicerie asiatique. Sur Amazon, 200 g dure très longtemps.</p>
        <a href="https://www.amazon.fr/Amazon-BAIES-GOJI-D%C3%89SHYDRAT%C3%89ES-200g/dp/B0CCV4LQN7" rel="noopener sponsored" target="_blank"
           style="display:inline-block;padding:0.5rem 1rem;background:var(--amber);color:var(--ink);border-radius:4px;font-size:0.82rem;font-weight:700;text-decoration:none;">
          Voir sur Amazon →
        </a>
      </div>

      <div style="border:1px solid var(--border);border-radius:var(--radius);padding:1.2rem;background:var(--white);">
        <div style="font-size:1.5rem;margin-bottom:0.5rem;">🌱</div>
        <p style="font-weight:700;font-size:0.95rem;margin-bottom:0.3rem;">Jiaogulan séché (Gynostemma)</p>
        <p style="font-size:0.83rem;color:var(--muted);margin-bottom:0.8rem;">1 à 1,5 g par 500 ml suffit. Presque introuvable en magasin — Amazon reste l'option la plus simple.</p>
        <a href="https://amzn.to/4nZhQme" rel="noopener sponsored" target="_blank"
           style="display:inline-block;padding:0.5rem 1rem;background:var(--amber);color:var(--ink);border-radius:4px;font-size:0.82rem;font-weight:700;text-decoration:none;">
          Voir sur Amazon →
        </a>
      </div>

    </div>

    <p style="font-size:0.8rem;color:var(--muted);margin-top:0.25rem;">Liens affiliés Amazon — commission perçue si tu achètes, sans coût supplémentaire pour toi.</p>

    <div class="tip-box">
      <strong>💡 Mon astuce :</strong>
      Je fais une "session" de 2 ou 3 litres d'un coup le week-end. Ça se conserve 3 à 4 jours au frigo, et je le bois froid avec des glaçons en semaine. La couleur dorée tient très bien au froid.
    </div>

    <!-- FAQ -->
    <h2 id="section-faq">Questions fréquentes</h2>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Où trouver des gojis rouges en France ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Les gojis rouges sont faciles à trouver : en épicerie bio, en épicerie asiatique, sur Amazon. Cherchez « baies de goji séchées » ou « wolfberry ». C'est l'ingrédient le plus accessible de la recette.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Peut-on mettre plus de 10 dattes ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Oui, la quantité est ajustable. Avec 10 dattes pour 500 ml, le thé est naturellement sucré et bien coloré. En mettre davantage rend la boisson plus sucrée et la couleur plus ambrée. En dessous de 8, le goût est plus léger.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Peut-on ajouter du miel ou du sucre ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Les dattes rouges donnent déjà une douceur naturelle à la tisane. Si tu veux plus de douceur, ajoute une petite cuillère de miel toutes fleurs hors du feu. Goûte d'abord — souvent ce n'est pas nécessaire.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Ce thé contient-il de la caféine ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Non. Aucun des ingrédients (dattes, réglisse, goji, jiaogulan) ne contient de caféine. C'est une tisane, pas un thé à proprement parler — idéale le soir ou pour les personnes sensibles à la caféine.</div>
    </div>

    <!-- POUR ALLER PLUS LOIN -->
    <div class="info-box" style="margin-top:3rem;">
      <strong>🍵 Articles qui pourraient t'intéresser :</strong>
      <ul style="margin:0.75rem 0 0.5rem;padding-left:1.2rem;">
        <li><a href="tet-nouvel-an-lunaire-vietnam">Mon premier Tết avec la famille de ma femme</a></li>
        <li><a href="belle-famille-vietnamienne-guide">Rencontrer la belle-famille vietnamienne : guide de survie</a></li>
        <li><a href="differences-culturelles-couple-franco-vietnamien">Les différences culturelles qui surprennent en couple franco-vietnamien</a></li>
      </ul>
    </div>

    <!-- CTA NEWSLETTER -->
    <div class="cta-newsletter" style="background:linear-gradient(135deg,#3d2e00,#5a4400);margin-top:3rem;">
      <h3>📥 Alertes admin &amp; bons plans du mois</h3>
      <p>Recettes, démarches, vie de couple mixte — mes vraies découvertes, sans filtre ni spam.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
        <input type="hidden" name="_subject" value="Newsletter Cap Vietnam — the-sante-vietnamien">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit" style="background:var(--amber);color:var(--ink);">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>

    <!-- AUTHOR BOX -->
    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;">
        <img src="<?= PROFILE_PHOTO ?>" alt="Anthony Bouillon — Cap Vietnam" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
      </div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français installé à Hanoï avec ma femme vietnamienne. Je raconte l'expatriation telle qu'elle est — avec ses découvertes inattendues, ses galères administratives et ses petites habitudes qui changent la vie.</p>
        <div class="author-links">
          <a href="a-propos-capvietnam">À propos →</a>
          <a href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener">TikTok</a>
        </div>
      </div>
    </div>

  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
$current_slug = 'the-sante-vietnamien-dattes-goji-reglisse';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
