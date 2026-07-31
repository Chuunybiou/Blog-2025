<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Ouvrir un restaurant, café ou boutique au Vietnam en 2026 : guide pratique';
$page_description = 'Comment ouvrir un restaurant, café ou commerce au Vietnam ? Licences obligatoires, investissement nécessaire, difficultés à anticiper : le guide concret pour les entrepreneurs français.';
$page_canonical   = SITE_URL . '/ouvrir-restaurant-cafe-boutique-vietnam';
$page_og_title    = 'Ouvrir un restaurant ou café au Vietnam en 2026 : le guide complet';
$page_og_desc     = 'Licences F&B, investissement de départ, localisation, personnel : tout ce qu\'un Français doit savoir avant d\'ouvrir un restaurant ou commerce au Vietnam.';
$page_og_url      = SITE_URL . '/ouvrir-restaurant-cafe-boutique-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Ouvrir un restaurant, café ou boutique au Vietnam en 2026 : guide pratique',
  'datePublished'   => '2026-10-15',
  'dateModified'    => '2026-10-15',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/ouvrir-restaurant-cafe-boutique-vietnam',
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
  ['q' => 'Un étranger peut-il posséder 100% d\'un restaurant au Vietnam ?',
   'a' => 'Oui. La restauration et la vente au détail ne figurent pas dans les secteurs conditionnés imposant un associé vietnamien (sous réserve de certaines conditions liées à l\'emplacement et à la surface). Un ressortissant français peut créer une SARL à 100% de capital étranger pour exploiter un restaurant ou un café. Cependant, les démarches sont nombreuses et plusieurs licences spécifiques au secteur F&B sont requises. Consulte la liste des engagements OMC du Vietnam et un cabinet juridique local pour ton cas précis.'],
  ['q' => 'Combien faut-il investir minimum pour ouvrir un café au Vietnam ?',
   'a' => 'Un café de petit format (40-60 places) dans un quartier non premium à Hanoï ou HCMV peut nécessiter un investissement de 15 000 à 40 000 USD : dépôt de garantie du local (souvent 3 à 6 mois de loyer), travaux et décoration, équipement (machines à café, réfrigération, vaisselle), stock de départ, frais de création de société, licences. Dans un quartier premium (Tây Hồ à Hanoï, Thảo Điền à HCMV), multiplier par 2 à 3. Un restaurant plus structuré demande généralement 50 000 à 200 000 USD ou plus.'],
  ['q' => 'Faut-il parler vietnamien pour gérer un restaurant au Vietnam ?',
   'a' => 'Ce n\'est pas obligatoire mais très fortement conseillé pour la gestion quotidienne. Les relations avec les fournisseurs, les employés, les autorités locales (inspections, licences) et les propriétaires de locaux se font en vietnamien dans l\'immense majorité des cas. Si tu ne parles pas vietnamien, tu devras t\'appuyer sur un manager local bilingue, ce qui implique une relation de confiance solide. De nombreux entrepreneurs étrangers réussis au Vietnam s\'associent avec un conjoint ou partenaire vietnamien pour cette raison.'],
  ['q' => 'Quels sont les principaux quartiers pour ouvrir un F&B ciblant les expatriés ?',
   'a' => 'À Hanoï, le quartier Tây Hồ (notamment les rues Xuân Diệu, Tô Ngọc Vân et autour du lac de l\'Ouest) concentre une forte communauté d\'expatriés et de touristes aisés. C\'est là que se trouvent la plupart des restaurants français, cafés à concept et boutiques étrangères. À Hô-Chi-Minh-Ville, le quartier Thảo Điền (Quận 2 / TP Thủ Đức) est le principal hub expatrié pour le F&B. Hội An est également une ville populaire pour les petits établissements ciblant les touristes internationaux.'],
  ['q' => 'Peut-on ouvrir un commerce au nom de son conjoint vietnamien ?',
   'a' => 'Oui, et c\'est une configuration très courante dans les couples mixtes : le conjoint vietnamien enregistre un hộ kinh doanh (commerce familial), statut simple et peu coûteux réservé aux citoyens vietnamiens. Il faut en mesurer les implications : juridiquement, l\'affaire appartient au conjoint, et ton propre travail dans l\'établissement doit rester conforme au droit du travail (l\'exemption de permis de travail du conjoint de Vietnamien facilite ce point). Pour un projet ambitieux ou pour protéger ton apport, la SARL reste préférable.'],
  ['q' => 'Combien de temps prennent les démarches avant de pouvoir ouvrir ?',
   'a' => 'Pour une SARL à capital étranger, compte plusieurs mois entre le début des démarches (IRC, puis ERC) et l\'ouverture effective : à la création de société s\'ajoutent le certificat de sécurité alimentaire avec inspection des locaux, le certificat incendie PCCC, l\'éventuelle licence d\'alcool, puis les travaux. Un hộ kinh doanh au nom d\'un conjoint vietnamien s\'enregistre beaucoup plus vite. Dans tous les cas, ne signe pas de bail avec un loyer qui court avant d\'avoir sécurisé le calendrier des licences.'],
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
      <span>Ouvrir un restaurant au Vietnam</span>
    </div>
    <span class="article-badge-hero">Emploi &amp; Entreprendre</span>
    <h1>Ouvrir un restaurant, café ou boutique au Vietnam en 2026 : le guide pratique</h1>
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
      <li><a href="#section-1">Structure juridique : la SARL étrangère</a></li>
      <li><a href="#section-2">Les licences spécifiques F&B</a></li>
      <li><a href="#section-3">Investissement nécessaire</a></li>
      <li><a href="#section-4">Trouver le bon local</a></li>
      <li><a href="#section-5">Recrutement et gestion du personnel</a></li>
      <li><a href="#section-6">Difficultés récurrentes à anticiper</a></li>
      <li><a href="#section-7">L'alternative du hộ kinh doanh</a></li>
      <li><a href="#section-8">Livraison, paiement et marketing local</a></li>
      <li><a href="#section-9">Checklist avant de signer</a></li>
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

    <p class="article-intro">Ouvrir un café ou un restaurant est l'un des projets les plus fréquemment évoqués par les Français qui s'installent au Vietnam. Le rêve est compréhensible : un marché dynamique, des loyers et des coûts de personnel bien inférieurs à la France, et une culture culinaire qui valorise les concepts nouveaux. La réalité est plus exigeante. Voici ce qu'il faut vraiment savoir avant de se lancer.</p>

    <h2 id="section-1">1. Structure juridique : passer par une SARL étrangère</h2>
    <p>Pour exploiter un restaurant, café ou boutique au Vietnam en tant que ressortissant français, tu dois créer une entité juridique vietnamienne. La forme la plus courante est la <strong>SARL à 100% capital étranger</strong> (Công ty TNHH). Pour les étapes de création, consulte l'article <a href="creer-entreprise-vietnam-statuts-juridiques">Créer une entreprise au Vietnam</a>.</p>
    <p>Cette société sera l'entité qui signe le bail commercial, embauche le personnel, encaisse les revenus et paie les impôts. Tu dois aussi :</p>
    <ul>
      <li>Obtenir un <strong>IRC</strong> (Certificat d'Enregistrement d'Investissement) mentionnant l'activité F&B (code d'activité correspondant à la restauration ou au commerce de détail)</li>
      <li>Puis un <strong>ERC</strong> (Certificat d'Enregistrement d'Entreprise)</li>
      <li>T'enregistrer pour la <strong>TVA</strong> (10% pour la restauration commerciale au Vietnam) et l'impôt sur les sociétés (IS, taux général 20%)</li>
    </ul>

    <h2 id="section-2">2. Les licences spécifiques au secteur F&B</h2>
    <p>Au-delà de la création de société, le secteur de la restauration et du commerce impose des licences supplémentaires :</p>

    <h3>Licence de sécurité alimentaire (ATVSTP)</h3>
    <p>Toute activité de restauration doit obtenir un <strong>Giấy chứng nhận cơ sở đủ điều kiện an toàn thực phẩm</strong> (certificat de conformité aux conditions de sécurité alimentaire). Délivré par l'autorité sanitaire locale (Sở Y Tế ou Sở Công Thương selon les cas), il atteste que les locaux, équipements et pratiques respectent les normes d'hygiène. Une inspection des locaux est obligatoire.</p>

    <h3>Certificat de prévention incendie (PCCC)</h3>
    <p>Le <strong>Phòng Cháy Chữa Cháy</strong> (PCCC) est obligatoire pour tout établissement recevant du public. Il est délivré après inspection par la police des pompiers (Cảnh sát PCCC) et vérification des équipements de sécurité (extincteurs, issues de secours, détecteurs de fumée). Sans ce certificat, tu ne peux pas ouvrir légalement.</p>

    <h3>Licence de vente d'alcool</h3>
    <p>Si tu sers de l'alcool, une <strong>Giấy phép bán lẻ rượu</strong> (licence de vente de détail d'alcool) est nécessaire. Délivrée par le Sở Công Thương (Service de l'industrie et du commerce). Les conditions et délais varient selon la province.</p>

    <h3>Droit d'utilisation des sols et conformité du local</h3>
    <p>Le local doit être autorisé pour un usage commercial de restauration (non résidentiel). Vérifier la <strong>Giấy chứng nhận quyền sử dụng đất</strong> (certificat d'utilisation des sols) du propriétaire et le type d'activité autorisé dans le bail.</p>

    <h2 id="section-3">3. Investissement nécessaire</h2>
    <p>Ces fourchettes sont des ordres de grandeur observés sur le marché vietnamien. Elles varient fortement selon la ville, le quartier, la taille et le niveau de finition visé :</p>

    <div class="table-wrapper">
    <table>
      <thead><tr><th>Type de projet</th><th>Investissement indicatif de départ</th></tr></thead>
      <tbody>
        <tr><td>Petit café (20-40 places, quartier standard)</td><td>10 000 – 25 000 USD</td></tr>
        <tr><td>Café de concept (40-60 places, quartier expatrié)</td><td>25 000 – 60 000 USD</td></tr>
        <tr><td>Restaurant (60-100 places, niveau moyen)</td><td>50 000 – 120 000 USD</td></tr>
        <tr><td>Restaurant gastronomique / cuisine ouverte</td><td>100 000 – 300 000 USD</td></tr>
        <tr><td>Boutique de détail (petite surface)</td><td>15 000 – 50 000 USD</td></tr>
      </tbody>
    </table>
    </div>

    <p>Les <strong>principaux postes de dépense</strong> sont : le dépôt de garantie du bail (souvent 3 à 6 mois de loyer, parfois 12 mois dans les quartiers premium), les travaux d'aménagement et la décoration, l'équipement de cuisine et de service, le stock initial, et les frais de création de société et de licences.</p>

    <h2 id="section-4">4. Trouver le bon local</h2>
    <p>La localisation est souvent le facteur le plus déterminant pour le F&B — et c'est aussi le poste où les erreurs coûtent le plus cher, car un mauvais bail signé engage des mois de loyer et de travaux impossibles à récupérer. Quelques points clés :</p>
    <ul>
      <li><strong>Emplacement et flux piétons</strong> : les meilleures adresses ont une forte visibilité depuis la rue</li>
      <li><strong>Bail commercial</strong> : les contrats sont souvent de 2 à 5 ans, rarement plus pour les étrangers. La durée résiduelle avant renouvellement est un risque à évaluer (le propriétaire peut ne pas renouveler ou augmenter fortement le loyer)</li>
      <li><strong>Superficie et hauteur</strong> : la ventilation et la hauteur sous plafond influencent le confort thermique sans climatisation</li>
      <li><strong>Accès cuisine</strong> : sorties de secours, évacuation des fumées, alimentation en gaz</li>
      <li><strong>Agents immobiliers</strong> : des agences spécialisées en locaux commerciaux pour étrangers existent à Hanoï et HCMV</li>
    </ul>

    <h2 id="section-5">5. Recrutement et gestion du personnel</h2>
    <p>Le coût de main-d'œuvre est l'un des avantages du Vietnam, mais la gestion du personnel présente ses propres défis :</p>
    <ul>
      <li><strong>Salaires</strong> : un serveur à Hanoï gagne typiquement 5 à 8 millions VND/mois (200-315 USD) + tips</li>
      <li><strong>Charges sociales</strong> : l'employeur cotise environ 17 à 21,5% en plus du salaire brut pour les assurances sociales, santé et chômage</li>
      <li><strong>Turnover élevé</strong> : un défi connu dans le secteur F&B au Vietnam, surtout pour les postes de service — fidéliser passe par la formation, les perspectives d'évolution et le respect au quotidien plus que par le seul salaire</li>
      <li><strong>Manager bilingue</strong> : recommandé si tu ne parles pas vietnamien</li>
      <li><strong>Contrats de travail</strong> : doivent respecter le Code du travail vietnamien (Bộ luật Lao động 2019) avec périodes d'essai, congés payés, etc.</li>
    </ul>

    <h2 id="section-6">6. Difficultés récurrentes à anticiper</h2>
    <p>Au-delà de la paperasse, les entrepreneurs étrangers dans le F&B au Vietnam font souvent face à :</p>
    <ul>
      <li><strong>La concurrence locale</strong> : les cafés et restaurants vietnamiens fonctionnent souvent avec des coûts structurels bien inférieurs (local familial, pas de loyer, main-d'œuvre famille)</li>
      <li><strong>La chaîne d'approvisionnement</strong> : garantir des ingrédients de qualité constante peut être difficile, surtout pour des produits importés ou bio</li>
      <li><strong>La non-reconduction du bail</strong> : plusieurs histoires connues de restaurants florissants fermés parce que le propriétaire n'a pas renouvelé ou a triplé le loyer</li>
      <li><strong>Les inspections</strong> : les contrôles sanitaires, PCCC et fiscaux peuvent être fréquents. Un cabinet comptable local est recommandé dès le départ</li>
      <li><strong>L'adaptation aux goûts locaux</strong> : même dans les quartiers expatriés, il faut proposer quelque chose qui parle à la clientèle locale et internationale</li>
    </ul>
    <p>Ajoute à cette liste la <strong>saisonnalité</strong> : les semaines du <a href="tet-nouvel-an-lunaire-vietnam">Tết</a> vident les villes (personnel rentré en famille, clientèle locale absente), la saison des pluies affecte les terrasses, et la fréquentation touristique fluctue fortement selon les mois. Un business plan qui projette douze mois identiques est faux par construction — les exploitants expérimentés provisionnent deux à trois mois creux par an.</p>
    <p>Et une réalité qu'aucun porteur de projet n'aime entendre mais que tout le monde constate sur place : le F&B est partout dans le monde un secteur à taux d'échec élevé, et le Vietnam ne fait pas exception. Les devantures des rues commerçantes de Hanoï et HCMV changent d'enseigne à un rythme impressionnant. Ce n'est pas une raison de renoncer — c'est une raison de dimensionner l'investissement de départ de façon à pouvoir survivre à dix-huit mois difficiles, plutôt que de tout miser sur un démarrage parfait.</p>

    <h2 id="section-7">7. L'alternative du hộ kinh doanh (au nom du conjoint vietnamien)</h2>
    <p>Il existe au Vietnam un statut beaucoup plus léger que la société : le <strong>hộ kinh doanh</strong> (commerce familial enregistré), avec une fiscalité simplifiée et des formalités réduites. C'est le statut de l'immense majorité des petits cafés et restaurants de rue vietnamiens. Sa limite pour toi : il est réservé aux <strong>citoyens vietnamiens</strong> — un Français ne peut pas l'enregistrer à son nom.</p>
    <p>Si tu es marié(e) à un(e) Vietnamien(ne), une configuration très répandue consiste donc à enregistrer le commerce comme hộ kinh doanh <strong>au nom du conjoint vietnamien</strong> : ouverture plus rapide, coûts de structure minimes, gestion administrative en vietnamien par la personne la mieux placée pour le faire. Trois lucidités indispensables avant de choisir cette voie :</p>
    <ul>
      <li><strong>Juridiquement, le commerce appartient au conjoint</strong>, pas à toi. En cas de crise conjugale, ta mise de fonds n'est pas protégée comme le serait une part de SARL. C'est une décision de couple autant qu'une décision d'affaires — le droit vietnamien des biens communs des époux s'applique, mais la prudence reste de mise.</li>
      <li><strong>Ton propre rôle dans l'établissement doit rester légal</strong> : conseiller son conjoint est une chose, travailler derrière le comptoir en est une autre — renseigne-toi sur ta situation de travail (l'exemption de permis du conjoint de Vietnamien, art. 154 du Code du travail, simplifie précisément ce point ; voir <a href="permis-de-travail-vietnam-francais">le guide du permis de travail</a>).</li>
      <li><strong>Le statut a des plafonds pratiques</strong> : pour un établissement structuré (plusieurs salariés déclarés, alcool, terrasse licenciée, ambitions multi-sites), la société reste la forme adaptée. Le comparatif complet des statuts est dans <a href="creer-entreprise-vietnam-statuts-juridiques">Créer une entreprise au Vietnam</a>.</li>
    </ul>

    <h2 id="section-8">8. Livraison, paiement et marketing local</h2>
    <p>Ouvrir la porte ne suffit plus : au Vietnam, une part importante du chiffre d'affaires F&B passe par le téléphone du client.</p>
    <ul>
      <li><strong>Les applications de livraison</strong> — GrabFood et ShopeeFood dominent le marché — sont incontournables pour un café ou restaurant urbain. Les commissions prélevées sont significatives (elles se négocient et évoluent), donc intègre-les dans tes prix dès le départ plutôt que de les subir.</li>
      <li><strong>Le paiement par QR code</strong> (virements bancaires instantanés via VietQR, portefeuilles comme MoMo) est devenu le réflexe des clients vietnamiens, y compris pour un café à 30 000 VND. Un compte bancaire professionnel local avec QR affiché en caisse n'est pas un gadget, c'est une condition d'exploitation normale.</li>
      <li><strong>Facebook et Google Maps</strong> sont tes vitrines principales : les Vietnamiens cherchent, notent et recommandent massivement en ligne. Des photos soignées, des horaires à jour et des réponses aux avis pèsent directement sur la fréquentation. Instagram et TikTok ajoutent la clientèle jeune et touristique.</li>
      <li><strong>La clientèle locale d'abord</strong> : les expatriés et touristes font le lancement, les habitués vietnamiens font la survie. Les établissements étrangers qui durent sont presque toujours ceux qui ont su devenir une adresse de quartier, pas seulement un spot à expats.</li>
    </ul>

    <h2 id="section-9">9. Checklist avant de signer quoi que ce soit</h2>
    <p>Synthèse des vérifications à faire <strong>avant</strong> d'engager le moindre dépôt de garantie :</p>
    <ul>
      <li>Le business plan tient-il avec des hypothèses pessimistes (deux mois creux, commission livraison, loyer renégocié à la hausse au renouvellement) ?</li>
      <li>Le local est-il juridiquement exploitable en restauration (usage commercial, certificat d'utilisation des sols du propriétaire, conformité PCCC atteignable sans travaux ruineux) ?</li>
      <li>La durée du bail et ses conditions de renouvellement sont-elles écrites noir sur blanc, avec clause sur l'évolution du loyer ?</li>
      <li>Le statut juridique est-il choisi en connaissance de cause (SARL à capital étranger vs hộ kinh doanh au nom du conjoint) et validé par un conseil local ?</li>
      <li>As-tu observé le flux réel du quartier à différentes heures et différents jours — pas seulement le dimanche ensoleillé de ta visite ?</li>
      <li>As-tu rencontré d'autres exploitants étrangers du quartier pour entendre ce qu'ils auraient fait différemment ?</li>
    </ul>
    <p>Un projet qui passe ces six filtres n'est pas garanti — mais il évite les erreurs qui coulent la majorité des établissements avant leur deuxième anniversaire. Pour le volet financement et transferts de fonds depuis la France, voir <a href="transferer-argent-vietnam-wise">le guide des transferts d'argent</a>.</p>

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
      <strong>Tu projettes d'ouvrir un commerce au Vietnam ?</strong>
      <span>Reçois les prochains guides sur l'entrepreneuriat et la vie pratique pour les expatriés français.</span>
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
