<?php
$page_title       = 'Page introuvable — Cap Vietnam';
$page_description = 'Cette page n\'existe pas ou a été déplacée.';
$page_canonical   = 'https://www.blog-capvietnam.fr/404';
$page_extra_css   = '
body { background: var(--ink); color: var(--cream); min-height: 100vh; display: flex; flex-direction: column; }
nav { background: rgba(28,25,23,0.95); border-bottom: 1px solid rgba(255,255,255,0.06); }
.nav-links a { color: rgba(250,248,244,0.4); }
.error-page { flex:1; display:flex; align-items:center; justify-content:center; text-align:center; padding:2rem; position:relative; overflow:hidden; }
.error-page::before { content:\'\'; position:absolute; inset:0; background:radial-gradient(ellipse 50% 50% at 50% 50%,rgba(191,74,42,0.06),transparent 70%); }
.error-content { position:relative; z-index:1; max-width:600px; }
.error-emoji { font-size:5rem; margin-bottom:1.5rem; animation:float 3s ease-in-out infinite; }
@keyframes float { 0%,100%{transform:translateY(0)} 50%{transform:translateY(-15px)} }
.error-code { font-family:\'DM Serif Display\',serif; font-size:8rem; line-height:1; color:var(--terracotta); margin-bottom:0.5rem; opacity:0.15; position:absolute; top:-1rem; left:50%; transform:translateX(-50%); font-weight:700; }
.error-title { font-family:\'DM Serif Display\',serif; font-size:2.2rem; margin-bottom:1rem; position:relative; }
.error-desc { color:rgba(250,248,244,0.45); font-size:1.05rem; margin-bottom:2.5rem; line-height:1.8; }
.error-suggestions { display:flex; flex-direction:column; gap:0.75rem; margin-bottom:2.5rem; text-align:left; max-width:380px; margin-left:auto; margin-right:auto; }
.suggestion { display:flex; align-items:center; gap:0.75rem; padding:0.8rem 1.2rem; background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.06); border-radius:8px; text-decoration:none; color:var(--cream); transition:all 0.2s; font-size:0.92rem; }
.suggestion:hover { background:rgba(255,255,255,0.08); border-color:rgba(255,255,255,0.12); transform:translateX(4px); }
.suggestion-icon { font-size:1.2rem; width:28px; text-align:center; }
.suggestion-text { flex:1; }
.suggestion-arrow { color:rgba(250,248,244,0.2); transition:color 0.2s; }
.suggestion:hover .suggestion-arrow { color:var(--terracotta-soft); }
.error-home { display:inline-flex; align-items:center; gap:8px; padding:0.9rem 2.2rem; background:var(--terracotta); color:#fff; text-decoration:none; font-weight:600; font-size:0.9rem; border-radius:4px; transition:all 0.2s; }
.error-home:hover { background:var(--terracotta-soft); transform:translateY(-2px); }
.error-fun { margin-top:3rem; color:rgba(250,248,244,0.2); font-size:0.85rem; font-style:italic; }
@media(max-width:640px) { .error-code{font-size:5rem} .error-title{font-size:1.6rem} .error-emoji{font-size:3.5rem} }
';
include 'header.php';
?>

<main class="error-page">
  <div class="error-content">
    <div class="error-code">404</div>
    <div class="error-emoji">🛵💨</div>
    <h1 class="error-title">Oups, cette page s'est perdue dans les ruelles de Hanoï</h1>
    <p class="error-desc">Comme un scooter dans le vieux quartier, tu as pris un mauvais virage. Mais pas de panique — voici quelques pistes pour retrouver ton chemin.</p>

    <div class="error-suggestions">
      <a class="suggestion" href="blog-capvietnam.php">
        <span class="suggestion-icon">🏠</span>
        <span class="suggestion-text">Retourner à l'accueil</span>
        <span class="suggestion-arrow">→</span>
      </a>
      <a class="suggestion" href="articles-capvietnam.php">
        <span class="suggestion-icon">📋</span>
        <span class="suggestion-text">Voir tous les articles</span>
        <span class="suggestion-arrow">→</span>
      </a>
      <a class="suggestion" href="photos-videos-capvietnam.php">
        <span class="suggestion-icon">📸</span>
        <span class="suggestion-text">Photos &amp; Vidéos</span>
        <span class="suggestion-arrow">→</span>
      </a>
      <a class="suggestion" href="apprendre-francais-capvietnam.php">
        <span class="suggestion-icon">🇫🇷</span>
        <span class="suggestion-text">Học tiếng Pháp — Apprendre le français</span>
        <span class="suggestion-arrow">→</span>
      </a>
    </div>

    <a class="error-home" href="blog-capvietnam.php">← Revenir à l'accueil</a>

    <p class="error-fun">Fun fact : il y a environ 6 millions de scooters à Hanoï. Et aucun ne respecte cette page.</p>
  </div>
</main>

<?php include 'footer.php'; ?>
