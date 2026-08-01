<?php
/**
 * Bloc "Sources officielles" — à inclure en fin d'article, avant la FAQ.
 * Usage :
 *   $page_sources = [
 *     ['label' => 'Service-Public.fr', 'url' => 'https://www.service-public.fr'],
 *     ...
 *   ];
 *   $page_sources_date = 'juillet 2026'; // optionnel
 *   include '_article-sources.php';
 */
if (!empty($page_sources)):
?>
<div class="sources-box">
  <div class="sources-box-title">📚 Sources officielles</div>
  <p class="sources-box-intro">Les informations de cet article s'appuient sur les sites et textes officiels suivants — vérifiés en <?= htmlspecialchars($page_sources_date ?? 'juillet 2026') ?> :</p>
  <ul class="sources-box-list">
    <?php foreach ($page_sources as $s): ?>
    <li><a href="<?= htmlspecialchars($s['url']) ?>" target="_blank" rel="noopener"><?= htmlspecialchars($s['label']) ?></a><?= !empty($s['note']) ? ' — ' . htmlspecialchars($s['note']) : '' ?></li>
    <?php endforeach; ?>
  </ul>
  <p class="sources-box-meta">Une règle a changé depuis ? <a href="<?= ($path_prefix ?? '') ?>contact-capvietnam">Signale-le-moi</a> · <a href="<?= ($path_prefix ?? '') ?>methodologie-sources">Comment je vérifie mes informations</a></p>
</div>
<style>
.sources-box{background:rgba(27,107,82,0.05);border:1px solid rgba(27,107,82,0.18);border-left:4px solid #1b6b52;border-radius:0 8px 8px 0;padding:1.5rem 1.75rem;margin:2.5rem 0}
.sources-box-title{font-weight:700;font-size:0.78rem;letter-spacing:2.5px;text-transform:uppercase;color:#1b6b52;margin-bottom:0.75rem}
.sources-box-intro{font-size:0.92rem;color:#555;margin-bottom:0.75rem;line-height:1.6}
.sources-box-list{list-style:none;padding:0;margin:0 0 1rem}
.sources-box-list li{padding:0.35rem 0;font-size:0.93rem;line-height:1.55;color:#555}
.sources-box-list li::before{content:'→';color:#1b6b52;margin-right:0.55rem;font-weight:700}
.sources-box-list a{color:#14523f;font-weight:600;text-decoration:underline;text-underline-offset:2px}
.sources-box-meta{font-size:0.8rem;color:#888;margin:0;border-top:1px dashed rgba(27,107,82,0.25);padding-top:0.75rem}
.sources-box-meta a{color:#1b6b52}
</style>
<?php endif; ?>
