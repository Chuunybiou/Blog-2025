<?php
require_once __DIR__ . '/../config/site.php';
$page_title = 'Checklist CCAM — Documents pour le certificat de capacité à mariage (2026)';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $page_title ?></title>
  <style>
    body { font-family: Arial, Helvetica, sans-serif; font-size: 11pt; color: #111; margin: 0; background: #f5f5f5; }
    .screen-wrapper { max-width: 860px; margin: 0 auto; padding: 2rem 1rem; }
    .toolbar { background: #1b4a35; color: #fff; border-radius: 8px; padding: 1rem 1.5rem; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 1rem; }
    .toolbar h1 { margin: 0; font-size: 1rem; font-weight: 700; }
    .toolbar p { margin: 0.2rem 0 0; font-size: 0.8rem; opacity: 0.75; }
    .toolbar a { background: #4db890; color: #0d2b1f; padding: 0.55rem 1.2rem; border-radius: 5px; font-weight: 700; font-size: 0.85rem; text-decoration: none; white-space: nowrap; }
    .page { background: #fff; padding: 2cm 2.5cm; box-shadow: 0 2px 12px rgba(0,0,0,.12); max-width: 21cm; margin: 0 auto; box-sizing: border-box; }
    .page-header { border-bottom: 3px solid #1b4a35; padding-bottom: 1rem; margin-bottom: 1.5rem; }
    .page-header h2 { margin: 0; font-size: 1.3rem; color: #1b4a35; }
    .page-header p { margin: 0.3rem 0 0; font-size: 0.85rem; color: #666; }
    .section { margin-bottom: 1.5rem; }
    .section h3 { background: #1b4a35; color: #fff; padding: 0.5rem 0.8rem; margin: 0 0 0.5rem; font-size: 0.9rem; border-radius: 3px; }
    .section h3.orange { background: #bf4a2a; }
    .section h3.blue { background: #1a3a6e; }
    table { width: 100%; border-collapse: collapse; }
    td { padding: 0.4rem 0.5rem; vertical-align: top; border-bottom: 1px solid #e5e5e5; font-size: 0.9rem; }
    td:first-child { width: 24px; text-align: center; }
    .check-box { width: 16px; height: 16px; border: 2px solid #444; display: inline-block; }
    .note-cell { font-size: 0.8rem; color: #888; }
    .status-ok { color: #1b6b52; font-weight: bold; }
    .status-warn { color: #bf4a2a; font-weight: bold; }
    .info-block { background: #f0faf5; border-left: 3px solid #1b4a35; padding: 0.7rem 1rem; font-size: 0.85rem; margin-top: 1.5rem; border-radius: 0 4px 4px 0; }
    .step-block { display: flex; gap: 0.5rem; align-items: flex-start; margin: 0.4rem 0; font-size: 0.88rem; }
    .step-num { background: #1b4a35; color: #fff; border-radius: 50%; width: 20px; height: 20px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.75rem; font-weight: bold; flex-shrink: 0; margin-top: 1px; }
    @media print {
      body { background: #fff; }
      .screen-wrapper { padding: 0; }
      .toolbar { display: none !important; }
      .page { box-shadow: none; padding: 1.5cm 2cm; margin: 0; max-width: 100%; }
      @page { size: A4; margin: 0; }
    }
  </style>
</head>
<body>
<div class="screen-wrapper">

  <div class="toolbar">
    <div>
      <h1>Checklist CCAM — Certificat de capacité à mariage (2026)</h1>
      <p>Cochez chaque document au fur et à mesure de votre constitution de dossier</p>
    </div>
    <a href="javascript:window.print()">🖨 Imprimer PDF</a>
  </div>

  <div class="page">

    <div class="page-header">
      <h2>CHECKLIST — Dossier CCAM au consulat</h2>
      <p>Demande de certificat de capacité à mariage pour mariage d'un(e) Français(e) avec un(e) ressortissant(e) vietnamien(ne) · Version 2026</p>
    </div>

    <!-- SECTION 1 : Documents côté français -->
    <div class="section">
      <h3>1. Documents côté conjoint(e) français(e)</h3>
      <table>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>Formulaire Cerfa n° 15771*01</strong> — "Demande de certificat de capacité à mariage"</td>
          <td class="note-cell">Téléchargeable sur service-public.fr</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>Copie intégrale de l'acte de naissance</strong></td>
          <td class="note-cell">Datant de moins de 3 mois · Mairie ou Service central d'état civil (SCEC)</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>Copie recto-verso de la carte nationale d'identité ou du passeport</strong></td>
          <td class="note-cell">En cours de validité</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>Justificatif de domicile</strong> (facture, bail, etc.)</td>
          <td class="note-cell">Datant de moins de 3 mois</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>Questionnaire "Vous mariez-vous librement ?"</strong> complété et signé</td>
          <td class="note-cell">Fourni par le consulat au moment du rendez-vous</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>En cas de divorce préalable :</strong> copie du jugement de divorce</td>
          <td class="note-cell">Traduit si étranger</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>En cas de veuvage préalable :</strong> acte de décès du précédent conjoint</td>
          <td class="note-cell">Traduit si étranger</td>
        </tr>
      </table>
    </div>

    <!-- SECTION 2 : Documents côté vietnamien -->
    <div class="section">
      <h3 class="orange">2. Documents côté conjoint(e) vietnamien(ne)</h3>
      <table>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>Acte de naissance vietnamien (Giấy khai sinh)</strong></td>
          <td class="note-cell">Apostille à la mairie de naissance + <strong>traduction assermentée</strong> en français</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>Attestation de célibat (Xác nhận tình trạng hôn nhân)</strong></td>
          <td class="note-cell">Délivrée par le bureau local du mariage · Apostille + traduction assermentée</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>Passeport vietnamien</strong> (copie de toutes les pages)</td>
          <td class="note-cell">En cours de validité</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>Justificatif de domicile vietnamien</strong> (Sổ hộ khẩu ou xác nhận cư trú)</td>
          <td class="note-cell">Apostille + traduction assermentée</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>Questionnaire "Vous mariez-vous librement ?"</strong> complété et signé</td>
          <td class="note-cell">En français — fourni par le consulat</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td><strong>Photos d'identité</strong> (2 photos)</td>
          <td class="note-cell">Format standard, fond blanc</td>
        </tr>
      </table>
    </div>

    <!-- SECTION 3 : Apostille et traductions -->
    <div class="section">
      <h3 class="blue">3. Apostille et traductions — points de vigilance</h3>
      <table>
        <tr>
          <td><span class="check-box"></span></td>
          <td>L'apostille est apposée par le <strong>Ministère des Affaires étrangères vietnamien (Cục Lãnh sự)</strong>, pas par la mairie</td>
          <td class="note-cell">Hanoï : 40 Trần Phú · HCM-V : 4 Alexandre de Rhodes</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td>Les traductions assermentées doivent être faites par un <strong>traducteur agréé près la Cour d'appel de Paris</strong></td>
          <td class="note-cell">Liste sur experts-judiciaires.fr</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td>Vérifier la <strong>date de validité</strong> de l'attestation de célibat (souvent 6 mois)</td>
          <td class="note-cell">Ne pas la faire trop tôt</td>
        </tr>
        <tr>
          <td><span class="check-box"></span></td>
          <td>Le CCAM délivré est valable <strong>1 an</strong> à partir de la date d'émission</td>
          <td class="note-cell">Prévoir la date du mariage en conséquence</td>
        </tr>
      </table>
    </div>

    <!-- Étapes et chronologie -->
    <div class="info-block">
      <strong style="display:block;margin-bottom:0.5rem;color:#1b4a35">📅 Ordre recommandé des démarches</strong>
      <div class="step-block"><span class="step-num">1</span><span>Réunir d'abord les documents français (acte de naissance SCEC — délai 2-4 semaines)</span></div>
      <div class="step-block"><span class="step-num">2</span><span>Faire apostiller les documents vietnamiens (Cục Lãnh sự — délai 1-2 semaines)</span></div>
      <div class="step-block"><span class="step-num">3</span><span>Faire traduire (délai 1-2 semaines)</span></div>
      <div class="step-block"><span class="step-num">4</span><span>Prendre rendez-vous au consulat (délai variable — jusqu'à 2 mois)</span></div>
      <div class="step-block"><span class="step-num">5</span><span>Rendez-vous d'audition — délai de délivrance du CCAM : 4 à 6 semaines</span></div>
      <div class="step-block"><span class="step-num">6</span><span>Mariage à la mairie vietnamienne + demande de visa VLS-TS conjoint</span></div>
    </div>

  </div>

  <p style="font-size:0.75rem;color:#888;text-align:center;margin-top:1.5rem">
    Modèle indicatif — <a href="<?= SITE_URL ?>/certificat-capacite-mariage-vietnam" style="color:#1b4a35">Guide CCAM complet</a> · blog-capvietnam.fr · 2026
  </p>

</div>
</body>
</html>
