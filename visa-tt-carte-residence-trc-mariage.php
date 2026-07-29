<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Visa TT et carte de résidence temporaire (TRC) pour mariage au Vietnam : guide 2026';
$page_description = 'Si tu es marié(e) avec un(e) Vietnamien(ne) et tu vis au Vietnam, le visa TT et la carte de résidence temporaire (TRC) sont ta solution légale de long séjour. Guide pratique 2026.';
$page_canonical   = SITE_URL . '/visa-tt-carte-residence-trc-mariage';
$page_og_title    = 'Visa TT et TRC pour conjoint de Vietnamien : comment les obtenir en 2026';
$page_og_desc     = 'Marié(e) à un(e) Vietnamien(ne) et installé au Vietnam ? Le visa TT + TRC est la bonne solution. Voici comment faire.';
$page_og_url      = SITE_URL . '/visa-tt-carte-residence-trc-mariage';
$page_og_image    = 'https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Visa TT et carte de résidence temporaire (TRC) pour mariage au Vietnam : guide 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-01',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/visa-tt-carte-residence-trc-mariage',
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
  ['q' => 'Quelle est la différence entre le visa TT et la TRC ?',
   'a' => 'Le visa TT (thị thực TT) est un visa long séjour délivré pour les conjoints de Vietnamiens, apposé dans le passeport. La TRC (thẻ tạm trú — carte de résidence temporaire) est une carte physique distincte délivrée par le Département de l\'Immigration, valable jusqu\'à 3 ans. Elle remplace le visa et évite les renouvellements fréquents. La TRC est plus pratique au quotidien pour les démarches administratives locales.'],
  ['q' => 'Combien de temps dure la TRC pour conjoint de Vietnamien ?',
   'a' => 'La TRC pour conjoint de Vietnamien est délivrée pour une durée maximale de 3 ans, renouvelable tant que le mariage est en vigueur. La durée effective peut être inférieure si la validité restante du passeport est insuffisante.'],
  ['q' => 'Peut-on travailler avec un visa TT ou une TRC ?',
   'a' => 'Le visa TT et la TRC n\'autorisent pas automatiquement à travailler au Vietnam. Pour exercer une activité salariée pour un employeur vietnamien, un permis de travail (giấy phép lao động) reste nécessaire. Des exemptions existent pour certains profils (dirigeants d\'entreprise ayant investi au Vietnam, certaines catégories d\'experts). Pour le télétravail pour un employeur étranger, la situation reste dans une zone grise légale — consulte un avocat spécialisé.'],
  ['q' => 'Que se passe-t-il si le mariage est dissous ?',
   'a' => 'En cas de divorce, la TRC basée sur le mariage perd sa justification légale. Il faut en informer le Département de l\'Immigration dès que possible et demander soit l\'annulation de la TRC, soit sa conversion vers un autre type de titre de séjour (visa touriste, visa travail, etc.) si les conditions sont remplies. Ne pas signaler un divorce peut créer des complications administratives sérieuses.'],
  ['q' => 'Puis-je voyager pendant l\'instruction de ma demande de TRC ?',
   'a' => 'Non : ton passeport est déposé avec le dossier pendant l\'instruction (5 à 15 jours ouvrés). Tu ne peux ni quitter le territoire, ni prendre un vol intérieur nécessitant ton passeport comme pièce d\'identité. Planifie le dépôt sur une période sans déplacement.'],
  ['q' => 'Notre mariage a été célébré en France : peut-on quand même demander la TRC ?',
   'a' => 'Oui, mais il faut d\'abord faire reconnaître le mariage au Vietnam via la procédure de ghi chú kết hôn auprès du Service de justice (Sở Tư pháp) de la province de résidence. C\'est cet enregistrement vietnamien qui permet ensuite au dossier TT/TRC de s\'appuyer sur votre mariage.'],
  ['q' => 'La TRC reste-t-elle valable si nous partons vivre en France quelques années ?',
   'a' => 'La carte reste matériellement valable jusqu\'à sa date d\'expiration et permet de revenir librement au Vietnam pendant cette période. En revanche, ton enregistrement de résidence local (tạm trú) ne correspondra plus à la réalité, et le renouvellement suivant se fera sur la base de ta situation du moment. Si un retour durable en France se profile, renseigne-toi sur les implications avant de partir.'],
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
      <span>Visa TT et TRC mariage</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Visa TT et carte de résidence temporaire (TRC) pour conjoint de Vietnamien(ne) : guide 2026</h1>
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
      <li><a href="#section-1">Visa TT vs TRC : comprendre la différence</a></li>
      <li><a href="#section-2">Les conditions requises</a></li>
      <li><a href="#section-3">Documents à préparer</a></li>
      <li><a href="#section-4">Faire la demande</a></li>
      <li><a href="#section-5">Durée et renouvellement</a></li>
      <li><a href="#section-6">Droits et limitations</a></li>
      <li><a href="#section-7">Ta feuille de route</a></li>
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
    <p><strong>Si tu es marié(e) à un(e) Vietnamien(ne) et que tu vis au Vietnam, tu n'as pas besoin de jongler avec des visa-runs ou des e-visas renouvelés tous les 90 jours.</strong> Le visa TT (thị thực TT) ou la carte de résidence temporaire (TRC) sont les solutions légales conçues pour ta situation. Ce guide t'explique comment les obtenir et ce que tu peux faire avec.</p>

    <p>Pour la situation inverse — ton conjoint vietnamien voulant venir en France — lis notre <a href="faire-venir-conjointe-vietnamienne-france">guide complet du regroupement familial franco-vietnamien</a>.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1555400038-63f5ba517a47?w=1200&q=80" alt="Carte de résidence Vietnam" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Visa TT vs TRC : comprendre la différence</h2>
    <p>Ces deux documents permettent de séjourner légalement au Vietnam pour les étrangers mariés à un(e) Vietnamien(ne), mais ils n'ont pas la même nature :</p>

    <table>
      <thead>
        <tr>
          <th>Caractéristique</th>
          <th>Visa TT</th>
          <th>TRC (Thẻ tạm trú)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Nature</td>
          <td>Visa apposé dans le passeport</td>
          <td>Carte physique séparée</td>
        </tr>
        <tr>
          <td>Durée</td>
          <td>12 mois maximum (renouvelable)</td>
          <td>3 ans maximum (renouvelable)</td>
        </tr>
        <tr>
          <td>Délivré par</td>
          <td>Département de l'Immigration</td>
          <td>Département de l'Immigration</td>
        </tr>
        <tr>
          <td>Praticité</td>
          <td>Pratique pour commencer</td>
          <td>Plus commode au quotidien</td>
        </tr>
        <tr>
          <td>Autorisation de travail</td>
          <td>Non automatique</td>
          <td>Non automatique</td>
        </tr>
      </tbody>
    </table>

    <p>Dans la pratique, beaucoup de Français mariés au Vietnam commencent par le visa TT, puis convertissent vers la TRC pour plus de confort. La TRC évite d'avoir à renouveler fréquemment et de sortir du territoire.</p>

    <h3>Le parcours type du Français fraîchement marié</h3>

    <p>Pour situer ces deux documents dans la vraie vie, voici la trajectoire classique d'un lecteur de ce blog :</p>

    <ol>
      <li><strong>Tu arrives au Vietnam</strong> avec l'exemption de 45 jours ou un e-visa — le régime « touriste » standard des Français (<a href="visa-vietnam-francais-guide-2026">le détail ici</a>).</li>
      <li><strong>Vous vous mariez</strong> au comité populaire (ou vous faites reconnaître votre mariage français via le ghi chú kết hôn).</li>
      <li><strong>L'acte de mariage vietnamien en main, ton statut change de nature :</strong> tu n'es plus un visiteur, tu es un membre de famille de citoyen vietnamien. C'est ce qui ouvre le droit au visa TT, avec ton conjoint comme parrain (bảo lãnh) de ta demande — c'est lui ou elle qui, administrativement, « répond de toi » auprès de l'immigration.</li>
      <li><strong>Après une période sous visa TT, tu passes à la TRC</strong> pour te débarrasser des renouvellements rapprochés. À partir de là, ta vie administrative vietnamienne se stabilise sur un cycle de plusieurs années.</li>
    </ol>

    <p>Ce rôle de parrain du conjoint vietnamien n'est pas un détail : c'est lui qui structure le dossier (ses papiers d'identité et de résidence sont exigés au même titre que les tiens), et c'est la raison pour laquelle la solidité juridique de votre mariage — acte vietnamien en règle, ou mariage français correctement enregistré — est le socle de tout le reste.</p>

    <h3>Et par rapport aux alternatives ?</h3>

    <p>Si tu hésites encore entre les statuts possibles pour vivre au Vietnam en étant marié :</p>

    <ul>
      <li><strong>Enchaîner les e-visas</strong> : possible, mais c'est vivre par tranches de 90 jours, avec des sorties de territoire régulières, des frais récurrents et zéro stabilité — absurde quand le mariage t'ouvre une voie dédiée. C'est la solution de transition, pas de destination.</li>
      <li><strong>Le visa DL (affaires)</strong> : pensé pour un autre usage, dépendant d'une entreprise qui t'invite — aucune raison de passer par là quand on a un conjoint vietnamien.</li>
      <li><strong>Le visa TT puis la TRC</strong> : la voie naturelle — la plus stable, la moins chère sur la durée, et la seule qui reflète ta vraie situation. C'est aussi celle qui simplifie tout le reste : banque, logement, <a href="visa-teletravail-digital-nomad-vietnam">télétravail depuis le Vietnam</a>.</li>
    </ul>

    <h2 id="section-2">Les conditions pour obtenir le visa TT / la TRC par mariage</h2>
    <ul>
      <li>Être légalement marié(e) à un(e) ressortissant(e) vietnamien(ne)</li>
      <li>Avoir un acte de mariage reconnu au Vietnam (acte du comité populaire)</li>
      <li>Ne pas faire l'objet d'une interdiction d'entrée ou de séjour sur le territoire vietnamien</li>
      <li>Avoir un passeport valide</li>
    </ul>
    <p>Attention : si le mariage a eu lieu à l'étranger (en France par exemple), il doit être enregistré au Vietnam via la procédure de <strong>ghi chú kết hôn</strong> (enregistrement de mariage étranger) auprès du Service de justice (Sở Tư pháp) de la province ou de la ville de résidence. Cette démarche est obligatoire pour que le mariage soit reconnu dans les actes administratifs vietnamiens.</p>

    <p>C'est le miroir exact de la <a href="transcription-mariage-service-central-nantes">transcription à Nantes</a> : chaque pays veut « inscrire » votre mariage dans son propre état civil pour lui donner effet chez lui. Un couple marié en France qui s'installe au Vietnam a donc les deux démarches à faire — la transcription française si le mariage a eu lieu au Vietnam, ou le ghi chú vietnamien si le mariage a eu lieu en France. Pour le ghi chú, ton acte de mariage français devra être légalisé et traduit en vietnamien — et là aussi, <a href="apostille-vietnam-francais-2026">l'entrée en vigueur de l'apostille le 11 septembre 2026</a> simplifie le circuit de légalisation entre les deux pays.</p>

    <h2 id="section-3">Documents à préparer</h2>
    <ul>
      <li>Formulaire de demande de TRC ou de visa TT (fourni par le Département de l'Immigration)</li>
      <li>Passeport valide (validité restante supérieure à la durée de la TRC demandée + au moins 30 jours)</li>
      <li>Photos d'identité</li>
      <li>Acte de mariage vietnamien original (giấy chứng nhận đăng ký kết hôn)</li>
      <li>Carte d'identité nationale (CCCD) ou livret de famille (sổ hộ khẩu) du conjoint vietnamien</li>
      <li>Justificatif de domicile (contrat de bail ou attestation)</li>
      <li>Enregistrement de domicile temporaire (đăng ký tạm trú) auprès du comité populaire local</li>
    </ul>

    <h2 id="section-4">Faire la demande</h2>
    <p>La demande se dépose au <strong>Département de l'Immigration (Cục Quản lý Xuất nhập cảnh)</strong> de la province ou de la ville où tu résides — à Hanoï ou à Hô Chi Minh-Ville pour la plupart des lecteurs de ce blog, ou au bureau provincial compétent si vous vivez ailleurs.</p>
    <p>La présence physique du demandeur est généralement requise. Le conjoint vietnamien peut accompagner mais n'est pas systématiquement obligatoire — vérifier auprès du département local.</p>
    <p>Délai de traitement : <strong>5 à 15 jours ouvrés</strong> selon le département de l'immigration. Coût gouvernemental : <strong>variable selon la province</strong> — généralement entre 200 000 et 600 000 VND pour la carte. Des frais de traduction et de légalisation s'ajoutent selon les documents.</p>

    <div class="tip-box">
      <strong>Conseil pratique :</strong> Fais l'enregistrement de résidence temporaire (đăng ký tạm trú) AVANT de déposer la demande de TRC — le Département de l'Immigration le demande souvent. Cet enregistrement se fait au comité populaire de ton quartier avec ton contrat de bail et le passeport.
    </div>

    <p>Sur place, prépare-toi à une expérience très vietnamienne : guichets numérotés, formulaires en vietnamien, files d'attente matinales — <strong>viens avec ton conjoint</strong>, pas seulement parce que ses documents font partie du dossier, mais parce que tout l'échange se fera en vietnamien. Beaucoup de couples passent par une agence de services d'immigration locale pour éviter les allers-retours ; c'est plus cher que la démarche directe, mais si votre situation a la moindre particularité (mariage français, adresse récente, passeport bientôt expirant), l'agence connaît les attentes exactes du bureau local et t'évite les dépôts refusés pour un détail. Les deux approches sont légitimes — question de budget contre temps.</p>

    <h2 id="section-5">Durée de validité et renouvellement</h2>
    <p>La TRC pour conjoint de Vietnamien est délivrée pour une durée de <strong>3 ans maximum</strong>. Elle est renouvelable aussi longtemps que le mariage est en vigueur.</p>
    <p>Le renouvellement doit être initié <strong>au moins 30 jours avant</strong> l'expiration de la TRC actuelle. Les documents à fournir sont similaires à la première demande.</p>

    <h3>Les pièges du cycle de vie de la TRC</h3>

    <ul>
      <li><strong>Le piège du passeport.</strong> La durée de ta TRC est plafonnée par la validité restante de ton passeport. Si ton passeport expire dans 18 mois, tu n'auras pas 3 ans de TRC — tu en auras moins. Le bon réflexe : <strong>renouvelle ton passeport français AVANT de demander ou renouveler la TRC</strong>, pour repartir sur la durée maximale. Le renouvellement de passeport se fait au consulat (Hanoï ou HCMV) — anticipe ses propres délais.</li>
      <li><strong>Pas de voyage pendant l'instruction.</strong> Ton passeport est déposé avec la demande : pendant les jours d'instruction, tu ne peux pas quitter le territoire. Ne planifie ni vol ni déplacement nécessitant ton passeport sur cette fenêtre — y compris les vols intérieurs, où le passeport est ta pièce d'identité.</li>
      <li><strong>Le changement d'adresse se déclare.</strong> Ton enregistrement de résidence (tạm trú) doit suivre tes déménagements. Une TRC rattachée à une adresse où tu n'habites plus, c'est le genre de désalignement administratif qui ressort toujours au pire moment — typiquement au renouvellement.</li>
      <li><strong>Garde une photocopie de tout, tout le temps.</strong> TRC, page d'identité du passeport, acte de mariage : un jeu de copies à la maison, un jeu dans le téléphone. Au Vietnam, on te demandera ces documents plus souvent qu'en France — hôtels, banques, administration — et la copie dépanne dans 90 % des cas.</li>
    </ul>

    <h2 id="section-6">Ce que tu peux (et ne peux pas) faire avec la TRC</h2>
    <p>Avec la TRC conjoint de Vietnamien :</p>
    <ul>
      <li>Séjourner légalement au Vietnam sans visa-run ni e-visa</li>
      <li>Entrer et sortir du Vietnam librement pendant la validité de la carte</li>
      <li>Ouvrir un compte bancaire au Vietnam plus facilement</li>
      <li>Accéder à certains services administratifs locaux</li>
    </ul>
    <p>Ce que la TRC ne permet pas automatiquement :</p>
    <ul>
      <li>Travailler pour un employeur vietnamien (un permis de travail reste souvent requis)</li>
      <li>Exercer certaines professions libérales réglementées</li>
      <li>Acheter des biens immobiliers dans les mêmes conditions qu'un Vietnamien — les étrangers avec TRC peuvent acheter des appartements (quota max 30% par immeuble, loi sur l'immobilier 2024) mais pas de terrain ni de maison individuelle dans certaines zones</li>
    </ul>

    <h3>Ce que la TRC change concrètement au quotidien</h3>

    <p>Au-delà du droit au séjour, la TRC est ce qui te fait passer du statut de « touriste de longue durée » à celui de résident aux yeux de tout l'écosystème vietnamien :</p>

    <ul>
      <li><strong>À la banque :</strong> l'ouverture de compte et l'accès aux services (carte locale, virements, applications bancaires) deviennent nettement plus simples avec une carte de résidence qu'avec un tampon de touriste — le détail dans <a href="banque-vietnam-francais">le guide banque au Vietnam</a>.</li>
      <li><strong>Pour le logement :</strong> un bail longue durée au nom d'un résident en règle rassure les propriétaires, et ton enregistrement de résidence est carré — voir <a href="louer-appartement-hanoi-etranger">louer un appartement à Hanoï</a>.</li>
      <li><strong>Pour les allers-retours France-Vietnam :</strong> entrées et sorties illimitées pendant la validité de la carte. Fini le calcul mental des jours d'exemption avant chaque réservation de billet — tu rentres voir ta famille en France quand tu veux, tu reviens quand tu veux.</li>
      <li><strong>Pour la suite du parcours :</strong> la TRC est aussi la marche vers les statuts plus pérennes (résidence permanente sous conditions d'ancienneté, notamment pour les conjoints de Vietnamiens) — un horizon à garder en tête si votre vie s'installe durablement au Vietnam.</li>
    </ul>

    <h2 id="section-7">En résumé : ta feuille de route TT → TRC</h2>

    <ol>
      <li><strong>Sécurise la base juridique :</strong> acte de mariage vietnamien en main (ou ghi chú kết hôn fait, si mariage en France).</li>
      <li><strong>Vérifie ton passeport :</strong> s'il expire dans moins de 3 ans et quelques mois, renouvelle-le d'abord au consulat pour ne pas amputer la durée de ta future TRC.</li>
      <li><strong>Enregistre ta résidence</strong> (đăng ký tạm trú) au comité populaire du quartier, bail à l'appui.</li>
      <li><strong>Monte le dossier avec ton conjoint-parrain</strong> : formulaire, photos, acte de mariage, CCCD et documents de résidence du conjoint, ton passeport.</li>
      <li><strong>Dépose au Département de l'Immigration</strong> de ta province — sur une fenêtre sans voyage prévu (passeport retenu 5 à 15 jours ouvrés).</li>
      <li><strong>À la remise de la carte :</strong> photocopies, photos dans le téléphone, alarme de renouvellement posée à J-60 avant expiration. Et respire : tu es officiellement résident au Vietnam.</li>
    </ol>

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
$current_slug = 'visa-tt-carte-residence-trc-mariage';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
