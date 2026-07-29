<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Assurance santé privée au Vietnam : mon expérience avec Manulife (avec Giang)';
$page_description = 'Comment choisir une assurance santé privée au Vietnam en tant qu\'expatrié ? Assurance locale type Manulife ou assurance internationale : garanties, pièges du contrat, et ce que ça couvre vraiment.';
$page_canonical   = SITE_URL . '/assurance-sante-privee-manulife-vietnam';
$page_og_title    = 'Assurance santé privée au Vietnam : mon expérience avec Manulife';
$page_og_desc     = 'Manulife Vietnam, garanties, exclusions, remboursements — ce qu\'un expatrié doit savoir avant de souscrire une assurance santé locale au Vietnam.';
$page_og_url      = SITE_URL . '/assurance-sante-privee-manulife-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Assurance santé privée au Vietnam : mon expérience avec Manulife',
  'datePublished'   => '2026-08-28',
  'dateModified'    => '2026-08-28',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/assurance-sante-privee-manulife-vietnam',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vie pratique au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'jade';
$article_hero_bg  = '#0e2a1a';
$article_glow     = 'rgba(42,154,100,0.15)';
$article_badge    = 'rgba(42,154,100,0.25)';
$article_badge_c  = '#4db890';

$article_category     = 'Vie pratique au Vietnam';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'Une assurance santé locale vietnamienne suffit-elle pour un expatrié français ?',
   'a' => 'Ça dépend du profil. Pour quelqu\'un installé durablement au Vietnam, en bonne santé, qui se fait soigner sur place, une assurance locale sérieuse couvre l\'essentiel du quotidien pour une prime bien plus basse qu\'une assurance internationale. Elle ne remplace pas, en revanche, une couverture pensée pour les allers-retours : soins en France, rapatriement, plafonds élevés. Beaucoup d\'expatriés combinent les deux logiques selon leur phase de vie.'],
  ['q' => 'Quelle est la différence entre l\'assurance santé publique vietnamienne (BHYT) et une assurance privée ?',
   'a' => 'La BHYT est l\'assurance santé sociale obligatoire, adossée au contrat de travail vietnamien : elle donne accès au système public, avec un parcours de soin imposé et des conditions de confort très éloignées des standards français. L\'assurance privée, elle, ouvre l\'accès aux hôpitaux privés et internationaux, en chambre individuelle, souvent sans avance de frais dans le réseau de l\'assureur. Les deux se cumulent : la BHYT vient avec l\'emploi, la privée s\'ajoute par choix.'],
  ['q' => 'Peut-on souscrire une assurance locale sans parler vietnamien ?',
   'a' => 'Oui, mais avec prudence. Les grands assureurs ont des documents commerciaux en anglais et des conseillers anglophones, surtout à Hanoï et Hô Chi Minh-Ville. En revanche, le contrat qui fait foi est généralement la version vietnamienne. Fais-toi accompagner — conjoint(e), ami(e) de confiance ou courtier — pour vérifier les exclusions et les délais de carence avant de signer, pas après le premier refus de remboursement.'],
  ['q' => 'Les maladies préexistantes sont-elles couvertes par les assurances vietnamiennes ?',
   'a' => 'En règle générale, non — comme presque partout dans le monde en assurance individuelle. Les affections déjà connues au moment de la souscription sont exclues ou soumises à conditions, et les contrats prévoient des délais de carence pour certaines catégories de soins (maternité notamment). D\'où l\'intérêt de souscrire tôt, quand on est en bonne santé, plutôt que d\'attendre le premier pépin.'],
  ['q' => 'Pourquoi ne donnes-tu pas les tarifs de Manulife dans cet article ?',
   'a' => 'Par honnêteté. Les primes dépendent de l\'âge, de l\'état de santé, des avenants choisis et évoluent chaque année — un tarif publié ici serait faux six mois plus tard, et ma situation familiale (ma femme travaille chez Manulife Vietnam) m\'impose une prudence supplémentaire. Le bon réflexe : demander des devis à plusieurs assureurs au même moment, à garanties comparables.'],
];

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Vie pratique au Vietnam</a><span class="breadcrumb-sep">›</span>
      <span>Assurance santé privée au Vietnam</span>
    </div>
    <span class="article-badge-hero">Vie pratique</span>
    <h1>Assurance santé privée au Vietnam : mon expérience avec Manulife (avec Giang)</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Août 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis &agrave; jour : Ao&ucirc;t 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-transparence">Transparence : pourquoi cet article est particulier</a></li>
      <li><a href="#section-1">Le système de santé vietnamien en 2 minutes</a></li>
      <li><a href="#section-2">Assurance locale ou assurance internationale ?</a></li>
      <li><a href="#section-3">Comment fonctionne une assurance privée locale</a></li>
      <li><a href="#section-4">Lire le contrat : les points qui changent tout</a></li>
      <li><a href="#section-5">Au quotidien : réseau, application, remboursements</a></li>
      <li><a href="#section-6">Pour qui l'assurance locale a du sens</a></li>
      <li><a href="#section-7">Notre organisation de couple mixte</a></li>
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
    <p><strong>La santé est le sujet que les expatriés au Vietnam traitent le plus mal : on y pense après le logement, après le visa, après tout — jusqu'au premier passage aux urgences.</strong> Cet article explique comment fonctionne une assurance santé privée locale au Vietnam, ce qu'elle couvre vraiment, ce qu'il faut vérifier avant de signer, et pour qui elle a du sens par rapport à une assurance internationale d'expatrié.</p>

    <h2 id="section-transparence">Transparence : pourquoi cet article est particulier</h2>
    <p>Disons-le d'entrée, parce que tu le liras de toute façon sur ma <a href="a-propos-capvietnam">page à propos</a> : <strong>ma femme, Giang, travaille pour Manulife Vietnam</strong>. C'est même par elle que j'ai découvert de l'intérieur comment fonctionne l'assurance au Vietnam — les contrats, les réseaux d'hôpitaux, les dossiers de remboursement, les malentendus entre clients étrangers et assureurs locaux.</p>
    <p>Ça me donne un point de vue rare parmi les blogueurs expat. Ça me crée aussi un devoir de prudence évident. Donc, règles du jeu de cet article :</p>
    <ul>
      <li><strong>Je ne vends rien</strong> : pas de lien d'affiliation, pas de mise en relation commerciale, pas de code promo.</li>
      <li><strong>Je ne cite aucun tarif ni aucune garantie chiffrée</strong> : les primes dépendent de l'âge, de la santé et des avenants, et changent chaque année. Tout chiffre publié ici serait périmé — et ma position familiale m'interdit de jouer au comparateur.</li>
      <li><strong>Je décris des mécanismes, pas des produits</strong> : ce que je t'explique vaut pour l'assurance privée locale en général — Manulife, mais aussi ses concurrents (Bao Viet, Prudential, AIA, Dai-ichi et les autres).</li>
    </ul>
    <p>Si tu cherches un comparatif des mutuelles internationales d'expatriés et de la CFE, il existe déjà : <a href="assurance-sante-vietnam-expat">le guide santé complet pour expatriés au Vietnam</a>. Ici, on parle de l'autre versant, celui dont personne ne parle en français : <strong>s'assurer localement, comme le font les Vietnamiens</strong>.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=1200&q=80" alt="Consultation médicale — assurance santé au Vietnam" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Le système de santé vietnamien en 2 minutes</h2>
    <p>Pour comprendre à quoi sert une assurance privée, il faut voir le paysage dans lequel elle s'insère. Le Vietnam a trois étages de soin :</p>
    <ul>
      <li><strong>Les hôpitaux publics</strong> : compétents sur le plan médical — les grands hôpitaux de Hanoï et Hô Chi Minh-Ville traitent des cas lourds tous les jours — mais saturés, avec des conditions d'accueil rudimentaires, peu d'anglais, et un fonctionnement déroutant pour un Français (paiement d'avance, famille qui assure une partie de l'intendance).</li>
      <li><strong>Les hôpitaux et cliniques privés vietnamiens</strong> : un secteur en croissance rapide, du cabinet de quartier aux grands groupes hospitaliers privés, avec un confort nettement supérieur et des tarifs qui restent locaux.</li>
      <li><strong>Les hôpitaux internationaux</strong> : standards occidentaux, personnel anglophone (parfois francophone), plateaux techniques modernes — et des prix qui se rapprochent de l'Europe. C'est là que vont la plupart des expatriés, et c'est là que l'absence d'assurance fait le plus mal. J'ai détaillé où se soigner en français dans <a href="hopitaux-medecins-francophones-vietnam">l'article sur les hôpitaux et médecins francophones</a>.</li>
    </ul>
    <p>À cela s'ajoute la <strong>BHYT</strong> (bảo hiểm y tế), l'assurance santé sociale obligatoire : si tu travailles au Vietnam avec un contrat local, tu y cotises automatiquement. Elle donne accès au système public avec un parcours de soin imposé. Utile en filet de sécurité, mais presque aucun expatrié ne s'en contente : elle ne couvre ni le privé ni l'international, là où nous nous faisons soigner en pratique.</p>
    <p>L'assurance privée — locale ou internationale — sert donc à une chose : <strong>transformer une facture imprévisible d'hôpital privé en une prime annuelle prévisible</strong>. Une nuit d'hospitalisation dans un établissement international, une appendicectomie, un accident de scooter : sans couverture, ces événements se paient comptant, carte bancaire sur le comptoir des admissions.</p>

    <h2 id="section-2">Assurance locale ou assurance internationale : la vraie différence</h2>
    <p>Quand un expatrié français cherche « assurance santé Vietnam », il tombe sur deux mondes qui ne se ressemblent pas :</p>
    <table>
      <thead>
        <tr>
          <th>Critère</th>
          <th>Assurance locale (type Manulife VN)</th>
          <th>Assurance internationale d'expat</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Zone de couverture</td>
          <td>Vietnam (parfois Asie du Sud-Est)</td>
          <td>Monde entier ou zones au choix, France incluse</td>
        </tr>
        <tr>
          <td>Niveau des primes</td>
          <td>Tarification locale, nettement plus accessible</td>
          <td>Tarification internationale, plusieurs fois plus élevée</td>
        </tr>
        <tr>
          <td>Plafonds de garantie</td>
          <td>Calibrés sur les coûts de soin vietnamiens</td>
          <td>Plafonds élevés, pensés pour les pays chers</td>
        </tr>
        <tr>
          <td>Rapatriement sanitaire</td>
          <td>Rarement inclus</td>
          <td>Généralement inclus</td>
        </tr>
        <tr>
          <td>Langue du contrat</td>
          <td>Vietnamien (version qui fait foi)</td>
          <td>Français ou anglais</td>
        </tr>
        <tr>
          <td>Réseau sans avance de frais</td>
          <td>Hôpitaux partenaires au Vietnam</td>
          <td>Réseaux internationaux, selon l'assureur</td>
        </tr>
      </tbody>
    </table>
    <p>Aucune des deux n'est « la bonne » dans l'absolu. L'assurance internationale achète une continuité France-Vietnam et des plafonds confortables ; l'assurance locale achète une couverture du quotidien au prix du marché local. La question n'est pas « laquelle est la meilleure » mais <strong>« où se passera ta vie médicale ces prochaines années ? »</strong>. On y revient dans la section profils.</p>

    <h2 id="section-3">Comment fonctionne une assurance privée locale (type Manulife)</h2>
    <p>Premier réflexe à avoir : au Vietnam, les grands assureurs privés sont d'abord des <strong>assureurs-vie</strong>. Le produit socle est souvent un contrat d'assurance-vie ou de prévoyance, auquel s'ajoutent des <strong>avenants santé</strong> (hospitalisation, maladies graves, accident, soins ambulatoires…). C'est une logique différente de la mutuelle française, et c'est la première source de malentendus chez les étrangers : on croit acheter « une mutuelle », on signe en réalité un contrat principal + des garanties additionnelles, chacune avec ses règles.</p>
    <p>Il existe aussi des produits santé « purs » (cartes santé annuelles, souvent distribuées par les assureurs non-vie ou en entreprise), mais le schéma vie + avenants domine le marché des particuliers. Concrètement, trois briques reviennent presque toujours :</p>
    <ul>
      <li><strong>L'hospitalisation</strong> : la garantie centrale — chambre, chirurgie, soins intensifs, avec des plafonds par séjour ou par an.</li>
      <li><strong>Les maladies graves</strong> (bệnh hiểm nghèo) : un capital versé en cas de diagnostic d'une maladie de la liste contractuelle (cancer, AVC…). Une logique de capital, pas de remboursement de frais.</li>
      <li><strong>L'ambulatoire et le dentaire</strong> : consultations, examens, médicaments — souvent en option, avec des plafonds bas et un suivi administratif plus exigeant.</li>
    </ul>
    <p>Le deuxième pilier du système, c'est le <strong>réseau d'hôpitaux partenaires</strong>. Dans les établissements du réseau, l'assureur règle directement l'hôpital (le « cashless » ou garantie de paiement) : tu présentes ta carte, tu signes, tu sors. Hors réseau, c'est l'autre régime : tu avances les frais, tu gardes chaque facture et chaque ordonnance, et tu déposes un dossier de remboursement. La qualité de vie entre les deux n'a rien à voir — <strong>vérifier que « tes » hôpitaux sont dans le réseau est un critère de choix à part entière</strong>, au même niveau que les garanties.</p>

    <h2 id="section-4">Lire le contrat : les points qui changent tout</h2>
    <p>Giang me le répète depuis des années : la plupart des litiges ne viennent pas de l'assureur qui « refuse de payer », mais d'un client qui n'a pas lu — ou pas pu lire — ce qu'il signait. Voici la check-list des clauses à examiner, quel que soit l'assureur :</p>
    <table>
      <thead>
        <tr>
          <th>Clause</th>
          <th>La question à poser avant de signer</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Délais de carence (thời gian chờ)</td>
          <td>Combien de temps après la souscription chaque garantie devient-elle active ? (la maternité et certaines maladies ont les délais les plus longs)</td>
        </tr>
        <tr>
          <td>Exclusions</td>
          <td>Maladies préexistantes, sports « à risque », conduite de moto sans permis vietnamien valide : qu'est-ce qui n'est jamais couvert ?</td>
        </tr>
        <tr>
          <td>Plafonds</td>
          <td>Par acte, par séjour, par an : à partir de quel montant est-ce toi qui paies ?</td>
        </tr>
        <tr>
          <td>Âge limite</td>
          <td>Jusqu'à quel âge peut-on souscrire, et surtout jusqu'à quel âge le contrat est-il renouvelable ?</td>
        </tr>
        <tr>
          <td>Réseau cashless</td>
          <td>Les hôpitaux internationaux de ta ville sont-ils partenaires, ou seulement les établissements vietnamiens ?</td>
        </tr>
        <tr>
          <td>Version qui fait foi</td>
          <td>Le contrat de référence est-il en vietnamien ? Qui, dans ton entourage, peut le relire ligne à ligne ?</td>
        </tr>
      </tbody>
    </table>
    <p>Le point de l'âge limite mérite un mot de plus : c'est lui qui disqualifie souvent l'assurance locale pour les retraités arrivant à 60 ans passés — beaucoup de produits n'acceptent plus de nouveaux assurés à cet âge, ou cessent de se renouveler quelques années plus tard. Si tu prépares une retraite au Vietnam, lis le volet santé du <a href="vivre-retraite-vietnam-guide">guide retraite</a> avec cette contrainte en tête. Et le point moto n'est pas un détail : l'accident de scooter est le risque n°1 de l'expatrié au Vietnam, et un permis non valide peut suffire à faire tomber la garantie.</p>

    <h2 id="section-5">Au quotidien : réseau, application, remboursements</h2>
    <p>Une fois le contrat signé, la vie avec une assurance locale est plus simple que sa souscription. Les grands assureurs vietnamiens sont passés au numérique de façon spectaculaire ces dernières années : application mobile pour consulter ses garanties, déclarer un sinistre, suivre un remboursement ; dossiers photographiés plutôt qu'envoyés par courrier ; virements rapides une fois le dossier validé.</p>
    <p>Trois habitudes à prendre dès le premier jour :</p>
    <ul>
      <li><strong>Garde tout.</strong> Factures rouges officielles (hóa đơn), ordonnances, comptes rendus : au Vietnam, le remboursement hors réseau vit et meurt par les justificatifs. Demande systématiquement la facture officielle — certains établissements ne la délivrent que sur demande.</li>
      <li><strong>Appelle avant les soins programmés.</strong> Pour une hospitalisation prévue, la garantie de paiement se demande à l'avance ; arriver à l'hôpital sans avoir prévenu l'assureur, c'est s'exposer à avancer les frais inutilement.</li>
      <li><strong>Déclare vite.</strong> Les contrats fixent des délais pour soumettre un dossier de remboursement. Un dossier complet déposé tôt se règle sans histoire ; un dossier incomplet déposé tard devient un feuilleton.</li>
    </ul>

    <h2 id="section-6">Pour qui l'assurance locale a du sens (et pour qui non)</h2>
    <ul>
      <li><strong>L'expatrié installé durablement, vie médicale au Vietnam</strong> : le cœur de cible. Salarié local, entrepreneur, conjoint de Vietnamien(ne) — si tes soins se passent au Vietnam, payer une prime internationale pour une couverture mondiale dont tu ne te sers pas est un luxe discutable.</li>
      <li><strong>Le couple mixte</strong> : cas d'école. Le/la conjoint(e) vietnamien(ne) est de toute façon dans l'écosystème local ; assurer le foyer chez le même assureur local est souvent la solution la plus cohérente, et le contrat en vietnamien cesse d'être un obstacle.</li>
      <li><strong>Le nomade ou le nouvel arrivant en phase de test</strong> : mauvais candidat. Si tu n'es pas sûr de rester, une <a href="assurance-voyage-vietnam">assurance voyage longue durée</a> puis une couverture internationale résiliable ont plus de sens qu'un contrat local pensé pour durer.</li>
      <li><strong>Celui qui veut garder un pied médical en France</strong> : l'assurance locale ne couvre pas tes séjours français. C'est le territoire de la CFE et des mutuelles internationales — détaillées dans le <a href="assurance-sante-vietnam-expat">guide santé expatrié</a>.</li>
      <li><strong>Le retraité de plus de 60 ans</strong> : à vérifier au cas par cas à cause des âges limites — et sans attendre, car chaque année compte à la souscription.</li>
    </ul>

    <h2 id="section-7">Notre organisation de couple mixte (sans les chiffres, promis)</h2>
    <p>Ce que je peux partager honnêtement, c'est la logique de notre foyer. Giang est vietnamienne, salariée au Vietnam : elle cumule la BHYT de son contrat de travail et la couverture privée — le schéma classique des cadres vietnamiens. Moi, je suis passé par les étapes que traversent la plupart des expatriés : assurance voyage au début, puis une vraie réflexion de long terme une fois installé, en pesant exactement les critères de cet article — où je me soigne, quels hôpitaux, quels plafonds, quelle continuité avec la France.</p>
    <p>Le vrai avantage de notre situation n'est pas un tarif préférentiel, c'est <strong>l'information</strong> : avoir à la maison quelqu'un qui lit un contrat d'assurance vietnamien comme toi tu lis un menu de restaurant change tout. C'est précisément ce que je te souhaite de reconstituer autour de toi : un(e) conjoint(e), un(e) ami(e) vietnamien(ne) de confiance ou un courtier indépendant qui relit les clauses <em>avant</em> signature. L'assurance est un produit de confiance dans un pays où tu ne maîtrises ni la langue juridique ni les usages — ne le souscris jamais seul dans ton coin.</p>

    <h2 id="section-erreurs">Les erreurs fréquentes</h2>
    <ul>
      <li><strong>Ne pas s'assurer du tout</strong> « parce que les soins ne sont pas chers au Vietnam » — vrai pour une consultation de quartier, faux pour une hospitalisation internationale. C'est le pari le plus coûteux de l'expatriation.</li>
      <li><strong>Confondre assurance-vie et couverture santé</strong> : signer un contrat d'épargne-assurance en croyant acheter une mutuelle, sans avenant hospitalisation digne de ce nom.</li>
      <li><strong>Signer sans faire relire la version vietnamienne</strong> : la plaquette anglaise est un résumé commercial, pas le contrat.</li>
      <li><strong>Découvrir les délais de carence en même temps que la grossesse</strong> : la maternité se planifie contractuellement des mois à l'avance — tout est dans <a href="grossesse-vietnam-hopital-cout-demarches">l'article grossesse au Vietnam</a>.</li>
      <li><strong>Négliger la clause moto</strong> : rouler sans permis vietnamien valide peut annuler la garantie accident, précisément sur le risque le plus probable.</li>
      <li><strong>Attendre d'être malade pour souscrire</strong> : les préexistances sont exclues partout ; l'assurance s'achète en bonne santé.</li>
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
$current_slug = 'assurance-sante-privee-manulife-vietnam';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
