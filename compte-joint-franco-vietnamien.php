<?php
$page_title       = 'Compte joint franco-vietnamien : pourquoi c\'est presque impossible (et ma stratégie multi-comptes 2026)';
$page_description = 'Aucune banque française n\'accepte un vrai compte joint avec une conjointe vietnamienne non-résidente. Après 2 ans de tests (Boursorama, Fortuneo, Wealthsimple, Wise, Revolut, Vietcombank), voici ma stratégie multi-comptes qui fonctionne en 2026.';
$page_canonical   = 'https://www.blog-capvietnam.fr/compte-joint-franco-vietnamien';
$page_og_title    = 'Compte joint franco-vietnamien : pourquoi c\'est presque impossible';
$page_og_desc     = 'Aucune banque française n\'accepte un vrai compte joint avec une conjointe vietnamienne non-résidente. Après 2 ans de tests (Boursorama, Fortuneo, Wealthsimple, Wise, Revolut, Vietcombank), voici ma stratégie multi-comptes qui fonctionne en 2026.';
$page_og_url      = 'https://www.blog-capvietnam.fr/compte-joint-franco-vietnamien';
$page_og_image    = 'https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80';
$page_schema      = '{"@context":"https://schema.org","@type":"Article","headline":"Compte joint franco-vietnamien : pourquoi c\'est presque impossible et la stratégie multi-comptes qu\'on utilise à la place","datePublished":"2026-05-15","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://www.blog-capvietnam.fr/a-propos-capvietnam"},"publisher":{"@type":"Organization","name":"Anthony Bouillon"},"mainEntityOfPage":"https://www.blog-capvietnam.fr/compte-joint-franco-vietnamien","inLanguage":"fr","articleSection":"Couple franco-vietnamien"}';

$article_color        = 'jade';
$article_hero_bg      = '#0e3020';
$article_glow         = 'rgba(27,107,82,0.18)';
$article_badge        = 'rgba(27,107,82,0.22)';
$article_badge_c      = '#6bc98a';
$article_category     = 'Couple franco-vietnamien';
$article_category_url = 'https://www.blog-capvietnam.fr/articles-capvietnam';

$page_faq = [
  ['q' => 'Peut-on ouvrir un compte joint en France avec un conjoint vietnamien ?',
   'a' => 'Oui, c\'est possible. Les banques françaises peuvent ouvrir un compte joint avec un co-titulaire étranger non-résident, mais les exigences documentaires varient fortement d\'une banque à l\'autre. Les néobanques (Wise, Revolut) proposent des alternatives plus souples.'],
  ['q' => 'Quelle est la meilleure solution pour transférer de l\'argent entre la France et le Vietnam ?',
   'a' => 'Wise est la solution la plus compétitive pour les transferts EUR→VND en 2026 : taux de change réel, frais transparents, virement sous 1-2 jours ouvrés. Les banques classiques prélèvent des frais beaucoup plus élevés.'],
  ['q' => 'Un étranger peut-il ouvrir un compte bancaire au Vietnam ?',
   'a' => 'Oui, avec un passeport valide et un visa en cours. Vietcombank est la banque que j\'ai testée personnellement : compte ouvert en moins d\'une heure, application en anglais, frais de tenue de compte autour de 20 000 ₫/mois. D\'autres banques acceptent aussi les étrangers, mais je ne parle que de ce que j\'ai vérifié.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Couple franco-vietnamien</a><span class="breadcrumb-sep">›</span>
      <span>Compte joint</span>
    </div>
    <span class="article-badge-hero">Couple franco-vietnamien</span>
    <h1>Compte joint franco-vietnamien : pourquoi c'est (presque) impossible et la stratégie multi-comptes qu'on utilise à la place</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 15 mai 2026</span>
      <span>⏱ 9 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">La situation de départ</a></li>
      <li><a href="#section-2">Compte joint en France</a></li>
      <li><a href="#section-3">Documents demandés</a></li>
      <li><a href="#section-4">Compte au Vietnam</a></li>
      <li><a href="#section-5">Notre organisation réelle</a></li>
      <li><a href="#section-6">Comparatif des solutions</a></li>
      <li><a href="#section-7">Les erreurs à éviter</a></li>
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
    <p><strong>Ma femme est vietnamienne. Nous vivons entre Paris et Hanoï.</strong> Et notre vie financière ne ressemble à aucun manuel bancaire standard. Deux pays, deux monnaies, deux systèmes fiscaux, et des banques qui ne savent pas toujours quoi faire de nous. Voici ce que j'ai appris — parfois à mes dépens — sur la gestion de l'argent dans un couple franco-vietnamien.</p>

    <p>Ce n'est pas un article théorique. C'est ce que nous faisons concrètement en 2026, avec les outils qui fonctionnent vraiment et les problèmes que j'aurais voulu anticiper.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1554224154-26032ffc0d07?w=1200&q=80" alt="Gestion finances couple expatrié" width="1200" height="675" loading="lazy">

    <h2 id="section-1">La situation de départ : gérer l'argent à deux entre deux pays</h2>
    <p>Quand on forme un couple mixte franco-vietnamien, la question de l'argent se pose différemment selon où l'on vit. Il y a plusieurs configurations possibles :</p>
    <ul>
      <li><strong>Elle est en France avec un visa</strong> — co-titulaire possible sur un compte français, mais les banques compliquent.</li>
      <li><strong>Il est au Vietnam</strong> — il peut ouvrir un compte local, mais rapatrier l'argent ou gérer conjointement reste laborieux avec une banque classique.</li>
      <li><strong>Vous naviguez entre les deux pays</strong> — c'est notre cas, et c'est là que les solutions hybrides (Wise, Revolut) deviennent indispensables.</li>
    </ul>
    <p>La vraie difficulté n'est pas le compte lui-même : c'est l'asymétrie administrative. Lui a un IBAN français, une adresse fiscale en France, un historique bancaire. Elle a un compte vietnamien en VND, un passeport étranger, et aucune trace dans le système bancaire européen. Les banques classiques ne sont pas conçues pour ça.</p>

    <h2 id="section-2">Compte joint en France : est-ce possible avec un conjoint vietnamien ?</h2>
    <p>Oui, techniquement. Les banques françaises peuvent ouvrir un compte joint avec un co-titulaire étranger, même non-résident. Mais en pratique, c'est compliqué — et les règles varient selon l'établissement.</p>

    <h3>Ce que j'ai testé</h3>
    <p>J'ai renseigné plusieurs banques avant notre mariage. Les réponses étaient très différentes :</p>
    <ul>
      <li><strong>Boursorama</strong> — compte joint possible si les deux titulaires ont un numéro fiscal français. Ma femme n'en avait pas à l'époque, ce qui bloquait la démarche.</li>
      <li><strong>Fortuneo</strong> — exigences similaires, ouverture de compte simplifiée en ligne mais nécessite une adresse française pour le co-titulaire.</li>
      <li><strong>Wealthsimple (Canada)</strong> — banque canadienne complète (compte chèque, CELI, carte de crédit, courtage) que j'utilise pour mes comptes côté Canada. Pas adaptée pour un compte joint avec une conjointe vietnamienne (exigence de résidence canadienne pour le co-titulaire).</li>
      <li><strong>Revolut / Wise</strong> — pas de compte joint au sens légal français, mais des outils partagés pratiques pour les dépenses courantes à deux.</li>
    </ul>
    <div class="info-box">
      <strong>À savoir :</strong>
      Depuis 2020, les banques françaises sont tenues d'ouvrir un compte de base à toute personne résidente sur le territoire français, quelle que soit sa nationalité. Mais "résidente" est le mot-clé : si votre conjointe vit au Vietnam, cette disposition ne s'applique pas directement.
    </div>
    <p>Après notre mariage, les choses ont changé. Le fait d'être mariés en bonne et due forme, avec un acte transcrit en France, a simplifié les discussions avec la banque. Le statut de "conjoint(e)" ouvre des portes que le statut de "petite amie étrangère" ne franchissait pas.</p>

    <h2 id="section-3">Les documents demandés par les banques françaises</h2>
    <p>Si vous voulez ouvrir un compte joint en France avec un conjoint vietnamien, voici ce que les banques demandent généralement. La liste varie, mais ce socle revient systématiquement :</p>
    <ul>
      <li>Acte de mariage français (extrait plurilingue ou traduit par traducteur assermenté)</li>
      <li>Passeport du co-titulaire étranger (en cours de validité)</li>
      <li>Justificatif d'adresse — c'est souvent le blocage : une adresse étrangère n'est pas acceptée partout</li>
      <li>Parfois : attestation de résidence fiscale (formulaire cerfa 5000)</li>
    </ul>
    <div class="warning-box">
      <strong>⚠️ Le piège de l'adresse :</strong>
      Certaines banques exigent une adresse française pour le co-titulaire. Si votre conjoint(e) vit au Vietnam, vous pouvez utiliser l'adresse familiale française si vous en avez une, ou votre propre adresse. Renseignez-vous précisément avant de vous déplacer en agence — les règles sont parfois interprétées différemment d'un conseiller à l'autre.
    </div>
    <p>Mon conseil pratique : appelez d'abord la banque en expliquant votre situation avant de vous présenter en agence. Demandez explicitement si un compte joint est possible avec un co-titulaire non-résident de nationalité vietnamienne. Notez le nom du conseiller et ce qu'il vous a dit.</p>

    <h2 id="section-4">Ouvrir un compte bancaire au Vietnam en tant qu'étranger</h2>
    <p>De mon côté, j'ai ouvert un compte bancaire au Vietnam dans les premières semaines après mon arrivée. C'est plus simple qu'on ne le pense.</p>

    <h3>Quelle banque j'ai testée</h3>
    <p>J'ai ouvert un compte à <strong>Vietcombank</strong>. C'est la banque que je recommande pour les étrangers basés à Hanoï ou Ho Chi Minh-Ville :</p>
    <ul>
      <li>Application mobile disponible en anglais (fonctionnelle)</li>
      <li>Frais de tenue de compte : environ <strong>20 000 ₫/mois</strong> — symbolique</li>
      <li>Carte Visa ou MasterCard prête sous 3–5 jours ouvrés</li>
      <li>Ouverture en moins d'une heure en agence, avec passeport et visa</li>
    </ul>
    <p>Je ne recommande que ce que j'ai personnellement vérifié. D'autres banques vietnamiennes acceptent les étrangers, mais je vous laisse les comparer directement selon votre ville et votre situation.</p>

    <h3>Ce qu'il faut apporter</h3>
    <ul>
      <li>Passeport original + photocopie</li>
      <li>Visa en cours de validité (e-visa, visa TT, visa de travail — peu importe le type)</li>
      <li>Parfois : un justificatif de domicile vietnamien (contrat de bail ou enregistrement de séjour)</li>
      <li>Un numéro de téléphone vietnamien (une SIM locale achetée à l'aéroport suffit)</li>
    </ul>
    <div class="tip-box">
      <strong>💡 Le compte en VND suffit pour commencer :</strong>
      Inutile de chercher un compte en devises étrangères dès le départ. Un compte courant standard en VND couvre 95 % des besoins quotidiens : loyer, courses, transports. Les virements internationaux passent via Wise ou votre banque française.
    </div>
    <p>La procédure m'a pris moins d'une heure en agence, avec un conseiller anglophone. La carte de débit (Visa ou MasterCard selon la banque) est prête sous 3 à 5 jours ouvrés.</p>

    <h2 id="section-5">Notre organisation réelle en 2026</h2>
    <p>Après tâtonnements, voici comment nous avons structuré nos finances de couple. Ce n'est pas un modèle universel — c'est ce qui marche pour nous, avec nos contraintes spécifiques.</p>

    <h3>Les outils qu'on utilise</h3>
    <p><strong>Wise (compte multi-devises)</strong> — c'est la pièce centrale. Wise me permet de détenir des euros et des dong vietnamiens sur le même compte. Quand j'envoie de l'argent à ma femme, ça passe en VND au taux de change réel (pas le taux bancaire gonflé). Les frais sont transparents et beaucoup plus bas qu'une banque classique.</p>

    <div class="aff-cta aff-cta--green">
      <div class="aff-cta__icon">💱</div>
      <div class="aff-cta__body">
        <div class="aff-cta__title">Wise — transferts EUR/VND sans frais cachés</div>
        <div class="aff-cta__text">Le compte multi-devises qui simplifie la vie d'un couple franco-vietnamien. Taux de change réel, frais affichés clairement, virement reçu en 1-2 jours. Disponible aussi en tant que compte courant avec IBAN.</div>
        <a href="https://bonusparrainage.com/wise" target="_blank" rel="noopener" class="aff-cta__btn">Ouvrir un compte Wise →</a>
        <p class="aff-cta__note">Lien affilié — sans surcoût pour vous. Les frais Wise restent inférieurs à ceux des banques classiques.</p>
      </div>
    </div>

    <p><strong>Revolut (dépenses communes en déplacement)</strong> — quand on voyage ensemble, Revolut simplifie le partage des dépenses. Les deux sur le même compte, on règle directement en VND ou en EUR sans frais de change en semaine. Pas un compte joint légal, mais pratique pour les voyages.</p>

    <div class="aff-cta aff-cta--blue">
      <div class="aff-cta__icon">💳</div>
      <div class="aff-cta__body">
        <div class="aff-cta__title">Revolut — pour les dépenses communes en voyage</div>
        <div class="aff-cta__text">Paiement en VND sans frais de change, espace partagé pour les dépenses de couple, carte virtuelle disponible immédiatement. Un bon complément à Wise pour la vie quotidienne.</div>
        <a href="https://bonusparrainage.com/revolut" target="_blank" rel="noopener" class="aff-cta__btn">Obtenir un code parrainage Revolut →</a>
        <p class="aff-cta__note">Lien affilié — code parrainage disponible sur BonusParrainage.com.</p>
      </div>
    </div>

    <p><strong>Son compte Vietcombank</strong> — pour toutes les dépenses locales au Vietnam : loyer, courses, dépenses familiales. Le vrai compte local, en VND, indispensable. Beaucoup de choses ne se paient encore qu'en liquide ou par virement local au Vietnam.</p>

    <p><strong>Mon compte Boursorama</strong> — pour toutes les obligations françaises : cotisations auto-entrepreneur, impôts, abonnements, assurances. Conservé pour la structure française, quel que soit le pays où je me trouve.</p>

    <div class="tip-box">
      <strong>💬 En pratique :</strong>
      « Je garde mes banques françaises et j'utilise Wise pour les transferts vers le Vietnam — c'est plus simple que de tout centraliser sur un seul compte. Chaque outil a sa fonction. »
    </div>

    <h3>Comment je répartis mon salaire entre mes comptes</h3>
    <p>Concrètement, mon salaire français se répartit entre 3 comptes selon une logique simple :</p>
    <ul>
      <li><strong>70 % reste sur mon Boursorama</strong> : vie en France, cotisations auto-entreprise, abonnements, dépenses du quotidien quand je suis en France.</li>
      <li><strong>10 % part vers mon Fortuneo</strong> : exclusivement pour mon PEA, mon épargne longue.</li>
      <li><strong>20 % passe par Wise</strong> pour rejoindre le Vietnam — surtout vers le compte Vietcombank de ma femme qui gère les dépenses locales du foyer.</li>
    </ul>
    <p>Pas de pot commun formalisé, pas de budget catégoriel à la française : chacun gère sa partie selon une logique culturellement vietnamienne où la femme administre les finances du foyer. Je développe la dimension culturelle de ce système dans mon <a href="argent-couple-franco-vietnamien">article sur l'argent dans le couple franco-vietnamien</a>.</p>

    <h2 id="section-6">Comparatif des solutions pour un couple mixte franco-vietnamien</h2>
    <table class="comparison-table">
      <thead>
        <tr><th>Solution</th><th>Usage</th><th>Frais EUR→VND</th><th>Facilité d'accès</th></tr>
      </thead>
      <tbody>
        <tr><td><strong>Banque française classique</strong></td><td>Compte joint légal</td><td>Élevés (1,5–3 %)</td><td>Complexe avec conjoint étranger</td></tr>
        <tr><td><strong>Wise</strong></td><td>Transferts + multi-devises</td><td>Faibles (0,4–0,7 %)</td><td>Simple, 100 % en ligne</td></tr>
        <tr><td><strong>Revolut</strong></td><td>Dépenses communes quotidiennes</td><td>Gratuit en semaine</td><td>Très simple</td></tr>
        <tr><td><strong>Vietcombank (VN)</strong></td><td>Vie locale au Vietnam</td><td>N/A — VND uniquement (≈20 000 ₫/mois)</td><td>Simple avec passeport + visa</td></tr>
        <tr><td><strong>Western Union / MoneyGram</strong></td><td>Urgences</td><td>Très élevés</td><td>Facile mais coûteux</td></tr>
      </tbody>
    </table>

    <h2 id="section-7">Les erreurs à éviter</h2>
    <p>J'ai fait certaines de ces erreurs. D'autres, j'ai eu la chance d'en entendre parler avant.</p>

    <h3>Envoyer de l'argent via sa banque classique</h3>
    <p>La première fois que j'ai fait un virement EUR→VND via ma banque française, j'ai perdu environ 2,8 % sur le change plus 25 € de frais fixes. Pour un virement de 1 000 €, ça fait une différence réelle. Wise ou Revolut ont résolu ça définitivement.</p>

    <h3>Ne pas prévoir l'argent liquide au Vietnam</h3>
    <p>Le Vietnam fonctionne encore beaucoup en cash. Les marchés, certains restaurants, les petits taxis, les loyers chez des particuliers — tout ça se règle souvent en VND liquide. Il faut avoir un compte local pour retirer facilement, ou prévoir un retrait au DAB dès l'arrivée.</p>

    <h3>Confondre compte joint et espace partagé Revolut</h3>
    <p>Un espace partagé Revolut n'est pas un compte joint au sens juridique français. Il n'y a pas de co-titularité, pas de droits légaux identiques. Pour les questions de successions, de procurations ou de justifications bancaires, seul un vrai compte joint auprès d'une banque agréée compte.</p>

    <h3>Attendre d'être marié pour tout organiser</h3>
    <p>Certaines démarches bancaires sont plus simples après le mariage (acte de mariage transcrit, statut de conjoint reconnu). Mais les solutions pratiques — Wise, compte local, organisation des dépenses — peuvent et doivent être mises en place bien avant.</p>
    <div class="info-box">
      <strong>Sur la fiscalité :</strong>
      Si vous transférez régulièrement des sommes importantes vers le Vietnam, documentez vos virements (justificatifs Wise ou relevés bancaires). En cas de contrôle fiscal, pouvoir expliquer l'origine et la destination des fonds évite des complications. Je parle de la fiscalité de l'expat dans notre <a href="fiscalite-expat-france-vietnam">article dédié</a>.
    </div>

    <h2 id="section-faq">Questions fréquentes</h2>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Peut-on ouvrir un compte joint en France avec un conjoint vietnamien ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Oui, c'est possible. Les banques françaises peuvent ouvrir un compte joint avec un co-titulaire étranger non-résident, mais les exigences documentaires varient fortement d'une banque à l'autre. Les néobanques (Wise, Revolut) proposent des alternatives plus souples pour les dépenses quotidiennes.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Quelle est la meilleure solution pour transférer de l'argent entre la France et le Vietnam ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Wise est la solution la plus compétitive en 2026 : taux de change réel, frais transparents, virement sous 1-2 jours ouvrés. Les banques classiques prélèvent des frais bien plus élevés. Revolut est une bonne alternative pour les petits montants du quotidien.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Un étranger peut-il ouvrir un compte bancaire au Vietnam ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Oui, avec un passeport valide et un visa en cours. J'ai personnellement testé Vietcombank : compte ouvert en moins d'une heure, frais d'environ 20 000 ₫/mois, application en anglais. Un numéro de téléphone vietnamien est parfois demandé — une SIM prépayée achetée à l'aéroport suffit.</div>
    </div>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Wise ou Revolut pour un couple franco-vietnamien ? <span class="faq-arrow">▼</span></button>
      <div class="faq-answer">Les deux se complètent bien. Wise est supérieur pour les transferts importants et réguliers (meilleur taux de change, IBAN multi-devises). Revolut est pratique pour les dépenses communes du quotidien. J'utilise les deux selon le cas d'usage.</div>
    </div>

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
      <div class="author-avatar" style="display:flex;align-items:center;justify-content:center;background:#c0846e;color:#fff;font-weight:700;font-size:1.5rem;border-radius:50%;width:72px;height:72px;flex-shrink:0;">AB</div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français marié à une Vietnamienne, entre France, Canada et Vietnam. Je partage ce que j'apprends sur la vie de couple franco-vietnamien — sans filtre et sans généraliser.</p>
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
$current_slug = 'compte-joint-franco-vietnamien';
$current_cat  = 'couple';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
