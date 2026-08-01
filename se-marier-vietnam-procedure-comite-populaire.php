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
   'a' => 'Oui, à condition d\'avoir obtenu le CCAM (Certificat de Capacité à Mariage) auprès du consulat français <em>avant</em> le mariage, et d\'avoir ensuite fait transcrire l\'acte de mariage au Service Central d\'État Civil de Nantes. Sans transcription, le mariage n\'a aucun effet légal en France.'],
  ['q' => 'Dois-je être présent physiquement au Vietnam pour le mariage ?',
   'a' => 'Oui, obligatoirement. Les deux époux doivent être physiquement présents lors de la cérémonie civile au comité populaire. Le mariage par procuration n\'est pas possible pour un mariage franco-vietnamien.'],
  ['q' => 'Combien de temps dure la procédure au Vietnam de bout en bout ?',
   'a' => 'Compte entre 2 et 6 mois depuis l\'obtention du certificat de capacité matrimoniale jusqu\'au jour du mariage, selon les délais du comité populaire local et la rapidité de constitution du dossier.'],
  ['q' => 'Faut-il aussi se marier en France ?',
   'a' => 'Non, si le mariage au Vietnam est transcrit à Nantes, il a la même valeur légale qu\'un mariage célébré en France. Vous n\'avez pas à vous marier une seconde fois à la mairie française — sauf si vous le souhaitez pour le symbolique.'],
  ['q' => 'Peut-on faire la cérémonie traditionnelle avant le mariage civil ?',
   'a' => 'Oui, et c\'est très courant : la cérémonie traditionnelle (lễ cưới) suit le calendrier lunaire et les impératifs familiaux, le mariage civil suit le calendrier administratif (CCAM, instruction du dossier). Beaucoup de couples célèbrent la fête familiale d\'abord et régularisent au comité populaire ensuite — ou l\'inverse. Seul le passage au comité populaire a une valeur légale.'],
  ['q' => 'Mes documents français doivent-ils être traduits pour le comité populaire ?',
   'a' => 'Oui. Les documents français du dossier (CCAM, acte de naissance) doivent être légalisés puis traduits en vietnamien par un traducteur reconnu. À partir du 11 septembre 2026, l\'apostille remplace la double légalisation consulaire pour les documents entre la France et le Vietnam, ce qui simplifie cette étape.'],
  ['q' => 'Le comité populaire peut-il nous interroger sur notre couple ?',
   'a' => 'Pour les mariages impliquant un étranger, les autorités vietnamiennes peuvent poser des questions au couple afin de vérifier la réalité du projet matrimonial. C\'est le pendant vietnamien de l\'entretien du consulat français : pour un couple sincère qui connaît la situation de l\'autre, c\'est une simple formalité.'],
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
      <span>⏱ 12 min de lecture</span>
      <span>Mis &agrave; jour : Juillet 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Vue d'ensemble du mariage mixte</a></li>
      <li><a href="#section-2">Le certificat de capacité matrimoniale</a></li>
      <li><a href="#section-2b">Légalisation et traduction</a></li>
      <li><a href="#section-3">Les documents côté vietnamien</a></li>
      <li><a href="#section-4">La cérémonie au comité populaire</a></li>
      <li><a href="#section-5">Après le mariage</a></li>
      <li><a href="#section-5b">Le rétroplanning complet</a></li>
      <li><a href="#section-6">Et la cérémonie traditionnelle ?</a></li>
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
    <p><strong>Se marier au Vietnam quand on est Français : c'est possible, et ça ouvre la porte au regroupement familial si ton conjoint veut ensuite t'accompagner en France.</strong> La procédure est un peu plus complexe que pour un mariage entre deux Vietnamiens, mais elle est bien définie. Ce guide te donne toutes les étapes dans l'ordre.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1519741497674-611481863552?w=1200&q=80" alt="Mariage traditionnel vietnamien" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Vue d'ensemble : comment se passe un mariage franco-vietnamien</h2>
    <p>Au Vietnam, le mariage civil se célèbre obligatoirement au comité populaire (UBND — Ủy ban nhân dân) du district de résidence du conjoint vietnamien. C'est lui qui enregistre le mariage et délivre l'acte officiel.</p>

    <p>Précision utile pour te repérer dans le millefeuille administratif vietnamien : pour un mariage impliquant un étranger, ce n'est pas le petit comité populaire de quartier (cấp xã/phường) qui est compétent, mais l'échelon <strong>du district</strong> (cấp huyện/quận) — celui-là même où ta/ton futur(e) conjoint(e) est enregistré(e) comme résident(e). Si sa résidence officielle est encore dans sa province natale alors qu'elle ou il vit à Hanoï, le mariage se fera... dans la province natale. C'est un point à clarifier tôt, parce qu'il détermine où toute la procédure se déroulera — et donc la logistique de tes propres déplacements.</p>
    <p>Pour un mariage mixte impliquant un ressortissant étranger, des démarches supplémentaires côté français sont nécessaires avant la cérémonie :</p>
    <ol>
      <li>Obtenir un <strong>certificat de capacité matrimoniale</strong> auprès de l'ambassade de France au Vietnam</li>
      <li>Constituer les dossiers des deux côtés</li>
      <li>Se présenter ensemble au comité populaire pour la cérémonie</li>
    </ol>
    <p>Après le mariage, la transcription de l'acte auprès du Service Central d'État Civil de Nantes lui donnera sa pleine valeur légale en France — sans elle, vous êtes mariés au Vietnam mais célibataires aux yeux de l'administration française. → <a href="faire-venir-conjointe-vietnamienne-france">Guide complet : faire venir son conjoint vietnamien en France</a></p>

    <h2 id="section-2">Le certificat de capacité matrimoniale : la démarche française</h2>
    <p>Le certificat de capacité matrimoniale — aussi appelé <strong>CCAM (Certificat de Capacité à Mariage)</strong> — est délivré par le consulat français à Hanoï ou à Hô Chi Minh-Ville. Il atteste que tu n'as aucun empêchement à te marier selon la loi française. Ce document est <strong>obligatoire avant la cérémonie</strong> au comité populaire et doit donc être demandé plusieurs semaines à l'avance.</p>
    <p>Documents à fournir au consulat :</p>
    <ul>
      <li>Acte de naissance intégral de moins de 6 mois (obtenu au SCEC de Nantes si né à l'étranger)</li>
      <li>Attestation de célibat ou acte de divorce (si précédemment marié)</li>
      <li>Passeport français en cours de validité</li>
      <li>Justificatif de résidence au Vietnam</li>
      <li>Formulaire de demande fourni par le consulat</li>
    </ul>
    <p>Délai : <strong>4 à 6 semaines</strong> (10 jours ouvrés de publication des bans + instruction). Coût : <strong>gratuit</strong>. Validité : <strong>1 an</strong>.</p>

    <div class="tip-box">
      <strong>Anticipe !</strong> Commande ton acte de naissance récent au SCEC de Nantes dès que possible — délai : 5 à 10 jours ouvrés. Pour le détail complet des étapes et documents CCAM : <a href="certificat-capacite-mariage-vietnam">Guide complet du CCAM</a>.
    </div>

    <h2 id="section-2b">Légalisation et traduction : rendre tes documents français lisibles au Vietnam</h2>

    <p>C'est l'étape que presque tous les couples découvrent en cours de route : tes documents français (acte de naissance, CCAM) ne sont pas utilisables tels quels par l'administration vietnamienne. Il faut les rendre juridiquement valables au Vietnam, en deux temps :</p>

    <ul>
      <li><strong>La légalisation</strong> : historiquement, les documents français destinés au Vietnam passaient par une double légalisation consulaire (autorités françaises puis représentation vietnamienne). <strong>Bonne nouvelle : à partir du 11 septembre 2026, le Vietnam rejoint la Convention de La Haye</strong> — la simple apostille remplacera ce circuit, ce qui simplifie et accélère nettement la préparation du dossier. J'ai détaillé ce qui change concrètement dans <a href="apostille-vietnam-francais-2026">l'article dédié à l'apostille</a>. Si ton mariage est prévu autour de cette date charnière, renseigne-toi sur le régime applicable à ton dossier au moment du dépôt.</li>
      <li><strong>La traduction assermentée en vietnamien</strong> : le comité populaire travaille en vietnamien. Tes documents français légalisés doivent être traduits par un traducteur reconnu — les bureaux de traduction notariée (văn phòng công chứng) des grandes villes font ça couramment, souvent en quelques jours.</li>
    </ul>

    <p>Conseil d'organisation : traite la légalisation et la traduction <strong>dès que le CCAM est en main</strong>, sans attendre. C'est l'étape la plus « mécanique » du parcours, mais elle s'intercale entre deux documents à durée de validité limitée — un dossier qui traîne peut voir son acte de naissance de moins de 6 mois... dépasser les 6 mois.</p>

    <h2 id="section-3">Les documents requis côté vietnamien</h2>
    <p>En parallèle, ton/ta futur(e) conjoint(e) vietnamien(ne) doit préparer son propre dossier (la liste exacte peut varier d'un comité populaire à l'autre — renseigne-toi directement auprès du comité de ton quartier) :</p>
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
          <td>CCAM — Certificat de Capacité à Mariage (Français)</td>
          <td>Consulat français (Hanoï ou HCMV)</td>
          <td>4 à 6 semaines</td>
        </tr>
        <tr>
          <td>Attestation de célibat (Vietnamien)</td>
          <td>Comité populaire local</td>
          <td>Quelques jours</td>
        </tr>
        <tr>
          <td>Acte de naissance (Français)</td>
          <td>SCEC Nantes</td>
          <td>5 à 10 jours ouvrés</td>
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
      <li>Un interprète peut être requis si tu ne parles pas vietnamien (selon le comité populaire local — renseigne-toi en avance)</li>
      <li>Aucun témoin n'est requis en règle générale — le mariage au comité populaire est une procédure administrative, pas une cérémonie au sens français du terme</li>
    </ul>
    <p>À l'issue de la cérémonie, le comité populaire vous remet le <strong>giấy chứng nhận đăng ký kết hôn</strong> (certificat d'enregistrement de mariage) — c'est votre acte de mariage officiel.</p>

    <div class="tip-box">
      <strong>Demande plusieurs exemplaires de l'acte dès le jour J.</strong> Tu auras besoin de l'acte de mariage pour la transcription à Nantes, pour le futur visa de ton conjoint, pour la banque, pour l'immigration vietnamienne… Repartir avec des copies certifiées supplémentaires le jour même coûte trois fois rien et t'évitera de re-solliciter le comité populaire plus tard.
    </div>

    <p>Un mot sur <strong>l'éventuel entretien</strong> : pour les mariages impliquant un étranger, les autorités vietnamiennes se réservent la possibilité de poser des questions au couple, séparément ou ensemble, pour vérifier la réalité du projet matrimonial — l'équivalent vietnamien de ce que fait le consulat français avec <a href="entretien-ambassade-france-vietnam-visa-conjoint">l'entretien de communauté de vie</a>. Même logique, mêmes conseils : sincérité, connaissance mutuelle des situations de chacun, pas de récitation. Pour un couple réel, c'est une formalité.</p>

    <h2 id="section-5">Ce qu'il faut faire après le mariage</h2>
    <p>Le mariage est célébré — félicitations ! Mais côté administratif, il reste du travail :</p>
    <ol>
      <li><strong>Faire transcrire le mariage</strong> au Service Central d'État Civil de Nantes → <a href="transcription-mariage-service-central-nantes">Guide transcription Nantes</a></li>
      <li>Si ton conjoint veut venir en France : <strong>demander le visa long séjour conjoint de Français</strong> → <a href="visa-long-sejour-conjoint-vietnamien-france">Guide visa conjoint</a></li>
      <li>Si tu restes au Vietnam : mettre à jour votre situation légale côté Vietnam (enregistrement de domicile, etc.)</li>
    </ol>
    <div class="tip-box">
      <strong>Le CCAM était une étape AVANT le mariage.</strong> Le Certificat de Capacité à Mariage est obtenu au consulat français avant la cérémonie au comité populaire (voir section 2 ci-dessus). Une fois marié, il n'y a rien de plus à faire avec ce document.
    </div>

    <h2 id="section-5b">Le rétroplanning complet, en partant de la date rêvée</h2>

    <p>La meilleure façon d'organiser tout ça, c'est de partir de la fin — la date à laquelle vous aimeriez être mariés — et de remonter :</p>

    <div class="table-wrap">
    <table>
      <thead>
        <tr>
          <th>Échéance</th>
          <th>Action</th>
          <th>Pourquoi ce timing</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>J-6 mois</strong></td>
          <td>Commander l'acte de naissance intégral au SCEC + rassembler les documents des deux côtés</td>
          <td>L'acte doit avoir moins de 6 mois au dépôt — le commander trop tôt est aussi une erreur</td>
        </tr>
        <tr>
          <td><strong>J-4 à J-5 mois</strong></td>
          <td>Déposer la demande de CCAM au consulat (Hanoï ou HCMV)</td>
          <td>4 à 6 semaines d'instruction, incluant les 10 jours de publication des bans en France</td>
        </tr>
        <tr>
          <td><strong>J-3 mois</strong></td>
          <td>Légalisation + traduction assermentée des documents français ; attestation de célibat côté vietnamien</td>
          <td>Étape mécanique mais incompressible ; l'attestation vietnamienne est rapide mais a aussi une durée de validité</td>
        </tr>
        <tr>
          <td><strong>J-2 mois</strong></td>
          <td>Dépôt du dossier complet au comité populaire</td>
          <td>L'instruction vietnamienne fixe ensuite la date de la cérémonie</td>
        </tr>
        <tr>
          <td><strong>Jour J</strong></td>
          <td>Cérémonie au comité populaire — vous êtes mariés !</td>
          <td>30 minutes, signatures, remise de l'acte (+ copies certifiées à demander sur place)</td>
        </tr>
        <tr>
          <td><strong>J+quelques semaines</strong></td>
          <td>Demande de transcription à Nantes</td>
          <td>Indispensable pour tout effet en France (nom, visa conjoint, impôts…) — délais longs, à lancer sans tarder</td>
        </tr>
      </tbody>
    </table>
    </div>

    <p>Deux outils du blog pour t'accompagner : le <a href="retroplanning-faire-venir-conjoint">rétroplanning interactif</a> qui calcule tes échéances à partir de ta date de lancement CCAM, et le <a href="pack-gratuit">pack gratuit</a> qui contient la checklist CCAM complète et les modèles de lettres au consulat.</p>

    <p>Dernier conseil de planification, le plus important : <strong>ne réserve rien d'irréversible (salle, traiteur, billets pour la famille française) tant que le comité populaire n'a pas fixé la date de la cérémonie civile</strong> — ou déconnecte complètement la fête de la formalité en les planifiant comme deux événements indépendants. Les couples qui souffrent le plus dans cette procédure sont ceux qui ont enchâssé une date de banquet non remboursable dans un calendrier administratif qu'ils ne contrôlent pas.</p>

    <h2 id="section-6">La cérémonie traditionnelle : séparée ou combinée ?</h2>
    <p>La cérémonie civile au comité populaire n'a rien de festif. La plupart des couples franco-vietnamiens organisent une <strong>cérémonie traditionnelle séparée</strong> (lễ cưới) avec les familles, avant ou après le mariage civil. Cette cérémonie n'a pas de valeur légale mais elle est culturellement très importante au Vietnam — pour ta belle-famille, c'est même souvent ELLE le « vrai » mariage, celui qui compte devant la communauté et les ancêtres. Le passage au comité populaire est vu comme la paperasse ; le lễ cưới est vu comme l'événement.</p>

    <h3>Les trois temps du mariage traditionnel vietnamien</h3>

    <p>Pour que tu saches dans quoi tu mets les pieds (avec bonheur), le mariage traditionnel vietnamien se déroule classiquement en trois rites — plus ou moins condensés selon les familles et les régions :</p>

    <ul>
      <li><strong>Lễ dạm ngõ</strong> — la rencontre officielle des deux familles : la famille du marié rend visite à celle de la mariée pour « demander la permission » de fréquentation sérieuse. Informel en apparence, hautement symbolique en réalité.</li>
      <li><strong>Lễ ăn hỏi</strong> — les fiançailles : la famille du marié apporte les <em>tráp</em>, ces plateaux laqués rouges couverts de cadeaux (noix d'arec et feuilles de bétel — LE symbole du mariage vietnamien —, thé, alcool, fruits, gâteaux, parfois un cochon rôti), portés en procession par un nombre impair de jeunes gens. La négociation du nombre de plateaux et de leur contenu est une affaire de familles — laisse ta belle-famille piloter.</li>
      <li><strong>Lễ cưới / tiệc cưới</strong> — la cérémonie et le banquet : passage devant l'autel des ancêtres chez la mariée, échanges de vœux et de bijoux, puis le banquet — souvent plusieurs centaines d'invités, un déroulé millimétré, et la tournée des tables où les mariés trinquent avec chaque groupe d'invités.</li>
    </ul>

    <p>Ce que le marié français doit anticiper : tu porteras probablement l'<strong>áo dài</strong> traditionnel à un moment de la journée, tu salueras l'autel des ancêtres de ta belle-famille (geste de respect, pas d'engagement religieux), et les invités offrent des enveloppes d'argent plutôt que des cadeaux — c'est le fonctionnement normal, et ces enveloppes financent une partie du banquet. Pour les chiffres réels d'un mariage franco-vietnamien (dot, banquet, photos), voir <a href="prix-mariage-franco-vietnamien">le budget détaillé</a>.</p>

    <p>Côté calendrier, ne t'étonne pas : <strong>la date sera probablement choisie selon le calendrier lunaire</strong>, souvent avec consultation d'un maître de feng shui ou d'un moine pour trouver un jour faste — et certaines périodes concentrent tous les mariages de la région. C'est aussi pour ça que la cérémonie traditionnelle et le mariage civil sont rarement le même jour : chacun suit sa propre logique de calendrier.</p>

    <?php /* À COMPLÉTER par Anthony — retour d'expérience sur le mariage au comité populaire */ ?>
    <p><em>Section à venir — je partagerai bientôt notre expérience personnelle de cette démarche.</em></p>

    <?php
    $page_sources = [
      ['label' => 'Ambassade de France au Vietnam', 'url' => 'https://vn.ambafrance.org'],
      ['label' => 'France Diplomatie — services aux Français de l\'étranger', 'url' => 'https://www.diplomatie.gouv.fr'],
      ['label' => 'Thư Viện Pháp Luật — base des textes juridiques vietnamiens (en vietnamien)', 'url' => 'https://thuvienphapluat.vn'],
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
$current_slug = 'se-marier-vietnam-procedure-comite-populaire';
$current_cat  = 'mariage';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
