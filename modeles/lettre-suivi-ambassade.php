<?php
require_once __DIR__ . '/../config/site.php';
$page_title = 'Modèle lettre relance ambassade — Visa conjoint / CCAM';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $page_title ?></title>
  <style>
    body { font-family: 'Times New Roman', Times, serif; font-size: 12pt; color: #111; margin: 0; background: #f5f5f5; }
    .screen-wrapper { max-width: 860px; margin: 0 auto; padding: 2rem 1rem; }
    .toolbar { background: #1b4a35; color: #fff; border-radius: 8px; padding: 1rem 1.5rem; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; font-family: sans-serif; }
    .toolbar h1 { margin: 0; font-size: 1rem; font-weight: 700; }
    .toolbar p { margin: 0.2rem 0 0; font-size: 0.8rem; opacity: 0.75; }
    .toolbar a { background: #4db890; color: #0d2b1f; padding: 0.55rem 1.2rem; border-radius: 5px; font-weight: 700; font-size: 0.85rem; text-decoration: none; white-space: nowrap; }
    .note { font-family: sans-serif; font-size: 0.8rem; background: #fffbeb; border-left: 3px solid #f59e0b; padding: 0.75rem 1rem; margin-bottom: 1.5rem; border-radius: 0 5px 5px 0; }
    .page { background: #fff; padding: 3.5cm 3cm; box-shadow: 0 2px 12px rgba(0,0,0,.12); min-height: 27cm; max-width: 21cm; margin: 0 auto; box-sizing: border-box; }
    .expediteur p { margin: 0.15rem 0; }
    .ville-date { text-align: right; margin: 1.5cm 0; }
    .destinataire { margin-bottom: 1.5cm; }
    .destinataire p { margin: 0.15rem 0; }
    .objet { margin-bottom: 1cm; font-weight: bold; }
    .corps p { margin: 0 0 0.75em 0; line-height: 1.6; text-align: justify; }
    .signature { margin-top: 2cm; }
    .pieces ul { margin: 0.3em 0 0; padding-left: 1.5em; }
    .pieces ul li { margin: 0.2em 0; }
    .placeholder { color: #1b4a35; font-style: italic; }
    @media print {
      body { background: #fff; }
      .screen-wrapper { padding: 0; }
      .toolbar, .note { display: none !important; }
      .page { box-shadow: none; padding: 2cm 2.5cm; margin: 0; min-height: unset; max-width: 100%; }
      @page { size: A4; margin: 0; }
    }
  </style>
</head>
<body>
<div class="screen-wrapper">

  <div class="toolbar">
    <div>
      <h1>Modèle — Lettre de relance à l'ambassade</h1>
      <p>Remplacez les textes en <em style="color:#6ee7b7">italique vert</em> avant d'imprimer</p>
    </div>
    <a href="javascript:window.print()">🖨 Imprimer / Enregistrer PDF</a>
  </div>

  <div class="note">
    <strong>Quand utiliser ce modèle ?</strong>
    Si votre dossier CCAM ou visa VLS-TS conjoint est en attente depuis plus de <strong>2 mois</strong> sans nouvelles. Envoyez par email au service concerné et, si pas de réponse, en recommandé avec AR. <a href="<?= SITE_URL ?>/entretien-ambassade-france-vietnam-visa-conjoint" style="color:#1b4a35">Voir notre guide visa conjoint →</a>
  </div>

  <div class="page">

    <div class="expediteur">
      <p><strong><span class="placeholder">[Votre Prénom NOM]</span></strong></p>
      <p><span class="placeholder">[Adresse]</span></p>
      <p><span class="placeholder">[Code postal Ville, France]</span></p>
      <p>Tél. : <span class="placeholder">[+33 6 XX XX XX XX]</span></p>
      <p>Email : <span class="placeholder">[votre.email@example.com]</span></p>
    </div>

    <div class="ville-date">
      <p><span class="placeholder">[Ville]</span>, le <span class="placeholder">[JJ/MM/AAAA]</span></p>
    </div>

    <div class="destinataire">
      <p><strong>Ambassade de France au Vietnam</strong></p>
      <p>Service <span class="placeholder">[des visas / de l'état civil]</span></p>
      <p>57 Trần Hưng Đạo, Hanoï — Vietnam</p>
      <p style="margin-top:0.5rem">Email : <span class="placeholder">[email officiel du service concerné]</span></p>
    </div>

    <div class="objet">
      Objet : Relance — Dossier <span class="placeholder">[CCAM / visa VLS-TS conjoint]</span> — <span class="placeholder">[Prénom NOM de votre conjoint(e)]</span><br>
      <span style="font-weight:normal">Réf. : Dépôt du <span class="placeholder">[JJ/MM/AAAA]</span> — N° de dossier : <span class="placeholder">[numéro si connu]</span></span>
    </div>

    <div class="corps">
      <p>Madame, Monsieur,</p>

      <p>Je me permets de vous contacter concernant le dossier de <span class="placeholder">[demande de certificat de capacité à mariage / demande de visa VLS-TS conjoint de Français]</span> déposé le <span class="placeholder">[JJ/MM/AAAA]</span>, au nom de <strong><span class="placeholder">[NOM Prénom de votre conjoint(e)]</span></strong>, née le <span class="placeholder">[date]</span> à <span class="placeholder">[ville, Vietnam]</span>.</p>

      <p>À ce jour, soit plus de <span class="placeholder">[X semaines / X mois]</span> après le dépôt du dossier, nous n'avons pas reçu de retour de votre service concernant l'avancement de l'instruction ni la date de <span class="placeholder">[rendez-vous d'audition / décision sur la demande de visa]</span>.</p>

      <p>Nous vous serions très reconnaissants de bien vouloir nous communiquer l'état d'avancement du dossier et, le cas échéant, les pièces complémentaires qui vous seraient nécessaires pour finaliser l'instruction.</p>

      <p>Notre projet de <span class="placeholder">[mariage / vie commune en France]</span> est prévu pour <span class="placeholder">[date ou période]</span>. Ce délai nous contraint à vous solliciter, en espérant que votre service puisse traiter notre dossier dans les meilleurs délais.</p>

      <p>Dans l'attente de votre retour, je vous prie d'agréer, Madame, Monsieur, l'expression de mes salutations distinguées.</p>
    </div>

    <div class="signature">
      <p><span class="placeholder">[Signature]</span></p>
      <br>
      <p><span class="placeholder">[Prénom NOM]</span></p>
    </div>

    <div class="pieces" style="margin-top:1.5cm;">
      <p><strong>Pièces jointes :</strong></p>
      <ul>
        <li>Copie de l'accusé de réception du dépôt de dossier (si disponible)</li>
        <li>Copie de la carte nationale d'identité ou passeport</li>
        <li>Tout document attestant du dépôt initial</li>
      </ul>
    </div>

  </div>

  <p style="font-family:sans-serif;font-size:0.75rem;color:#888;text-align:center;margin-top:1.5rem">
    Modèle indicatif — <a href="<?= SITE_URL ?>" style="color:#1b4a35">blog-capvietnam.fr</a> — Non contractuel.
  </p>

</div>
</body>
</html>
