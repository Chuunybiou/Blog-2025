<?php
require_once __DIR__ . '/config/site.php';

$page_title       = 'Mes livres — Méthode Polyglotte · Série complète | Cap Vietnam';
$page_description = 'Les 4 livres de la série Méthode Polyglotte par Anthony Bouillon : vietnamien, anglais, japonais, espagnol. Des guides pratiques pour apprendre une langue naturellement.';
$page_canonical   = SITE_URL . '/mes-livres';
$page_og_title    = 'Mes livres — Méthode Polyglotte';
$page_og_desc     = 'La série complète Méthode Polyglotte par Anthony Bouillon — 4 langues, une approche basée sur les mots les plus fréquents.';
$page_og_url      = SITE_URL . '/mes-livres';
$page_og_image    = SITE_URL . '/assets/img/og-capvietnam.png';

$page_schema = json_encode([
  '@context' => 'https://schema.org',
  '@type'    => 'ItemList',
  'name'     => 'Méthode Polyglotte — série complète',
  'description' => 'Série de 4 livres pour apprendre le vietnamien, l\'anglais, le japonais et l\'espagnol.',
  'author'   => ['@type' => 'Person', 'name' => 'Anthony Bouillon', 'url' => SITE_URL . '/a-propos-capvietnam'],
  'itemListElement' => [
    ['@type' => 'ListItem', 'position' => 1, 'item' => ['@type' => 'Book', 'name' => 'Méthode Polyglotte · Vietnamien', 'url' => 'https://www.amazon.fr/dp/B0H1CHWKF8', 'inLanguage' => 'fr']],
    ['@type' => 'ListItem', 'position' => 2, 'item' => ['@type' => 'Book', 'name' => 'Méthode Polyglotte · Anglais',    'url' => 'https://www.amazon.fr/dp/B0H2XHZ9TB', 'inLanguage' => 'fr']],
    ['@type' => 'ListItem', 'position' => 3, 'item' => ['@type' => 'Book', 'name' => 'Méthode Polyglotte · Japonais',  'url' => 'https://www.amazon.fr/dp/B0H4RFJZQY', 'inLanguage' => 'fr']],
    ['@type' => 'ListItem', 'position' => 4, 'item' => ['@type' => 'Book', 'name' => 'Méthode Polyglotte · Espagnol',  'url' => 'https://www.amazon.fr/dp/B0H47Z1WB3', 'inLanguage' => 'fr']],
  ]
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$books = [
  [
    'flag'     => '🇻🇳',
    'lang'     => 'Vietnamien',
    'asin'     => 'B0H1CHWKF8',
    'url'      => AFF_AMAZON_EBOOK_EN, // lien affilié existant — remplace si tu as un tag Amazon partenaires dédié
    'subtitle' => 'La langue de tous les jours',
    'desc'     => 'Apprendre le vietnamien sans cours ni application — basé sur les 1 100 mots les plus fréquents. Conçu pour les couples mixtes, les expats à Hanoï et les francophones curieux.',
    'tag'      => '⭐ Recommandé pour ce blog',
    'tag_class'=> 'tag-primary',
    'accent'   => '#c0392b',
  ],
  [
    'flag'     => '🇬🇧',
    'lang'     => 'Anglais',
    'asin'     => 'B0H2XHZ9TB',
    'url'      => 'https://www.amazon.fr/dp/B0H2XHZ9TB',
    'subtitle' => 'La langue internationale',
    'desc'     => 'Consolider son anglais par paliers, à partir des mots et tournures les plus utiles au quotidien et dans les contextes professionnels.',
    'tag'      => null,
    'tag_class'=> '',
    'accent'   => '#2980b9',
  ],
  [
    'flag'     => '🇯🇵',
    'lang'     => 'Japonais',
    'asin'     => 'B0H4RFJZQY',
    'url'      => 'https://www.amazon.fr/dp/B0H4RFJZQY',
    'subtitle' => 'La langue des caractères',
    'desc'     => 'Une approche progressive du japonais par la fréquence — hiragana, katakana et les premiers kanji par l\'usage réel plutôt que la mémorisation brute.',
    'tag'      => null,
    'tag_class'=> '',
    'accent'   => '#8e44ad',
  ],
  [
    'flag'     => '🇪🇸',
    'lang'     => 'Espagnol',
    'asin'     => 'B0H47Z1WB3',
    'url'      => 'https://www.amazon.fr/dp/B0H47Z1WB3',
    'subtitle' => 'La langue de 500 millions de locuteurs',
    'desc'     => 'Espagnol par paliers de fréquence — pour progresser vite et parler naturellement dès les premières semaines.',
    'tag'      => null,
    'tag_class'=> '',
    'accent'   => '#d35400',
  ],
];

include 'header.php';
?>

<style>
.books-hero {
  background: linear-gradient(135deg, #1c1208 0%, #2d1a0a 50%, #3a1a0a 100%);
  padding: 9rem 2rem 4rem;
  text-align: center;
}
.books-hero h1 {
  font-family: 'DM Serif Display', serif;
  font-size: clamp(2rem, 5vw, 3rem);
  color: #faf8f4;
  margin-bottom: 1rem;
}
.books-hero .series-badge {
  display: inline-block;
  font-size: 0.65rem;
  letter-spacing: 4px;
  text-transform: uppercase;
  font-weight: 700;
  padding: 5px 16px;
  border-radius: 3px;
  background: rgba(184,134,11,0.2);
  color: #d4a836;
  margin-bottom: 1.5rem;
}
.books-hero p {
  color: rgba(250,248,244,0.65);
  font-size: 1.1rem;
  max-width: 600px;
  margin: 0 auto;
  line-height: 1.7;
}
.books-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
  max-width: 1100px;
  margin: 4rem auto;
  padding: 0 2rem;
}
.book-card {
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  overflow: hidden;
  display: flex;
  flex-direction: column;
  transition: transform 0.2s, box-shadow 0.2s;
}
.book-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 12px 40px rgba(0,0,0,0.12);
}
.book-card-header {
  padding: 2rem 2rem 1rem;
  text-align: center;
}
.book-flag {
  font-size: 3rem;
  display: block;
  margin-bottom: 0.75rem;
  line-height: 1;
}
.book-lang {
  font-family: 'DM Serif Display', serif;
  font-size: 1.5rem;
  color: var(--ink);
  margin-bottom: 0.25rem;
}
.book-subtitle {
  font-size: 0.85rem;
  color: var(--ink-muted);
  margin-bottom: 0;
}
.tag-primary {
  display: inline-block;
  background: rgba(184,134,11,0.15);
  color: #b8860b;
  font-size: 0.7rem;
  font-weight: 700;
  letter-spacing: 0.5px;
  padding: 3px 10px;
  border-radius: 3px;
  margin-top: 0.75rem;
}
.book-card-body {
  padding: 1rem 2rem;
  flex: 1;
}
.book-card-body p {
  font-size: 0.93rem;
  color: var(--ink-muted);
  line-height: 1.65;
}
.book-card-footer {
  padding: 1.5rem 2rem;
  border-top: 1px solid var(--border);
  display: flex;
  flex-direction: column;
  gap: 0.75rem;
}
.btn-amazon {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  padding: 0.8rem 1.5rem;
  background: #ff9900;
  color: #111;
  font-weight: 700;
  font-size: 0.9rem;
  border-radius: 6px;
  text-decoration: none;
  transition: background 0.2s;
}
.btn-amazon:hover { background: #e88a00; }
.btn-amazon-secondary {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  padding: 0.7rem 1.5rem;
  background: transparent;
  color: var(--ink-muted);
  font-size: 0.85rem;
  border: 1px solid var(--border);
  border-radius: 6px;
  text-decoration: none;
  transition: border-color 0.2s, color 0.2s;
}
.btn-amazon-secondary:hover { border-color: var(--ink-muted); color: var(--ink); }
.books-note {
  max-width: 700px;
  margin: 0 auto 4rem;
  padding: 1.5rem 2rem;
  background: var(--surface);
  border: 1px solid var(--border);
  border-radius: var(--radius);
  text-align: center;
  font-size: 0.9rem;
  color: var(--ink-muted);
  line-height: 1.65;
}
.books-note a { color: var(--jade); }
@media (max-width: 600px) {
  .books-grid { grid-template-columns: 1fr; }
}
</style>

<div class="books-hero">
  <span class="series-badge">📚 Série complète</span>
  <h1>Méthode Polyglotte</h1>
  <p>Quatre langues, une même logique : apprendre par les mots les plus fréquents, pas par la grammaire abstraite.</p>
</div>

<div style="max-width:1100px;margin:0 auto;padding:0 2rem;">
  <div class="books-note" style="margin-top:3rem;">
    ℹ️ Ces livres sont vendus sur Amazon. Le lien vietnamien est affilié (une commission me revient sans surcoût pour vous).
    Les autres sont des liens directs. <a href="a-propos-capvietnam">En savoir plus sur le projet →</a>
  </div>
</div>

<div class="books-grid">
  <?php foreach ($books as $book): ?>
  <div class="book-card">
    <div class="book-card-header">
      <span class="book-flag"><?= $book['flag'] ?></span>
      <div class="book-lang"><?= $book['lang'] ?></div>
      <div class="book-subtitle"><?= $book['subtitle'] ?></div>
      <?php if ($book['tag']): ?>
        <span class="<?= $book['tag_class'] ?>"><?= $book['tag'] ?></span>
      <?php endif; ?>
    </div>
    <div class="book-card-body">
      <p><?= $book['desc'] ?></p>
    </div>
    <div class="book-card-footer">
      <a class="btn-amazon" href="<?= $book['url'] ?>" target="_blank" rel="noopener<?= $book['asin'] === 'B0H1CHWKF8' ? ' sponsored' : '' ?>">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M21.9 16.35c-0.19-0.2-0.48-0.27-0.76-0.19-2.01 0.61-4.17 0.93-6.41 0.93-3.4 0-6.62-0.91-9.4-2.64-0.26-0.16-0.59-0.12-0.8 0.09-0.21 0.21-0.24 0.54-0.08 0.8 3.06 4.77 8.13 7.62 13.6 7.62 1.89 0 3.78-0.37 5.56-1.1 0.33-0.13 0.52-0.47 0.45-0.82-0.06-0.25-0.23-0.48-0.16-0.69z M19.5 17.5c-5.39 2.93-13.12 3.15-18.01 0.05-0.36-0.21-0.82-0.09-1.03 0.27-0.21 0.36-0.1 0.82 0.27 1.03 2.68 1.6 5.72 2.42 8.82 2.42 3.45 0 6.88-0.97 9.83-2.89 0.35-0.22 0.45-0.68 0.23-1.03-0.22-0.35-0.68-0.45-1.11-0.85z"/></svg>
        Voir sur Amazon
      </a>
      <a class="btn-amazon-secondary" href="livre-vietnamien" <?= $book['asin'] !== 'B0H1CHWKF8' ? 'style="display:none"' : '' ?>>
        En savoir plus →
      </a>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<div style="max-width:700px;margin:0 auto 5rem;padding:0 2rem;text-align:center;">
  <p style="color:var(--ink-muted);font-size:0.9rem;line-height:1.7;">
    Le livre vietnamien est celui que je recommande en priorité aux lecteurs de ce blog — c'est la langue dont tu as besoin pour vivre au Vietnam.
    Les autres langues de la série sont listées ici pour ceux qui connaissent déjà le projet.
  </p>
  <a href="livre-vietnamien" style="display:inline-block;margin-top:1.5rem;padding:0.9rem 2rem;background:var(--jade);color:#fff;border-radius:6px;font-weight:700;text-decoration:none;">
    📕 Apprendre le vietnamien →
  </a>
</div>

<?php include 'footer.php'; ?>
