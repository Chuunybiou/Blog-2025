<div style="max-width:800px;margin:0 auto;padding:0 2rem 1rem">
<section class="comments-section">
  <h3>Une question sur cet article ?</h3>
  <p>Écris-moi directement — je réponds à chaque message sous 48h.</p>
  <form action="<?= SITE_FORMSPREE ?>" method="POST">
    <input type="hidden" name="_subject" value="Commentaire : <?= htmlspecialchars($page_title ?? '') ?>">
    <input type="hidden" name="article_url" value="<?= htmlspecialchars($page_canonical ?? '') ?>">
    <div class="comment-form-row">
      <input class="comment-input" type="text" name="name" placeholder="Ton prénom" required>
      <input class="comment-input" type="email" name="email" placeholder="Ton email (non publié)">
    </div>
    <textarea class="comment-input" name="message" placeholder="Ton commentaire ou ta question…" required></textarea>
    <div class="comment-consent">
      <input type="checkbox" id="comment-consent-cb" name="consent" required>
      <label for="comment-consent-cb">J'accepte que ce message soit traité conformément à la <a href="confidentialite-capvietnam.php">politique de confidentialité</a>.</label>
    </div>
    <button type="submit" class="comment-submit">Envoyer →</button>
  </form>
  <p style="font-size:0.8rem;color:var(--muted);margin-top:1rem">Les commentaires sont modérés et ne s'affichent pas publiquement — je réponds par email.</p>
</section>
</div>
