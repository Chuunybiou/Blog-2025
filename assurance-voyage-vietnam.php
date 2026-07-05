<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Assurance voyage Vietnam 2026 : Globe Traveller ou Globe Partner (ACS) ?';
$page_description = 'Quelle assurance voyage choisir pour le Vietnam ? Comparatif ACS Globe Traveller vs Globe Partner : garanties, tarifs, à partir de 16,50 €. Guide complet 2026.';
$page_canonical   = SITE_URL . '/assurance-voyage-vietnam';
$page_og_title    = 'Assurance voyage Vietnam 2026 : Globe Traveller ou Globe Partner ?';
$page_og_desc     = 'Globe Traveller ou Globe Partner (ACS) : lequel choisir pour votre voyage au Vietnam ? Comparatif complet, garanties et tarifs réels.';
$page_og_url      = SITE_URL . '/assurance-voyage-vietnam';
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';

$page_schema = json_encode([
  '@context'         => 'https://schema.org',
  '@type'            => 'Article',
  'headline'         => 'Assurance voyage Vietnam 2026 : Globe Traveller ou Globe Partner (ACS) ?',
  'description'      => 'Comparatif ACS Globe Traveller vs Globe Partner pour un voyage au Vietnam : garanties médicales, rapatriement, bagages, tarifs et conseils.',
  'datePublished'    => '2026-07-03',
  'dateModified'     => '2026-07-03',
  'author'           => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'        => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage' => SITE_URL . '/assurance-voyage-vietnam',
  'inLanguage'       => 'fr',
  'articleSection'   => 'Vie pratique au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color   = 'jade';
$article_hero_bg = '#001a0d';
$article_glow    = 'rgba(27,107,82,0.18)';
$article_badge   = 'rgba(27,107,82,0.25)';
$article_badge_c = '#4db890';

$article_category     = 'Vie pratique au Vietnam';
$article_category_url = SITE_URL . '/articles-capvietnam';
$current_slug         = 'assurance-voyage-vietnam';
$current_cat          = 'vie-pratique';

$page_faq = [
  ['q' => 'Mon assurance carte bancaire (Visa Premier, Gold) couvre-t-elle le Vietnam ?',
   'a' => 'En partie et sous conditions. Les assurances cartes bancaires couvrent généralement les voyages dont le billet a été payé avec la carte, pour une durée limitée (souvent 90 jours maximum). Elles ne couvrent pas les séjours de plus de 3 mois, et les plafonds médicaux sont souvent insuffisants pour couvrir un rapatriement sanitaire depuis l\'Asie (qui peut coûter 20 000 à 80 000 €). Une assurance voyage dédiée comme ACS apporte une couverture plus complète, à un tarif souvent inférieur à ce que vous croyez.'],
  ['q' => 'La dengue est-elle couverte par ACS ?',
   'a' => 'Oui. Les deux formules ACS (Globe Traveller et Globe Partner) couvrent la dengue comme toute autre maladie — frais médicaux, hospitalisation, rapatriement si nécessaire. La dengue est fréquente au Vietnam en saison des pluies (juin-novembre). La prévention reste essentielle : répulsif DEET, vêtements couvrants au crépuscule, moustiquaire.'],
  ['q' => 'Peut-on souscrire ACS après être arrivé au Vietnam ?',
   'a' => 'Oui, il est possible de souscrire après le départ. Un délai de carence de 8 jours s\'applique dans ce cas — les garanties n\'entrent pas en vigueur immédiatement. L\'idéal reste de souscrire avant le départ pour être couvert dès le premier jour de voyage.'],
  ['q' => 'Quelle différence entre Globe Partner et Globe Traveller ?',
   'a' => 'Globe Partner est réservé aux moins de 40 ans et propose le tarif le plus bas (dès 16,50€). Globe Traveller s\'adresse à tous les voyageurs de moins de 66 ans, avec des plafonds médicaux plus élevés (jusqu\'à 500 000€) et des options supplémentaires (sports à risques, annulation, matériel de sport). Pour un jeune backpacker ou digital nomad, Globe Partner offre un excellent rapport qualité/prix. Pour les voyageurs de plus de 40 ans ou ceux qui veulent une couverture maximum, Globe Traveller est le bon choix.'],
  ['q' => 'ACS couvre-t-il les sports et activités à risques au Vietnam ?',
   'a' => 'Par défaut, les formules ACS excluent certains sports à risques (moto hors route, escalade, plongée en bouteille, etc.). Globe Traveller propose une option spécifique pour supprimer ces exclusions et couvrir les sports à risques, ainsi qu\'une option de couverture du matériel de sport. Si vous prévoyez de faire de la moto, du kayak, de la plongée ou du trekking au Vietnam, vérifiez les conditions générales et activez l\'option si nécessaire.'],
  ['q' => 'Que faire en cas d\'urgence médicale au Vietnam avec ACS ?',
   'a' => 'Appelez immédiatement le numéro d\'assistance ACS (disponible 24h/24, 7j/7, multilingue) indiqué sur votre certificat d\'assurance. Pour les hospitalisations, ACS organise la prise en charge directe avec l\'hôpital — pas d\'avance de frais nécessaire. Pour les frais inférieurs à 500€, vous pouvez les régler et vous faire rembourser via la plateforme en ligne.'],
];

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="blog-capvietnam">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Vie pratique au Vietnam</a><span class="breadcrumb-sep">›</span>
      <span>Assurance voyage Vietnam</span>
    </div>
    <span class="article-badge-hero">Vie pratique</span>
    <h1>Assurance voyage Vietnam : Globe Traveller ou Globe Partner (ACS) — lequel choisir ?</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 3 juillet 2026</span>
      <span>⏱ 7 min de lecture</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Pourquoi l'assurance voyage est indispensable</a></li>
      <li><a href="#section-2">Globe Partner — pour les moins de 40 ans</a></li>
      <li><a href="#section-3">Globe Traveller — pour tous (moins de 66 ans)</a></li>
      <li><a href="#section-4">Comparatif des deux formules</a></li>
      <li><a href="#section-5">Ce qui est couvert en détail</a></li>
      <li><a href="#section-6">Exclusions à connaître</a></li>
      <li><a href="#section-7">Comment souscrire</a></li>
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

    <div class="warning-box">
      <strong>⚠️ Transparence :</strong> Je suis partenaire d'ACS. Les liens vers Globe Traveller et Globe Partner dans cet article sont des liens affiliés — ils ne changent pas le prix que vous payez. Je recommande ces produits parce que je les ai vérifiés, pas uniquement parce qu'ils sont affiliés.
    </div>

    <p><strong>Le Vietnam n'a pas de convention de sécurité sociale avec la France.</strong> Si vous tombez malade ou avez un accident au Vietnam — que ce soit pour un séjour de 2 semaines ou de 6 mois — la Sécu ne rembourse rien. Une consultation dans une clinique internationale à Hanoï coûte entre 50 et 150 USD. Une nuit d'hospitalisation : entre 300 et 600 USD. Un rapatriement sanitaire vers la France : jusqu'à 80 000 €.</p>

    <p>La bonne nouvelle : une assurance voyage sérieuse pour le Vietnam coûte <strong>moins de 30 € pour deux semaines</strong>. La mauvaise nouvelle : beaucoup de voyageurs partent sans, en pensant que leur carte bancaire suffit — elle ne suffit souvent pas.</p>

    <p>J'ai comparé et sélectionné deux formules d'<strong>ACS</strong>, courtier spécialisé en mobilité internationale depuis plus de 40 ans. Voici comment choisir selon votre profil.</p>

    <div class="tip-box">
      <strong>🙋 Pourquoi je recommande ACS</strong><br>
      Il y a trois ans, j'ai souscrit une formule ACS pour un séjour au Canada. J'ai pu poser des questions sur la prise en charge de mes ordonnances — ils ont répondu vite et clairement. J'ai ensuite été remboursé sans problème pour des consultations médicales courantes. Ce n'est pas du Vietnam, mais ça m'a suffi pour savoir qu'ils tiennent leurs engagements. C'est pour ça que je les recommande ici en toute confiance, et pas juste parce que c'est mon partenaire affilié.
    </div>

    <h2 id="section-1">Pourquoi l'assurance voyage est indispensable au Vietnam</h2>

    <p>Trois raisons concrètes pour ne pas partir sans couverture :</p>

    <ul>
      <li><strong>Les hôpitaux internationaux facturent en dollars.</strong> Les cliniques fréquentées par les expatriés et les touristes (Vinmec, Family Medical Practice, Hoan My) pratiquent des tarifs proches des standards occidentaux. Sans assurance, vous payez intégralement.</li>
      <li><strong>Le rapatriement sanitaire peut ruiner une famille.</strong> En cas d'accident grave ou de maladie nécessitant un retour en France sous assistance médicale, le coût oscille entre 20 000 et 80 000 €. C'est la garantie la plus importante — et la plus ignorée.</li>
      <li><strong>Les assurances carte bancaire ont des limites strictes.</strong> Visa Premier et Mastercard Gold couvrent généralement les séjours jusqu'à 90 jours si le billet a été payé avec la carte. Les plafonds médicaux sont souvent bas (30 000 à 100 000 €) et les conditions d'exclusion nombreuses.</li>
    </ul>

    <div class="info-box">
      <strong>🦟 Et la dengue ?</strong> C'est la maladie la plus fréquente chez les voyageurs au Vietnam, surtout de juin à novembre. Un vaccin existe (Qdenga® / TAK-003, Takeda) mais ses recommandations pour les voyageurs français restent limitées selon l'âge et le profil médical — consultez votre médecin ou le centre vaccinal de l'Institut Pasteur de Paris avant le départ. La prévention anti-moustique reste la principale protection. Une dengue sévère peut nécessiter une hospitalisation de 5 à 10 jours : les deux formules ACS la couvrent comme toute autre maladie.
    </div>

    <p>D'autres assureurs voyage sérieux existent sur ce marché — Chapka Assurances, Heymondo, AVI International ou encore Allianz Travel / Mondial Assistance proposent des formules compétitives. Je ne les déconseille pas. Si je recommande ACS ici, c'est pour trois raisons concrètes : ils sont l'un des rares courtiers à proposer une souscription pour les moins de 66 ans sans surprime, leurs plafonds de rapatriement sanitaire sont parmi les plus élevés du marché, et j'ai personnellement vérifié leur processus de remboursement lors d'un séjour au Canada. C'est aussi mon partenaire affilié — c'est précisément pourquoi j'ai tenu à vérifier que le produit est à la hauteur avant de l'intégrer ici.</p>

    <h2 id="section-2">Globe Partner — la formule pour les moins de 40 ans</h2>

    <p><strong><a href="https://www.acs-ami.com/fr/assurance-voyage/globe-partner/?part=blogcapvietnam&utm_source=blog-capvietnam&utm_medium=aff-link" target="_blank" rel="noopener sponsored">Globe Partner</a></strong> est la formule entrée de gamme d'ACS. Elle s'adresse aux backpackers, étudiants, stagiaires et jeunes voyageurs de moins de 40 ans qui cherchent une couverture sérieuse sans dépenser une fortune.</p>

    <ul>
      <li><strong>Prix de départ :</strong> à partir de 16,50 € <em>(prix d'appel)</em> — ex. 29,50 € pour 15 jours au Vietnam</li>
      <li><strong>Limite d'âge :</strong> moins de 40 ans</li>
      <li><strong>Durée maximale :</strong> jusqu'à 12 mois consécutifs</li>
      <li><strong>Zone :</strong> monde entier sauf pays de résidence habituelle</li>
      <li><strong>Frais médicaux :</strong> 100% des frais réels dès le 1er euro, plafond annuel 300 000 €, hospitalisation sans avance de frais</li>
      <li><strong>Rapatriement sanitaire :</strong> 100% des frais réels</li>
      <li><strong>Responsabilité civile :</strong> jusqu'à 4 500 000 € (dommages corporels) + 450 000 € (matériels)</li>
      <li><strong>Bagages :</strong> jusqu'à 1 150 € (trajets aller-retour)</li>
      <li><strong>Capital décès :</strong> 1 000 € (non-accidentel) / 8 000 € (accidentel)</li>
      <li><strong>Incapacité permanente suite à accident :</strong> jusqu'à 30 000 €</li>
      <li><strong>Assistance :</strong> 24h/24, 7j/7, multilingue</li>
    </ul>

    <div class="tip-box">
      <strong>💡 Globe Partner en pratique :</strong> ACS facture par zone géographique, pas par pays — le tarif est donc identique pour l'Asie du Sud-Est, l'Afrique subsaharienne ou le Moyen-Orient. Exemples : 29,50 € pour 15 jours au Vietnam ou au Kenya (même zone tarifaire), 68,50 € pour 6 semaines en Asie du Sud-Est, 117 € pour un tour du monde de 3 mois, 330 € pour un stage de 6 mois aux États-Unis. Le rapport couverture/prix est excellent pour un profil jeune sans pathologie préexistante.
    </div>

    <p style="margin-top:1.5rem;text-align:center">
      <a href="https://www.acs-ami.com/fr/assurance-voyage/globe-partner/?part=blogcapvietnam&utm_source=blog-capvietnam&utm_medium=aff-link" target="_blank" rel="noopener sponsored" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.9rem 2rem;background:#1b6b52;color:#fff;border-radius:6px;font-weight:700;text-decoration:none;font-size:1rem">Voir Globe Partner — ACS ↗</a>
    </p>

    <h2 id="section-3">Globe Traveller — la formule polyvalente pour les moins de 66 ans</h2>

    <p><strong><a href="https://www.acs-ami.com/fr/assurance-voyage/globe-traveller/?part=blogcapvietnam&utm_source=blog-capvietnam&utm_medium=aff-link" target="_blank" rel="noopener sponsored">Globe Traveller</a></strong> est la formule flagship d'ACS. Elle s'adresse à un public plus large — tous les voyageurs de moins de 66 ans — avec des plafonds de couverture significativement plus élevés et des options modulables selon votre activité.</p>

    <ul>
      <li><strong>Prix de départ :</strong> à partir de 25 € (ex. 150 € pour un tour du monde de 3 mois ; tarif Vietnam selon plafond médical choisi — devis instantané sur acs-ami.com)</li>
      <li><strong>Limite d'âge :</strong> moins de 66 ans</li>
      <li><strong>Durée maximale :</strong> jusqu'à 12 mois consécutifs</li>
      <li><strong>Zone :</strong> monde entier sauf pays de résidence habituelle</li>
      <li><strong>Frais médicaux :</strong> 100% remboursés (consultations, pharmacie, analyses, radio), hospitalisation sans avance de frais</li>
      <li><strong>Plafond médical :</strong> au choix 150 000 €, 300 000 € ou 500 000 € (Amérique du Nord impose automatiquement 500k€)</li>
      <li><strong>Soins dentaires d'urgence :</strong> jusqu'à 300 € ; jusqu'à 600 € si suite à un accident</li>
      <li><strong>Rapatriement sanitaire :</strong> 100% des frais réels</li>
      <li><strong>Capital décès :</strong> 1 000 € (non-accidentel) / 10 000 € (accidentel)</li>
      <li><strong>Incapacité permanente suite à accident :</strong> jusqu'à 50 000 €</li>
      <li><strong>Responsabilité civile :</strong> jusqu'à 4 500 000 € (dommages corporels) + 450 000 € (dommages matériels)</li>
      <li><strong>Bagages :</strong> jusqu'à 2 000 € par contrat</li>
      <li><strong>Retard de vol (&gt;4h) :</strong> jusqu'à 150 € par personne</li>
      <li><strong>Réduction groupe :</strong> -10% à partir de 3 personnes de la même famille</li>
      <li><strong>VPN offert :</strong> accès VPN avec 20 Go/mois inclus</li>
    </ul>

    <div class="tip-box">
      <strong>💡 Options disponibles sur Globe Traveller :</strong>
      <ul style="margin:0.5rem 0 0;padding-left:1.2rem;">
        <li><strong>Annulation voyage</strong> : jusqu'à 9 000 € par personne — utile si vous réservez des vols et hôtels longtemps à l'avance</li>
        <li><strong>Sports à risques</strong> : supprime les exclusions pour moto hors route, plongée, escalade, parapente, etc.</li>
        <li><strong>Matériel de sport</strong> : couverture de l'équipement spécialisé emporté en voyage</li>
      </ul>
    </div>

    <p style="margin-top:1.5rem;text-align:center">
      <a href="https://www.acs-ami.com/fr/assurance-voyage/globe-traveller/?part=blogcapvietnam&utm_source=blog-capvietnam&utm_medium=aff-link" target="_blank" rel="noopener sponsored" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.9rem 2rem;background:#1b6b52;color:#fff;border-radius:6px;font-weight:700;text-decoration:none;font-size:1rem">Voir Globe Traveller — ACS ↗</a>
    </p>

    <h2 id="section-4">Comparatif Globe Partner vs Globe Traveller</h2>

    <table class="comparison-table">
      <thead>
        <tr>
          <th>Critère</th>
          <th>Globe Partner</th>
          <th>Globe Traveller</th>
        </tr>
      </thead>
      <tbody>
        <tr><td><strong>Limite d'âge</strong></td><td>moins de 40 ans</td><td>moins de 66 ans</td></tr>
        <tr><td><strong>Prix de départ</strong></td><td>à partir de 16,50 € <small>(prix d'appel)</small></td><td>à partir de 25 €</td></tr>
        <tr><td><strong>Frais médicaux</strong></td><td>Dès le 1er €</td><td>100% remboursés</td></tr>
        <tr><td><strong>Plafond médical</strong></td><td>300 000 €</td><td>150k / 300k / 500k €</td></tr>
        <tr><td><strong>Hospitalisation sans avance</strong></td><td>✓</td><td>✓</td></tr>
        <tr><td><strong>Rapatriement sanitaire</strong></td><td>100% frais réels</td><td>100% frais réels</td></tr>
        <tr><td><strong>Responsabilité civile</strong></td><td>jusqu'à 4,5 M€</td><td>jusqu'à 4,5 M€</td></tr>
        <tr><td><strong>Capital décès</strong></td><td>1 000 € / 8 000 € (acc.)</td><td>1 000 € / 10 000 € (acc.)</td></tr>
        <tr><td><strong>Incapacité permanente</strong></td><td>jusqu'à 30 000 €</td><td>jusqu'à 50 000 €</td></tr>
        <tr><td><strong>Bagages</strong></td><td>jusqu'à 1 150 €</td><td>jusqu'à 2 000 €</td></tr>
        <tr><td><strong>Retard de vol</strong></td><td>–</td><td>jusqu'à 150 € / pers.</td></tr>
        <tr><td><strong>Option sports à risques</strong></td><td>–</td><td>✓ (option payante)</td></tr>
        <tr><td><strong>Option annulation voyage</strong></td><td>–</td><td>✓ jusqu'à 9 000 €</td></tr>
        <tr><td><strong>VPN offert</strong></td><td>–</td><td>✓ 20 Go/mois</td></tr>
        <tr><td><strong>Réduction groupe</strong></td><td>–</td><td>-10% dès 3 pers. (même famille)</td></tr>
        <tr><td><strong>Durée maximale</strong></td><td>12 mois</td><td>12 mois</td></tr>
        <tr><td><strong>Souscription après départ</strong></td><td>✓ (carence 8j)</td><td>✓ (carence 8j)</td></tr>
      </tbody>
    </table>

    <div class="info-box">
      <strong>Qui choisit quoi ?</strong>
      <ul style="margin:0.5rem 0 0;padding-left:1.2rem;">
        <li><strong>Globe Partner</strong> → étudiant, backpacker ou digital nomad de moins de 40 ans, budget serré, séjour Asie jusqu'à 12 mois</li>
        <li><strong>Globe Traveller</strong> → voyageur de plus de 40 ans, famille en voyage, activités à risques, besoin d'un plafond médical élevé, départ en groupe</li>
      </ul>
    </div>

    <h2 id="section-5">Ce qui est couvert en détail</h2>

    <p>Les deux formules couvrent les situations que vous rencontrerez le plus souvent au Vietnam :</p>

    <ul>
      <li><strong>Consultation médicale</strong> dans n'importe quel médecin ou clinique, sans réseau imposé — vous choisissez librement votre médecin</li>
      <li><strong>Hospitalisation</strong> sans avance de frais — ACS règle directement l'hôpital pour les séjours significatifs</li>
      <li><strong>Médicaments sur ordonnance</strong></li>
      <li><strong>Analyses biologiques et imagerie</strong> (radio, scanner, IRM)</li>
      <li><strong>Rapatriement sanitaire</strong> — organisation et financement du retour en France sous assistance médicale, si votre état l'exige</li>
      <li><strong>Maladies tropicales</strong> — dengue, paludisme, typhoïde : couvertes comme n'importe quelle maladie</li>
      <li><strong>Accidents</strong> — blessures suite à une chute, accident de moto, accident sportif (selon conditions)</li>
      <li><strong>Soins dentaires d'urgence</strong> — pour Globe Traveller, jusqu'à 300 €</li>
    </ul>

    <div class="tip-box">
      <strong>✅ Remboursement des petits frais (&lt; 500 €) :</strong> Vous réglez, vous scannez les justificatifs (facture, ordonnance, passeport), et vous soumettez le dossier via la plateforme en ligne sécurisée d'ACS. Remboursement rapide. Pour les frais supérieurs à 500 € ou les hospitalisations, ACS prend en charge directement — appelez l'assistance 24h/24 en premier.
    </div>

    <h2 id="section-6">Exclusions à connaître avant de souscrire</h2>

    <p>Comme toute assurance, ACS comporte des exclusions. Les principales à connaître avant un séjour au Vietnam :</p>

    <ul>
      <li><strong>Pathologies préexistantes</strong> — les maladies chroniques déjà diagnostiquées avant la souscription sont généralement exclues (diabète, maladies cardiaques, cancer). Vérifiez les conditions générales si vous avez un suivi médical.</li>
      <li><strong>Sports à risques (sans option)</strong> — moto hors route, plongée avec bouteille, escalade, saut à l'élastique. Sur Globe Traveller, l'option sports supprime ces exclusions. Sur Globe Partner, ces activités restent exclues par défaut.</li>
      <li><strong>Alcool et drogues</strong> — tout accident survenu sous l'influence est exclu.</li>
      <li><strong>Actes intentionnels</strong></li>
      <li><strong>Pays en guerre ou sous embargo</strong> — vérifiez la liste des pays exclus si vous combinez le Vietnam avec d'autres destinations</li>
    </ul>

    <div class="warning-box">
      <strong>⚠️ Moto au Vietnam :</strong> Conduire une moto au Vietnam sans permis moto international valide peut invalider votre assurance en cas d'accident — chez ACS comme chez d'autres assureurs. Assurez-vous d'avoir un permis adapté ou vérifiez les conditions générales avant de louer une moto.
    </div>

    <h2 id="section-7">Comment souscrire en quelques minutes</h2>

    <ol>
      <li><strong>Choisissez votre formule</strong> selon votre âge et vos besoins : <a href="https://www.acs-ami.com/fr/assurance-voyage/globe-partner/?part=blogcapvietnam&utm_source=blog-capvietnam&utm_medium=aff-link" target="_blank" rel="noopener sponsored">Globe Partner (moins de 40 ans)</a> ou <a href="https://www.acs-ami.com/fr/assurance-voyage/globe-traveller/?part=blogcapvietnam&utm_source=blog-capvietnam&utm_medium=aff-link" target="_blank" rel="noopener sponsored">Globe Traveller (moins de 66 ans)</a></li>
      <li><strong>Renseignez votre destination et vos dates</strong> — le devis est immédiat</li>
      <li><strong>Ajoutez les options</strong> si nécessaire (sports à risques, annulation, matériel)</li>
      <li><strong>Payez en ligne</strong> par carte bancaire</li>
      <li><strong>Recevez votre certificat d'assurance par email</strong> — immédiatement, imprimez-le ou sauvegardez-le sur votre téléphone</li>
    </ol>

    <div class="info-box">
      <strong>Quand souscrire ?</strong> Idéalement avant le départ, pour être couvert dès le premier jour. La souscription après le départ est possible mais entraîne un délai de carence de 8 jours — pendant lesquels vous n'êtes pas couvert.
    </div>

    <div class="info-box">
      <strong>Et pour un séjour de plus d'un an ?</strong> → Si vous prévoyez de rester plus d'un an au Vietnam, une assurance voyage ne suffit plus — il vous faut une mutuelle expatriée. Lire : <a href="assurance-sante-vietnam-expat">Assurance santé pour expatriés au Vietnam — comparatif complet 2026</a>.
    </div>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;"><img src="assets/img/profile/anthony-profil.jpg" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;"></div>
      <div class="author-info">
        <h4>Anthony Bouillon</h4>
        <p>Français installé à Hanoï. Partenaire ACS — les liens dans cet article sont affiliés et me permettent de maintenir le blog gratuitement. Ils ne changent pas le tarif pour vous.</p>
        <div class="author-links"><a href="a-propos-capvietnam">À propos →</a></div>
      </div>
    </div>

    <div class="cta-newsletter">
      <h3>Reçois les prochains guides</h3>
      <p>📥 <strong>Guide PDF + 3 modèles de lettres offerts</strong> dès l'inscription. Un email par mois, désinscription en 1 clic.</p>
      <form class="cta-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
        <input type="email" name="email" placeholder="ton@email.com" required>
        <button type="submit">S'inscrire</button>
      </form>
      <p class="cta-rgpd">Pas de spam. Désinscription en un clic.</p>
    </div>
  </main>
</div>

<?php include '_article-comments.php'; ?>

<?php
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
