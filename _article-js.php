<script>
function _fallbackCopy(text, cb) {
  const ta = document.createElement('textarea');
  ta.value = text;
  ta.style.position = 'fixed';
  ta.style.left = '-9999px';
  document.body.appendChild(ta);
  ta.select();
  try { document.execCommand('copy'); cb(); } catch (e) {}
  document.body.removeChild(ta);
}
document.querySelectorAll('.share-copy').forEach(btn => {
  btn.addEventListener('click', function(e) {
    e.preventDefault();
    const url = location.href;
    const showCopied = () => {
      btn.textContent = '✓';
      setTimeout(() => { btn.textContent = '🔗'; }, 1500);
    };
    if (navigator.clipboard && navigator.clipboard.writeText) {
      navigator.clipboard.writeText(url).then(showCopied).catch(() => _fallbackCopy(url, showCopied));
    } else {
      _fallbackCopy(url, showCopied);
    }
  });
});
document.querySelectorAll('.article-content table').forEach(t => {
  // .comparison-table seul ne gère pas le débordement horizontal (seul .table-wrapper
  // le fait) — donc on l'enveloppe aussi, comme n'importe quelle autre table.
  if (!t.closest('.table-wrapper') && !t.closest('.table-wrap')) {
    const w = document.createElement('div');
    w.className = 'table-wrapper';
    t.parentNode.insertBefore(w, t);
    w.appendChild(t);
  }
});
window.addEventListener('scroll', () => {
  const article = document.querySelector('.article-content');
  if (article) {
    const rect = article.getBoundingClientRect();
    const total = article.scrollHeight - window.innerHeight;
    const scrolled = Math.max(0, -rect.top);
    document.getElementById('progressBar').style.width = Math.min(100, (scrolled/total)*100) + '%';
  }
});
const _sections = document.querySelectorAll('.article-content h2[id]');
window.addEventListener('scroll', () => {
  let current = '';
  _sections.forEach(s => { if(window.scrollY >= s.offsetTop - 120) current = s.id; });
  document.querySelectorAll('.toc-list a').forEach(a => {
    a.classList.toggle('active', a.getAttribute('href') === '#' + current);
  });
});
const _obs = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting){e.target.style.opacity='1';e.target.style.transform='translateY(0)';}});
},{threshold:0.1});
document.querySelectorAll('.related-card,.author-box,.comments-section,.cta-newsletter,.article-nav-item').forEach(el => {
  el.style.opacity='0';el.style.transform='translateY(25px)';el.style.transition='opacity 0.5s, transform 0.5s';
  _obs.observe(el);
});
</script>
<?php $lm_context = 'popup'; include __DIR__ . '/lead-magnet.php'; ?>
