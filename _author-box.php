<?php
/**
 * Shared author bio box, included at the end of an article.
 * Set before including:
 *   $author_bio   (string) — personalized bio paragraph for this article (raw HTML allowed)
 *   $author_links (string) — optional, raw HTML for the links row (defaults to "À propos" only)
 */
require_once __DIR__ . '/config/site.php';
$author_links = $author_links ?? '<a href="a-propos-capvietnam">À propos →</a>';
$_author_path_prefix = $path_prefix ?? '';
?>
    <div class="author-box">
      <div class="author-avatar" style="overflow:hidden;position:relative;">
        <img src="<?= $_author_path_prefix . PROFILE_PHOTO ?>" alt="Anthony Bouillon" width="72" height="72" loading="lazy" decoding="async" style="width:100%;height:100%;object-fit:cover;position:absolute;inset:0;">
      </div>
      <div class="author-info">
        <h3>Anthony Bouillon</h3>
        <p><?= $author_bio ?></p>
        <div class="author-links"><?= $author_links ?></div>
      </div>
    </div>
<?php unset($author_bio, $author_links, $_author_path_prefix); ?>
