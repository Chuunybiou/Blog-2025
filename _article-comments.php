<?php
// ── Ko-fi CTA ─────────────────────────────────────────────────────────────────
?>
<div class="kofi-article-cta">
  <span class="kofi-icon">☕</span>
  <div>
    <strong>Cet article t'a été utile ?</strong>
    <p>Si les infos t'ont aidé à préparer ton projet Vietnam, un café Ko-fi c'est toujours apprécié — et ça prend 30 secondes.</p>
  </div>
  <a class="kofi-btn" href="go.php?id=kofi" target="_blank" rel="noopener">Offrir un café ☕</a>
</div>

<?php
// ── Load stored comments ───────────────────────────────────────────────────────
$_article_slug_raw = isset($page_canonical) ? str_replace(SITE_URL . '/', '', $page_canonical) : '';
$_safe_slug        = str_replace('/', '_', $_article_slug_raw);
$_comments_file    = __DIR__ . '/data/comments/' . $_safe_slug . '.json';
$_stored_comments  = [];
if ($_safe_slug && file_exists($_comments_file)) {
    $_loaded = json_decode(file_get_contents($_comments_file), true);
    if (is_array($_loaded)) $_stored_comments = $_loaded;
}

// ── Flash message from redirect ────────────────────────────────────────────────
$_comment_status = $_GET['comment'] ?? '';
?>

<?php include __DIR__ . '/_community-cta.php'; ?>

<div class="article-layout" style="padding-top:0;padding-bottom:0">
<div></div><!-- TOC column placeholder -->
<section class="comments-section" id="comments">

  <h3>Commentaires<?php if (count($_stored_comments) > 0): ?> <span class="comments-count">(<?= count($_stored_comments) ?>)</span><?php endif; ?></h3>

  <?php if ($_comment_status === 'ok'): ?>
    <div class="comment-flash comment-flash--ok">✓ Commentaire publié, merci !</div>
  <?php elseif ($_comment_status === 'error'): ?>
    <div class="comment-flash comment-flash--error">Remplis les champs nom et message (5 caractères minimum).</div>
  <?php elseif ($_comment_status === 'rate'): ?>
    <div class="comment-flash comment-flash--error">Tu as déjà posté un commentaire sur cet article récemment. Réessaie dans une heure.</div>
  <?php endif; ?>

  <?php if (!empty($_stored_comments)): ?>
    <div class="comments-list">
      <?php foreach (array_reverse($_stored_comments) as $_c): ?>
        <div class="comment-item">
          <div class="comment-meta">
            <span class="comment-author"><?= htmlspecialchars($_c['name'] ?? 'Anonyme') ?></span>
            <span class="comment-date"><?= htmlspecialchars($_c['date'] ?? '') ?></span>
          </div>
          <p class="comment-body"><?= nl2br(htmlspecialchars($_c['message'] ?? '')) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <p class="comments-empty">Sois le premier à réagir à cet article.</p>
  <?php endif; ?>

  <h4 style="margin-top:2rem">Laisser un commentaire</h4>
  <p style="font-size:0.9rem;color:var(--muted)">Ton email n'est pas publié. Les commentaires sont affichés ici directement.</p>

  <form action="comments.php" method="POST">
    <input type="hidden" name="article_slug" value="<?= htmlspecialchars($_article_slug_raw) ?>">
    <!-- Honeypot — hidden from humans -->
    <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
    <div class="comment-form-row">
      <input class="comment-input" type="text" name="name" placeholder="Ton prénom *" maxlength="60" required>
    </div>
    <textarea class="comment-input" name="message" placeholder="Ton commentaire ou ta question… *" maxlength="2000" required></textarea>
    <div class="comment-consent">
      <input type="checkbox" id="comment-consent-cb" name="consent" required>
      <label for="comment-consent-cb">J'accepte que ce message soit affiché publiquement et traité conformément à la <a href="confidentialite-capvietnam">politique de confidentialité</a>.</label>
    </div>
    <button type="submit" class="comment-submit">Publier mon commentaire →</button>
  </form>

</section>
</div>

<style>
/* Ko-fi in-article CTA */
.kofi-article-cta {
  display: flex;
  align-items: center;
  gap: 1.2rem;
  background: var(--card-bg, #fff8f0);
  border: 2px solid #f5a623;
  border-radius: 12px;
  padding: 1.2rem 1.5rem;
  margin: 2.5rem auto;
  max-width: 720px;
}
.kofi-article-cta .kofi-icon { font-size: 2rem; flex-shrink: 0; }
.kofi-article-cta div { flex: 1; }
.kofi-article-cta strong { display: block; font-size: 1rem; margin-bottom: 0.25rem; }
.kofi-article-cta p { margin: 0; font-size: 0.9rem; color: var(--muted); }
.kofi-btn {
  display: inline-block;
  background: #f5a623;
  color: #fff !important;
  font-weight: 700;
  padding: 0.65rem 1.3rem;
  border-radius: 8px;
  text-decoration: none;
  white-space: nowrap;
  flex-shrink: 0;
  transition: background 0.2s;
}
.kofi-btn:hover { background: #d4891b; }

/* Flash messages */
.comment-flash {
  padding: 0.75rem 1rem;
  border-radius: 6px;
  margin-bottom: 1rem;
  font-weight: 600;
}
.comment-flash--ok    { background: #d4edda; color: #155724; }
.comment-flash--error { background: #f8d7da; color: #721c24; }

/* Stored comments */
.comments-list { display: flex; flex-direction: column; gap: 1rem; margin: 1.5rem 0; }
.comment-item {
  background: var(--card-bg, #fafafa);
  border-left: 3px solid var(--jade, #2e8b57);
  padding: 0.9rem 1.2rem;
  border-radius: 0 8px 8px 0;
}
.comment-meta { display: flex; gap: 1rem; align-items: baseline; margin-bottom: 0.4rem; }
.comment-author { font-weight: 700; font-size: 0.95rem; }
.comment-date   { font-size: 0.8rem; color: var(--muted); }
.comment-body   { margin: 0; line-height: 1.6; }
.comments-count { font-size: 0.85rem; color: var(--muted); font-weight: 400; }
.comments-empty { color: var(--muted); font-style: italic; }

@media (max-width: 600px) {
  .kofi-article-cta { flex-direction: column; text-align: center; }
  .kofi-btn { width: 100%; text-align: center; }
}
@media (prefers-color-scheme: dark) {
  .kofi-article-cta { background: #2a1f00; border-color: #f5a623; }
  .comment-item { background: #1e1e1e; }
  .comment-flash--ok    { background: #1a3a22; color: #6fcf97; }
  .comment-flash--error { background: #3a1a1a; color: #eb5757; }
}
</style>
