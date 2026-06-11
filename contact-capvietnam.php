<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Contact — Cap Vietnam';
$page_description = 'Poser une question sur l\'expatriation au Vietnam, proposer une collaboration ou partager ton témoignage — écris-moi directement.';
$page_canonical   = SITE_URL . '/contact-capvietnam';
$page_og_title    = 'Contact — Cap Vietnam';
$page_og_desc     = 'Une question sur l\'expatriation au Vietnam ? Écris-moi ou rejoins la communauté.';
$page_og_url      = SITE_URL . '/contact-capvietnam';
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';
include 'header.php';
?>

<style>
.contact-page { max-width: 860px; margin: 9rem auto 5rem; padding: 0 2rem; }
.contact-page h1 { font-family: 'DM Serif Display', serif; font-size: clamp(2rem,5vw,3rem); margin-bottom: 0.5rem; }
.contact-page .subtitle { color: var(--muted); font-size: 1.05rem; margin-bottom: 3rem; }
.contact-layout { display: grid; grid-template-columns: 1fr 1.4fr; gap: 3rem; align-items: start; }
.contact-sidebar h2 { font-family: 'DM Serif Display', serif; font-size: 1.3rem; margin-bottom: 1rem; }
.contact-item { display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1.25rem; }
.contact-item-icon { width: 38px; height: 38px; border-radius: 50%; background: var(--warm-bg); display: flex; align-items: center; justify-content: center; font-size: 1rem; flex-shrink: 0; }
.contact-item strong { display: block; font-size: 0.88rem; margin-bottom: 2px; }
.contact-item span, .contact-item a { color: var(--muted); font-size: 0.88rem; text-decoration: none; }
.contact-item a:hover { color: var(--jade); }
.contact-community { margin-top: 2rem; padding-top: 2rem; border-top: 1px solid var(--border); }
.contact-community p { color: var(--muted); font-size: 0.9rem; margin-bottom: 1rem; line-height: 1.6; }
.btn-community { display: flex; align-items: center; gap: 0.5rem; padding: 0.7rem 1.2rem; border-radius: 5px; font-weight: 600; font-size: 0.88rem; text-decoration: none; margin-bottom: 0.6rem; }
.btn-fb { background: #1877f2; color: #fff; }
.btn-discord { background: #5865f2; color: #fff; }
.contact-form-box { background: var(--white); border: 1px solid var(--border); border-radius: var(--radius); padding: 2.5rem; box-shadow: var(--shadow-sm); }
.form-group { margin-bottom: 1.1rem; }
.form-group label { display: block; font-size: 0.78rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; color: var(--muted); margin-bottom: 0.4rem; }
.form-group input, .form-group textarea, .form-group select { width: 100%; padding: 0.8rem 1rem; border: 1px solid var(--border); border-radius: 4px; font-family: inherit; font-size: 0.95rem; background: var(--cream); transition: border-color 0.2s; box-sizing: border-box; }
.form-group input:focus, .form-group textarea:focus, .form-group select:focus { outline: none; border-color: var(--jade); }
.form-group textarea { min-height: 140px; resize: vertical; }
.form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
.form-consent { display: flex; align-items: flex-start; gap: 0.6rem; margin-bottom: 1.5rem; font-size: 0.82rem; color: var(--muted); line-height: 1.5; }
.form-consent input { margin-top: 3px; accent-color: var(--jade); }
.form-consent a { color: var(--jade); }
.form-submit { width: 100%; padding: 1rem; background: var(--jade); color: #fff; border: none; border-radius: 4px; font-size: 1rem; font-weight: 600; font-family: inherit; cursor: pointer; transition: 0.2s; }
.form-submit:hover { background: var(--jade-soft); }
@media (max-width: 700px) {
  .contact-layout { grid-template-columns: 1fr; }
  .form-row { grid-template-columns: 1fr; }
}
</style>

<div class="contact-page">
  <div class="breadcrumb" style="margin-bottom:1.5rem;font-size:0.85rem;color:var(--muted);">
    <a href="blog-capvietnam" style="color:var(--muted);text-decoration:none;">Accueil</a>
    <span style="margin:0 0.5rem;">›</span>
    <span>Contact</span>
  </div>
  <h1>Écris-moi</h1>
  <p class="subtitle">Une question sur l'expatriation, une proposition de collaboration, ou juste dire bonjour — je réponds à tous les messages.</p>

  <div class="contact-layout">
    <div class="contact-sidebar">
      <h2>Me joindre</h2>

      <div class="contact-item">
        <div class="contact-item-icon">✉️</div>
        <div>
          <strong>Email</strong>
          <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-item-icon">📍</div>
        <div>
          <strong>Localisation</strong>
          <span>Hanoï, Vietnam</span>
        </div>
      </div>

      <div class="contact-item">
        <div class="contact-item-icon">⏱</div>
        <div>
          <strong>Délai de réponse</strong>
          <span>Généralement sous 48h</span>
        </div>
      </div>

      <div class="contact-community">
        <p>Pour une question sur l'expatriation, la communauté répond souvent plus vite que moi — et avec plus d'expériences différentes.</p>
        <a class="btn-community btn-fb" href="https://www.facebook.com/groups/vivreauvietnamcouplefrancovietnamiencap/" target="_blank" rel="noopener">💬 Groupe Facebook</a>
        <a class="btn-community btn-discord" href="https://discord.gg/MdDVNb7QZz" target="_blank" rel="noopener">🎮 Discord expats Vietnam</a>
      </div>
    </div>

    <div class="contact-form-box">
      <form action="<?= SITE_FORMSPREE ?>" method="POST">
        <input type="hidden" name="_subject" value="Nouveau message — Cap Vietnam">
        <div class="form-row">
          <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Ton prénom" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="ton@email.com" required>
          </div>
        </div>
        <div class="form-group">
          <label for="sujet">Sujet</label>
          <select id="sujet" name="sujet">
            <option value="question">Question sur l'expatriation</option>
            <option value="collab">Collaboration / Partenariat</option>
            <option value="temoignage">Partager mon témoignage</option>
            <option value="autre">Autre</option>
          </select>
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" placeholder="Écris ton message ici..." required></textarea>
        </div>
        <label class="form-consent">
          <input type="checkbox" name="consent" required>
          <span>J'accepte que mes données soient utilisées pour répondre à ma demande. <a href="confidentialite-capvietnam">Politique de confidentialité</a>.</span>
        </label>
        <button type="submit" class="form-submit">Envoyer →</button>
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>
