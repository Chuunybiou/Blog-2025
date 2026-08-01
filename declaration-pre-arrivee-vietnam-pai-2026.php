<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Déclaration pré-arrivée Vietnam (PAI) : la nouvelle formalité obligatoire 2026';
$page_description = 'Depuis avril 2026, une déclaration en ligne est obligatoire avant tout vol vers les principaux aéroports du Vietnam. Formulaire gratuit, QR code, étapes et site officiel.';
$page_canonical   = SITE_URL . '/declaration-pre-arrivee-vietnam-pai-2026';
$page_og_title    = 'Déclaration pré-arrivée Vietnam (PAI) — Nouvelle formalité obligatoire 2026';
$page_og_desc     = 'Formulaire PAI gratuit à remplir dans les 72h avant votre vol vers HCMV, Hanoï, Da Nang ou Phu Quoc. Mode d\'emploi complet et lien officiel.';
$page_og_url      = SITE_URL . '/declaration-pre-arrivee-vietnam-pai-2026';
$page_og_image    = 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Déclaration pré-arrivée Vietnam (PAI) : la nouvelle formalité obligatoire 2026',
  'datePublished'   => '2026-06-23',
  'dateModified'    => '2026-06-23',
  'author'          => ['@type' => 'Person', 'name' => 'Anthony Bouillon', 'url' => SITE_URL],
  'publisher'       => ['@type' => 'Organization', 'name' => 'Cap Vietnam'],
  'mainEntityOfPage'=> SITE_URL . '/declaration-pre-arrivee-vietnam-pai-2026',
  'image'           => 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&q=80',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie pratique au Vietnam',
]);

$article_color   = 'jade';
$article_hero_bg = '#1a3a2e';
$article_glow    = 'rgba(27,107,82,0.15)';
$article_badge   = 'rgba(191,74,42,0.25)';
$article_badge_c = '#e8856a';

$article_category     = 'Vie pratique au Vietnam';
$article_category_url = SITE_URL . '/articles-capvietnam';

$page_faq = [
  ['q' => 'Le PAI remplace-t-il le visa ?',
   'a' => 'Non. Le PAI est une déclaration administrative séparée. Si vous avez besoin d\'un visa pour entrer au Vietnam (e-visa, visa d\'affaires, etc.), vous devez l\'obtenir avant le vol en plus du PAI.'],
  ['q' => 'Combien de temps avant mon vol dois-je remplir le PAI ?',
   'a' => 'Le formulaire n\'est accessible que dans les 72 heures précédant votre arrivée. Ne le remplissez pas trop tôt — le système refusera votre demande.'],
  ['q' => 'Le PAI est-il gratuit ?',
   'a' => 'Oui, totalement gratuit. Méfiez-vous des sites tiers qui facturent une "aide à la complétion" — le seul site officiel est <a href="https://prearrival.immigration.gov.vn/" target="_blank" rel="noopener">prearrival.immigration.gov.vn</a>.'],
  ['q' => 'Que se passe-t-il si j\'oublie de le remplir ?',
   'a' => 'Les autorités peuvent refuser l\'embarquement ou retarder votre passage à l\'immigration à l\'arrivée. Dans les aéroports concernés, le PAI est contrôlé au check-in et à l\'arrivée.'],
  ['q' => 'Les Vietnamiens résidant en France doivent-ils aussi le remplir ?',
   'a' => 'Oui. La formalité s\'applique à tous les voyageurs étrangers ainsi qu\'aux Vietnamiens résidant à l\'étranger (Việt kiều) arrivant dans les aéroports concernés.'],
  ['q' => 'Faut-il une déclaration par personne, même pour les enfants ?',
   'a' => 'Oui. Chaque voyageur doit faire l\'objet de sa propre déclaration, y compris les mineurs. En pratique, un parent peut remplir toutes les déclarations de la famille depuis le même appareil, en quelques minutes — mais chaque passeport génère son propre QR code.'],
  ['q' => 'Mon vol a été modifié, dois-je refaire le PAI ?',
   'a' => 'Un simple retard du même vol ne pose généralement pas de problème : la déclaration reste rattachée à votre numéro de vol. En revanche, si votre numéro de vol change (nouvelle réservation, réacheminement sur un autre vol) ou si la date d\'arrivée change, refaites une déclaration — c\'est gratuit et rapide.'],
  ['q' => 'Combien de temps le QR code est-il valable ?',
   'a' => 'Le QR code est rattaché au vol que vous avez déclaré. Il sert pour cette arrivée-là, et uniquement celle-là. À chaque nouveau voyage vers un aéroport concerné, il faut refaire une déclaration dans la fenêtre des 72 heures.'],
  ['q' => 'Puis-je remplir le PAI directement à l\'aéroport avant d\'embarquer ?',
   'a' => 'Techniquement oui, tant que vous êtes dans la fenêtre des 72 heures. Mais c\'est déconseillé : la validation n\'est pas toujours instantanée, le WiFi d\'aéroport est capricieux, et un problème de dernière minute (photo de passeport refusée, faute de frappe) peut vous faire rater l\'embarquement. Visez au moins 24 heures avant le départ.'],
];

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="<?= SITE_URL ?>">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="<?= SITE_URL ?>/articles-capvietnam">Vie pratique</a><span class="breadcrumb-sep">›</span>
      <span>Déclaration pré-arrivée PAI</span>
    </div>
    <span class="article-badge-hero">Vie pratique au Vietnam</span>
    <h1>Déclaration pré-arrivée Vietnam (PAI) : la nouvelle formalité obligatoire 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="<?= SITE_URL ?>/a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 23 juin 2026</span>
      <span>⏱ 10 min de lecture</span>
      <span>Mis&nbsp;à&nbsp;jour&nbsp;: Juillet 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-quoi">C'est quoi le PAI ?</a></li>
      <li><a href="#section-pourquoi">Pourquoi cette formalité ?</a></li>
      <li><a href="#section-aeroports">Aéroports concernés</a></li>
      <li><a href="#section-comment">Comment remplir le formulaire</a></li>
      <li><a href="#section-infos">Informations requises</a></li>
      <li><a href="#section-qr">Le QR code</a></li>
      <li><a href="#section-cas">Cas particuliers</a></li>
      <li><a href="#section-erreurs">Erreurs fréquentes</a></li>
      <li><a href="#section-checklist">Rétro-planning en 4 temps</a></li>
      <li><a href="#section-piege">Ce que le PAI ne remplace pas</a></li>
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

    <p><strong>Depuis le 15 avril 2026, une nouvelle formalité s'impose à tous les voyageurs arrivant dans les grands aéroports du Vietnam.</strong> Cette déclaration en ligne — appelée PAI pour <em>Pre-Arrival Information</em> — doit être remplie dans les 72 heures avant votre vol. Elle est gratuite, rapide, et obligatoire. Voici tout ce qu'il faut savoir pour ne pas se faire bloquer à l'embarquement.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?w=1200&q=80" alt="Aéroport — déclaration pré-arrivée Vietnam PAI 2026" width="1200" height="675" loading="lazy">

    <div class="info-box">
      <strong>📌 En résumé :</strong> rendez-vous sur <a href="https://prearrival.immigration.gov.vn/" target="_blank" rel="noopener"><strong>prearrival.immigration.gov.vn</strong></a>, remplissez le formulaire dans les 72h avant votre arrivée, conservez le QR code reçu. Gratuit, 5 minutes à remplir.
    </div>

    <h2 id="section-quoi">C'est quoi le PAI ?</h2>

    <p>Le PAI (<em>Pre-Arrival Information</em>) est un formulaire d'enregistrement électronique obligatoire, mis en place par la Direction de l'immigration du ministère de la Sécurité publique du Vietnam. Son objectif est de <strong>fluidifier les contrôles aux frontières</strong> en permettant aux autorités de vérifier les informations des voyageurs avant leur atterrissage.</p>

    <p>Concrètement, vous renseignez vos coordonnées, vos détails de vol, votre visa (ou votre exemption) et votre adresse d'hébergement. En retour, vous recevez un QR code à présenter à l'immigration.</p>

    <div class="warning-box">
      <strong>⚠️ Méfiez-vous des sites tiers :</strong> des sites privés proposent de remplir le PAI à votre place contre paiement. Le formulaire officiel est <strong>totalement gratuit</strong> sur <a href="https://prearrival.immigration.gov.vn/" target="_blank" rel="noopener">prearrival.immigration.gov.vn</a>. Ne payez rien.
    </div>

    <h2 id="section-pourquoi">Pourquoi cette formalité ? Le Vietnam suit ses voisins</h2>

    <p>Si vous voyagez régulièrement en Asie du Sud-Est, le principe du PAI ne vous dépaysera pas : le Vietnam est en réalité <strong>l'un des derniers pays de la région à digitaliser sa carte d'arrivée</strong>. Ses voisins ont tous franchi le pas ces dernières années :</p>

    <ul class="article-list">
      <li><strong>Singapour</strong> impose la <em>SG Arrival Card</em> électronique depuis plusieurs années — à remplir dans les 3 jours avant l'arrivée, exactement le même principe de fenêtre que le PAI vietnamien.</li>
      <li><strong>La Thaïlande</strong> a remplacé son vieux formulaire papier TM6 par la <em>Thailand Digital Arrival Card</em> (TDAC), elle aussi gratuite et en ligne.</li>
      <li><strong>La Malaisie</strong> exige la <em>Malaysia Digital Arrival Card</em> (MDAC) pour la plupart des voyageurs étrangers.</li>
      <li><strong>Le Cambodge</strong> a lancé son application <em>e-Arrival</em> qui regroupe carte d'arrivée, déclaration douanière et déclaration sanitaire.</li>
    </ul>

    <p>L'objectif est le même partout : permettre aux autorités de <strong>pré-vérifier les voyageurs avant l'atterrissage</strong> plutôt que de tout traiter au guichet, réduire les files à l'immigration, et supprimer à terme les formulaires papier. C'est aussi pour ça qu'il ne faut pas voir le PAI comme une contrainte kafkaïenne de plus : bien utilisé, il fluidifie réellement le passage — les voyageurs pré-enregistrés passent plus vite au contrôle.</p>

    <p>Détail qui a son importance pour les couples franco-vietnamiens : cette digitalisation s'inscrit dans le même mouvement de modernisation administrative que <a href="<?= SITE_URL ?>/apostille-vietnam-francais-2026">l'adhésion du Vietnam à la Convention de La Haye sur l'apostille</a> (11 septembre 2026). Le Vietnam simplifie et digitalise ses procédures d'entrée et de reconnaissance de documents — deux chantiers qui, mis bout à bout, changent concrètement la vie des familles binationales qui font régulièrement l'aller-retour.</p>

    <h2 id="section-aeroports">Aéroports concernés et dates d'entrée en vigueur</h2>

    <p>Le déploiement du PAI s'est fait progressivement depuis avril 2026 :</p>

    <div style="overflow-x:auto;margin:1.5rem 0">
      <table style="width:100%;border-collapse:collapse;font-size:.93rem">
        <thead>
          <tr style="background:#1b4a35;color:#fff">
            <th style="padding:.75rem 1rem;text-align:left">Aéroport</th>
            <th style="padding:.75rem 1rem;text-align:left">Code</th>
            <th style="padding:.75rem 1rem;text-align:left">Obligatoire depuis</th>
          </tr>
        </thead>
        <tbody>
          <tr style="background:#fff;border-bottom:1px solid #e5e1d8">
            <td style="padding:.75rem 1rem">Tan Son Nhat — Hô Chi Minh-Ville</td>
            <td style="padding:.75rem 1rem"><strong>SGN</strong></td>
            <td style="padding:.75rem 1rem">15 avril 2026</td>
          </tr>
          <tr style="background:#f9f7f4;border-bottom:1px solid #e5e1d8">
            <td style="padding:.75rem 1rem">Phu Quoc International</td>
            <td style="padding:.75rem 1rem"><strong>PQC</strong></td>
            <td style="padding:.75rem 1rem">1er juin 2026</td>
          </tr>
          <tr style="background:#fff;border-bottom:1px solid #e5e1d8">
            <td style="padding:.75rem 1rem">Noi Bai — Hanoï</td>
            <td style="padding:.75rem 1rem"><strong>HAN</strong></td>
            <td style="padding:.75rem 1rem">8 juin 2026</td>
          </tr>
          <tr style="background:#f9f7f4">
            <td style="padding:.75rem 1rem">Da Nang International</td>
            <td style="padding:.75rem 1rem"><strong>DAD</strong></td>
            <td style="padding:.75rem 1rem">15 juin 2026</td>
          </tr>
        </tbody>
      </table>
    </div>

    <p>Les autres aéroports (Cam Ranh, Cat Bi, Phu Cat…) ne sont pas encore soumis à cette obligation à la date de publication de cet article, mais l'extension est probable dans les prochains mois.</p>

    <h3>Concrètement, à quoi ça ressemble le jour J</h3>

    <p>Deux moments de contrôle, pas plus. D'abord <strong>au comptoir d'enregistrement de la compagnie aérienne</strong> : l'agent vérifie que vous avez bien un QR code PAI pour un vol vers un aéroport concerné, au même titre qu'il vérifie votre visa ou votre exemption. C'est là que se joue le vrai risque — une compagnie peut refuser l'embarquement d'un passager sans PAI, car c'est elle qui paie l'amende si elle transporte un voyageur non conforme. Ensuite <strong>au contrôle des passeports à l'arrivée</strong> : l'agent d'immigration scanne le QR code, retrouve votre déclaration pré-remplie, et le passage s'en trouve accéléré. Entre les deux, personne ne vous le demandera : pas besoin de le montrer en salle d'embarquement ni dans l'avion.</p>

    <h2 id="section-comment">Comment remplir le formulaire PAI</h2>

    <p>Le site officiel est : <a href="https://prearrival.immigration.gov.vn/" target="_blank" rel="noopener" style="font-weight:700;font-size:1.05rem">→ prearrival.immigration.gov.vn</a></p>

    <p>Quelques points importants avant de commencer :</p>

    <ul class="article-list">
      <li><strong>Fenêtre de 72 heures :</strong> le système n'accepte les soumissions que dans les 72h précédant votre heure d'atterrissage prévue. Ne tentez pas de le remplir une semaine avant — ça ne fonctionnera pas.</li>
      <li><strong>Délai de traitement :</strong> dans la pratique, la validation est rapide (quelques minutes à quelques heures). Ne faites pas ça à la dernière minute — visez 24h avant le départ.</li>
      <li><strong>Langue disponible :</strong> le formulaire est disponible en anglais et en vietnamien.</li>
    </ul>

    <h3>Le parcours type, étape par étape</h3>

    <ol class="article-list">
      <li><strong>Vérifiez que vous êtes sur le bon site.</strong> L'adresse se termine par <code>immigration.gov.vn</code> — le domaine gouvernemental vietnamien. Si vous êtes arrivé là via une publicité Google et que l'adresse est différente, fermez l'onglet : c'est un intermédiaire payant.</li>
      <li><strong>Choisissez la langue anglaise</strong> (sauf si votre moitié vietnamienne remplit pour vous 😉) et créez une nouvelle déclaration.</li>
      <li><strong>Renseignez vos informations personnelles</strong> exactement comme elles figurent sur votre passeport : ordre des prénoms, orthographe, tout doit correspondre à la zone de lecture du passeport. C'est LA source d'erreur classique — une lettre de travers et le QR code ne correspondra pas au contrôle.</li>
      <li><strong>Renseignez le vol</strong> : numéro de vol (celui du dernier segment qui atterrit au Vietnam, pas celui du départ de Paris si vous avez une correspondance), date et aéroport d'arrivée.</li>
      <li><strong>Renseignez l'hébergement.</strong> L'adresse de votre hôtel telle qu'elle figure sur la réservation, ou — cas fréquent pour les lecteurs de ce blog — l'adresse de la belle-famille si vous logez chez elle. Une adresse privée est parfaitement acceptée, prévoyez-la complète (numéro, rue, quartier/phường, district, ville).</li>
      <li><strong>Téléversez la page photo de votre passeport</strong> : un scan ou une photo nette, lisible, sans reflet, au format image classique. Évitez la photo prise de nuit sur un coin de table — si la page est illisible, la validation peut coincer.</li>
      <li><strong>Relisez tout, soumettez, et surveillez votre boîte mail</strong> (y compris les spams). Le QR code arrive par email une fois la déclaration validée.</li>
    </ol>

    <h2 id="section-infos">Informations requises</h2>

    <p>Préparez les éléments suivants avant de commencer :</p>

    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin:1.5rem 0">
      <div style="background:#f0faf5;border:1px solid #c7e8d8;border-radius:8px;padding:1.25rem">
        <div style="font-weight:700;color:#1b4a35;margin-bottom:.5rem">🛂 Votre passeport</div>
        <ul style="font-size:.9rem;color:#555;margin:0;padding-left:1.1rem;line-height:1.8">
          <li>Numéro de passeport</li>
          <li>Date d'expiration</li>
          <li>Nationalité</li>
          <li>Copie scannée (page photo)</li>
        </ul>
      </div>
      <div style="background:#f0faf5;border:1px solid #c7e8d8;border-radius:8px;padding:1.25rem">
        <div style="font-weight:700;color:#1b4a35;margin-bottom:.5rem">✈️ Votre vol</div>
        <ul style="font-size:.9rem;color:#555;margin:0;padding-left:1.1rem;line-height:1.8">
          <li>Numéro de vol</li>
          <li>Date et heure d'arrivée</li>
          <li>Aéroport d'arrivée</li>
        </ul>
      </div>
      <div style="background:#f0faf5;border:1px solid #c7e8d8;border-radius:8px;padding:1.25rem">
        <div style="font-weight:700;color:#1b4a35;margin-bottom:.5rem">🏨 Votre séjour</div>
        <ul style="font-size:.9rem;color:#555;margin:0;padding-left:1.1rem;line-height:1.8">
          <li>Adresse d'hébergement complète</li>
          <li>Date de départ prévu</li>
          <li>Motif du séjour</li>
          <li>Visa ou justificatif d'exemption</li>
        </ul>
      </div>
    </div>

    <h2 id="section-qr">Le QR code</h2>

    <p>Une fois le formulaire validé, vous recevez un <strong>QR code par email</strong>. Conservez-le bien — vous devrez le présenter :</p>

    <ul class="article-list">
      <li>Au moment de l'enregistrement (check-in) auprès de la compagnie aérienne</li>
      <li>À l'arrivée au contrôle des passeports</li>
    </ul>

    <p>Imprimez-le ou gardez-le visible sur votre téléphone. Assurez-vous d'avoir accès à votre email avant de décoller — ne comptez pas sur une connexion WiFi à bord pour le retrouver.</p>

    <p>Mon conseil pratique : dès réception, <strong>faites une capture d'écran du QR code</strong> et enregistrez-la dans la galerie photos de votre téléphone, puis imprimez une copie papier glissée dans le passeport. Trois supports (email, galerie, papier) — comme ça, batterie vide, réseau absent ou email inaccessible, vous avez toujours un plan B. C'est exactement le réflexe que je recommande déjà pour l'e-visa dans la <a href="<?= SITE_URL ?>/checklist-depart-installer-vietnam">checklist départ Vietnam</a>.</p>

    <h2 id="section-cas">Cas particuliers : famille, transit, résidents</h2>

    <h3>Vous voyagez en famille</h3>
    <p>Chaque voyageur doit avoir sa propre déclaration — y compris les bébés et les enfants. En pratique, rien ne vous empêche de remplir les déclarations de toute la famille depuis le même ordinateur, à la suite : comptez 5 minutes par personne une fois que vous avez pris le pli. Chaque passeport reçoit son propre QR code, à présenter individuellement. Pour un couple franco-vietnamien avec enfant binational, déclarez chaque personne avec le passeport qu'elle utilisera pour entrer au Vietnam — c'est ce passeport-là qui doit correspondre au QR code.</p>

    <h3>Vous êtes en transit</h3>
    <p>Le PAI vise les voyageurs qui <em>entrent</em> au Vietnam par les aéroports concernés. Si vous êtes en correspondance internationale sans franchir l'immigration vietnamienne, la situation est moins clairement documentée à ce jour. Mon conseil honnête : dans le doute, remplissez-le quand même. C'est gratuit, ça prend cinq minutes, et ça vous évite toute discussion au comptoir d'enregistrement d'une compagnie qui appliquerait la règle avec zèle.</p>

    <h3>Vous entrez par voie terrestre ou par un autre aéroport</h3>
    <p>Les postes-frontières terrestres (Mộc Bài depuis le Cambodge, Lào Cai depuis la Chine, etc.) et les aéroports non listés ci-dessus ne sont pas soumis au PAI à la date de publication. Mais gardez un œil sur la liste : le déploiement s'est fait aéroport par aéroport en quelques mois, l'extension au reste du réseau est le scénario le plus probable.</p>

    <h3>Vous vivez au Vietnam (TRC, visa TT)</h3>
    <p>La formalité s'applique aux <em>voyageurs</em> arrivant dans les aéroports concernés — ce qui inclut les résidents étrangers qui rentrent de voyage. Si vous vivez à Hanoï avec une <a href="<?= SITE_URL ?>/carte-residence-temporaire-vietnam">carte de résidence temporaire</a> et que vous revenez d'un séjour en France, prévoyez votre PAI comme n'importe quel autre voyageur. Même logique pour votre conjoint(e) vietnamien(ne) titulaire d'un passeport étranger ou résidant à l'étranger.</p>

    <h2 id="section-erreurs">Les erreurs fréquentes (et comment les rattraper)</h2>

    <ul class="article-list">
      <li><strong>Faute de frappe dans le numéro de passeport.</strong> C'est l'erreur n°1, et elle n'est pas anodine : au contrôle, le QR code est rapproché de votre passeport. Si vous repérez l'erreur après soumission, refaites simplement une nouvelle déclaration correcte — c'est gratuit et rien ne vous en empêche. Présentez le bon QR code à l'arrivée.</li>
      <li><strong>Vol modifié après la déclaration.</strong> Retard du même vol : pas de panique, votre numéro de vol n'a pas changé. Réacheminement sur un autre vol ou décalage au lendemain : refaites une déclaration avec les nouvelles informations dès que vous les connaissez.</li>
      <li><strong>QR code jamais reçu.</strong> Vérifiez le dossier spam, puis les onglets « Promotions »/« Notifications » si vous êtes sur Gmail. Toujours rien après quelques heures ? Refaites la déclaration avec une autre adresse email — et cette fois, notez le numéro de confirmation affiché à l'écran avant de fermer la page.</li>
      <li><strong>Payer un site tiers.</strong> Si vous avez déjà payé un intermédiaire, pas de panique : la déclaration qu'il a (peut-être) faite peut être valide. Mais vérifiez qu'elle existe réellement en refaisant gratuitement la vôtre sur le site officiel — vous saurez au moins que vous êtes couvert.</li>
      <li><strong>Tout faire à la porte d'embarquement.</strong> Fenêtre de 72h ne veut pas dire « à la dernière minute ». Entre le WiFi d'aéroport, la photo du passeport à téléverser et la validation qui peut prendre quelques heures, c'est le meilleur moyen de transformer une formalité de 5 minutes en sueurs froides.</li>
    </ul>

    <h2 id="section-checklist">Votre rétro-planning PAI en 4 temps</h2>

    <ul class="article-list">
      <li><strong>J-3 (ouverture de la fenêtre) :</strong> la déclaration devient possible. Si votre voyage est carré (vol et hôtel confirmés), c'est le bon moment.</li>
      <li><strong>J-2 / J-1 :</strong> le créneau idéal. Vous remplissez au calme, la validation a tout le temps d'arriver, et il vous reste de la marge pour corriger une erreur éventuelle.</li>
      <li><strong>Jour du départ, avant de partir de chez vous :</strong> QR code reçu ? Capture d'écran faite ? Copie imprimée dans le passeport ? Ne partez pas sans ces trois cases cochées.</li>
      <li><strong>À l'aéroport :</strong> au check-in, préparez passeport + visa ou justificatif d'exemption + QR code PAI. À l'arrivée au Vietnam, même trio au contrôle des passeports.</li>
    </ul>

    <h2 id="section-piege">Ce que le PAI ne remplace pas</h2>

    <p>Point essentiel à comprendre : <strong>le PAI n'est pas un visa</strong>. C'est une déclaration administrative qui s'ajoute aux formalités d'entrée, elle ne les remplace pas.</p>

    <p>Si vous avez besoin d'un visa pour entrer au Vietnam, vous devez continuer à l'obtenir séparément (e-visa, visa ambassade, etc.) <em>en plus</em> du PAI. Pour les Français bénéficiant de l'exemption de 45 jours, l'exemption reste valable — le PAI est simplement une formalité additionnelle.</p>

    <div class="info-box">
      <strong>📌 Récapitulatif pour un Français en tourisme :</strong><br>
      Séjour ≤ 45 jours → exemption de visa (inchangée) <strong>+ PAI obligatoire</strong><br>
      Séjour &gt; 45 jours → e-visa <strong>+ PAI obligatoire</strong>
    </div>

    <p>Pour tout ce qui concerne les visas, consultez le <a href="<?= SITE_URL ?>/visa-vietnam-francais-guide-2026">guide complet des visas Vietnam pour Français</a>.</p>

    <?php
    $page_sources = [
      ['label' => 'Portail e-visa officiel du Vietnam (Département de l\'immigration)', 'url' => 'https://evisa.xuatnhapcanh.gov.vn'],
      ['label' => 'France Diplomatie — services aux Français de l\'étranger', 'url' => 'https://www.diplomatie.gouv.fr'],
    ];
    include '_article-sources.php';
    ?>

    <h2 id="section-faq">Questions fréquentes</h2>

    <?php foreach ($page_faq as $item): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($item['q'], ENT_QUOTES) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $item['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="article-cta-box">
      <div class="article-cta-icon">📦</div>
      <div>
        <strong>Vous préparez votre arrivée au Vietnam ?</strong><br>
        <span>Téléchargez le pack gratuit Cap Vietnam : guide PDF mariage &amp; visa, checklist et modèles de lettres.</span>
        <a href="<?= SITE_URL ?>/pack-gratuit" class="article-cta-link">Obtenir le pack →</a>
      </div>
    </div>

  </main>
</div>

<?php
$lm_context = 'popup';
include 'lead-magnet.php';
?>

<?php include '_related-articles.php'; ?>
<?php include 'footer.php'; ?>
