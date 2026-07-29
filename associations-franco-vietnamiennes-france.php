<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Associations franco-vietnamiennes en France : UGVF, AAFV et autres ressources';
$page_description = 'Quelles associations franco-vietnamiennes peuvent aider un conjoint vietnamien à s\'intégrer en France ? UGVF, AAFV, cours de vietnamien, fêtes culturelles, réseau d\'entraide — guide complet.';
$page_canonical   = SITE_URL . '/associations-franco-vietnamiennes-france';
$page_og_title    = 'Associations franco-vietnamiennes en France : trouver un réseau, des cours et du soutien';
$page_og_desc     = 'UGVF, AAFV, antennes régionales : comment les associations franco-vietnamiennes peuvent aider votre conjoint vietnamien à s\'intégrer en France.';
$page_og_url      = SITE_URL . '/associations-franco-vietnamiennes-france';
$page_og_image    = 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Associations franco-vietnamiennes en France : UGVF, AAFV et autres ressources',
  'datePublished'   => '2026-07-06',
  'dateModified'    => '2026-07-06',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/associations-franco-vietnamiennes-france',
  'image'           => 'https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1200&q=80',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie de couple franco-vietnamien',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'jade';
$article_hero_bg  = '#1a3a2a';
$article_glow     = 'rgba(27,107,82,0.15)';
$article_badge    = 'rgba(191,74,42,0.25)';
$article_badge_c  = '#e8856a';

$article_category     = 'Vivre Ensemble';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vivre-ensemble';

$page_faq = [
  ['q' => 'Mon conjoint vietnamien parle peu français — les associations peuvent-elles aider ?',
   'a' => 'Oui. L\'UGVF et ses sections régionales organisent des cours de langue, des activités communautaires et des permanences administratives en vietnamien. C\'est un point de départ concret pour trouver un réseau social et des informations dans sa langue maternelle, en attendant une meilleure maîtrise du français.'],
  ['q' => 'Y a-t-il des associations dans toutes les villes de France ?',
   'a' => 'Les grandes villes ont généralement une section UGVF active (Paris, Lyon, Grenoble, Marseille, Lille). Pour les villes moyennes, recherche sur les réseaux sociaux des groupes Facebook locaux comme "Vietnamiens de [ta ville]" — ils sont souvent actifs même sans structure associative formelle.'],
  ['q' => 'Est-ce que ces associations offrent une aide juridique ou administrative ?',
   'a' => 'Certaines sections proposent des permanences d\'accueil et d\'orientation administrative (démarches de visa, titre de séjour, inscription consulaire). Elles n\'ont pas de juristes, mais peuvent orienter vers les bonnes structures. Pour des questions légales précises, consulte un avocat spécialisé en droit des étrangers.'],
  ['q' => 'Les cours de français de l\'OFII sont-ils vraiment gratuits ?',
   'a' => 'Oui. Dans le cadre du Contrat d\'Intégration Républicaine signé à l\'arrivée, l\'OFII évalue le niveau de français et prescrit si nécessaire des heures de formation linguistique entièrement prises en charge. C\'est un droit lié au parcours d\'intégration, pas un service payant — et l\'assiduité à ces formations compte pour la suite du parcours administratif.'],
  ['q' => 'Mon conjoint préfère rester entre Vietnamiens, est-ce mauvais signe pour son intégration ?',
   'a' => 'Non, surtout les premières années. Le réseau communautaire est une soupape qui rend l\'intégration possible, pas un obstacle. Le vrai signal d\'alerte serait l\'isolement total — ni réseau vietnamien, ni réseau français. Encourage les deux ancrages plutôt que d\'opposer l\'un à l\'autre.'],
  ['q' => 'Comment trouver la communauté vietnamienne dans une petite ville ?',
   'a' => 'Cherche les groupes Zalo « Người Việt tại [ta région] » — ils existent même pour les zones rurales —, passe par l\'épicerie asiatique la plus proche qui fait souvent office d\'annuaire vivant de la communauté, et regarde du côté des associations asiatiques généralistes qui regroupent plusieurs communautés dans les villes moyennes.'],
];

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero" style="background:<?= $article_hero_bg ?>;">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Articles</a><span class="breadcrumb-sep">›</span>
      <span>Associations franco-vietnamiennes</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">Couple Mixte</span>
    <h1>Associations franco-vietnamiennes en France : trouver un réseau et du soutien</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juillet 2026</span>
      <span>⏱ 11 min de lecture</span>
    </div>
    <p style="color:rgba(250,248,244,0.78);font-size:1.05rem;line-height:1.7;margin-top:1.25rem;">
      Quand ton ou ta conjoint(e) vietnamien(ne) arrive en France, le réseau associatif peut faire une vraie différence : cours de langue, fêtes culturelles, entraide administrative, communauté. Voici les principales associations, comment les contacter et ce qu'elles peuvent apporter.
    </p>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi rejoindre une association</a></li>
      <li><a href="#section-ugvf">UGVF — Union Générale des Vietnamiens de France</a></li>
      <li><a href="#section-aafv">AAFV — Association d'Amitié Franco-Vietnamienne</a></li>
      <li><a href="#section-autres">Autres réseaux et ressources</a></li>
      <li><a href="#section-fle">Le français de ton conjoint</a></li>
      <li><a href="#section-tet">Vivre le Têt en France</a></li>
      <li><a href="#section-comparatif">Par quoi commencer ?</a></li>
      <li><a href="#section-sans-asso">S'il n'y a rien dans ta ville</a></li>
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
    <p><strong>Arriver dans un nouveau pays, c'est souvent se sentir seul(e) face aux démarches, à la langue et aux codes culturels.</strong> Pour les conjoints vietnamiens qui rejoignent leur partenaire français en France, les associations franco-vietnamiennes représentent souvent le premier filet social — et une façon de rester connecté à sa culture tout en s'intégrant.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=1200&q=80" alt="Personnes autour d'une table lors d'un événement communautaire" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Pourquoi rejoindre une association franco-vietnamienne ?</h2>
    <p>Au-delà du côté social, les associations peuvent concrètement aider à :</p>
    <ul>
      <li><strong>Trouver des repères</strong> dans les démarches administratives françaises (titre de séjour, CAF, CPAM…) grâce à des membres qui sont passés par là</li>
      <li><strong>Garder le lien avec la culture vietnamienne</strong> — langue, cuisine, célébrations du Têt et de la Fête de la mi-automne</li>
      <li><strong>Construire un réseau</strong> professionnel et personnel dans la diaspora</li>
      <li><strong>Trouver des cours de vietnamien</strong> pour les enfants (ou pour le partenaire français)</li>
    </ul>

    <h3>Ce que le partenaire français sous-estime souvent</h3>

    <p>Parlons franchement de ce qui se passe dans la tête de la personne qui arrive. Ton ou ta conjoint(e) quitte un pays où le tissu social est dense — la famille à dix minutes, les voisins qu'on connaît, le marché où tout le monde se parle — pour un pays où, les premiers mois, <strong>tu es souvent sa seule personne</strong>. Tant que le français n'est pas fluide, chaque interaction du quotidien (la boulangerie, la préfecture, le médecin) demande un effort. Beaucoup de conjoints fraîchement arrivés traversent une phase de repli qui n'a rien à voir avec de la mauvaise volonté : c'est de l'épuisement social.</p>

    <p>C'est exactement là que le réseau communautaire change la donne. Une après-midi par semaine à parler vietnamien, rire en vietnamien, cuisiner vietnamien — ce n'est pas « refuser de s'intégrer », contrairement à ce qu'on entend parfois. C'est <strong>la soupape qui rend l'intégration possible</strong>. Les couples mixtes qui durent sont rarement ceux où le conjoint a coupé les ponts avec sa culture ; ce sont ceux où il a les deux ancrages.</p>

    <p>Ton rôle en tant que partenaire français : faciliter sans organiser à sa place. Repère les associations et groupes de ta région, propose d'accompagner aux premiers événements si ça la ou le rassure — puis laisse cet espace lui appartenir. Un réseau qui reste « le truc que mon mari m'a trouvé » ne remplit pas sa fonction.</p>

    <h2 id="section-ugvf">UGVF — Union Générale des Vietnamiens de France</h2>
    <p>L'UGVF est la principale fédération associative de la diaspora vietnamienne en France. Créée en 1976, elle regroupe plusieurs sections régionales et est reconnue au titre de la loi de 1901.</p>

    <h3>Ce que propose l'UGVF</h3>
    <ul>
      <li><strong>Cours de vietnamien</strong> via les écoles Măng Non et Về Nguồn — pour les enfants comme pour les adultes</li>
      <li><strong>Événements culturels</strong> : Têt (Nouvel An lunaire), Tết Trung Thu (Fête de la mi-automne), olympiades sportives, festival Ici Vietnam</li>
      <li><strong>Action humanitaire</strong> : collectes pour les victimes de catastrophes naturelles au Vietnam, programmes d'aide à l'éducation</li>
      <li><strong>Orientation administrative</strong> : conseils pour les démarches, mises en relation</li>
      <li><strong>Offres d'emploi et réseau pro</strong> dans la communauté</li>
    </ul>

    <h3>Sections régionales</h3>
    <table>
      <thead>
        <tr>
          <th>Section</th>
          <th>Ville</th>
          <th>Sigle</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Union des Vietnamiens d'Isère</td><td>Grenoble</td><td>UGVI</td></tr>
        <tr><td>Union des Vietnamiens du Rhône</td><td>Lyon</td><td>UGVR</td></tr>
        <tr><td>Union des Vietnamiens de Marseille</td><td>Marseille</td><td>UGVM</td></tr>
        <tr><td>Union des Vietnamiens du Nord</td><td>Lille</td><td>UGVL</td></tr>
        <tr><td>Siège national</td><td>Paris (Île-de-France)</td><td>UGVF</td></tr>
      </tbody>
    </table>

    <div class="tip-box">
      <strong>Comment contacter l'UGVF</strong>
      Site officiel : <a href="https://www.ugvf.org" target="_blank" rel="noopener">ugvf.org</a>. Les contacts des sections régionales sont listés sur le site. L'adhésion est payante (cotisation annuelle) et donne accès aux services et événements.
    </div>

    <h2 id="section-aafv">AAFV — Association d'Amitié Franco-Vietnamienne</h2>
    <p>L'AAFV est l'une des plus anciennes associations franco-vietnamiennes de France, fondée en 1961. Elle n'est pas une association de la diaspora au sens strict, mais une association d'amitié bilatérale regroupant des Français et des Vietnamiens engagés pour les relations entre les deux pays.</p>

    <h3>Les axes de l'AAFV</h3>
    <ul>
      <li><strong>Agent Orange</strong> : l'AAFV documente et porte à la connaissance du public les conséquences sanitaires et environnementales des défoliants utilisés entre 1961 et 1971 (2,6 millions d'hectares affectés) — un sujet qui touche de nombreuses familles vietnamiennes</li>
      <li><strong>Échanges culturels</strong> : colloques (dont au Sénat français), expositions, coopérations avec des médias (ARTE)</li>
      <li><strong>Solidarité</strong> : aide à l'éducation pour des enfants vietnamiens</li>
      <li><strong>Publication</strong> : revue trimestrielle <em>Perspectives</em>, sur abonnement</li>
    </ul>

    <h3>Comités locaux</h3>
    <p>L'AAFV dispose de comités locaux à Paris, Lyon, Marseille, Bordeaux et dans d'autres villes. Contact national :</p>
    <ul>
      <li>44 rue Alexis Lepère, 93100 Montreuil</li>
      <li><a href="mailto:contact@aafv.org">contact@aafv.org</a></li>
      <li>Site : <a href="https://www.aafv.org" target="_blank" rel="noopener">aafv.org</a></li>
    </ul>

    <div class="tip-box">
      <strong>À qui s'adresse l'AAFV ?</strong>
      L'AAFV convient davantage à ceux qui veulent s'engager sur les relations franco-vietnamiennes, la mémoire historique ou l'action solidaire. Pour une intégration quotidienne et un réseau communautaire, l'UGVF et ses sections régionales sont plus adaptées.
    </div>

    <h2 id="section-autres">Autres réseaux et ressources</h2>
    <p>Au-delà des grandes associations nationales, plusieurs ressources informelles sont très actives :</p>

    <h3>Groupes Facebook et Zalo</h3>
    <p>La diaspora vietnamienne est très présente sur Facebook (groupes "Vietnamiens de Paris", "Viet France", etc.) et sur Zalo (messagerie très utilisée au Vietnam). Ces groupes sont souvent les plus réactifs pour des questions pratiques du quotidien : trouver un coiffeur, une épicerie asiatique, un plombier francophone, ou simplement partager une recette.</p>

    <p>Si tu ne connais pas Zalo : c'est LE réseau social vietnamien, aussi incontournable là-bas que WhatsApp l'est en France. Ta belle-famille y est déjà, ton ou ta conjoint(e) aussi — et la diaspora en France s'y organise par régions. Installe-le toi aussi : c'est par là que passent les nouvelles de la famille, et c'est un geste d'intégration culturelle inversée que la belle-famille apprécie toujours.</p>

    <h3>Épiceries et restaurants vietnamiens</h3>
    <p>Dans les grandes villes, les commerces tenus par la communauté sont souvent des hubs d'information informels. À Paris notamment, le 13e arrondissement (autour d'Olympiades) est historiquement le quartier de la diaspora asiatique : supermarchés Tang Frères et Paristore, restaurants de phở tenus par des familles installées depuis les années 70-80, services en vietnamien à tous les coins de rue. Pour un conjoint fraîchement arrivé, une simple sortie courses dans ce quartier peut être une bouffée d'air : les produits de chez soi, la langue de chez soi, les odeurs de chez soi. Beaucoup de familles franco-vietnamiennes d'Île-de-France en font leur sortie rituelle du week-end — on fait le plein de nước mắm, de légumes-feuilles introuvables ailleurs et de bánh mì, et on repart rechargé pour la semaine.</p>

    <p>Le même phénomène existe à plus petite échelle à Lyon (Guillotière), Marseille, Toulouse ou Bordeaux : cherche le supermarché asiatique principal de la ville, et tu as trouvé le centre de gravité de la communauté locale.</p>

    <h3>Cours de langue</h3>
    <p>Pour un(e) Français(e) qui souhaite apprendre le vietnamien afin de mieux communiquer avec la famille de son ou sa conjoint(e), plusieurs options existent : cours particuliers via des plateformes de mise en relation (Italki, Preply), cours en présentiel dans les sections UGVF, et certaines universités (INALCO à Paris propose un cursus vietnamien). J'ai détaillé mes méthodes dans <a href="apprendre-vietnamien-couple">apprendre le vietnamien en couple</a>.</p>

    <h3>Les pagodes vietnamiennes</h3>
    <p>On n'y pense pas toujours quand on raisonne « associations », mais les pagodes de la diaspora sont des lieux de communauté majeurs — y compris pour des personnes peu pratiquantes. On y célèbre le Têt, les grandes fêtes bouddhiques, les cérémonies familiales, et on y croise toutes les générations de la communauté. La région parisienne compte plusieurs pagodes vietnamiennes importantes (dont la pagode Khánh Anh à Évry, l'une des plus grandes d'Europe), et la plupart des grandes villes françaises ont la leur. Si ta belle-famille est bouddhiste, accompagner ton ou ta conjoint(e) à la pagode locale est aussi un signal fort envoyé à la famille restée au pays.</p>

    <h2 id="section-fle">Dans l'autre sens : le français de ton conjoint</h2>

    <p>Le réseau vietnamien est vital, mais l'autonomie en France passe par le français. Bonne nouvelle : c'est un des volets les mieux structurés de l'intégration en France.</p>

    <ul>
      <li><strong>Les formations OFII (Contrat d'Intégration Républicaine).</strong> À l'arrivée avec un visa long séjour conjoint, ton ou ta partenaire signera un CIR auprès de l'OFII, avec un positionnement linguistique. Si le niveau est en dessous du seuil, des <strong>cours de français gratuits sont prescrits</strong> — c'est un droit, pas une option payante. Prends ces heures au sérieux : elles comptent aussi pour la suite du parcours (renouvellements, <a href="naturalisation-conjoint-vietnamien">naturalisation</a>).</li>
      <li><strong>Les associations locales de FLE.</strong> Dans presque chaque ville, des associations et centres sociaux proposent des ateliers de français pour adultes étrangers, gratuits ou presque, souvent avec des bénévoles. L'ambiance y est bienveillante et c'est un deuxième cercle social en soi — beaucoup de conjoints y rencontrent d'autres personnes exactement dans leur situation.</li>
      <li><strong>Le duo gagnant au quotidien :</strong> une base structurée (cours OFII ou associatifs) + de la pratique réelle sans enjeu (marché, bibliothèque municipale, bénévolat). Et une règle pour toi : résiste à l'envie de répondre à sa place quand quelqu'un lui pose une question. C'est frustrant trente secondes, c'est formateur pour toujours.</li>
    </ul>

    <h2 id="section-tet">Vivre le Têt en France</h2>

    <p>Le Nouvel An lunaire est LE moment de l'année où l'éloignement pèse le plus — c'est l'équivalent émotionnel de passer Noël seul à l'autre bout du monde. C'est aussi le moment où le réseau associatif prend tout son sens : les sections UGVF, les pagodes et les mairies des villes à forte communauté organisent des célébrations publiques, avec danse de la licorne, bánh chưng et lì xì pour les enfants. À Paris, le défilé du 13e arrondissement attire chaque année des dizaines de milliers de personnes.</p>

    <p>Mon conseil de couple mixte : ne considère jamais le Têt comme « une fête en option ». Bloque la date (elle change chaque année, entre fin janvier et mi-février), prévois l'appel vidéo avec la famille au Vietnam au bon moment — l'heure du réveillon là-bas, pas la tienne — et participe à au moins un événement communautaire local. J'ai raconté nos propres rituels dans <a href="tet-nouvel-an-lunaire-vietnam">l'article dédié au Têt</a>.</p>

    <h2 id="section-comparatif">UGVF, AAFV ou groupes informels : par quoi commencer ?</h2>

    <p>Si tu ne devais retenir qu'une grille de lecture, la voici :</p>

    <div class="table-wrap">
    <table>
      <thead>
        <tr>
          <th>Besoin</th>
          <th>Meilleure porte d'entrée</th>
          <th>Pourquoi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Réseau social pour un conjoint fraîchement arrivé</td>
          <td>Section UGVF locale + groupes Zalo</td>
          <td>Activités régulières en vietnamien, contacts immédiats, entraide concrète du quotidien</td>
        </tr>
        <tr>
          <td>Cours de vietnamien pour les enfants</td>
          <td>Écoles Măng Non / Về Nguồn (UGVF)</td>
          <td>Structure pédagogique établie, socialisation entre enfants de la diaspora</td>
        </tr>
        <tr>
          <td>Question pratique urgente (logement, artisan, épicerie…)</td>
          <td>Groupes Facebook et Zalo locaux</td>
          <td>Réactivité imbattable, réponses en vietnamien dans l'heure</td>
        </tr>
        <tr>
          <td>Engagement dans les relations France-Vietnam, mémoire, solidarité</td>
          <td>AAFV</td>
          <td>Association bilatérale historique, actions de fond, revue et colloques</td>
        </tr>
        <tr>
          <td>Fêtes traditionnelles et cérémonies familiales</td>
          <td>Pagode vietnamienne la plus proche</td>
          <td>Lieu communautaire intergénérationnel, ouvert au-delà de la pratique religieuse</td>
        </tr>
      </tbody>
    </table>
    </div>

    <p>Un mot aussi sur <strong>l'inscription consulaire vietnamienne</strong> : en parallèle du réseau associatif, ton ou ta conjoint(e) peut se faire connaître de l'ambassade du Vietnam en France (Paris). C'est utile pour le renouvellement du passeport vietnamien, les documents d'état civil vietnamiens à distance, et pour être informé des événements officiels de la communauté. Ce n'est pas une démarche obligatoire, mais elle simplifie les formalités vietnamiennes qui continueront d'exister même en vivant en France — d'autant plus si vous prévoyez des allers-retours réguliers ou une <a href="enfant-couple-franco-vietnamien-nationalite">double nationalité pour vos enfants</a>.</p>

    <h2 id="section-sans-asso">Et s'il n'y a rien dans ta ville ?</h2>

    <p>Tous les lecteurs de ce blog ne vivent pas à Paris ou Lyon. Si tu es dans une ville moyenne sans section UGVF ni communauté visible, voici le plan B qui fonctionne :</p>

    <ul>
      <li><strong>Zalo d'abord.</strong> Cherche les groupes « Người Việt tại [région] » — il en existe pour à peu près chaque coin de France, même rural. C'est là que ton ou ta conjoint(e) trouvera les Vietnamiens « invisibles » de la région.</li>
      <li><strong>L'épicerie asiatique la plus proche</strong> est un annuaire vivant : qui vit où, qui coiffe, qui cuisine pour les mariages, quand a lieu la prochaine fête. Une conversation à la caisse vaut tous les moteurs de recherche.</li>
      <li><strong>Élargis à la communauté asiatique.</strong> Dans les petites villes, les communautés vietnamienne, laotienne, cambodgienne et chinoise se mélangent volontiers — les associations « Asie » généralistes et leurs fêtes sont des points d'entrée très accueillants.</li>
      <li><strong>Créez le rendez-vous vous-mêmes.</strong> Un repas de Têt ouvert organisé chez vous ou dans une salle municipale suffit parfois à faire émerger une communauté qui ne s'était jamais croisée. C'est comme ça que naissent la moitié des amicales locales.</li>
    </ul>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="warning-box">
      Les informations de contact et les activités des associations peuvent évoluer. Vérifie toujours sur le site officiel avant de te déplacer ou de prendre contact.
    </div>

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
$current_slug = 'associations-franco-vietnamiennes-france';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
