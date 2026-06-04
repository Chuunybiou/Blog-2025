<?php
/**
 * Lead magnet component — Checklist Vietnam
 * Usage: include 'lead-magnet.php';
 * Variables optionnelles: $lm_context = 'popup' | 'inline' (default)
 */
$lm_context = $lm_context ?? 'inline';
$lm_id = 'lm-' . ($lm_context === 'popup' ? 'popup' : 'inline');
?>
<div id="<?= $lm_id ?>" class="lead-magnet-box" style="<?= $lm_context === 'popup' ? 'display:none;' : '' ?>background:linear-gradient(135deg,#1c1917 0%,#3d2e00 100%);border-radius:12px;padding:2.5rem;margin:3rem 0;color:#fff;position:relative">
  <?php if ($lm_context === 'popup'): ?>
  <button onclick="document.getElementById('lm-popup').style.display='none';document.cookie='lm_closed=1;max-age=2592000;path=/';"
    style="position:absolute;top:1rem;right:1rem;background:rgba(255,255,255,.15);border:none;color:#fff;width:28px;height:28px;border-radius:50%;cursor:pointer;font-size:1rem;line-height:1">×</button>
  <?php endif; ?>
  <div style="display:flex;align-items:flex-start;gap:1.5rem;flex-wrap:wrap">
    <div style="font-size:3rem;line-height:1;flex-shrink:0">📋</div>
    <div style="flex:1;min-width:240px">
      <div style="font-size:.7rem;letter-spacing:3px;text-transform:uppercase;color:rgba(255,255,255,.5);margin-bottom:.5rem">Guide gratuit</div>
      <h3 style="font-family:'DM Serif Display',serif;font-size:1.35rem;margin-bottom:.5rem;color:#fff">Checklist : les 10 démarches à faire avant de partir vivre au Vietnam</h3>
      <p style="font-size:.9rem;color:rgba(255,255,255,.7);margin-bottom:1.25rem;line-height:1.6">Visa, assurance, banque, SIM, logement — tout ce qu'il ne faut pas oublier, dans le bon ordre.</p>
      <form id="<?= $lm_id ?>-form" action="<?= SITE_URL ?>/mailerlite-subscribe.php" method="POST">
        <div style="display:flex;gap:.75rem;flex-wrap:wrap;margin-bottom:.6rem">
          <input type="email" name="email" placeholder="ton@email.com" required
            style="flex:1;min-width:200px;padding:.7rem 1rem;border:none;border-radius:6px;font-size:.95rem;background:rgba(255,255,255,.12);color:#fff;border:1px solid rgba(255,255,255,.2)">
          <button type="submit"
            style="padding:.7rem 1.5rem;background:#bf4a2a;color:#fff;border:none;border-radius:6px;font-weight:700;cursor:pointer;white-space:nowrap">
            Recevoir le guide →
          </button>
        </div>
        <label style="display:flex;align-items:flex-start;gap:.4rem;cursor:pointer;font-size:.72rem;color:rgba(255,255,255,.35)">
          <input type="checkbox" name="consent" required style="margin-top:2px;flex-shrink:0">
          <span>J'accepte de recevoir ce guide et des emails occasionnels de Cap Vietnam. <a href="<?= $path_prefix ?? '' ?>confidentialite-capvietnam.php" style="color:rgba(255,255,255,.5)">Politique de confidentialité</a>.</span>
        </label>
      </form>
      <div id="<?= $lm_id ?>-success" style="display:none;margin-top:.75rem;padding:.6rem 1rem;background:rgba(27,107,82,.25);border-radius:6px;font-size:.9rem;color:#a8e6cf">
        ✓ Parfait ! Vérifie ta boîte email — le guide arrive dans quelques secondes.
      </div>
    </div>
  </div>
</div>

<?php if ($lm_context === 'popup'): ?>
<script>
(function(){
  if(document.cookie.indexOf('lm_closed=1')!==-1) return;
  var shown=false;
  function showLm(){
    if(shown)return;shown=true;
    var el=document.getElementById('lm-popup');
    if(el){el.style.display='block';el.style.position='fixed';el.style.bottom='1.5rem';el.style.right='1.5rem';el.style.zIndex='9999';el.style.maxWidth='480px';el.style.width='calc(100% - 3rem)';}
  }
  window.addEventListener('scroll',function(){
    if((window.scrollY/(document.body.scrollHeight-window.innerHeight))>=0.5) showLm();
  },{passive:true});
  document.addEventListener('mouseleave',function(e){if(e.clientY<=0)showLm();});
})();
</script>
<?php endif; ?>
<script>
(function(){
  var PDF_URL = '<?= SITE_URL ?>/Checklist-Vietnam-CapVietnam.pdf';
  var formId  = '<?= $lm_id ?>-form';
  var successId = '<?= $lm_id ?>-success';
  var form = document.getElementById(formId);
  if(!form) return;

  function showPdf(withConfirm) {
    form.style.display = 'none';
    var sd = document.getElementById(successId);
    sd.innerHTML = (withConfirm ? '✓ Inscription confirmée ! Vérifie aussi ta boîte email.<br><br>' : 'Voici ton guide :<br><br>') +
      '<a href="' + PDF_URL + '" download="Checklist-Vietnam-CapVietnam.pdf" ' +
      'style="display:inline-block;background:#bf4a2a;color:#fff;padding:.55rem 1.2rem;border-radius:6px;font-weight:700;text-decoration:none;font-size:.95rem;">' +
      '📥 Télécharger la checklist (PDF)</a>';
    sd.style.display = 'block';
    document.cookie = 'lm_closed=1;max-age=2592000;path=/';
    // Déclenche le téléchargement automatique
    var a = document.createElement('a');
    a.href = PDF_URL;
    a.download = 'Checklist-Vietnam-CapVietnam.pdf';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
  }

  form.addEventListener('submit', function(e){
    e.preventDefault();
    var email = form.querySelector('[name="email"]').value;
    var btn = form.querySelector('button[type="submit"]');
    btn.disabled = true;
    btn.textContent = 'Envoi…';
    fetch('<?= SITE_URL ?>/mailerlite-subscribe.php', {
      method: 'POST',
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
      body: 'email=' + encodeURIComponent(email) + '&consent=1'
    })
    .then(function(r){ return r.json(); })
    .then(function(data){ showPdf(data.ok); })
    .catch(function(){ showPdf(false); }); // MailerLite down → PDF quand même
  });
})();
</script>
