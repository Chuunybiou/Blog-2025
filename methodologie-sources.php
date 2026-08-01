<?php
require_once __DIR__ . '/config/site.php';

$path_prefix      = '';
$page_lang        = 'fr';
$page_title       = 'Méthodologie & sources — comment Cap Vietnam vérifie ses informations';
$page_description = 'Comment les articles de Cap Vietnam sont écrits, vérifiés et mis à jour : sources officielles utilisées, ce que le blog garantit, ce qu\'il ne garantit pas, et comment signaler une erreur.';
$page_canonical   = SITE_URL . '/methodologie-sources';
$page_og_title    = 'Méthodologie & sources — Cap Vietnam';
$page_og_desc     = 'Textes officiels, expérience de terrain, mises à jour datées : la méthode derrière chaque article du blog.';
$page_og_url      = $page_canonical;
$page_og_image    = 'https://blog-capvietnam.fr/assets/img/couverture-facebook.png';
$page_schema      = json_encode([
  '@context'    => 'https://schema.org',
  '@type'       => 'WebPage',
  'name'        => 'Méthodologie & sources — Cap Vietnam',
  'description' => $page_description,
  'url'         => $page_canonical,
  'inLanguage'  => 'fr',
  'author'      => ['@type' => 'Person', 'name' => SITE_AUTHOR, 'url' => SITE_URL . '/a-propos-capvietnam'],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$page_extra_css = <<<'CSS'
.metho-hero{background:linear-gradient(135deg,#edf2ec 0%,#dde8de 100%);padding:9rem 2rem 4rem;text-align:center}
.metho-hero h1{font-family:'DM Serif Display',serif;font-size:clamp(2rem,4.5vw,3rem);line-height:1.15;max-width:800px;margin:0 auto 1rem;color:var(--ink)}
.metho-hero p{color:var(--muted);max-width:640px;margin:0 auto;font-size:1.05rem;line-height:1.7}
.metho-body{max-width:760px;margin:0 auto;padding:4rem 2rem}
.metho-body h2{font-family:'DM Serif Display',serif;font-size:1.6rem;margin:2.5rem 0 1rem;color:var(--ink)}
.metho-body p{line-height:1.85;color:#3d3a35;margin-bottom:1.25rem;font-size:1rem}
.metho-body ul{padding-left:1.4rem;margin-bottom:1.25rem}
.metho-body li{line-height:1.8;color:#3d3a35;margin-bottom:0.5rem}
.metho-body a{color:#1b6b52;font-weight:600;text-decoration:underline;text-underline-offset:2px}
.metho-note{background:rgba(191,74,42,0.06);border-left:3px solid var(--terracotta);padding:1.1rem 1.4rem;border-radius:0 6px 6px 0;margin:1.5rem 0;font-size:0.95rem;line-height:1.7}
.metho-sources{background:var(--warm-bg);border-radius:var(--radius);padding:2rem;margin:2rem 0}
.metho-sources h3{font-family:'DM Serif Display',serif;font-size:1.15rem;margin-bottom:0.75rem}
.metho-sources ul{list-style:none;padding:0;margin:0 0 1.25rem}
.metho-sources li{padding:0.3rem 0;font-size:0.93rem}
.metho-sources li::before{content:'→';color:#1b6b52;margin-right:0.5rem;font-weight:700}
CSS;

include __DIR__ . '/header.php';
?>

<section class="metho-hero">
  <h1>Comment je vérifie ce que je publie</h1>
  <p>Cap Vietnam traite de démarches administratives, de visas et de fiscalité — des sujets où une information fausse coûte cher. Voici la méthode derrière chaque article, et ses limites.</p>
</section>

<div class="metho-body">

  <h2>Qui écrit</h2>
  <p>Tous les articles sont écrits par <a href="a-propos-capvietnam">Anthony Bouillon</a>, Français installé à Hanoï, marié à une Vietnamienne. Les démarches décrites sur ce blog — mariage franco-vietnamien, visas, installation, banque, vie quotidienne — sont celles que je vis ou que j'ai vécues. Ce vécu est la matière première du blog ; il n'en est jamais la seule preuve.</p>

  <h2>Comment un article est vérifié</h2>
  <ul>
    <li><strong>Les règles citées renvoient à des textes identifiables</strong> : articles de loi français (Code civil, CGI, CESEDA), textes vietnamiens (Bộ luật Lao động, décrets NĐ-CP), convention fiscale France-Vietnam de 1993. Quand un chiffre ou un délai figure dans un article, il vient soit d'un texte officiel, soit de mon expérience directe — et dans ce cas c'est dit explicitement.</li>
    <li><strong>Un bloc « Sources officielles »</strong> en fin d'article liste les sites de référence sur lesquels vérifier chaque information, avec la date de dernière vérification.</li>
    <li><strong>Ce que je ne peux pas vérifier n'est pas affirmé</strong> : les fourchettes de prix sont présentées comme des ordres de grandeur observés, jamais comme des tarifs officiels ; les pratiques qui varient d'une administration locale à l'autre sont signalées comme telles.</li>
  </ul>

  <h2>Comment les articles sont mis à jour</h2>
  <p>Les règles migratoires et fiscales changent. Chaque article affiche sa date de publication et, le cas échéant, de mise à jour. Quand une règle importante évolue (durée d'exemption de visa, procédure e-visa, montants), l'article concerné est corrigé — pas simplement re-daté. Si tu repères une information dépassée avant moi, <a href="contact-capvietnam">écris-moi</a> : c'est le moyen le plus rapide de corriger le site pour tout le monde.</p>

  <div class="metho-note">
    <strong>Ce que ce blog n'est pas :</strong> un conseil juridique, fiscal ou financier personnalisé. Les articles décrivent les règles générales et mon expérience. Pour une situation individuelle — surtout en fiscalité internationale, en droit des étrangers ou pour un investissement — consulte un professionnel (avocat, expert-comptable, notaire). C'est écrit dans les articles concernés, et c'est sérieux.
  </div>

  <h2>Les sources principales du blog</h2>
  <div class="metho-sources">
    <h3>🇫🇷 Côté français</h3>
    <ul>
      <li><a href="https://www.service-public.fr" target="_blank" rel="noopener">Service-Public.fr</a> — fiches officielles droits et démarches</li>
      <li><a href="https://www.legifrance.gouv.fr" target="_blank" rel="noopener">Légifrance</a> — textes de loi et conventions internationales</li>
      <li><a href="https://france-visas.gouv.fr" target="_blank" rel="noopener">France-Visas</a> — site officiel des visas pour la France</li>
      <li><a href="https://www.diplomatie.gouv.fr" target="_blank" rel="noopener">France Diplomatie</a> — services aux Français de l'étranger, état civil, légalisations</li>
      <li><a href="https://vn.ambafrance.org" target="_blank" rel="noopener">Ambassade de France au Vietnam</a> — procédures locales (CCAM, transcription, visas)</li>
      <li><a href="https://www.impots.gouv.fr" target="_blank" rel="noopener">impots.gouv.fr</a> — fiscalité des particuliers et des non-résidents</li>
      <li><a href="https://www.ofii.fr" target="_blank" rel="noopener">OFII</a> — parcours d'intégration du conjoint étranger</li>
      <li><a href="https://www.cfe.fr" target="_blank" rel="noopener">Caisse des Français de l'Étranger</a> — protection sociale des expatriés</li>
      <li><a href="https://www.cleiss.fr" target="_blank" rel="noopener">CLEISS</a> — protection sociale internationale</li>
      <li><a href="https://www.lassuranceretraite.fr" target="_blank" rel="noopener">L'Assurance retraite</a> — retraite et résidence à l'étranger</li>
    </ul>
    <h3>🇻🇳 Côté vietnamien</h3>
    <ul>
      <li><a href="https://evisa.xuatnhapcanh.gov.vn" target="_blank" rel="noopener">Portail e-visa officiel</a> — Département de l'immigration du Vietnam</li>
      <li><a href="https://chinhphu.vn" target="_blank" rel="noopener">Portail du Gouvernement vietnamien</a> — textes et annonces officielles (en vietnamien)</li>
      <li><a href="https://thuvienphapluat.vn" target="_blank" rel="noopener">Thư Viện Pháp Luật</a> — base de référence des textes juridiques vietnamiens (en vietnamien)</li>
    </ul>
    <p style="font-size:0.85rem;color:var(--muted);margin:0">Les sites vietnamiens officiels sont rarement traduits en français ; quand un article cite un texte vietnamien, le nom du texte (numéro de décret ou de loi) est donné pour permettre la vérification directe.</p>
  </div>

  <h2>Transparence sur la monétisation</h2>
  <p>Ce blog vit de quatre sources de revenus, toutes signalées là où elles apparaissent : des liens affiliés (marqués « lien affilié » ou <code>sponsored</code>, sans surcoût pour toi), deux livres vendus sur Amazon, un pack payant de modèles de lettres, et les dons. Aucun article n'est sponsorisé par une marque, et aucune recommandation n'est publiée contre rémunération. Si je recommande Wise ou une banque en ligne, c'est parce que je les utilise — le lien affilié vient après, pas avant.</p>

  <p style="margin-top:2.5rem"><a href="blog-capvietnam">← Retour au blog</a></p>
</div>

<?php include __DIR__ . '/footer.php'; ?>
