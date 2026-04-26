<script>
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
