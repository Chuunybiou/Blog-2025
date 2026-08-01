<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Se marier avec une Vietnamienne : toutes les démarches';
$page_description = 'Se marier avec une ressortissante vietnamienne : certificat de capacité matrimoniale, ambassade, mariage civil au Vietnam et reconnaissance en France.';
$page_canonical   = SITE_URL . '/se-marier-vietnamienne-demarches-france';
$page_og_title    = 'Se marier avec une Vietnamienne : toutes les démarches officielles';
$page_og_desc     = 'Certificat de capacité matrimoniale, mariage civil au Vietnam, transcription à Nantes.';
$page_og_url      = 'https://blog-capvietnam.fr/se-marier-vietnamienne-demarches-france';
$page_og_image    = 'https://images.unsplash.com/photo-1537907510278-2a3b01e3de52?w=1200&q=80';
$page_schema      = '{"@context":"https://schema.org","@type":"BlogPosting","headline":"Se marier avec une Vietnamienne : demarches cote France","datePublished":"2026-04-08","dateModified":"2026-04-08","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://blog-capvietnam.fr/a-propos"},"publisher":{"@type":"Organization","name":"Anthony Bouillon","logo":{"@type":"ImageObject","url":"https://blog-capvietnam.fr/logo-entreprise.png"}},"image":"https://images.unsplash.com/photo-1537907510278-2a3b01e3de52?w=1200&q=80","description":"Certificat de capacite matrimoniale, mariage civil au Vietnam, transcription a Nantes.","timeRequired":"PT12M","inLanguage":"fr","url":"https://blog-capvietnam.fr/se-marier-vietnamienne-demarches-france"}';

$article_color   = 'terracotta';
$article_hero_bg = '#3a1a0a';
$article_glow    = 'rgba(191,74,42,0.15)';
$article_badge   = 'rgba(191,74,42,0.2)';
$article_badge_c = 'var(--terracotta-soft)';

$article_category     = 'Démarches Admin';
$article_category_url = 'https://blog-capvietnam.fr/articles-capvietnam';
$page_faq = [
  ['q' => 'Combien de temps dure l\'ensemble de la procédure ?',
   'a' => 'De l\'obtention du CCM à la transcription complète en France, compte 4 à 7 mois au total dans les cas normaux. Prévois plus de temps si l\'un des conjoints a des documents manquants ou si des délais administratifs s\'accumulent.'],
  ['q' => 'Le mariage religieux ou traditionnel est-il reconnu ?',
   'a' => 'Non. Seul le mariage civil (devant le Comité populaire au Vietnam ou à la mairie en France) a une valeur juridique. La cérémonie traditionnelle (đám cưới) ou religieuse n\'a aucun effet légal, mais elle reste culturellement essentielle pour la famille vietnamienne.'],
  ['q' => 'Faut-il apprendre le vietnamien pour se marier au Vietnam ?',
   'a' => 'Non légalement, mais un interprète peut être demandé lors de l\'entretien au Comité populaire. En pratique, la conjointe vietnamienne assure souvent la traduction, et les documents officiels sont tous traduits par un traducteur assermenté.'],
  ['q' => 'Ma femme prendra-t-elle mon nom de famille ?',
   'a' => 'Pas automatiquement, et probablement pas : au Vietnam, les femmes conservent leur nom de naissance toute leur vie — c\'est la norme culturelle, le mariage ne change pas le nom. En France, le mariage ne change d\'ailleurs jamais le nom légal non plus : il ouvre seulement un droit d\'usage du nom du conjoint, que ta femme pourra utiliser ou non sur ses documents français. Beaucoup de Vietnamiennes mariées à des Français gardent simplement leur nom — et c\'est parfaitement normal des deux côtés.'],
  ['q' => 'Faut-il faire un contrat de mariage ?',
   'a' => 'Ce n\'est pas obligatoire, mais pour un couple mixte c\'est une vraie question à poser à un notaire avant le mariage. Sans contrat, la loi applicable à votre régime matrimonial dépend de règles de droit international privé — généralement liées à votre première résidence habituelle commune — ce qui peut donner des résultats inattendus si vous vivez entre deux pays. Un contrat permet de choisir explicitement le régime et la loi applicable, et simplifie énormément les choses en cas d\'achat immobilier au Vietnam ou en France.'],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Démarches Administratives</a><span class="breadcrumb-sep">›</span>
      <span>Mariage franco-vietnamien</span>
    </div>
    <span class="article-badge-hero">Démarches Administratives</span>
    <h1>Se marier avec une Vietnamienne : démarches en France et au Vietnam</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 6 avril 2026</span>
      <span>⏱ 12 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Se marier au Vietnam ou en France ?</a></li>
      <li><a href="#section-2">Certificat de capacité matrimoniale</a></li>
      <li><a href="#section-3">Mariage civil au Vietnam</a></li>
      <li><a href="#section-4">Transcription en France</a></li>
      <li><a href="#section-5">Visa conjoint pour la France</a></li>
      <li><a href="#section-6">Coûts indicatifs</a></li>
      <li><a href="#section-7">La cérémonie traditionnelle</a></li>
      <li><a href="#section-8">Après le mariage</a></li>
      <li><a href="#section-france">Se marier en France : l'autre voie</a></li>
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

    <div class="warning-box" style="background:#fff3cd;border-left:4px solid #ffc107;padding:1rem 1.2rem;margin-bottom:1.5rem;border-radius:4px;">
      <strong>⚠️ Avertissement :</strong> Cet article est fourni à titre informatif uniquement et ne constitue pas un conseil juridique professionnel. Les procédures administratives évoluent régulièrement. Consultez le consulat français compétent et/ou un avocat spécialisé avant d'entreprendre ces démarches.
    </div>

    <p><strong>Se marier avec une ressortissante vietnamienne est parfaitement légal et accessible</strong>, mais les démarches sont longues et précises. Entre le certificat de capacité matrimoniale à obtenir en France, le mariage civil à célébrer au Vietnam et la transcription sur les registres français, comptez 3 à 6 mois de patience. Voici le guide complet basé sur les textes officiels franco-vietnamiens en vigueur.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1525772764200-be829a350797?w=1200&q=80&fit=crop" alt="Documents officiels pour un mariage franco-vietnamien" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Se marier au Vietnam ou en France ?</h2>
    <p>Deux options s'offrent aux couples franco-vietnamiens :</p>
    <ul>
      <li><strong>Mariage civil au Vietnam</strong> : célébré devant les autorités vietnamiennes (Comité populaire de la commune), reconnu en France après transcription consulaire. C'est la voie la plus courante quand les deux conjoints vivent au Vietnam.</li>
      <li><strong>Mariage civil en France</strong> : célébré à la mairie, nécessite que la conjointe vietnamienne soit en France avec un visa valide. Plus simple administrativement mais demande qu'elle soit présente physiquement.</li>
    </ul>
    <p>Le critère de décision est presque toujours géographique : <strong>où vivez-vous aujourd'hui, et où la famille de ta conjointe attend-elle la fête ?</strong> Quand la vie et la famille sont au Vietnam, le mariage vietnamien s'impose naturellement — la cérémonie familiale y aura lieu de toute façon, et enchaîner enregistrement local et đám cưới dans la même période simplifie tout. Le mariage en France se justifie surtout quand ta conjointe y séjourne déjà légalement pour une autre raison (études, travail). Le détail de la voie française est plus bas dans cet article ; ce guide déroule d'abord la voie vietnamienne, la plus fréquente. Et pour la vue d'ensemble du projet complet jusqu'à l'installation en France, garde sous le coude le <a href="faire-venir-conjointe-vietnamienne-france">guide pilier « faire venir sa conjointe »</a>.</p>

    <h2 id="section-2">Le certificat de capacité matrimoniale (CCM)</h2>
    <p>Pour se marier au Vietnam, le ressortissant français doit obtenir auprès des autorités françaises un <strong>certificat de capacité matrimoniale</strong> (CCM). Ce document atteste que tu es libre de te marier selon le droit français (pas de mariage antérieur non dissous, pas d'empêchement légal).</p>
    <p>Le CCM est délivré par :</p>
    <ul>
      <li><strong>L'ambassade ou le consulat de France</strong> au Vietnam (Hanoï ou Hô-Chi-Minh-Ville) si tu résides au Vietnam</li>
      <li>La <strong>mairie</strong> de ton domicile en France si tu y résides</li>
    </ul>
    <p>Ce document — appelé CCAM dans la pratique consulaire au Vietnam — a son guide dédié sur ce blog, avec la liste des pièces, l'audition consulaire et les pièges de calendrier : <a href="certificat-capacite-mariage-vietnam">le CCAM pas à pas</a>. Retiens l'essentiel ici : c'est la première brique de tout le parcours, elle se demande des mois avant la date rêvée, et elle est valable un an.</p>
    <div class="info-box">
      <strong>📋 Documents pour le CCM à l'ambassade de France à Hanoï :</strong>
      Acte de naissance français (moins de 3 mois) — Justificatif de domicile au Vietnam — Passeport — Formulaire cerfa (disponible à l'ambassade) — Célibat attesté (si divorcé : jugement de divorce) — Délai de traitement : 3 à 6 semaines.
    </div>

    <div class="warning-box">
      <strong>⚠️ Publication de bans :</strong>
      Avant la délivrance du CCM, les bans sont publiés pendant 10 jours. C'est une exigence légale de l'article 63 du Code civil français. Ce délai incompressible est à intégrer dans ton planning.
    </div>

    <h2 id="section-3">Le mariage civil au Vietnam</h2>
    <p>Une fois le CCM obtenu, le mariage peut être célébré devant le <strong>Comité populaire de la commune (UBND phường)</strong> du lieu de résidence de la conjointe vietnamienne. La procédure est encadrée par la Loi sur le mariage et la famille n°52/2014/QH13.</p>
    <ol>
      <li>Déposer le dossier de mariage au Comité populaire</li>
      <li>Entretien obligatoire avec les deux futurs époux (présence requise)</li>
      <li>Publication de l'avis de mariage pendant 15 jours</li>
      <li>Célébration civile et remise du certificat de mariage (giấy chứng nhận kết hôn)</li>
    </ol>
    <p>À quoi ressemble la « célébration » vietnamienne ? À rien de ce qu'imagine un Français : pas de salle des mariages, pas de discours — une signature de registres dans un bureau administratif, en présence des deux époux, parfois expédiée en un quart d'heure. C'est voulu : au Vietnam, l'émotion est réservée au đám cưới familial (voir plus bas), l'administration ne fait que constater. Prévois quand même l'interprète si le comité populaire le demande, et vérifie les usages locaux : chaque province a ses petites variantes de procédure, que ta belle-famille connaît mieux que n'importe quel site web. Le déroulé détaillé côté vietnamien fait l'objet d'un article dédié : <a href="se-marier-vietnam-procedure-comite-populaire">la procédure au comité populaire pas à pas</a>.</p>
    <div class="info-box">
      <strong>📋 Documents à fournir au Comité populaire :</strong>
      CCM français traduit en vietnamien (traducteur assermenté) — Passeport français — Acte de naissance vietnamien de la conjointe — Livret de résidence (sổ hộ khẩu) — Certificat de célibat vietnamien — 2 photos couple 4x6 cm.
    </div>

    <h2 id="section-4">Transcription du mariage sur les registres français</h2>
    <p>Le mariage vietnamien doit être <strong>transcrit sur les registres de l'état civil français</strong> pour être reconnu pleinement en France. La transcription se fait auprès du Service central d'état civil (SCEC) de Nantes, via :</p>
    <ul>
      <li>L'ambassade/consulat de France au Vietnam (délai : 2 à 4 mois)</li>
      <li>Ou directement par courrier au SCEC, 11 rue de la Maison Blanche, 44941 Nantes Cedex 9</li>
    </ul>
    <p>Sans transcription, le mariage n'a pas d'effet juridique en France : la conjointe ne peut pas obtenir un visa "conjoint de Français" et n'a pas les droits successoraux reconnus.</p>
    <p>Côté formalités des documents vietnamiens, l'acte de mariage devra être légalisé — ou apostillé une fois l'apostille pleinement applicable entre les deux pays (le Vietnam a adhéré à la Convention de La Haye, voir notre <a href="apostille-vietnam-francais-2026">guide apostille</a>) — puis traduit par un traducteur assermenté. Le SCEC procède aussi à ses propres vérifications, notamment lorsque le mariage a été célébré sans CCM préalable ou que le dossier présente des zones d'ombre : c'est ce contrôle qui explique les délais. Tout le détail des pièces et du suivi est dans le <a href="transcription-mariage-service-central-nantes">guide de la transcription à Nantes</a>.</p>

    <h2 id="section-5">Le visa conjoint pour la France (VLS-TS)</h2>
    <p>Une fois le mariage transcrit, la conjointe vietnamienne peut demander un <strong>visa long séjour valant titre de séjour (VLS-TS) mention "vie privée et familiale"</strong> auprès de l'ambassade de France à Hanoï. Ce visa d'un an est renouvelable et mène à la carte de résident après 3 à 5 ans de vie commune en France. Le dossier, le dépôt via VFS Global, la préparation de l'entretien et la check-list de l'arrivée en France sont détaillés dans deux guides dédiés : <a href="visa-long-sejour-conjoint-vietnamien-france">le visa long séjour conjoint de Français</a> et <a href="entretien-ambassade-france-vietnam-visa-conjoint">l'entretien à l'ambassade</a>.</p>

    <h2 id="section-6">Coûts indicatifs de la procédure</h2>
    <p>Voici une estimation des coûts réels pour un mariage franco-vietnamien célébré au Vietnam et transcrit en France :</p>
    <table class="comparison-table">
      <thead><tr><th>Étape</th><th>Frais indicatifs</th></tr></thead>
      <tbody>
        <tr><td>Acte de naissance apostillé et traduit (France)</td><td>50–80 €</td></tr>
        <tr><td>Frais de délivrance du CCM (ambassade de France)</td><td>Gratuit (frais administratifs possibles)</td></tr>
        <tr><td>Traduction assermentée CCM → vietnamien</td><td>500 000–1 000 000 VND (~16–32 €)</td></tr>
        <tr><td>Dépôt dossier Comité populaire (mariage civil)</td><td>200 000–500 000 VND (~6,50–16 €)</td></tr>
        <tr><td>Traduction assermentée acte de mariage vietnamien → français</td><td>500 000–1 000 000 VND (~16–32 €)</td></tr>
        <tr><td>Frais de transcription SCEC Nantes</td><td>Gratuit (délai 2–4 mois)</td></tr>
        <tr><td><strong>Total démarches légales</strong></td><td><strong>~100–200 €</strong></td></tr>
      </tbody>
    </table>
    <p>Ces coûts n'incluent pas la cérémonie traditionnelle (đám cưới) ni les coûts liés au visa conjoint pour la France le cas échéant — ni tes billets d'avion, qui sont en réalité le premier poste du budget pour un marié résidant en France.</p>

    <h2 id="section-7">La cérémonie traditionnelle : đám cưới</h2>
    <p>Même si le mariage civil est l'acte légal, la <strong>cérémonie traditionnelle vietnamienne</strong> (đám cưới) est indispensable culturellement. C'est elle que la famille attend, c'est elle dont on se souviendra. Pour le marié français, c'est aussi le premier grand examen de passage dans la belle-famille : accepte de te laisser guider sur le protocole (les aînés d'abord, les toasts, l'ordre des visites aux tables), et prépare deux ou trois phrases de remerciement en vietnamien — l'effet sur l'assemblée vaut tous les cadeaux (<a href="apprendre-vietnamien-couple">de quoi t'y mettre ici</a>).</p>
    <p>Elle se déroule en deux temps :</p>
    <ul>
      <li><strong>Lễ ăn hỏi (fiançailles / dépôt de cadeaux)</strong> : le futur marié et sa délégation apportent des plateaux de cadeaux symboliques (bia lễ) chez la famille de la future mariée. Bétel et arec, alcool, gâteaux, poulet rôti sont les offrandes traditionnelles. La délégation doit être en nombre pair (signe de bonheur). Ce rituel a lieu plusieurs semaines avant le mariage.</li>
      <li><strong>Lễ cưới (mariage)</strong> : la réception de mariage à proprement parler, souvent dans un restaurant ou un espace loué. Des centaines d'invités, de la musique, des discours, du bia hơi (bière fraîche) et des plats servis en plusieurs services. Durée : 3 à 5 heures.</li>
    </ul>
    <div class="info-box">
      <strong>💡 Coûts d'un đám cưới :</strong>
      Un mariage vietnamien de taille moyenne (200–300 invités) coûte entre 50 et 150 millions de VND (~1 600–4 900 €), partiellement compensé par les enveloppes d'argent remises par les invités (mừng đám cưới). Les familles rurales ou modestes peuvent organiser un mariage pour moins de 20 millions VND. Les familles aisées dépensent bien au-delà.
    </div>

    <h2 id="section-8">Documents à obtenir après le mariage</h2>
    <p>Une fois marié, plusieurs démarches post-mariage sont nécessaires :</p>
    <ul>
      <li><strong>Mise à jour de l'état civil français</strong> : après transcription, ton livret de famille français intègre le mariage. Demander une copie intégrale de l'acte de mariage au SCEC Nantes.</li>
      <li><strong>Visa TT pour ta conjointe au Vietnam</strong> : avec l'acte de mariage transcrit, elle peut demander la thẻ tạm trú (carte de résidence temporaire) mention TT auprès du Département de l'Immigration.</li>
      <li><strong>Visa VLS-TS pour ta conjointe en France</strong> : si vous envisagez de vivre en France, elle doit demander le visa long séjour valant titre de séjour à l'ambassade de France à Hanoï. Dossier : acte de mariage transcrit, preuves de vie commune, ressources financières suffisantes.</li>
      <li><strong>Mise à jour des bénéficiaires</strong> : assurance vie, retraite, comptes bancaires — mettre à jour les bénéficiaires après le mariage.</li>
    </ul>

    <h2 id="section-france">Se marier en France : l'autre voie, en détail</h2>
    <p>Si ta future épouse peut venir en France (visa court séjour, ou titre de séjour déjà en cours pour un autre motif), le mariage à la mairie française est une alternative complète au parcours vietnamien :</p>
    <ol>
      <li><strong>Dossier de mariage à la mairie</strong> du domicile de l'un des deux : actes de naissance (le sien traduit et légalisé/apostillé), justificatifs, certificat de coutume et de célibat vietnamiens.</li>
      <li><strong>Audition éventuelle</strong> par l'officier d'état civil — même logique que l'audition consulaire du CCM.</li>
      <li><strong>Publication des bans</strong> pendant 10 jours, puis célébration.</li>
      <li><strong>Reconnaissance au Vietnam</strong> : le mariage français devra ensuite être enregistré côté vietnamien (ghi chú kết hôn) pour produire ses effets là-bas — le miroir exact de la transcription de Nantes.</li>
    </ol>
    <p>Avantages : pas de transcription à attendre côté français (le mariage est français d'origine), et la demande de visa long séjour peut suivre plus vite. Inconvénients : il faut que ta conjointe obtienne un visa pour venir — et un visa court séjour « en vue de mariage » s'obtient, mais se prépare ; et se marier en France ne donne <strong>aucun droit automatique au séjour</strong> : après le mariage, elle devra en principe repartir demander son VLS-TS au Vietnam. Le choix entre les deux voies dépend surtout d'où vous vivez déjà et de la faisabilité du visa court séjour.</p>

    <h2 id="section-erreurs">Les erreurs fréquentes</h2>
    <ul>
      <li><strong>Fixer la date du đám cưới avant d'avoir le CCM</strong> : la famille veut une date (souvent choisie pour sa bonne fortune), l'administration a son calendrier. Fête et enregistrement légal peuvent être dissociés — c'est la soupape qui sauve tous les plannings.</li>
      <li><strong>Négliger les délais incompressibles</strong> : 10 jours de bans français, 15 jours d'affichage vietnamien, vérifications de Nantes — aucun intermédiaire ne peut les « accélérer », méfie-toi de qui le promet.</li>
      <li><strong>Faire traduire par un proche</strong> : seules les traductions assermentées sont acceptées, dans les deux sens. Une traduction refusée = un cycle de plus.</li>
      <li><strong>Oublier de lancer la transcription immédiatement</strong> : c'est elle qui conditionne le visa conjoint et tous les droits en France. Le dossier part à Nantes la semaine du mariage, pas « après la lune de miel ».</li>
      <li><strong>Ignorer la question du régime matrimonial</strong> : pour un couple mixte, la loi applicable au régime dépend de règles de droit international privé (souvent liées à la première résidence commune). Un contrat de mariage chez un notaire permet de choisir clairement — dix fois plus simple avant qu'après, surtout si un achat immobilier au Vietnam est dans les projets.</li>
    </ul>

    <?php
    $page_sources = [
      ['label' => 'Service-Public.fr — fiches officielles droits et démarches', 'url' => 'https://www.service-public.fr'],
      ['label' => 'France Diplomatie — services aux Français de l\'étranger', 'url' => 'https://www.diplomatie.gouv.fr'],
      ['label' => 'Ambassade de France au Vietnam', 'url' => 'https://vn.ambafrance.org'],
      ['label' => 'Légifrance — textes de loi et conventions', 'url' => 'https://www.legifrance.gouv.fr'],
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

    <?php
$author_bio = <<<'BIO'
Français marié à une Vietnamienne, installé à Hanoï. Je partage notre parcours : démarches administratives, mariage franco-vietnamien, vie de couple mixte.
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
$current_slug = 'se-marier-vietnamienne-demarches-france';
$current_cat  = 'mariage';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
