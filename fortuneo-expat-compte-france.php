<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Fortuneo depuis l\'étranger : ce qui change en expatriation';
$page_description = 'Compte Fortuneo depuis le Vietnam ou l\'étranger : quels services restent accessibles, que faire du PEA, ce qu\'il faut vérifier avant de partir.';
$page_canonical   = SITE_URL . '/fortuneo-expat-compte-france';
$page_og_title    = 'Fortuneo et expatriation : ce que vous pouvez garder depuis l\'étranger';
$page_og_desc     = 'Compte courant, livret, investissements : ce que Fortuneo permet depuis l\'étranger, ce qui est bloqué, et les questions à se poser avant de partir.';
$page_og_url      = 'https://blog-capvietnam.fr/fortuneo-expat-compte-france';
$page_og_image    = 'https://blog-capvietnam.fr/assets/img/capvietnam-money.jpg';

$page_schema = '{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "Fortuneo en expatriation : ce qu\'on peut garder et ce qu\'il faut vérifier",
  "description": "Guide pratique pour les expatriés français qui ont un compte Fortuneo ou souhaitent en ouvrir un avant de partir : compte courant, investissements, PEA et code parrainage 13036009.",
  "datePublished": "2026-06-06",
  "dateModified": "2026-06-06",
  "author": {"@type": "Person", "name": "Anthony Bouillon", "url": "https://blog-capvietnam.fr/a-propos-capvietnam"},
  "publisher": {"@type": "Organization", "name": "Cap Vietnam", "url": "https://blog-capvietnam.fr"},
  "mainEntityOfPage": "https://blog-capvietnam.fr/fortuneo-expat-compte-france",
  "inLanguage": "fr",
  "articleSection": "Argent & Travail"
}';

$article_color        = 'terracotta';
$article_hero_bg      = '#1a0a00';
$article_glow         = 'rgba(191,74,42,0.18)';
$article_badge        = 'var(--terracotta)';
$article_badge_c      = '#fff';
$current_slug         = 'fortuneo-expat-compte-france';
$current_cat          = 'argent';

$page_faq = [
  ['q' => 'Peut-on ouvrir un compte Fortuneo depuis l\'étranger ?',
   'a' => 'Non. L\'ouverture d\'un compte Fortuneo nécessite une adresse fiscale en France. Si vous êtes déjà expatrié, vous ne pouvez pas ouvrir un nouveau compte. En revanche, si vous partez bientôt, ouvrir le compte avant votre départ est la bonne stratégie — c\'est beaucoup plus simple.'],
  ['q' => 'Mon compte Fortuneo sera-t-il fermé si je m\'expatrie ?',
   'a' => 'Pas automatiquement. Fortuneo ne surveille pas en temps réel le pays de résidence de ses clients. En pratique, de nombreux expatriés conservent leur compte Fortuneo actif depuis l\'étranger. En revanche, si vous signalez votre départ ou si Fortuneo détecte une non-conformité avec ses CGU, des restrictions peuvent être appliquées. Lisez les conditions générales et, si nécessaire, contactez leur service client avant de partir.'],
  ['q' => 'Peut-on utiliser la carte Fortuneo à l\'étranger ?',
   'a' => 'Oui. La carte Gold Mastercard Fortuneo est utilisable partout dans le monde, sans frais de change si vous payez dans la devise locale. C\'est l\'un des gros avantages pour un expatrié : zéro commission sur les paiements à l\'étranger. Les retraits en devises étrangères sont également pris en charge (conditions selon le type de carte).'],
  ['q' => 'Que faire du PEA en cas d\'expatriation ?',
   'a' => 'Depuis la loi PACTE (2019), un PEA existant peut être conservé sans clôture obligatoire lors d\'une expatriation. Mais les conditions varient : certaines banques appliquent des restrictions, les nouveaux versements peuvent être bloqués, et le traitement fiscal dépend de votre pays de résidence. Ce point mérite une vérification avec un conseiller fiscal spécialisé en expatriation avant votre départ — pas après.'],
  ['q' => 'Comment transférer de l\'argent de Fortuneo vers un compte au Vietnam ou au Canada ?',
   'a' => 'Via virement SEPA (gratuit vers un compte Wise en euros), puis conversion dans Wise vers VND ou CAD. C\'est la méthode la plus économique. Un virement international direct depuis Fortuneo vers une banque vietnamienne est possible mais plus coûteux.'],
  ['q' => 'Puis-je garder mon Livret A en partant au Vietnam ?',
   'a' => 'Oui : le Livret A peut être conservé par un non-résident fiscal français. Le LEP (Livret d\'Épargne Populaire), en revanche, est strictement réservé aux résidents fiscaux et doit être clôturé lors du départ. Les intérêts du Livret A restent exonérés côté français, mais si tu deviens résident fiscal vietnamien, ils entrent en principe dans tes revenus mondiaux à déclarer au Vietnam — un point à valider selon ta situation.'],
  ['q' => 'Et mon assurance-vie française ?',
   'a' => 'L\'assurance-vie se conserve très bien en expatriation, et elle reste souvent le meilleur véhicule d\'épargne longue durée de l\'expatrié : contrairement au PEA, les versements demeurent généralement possibles en tant que non-résident. Ce qui change, c\'est la fiscalité des rachats, qui dépend de la convention fiscale entre la France et ton pays de résidence — un sujet à cartographier avant tout retrait important, pas un obstacle à la détention.'],
];

$page_extra_head = '

<script type="application/ld+json">{"@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Accueil","item":"https://blog-capvietnam.fr"},{"@type":"ListItem","position":2,"name":"Argent & Travail","item":"https://blog-capvietnam.fr/articles-capvietnam"},{"@type":"ListItem","position":3,"name":"Fortuneo expatriation"}]}</script>
';

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Fortuneo expat</span>
    </div>
    <span class="article-badge-hero" style="background:var(--terracotta);color:#fff">💻 Argent &amp; Travail</span>
    <h1>Fortuneo en expatriation : ce qu'on peut garder — et ce qu'il faut vérifier avant de partir</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 6 juin 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi garder un compte France</a></li>
      <li><a href="#section-2">Ce que Fortuneo propose</a></li>
      <li><a href="#section-3">Ce qui reste accessible depuis l'étranger</a></li>
      <li><a href="#section-4">La question du PEA</a></li>
      <li><a href="#section-5">Avant de partir : la checklist</a></li>
      <li><a href="#section-residence">Résidence fiscale et transparence bancaire</a></li>
      <li><a href="#section-epargne">Livrets, assurance-vie : produit par produit</a></li>
      <li><a href="#section-6">Code parrainage 13036009</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
  </aside>

  <article class="article-body">

    <!-- INTRO -->
    <p>J'ai un compte Fortuneo. Quand j'ai commencé à préparer mon installation à l'étranger, l'une des premières questions que je me suis posée était : <strong>qu'est-ce que je garde côté France, et qu'est-ce que je ferme ?</strong></p>

    <p>La réponse n'est pas simple — et les banques en ligne ne la rendent pas toujours claire. Cet article résume ce que j'ai compris sur Fortuneo et l'expatriation : ce qui reste accessible, ce qui peut être bloqué, le sort de chaque produit d'épargne (PEA, livrets, assurance-vie), la question de la résidence fiscale que personne n'aime poser, et surtout ce qu'il faut vérifier <em>avant</em> de partir plutôt qu'après.</p>

    <div class="info-box">
      <strong>📋 Deux profils concernés par cet article :</strong><br>
      — Vous avez déjà Fortuneo et vous préparez une expatriation<br>
      — Vous partez bientôt et vous cherchez quelle banque française ouvrir avant le départ
    </div>

    <!-- H2 #1 -->
    <h2 id="section-1">Pourquoi garder un compte bancaire français quand on s'expatrie</h2>

    <p>Partir à l'étranger ne signifie pas couper tous les liens financiers avec la France. Pour la plupart des expatriés français, un compte en France reste nécessaire pour :</p>

    <ul>
      <li><strong>Recevoir des virements depuis la France</strong> — remboursements, prestations sociales, loyers perçus, dividendes</li>
      <li><strong>Payer des abonnements français</strong> — assurances, abonnements téléphoniques français, impôts</li>
      <li><strong>Garder un accès aux marchés financiers français</strong> — investissements long terme</li>
      <li><strong>Préparer un retour éventuel</strong> — avoir un compte actif évite de repartir de zéro</li>
      <li><strong>Éviter les frais de change inutiles</strong> — une carte sans frais à l'étranger, c'est de l'argent économisé chaque mois</li>
    </ul>

    <p>Parmi les banques en ligne françaises, Fortuneo revient souvent dans les discussions d'expatriés — notamment pour sa carte sans frais de change et ses frais de gestion nuls sous conditions.</p>
    <p>Le contre-exemple qui justifie tout ça : l'expatrié qui clôture tout en partant « pour faire propre », puis découvre qu'il a besoin d'un RIB français pour percevoir un remboursement de la Sécu, régler un reliquat d'impôts ou toucher le loyer de son studio loué — et qu'ouvrir un compte depuis Hanoï sans adresse française relève du parcours du combattant. Fermer un compte français gratuit ne rapporte rien ; le garder ne coûte rien. L'asymétrie se passe de commentaire.</p>

    <!-- H2 #2 -->
    <h2 id="section-2">Ce que Fortuneo propose</h2>

    <p>Fortuneo est une banque en ligne française du groupe Crédit Mutuel Arkéa. Ce n'est pas une néobanque : c'est un établissement bancaire complet, avec IBAN français, garantie des dépôts jusqu'à 100 000€, et accès aux marchés financiers. La distinction compte pour un expatrié : une néobanque à IBAN étranger se fait parfois refuser par des organismes français (certains prélèvements, certaines administrations), là où un IBAN français classique passe partout. C'est exactement le rôle qu'on demande à sa « banque de France » restée au pays.</p>

    <h3>Les produits principaux</h3>

    <table class="comparison-table">
      <thead>
        <tr><th>Produit</th><th>Ce que c'est</th><th>Intérêt pour l'expat</th></tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Compte courant</strong></td>
          <td>Compte bancaire classique avec carte Mastercard Gold</td>
          <td>✅ Carte sans frais de change dans le monde entier</td>
        </tr>
        <tr>
          <td><strong>Livret d'épargne</strong></td>
          <td>Épargne rémunérée disponible à tout moment</td>
          <td>✅ Accessible et gérable depuis l'étranger</td>
        </tr>
        <tr>
          <td><strong>Compte titres</strong></td>
          <td>Investissement en actions, ETF, obligations</td>
          <td>⚠️ Vérifier les conditions selon pays de résidence</td>
        </tr>
        <tr>
          <td><strong>PEA</strong></td>
          <td>Plan d'Épargne en Actions — enveloppe fiscale française</td>
          <td>⚠️ Zone grise — voir section dédiée</td>
        </tr>
      </tbody>
    </table>

    <!-- H2 #3 -->
    <h2 id="section-3">Ce qui reste accessible depuis l'étranger</h2>

    <p>En pratique, voici ce que les expatriés rapportent sur Fortuneo depuis l'étranger — avec la réserve d'usage : les politiques bancaires évoluent, et ton expérience individuelle dépendra de ta situation déclarée :</p>

    <h3>Ce qui fonctionne sans accroc</h3>
    <ul>
      <li><strong>L'application mobile</strong> — fonctionne depuis n'importe quel pays, sans restriction géographique</li>
      <li><strong>Les virements SEPA</strong> — gratuits, rapides (1 jour ouvré)</li>
      <li><strong>La carte Mastercard Gold</strong> — utilisable partout dans le monde, sans commission de change sur les paiements</li>
      <li><strong>Les retraits d'espèces en devises</strong> — selon conditions de la carte (Gold : retraits gratuits jusqu'à un certain plafond mensuel)</li>
      <li><strong>La consultation et gestion du compte</strong> — depuis le site ou l'application, sans VPN nécessaire</li>
    </ul>

    <h3>Ce qui peut poser problème</h3>
    <ul>
      <li><strong>L'ouverture d'un nouveau compte depuis l'étranger</strong> — impossible sans adresse française</li>
      <li><strong>Certaines opérations sensibles</strong> — changement d'adresse à l'étranger, déclaration explicite de non-résidence : peuvent déclencher des vérifications</li>
      <li><strong>La réception de certains courriers</strong> — si vous n'avez plus d'adresse française, prévoyez une solution (famille, domiciliation)</li>
    </ul>

    <div class="tip-box">
      <strong>💡 Conseil pratique :</strong>
      Ne changez pas votre adresse dans Fortuneo pour une adresse étrangère sans avoir vérifié les CGU et l'impact sur vos produits. Beaucoup d'expatriés conservent l'adresse d'un proche en France — cela reste de votre responsabilité légale.
    </div>

    <!-- H2 #4 -->
    <h2 id="section-4">La question du PEA : ce qu'il faut vérifier</h2>

    <p>C'est la question la plus fréquente — et la plus délicate. Si vous avez un PEA Fortuneo, ou si vous envisagez d'en ouvrir un avant de partir, voici ce qu'il faut savoir. Pour ceux qui découvrent : le PEA est l'enveloppe fiscale française qui exonère d'impôt les plus-values d'actions européennes après cinq ans de détention — un avantage suffisamment précieux pour mériter qu'on réfléchisse à deux fois avant de le sacrifier sur l'autel d'un déménagement.</p>

    <h3>Ce que la loi dit depuis 2019</h3>
    <p>Avant la <strong>loi PACTE de mai 2019</strong>, l'expatriation entraînait la clôture obligatoire du PEA. Depuis cette loi, <strong>un PEA existant peut être conservé</strong> lors d'un départ à l'étranger — sans clôture forcée.</p>

    <h3>Ce qui reste ambigu</h3>
    <ul>
      <li><strong>Nouveaux versements</strong> — les versements sur un PEA nécessitent d'être domicilié fiscalement en France. En tant que non-résident, vous ne pouvez plus alimenter le PEA.</li>
      <li><strong>Position de Fortuneo</strong> — les CGU de Fortuneo peuvent prévoir des restrictions pour les non-résidents. À vérifier directement avec leur service client avant votre départ.</li>
      <li><strong>Fiscalité côté pays d'accueil</strong> — certains pays imposent les revenus et plus-values de placements étrangers, même si ceux-ci sont exonérés en France. Le Vietnam et le Canada ont des règles différentes sur ce point.</li>
    </ul>

    <div class="warning-box">
      <strong>⚠️ Ce n'est pas une zone à improviser</strong><br>
      La conservation d'un PEA en expatriation est légalement possible depuis 2019, mais les implications fiscales dépendent de votre situation personnelle — pays de résidence, conventions fiscales, déclaration de résidence auprès de Fortuneo. <strong>Consultez un conseiller fiscal spécialisé en expatriation avant votre départ</strong>, pas après. C'est le type de sujet où une heure de consultation évite des complications pour plusieurs années.
    </div>

    <!-- H2 #5 -->
    <h2 id="section-5">Avant de partir : la checklist Fortuneo</h2>

    <p>Si vous avez Fortuneo et que vous partez prochainement :</p>

    <ol>
      <li><strong>Lisez les conditions générales</strong> relatives à la non-résidence — section "conditions d'éligibilité" et "modification de situation"</li>
      <li><strong>Contactez le service client Fortuneo</strong> pour clarifier votre situation avant de partir — mieux vaut une réponse écrite qu'une mauvaise surprise</li>
      <li><strong>Vérifiez vos produits un par un</strong> — compte courant, épargne, compte titres, PEA : chacun peut avoir des règles différentes</li>
      <li><strong>Gardez une adresse française valide</strong> — pour les courriers officiels, les documents fiscaux, les relevés annuels</li>
      <li><strong>Associez votre compte Fortuneo à Wise</strong> pour les virements internationaux — c'est le couple le plus efficace pour gérer des flux France ↔ étranger</li>
    </ol>

    <p>Si vous n'avez pas encore de compte Fortuneo et que vous partez bientôt, <strong>ouvrir le compte avant le départ</strong> est la stratégie évidente — vous aurez une adresse française active et une situation de résident qui simplifie tout. C'est un principe général de l'expatriation bancaire : tout ce qui demande le statut de résident français (ouverture de compte, carte haut de gamme, crédit, PEA, assurance-vie) s'obtient dix fois plus facilement <em>avant</em> le départ. La liste des ouvertures à faire pendant qu'on est encore résident devrait figurer sur toutes les check-lists de départ, au même rang que la résiliation du bail.</p>
    <p>Complète le dispositif par les deux autres briques du trio de l'expatrié : <strong>Wise</strong> pour les transferts France ↔ Vietnam au taux interbancaire (<a href="transferer-argent-vietnam-wise">le guide complet</a>), et un <strong>compte vietnamien local</strong> pour la vie quotidienne sur place (<a href="banque-vietnam-francais">comment l'ouvrir</a>). Chaque brique a son rôle, aucune ne remplace les deux autres.</p>

    <!-- H2 résidence -->
    <h2 id="section-residence">Résidence fiscale et transparence bancaire : jouer franc jeu</h2>
    <p>Un mot d'honnêteté sur la pratique de « l'adresse chez les parents ». Elle est répandue, elle fonctionne au quotidien — et il faut en comprendre les limites. Les banques participent à l'<strong>échange automatique d'informations fiscales</strong> entre pays (le standard CRS de l'OCDE) : elles collectent la résidence fiscale déclarée de leurs clients et la transmettent aux administrations. Déclarer une résidence française alors que ton centre de vie est au Vietnam, c'est fournir une information inexacte à un dispositif conçu précisément pour croiser les données.</p>
    <p>Concrètement, les risques ne sont pas la descente de police, mais des frictions très réelles : une banque qui découvre l'incohérence peut geler des opérations le temps de clarifier, exiger des justificatifs, voire clôturer ; et côté impôts, une résidence déclarée incohérente avec ta déclaration de revenus attire l'attention plutôt qu'elle ne l'évite. La position propre : <strong>détermine sérieusement ta résidence fiscale</strong> (voir <a href="residence-fiscale-france-vietnam-183-jours">l'article 183 jours</a>), déclare-la de façon cohérente partout — banque comprise —, et choisis des établissements qui acceptent ta situation réelle plutôt que de la maquiller. Beaucoup d'expatriés restent d'ailleurs résidents fiscaux français (mission courte, foyer en France) : dans ce cas, rien à changer, et l'adresse française est simplement… vraie.</p>

    <!-- H2 épargne -->
    <h2 id="section-epargne">Livrets, assurance-vie, bourse : le sort de chaque produit</h2>
    <ul>
      <li><strong>Livret A</strong> : un non-résident peut le conserver (on ne peut en détenir qu'un, et il se déclare dans ton nouveau pays si celui-ci taxe les intérêts mondiaux). Le <strong>LEP</strong>, en revanche, est réservé aux résidents fiscaux français et doit être clôturé au départ.</li>
      <li><strong>Livrets bancaires fiscalisés</strong> (comme les livrets Fortuneo) : conservables, mais la fiscalité des intérêts change avec la non-résidence — retenue à la source française et déclaration éventuelle au Vietnam selon ta situation.</li>
      <li><strong>Assurance-vie</strong> : conservable en expatriation, et souvent le meilleur véhicule d'épargne longue de l'expatrié — la fiscalité applicable dépend de la convention fiscale du pays de résidence. Les versements restent généralement possibles, contrairement au PEA.</li>
      <li><strong>Compte-titres ordinaire</strong> : conservable, mais certains courtiers restreignent les ordres ou l'accès à certains produits pour les non-résidents (notamment hors UE). À vérifier par écrit.</li>
      <li><strong>PEA</strong> : voir la section dédiée — conservable, plus alimentable.</li>
    </ul>
    <p>Le fil conducteur : rien n'explose au départ, mais chaque produit change discrètement de régime. Une heure avec un conseiller spécialisé en mobilité internationale, avant le départ, pour passer cette liste en revue avec tes montants réels — c'est le meilleur investissement administratif de ton expatriation.</p>

    <!-- H2 #6 — Code parrainage -->
    <h2 id="section-6">Code parrainage Fortuneo : 13036009</h2>

    <p>Si vous décidez d'ouvrir un compte Fortuneo — idéalement avant votre départ, on l'a vu —, vous pouvez utiliser mon code parrainage. Le code donne accès à un bonus de bienvenue dont le montant varie selon les offres en cours — jusqu'à 250€ selon les périodes promotionnelles. Transparence habituelle du blog : le parrainage me rapporte aussi une prime, ça ne change rien au coût pour vous, et mon avis sur la banque serait le même sans.</p>

    <p><strong>Comment l'utiliser :</strong> le code se saisit <em>manuellement</em> pendant le processus d'inscription sur fortuneo.fr — il n'y a pas de lien direct qui l'applique automatiquement. Vérifie les conditions de l'offre en cours (versement initial, opérations à réaliser) sur la page officielle avant de compter sur le bonus.</p>

    <div style="background:linear-gradient(135deg,#fff5f3,#ffecea);border:2px solid var(--terracotta);border-radius:var(--radius);padding:1.75rem;margin:1.5rem 0">
      <div style="display:flex;align-items:flex-start;gap:1rem;flex-wrap:wrap">
        <div style="font-size:2rem;line-height:1;flex-shrink:0">🇫🇷</div>
        <div style="flex:1;min-width:220px">
          <div style="font-weight:700;font-size:1rem;color:var(--ink);margin-bottom:.4rem">Fortuneo — code parrainage à saisir à l'inscription</div>
          <div style="font-size:.9rem;color:var(--muted);margin-bottom:1rem;line-height:1.6">
            1. Aller sur <a href="go.php?id=fortuneo" target="_blank" rel="noopener sponsored" style="color:var(--terracotta);font-weight:600">fortuneo.fr</a> et commencer l'inscription<br>
            2. À l'étape "code parrainage", saisir le code ci-dessous<br>
            3. Le bonus s'applique automatiquement si les conditions sont remplies
          </div>
          <div style="display:flex;align-items:center;gap:.75rem;flex-wrap:wrap">
            <div style="background:#fff;border:2px solid var(--terracotta);border-radius:6px;padding:.5rem 1.25rem;font-size:1.2rem;font-weight:700;color:var(--terracotta);letter-spacing:3px;font-family:monospace">13036009</div>
            <button onclick="navigator.clipboard.writeText('13036009');this.textContent='✓ Copié';setTimeout(()=>this.textContent='Copier le code',2000)"
              style="padding:.5rem 1rem;background:var(--terracotta);color:#fff;border:none;border-radius:6px;font-weight:600;font-size:.85rem;cursor:pointer">
              Copier le code
            </button>
            <a href="go.php?id=fortuneo" target="_blank" rel="noopener sponsored"
              style="padding:.5rem 1rem;background:var(--ink);color:#fff;border-radius:6px;font-weight:600;font-size:.85rem;text-decoration:none">
              Aller sur Fortuneo →
            </a>
          </div>
          <div style="font-size:.75rem;color:var(--muted);margin-top:.75rem">Lien affilié — code à saisir manuellement. Offre et montant du bonus soumis aux conditions Fortuneo à la date d'ouverture.</div>
        </div>
      </div>
    </div>

    <!-- FAQ -->
    <h2 id="section-faq">Questions fréquentes</h2>

    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        <?= htmlspecialchars($faq['q']) ?>
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer"><?= htmlspecialchars($faq['a']) ?></div>
    </div>
    <?php endforeach; ?>

    <!-- POUR ALLER PLUS LOIN -->
    <div class="info-box" style="margin-top:3rem;">
      <strong>📖 Articles liés :</strong>
      <ul style="margin:0.75rem 0 0.5rem;padding-left:1.2rem;">
        <li><a href="banque-vietnam-francais">Compte bancaire au Vietnam pour Français : mon analyse</a></li>
        <li><a href="transferer-argent-vietnam-wise">Transférer de l'argent vers le Vietnam avec Wise</a></li>
        <li><a href="compte-bancaire-canada-europe-wealthsimple">Compte bancaire Canada depuis l'Europe : guide Wealthsimple</a></li>
        <li><a href="fiscalite-expat-france-vietnam">Fiscalité de l'expatrié France-Vietnam</a></li>
      </ul>
    </div>

    <!-- CTA NEWSLETTER -->
    <div class="cta-newsletter" style="background:linear-gradient(135deg,#1a0a00,#3a1500);margin-top:3rem;">
      <h3>📥 Alertes admin &amp; bons plans du mois</h3>
      <p>Finances d'expat, démarches, vie en couple mixte — ce que je vis concrètement.</p>
      <form class="cta-form" action="<?= SITE_URL ?>/subscribe-pack" method="POST">
        <input type="text" name="website" value="" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit" style="background:var(--terracotta);color:#fff;">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>

    <!-- AUTHOR BOX -->
    <div class="author-box">
      <img src="<?= PROFILE_PHOTO ?>" alt="Anthony Bouillon — Cap Vietnam" width="72" height="72" loading="lazy" decoding="async" style="width:72px;height:72px;border-radius:50%;object-fit:cover;flex-shrink:0;">
      <div class="author-info">
        <p><strong>Anthony Bouillon</strong> — Français entre la France, le Canada et le Vietnam. Je gère des finances sur plusieurs pays depuis des années — je partage ce que j'ai compris, sans prétendre être conseiller financier.</p>
        <a href="a-propos-capvietnam" class="author-link">En savoir plus →</a>
      </div>
    </div>

  </article>
</div>

<?php include '_article-comments.php'; ?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
