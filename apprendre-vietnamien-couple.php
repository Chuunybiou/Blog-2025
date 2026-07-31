<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Apprendre le vietnamien en couple mixte — Cap Vietnam';
$page_description = 'Méthodes et ressources pour apprendre le vietnamien en couple mixte à Hanoï : applis, cours, pratique quotidienne et astuces de motivation.';
$page_canonical   = SITE_URL . '/apprendre-vietnamien-couple';
$page_og_title    = 'Apprendre le vietnamien en couple : méthodes et ressources';
$page_og_desc     = 'Meilleures méthodes pour apprendre le vietnamien : Pimsleur, Anki, Duolingo.';
$page_og_url      = 'https://blog-capvietnam.fr/apprendre-vietnamien-couple';
$page_og_image    = 'https://blog-capvietnam.fr/assets/img/og-capvietnam.png';
$page_schema      = '{"@context":"https://schema.org","@type":"BlogPosting","headline":"Apprendre le vietnamien en couple : methodes et realite","datePublished":"2026-02-10","dateModified":"2026-02-10","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://blog-capvietnam.fr/a-propos"},"publisher":{"@type":"Organization","name":"Anthony Bouillon","logo":{"@type":"ImageObject","url":"https://blog-capvietnam.fr/logo-entreprise.png"}},"image":"https://blog-capvietnam.fr/assets/img/og-capvietnam.png","description":"Meilleures methodes pour apprendre le vietnamien : Pimsleur, Anki, Duolingo.","timeRequired":"PT6M","inLanguage":"fr","url":"https://blog-capvietnam.fr/apprendre-vietnamien-couple"}';

$article_color   = 'jade';
$article_hero_bg = '#1a3a1e';
$article_glow    = 'rgba(27,107,82,0.15)';
$article_badge   = 'rgba(27,107,82,0.25)';
$article_badge_c = '#4db890';

$article_category     = 'Couple Mixte';
$article_category_url = 'https://blog-capvietnam.fr/articles-capvietnam';
$page_faq = [
  ['q' => 'Combien de temps pour avoir une vraie conversation en vietnamien ?',
   'a' => 'Avec 30 minutes de pratique quotidienne sérieuse, compte 6 à 12 mois pour des conversations simples, 2 à 3 ans pour une aisance réelle. La phonologie tonale est le principal obstacle — une fois les tons en place, le reste s\'accélère.'],
  ['q' => 'Le dialecte de Hanoï diffère-t-il du vietnamien du sud ?',
   'a' => 'Oui, significativement. Le vietnamien du Nord (Hanoï) et du Sud (Hô-Chi-Minh-Ville) ont des différences de prononciation importantes. Si tu vis à Hanoï, apprends le dialecte du Nord — les cours de Pimsleur sont en vietnamien du Nord standard. Les Vietnamiens du sud comprennent le nord et vice-versa.'],
  ['q' => 'Faut-il apprendre à lire et écrire le vietnamien ?',
   'a' => 'Oui, et c\'est la bonne nouvelle de cette langue : le vietnamien s\'écrit en alphabet latin (chữ quốc ngữ), avec des signes diacritiques pour les tons et certaines voyelles. Un francophone lit des mots vietnamiens dès le premier jour. Mieux : l\'écriture est ton alliée pour les tons, puisque chaque ton est écrit noir sur blanc — lire en écoutant est un des meilleurs exercices de calibration de l\'oreille.'],
  ['q' => 'Mon niveau stagne après un bon début, c\'est normal ?',
   'a' => 'Tellement normal que ça porte un nom : le plateau intermédiaire. Les premières centaines de mots donnent des progrès visibles, puis la courbe s\'aplatit — surtout au Vietnam, où ton entourage passe à l\'anglais ou au français dès que tu bloques. Les remèdes classiques : réintroduire un cadre (professeur, objectif type test de niveau), changer de matière première (podcasts, séries vietnamiennes sous-titrées), et surtout créer des situations où le vietnamien est obligatoire — marché, famille au village, démarches simples en solo.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Couple Mixte</a><span class="breadcrumb-sep">›</span>
      <span>Apprendre le vietnamien</span>
    </div>
    <span class="article-badge-hero">Couple Mixte</span>
    <h1>Apprendre le vietnamien quand on est en couple franco-vietnamien</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 5 février 2026</span>
      <span>⏱ 12 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi c'est difficile (et pourquoi ça vaut le coup)</a></li>
      <li><a href="#section-tons">Les 6 tons, concrètement</a></li>
      <li><a href="#section-pronoms">Les pronoms : la grammaire du cœur</a></li>
      <li><a href="#section-2">Comparatif des méthodes</a></li>
      <li><a href="#section-3">Les ressources recommandées</a></li>
      <li><a href="#section-4">Apprendre avec son conjoint</a></li>
      <li><a href="#section-5">Les 50 phrases essentielles</a></li>
      <li><a href="#section-6">Trouver un professeur particulier</a></li>
      <li><a href="#section-7">Les cours collectifs</a></li>
      <li><a href="#section-8">Progresser avec la belle-famille</a></li>
      <li><a href="#section-erreurs">Les erreurs des francophones</a></li>
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
    <p><strong>Le vietnamien est réputé pour être l'une des langues les plus difficiles du monde pour les francophones.</strong> Six tons, une écriture romanisée qui cache une phonologie totalement étrangère, et un système de pronoms complexe. Pourtant, pour un Français vivant au Vietnam en couple mixte, c'est l'apprentissage le plus transformateur que tu puisses faire.</p>

    <img class="article-photo" src="assets/img/595605424_755082234270642_7802260515125357552_n.jpg" alt="Vie quotidienne d'un couple franco-vietnamien à Hanoï" width="800" height="700" loading="lazy" style="width:100%;border-radius:var(--radius);margin:1.5rem 0;object-fit:cover;max-height:400px;">

    <h2 id="section-1">Pourquoi c'est difficile — et pourquoi ça vaut le coup</h2>
    <p>Le vietnamien est une langue tonale avec 6 tons (sắc, huyền, hỏi, ngã, nặng, bằng). Le même mot prononcé avec des tons différents donne des significations radicalement différentes. "Ma" peut vouloir dire fantôme, mère, cheval, riz ou joue selon le ton. Pas de conjugaison, pas de genres grammaticaux, pas de pluriels irréguliers — la grammaire vietnamienne est même étonnamment simple comparée au français. Toute la difficulté s'est concentrée au même endroit : la phonologie, et elle est impitoyable.</p>
    <p>Pourquoi apprendre quand même ? Parce que même un niveau basique :</p>
    <ul>
      <li>Crée un lien profond avec la belle-famille qui ne parle pas français</li>
      <li>Te permet de naviguer dans Hanoï de façon autonome</li>
      <li>Montre un respect sincère pour la culture de ta conjointe</li>
      <li>Ouvre des conversations et des amitiés impossibles autrement</li>
    </ul>
    <p>Et il y a l'argument que personne ne formule mais que tous les couples mixtes connaissent : <strong>la langue rééquilibre le couple</strong>. Tant que tout passe par le français (ou l'anglais), c'est toujours ta/ton conjoint(e) qui fait l'effort de traduction, qui gère la belle-famille, qui règle les problèmes du quotidien. Chaque mot de vietnamien que tu gagnes est une charge que tu reprends à ton compte — et ça, ta/ton conjoint(e) le sent bien avant que ta grammaire soit correcte. C'est le même mouvement, en miroir, que celui décrit dans <a href="differences-culturelles-couple-franco-vietnamien">l'article sur les différences culturelles du couple mixte</a>.</p>

    <h2 id="section-tons">Les 6 tons, concrètement</h2>
    <p>Bonne nouvelle : les tons ne sont pas un mystère à deviner, ils sont <strong>écrits</strong>. Chaque diacritique correspond à un contour de voix précis :</p>
    <ul>
      <li><strong>ngang</strong> (aucun signe — <em>ma</em>) : ton plat, voix stable au milieu</li>
      <li><strong>huyền</strong> (accent grave — <em>mà</em>) : ton descendant, doux, comme une fin de phrase fatiguée</li>
      <li><strong>sắc</strong> (accent aigu — <em>má</em>) : ton montant, comme une question surprise</li>
      <li><strong>hỏi</strong> (crochet — <em>mả</em>) : descend puis remonte — le plus dur à entendre pour un Français</li>
      <li><strong>ngã</strong> (tilde — <em>mã</em>) : montant avec un coup de glotte au milieu (au Nord ; au Sud il fusionne souvent avec hỏi)</li>
      <li><strong>nặng</strong> (point souscrit — <em>mạ</em>) : bref, bas, coupé net</li>
    </ul>
    <p>La méthode qui fonctionne : travailler les tons <strong>par paires contrastées</strong> (ngang vs huyền, sắc vs nặng) sur les mêmes syllabes, en te faisant corriger à voix haute — ta/ton conjoint(e) est irremplaçable pour ça, cinq minutes par jour suffisent. Et enregistre-toi : la différence entre ce que tu crois dire et ce que tu dis réellement est l'électrochoc pédagogique le plus efficace qui soit.</p>

    <h2 id="section-pronoms">Les pronoms : la grammaire du cœur</h2>
    <p>Le deuxième pilier du vietnamien n'est pas la conjugaison (il n'y en a pas) mais le <strong>système d'adresse</strong> : on ne dit presque jamais « je » et « tu » de façon neutre — on se positionne par rapport à l'autre. Dans un couple, l'homme est <em>anh</em> (grand frère) et la femme <em>em</em> (cadette), quel que soit l'âge réel ; c'est la convention affectueuse standard. Avec la belle-famille, chaque personne s'appelle selon sa position : <em>bố/mẹ</em> pour les beaux-parents (oui, on les appelle papa/maman), <em>ông/bà</em> pour les grands-parents, <em>chú, cô, dì, bác</em> pour les oncles et tantes selon le côté et l'âge relatif.</p>
    <p>Pour un Français, c'est déroutant — puis ça devient la plus belle partie de la langue : chaque phrase dit la relation en même temps que le message. Utiliser le bon terme d'adresse avec la grand-mère de ta/ton conjoint(e) fait plus pour ton intégration que cent mots de vocabulaire. Commence par cartographier la famille proche avec ta/ton conjoint(e), et apprends les termes comme tu apprendrais des prénoms.</p>

    <h2 id="section-2">Comparatif des méthodes d'apprentissage</h2>
    <table class="comparison-table">
      <thead><tr><th>Méthode</th><th>Efficacité tonal</th><th>Coût</th><th>Idéal pour</th></tr></thead>
      <tbody>
        <tr><td><strong>Cours particulier à Hanoï</strong></td><td>⭐⭐⭐⭐⭐</td><td>200–400k VND/h</td><td>Progression structurée rapide</td></tr>
        <tr><td><strong>Pimsleur Vietnamien</strong></td><td>⭐⭐⭐⭐</td><td>~15€/mois</td><td>Prononciation, déplacement</td></tr>
        <tr><td><strong>Duolingo</strong></td><td>⭐⭐</td><td>Gratuit/Premium</td><td>Vocabulaire de base, habitude</td></tr>
        <tr><td><strong>Anki (flashcards)</strong></td><td>⭐⭐⭐</td><td>Gratuit</td><td>Mémorisation vocabulaire</td></tr>
        <tr><td><strong>Conjoint comme prof</strong></td><td>⭐⭐⭐</td><td>Gratuit (et relationnel)</td><td>Pratique quotidienne, culture</td></tr>
      </tbody>
    </table>

    <h2 id="section-3">Les ressources recommandées</h2>
    <ul>
      <li><strong>Pimsleur Vietnamese</strong> : la meilleure méthode audio pour la prononciation des tons. 30 minutes par jour en transport.</li>
      <li><strong>VietnamesePod101</strong> : cours audio structurés avec des leçons de contexte culturel.</li>
      <li><strong>Anki + deck "Vietnamese Core 2000"</strong> : les 2000 mots les plus fréquents avec audio natif, en flashcards spaced repetition.</li>
      <li><strong>Google Translate mode caméra</strong> : pointe ton téléphone sur un panneau ou un menu et traduction instantanée — très utile au quotidien.</li>
      <li><strong>VDict</strong> : dictionnaire vietnamien-français/anglais de référence, gratuit en ligne.</li>
    </ul>

    <div class="info-box" style="border-left:3px solid var(--jade);">
      <strong>📕 Mon livre pour apprendre le vietnamien</strong><br>
      J'ai écrit une méthode basée sur les 1 100 mots les plus fréquents du vietnamien — sans cours magistraux, sans grammaire abstraite. Conçue pour les francophones en couple mixte ou en route pour le Vietnam.
      <div style="margin-top:1rem;display:flex;gap:0.75rem;flex-wrap:wrap;">
        <a href="livre-vietnamien" style="padding:0.55rem 1.1rem;background:var(--jade);color:#fff;border-radius:5px;text-decoration:none;font-weight:700;font-size:0.88rem;">Voir le livre →</a>
        <a href="https://www.amazon.fr/dp/B0H1CHWKF8" target="_blank" rel="noopener sponsored" style="padding:0.55rem 1.1rem;background:#ff9900;color:#111;border-radius:5px;text-decoration:none;font-weight:700;font-size:0.88rem;">Acheter sur Amazon →</a>
      </div>
    </div>

    <h2 id="section-4">Apprendre avec son conjoint : les pièges à éviter</h2>
    <p>Demander à sa conjointe d'être son professeur est tentant — et peut fonctionner si on structure les sessions. Mais l'expérience de nombreux couples mixtes invite à la prudence :</p>
    <ul>
      <li>Les locuteurs natifs ont souvent du mal à expliquer les règles phonétiques qu'ils appliquent intuitivement</li>
      <li>Mélanger cours de langue et vie de couple peut créer des frustrations des deux côtés</li>
      <li>Ta conjointe pourrait avoir tendance à passer à la traduction plutôt qu'à te laisser chercher</li>
    </ul>
    <div class="tip-box">
      <strong>La bonne approche :</strong>
      Utilise ta conjointe pour la pratique (conversations du quotidien, corrections en contexte naturel) et un professeur ou une app structurée pour l'apprentissage formel. Deux rôles différents, deux dynamiques différentes.
    </div>

    <h2 id="section-5">Les 50 phrases essentielles pour commencer</h2>
    <ul>
      <li><strong>Xin chào</strong> — Bonjour</li>
      <li><strong>Cảm ơn</strong> — Merci</li>
      <li><strong>Tôi tên là…</strong> — Je m'appelle…</li>
      <li><strong>Bao nhiêu tiền?</strong> — Combien ça coûte ?</li>
      <li><strong>Tôi không hiểu</strong> — Je ne comprends pas</li>
      <li><strong>Chúc mừng năm mới</strong> — Bonne année !</li>
      <li><strong>Ngon lắm!</strong> — C'est délicieux !</li>
      <li><strong>Cho tôi xem thực đơn</strong> — Apportez-moi le menu</li>
      <li><strong>Gọi xe cho tôi</strong> — Appelez-moi un taxi</li>
      <li><strong>Anh/Chị ơi</strong> — Excusez-moi (pour appeler quelqu'un)</li>
    </ul>
    <p>Et parce que cet article s'adresse aux couples mixtes, voici la série « famille » — celles qui font briller les yeux de la belle-famille :</p>
    <ul>
      <li><strong>Con chào bố / mẹ</strong> — Bonjour papa / maman (aux beaux-parents)</li>
      <li><strong>Cháu chào ông / bà</strong> — Bonjour grand-père / grand-mère</li>
      <li><strong>Mời cả nhà ăn cơm</strong> — L'invitation rituelle avant le repas (« toute la famille est invitée à manger »)</li>
      <li><strong>Con no rồi</strong> — J'ai assez mangé (indispensable face à une belle-mère qui ressert)</li>
      <li><strong>Anh yêu em / Em yêu anh</strong> — Je t'aime (de l'homme à la femme / de la femme à l'homme)</li>
      <li><strong>Không sao</strong> — Ce n'est pas grave / pas de problème</li>
      <li><strong>Đợi anh một chút</strong> — Attends-moi une seconde</li>
      <li><strong>Nhà mình đẹp quá</strong> — Votre maison est très belle</li>
      <li><strong>Chúc sức khỏe</strong> — À votre santé (toast)</li>
      <li><strong>Hẹn gặp lại</strong> — À bientôt</li>
    </ul>

    <h3>Un plan réaliste pour les 6 premiers mois</h3>
    <ol>
      <li><strong>Mois 1 : uniquement les sons.</strong> Tons par paires, voyelles absentes du français (ư, ơ, â…), finales coupées. Zéro vocabulaire ambitieux — dix mots parfaitement prononcés valent mieux que cent approximatifs.</li>
      <li><strong>Mois 2-3 : le kit de survie.</strong> Chiffres, prix, nourriture, directions, formules de politesse et pronoms de la famille proche. Objectif mesurable : faire le marché seul(e) et saluer correctement chaque membre de la belle-famille.</li>
      <li><strong>Mois 4-5 : les phrases du quotidien du couple.</strong> Bascule cinq minutes par jour de votre communication en vietnamien — les mêmes phrases reviennent en boucle dans une vie de couple, et c'est exactement ce dont la mémoire a besoin.</li>
      <li><strong>Mois 6 : la première conversation hors zone de confort.</strong> Un repas de famille où tu suis (grossièrement) le fil, une course compliquée, un échange avec un chauffeur bavard. C'est le premier palier qui donne l'énergie pour la suite.</li>
    </ol>

    <h2 id="section-6">Trouver un professeur particulier à Hanoï</h2>
    <p>Un professeur particulier est de loin la méthode la plus efficace pour progresser rapidement, surtout sur les tons — un natif entend instantanément les erreurs que ton oreille ne perçoit pas encore, et c'est exactement le retour dont un débutant a besoin. À Hanoï, l'offre est abondante et les tarifs raisonnables :</p>
    <ul>
      <li><strong>Tarif moyen</strong> : 200 000 à 400 000 VND par heure pour un professeur qualifié. Certains étudiants-professeurs pratiquent 100 000–150 000 VND/h mais la qualité pédagogique est variable.</li>
      <li><strong>Où trouver</strong> : groupes Facebook "Hanoi Expats", "Learn Vietnamese in Hanoi", "Vietnam Language Exchange". L'Université de Langue et d'Études Internationales (ĐHNN) propose des listes de tuteurs diplômés.</li>
      <li><strong>Format recommandé</strong> : 2 à 3 séances de 60 minutes par semaine. Plus efficace que des sessions longues et espacées.</li>
    </ul>
    <div class="tip-box">
      <strong>Comment évaluer un professeur :</strong>
      Propose toujours une première séance payante à l'essai. Un bon professeur pour débutant commence par les tons et la phonétique, pas par la grammaire ou les listes de vocabulaire. Si les 20 premières minutes sont consacrées à écrire des mots sans travail sur la prononciation, cherche quelqu'un d'autre.
    </div>

    <h2 id="section-7">Les cours collectifs : où et combien ?</h2>
    <p>Si tu préfères apprendre en groupe (moins cher, socialisation avec d'autres expats dans la même situation), plusieurs options existent à Hanoï :</p>
    <table class="comparison-table">
      <thead><tr><th>École / Centre</th><th>Format</th><th>Tarif indicatif</th><th>Niveau</th></tr></thead>
      <tbody>
        <tr><td><strong>ĐHNN (Univ. Langues)</strong></td><td>Cours semestre (12–16 semaines)</td><td>3–6 M VND/semestre</td><td>Débutant à avancé</td></tr>
        <tr><td><strong>VLIS Language School</strong></td><td>Cours mensuel intensif</td><td>1,5–3 M VND/mois</td><td>Débutant à intermédiaire</td></tr>
        <tr><td><strong>Vietnam French Language Center</strong></td><td>Groupes francophones</td><td>2–4 M VND/mois</td><td>Débutant</td></tr>
        <tr><td><strong>Tandem linguistique</strong></td><td>Sessions informelles 1h1</td><td>Gratuit (échange)</td><td>Tous niveaux</td></tr>
      </tbody>
    </table>
    <p>Les échanges linguistiques (tandem) avec des Vietnamiens souhaitant pratiquer le français sont particulièrement efficaces pour la pratique conversationnelle. Cherche sur les groupes Facebook "French-Vietnamese Language Exchange Hanoi". Le vivier est immense : le français conserve une vraie place au Vietnam (héritage historique, filières universitaires francophones), et les étudiants en français cherchent activement des partenaires natifs. Une heure de tandem bien structurée — trente minutes dans chaque langue, avec un thème préparé — vaut une leçon, et crée au passage des amitiés locales hors de la bulle expat.</p>

    <h2 id="section-8">Progresser avec la belle-famille au quotidien</h2>
    <p>La belle-famille est ton meilleur terrain d'entraînement — et souvent le plus intimidant. C'est aussi le seul « cours » où la motivation est réciproque : eux aussi veulent te comprendre. Quelques approches concrètes :</p>
    <ul>
      <li><strong>Note les mots entendus lors des repas de famille</strong> : les mêmes expressions reviennent. Après chaque visite, note 5 mots ou phrases entendus et demande à ta conjointe de les expliquer.</li>
      <li><strong>Apprends les pronoms spécifiques à chaque membre</strong> : savoir appeler chacun avec le bon pronom (<em>anh, chị, chú, dì, ông, bà</em>...) selon son âge relatif impressionne fortement. Ta conjointe peut te dresser un "arbre de pronoms" pour sa famille.</li>
      <li><strong>Participe aux tâches pratiques</strong> : cuisiner ensemble, aller au marché avec la belle-mère, aider à déplacer des meubles — ces activités créent des échanges verbaux naturels et moins formels que les conversations de table.</li>
      <li><strong>Utilise les enfants et jeunes ados</strong> : ils apprécient souvent d'apprendre des mots français en échange de mots vietnamiens. Relation non hiérarchique, atmosphère détendue, excellent pour les bases.</li>
    </ul>
    <div class="info-box">
      <strong>Le moment clé :</strong>
      Le premier jour où la belle-mère te parle directement en vietnamien — sans passer par ta conjointe comme interprète — c'est le signe qu'elle te considère comme faisant vraiment partie de la famille. Ce jour-là vaut toutes les heures de cours.
    </div>

    <h2 id="section-erreurs">Les erreurs classiques des francophones</h2>
    <ul>
      <li><strong>Ignorer les tons « pour l'instant »</strong> : c'est l'erreur fondatrice. Un vocabulaire appris sans tons devra être réappris — les tons ne sont pas une nuance, ils sont le mot lui-même.</li>
      <li><strong>Prononcer à la française</strong> : le <em>đ</em> vietnamien n'est pas un « d » français, le <em>ư</em> et le <em>ơ</em> n'existent pas en français, et les finales sont coupées. Passe par l'oreille avant de passer par la lecture, sinon l'orthographe latine te tend un piège de faux ami permanent.</li>
      <li><strong>Mélanger les sources Nord et Sud</strong> : une appli en accent du Sud + un(e) conjoint(e) du Nord = confusion garantie. Choisis l'accent de ta vie quotidienne et tiens-t'y.</li>
      <li><strong>Traduire les pronoms mot à mot</strong> : chercher « je » et « tu » universels mène à des phrases grammaticalement justes et socialement fausses. Apprends les termes d'adresse par situation, pas par traduction.</li>
      <li><strong>Compter sur l'immersion passive</strong> : vivre à Hanoï n'apprend pas le vietnamien tout seul — la bulle expat + l'anglais + un(e) conjoint(e) francophone forment un isolant redoutable. L'immersion ne fonctionne que si tu la rends active.</li>
    </ul>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <!-- EBOOK ANGLAIS -->
    <div style="border:1px solid var(--border);border-radius:10px;padding:1.25rem 1.5rem;background:var(--bg-alt);margin:2.5rem 0">
      <div style="font-size:.85rem;color:var(--muted);margin-bottom:.4rem">📘 Et pour l'anglais ?</div>
      <strong style="font-size:1rem;color:var(--navy)">Apprendre l'anglais avec la transcription phonétique</strong>
      <p style="font-size:.9rem;color:var(--muted);margin:.5rem 0 .9rem">Au Vietnam, l'anglais est souvent indispensable : travail international, interactions avec les locaux anglophones, tourisme. J'ai conçu un ebook pour les francophones : chaque mot accompagné de sa transcription phonétique pour prononcer correctement dès le départ — la même logique que pour apprendre les tons du vietnamien.</p>
      <a href="go.php?id=amazon-ebook-en" target="_blank" rel="noopener sponsored" class="btn btn-primary" style="font-size:.88rem">Voir sur Amazon →</a>
    </div>

    <?php
$author_bio = <<<'BIO'
Niveau B1 en vietnamien après 4 ans de pratique à Hanoï. Le chemin est long mais chaque étape ouvre de nouvelles portes.
BIO;
include '_author-box.php';
?>

    <div class="cta-newsletter">
      <h3>Reçois les prochains guides</h3>
      <p>📥 <strong>Guide PDF + 3 modèles de lettres offerts</strong> dès l'inscription. Un email par mois, désinscription en 1 clic.</p>
      <form class="cta-form" action="<?= SITE_URL ?>/subscribe-pack" method="POST">
        <input type="text" name="website" value="" style="position:absolute;left:-9999px" tabindex="-1" autocomplete="off" aria-hidden="true">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic — <a href="pack-gratuit" style="color:#4db890">voir le pack →</a></p>
    </div>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
$current_slug = 'apprendre-vietnamien-couple';
$current_cat  = 'couple';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
