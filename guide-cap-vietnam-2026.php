<?php
require_once __DIR__ . '/config/site.php';
$page_title       = 'Guide Cap Vietnam 2026 — S\'installer au Vietnam | 9 €';
$page_description = 'Guide pratique pour s\'installer au Vietnam : visa TT, mariage, budget 2026, travail en ligne, couple mixte. 9 chapitres, 47 checklists. 9 €.';
$page_canonical   = SITE_URL . '/guide-cap-vietnam-2026';
$page_og_title    = 'Guide Cap Vietnam 2026 — 9 €';
$page_og_desc     = 'Tout ce qu\'il faut savoir pour s\'installer au Vietnam en tant que Français. Visa, mariage, budget, travail en ligne. 9 chapitres. 9 €.';
$page_og_url      = SITE_URL . '/guide-cap-vietnam-2026';
$page_og_image    = 'https://images.unsplash.com/photo-1573270689103-d7a4e42b609a?w=1200&q=80';
$page_schema      = '{"@context":"https://schema.org","@type":"Product","name":"Guide Cap Vietnam 2026","description":"Guide pratique pour s\'installer au Vietnam en tant que Français — visa, mariage, budget, travail en ligne.","offers":{"@type":"Offer","price":"9.00","priceCurrency":"EUR","availability":"https://schema.org/InStock","url":"' . SITE_URL . '/guide-cap-vietnam-2026"},"author":{"@type":"Person","name":"Anthony Bouillon"},"image":"https://images.unsplash.com/photo-1573270689103-d7a4e42b609a?w=1200&q=80"}';
$page_extra_css   = '
.guide-hero{padding-top:64px;background:linear-gradient(160deg,#0d1829 0%,#1a2744 50%,#0d1829 100%);position:relative;overflow:hidden}
.guide-hero::before{content:"";position:absolute;inset:0;background:radial-gradient(ellipse 60% 60% at 10% 90%,rgba(192,21,30,0.12),transparent 60%),radial-gradient(ellipse 50% 50% at 90% 10%,rgba(212,168,75,0.08),transparent 60%)}
.guide-hero-inner{max-width:1100px;margin:0 auto;padding:5rem 2rem 5rem;display:grid;grid-template-columns:1fr 1.4fr;gap:5rem;align-items:center;position:relative;z-index:1}
.book-wrap{display:flex;justify-content:center;align-items:center}
.book-mockup{width:210px;height:290px;background:#1a2744;border-radius:4px 12px 12px 4px;position:relative;box-shadow:-12px 12px 40px rgba(0,0,0,0.5),4px 0 15px rgba(0,0,0,0.3),inset -3px 0 8px rgba(0,0,0,0.2);display:flex;flex-direction:column;justify-content:flex-end;padding:1.5rem 1.4rem;overflow:hidden;flex-shrink:0}
.book-mockup::before{content:"";position:absolute;top:-50px;left:-50px;width:140px;height:140px;border-radius:50%;background:#c0151e}
.book-mockup::after{content:"";position:absolute;bottom:-35px;right:-35px;width:110px;height:110px;border-radius:50%;background:#d4a84b}
.book-edition{position:absolute;top:1.1rem;left:1.2rem;background:#d4a84b;color:#1a2744;font-size:0.6rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;padding:3px 10px;border-radius:100px;z-index:2}
.book-title{position:relative;z-index:2}
.book-title-main{font-family:"DM Serif Display",serif;font-size:2rem;color:#faf8f4;line-height:1.1;display:block}
.book-title-sub{font-family:"DM Serif Display",serif;font-size:2rem;color:#d4a84b;line-height:1.1;display:block}
.book-author{position:absolute;bottom:1rem;left:1.4rem;z-index:2}
.book-author-name{color:#faf8f4;font-size:0.7rem;font-weight:700;display:block}
.book-author-label{color:rgba(250,248,244,0.4);font-size:0.6rem;letter-spacing:2px;text-transform:uppercase;display:block}
.book-spine{position:absolute;left:0;top:0;bottom:0;width:18px;background:linear-gradient(90deg,#0d1829,#1a2744);border-radius:4px 0 0 4px}
.guide-pitch{}
.guide-badge{display:inline-block;background:rgba(212,168,75,0.15);color:#d4a84b;font-size:0.65rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;padding:5px 14px;border-radius:100px;margin-bottom:1.25rem;border:1px solid rgba(212,168,75,0.3)}
.guide-pitch h1{font-family:"DM Serif Display",serif;font-size:clamp(1.8rem,3.5vw,2.8rem);color:#faf8f4;line-height:1.2;margin-bottom:1rem}
.guide-pitch h1 em{color:#d4a84b;font-style:normal}
.guide-pitch .subtitle{color:rgba(250,248,244,0.55);font-size:1rem;line-height:1.7;margin-bottom:1.75rem}
.guide-includes{list-style:none;margin-bottom:2rem}
.guide-includes li{color:rgba(250,248,244,0.75);font-size:0.9rem;padding:0.35rem 0;display:flex;align-items:center;gap:0.6rem}
.guide-includes li::before{content:"✓";color:#d4a84b;font-weight:700;flex-shrink:0}
.price-block{display:flex;align-items:center;gap:1.5rem;margin-bottom:1rem;flex-wrap:wrap}
.price-tag{font-family:"DM Serif Display",serif;font-size:3rem;color:#faf8f4;line-height:1}
.price-detail{color:rgba(250,248,244,0.4);font-size:0.8rem}
.paypal-form-wrap{display:flex;flex-direction:column;gap:0.75rem}
.paypal-btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;padding:1rem 2.5rem;background:#ffc439;color:#003087;font-weight:700;font-size:1rem;border-radius:6px;border:none;cursor:pointer;font-family:inherit;transition:all 0.2s;text-decoration:none;width:100%;max-width:320px}
.paypal-btn:hover{background:#f0b800;transform:translateY(-2px);box-shadow:0 8px 25px rgba(255,196,57,0.35)}
.paypal-logo{font-size:1.1rem}
.trust-line{color:rgba(250,248,244,0.35);font-size:0.78rem;display:flex;align-items:center;gap:1rem;flex-wrap:wrap}
.trust-line span{display:flex;align-items:center;gap:4px}

.chapters-section{max-width:1100px;margin:0 auto;padding:5rem 2rem}
.section-eyebrow{font-size:0.65rem;letter-spacing:4px;text-transform:uppercase;color:var(--muted);margin-bottom:0.5rem}
.section-h2{font-family:"DM Serif Display",serif;font-size:2rem;margin-bottom:0.5rem}
.section-sub{color:var(--muted);margin-bottom:2.5rem}
.chapters-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.25rem}
.chapter-card{background:var(--white);border-radius:var(--radius);padding:1.5rem;box-shadow:var(--shadow-sm);border-left:3px solid}
.chapter-card.c-red{border-color:#c0151e}
.chapter-card.c-navy{border-color:#1a2744}
.chapter-card.c-gold{border-color:#d4a84b}
.chapter-num{font-size:0.65rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--muted);margin-bottom:0.4rem}
.chapter-card h3{font-family:"DM Serif Display",serif;font-size:1rem;margin-bottom:0.3rem}
.chapter-card p{font-size:0.82rem;color:var(--muted);line-height:1.6}

.for-you-section{background:linear-gradient(160deg,#0d1829,#1a2744);padding:5rem 2rem}
.for-you-inner{max-width:800px;margin:0 auto;text-align:center}
.for-you-inner .section-eyebrow{color:rgba(250,248,244,0.4)}
.for-you-inner .section-h2{color:#faf8f4}
.for-you-inner .section-sub{color:rgba(250,248,244,0.45)}
.for-you-list{list-style:none;text-align:left;display:inline-block;margin-top:1rem}
.for-you-list li{color:rgba(250,248,244,0.8);font-size:0.95rem;padding:0.5rem 0;display:flex;align-items:flex-start;gap:0.75rem;border-bottom:1px solid rgba(255,255,255,0.06)}
.for-you-list li:last-child{border:none}
.for-you-list li::before{content:"→";color:#d4a84b;font-weight:700;flex-shrink:0;margin-top:2px}

.quote-section{max-width:800px;margin:0 auto;padding:4rem 2rem;text-align:center}
blockquote.guide-quote{font-family:"DM Serif Display",serif;font-size:1.5rem;color:var(--ink);line-height:1.5;margin:0;padding:2rem;border-left:4px solid #d4a84b;text-align:left;background:var(--warm-bg);border-radius:0 var(--radius) var(--radius) 0}
blockquote.guide-quote cite{display:block;font-size:0.8rem;font-style:normal;color:var(--muted);margin-top:0.75rem;font-family:"Libre Franklin",sans-serif}

.cta2-section{background:#faf8f4;padding:5rem 2rem}
.cta2-inner{max-width:600px;margin:0 auto;text-align:center}
.cta2-inner h2{font-family:"DM Serif Display",serif;font-size:2rem;margin-bottom:0.5rem}
.cta2-inner p{color:var(--muted);margin-bottom:2rem}
.price-tag-big{font-family:"DM Serif Display",serif;font-size:4rem;color:#1a2744;display:block;margin-bottom:0.25rem}
.cta2-note{font-size:0.78rem;color:var(--muted);margin-top:0.75rem}
.cta2-inner .paypal-btn{max-width:100%}

.guide-faq{max-width:700px;margin:0 auto;padding:4rem 2rem}
.guide-faq h2{font-family:"DM Serif Display",serif;font-size:1.75rem;margin-bottom:2rem;text-align:center}

@media(max-width:900px){.guide-hero-inner{grid-template-columns:1fr;gap:3rem;text-align:center}.book-wrap{margin-bottom:1rem}.guide-includes{display:inline-block;text-align:left}.price-block{justify-content:center}.paypal-btn{max-width:100%}.chapters-grid{grid-template-columns:1fr 1fr}.testimonials-grid{grid-template-columns:1fr}}
@media(max-width:640px){.chapters-grid{grid-template-columns:1fr}.trust-line{justify-content:center}}

.social-proof-section{background:var(--warm-bg);padding:5rem 2rem}
.social-proof-inner{max-width:1100px;margin:0 auto}
.testimonials-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem}
.testimonial-card{background:var(--white);border-radius:var(--radius);padding:1.75rem;box-shadow:var(--shadow-sm)}
.testimonial-text{font-size:0.95rem;color:#3a3530;line-height:1.7;margin-bottom:1rem;font-style:italic}
.testimonial-author{font-size:0.8rem;color:var(--muted);font-weight:600}

.wise-upsell-section{background:linear-gradient(135deg,rgba(27,107,82,0.05),rgba(27,107,82,0.02));border-top:1px solid rgba(27,107,82,0.12);border-bottom:1px solid rgba(27,107,82,0.12);padding:3rem 2rem}
.wise-upsell-inner{max-width:860px;margin:0 auto;display:flex;gap:1.5rem;align-items:flex-start}
.wise-upsell-icon{font-size:2.5rem;flex-shrink:0;line-height:1;padding-top:4px}
.wise-upsell-label{font-size:0.65rem;letter-spacing:3px;text-transform:uppercase;color:var(--jade);font-weight:700;margin-bottom:0.4rem}
.wise-upsell-title{font-family:"DM Serif Display",serif;font-size:1.3rem;margin-bottom:0.5rem}
.wise-upsell-text{font-size:0.92rem;color:var(--muted);line-height:1.7;margin-bottom:1rem}
.wise-upsell-btn{display:inline-block;padding:0.65rem 1.4rem;background:var(--jade);color:#fff;border-radius:4px;font-weight:600;font-size:0.9rem;text-decoration:none;margin-right:1rem;transition:opacity 0.2s}
.wise-upsell-btn:hover{opacity:0.88}
.wise-upsell-note{font-size:0.75rem;color:var(--muted);font-style:italic;vertical-align:middle}
@media(max-width:640px){.wise-upsell-inner{flex-direction:column}.testimonials-grid{grid-template-columns:1fr}}
';
include 'header.php';
?>

<header class="guide-hero">
  <div class="guide-hero-inner">
    <div class="book-wrap">
      <div class="book-mockup">
        <div class="book-spine"></div>
        <span class="book-edition">Édition 2026</span>
        <div class="book-title">
          <span class="book-title-main">Cap</span>
          <span class="book-title-sub">Vietnam</span>
        </div>
        <div class="book-author">
          <span class="book-author-name">Anthony Bouillon</span>
          <span class="book-author-label">Français à Hanoï</span>
        </div>
      </div>
    </div>

    <div class="guide-pitch">
      <div class="guide-badge">📘 Guide PDF — Édition 2026</div>
      <h1>Le guide que j'aurais voulu avoir avant de partir au <em>Vietnam</em></h1>
      <p class="subtitle">Visa TT, mariage franco-vietnamien, budget réel à Hanoï, travail en ligne, couple mixte — tout ce que j'ai appris en le vivant, condensé en 9 chapitres.</p>
      <ul class="guide-includes">
        <li>9 chapitres couvrant tout le parcours d'installation</li>
        <li>47 checklists téléchargeables étape par étape</li>
        <li>Les 5 erreurs que font 80% des Français qui partent</li>
        <li>Budget réel 2026 — pas les chiffres bidons d'il y a 4 ans</li>
       
      </ul>
      <div class="price-block">
        <div>
          <div class="price-tag">9 €</div>
          <div class="price-detail">Téléchargement immédiat · PDF · 32 pages</div>
        </div>
      </div>
      <div class="paypal-form-wrap">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
          <input type="hidden" name="cmd" value="_xclick">
          <input type="hidden" name="business" value="<?= SITE_PAYPAL ?>">
          <input type="hidden" name="lc" value="FR">
          <input type="hidden" name="item_name" value="Guide Cap Vietnam 2026 — PDF">
          <input type="hidden" name="amount" value="9.00">
          <input type="hidden" name="currency_code" value="EUR">
          <input type="hidden" name="no_shipping" value="1">
          <input type="hidden" name="no_note" value="1">
          <input type="hidden" name="return" value="<?= SITE_URL ?>/merci-guide">
          <input type="hidden" name="cancel_return" value="<?= SITE_URL ?>/guide-cap-vietnam-2026">
          <button type="submit" class="paypal-btn"><span class="paypal-logo">PayPal</span> Acheter pour 9 € →</button>
        </form>
        <div class="trust-line">
          <span>🔒 Paiement sécurisé PayPal</span>
          <span>📥 Téléchargement immédiat</span>
          <span>🔄 Mise à jour 2027 incluse</span>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="chapters-section">
  <div class="section-eyebrow">Au programme</div>
  <h2 class="section-h2">9 chapitres, tout le parcours</h2>
  <p class="section-sub">De la décision de partir à ton installation définitive à Hanoï ou HCMC.</p>
  <div class="chapters-grid">
    <div class="chapter-card c-red">
      <div class="chapter-num">01</div>
      <h3>Avant de partir</h3>
      <p>Les 3 questions à te poser honnêtement, le timeline sur 12 mois et les documents français à apostiller.</p>
    </div>
    <div class="chapter-card c-navy">
      <div class="chapter-num">02</div>
      <h3>Le visa</h3>
      <p>Les 6 types de visa vietnamiens en 2026, leurs vrais coûts et lequel choisir selon ta situation.</p>
    </div>
    <div class="chapter-card c-gold">
      <div class="chapter-num">03</div>
      <h3>Se marier avec une Vietnamienne</h3>
      <p>Documents, délais réels, transcription et les galères que personne ne te dit à l'avance.</p>
    </div>
    <div class="chapter-card c-red">
      <div class="chapter-num">04</div>
      <h3>Le logement à Hanoï / HCMC</h3>
      <p>Où habiter, prix réels 2026 par quartier, les pièges classiques à éviter quand tu signes un bail.</p>
    </div>
    <div class="chapter-card c-navy">
      <div class="chapter-num">05</div>
      <h3>Argent, banque, transferts</h3>
      <p>Wise vs banques classiques, ouvrir un compte au Vietnam, gérer son argent sans se faire plumer.</p>
    </div>
    <div class="chapter-card c-gold">
      <div class="chapter-num">06</div>
      <h3>Travailler en ligne depuis le Vietnam</h3>
      <p>Statut légal, fiscalité, clients, outils indispensables et coworkings à Hanoï.</p>
    </div>
    <div class="chapter-card c-red">
      <div class="chapter-num">07</div>
      <h3>Couple mixte : les pièges culturels</h3>
      <p>Belle-famille, argent, différences quotidiennes franco-vietnamiennes. Ce qui fait exploser les couples.</p>
    </div>
    <div class="chapter-card c-navy">
      <div class="chapter-num">08</div>
      <h3>La checklist : 47 choses à faire</h3>
      <p>Dans l'ordre chronologique — avant le départ, à l'arrivée, dans les 3 premiers mois.</p>
    </div>
    <div class="chapter-card c-gold">
      <div class="chapter-num">09</div>
      <h3>Ressources & bonus</h3>
      <p>Liens, contacts utiles, bonnes adresses à Hanoï (banques, médecins, coworkings, restos).</p>
    </div>
  </div>
</section>

<section class="for-you-section">
  <div class="for-you-inner">
    <div class="section-eyebrow">Pour qui ?</div>
    <h2 class="section-h2">Ce guide est fait pour toi si…</h2>
    <p class="section-sub">Tu es à la bonne place si tu te reconnais dans au moins une de ces situations.</p>
    <ul class="for-you-list">
      <li>Tu envisages de quitter la France (ou le Canada) pour t'installer au Vietnam</li>
      <li>Tu es en couple avec une Vietnamienne et tu veux comprendre les démarches de mariage</li>
      <li>Tu veux travailler en ligne depuis l'Asie du Sud-Est mais tu ne sais pas par où commencer</li>
      <li>Tu pars avec un e-visa et tu veux un plan clair pour les 12 mois suivants</li>
      <li>Tu veux le budget réel de la vie à Hanoï — pas les estimations gonflées des sites de relocation</li>
    </ul>
  </div>
</section>

<section class="quote-section">
  <blockquote class="guide-quote">
    « Personne ne te dira que tu vas pleurer à la douane de Nội Bài parce que t'as oublié une photocopie. Moi oui. »
    <cite>— Anthony Bouillon, Français installé à Hanoï</cite>
  </blockquote>
</section>

<!-- Social proof -->
<section class="social-proof-section">
  <div class="social-proof-inner">
    <div class="section-eyebrow" style="text-align:center;margin-bottom:2.5rem">Ils ont utilisé ce guide</div>
    <div class="testimonials-grid">
      <div class="testimonial-card">
        <p class="testimonial-text">« J'ai fait exactement les mêmes erreurs avant de trouver ce guide. La checklist visa m'a sauvé lors du renouvellement. »</p>
        <div class="testimonial-author"><strong>Maxime R.</strong> — Hanoï depuis 2025</div>
      </div>
      <div class="testimonial-card">
        <p class="testimonial-text">« Le chapitre sur le mariage franco-vietnamien est le seul endroit où j'ai trouvé les vraies infos sur les délais de la transcription. »</p>
        <div class="testimonial-author"><strong>Pierre D.</strong> — Marié, installé à HCMC</div>
      </div>
      <div class="testimonial-card">
        <p class="testimonial-text">« 9 euros pour éviter les galères que j'ai vécues moi-même, c'est cadeau. Le chapitre fiscal m'a évité une double imposition. »</p>
        <div class="testimonial-author"><strong>Thomas L.</strong> — Freelance à Hanoï</div>
      </div>
    </div>
  </div>
</section>

<!-- Wise cross-sell -->
<section class="wise-upsell-section">
  <div class="wise-upsell-inner">
    <div class="wise-upsell-icon">💸</div>
    <div>
      <p class="wise-upsell-label">Recommandé dans le chapitre 5 du guide</p>
      <h3 class="wise-upsell-title">Wise — l'outil indispensable pour vivre au Vietnam</h3>
      <p class="wise-upsell-text">Transferts EUR → VND au taux interbancaire, carte internationale pour les retraits d'espèces, compte multi-devises. C'est ce que j'utilise depuis mon arrivée.</p>
      <a href="go.php?id=wise" class="wise-upsell-btn" rel="noopener sponsored">Ouvrir un compte Wise →</a>
      <span class="wise-upsell-note">Lien affilié — commission perçue si tu effectues un premier transfert.</span>
    </div>
  </div>
</section>

<section class="cta2-section">
  <div class="cta2-inner">
    <h2>Prêt à partir ?</h2>
    <p>Pour le prix d'un café, tu évites des mois de galères administratives.</p>
    <span class="price-tag-big">9 €</span>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
      <input type="hidden" name="cmd" value="_xclick">
      <input type="hidden" name="business" value="<?= SITE_PAYPAL ?>">
      <input type="hidden" name="lc" value="FR">
      <input type="hidden" name="item_name" value="Guide Cap Vietnam 2026 — PDF">
      <input type="hidden" name="amount" value="9.00">
      <input type="hidden" name="currency_code" value="EUR">
      <input type="hidden" name="no_shipping" value="1">
      <input type="hidden" name="no_note" value="1">
      <input type="hidden" name="return" value="<?= SITE_URL ?>/merci-guide">
      <input type="hidden" name="cancel_return" value="<?= SITE_URL ?>/guide-cap-vietnam-2026">
      <button type="submit" class="paypal-btn">PayPal — Télécharger le guide pour 9 € →</button>
    </form>
    <p class="cta2-note">🔒 Paiement sécurisé PayPal · PDF téléchargeable immédiatement · Mise à jour 2027 incluse</p>
  </div>
</section>

<section class="guide-faq">
  <h2>Questions fréquentes</h2>
  <div class="faq-item">
    <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Comment je reçois le guide après le paiement ? <span class="faq-arrow">▼</span></button>
    <div class="faq-answer">Immédiatement après le paiement PayPal, tu es redirigé vers une page de téléchargement directe. Le PDF est disponible en un clic.</div>
  </div>
  <div class="faq-item">
    <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">La mise à jour 2027 est-elle vraiment incluse ? <span class="faq-arrow">▼</span></button>
    <div class="faq-answer">Oui. Le guide est mis à jour chaque année. Si tu l'achètes en 2026, tu reçois la version 2027 automatiquement par email à l'adresse liée à ton compte PayPal.</div>
  </div>
  <div class="faq-item">
    <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Le guide couvre aussi Ho Chi Minh City ou seulement Hanoï ? <span class="faq-arrow">▼</span></button>
    <div class="faq-answer">Les démarches administratives (visa, mariage, fiscalité) sont valables pour tout le Vietnam. Les adresses pratiques (logement, coworkings) sont principalement pour Hanoï, avec des comparaisons HCMC pour le budget.</div>
  </div>
  <div class="faq-item">
    <button class="faq-question" onclick="this.parentElement.classList.toggle('open')">Je n'ai pas de compte PayPal, je peux quand même acheter ? <span class="faq-arrow">▼</span></button>
    <div class="faq-answer">Oui. PayPal permet de payer par carte bancaire directement sans créer de compte — il suffit de cliquer sur "Payer par carte" sur la page PayPal.</div>
  </div>
</section>

<?php include '_article-comments.php'; ?>
<?php include '_article-js.php'; ?>
<?php include 'footer.php'; ?>
