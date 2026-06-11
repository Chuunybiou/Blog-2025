<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Travailler à distance depuis le Vietnam : le guide complet 2026';
$page_description = 'Télétravail, portage salarial, micro-entreprise ou contrat local : tout ce qu\'un Français doit savoir pour travailler légalement depuis le Vietnam. Fiscalité, visa, protection sociale.';
$page_canonical   = SITE_URL . '/travailler-a-distance-depuis-vietnam';
$page_og_title    = 'Travailler à distance depuis le Vietnam : guide complet 2026';
$page_og_desc     = 'Les 4 statuts possibles, la fiscalité, le visa et la protection sociale pour un Français qui travaille depuis le Vietnam.';
$page_og_url      = SITE_URL . '/travailler-a-distance-depuis-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Travailler à distance depuis le Vietnam : le guide complet 2026',
  'datePublished'   => '2026-06-11',
  'dateModified'    => '2026-06-11',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/travailler-a-distance-depuis-vietnam',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Argent & Travail',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'amber';
$article_hero_bg      = '#2a1f00';
$article_glow         = 'rgba(184,134,11,0.18)';
$article_badge        = 'rgba(184,134,11,0.25)';
$article_badge_c      = 'var(--amber-soft)';

$article_category     = 'Argent & Travail';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=argent';

$page_faq = [
  ['q' => 'Peut-on légalement télétravailler depuis le Vietnam pour une entreprise française ?',
   'a' => 'Oui, c\'est légalement possible. La question n\'est pas d\'avoir la permission du Vietnam (il n\'y a pas de contrôle à ce niveau), mais de gérer correctement la fiscalité côté français et les obligations de ton employeur. Si tu restes salarié français, ton employeur assume des risques liés à la création d\'un établissement stable au Vietnam [À VÉRIFIER avec un juriste]. Le portage salarial contourne ce problème proprement.'],
  ['q' => 'Dois-je payer mes impôts en France ou au Vietnam si je télétravaille ?',
   'a' => 'Cela dépend de ta résidence fiscale. Si tu passes plus de 183 jours au Vietnam dans l\'année et que ton centre d\'intérêts économiques y est, tu deviens résident fiscal vietnamien — et la convention de 1993 détermine alors quel pays impose quoi. Le détail est dans notre article sur la résidence fiscale et les 183 jours.'],
  ['q' => 'Quelle est la différence entre le portage salarial et la micro-entreprise pour un expat ?',
   'a' => 'Le portage salarial te maintient salarié d\'une société de portage française, avec cotisations retraite, chômage et mutuelle. La micro-entreprise te rend indépendant mais peut poser des problèmes si tu n\'es plus résident fiscal français — notamment pour la domiciliation de l\'activité. Le guide détaillé portage vs micro explique ça avec un arbre de décision.'],
  ['q' => 'Avec quel visa peut-on télétravailler depuis le Vietnam ?',
   'a' => 'Le Vietnam n\'a pas de visa "nomade digital" officiel. En pratique, la plupart des télétravailleur/ses étrangers utilisent le visa e-visa ou le visa d\'affaires (DL) pour des séjours longs. Si tu es marié(e) à un(e) Vietnamien(ne), le visa TT ou la TRC sont les options les plus stables. Le Vietnam tolère le télétravail en visa touriste, mais la zone est grise légalement.'],
  ['q' => 'Est-ce que je perds ma Sécurité sociale française en partant au Vietnam ?',
   'a' => 'Oui, tu perds automatiquement la Sécu si tu n\'es plus affilié à un régime obligatoire français. Les solutions : rester salarié (ton employeur cotise), adhérer à la CFE (Caisse des Français de l\'Étranger) qui maintient une couverture maladie et retraite, ou souscrire une assurance privée. Le cumul CFE + assurance internationale est la configuration la plus courante pour un expat qui travaille en indépendant.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam?cat=argent">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Travailler à distance depuis le Vietnam</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Travailler à distance depuis le Vietnam : le guide complet 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 14 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Les 4 statuts possibles</a></li>
      <li><a href="#section-2">Résidence fiscale : le vrai sujet</a></li>
      <li><a href="#section-3">Option 1 — Salarié français en télétravail</a></li>
      <li><a href="#section-4">Option 2 — Portage salarial</a></li>
      <li><a href="#section-5">Option 3 — Micro-entreprise ou freelance</a></li>
      <li><a href="#section-6">Quel visa pour télétravailler ?</a></li>
      <li><a href="#section-7">Recevoir et gérer son argent</a></li>
      <li><a href="#section-8">Protection sociale, santé et retraite</a></li>
      <li><a href="#section-9">Mon parcours</a></li>
      <li><a href="#section-faq">Questions fréquentes</a></li>
    </ol>
    <div class="toc-share">
      <div class="toc-share-label">Partager</div>
      <div class="share-btns">
        <a class="share-btn" onclick="window.open('https://www.facebook.com/sharer.php?u='+encodeURIComponent(location.href))">f</a>
        <a class="share-btn" onclick="navigator.clipboard.writeText(location.href);this.textContent='✓';setTimeout(()=>this.textContent='🔗',1500)">🔗</a>
      </div>
    </div>
  </aside>

  <main class="article-content">

    <p><strong>Oui, on peut travailler à distance depuis le Vietnam pour des clients ou un employeur en France.</strong> Des milliers de Français le font. Mais "possible" ne veut pas dire "sans conséquences" — il y a des statuts à choisir, une résidence fiscale à gérer et une protection sociale à ne pas laisser tomber. Ce guide fait le tour complet du sujet et renvoie vers chaque article détaillé.</p>

    <p>Ce dossier couvre : les statuts juridiques disponibles, la fiscalité France-Vietnam, le choix du visa, la gestion de l'argent et la protection sociale. Pour le vécu quotidien (cafés, coworkings, internet, apps), lis plutôt <a href="travailler-en-ligne-vietnam">travailler en ligne depuis le Vietnam : la vie pratique</a>.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=1200&q=80" alt="Télétravail depuis le Vietnam" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Les 4 statuts possibles : tableau comparatif</h2>
    <p>Avant tout, voici les options réelles pour un Français qui veut travailler depuis le Vietnam :</p>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Statut</th>
          <th>Légalité côté Vietnam</th>
          <th>Fiscalité</th>
          <th>Protection sociale</th>
          <th>Pour qui</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Salarié FR en télétravail</td>
          <td>Zone grise (pas de permis travail VN requis, mais risque d'établissement stable pour l'employeur)</td>
          <td>Dépend de la résidence fiscale</td>
          <td>Maintien Sécu FR via employeur</td>
          <td>CDI existant + employeur tolérant</td>
        </tr>
        <tr>
          <td>Portage salarial</td>
          <td>Zone grise similaire, mieux géré</td>
          <td>Cotisations en France sur revenus bruts</td>
          <td>Sécu + retraite + chômage via société de portage</td>
          <td>Freelance ou indépendant avec clients FR/EU</td>
        </tr>
        <tr>
          <td>Micro-entreprise</td>
          <td>Zone grise, dépend du client</td>
          <td>Cotisations URSSAF si résident fiscal FR [À VÉRIFIER]</td>
          <td>Partielle (selon régime)</td>
          <td>Faible CA, clients FR, résident fiscal FR</td>
        </tr>
        <tr>
          <td>Contrat ou société locale VN</td>
          <td>Légal avec permis de travail ou création de société</td>
          <td>Impôt au Vietnam sur revenus VN</td>
          <td>Sécu sociale vietnamienne [À VÉRIFIER]</td>
          <td>Long terme, intégration locale</td>
        </tr>
      </tbody>
    </table>
    </div>

    <p>Le statut le plus courant parmi les Français que je connais ici : le portage salarial. Il évite les frictions avec l'employeur français et offre une couverture sociale complète.</p>

    <h2 id="section-2">Le vrai sujet : où es-tu résident fiscal ?</h2>
    <p>Avant de choisir ton statut, tu dois trancher une question fondamentale : <strong>es-tu résident fiscal en France ou au Vietnam ?</strong> La réponse change tout — qui a le droit d'imposer tes revenus, quelles obligations déclaratives tu as, et dans quel pays tu dois cotiser.</p>
    <p>La règle des <strong>183 jours</strong> est souvent citée mais ce n'est qu'un des quatre critères français (domicile, séjour principal, activité professionnelle principale, intérêts économiques). Un salarié qui passe 6 mois au Vietnam peut rester résident fiscal français si son foyer familial et ses intérêts économiques y restent.</p>
    <div class="info-box">
      <strong>Guide dédié :</strong> → <a href="residence-fiscale-france-vietnam-183-jours">Résidence fiscale France-Vietnam et règle des 183 jours : les 4 critères, 3 cas concrets, erreurs fréquentes</a>
    </div>

    <h2 id="section-3">Option 1 — Rester salarié français en télétravail</h2>
    <p>C'est la solution la plus simple si tu as déjà un CDI et que ton employeur accepte. En pratique :</p>
    <ul>
      <li>Ton contrat de travail reste français, tu paies tes cotisations en France</li>
      <li>Ton employeur assume le risque de création d'un "établissement stable" au Vietnam [À VÉRIFIER : article du Code général des impôts et droit fiscal vietnamien applicables] — risque faible pour un salarié isolé, mais réel si plusieurs salariés travaillent depuis le même pays</li>
      <li>Tu restes couvert par la Sécurité sociale française (remboursement à l'étranger via CPAM + carte européenne si en déplacement en Europe)</li>
      <li>Problème pratique : les remboursements CPAM pour des soins au Vietnam sont souvent très partiels — une assurance complémentaire internationale est fortement conseillée</li>
    </ul>
    <p>Cette configuration fonctionne bien pour des séjours de quelques mois. Au-delà d'un an, la question de la résidence fiscale se pose sérieusement et l'employeur commence à demander des garanties.</p>

    <h2 id="section-4">Option 2 — Le portage salarial</h2>
    <p>Le portage salarial est, selon moi, <strong>l'option la plus propre pour un freelance français au Vietnam</strong>. Tu signes un contrat avec une société de portage française, tu lui envoies tes missions, elle facture tes clients, paie les cotisations sociales françaises et te verse un salaire net.</p>
    <ul>
      <li>Tu restes salarié sur le papier → Sécu, retraite, droit au chômage (si éligible)</li>
      <li>Pas de problème de domiciliation d'activité à l'étranger</li>
      <li>Frais de gestion de la société de portage : <strong>[À VÉRIFIER : typiquement 5–10 % du CA HT]</strong></li>
      <li>Idéal pour des clients français ou européens payant en euros</li>
    </ul>
    <div class="info-box">
      <strong>Guide dédié :</strong> → <a href="portage-salarial-depuis-vietnam">Portage salarial depuis le Vietnam : comment ça marche, quelle société choisir, simulation nette</a>
    </div>

    <h2 id="section-5">Option 3 — Micro-entreprise ou freelance</h2>
    <p>La micro-entreprise est tentante par sa simplicité. Mais elle cache un piège sérieux pour les expatriés : <strong>si tu n'es plus résident fiscal français, domicilier ton activité en France devient compliqué</strong> — et facturer en micro depuis l'étranger peut créer des obligations fiscales doubles [À VÉRIFIER : conditions URSSAF pour non-résidents].</p>
    <ul>
      <li>Possible si tu restes résident fiscal français (moins de 183 jours au Vietnam, foyer en France)</li>
      <li>Protection sociale partielle (pas de chômage, retraite limitée)</li>
      <li>Avantage : très simple comptablement, régime micro-BNC ou micro-BIC</li>
      <li>Inconvénient : si tu passes résident fiscal vietnamien, la situation devient floue</li>
    </ul>
    <div class="info-box">
      <strong>Comparatif détaillé :</strong> → <a href="portage-salarial-ou-micro-entreprise-vietnam">Portage salarial ou micro-entreprise quand on vit au Vietnam ? Tableau comparatif + arbre de décision</a>
    </div>

    <h2 id="section-6">Quel visa pour télétravailler depuis le Vietnam ?</h2>
    <p>Le Vietnam n'a pas de visa "digital nomad" officiel. Les options pratiques :</p>
    <ul>
      <li><strong>E-visa</strong> (90 jours, renouvelable) : utilisé par la majorité des nomades, mais le renouvellement consécutif est une zone grise</li>
      <li><strong>Visa DL</strong> (affaires, 3–12 mois) : plus adapté pour un séjour long, nécessite une lettre d'invitation d'une société vietnamienne</li>
      <li><strong>Visa TT / TRC</strong> : si tu es marié(e) à un(e) Vietnamien(ne), c'est l'option la plus stable → <a href="visa-tt-carte-residence-trc-mariage">guide visa TT et TRC pour conjoint de Vietnamien</a></li>
    </ul>
    <div class="warning-box">
      <strong>Zone grise :</strong> Télétravailler en visa touriste ou e-visa est toléré en pratique au Vietnam, mais non autorisé formellement. Aucun cas d'expulsion ou d'amende pour simple télétravail n'est documenté à ce jour — mais la situation réglementaire peut évoluer. [À VÉRIFIER : décisions récentes du Département de l'Immigration vietnamien]
    </div>
    <div class="info-box">
      <strong>Guide dédié :</strong> → <a href="visa-teletravail-digital-nomad-vietnam">Quel visa pour télétravailler depuis le Vietnam : e-visa, DL, TT/TRC — honnêteté sur les zones grises</a>
    </div>

    <h2 id="section-7">Recevoir et gérer son argent</h2>
    <p>Quand tes clients paient en euros et que tu vis en đồng, la gestion des transferts est critique. Ce que j'utilise :</p>
    <ul>
      <li><strong><a href="go.php?id=wise" rel="noopener sponsored">Wise</a></strong> : pour recevoir les paiements euros sur un IBAN européen, puis transférer au taux interbancaire vers ton compte vietnamien. C'est de loin l'option la moins chère (commission ~0,5 %). → <a href="transferer-argent-vietnam-wise">Guide complet Wise depuis le Vietnam</a></li>
      <li><strong>Compte vietnamien</strong> (Techcombank, VPBank) : indispensable pour les dépenses locales → <a href="banque-vietnam-francais">ouvrir un compte bancaire au Vietnam</a></li>
      <li><strong>Compte français (Fortuneo, N26, etc.)</strong> : à maintenir pour recevoir des virements français, payer tes impôts français → <a href="fortuneo-expat-compte-france">Fortuneo en expatriation : ce qu'il faut savoir</a></li>
    </ul>

    <h2 id="section-8">Protection sociale, santé et retraite</h2>
    <p>C'est le sujet qui fait le plus peur — et à raison. En quittant un emploi salarié français, tu perds progressivement ta couverture sociale. Les options :</p>
    <ul>
      <li><strong>Rester salarié ou en portage</strong> : tu conserves la Sécu française (la solution la plus simple)</li>
      <li><strong>CFE (Caisse des Français de l'Étranger)</strong> : adhésion volontaire, permet de maintenir une couverture maladie et de cotiser pour la retraite de base française [À VÉRIFIER : tarifs CFE 2026 selon tranche d'âge]</li>
      <li><strong>Assurance privée internationale</strong> : en complément ou en remplacement selon ta situation (ACS, April International, Cigna…) [À VÉRIFIER : prix moyens]</li>
    </ul>
    <div class="info-box">
      <strong>Guide dédié :</strong> → <a href="protection-sociale-cfe-retraite-vietnam">CFE, protection sociale et retraite quand on travaille depuis le Vietnam</a>
    </div>

    <h2 id="section-9">Mon parcours</h2>
    <p>[TON EXPÉRIENCE ICI : Comment tu as organisé ton travail à distance depuis Hanoï — quel statut tu utilises, comment tu gères les clients français, les transferts d'argent, la fiscalité. Ce paragraphe personnel est ce qui différencie cet article d'un guide générique.]</p>

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
      <p>Un email par mois. Désabonnement en un clic.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a>.</p>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français expatrié à Hanoï. Je travaille à distance pour des clients francophones depuis 2024 et je partage tout ce que j'ai appris sur la fiscalité, les statuts et la vie pratique.</p>
        <div class="author-links">
          <a href="https://www.tiktok.com/@proffrancaisetranger" target="_blank" rel="noopener">TikTok</a>
          <a href="a-propos-capvietnam">À propos</a>
        </div>
      </div>
    </div>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
$current_slug = 'travailler-a-distance-depuis-vietnam';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
