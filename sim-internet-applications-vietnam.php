<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'SIM, internet et applications au Vietnam : guide pratique 2026';
$page_description = 'Quelle SIM prendre au Vietnam ? Quel opérateur choisir ? Quelles applications sont indispensables ? Internet en 4G/5G, eSIM, applications locales : le guide pratique pour expatriés.';
$page_canonical   = SITE_URL . '/sim-internet-applications-vietnam';
$page_og_title    = 'SIM, internet et applications au Vietnam : tout ce qu\'il faut savoir';
$page_og_desc     = 'Viettel, Mobifone, Vietnamobile, eSIM : quelle SIM choisir au Vietnam ? Quelles apps installer ? Le guide 2026 pour rester connecté.';
$page_og_url      = SITE_URL . '/sim-internet-applications-vietnam';
$page_og_image    = 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=1200&q=80';
$page_schema      = json_encode([
  '@context'        => 'https://schema.org',
  '@type'           => 'Article',
  'headline'        => 'SIM, internet et applications au Vietnam : guide pratique 2026',
  'datePublished'   => '2026-06-01',
  'dateModified'    => '2026-06-25',
  'author'          => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
  'publisher'       => ['@type' => 'Organization', 'name' => SITE_NAME, 'url' => SITE_URL],
  'mainEntityOfPage'=> SITE_URL . '/sim-internet-applications-vietnam',
  'inLanguage'      => 'fr',
  'articleSection'  => 'Voyager au Vietnam',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_color        = 'amber';
$article_hero_bg      = '#3a2a0e';
$article_glow         = 'rgba(211,154,42,0.15)';
$article_badge        = 'rgba(191,74,42,0.25)';
$article_badge_c      = '#e8856a';

$article_category     = 'Voyager au Vietnam';
$article_category_url = SITE_URL . '/articles-capvietnam';
$page_faq = [
  ['q' => 'Peut-on acheter une SIM vietnamienne à l\'aéroport ?',
   'a' => 'Oui, les trois grands opérateurs (Viettel, Mobifone, Vietnamobile) ont des comptoirs à l\'aéroport de Hanoï (Nội Bài) et à Tân Sơn Nhất (HCMV). C\'est pratique mais parfois un peu plus cher qu\'en ville. Apporte ton passeport — il est obligatoire pour l\'achat d\'une SIM au Vietnam.'],
  ['q' => 'Est-ce qu\'une eSIM fonctionne bien au Vietnam ?',
   'a' => 'Oui, les eSIM fonctionnent bien en 4G dans les grandes villes et sur les axes touristiques. Pour un court séjour, c\'est très pratique (achat depuis la France avant le départ). Pour une installation longue durée, une SIM locale reste souvent plus économique.'],
  ['q' => 'Zalo ou WhatsApp pour communiquer avec les Vietnamiens ?',
   'a' => 'Zalo. C\'est l\'application de messagerie dominante au Vietnam — quasiment tous les Vietnamiens l\'utilisent pour le quotidien. WhatsApp existe mais est beaucoup moins répandu. Télécharge Zalo dès ton arrivée si tu veux communiquer facilement avec ta belle-famille ou tes voisins.'],
  ['q' => 'Est-ce que les VPN sont légaux au Vietnam ?',
   'a' => 'L\'utilisation personnelle d\'un VPN n\'est pas explicitement interdite au Vietnam. En pratique, les expatriés et locaux utilisent des VPN sans problème pour accéder au streaming français ou contourner certaines restrictions géographiques. La loi sur la cybersécurité de 2018 impose des obligations aux fournisseurs de services, pas aux utilisateurs individuels. La situation peut évoluer — reste informé.'],
];
include '_article-css.php';
include 'header.php';
?>

<style>
.sim-table {
  width: 100%;
  border-collapse: collapse;
  margin: 1.5rem 0;
  font-size: .9rem;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0,0,0,.07);
}
.sim-table thead tr {
  background: #2d2012;
  color: #faf8f4;
}
.sim-table th {
  padding: .75rem 1rem;
  text-align: left;
  font-size: .78rem;
  text-transform: uppercase;
  letter-spacing: .06em;
  font-weight: 700;
}
.sim-table td {
  padding: .7rem 1rem;
  border-bottom: 1px solid #f0ebe3;
  vertical-align: top;
  color: #3a2a0e;
}
.sim-table tbody tr:last-child td { border-bottom: none; }
.sim-table tbody tr:nth-child(even) td { background: #faf7f2; }
.sim-table tbody tr:hover td { background: #f5eedf; }
.sim-table .table-section-header td {
  background: #ede7d8;
  color: #6b4c1e;
  font-size: .78rem;
  font-weight: 700;
  letter-spacing: .04em;
  text-transform: uppercase;
  padding: .45rem 1rem;
  border-bottom: 1px solid #d8cebc;
}
.sim-table .table-section-header:hover td { background: #ede7d8; }
.sim-table .badge-pop {
  display: inline-block;
  background: #d39a2a;
  color: #fff;
  font-size: .68rem;
  font-weight: 700;
  padding: .1rem .45rem;
  border-radius: 20px;
  vertical-align: middle;
  margin-left: .4rem;
}
.sim-table .price-cell {
  font-weight: 700;
  color: #bf4a2a;
  white-space: nowrap;
}
.operator-block {
  margin-bottom: 2rem;
}
.operator-header {
  display: flex;
  align-items: center;
  gap: .65rem;
  margin-bottom: .75rem;
}
.operator-logo {
  width: 32px;
  height: 32px;
  border-radius: 6px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1rem;
  font-weight: 900;
  color: #fff;
  flex-shrink: 0;
}
.logo-viettel  { background: #e10000; }
.logo-mobi     { background: #006bb7; }
.logo-viet     { background: #f90; }
.operator-name { font-size: 1rem; font-weight: 700; color: #2d2012; }
.operator-sub  { font-size: .8rem; color: #7a6040; }

.app-table {
  width: 100%;
  border-collapse: collapse;
  margin: 1.25rem 0;
  font-size: .9rem;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0,0,0,.07);
}
.app-table thead tr { background: #1a2e1a; color: #faf8f4; }
.app-table th {
  padding: .7rem 1rem;
  text-align: left;
  font-size: .78rem;
  text-transform: uppercase;
  letter-spacing: .06em;
  font-weight: 700;
}
.app-table td {
  padding: .7rem 1rem;
  border-bottom: 1px solid #eef3ee;
  color: #1a2e1a;
  vertical-align: top;
}
.app-table tbody tr:last-child td { border-bottom: none; }
.app-table tbody tr:nth-child(even) td { background: #f5fbf5; }
.app-table tbody tr:hover td { background: #eaf4ea; }
.app-table .app-name { font-weight: 700; }
.app-essential {
  display: inline-block;
  background: #2d6a2d;
  color: #fff;
  font-size: .65rem;
  font-weight: 700;
  padding: .1rem .4rem;
  border-radius: 20px;
  margin-left: .35rem;
  vertical-align: middle;
}
</style>

<div class="progress-bar" id="progressBar"></div>

<header class="article-hero">
  <div class="article-hero-inner">
    <div class="breadcrumb">
      <a href="/">Accueil</a><span class="breadcrumb-sep">›</span>
      <a href="articles-capvietnam">Voyager au Vietnam</a><span class="breadcrumb-sep">›</span>
      <span>SIM et applications</span>
    </div>
    <span class="article-badge-hero">Voyager au Vietnam</span>
    <h1>SIM, internet et applications au Vietnam : guide pratique 2026</h1>
    <div class="article-hero-meta">
      <span>Par <a href="a-propos-capvietnam" style="color:inherit;text-decoration:none"><strong>Anthony Bouillon</strong></a></span>
      <span>📅 Juin 2026</span>
      <span>⏱ 8 min de lecture</span>
      <span>Mis &agrave; jour : Juin 2026</span>
    </div>
  </div>
</header>

<div class="article-layout">
  <aside class="toc">
    <div class="toc-label">Sommaire</div>
    <ol class="toc-list">
      <li><a href="#section-1">Opérateurs et qualité du réseau</a></li>
      <li><a href="#section-2">SIM locale ou eSIM ?</a></li>
      <li><a href="#section-3">Comparatif des forfaits</a></li>
      <li><a href="#section-4">Internet fixe et WiFi</a></li>
      <li><a href="#section-5">Applications indispensables</a></li>
      <li><a href="#section-6">VPN et accès aux contenus</a></li>
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
    <p><strong>Dès que tu poses le pied au Vietnam, la première question pratique c'est souvent : comment rester connecté ?</strong> La bonne nouvelle : le Vietnam a une couverture 4G/5G solide dans les villes et les zones touristiques, les forfaits sont parmi les moins chers d'Asie, et les applications locales facilitent vraiment le quotidien. Ce guide te donne tout ce qu'il faut savoir pour choisir ta SIM et t'équiper dès le premier jour.</p>

    <img class="article-photo" src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=1200&q=80" alt="Smartphone SIM Vietnam internet" width="1200" height="675" loading="lazy">

    <h2 id="section-1">Les opérateurs vietnamiens et la qualité du réseau</h2>
    <p>Trois opérateurs dominent le marché mobile vietnamien :</p>
    <ul>
      <li><strong>Viettel</strong> : le leader incontesté avec la meilleure couverture nationale, y compris en zone rurale et dans les îles. Bon choix pour les voyages hors des grandes villes.</li>
      <li><strong>Mobifone</strong> : deuxième opérateur, excellent dans les grandes villes et les zones touristiques. Interface plus conviviale et bon rapport qualité/prix en ville.</li>
      <li><strong>Vietnamobile</strong> : moins cher, réseau plus limité en zone rurale. Correct si tu restes dans les grandes villes.</li>
    </ul>

    <div class="tip-box">
      <strong>La 5G déjà bien déployée :</strong> En février 2026, le Vietnam comptait près de <strong>40 000 stations de base 5G</strong> couvrant environ 90 % de la population et 23 millions d'abonnés (source : VNTA). Viettel est le leader avec plus de 30 000 stations et une couverture extérieure de 90 % sur tout le territoire — c'est le seul opérateur avec un réseau 5G autonome (5G SA) complet. VNPT couvre 50 à 60 % de la population, Mobifone se concentre sur les zones urbaines et industrielles.
    </div>

    <p>En zone rurale ou dans les îles éloignées, seule la 4G voire la 3G peut être disponible. Pour les grandes villes (Hanoï, Hô Chi Minh-Ville, Đà Nẵng, Huế), le réseau est globalement excellent.</p>

    <h2 id="section-2">SIM locale ou eSIM ?</h2>
    <p>Deux options pour rester connecté dès l'arrivée :</p>
    <ul>
      <li><strong>SIM locale physique</strong> : à acheter à l'aéroport ou dans n'importe quelle boutique de l'opérateur en ville. Nécessite ton passeport. Idéal pour un séjour long ou une installation durable. La SIM elle-même est souvent gratuite ou quelques dizaines de milliers de VND, et tu choisis directement ton forfait.</li>
      <li><strong>eSIM</strong> : configurable depuis la France avant le départ (via Airalo, Holafly, ou directement chez Viettel pour les appareils compatibles). Pratique pour les premières semaines. Souvent plus cher qu'une SIM locale, mais tu arrives connecté sans chercher un point de vente.</li>
    </ul>

    <div class="tip-box">
      <strong>Option annuelle économique :</strong> Si tu t'installes au Vietnam et que tu as le WiFi chez toi, une formule de base avec <strong>2h d'appels (non illimités) + SMS illimités pour 2 500 000 VND à l'année</strong> (≈ 90€/an, soit 208 000 VND/mois) est une option très économique. Les data sont ensuite à recharger à la carte selon les besoins en déplacement.
    </div>

    <div style="background:#f5eedf;border-left:4px solid #d39a2a;padding:1.25rem 1.5rem;border-radius:8px;margin:1.5rem 0;font-size:.92rem;line-height:1.7">
      <strong style="display:block;margin-bottom:.4rem">📱 Mon expérience personnelle</strong>
      À Hanoï, j'ai opté pour la formule annuelle la plus simple : <strong>2 500 000 VND à l'année</strong>. Elle inclut 2 heures d'appels (pas illimités) et les SMS illimités, mais sans data incluse. Comme j'ai le WiFi chez moi et dans les cafés que je fréquente, ça me suffit largement pour les appels occasionnels. Je recharge un pack data ponctuel quand je suis en déplacement. Simple, économique, sans abonnement mensuel à surveiller.
    </div>

    <h2 id="section-3">Comparatif des forfaits data</h2>
    <p>Les tarifs ci-dessous correspondent aux forfaits mensuels les plus courants. Les prix vietnamiens évoluent régulièrement — vérifie les offres actuelles directement sur le site de l'opérateur.</p>

    <div class="operator-block">
      <div class="operator-header">
        <div class="operator-logo logo-viettel">V</div>
        <div>
          <div class="operator-name">Viettel</div>
          <div class="operator-sub">Meilleure couverture nationale · 5G SA disponible</div>
        </div>
      </div>
      <table class="sim-table">
        <thead>
          <tr>
            <th>Forfait</th>
            <th>Données</th>
            <th>Appels</th>
            <th>SMS</th>
            <th>Prix / mois</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-section-header">
            <td colspan="5">📶 Data purs — sans appels inclus</td>
          </tr>
          <tr>
            <td>D30</td>
            <td>1,5 Go / jour</td>
            <td>Payant (~1 000 VND/min)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">30 000 VND</td>
          </tr>
          <tr>
            <td>D60</td>
            <td>3 Go / jour</td>
            <td>Payant (~1 000 VND/min)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">60 000 VND</td>
          </tr>
          <tr>
            <td>D100 <span class="badge-pop">⭐ Populaire</span></td>
            <td>4 Go / jour</td>
            <td>Payant (~1 000 VND/min)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">100 000 VND</td>
          </tr>
          <tr class="table-section-header">
            <td colspan="5">📞 Combos data + appels</td>
          </tr>
          <tr>
            <td>VD89</td>
            <td>3 Go / jour</td>
            <td>1h / mois (nội mạng)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">89 000 VND</td>
          </tr>
          <tr>
            <td>VD149 <span class="badge-pop">⭐ Populaire</span></td>
            <td>4 Go / jour</td>
            <td>2h / mois (nội mạng)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">149 000 VND</td>
          </tr>
          <tr>
            <td>VD199</td>
            <td>5 Go / jour</td>
            <td>Illimités nội mạng</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">199 000 VND</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="operator-block">
      <div class="operator-header">
        <div class="operator-logo logo-mobi">M</div>
        <div>
          <div class="operator-name">Mobifone</div>
          <div class="operator-sub">Très bon en ville · Interface conviviale</div>
        </div>
      </div>
      <table class="sim-table">
        <thead>
          <tr>
            <th>Forfait</th>
            <th>Données</th>
            <th>Appels</th>
            <th>SMS</th>
            <th>Prix / mois</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-section-header">
            <td colspan="5">📶 Data purs — sans appels inclus</td>
          </tr>
          <tr>
            <td>MTN30</td>
            <td>1,2 Go / jour</td>
            <td>Payant (~1 200 VND/min)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">30 000 VND</td>
          </tr>
          <tr>
            <td>MTN60</td>
            <td>2,5 Go / jour</td>
            <td>Payant (~1 200 VND/min)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">60 000 VND</td>
          </tr>
          <tr>
            <td>MTN100 <span class="badge-pop">⭐ Populaire</span></td>
            <td>4 Go / jour</td>
            <td>Payant (~1 200 VND/min)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">100 000 VND</td>
          </tr>
          <tr class="table-section-header">
            <td colspan="5">📞 Combos data + appels</td>
          </tr>
          <tr>
            <td>F89</td>
            <td>2,5 Go / jour</td>
            <td>1h / mois (nội mạng)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">89 000 VND</td>
          </tr>
          <tr>
            <td>F149 <span class="badge-pop">⭐ Populaire</span></td>
            <td>4 Go / jour</td>
            <td>2h / mois (nội mạng)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">149 000 VND</td>
          </tr>
          <tr>
            <td>F199</td>
            <td>5 Go / jour</td>
            <td>Illimités nội mạng</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">199 000 VND</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="operator-block">
      <div class="operator-header">
        <div class="operator-logo logo-viet">VN</div>
        <div>
          <div class="operator-name">Vietnamobile</div>
          <div class="operator-sub">Moins cher · Idéal pour les grandes villes</div>
        </div>
      </div>
      <table class="sim-table">
        <thead>
          <tr>
            <th>Forfait</th>
            <th>Données</th>
            <th>Appels</th>
            <th>SMS</th>
            <th>Prix / mois</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-section-header">
            <td colspan="5">📶 Data purs — sans appels inclus</td>
          </tr>
          <tr>
            <td>Basic</td>
            <td>2 Go / jour</td>
            <td>Payant (~900 VND/min)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">50 000 VND</td>
          </tr>
          <tr>
            <td>Standard <span class="badge-pop">⭐ Populaire</span></td>
            <td>3 Go / jour</td>
            <td>Payant (~900 VND/min)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">90 000 VND</td>
          </tr>
          <tr class="table-section-header">
            <td colspan="5">📞 Combos data + appels</td>
          </tr>
          <tr>
            <td>Combo80</td>
            <td>2 Go / jour</td>
            <td>1h / mois (nội mạng)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">80 000 VND</td>
          </tr>
          <tr>
            <td>Combo120 <span class="badge-pop">⭐ Populaire</span></td>
            <td>3 Go / jour</td>
            <td>2h / mois (nội mạng)</td>
            <td>Illimités nội mạng</td>
            <td class="price-cell">120 000 VND</td>
          </tr>
        </tbody>
      </table>
    </div>

    <p style="font-size:.84rem;color:var(--muted);margin-top:-.5rem">
      💡 <strong>Tarifs 2026 approximatifs — vérifier en boutique ou sur le site officiel.</strong> <em>nội mạng</em> = réseau interne de l'opérateur uniquement ; appels vers d'autres opérateurs facturés ~2 000–3 000 VND/min. SMS inter-opérateurs et MMS payants. Offres à confirmer sur <a href="https://viettel.vn" target="_blank" rel="noopener">viettel.vn</a>, <a href="https://mobifone.vn" target="_blank" rel="noopener">mobifone.vn</a>, <a href="https://vietnamobile.com.vn" target="_blank" rel="noopener">vietnamobile.com.vn</a>.
    </p>

    <div class="tip-box">
      <strong>Recharge en ligne :</strong> Tu peux recharger ta SIM via l'application de ton opérateur, dans les supermarchés (Vinmart, Co.opmart) ou sur des sites comme <em>naptienhanh.vn</em>. Pratique pour éviter de chercher un point de vente physique.
    </div>

    <h2 id="section-4">Internet fixe à domicile</h2>
    <p>Pour un appartement, la fibre optique est disponible dans la quasi-totalité des villes via trois grands fournisseurs : <strong>FPT</strong>, <strong>Viettel Home</strong> et <strong>VNPT</strong>. Les débits sont excellents — 100 à 200 Mbps en utilisation réelle — et les tarifs très attractifs pour un Européen :</p>
    <ul>
      <li>Fibre 100 Mbps : environ <strong>150 000 – 250 000 VND/mois</strong> (6 – 10 €)</li>
      <li>Fibre 200 Mbps : environ <strong>250 000 – 350 000 VND/mois</strong> (10 – 14 €)</li>
      <li>Installation : généralement <strong>3 à 7 jours ouvrés</strong> après souscription</li>
    </ul>
    <p>Dans les cafés, restaurants et <a href="cafes-coworkings-hanoi">espaces de coworking à Hanoï</a>, le WiFi est quasi-universel et souvent rapide. Tu peux facilement travailler en nomade numérique sans dépendre de ta SIM.</p>

    <h2 id="section-5">Les applications indispensables au Vietnam</h2>
    <p>Installe ces applications avant ou dès ton arrivée — elles font partie du quotidien au Vietnam :</p>

    <table class="app-table">
      <thead>
        <tr>
          <th>Application</th>
          <th>Usage</th>
          <th>Remarque</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><span class="app-name">Zalo</span><span class="app-essential">INDISPENSABLE</span></td>
          <td>Messagerie & appels</td>
          <td>La WhatsApp vietnamienne — tout le monde l'utilise : belle-famille, voisins, administration locale</td>
        </tr>
        <tr>
          <td><span class="app-name">Grab</span><span class="app-essential">INDISPENSABLE</span></td>
          <td>VTC, taxi moto, livraison</td>
          <td>L'Uber local — fonctionne parfaitement, prix fixes, pas de négociation</td>
        </tr>
        <tr>
          <td><span class="app-name">Google Maps</span></td>
          <td>Navigation</td>
          <td>Très fiable au Vietnam, cartographie récente même dans les ruelles</td>
        </tr>
        <tr>
          <td><span class="app-name">Google Translate</span></td>
          <td>Traduction instantanée</td>
          <td>Le mode appareil photo est précieux pour lire les menus, panneaux et documents</td>
        </tr>
        <tr>
          <td><span class="app-name">ShopeeFood / BeFood</span></td>
          <td>Livraison de repas</td>
          <td>Souvent plus de restaurateurs référencés que Grab Food dans les villes secondaires</td>
        </tr>
        <tr>
          <td><span class="app-name">Wise ou Revolut</span></td>
          <td>Paiements & retraits DAB</td>
          <td>Meilleurs taux de change — voir notre <a href="transferer-argent-vietnam-wise">guide sur les transferts d'argent vers le Vietnam</a></td>
        </tr>
        <tr>
          <td><span class="app-name">Xe.com</span></td>
          <td>Taux de change</td>
          <td>Pour surveiller le taux EUR/VND et ne pas se faire avoir au bureau de change</td>
        </tr>
        <tr>
          <td><span class="app-name">VinID / ZaloPay</span></td>
          <td>Paiement mobile local</td>
          <td>Portefeuilles électroniques très utilisés dans les supermarchés, restaurants et marchés</td>
        </tr>
      </tbody>
    </table>

    <div class="tip-box">
      <strong>Zalo en priorité :</strong> Télécharge Zalo avant même d'atterrir. C'est la première chose que ta belle-famille, ton propriétaire et tes voisins t'enverront. Sans Zalo, tu rates une grande partie des communications locales.
    </div>

    <h2 id="section-6">VPN et accès aux contenus</h2>
    <p>Certains contenus sont géo-restreints ou limités au Vietnam. Netflix fonctionne, mais avec un catalogue différent de la France. Facebook et Google sont accessibles normalement. Les sites de presse française sont généralement disponibles sans VPN.</p>
    <p>Un VPN est utile pour accéder au streaming français (France Télévisions, TF1+, Molotov) ou à des contenus verrouillés sur la zone France. <strong>En pratique, les VPN grand public (NordVPN, ExpressVPN, ProtonVPN) fonctionnent très bien au Vietnam.</strong> L'utilisation personnelle n'est pas explicitement interdite par la loi — la loi sur la cybersécurité de 2018 impose des obligations aux <em>fournisseurs</em> de services, pas aux utilisateurs particuliers. La situation est stable mais peut évoluer : évite les VPN pour des activités illicites et reste informé.</p>

    <h2 id="section-faq">Questions fréquentes</h2>
    <?php foreach ($page_faq as $faq): ?>
    <div class="faq-item">
      <button class="faq-question" onclick="this.parentElement.classList.toggle('open')"><?= htmlspecialchars($faq['q']) ?> <span class="faq-arrow">▼</span></button>
      <div class="faq-answer"><?= $faq['a'] ?></div>
    </div>
    <?php endforeach; ?>

    <!-- Maillage interne -->
    <div class="tip-box" style="margin-top:2rem">
      <strong>📖 Articles liés :</strong>
      <ul style="margin:.5rem 0 0;padding-left:1.2rem;line-height:2">
        <li><a href="checklist-depart-installer-vietnam">Checklist complète pour s'installer au Vietnam</a> — tout ce qu'il faut préparer avant le départ</li>
        <li><a href="banque-vietnam-francais">Ouvrir un compte bancaire au Vietnam en tant qu'étranger</a></li>
        <li><a href="transferer-argent-vietnam-wise">Transférer de l'argent vers le Vietnam avec Wise</a> — les meilleurs taux</li>
        <li><a href="louer-appartement-hanoi-etranger">Louer un appartement à Hanoï en tant qu'étranger</a> — trouver et négocier</li>
        <li><a href="cafes-coworkings-hanoi">Cafés et coworkings à Hanoï</a> — travailler en dehors de chez soi</li>
        <li><a href="budget-mensuel-hanoi-2026">Budget mensuel à Hanoï en 2026</a> — combien ça coûte vraiment</li>
        <li><a href="travailler-a-distance-depuis-vietnam">Travailler à distance depuis le Vietnam</a> — statut, fiscalité, organisation</li>
      </ul>
    </div>

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
    <div style="background:linear-gradient(135deg,#1a1a2e 0%,#16213e 100%);border-radius:14px;padding:2.25rem 2rem;text-align:center;margin:2rem 0">
      <div style="font-size:2.25rem;margin-bottom:.65rem">💬</div>
      <div style="color:#faf8f4;font-weight:700;font-size:1.1rem;margin-bottom:.5rem">Rejoins la communauté</div>
      <div style="color:rgba(250,248,244,.65);font-size:.88rem;line-height:1.65;margin-bottom:1.25rem;max-width:460px;margin-left:auto;margin-right:auto">Discute avec d'autres expats et couples franco-vietnamiens — questions SIM, opérateurs, applications locales.</div>
      <div style="display:flex;gap:.75rem;justify-content:center;flex-wrap:wrap">
      <a href="https://www.facebook.com/groups/capvietnam" target="_blank" rel="noopener"
         style="display:inline-flex;align-items:center;gap:.5rem;background:#1877f2;color:#fff;padding:.6rem 1.2rem;border-radius:8px;font-size:.88rem;font-weight:600;text-decoration:none">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink:0"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
        Groupe Facebook privé
      </a>
      <a href="https://discord.gg/bJGHy7ZE7" target="_blank" rel="noopener"
         style="display:inline-flex;align-items:center;gap:.5rem;background:#5865f2;color:#fff;padding:.6rem 1.2rem;border-radius:8px;font-size:.88rem;font-weight:600;text-decoration:none">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor" style="flex-shrink:0"><path d="M20.317 4.37a19.791 19.791 0 00-4.885-1.515.074.074 0 00-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 00-5.487 0 12.64 12.64 0 00-.617-1.25.077.077 0 00-.079-.037A19.736 19.736 0 003.677 4.37a.07.07 0 00-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 00.031.057 19.9 19.9 0 005.993 3.03.078.078 0 00.084-.028c.462-.63.874-1.295 1.226-1.994a.076.076 0 00-.041-.106 13.107 13.107 0 01-1.872-.892.077.077 0 01-.008-.128 10.2 10.2 0 00.372-.292.074.074 0 01.077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 01.078.01c.12.098.246.198.373.292a.077.077 0 01-.006.127 12.299 12.299 0 01-1.873.892.077.077 0 00-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 00.084.028 19.839 19.839 0 006.002-3.03.077.077 0 00.032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 00-.031-.03z"/></svg>
        Serveur Discord
      </a>
      </div>
    </div>
  </main>
</div>

<?php
require_once __DIR__ . '/config/site.php';
$current_slug = 'sim-internet-applications-vietnam';
$current_cat  = 'vie-pratique';
include '_related-articles.php';
?>

<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
