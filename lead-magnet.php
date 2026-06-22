<?php
/**
 * Lead magnet component — Pack gratuit Cap Vietnam
 * Usage: include 'lead-magnet.php';
 * Variables optionnelles: $lm_context = 'popup' | 'inline' (default)
 */
$lm_context = $lm_context ?? 'inline';
$lm_id = 'lm-' . ($lm_context === 'popup' ? 'popup' : 'inline');
?>
<div id="<?= $lm_id ?>" class="lead-magnet-box" style="<?= $lm_context === 'popup' ? 'display:none;' : '' ?>background:linear-gradient(135deg,#0d2b1f 0%,#1b4a35 100%);border-radius:12px;padding:2.5rem;margin:3rem 0;color:#fff;position:relative">
  <?php if ($lm_context === 'popup'): ?>
  <button onclick="document.getElementById('lm-popup').style.display='none';document.cookie='lm_closed=1;max-age=2592000;path=/';"
    style="position:absolute;top:1rem;right:1rem;background:rgba(255,255,255,.15);border:none;color:#fff;width:28px;height:28px;border-radius:50%;cursor:pointer;font-size:1rem;line-height:1">×</button>
  <?php endif; ?>
  <div style="display:flex;align-items:flex-start;gap:1.5rem;flex-wrap:wrap">
    <div style="font-size:2.5rem;line-height:1;flex-shrink:0">📦</div>
    <div style="flex:1;min-width:240px">
      <div style="font-size:.7rem;letter-spacing:3px;text-transform:uppercase;color:rgba(255,255,255,.5);margin-bottom:.5rem">Pack gratuit</div>
      <h3 style="font-family:'DM Serif Display',serif;font-size:1.35rem;margin-bottom:.5rem;color:#fff">4 ressources offertes dès l'inscription</h3>
      <div style="display:grid;grid-template-columns:1fr 1fr;gap:0.4rem;margin-bottom:1.25rem">
        <div style="font-size:.8rem;color:rgba(255,255,255,.65);display:flex;align-items:center;gap:.4rem"><span>📘</span> Guide PDF Mariage & Visa</div>
        <div style="font-size:.8rem;color:rgba(255,255,255,.65);display:flex;align-items:center;gap:.4rem"><span>✉️</span> Lettre CCAM au consulat</div>
        <div style="font-size:.8rem;color:rgba(255,255,255,.65);display:flex;align-items:center;gap:.4rem"><span>📬</span> Lettre relance ambassade</div>
        <div style="font-size:.8rem;color:rgba(255,255,255,.65);display:flex;align-items:center;gap:.4rem"><span>✅</span> Checklist CCAM complète</div>
      </div>
      <form id="<?= $lm_id ?>-form" action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_next" value="<?= SITE_URL ?>/merci-guide">
        <input type="hidden" name="_subject" value="Pack gratuit — inscription Cap Vietnam">
        <div style="display:flex;gap:.75rem;flex-wrap:wrap;margin-bottom:.6rem">
          <input type="email" name="email" placeholder="ton@email.com" required
            style="flex:1;min-width:200px;padding:.7rem 1rem;border:none;border-radius:6px;font-size:.95rem;background:rgba(255,255,255,.12);color:#fff;border:1px solid rgba(255,255,255,.2)">
          <button type="submit"
            style="padding:.7rem 1.5rem;background:#4db890;color:#0d2b1f;border:none;border-radius:6px;font-weight:700;cursor:pointer;white-space:nowrap">
            📥 Recevoir le pack
          </button>
        </div>
        <label style="display:flex;align-items:flex-start;gap:.4rem;cursor:pointer;font-size:.72rem;color:rgba(255,255,255,.35)">
          <input type="checkbox" name="consent" required style="margin-top:2px;flex-shrink:0">
          <span>J'accepte de recevoir ce pack et des emails occasionnels de Cap Vietnam. <a href="<?= $path_prefix ?? '' ?>confidentialite-capvietnam" style="color:rgba(255,255,255,.5)">Politique de confidentialité</a>. — <a href="<?= $path_prefix ?? '' ?>pack-gratuit" style="color:#4db890">voir le pack →</a></span>
        </label>
      </form>
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
