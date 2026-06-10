<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'S\'expatrier au Vietnam en 2026 : Guide complet pour les Français';
$page_description = 'Tout ce qu\'il faut savoir pour s\'installer au Vietnam en 2026 : visas, logement, santé, banques, fiscalité, coût de la vie, internet, travail, création d\'entreprise. Guide honnête basé sur le vécu.';
$page_canonical   = SITE_URL . '/s-expatrier-vietnam-2026-guide-complet';
$page_og_title    = 'S\'expatrier au Vietnam en 2026 : Guide complet pour Français';
$page_og_desc     = 'Visa, logement, banques, santé, fiscalité, coût de la vie, travail en ligne — tout ce qu\'il faut savoir avant de partir au Vietnam.';
$page_og_url      = SITE_URL . '/s-expatrier-vietnam-2026-guide-complet';
$page_og_image    = SITE_URL . '/assets/img/596295808_755082580937274_5977220999229795732_n.jpg';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'S\'expatrier au Vietnam en 2026 : Guide complet pour les Français',
  'description'     => 'Guide complet sur l\'expatriation au Vietnam en 2026 : visa, logement, banques, santé, fiscalité, coût de la vie.',
  'image'           => SITE_URL . '/assets/img/596295808_755082580937274_5977220999229795732_n.jpg',
  'datePublished'   => '2026-06-10',
  'dateModified'    => '2026-06-10',
  'author'          => ['@type' => 'Person', 'name' => 'Anthony Bouillon', 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => 'Cap Vietnam', 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/s-expatrier-vietnam-2026-guide-complet',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Démarches & installation',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$page_faq = [
  ['q' => 'Faut-il un visa pour s\'installer au Vietnam en tant que Français ?',
   'a' => 'Les Français bénéficient d\'une exemption de visa pour les séjours de 45 jours maximum. Au-delà, un e-visa 90 jours est nécessaire (environ 25 USD). Pour une installation durable, un visa de travail ou un visa TT (mariage avec ressortissant vietnamien) est requis.'],
  ['q' => 'Quel budget prévoir pour vivre à Hanoï ?',
   'a' => 'Comptez entre 600 et 1 200€ par mois à Hanoï selon votre style de vie. Un loyer T2 en quartier résidentiel coûte 7 à 12 millions de VND par mois (~260–440€), la nourriture locale est très accessible (1–2€ le repas de rue). Vivez comme un local et vous pouvez vous en sortir avec 800€/mois.'],
  ['q' => 'Peut-on ouvrir un compte bancaire au Vietnam en tant qu\'étranger ?',
   'a' => 'Oui, Vietcombank accepte les étrangers avec un passeport valide et un numéro de téléphone vietnamien. L\'ouverture se fait en agence. Complétez avec Wise pour les transferts internationaux.'],
  ['q' => 'La retraite française est-elle imposable au Vietnam ?',
   'a' => 'Selon la convention fiscale France-Vietnam de 1993, les pensions de retraite sont imposables dans le pays de résidence du bénéficiaire. Un retraité fiscal vietnamien paie donc ses impôts au Vietnam, pas en France.'],
  ['q' => 'Peut-on travailler à distance au Vietnam avec un e-visa ?',
   'a' => 'Il n\'existe pas de "visa digital nomad" officiel au Vietnam en 2026. En pratique, les travailleurs à distance étrangers utilisent l\'e-visa 90 jours renouvelable. Il n\'est pas illégal de travailler à distance pour une entreprise étrangère, mais la situation juridique reste floue.'],
];

$article_color        = 'jade';
$article_hero_bg      = '#0d2b1f';
$article_glow         = 'rgba(27,107,82,0.15)';
$article_badge        = 'rgba(27,107,82,0.2)';
$article_badge_c      = 'var(--jade)';
$article_category     = 'Démarches & installation';
$article_category_url = SITE_URL . '/articles-capvietnam';

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero" style="background:linear-gradient(165deg,<?= $article_hero_bg ?> 0%,#1b4a35 50%,#0d2b1f 100%);">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam.php">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam.php">Démarches & installation</a><span class="breadcrumb-sep">›</span>
      <span>Guide complet expatriation</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">📘 Guide complet</span>
    <h1>S'expatrier au Vietnam en 2026 : le guide complet pour les Français</h1>
    <div class="article-hero-meta">
      <span>Par <strong>Anthony Bouillon</strong></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 20 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">

  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#visas">1. Visas</a></li>
      <li><a href="#logement">2. Logement</a></li>
      <li><a href="#sante">3. Santé</a></li>
      <li><a href="#banques">4. Banques</a></li>
      <li><a href="#fiscalite">5. Fiscalité</a></li>
      <li><a href="#cout-vie">6. Coût de la vie</a></li>
      <li><a href="#internet">7. Internet & téléphone</a></li>
      <li><a href="#travail">8. Travail en ligne</a></li>
      <li><a href="#creation-entreprise">9. Création d'entreprise</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" title="Facebook" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" title="Copier le lien" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <p>Je prépare mon départ définitif du Québec pour Hanoï en septembre 2026. J'ai passé plusieurs mois à assembler toutes ces informations — visa, logement, banques, fiscalité, santé — en me confrontant aux sources officielles, aux forums expats et à ma propre expérience lors de mes deux voyages au Vietnam. Ce guide rassemble tout ce que j'aurais voulu trouver en un seul endroit. <strong>Je ne mets que ce que j'ai vérifié ou vécu.</strong></p>

    <div class="warning-box">
      <strong>⚠️ Avertissement honnête :</strong> Ce guide est basé sur mes recherches et mon expérience. Les règles administratives, les tarifs et les lois évoluent. Vérifiez toujours les sources officielles avant toute décision importante. Ce n'est pas un conseil juridique ou fiscal.
    </div>

    <img class="article-photo" src="assets/img/596295808_755082580937274_5977220999229795732_n.jpg" alt="Lac de l'Ouest (Hồ Tây) à Hanoï — vie quotidienne expat" width="800" height="600" loading="eager" style="width:100%;border-radius:var(--radius);margin:2rem 0;object-fit:cover;max-height:450px;">

    <!-- ════════════════════════════════ VISAS ════════════════════════════════ -->
    <h2 id="visas">1. Visas — quelle option selon ta situation</h2>

    <p>La première question : <em>avec quel visa tu peux rester au Vietnam, et pour combien de temps ?</em></p>

    <h3>Exemption de visa — 45 jours</h3>
    <p>Les citoyens français bénéficient d'une <strong>exemption de visa pour les séjours de 45 jours maximum</strong>. Aucune démarche préalable. Tu arrives avec ton passeport valide plus de 6 mois, tu passes la douane, tu es au Vietnam pour 45 jours. C'est la solution des voyageurs et de ceux qui "testent" le pays avant de s'installer.</p>
    <p><strong>Limite :</strong> tu ne peux pas travailler légalement avec ce statut, et le renouvellement par sortie/entrée ("border run") est de plus en plus surveillé.</p>

    <h3>E-visa — 90 jours</h3>
    <p>L'e-visa est disponible pour les Français sur le site officiel du gouvernement vietnamien. Il coûte <strong>25 USD</strong>, s'obtient en quelques jours en ligne, et donne droit à un séjour de 90 jours. Il est désormais renouvelable depuis 2024 — ce qui le rend utilisable pour des séjours de plusieurs mois sans changer de statut.</p>
    <p>C'est le visa le plus utilisé par les digital nomads et les expatriés en phase d'installation. Simple, rapide, peu cher.</p>

    <h3>Visa TT — pour les époux de ressortissant vietnamien</h3>
    <p>Si tu es marié(e) à un(e) ressortissant(e) vietnamien(ne), tu peux obtenir un <strong>visa TT</strong> (tạm trú — titre de séjour temporaire) d'un ou plusieurs ans. C'est la voie que je prends. Ce visa te permet de résider durablement au Vietnam sans permis de travail, mais il ne t'autorise pas à travailler pour une entreprise vietnamienne sans permis supplémentaire.</p>
    <p>Durée : 1 an renouvelable, possible de demander une durée plus longue selon les cas.</p>

    <h3>Visa de travail — Work permit</h3>
    <p>Si tu travailles pour une entreprise vietnamienne ou une entreprise étrangère avec une entité au Vietnam, tu as besoin d'un permis de travail (<em>giấy phép lao động</em>) et d'un visa DL ou LD. La démarche est initiée par l'employeur.</p>

    <div class="info-box">
      <strong>📖 Article détaillé :</strong> <a href="visa-vietnam-francais-guide-2026.php">Visa Vietnam pour un Français — guide complet 2026</a>
    </div>

    <!-- ════════════════════════════════ LOGEMENT ════════════════════════════════ -->
    <h2 id="logement">2. Logement — trouver un appartement à Hanoï</h2>

    <p>Trouver un appartement au Vietnam est moins compliqué qu'en France. Pas besoin de CDI ni de garant : un visa valide et une caution en cash suffisent. En revanche, <strong>le marché locatif a beaucoup évolué depuis 2020</strong> — les prix ont augmenté de 25 à 40% dans les quartiers expats.</p>

    <h3>Prix réels à Hanoï en 2026</h3>
    <p>Référence rapide : <strong>1 million de VND (1 M₫) ≈ 37 €</strong> en juin 2026.</p>

    <table class="comparison-table">
      <thead><tr><th>Type</th><th>Quartier central (Tây Hồ, Hoàn Kiếm)</th><th>Quartier résidentiel</th></tr></thead>
      <tbody>
        <tr><td>T1 (studio)</td><td>10–16 M₫/mois</td><td>4–7 M₫/mois</td></tr>
        <tr><td>T2</td><td>10–18 M₫/mois</td><td>7–12 M₫/mois</td></tr>
        <tr><td>T3</td><td>15–30 M₫/mois</td><td>10–20 M₫/mois</td></tr>
        <tr><td>Serviced apartment</td><td>20–50 M₫/mois</td><td>—</td></tr>
      </tbody>
    </table>

    <p>Les charges s'ajoutent : électricité, eau, internet. Compte <strong>1 à 3 M₫ par mois</strong> selon la consommation de climatisation. La fibre optique est excellente et peu chère (150 000 à 300 000 VND/mois pour 100 Mb/s).</p>

    <h3>Marché expat vs marché local</h3>
    <p>Deux marchés coexistent. Le <strong>marché expat</strong> : appartements meublés haut de gamme, propriétaire anglophone, contrat en anglais possible. Pratique pour un primo-arrivant, mais 30 à 50% plus cher. Le <strong>marché local</strong> : immeubles vietnamiens, propriétaire non-anglophone, mobilier simple, prix bien inférieurs — mais ça demande d'être sur place et d'avoir des contacts locaux ou de parler un peu vietnamien.</p>

    <h3>Caution et contrat</h3>
    <p>La caution standard est de 1 à 2 mois de loyer. Elle se paie en cash ou virement. Le contrat peut être en vietnamien — fais-le traduire ou utilise un modèle bilingue. Certains propriétaires acceptent les étrangers sans démarche particulière ; d'autres demandent une copie du passeport et du visa.</p>

    <div class="info-box">
      <strong>📖 Article détaillé :</strong> <a href="louer-appartement-hanoi-etranger.php">Louer un appartement à Hanoï en tant qu'étranger — prix réels et conseils 2026</a>
    </div>

    <!-- ════════════════════════════════ SANTÉ ════════════════════════════════ -->
    <h2 id="sante">3. Santé — assurance et système médical</h2>

    <p>La santé au Vietnam est abordable dans les hôpitaux publics locaux, mais peut devenir très chère si tu fréquentes les cliniques internationales. Et <strong>la Sécurité sociale française ne couvre pas les soins au Vietnam</strong> — la France et le Vietnam n'ont pas de convention de sécurité sociale bilatérale couvrant les soins courants.</p>

    <h3>Le risque réel sans assurance</h3>
    <p>Une hospitalisation sérieuse dans une clinique internationale (Vinmec, Hoan My, FV Hospital) peut coûter plusieurs milliers de dollars. Un rapatriement sanitaire vers la France : entre 20 000 et 100 000 €. Sans assurance, tu paies intégralement. C'est la garantie à ne jamais négliger.</p>

    <h3>L'assurance sociale vietnamienne</h3>
    <p>Si tu travailles avec un contrat de droit vietnamien, tu es obligatoirement affilié à la sécurité sociale locale. Part employeur : 17,5% du salaire brut. Part salarié : 10,5%. La couverture réelle est limitée aux hôpitaux publics — insuffisant seul pour un expatrié.</p>

    <h3>Ce que je prévois</h3>
    <p>Je prévois de souscrire chez <strong>Manulife Vietnam</strong>. Ma femme y travaille, ce qui me donne accès à des tarifs avantageux. La couverture de base revient à environ <strong>10 000 000 VND par an (~370€)</strong> — ce n'est pas une assurance internationale complète, mais c'est un filet de sécurité de base. Pour une couverture rapatriement, je complèterai avec une assurance internationale.</p>

    <div class="info-box">
      <strong>📖 Article détaillé :</strong> <a href="assurance-sante-vietnam-expat.php">Assurance santé au Vietnam pour expatriés — comparatif 2026</a>
    </div>

    <!-- ════════════════════════════════ BANQUES ════════════════════════════════ -->
    <h2 id="banques">4. Banques — gérer son argent depuis la France ou le Canada</h2>

    <p>Gérer de l'argent sur plusieurs pays demande une stratégie. J'utilise plusieurs comptes selon l'usage :</p>

    <h3>Wise — pour les transferts internationaux</h3>
    <p>Mon outil principal pour envoyer de l'argent France/Canada → Vietnam. Le taux de change est proche du taux interbancaire réel. Frais : environ 0,5 à 1% selon le montant et le pays. Un virement vers un compte Vietcombank arrive en quelques heures. C'est le moyen le moins cher pour envoyer de l'argent au Vietnam.</p>

    <h3>Revolut — pour les paiements au quotidien</h3>
    <p>Carte débit internationale, très pratique pour suivre ses dépenses au Vietnam. Plan Standard gratuit. Plan Premium recommandé pour les retraits sans frais à l'étranger au-delà du plafond mensuel.</p>

    <h3>Vietcombank — compte local vietnamien</h3>
    <p>Indispensable pour payer le loyer en VND, recevoir des virements locaux, et utiliser les services vietnamiens. Ouverture en agence avec un <strong>passeport valide et un numéro de téléphone vietnamien</strong>. C'est simple, mais tu dois être physiquement au Vietnam.</p>

    <div class="tip-box">
      <strong>💡 L'ordre logique :</strong>
      Dès l'arrivée → acheter une SIM locale → ouvrir un compte Vietcombank → rapatrier de l'argent via Wise quand nécessaire. Ces trois étapes font 90% de la gestion financière au Vietnam.
    </div>

    <div class="info-box">
      <strong>📖 Articles détaillés :</strong><br>
      <a href="banque-vietnam-francais.php">Compte bancaire au Vietnam pour un Français</a><br>
      <a href="transferer-argent-vietnam-wise.php">Transférer de l'argent vers le Vietnam avec Wise</a>
    </div>

    <!-- ════════════════════════════════ FISCALITÉ ════════════════════════════════ -->
    <h2 id="fiscalite">5. Fiscalité — ce que la loi dit vraiment</h2>

    <p>La fiscalité est le sujet que tous les expatriés évitent jusqu'au premier redressement. Voici les fondamentaux basés sur les textes en vigueur.</p>

    <h3>La convention fiscale France-Vietnam (1993)</h3>
    <p>La France et le Vietnam ont signé une <strong>convention fiscale contre la double imposition</strong> le 10 février 1993 (entrée en vigueur en 1994). Elle définit pour chaque type de revenu dans quel pays il est imposable :</p>
    <ul>
      <li><strong>Revenus d'emploi</strong> : imposables dans le pays où le travail est exercé</li>
      <li><strong>Revenus immobiliers</strong> : imposables dans le pays où le bien est situé</li>
      <li><strong>Pensions de retraite</strong> : imposables dans le pays de résidence</li>
      <li><strong>Dividendes</strong> : imposables dans les deux pays avec crédit d'impôt</li>
    </ul>

    <h3>Résidence fiscale : la question centrale</h3>
    <p>Selon l'article 4B du Code général des impôts, tu es résident fiscal français si : ton foyer principal est en France, ou tu exerces une activité professionnelle en France, ou ton centre d'intérêts économiques est en France. Dès que ces critères ne sont plus remplis, la résidence fiscale peut basculer.</p>
    <p>Si les deux pays se réclament de ta résidence, la convention tranche selon un ordre de critères : foyer permanent → centre d'intérêts vitaux → séjour habituel → nationalité.</p>

    <h3>Ce que ça veut dire concrètement</h3>
    <p>Si tu quittes définitivement la France (fermer ton appartement, déménager officiellement au Vietnam), tu peux demander à quitter la résidence fiscale française. Tes revenus mondiaux seront alors potentiellement imposables au Vietnam selon les règles locales. <strong>Consulte un comptable ou conseiller fiscal avant de prendre cette décision</strong> — les erreurs sont coûteuses.</p>

    <div class="info-box">
      <strong>📖 Article détaillé :</strong> <a href="fiscalite-expat-france-vietnam.php">Fiscalité de l'expatrié en France et au Vietnam — ce que dit la loi</a>
    </div>

    <!-- ════════════════════════════════ COÛT DE LA VIE ════════════════════════════════ -->
    <h2 id="cout-vie">6. Coût de la vie à Hanoï en 2026</h2>

    <img class="article-photo" src="assets/img/595605424_755082234270642_7802260515125357552_n.jpg" alt="Bánh mì et jus frais à Hanoï — vie quotidienne" width="800" height="700" loading="lazy" style="width:100%;border-radius:var(--radius);margin:1.5rem 0;object-fit:cover;max-height:380px;">

    <p>Hanoï reste une des capitales les moins chères d'Asie pour un expatrié occidental. Mais les coûts ont augmenté de 20 à 30% depuis 2020. Voici les chiffres réels — pas les estimations optimistes des articles de travel bloggers.</p>

    <table class="comparison-table">
      <thead><tr><th>Poste</th><th>Budget minimum</th><th>Budget confortable</th></tr></thead>
      <tbody>
        <tr><td>Loyer (T2 Hanoï)</td><td>7–10 M₫</td><td>12–20 M₫</td></tr>
        <tr><td>Alimentation (local)</td><td>3–5 M₫</td><td>8–15 M₫</td></tr>
        <tr><td>Transport (Grab + vélo)</td><td>1–2 M₫</td><td>3–5 M₫</td></tr>
        <tr><td>Internet + téléphone</td><td>0,5–0,7 M₫</td><td>0,5–0,7 M₫</td></tr>
        <tr><td>Loisirs + sorties</td><td>1–3 M₫</td><td>5–10 M₫</td></tr>
        <tr><td><strong>Total estimé</strong></td><td><strong>~500–700€/mois</strong></td><td><strong>~900–1 500€/mois</strong></td></tr>
      </tbody>
    </table>

    <p>Quelques repères au quotidien :</p>
    <ul>
      <li>Phở ou bún chả local : <strong>30 000 – 50 000 VND</strong> (1–2€)</li>
      <li>Café vietnamien : <strong>20 000 – 40 000 VND</strong></li>
      <li>Restaurant expatrié / cuisine française : <strong>150 000 – 400 000 VND</strong></li>
      <li>Course supermarché (BigC, Vinmart) pour deux : <strong>2–4 M₫/semaine</strong></li>
      <li>Électricité + eau + internet/mois : <strong>1–3 M₫</strong></li>
    </ul>

    <div class="info-box">
      <strong>📖 Articles détaillés :</strong><br>
      <a href="budget-mensuel-hanoi-2026.php">Budget mensuel à Hanoï en 2026 — chiffres réels</a><br>
      <a href="budget-mensuel-hcmc-2026.php">Budget mensuel à Ho Chi Minh-Ville en 2026</a>
    </div>

    <!-- ════════════════════════════════ INTERNET ════════════════════════════════ -->
    <h2 id="internet">7. Internet, téléphone et connectivité</h2>

    <h3>Internet fixe — excellent et pas cher</h3>
    <p>La fibre optique est disponible dans la quasi-totalité des appartements de Hanoï et Ho Chi Minh-Ville. Les débits sont bons (100 Mb/s standard), et le prix est imbattable : <strong>150 000 à 300 000 VND par mois</strong> (6 à 11€). C'est une des meilleures surprises du pays pour les travailleurs à distance.</p>

    <h3>SIM locale — indispensable dès le premier jour</h3>
    <p>Un numéro vietnamien est requis pour ouvrir un compte Vietcombank, utiliser Grab et Zalo, et certaines démarches administratives. À l'aéroport, une SIM prépayée coûte <strong>100 000 à 200 000 VND</strong>. Les trois opérateurs principaux : Viettel (meilleure couverture hors des grandes villes), Vinaphone, Mobifone.</p>
    <p>Le forfait annuel que ma femme utilise : environ <strong>2 500 000 VND par an</strong> (~100€), SMS illimités, environ 2 heures d'appel, et les données mobiles incluses.</p>

    <h3>VPN</h3>
    <p>Certains services sont géographiquement bloqués au Vietnam ou inaccessibles selon les périodes. Un VPN est recommandé pour accéder aux services de streaming, sécuriser sa connexion dans les cafés et contourner les restrictions ponctuelles. J'utilise <strong>CyberGhost</strong>.</p>

    <div class="info-box">
      <strong>📖 Article détaillé :</strong> <a href="telephone-vietnam-quelle-sim-choisir.php">Téléphone au Vietnam : quelle SIM choisir en 2026</a>
    </div>

    <!-- ════════════════════════════════ TRAVAIL ════════════════════════════════ -->
    <h2 id="travail">8. Travail en ligne depuis le Vietnam</h2>

    <p>Le Vietnam est devenu une destination privilégiée pour les travailleurs à distance. Internet rapide, coût de la vie faible, cafés et coworkings nombreux à Hanoï — les conditions sont réunies.</p>

    <h3>Le cadre légal : honest disclaimer</h3>
    <p>Il n'existe pas de "visa digital nomad" officiel au Vietnam en 2026. Les travailleurs à distance qui utilisent l'e-visa 90 jours travaillent dans un vide juridique relatif : il n'est pas illégal de travailler à distance pour une entreprise étrangère depuis le Vietnam, mais ce statut n'est pas officiellement reconnu. La situation est stable en pratique, mais peut évoluer.</p>

    <h3>Coworkings à Hanoï</h3>
    <p>Hanoï a une scène coworking développée. Les espaces les plus fréquentés par les expats se trouvent dans les quartiers de Tây Hồ et du vieux Hanoï. Les prix varient de 200 000 VND par jour à 3–5 M₫ par mois pour un abonnement.</p>

    <h3>Optimiser sa structure</h3>
    <p>Travailler à distance depuis le Vietnam ne signifie pas forcément créer une société vietnamienne. Beaucoup de freelances gardent leur structure auto-entrepreneur en France et font leur facturation depuis là. Cela implique de gérer la résidence fiscale attentivement — voir section fiscalité.</p>

    <div class="info-box">
      <strong>📖 Articles détaillés :</strong><br>
      <a href="travailler-en-ligne-vietnam.php">Travailler en ligne depuis le Vietnam — la réalité en 2026</a><br>
      <a href="cafes-coworkings-hanoi.php">Meilleurs cafés et coworkings à Hanoï pour les freelances</a>
    </div>

    <!-- ════════════════════════════════ CRÉATION ENTREPRISE ════════════════════════════════ -->
    <h2 id="creation-entreprise">9. Création d'entreprise au Vietnam</h2>

    <div class="warning-box">
      <strong>⚠️ Note honnête :</strong> Je n'ai pas encore créé d'entreprise au Vietnam. Je prévois de le faire après mon installation — je mettrai cette section à jour avec mon expérience réelle. Pour l'instant, voici ce que je sais des recherches préliminaires.
    </div>

    <p>Un étranger peut créer une entreprise au Vietnam dans la plupart des secteurs. La forme la plus courante pour un expatrié solo est la <strong>SARL à un associé</strong> (<em>Công ty TNHH một thành viên</em>). La détention étrangère à 100% est autorisée dans de nombreux secteurs, mais certains domaines stratégiques sont réservés ou soumis à des restrictions.</p>

    <h3>Ce que je sais avec certitude</h3>
    <ul>
      <li><strong>Capital minimum</strong> : variable selon le secteur, mais souvent symbolique (pas de minimum fixe pour les services)</li>
      <li><strong>Durée de la procédure</strong> : généralement 4 à 6 mois selon la complexité et le secteur</li>
      <li><strong>Interlocuteur</strong> : Département de la planification et de l'investissement (DPI) de la province/ville concernée</li>
      <li><strong>Document de base</strong> : Business Registration Certificate (BRC) + Enterprise Registration Certificate (ERC)</li>
    </ul>

    <h3>Ce que je ne sais pas encore</h3>
    <p>Les détails pratiques — coût réel, délais effectifs, risques selon le secteur, implications fiscales locales. Je n'invente pas. Je reviendrai sur ce point après avoir fait la démarche moi-même.</p>

    <div class="tip-box">
      <strong>💡 Recommandation :</strong> Pour la création d'entreprise, contacte un cabinet de conseil juridique local spécialisé expats. Plusieurs cabinets francophones ou anglophones opèrent à Hanoï et Ho Chi Minh-Ville. C'est un investissement qui vaut le coup pour éviter les erreurs.
    </div>

    <!-- ════════════════════════════════ FAQ ════════════════════════════════ -->
    <h2 id="section-faq">Questions fréquentes</h2>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Faut-il un visa pour s'installer au Vietnam en tant que Français ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Les Français bénéficient d'une exemption de visa pour les séjours de 45 jours maximum. Au-delà, un e-visa 90 jours est nécessaire (25 USD environ). Pour une installation durable, un visa de travail ou un visa TT (mariage avec ressortissant vietnamien) est requis.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Quel budget prévoir pour vivre à Hanoï ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Comptez entre 600 et 1 200€ par mois à Hanoï selon votre style de vie. Un loyer T2 en quartier résidentiel coûte 7 à 12 millions de VND par mois (~260–440€), la nourriture locale est très accessible. Vivez comme un local et vous pouvez vous en sortir avec 800€/mois.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Peut-on ouvrir un compte bancaire au Vietnam en tant qu'étranger ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Oui. Vietcombank accepte les étrangers avec un passeport valide et un numéro de téléphone vietnamien local. L'ouverture se fait en agence, sur place. Complétez avec Wise pour les transferts internationaux.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        La retraite française est-elle imposable au Vietnam ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Selon la convention fiscale France-Vietnam de 1993, les pensions de retraite sont imposables dans le pays de résidence du bénéficiaire. Un retraité résident fiscal au Vietnam paie ses impôts au Vietnam, pas en France. Consultez un conseiller fiscal pour votre situation spécifique.</div>
    </div>

    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">
        Peut-on travailler à distance au Vietnam avec un e-visa ?
        <span class="faq-arrow">▼</span>
      </button>
      <div class="faq-answer">Il n'existe pas de visa digital nomad officiel au Vietnam en 2026. En pratique, les travailleurs à distance étrangers utilisent l'e-visa 90 jours renouvelable. Travailler à distance pour une entreprise étrangère n'est pas explicitement interdit, mais la situation juridique reste floue.</div>
    </div>

    <!-- RÉCAP & RESSOURCES -->
    <h2 id="section-recap">Récapitulatif : les 10 étapes clés</h2>
    <ol>
      <li><strong>Visa</strong> : choisir e-visa 90j, visa TT ou visa de travail selon ta situation</li>
      <li><strong>SIM locale</strong> : acheter dès l'arrivée à l'aéroport (Viettel recommandé)</li>
      <li><strong>Compte Vietcombank</strong> : ouvrir en agence avec passeport + SIM</li>
      <li><strong>Wise</strong> : configurer pour les transferts internationaux</li>
      <li><strong>Logement</strong> : chercher sur place, pas uniquement depuis la France</li>
      <li><strong>Assurance santé</strong> : ne jamais arriver sans couverture rapatriement</li>
      <li><strong>Résidence fiscale</strong> : décider et formaliser avec un conseiller</li>
      <li><strong>VPN</strong> : installer avant le départ</li>
      <li><strong>Permis de conduire</strong> : permis international reconnu, ou passer le local pour une moto</li>
      <li><strong>Zalo</strong> : télécharger — tout le monde communique par là au Vietnam</li>
    </ol>

    <div class="info-box" style="margin-top:3rem;">
      <strong>🛠️ Tous mes outils :</strong> <a href="outils-vivre-vietnam.php">Mes outils pour vivre au Vietnam</a> — la page complète avec les services que j'utilise et les liens affiliés clairement signalés.
    </div>

    <!-- NEWSLETTER -->
    <div class="cta-newsletter" style="background:linear-gradient(135deg,#0d2b1f,#1b4a35);margin-top:3rem;">
      <h3>📥 Alertes admin &amp; bons plans du mois</h3>
      <p>Ce guide est mis à jour régulièrement. Inscris-toi pour recevoir les changements importants (nouvelles règles visa, évolutions bancaires, bons plans expats) — un email par mois, pas de spam.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_subject" value="Newsletter Cap Vietnam — guide-expatriation-vietnam-2026">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit" style="background:var(--jade);color:#fff;">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Désinscription en un clic. <a href="confidentialite-capvietnam.php">Politique de confidentialité</a>.</p>
    </div>

    <!-- AUTHOR BOX -->
    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;">
        <img src="<?= PROFILE_PHOTO ?>" alt="Anthony Bouillon — Cap Vietnam" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
      </div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Québécois d'adoption, bientôt installé à Hanoï avec ma femme vietnamienne. Je prépare mon départ depuis septembre 2026 — ce guide est le résumé de tout ce que j'apprends en chemin.</p>
        <div class="author-links">
          <a href="a-propos-capvietnam.php">À propos →</a>
          <a href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener">TikTok</a>
        </div>
      </div>
    </div>

  </main>
</div>

<?php include '_related-articles.php'; ?>
<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
