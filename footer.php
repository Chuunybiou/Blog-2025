
<!-- ═══════ EBOOK BANNER ═══════ -->
<section style="background:linear-gradient(135deg,#3a1a0a 0%,#2d1a0a 50%,#1c1208 100%);padding:3.5rem 2rem;text-align:center;">
  <div style="max-width:700px;margin:0 auto;">
    <span style="display:inline-block;font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;font-weight:700;padding:5px 16px;border-radius:3px;background:rgba(184,134,11,0.2);color:#d4a836;margin-bottom:1.5rem;">📕 Ressource</span>
    <h2 style="font-family:'DM Serif Display',serif;font-size:clamp(1.6rem,4vw,2.4rem);color:#faf8f4;line-height:1.25;margin-bottom:1rem;">Vous voulez apprendre le vietnamien ?</h2>
    <p style="color:rgba(250,248,244,0.65);font-size:1.05rem;line-height:1.7;margin-bottom:0.5rem;">La méthode polyglotte d'Anthony Bouillon pour apprendre le vietnamien naturellement — même sans bases linguistiques.</p>
    <p style="color:rgba(250,248,244,0.4);font-size:0.85rem;margin-bottom:2rem;">Disponible en ebook sur Amazon · Méthode testée sur le terrain à Hanoï</p>
    <div style="display:flex;gap:1rem;justify-content:center;flex-wrap:wrap;">
      <a href="<?= ($path_prefix ?? '') ?>livre-vietnamien" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.85rem 2rem;background:rgba(184,134,11,0.9);color:#fff;border-radius:6px;text-decoration:none;font-weight:700;font-size:0.95rem;">📕 Découvrir l'ebook</a>
      <a href="https://www.amazon.fr/dp/B0H1CHWKF8" target="_blank" rel="noopener sponsored" style="display:inline-flex;align-items:center;gap:0.5rem;padding:0.85rem 2rem;background:rgba(250,248,244,0.08);color:#faf8f4;border:1px solid rgba(250,248,244,0.2);border-radius:6px;text-decoration:none;font-weight:600;font-size:0.95rem;">Acheter sur Amazon →</a>
    </div>
  </div>
</section>

<!-- ═══════ FOOTER ═══════ -->
<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <a href="<?= $path_prefix ?: '/' ?>" class="nav-logo">Cap<span>Vietnam</span></a>
      <p>Le blog du couple franco-vietnamien. Mariage, démarches, argent et vie quotidienne entre la France et le Vietnam.</p>
    </div>
    <div class="footer-col">
      <h4><?= ($page_lang ?? 'fr') === 'vi' ? 'Danh mục' : 'Catégories' ?></h4>
      <a href="<?= $path_prefix ?>articles-capvietnam?cat=couple">💕 Couple franco-vietnamien</a>
      <a href="<?= $path_prefix ?>articles-capvietnam?cat=admin">📋 Démarches &amp; installation</a>
      <a href="<?= $path_prefix ?>articles-capvietnam?cat=argent">💻 Argent &amp; travail à distance</a>
      <a href="<?= $path_prefix ?>articles-capvietnam?cat=voyager">✈️ Vie pratique au Vietnam</a>
    </div>
    <div class="footer-col">
      <h4><?= ($page_lang ?? 'fr') === 'vi' ? 'Liên kết hữu ích' : 'Liens utiles' ?></h4>
      <a href="<?= $path_prefix ?>a-propos-capvietnam">À propos</a>
      <a href="<?= $path_prefix ?>outils-vivre-vietnam">🛠️ Mes outils</a>
      <a href="<?= $path_prefix ?>contact-capvietnam">Contact</a>
      <a href="<?= $path_prefix ?: '/' ?>#newsletter">Newsletter mensuelle</a>
      <a href="<?= $path_prefix ?>livre-vietnamien" style="color:var(--terracotta-soft);font-weight:600">📕 Apprendre le vietnamien</a>
      <a href="<?= $path_prefix ?>mes-livres" style="color:rgba(250,248,244,0.55)">📚 Tous mes livres</a>
      <a href="<?= $path_prefix ?>s-expatrier-vietnam-2026-guide-complet" style="color:var(--amber-soft);font-weight:600">📘 Guide expatriation 2026</a>
      <hr style="border-color:var(--border);margin:0.8rem 0">
      <a href="https://bonusparrainage.com/revolut" target="_blank" rel="noopener" style="color:var(--amber-soft)">💳 Code parrainage Revolut</a>
      <a href="https://bonusparrainage.com" target="_blank" rel="noopener">🎁 BonusParrainage.com</a>
      <a href="https://anthony-bouillon.com" target="_blank" rel="noopener">💻 Services informatiques</a>
    </div>
    <div class="footer-col">
      <h4><?= ($page_lang ?? 'fr') === 'vi' ? 'Mạng xã hội' : 'Réseaux' ?></h4>
      <a href="<?= SITE_TIKTOK ?>" target="_blank" rel="noopener">TikTok</a>
      <a href="https://www.facebook.com/groups/vivreauvietnamcouplefrancovietnamiencap/" target="_blank" rel="noopener">💬 Groupe Facebook</a>
      <a href="https://discord.gg/MdDVNb7QZz" target="_blank" rel="noopener">🎮 Discord expats</a>
      <a href="<?= $path_prefix ?>go.php?id=kofi" target="_blank" rel="noopener" style="color:var(--amber-soft);font-weight:600">☕ Soutenir le blog</a>
    </div>
  </div>
  <div class="footer-bottom">
    <p style="font-size:0.78rem;color:rgba(250,248,244,0.35);margin-bottom:1rem;line-height:1.6;width:100%;">
      ℹ️ Ce site contient des liens affiliés rémunérés. Ils ne modifient ni mon avis ni mon classement.
    </p>
    <span>© <?= SITE_YEAR ?> Blog-CapVietnam. Tous droits réservés.</span>
    <div class="footer-legal">
      <a href="<?= $path_prefix ?>mentions-legales-capvietnam">Mentions légales</a>
      <a href="<?= $path_prefix ?>confidentialite-capvietnam">Confidentialité</a>
      <a href="<?= $path_prefix ?>cookies-capvietnam">Cookies</a>
    </div>
  </div>
</footer>

<!-- ═══════ MODAL: MENTIONS LÉGALES ═══════ -->
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
    <h3>2. Hébergeur</h3>
    <p>OVH</p>
    <h3>3. Propriété intellectuelle</h3>
    <p>L'ensemble du contenu du site (textes, images, vidéos, graphismes, logo, icônes) est la propriété exclusive de l'éditeur ou de ses partenaires. Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site est interdite sans autorisation écrite préalable.</p>
    <h3>4. Liens hypertextes</h3>
    <p>Le site peut contenir des liens hypertextes vers d'autres sites. L'éditeur ne peut être tenu responsable du contenu de ces sites externes.</p>
    <h3>5. Limitation de responsabilité</h3>
    <p>Les informations publiées sur ce site sont fournies à titre indicatif et sont susceptibles d'évoluer. Elles ne sauraient constituer un conseil juridique, fiscal ou administratif. L'éditeur ne saurait être tenu pour responsable des erreurs ou omissions.</p>
    <h3>6. Droit applicable</h3>
    <p>Les présentes mentions légales sont soumises au droit français. En cas de litige, les tribunaux français seront compétents.</p>
  </div>
</div>

<!-- ═══════ MODAL: POLITIQUE DE CONFIDENTIALITÉ ═══════ -->
<div class="modal-overlay" id="modal-privacy">
  <div class="modal-content">
    <button class="modal-close" onclick="closeModal('privacy')">✕</button>
    <h2>Politique de Confidentialité</h2>
    <p><em>Dernière mise à jour : 08/04/2026</em></p>
    <h3>1. Responsable du traitement</h3>
    <p>Le responsable du traitement des données personnelles est :<br>
    <strong><?= SITE_AUTHOR ?></strong> — <?= SITE_EMAIL ?></p>
    <h3>2. Données collectées</h3>
    <p>Nous collectons les données suivantes :</p>
    <ul>
      <li><strong>Formulaire de contact :</strong> nom, adresse email, message — pour répondre à votre demande.</li>
      <li><strong>Newsletter :</strong> adresse email — pour l'envoi d'articles par email.</li>
      <li><strong>Cookies :</strong> données de navigation — pour le fonctionnement du site et les statistiques anonymes.</li>
    </ul>
    <h3>3. Base légale du traitement</h3>
    <p>Le traitement de vos données est fondé sur votre <strong>consentement</strong> (article 6.1.a du RGPD) que vous exprimez en cochant la case prévue à cet effet ou en acceptant les cookies.</p>
    <h3>4. Destinataires des données</h3>
    <p>Vos données personnelles ne sont transmises à aucun tiers. Elles peuvent être traitées par les sous-traitants techniques suivants :</p>
    <ul>
      <li><strong>Formspree</strong> — traitement des formulaires de contact (serveurs aux États-Unis, conforme au RGPD).</li>
      <li><strong>OVH</strong> — hébergement du site.</li>
    </ul>
    <h3>5. Durée de conservation</h3>
    <ul>
      <li>Données de contact : 3 ans après le dernier échange.</li>
      <li>Données newsletter : jusqu'à votre désinscription.</li>
      <li>Cookies : 13 mois maximum conformément aux recommandations de la CNIL.</li>
    </ul>
    <h3>6. Vos droits (RGPD — articles 15 à 22)</h3>
    <p>Vous disposez des droits suivants :</p>
    <ul>
      <li>Droit d'<strong>accès</strong> à vos données personnelles</li>
      <li>Droit de <strong>rectification</strong> de vos données</li>
      <li>Droit à l'<strong>effacement</strong> de vos données</li>
      <li>Droit à la <strong>limitation</strong> du traitement</li>
      <li>Droit à la <strong>portabilité</strong> de vos données</li>
      <li>Droit d'<strong>opposition</strong> au traitement</li>
      <li>Droit de retirer votre <strong>consentement</strong> à tout moment</li>
    </ul>
    <p>Pour exercer ces droits, contactez-nous à : <strong><?= SITE_EMAIL ?></strong></p>
    <p>En cas de réclamation, vous pouvez vous adresser à la CNIL : <a href="https://www.cnil.fr" target="_blank" rel="noopener">www.cnil.fr</a></p>
    <h3>7. Transferts hors UE</h3>
    <p>Certaines données peuvent être traitées par des sous-traitants situés hors de l'Union Européenne (Formspree, États-Unis). Ces transferts sont encadrés par des garanties appropriées conformément au RGPD.</p>
    <h3>8. Sécurité</h3>
    <p>Nous mettons en œuvre les mesures techniques et organisationnelles appropriées pour protéger vos données contre tout accès non autorisé, modification, divulgation ou destruction.</p>
  </div>
</div>

<!-- ═══════ MODAL: COOKIES ═══════ -->
<div class="modal-overlay" id="modal-cookies">
  <div class="modal-content">
    <button class="modal-close" onclick="closeModal('cookies')">✕</button>
    <h2>Politique de Cookies</h2>
    <p><em>Dernière mise à jour : 08/04/2026</em></p>
    <h3>1. Qu'est-ce qu'un cookie ?</h3>
    <p>Un cookie est un petit fichier texte déposé sur votre navigateur lors de la visite d'un site internet. Il permet de stocker des informations relatives à votre navigation.</p>
    <h3>2. Cookies utilisés sur ce site</h3>
    <ul>
      <li><strong>Cookies essentiels :</strong> nécessaires au fonctionnement du site (mémorisation de vos préférences cookies). Durée : 13 mois.</li>
      <li><strong>Cookies analytiques (si acceptés) :</strong> permettent de mesurer l'audience du site de manière anonyme via Google Analytics ou un outil équivalent. Durée : 13 mois.</li>
    </ul>
    <h3>3. Gestion de vos préférences</h3>
    <p>Vous pouvez à tout moment modifier vos préférences en cliquant sur le lien « Gestion des cookies » en pied de page, ou en configurant votre navigateur pour refuser les cookies.</p>
    <h3>4. Base légale</h3>
    <p>Conformément à l'article 82 de la loi Informatique et Libertés et aux recommandations de la CNIL, les cookies non essentiels ne sont déposés qu'après recueil de votre consentement.</p>
  </div>
</div>

<!-- ═══════ JAVASCRIPT ═══════ -->
<script>
// Cookie consent
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

// Nav scroll effect
window.addEventListener('scroll', () => {
  document.getElementById('nav').classList.toggle('scrolled', window.scrollY > 50);
});

// Close mobile nav on link click
document.querySelectorAll('.nav-links a').forEach(a => {
  a.addEventListener('click', () => {
    document.getElementById('navLinks').classList.remove('open');
  });
});

// Modals
function openModal(id) {
  document.getElementById('modal-' + id).classList.add('active');
  document.body.style.overflow = 'hidden';
}
function closeModal(id) {
  document.getElementById('modal-' + id).classList.remove('active');
  document.body.style.overflow = '';
}
document.querySelectorAll('.modal-overlay').forEach(overlay => {
  overlay.addEventListener('click', (e) => {
    if (e.target === overlay) {
      overlay.classList.remove('active');
      document.body.style.overflow = '';
    }
  });
});

// Scroll reveal
const _footerObserver = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.style.opacity = '1';
      entry.target.style.transform = 'translateY(0)';
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.cat-card, .article-card, .about-grid, .contact-grid').forEach(el => {
  el.style.opacity = '0';
  el.style.transform = 'translateY(30px)';
  el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
  _footerObserver.observe(el);
});

// Form validation
document.querySelectorAll('form').forEach(form => {
  form.addEventListener('submit', function(e) {
    const consent = this.querySelector('[name="consent"]');
    if (consent && !consent.checked) {
      e.preventDefault();
      alert('Veuillez accepter la politique de confidentialité pour envoyer votre message.');
    }
  });
});
</script>

</body>
</html>
