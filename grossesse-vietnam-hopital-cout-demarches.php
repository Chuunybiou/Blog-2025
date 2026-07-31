<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Grossesse au Vietnam : choisir son hôpital, coûts réels et démarches en 2026';
$page_description = 'Vinmec, FV Hospital, Hôpital Français de Hanoï : guide complet pour une grossesse au Vietnam en 2026. Tarifs réels des maternités, comparatif public/privé, démarches et assurance santé.';
$page_canonical   = SITE_URL . '/grossesse-vietnam-hopital-cout-demarches';
$page_og_title    = 'Grossesse au Vietnam 2026 : quel hôpital choisir et combien ça coûte ?';
$page_og_desc     = 'HFH Hanoi, Vinmec, FV Hospital HCMV : tarifs vérifiés des maternités privées, hôpitaux publics, assurance et démarches pratiques pour une grossesse au Vietnam.';
$page_og_url      = SITE_URL . '/grossesse-vietnam-hopital-cout-demarches';
$page_og_image    = 'https://images.unsplash.com/photo-1476703993599-0035a21b17a9?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'Grossesse au Vietnam : choisir son hôpital, coûts réels et démarches en 2026',
  'datePublished'   => '2026-07-06',
  'dateModified'    => '2026-07-06',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/grossesse-vietnam-hopital-cout-demarches',
  'image'           => 'https://images.unsplash.com/photo-1476703993599-0035a21b17a9?w=1200&q=80',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Vivre ensemble',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color    = 'jade';
$article_hero_bg  = '#1a3a2a';
$article_glow     = 'rgba(27,107,82,0.15)';
$article_badge    = 'rgba(191,74,42,0.25)';
$article_badge_c  = '#e8856a';

$article_category     = 'Vivre Ensemble';
$article_category_url = SITE_URL . '/articles-capvietnam?cat=vivre-ensemble';

$page_faq = [
  ['q' => 'Peut-on accoucher dans un hôpital public au Vietnam en tant que Française ?',
   'a' => 'Oui, les hôpitaux publics acceptent les étrangères. Les tarifs sont nettement moins élevés (6,5 à 18 millions VND pour un accouchement naturel), mais le personnel médical parle rarement français ou anglais et les conditions d\'hébergement sont plus basiques. Pour une expat sans couverture locale, le privé reste plus adapté pour le suivi et la communication.'],
  ['q' => 'L\'assurance maladie française (Sécu) rembourse-t-elle un accouchement au Vietnam ?',
   'a' => 'Partiellement et sous conditions. La Caisse des Français de l\'Étranger (CFE) peut couvrir les frais médicaux à l\'étranger si tu es affiliée. Une assurance internationale complémentaire (AXA, Cigna, Allianz) est fortement recommandée pour les hôpitaux privés au Vietnam, surtout pour les soins VIP ou une éventuelle césarienne d\'urgence.'],
  ['q' => 'À quel moment s\'inscrire à la maternité ?',
   'a' => 'Dès la confirmation de la grossesse, idéalement dès la semaine 8-12. Les hôpitaux privés comme HFH et FV Hospital proposent des packages de suivi prénatal à partir de la 12e semaine qui offrent le meilleur rapport suivi/prix. Plus tu attends, plus le prix du package augmente et moins de consultations prénatales sont incluses.'],
  ['q' => 'Vinmec parle-t-il français ?',
   'a' => 'Vinmec dispose de personnel médical anglophone dans tous ses établissements. Le français n\'est pas systématiquement proposé mais peut être disponible selon les praticiens. L\'Hôpital Français de Hanoï (HFH) est l\'établissement le mieux adapté pour un suivi entièrement en français à Hanoi.'],
  ['q' => 'Le père peut-il assister à l\'accouchement au Vietnam ?',
   'a' => 'Dans les hôpitaux privés internationaux, généralement oui — la présence du père en salle d\'accouchement fait partie du service, à confirmer avec l\'établissement au moment de l\'inscription. Dans les hôpitaux publics, c\'est beaucoup plus rare : le volume de patientes et l\'organisation des salles font que les pères attendent le plus souvent dehors. Si ce point compte pour vous, pose la question explicitement lors du choix de la maternité — les pratiques varient d\'un établissement à l\'autre.'],
  ['q' => 'Les césariennes sont-elles plus fréquentes au Vietnam qu\'en France ?',
   'a' => 'Dans les grandes villes et le secteur privé, le taux de césarienne vietnamien est élevé — une tendance documentée dans toute l\'Asie urbaine. Si tu tiens à privilégier un accouchement par voie basse, dis-le clairement dès les consultations prénatales, choisis un obstétricien aligné avec ce projet, et fais-le noter au dossier. Une césarienne médicalement justifiée reste évidemment la bonne décision quand elle s\'impose — l\'enjeu est qu\'elle soit une décision médicale, pas une facilité d\'agenda.'],
];

include '_article-css.php';
include 'header.php';
?>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero" style="background:<?= $article_hero_bg ?>;">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Articles</a><span class="breadcrumb-sep">›</span>
      <span>Grossesse au Vietnam</span>
    </div>
    <span class="article-badge-hero" style="background:<?= $article_badge ?>;color:<?= $article_badge_c ?>">Famille</span>
    <h1>Grossesse au Vietnam : quel hôpital choisir, combien ça coûte et quelles démarches ?</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juillet 2026</span>
      <span>⏱ 12 min de lecture</span>
    </div>
    <p style="color:rgba(250,248,244,0.78);font-size:1.05rem;line-height:1.7;margin-top:1.25rem;">
      Une grossesse au Vietnam en 2026, c'est un niveau médical très correct dans les grandes villes, avec des hôpitaux privés internationaux qui rivalisent avec les standards européens — et un coût bien inférieur. Ce guide compile les tarifs officiels des principales maternités et les démarches concrètes à anticiper.
    </p>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Public ou privé : quelle différence ?</a></li>
      <li><a href="#section-hanoi">À Hanoï : les options</a></li>
      <li><a href="#section-hcmv">À Hô Chi Minh-Ville : les options</a></li>
      <li><a href="#section-cout">Comparatif des coûts</a></li>
      <li><a href="#section-demarches">Démarches pratiques</a></li>
      <li><a href="#section-assurance">Assurance et remboursements</a></li>
      <li><a href="#section-culture">La grossesse à la vietnamienne</a></li>
      <li><a href="#section-choix">Accoucher au Vietnam ou en France ?</a></li>
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
    <p><strong>Une Française enceinte au Vietnam, une Vietnamienne enceinte en couple avec un Français — les deux situations posent les mêmes questions pratiques.</strong> Quel hôpital choisir ? Est-ce que c'est cher ? Mon assurance couvre ? Et côté paperasse, qu'est-ce qu'il faut prévoir pour l'enfant à naître ? Ce guide répond aux questions médicales et administratives, mais aussi à celles qu'on n'ose pas poser : le rôle de la belle-famille, les traditions autour de la naissance, et le dilemme « accoucher ici ou rentrer en France ».</p>

    <div class="warning-box">
      Cet article est basé sur des informations publiques vérifiées auprès des sites officiels des hôpitaux (juillet 2026). Les tarifs hospitaliers évoluent régulièrement — demande systématiquement un devis à jour directement à l'établissement avant de t'engager.
    </div>

    <img class="article-photo" src="https://images.unsplash.com/photo-1476703993599-0035a21b17a9?w=1200&q=80" alt="Bébé famille grossesse Vietnam" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Hôpital public ou privé : quelle différence concrète ?</h2>
    <p>Au Vietnam, la médecine fonctionne sur deux vitesses :</p>

    <table>
      <thead>
        <tr>
          <th></th>
          <th>Public</th>
          <th>Privé international</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Tarif accouchement naturel</strong></td>
          <td>6,5 à 18 millions VND</td>
          <td>20 à 70 millions VND</td>
        </tr>
        <tr>
          <td><strong>Langue</strong></td>
          <td>Vietnamien uniquement</td>
          <td>Anglais, français selon l'établissement</td>
        </tr>
        <tr>
          <td><strong>Conditions d'hébergement</strong></td>
          <td>Chambre partagée (4 à 6 lits)</td>
          <td>Chambre individuelle ou double</td>
        </tr>
        <tr>
          <td><strong>Suivi prénatal intégré</strong></td>
          <td>Consultations séparées à payer</td>
          <td>Packages tout compris disponibles</td>
        </tr>
        <tr>
          <td><strong>Personnel francophone/anglophone</strong></td>
          <td>Rare</td>
          <td>Oui (selon établissement)</td>
        </tr>
      </tbody>
    </table>

    <p>Pour une Vietnamienne avec assurance nationale (BHYT), l'hôpital public est souvent le choix principal avec une prise en charge partielle. Pour une Française ou un couple mixte souhaitant un suivi francophone, les hôpitaux privés sont mieux adaptés.</p>
    <p>Précision importante pour ne pas caricaturer : « public » ne veut pas dire « mauvaise médecine » — les grands hôpitaux obstétriques publics vietnamiens traitent des volumes énormes et voient passer tous les cas complexes du pays ; leur expertise médicale pure est réelle. Ce qui diffère, c'est l'expérience : la langue, l'intimité, le confort, l'accompagnement. Beaucoup de couples mixtes font d'ailleurs un choix hybride — suivi de grossesse en privé pour le confort et la communication, avec la certitude qu'en cas de complication rare, le transfert vers l'expertise publique de pointe existe.</p>

    <h2 id="section-hanoi">À Hanoï : les principales options</h2>

    <h3>Hôpital Français de Hanoï (HFH)</h3>
    <p>L'HFH est l'hôpital le plus adapté pour un suivi en français à Hanoï. Il propose un service de maternité complet avec <strong>packages de suivi prénatal + accouchement</strong>. Le prix varie selon la semaine d'inscription.</p>
    <p>Source : <a href="https://www.hfh.com.vn/en/maternity-package/" target="_blank" rel="noopener">hfh.com.vn — Maternity Package</a></p>

    <table>
      <thead>
        <tr>
          <th>Type d'accouchement</th>
          <th>Inscription à 12 sem.</th>
          <th>Inscription à 32 sem.</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Accouchement naturel (grossesse simple)</td>
          <td>52 800 000 VND</td>
          <td>39 800 000 VND</td>
        </tr>
        <tr>
          <td>Césarienne (grossesse simple)</td>
          <td>68 800 000 VND</td>
          <td>58 800 000 VND</td>
        </tr>
        <tr>
          <td>Accouchement naturel (jumeaux)</td>
          <td>62 800 000 VND</td>
          <td>46 500 000 VND</td>
        </tr>
        <tr>
          <td>Césarienne (jumeaux)</td>
          <td>78 200 000 VND</td>
          <td>64 600 000 VND</td>
        </tr>
      </tbody>
    </table>

    <p><strong>Ce qui est inclus dans le package HFH :</strong> consultations obstétricales répétées, échographies 2D/4D, vaccinations, bilan sanguin, anesthésie péridurale/rachidienne, salle d'accouchement, 1 nuit en chambre double (naturel) ou 4 nuits (césarienne), repas, soins pédiatriques néonataux, test auditif.</p>

    <div class="tip-box">
      <strong>Inscris-toi tôt à HFH</strong>
      La différence entre une inscription à 12 semaines et une à 32 semaines peut représenter 9 à 13 millions VND d'économie — et plus de consultations prénatales incluses. Appelle directement l'HFH dès la confirmation de grossesse.
    </div>

    <h3>Vinmec International Hospital (Hanoï)</h3>
    <p>Vinmec dispose de deux établissements à Hanoï : Vinmec Times City et Vinmec Imperia. Les packages maternité couvrent le suivi prénatal et l'accouchement, avec inscription possible à partir de la semaine 12. Personnel anglophone.</p>
    <p><strong>Les tarifs Vinmec ne sont pas affichés publiquement en ligne</strong> — ils sont disponibles sur demande directe. Contacter Vinmec : <a href="https://www.vinmec.com/eng/service-packages/maternity-care-package" target="_blank" rel="noopener">vinmec.com</a></p>

    <h3>Hôpitaux publics à Hanoï</h3>
    <p>Le <strong>Hôpital National de Gynéco-Obstétrique</strong> (Bệnh viện Phụ Sản Trung Ương) est la référence publique pour les grossesses à risque. Très compétent médicalement, mais consultations en vietnamien et conditions d'hébergement basiques. Adapté pour les Vietnamiennes avec BHYT. L'hôpital Phụ Sản Hà Nội (municipal) est l'autre grande maternité publique de la ville, avec des services « à la demande » (dịch vụ) intermédiaires entre le public classique et le privé — une option que connaissent bien les familles vietnamiennes de la capitale.</p>

    <h2 id="section-hcmv">À Hô Chi Minh-Ville : les principales options</h2>

    <h3>FV Hospital (Franco-Vietnamien)</h3>
    <p>FV Hospital est l'un des hôpitaux privés les plus appréciés des expats à HCMV, avec médecins francophones. <strong>Depuis janvier 2026, FV accepte l'assurance nationale vietnamienne (BHYT)</strong> pour les hospitalisations, consultations et urgences — ce qui peut réduire significativement la note.</p>
    <p>Source : <a href="https://www.fvhospital.com" target="_blank" rel="noopener">fvhospital.com</a></p>

    <table>
      <thead>
        <tr>
          <th>Type</th>
          <th>Fourchette de prix</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Accouchement vaginal (grossesse simple)</td>
          <td>19 500 000 à 41 847 000 VND</td>
        </tr>
        <tr>
          <td>Césarienne (grossesse simple)</td>
          <td>26 000 000 à 55 796 000 VND</td>
        </tr>
        <tr>
          <td>Césarienne d'urgence</td>
          <td>31 000 000 à 61 796 000 VND</td>
        </tr>
        <tr>
          <td>Suivi prénatal complet</td>
          <td>16 000 000 à 27 000 000 VND</td>
        </tr>
      </tbody>
    </table>

    <h3>Vinmec International Hospital (HCMV)</h3>
    <p>Présent à Grand Park et Tân Phú. Même concept que Hanoï — packages sur demande, personnel anglophone. Contacter directement pour les prix 2026. À HCMV, l'hôpital Hạnh Phúc (spécialisé mère-enfant, standards internationaux) fait aussi partie des établissements régulièrement cités par les couples expatriés — à comparer sur devis.</p>

    <h3>Hôpital Từ Dũ (public, HCMV)</h3>
    <p>L'hôpital public de référence en obstétrique à HCMV. Très grand volume (l'un des plus fréquentés d'Asie du Sud-Est), excellent niveau médical pour les grossesses complexes. Recommandé pour les Vietnamiennes avec BHYT. Consultations en vietnamien.</p>

    <h2 id="section-cout">Récapitulatif des fourchettes de coûts (2026)</h2>
    <p>Ces chiffres sont des fourchettes indicatives. Sources : sites officiels des hôpitaux et <a href="https://alea.care/resources/maternity-vietnam" target="_blank" rel="noopener">alea.care</a>.</p>

    <table>
      <thead>
        <tr>
          <th>Type d'établissement</th>
          <th>Accouchement naturel</th>
          <th>Césarienne</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Hôpital public</td>
          <td>6,5 à 18 millions VND</td>
          <td>12 à 30 millions VND</td>
        </tr>
        <tr>
          <td>Hôpital privé (standard)</td>
          <td>16 à 60 millions VND</td>
          <td>23 à 80 millions VND</td>
        </tr>
        <tr>
          <td>Suite VIP / premium</td>
          <td>80 à 200 millions VND</td>
          <td>120 à 350 millions VND</td>
        </tr>
      </tbody>
    </table>

    <h2 id="section-demarches">Démarches pratiques à anticiper</h2>

    <h3>Pendant la grossesse</h3>
    <ul>
      <li><strong>S'inscrire tôt à la maternité</strong> : dès la semaine 8-12 pour bénéficier des packages complets et avoir le meilleur prix</li>
      <li><strong>Vérifier la couverture de son assurance</strong> : demander par écrit ce qui est pris en charge et les plafonds de remboursement avant de choisir l'établissement</li>
      <li><strong>Carnet de suivi</strong> : les hôpitaux privés tiennent leur propre dossier, mais garde une copie de toutes tes ordonnances et résultats d'examens — indispensable si tu changes d'établissement ou si l'accouchement se passe ailleurs que prévu</li>
      <li><strong>Visiter la maternité avant le jour J</strong> : la plupart des hôpitaux privés organisent des visites des salles d'accouchement et des chambres — profites-en pour poser les questions qui fâchent (présence du père, projet de naissance, politique de péridurale, langue de l'équipe de garde la nuit)</li>
      <li><strong>Déclaration à l'ambassade</strong> : si tu es Française expatriée, l'ambassade de France peut te mettre en contact avec des services de soutien aux Françaises à l'étranger</li>
    </ul>

    <h3>À la naissance</h3>
    <ul>
      <li><strong>Acte de naissance vietnamien</strong> : délivré par le comité populaire dans les jours suivant la naissance, sur présentation du certificat de l'hôpital</li>
      <li><strong>Déclaration de naissance côté français</strong> : à faire à l'ambassade de France dans les <strong>30 jours calendaires</strong> — voir notre article <a href="enfant-couple-franco-vietnamien-nationalite">Nationalité d'un enfant franco-vietnamien</a></li>
      <li><strong>Passeport français</strong> : demandable dès l'enregistrement consulaire</li>
    </ul>
    <p>Un conseil d'organisation pour cette période où vous aurez autre chose en tête qu'un dossier administratif : préparez la pochette « naissance » <em>avant</em> le terme. Copies des passeports des deux parents, acte de mariage (et sa transcription), formulaires consulaires pré-remplis, et le point sur le choix du ou des prénoms — y compris, si vous le souhaitez, un prénom vietnamien en second prénom, décision qui se discute mieux à tête reposée qu'au guichet. Le délai de 30 jours pour la déclaration française passe très vite avec un nouveau-né à la maison.</p>

    <h2 id="section-assurance">Assurance santé et remboursements</h2>
    <p>La maternité dans un hôpital privé international au Vietnam est rarement remboursée intégralement sans assurance complémentaire — et c'est le poste où une bonne anticipation rapporte le plus, car les délais de carence maternité se comptent en mois et se prennent <em>avant</em> la grossesse. Les principales options :</p>
    <ul>
      <li><strong>CFE (Caisse des Français de l'Étranger)</strong> : couvre les soins médicaux à l'étranger pour les Français expatriés. La couverture maternité dépend de l'option choisie — vérifier le détail du contrat.</li>
      <li><strong>Assurance internationale (AXA, Cigna, Allianz…)</strong> : indispensable pour une couverture des soins dans les hôpitaux privés à hauteur de 80-100%. Les plafonds maternité varient beaucoup selon les contrats.</li>
      <li><strong>BHYT (assurance santé nationale vietnamienne)</strong> : pour les résidents vietnamiens et les étrangers qui y ont accès. Depuis janvier 2026, FV Hospital à HCMV l'accepte. Remboursement partiel dans les hôpitaux publics.</li>
      <li><strong>L'assurance privée locale vietnamienne</strong> : les avenants maternité existent chez les assureurs locaux, avec des délais de carence stricts — le fonctionnement général est expliqué dans notre article sur <a href="assurance-sante-privee-manulife-vietnam">l'assurance santé privée au Vietnam</a>.</li>
    </ul>

    <div class="tip-box">
      <strong>Vérifier l'assurance avant la grossesse</strong>
      Beaucoup d'assureurs excluent la maternité si la grossesse a débuté avant la souscription. Si tu prévois une grossesse, souscris une assurance incluant la maternité avant d'être enceinte — les délais de carence peuvent aller de 6 à 12 mois.
    </div>

    <h2 id="section-culture">La grossesse à la vietnamienne : ce qui va surprendre le parent français</h2>
    <p>Dans un couple mixte, la grossesse est le moment où les deux cultures se rencontrent le plus frontalement — et mieux vaut le savoir avant que pendant.</p>
    <ul>
      <li><strong>La belle-famille s'implique. Beaucoup.</strong> Au Vietnam, une grossesse est une affaire familiale, pas un projet de couple. Conseils alimentaires, interdits traditionnels, avis sur le prénom, la belle-mère qui s'installe pour aider : tout cela relève de la sollicitude normale, pas de l'intrusion. Le parent français qui le vit comme une invasion passe à côté du soutien logistique le plus précieux du pays.</li>
      <li><strong>Le « ở cữ », le mois de repos postnatal.</strong> La tradition vietnamienne prescrit à la jeune mère un mois de confinement après la naissance : repos strict, plats spécifiques, restrictions (sortir, se laver les cheveux, l'eau froide…) dont l'application varie énormément selon les familles et les générations. Beaucoup de couples mixtes négocient une version moderne — le repos et les petits plats, sans les interdits les plus datés. L'important est d'en parler <em>avant</em> la naissance, pas de le découvrir en direct face à une grand-mère déterminée.</li>
      <li><strong>Les traditions autour du nouveau-né</strong> : la fête du premier mois (đầy tháng), les précautions contre les compliments trop directs au bébé, les bracelets protecteurs… Rien d'obligatoire, mais tout a du sens pour la moitié vietnamienne de la famille. Le sujet rejoint ce qu'on décrit dans <a href="belle-famille-vietnamienne-guide">le guide de la belle-famille vietnamienne</a>.</li>
      <li><strong>Côté droit du travail</strong> : si la maman travaille au Vietnam sous contrat local, le congé maternité vietnamien est de <strong>6 mois</strong> — plus généreux que le congé français de base. Un vrai paramètre dans l'organisation du couple.</li>
    </ul>

    <h2 id="section-choix">Accoucher au Vietnam ou rentrer en France ?</h2>
    <p>La question se pose dans presque tous les couples mixtes installés au Vietnam. Il n'y a pas de bonne réponse universelle, mais des critères objectifs :</p>
    <ul>
      <li><strong>Pour le Vietnam</strong> : la vie est là (conjoint, travail, logement), le soutien familial vietnamien est sur place, les hôpitaux internationaux des grandes villes offrent un niveau tout à fait solide pour une grossesse normale, et le coût — même en privé haut de gamme — reste inférieur à une grossesse non couverte en France.</li>
      <li><strong>Pour la France</strong> : la prise en charge Sécurité sociale à 100 % au-delà du 6e mois, la famille française, la langue dans un moment où chaque nuance compte, et l'accès immédiat aux plateaux techniques les plus complets en cas de grossesse à risque.</li>
      <li><strong>Le facteur que tout le monde oublie</strong> : l'avion. Les compagnies aériennes restreignent le vol en fin de grossesse (certificat médical exigé puis refus d'embarquement au-delà d'un certain terme, variable selon les compagnies). Un « retour en France pour accoucher » se décide au deuxième trimestre, pas au huitième mois.</li>
      <li><strong>Le facteur administratif</strong> : dans les deux cas, l'enfant sera français ET pourra être vietnamien — mais le circuit des papiers change (déclaration au comité populaire + transcription à l'ambassade côté Vietnam ; état civil français direct côté France, puis démarches vietnamiennes au consulat). Aucun des deux choix ne ferme de porte à la double nationalité.</li>
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
$current_slug = 'grossesse-vietnam-hopital-cout-demarches';
$current_cat  = 'vivre-ensemble';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
