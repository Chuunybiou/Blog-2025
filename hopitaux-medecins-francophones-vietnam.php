<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Médecins et hôpitaux francophones au Vietnam (2026)';
$page_description = 'Où consulter en français au Vietnam ? Hôpitaux internationaux à Hanoï et Hô Chi Minh-Ville, médecins francophones, assurance santé expat et urgences : tout ce qu\'il faut savoir.';
$page_canonical   = SITE_URL . '/hopitaux-medecins-francophones-vietnam';
$page_og_title    = 'Hôpitaux et médecins francophones au Vietnam : le guide expatrié 2026';
$page_og_desc     = 'Se soigner au Vietnam quand on est Français : hôpitaux internationaux, médecins qui parlent français, urgences et assurance santé.';
$page_og_url      = SITE_URL . '/hopitaux-medecins-francophones-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Hôpitaux et médecins francophones au Vietnam : guide santé pour expatriés 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/hopitaux-medecins-francophones-vietnam',
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
  ['q' => 'Les hôpitaux publics vietnamiens sont-ils accessibles aux étrangers ?',
   'a' => 'Oui, les étrangers peuvent consulter dans les hôpitaux publics vietnamiens. Mais le personnel parle rarement français (souvent anglais dans les grandes villes), les délais d\'attente sont longs et les standards hôteliers très différents des hôpitaux occidentaux. Pour une urgence non-critique, un hôpital international reste préférable.'],
  ['q' => 'Faut-il une assurance santé spécifique pour se faire soigner au Vietnam ?',
   'a' => 'Oui, fortement conseillé. La Sécurité sociale française ne rembourse pas les soins au Vietnam (sauf exceptions rarissimes). Une assurance santé internationale expatriée (Cigna, April, AXA Global Healthcare…) est nécessaire pour les hôpitaux internationaux, dont les tarifs sont proches des tarifs européens.'],
  ['q' => 'Que faire en cas d\'urgence médicale à Hanoï ?',
   'a' => 'Appelle le 115 (SAMU vietnamien) ou directement la ligne d\'urgence d\'un hôpital international comme Vinmec ou Hanoï Family Medical Practice. Ces derniers ont des services d\'urgence 24h/24 avec staff anglophone ou francophone.'],
  ['q' => 'Faut-il payer avant d\'être soigné au Vietnam ?',
   'a' => 'Oui, c\'est le fonctionnement normal : la consultation se règle à la caisse avant de voir le médecin, et chaque examen complémentaire est payé avant d\'être réalisé. Il n\'y a ni carte Vitale ni tiers payant à la française. Si ton assurance a un accord de direct billing avec l\'hôpital, c\'est elle qui est facturée directement — sinon tu avances les frais et tu te fais rembourser sur facture.'],
  ['q' => 'Les soins dentaires au Vietnam sont-ils fiables ?',
   'a' => 'Dans les cliniques modernes des grandes villes, oui — beaucoup d\'expatriés y font tous leurs soins dentaires, à une fraction du prix français. Le niveau varie cependant beaucoup d\'un établissement à l\'autre : choisis une clinique recommandée par la communauté francophone, et demande toujours un devis écrit avant un traitement lourd (implants, couronnes).'],
  ['q' => 'Peut-on consulter un psychologue francophone au Vietnam ?',
   'a' => 'C\'est le point faible de l\'offre de soins sur place : les praticiens de santé mentale francophones sont très rares. La solution la plus courante chez les expatriés est la téléconsultation en visio avec un praticien basé en France — le décalage horaire de 5 à 6 heures reste compatible avec des séances en fin de journée au Vietnam. Certaines assurances expatriées couvrent la téléconsultation.'],
  ['q' => 'Quels vaccins faut-il faire avant de s\'installer au Vietnam ?',
   'a' => 'Consulte un centre de vaccinations internationales avant le départ. En général : mise à jour du calendrier classique (DTP, hépatite B), hépatite A et typhoïde recommandées, encéphalite japonaise et rage à discuter selon ton profil. Contre la dengue, pas de vaccin généralisé : la prévention passe par l\'anti-moustique quotidien, surtout en saison des pluies.'],
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
      <span>Hôpitaux et médecins au Vietnam</span>
    </div>
    <span class="article-badge-hero">Installation & Santé</span>
    <h1>Hôpitaux et médecins francophones au Vietnam : le guide 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 11 min de lecture</span>
      <span>Mis &agrave; jour : Juillet 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Hôpitaux publics vs internationaux</a></li>
      <li><a href="#section-2">Hôpitaux à Hanoï</a></li>
      <li><a href="#section-3">Hôpitaux à Ho Chi Minh-Ville</a></li>
      <li><a href="#section-4">Médecins généralistes francophones</a></li>
      <li><a href="#section-4b">Dentiste, optique, spécialistes</a></li>
      <li><a href="#section-4c">Vaccins et prévention</a></li>
      <li><a href="#section-5">Pharmacies et médicaments</a></li>
      <li><a href="#section-6">Assurance santé expatriée</a></li>
      <li><a href="#section-7">Urgences et numéros utiles</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn share-copy" href="#" title="Copier le lien" aria-label="Copier le lien de l'article">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">
    <p><strong>Se soigner loin de chez soi, c'est souvent ce qui stresse le plus avant une expatriation.</strong> La bonne nouvelle : le Vietnam dispose d'un système de santé en progression rapide, avec plusieurs hôpitaux internationaux de qualité dans les grandes villes. Ce guide répertorie ce que tu dois savoir pour ne pas être pris au dépourvu.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=1200&q=80" alt="Hôpital médecin Vietnam" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Hôpitaux publics vs hôpitaux internationaux</h2>
    <p>Au Vietnam, deux types d'établissements coexistent :</p>
    <ul>
      <li><strong>Hôpitaux publics (bệnh viện công)</strong> : moins chers, mais souvent bondés, avec peu de personnel anglophone ou francophone et des conditions d'hospitalisation très différentes des standards européens. Adapté pour les soins mineurs ou si ton budget est limité et que tu parles vietnamien.</li>
      <li><strong>Hôpitaux internationaux et cliniques privées</strong> : personnel formé à l'international, souvent anglophone voire francophone dans certains établissements, normes proches des hôpitaux européens. Tarifs plus élevés — une consultation de base coûte entre 40 et 120 USD (soit 1 à 3 millions de VND) selon l'établissement et la spécialité.</li>
    </ul>
    <p>Pour la plupart des expatriés sans parler couramment vietnamien, les hôpitaux internationaux sont le choix raisonnable.</p>

    <h3>Comment se déroule concrètement une consultation</h3>

    <p>Premier choc culturel pour un Français : au Vietnam, <strong>on paie avant d'être soigné</strong>, pas après. Dans un hôpital international, le parcours type ressemble à ça : tu te présentes à l'accueil (avec ou sans rendez-vous — beaucoup d'établissements acceptent les <em>walk-in</em>), tu règles la consultation à la caisse, puis tu vois le médecin. Les examens complémentaires (analyses, imagerie) sont facturés au fur et à mesure, chacun payé avant d'être réalisé.</p>

    <ul>
      <li><strong>Pas de carte Vitale, pas de tiers payant à la française.</strong> Soit tu avances les frais et tu te fais rembourser par ton assurance sur facture, soit ton assurance a un accord de <em>direct billing</em> avec l'établissement — renseigne-toi avant, c'est un critère de choix important pour ton assureur.</li>
      <li><strong>Demande systématiquement la facture détaillée et le compte-rendu médical en anglais.</strong> Les hôpitaux internationaux les fournissent sans problème, et ton assurance les exigera. Dans le public, c'est plus compliqué — un document en vietnamien devra être traduit pour un remboursement.</li>
      <li><strong>Les rendez-vous se prennent facilement</strong> par téléphone, via les applications des chaînes hospitalières ou même par messagerie. Les délais sont généralement courts comparés à la France : voir un spécialiste dans la semaine est la norme, pas l'exception.</li>
    </ul>

    <h3>L'atout du couple franco-vietnamien</h3>

    <p>Si tu vis avec un(e) Vietnamien(ne), ta situation est très différente de celle de l'expat isolé — et c'est un vrai avantage. Ma femme m'accompagne pour tout ce qui touche à la santé locale, et ça change tout : elle traduit les échanges dans les établissements publics, elle sait négocier le parcours administratif à la vietnamienne (quel guichet, quel étage, quel papier), et elle repère immédiatement si un tarif « étranger » gonflé est appliqué.</p>

    <p>Avec un conjoint vietnamien, l'hôpital public redevient une option sérieuse pour les soins courants : la barrière de la langue tombe, et les tarifs publics sont sans comparaison avec les établissements internationaux. Mon approche personnelle : <strong>public accompagné pour le courant, international pour le sérieux</strong> — et pour tout ce qui est urgence vitale, le plus proche, point.</p>

    <h2 id="section-2">Hôpitaux et cliniques à Hanoï</h2>

    <table>
      <thead>
        <tr>
          <th>Établissement</th>
          <th>Type</th>
          <th>Langues</th>
          <th>Remarque</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Vinmec Times City (Hanoï)</td>
          <td>Hôpital international</td>
          <td>Anglais, vietnamien</td>
          <td>Chaîne réputée, urgences 24h</td>
        </tr>
        <tr>
          <td>Hanoï Family Medical Practice</td>
          <td>Clinique internationale</td>
          <td>Anglais, espagnol, francophones ponctuels</td>
          <td>Médecins généralistes expats, bonne réputation</td>
        </tr>
        <tr>
          <td>Hôpital Français de Hanoï</td>
          <td>Clinique franco-vietnamienne</td>
          <td>Français, vietnamien, anglais</td>
          <td>Structure franco-vietnamienne de référence, personnel médical formé en France, spécialisations en gynécologie-obstétrique et chirurgie</td>
        </tr>
        <tr>
          <td>Bệnh viện Việt Pháp (Hôpital franco-vietnamien)</td>
          <td>Partenariat franco-vietnamien</td>
          <td>Français, anglais, vietnamien</td>
          <td>Médecins formés en France, honoraires intermédiaires</td>
        </tr>
      </tbody>
    </table>

    <div class="tip-box">
      <strong>Conseil de la communauté francophone :</strong> Les groupes Facebook d'expatriés francophones à Hanoï (« Français à Hanoï », « Expats Hanoï ») sont la source la plus à jour pour trouver des recommandations de médecins francophones — les professionnels changent régulièrement. L'ambassade de France publie également une liste de prestataires de santé sur <a href="https://vn.diplomatie.gouv.fr" target="_blank" rel="noopener">vn.diplomatie.gouv.fr</a>.
    </div>

    <h2 id="section-3">Hôpitaux et cliniques à Hô Chi Minh-Ville</h2>

    <table>
      <thead>
        <tr>
          <th>Établissement</th>
          <th>Type</th>
          <th>Langues</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Vinmec Central Park (HCMV)</td>
          <td>Hôpital international</td>
          <td>Anglais, vietnamien</td>
        </tr>
        <tr>
          <td>Columbia Asia HCMV</td>
          <td>Hôpital international</td>
          <td>Anglais, vietnamien</td>
        </tr>
        <tr>
          <td>FV Hospital (Hôpital Franco-Vietnamien)</td>
          <td>Partenariat franco-vietnamien</td>
          <td>Français, anglais, vietnamien</td>
        </tr>
        <tr>
          <td>International SOS</td>
          <td>Clinique internationale urgences</td>
          <td>Anglais, plusieurs langues</td>
        </tr>
      </tbody>
    </table>

    <h2 id="section-4">Médecins généralistes francophones</h2>
    <p>Trouver un médecin qui parle français à Hanoï ou HCMV est possible mais demande quelques recherches. Les groupes Facebook d'expatriés francophones au Vietnam (Français au Vietnam, Expats Hanoï…) sont souvent la meilleure source de recommandations à jour. L'ambassade de France publie une liste de prestataires de santé recommandés sur <a href="https://vn.diplomatie.gouv.fr" target="_blank" rel="noopener">vn.diplomatie.gouv.fr</a>.</p>

    <p>Un conseil qui vaut de l'or : <strong>trouve ton généraliste avant d'en avoir besoin</strong>. Le pire moment pour chercher un médecin francophone, c'est à 39 de fièvre. Dans tes premières semaines sur place, fais une consultation « de prise de contact » — un check-up simple, l'occasion de vérifier que le courant passe, que l'établissement te convient, et d'avoir un dossier ouvert. Le jour où quelque chose ne va pas, tu appelles quelqu'un qui te connaît déjà.</p>

    <h2 id="section-4b">Dentiste, optique, spécialistes : les autres soins</h2>

    <h3>Le dentaire, point fort du Vietnam</h3>
    <p>C'est un des secrets les moins bien gardés d'Asie du Sud-Est : les soins dentaires au Vietnam coûtent une fraction du prix français, pour une qualité qui peut être excellente dans les cliniques modernes de Hanoï et HCMV. Détartrage, soins de caries, couronnes, implants — beaucoup d'expatriés (et même des touristes qui font exprès le déplacement) profitent de leur passage pour rattraper des années de soins repoussés. Comme partout, la fourchette de qualité est large : privilégie les cliniques recommandées par la communauté francophone plutôt que la première vitrine venue, et demande un devis écrit avant tout traitement lourd.</p>

    <h3>Lunettes et optique</h3>
    <p>Même logique pour l'optique : examens de vue rapides et montures + verres à des prix très inférieurs à la France. Les boutiques d'optique sont partout dans les grandes villes. Si tu portes des verres complexes (forte correction, progressifs), apporte ton ordonnance française récente pour comparaison.</p>

    <h3>Spécialistes et santé mentale</h3>
    <p>Pour les spécialités courantes (dermatologie, cardiologie, gynécologie…), les hôpitaux internationaux listés plus haut couvrent l'essentiel, généralement en anglais. Le point faible, honnêtement, c'est la <strong>santé mentale en français</strong> : les psychologues et psychiatres francophones sur place se comptent sur les doigts d'une main. La solution que la plupart des expatriés adoptent : la <strong>téléconsultation avec un praticien en France</strong>, en visio, avec le décalage horaire de 5 à 6 heures qui reste gérable (une séance à 14h heure française = 19h-20h à Hanoï). Certaines assurances expatriées incluent d'ailleurs la téléconsultation dans leurs garanties — vérifie ce point au moment de choisir ton contrat.</p>

    <p>Pour la maternité spécifiquement, j'ai consacré un article entier au sujet : <a href="grossesse-vietnam-hopital-cout-demarches">grossesse au Vietnam — hôpitaux, coûts réels et démarches</a>.</p>

    <h2 id="section-4c">Avant de partir : vaccins et prévention</h2>

    <p>Quelques semaines avant le départ, passe par un centre de vaccinations internationales en France (il y en a dans la plupart des CHU). Les points systématiquement abordés pour le Vietnam :</p>

    <ul>
      <li><strong>Mise à jour du calendrier vaccinal classique</strong> (DTP, hépatite B) — la base.</li>
      <li><strong>Hépatite A et typhoïde</strong> — recommandées pour tout séjour prolongé, ce sont des maladies à transmission alimentaire présentes dans la région.</li>
      <li><strong>Encéphalite japonaise et rage</strong> — à discuter avec le médecin selon ton profil : séjours ruraux prolongés, contact avec les animaux. La rage existe au Vietnam et les chiens errants ne sont pas rares ; en cas de morsure, direction immédiate un centre médical pour la prophylaxie, vacciné ou pas.</li>
      <li><strong>La dengue, elle, n'a pas de vaccin généralisé</strong> — c'est le risque sanitaire quotidien le plus réel au Vietnam, surtout en saison des pluies. La prévention, c'est l'anti-moustique matin et soir, point. Si tu fais une fièvre brutale avec courbatures, consulte sans attendre et mentionne la dengue : le diagnostic se fait par une simple prise de sang.</li>
    </ul>

    <h2 id="section-5">Pharmacies et médicaments</h2>
    <p>Les pharmacies (nhà thuốc) sont très nombreuses au Vietnam, surtout dans les grandes villes. Beaucoup de médicaments de prescription française sont disponibles sans ordonnance au Vietnam à des prix bien inférieurs — mais les dosages ou les formules peuvent différer. Vérifie toujours avec un médecin avant d'acheter.</p>
    <p>Certains médicaments courants en France ne sont pas disponibles au Vietnam, ou leur disponibilité varie selon les villes. Emporte toujours un stock de tes médicaments réguliers pour les 2-3 premiers mois.</p>

    <p>Trois réflexes qui évitent les galères :</p>
    <ul>
      <li><strong>Fais rédiger tes ordonnances en DCI</strong> (nom de la molécule, pas de la marque) avant de partir : « paracétamol » se retrouve partout dans le monde, « Doliprane » non. Le pharmacien vietnamien trouvera l'équivalent local en quelques secondes avec la molécule.</li>
      <li><strong>Traitement chronique :</strong> pars avec 2-3 mois de stock <em>et</em> l'ordonnance (idéalement traduite en anglais) qui justifie le transport des médicaments à la douane. Vérifie ensuite sur place, dès les premières semaines, si ta molécule est disponible et sous quelle forme — pas la veille de la fin de ton stock.</li>
      <li><strong>Méfie-toi des contrefaçons :</strong> elles existent, surtout hors des grandes enseignes. Privilégie les chaînes de pharmacies établies (Long Châu, Pharmacity, An Khang…) plutôt que l'échoppe de quartier pour tout ce qui est important.</li>
    </ul>

    <h2 id="section-6">Assurance santé expatriée au Vietnam</h2>
    <p>La couverture santé française (Sécurité sociale + mutuelle) ne fonctionne pas au Vietnam. Il te faut obligatoirement une assurance internationale pour être couvert dans les hôpitaux internationaux.</p>
    <p>Options courantes :</p>
    <ul>
      <li><strong>Assureurs internationaux</strong> : Cigna, AXA Global Healthcare, April International, Allianz Care — offres complètes mais plus chères</li>
      <li><strong>Sécurité sociale vietnamienne (BHYT)</strong> : accessible aux travailleurs avec contrat vietnamien, couvre les hôpitaux publics. Tarifs très bas mais accès limité</li>
      <li><strong>CFE (Caisse des Français de l'Étranger)</strong> : extension de la Sécu française aux expatriés. Recommandé si tu cotises encore en France</li>
    </ul>
    <p>→ Lire notre <a href="assurance-sante-vietnam-expat">guide détaillé sur l'assurance santé au Vietnam</a>.</p>

    <h3>Quelle stratégie selon ta situation ?</h3>

    <ul>
      <li><strong>Touriste ou séjour court (moins de 3 mois) :</strong> une bonne <a href="assurance-voyage-vietnam">assurance voyage</a> avec plafond hospitalisation solide et rapatriement suffit. Ne pars jamais sans : une hospitalisation dans un établissement international se paie d'avance, et les montants grimpent vite.</li>
      <li><strong>Expatrié installé :</strong> assurance santé internationale au premier jour, en vérifiant trois points — le direct billing avec les hôpitaux de ta ville, la couverture de la téléconsultation, et l'évacuation sanitaire (vers Bangkok ou Singapour pour les cas les plus lourds, pratique standard dans la région).</li>
      <li><strong>Marié(e) à un(e) Vietnamien(ne) et salarié(e) local(ement) :</strong> la BHYT vietnamienne via le contrat de travail te couvre dans le public, ce qui fait une base — beaucoup de couples mixtes la complètent d'une assurance privée pour l'accès aux établissements internationaux.</li>
      <li><strong>Retraité ou frontalier administratif France-Vietnam :</strong> regarde la <a href="protection-sociale-cfe-retraite-vietnam">CFE</a>, qui maintient un lien avec le système français et se complète bien d'une assurance locale ou internationale.</li>
    </ul>

    <h2 id="section-7">Urgences et numéros utiles</h2>
    <ul>
      <li><strong>SAMU Vietnam :</strong> 115</li>
      <li><strong>Police :</strong> 113</li>
      <li><strong>Pompiers :</strong> 114</li>
      <li><strong>Ambassade de France à Hanoï — urgence consulaire :</strong> +84 24 39 44 57 00 (24h/24)</li>
      <li><strong>Consulat général de France à HCMV — urgence consulaire :</strong> +84 28 35 20 68 00</li>
    </ul>

    <p>À savoir sur le 115 : le service d'ambulances publiques est moins développé qu'en France, les délais peuvent être longs et l'équipage ne parlera probablement pas anglais. C'est pour ça que les expatriés enregistrent aussi <strong>la ligne d'urgence directe de leur hôpital international de référence</strong> — la plupart opèrent leurs propres ambulances avec du personnel médicalisé. Le réflexe à avoir dès ton installation : choisis « ton » hôpital, enregistre son numéro d'urgence dans ton téléphone, et note son adresse en vietnamien dans tes notes pour pouvoir la montrer à un chauffeur de taxi — dans une vraie urgence, un Grab ou un taxi est parfois plus rapide que d'attendre une ambulance.</p>

    <p>Prépare aussi une <strong>fiche d'urgence dans ton portefeuille et ton téléphone</strong> : groupe sanguin, allergies, traitements en cours, numéro de ton assurance et de ta police, contact d'urgence. En couple franco-vietnamien, fais-la bilingue français-vietnamien — si tu n'es pas en état de parler, c'est elle qui parlera pour toi.</p>

    <?php
    $page_sources = [
      ['label' => 'Ambassade de France au Vietnam', 'url' => 'https://vn.ambafrance.org'],
      ['label' => 'France Diplomatie — services aux Français de l\'étranger', 'url' => 'https://www.diplomatie.gouv.fr'],
    ];
    include '_article-sources.php';
    ?>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="cta-newsletter">
      <h3>Reçois mes prochains articles</h3>
      <p>📥 <strong>Guide PDF + 3 modèles de lettres offerts</strong> dès l'inscription. Un email par mois, désinscription en 1 clic.</p>
      <form class="cta-form" action="<?= SITE_URL ?>/subscribe-pack" method="POST">
        <input type="text" name="website" value="" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a> — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>

    <?php
$author_bio = <<<'BIO'
Français expatrié à Hanoï. Je partage mon parcours d'installation au Vietnam : démarches, vie de couple mixte et travail en ligne.
BIO;
$author_links = <<<'LINKS'
<a href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">TikTok</a>
          <a href="a-propos-capvietnam">À propos</a>
LINKS;
include '_author-box.php';
?>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
require_once __DIR__ . '/config/site.php';
$current_slug = 'hopitaux-medecins-francophones-vietnam';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
