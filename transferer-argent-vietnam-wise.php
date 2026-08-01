<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Transférer de l\'argent vers le Vietnam avec Wise';
$page_description = 'Transférer de l\'argent de France vers le Vietnam avec Wise : frais, délais, taux de change et comparaison avec les banques traditionnelles.';
$page_canonical   = SITE_URL . '/transferer-argent-vietnam-wise';
$page_og_title    = 'Transférer de l\'argent vers le Vietnam avec Wise : guide 2026';
$page_og_desc     = 'Comparatif des frais Wise vs BNP, Société Générale pour transférer de l\'argent de France au Vietnam.';
$page_og_url      = 'https://blog-capvietnam.fr/transferer-argent-vietnam-wise';
$page_og_image    = 'https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=1200&q=80';
$page_schema      = '{"@context":"https://schema.org","@type":"BlogPosting","headline":"Transferer son argent au Vietnam : Wise vs banques classiques","datePublished":"2026-03-15","dateModified":"2026-03-15","author":{"@type":"Person","name":"Anthony Bouillon","url":"https://blog-capvietnam.fr/a-propos"},"publisher":{"@type":"Organization","name":"Anthony Bouillon","logo":{"@type":"ImageObject","url":"https://blog-capvietnam.fr/logo-entreprise.png"}},"image":"https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=1200&q=80","description":"Comparatif des frais Wise vs BNP, Societe Generale pour transferer de l argent de France au Vietnam.","timeRequired":"PT5M","inLanguage":"fr","url":"https://blog-capvietnam.fr/transferer-argent-vietnam-wise"}';

$article_color        = 'amber';
$article_hero_bg      = '#3a2800';
$article_glow         = 'rgba(184,134,11,0.15)';
$article_badge        = 'rgba(184,134,11,0.25)';
$article_badge_c      = 'var(--amber-soft)';
$article_category     = 'Argent &amp; Travail';
$article_category_url = 'https://blog-capvietnam.fr/articles-capvietnam';
$page_faq = [
  ['q' => "Peut-on envoyer de l'argent du Vietnam vers la France avec Wise ?",
   'a' => "Oui, dans les deux sens. Pour envoyer des VND vers la France, il faut un compte bancaire vietnamien pour initier le virement. Les conditions sont similaires : taux interbancaire, frais transparents. Délai : 1 à 3 jours ouvrés."],
  ['q' => 'Wise est-il disponible au Vietnam ?',
   'a' => "Wise est disponible pour recevoir des virements sur un compte bancaire vietnamien (Vietcombank, Techcombank, etc.). La plupart des expatriés gardent leur compte Wise lié à leur adresse française."],
  ['q' => 'Dois-je déclarer mon compte Wise aux impôts français ?',
   'a' => "Oui, si tu es résident fiscal français : Wise est un établissement étranger, et tout compte détenu à l'étranger doit être mentionné chaque année dans ta déclaration de revenus (formulaire de déclaration des comptes ouverts hors de France). C'est une simple formalité déclarative — il n'y a pas d'impôt sur le fait de détenir le compte — mais son oubli expose à des amendes. Si tu es devenu résident fiscal vietnamien, la logique s'inverse : renseigne-toi sur tes obligations locales."],
  ['q' => 'Le destinataire vietnamien paie-t-il des frais ou des impôts à la réception ?',
   'a' => "Non pour les frais : Wise crédite le montant annoncé en VND, sans prélèvement de la banque vietnamienne dans le circuit normal. Et les transferts d'entraide familiale reçus de l'étranger (kiều hối) ne sont pas imposés au Vietnam — le pays encourage ces flux de la diaspora. Les choses ne changent que si les sommes correspondent à un revenu d'activité du destinataire, qui relève alors de l'impôt sur le revenu vietnamien classique."],
];
include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Argent &amp; Travail</a><span class="breadcrumb-sep">›</span>
      <span>Wise vers le Vietnam</span>
    </div>
    <span class="article-badge-hero">Argent &amp; Travail</span>
    <h1>Transférer de l'argent vers le Vietnam avec Wise : taux, frais et mode d'emploi</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 22 mars 2026</span>
      <span>⏱ 12 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi Wise plutôt qu'une banque ?</a></li>
      <li><a href="#section-2">Comment ça fonctionne</a></li>
      <li><a href="#section-3">Comparatif des frais</a></li>
      <li><a href="#section-carte">La carte Wise</a></li>
      <li><a href="#section-4">Limites et restrictions</a></li>
      <li><a href="#section-5">Mode d'emploi pas à pas</a></li>
      <li><a href="#section-6">Revolut et alternatives</a></li>
      <li><a href="#section-7">Changer des espèces au Vietnam</a></li>
      <li><a href="#section-couple">Le cas du couple mixte</a></li>
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
      <strong>⚠️ Avertissement :</strong> Cet article est fourni à titre informatif uniquement et ne constitue pas un conseil financier professionnel. Les frais, taux et délais mentionnés sont indicatifs et peuvent varier. Vérifiez les conditions actuelles directement sur le site officiel de Wise avant tout transfert.
    </div>

    <p><strong>Wise (anciennement TransferWise) est devenu l'outil incontournable pour les expatriés qui transfèrent de l'argent entre la France et le Vietnam.</strong> Taux de change au taux interbancaire, frais transparents et délais rapides — voici le guide complet pour l'utiliser intelligemment : le fonctionnement, le comparatif chiffré face aux banques, la carte pour le quotidien, les pièges spécifiques aux virements vers le Vietnam (le format des noms de bénéficiaires !), et le volet fiscal que tout résident français doit connaître.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1559526324-4b87b5e36e44?w=1200&q=80" alt="Transfert d'argent international" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Pourquoi Wise plutôt qu'une banque traditionnelle ?</h2>
    <p>Les banques françaises appliquent un taux de change "client" qui peut être 2 à 5% moins favorable que le taux interbancaire (le "vrai" taux), plus des frais fixes de virement international (15 à 40 €), et parfois des frais de banque intermédiaire prélevés en chemin sur le circuit SWIFT. Sur 1 000 € envoyés, tu peux perdre 50 à 90 € avec une banque classique — sans même t'en rendre compte, puisque la perte est fondue dans le taux.</p>
    <p>Wise utilise le taux interbancaire en temps réel et facture des frais transparents de 0,4 à 1,5% du montant selon le mode de paiement. Sur 1 000 €, les frais Wise sont généralement entre 5 et 15 € — soit 4 à 8 fois moins qu'une banque.</p>
    <p>Le point clé à comprendre, valable pour comparer n'importe quels services : le coût d'un transfert international se cache à <strong>deux endroits</strong> — les frais affichés (visibles) et la marge prise sur le taux de change (invisible). Les banques communiquent sur des « frais de virement » modestes en se rattrapant sur un taux maison dégradé ; Wise a construit son modèle sur l'inverse — taux du marché sans marge, et des frais explicites annoncés avant validation. C'est pourquoi la seule comparaison honnête entre services est le <strong>montant final reçu en VND</strong> pour une même somme envoyée, jamais la ligne « frais ».</p>

    <h2 id="section-2">Comment fonctionne un virement Wise EUR → VND</h2>
    <p>Wise n'est pas une banque traditionnelle : c'est un réseau de comptes locaux dans chaque pays. Quand tu envoies 1 000 € vers le Vietnam, Wise ne "transfère" pas physiquement cet argent à travers les frontières — il utilise ses propres fonds locaux pour payer directement au Vietnam, et récupère tes euros en France. C'est ce qui lui permet d'éviter les frais SWIFT et les marges de change des banques correspondantes. Comprendre ce mécanisme explique aussi les rares lenteurs : quand la liquidité locale d'une devise se tend ou qu'un contrôle de conformité se déclenche, le virement peut prendre un ou deux jours de plus — rien d'inquiétant, tout se suit dans l'application.</p>
    <ol>
      <li>Tu envoies des euros à Wise (virement bancaire SEPA ou carte)</li>
      <li>Wise convertit au taux interbancaire en temps réel (le "mid-market rate")</li>
      <li>Wise crédite les VND directement sur le compte bancaire vietnamien du destinataire</li>
      <li>Délai : généralement <strong>quelques heures à 1 jour ouvré</strong> pour EUR → VND</li>
    </ol>
    <div class="info-box">
      <strong>📱 L'application Wise :</strong>
      L'app (iOS et Android) permet de suivre chaque virement en temps réel, de recevoir des notifications à chaque étape et de configurer des alertes de taux de change. Tu peux programmer un virement automatique si le taux dépasse un seuil que tu définis — utile pour optimiser ses conversions EUR/VND.
    </div>
    <div class="tip-box">
      <strong>💡 Compte multi-devises :</strong>
      Avec un compte Wise gratuit, tu peux détenir simultanément des euros, des VND, des dollars et une cinquantaine d'autres devises. Tu convertis quand le taux est favorable, sans frais supplémentaires. C'est mon usage principal : je garde une réserve en euros chez Wise et je convertis en VND progressivement selon les fluctuations du taux de change.
    </div>

    <h2 id="section-3">Comparatif des frais EUR → VND (1 000 €)</h2>
    <table class="comparison-table">
      <thead><tr><th>Service</th><th>Frais fixes</th><th>Marge de change</th><th>VND reçus*</th></tr></thead>
      <tbody>
        <tr><td><strong>Wise</strong></td><td>~7 €</td><td>0% (taux mid)</td><td>~30 617 000 VND</td></tr>
        <tr><td><strong>Revolut (Standard)</strong></td><td>0 €</td><td>0,5% (jours ouvrés)</td><td>~30 458 000 VND</td></tr>
        <tr><td><strong>BNP Paribas</strong></td><td>~25 €</td><td>2 à 3%</td><td>~28 975 000 VND</td></tr>
        <tr><td><strong>Société Générale</strong></td><td>~30 €</td><td>2 à 3%</td><td>~28 747 000 VND</td></tr>
        <tr><td><strong>Western Union</strong></td><td>~15 €</td><td>1,5 à 2%</td><td>~29 431 000 VND</td></tr>
      </tbody>
    </table>
    <p><em>*Estimations indicatives basées sur un taux EUR/VND de 30 800 VND pour 1 EUR (avril 2026).</em></p>
    <p>La lecture du tableau parle d'elle-même : entre le meilleur et le pire des circuits, l'écart approche <strong>2 millions de VND sur un seul virement de 1 000 €</strong> — de quoi payer plusieurs semaines de courses à Hanoï. Pour un expatrié qui vire chaque mois, le choix de l'outil de transfert n'est pas un détail de geek : c'est l'une des optimisations les plus rentables de toute la vie d'expat, rapportée à l'effort demandé (dix minutes d'inscription, une fois).</p>

    <h2 id="section-carte">La carte Wise : retirer du cash au Vietnam</h2>
    <p>En plus des virements, Wise propose une <strong>carte de débit internationale</strong> (Visa ou Mastercard selon les pays) liée directement à ton solde Wise. Pour un expatrié au Vietnam, c'est un outil très pratique au quotidien — et pour un nouvel arrivant, c'est souvent LE pont des premières semaines : le temps d'ouvrir un compte bancaire vietnamien (qui demande un statut de résident), la carte Wise paie l'hôtel, les courses et les retraits sans les marges de change d'une carte bancaire française classique.</p>
    <ul>
      <li><strong>Retraits DAB gratuits</strong> : 2 retraits par mois jusqu'à 200 € équivalent sans frais. Au-delà : ~1,75% de frais. Valable dans tous les DAB vietnamiens (Vietcombank, Techcombank, BIDV…) — certains DAB ajoutent leurs propres frais locaux de quelques dizaines de milliers de VND, affichés avant validation</li>
      <li><strong>Paiements sans contact</strong> : fonctionne partout où Visa/Mastercard est accepté au Vietnam — centres commerciaux, hôtels, supermarchés.</li>
      <li><strong>Taux de change en temps réel</strong> : quand tu paies en VND avec ta carte Wise, elle convertit depuis ton solde EUR au taux interbancaire du moment — aucune marge cachée.</li>
      <li><strong>Google Pay / Apple Pay</strong> : compatible, selon ta banque d'origine.</li>
      <li><strong>Blocage instantané</strong> : si tu perds ta carte, tu la bloques en 2 secondes depuis l'app.</li>
    </ul>
    <div class="warning-box">
      <strong>⚠️ Limite des DAB vietnamiens :</strong>
      Indépendamment de Wise, la plupart des DAB au Vietnam plafonnent les retraits entre 3 000 000 et 5 000 000 VND par transaction (~97–162 €). Pour retirer plus, tu dois effectuer plusieurs transactions. La limite Wise (200 €/mois gratuits) est calculée sur le total mensuel, pas par transaction.
    </div>

    <h2 id="section-4">Limites et restrictions</h2>
    <ul>
      <li><strong>Limite par virement</strong> : Wise accepte jusqu'à 1 000 000 € par transfert (selon vérification d'identité)</li>
      <li><strong>Compte bancaire vietnamien requis</strong> : tu dois fournir le numéro de compte (IBAN-equivalent) du destinataire au Vietnam</li>
      <li><strong>Vérification d'identité</strong> : pièce d'identité requise à l'inscription, puis vérification automatique</li>
    </ul>
    <p>Rappel de contexte vietnamien : le pays applique un <strong>contrôle des changes</strong>. L'argent entre librement (le Vietnam encourage les flux entrants), mais la sortie de devises est encadrée — d'où l'importance, si un jour tu dois rapatrier des sommes importantes vers la France (revente immobilière, épargne locale), de pouvoir justifier l'origine légale des fonds. Chaque virement Wise bien libellé que tu fais aujourd'hui est une pièce de ce dossier de demain. Pour l'écosystème bancaire local qui reçoit ces virements, voir <a href="banque-vietnam-francais">ouvrir un compte bancaire au Vietnam</a>.</p>
    <div class="warning-box">
      <strong>Attention :</strong>
      Les virements de gros montants (supérieurs à 10 000 € en France, seuils similaires au Vietnam) peuvent déclencher des contrôles automatiques anti-blanchiment. C'est normal et légal — prévois des justificatifs (contrat de travail, acte de vente, etc.) pour les transferts importants.
    </div>

    <h2 id="section-5">Mode d'emploi pas à pas</h2>
    <ol>
      <li>Crée un compte Wise via <a href="go.php?id=wise" rel="noopener sponsored">ce lien de parrainage</a> (premier transfert offert) et vérifie ton identité (CNI ou passeport)</li>
      <li>Clique sur "Envoyer de l'argent"</li>
      <li>Sélectionne : EUR → VND, entre le montant</li>
      <li>Renseigne les informations du compte bancaire destinataire au Vietnam — <strong>nom complet exactement tel qu'enregistré par la banque vietnamienne</strong> (en majuscules sans accents), numéro de compte, nom de la banque</li>
      <li>Choisis le mode de paiement (virement bancaire = moins de frais, carte = plus rapide)</li>
      <li>Valide — l'argent arrive en 1 à 3 jours ouvrés</li>
    </ol>
    <p>Premier virement : commence petit (une centaine d'euros) pour valider que les coordonnées du bénéficiaire passent, puis enchaîne les montants réels. C'est le réflexe qui évite le stress du gros virement bloqué pour une histoire d'accent dans un nom.</p>

    <?php
    $aff_id    = 'wise';
    $aff_icon  = '💸';
    $aff_title = 'Ton premier transfert sans frais avec Wise';
    $aff_text  = 'En passant par mon lien de parrainage, ton premier transfert est offert (jusqu\'à un certain montant). Taux interbancaire garanti, sans engagement.';
    $aff_cta   = 'Ouvrir Wise gratuitement';
    $aff_note  = 'Lien affilié — je reçois une petite commission si tu effectues un premier transfert. Ça ne change pas le service ni le prix pour toi.';
    $aff_theme = 'green';
    include '_affiliate-cta.php';
    ?>

    <h2 id="section-6">Revolut et les alternatives à Wise</h2>
    <p>Wise n'est pas le seul outil disponible, et l'honnêteté oblige à dire qu'aucun service n'est optimal pour tous les usages : le meilleur montage combine généralement deux outils, chacun sur son terrain. Selon ta situation, voici comment les alternatives se positionnent :</p>
    <table class="comparison-table">
      <thead><tr><th>Service</th><th>Points forts</th><th>Limites</th><th>Idéal pour</th></tr></thead>
      <tbody>
        <tr><td><strong>Revolut</strong></td><td>Échange sans frais en semaine (jusqu'à 1 000 €/mois sur plan gratuit), carte virtuelle</td><td>Frais de change weekend (0,5–1%), limites sur comptes gratuits</td><td>Dépenses courantes en VND, retraits DAB</td></tr>
        <tr><td><strong>Western Union</strong></td><td>Réseau d'agences physiques immense au Vietnam</td><td>Frais élevés, taux moins favorable</td><td>Urgences, destinataire sans compte bancaire</td></tr>
        <tr><td><strong>Virement SWIFT bancaire</strong></td><td>Fiable, traçable</td><td>Lent (2–5 jours), frais 25–50 €</td><td>Gros montants (>10 000 €)</td></tr>
        <tr><td><strong>PayPal</strong></td><td>Universel, accepté sur plateformes freelance</td><td>Taux de conversion très défavorable (+3%), frais de retrait</td><td>Clients internationaux uniquement</td></tr>
      </tbody>
    </table>
    <div class="tip-box">
      <strong>💡 Stratégie recommandée :</strong>
      Utilise Wise pour tous les virements mensuels importants (loyer, épargne). Garde Revolut pour les dépenses quotidiennes depuis le solde EUR. Western Union uniquement pour des cas d'urgence où le destinataire vietnamien n'a pas de compte bancaire.
    </div>
    <p>Et n'oublie pas la brique locale du montage : une fois installé, un <strong>compte bancaire vietnamien</strong> reste indispensable pour la vie quotidienne (virements locaux, QR codes, prélèvements du loyer). Le trio gagnant de l'expatrié : compte français conservé (<a href="fortuneo-expat-compte-france">une banque en ligne compatible expatriation</a>), Wise comme pont entre les deux mondes, et compte vietnamien pour la vie sur place. L'architecture complète est décrite dans <a href="organiser-finances-expat-france-vietnam">l'article d'organisation des finances France-Vietnam</a>.</p>

    <?php
    $aff_id    = 'revolut';
    $aff_icon  = '💳';
    $aff_title = 'Ouvre un compte Revolut gratuitement';
    $aff_text  = 'Carte internationale, échange sans frais en semaine (jusqu\'à 1 000 €/mois sur plan Standard), notifications en temps réel. Une bonne alternative à Wise pour les dépenses courantes au Vietnam.';
    $aff_cta   = 'Rejoindre Revolut';
    $aff_note  = 'Lien de parrainage — sans coût supplémentaire pour toi.';
    $aff_theme = 'blue';
    include '_affiliate-cta.php';
    ?>

    <div style="background:linear-gradient(135deg,#f0fdf4,#dcfce7);border-left:4px solid #00b67a;padding:1.5rem 1.75rem;border-radius:0 12px 12px 0;margin:2.5rem 0;">
      <strong style="display:block;margin-bottom:0.5rem;color:#005c3c;font-size:1.05rem;">🎁 Obtenez votre bonus de parrainage Wise ou Revolut</strong>
      <p style="margin:0 0 1rem;color:#3a3530;font-size:0.95rem;">Vous souhaitez ouvrir un compte Wise ou Revolut <strong>et recevoir une prime en cash</strong> ? Sur <a href="https://bonusparrainage.com" target="_blank" rel="noopener" style="color:#005c3c;font-weight:700;">BonusParrainage.com</a>, les codes parrainage sont vérifiés chaque jour et vous recevez <strong>50% de la prime de parrainage</strong> reversée directement sur PayPal.</p>
      <div style="display:flex;gap:0.75rem;flex-wrap:wrap;">
        <a href="https://bonusparrainage.com" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:0.4rem;padding:0.6rem 1.25rem;background:#00b67a;color:#fff;border-radius:6px;text-decoration:none;font-weight:600;font-size:0.9rem;">💸 Code parrainage Wise</a>
        <a href="https://bonusparrainage.com/revolut" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:0.4rem;padding:0.6rem 1.25rem;background:#0075eb;color:#fff;border-radius:6px;text-decoration:none;font-weight:600;font-size:0.9rem;">💳 Code parrainage Revolut</a>
      </div>
    </div>

    <h2 id="section-7">Changer de l'argent en espèces au Vietnam</h2>
    <p>Malgré l'essor spectaculaire du paiement numérique au Vietnam — les QR codes de paiement sont partout, jusque sur les étals de marché, et ton compte bancaire vietnamien te donnera accès à cet écosystème —, le VND en espèces reste utile pour les petites échoppes, certains transports et la campagne. Voici où changer en obtenant un bon taux :</p>
    <ul>
      <li><strong>Bijouteries (tiệm vàng)</strong> : contre-intuitif mais courant au Vietnam — les bijouteries agréées proposent souvent les meilleurs taux de change cash EUR/USD → VND, légèrement au-dessus des banques. L'or et les devises sont historiquement liés dans l'épargne vietnamienne, d'où ce rôle des bijouteries. Vérifiez que l'établissement est agréé par la Banque d'État.</li>
      <li><strong>Banques (guichet change)</strong> : taux inférieur aux bijouteries agréées mais 100% sûr. Présente ton passeport. Délai : 5 à 15 minutes.</li>
      <li><strong>Aéroport (à éviter)</strong> : taux systématiquement défavorable de 2 à 4% — change juste le minimum nécessaire à l'arrivée pour les premiers transports.</li>
      <li><strong>Distributeurs DAB</strong> : pratique mais généralement moins favorable qu'une bijouterie agréée. La carte Wise au DAB reste une bonne option grâce au taux interbancaire.</li>
    </ul>
    <div class="warning-box">
      <strong>⚠️ Marché noir et arnaque :</strong>
      Ne change jamais d'argent auprès de personnes qui vous abordent dans la rue. Les billets contrefaits existent, et la transaction est illégale. Utilisez uniquement des bureaux agréés par la Banque d'État du Vietnam.
    </div>

    <h2 id="section-couple">Le cas du couple mixte : envoyer de l'argent à la famille</h2>
    <p>Dans un couple franco-vietnamien, les transferts ne servent pas qu'à alimenter ton propre compte : soutenir la famille fait partie de la vie. Le Vietnam est d'ailleurs, année après année, l'un des grands pays récipiendaires de transferts de la diaspora (kiều hối) — c'est un circuit rodé, massif et parfaitement légal à l'arrivée. Quelques usages qui simplifient tout :</p>
    <ul>
      <li><strong>Envoyer directement sur le compte du destinataire final</strong> (la belle-mère, le frère) plutôt que de faire transiter par ton/ta conjoint(e) : Wise s'en moque, et ça évite les allers-retours.</li>
      <li><strong>Enregistrer les bénéficiaires récurrents</strong> : l'enveloppe du Tết, la participation à un événement familial ou le soutien mensuel se règlent alors en trois clics depuis la France.</li>
      <li><strong>Garder une trace propre</strong> : les libellés de virement documentent naturellement qui a envoyé quoi — utile pour l'équilibre du couple (voir <a href="argent-couple-franco-vietnamien">l'argent à deux dans un couple franco-vietnamien</a>) et, un jour, pour prouver l'origine des fonds d'un <a href="achat-immobilier-vietnam-couple-mixte">achat immobilier</a>.</li>
    </ul>

    <h2 id="section-erreurs">Les erreurs fréquentes</h2>
    <ul>
      <li><strong>Le nom du bénéficiaire mal orthographié</strong> : les comptes bancaires vietnamiens enregistrent les noms EN MAJUSCULES SANS ACCENTS (NGUYEN THI MAI, pas Nguyễn Thị Mai). Recopie exactement ce format — c'est la cause n°1 des virements rejetés.</li>
      <li><strong>Payer par carte « pour aller plus vite » systématiquement</strong> : le paiement par carte coûte plus cher que le virement SEPA vers Wise. La vitesse ne vaut le surcoût que pour les vraies urgences.</li>
      <li><strong>Convertir toute son épargne d'un coup</strong> : le taux EUR/VND fluctue. Garder la réserve en euros et convertir par tranches lisse le risque de change — c'est tout l'intérêt du compte multi-devises.</li>
      <li><strong>Comparer les services sur les seuls « frais »</strong> : le vrai coût = frais affichés + marge cachée sur le taux. Compare toujours le montant final reçu en VND, pas la ligne « frais ».</li>
      <li><strong>Oublier la déclaration fiscale française</strong> : pour un résident fiscal français, un compte Wise est un compte à l'étranger, à déclarer chaque année avec la déclaration de revenus (formulaire dédié aux comptes détenus hors de France). L'oubli est sanctionnable — deux minutes de formulaire t'en préservent.</li>
    </ul>

    <?php
    $page_sources = [
      ['label' => 'impots.gouv.fr — fiscalité des particuliers et non-résidents', 'url' => 'https://www.impots.gouv.fr'],
      ['label' => 'Service-Public.fr — fiches officielles droits et démarches', 'url' => 'https://www.service-public.fr'],
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
Utilisateur de Wise depuis 2026 pour mes virements mensuels France → Vietnam. Les frais indiqués sont les miens, mis à jour en 2026.
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
$current_slug = 'transferer-argent-vietnam-wise';
$current_cat  = 'argent';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
