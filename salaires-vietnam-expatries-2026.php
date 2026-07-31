<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Salaires au Vietnam en 2026 : locaux, expatriés et par secteur';
$page_description = 'Salaire minimum légal, salaires moyens vietnamiens, rémunérations des expatriés français par secteur : données vérifiées sur les salaires au Vietnam en 2026.';
$page_canonical   = SITE_URL . '/salaires-vietnam-expatries-2026';
$page_og_title    = 'Salaires au Vietnam en 2026 : locaux et expatriés, toutes les données';
$page_og_desc     = 'Salaire minimum zone 1 à 4, salaire moyen national, fourchettes par secteur pour les expatriés : tout sur les rémunérations au Vietnam en 2026.';
$page_og_url      = SITE_URL . '/salaires-vietnam-expatries-2026';
$page_og_image    = 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Salaires au Vietnam en 2026 : locaux, expatriés et par secteur',
  'datePublished'   => '2026-10-05',
  'dateModified'    => '2026-10-05',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/salaires-vietnam-expatries-2026',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Emploi & Entreprendre',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'jade';
$article_hero_bg      = '#001f18';
$article_glow         = 'rgba(27,107,82,0.18)';
$article_badge        = 'rgba(27,107,82,0.25)';
$article_badge_c      = '#4dbe94';

$article_category     = 'Emploi & Entreprendre';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=emploi';

$page_faq = [
  ['q' => 'Le salaire est-il versé en VND ou en USD au Vietnam ?',
   'a' => 'Légalement, les salaires doivent être versés en dong vietnamien (VND) selon la loi du travail vietnamienne. Toutefois, certains employeurs étrangers ou multinationales libellent les contrats en USD et font la conversion au moment du virement. Dans les entreprises à capitaux 100% étrangers, les contrats de cadres expatriés sont souvent négociés en USD, mais le virement bancaire se fait en VND. Vérifie la formulation dans ton contrat.'],
  ['q' => 'Les charges sociales sont-elles importantes au Vietnam ?',
   'a' => 'Pour un salarié local, les cotisations sont partagées entre employeur et employé. Du côté salarié, la retenue est de 10,5% du salaire brut (8% retraite, 1,5% maladie, 1% chômage) — plafonnée à 20 fois le salaire minimum régional. Du côté employeur, les charges varient mais représentent environ 17% à 21,5% supplémentaires. Ces taux sont définis par la Loi sur l\'Assurance Sociale (Luật Bảo Hiểm Xã Hội). Pour les expatriés en contrat local de longue durée, ces cotisations s\'appliquent.'],
  ['q' => 'Combien faut-il gagner pour bien vivre à Hanoï en 2026 ?',
   'a' => 'Un célibataire expatrié peut vivre confortablement à Hanoï avec 1 500 à 2 000 USD nets par mois (logement décent en location, alimentation, transport, loisirs). Une famille avec enfants en école internationale aura besoin de 3 500 à 5 000 USD ou plus, les frais de scolarité représentant souvent la charge principale (5 000 à 20 000 USD par an selon l\'école). Da Nang ou Huế coûtent 20 à 30% moins cher que Hanoï ou HCMV.'],
  ['q' => 'Les salaires vietnamiens augmentent-ils chaque année ?',
   'a' => 'Oui, le salaire minimum légal est réévalué régulièrement par décret gouvernemental. Depuis 2018, les augmentations annuelles ont varié entre 5 et 8%. Le Décret 74/2024/NĐ-CP a fixé les salaires minimum en vigueur depuis le 1er juillet 2024. Le Conseil national des salaires (Hội đồng tiền lương quốc gia) émet chaque année une recommandation au gouvernement sur le taux d\'augmentation. Une nouvelle revalorisation est attendue courant 2025-2026 ; consulte le Journal officiel vietnamien (vbpl.vn) pour les chiffres les plus récents.'],
  ['q' => 'Le 13e mois est-il obligatoire au Vietnam ?',
   'a' => 'Non — contrairement à une croyance très répandue, le 13e mois et la prime de Tết relèvent de l\'usage et du contrat, pas d\'une obligation légale générale. Dans les faits, la quasi-totalité des employeurs sérieux les versent, et leur absence dans une offre est un signal d\'alerte. Conséquence pratique : fais inscrire le 13e mois (et les modalités de la prime de Tết) explicitement dans ton contrat de travail plutôt que de compter sur la coutume.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=emploi">Emploi &amp; Entreprendre</a><span class="breadcrumb-sep">›</span>
      <span>Salaires au Vietnam en 2026</span>
    </div>
    <span class="article-badge-hero">Emploi &amp; Entreprendre</span>
    <h1>Salaires au Vietnam en 2026 : locaux, expatriés et données par secteur</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Octobre 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis à jour : Octobre 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Le salaire minimum légal 2024-2026</a></li>
      <li><a href="#section-2">Le salaire moyen au Vietnam</a></li>
      <li><a href="#section-3">Salaires des expatriés par secteur</a></li>
      <li><a href="#section-paie">Lire une fiche de paie vietnamienne</a></li>
      <li><a href="#section-negocier">Négocier son contrat local</a></li>
      <li><a href="#section-4">Budget de vie mensuel</a></li>
      <li><a href="#section-comparer">Comparer avec la France : le piège</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" onclick="window.open('https://twitter.com/intent/tweet?url='+encodeURIComponent(location.href))">𝕏</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <p class="article-intro">Les salaires au Vietnam présentent un double visage : des salaires locaux encore modestes comparés à l'Europe, et des rémunérations expatriées qui varient fortement selon le secteur et l'employeur. Comprendre ce marché est essentiel pour négocier son contrat ou anticiper son budget de vie. Ce guide rassemble les données officielles (salaire minimum, statistiques nationales), les fourchettes de marché observées pour les expatriés, le décodage d'une fiche de paie vietnamienne, et les réflexes de négociation qui font la différence sur un contrat local.</p>

    <h2 id="section-1">1. Le salaire minimum légal 2024-2026</h2>
    <p>Le salaire minimum régional au Vietnam est fixé par décret gouvernemental — il n'existe pas de SMIC national unique, mais quatre planchers selon la géographie. Le <strong>Décret 74/2024/NĐ-CP</strong> (entré en vigueur le 1er juillet 2024) établit les montants suivants selon quatre zones géographiques :</p>

    <div class="table-wrapper">
    <table>
      <thead><tr><th>Zone</th><th>Montant mensuel</th><th>Équivalent USD (~)</th><th>Principales villes concernées</th></tr></thead>
      <tbody>
        <tr><td><strong>Zone 1</strong></td><td>4 960 000 VND</td><td>~196 USD</td><td>Hanoï (centre), HCMV (centre)</td></tr>
        <tr><td><strong>Zone 2</strong></td><td>4 410 000 VND</td><td>~174 USD</td><td>Banlieues de Hanoï et HCMV, Da Nang</td></tr>
        <tr><td><strong>Zone 3</strong></td><td>3 860 000 VND</td><td>~152 USD</td><td>Villes moyennes de province</td></tr>
        <tr><td><strong>Zone 4</strong></td><td>3 450 000 VND</td><td>~136 USD</td><td>Zones rurales</td></tr>
      </tbody>
    </table>
    </div>

    <p><em>Taux de conversion indicatif utilisé : 1 USD ≈ 25 300 VND. Vérifier le taux en vigueur sur banque-de-france.fr ou auprès de ta banque — et pour convertir tes revenus au meilleur taux réel, voir <a href="transferer-argent-vietnam-wise">le guide des transferts d'argent</a>.</em></p>

    <p>Ce salaire minimum s'applique à tous les employeurs — vietnamiens et étrangers — pour les travailleurs locaux. Il constitue un plancher légal ; en pratique, la très grande majorité des salariés en zone urbaine gagne davantage.</p>
    <p>Pourquoi quatre zones ? Parce que le Vietnam assume officiellement l'écart de coût de la vie entre ses métropoles et ses campagnes : le découpage suit la carte économique du pays, et il sert de référence bien au-delà du simple plancher salarial — les plafonds de cotisations sociales, certaines indemnités et beaucoup de grilles internes d'entreprises s'y indexent. Pour un expatrié, connaître la zone de son employeur aide donc à décoder plusieurs lignes de sa fiche de paie.</p>

    <h2 id="section-2">2. Le salaire moyen au Vietnam</h2>
    <p>Selon les données de l'Office général des statistiques du Vietnam (Tổng cục Thống kê — gso.gov.vn), le revenu salarial mensuel moyen des travailleurs vietnamiens se situe entre <strong>7 et 9 millions de VND</strong> (275 à 355 USD environ) au niveau national, avec de fortes disparités selon la région et le secteur. Hô Chi Minh-Ville et Hanoï tirent la moyenne vers le haut ; les provinces rurales restent bien en dessous — c'est exactement l'écart que le système des quatre zones du salaire minimum reconnaît officiellement.</p>
    <ul>
      <li><strong>Secteur technologique / informatique</strong> : salaires moyens les plus élevés, souvent 15 à 30 millions VND pour les développeurs expérimentés</li>
      <li><strong>Finance et banque</strong> : 12 à 25 millions VND</li>
      <li><strong>Enseignement public</strong> : souvent bas, 5 à 10 millions VND</li>
      <li><strong>Agriculture et industrie légère</strong> : proches du salaire minimum</li>
    </ul>
    <p>Ces moyennes racontent une trajectoire plus qu'un état : le Vietnam est l'une des économies les plus dynamiques d'Asie, et les salaires urbains qualifiés progressent nettement plus vite que la moyenne nationale — la tech vietnamienne, en particulier, recrute à des niveaux qui auraient semblé irréels il y a dix ans. Pour ta vie de couple mixte, ces chiffres donnent aussi un repère utile : ils situent les revenus de ta belle-famille et de ton entourage vietnamien, et expliquent pourquoi ton salaire d'expatrié — même modeste à tes yeux — te place statistiquement très haut dans l'échelle locale. Une réalité à manier avec tact.</p>

    <h2 id="section-3">3. Salaires des expatriés par secteur</h2>
    <p>Avant les chiffres, un distinguo essentiel : il existe en réalité <strong>trois régimes de rémunération</strong> pour un Français travaillant au Vietnam. Le <strong>contrat local</strong> (recruté sur place, payé aux conditions du marché vietnamien — la voie de la grande majorité des expatriés d'aujourd'hui) ; le <strong>package expatrié</strong> (envoyé par une multinationale avec salaire européen et avantages — une espèce en voie de raréfaction, réservée aux postes de direction) ; et le <strong>revenu étranger en télétravail</strong> (clients ou employeur hors Vietnam — un autre monde juridique et fiscal, traité dans <a href="travailler-a-distance-depuis-vietnam">le dossier travail à distance</a>). Les fourchettes ci-dessous concernent les contrats locaux et packages ; elles sont des observations de marché, variables selon l'ancienneté, la taille de l'entreprise et la négociation individuelle.</p>

    <div class="table-wrapper">
    <table>
      <thead><tr><th>Secteur / Poste</th><th>Salaire mensuel indicatif (USD)</th><th>Notes</th></tr></thead>
      <tbody>
        <tr><td>Professeur de FLE (contrat local)</td><td>700 – 1 500</td><td>Variable selon employeur et volume horaire</td></tr>
        <tr><td>Développeur / Ingénieur IT</td><td>1 500 – 4 000</td><td>Très demandé ; senior = haut de fourchette</td></tr>
        <tr><td>Comptable / Finance manager</td><td>1 200 – 3 000</td><td>CFO 3 000 – 6 000+</td></tr>
        <tr><td>F&amp;B manager / Chef cuisinier</td><td>1 200 – 2 500</td><td>Logement parfois fourni en hôtellerie</td></tr>
        <tr><td>Marketing / Communication</td><td>1 000 – 2 500</td><td>Selon expérience et taille structure</td></tr>
        <tr><td>Commercial / Business developer</td><td>1 000 – 2 500 + commissions</td><td>Commission sur CA souvent significative</td></tr>
        <tr><td>Directeur / Country manager</td><td>3 000 – 8 000+</td><td>Souvent avec package logement et voiture</td></tr>
        <tr><td>ONG / Coopération internationale</td><td>2 000 – 4 500</td><td>Selon grille de l'organisation et poste</td></tr>
      </tbody>
    </table>
    </div>

    <p>Les <strong>packages expatriés</strong> (offerts par les multinationales) peuvent inclure, en plus du salaire : logement, voiture avec chauffeur, billets d'avion annuels, assurance santé internationale, frais de scolarité pour les enfants. Ces avantages non monétaires peuvent représenter 30 à 50% du coût total employeur.</p>
    <p>Un mot sur le cas le plus fréquent chez les lecteurs de ce blog : <strong>l'enseignement du français</strong>. Le FLE reste la porte d'entrée classique du marché du travail vietnamien pour un francophone — accessible, demandé, mais avec des rémunérations et des conditions très variables selon les employeurs (alliance française, écoles privées, cours particuliers). Le tour complet du sujet — qualifications, employeurs, tarifs horaires, cumul avec les cours en ligne — est dans notre guide dédié : <a href="enseigner-francais-vietnam-fle">enseigner le français au Vietnam</a>.</p>

    <h2 id="section-paie">Lire une fiche de paie vietnamienne</h2>
    <p>Premier contrat local, première fiche de paie — et premières surprises pour un Français : pas de CSG, pas de dizaines de lignes cryptiques, mais une logique différente qu'il faut apprivoiser. Les composantes à connaître :</p>
    <ul>
      <li><strong>Le brut et le net</strong> : entre les deux s'intercalent les cotisations sociales salariales (10,5 % — retraite, maladie, chômage, voir FAQ) et l'<strong>impôt sur le revenu (PIT, thuế thu nhập cá nhân)</strong>, prélevé à la source par l'employeur selon un barème progressif allant de 5 % à 35 %. Pas de déclaration mensuelle à faire soi-même : l'employeur retient et reverse, avec une régularisation annuelle en fin d'exercice.</li>
      <li><strong>Les abattements familiaux</strong> : le système vietnamien prévoit un abattement personnel et des abattements par personne à charge (enfants, parents dépendants) qui réduisent la base imposable — déclare tes personnes à charge à ton employeur, beaucoup d'expatriés l'oublient.</li>
      <li><strong>Les « allowances »</strong> : la paie vietnamienne adore les compléments détaillés — indemnité déjeuner, transport, téléphone, assiduité. Certaines bénéficient d'un traitement fiscal ou social favorable, d'où leur omniprésence dans les packages. Regarde toujours le total réellement versé plutôt que la seule ligne « salaire de base », et vérifie quelles composantes comptent pour le calcul du 13e mois et des cotisations.</li>
      <li><strong>Le 13e mois et la prime de Tết</strong> : quasi universels dans les faits, mais issus de l'usage et du contrat, pas d'une obligation légale générale — d'où l'importance de les faire écrire noir sur blanc (voir négociation).</li>
      <li><strong>Les congés</strong> : le minimum légal vietnamien est de 12 jours ouvrables par an (hors jours fériés, dont la semaine du Tết) — un choc culturel pour un salarié français habitué à ses cinq semaines. Les bonnes entreprises accordent davantage, et c'est un levier de négociation à part entière.</li>
    </ul>

    <h2 id="section-negocier">Négocier son contrat local en tant qu'expatrié</h2>
    <p>La négociation salariale vietnamienne a ses codes propres, et le candidat français qui arrive avec ses réflexes hexagonaux laisse de l'argent sur la table. Les points qui changent tout :</p>
    <ul>
      <li><strong>Négocie en net, comme tout le monde</strong> : au Vietnam, l'usage courant est de discuter le salaire <em>net</em> (« net in hand ») — précise toujours explicitement si un montant évoqué est brut ou net, et qui supporte le PIT. Des malentendus de 20 % naissent de cette seule ambiguïté, dans les deux sens.</li>
      <li><strong>Fais chiffrer le package complet</strong> : 13e mois, prime de Tết, assurance santé privée (très répandue dans les bonnes entreprises), jours de congé au-delà du minimum légal, billets d'avion, budget formation. Au Vietnam, ces lignes se négocient autant que le salaire — et un employeur qui lâche difficilement du salaire acceptera souvent d'améliorer les avantages.</li>
      <li><strong>Clarifie le sponsor du permis de travail</strong> : l'employeur doit piloter et financer ton <a href="permis-de-travail-vietnam-francais">permis de travail</a> et le visa/TRC qui va avec — un employeur qui rechigne sur ce point t'annonce la couleur pour la suite. (Si tu es marié(e) à un(e) Vietnamien(ne), rappelle-lui que l'exemption de permis des conjoints simplifie son dossier.)</li>
      <li><strong>Situe-toi honnêtement sur la grille</strong> : un expatrié coûte cher pour le marché local — ta valeur ajoutée doit être lisible (compétence rare, langues, réseau international). Les fourchettes de la section précédente te donnent le terrain de jeu réaliste ; le contexte du marché de l'emploi est détaillé dans <a href="trouver-emploi-vietnam-francais-2026">trouver un emploi au Vietnam</a>.</li>
      <li><strong>Négocie avec le sourire</strong> : la culture de négociation vietnamienne est réelle mais indirecte — la confrontation dure ferme des portes que la persistance aimable ouvre. Les codes de communication décrits dans <a href="differences-culturelles-couple-franco-vietnamien">l'article différences culturelles</a> s'appliquent intégralement à la table de négociation.</li>
    </ul>

    <h2 id="section-4">4. Budget de vie mensuel pour un expatrié à Hanoï</h2>
    <p>Le salaire ne prend tout son sens que rapporté aux dépenses réelles du terrain. À titre d'illustration concrète, voici des ordres de grandeur pour une vie confortable à Hanoï — la ligne « scolarité » montre au passage pourquoi les familles négocient si âprement la prise en charge des frais d'école dans leur package :</p>

    <div class="table-wrapper">
    <table>
      <thead><tr><th>Poste de dépense</th><th>Célibataire</th><th>Famille (2 adultes, 1 enfant)</th></tr></thead>
      <tbody>
        <tr><td>Loyer (appartement expatriés)</td><td>400 – 800 USD</td><td>800 – 1 500 USD</td></tr>
        <tr><td>Alimentation (restaurants locaux + courses)</td><td>250 – 450 USD</td><td>500 – 800 USD</td></tr>
        <tr><td>Transport (taxi/Grab + moto)</td><td>80 – 150 USD</td><td>150 – 300 USD</td></tr>
        <tr><td>Assurance santé internationale</td><td>80 – 200 USD</td><td>200 – 400 USD</td></tr>
        <tr><td>Loisirs / sorties</td><td>150 – 300 USD</td><td>200 – 400 USD</td></tr>
        <tr><td>Scolarité enfant (école internationale)</td><td>—</td><td>600 – 1 800 USD</td></tr>
        <tr><td><strong>Total indicatif</strong></td><td><strong>1 000 – 2 000 USD</strong></td><td><strong>2 500 – 5 000+ USD</strong></td></tr>
      </tbody>
    </table>
    </div>

    <p>Ces chiffres sont plus bas à Da Nang ou Huế (environ 20 à 30% moins cher) et plus élevés dans les quartiers expatriés premium de Hanoï ou HCMV (Tây Hồ, Thảo Điền). Les budgets détaillés ville par ville sont dans nos guides dédiés : <a href="budget-mensuel-hanoi-2026">Hanoï</a>, <a href="budget-mensuel-da-nang-2026">Đà Nẵng</a>, <a href="budget-mensuel-nha-trang-2026">Nha Trang</a> et <a href="budget-mensuel-hue-2026">Huế</a>.</p>

    <h2 id="section-comparer">Comparer avec la France : le piège des conversions</h2>
    <p>« 1 500 USD par mois, mais c'est moins que le SMIC ! » — c'est la réaction française classique devant un salaire vietnamien, et elle passe à côté de l'essentiel. Un salaire ne se juge qu'en regard du coût de la vie locale : à Hanoï, 1 500 USD nets financent un vrai confort (logement correct, sorties, épargne) là où le même montant serait juste à Paris. C'est toute la logique du pouvoir d'achat : convertir les euros en « niveau de vie » plutôt qu'en dongs. Les économistes appellent ça la parité de pouvoir d'achat ; les expatriés installés appellent ça « ma vie est meilleure ici avec moins » — c'est la même idée.</p>
    <p>Le raisonnement complet d'un candidat à l'expatriation tient en trois questions : que me reste-t-il chaque mois après un niveau de vie équivalent (souvent plus qu'en France) ? Qu'est-ce que je perds en protection sociale différée — retraite, chômage — et comment je le compense (CFE, cotisations volontaires, épargne — voir <a href="protection-sociale-cfe-retraite-vietnam">le guide protection sociale</a>) ? Et que vaut cette expérience sur mon CV dans cinq ans ? Les expatriés déçus sont presque toujours ceux qui n'ont fait que la première conversion, au taux de change du jour.</p>
    <p>Dernier paramètre pour les couples mixtes : un salaire local vietnamien correct + un coût de vie local + une famille sur place forme un équilibre de vie complet, là où le même CV en France donnerait peut-être un salaire supérieur mais une vie plus chère et une belle-famille à 10 000 km. L'arbitrage n'est jamais purement salarial — et c'est très bien comme ça.</p>

    <div id="section-faq">
      <h2>Questions fréquentes</h2>
      <?php foreach ($page_faq as $i => $item): ?>
      <details <?= $i===0?'open':'' ?>>
        <summary><?= htmlspecialchars($item['q']) ?></summary>
        <p><?= $item['a'] ?></p>
      </details>
      <?php endforeach; ?>
    </div>

  </main>
</div>

<div class="cta-newsletter">
  <div class="cta-newsletter-inner">
    <div class="cta-newsletter-text">
      <strong>Tu prépares ton budget expatrié au Vietnam ?</strong>
      <span>Reçois les prochains guides sur l'emploi, les salaires et la vie pratique au Vietnam.</span>
    </div>
    <a href="newsletter-capvietnam" class="cta-newsletter-btn">Recevoir la newsletter</a>
  </div>
</div>

<div class="author-box">
  <img src="assets/img/anthony-vietnam.jpg" alt="Anthony Bouillon - Cap Vietnam" class="author-avatar" onerror="this.style.display='none'">
  <div class="author-box-text">
    <div class="author-box-name">Anthony Bouillon</div>
    <div class="author-box-bio">Expatrié français installé au Vietnam. Je partage mon expérience du quotidien vietnamien : vie pratique, démarches, travail et couple franco-vietnamien.</div>
    <a href="a-propos-capvietnam" class="author-box-link">En savoir plus sur l'auteur</a>
  </div>
</div>

<?php include '_article-comments.php'; ?>
<?php include '_related-articles.php'; ?>
<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
