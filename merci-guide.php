<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Télécharge ton guide Cap Vietnam 2026 — gratuit';
$page_description = 'Ton guide PDF gratuit est prêt. Mariage, visa, budget, installation au Vietnam — tout ce qu\'il faut pour préparer ton parcours.';
$page_canonical   = SITE_URL . '/merci-guide';
$page_og_title    = 'Guide Cap Vietnam 2026 — PDF gratuit';
$page_og_desc     = 'Ton guide PDF est prêt. Mariage, visa, budget, installation — le parcours complet du couple franco-vietnamien.';
$page_og_url      = SITE_URL . '/merci-guide';
$page_og_image    = 'https://blog-capvietnam.fr/assets/img/mariage-franco-vietnamien-ceremonie.png';
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
    <h1>Ton guide est <em>prêt</em></h1>
    <p>Mariage au Vietnam, visa conjoint, installation, budget réel — le parcours complet du couple franco-vietnamien en un seul PDF gratuit.</p>
    <a class="dl-btn" href="/Guide_Se_marier_et_vivre_au_Vietnam-1.pdf" download="Guide-Cap-Vietnam-2026.pdf">
      📥 Télécharger le guide PDF
    </a>
    <span class="dl-note">PDF · Édition 2026 · Gratuit</span>
    <div style="margin-top:1.75rem;background:rgba(255,255,255,0.06);border-radius:8px;padding:1.25rem 1.5rem;text-align:left;max-width:420px;margin-left:auto;margin-right:auto">
      <p style="font-size:0.72rem;color:rgba(250,248,244,0.4);margin:0 0 0.4rem;text-transform:uppercase;letter-spacing:1.5px;font-weight:700">✅ Checklist — À imprimer</p>
      <p style="font-size:1rem;color:#faf8f4;font-weight:700;margin:0 0 0.4rem;line-height:1.3">Départ au Vietnam : les 10 démarches à ne pas oublier</p>
      <p style="font-size:0.8rem;color:rgba(250,248,244,0.4);margin:0 0 1rem;line-height:1.6">Visa, assurance santé internationale, compte bancaire multi-devise, SIM locale, logement… Cases à cocher, dans le bon ordre. À imprimer et compléter au fur et à mesure.</p>
      <a class="dl-btn" href="/Checklist-Vietnam-CapVietnam.pdf" download="Checklist-Vietnam-CapVietnam.pdf" style="background:#1b4a35;font-size:0.88rem;padding:0.7rem 1.4rem;margin:0">
        📋 Télécharger la checklist
      </a>
    </div>
  </div>
</div>

<section style="background:#f5f3ef;padding:3rem 2rem">
  <div style="max-width:700px;margin:0 auto;text-align:center">
    <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#1b4a35;margin-bottom:0.5rem">📄 Modèles de lettres</div>
    <h2 style="font-family:'DM Serif Display',serif;font-size:1.5rem;color:#1a1206;margin-bottom:0.5rem">Pack de modèles — à imprimer ou enregistrer en PDF</h2>
    <p style="color:#888;font-size:0.9rem;margin-bottom:2rem">Remplissez les champs, puis Ctrl+P → "Enregistrer en PDF" depuis votre navigateur.</p>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(200px,1fr));gap:1rem;text-align:left">
      <a href="/modeles/lettre-ccam" style="background:#fff;border:1px solid #e0ddd8;border-radius:8px;padding:1.25rem;text-decoration:none;color:inherit;display:flex;gap:0.75rem;align-items:flex-start">
        <span style="font-size:1.5rem">✉️</span>
        <div>
          <strong style="display:block;font-size:0.9rem;color:#1a1206">Lettre demande CCAM</strong>
          <span style="font-size:0.8rem;color:#888">À envoyer au consulat</span>
        </div>
      </a>
      <a href="/modeles/lettre-suivi-ambassade" style="background:#fff;border:1px solid #e0ddd8;border-radius:8px;padding:1.25rem;text-decoration:none;color:inherit;display:flex;gap:0.75rem;align-items:flex-start">
        <span style="font-size:1.5rem">📬</span>
        <div>
          <strong style="display:block;font-size:0.9rem;color:#1a1206">Lettre de relance ambassade</strong>
          <span style="font-size:0.8rem;color:#888">Si pas de nouvelles après 2 mois</span>
        </div>
      </a>
      <a href="/modeles/checklist-ccam" style="background:#fff;border:1px solid #e0ddd8;border-radius:8px;padding:1.25rem;text-decoration:none;color:inherit;display:flex;gap:0.75rem;align-items:flex-start">
        <span style="font-size:1.5rem">✅</span>
        <div>
          <strong style="display:block;font-size:0.9rem;color:#1a1206">Checklist CCAM complète</strong>
          <span style="font-size:0.8rem;color:#888">Tous les documents à rassembler</span>
        </div>
      </a>
    </div>
  </div>
</section>

<section class="next-steps">
  <h2>Par où commencer ?</h2>
  <p class="ns-sub">Les trois premières lectures recommandées selon ta situation.</p>
  <div class="steps-grid">
    <div class="step-card">
      <div class="step-num">1</div>
      <h3>Tu veux faire venir ton conjoint en France</h3>
      <p>Commence par le <a href="faire-venir-conjointe-vietnamienne-france">guide complet visa conjoint</a> — CCAM, VLS-TS, titre de séjour.</p>
    </div>
    <div class="step-card">
      <div class="step-num">2</div>
      <h3>Tu veux t'installer au Vietnam</h3>
      <p>Le <a href="s-expatrier-vietnam-2026-guide-complet">guide d'expatriation</a> couvre visa, logement, banques et budget réel.</p>
    </div>
    <div class="step-card">
      <div class="step-num">3</div>
      <h3>Tu veux gérer les finances du couple</h3>
      <p>Wise, compte vietnamien, transferts EUR→VND — voir <a href="organiser-finances-expat-france-vietnam">organiser ses finances</a>.</p>
    </div>
  </div>
</section>

<section class="wise-upsell">
  <div class="wise-upsell-inner">
    <h3>💸 L'outil indispensable : Wise</h3>
    <p>Transférer des euros vers le Vietnam au taux interbancaire, sans les frais des banques classiques. Utilisé par tous les expats sérieux.</p>
    <a href="go.php?id=wise" class="wu-btn" rel="noopener sponsored">Ouvrir Wise gratuitement →</a>
    <p class="wu-note">Lien affilié — commission perçue si tu effectues un premier transfert, sans coût pour toi.</p>
  </div>
</section>

<?php include 'footer.php'; ?>
