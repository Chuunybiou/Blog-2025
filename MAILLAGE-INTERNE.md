# MAILLAGE INTERNE — blog-capvietnam.fr
*Mis à jour le 22 juin 2026*

---

## Résumé

| Indicateur | Valeur |
|---|---|
| Pages live avec 0 lien éditorial entrant | 0 (toutes corrigées) |
| Pages live avec 1 lien éditorial entrant | 4 |
| Pages live avec 2–4 liens | ~25 |
| Pages surliées (nav sitewide) | 12 pages hubs |
| Lien cassé corrigé | 1 (`vi/index.php` → `apprendre-francais-capvietnam` inexistant) |
| Bug footer corrigé | `go?id=kofi` → `go.php?id=kofi` dans `footer-eco.php` |

---

## 1. Pages les plus liées (hors nav)

*Les liens provenant de `header.php` et `footer.php` (~70 pages chacun) ne sont pas comptés comme liens éditoriaux.*

| Page | Liens éditoriaux entrants | Pages sources |
|---|:---:|---|
| `faire-venir-conjointe-vietnamienne-france` | **10** | certificat-capacite, entretien-ambassade, visa-long-sejour, visa-schengen-belle-famille, titre-sejour, vi/giay-phep-ket-hon… |
| `transferer-argent-vietnam-wise` | **8** | argent-couple, igraal, fortuneo, banque-vietnam, organiser-finances, retraite-vietnam, s-expatrier, travailler-a-distance |
| `budget-mensuel-hanoi-2026` | **8** | budget-da-nang, budget-hue, budget-nha-trang, calculateur, hanoi-vs-hcm, louer-appartement, retraite, s-expatrier |
| `fiscalite-expat-france-vietnam` | **7** | checklist, compte-joint, fortuneo, portage-salarial (×2), retraite (×2), residence-fiscale, travailler-en-ligne |
| `residence-fiscale-france-vietnam-183-jours` | **7** | declarer-impots (×2), fiscalite (×3), portage-salarial (×3), retraite, travailler-a-distance |
| `assurance-sante-vietnam-expat` | **7** | budget-hanoi, budget-da-nang, checklist, hopitaux, protection-sociale, retraite (×2), s-expatrier |
| `travailler-a-distance-depuis-vietnam` | **7** | banque-vietnam, budget-hanoi, declarer-impots, organiser-finances, portage-salarial (×2), portage-vs-micro, protection-sociale |

---

## 2. Pages orphelines corrigées (22 juin 2026)

Toutes les pages live avec 0 lien éditorial entrant ont reçu au moins 1 lien :

| Page orpheline | Lien ajouté depuis | Contexte |
|---|---|---|
| `compte-bancaire-vietnam-etranger` | `checklist-depart-installer-vietnam` (ligne 143) | Section "Jour 3–5 : compte bancaire" |
| `adaptateur-prise-electrique-vietnam` | `checklist-depart-installer-vietnam` (section bagages) | Note sur la compatibilité des prises |
| `the-sante-vietnamien-dattes-goji-reglisse` | `tet-nouvel-an-lunaire-vietnam` (section bánh chưng) | "boissons traditionnelles pendant le Têt" |
| `visiter-pagode-vietnam-regles` | `belle-famille-vietnamienne-guide` (section funérailles) | "la pagode joue un rôle central" |
| `franchise-vietnamiens-physique-harmonie` | `differences-culturelles-couple-franco-vietnamien` (section communication) | Exception notable sur l'apparence |
| `igraal-cashback-expat-france` | `ramener-produits-francais-vietnam` (section liste perso) | Astuce cashback Amazon.fr depuis l'étranger |

---

## 3. Pages encore peu liées (1–2 liens entrants)

### `vol-paris-hanoi-pas-cher` — 1 lien entrant
*Sources de liens suggérées :*
- `checklist-depart-installer-vietnam` — section "Avant le départ : vol"
- `quitter-france-expat-vietnam` — logique narrative naturelle
- `s-expatrier-vietnam-2026-guide-complet` — section "rejoindre le Vietnam"

### `apprendre-vietnamien-couple` — 1 lien entrant
*Sources de liens suggérées :*
- `differences-culturelles-couple-franco-vietnamien` — la langue comme outil d'intégration
- `belle-famille-vietnamienne-guide` — quelques mots appréciés de la belle-famille

### `permis-conduire-vietnam` — 1 lien entrant
*Sources de liens suggérées :*
- `louer-appartement-hanoi-etranger` — visiter les apparts en scooter
- `s-expatrier-vietnam-2026-guide-complet` — section transport/mobilité

### `s-expatrier-vietnam-2026-guide-complet` — 1 lien entrant (article pilier sous-exploité)
*Sources de liens suggérées :*
- `checklist-depart-installer-vietnam` — lien en introduction ou conclusion
- `quitter-france-expat-vietnam` — la suite logique après "quitter la France"
- `visa-vietnam-francais-guide-2026` — croisement naturel

### `budget-mensuel-hue-2026` et `budget-mensuel-nha-trang-2026` — 1 lien mutuel chacun
*Action suggérée :* les intégrer dans `budget-mensuel-hanoi-2026` via une section "Comparer d'autres villes vietnamiennes".

---

## 4. CTAs contextuel cluster (démarches couple)

### Exécutés

| Article | CTA ajouté | Lien destination |
|---|---|---|
| `faire-venir-conjointe-vietnamienne-france` | ✅ Déjà présent | `simulateur-retroplanning-conjoint` |
| `visa-long-sejour-conjoint-vietnamien-france` | ✅ Ajouté (22/06) | `simulateur-retroplanning-conjoint` |
| `titre-sejour-vie-privee-familiale-conjoint-vietnamien` | ✅ Ajouté (22/06) | `simulateur-retroplanning-conjoint` |

### À ajouter (prochaine session)

| Article | Emplacement suggéré | CTA proposé |
|---|---|---|
| `certificat-capacite-mariage-vietnam` | Avant `<h2>Les documents</h2>` | Rétroplanning : "calcule tes délais depuis la demande du CCAM" |
| `entretien-ambassade-france-vietnam-visa-conjoint` | Avant `<h2>Préparer son dossier</h2>` | Rétroplanning : "combien de temps avant l'entretien dois-je commencer ?" |
| `s-expatrier-vietnam-2026-guide-complet` | Dans la section outils | `simulateur-installation-vietnam` |
| `quitter-france-expat-vietnam` | Dans la section outils | `simulateur-installation-vietnam` |

---

## 5. Clusters et structure hub-and-spoke

### Cluster 1 : Faire venir son conjoint au Vietnam
**Hub :** `faire-venir-conjointe-vietnamienne-france` (10 liens entrants ✅)

```
faire-venir-conjointe-vietnamienne-france (HUB)
├── certificat-capacite-mariage-vietnam
├── se-marier-vietnam-procedure-comite-populaire
├── transcription-mariage-service-central-nantes
├── visa-long-sejour-conjoint-vietnamien-france
├── entretien-ambassade-france-vietnam-visa-conjoint
├── titre-sejour-vie-privee-familiale-conjoint-vietnamien
├── visa-schengen-belle-famille-vietnamienne
└── simulateur-retroplanning-conjoint (outil)
```

### Cluster 2 : Finances expat
**Hub :** `organiser-finances-expat-france-vietnam` (3 liens entrants — sous-exploité)

```
organiser-finances-expat-france-vietnam (HUB)
├── transferer-argent-vietnam-wise ⭐ (hub secondaire 8 liens)
├── banque-vietnam-francais
├── compte-bancaire-vietnam-etranger
├── fortuneo-expat-compte-france
├── igraal-cashback-expat-france
├── compte-joint-franco-vietnamien
└── argent-couple-franco-vietnamien
```
→ **Action :** `organiser-finances-expat-france-vietnam` mérite plus de liens entrants depuis les articles de budget et de travail.

### Cluster 3 : S'installer au Vietnam
**Hub :** `s-expatrier-vietnam-2026-guide-complet` (1 lien — critique à renforcer)

```
s-expatrier-vietnam-2026-guide-complet (HUB potentiel)
├── checklist-depart-installer-vietnam
├── quitter-france-expat-vietnam
├── visa-vietnam-francais-guide-2026
├── louer-appartement-hanoi-etranger
├── carte-residence-temporaire-vietnam
├── permis-conduire-vietnam
└── simulateur-installation-vietnam (outil)
```
→ **Action prioritaire :** lier `s-expatrier` depuis au minimum 3–4 autres articles de la catégorie.

### Cluster 4 : Travail en ligne
**Hub :** `travailler-a-distance-depuis-vietnam` (7 liens entrants ✅)

```
travailler-a-distance-depuis-vietnam (HUB)
├── travailler-en-ligne-vietnam
├── portage-salarial-depuis-vietnam
├── portage-salarial-ou-micro-entreprise-vietnam
├── visa-teletravail-digital-nomad-vietnam
├── fiscalite-expat-france-vietnam ⭐ (hub secondaire)
│   ├── residence-fiscale-france-vietnam-183-jours
│   ├── declarer-impots-france-depuis-vietnam
│   └── protection-sociale-cfe-retraite-vietnam
└── cafes-coworkings-hanoi
```

### Cluster 5 : Couple mixte & culture
**Hub :** `differences-culturelles-couple-franco-vietnamien` (3 liens entrants)

```
differences-culturelles-couple-franco-vietnamien (HUB)
├── belle-famille-vietnamienne-guide
├── franchise-vietnamiens-physique-harmonie (orpheline → liée)
├── tet-nouvel-an-lunaire-vietnam
├── the-sante-vietnamien-dattes-goji-reglisse (orpheline → liée)
├── visiter-pagode-vietnam-regles (orpheline → liée)
└── apprendre-vietnamien-couple
```

---

## 6. Liens cassés et anomalies techniques

| Type | Fichier | Problème | Statut |
|---|---|---|---|
| Lien 404 | `vi/index.php:332` | `../apprendre-francais-capvietnam` n'existe pas | ✅ Corrigé → `hoc-tieng-phap-online-mien-phi` |
| Bug extension | `footer-eco.php:183` | `go?id=kofi` sans `.php` | ✅ Corrigé → `go.php?id=kofi` |
| PDF à vérifier | `merci-guide.php` | `assets/guide-cap-vietnam-2026.pdf` | ⚠️ À vérifier |
| PDF à vérifier | `merci-guide.php` | `/Checklist-Vietnam-CapVietnam.pdf` | ⚠️ À vérifier |
| PDF à vérifier | `vi/hoc-tieng-phap-online-mien-phi.php` | `../500-mots-essentiels-francais-vietnamien.pdf` | ⚠️ À vérifier |
| ID affilié | `banque-vietnam-francais.php` | `go.php?id=vietcombank` — vérifier l'ID dans go.php | ⚠️ À vérifier |

---

## 7. Pages surliées via navigation sitewide (hors scope éditorial)

Ces pages reçoivent des liens de `header.php` / `footer.php` présents sur ~70 pages. Non-problématique SEO.

`blog-capvietnam` · `articles-capvietnam` · `guide-cap-vietnam-2026` · `calculateur-budget-vietnam` · `outils-vivre-vietnam` · `livre-vietnamien` · `mes-livres` · `a-propos-capvietnam` · `contact-capvietnam` · `confidentialite-capvietnam` · `mentions-legales-capvietnam` · `cookies-capvietnam`
