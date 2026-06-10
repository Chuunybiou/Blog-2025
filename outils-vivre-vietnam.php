<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Mes outils pour vivre au Vietnam — Ressources expat 2026';
$page_description = 'Les outils que j\'utilise vraiment pour vivre entre le Canada, la France et le Vietnam : banques, VPN, SIM, assurance santé, traduction, transport. Uniquement ce que j\'ai testé.';
$page_canonical   = SITE_URL . '/outils-vivre-vietnam';
$page_og_title    = 'Mes outils pour vivre au Vietnam — Ressources expat 2026';
$page_og_desc     = 'Banques, VPN, SIM locale, assurance santé, transport, traduction. Uniquement ce que j\'utilise vraiment.';
$page_og_url      = SITE_URL . '/outils-vivre-vietnam';
$page_og_image    = SITE_URL . '/assets/img/capvietnam-money.jpg';
$page_schema      = json_encode([
  '@context'    => 'https://schema.org',
  '@type'       => 'WebPage',
  'name'        => 'Mes outils pour vivre au Vietnam',
  'description' => 'Ressources et outils recommandés par Cap Vietnam pour s\'installer au Vietnam en 2026.',
  'url'         => SITE_URL . '/outils-vivre-vietnam',
  'author'      => ['@type' => 'Person', 'name' => 'Anthony Bouillon'],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$page_extra_css = '
.tools-hero{padding-top:64px;background:linear-gradient(165deg,#1c1917 0%,#2a1a00 60%,#1c1917 100%);position:relative;overflow:hidden}
.tools-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 50% at 20% 80%,rgba(184,134,11,0.12),transparent 60%)}
.tools-hero-inner{max-width:800px;margin:0 auto;padding:5rem 2rem 4rem;position:relative;z-index:1;text-align:center}
.tools-hero-badge{display:inline-block;font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;font-weight:700;padding:5px 14px;border-radius:3px;margin-bottom:1.5rem;background:rgba(184,134,11,0.2);color:var(--amber-soft)}
.tools-hero h1{font-family:"DM Serif Display",serif;font-size:clamp(2rem,5vw,3.2rem);color:var(--cream);line-height:1.2;margin-bottom:1rem}
.tools-hero p{color:rgba(250,248,244,0.5);font-size:1.05rem;max-width:600px;margin:0 auto}

.tools-disclaimer{max-width:800px;margin:2rem auto 0;padding:1rem 1.5rem;background:rgba(184,134,11,0.08);border:1px solid rgba(184,134,11,0.2);border-radius:8px;font-size:0.85rem;color:rgba(250,248,244,0.5);text-align:center}

.tools-layout{max-width:1100px;margin:0 auto;padding:4rem 2rem}
.tools-section{margin-bottom:4rem}
.tools-section-header{display:flex;align-items:center;gap:1rem;margin-bottom:2rem;padding-bottom:1rem;border-bottom:2px solid var(--border)}
.tools-section-icon{font-size:2rem}
.tools-section-title{font-family:"DM Serif Display",serif;font-size:1.8rem;color:var(--ink)}
.tools-section-desc{color:var(--muted);font-size:0.9rem;margin-top:0.2rem}

.tools-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(300px,1fr));gap:1.5rem}
.tool-card{background:var(--white);border-radius:var(--radius);padding:1.75rem;box-shadow:var(--shadow-sm);border:1px solid var(--border);transition:transform 0.2s,box-shadow 0.2s;display:flex;flex-direction:column}
.tool-card:hover{transform:translateY(-3px);box-shadow:var(--shadow-md)}
.tool-card-top{display:flex;align-items:flex-start;gap:1rem;margin-bottom:1rem}
.tool-card-logo{width:48px;height:48px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:1.5rem;flex-shrink:0;background:var(--warm-bg)}
.tool-card-info{}
.tool-card-name{font-weight:700;font-size:1rem;color:var(--ink);margin-bottom:0.15rem}
.tool-card-tag{font-size:0.7rem;letter-spacing:2px;text-transform:uppercase;font-weight:600}
.tag-used{color:var(--jade)}.tag-planned{color:var(--amber)}.tag-nonfree{color:var(--muted)}
.tool-card-desc{color:#3a3530;font-size:0.9rem;line-height:1.6;flex:1;margin-bottom:1.25rem}
.tool-card-meta{font-size:0.78rem;color:var(--muted);margin-bottom:1rem;font-style:italic}
.tool-card-btn{display:inline-block;padding:0.6rem 1.2rem;border-radius:4px;font-weight:600;font-size:0.85rem;text-decoration:none;transition:opacity 0.2s;text-align:center}
.tool-card-btn:hover{opacity:0.85}
.btn-jade{background:var(--jade);color:#fff}
.btn-amber{background:var(--amber);color:var(--ink)}
.btn-terracotta{background:var(--terracotta);color:#fff}
.btn-blue{background:#1a5f8a;color:#fff}
.btn-purple{background:#7c3aed;color:#fff}
.btn-gray{background:var(--warm-bg);color:var(--ink);border:1px solid var(--border)}
.tool-card-note{font-size:0.72rem;color:var(--muted);margin-top:0.5rem;font-style:italic}

.tools-honesty{background:var(--warm-bg);padding:3rem 2rem;text-align:center;margin-top:2rem}
.tools-honesty-inner{max-width:700px;margin:0 auto}
.tools-honesty h2{font-family:"DM Serif Display",serif;font-size:1.6rem;margin-bottom:0.75rem}
.tools-honesty p{color:var(--muted);font-size:0.95rem;line-height:1.7}

@media(max-width:640px){.tools-grid{grid-template-columns:1fr}}
';
include 'header.php';
?>

<!-- HERO -->
<header class="tools-hero">
  <div class="tools-hero-inner">
    <span class="tools-hero-badge">Ressources expat</span>
    <h1>Mes outils pour<br>vivre au Vietnam</h1>
    <p>Uniquement ce que j'utilise vraiment ou que je prévois concrètement. Pas de liste générique copiée sur internet.</p>
    <div class="tools-disclaimer">
      ℹ️ Certains liens sont affiliés — signalés clairement. Ils ne modifient ni mon choix ni mon avis. Si un outil n'est pas affilié, il est quand même là parce qu'il fonctionne.
    </div>
  </div>
</header>

<div class="tools-layout">

  <!-- BANQUES -->
  <section class="tools-section">
    <div class="tools-section-header">
      <div class="tools-section-icon">🏦</div>
      <div>
        <h2 class="tools-section-title">Banques & paiements</h2>
        <p class="tools-section-desc">Gérer de l'argent entre le Canada, la France et le Vietnam demande plusieurs comptes. Voici ce que j'utilise.</p>
      </div>
    </div>
    <div class="tools-grid">

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">💸</div>
          <div class="tool-card-info">
            <div class="tool-card-name">Wise</div>
            <div class="tool-card-tag tag-used">✓ Utilisé</div>
          </div>
        </div>
        <p class="tool-card-desc">Mon outil principal pour envoyer de l'argent entre pays et payer en VND sans frais cachés. Le taux de change est proche du taux interbancaire réel. Indispensable pour les virements France ↔ Vietnam.</p>
        <div class="tool-card-meta">Frais : ~0,5–1% selon le montant. Virement en quelques heures vers un compte vietnamien.</div>
        <a class="tool-card-btn btn-jade" href="<?= AFF_WISE ?>" target="_blank" rel="noopener sponsored">Ouvrir un compte Wise →</a>
        <div class="tool-card-note">Lien affilié — premier virement sans frais si tu passes par ce lien.</div>
      </div>

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">💳</div>
          <div class="tool-card-info">
            <div class="tool-card-name">Revolut</div>
            <div class="tool-card-tag tag-used">✓ Utilisé</div>
          </div>
        </div>
        <p class="tool-card-desc">Pour les paiements au quotidien et les retraits en VND. L'application est très pratique pour suivre ses dépenses par catégorie quand on vit entre plusieurs pays.</p>
        <div class="tool-card-meta">Plan Standard gratuit. Plan Premium pour les retraits illimités sans frais à l'étranger.</div>
        <a class="tool-card-btn btn-blue" href="<?= AFF_REVOLUT ?>" target="_blank" rel="noopener sponsored">Créer un compte Revolut →</a>
        <div class="tool-card-note">Lien affilié.</div>
      </div>

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">🇻🇳</div>
          <div class="tool-card-info">
            <div class="tool-card-name">Vietcombank</div>
            <div class="tool-card-tag tag-used">✓ Compte ouvert au Vietnam</div>
          </div>
        </div>
        <p class="tool-card-desc">Le compte local au Vietnam. Indispensable pour payer le loyer, les services, et s'intégrer dans le système bancaire local. Demande un numéro de téléphone vietnamien et un passeport valide.</p>
        <div class="tool-card-meta">Ouverture en agence uniquement. Frais de tenue de compte très faibles.</div>
        <a class="tool-card-btn btn-amber" href="<?= AFF_VIETCOMBANK ?>" target="_blank" rel="noopener sponsored">Voir Vietcombank →</a>
        <div class="tool-card-note">Lien de parrainage.</div>
      </div>

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">🇨🇦</div>
          <div class="tool-card-info">
            <div class="tool-card-name">Wealthsimple</div>
            <div class="tool-card-tag tag-used">✓ Utilisé (Canada)</div>
          </div>
        </div>
        <p class="tool-card-desc">Mon compte au Canada. Sans frais mensuels, intérêts sur l'épargne, et carte débit fonctionnelle. Pratique pour garder un pied au Canada pendant la transition.</p>
        <div class="tool-card-meta">Disponible uniquement pour les résidents canadiens.</div>
        <a class="tool-card-btn btn-jade" href="<?= AFF_WEALTHSIMPLE ?>" target="_blank" rel="noopener sponsored">Ouvrir chez Wealthsimple →</a>
        <div class="tool-card-note">Lien affilié — bonus à l'ouverture.</div>
      </div>

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">🇫🇷</div>
          <div class="tool-card-info">
            <div class="tool-card-name">Fortuneo</div>
            <div class="tool-card-tag tag-used">✓ Compte France</div>
          </div>
        </div>
        <p class="tool-card-desc">Mon compte bancaire français. Carte Mastercard Gold sans frais de tenue, remboursement des frais de change à l'étranger. Pratique pour garder un compte en France en tant qu'expat.</p>
        <div class="tool-card-meta">Pour les résidents fiscaux français ou expatriés avec adresse de référence en France.</div>
        <a class="tool-card-btn btn-terracotta" href="<?= AFF_FORTUNEO ?>" target="_blank" rel="noopener sponsored">Voir Fortuneo →</a>
        <div class="tool-card-note">Lien affilié.</div>
      </div>

    </div>
  </section>

  <!-- VPN -->
  <section class="tools-section">
    <div class="tools-section-header">
      <div class="tools-section-icon">🔒</div>
      <div>
        <h2 class="tools-section-title">VPN</h2>
        <p class="tools-section-desc">Utile au Vietnam pour accéder à certains services bloqués géographiquement et sécuriser sa connexion sur les réseaux publics.</p>
      </div>
    </div>
    <div class="tools-grid">

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">👻</div>
          <div class="tool-card-info">
            <div class="tool-card-name">CyberGhost</div>
            <div class="tool-card-tag tag-used">✓ Utilisé</div>
          </div>
        </div>
        <p class="tool-card-desc">Le VPN que j'utilise. Fiable, rapide, avec des serveurs en France et au Canada. Utile au Vietnam pour certains services de streaming, et pour sécuriser les connexions Wi-Fi dans les cafés et hôtels.</p>
        <div class="tool-card-meta">Abonnement annuel plus économique que mensuel. Fonctionne sur iOS, Android, Windows, macOS.</div>
        <a class="tool-card-btn btn-purple" href="https://www.cyberghostvpn.com/" target="_blank" rel="noopener">Voir CyberGhost →</a>
        <div class="tool-card-note">Pas de lien affilié — je l'utilise, c'est tout.</div>
      </div>

    </div>
  </section>

  <!-- ASSURANCE SANTÉ -->
  <section class="tools-section">
    <div class="tools-section-header">
      <div class="tools-section-icon">🏥</div>
      <div>
        <h2 class="tools-section-title">Assurance santé</h2>
        <p class="tools-section-desc">La santé au Vietnam est accessible et peu chère — mais une assurance reste nécessaire pour les imprévus graves.</p>
      </div>
    </div>
    <div class="tools-grid">

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">🛡️</div>
          <div class="tool-card-info">
            <div class="tool-card-name">Manulife Vietnam</div>
            <div class="tool-card-tag tag-planned">⏳ Prévu</div>
          </div>
        </div>
        <p class="tool-card-desc">L'assurance que je prévois de prendre. Ma femme travaille pour Manulife Vietnam, ce qui me permet d'avoir accès à des tarifs avantageux. La couverture de base revient à environ 10 000 000 ₫ par an (~370€) — une couverture locale raisonnable pour un expat à long terme.</p>
        <div class="tool-card-meta">~10 000 000 ₫/an (~370€) pour la couverture minimale. Couverture plus complète disponible selon les formules.</div>
        <a class="tool-card-btn btn-gray" href="https://www.manulife.com.vn/" target="_blank" rel="noopener">Voir Manulife Vietnam →</a>
        <div class="tool-card-note">Pas de lien affilié — je partage l'info telle quelle.</div>
      </div>

    </div>
  </section>

  <!-- CARTES SIM -->
  <section class="tools-section">
    <div class="tools-section-header">
      <div class="tools-section-icon">📱</div>
      <div>
        <h2 class="tools-section-title">Carte SIM Vietnam</h2>
        <p class="tools-section-desc">Un numéro local est indispensable pour ouvrir un compte bancaire, utiliser Grab, et les démarches administratives.</p>
      </div>
    </div>
    <div class="tools-grid">

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">📡</div>
          <div class="tool-card-info">
            <div class="tool-card-name">SIM locale vietnamienne</div>
            <div class="tool-card-tag tag-used">✓ Utilisé</div>
          </div>
        </div>
        <p class="tool-card-desc">Ma femme m'a acheté une SIM locale au Vietnam. Forfait annuel autour de 2 500 000 ₫ (~100€) avec SMS illimités et environ 2 heures d'appel incluses, plus les données mobiles. Beaucoup moins cher qu'un forfait mensuel occidental et bien plus fiable que le roaming.</p>
        <div class="tool-card-meta">Opérateurs principaux : Viettel (meilleure couverture hors des villes), Vinaphone, Mobifone. SIM disponible à l'aéroport ou en boutique (~100 000–200 000 ₫ pour une SIM prépayée).</div>
        <a class="tool-card-btn btn-gray" href="telephone-vietnam-quelle-sim-choisir.php">Lire mon comparatif SIM →</a>
      </div>

    </div>
  </section>

  <!-- TRADUCTION -->
  <section class="tools-section">
    <div class="tools-section-header">
      <div class="tools-section-icon">🌐</div>
      <div>
        <h2 class="tools-section-title">Traduction</h2>
        <p class="tools-section-desc">Avec une femme vietnamienne on parle anglais et vietnamien pour les sujets simples — mais quelques outils aident vraiment.</p>
      </div>
    </div>
    <div class="tools-grid">

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">🔤</div>
          <div class="tool-card-info">
            <div class="tool-card-name">Google Translate</div>
            <div class="tool-card-tag tag-used">✓ Utilisé</div>
          </div>
        </div>
        <p class="tool-card-desc">L'outil de base. La traduction vietnamien → français fonctionne correctement pour les panneaux, les menus et les documents simples. La fonction appareil photo (traduire du texte photographié) est très utile au quotidien.</p>
        <div class="tool-card-meta">Gratuit. Disponible sur iOS et Android. Télécharger le pack hors-ligne Vietnam pour l'utiliser sans connexion.</div>
        <a class="tool-card-btn btn-gray" href="https://translate.google.com" target="_blank" rel="noopener">Google Translate</a>
      </div>

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">💬</div>
          <div class="tool-card-info">
            <div class="tool-card-name">Zalo</div>
            <div class="tool-card-tag tag-used">✓ Utilisé</div>
          </div>
        </div>
        <p class="tool-card-desc">L'application de messagerie dominante au Vietnam. Tout le monde utilise Zalo : la famille de ma femme, les propriétaires d'appartement, les services. Indispensable pour s'intégrer. Traduction intégrée dans les conversations.</p>
        <div class="tool-card-meta">Gratuit. Demande un numéro de téléphone vietnamien pour créer un compte complet.</div>
        <a class="tool-card-btn btn-gray" href="https://zalo.me/" target="_blank" rel="noopener">Télécharger Zalo</a>
      </div>

    </div>
  </section>

  <!-- TRANSPORT -->
  <section class="tools-section">
    <div class="tools-section-header">
      <div class="tools-section-icon">🛵</div>
      <div>
        <h2 class="tools-section-title">Transport</h2>
        <p class="tools-section-desc">Les déplacements au Vietnam fonctionnent différemment. Voici les applications indispensables.</p>
      </div>
    </div>
    <div class="tools-grid">

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">🚗</div>
          <div class="tool-card-info">
            <div class="tool-card-name">Grab</div>
            <div class="tool-card-tag tag-used">✓ Utilisé</div>
          </div>
        </div>
        <p class="tool-card-desc">L'équivalent d'Uber en Asie du Sud-Est. Indispensable pour se déplacer à Hanoï ou Ho Chi Minh-Ville sans se faire arnaquer. On paie en VND directement depuis l'app. Fonctionne aussi pour les livraisons de repas.</p>
        <div class="tool-card-meta">Gratuit. Nécessite un numéro de téléphone local pour les fonctions avancées. Prix affiché à l'avance, pas de négociation.</div>
        <a class="tool-card-btn btn-jade" href="https://www.grab.com/" target="_blank" rel="noopener">Télécharger Grab</a>
      </div>

      <div class="tool-card">
        <div class="tool-card-top">
          <div class="tool-card-logo">✈️</div>
          <div class="tool-card-info">
            <div class="tool-card-name">Vols Paris–Hanoï</div>
            <div class="tool-card-tag tag-used">✓ Comparatif</div>
          </div>
        </div>
        <p class="tool-card-desc">J'ai écrit un article complet sur comment trouver des vols Paris–Hanoï au meilleur prix. Les escales, les compagnies, les périodes à éviter.</p>
        <div class="tool-card-meta">Comptez 600–1200€ pour un aller-retour selon la saison.</div>
        <a class="tool-card-btn btn-gray" href="vol-paris-hanoi-pas-cher.php">Lire mon guide vols →</a>
      </div>

    </div>
  </section>

</div>

<!-- HONESTY -->
<section class="tools-honesty">
  <div class="tools-honesty-inner">
    <h2>Pourquoi faire confiance à cette page ?</h2>
    <p>Je n'ai pas de partenariats exclusifs avec ces marques. Je gagne une commission sur certains liens — c'est clairement indiqué sur chaque carte. Si je ne mets pas d'outil, c'est parce que je ne l'utilise pas. Si je le déconseille, je le dis. Cette page est mise à jour quand mon usage évolue, pas pour optimiser les clics.</p>
  </div>
</section>

<!-- COMMUNAUTÉ -->
<section style="max-width:800px;margin:0 auto;padding:4rem 2rem;text-align:center;">
  <h2 style="font-family:'DM Serif Display',serif;font-size:1.6rem;margin-bottom:0.75rem;">Une question sur un de ces outils ?</h2>
  <p style="color:var(--muted);margin-bottom:2rem;">Pose-la dans le groupe ou sur le serveur Discord — les membres ont souvent des retours d'expérience récents.</p>
  <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
    <a href="https://www.facebook.com/groups/vivreauvietnamcouplefrancovietnamiencap/" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:0.6rem;padding:0.7rem 1.4rem;background:#1877f2;color:#fff;border-radius:6px;font-weight:600;text-decoration:none;font-size:0.9rem;">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
      Groupe Facebook
    </a>
    <a href="https://discord.gg/MdDVNb7QZz" target="_blank" rel="noopener" style="display:inline-flex;align-items:center;gap:0.6rem;padding:0.7rem 1.4rem;background:#5865f2;color:#fff;border-radius:6px;font-weight:600;text-decoration:none;font-size:0.9rem;">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057.1 18.13.14 18.2.2 18.241a19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028c.462-.63.874-1.295 1.226-1.994.021-.041.001-.09-.041-.106a13.105 13.105 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/></svg>
      Discord expats
    </a>
  </div>
</section>

<?php include 'footer.php'; ?>
