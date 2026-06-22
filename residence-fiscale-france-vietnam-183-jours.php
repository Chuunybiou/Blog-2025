<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Résidence fiscale France-Vietnam et règle des 183 jours : guide 2026';
$page_description = 'Résidence fiscale France ou Vietnam ? Les 4 critères français, la règle des 183 jours, comment la convention de 1993 tranche les conflits. 3 cas concrets pour expatriés.';
$page_canonical   = SITE_URL . '/residence-fiscale-france-vietnam-183-jours';
$page_og_title    = 'Résidence fiscale France-Vietnam : les 183 jours et les 4 critères expliqués';
$page_og_desc     = 'La règle des 183 jours n\'est pas la seule qui compte. Les 4 critères français de résidence fiscale, la convention France-Vietnam 1993, et 3 cas concrets.';
$page_og_url      = SITE_URL . '/residence-fiscale-france-vietnam-183-jours';
$page_og_image    = 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Résidence fiscale France-Vietnam et règle des 183 jours : guide 2026',
  'datePublished'   => '2026-06-11',
  'dateModified'    => '2026-06-11',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/residence-fiscale-france-vietnam-183-jours',
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
  ['q' => 'Si je passe 6 mois en France et 6 mois au Vietnam, où suis-je résident fiscal ?',
   'a' => 'La répartition à 50/50 ne tranche pas automatiquement. Les critères déterminants sont alors : où est ton foyer permanent (logement, famille) ? Où exerces-tu ton activité principale ? Où sont tes intérêts économiques (comptes, investissements) ? Si tout est partagé équitablement, la convention de 1993 prévoit un ordre de priorité des critères pour trancher. [À VÉRIFIER : articles 4 et suivants de la convention France-Vietnam 1993]'],
  ['q' => 'La règle des 183 jours s\'applique-t-elle à l\'année civile ou sur 12 mois glissants ?',
   'a' => 'En droit français, la résidence fiscale est appréciée sur l\'année civile (1er janvier au 31 décembre) [À VÉRIFIER : article 4B du CGI]. Au Vietnam, le calcul peut différer [À VÉRIFIER : droit fiscal vietnamien]. La convention parle d\'une "période de 12 mois" qui peut commencer à n\'importe quelle date — ce qui peut créer des situations où tu passes les 183 jours sur 12 mois mais pas sur l\'année civile. Consulte un fiscaliste pour une situation précise.'],
  ['q' => 'Mon employeur français peut-il refuser que je travaille au Vietnam si je change de résidence fiscale ?',
   'a' => 'Oui. Un changement de résidence fiscale peut avoir des conséquences pour ton employeur (risque d\'établissement stable au Vietnam, complexité de paie). Certains employeurs l\'acceptent, d\'autres non. Il est prudent d\'informer ton employeur avant le départ et de clarifier les implications ensemble. [À VÉRIFIER : conditions de ton contrat de travail]'],
  ['q' => 'Est-ce qu\'un couple franco-vietnamien au Vietnam est nécessairement résident fiscal vietnamien ?',
   'a' => 'Pas nécessairement, mais c\'est fréquent. Si vous vivez ensemble au Vietnam toute l\'année et que vos revenus principaux sont là, vous êtes très probablement résidents fiscaux vietnamiens. Mais si l\'un des conjoints conserve des liens forts avec la France (logement, famille, revenus), la situation peut être différente. Chaque situation est individuelle.'],
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
      <span>Résidence fiscale et 183 jours</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Résidence fiscale France-Vietnam et règle des 183 jours : les 4 critères expliqués</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 11 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi ça compte vraiment</a></li>
      <li><a href="#section-2">Les 4 critères français (article 4B CGI)</a></li>
      <li><a href="#section-3">Les critères vietnamiens</a></li>
      <li><a href="#section-4">Quand les deux pays revendiquent</a></li>
      <li><a href="#section-5">3 cas concrets</a></li>
      <li><a href="#section-6">Les erreurs fréquentes</a></li>
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

    <p><strong>La règle des 183 jours est la plus connue des règles de résidence fiscale. Mais elle n'est pas la seule — et elle ne suffit pas à trancher seule.</strong> Le droit fiscal français utilise 4 critères alternatifs, et la convention France-Vietnam de 1993 prévoit ses propres règles de départage. Voici ce que tu dois comprendre avant de partir.</p>

    <p>Cet article fait partie du dossier <a href="travailler-a-distance-depuis-vietnam">travailler à distance depuis le Vietnam</a>. Pour les conséquences concrètes sur ta déclaration, lis aussi <a href="declarer-impots-france-depuis-vietnam">déclarer ses impôts en France depuis le Vietnam</a> et <a href="fiscalite-expat-france-vietnam">la convention fiscale France-Vietnam expliquée</a>.</p>

    <div class="warning-box">
      <strong>Article technique :</strong> Ce sujet implique du droit fiscal international. Je partage ce que j'ai compris, avec des placeholders précis là où je ne suis pas certain. Pour ta situation personnelle, consulte un fiscaliste spécialisé expatriés. Une erreur de résidence fiscale peut coûter très cher.
    </div>

    <h2 id="section-1">Pourquoi la résidence fiscale est fondamentale</h2>
    <p>Ta résidence fiscale détermine :</p>
    <ul>
      <li><strong>Qui a le droit d'imposer tes revenus</strong> (et sur quoi : revenu mondial ou seulement revenus locaux)</li>
      <li><strong>Quelles obligations déclaratives</strong> tu as (formulaire non-résident 2042 NR, déclaration vietnamienne, les deux ?)</li>
      <li><strong>Quelles cotisations sociales</strong> sont dues et dans quel pays</li>
      <li><strong>Quels droits sociaux</strong> tu conserves (remboursement santé, retraite, chômage)</li>
    </ul>
    <p>Un mauvais positionnement peut entraîner une double imposition (les deux pays imposent), une sous-imposition (ni l'un ni l'autre, mais avec risque de redressement ultérieur), ou la perte de droits sociaux.</p>

    <h2 id="section-2">Les 4 critères français (article 4B du CGI)</h2>
    <p>En France, la résidence fiscale est définie par l'article 4B du Code général des impôts [À VÉRIFIER : texte exact en vigueur 2026]. Tu es considéré résident fiscal français si tu remplis <strong>au moins un</strong> de ces 4 critères :</p>

    <div class="table-wrap">
    <table class="comparison-table">
      <thead>
        <tr>
          <th>Critère</th>
          <th>Définition</th>
          <th>Exemple concret</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Foyer ou lieu de séjour principal</td>
          <td>Là où tu habites habituellement, où est ta famille (conjoint, enfants)</td>
          <td>Ta femme et tes enfants restent en France → tu es résident fiscal FR même si tu passes 9 mois au Vietnam</td>
        </tr>
        <tr>
          <td>Activité professionnelle principale</td>
          <td>L'activité qui génère l'essentiel de tes revenus ou qui occupe l'essentiel de ton temps</td>
          <td>Tu travailles pour des clients français depuis Hanoï → critère ambigu, dépend du contrat</td>
        </tr>
        <tr>
          <td>Centre des intérêts économiques</td>
          <td>Là où sont tes principaux investissements, comptes, propriétés</td>
          <td>Tu as un appartement en France que tu loues → intérêts économiques partiellement en France</td>
        </tr>
        <tr>
          <td>Séjour principal (règle des 183 jours)</td>
          <td>Plus de 183 jours en France dans l'année civile</td>
          <td>Tu passes 7 mois à Paris et 5 mois à Hanoï → résident fiscal français</td>
        </tr>
      </tbody>
    </table>
    </div>

    <p>Un seul critère suffit pour être résident fiscal français. Et <strong>les 183 jours au Vietnam (critère inverse)</strong> ne suffisent pas à te faire perdre la résidence fiscale française si l'un des autres critères reste rempli.</p>

    <h2 id="section-3">Les critères vietnamiens de résidence fiscale</h2>
    <p>Le Vietnam définit ses propres résidents fiscaux selon sa loi sur l'impôt sur le revenu des personnes physiques (LIRPP) [À VÉRIFIER : loi vietnamienne actuellement en vigueur, numéro et article exact]. Tu es résident fiscal vietnamien si :</p>
    <ul>
      <li>Tu séjournes au Vietnam pendant <strong>[À VÉRIFIER : 183 jours ou plus]</strong> dans l'année calendaire OU sur une période de 12 mois consécutifs à compter de la date de ta première arrivée</li>
      <li>OU tu as un logement permanent enregistré au Vietnam (bail long terme ou enregistrement de domicile temporaire)</li>
    </ul>
    <p>Si tu es résident fiscal vietnamien, le Vietnam impose tes revenus mondiaux (pas seulement les revenus de source vietnamienne). [À VÉRIFIER : taux PIT vietnamien 2026 selon tranches]</p>

    <h2 id="section-4">Quand les deux pays revendiquent : la convention de 1993</h2>
    <p>Si tu remplis les critères des deux pays simultanément (ce qui arrive souvent la première ou dernière année d'expatriation), la convention fiscale France-Vietnam signée en 1993 prévoit un mécanisme de départage ("tie-breaker rules") [À VÉRIFIER : article exact de la convention].</p>
    <p>Les critères de départage s'appliquent dans l'ordre suivant :</p>
    <ol>
      <li><strong>Foyer d'habitation permanent</strong> : dans quel pays as-tu une habitation permanente disponible ?</li>
      <li><strong>Centre des intérêts vitaux</strong> : dans quel pays tes liens personnels et économiques sont-ils les plus étroits ?</li>
      <li><strong>Séjour habituel</strong> : dans quel pays séjournes-tu le plus ?</li>
      <li><strong>Nationalité</strong> : si tout le reste est égal, la nationalité tranche</li>
      <li><strong>Accord amiable</strong> : si la nationalité ne tranche pas, les autorités compétentes des deux pays négocient</li>
    </ol>

    <h2 id="section-5">3 cas concrets</h2>

    <div class="info-box">
      <strong>Cas 1 — Le télétravailleur 8 mois/an au Vietnam</strong><br>
      Antoine travaille pour une boîte française en CDI. Il passe 8 mois à Hanoï (avec sa femme vietnamienne) et 4 mois en France (famille, amis). Ses comptes sont en France.<br><br>
      <strong>Résultat probable :</strong> Résident fiscal vietnamien (183+ jours VN, foyer au Vietnam avec sa femme). La France peut encore imposer ses revenus de source française selon la convention. Mais ses revenus de travail seront partiellement imposables au Vietnam. [À VÉRIFIER avec un fiscaliste pour sa situation exacte]
    </div>

    <div class="info-box">
      <strong>Cas 2 — Le couple mixte avec enfants</strong><br>
      Marie-Anne est française, vit à Hanoï avec son mari vietnamien et leurs enfants. Elle freelance pour des clients français. Elle n'a plus de logement en France.<br><br>
      <strong>Résultat probable :</strong> Résident fiscal vietnamien clairement. Son foyer, ses enfants, son activité sont au Vietnam. La France ne peut imposer que ses revenus de source française (si elle en a).
    </div>

    <div class="info-box">
      <strong>Cas 3 — Le nomade digital entre deux pays</strong><br>
      Julien fait 5 mois en France, 4 mois au Vietnam, 3 mois en Thaïlande. Ses clients sont français. Il a un appartement en France (propriétaire).<br><br>
      <strong>Résultat probable :</strong> Résident fiscal français (foyer permanent en France, moins de 183 jours au Vietnam, centre d'intérêts économiques en France). Ses revenus sont imposables en France sur l'ensemble de son activité.
    </div>

    <h2 id="section-6">Les erreurs fréquentes</h2>
    <ul>
      <li><strong>"Je passe 183 jours au Vietnam donc je ne paie plus d'impôts en France"</strong> → FAUX. Les 183 jours au Vietnam ne signifient pas la perte automatique de la résidence fiscale française si ton foyer ou tes intérêts économiques y restent.</li>
      <li><strong>"Je peux choisir mon pays de résidence fiscale"</strong> → FAUX. La résidence fiscale découle des faits, pas d'un choix. Essayer de "choisir" en manipulant les apparences expose à un redressement.</li>
      <li><strong>"Comme j'ai la nationalité française, je paie mes impôts en France"</strong> → FAUX. La nationalité n'est qu'un critère de départage en dernier recours. Un Français qui vit au Vietnam peut parfaitement être résident fiscal vietnamien.</li>
      <li><strong>"Je n'ai pas à le déclarer si personne ne le sait"</strong> → FAUX. Les échanges automatiques d'informations fiscales entre pays (norme CRS/OCDE) permettent aux administrations de repérer les incohérences.</li>
    </ul>

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
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
        <input type="email" name="email" placeholder="Ton adresse email" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a> — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français expatrié à Hanoï. Je partage mon parcours d'installation au Vietnam : démarches, vie de couple mixte et travail en ligne.</p>
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
$current_slug = 'residence-fiscale-france-vietnam-183-jours';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
