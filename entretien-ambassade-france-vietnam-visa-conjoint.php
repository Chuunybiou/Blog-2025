<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Entretien à l\'ambassade de France au Vietnam pour visa conjoint : comment se préparer';
$page_description = 'L\'ambassade de France peut convoquer ton conjoint vietnamien à un entretien avant de délivrer le visa long séjour. Voici ce qu\'il faut préparer pour maximiser les chances de succès.';
$page_canonical   = SITE_URL . '/entretien-ambassade-france-vietnam-visa-conjoint';
$page_og_title    = 'Entretien ambassade France Vietnam pour visa conjoint : se préparer en 2026';
$page_og_desc     = 'Quelles questions pose l\'ambassade ? Comment préparer son conjoint ? Quelles preuves rassembler ? Guide complet pour l\'entretien visa.';
$page_og_url      = SITE_URL . '/entretien-ambassade-france-vietnam-visa-conjoint';
$page_og_image    = 'https://images.unsplash.com/photo-1560472355-109703aa3edc?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Entretien à l\'ambassade de France au Vietnam pour visa conjoint : comment se préparer',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/entretien-ambassade-france-vietnam-visa-conjoint',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vivre ensemble : ici ou là-bas',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'jade';
$article_hero_bg      = '#1a3a2a';
$article_glow         = 'rgba(27,107,82,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Vivre ensemble';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vivre-ensemble';
$page_faq = [
  ['q' => 'Est-ce que l\'entretien est systématique pour les conjoints vietnamiens ?',
   'a' => 'Non, il n\'est pas automatique mais il est fréquent. L\'ambassade de France au Vietnam convoque notamment les demandeurs dont le dossier présente des points à éclaircir ou pour lesquels la réalité de la vie commune mérite d\'être vérifiée.'],
  ['q' => 'Dans quelle langue se déroule l\'entretien ?',
   'a' => 'En français ou en anglais selon le niveau du demandeur. L\'entretien peut également se dérouler partiellement en vietnamien. Un interprète peut être autorisé — renseigne-toi auprès de l\'ambassade au moment de la convocation.'],
  ['q' => 'Mon conjoint peut-il être accompagné lors de l\'entretien ?',
   'a' => 'En général non : l\'entretien est individuel et le conjoint français n\'est pas admis. L\'objectif est de vérifier la sincérité du mariage en posant des questions séparément aux deux époux si nécessaire.'],
  ['q' => 'Que se passe-t-il si mon conjoint répond mal à une question ?',
   'a' => 'Une seule réponse erronée ne suffit pas à justifier un refus. L\'agent évalue l\'ensemble de l\'entretien et du dossier. Ce qui compte, c\'est la cohérence globale et la sincérité perçue.'],
  ['q' => 'Une grande différence d\'âge peut-elle faire refuser le visa ?',
   'a' => 'Non, pas en soi — la différence d\'âge n\'est pas un motif légal de refus. Elle fait simplement partie des profils que l\'administration regarde de plus près. Un dossier bien documenté (relation dans la durée, rencontres physiques répétées, communication régulière) neutralise complètement ce point.'],
  ['q' => 'Mon conjoint doit-il parler français pour obtenir le visa ?',
   'a' => 'Non, aucun niveau de français n\'est exigé pour le visa long séjour conjoint de Français. La question de la langue arrive plus tard, à l\'arrivée en France, avec le test de positionnement de l\'OFII et les éventuelles formations linguistiques gratuites du CIR. En entretien, ce qui compte est d\'expliquer honnêtement comment vous communiquez.'],
  ['q' => 'Combien de temps entre le refus et le recours ?',
   'a' => 'Deux délais de deux mois à ne jamais laisser passer : deux mois après la notification du refus pour saisir la Commission de recours (CRRV) à Nantes, puis, en cas de rejet explicite ou implicite de la commission, deux mois pour saisir le tribunal administratif de Nantes. Ces délais sont stricts — c\'est la seule erreur vraiment irréversible du parcours.'],
];
$page_lang_switch = ['href' => 'vi/phong-van-visa-vo-chong-phap', 'label' => '🇻🇳 Tiếng Việt', 'title' => 'Bản tiếng Việt'];
$page_hreflang = [
  'fr'        => SITE_URL . '/entretien-ambassade-france-vietnam-visa-conjoint',
  'vi'        => SITE_URL . '/vi/phong-van-visa-vo-chong-phap',
  'x-default' => SITE_URL . '/entretien-ambassade-france-vietnam-visa-conjoint',
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=vivre-ensemble">Vivre ensemble</a><span class="breadcrumb-sep">›</span>
      <a href="faire-venir-conjointe-vietnamienne-france">Conjoint vietnamien en France</a><span class="breadcrumb-sep">›</span>
      <span>Entretien ambassade</span>
    </div>
    <span class="article-badge-hero">Vivre ensemble</span>
    <h1>Entretien à l'ambassade de France au Vietnam pour visa conjoint : se préparer efficacement</h1>
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
      <li><a href="#section-1">Pourquoi l'ambassade convoque ?</a></li>
      <li><a href="#section-2">Comment se préparer</a></li>
      <li><a href="#section-3">Les questions types posées</a></li>
      <li><a href="#section-4">Les preuves à apporter</a></li>
      <li><a href="#section-5">Le jour de l'entretien</a></li>
      <li><a href="#section-6">Après l'entretien</a></li>
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
    <p><strong>La convocation à l'entretien à l'ambassade fait souvent peur.</strong> C'est normal — c'est l'étape où tu as le moins de contrôle direct. Pourtant, si votre mariage est sincère et votre dossier solide, cet entretien ne devrait pas poser de problème. Ce guide te dit exactement comment préparer ton conjoint pour qu'il arrive confiant et bien préparé.</p>

    <p>Cet article fait partie du <a href="faire-venir-conjointe-vietnamienne-france">guide complet : faire venir son conjoint vietnamien en France</a>.</p>

    <h2 id="section-1">Pourquoi l'ambassade organise-t-elle un entretien ?</h2>
    <p>Le visa "conjoint de Français" est une voie d'installation régulière très demandée. L'ambassade est chargée de vérifier que le mariage est bien réel et non de convenance — un mariage de convenance étant défini comme un mariage contracté dans le seul but d'obtenir un droit au séjour, sans vie commune réelle.</p>
    <p>L'entretien permet à l'agent consulaire :</p>
    <ul>
      <li>De s'assurer que les deux époux se connaissent vraiment</li>
      <li>De vérifier la cohérence du récit de votre relation</li>
      <li>D'évaluer le projet de vie commun en France</li>
      <li>De détecter d'éventuelles incohérences avec le dossier écrit</li>
    </ul>
    <p>Attention : l'entretien n'est pas systématique. Il est convoqué selon le profil du dossier.</p>

    <h3>Comment raisonne l'agent consulaire : le faisceau d'indices</h3>

    <p>Il faut comprendre une chose pour dédramatiser : l'agent ne cherche pas LA question piège qui fera tout basculer. Il évalue un <strong>faisceau d'indices</strong> — la cohérence globale entre ce que dit ton conjoint, ce que dit le dossier écrit, et ce qui est vérifiable. Certains profils de dossiers attirent mécaniquement plus d'attention :</p>

    <ul>
      <li>Une relation très récente au moment du mariage (quelques mois entre la rencontre et la cérémonie)</li>
      <li>Peu ou pas de rencontres physiques avant le mariage</li>
      <li>Une grande différence d'âge</li>
      <li>L'absence apparente de langue commune entre les époux</li>
      <li>Des antécédents administratifs (précédente demande refusée, précédent mariage avec un ressortissant étranger…)</li>
    </ul>

    <p>Sois clair là-dessus : <strong>cocher une de ces cases ne signifie pas un refus</strong> — des milliers de couples parfaitement sincères cochent l'une ou l'autre. Ça signifie simplement que votre dossier sera regardé de plus près, et donc que votre préparation documentaire doit être plus soignée. Un couple avec 15 ans d'écart et trois ans de relation documentée par des dizaines de photos, de billets d'avion et de conversations quotidiennes n'a rien à craindre d'un entretien.</p>

    <h3>Le sujet sensible : la langue commune</h3>

    <p>C'est une question quasi certaine, et elle mérite une réponse honnête préparée en couple : <em>« comment communiquez-vous ? »</em>. Beaucoup de couples franco-vietnamiens fonctionnent avec un mélange — un peu d'anglais, un peu de français, un peu de vietnamien, et oui, parfois une application de traduction pour les sujets complexes. <strong>Dis-le tel que c'est.</strong> Un agent comprend très bien qu'un couple réel communique imparfaitement ; ce qui l'alerte, c'est un couple qui prétend parler couramment une langue commune et qui se contredit sur ce point. Si ton conjoint apprend le français (cours à l'Institut Français, applications, <a href="apprendre-vietnamien-couple">et toi le vietnamien</a>), mentionnez-le : l'effort d'apprentissage mutuel est un signal de projet de vie sincère.</p>

    <div style="background:linear-gradient(135deg,#0d2b1f,#1b4a35);border-radius:10px;padding:1.5rem 2rem;margin:1.5rem 0;display:flex;align-items:center;justify-content:space-between;gap:1.5rem;flex-wrap:wrap">
      <div>
        <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#6ee7b7;margin-bottom:0.4rem">📅 Outil interactif</div>
        <h3 style="font-family:'DM Serif Display',serif;font-size:1.05rem;color:#faf8f4;margin-bottom:0.25rem">Rétroplanning — de la CCAM au visa</h3>
        <p style="font-size:0.87rem;color:rgba(250,248,244,0.55);margin:0">Planifiez vos démarches pour ne rien rater avant l'entretien</p>
      </div>
      <a href="retroplanning-faire-venir-conjoint" style="flex-shrink:0;display:inline-flex;align-items:center;gap:0.5rem;padding:0.7rem 1.4rem;background:#4db890;color:#0d2b1f;border-radius:5px;font-weight:700;font-size:0.87rem;text-decoration:none;white-space:nowrap">Voir le simulateur →</a>
    </div>

    <h2 id="section-2">Comment préparer ton conjoint à l'entretien</h2>
    <p>La meilleure préparation, c'est la sincérité — mais ça ne suffit pas. Il faut que ton conjoint connaisse les informations de base sur toi, sur vous, et sur le projet commun. Voici ce qu'il doit maîtriser :</p>
    <ul>
      <li><strong>Ta situation en France</strong> : où tu habites exactement, dans quel logement, depuis quand, si tu travailles ou non</li>
      <li><strong>L'histoire de votre rencontre</strong> : comment vous vous êtes rencontrés, quand, à quelle occasion</li>
      <li><strong>Les dates clés de votre relation</strong> : premier voyage ensemble, demande en mariage, date du mariage civil</li>
      <li><strong>Le projet en France</strong> : dans quelle ville elle va s'installer, les proches qui seront là, ce qu'elle envisage de faire professionnellement</li>
      <li><strong>Ta famille</strong> : qui sont tes parents, as-tu des frères et sœurs, les connaît-il/elle ?</li>
    </ul>

    <h2 id="section-3">Questions types posées lors de l'entretien</h2>
    <p>Ces questions sont compilées à partir de retours de couples franco-vietnamiens — elles ne sont pas officielles et peuvent varier.</p>

    <div style="overflow-x:auto;border-radius:10px;border:1px solid rgba(77,200,160,0.18);margin:1.5rem 0;">
    <table style="width:100%;border-collapse:collapse;font-size:0.9rem;">
      <thead>
        <tr style="background:rgba(27,107,82,0.25);">
          <th style="padding:0.7rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;width:28%;">THÈME</th>
          <th style="padding:0.7rem 1rem;text-align:left;color:#4dc8a0;font-size:0.7rem;letter-spacing:1.5px;font-weight:700;">QUESTIONS POSSIBLES</th>
        </tr>
      </thead>
      <tbody>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">Votre rencontre</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Comment vous vous êtes rencontrés ? Quand ? Où ? Par l'intermédiaire de qui ?</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">Votre relation</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Depuis combien de temps êtes-vous ensemble ? Combien de fois vous êtes-vous vus en personne ?</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">Votre conjoint</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Où est-il né ? Que fait-il dans la vie ? Combien gagne-t-il environ ? Où habite-t-il ?</td>
        </tr>
        <tr style="background:rgba(255,255,255,0.02);border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">Le mariage</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Qui a fait la demande en mariage ? Où et quand a eu lieu le mariage ?</td>
        </tr>
        <tr style="border-bottom:1px solid rgba(250,248,244,0.06);">
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">La vie en France</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Où allez-vous habiter ? Vous a-t-il déjà présenté à sa famille ?</td>
        </tr>
        <tr>
          <td style="padding:0.75rem 1rem;font-weight:600;font-size:0.87rem;color:#4dc8a0;">Le futur</td>
          <td style="padding:0.75rem 1rem;font-size:0.87rem;opacity:0.85;">Qu'est-ce que vous comptez faire en France ? Avez-vous des projets d'enfants ?</td>
        </tr>
      </tbody>
    </table>
    </div>

    <div class="tip-box">
      <strong>Ne récitez pas un script.</strong> Les agents sont formés pour repérer les réponses mémorisées. Préparez les faits, pas les réponses mot pour mot. La fluidité naturelle vaut mieux que la précision mécanique.
    </div>

    <h3>La méthode de préparation qui marche : l'album de vie</h3>

    <p>Plutôt que de bachoter des listes de dates, faites ensemble un exercice simple et même agréable : <strong>reconstituez la chronologie de votre histoire avec les documents à l'appui</strong>. Ouvrez vos photos, vos billets d'avion, vos conversations, et remontez le fil : la première conversation, le premier appel vidéo, le premier voyage, la rencontre avec chaque famille, la demande, le mariage. Notez les dates au fur et à mesure.</p>

    <p>Cet exercice a un double effet. D'abord, il produit naturellement le dossier de preuves à apporter (voir section suivante), déjà organisé chronologiquement. Ensuite — et c'est le plus important — il <strong>rafraîchit la mémoire des deux</strong> sur les mêmes événements. La plupart des « incohérences » relevées en entretien ne sont pas des mensonges : ce sont deux mémoires sincères qui datent différemment le même souvenir. Une soirée à refaire l'album ensemble élimine ce risque mieux que n'importe quel coaching.</p>

    <p>Termine par une répétition légère : pose à ton conjoint les questions du tableau ci-dessus, une fois, sans pression, plutôt en conversation qu'en interrogatoire. Si une réponse hésite, ce n'est pas grave — c'est l'occasion d'en reparler naturellement. Et arrête-toi là : sur-préparer produit exactement l'effet récité que les agents repèrent.</p>

    <h3>Les erreurs qui desservent un dossier sincère</h3>

    <ul>
      <li><strong>Le sur-coaching.</strong> Des réponses trop parfaites, débitées sans réfléchir, dans le même ordre que le dossier écrit : c'est le signal d'alarme n°1. Un vrai couple hésite sur une date, se corrige, sourit — c'est humain et c'est crédible.</li>
      <li><strong>Les réseaux sociaux incohérents.</strong> Les informations publiquement accessibles font partie du paysage. Un profil Facebook public qui raconte une autre histoire que le dossier (statut « célibataire », photos contradictoires…) crée des questions inutiles. Faites un tour de vos profils publics avant l'entretien.</li>
      <li><strong>Minimiser ou embellir des faits vérifiables.</strong> Sur les points factuels (précédents mariages, refus de visa antérieurs, situation professionnelle), la transparence totale est la seule stratégie : ces informations sont dans les systèmes, les taire coûte bien plus cher que les assumer.</li>
      <li><strong>Improviser la logistique.</strong> Arriver juste à l'heure, sans la convocation imprimée, téléphone déchargé avec les preuves dedans… Le stress logistique s'ajoute au stress de l'entretien. Repérage du lieu la veille, documents imprimés en double, arrivée très en avance.</li>
    </ul>

    <h2 id="section-4">Les preuves de vie commune à apporter</h2>
    <p>Ton conjoint peut apporter un dossier de preuves de votre vie commune pour appuyer l'entretien. Ces preuves ne sont pas toujours demandées mais elles renforcent la crédibilité :</p>
    <ul>
      <li><strong>Photos</strong> : ensemble en différents lieux et différentes occasions (voyages, repas de famille, activités quotidiennes)</li>
      <li><strong>Billets d'avion</strong> : preuve de tes séjours au Vietnam et des siens éventuels</li>
      <li><strong>Captures d'écran de conversations</strong> (WhatsApp, Zalo…) sur une longue période</li>
      <li><strong>Preuves de transferts d'argent</strong> si vous vous êtes soutenus financièrement</li>
      <li><strong>Lettres ou emails</strong> échangés</li>
      <li><strong>Témoignages</strong> écrits de proches qui vous ont vus ensemble (valeur indicative — non officiellement requis mais peuvent renforcer le dossier)</li>
    </ul>

    <h2 id="section-5">Le déroulement du jour de l'entretien</h2>
    <p>Ton conjoint se présente à l'ambassade (Hanoï) ou au consulat général (Hô Chi Minh-Ville) à l'heure indiquée sur la convocation. Il faut généralement arriver <strong>en avance</strong> car les procédures de sécurité à l'entrée prennent du temps : contrôle des sacs, dépôt du téléphone dans certains cas, files d'attente aux heures d'affluence. Si ton conjoint vient de province, prévoyez l'arrivée la veille et une nuit sur place plutôt qu'un trajet de nuit suivi d'un entretien au saut du bus — la fatigue se voit et se ressent dans les réponses.</p>
    <p>À apporter le jour J :</p>
    <ul>
      <li>La convocation originale</li>
      <li>Le passeport</li>
      <li>Le dossier de demande de visa complet (au cas où des documents supplémentaires seraient demandés)</li>
      <li>Le dossier de preuves de vie commune</li>
    </ul>
    <p>L'entretien lui-même dure généralement entre 15 et 45 minutes. L'agent peut demander à voir certains documents apportés.</p>

    <h3>Et toi, le conjoint français, pendant ce temps ?</h3>

    <p>Tu ne seras probablement pas dans la salle — mais tu as un rôle avant et après. <strong>Avant :</strong> sois joignable pendant tout le créneau de l'entretien. Il arrive que l'administration souhaite vérifier un élément auprès du conjoint français, parfois par téléphone, parfois en te posant les mêmes questions séparément pour croiser les réponses — c'est même le principe de base de la vérification de communauté de vie. Si tu es en France, garde ton téléphone chargé et sous la main aux heures vietnamiennes de l'entretien (rappel : 5 à 6 heures d'avance sur la France selon la saison — un entretien à 9h à Hanoï, c'est 3h ou 4h du matin pour toi).</p>

    <p><strong>Après :</strong> débriefez à chaud, mais sans dramatiser. Ton conjoint sortira avec des doutes sur telle ou telle réponse — c'est universel, tout le monde ressort d'un entretien administratif en refaisant le match. Note ensemble les questions posées pendant qu'elles sont fraîches : si le dossier devait faire l'objet d'une demande complémentaire ou d'un recours, ce compte-rendu à chaud vaudra de l'or.</p>

    <h2 id="section-6">Après l'entretien</h2>
    <p>L'agent ne donne pas de réponse immédiate à l'issue de l'entretien. Le dossier repart en instruction et la décision (accord ou refus) est notifiée dans les semaines suivantes. Cette période d'attente est éprouvante — c'est celle où l'on n'a plus aucune prise sur le dossier. Deux conseils pour la traverser : ne bombardez pas l'ambassade de relances la première semaine (ça n'accélère rien), et fixez-vous ensemble un jalon raisonnable — par exemple, pas de relance avant un mois sans nouvelles, puis un courriel courtois de demande d'état d'avancement avec le numéro de dossier.</p>
    <p>Si le visa est accordé : ton conjoint récupère son passeport avec le visa auprès de VFS Global (en personne ou en le faisant envoyer par courrier sécurisé). Si le visa est refusé : un recours est possible. → Voir <a href="visa-long-sejour-conjoint-vietnamien-france">notre article sur les recours en cas de refus de visa</a>.</p>

    <h3>En cas de refus : la voie de recours, étape par étape</h3>

    <p>Un refus n'est pas la fin du parcours — surtout pour un visa de conjoint de Français, catégorie sur laquelle l'administration a une marge d'appréciation limitée quand le mariage est valablement transcrit. Le circuit de contestation, dans l'ordre :</p>

    <ul>
      <li><strong>Demander les motifs.</strong> Le refus de visa à un conjoint de Français doit être motivé. Comprendre le motif exact (doute sur la sincérité du mariage ? pièce manquante ? autre ?) détermine toute la stratégie de recours.</li>
      <li><strong>La Commission de recours contre les décisions de refus de visa (CRRV)</strong>, basée à Nantes : c'est le passage obligé avant tout recours au tribunal. Le recours doit lui être adressé dans les <strong>deux mois</strong> suivant la notification du refus. C'est un recours écrit — c'est là que le dossier de preuves constitué pour l'entretien ressert, complété de tout élément nouveau.</li>
      <li><strong>Le tribunal administratif de Nantes</strong>, compétent pour tout le contentieux des visas : si la CRRV rejette (ou ne répond pas dans les deux mois, ce qui vaut rejet implicite), tu peux saisir le tribunal dans un nouveau délai de deux mois.</li>
      <li><strong>L'avocat spécialisé :</strong> pas obligatoire devant la CRRV, vivement conseillé au stade du tribunal. Pour un dossier de conjoint sincère et documenté, ces recours aboutissent régulièrement — ne laisse jamais passer les délais de deux mois, c'est la seule erreur irréversible.</li>
    </ul>

    <p>Et parfois, la voie la plus rapide n'est pas le contentieux : si le refus tient à une pièce faible ou à un malentendu identifiable, <strong>redéposer une demande mieux documentée</strong> peut aboutir plus vite qu'un recours. Les deux voies ne s'excluent pas.</p>

    <?php
    $page_sources = [
      ['label' => 'France-Visas — site officiel des visas pour la France', 'url' => 'https://france-visas.gouv.fr'],
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
Français marié à une Vietnamienne, installé à Hanoï. Je partage notre parcours : démarches administratives, mariage franco-vietnamien, vie de couple mixte.
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
$current_slug = 'entretien-ambassade-france-vietnam-visa-conjoint';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
