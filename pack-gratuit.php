<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Pack gratuit — Guide + 3 modèles de lettres pour couple franco-vietnamien';
$page_description = 'Télécharge gratuitement : guide PDF mariage & visa, lettre CCAM, lettre relance ambassade et checklist CCAM. Offert à l\'inscription à la newsletter Cap Vietnam.';
$page_canonical   = SITE_URL . '/pack-gratuit';
$page_og_title    = 'Pack gratuit Cap Vietnam — Guide + 3 modèles de lettres';
$page_og_desc     = 'Guide PDF mariage-visa + 3 modèles de lettres officielles (CCAM, relance ambassade, checklist documents) — offerts dès inscription.';
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';

// Nombre réel d'articles publiés (même logique que blog-capvietnam.php)
$_art_data      = json_decode(file_get_contents(__DIR__ . '/data/articles.json'), true);
$_art_count     = count(array_filter($_art_data['articles'], fn($a) => ($a['published'] ?? true) !== false));

$page_extra_head = '<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Young+Serif&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap" onload="this.onload=null;this.rel=\'stylesheet\'">'
  . '<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Young+Serif&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap"></noscript>';
$page_extra_css = '
/* ═══════════ PACK V2 — carnet papier, scopé pour ne pas toucher le reste du site ═══════════ */
.pack-v2{
  --paper:#FBF6EC;
  --paper-deep:#F3EBDB;
  --ink2:#23281F;
  --ink-soft2:#5A5F53;
  --hanoi:#DE9E28;
  --hanoi-soft:#F6E3B8;
  --shutter:#2E5641;
  --shutter-deep:#1F3D2E;
  --tampon:#A6392B;
  --line2:#E2D8C2;
  --radius2:14px;
  --font-display2:\'Young Serif\',Georgia,serif;
  --font-body2:\'Instrument Sans\',system-ui,sans-serif;
  --font-mono2:\'IBM Plex Mono\',ui-monospace,monospace;
  font-family:var(--font-body2);
  background:var(--paper);
  color:var(--ink2);
  line-height:1.65;
  font-size:17px;
  -webkit-font-smoothing:antialiased;
}
.pack-v2 img{max-width:100%;display:block}
.pack-v2 a{color:inherit}
.pack-v2 .wrap{max-width:1120px;margin:0 auto;padding:0 24px}
.pack-v2 .eyebrow{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--shutter);display:inline-flex;align-items:center;gap:.6em}
.pack-v2 .eyebrow::before{content:"";width:26px;height:2px;background:var(--hanoi)}
.pack-v2 .eyebrow.gold{color:var(--hanoi)}
.pack-v2 .eyebrow.gold::before{background:var(--hanoi)}
.pack-v2 .eyebrow.light{color:var(--hanoi)}
.pack-v2 .eyebrow.light::before{background:var(--hanoi)}
.pack-v2 h1,.pack-v2 h2,.pack-v2 h3,.pack-v2 h4{font-family:var(--font-display2);font-weight:400;line-height:1.15}
.pack-v2 h2{font-size:clamp(1.7rem,3.4vw,2.3rem);margin:.5rem 0 .9rem}
.pack-v2 .section{padding:80px 0;max-width:none;margin:0}
.pack-v2 .section-head{max-width:640px;margin-bottom:40px}
.pack-v2 .section-head p{color:var(--ink-soft2)}
.pack-v2 .mono{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.1em;text-transform:uppercase;color:var(--ink-soft2)}

.pack-v2 .btn{display:inline-flex;align-items:center;gap:.5em;font-family:var(--font-body2);font-weight:600;font-size:.95rem;padding:.85em 1.5em;border-radius:999px;text-decoration:none;border:1.5px solid var(--ink2);transition:transform .15s ease,box-shadow .15s ease,background .15s ease;cursor:pointer}
.pack-v2 .btn-ghost{background:transparent;color:var(--ink2)}
.pack-v2 .btn-ghost:hover{background:var(--paper-deep)}
.pack-v2 .btn-ghost.light{border-color:rgba(251,246,236,.4);color:var(--paper)}
.pack-v2 .btn-ghost.light:hover{background:rgba(251,246,236,.14)}
.pack-v2 .btn-hanoi{background:var(--hanoi);border-color:var(--hanoi);color:var(--ink2)}
.pack-v2 .btn-hanoi:hover{transform:translateY(-2px);box-shadow:0 8px 20px rgba(222,158,40,.35)}
.pack-v2 .btn-hanoi[disabled]{opacity:.7;cursor:default;transform:none;box-shadow:none}

.pack-v2 .stamp{border:2.5px solid var(--tampon);color:var(--tampon);border-radius:10px;padding:.55em .9em;background:rgba(251,246,236,.9);font-family:var(--font-mono2);font-size:.68rem;font-weight:500;letter-spacing:.16em;text-transform:uppercase;text-align:center;line-height:1.5;box-shadow:0 4px 14px rgba(166,57,43,.18)}
.pack-v2 .stamp b{display:block;font-size:.84rem;font-weight:500}

/* --- hero plein écran --- */
.pack-v2 .hero-full{position:relative;min-height:64vh;display:flex;align-items:flex-end;overflow:hidden}
.pack-v2 .hero-bg{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center 38%}
.pack-v2 .hero-shade{position:absolute;inset:0;background:linear-gradient(180deg,rgba(28,32,26,.5) 0%,rgba(28,32,26,.3) 40%,rgba(28,32,26,.82) 100%)}
.pack-v2 .hero-inner{position:relative;padding-block:70px 64px;max-width:1120px}
.pack-v2 .hero-full h1{font-size:clamp(2.1rem,4.6vw,3.4rem);color:#fff;margin:.6rem 0 1rem;max-width:15em;text-shadow:0 2px 24px rgba(28,32,26,.45)}
.pack-v2 .hero-full h1 em{font-style:italic;color:var(--hanoi)}
.pack-v2 .hero-full .lede{font-size:1.08rem;color:rgba(251,246,236,.92);max-width:38em;margin-bottom:1.4rem;text-shadow:0 1px 12px rgba(28,32,26,.5)}
.pack-v2 .hero-ctas{display:flex;gap:14px;flex-wrap:wrap;align-items:center}
.pack-v2 .hero-ctas p{color:rgba(251,246,236,.75);font-size:.85rem}
.pack-v2 .hero-ctas p a{color:var(--hanoi);text-decoration:underline}
.pack-v2 .hero-stamp{position:absolute;top:96px;right:5%;transform:rotate(8deg);z-index:2}
.pack-v2 .hero-caption{position:absolute;bottom:14px;right:20px;color:rgba(251,246,236,.55);font-size:.6rem;z-index:2}

/* --- comment ça marche --- */
.pack-v2 .proofbar{background:var(--shutter-deep);color:var(--paper)}
.pack-v2 .proofbar-inner{display:flex;justify-content:space-between;gap:26px;padding-block:24px;flex-wrap:wrap}
.pack-v2 .proofbar strong{font-family:var(--font-display2);font-size:1.5rem;display:block;color:var(--hanoi)}
.pack-v2 .proofbar span{font-family:var(--font-mono2);font-size:.68rem;letter-spacing:.1em;text-transform:uppercase;color:rgba(251,246,236,.7)}
.pack-v2 .steps-inner{justify-content:center;gap:18px;align-items:center}
.pack-v2 .steps-inner > div:not(.step-arrow){display:flex;align-items:center;gap:14px}
.pack-v2 .steps-inner strong{font-size:1.3rem;border:2px solid var(--hanoi);border-radius:50%;width:44px;height:44px;display:grid;place-items:center;flex:none}
.pack-v2 .steps-inner span{max-width:13em;font-family:var(--font-body2);font-size:.9rem;color:rgba(251,246,236,.85);text-transform:none;letter-spacing:0}
.pack-v2 .step-arrow{color:var(--hanoi);font-size:1.3rem}

/* --- contenu du pack --- */
.pack-v2 .pk-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px}
.pack-v2 .pk-card{background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);padding:28px 26px;display:flex;flex-direction:column;gap:.6rem;position:relative;transition:transform .18s ease,box-shadow .18s ease,border-color .18s ease}
.pack-v2 .pk-card:hover{transform:translateY(-4px);box-shadow:0 14px 30px rgba(35,40,31,.1);border-color:var(--hanoi)}
.pack-v2 .pk-card.is-main{grid-column:span 3;flex-direction:row;align-items:center;gap:28px;background:var(--hanoi-soft);border:2px dashed var(--hanoi)}
.pack-v2 .pk-card.is-main h3{font-size:1.35rem;flex:none;max-width:12em}
.pack-v2 .pk-card.is-main p{flex:1}
.pack-v2 .pk-tag{font-family:var(--font-mono2);font-size:.64rem;letter-spacing:.14em;text-transform:uppercase;color:var(--tampon);border:1px solid var(--tampon);border-radius:6px;padding:.3em .7em;width:max-content}
.pack-v2 .pk-card h3{font-size:1.12rem;line-height:1.3}
.pack-v2 .pk-card p{color:var(--ink-soft2);font-size:.92rem;flex:1}
.pack-v2 .pk-format{font-size:.64rem!important;color:var(--shutter)!important;border-top:2px dashed var(--line2);padding-top:12px}
.pack-v2 .pk-tip{margin-top:22px;border:1px dashed var(--tampon);border-radius:var(--radius2);background:#fff;padding:18px 24px;display:flex;gap:20px;align-items:baseline;flex-wrap:wrap}
.pack-v2 .pk-tip p{color:var(--ink-soft2);margin:0}

/* --- pour qui --- */
.pack-v2 .alt-band{background:var(--paper-deep);border-block:1px solid var(--line2)}
.pack-v2 .pk-for-grid{display:grid;grid-template-columns:.8fr 1.2fr;gap:52px;align-items:center}
.pack-v2 .pk-for{list-style:none;border-top:2px dashed var(--line2)}
.pack-v2 .pk-for li{border-bottom:2px dashed var(--line2);padding:.95em 4px .95em 38px;position:relative;font-weight:500}
.pack-v2 .pk-for li::before{content:"✓";position:absolute;left:4px;top:.85em;width:24px;height:24px;border-radius:50%;background:var(--shutter);color:var(--paper);display:grid;place-items:center;font-size:.8rem}

/* --- inscription --- */
.pack-v2 .pack{background:var(--shutter-deep);color:var(--paper);border-radius:calc(var(--radius2) + 8px);padding:56px 52px;position:relative;overflow:hidden}
.pack-v2 .pack::after{content:"CAP VIETNAM · DOSSIER COMPLET · CAP VIETNAM · DOSSIER COMPLET · ";position:absolute;bottom:14px;left:0;white-space:nowrap;font-family:var(--font-mono2);font-size:.66rem;letter-spacing:.3em;color:rgba(251,246,236,.14)}
.pack-v2 .pack-grid{display:grid;grid-template-columns:1.1fr .9fr;gap:46px;align-items:center;position:relative}
.pack-v2 .pack h2{color:var(--paper)}
.pack-v2 .pack ul{list-style:none;margin:1.1rem 0 0;display:grid;gap:.7rem}
.pack-v2 .pack li{display:flex;gap:.7em;font-size:.95rem;color:rgba(251,246,236,.88)}
.pack-v2 .pack li::before{content:"✓";color:var(--hanoi);font-weight:700}
.pack-v2 .pack-form{background:rgba(251,246,236,.06);border:1px solid rgba(251,246,236,.2);border-radius:var(--radius2);padding:30px}
.pack-v2 .pack-form input{width:100%;padding:.9em 1.1em;border-radius:10px;border:1px solid rgba(251,246,236,.3);background:rgba(251,246,236,.95);font-family:var(--font-body2);font-size:1rem;margin-bottom:14px}
.pack-v2 .pack-form .btn{width:100%;justify-content:center}
.pack-v2 .pack-form small{display:block;margin-top:12px;font-size:.78rem;color:rgba(251,246,236,.6);text-align:center}
.pack-v2 .pack-form small a{color:rgba(251,246,236,.8)}

@media(max-width:960px){
  .pack-v2 .hero-full{min-height:auto;padding-top:20px}
  .pack-v2 .pk-grid{grid-template-columns:1fr 1fr}
  .pack-v2 .pk-card.is-main{grid-column:span 2;flex-direction:column;align-items:flex-start;gap:.6rem}
  .pack-v2 .pk-card.is-main h3{max-width:none}
  .pack-v2 .pk-for-grid{grid-template-columns:1fr;gap:28px}
  .pack-v2 .steps-inner{justify-content:flex-start}
  .pack-v2 .step-arrow{display:none}
  .pack-v2 .pack-grid{grid-template-columns:1fr;gap:32px}
}
@media(max-width:640px){
  .pack-v2 .section{padding:60px 0}
  .pack-v2 .pk-grid{grid-template-columns:1fr}
  .pack-v2 .pk-card.is-main{grid-column:span 1}
  .pack-v2 .pack{padding:38px 24px}
}
';
include 'header.php';
?>

<div class="pack-v2">

<!-- ═══════ HERO : le dossier ═══════ -->
<section class="hero-full">
  <img class="hero-bg" src="assets/img/documents-ccam-mariage-etranger.jpg" alt="" fetchpriority="high">
  <div class="hero-shade" aria-hidden="true"></div>
  <div class="stamp big hero-stamp">Dossier complet<b>4 RESSOURCES · 0 €</b>Téléchargement immédiat</div>
  <div class="wrap hero-inner">
    <span class="eyebrow light">Pack gratuit</span>
    <h1>Tout pour préparer ton parcours <em>franco-vietnamien</em></h1>
    <p class="lede">Guide PDF + 3 modèles de lettres officielles — offerts dès inscription à la newsletter. Téléchargement immédiat, sans engagement.</p>
    <div class="hero-ctas">
      <a class="btn btn-hanoi" href="#inscription">Recevoir le pack gratuitement →</a>
      <p>Déjà abonné ? <a href="merci-guide">Accède au pack →</a></p>
    </div>
  </div>
  <span class="hero-caption mono">LE DOSSIER CCAM — PHOTO DU BLOG</span>
</section>

<!-- ═══════ COMMENT ÇA MARCHE ═══════ -->
<div class="proofbar">
  <div class="wrap proofbar-inner steps-inner">
    <div><strong>1</strong><span>Tu t'inscris avec ton email</span></div>
    <div class="step-arrow" aria-hidden="true">→</div>
    <div><strong>2</strong><span>Accès immédiat au pack</span></div>
    <div class="step-arrow" aria-hidden="true">→</div>
    <div><strong>3</strong><span>Tu télécharges les 4 ressources</span></div>
  </div>
</div>

<!-- ═══════ CONTENU DU PACK ═══════ -->
<section class="section" id="contenu">
  <div class="wrap">
    <div class="section-head">
      <span class="eyebrow">Contenu du pack</span>
      <h2>4 ressources, 0 €</h2>
      <p>Tout ce qu'il me manquait quand j'ai commencé les démarches avec ma femme vietnamienne.</p>
    </div>
    <div class="pk-grid">
      <div class="pk-card is-main">
        <span class="pk-tag">Guide principal</span>
        <h3>Guide PDF — Mariage &amp; Visa conjoint 2026</h3>
        <p>CCAM, mariage au Vietnam, VLS-TS, titre de séjour, budget et installation — le parcours complet en un PDF de référence.</p>
        <span class="pk-format mono">PDF · ~40 PAGES</span>
      </div>
      <div class="pk-card">
        <span class="pk-tag">Modèle de lettre</span>
        <h3>Lettre de demande CCAM au consulat</h3>
        <p>Modèle complet à compléter et imprimer : objet, formule d'appel, corps de lettre, liste des pièces jointes. Format officiel.</p>
        <span class="pk-format mono">WORD / PRINT-TO-PDF</span>
      </div>
      <div class="pk-card">
        <span class="pk-tag">Modèle de lettre</span>
        <h3>Lettre de relance à l'ambassade</h3>
        <p>Quand le consulat ne répond pas après 2 mois. Modèle formel de relance pour dossier CCAM ou visa VLS-TS en attente.</p>
        <span class="pk-format mono">WORD / PRINT-TO-PDF</span>
      </div>
      <div class="pk-card">
        <span class="pk-tag">Checklist</span>
        <h3>Checklist CCAM — tous les documents</h3>
        <p>Cases à cocher, côté français et vietnamien, apostille, traductions, chronologie recommandée. À imprimer et compléter au fur et à mesure.</p>
        <span class="pk-format mono">PRINT-TO-PDF</span>
      </div>
    </div>
    <div class="pk-tip">
      <span class="mono" style="color:var(--tampon)">BON À SAVOIR</span>
      <p>Ces modèles sont <strong>remplissables dans le navigateur</strong> et enregistrables en PDF via Ctrl+P. Pas besoin de Word ni d'Acrobat.</p>
    </div>
  </div>
</section>

<!-- ═══════ POUR QUI ═══════ -->
<section class="section alt-band" style="padding-block:64px">
  <div class="wrap pk-for-grid">
    <div class="section-head" style="margin-bottom:0">
      <span class="eyebrow">Avant de t'inscrire</span>
      <h2>Ce pack est pour toi si…</h2>
    </div>
    <ul class="pk-for">
      <li>Tu es Français(e) marié(e) à un(e) Vietnamien(ne) et tu prépares les démarches CCAM</li>
      <li>Tu attends une réponse du consulat depuis plusieurs semaines sans nouvelles</li>
      <li>Tu veux faire venir ton conjoint(e) en France et tu ne sais pas par où commencer</li>
      <li>Tu veux un point de départ clair — sans chercher pendant des heures sur les forums</li>
    </ul>
  </div>
</section>

<!-- ═══════ INSCRIPTION ═══════ -->
<section class="section" id="inscription">
  <div class="wrap">
    <div class="pack">
      <div class="pack-grid">
        <div>
          <span class="eyebrow gold">Recevoir le pack maintenant</span>
          <h2>Gratuit · Accès immédiat · Désabonnement en 1 clic</h2>
          <ul>
            <li><strong>Guide PDF Mariage &amp; Visa conjoint 2026</strong> — ~40 pages</li>
            <li><strong>Lettre de demande CCAM</strong> — format officiel</li>
            <li><strong>Lettre de relance ambassade</strong> — après 2 mois sans réponse</li>
            <li><strong>Checklist CCAM</strong> — cases à cocher, chronologie incluse</li>
          </ul>
          <p style="margin-top:14px;font-size:.85rem"><a href="merci-guide" style="color:rgba(251,246,236,.75)">Déjà abonné ? Accède au pack ici →</a></p>
        </div>
        <form class="pack-form" id="pack-form" action="<?= SITE_FORMSPREE ?>" method="POST">
          <input type="hidden" name="_subject" value="Pack gratuit — inscription Cap Vietnam">
          <label for="email" class="mono" style="display:block;margin-bottom:.6rem;color:rgba(251,246,236,.7)">Ton adresse email</label>
          <input id="email" name="email" type="email" required placeholder="prenom@exemple.fr" autocomplete="email">
          <button class="btn btn-hanoi" type="submit" id="pack-btn">📥 Recevoir le pack →</button>
          <small>En t'inscrivant, tu acceptes la <a href="confidentialite-capvietnam">politique de confidentialité</a>. Pas de spam.</small>
        </form>
      </div>
    </div>
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

<!-- ═══════ LE BLOG EN CHIFFRES ═══════ -->
<div class="proofbar" style="margin-bottom:80px">
  <div class="wrap proofbar-inner">
    <div><strong><?= $_art_count ?></strong><span>articles sur le couple franco-vietnamien</span></div>
    <div><strong>2026</strong><span>informations mises à jour régulièrement</span></div>
    <div><strong>0 €</strong><span>coût du pack et de tous les articles</span></div>
  </div>
</div>

</div><!-- /.pack-v2 -->
<!-- Note : la bannière ebook n'est pas dupliquée ici — footer.php en affiche déjà une, juste avant le footer. -->

<?php include 'footer.php'; ?>
