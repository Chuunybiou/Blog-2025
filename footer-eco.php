<style>
/* Styles spécifiques au footer-eco (injectés dans le body, valides en HTML5) */
.eco-footer-grid {
  max-width: var(--container-max, 1100px);
  margin: 0 auto;
  display: grid;
  grid-template-columns: 1.5fr 1fr 1fr 1fr;
  gap: 3rem;
  padding-bottom: 3rem;
  border-bottom: 1px solid rgba(255,255,255,0.08);
}
.eco-footer-col h4 {
  color: #fafaf9;
  font-size: 0.72rem;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 1.25rem;
  font-weight: 600;
}
.eco-footer-col a {
  display: block;
  color: rgba(250,250,249,0.5);
  text-decoration: none;
  font-size: 0.9rem;
  margin-bottom: 0.6rem;
  transition: color 0.2s;
}
.eco-footer-col a:hover { color: #fafaf9; }
.eco-footer-col a.accent { color: var(--accent, #c9986a); font-weight: 600; }
.eco-footer-col a.accent:hover { color: #d4aa7d; }
.eco-footer-hr { border: none; border-top: 1px solid rgba(255,255,255,0.08); margin: 0.8rem 0; }
.eco-ecosystem-bar {
  background: #f0ebe4;
  border-top: 1px solid #e7e5e4;
  border-bottom: 1px solid #e7e5e4;
  padding: 1.25rem 2rem;
}
.eco-ecosystem-inner {
  max-width: var(--container-max, 1100px);
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  gap: 1rem 2rem;
}
.eco-ecosystem-label {
  font-size: 0.68rem;
  letter-spacing: 3px;
  text-transform: uppercase;
  font-weight: 700;
  color: #8b6a3e;
  white-space: nowrap;
}
.eco-ecosystem-links {
  display: flex;
  flex-wrap: wrap;
  gap: 0.4rem 1.75rem;
}
.eco-ecosystem-links a {
  text-decoration: none;
  color: #57534e;
  font-size: 0.88rem;
  font-weight: 500;
  transition: color 0.2s;
}
.eco-ecosystem-links a:hover { color: var(--accent, #c9986a); }
.eco-footer-bottom {
  max-width: var(--container-max, 1100px);
  margin: 0 auto;
  padding: 1.5rem 0 2rem;
}
.eco-footer-disclosure {
  font-size: 0.78rem;
  color: rgba(250,250,249,0.3);
  margin-bottom: 1.25rem;
  line-height: 1.6;
}
.eco-footer-meta {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap;
  gap: 1rem;
  font-size: 0.8rem;
}
.eco-footer-legal { display: flex; gap: 1.5rem; }
.eco-footer-legal a {
  color: rgba(250,250,249,0.4);
  text-decoration: none;
  font-size: 0.8rem;
  transition: color 0.2s;
}
.eco-footer-legal a:hover { color: #fafaf9; }

@media (max-width: 900px) {
  .eco-footer-grid { grid-template-columns: 1fr 1fr; }
}
@media (max-width: 640px) {
  .eco-footer-grid { grid-template-columns: 1fr; }
  .eco-ecosystem-inner { flex-direction: column; align-items: flex-start; }
}
</style>

<!-- ═══════ EBOOK BANNER ═══════ -->
<section style="background:linear-gradient(135deg,#1c0f05 0%,#2d1a0a 50%,#1c1208 100%);padding:3.5rem 2rem;text-align:center;">
  <div style="max-width:680px;margin:0 auto;">
    <span style="display:inline-block;font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;font-weight:700;padding:5px 16px;border-radius:3px;background:rgba(201,152,106,0.15);color:#c9986a;margin-bottom:1.5rem;">📕 Ressource</span>
    <h2 style="font-size:clamp(1.5rem,4vw,2.2rem);color:#fafaf9;line-height:1.25;margin-bottom:1rem;font-weight:700;letter-spacing:-0.02em;">Vous voulez apprendre le vietnamien ?</h2>
    <p style="color:rgba(250,250,249,0.65);font-size:1.05rem;line-height:1.7;margin-bottom:0.5rem;">La méthode polyglotte d'Anthony Bouillon — 1 100 mots pour couvrir 80 % des conversations quotidiennes.</p>
    <p style="color:rgba(250,250,249,0.4);font-size:0.85rem;margin-bottom:2rem;">Ebook Amazon · Méthode testée sur le terrain à Hanoï</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
      <a href="<?= ($path_prefix ?? '') ?>livre-vietnamien.php"
         style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.85rem 2rem;background:#c9986a;color:#fff;border-radius:8px;text-decoration:none;font-weight:700;font-size:0.95rem;">
        📕 Découvrir l'ebook
      </a>
      <a href="https://www.amazon.fr/dp/B0H1CHWKF8" target="_blank" rel="noopener sponsored"
         style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.85rem 2rem;background:rgba(250,250,249,0.08);color:#fafaf9;border:1px solid rgba(250,250,249,0.2);border-radius:8px;text-decoration:none;font-weight:600;font-size:0.95rem;">
        Acheter sur Amazon →
      </a>
    </div>
  </div>
</section>

<!-- ═══════ BLOC ÉCOSYSTÈME ═══════ -->
<div class="eco-ecosystem-bar">
  <div class="eco-ecosystem-inner">
    <span class="eco-ecosystem-label">🌿 L'écosystème Cap Vietnam</span>
    <nav class="eco-ecosystem-links" aria-label="Écosystème Cap Vietnam">
      <a href="https://blog-capvietnam.fr" target="_blank" rel="noopener">🌏 Blog Cap Vietnam — couple franco-vietnamien &amp; expatriation</a>
      <a href="https://bonusparrainage.com" target="_blank" rel="noopener">💳 Bons Plans Expats — codes parrainage finances</a>
      <a href="https://anthony-bouillon.com" target="_blank" rel="noopener">💻 Service IT — dépannage francophone à distance</a>
    </nav>
  </div>
</div>

<!-- ═══════ FOOTER PRINCIPAL ═══════ -->
<footer style="background:var(--ink,#1c1917);color:rgba(250,250,249,0.6);padding:4rem 2rem 0;">
  <div class="eco-footer-grid">

    <!-- Brand -->
    <div class="eco-footer-col">
      <a href="<?= ($path_prefix ?? '') ?>blog-capvietnam.php"
         style="display:inline-flex;align-items:center;gap:10px;text-decoration:none;margin-bottom:1rem;">
        <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"
             style="width:30px;height:30px;flex-shrink:0;" aria-hidden="true">
          <path d="M6 32 L20 8 L34 32" stroke="#c9986a" stroke-width="3.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M3 35 Q11.5 31 20 35 Q28.5 39 37 35" stroke="#c9986a" stroke-width="2" stroke-linecap="round" fill="none"/>
        </svg>
        <span style="font-size:1.05rem;font-weight:700;color:#fafaf9;letter-spacing:-0.02em;">
          Cap<span style="color:#c9986a;">Vietnam</span>
        </span>
      </a>
      <p style="font-size:0.9rem;line-height:1.7;color:rgba(250,250,249,0.5);margin-top:0.5rem;">
        Vivre, se marier et s'installer entre la France et le Vietnam.
      </p>
    </div>

    <!-- Catégories -->
    <div class="eco-footer-col">
      <h4><?= ($page_lang ?? 'fr') === 'vi' ? 'Danh mục' : 'Catégories' ?></h4>
      <a href="<?= ($path_prefix ?? '') ?>articles-capvietnam.php">💕 Couple franco-vietnamien</a>
      <a href="<?= ($path_prefix ?? '') ?>articles-capvietnam.php">📋 Démarches &amp; installation</a>
      <a href="<?= ($path_prefix ?? '') ?>articles-capvietnam.php">💻 Argent &amp; travail à distance</a>
      <a href="<?= ($path_prefix ?? '') ?>articles-capvietnam.php">✈️ Vie pratique au Vietnam</a>
    </div>

    <!-- Liens utiles -->
    <div class="eco-footer-col">
      <h4><?= ($page_lang ?? 'fr') === 'vi' ? 'Liên kết hữu ích' : 'Liens utiles' ?></h4>
      <a href="<?= ($path_prefix ?? '') ?>a-propos-capvietnam.php">À propos</a>
      <a href="<?= ($path_prefix ?? '') ?>blog-capvietnam.php#contact">Contact</a>
      <a href="<?= ($path_prefix ?? '') ?>livre-vietnamien.php" class="accent">📕 Apprendre le vietnamien</a>
      <a href="<?= ($path_prefix ?? '') ?>guide-cap-vietnam-2026.php" class="accent">📘 Guide Cap Vietnam 2026</a>
      <hr class="eco-footer-hr">
      <a href="https://bonusparrainage.com" target="_blank" rel="noopener" class="accent">💳 Bons Plans Expats</a>
      <a href="https://anthony-bouillon.com" target="_blank" rel="noopener">💻 Service IT francophone</a>
    </div>

    <!-- Réseaux -->
    <div class="eco-footer-col">
      <h4><?= ($page_lang ?? 'fr') === 'vi' ? 'Mạng xã hội' : 'Réseaux' ?></h4>
      <a href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener">TikTok</a>
      <a href="<?= SITE_YOUTUBE ?>" target="_blank" rel="noopener">YouTube</a>
      <a href="<?= ($path_prefix ?? '') ?>go.php?id=kofi" target="_blank" rel="noopener" class="accent">☕ Soutenir le blog</a>
    </div>
  </div>

  <!-- Disclosure + crédits -->
  <div class="eco-footer-bottom">
    <p class="eco-footer-disclosure">
      ℹ️ Ce site contient des liens affiliés rémunérés. Ils ne modifient ni mon avis ni mon classement.
    </p>
    <div class="eco-footer-meta">
      <span>© <?= SITE_YEAR ?> Blog-CapVietnam. Tous droits réservés.</span>
      <nav class="eco-footer-legal" aria-label="Liens légaux">
        <a href="<?= ($path_prefix ?? '') ?>mentions-legales-capvietnam.php">Mentions légales</a>
        <a href="<?= ($path_prefix ?? '') ?>confidentialite-capvietnam.php">Confidentialité</a>
        <a href="<?= ($path_prefix ?? '') ?>cookies-capvietnam.php">Cookies</a>
      </nav>
    </div>
  </div>
</footer>

<!-- ═══════ MODALS RGPD ═══════ -->
<div class="modal-overlay" id="modal-mentions">
  <div class="modal-content">
    <button class="modal-close" onclick="closeModal('mentions')">✕</button>
    <h2>Mentions Légales</h2>
    <p><em>En vigueur au 08/04/2026</em></p>
    <h3>1. Éditeur du site</h3>
    <p>Le site blog-capvietnam.fr est édité par :<br>
    <strong><?= SITE_AUTHOR ?></strong><br>
    Statut : Auto-entrepreneur (micro-entreprise)<br>
    SIRET : 85214042500038<br>
    Adresse : 47 rue Vivienne, 75002 Paris, France<br>
    Email : <?= SITE_EMAIL ?><br>
    Directeur de la publication : <?= SITE_AUTHOR ?></p>
    <h3>2. Hébergeur</h3><p>OVH</p>
    <h3>3. Propriété intellectuelle</h3>
    <p>L'ensemble du contenu du site est la propriété exclusive de l'éditeur ou de ses partenaires. Toute reproduction est interdite sans autorisation écrite préalable.</p>
    <h3>4. Liens hypertextes</h3>
    <p>Le site peut contenir des liens hypertextes vers d'autres sites. L'éditeur ne peut être tenu responsable du contenu de ces sites externes.</p>
    <h3>5. Limitation de responsabilité</h3>
    <p>Les informations publiées sur ce site sont fournies à titre indicatif. Elles ne sauraient constituer un conseil juridique, fiscal ou administratif.</p>
    <h3>6. Droit applicable</h3>
    <p>Les présentes mentions légales sont soumises au droit français.</p>
  </div>
</div>

<div class="modal-overlay" id="modal-privacy">
  <div class="modal-content">
    <button class="modal-close" onclick="closeModal('privacy')">✕</button>
    <h2>Politique de Confidentialité</h2>
    <p><em>Dernière mise à jour : 08/04/2026</em></p>
    <h3>1. Responsable du traitement</h3>
    <p><strong><?= SITE_AUTHOR ?></strong> — <?= SITE_EMAIL ?></p>
    <h3>2. Données collectées</h3>
    <ul>
      <li><strong>Formulaire de contact :</strong> nom, email, message.</li>
      <li><strong>Newsletter :</strong> adresse email.</li>
      <li><strong>Cookies :</strong> données de navigation anonymes.</li>
    </ul>
    <h3>3. Base légale</h3>
    <p>Consentement (article 6.1.a du RGPD).</p>
    <h3>4. Destinataires</h3>
    <ul>
      <li><strong>Formspree</strong> — formulaires de contact.</li>
      <li><strong>OVH</strong> — hébergement.</li>
    </ul>
    <h3>5. Durée de conservation</h3>
    <ul>
      <li>Données de contact : 3 ans après le dernier échange.</li>
      <li>Données newsletter : jusqu'à désinscription.</li>
      <li>Cookies : 13 mois maximum (recommandations CNIL).</li>
    </ul>
    <h3>6. Vos droits (RGPD art. 15-22)</h3>
    <p>Accès, rectification, effacement, limitation, portabilité, opposition.</p>
    <p>Contact : <strong><?= SITE_EMAIL ?></strong> &mdash; Réclamation : <a href="https://www.cnil.fr" target="_blank" rel="noopener">www.cnil.fr</a></p>
  </div>
</div>

<div class="modal-overlay" id="modal-cookies">
  <div class="modal-content">
    <button class="modal-close" onclick="closeModal('cookies')">✕</button>
    <h2>Politique de Cookies</h2>
    <p><em>Dernière mise à jour : 08/04/2026</em></p>
    <h3>Cookies utilisés</h3>
    <ul>
      <li><strong>Essentiels :</strong> mémorisation de vos préférences cookies. Durée : 13 mois.</li>
      <li><strong>Analytiques (si acceptés) :</strong> mesure d'audience anonyme. Durée : 13 mois.</li>
    </ul>
    <h3>Base légale</h3>
    <p>Conformément à l'article 82 de la loi Informatique et Libertés et aux recommandations de la CNIL, les cookies non essentiels ne sont déposés qu'après recueil de votre consentement.</p>
  </div>
</div>

<!-- ═══════ JAVASCRIPT ═══════ -->
<script>
function acceptCookies() {
  localStorage.setItem('cookies_consent', 'accepted');
  document.getElementById('cookie-banner').classList.add('hidden');
}
function refuseCookies() {
  localStorage.setItem('cookies_consent', 'refused');
  document.getElementById('cookie-banner').classList.add('hidden');
}
if (localStorage.getItem('cookies_consent')) {
  document.getElementById('cookie-banner').classList.add('hidden');
}

window.addEventListener('scroll', function() {
  document.getElementById('nav').classList.toggle('scrolled', window.scrollY > 50);
});

document.querySelectorAll('.nav-links a').forEach(function(a) {
  a.addEventListener('click', function() {
    document.getElementById('navLinks').classList.remove('open');
  });
});

function openModal(id) {
  document.getElementById('modal-' + id).classList.add('active');
  document.body.style.overflow = 'hidden';
}
function closeModal(id) {
  document.getElementById('modal-' + id).classList.remove('active');
  document.body.style.overflow = '';
}
document.querySelectorAll('.modal-overlay').forEach(function(overlay) {
  overlay.addEventListener('click', function(e) {
    if (e.target === overlay) {
      overlay.classList.remove('active');
      document.body.style.overflow = '';
    }
  });
});

var _obs = new IntersectionObserver(function(entries) {
  entries.forEach(function(entry) {
    if (entry.isIntersecting) {
      entry.target.style.opacity  = '1';
      entry.target.style.transform = 'translateY(0)';
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.card, .cat-card, .article-card, .about-grid, .contact-grid').forEach(function(el) {
  el.style.opacity    = '0';
  el.style.transform  = 'translateY(24px)';
  el.style.transition = 'opacity 0.55s ease, transform 0.55s ease';
  _obs.observe(el);
});

document.querySelectorAll('form').forEach(function(form) {
  form.addEventListener('submit', function(e) {
    var consent = this.querySelector('[name="consent"]');
    if (consent && !consent.checked) {
      e.preventDefault();
      alert('Veuillez accepter la politique de confidentialité pour envoyer votre message.');
    }
  });
});
</script>

</body>
</html>
