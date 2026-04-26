<?php
/**
 * Reusable affiliate CTA box.
 * Variables to set before including:
 *   $aff_id      (string)  e.g. 'wise'
 *   $aff_title   (string)  headline text
 *   $aff_text    (string)  body copy (HTML allowed)
 *   $aff_cta     (string)  button label
 *   $aff_note    (string)  optional fine print below button
 *   $aff_icon    (string)  optional emoji/icon
 *   $aff_theme   (string)  optional: 'green' (default) | 'blue'
 */
$_aff_url   = SITE_URL . '/go?id=' . urlencode($aff_id ?? '');
$_aff_theme = $aff_theme ?? 'green';
?>
<div class="aff-cta aff-cta--<?= htmlspecialchars($_aff_theme) ?>">
  <?php if (!empty($aff_icon)): ?>
  <div class="aff-cta__icon"><?= $aff_icon ?></div>
  <?php endif; ?>
  <div class="aff-cta__body">
    <p class="aff-cta__title"><?= htmlspecialchars($aff_title ?? '') ?></p>
    <p class="aff-cta__text"><?= $aff_text ?? '' ?></p>
    <a href="<?= htmlspecialchars($_aff_url) ?>" class="aff-cta__btn" rel="noopener sponsored" target="_blank">
      <?= htmlspecialchars($aff_cta ?? 'En savoir plus') ?> →
    </a>
    <?php if (!empty($aff_note)): ?>
    <p class="aff-cta__note"><?= htmlspecialchars($aff_note) ?></p>
    <?php endif; ?>
  </div>
</div>
<?php
// Reset variables to avoid leaking into subsequent includes
unset($aff_id, $aff_title, $aff_text, $aff_cta, $aff_note, $aff_icon, $aff_theme);
unset($_aff_url, $_aff_theme);
?>
