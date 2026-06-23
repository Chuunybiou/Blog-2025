<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Pack gratuit — Guide + 3 modèles de lettres pour couple franco-vietnamien';
$page_description = 'Télécharge gratuitement : guide PDF mariage & visa, lettre CCAM, lettre relance ambassade et checklist CCAM. Offert à l\'inscription à la newsletter Cap Vietnam.';
$page_canonical   = SITE_URL . '/pack-gratuit';
$page_og_title    = 'Pack gratuit Cap Vietnam — Guide + 3 modèles de lettres';
$page_og_desc     = 'Guide PDF mariage-visa + 3 modèles de lettres officielles (CCAM, relance ambassade, checklist documents) — offerts dès inscription.';
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';

$page_extra_css = '
.pack-hero{padding-top:64px;background:linear-gradient(160deg,#0d1829 0%,#1a2744 55%,#0d2b1f 100%);min-height:55vh;display:flex;align-items:center;position:relative;overflow:hidden}
.pack-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 60% at 50% 50%,rgba(77,184,144,0.07),transparent 70%)}
.pack-hero-inner{max-width:760px;margin:0 auto;padding:4rem 2rem;text-align:center;position:relative;z-index:1}
.pack-badge{display:inline-block;font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;padding:5px 14px;border-radius:3px;background:rgba(77,184,144,0.15);color:#4db890;border:1px solid rgba(77,184,144,0.25);margin-bottom:1.5rem}
.pack-hero h1{font-family:"DM Serif Display",serif;font-size:clamp(2rem,5vw,3rem);color:#faf8f4;line-height:1.2;margin-bottom:1rem}
.pack-hero h1 em{color:#4db890;font-style:normal}
.pack-hero-sub{font-size:1.05rem;color:rgba(250,248,244,0.55);line-height:1.8;max-width:580px;margin:0 auto 2.5rem}
.pack-section{max-width:860px;margin:0 auto;padding:4rem 2rem}
.pack-items{display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1.5rem;margin:2rem 0}
.pack-item{background:#fff;border:1px solid #e5e1d8;border-radius:10px;padding:1.75rem 1.5rem;display:flex;flex-direction:column;gap:0.75rem}
.pack-item-icon{font-size:2rem;line-height:1}
.pack-item-label{font-size:0.6rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#1b4a35}
.pack-item h3{font-family:"DM Serif Display",serif;font-size:1.05rem;color:#1a1206;margin:0;line-height:1.3}
.pack-item p{font-size:0.88rem;color:#777;line-height:1.6;margin:0;flex:1}
.pack-item .pack-tag{display:inline-block;background:#f0faf5;color:#1b4a35;font-size:0.72rem;font-weight:700;padding:3px 9px;border-radius:3px;margin-top:0.25rem}
.signup-box{background:linear-gradient(135deg,#0d2b1f,#1b4a35);border-radius:12px;padding:3rem 2rem;text-align:center;margin:2rem 0}
.signup-box h2{font-family:"DM Serif Display",serif;font-size:1.8rem;color:#faf8f4;margin-bottom:0.5rem}
.signup-box p{color:rgba(250,248,244,0.55);font-size:0.95rem;margin-bottom:2rem}
.signup-form{display:flex;gap:0.75rem;max-width:480px;margin:0 auto;flex-wrap:wrap;justify-content:center}
.signup-form input[type=email]{flex:1;min-width:220px;padding:0.85rem 1.2rem;border-radius:6px;border:none;font-size:0.95rem;background:#fff}
.signup-form button{padding:0.85rem 1.8rem;background:#4db890;color:#0d2b1f;border:none;border-radius:6px;font-weight:700;font-size:0.95rem;cursor:pointer;white-space:nowrap}
.signup-form button:hover{background:#38a07d}
.signup-rgpd{font-size:0.75rem;color:rgba(250,248,244,0.3);margin-top:1rem}
.pack-proof{background:#f5f3ef;padding:3rem 2rem}
.pack-proof-inner{max-width:860px;margin:0 auto}
.proof-grid{display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:1.5rem;margin-top:1.5rem}
.proof-item{text-align:center;padding:1.5rem 1rem}
.proof-num{font-family:"DM Serif Display",serif;font-size:2.5rem;color:#1b4a35;font-weight:700;display:block}
.proof-label{font-size:0.82rem;color:#888;margin-top:0.25rem}
@media(max-width:640px){.signup-form{flex-direction:column}.signup-form input[type=email],.signup-form button{width:100%}}
';

include 'header.php';
?>

<header class="pack-hero">
  <div class="pack-hero-inner">
    <span class="pack-badge">📦 Pack gratuit</span>
    <h1>Tout pour préparer<br>ton parcours <em>franco-vietnamien</em></h1>
    <p class="pack-hero-sub">Guide PDF + 3 modèles de lettres officielles — offerts dès inscription à la newsletter. Téléchargement immédiat, sans engagement.</p>
    <a href="#inscription" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.9rem 2rem;background:#4db890;color:#0d2b1f;border-radius:6px;font-weight:700;font-size:0.95rem;text-decoration:none">📥 Recevoir le pack gratuitement</a>
    <p style="font-size:0.78rem;color:rgba(250,248,244,0.3);margin-top:1rem">Déjà abonné ? <a href="merci-guide" style="color:#4db890">Accède au pack ici →</a></p>
  </div>
</header>

<!-- CE QUE TU REÇOIS -->
<section class="pack-section">
  <div style="text-align:center;margin-bottom:2rem">
    <div style="font-size:0.62rem;letter-spacing:2px;text-transform:uppercase;font-weight:700;color:#1b4a35;margin-bottom:0.5rem">Contenu du pack</div>
    <h2 style="font-family:'DM Serif Display',serif;font-size:1.8rem;color:#1a1206">4 ressources, 0€</h2>
    <p style="color:#888;font-size:0.9rem;max-width:500px;margin:0.5rem auto 0">Tout ce qu'il me manquait quand j'ai commencé les démarches avec ma femme vietnamienne.</p>
  </div>

  <div class="pack-items">

    <div class="pack-item">
      <span class="pack-item-icon">📘</span>
      <div class="pack-item-label">Guide principal</div>
      <h3>Guide PDF — Mariage & Visa conjoint 2026</h3>
      <p>CCAM, mariage au Vietnam, VLS-TS, titre de séjour, budget et installation — le parcours complet en un PDF de référence.</p>
      <span class="pack-tag">PDF · ~40 pages</span>
    </div>

    <div class="pack-item">
      <span class="pack-item-icon">✉️</span>
      <div class="pack-item-label">Modèle de lettre</div>
      <h3>Lettre de demande CCAM au consulat</h3>
      <p>Modèle complet à compléter et imprimer : objet, formule d'appel, corps de lettre, liste des pièces jointes. Format officiel.</p>
      <span class="pack-tag">Word / Print-to-PDF</span>
    </div>

    <div class="pack-item">
      <span class="pack-item-icon">📬</span>
      <div class="pack-item-label">Modèle de lettre</div>
      <h3>Lettre de relance à l'ambassade</h3>
      <p>Quand le consulat ne répond pas après 2 mois. Modèle formel de relance pour dossier CCAM ou visa VLS-TS en attente.</p>
      <span class="pack-tag">Word / Print-to-PDF</span>
    </div>

    <div class="pack-item">
      <span class="pack-item-icon">✅</span>
      <div class="pack-item-label">Checklist</div>
      <h3>Checklist CCAM — tous les documents</h3>
      <p>Cases à cocher, côté français et vietnamien, apostille, traductions, chronologie recommandée. À imprimer et compléter au fur et à mesure.</p>
      <span class="pack-tag">Print-to-PDF</span>
    </div>

  </div>

  <div style="background:#f0faf5;border-radius:8px;padding:1.25rem 1.5rem;display:flex;gap:1rem;align-items:flex-start;margin-top:1rem">
    <span style="font-size:1.25rem">💡</span>
    <p style="font-size:0.88rem;color:#555;margin:0;line-height:1.6">Ces modèles sont <strong>remplissables dans le navigateur</strong> et enregistrables en PDF via Ctrl+P. Pas besoin de Word ni d'Acrobat.</p>
  </div>
</section>

<!-- POUR QUI -->
<section style="background:#f5f3ef;padding:3rem 2rem">
  <div style="max-width:760px;margin:0 auto;text-align:center">
    <h2 style="font-family:'DM Serif Display',serif;font-size:1.6rem;color:#1a1206;margin-bottom:2rem">Ce pack est pour toi si…</h2>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1rem;text-align:left">
      <div style="background:#fff;border-radius:8px;padding:1.25rem 1.5rem;display:flex;gap:0.75rem;align-items:flex-start">
        <span style="color:#1b4a35;font-weight:700;font-size:1.1rem">✓</span>
        <p style="font-size:0.88rem;color:#555;margin:0;line-height:1.6">Tu es Français(e) marié(e) à un(e) Vietnamien(ne) et tu prépares les démarches CCAM</p>
      </div>
      <div style="background:#fff;border-radius:8px;padding:1.25rem 1.5rem;display:flex;gap:0.75rem;align-items:flex-start">
        <span style="color:#1b4a35;font-weight:700;font-size:1.1rem">✓</span>
        <p style="font-size:0.88rem;color:#555;margin:0;line-height:1.6">Tu attends une réponse du consulat depuis plusieurs semaines sans nouvelles</p>
      </div>
      <div style="background:#fff;border-radius:8px;padding:1.25rem 1.5rem;display:flex;gap:0.75rem;align-items:flex-start">
        <span style="color:#1b4a35;font-weight:700;font-size:1.1rem">✓</span>
        <p style="font-size:0.88rem;color:#555;margin:0;line-height:1.6">Tu veux faire venir ton conjoint(e) en France et tu ne sais pas par où commencer</p>
      </div>
      <div style="background:#fff;border-radius:8px;padding:1.25rem 1.5rem;display:flex;gap:0.75rem;align-items:flex-start">
        <span style="color:#1b4a35;font-weight:700;font-size:1.1rem">✓</span>
        <p style="font-size:0.88rem;color:#555;margin:0;line-height:1.6">Tu veux un point de départ clair — sans chercher pendant des heures sur les forums</p>
      </div>
    </div>
  </div>
</section>

<!-- FORMULAIRE D'INSCRIPTION -->
<section class="pack-section" id="inscription">
  <div class="signup-box">
    <h2>Recevoir le pack maintenant</h2>
    <p>Gratuit · Désabonnement en 1 clic</p>
    <form class="signup-form" id="pack-form" action="<?= SITE_FORMSPREE ?>" method="POST">
      <input type="hidden" name="_subject" value="Pack gratuit — inscription Cap Vietnam">
      <input type="email" name="email" placeholder="Ton adresse email" required>
      <button type="submit" id="pack-btn">📥 Recevoir le pack</button>
    </form>
    <p class="signup-rgpd">En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam" style="color:rgba(255,255,255,0.4)">politique de confidentialité</a>. Pas de spam.</p>
  </div>
</section>
<script>
document.getElementById('pack-form').addEventListener('submit', function(e) {
  e.preventDefault();
  var btn = document.getElementById('pack-btn');
  var go  = function() { window.location.href = '<?= SITE_URL ?>/merci-guide'; };
  btn.textContent = '⏳ Envoi…';
  btn.disabled = true;
  fetch(this.action, {
    method: 'POST',
    body: new FormData(this),
    headers: { 'Accept': 'application/json' }
  }).then(go).catch(go);
});
</script>

<!-- STATS PROOF -->
<div class="pack-proof">
  <div class="pack-proof-inner">
    <h2 style="font-family:'DM Serif Display',serif;font-size:1.4rem;color:#1a1206;text-align:center;margin-bottom:0">Le blog en chiffres</h2>
    <div class="proof-grid">
      <div class="proof-item">
        <span class="proof-num">47</span>
        <span class="proof-label">Articles sur le couple franco-vietnamien</span>
      </div>
      <div class="proof-item">
        <span class="proof-num">2026</span>
        <span class="proof-label">Informations mises à jour régulièrement</span>
      </div>
      <div class="proof-item">
        <span class="proof-num">0€</span>
        <span class="proof-label">Coût du pack et de tous les articles</span>
      </div>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
