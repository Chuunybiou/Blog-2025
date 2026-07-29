<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'PACS avec un(e) Vietnamien(ne) : reconnaissance en France et au Vietnam 2026';
$page_description = 'Le PACS avec un(e) partenaire vietnamien(ne) est possible mais limité. Il ne donne pas droit au visa conjoint en France. Voici ce que le PACS permet et ne permet pas en 2026.';
$page_canonical   = SITE_URL . '/pacs-vietnamienne-reconnaissance';
$page_og_title    = 'PACS avec un(e) Vietnamien(ne) : ce que ça change (et ne change pas) en 2026';
$page_og_desc     = 'PACS et conjoint vietnamien : droits en France, reconnaissance au Vietnam, alternatives au PACS pour l\'installation.';
$page_og_url      = SITE_URL . '/pacs-vietnamienne-reconnaissance';
$page_og_image    = 'https://images.unsplash.com/photo-1529636798458-92182e662485?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'PACS avec un(e) Vietnamien(ne) : reconnaissance en France et au Vietnam 2026',
  'datePublished'   => '2026-08-25',
  'dateModified'    => '2026-08-25',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/pacs-vietnamienne-reconnaissance',
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
  ['q' => 'Le PACS permet-il d\'obtenir un visa pour faire venir son/sa partenaire vietnamien(ne) en France ?',
   'a' => 'Non. Le PACS ne donne pas droit au visa "conjoint de Français". Pour qu\'un partenaire vietnamien puisse s\'installer en France par voie familiale, le mariage est la seule voie. Le PACS peut faciliter certains dossiers (concubinage notoire) mais ne crée pas de droit au séjour.'],
  ['q' => 'Le PACS est-il reconnu au Vietnam ?',
   'a' => 'Non. Le droit vietnamien ne reconnaît pas le PACS ni aucun équivalent. Côté vietnamien, votre relation n\'a pas de statut légal particulier. Cela peut poser des problèmes pratiques notamment pour les droits de succession ou l\'autorité parentale.'],
  ['q' => 'Peut-on se pacser et se marier ensuite pour régulariser la situation ?',
   'a' => 'Oui. Certains couples commencent par un PACS côté français pour ses avantages fiscaux (imposition commune en France), puis se marient ensuite pour les droits migratoires. Bonne nouvelle : si vous vous mariez ensemble, aucune dissolution préalable n\'est nécessaire — le mariage dissout automatiquement le PACS.'],
  ['q' => 'Peut-on conclure un PACS au Vietnam, au consulat de France ?',
   'a' => 'Oui, dès lors qu\'au moins un des deux partenaires est français. L\'enregistrement se fait auprès de l\'ambassade de France à Hanoï ou du consulat général à Hô Chi Minh-Ville, sur rendez-vous, les deux partenaires présents. Ce PACS ne produit ses effets qu\'en droit français : il ne crée aucun statut vis-à-vis des autorités vietnamiennes.'],
  ['q' => 'Le PACS permet-il d\'obtenir un visa TT ou une carte de séjour au Vietnam ?',
   'a' => 'Non. Le visa TT et la carte de séjour temporaire (TRC) au titre du regroupement familial exigent un certificat de mariage reconnu par les autorités vietnamiennes. Le PACS n\'ayant aucune existence en droit vietnamien, un partenaire pacsé reste sur les solutions individuelles : exemption de 45 jours, e-visa de 90 jours ou visa lié à un emploi.'],
  ['q' => 'Un PACS aide-t-il pour une demande de visa Schengen court séjour ?',
   'a' => 'Indirectement, oui : il documente une relation stable et sérieuse, ce qui crédibilise une demande de visa visiteur. Mais il ne crée aucun droit : la demande reste examinée selon les critères habituels du court séjour (motif, ressources, garanties de retour), et un refus reste possible.'],
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
      <span>PACS avec un(e) Vietnamien(ne)</span>
    </div>
    <span class="article-badge-hero">Couple Mixte</span>
    <h1>PACS avec un(e) Vietnamien(ne) : ce que ça change (et ne change pas) en 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Août 2026</span>
      <span>⏱ 15 min de lecture</span>
      <span>Mis &agrave; jour : Ao&ucirc;t 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Ce que le PACS permet en France</a></li>
      <li><a href="#section-2">Ce que le PACS ne permet pas</a></li>
      <li><a href="#section-3">Le PACS est-il reconnu au Vietnam ?</a></li>
      <li><a href="#section-4">Comment conclure un PACS avec un(e) Vietnamien(ne)</a></li>
      <li><a href="#section-consulat">Se pacser depuis le Vietnam : le consulat</a></li>
      <li><a href="#section-dissolution">Dissoudre un PACS (et passer au mariage)</a></li>
      <li><a href="#section-5">PACS ou mariage : quelle stratégie ?</a></li>
      <li><a href="#section-6">Le concubinage notoire comme alternative</a></li>
      <li><a href="#section-erreurs">Les erreurs fréquentes</a></li>
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
    <p><strong>La question du PACS avec un(e) partenaire vietnamien(ne) mérite une réponse claire : le PACS donne des droits en France, mais pas celui de faire venir son/sa partenaire s'installer.</strong> Pour beaucoup de couples franco-vietnamiens, c'est la révélation qui les pousse finalement à se marier. Ce guide t'explique exactement ce que le PACS change — et ce qu'il ne change pas — des deux côtés de la relation : en droit français et en droit vietnamien.</p>

    <p>Pourquoi ce sujet revient-il si souvent ? Parce que le PACS a une image de « mariage light » : plus simple, plus rapide, moins engageant. Pour un couple de deux Français, c'est souvent vrai. Pour un couple mixte franco-vietnamien, la logique est différente : les deux enjeux majeurs — le droit au séjour en France et la reconnaissance de l'union au Vietnam — passent tous les deux par le mariage, pas par le PACS. Comprendre cette limite dès le départ évite de construire un projet de vie sur une base juridique qui ne le portera pas.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1529636798458-92182e662485?w=1200&q=80" alt="Couple partenariat civil PACS" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Ce que le PACS permet en France</h2>
    <p>En France, le PACS entre un Français et un(e) ressortissant(e) étranger(ère) crée des effets juridiques :</p>
    <ul>
      <li><strong>Régime fiscal commun</strong> : imposition commune pour les impôts français — potentiellement avantageux</li>
      <li><strong>Droits de succession</strong> : les partenaires pacsés sont <strong>totalement exonérés de droits de succession</strong> (art. 796-0 bis du CGI, depuis la loi TEPA du 21 août 2007). Attention : contrairement aux époux mariés, les partenaires pacsés n'héritent pas automatiquement — un testament est indispensable pour protéger le survivant</li>
      <li><strong>Certaines prestations sociales</strong> : la CAF prend en compte les ressources du partenaire même étranger</li>
      <li><strong>Protection du logement commun</strong> : si vous vivez ensemble en France</li>
      <li><strong>Prise en compte pour certains dossiers administratifs</strong> : mutuelles, certaines banques</li>
    </ul>

    <h3>L'imposition commune : le vrai avantage… à double tranchant</h3>
    <p>Dès l'année de conclusion du PACS, vous faites une déclaration de revenus commune (avec une option possible pour deux déclarations séparées la première année). Si vos revenus sont très différents — cas fréquent quand l'un des deux vient d'arriver en France et ne travaille pas encore —, le quotient conjugal peut faire baisser sensiblement l'impôt du foyer. C'est l'avantage concret le plus immédiat du PACS pour un couple mixte vivant en France.</p>
    <p>Mais l'imposition commune a un revers dont on parle moins : <strong>les prestations sociales sont calculées sur les ressources du couple</strong>. Un(e) partenaire qui touchait des APL ou une prime d'activité en tant que célibataire peut les voir baisser ou disparaître une fois pacsé(e), puisque les revenus de l'autre entrent dans le calcul. Avant de signer, faites une simulation des deux côtés : impôts ET prestations. Le PACS crée aussi une <strong>solidarité pour les dettes de la vie courante</strong> (loyer, dépenses du ménage) — un engagement réel, même s'il est plus limité que celui du mariage.</p>

    <h3>Succession : l'exonération ne suffit pas, il faut un testament</h3>
    <p>Le point qui piège le plus de couples pacsés : l'exonération de droits de succession ne sert à rien si le partenaire survivant n'hérite de rien. Contrairement aux époux, <strong>les partenaires de PACS ne sont pas héritiers l'un de l'autre par défaut</strong>. Sans testament, en cas de décès, c'est la famille du défunt (parents, frères et sœurs) qui hérite — le/la partenaire pacsé(e) peut se retrouver sans rien, y compris devoir quitter le logement à terme. Si vous vous pacsez, prenez rendez-vous chez un notaire pour un testament dans la foulée. C'est encore plus important dans un couple mixte, où la famille du défunt peut vivre à des milliers de kilomètres et ne pas connaître le/la partenaire.</p>

    <h2 id="section-2">Ce que le PACS ne permet pas</h2>
    <p>C'est là où beaucoup de couples sont surpris :</p>
    <ul>
      <li><strong>Le PACS ne donne pas droit au visa "conjoint de Français"</strong> pour faire venir son/sa partenaire en France</li>
      <li>Le PACS ne confère pas le statut de "conjoint de Français" au regard du droit des étrangers</li>
      <li>Il ne donne pas accès au regroupement familial</li>
      <li>Il ne remplace pas le mariage pour la plupart des démarches migratoires</li>
    </ul>
    <p>Pourquoi cette limite ? Parce que le droit au séjour des étrangers en France repose sur des catégories précises, et que la catégorie « conjoint de Français » — celle qui ouvre le visa long séjour et la carte de séjour correspondante — vise exclusivement les personnes <em>mariées</em> à un(e) Français(e). Le PACS n'y figure pas. Dans les textes, le PACS n'est qu'un <strong>« élément d'appréciation des liens personnels et familiaux »</strong> : il peut peser favorablement dans un dossier déjà existant (renouvellement de titre, demande fondée sur la vie privée et familiale après des années de présence en France), mais il ne crée jamais, à lui seul, un droit d'entrer ou de rester sur le territoire.</p>
    <p>Concrètement, si ton/ta partenaire est au Vietnam et que vous vous pacsez lors d'un de ses séjours en France, rien ne change pour ses prochaines demandes de visa : il/elle repart avec les mêmes droits qu'avant, et devra redemander un visa court séjour comme n'importe quel(le) ressortissant(e) vietnamien(ne). Méfie-toi des témoignages de forums qui affirment le contraire : ils concernent presque toujours des situations très spécifiques (partenaire déjà titulaire d'un titre de séjour pour un autre motif) qui ne sont pas transposables.</p>
    <p>Si tu veux que ton/ta partenaire vietnamien(ne) s'installe en France par voie familiale, le mariage reste obligatoire. → <a href="faire-venir-conjointe-vietnamienne-france">Guide complet du regroupement familial franco-vietnamien</a></p>

    <h2 id="section-3">Le PACS est-il reconnu au Vietnam ?</h2>
    <p>Non. Le Vietnam ne connaît pas d'équivalent au PACS et ne reconnaît pas les unions civiles étrangères autres que le mariage. Pour les autorités vietnamiennes, tu es simplement un étranger vivant avec un(e) Vietnamien(ne) sans statut légal particulier.</p>
    <p>Conséquences pratiques :</p>
    <ul>
      <li>Pas de protection légale particulière en cas de séparation au Vietnam</li>
      <li>Pas de droits de succession automatiques côté vietnamien</li>
      <li>Le bail du logement, les comptes bancaires, etc. doivent être gérés individuellement</li>
    </ul>

    <h3>La conséquence la plus importante si vous vivez au Vietnam : pas de visa TT</h3>
    <p>C'est le miroir exact du problème français. Au Vietnam, le titre de séjour familial — le <strong>visa TT et la carte de séjour temporaire (TRC) « regroupement familial »</strong> — s'obtient sur présentation d'un <em>certificat de mariage</em> reconnu par les autorités vietnamiennes. Un PACS français n'a aucune valeur dans ce dossier : pour l'immigration vietnamienne, vous êtes deux personnes sans lien juridique. Un Français pacsé avec un(e) Vietnamien(ne) et vivant au Vietnam reste donc sur des solutions individuelles : exemption de 45 jours, e-visas de 90 jours à répétition, ou visa lié à un emploi. Le détail de ces options est dans le <a href="visa-vietnam-francais-guide-2026">guide des visas Vietnam</a>.</p>
    <p>Autres angles morts côté vietnamien : si le logement ou le terrain est au nom de ton/ta partenaire, le PACS ne te donne aucun droit dessus en cas de séparation ou de décès — le droit vietnamien appliquera ses propres règles, qui ne connaissent pas votre union civile française. Même chose pour les décisions médicales en cas d'hospitalisation, ou pour les démarches concernant un enfant commun : c'est le droit local qui s'applique, et il ne voit pas le PACS. Pour un couple qui construit sa vie au Vietnam, ces situations concrètes pèsent souvent plus lourd que la fiscalité française.</p>

    <h2 id="section-4">Comment conclure un PACS avec un(e) Vietnamien(ne)</h2>
    <p>Si ton/ta partenaire est en France avec un visa valide, vous pouvez vous pacser à la mairie (depuis 2017) ou chez un notaire. La démarche elle-même est simple ; c'est la préparation des documents vietnamiens qui demande de l'anticipation.</p>

    <h3>Le pas-à-pas</h3>
    <ol>
      <li><strong>Rédigez la convention de PACS</strong> — soit vous-mêmes avec le formulaire type (Cerfa) disponible sur service-public.fr, soit chez un notaire si vous voulez un régime patrimonial sur mesure.</li>
      <li><strong>Réunissez les documents vietnamiens</strong> — c'est l'étape longue : acte de naissance vietnamien récent, à faire apostiller au Vietnam puis traduire par un traducteur assermenté en France. Depuis l'adhésion du Vietnam à la convention apostille, plus besoin de la double légalisation — le détail est dans mon article sur <a href="apostille-vietnam-francais-2026">l'apostille pour les documents vietnamiens</a>.</li>
      <li><strong>Demandez les certificats français du partenaire étranger</strong> — pour un(e) partenaire né(e) à l'étranger : certificat de non-PACS et attestation de non-inscription au répertoire civil, délivrés par le Service Central d'État Civil de Nantes (le même service que pour la <a href="transcription-mariage-service-central-nantes">transcription de mariage</a>).</li>
      <li><strong>Prenez rendez-vous</strong> à la mairie du domicile commun (ou chez le notaire) et présentez-vous <em>ensemble</em> le jour J avec les originaux.</li>
      <li><strong>L'enregistrement est immédiat</strong> : le PACS prend effet entre vous le jour de la déclaration, et devient opposable aux tiers une fois mentionné en marge des actes de naissance.</li>
    </ol>

    <p>Documents généralement requis (liste non exhaustive — renseigne-toi à la mairie ou chez ton notaire avant le rendez-vous) :</p>
    <ul>
      <li>Convention de PACS (rédigée par les partenaires ou chez un notaire)</li>
      <li>Acte de naissance de chacun (moins de 6 mois, apostillé et traduit pour la pièce vietnamienne)</li>
      <li>Justificatif d'identité (passeport vietnamien + visa ou titre de séjour valide)</li>
      <li>Justificatif de domicile commun ou séparé</li>
      <li>Certificat de non-PACS et attestation de non-inscription au répertoire civil (Service Central d'État Civil de Nantes, pour le/la partenaire né(e) à l'étranger)</li>
    </ul>
    <p>Deux précisions importantes. D'abord, il n'est pas possible de se pacser <em>à distance</em> : les deux partenaires doivent être physiquement présents ensemble le jour de l'enregistrement. Ensuite, se pacser pendant un séjour touristique est légal — la mairie n'a pas à juger du type de visa — mais cela ne « régularise » rien : à l'expiration du visa, le/la partenaire doit repartir, PACS ou pas.</p>

    <h2 id="section-consulat">Se pacser depuis le Vietnam : l'option du consulat</h2>
    <p>Ce que peu de couples savent : si vous vivez tous les deux au Vietnam, vous n'avez pas besoin d'un voyage en France pour vous pacser. <strong>Les postes consulaires français enregistrent les PACS à l'étranger dès lors qu'au moins un des deux partenaires est français.</strong> En pratique, cela se passe auprès de l'ambassade de France à Hanoï ou du consulat général à Hô Chi Minh-Ville, sur rendez-vous, avec un dossier proche de celui exigé en France (convention, actes de naissance, certificats de Nantes pour le/la partenaire vietnamien(ne)).</p>
    <p>Garde en tête les limites déjà vues : ce PACS consulaire produit ses effets <em>en droit français uniquement</em> (fiscalité si vous êtes imposables en France, succession avec testament, pension de réversion exclue comme pour tout PACS). Il ne change strictement rien à votre situation vis-à-vis des autorités vietnamiennes, ni au droit au séjour de ton/ta partenaire en France. C'est un outil de protection patrimoniale franco-français, pas un statut de couple international. Vérifie les modalités et la liste des pièces sur le site de l'ambassade avant de constituer le dossier — les exigences de forme varient d'un poste à l'autre.</p>

    <h2 id="section-dissolution">Dissoudre un PACS — et le cas particulier du passage au mariage</h2>
    <p>La souplesse du PACS se vérifie surtout à la sortie. Trois voies de dissolution :</p>
    <ul>
      <li><strong>D'un commun accord</strong> : déclaration conjointe adressée à la mairie (ou au notaire) qui a enregistré le PACS. Pas de juge, pas de procédure contentieuse.</li>
      <li><strong>Unilatéralement</strong> : un partenaire peut rompre seul, en faisant signifier sa décision à l'autre par commissaire de justice. L'autre ne peut pas s'y opposer.</li>
      <li><strong>Automatiquement par le mariage</strong> : le mariage de l'un des partenaires — avec l'autre partenaire ou avec un tiers — dissout le PACS de plein droit.</li>
    </ul>
    <p>Ce dernier point simplifie la stratégie « PACS d'abord, mariage ensuite » : <strong>si vous vous mariez ensemble, vous n'avez aucune démarche de dissolution à faire</strong>. Le mariage remplace le PACS automatiquement, et vous basculez dans le régime juridique des époux — celui qui ouvre le visa conjoint de Français et la <a href="transcription-mariage-service-central-nantes">transcription au Vietnam</a>. Il n'y a donc aucun « coût de sortie » à commencer par un PACS si le projet évolue.</p>

    <h2 id="section-5">PACS ou mariage : quelle stratégie pour un couple franco-vietnamien ?</h2>
    <p>Le bon choix dépend moins de vos convictions sur le mariage que de votre <strong>projet géographique</strong>. Posez-vous une seule question : où voulez-vous vivre ensemble dans les trois prochaines années ? Si la réponse est « en France » ou « au Vietnam avec un vrai statut pour le conjoint étranger », le mariage est l'outil qui correspond. Si la réponse est « on vit déjà tous les deux légalement dans le même pays, chacun avec son propre statut », le PACS peut suffire un temps.</p>

    <table>
      <thead>
        <tr>
          <th>Critère</th>
          <th>PACS</th>
          <th>Mariage</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Visa pour installation en France</td>
          <td>Non</td>
          <td>Oui (visa conjoint de Français)</td>
        </tr>
        <tr>
          <td>Avantages fiscaux en France</td>
          <td>Oui (imposition commune)</td>
          <td>Oui (idem)</td>
        </tr>
        <tr>
          <td>Succession</td>
          <td>Avantages partiels</td>
          <td>Droits plus étendus</td>
        </tr>
        <tr>
          <td>Reconnaissance au Vietnam</td>
          <td>Non</td>
          <td>Oui (après transcription CCAM/Nantes)</td>
        </tr>
        <tr>
          <td>Facilité de rupture</td>
          <td>Plus simple</td>
          <td>Divorce nécessaire</td>
        </tr>
      </tbody>
    </table>

    <p>Si l'objectif final est que votre partenaire vive en France avec toi, le mariage est incontournable. Le PACS peut être une étape intermédiaire pour officialiser la relation côté français pendant une période de transition.</p>

    <h3>Trois profils types</h3>
    <ul>
      <li><strong>Vous vivez tous les deux en France, ton/ta partenaire a déjà un titre de séjour</strong> (étudiant, salarié…) : le PACS est pertinent tout de suite — fiscalité commune, protection du logement, et un élément de plus au dossier pour les futurs renouvellements. Le mariage pourra venir plus tard, sans dissolution préalable.</li>
      <li><strong>Ton/ta partenaire est au Vietnam et le projet est la vie en France</strong> : le PACS ne fera pas avancer le dossier d'un centimètre. Concentrez-vous directement sur le <a href="se-marier-vietnamienne-demarches-france">parcours mariage</a> (CCAM, mariage, transcription, visa long séjour).</li>
      <li><strong>Vous vivez tous les deux au Vietnam</strong> : le PACS consulaire protège le volet patrimonial français (succession avec testament, fiscalité si concerné), mais c'est le mariage local qui ouvrira le visa TT/TRC au conjoint français. Beaucoup de couples font les deux, dans l'ordre qui suit leur calendrier.</li>
    </ul>

    <h2 id="section-6">Le concubinage notoire comme alternative partielle</h2>
    <p>Le concubinage (union libre) notoire peut être pris en compte dans certains dossiers de visa, notamment pour le renouvellement d'un titre de séjour déjà existant (motif "liens personnels et familiaux"). Mais il ne crée pas de droit d'entrée sur le territoire. Les préfectures apprécient les preuves au cas par cas — en pratique, une vie commune d'au moins 2 ans bien documentée (factures communes, bail commun, déclarations fiscales communes) est généralement nécessaire.</p>
    <p>Le concubinage et le PACS se cumulent d'ailleurs très bien dans un dossier : un PACS <em>plus</em> plusieurs années de vie commune documentée pèsent davantage qu'un PACS seul, signé la veille de la demande. Si vous êtes dans une situation où la carte « vie privée et familiale » est l'horizon réaliste (partenaire déjà présent en France depuis longtemps, par exemple), commencez à archiver les preuves de vie commune dès maintenant : quittances aux deux noms, comptes joints, attestations. C'est un travail de fourmi qui se fait au fil de l'eau, pas trois semaines avant le rendez-vous en préfecture.</p>

    <h2 id="section-erreurs">Les erreurs fréquentes (vues et revues)</h2>
    <ul>
      <li><strong>« On se pacse, et ensuite il/elle pourra rester en France »</strong> — non. Le PACS ne prolonge aucun visa et n'empêche aucune obligation de quitter le territoire. C'est l'erreur n°1, et elle peut coûter cher si elle conduit à un dépassement de séjour qui compliquera tous les dossiers suivants.</li>
      <li><strong>Se pacser sans testament</strong> — l'exonération de droits de succession sans testament, c'est une voiture sans carburant. Le survivant n'hérite de rien par défaut.</li>
      <li><strong>Oublier les certificats de Nantes</strong> — pour un(e) partenaire né(e) à l'étranger, le certificat de non-PACS et l'attestation de non-inscription au répertoire civil sont indispensables et leur délivrance prend du temps. C'est la pièce qui fait le plus souvent reporter les rendez-vous.</li>
      <li><strong>Présenter un acte de naissance vietnamien non apostillé ou traduit par un proche</strong> — la mairie exige une traduction par traducteur assermenté et un acte apostillé. Une traduction « maison » fait rejeter le dossier.</li>
      <li><strong>Croire que le PACS protège au Vietnam</strong> — logement, succession, décisions médicales : côté vietnamien, le PACS n'existe pas. Ne construisez pas votre sécurité juridique au Vietnam dessus.</li>
      <li><strong>Dissoudre le PACS avant de se marier ensemble</strong> — inutile : le mariage entre partenaires dissout le PACS automatiquement. Une dissolution préalable ajoute des démarches pour rien.</li>
    </ul>

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
$current_slug = 'pacs-vietnamienne-reconnaissance';
$current_cat  = 'mariage';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
