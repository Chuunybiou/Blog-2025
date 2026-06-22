<?php
require_once __DIR__ . '/../config/site.php';
$page_title = 'Modèle lettre CCAM — Demande de certificat de capacité à mariage';
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
    .toolbar a:hover { background: #38a07d; }
    .note { font-family: sans-serif; font-size: 0.8rem; background: #fffbeb; border-left: 3px solid #f59e0b; padding: 0.75rem 1rem; margin-bottom: 1.5rem; border-radius: 0 5px 5px 0; }
    .note strong { display: block; margin-bottom: 0.25rem; }
    .page { background: #fff; padding: 3.5cm 3cm; box-shadow: 0 2px 12px rgba(0,0,0,.12); min-height: 27cm; max-width: 21cm; margin: 0 auto; box-sizing: border-box; }
    .expediteur { text-align: left; margin-bottom: 2cm; }
    .expediteur p { margin: 0.15rem 0; }
    .ville-date { text-align: right; margin-bottom: 1.5cm; }
    .destinataire { text-align: left; margin-bottom: 1.5cm; }
    .destinataire p { margin: 0.15rem 0; }
    .objet { margin-bottom: 1cm; font-weight: bold; }
    .corps p { margin: 0 0 0.7em 0; line-height: 1.6; text-align: justify; }
    .pieces { margin-top: 1.2cm; }
    .pieces p { margin: 0; }
    .pieces ul { margin: 0.3em 0 0; padding-left: 1.5em; }
    .pieces ul li { margin: 0.2em 0; }
    .signature { margin-top: 1.5cm; text-align: left; }
    .placeholder { color: #1b4a35; font-style: italic; }
    .blank { display: inline-block; min-width: 3cm; border-bottom: 1px solid #888; }
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
      <h1>Modèle — Lettre de demande CCAM</h1>
      <p>Remplacez les textes en <em style="color:#6ee7b7">italique vert</em> avant d'imprimer</p>
    </div>
    <a href="javascript:window.print()">🖨 Imprimer / Enregistrer PDF</a>
  </div>

  <div class="note">
    <strong>Mode d'emploi</strong>
    Ce modèle est indicatif. Remplissez chaque champ <span style="color:#1b4a35;font-style:italic">[en italique]</span>, puis faites <strong>Imprimer → Enregistrer en PDF</strong> (ou Ctrl+P). Envoyez la lettre en <strong>recommandé avec accusé de réception</strong> au consulat. <a href="<?= SITE_URL ?>/certificat-capacite-mariage-vietnam" style="color:#1b4a35">Voir notre guide complet CCAM →</a>
  </div>

  <div class="page">

    <div class="expediteur">
      <p><strong><span class="placeholder">[Votre Prénom NOM]</span></strong></p>
      <p><span class="placeholder">[Numéro et voie]</span></p>
      <p><span class="placeholder">[Code postal Ville]</span></p>
      <p>Tél. : <span class="placeholder">[+33 6 XX XX XX XX]</span></p>
      <p>Email : <span class="placeholder">[votre.email@example.com]</span></p>
    </div>

    <div class="ville-date">
      <p><span class="placeholder">[Ville]</span>, le <span class="placeholder">[JJ/MM/AAAA]</span></p>
    </div>

    <div class="destinataire">
      <p><strong>Consulat Général de France à <span class="placeholder">[Hanoï / Hô Chi Minh-Ville]</span></strong></p>
      <p>Service de l'état civil</p>
      <p><span class="placeholder">[Adresse du consulat]</span></p>
    </div>

    <div class="objet">
      Objet : Demande de certificat de capacité à mariage<br>
      <span style="font-weight:normal">Réf. : <span class="placeholder">[Votre nom]</span> / <span class="placeholder">[Nom de votre future épouse en vietnamien : NOM Prénom]</span></span>
    </div>

    <div class="corps">
      <p>Madame, Monsieur,</p>

      <p>Je soussigné, <strong><span class="placeholder">[Votre Prénom NOM]</span></strong>, né le <span class="placeholder">[date de naissance]</span> à <span class="placeholder">[commune de naissance, département, France]</span>, de nationalité française, actuellement domicilié au <span class="placeholder">[adresse complète]</span>, vous adresse la présente afin de solliciter la délivrance d'un <strong>certificat de capacité à mariage (CCAM)</strong>.</p>

      <p>Je projette de me marier avec Mme <strong><span class="placeholder">[NOM Prénom vietnamien de votre future épouse]</span></strong>, née le <span class="placeholder">[date de naissance]</span> à <span class="placeholder">[province/ville, Vietnam]</span>, de nationalité vietnamienne, actuellement domiciliée à <span class="placeholder">[adresse complète au Vietnam]</span>. Notre mariage est prévu le <span class="placeholder">[date envisagée ou « au cours du premier semestre AAAA »]</span> à <span class="placeholder">[commune, province, Vietnam]</span>.</p>

      <p>Ce certificat nous est indispensable pour la constitution du dossier de mariage auprès des autorités vietnamiennes compétentes, conformément aux dispositions du code civil français (article 171-2).</p>

      <p>Je joins à la présente les pièces justificatives requises. Je reste à votre disposition pour tout renseignement complémentaire et vous serais reconnaissant de bien vouloir me faire parvenir votre convocation pour le rendez-vous d'audition dans les meilleurs délais.</p>

      <p>Dans l'attente de votre réponse, je vous prie d'agréer, Madame, Monsieur, l'expression de mes salutations distinguées.</p>
    </div>

    <div class="signature">
      <p><span class="placeholder">[Signature]</span></p>
      <br>
      <p><span class="placeholder">[Prénom NOM]</span></p>
    </div>

    <div class="pieces">
      <p><strong>Pièces jointes :</strong></p>
      <ul>
        <li>Copie intégrale de l'acte de naissance (moins de 3 mois si possible)</li>
        <li>Carte nationale d'identité ou passeport (copie recto-verso)</li>
        <li>Justificatif de domicile (moins de 3 mois)</li>
        <li>Acte de naissance de la future épouse (apostillé + traduction assermentée)</li>
        <li>Attestation de célibat de la future épouse (apostillée + traduction assermentée)</li>
        <li>Formulaire cerfa n° 15771*01 complété</li>
        <li>Questionnaire Vous mariez-vous librement complété par chacun</li>
      </ul>
    </div>

  </div><!-- /.page -->

  <p style="font-family:sans-serif;font-size:0.75rem;color:#888;text-align:center;margin-top:1.5rem">
    Modèle indicatif — <a href="<?= SITE_URL ?>" style="color:#1b4a35">blog-capvietnam.fr</a> — Non contractuel. Vérifiez les exigences exactes auprès de votre consulat avant envoi.
  </p>

</div>
</body>
</html>
