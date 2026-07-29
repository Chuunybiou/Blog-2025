<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Portage salarial ou micro-entreprise au Vietnam : lequel choisir ?';
$page_description = 'Portage salarial ou micro-entreprise quand on vit au Vietnam ? Tableau comparatif complet, piège de la domiciliation, arbre de décision pour freelances français expatriés.';
$page_canonical   = SITE_URL . '/portage-salarial-ou-micro-entreprise-vietnam';
$page_og_title    = 'Portage salarial ou micro-entreprise au Vietnam : comparatif 2026';
$page_og_desc     = 'Le piège de la micro-entreprise quand on n\'est plus résident fiscal français, et pourquoi le portage salarial est souvent plus sûr pour un expat au Vietnam.';
$page_og_url      = SITE_URL . '/portage-salarial-ou-micro-entreprise-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Portage salarial ou micro-entreprise au Vietnam : lequel choisir ?',
  'datePublished'   => '2026-06-11',
  'dateModified'    => '2026-06-11',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/portage-salarial-ou-micro-entreprise-vietnam',
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
  ['q' => 'Peut-on garder sa micro-entreprise quand on s\'installe au Vietnam ?',
   'a' => 'Techniquement oui, mais ça pose des problèmes. La micro-entreprise requiert une domiciliation en France (exigée par le Code de commerce). Si tu n\'es plus résident fiscal français, cette domiciliation peut être contestée par l\'URSSAF ou l\'administration fiscale. La situation est floue, pas automatiquement illégale, mais risquée si tu es contrôlé.'],
  ['q' => 'La micro-entreprise fonctionne-t-elle pour facturer des clients au Vietnam ?',
   'a' => 'Pour facturer des clients vietnamiens depuis une micro-entreprise française, les clients devront régler en euros vers ton compte français. Ce n\'est pas interdit, mais peu pratique pour des clients locaux. Pour des clients français ou européens depuis le Vietnam, ça fonctionne mieux.'],
  ['q' => 'Y a-t-il une limite de CA pour la micro-entreprise pertinente pour un expat ?',
   'a' => 'Le plafond de chiffre d\'affaires micro-entreprise pour les prestations de services (BNC et BIC) est de 77 700 € HT par an en 2026. Si tu dépasses ce seuil, tu bascules en régime réel, ce qui complexifie la comptabilité. Pour un freelance avec un bon CA, le portage salarial offre souvent plus de souplesse.'],
  ['q' => 'Peut-on passer de la micro-entreprise au portage salarial facilement ?',
   'a' => 'Oui. La fermeture d\'une micro-entreprise se fait en ligne sur autoentrepreneur.urssaf.fr. Dès que tu ouvres ton compte avec une société de portage et signes ton premier contrat, tu passes en portage. Il n\'y a pas de délai de carence obligatoire. Attention aux missions en cours et aux clients déjà facturés depuis la micro.'],
  ['q' => 'Le portage salarial me couvre-t-il pour la santé au Vietnam ?',
   'a' => 'Le salaire porté cotise au régime général français, mais la Sécurité sociale française ne rembourse pas les soins reçus au Vietnam dans la vie courante. En vivant sur place, il faut compléter avec la CFE (Caisse des Français de l\'Étranger) et/ou une assurance santé internationale. Une bonne société de portage habituée aux expatriés saura t\'orienter sur ce montage.'],
  ['q' => 'Peut-on cumuler micro-entreprise et portage salarial ?',
   'a' => 'En droit français, le cumul des deux statuts est possible (certains gardent la micro pour une activité secondaire). Mais pour un expatrié au Vietnam, le cumul cumule aussi les problèmes : la fragilité de domiciliation de la micro ne disparaît pas parce qu\'un portage existe à côté. Si tu n\'es plus résident fiscal français, simplifier vers un seul statut propre est presque toujours la meilleure décision.'],
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
      <span>Portage ou micro-entreprise au Vietnam</span>
    </div>
    <span class="article-badge-hero">Emploi &amp; Entreprendre</span>
    <h1>Portage salarial ou micro-entreprise quand on vit au Vietnam ? Le vrai comparatif</h1>
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
      <li><a href="#section-0">Comment fonctionnent les deux statuts</a></li>
      <li><a href="#section-1">Le piège de la micro-entreprise à l'étranger</a></li>
      <li><a href="#section-2">Tableau comparatif complet</a></li>
      <li><a href="#section-3">Arbre de décision</a></li>
      <li><a href="#section-4">Le cas "résident fiscal vietnamien"</a></li>
      <li><a href="#section-5">Le cas "résident fiscal français"</a></li>
      <li><a href="#section-6">Trois profils types</a></li>
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

    <p><strong>La micro-entreprise a une réputation de simplicité qui attire beaucoup d'expats. Mais dès qu'on n'est plus résident fiscal français, cette simplicité devient un flou juridique inconfortable.</strong> Le portage salarial coûte plus cher, mais il est plus propre pour un Français installé au Vietnam à long terme.</p>

    <p>Cet article fait partie du dossier <a href="travailler-a-distance-depuis-vietnam">travailler à distance depuis le Vietnam</a>. Si tu es sûr de vouloir le portage, le <a href="portage-salarial-depuis-vietnam">guide complet du portage salarial depuis le Vietnam</a> t'attend.</p>

    <h2 id="section-0">Rappel express : comment fonctionnent les deux statuts</h2>

    <p>Pour ceux qui découvrent le sujet, remettons les deux mécaniques à plat :</p>

    <ul>
      <li><strong>La micro-entreprise</strong> : tu es ton propre patron, immatriculé en France. Tu factures tes clients directement, tu encaisses tout, et tu reverses un pourcentage forfaitaire de ton chiffre d'affaires en cotisations sociales (plus l'impôt). Zéro intermédiaire, comptabilité minimale — c'est le statut « couteau suisse » du freelance français.</li>
      <li><strong>Le portage salarial</strong> : une société de portage devient officiellement <em>ton employeur</em>. C'est elle qui signe le contrat commercial avec ton client, qui facture, qui encaisse — puis qui te reverse le tout sous forme de <em>salaire</em>, après déduction des cotisations sociales complètes et de ses frais de gestion (généralement quelques pourcents du chiffre d'affaires). Tu es juridiquement salarié, avec la protection sociale qui va avec, tout en travaillant comme un indépendant.</li>
    </ul>

    <p>La différence philosophique tient en une phrase : <strong>la micro-entreprise optimise le net immédiat, le portage optimise le statut</strong>. Et quand on vit à 10 000 km de la France, le statut pèse soudain beaucoup plus lourd qu'on ne le pensait — parce que la question n'est plus seulement « combien il me reste à la fin du mois », mais « qu'est-ce qui tient juridiquement debout quand ma vie entière s'est déplacée dans un autre pays ».</p>

    <h2 id="section-1">Le piège de la micro-entreprise quand on n'est plus résident fiscal français</h2>
    <p>Voici le problème concret. La micro-entreprise est un régime fiscal et social français. Elle suppose que :</p>
    <ul>
      <li>Ton activité est domiciliée en France (adresse professionnelle française obligatoire pour l'immatriculation)</li>
      <li>Tu paies tes cotisations sociales en France (SSI / Sécurité sociale des indépendants)</li>
      <li>Tu remplis une déclaration de revenus française</li>
    </ul>
    <p>Si tu passes 10 mois par an au Vietnam, que tu y vis, que tu y travailles depuis ton appartement à Hanoï… l'administration française peut estimer que ton activité n'est plus domiciliée en France. Et là, la situation devient compliquée :</p>
    <ul>
      <li>L'URSSAF peut remettre en cause tes cotisations</li>
      <li>L'administration fiscale peut demander des arriérés si elle considère que tu aurais dû payer au Vietnam</li>
      <li>La domiciliation fictive (tu louges une adresse en France sans y travailler) est légalement risquée</li>
    </ul>

    <div class="warning-box">
      <strong>Ce n'est pas automatiquement interdit</strong>, et des milliers de Français le font sans problème. Mais en cas de contrôle fiscal, la situation est difficile à défendre si ta vie entière est au Vietnam.
    </div>

    <h3>Les fausses bonnes idées qu'on lit partout dans les groupes d'expats</h3>

    <p>Trois arguments reviennent en boucle sur Facebook pour justifier de garder sa micro en vivant au Vietnam. Passons-les au crible honnêtement :</p>

    <ul>
      <li><strong>« Personne ne contrôle, tout le monde le fait. »</strong> C'est en partie vrai — et c'est exactement ce qui rend l'argument dangereux. L'absence de contrôle n'est pas un droit acquis : c'est une exposition qui court. Les échanges automatiques d'informations bancaires entre pays progressent chaque année, et un contrôle rétroactif porte sur plusieurs années d'arriérés, majorations comprises. Tu ne paries pas sur « c'est légal », tu paries sur « je ne me ferai pas prendre » — nuance importante quand on construit une vie de famille.</li>
      <li><strong>« Je garde l'adresse de mes parents, c'est ma domiciliation. »</strong> Une boîte aux lettres n'est pas une activité. Si ton activité réelle (ton ordinateur, tes journées de travail, ta vie) est à Hanoï, l'adresse de Tourcoing ne crée pas de la substance économique en France. C'est précisément la définition de la domiciliation de complaisance.</li>
      <li><strong>« Je facture en ligne, mes revenus sont invisibles. »</strong> Tes clients français déduisent tes factures de leur comptabilité, ta banque française voit tes encaissements, et ton train de vie vietnamien laisse des traces bancaires. « Invisible » est le mot le plus optimiste du vocabulaire fiscal.</li>
    </ul>

    <p>Encore une fois : beaucoup de gens vivent des années dans ce flou sans incident. Ce blog ne fait pas la morale — il te dit juste où est le risque, pour que ton choix soit un choix informé et pas une habitude héritée.</p>

    <h2 id="section-2">Tableau comparatif complet</h2>
    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Critère</th>
          <th>Portage salarial</th>
          <th>Micro-entreprise</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Retraite française</td>
          <td>✅ Cotisations complètes</td>
          <td>Partielle (SSI/RSI)</td>
        </tr>
        <tr>
          <td>Assurance chômage</td>
          <td>✅ Oui (si éligible ARE)</td>
          <td>❌ Non</td>
        </tr>
        <tr>
          <td>Sécurité sociale</td>
          <td>✅ Régime général</td>
          <td>Partielle (SSI)</td>
        </tr>
        <tr>
          <td>Charges sociales</td>
          <td>Élevées (~45–50 % sur brut)</td>
          <td>Faibles (micro)</td>
        </tr>
        <tr>
          <td>Complexité admin</td>
          <td>Délégué à la société</td>
          <td>✅ Très simple</td>
        </tr>
        <tr>
          <td>Crédibilité client FR</td>
          <td>✅ Facture pro, contrat</td>
          <td>Correcte</td>
        </tr>
        <tr>
          <td>Compatibilité expatriation longue durée</td>
          <td>✅ Bonne</td>
          <td>⚠️ Risquée si non-résident fiscal</td>
        </tr>
        <tr>
          <td>CA maximum annuel</td>
          <td>Illimité</td>
          <td>77 700 € HT/an (BNC et BIC services, seuil 2026)</td>
        </tr>
        <tr>
          <td>Coût pour 3 000 € CA/mois</td>
          <td>~1 430 € nets <small>(après charges patronales + salariales)</small></td>
          <td>~2 340 € nets de cotisations <small>(taux BNC 22% — avant IR)</small></td>
        </tr>
        <tr>
          <td>Problème domiciliation</td>
          <td>Non (société en France)</td>
          <td>⚠️ Oui si non-résident</td>
        </tr>
      </tbody>
    </table>
    </div>

    <h2 id="section-3">Arbre de décision simplifié</h2>

    <div class="info-box">
      <strong>Passe plus de 183 jours/an au Vietnam ?</strong><br><br>
      → <strong>OUI</strong> : tu es potentiellement résident fiscal vietnamien → le portage salarial est plus sécurisé<br>
      → <strong>NON</strong> : tu restes résident fiscal français → la micro-entreprise est plus facile à maintenir<br><br>
      <strong>Ton CA dépasse 5 000 €/mois ?</strong><br><br>
      → <strong>OUI</strong> : le portage salarial devient compétitif même en charges (meilleure protection sociale)<br>
      → <strong>NON</strong> : la micro-entreprise reste souvent plus avantageuse si résident fiscal français<br><br>
      <strong>Tu veux les droits au chômage ?</strong><br><br>
      → <strong>OUI</strong> : portage salarial obligatoire<br>
      → <strong>NON</strong> : les deux options sont possibles
    </div>

    <h2 id="section-4">Le cas "résident fiscal vietnamien"</h2>
    <p>Si tu passes l'essentiel de ton temps au Vietnam (183+ jours) et que tes intérêts économiques principaux y sont, la loi vietnamienne te considère résident fiscal local. Dans ce cas :</p>
    <ul>
      <li>Le Vietnam a le droit d'imposer tes revenus mondiaux (Loi sur l'impôt sur le revenu des personnes physiques — Loi n°04/2007/QH12 modifiée, article 2)</li>
      <li>La convention France-Vietnam de 1993 répartit les droits d'imposition entre les deux pays</li>
      <li>Maintenir une micro-entreprise française dans ce contexte est très ambigu</li>
      <li>Le portage salarial, lui, est clairement un revenu de source française — la convention lui applique des règles précises</li>
    </ul>
    <p>Lire l'article complet : <a href="residence-fiscale-france-vietnam-183-jours">résidence fiscale France-Vietnam et règle des 183 jours</a>.</p>

    <h3>Bien choisir sa société de portage quand on vit au Vietnam</h3>

    <p>Toutes les sociétés de portage ne se valent pas pour un expatrié. Avant de signer, pose ces questions précises — les réponses trient très vite le marché :</p>

    <ul>
      <li><strong>« Acceptez-vous les salariés portés résidant hors de France ? »</strong> Certaines sociétés refusent ou tolèrent sans le dire ; d'autres ont une vraie pratique de l'expatriation. Tu veux une réponse écrite et assumée, pas un flou.</li>
      <li><strong>« Comment gérez-vous ma situation au regard de la convention fiscale France-Vietnam ? »</strong> Si ton interlocuteur ne comprend pas la question, change de société.</li>
      <li><strong>« Quelles options pour ma couverture santé à l'étranger ? »</strong> Le salaire porté cotise au régime général français, mais vivre au Vietnam implique de penser <a href="protection-sociale-cfe-retraite-vietnam">CFE</a> et/ou assurance internationale en complément — une bonne société de portage sait t'orienter.</li>
      <li><strong>Les frais réels, tous compris :</strong> frais de gestion affichés, mais aussi frais cachés (ouverture de compte d'activité, assurance RC pro, frais de virement). Demande une <strong>simulation écrite complète</strong> sur ton chiffre d'affaires réel, du CA facturé jusqu'au net viré sur ton compte.</li>
      <li><strong>La logistique bancaire :</strong> le salaire arrive sur ton compte français — à toi ensuite de le faire vivre entre la France et le Vietnam au meilleur taux (c'est exactement le job de <a href="transferer-argent-vietnam-wise">Wise, détaillé ici</a>).</li>
    </ul>

    <h3>Et la troisième voie : le statut vietnamien ?</h3>

    <p>Ce comparatif oppose deux statuts <em>français</em>, mais soyons complets : si ta vie et tes clients basculent durablement au Vietnam, la question du <strong>statut local</strong> finira par se poser — création d'une société vietnamienne ou activité enregistrée sur place, avec à la clé un vrai permis de travail et une situation limpide côté vietnamien. C'est un chantier d'une toute autre ampleur (capital, licences, comptabilité locale), que j'ai commencé à défricher dans <a href="creer-entreprise-vietnam-statuts-juridiques">créer une entreprise au Vietnam</a>. Pour la plupart des freelances franco-vietnamiens, la trajectoire réaliste est : portage salarial d'abord, statut local seulement si le centre de gravité économique bascule vraiment au Vietnam.</p>

    <h2 id="section-5">Le cas "résident fiscal français"</h2>
    <p>Si tu passes moins de 183 jours au Vietnam dans l'année ET que ton foyer principal, tes comptes, ta famille restent en France… tu restes résident fiscal français. Dans ce cas :</p>
    <ul>
      <li>La micro-entreprise fonctionne normalement</li>
      <li>Tu paies tes impôts en France sur l'ensemble de tes revenus</li>
      <li>Le portage reste une option (et souvent meilleure pour la protection sociale), mais la micro n'est pas problématique</li>
    </ul>

    <p>Attention quand même au <strong>glissement progressif</strong>, le scénario le plus courant chez les couples franco-vietnamiens : la première année tu passes trois mois au Vietnam, la deuxième cinq, la troisième huit... et personne ne refait jamais l'analyse fiscale. Le bon réflexe : <strong>refais le point chaque année en décembre</strong> — jours passés dans chaque pays, localisation du foyer, des comptes, des clients. Le jour où les curseurs basculent, c'est l'année où il faut changer de statut, pas trois ans après.</p>

    <h2 id="section-6">Trois profils types, trois réponses</h2>

    <p>Pour rendre l'arbre de décision plus concret, voici trois situations que je croise en permanence dans les groupes d'expatriés francophones — et la réponse qui s'impose dans chaque cas :</p>

    <ul>
      <li><strong>Le développeur freelance installé à Hanoï, 100 % de clients français, marié à une Vietnamienne, aucune intention de rentrer.</strong> Résidence fiscale vietnamienne quasi certaine (vie entière au Vietnam). Maintenir une micro-entreprise « domiciliée » chez ses parents en France, c'est exactement le montage fragile décrit plus haut. → <strong>Portage salarial</strong>, sans hésitation, avec CFE ou assurance internationale pour la santé.</li>
      <li><strong>La consultante qui alterne — 5 mois au Vietnam l'hiver, 7 mois en France où vivent ses clients et sa famille.</strong> Résidence fiscale française conservée (foyer et intérêts économiques en France, moins de 183 jours au Vietnam). → <strong>Micro-entreprise parfaitement défendable</strong>, portage seulement si elle veut le chômage et la retraite pleine.</li>
      <li><strong>Le prof de français en ligne au CA modeste, installé à Đà Nẵng, revenus ~1 500 €/mois.</strong> Le cas douloureux : résident fiscal vietnamien (donc micro fragile), mais un CA sur lequel les ~45-50 % de charges du portage font très mal. C'est le profil qui doit vraiment poser toutes les options sur la table — portage en acceptant le coût de la conformité, ou structuration locale à terme — idéalement avec une consultation fiscale à l'appui. Il n'y a pas de réponse magique, seulement des arbitrages assumés.</li>
    </ul>

    <p>Tu te reconnais dans le premier ou le troisième profil ? Le <a href="portage-salarial-depuis-vietnam">guide complet du portage depuis le Vietnam</a> entre dans le détail des simulations et du fonctionnement au quotidien.</p>

    <h3>Ce que ton statut change pour ton couple</h3>

    <p>Dernier angle, rarement mentionné dans les comparatifs fiscaux, et pourtant central pour les lecteurs de ce blog : <strong>ton statut professionnel est une pièce de dossier dans quasiment toutes les démarches de votre vie de couple mixte</strong>. Des fiches de paie de portage salarial — lisibles, régulières, françaises — sont un document que toutes les administrations comprennent instantanément : le Département de l'Immigration vietnamien pour ta <a href="visa-tt-carte-residence-trc-mariage">TRC</a>, le consulat pour un <a href="visa-schengen-belle-famille-vietnamienne">visa Schengen de la belle-famille</a> dont tu te portes garant, une banque pour un crédit, un propriétaire pour un bail. Un chiffre d'affaires de micro-entreprise en zone grise de domiciliation, c'est l'inverse : chaque dossier devient une explication. La stabilité administrative n'a pas de ligne dans le tableau comparatif — mais quand on construit une vie à cheval sur deux pays, elle vaut souvent plus que quelques points de cotisations.</p>

    <div class="warning-box">
      <strong>Disclaimer :</strong> Cet article partage mon expérience et des informations générales, pas un conseil fiscal ou juridique personnalisé. Pour ta situation précise, consulte un expert-comptable ou un avocat fiscaliste spécialisé en expatriation.
    </div>

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
$current_slug = 'portage-salarial-ou-micro-entreprise-vietnam';
$current_cat  = 'emploi';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
