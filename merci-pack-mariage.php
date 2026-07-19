<?php
/**
 * Page de remerciement après paiement Stripe du Pack Mariage & Visa 2026.
 * Le webhook (stripe-webhook.php) est la source de vérité pour l'envoi de l'email,
 * mais cette page vérifie aussi directement auprès de Stripe (au cas où le webhook
 * n'aurait pas encore été traité) pour afficher le lien de téléchargement tout de
 * suite, sans attendre l'email.
 */
require_once __DIR__ . '/config/site.php';
require_once __DIR__ . '/_stripe.php';
require_once __DIR__ . '/_pack-purchases.php';

$sessionId = trim($_GET['session_id'] ?? '');
$purchase  = $sessionId ? pack_find_by_session($sessionId) : null;

if (!$purchase && $sessionId) {
    // Le webhook n'a peut-être pas encore été traité — on vérifie directement auprès de Stripe.
    $res = stripe_call("checkout/sessions/$sessionId", [], 'GET');
    if (stripe_ok($res) && ($res['json']['payment_status'] ?? '') === 'paid') {
        $email  = $res['json']['customer_details']['email'] ?? $res['json']['customer_email'] ?? '';
        $packId = $res['json']['metadata']['pack_id'] ?? 'mariage-visa-2026';
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $purchase = pack_grant_access($sessionId, $packId, $email);
            pack_send_confirmation_email($purchase);
        }
    }
}

$page_title       = 'Ton Pack Mariage & Visa est prêt — Cap Vietnam';
$page_description = 'Merci pour ton achat ! Télécharge ton Pack Mariage Franco-Vietnamien & Visa Édition 2026.';
$page_canonical   = SITE_URL . '/merci-pack-mariage';
$page_og_title    = $page_title;
$page_og_desc     = $page_description;
$page_og_url      = $page_canonical;
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';
$page_noindex     = true;
$page_extra_head  = '<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Young+Serif&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap" onload="this.onload=null;this.rel=\'stylesheet\'">'
  . '<noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Young+Serif&family=Instrument+Sans:ital,wght@0,400;0,500;0,600;1,400&family=IBM+Plex+Mono:wght@400;500&display=swap"></noscript>';
$page_extra_css = '
.mp-v2{
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
.mp-v2 a{color:inherit}
.mp-v2 .wrap{max-width:1120px;margin:0 auto;padding:0 24px}
.mp-v2 .wrap-narrow{max-width:640px;margin:0 auto;padding:0 24px}
.mp-v2 .eyebrow{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.14em;text-transform:uppercase;color:var(--shutter);display:inline-flex;align-items:center;gap:.6em}
.mp-v2 .eyebrow::before{content:"";width:26px;height:2px;background:var(--hanoi)}
.mp-v2 h1,.mp-v2 h2{font-family:var(--font-display2);font-weight:400;line-height:1.15}
.mp-v2 .mono{font-family:var(--font-mono2);font-size:.72rem;letter-spacing:.1em;text-transform:uppercase;color:var(--ink-soft2)}
.mp-v2 .btn{display:inline-flex;align-items:center;gap:.5em;font-family:var(--font-body2);font-weight:600;font-size:.95rem;padding:.85em 1.5em;border-radius:999px;text-decoration:none;border:1.5px solid var(--ink2);transition:transform .15s ease,box-shadow .15s ease,background .15s ease;cursor:pointer}
.mp-v2 .btn-primary{background:var(--ink2);color:var(--paper)}
.mp-v2 .btn-primary:hover{background:var(--shutter-deep);border-color:var(--shutter-deep);transform:translateY(-2px);box-shadow:0 8px 20px rgba(35,40,31,.18)}
.mp-v2 .btn-ghost{background:transparent;color:var(--ink2)}
.mp-v2 .btn-ghost:hover{background:var(--paper-deep)}
.mp-v2 .stamp{border:2.5px solid var(--tampon);color:var(--tampon);border-radius:10px;padding:.55em .9em;background:rgba(251,246,236,.9);font-family:var(--font-mono2);font-size:.68rem;font-weight:500;letter-spacing:.16em;text-transform:uppercase;text-align:center;line-height:1.5;box-shadow:0 4px 14px rgba(166,57,43,.18)}
.mp-v2 .stamp b{display:block;font-size:.84rem;font-weight:500}
.mp-v2 .mp-hero{background:linear-gradient(180deg,var(--paper-deep),var(--paper));padding:80px 0 70px;text-align:center}
.mp-v2 .mp-hero h1{font-size:clamp(2.1rem,4.4vw,3rem);margin:1rem 0 .9rem}
.mp-v2 .mp-hero .lede{color:var(--ink-soft2);max-width:34em;margin:0 auto 2rem}
.mp-v2 .mp-card{background:#fff;border:2px dashed var(--hanoi);border-radius:var(--radius2);padding:34px 30px;max-width:520px;margin:0 auto 24px;text-align:left}
.mp-v2 .mp-card h3{font-family:var(--font-display2);font-weight:400;font-size:1.3rem;margin-bottom:.6rem}
.mp-v2 .mp-card p{color:var(--ink-soft2);font-size:.92rem;margin-bottom:1.2rem}
.mp-v2 .mp-card .btn{width:100%;justify-content:center}
.mp-v2 .mp-err{max-width:520px;margin:0 auto;background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);padding:30px;color:var(--ink-soft2);font-size:.95rem}
.mp-v2 .mp-next{display:grid;grid-template-columns:repeat(2,1fr);gap:16px;max-width:640px;margin:40px auto 0}
.mp-v2 .mp-step{background:#fff;border:1px solid var(--line2);border-radius:var(--radius2);padding:22px;text-decoration:none;display:flex;flex-direction:column;gap:.4rem;text-align:left;transition:transform .18s ease,box-shadow .18s ease,border-color .18s ease}
.mp-v2 .mp-step:hover{transform:translateY(-3px);box-shadow:0 12px 26px rgba(35,40,31,.1);border-color:var(--hanoi)}
.mp-v2 .mp-step h4{font-size:1rem;font-weight:600}
.mp-v2 .mp-step p{color:var(--ink-soft2);font-size:.85rem}
@media(max-width:640px){
  .mp-v2 .mp-hero{padding:56px 0 40px}
  .mp-v2 .mp-card{padding:26px 22px}
  .mp-v2 .mp-next{grid-template-columns:1fr}
}
';
include 'header.php';
?>

<div class="mp-v2">
<section class="mp-hero">
  <div class="wrap">
    <?php if ($purchase): ?>
      <div class="stamp" style="transform:rotate(-4deg);display:inline-flex">Paiement confirmé<b>ACCÈS OUVERT</b></div>
      <h1>Merci ! Ton pack est <em style="font-style:italic;color:var(--shutter)">prêt</em>.</h1>
      <p class="lede">Ton lien de téléchargement vient aussi de partir par email à <strong><?= htmlspecialchars($purchase['email']) ?></strong> (vérifie tes spams si tu ne le vois pas dans quelques minutes).</p>
      <div class="mp-card">
        <span class="mono" style="color:var(--tampon)">PDF · 45 PAGES</span>
        <h3>Pack Mariage Franco-Vietnamien &amp; Visa — Édition 2026</h3>
        <p>Feuille de route complète, 8 modèles de lettres officielles, check-list imprimable et accès prioritaire à la communauté CapVietnam.</p>
        <a class="btn btn-primary" href="telecharger-pack?token=<?= urlencode($purchase['token']) ?>">📘 Télécharger mon Pack (PDF) ↓</a>
      </div>
      <p class="mono" style="text-align:center">Garde cette page ou l'email en favori — le lien reste valable, sans limite de téléchargements.</p>
    <?php else: ?>
      <h1>Un instant…</h1>
      <div class="mp-err">
        <p>On n'a pas encore pu confirmer ton paiement à cet instant. Si tu viens de payer, patiente quelques secondes et <a href="?session_id=<?= urlencode($sessionId) ?>" style="color:var(--shutter);font-weight:600">rafraîchis cette page</a> — sinon vérifie ta boîte mail, le lien de téléchargement arrive automatiquement dès que le paiement est confirmé.</p>
        <p style="margin-top:14px">Un souci persistant ? <a href="contact-capvietnam" style="color:var(--shutter);font-weight:600">Écris-nous</a>, on débloquera ton accès manuellement.</p>
      </div>
    <?php endif; ?>

    <div class="mp-next">
      <a class="mp-step" href="par-ou-commencer-couple-franco-vietnamien">
        <h4>🗺️ Le parcours guidé</h4>
        <p>Situe-toi étape par étape, France ou Vietnam.</p>
      </a>
      <a class="mp-step" href="pack-gratuit">
        <h4>📥 Le pack gratuit</h4>
        <p>Guide + 3 modèles de lettres, offerts à l'inscription.</p>
      </a>
    </div>
  </div>
</section>
</div>

<?php include 'footer.php'; ?>
