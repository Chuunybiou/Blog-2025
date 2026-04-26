<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Merci — Télécharge ton guide Cap Vietnam 2026';
$page_description = 'Merci pour ton achat. Télécharge maintenant le Guide Cap Vietnam 2026 — PDF immédiat.';
$page_canonical   = SITE_URL . '/merci-guide';
$page_og_title    = 'Télécharge ton guide Cap Vietnam 2026';
$page_og_desc     = 'Merci pour ton achat. Ton guide PDF est prêt.';
$page_og_url      = SITE_URL . '/merci-guide';
$page_og_image    = 'https://images.unsplash.com/photo-1573270689103-d7a4e42b609a?w=1200&q=80';
$page_extra_css   = '
.merci-hero{padding-top:64px;min-height:70vh;background:linear-gradient(160deg,#0d1829 0%,#1a2744 60%,#0d1829 100%);display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden}
.merci-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 60% at 50% 50%,rgba(212,168,75,0.06),transparent 70%)}
.merci-inner{max-width:600px;margin:0 auto;padding:4rem 2rem;text-align:center;position:relative;z-index:1}
.merci-check{width:80px;height:80px;border-radius:50%;background:rgba(34,197,94,0.15);border:2px solid rgba(34,197,94,0.4);display:flex;align-items:center;justify-content:center;font-size:2rem;margin:0 auto 2rem}
.merci-inner h1{font-family:"DM Serif Display",serif;font-size:clamp(2rem,4vw,3rem);color:#faf8f4;margin-bottom:0.75rem;line-height:1.2}
.merci-inner h1 em{color:#d4a84b;font-style:normal}
.merci-inner p{color:rgba(250,248,244,0.55);font-size:1rem;line-height:1.7;margin-bottom:2rem}
.dl-btn{display:inline-flex;align-items:center;gap:12px;padding:1.1rem 2.5rem;background:#d4a84b;color:#1a2744;font-weight:700;font-size:1.05rem;border-radius:8px;text-decoration:none;transition:all 0.2s}
.dl-btn:hover{background:#c49a3a;transform:translateY(-2px);box-shadow:0 10px 30px rgba(212,168,75,0.3)}
.dl-note{color:rgba(250,248,244,0.3);font-size:0.8rem;margin-top:1rem;display:block}

.next-steps{max-width:900px;margin:0 auto;padding:5rem 2rem}
.next-steps h2{font-family:"DM Serif Display",serif;font-size:1.75rem;margin-bottom:0.5rem;text-align:center}
.next-steps .ns-sub{color:var(--muted);text-align:center;margin-bottom:2.5rem}
.steps-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.step-card{background:var(--white);border-radius:var(--radius);padding:1.5rem;box-shadow:var(--shadow-sm);text-align:center}
.step-num{width:36px;height:36px;border-radius:50%;background:linear-gradient(135deg,#d4a84b,#b8860b);color:#fff;font-weight:700;font-size:0.9rem;display:flex;align-items:center;justify-content:center;margin:0 auto 1rem}
.step-card h3{font-family:"DM Serif Display",serif;font-size:1rem;margin-bottom:0.4rem}
.step-card p{font-size:0.85rem;color:var(--muted);line-height:1.6}
.step-card a{color:var(--amber);font-weight:600;text-decoration:none}

.wise-upsell{background:var(--ink);padding:3.5rem 2rem;text-align:center}
.wise-upsell-inner{max-width:600px;margin:0 auto}
.wise-upsell h3{font-family:"DM Serif Display",serif;font-size:1.5rem;color:#faf8f4;margin-bottom:0.5rem}
.wise-upsell p{color:rgba(250,248,244,0.5);margin-bottom:1.5rem;font-size:0.95rem}
.wu-btn{display:inline-block;padding:0.75rem 2rem;background:var(--jade);color:#fff;font-weight:600;border-radius:4px;text-decoration:none;font-size:0.9rem;transition:opacity 0.2s}
.wu-btn:hover{opacity:0.88}
.wu-note{font-size:0.72rem;color:rgba(250,248,244,0.25);margin-top:0.75rem;font-style:italic}

@media(max-width:640px){.steps-grid{grid-template-columns:1fr}}
';
include 'header.php';
?>

<div class="merci-hero">
  <div class="merci-inner">
    <div class="merci-check">✓</div>
    <h1>Paiement reçu —<br>bienvenue au <em>Vietnam</em> !</h1>
    <p>Ton guide Cap Vietnam 2026 est prêt. 9 chapitres, 47 checklists — tout ce qu'il te faut pour préparer ton installation.</p>
    <a class="dl-btn" href="assets/guide-cap-vietnam-2026.pdf" download="Guide-Cap-Vietnam-2026.pdf">
      📥 Télécharger le guide PDF
    </a>
    <span class="dl-note">PDF · 32 pages · Édition 2026 · Mise à jour 2027 incluse</span>
  </div>
</div>

<section class="next-steps">
  <h2>Prochaines étapes recommandées</h2>
  <p class="ns-sub">Pour bien démarrer ton installation au Vietnam.</p>
  <div class="steps-grid">
    <div class="step-card">
      <div class="step-num">1</div>
      <h3>Commence par le chapitre Visa</h3>
      <p>C'est la pièce maîtresse. Complète avec notre <a href="visa-vietnam-francais-guide-2026.php">guide visa gratuit</a> pour les détails récents.</p>
    </div>
    <div class="step-card">
      <div class="step-num">2</div>
      <h3>Ouvre un compte Wise</h3>
      <p>Indispensable avant le départ — transferts EUR → VND au taux interbancaire. <a href="go.php?id=wise" rel="noopener sponsored">Premier transfert offert →</a></p>
    </div>
    <div class="step-card">
      <div class="step-num">3</div>
      <h3>Lis tous les articles</h3>
      <p>Visa, mariage, budget, compte bancaire — chaque article complète un chapitre du guide. <a href="articles-capvietnam.php">Tous les articles →</a></p>
    </div>
  </div>
</section>

<section class="wise-upsell">
  <div class="wise-upsell-inner">
    <h3>💸 L'outil du chapitre 5 : Wise</h3>
    <p>Transférer tes euros vers le Vietnam au taux interbancaire, sans les frais abusifs des banques classiques.</p>
    <a href="go.php?id=wise" class="wu-btn" rel="noopener sponsored">Ouvrir Wise gratuitement →</a>
    <p class="wu-note">Lien affilié — commission perçue si tu effectues un premier transfert, sans coût pour toi.</p>
  </div>
</section>

<?php include 'footer.php'; ?>
