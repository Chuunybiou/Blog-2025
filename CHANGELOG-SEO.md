# CHANGELOG SEO — blog-capvietnam.fr
**Session :** Mai–Juin 2026  
**Auteur :** Anthony Bouillon  
**Modèle :** Claude Sonnet 4.6

---

## Cluster Argent & Travail — Décisions anti-cannibalisation (Juin 2026)

| Article plan | Décision | Justification |
|---|---|---|
| Pilier `/travailler-a-distance-depuis-vietnam` | **CREATE** | Hub stratégique distinct de `travailler-en-ligne-vietnam` (qui est pratique/vie nomade) |
| S1 `/portage-salarial-depuis-vietnam` | **CREATE** | N'existe pas, requête avec impressions actives |
| S2 `/portage-salarial-ou-micro-entreprise-vietnam` | **CREATE** | N'existe pas, requête complémentaire de S1 |
| S3 `/residence-fiscale-france-vietnam-183-jours` | **CREATE** | `fiscalite-expat-france-vietnam` aborde la résidence fiscale mais sans la profondeur 183j/4 critères/3 cas concrets |
| S4 convention fiscale | **ENRICH** `fiscalite-expat-france-vietnam.php` | Ajouter tableau "type de revenu → imposé où" + liens S3/S5 |
| S5 `/declarer-impots-france-depuis-vietnam` | **CREATE** | Section 3 de fiscalite couvre brièvement, mais requête distincte mérite sa propre page |
| S6 `/visa-teletravail-digital-nomad-vietnam` | **CREATE** | `travailler-en-ligne-vietnam` a une section visa courte — requête distincte, zone grise VN à documenter |
| S7 compte bancaire Vietnam | **ENRICH** `banque-vietnam-francais.php` | Existe, requête avec impressions — ajouter tableau docs par statut + vécu |
| S8 `/protection-sociale-cfe-retraite-vietnam` | **CREATE** | `retraite-vietnam-francais` couvre la retraite mais pas CFE/sécu/cotisations |

## Fixes UI page articles (Juin 2026)
- **Tri par date desc** : `articles-capvietnam.php` — les articles s'affichent désormais du plus récent au plus ancien
- **Filtre `published`** : ajouter `"published": false` dans articles.json pour différer la publication d'un article sans le supprimer
- **Badge "Nouveau"** : affiché automatiquement sur les articles publiés dans les 45 derniers jours
- **Tables CSS** : ajout `.table-wrap` (overflow-x mobile), lignes alternées (zebra), `position:sticky` sur `<thead>`, première colonne en gras, taille réduite sur mobile

---

## Résumé des tâches (T1–T9 + Final)

### T3 — Correction JSON-LD page À propos
**Fichier :** `a-propos-capvietnam.php`
- Canonical corrigé : `/a-propos` → `/a-propos-capvietnam`
- OG URL corrigée : `/a-propos` → `/a-propos-capvietnam`
- Schema upgradé de `AboutPage` → `ProfilePage + Person` avec :
  - `jobTitle`, `description`, `nationality`, `knowsLanguage`
  - `sameAs` : TikTok + Amazon Author page

---

### T6 — Nouveau silo « Conjoint(e) vietnamien(ne) en France » (7 pages)

| Fichier | Titre | Type |
|---|---|---|
| `faire-venir-conjointe-vietnamienne-france.php` | Guide complet — faire venir son conjoint(e) vietnamien(ne) en France | Page pilier |
| `visa-long-sejour-conjoint-vietnamien-france.php` | Visa long séjour conjoint de Français au Vietnam | Article |
| `certificat-coutumier-acte-mariage-vietnam-ccam.php` | Certificat coutumier et acte de mariage (CCAM) | Article |
| `transcription-mariage-service-central-nantes.php` | Transcription du mariage au SCEC de Nantes | Article |
| `titre-sejour-vie-privee-familiale-conjoint-vietnamien.php` | Titre de séjour vie privée et familiale | Article |
| `entretien-ambassade-france-vietnam-visa-conjoint.php` | Préparer l'entretien à l'ambassade de France | Article |
| `visa-schengen-belle-famille-vietnamienne.php` | Visa Schengen pour la belle-famille vietnamienne | Article |

Chaque page contient : TOC ancré, tableau documents, 3–5 FAQ, `$page_faq` (schéma FAQPage auto), liens internes réciproques.

---

### T7 — Articles thématiques gap-fill (8 pages)

| Fichier | Thème |
|---|---|
| `se-marier-vietnam-procedure-comite-populaire.php` | Mariage au comité populaire (UBND) |
| `visa-tt-carte-residence-trc-mariage.php` | Visa TT et TRC pour conjoint de Vietnamien(ne) |
| `hopitaux-medecins-francophones-vietnam.php` | Hôpitaux et médecins francophones (Hanoï + HCMV) |
| `sim-internet-applications-vietnam.php` | SIM, internet et applications à installer |
| `hanoi-vs-ho-chi-minh-ville-installation.php` | Hanoï vs Hô Chi Minh-Ville : où s'installer ? |
| `retraite-vietnam-francais.php` | Prendre sa retraite au Vietnam (guide Français) |
| `enfant-couple-franco-vietnamien-nationalite.php` | Nationalité d'un enfant de couple franco-vietnamien |
| `pacs-vietnamienne-reconnaissance.php` | PACS avec un(e) Vietnamien(ne) — droits et limites |

---

### T8 — Pages budget villes (3 pages)

| Fichier | Ville |
|---|---|
| `budget-mensuel-da-nang-2026.php` | Đà Nẵng |
| `budget-mensuel-nha-trang-2026.php` | Nha Trang |
| `budget-mensuel-hue-2026.php` | Huế |

Chaque page contient un tableau budget sur 3 niveaux (serré / confort / expat+) et des liens croisés vers Hanoï et HCMV.

---

### T9 — GEO : dates de mise à jour

- Ajout de `<span>Mis &agrave; jour : Juin 2026</span>` dans le bloc hero-meta de **39 articles** (ceux qui ne l'avaient pas).
- Couverture FAQ vérifiée : **57 fichiers** ont déjà `$page_faq` → schéma FAQPage présent partout, aucune action requise.

---

### Final — Sitemap + nettoyage liens

**`sitemap.xml`**
- Correction slug `/apprendre-francais` → `/apprendre-francais-capvietnam`
- Correction slug `/a-propos` → `/a-propos-capvietnam`
- Correction slug `/photos-videos` → `/photos-videos-capvietnam`
- Ajout des **18 nouvelles pages** (T6 × 7 + T7 × 8 + T8 × 3) avec `lastmod: 2026-06-11`
- Nouveau sitemap : **55 URLs** (hors /vi/)

**Liens `.php` internes supprimés**
- `_article-comments.php` : `confidentialite-capvietnam.php` → `confidentialite-capvietnam`
- `lead-magnet.php` : `confidentialite-capvietnam.php` → `confidentialite-capvietnam`

**`data/articles.json`**
- 18 nouvelles entrées ajoutées pour alimenter `_related-articles.php`

---

## Cluster Argent & Travail — Pages créées/enrichies (Juin 2026)

| Fichier | Type | Statut |
|---|---|---|
| `travailler-a-distance-depuis-vietnam.php` | Pilier hub | CREATE |
| `portage-salarial-depuis-vietnam.php` | Satellite S1 | CREATE |
| `portage-salarial-ou-micro-entreprise-vietnam.php` | Satellite S2 | CREATE |
| `residence-fiscale-france-vietnam-183-jours.php` | Satellite S3 | CREATE |
| `fiscalite-expat-france-vietnam.php` | Satellite S4 | ENRICH |
| `declarer-impots-france-depuis-vietnam.php` | Satellite S5 | CREATE |
| `visa-teletravail-digital-nomad-vietnam.php` | Satellite S6 | CREATE |
| `banque-vietnam-francais.php` | Satellite S7 | ENRICH |
| `protection-sociale-cfe-retraite-vietnam.php` | Satellite S8 | CREATE |

Maillage depuis articles existants :
- `travailler-en-ligne-vietnam.php` → lien pilier ajouté avant FAQ
- `organiser-finances-expat-france-vietnam.php` → lien pilier ajouté dans "Articles liés"
- `budget-mensuel-hanoi-2026.php` → lien pilier ajouté avant FAQ
- `visa-vietnam-francais-guide-2026.php` → lien pilier + S6 ajoutés avant FAQ

---

## Placeholders `[À VÉRIFIER]` à compléter

Ces balises indiquent des montants, délais ou règles administratives à vérifier avec des sources officielles avant publication.

### `faire-venir-conjointe-vietnamienne-france.php`
- Délai CCAM (semaines)
- Délai instruction visa long séjour ambassade
- Délai SCEC Nantes (mois)
- Durée VLS-TS initiale

### `visa-long-sejour-conjoint-vietnamien-france.php`
- Montant frais VFS Global (€)
- Délai traitement dossier ambassade (semaines)
- Liste précise des pièces justificatives OFPRA

### `certificat-coutumier-acte-mariage-vietnam-ccam.php`
- Frais notaire vietnamien pour CCAM (VND)
- Délai apostille au Vietnam (jours)
- Liste des consulats qui acceptent le dépôt postal

### `transcription-mariage-service-central-nantes.php`
- Délai de traitement SCEC (mois, variable)
- Adresse postale exacte du SCEC
- Frais éventuels de transcription

### `titre-sejour-vie-privee-familiale-conjoint-vietnamien.php`
- Délai OFII pour visite médicale (semaines)
- Durée VPF initiale accordée (1 ou 2 ans)
- Conditions pour passer en TRC 10 ans

### `entretien-ambassade-france-vietnam-visa-conjoint.php`
- Délai de convocation après dépôt dossier (semaines)
- Durée moyenne entretien (minutes)
- Taux de refus actuel [À NE PAS PUBLIER SI INCONNU]

### `visa-schengen-belle-famille-vietnamienne.php`
- Frais de visa Schengen en VND au moment de la demande
- Délai de traitement au VFS de Hanoï / HCMV
- Durée max accordée pour première demande

### `se-marier-vietnam-procedure-comite-populaire.php`
- Frais de certificat de capacité matrimoniale (CCAM côté France) en €
- Délai apostille au Vietnam
- Délai traitement au Comité populaire (jours)

### `visa-tt-carte-residence-trc-mariage.php`
- Durée du visa TT (mois)
- Durée TRC pour conjoint (ans)
- Coût en USD/VND au Département de l'Immigration
- Délai de traitement (jours ouvrés)
- Délai pour informer l'Immigration en cas de divorce

### `hopitaux-medecins-francophones-vietnam.php`
- Tarifs consultation Vinmec, FMP, HFV (USD)
- Numéros d'urgence à jour (Hanoï + HCMV)
- Prix moyen assurance santé expat annuelle (€/an)

### `sim-internet-applications-vietnam.php`
- Prix forfaits Viettel/Mobifone (VND/mois)
- eSIM : opérateurs qui acceptent les eSIM étrangères
- Prix abonnement fibre à domicile (VND/mois)

### `hanoi-vs-ho-chi-minh-ville-installation.php`
- Salaire moyen enseignant FLE à Hanoï vs HCMV (USD/mois)
- Coût loyer 1 chambre : Hanoï quartier Tây Hồ vs HCMV District 2 (USD)

### `retraite-vietnam-francais.php`
- Plafond de revenus pour dérogation fiscale convention France-Vietnam [À VÉRIFIER AVEC EXPERT FISCAL]
- Montant minimum de retraite recommandé pour vivre confortablement (USD/mois)
- Frais d'assurance santé pour +60 ans au Vietnam (€/an)

### `enfant-couple-franco-vietnamien-nationalite.php`
- Délai de traitement déclaration de naissance à l'ambassade (semaines)
- Documents exacts pour la déclaration de naissance à l'ambassade
- Conditions pour l'obtention de la nationalité vietnamienne côté Vietnam [consulter ambassade VN]

### `pacs-vietnamienne-reconnaissance.php`
- Délai et coût PACS en mairie / notaire (€)
- Cas exact où un titre de séjour « vie de famille » peut être accordé pour un PACS (rare)

### `travailler-a-distance-depuis-vietnam.php` (pilier)
- Montants simulations portage (2 000 / 3 500 / 5 000 € CA) — renvoi vers S1
- Tarifs CFE actuels — renvoi vers S8
- `[TON EXPÉRIENCE ICI : ta situation personnelle actuelle]` — section-9 du fichier

### `portage-salarial-depuis-vietnam.php` (S1)
- Fourchette frais de gestion société de portage (8–15% à vérifier)
- Net mensuel simulé pour 4 niveaux de CA (2 000 / 3 500 / 5 000 / 8 000 €)
- Sociétés de portage spécialisées en expatriation : noms et URLs à mettre à jour

### `portage-salarial-ou-micro-entreprise-vietnam.php` (S2)
- Seuil CA micro-entreprise (72 600 € pour services en 2026 à confirmer)
- Taux de cotisations micro si maintenu résident fiscal FR

### `residence-fiscale-france-vietnam-183-jours.php` (S3)
- Articles exacts LIRPP vietnamien sur les 183 jours (numéros d'articles à préciser)
- Confirmation mécanisme cascade convention 1993 (articles 4-1 et 4-2)
- Délais et procédures pour attestation de résidence fiscale vietnamienne

### `declarer-impots-france-depuis-vietnam.php` (S5)
- Délais exacts déclaration résidents vs non-résidents 2026
- Case spécifique formulaire 2042 pour transfert de domicile fiscal hors France
- Articles précis convention 1993 pour le mécanisme de crédit d'impôt

### `visa-teletravail-digital-nomad-vietnam.php` (S6)
- Prix exact e-visa Vietnam en 2026 (actuellement ~25 USD — à confirmer)
- Conditions exactes d'obtention visa DL (liste documents à jour)
- Montant amende enregistrement de séjour (1 500 000 – 3 000 000 VND à confirmer)

### `protection-sociale-cfe-retraite-vietnam.php` (S8)
- Tarifs CFE 2026 par tranche de revenus (site cfe.fr)
- Conditions de maintien CNAV volontaire à l'étranger
- Fourchette prix assurance santé internationale pour expatriés (€/an)

### `banque-vietnam-francais.php` (S7 — enrichi)
- Vérifier que le tableau "documents par statut" correspond aux exigences actuelles Vietcombank/Techcombank

---

### `budget-mensuel-da-nang-2026.php`
- Tous les montants de la grille budget (logement, nourriture, transport, loisirs)
- Vérifier les 3 niveaux (serré / confort / expat+) avec données récentes

### `budget-mensuel-nha-trang-2026.php`
- Tous les montants de la grille budget
- Vérifier prix locations saisonnières (haute/basse saison)

### `budget-mensuel-hue-2026.php`
- Tous les montants de la grille budget
- Vérifier prix logements (Hué est moins documenté que Hanoï/HCMV)

---

## Placeholders `[TON EXPÉRIENCE ICI]`

Aucun placeholder de ce type trouvé dans les fichiers PHP. Les sections personnelles ont été rédigées en style générique ou avec des suggestions entre crochets directement dans le texte.

---

## Actions post-déploiement (checklist manuelle)

### Search Console
- [ ] Soumettre le nouveau `sitemap.xml` dans Google Search Console → Sitemaps → Ajouter/Revalider
- [ ] Demander la ré-indexation de la page pilier : `faire-venir-conjointe-vietnamienne-france`
- [ ] Demander la ré-indexation de la page à-propos : `a-propos-capvietnam` (canonical corrigé)
- [ ] Demander la ré-indexation de `apprendre-francais-capvietnam` (slug corrigé)

### Rich Results Test (https://search.google.com/test/rich-results)
Tester a minima ces 3 URLs :
- [ ] `https://www.blog-capvietnam.fr/faire-venir-conjointe-vietnamienne-france` — FAQPage
- [ ] `https://www.blog-capvietnam.fr/a-propos-capvietnam` — ProfilePage + Person
- [ ] `https://www.blog-capvietnam.fr/budget-mensuel-hanoi-2026` — Article + FAQPage

### Maillage interne à compléter
- [ ] Ajouter un lien depuis `se-marier-vietnamienne-demarches-france` → `faire-venir-conjointe-vietnamienne-france` (page pilier silo)
- [ ] Ajouter un lien depuis `differences-culturelles-couple-franco-vietnamien` → `pacs-vietnamienne-reconnaissance`
- [ ] Ajouter un lien depuis `budget-mensuel-hanoi-2026` → `budget-mensuel-da-nang-2026` et `budget-mensuel-hue-2026`

### Contenu à compléter avant indexation critique
- [ ] Remplir tous les `[À VÉRIFIER]` dans les pages du silo conjoint (T6) — ces pages visent des requêtes à fort intent
- [ ] Remplir les grilles de budget Da Nang, Nha Trang, Hué avec des chiffres vérifiés
- [ ] Remplir tous les `[À VÉRIFIER]` du cluster Argent & Travail (voir inventaire ci-dessus)
- [ ] Remplir `[TON EXPÉRIENCE ICI]` dans `travailler-a-distance-depuis-vietnam.php` section-9

### Search Console — actions cluster Argent & Travail
- [ ] Revalider `sitemap.xml` (7 nouvelles URLs ajoutées)
- [ ] Demander indexation manuelle pour la page pilier : `travailler-a-distance-depuis-vietnam`
- [ ] Surveiller dans 6–8 semaines les impressions sur : "portage salarial vietnam", "residence fiscale vietnam 183 jours", "digital nomad vietnam visa"
- [ ] Suivre le positionnement de `fiscalite-expat-france-vietnam` après enrichissement S4 (tableau revenus)
- [ ] Suivre le positionnement de `banque-vietnam-francais` après enrichissement S7 (tableau docs)

### Rich Results Test — nouvelles pages cluster
- [ ] `https://www.blog-capvietnam.fr/travailler-a-distance-depuis-vietnam` — Article + FAQPage
- [ ] `https://www.blog-capvietnam.fr/portage-salarial-depuis-vietnam` — Article + FAQPage
- [ ] `https://www.blog-capvietnam.fr/residence-fiscale-france-vietnam-183-jours` — Article + FAQPage

---

*Généré le 2026-06-11 — cluster Argent & Travail ajouté (9 pages)*

---

## Nouvelles pages — Session 2 (11 juin 2026)

### `/retraite-vietnam-francais` — Réécriture complète
Article gap-fill (~700 mots) réécrit en guide de référence (~1 800 mots).
Sections ajoutées : certificat de vie, CFE seniors, distinction pensions privées/publiques selon convention 1993, démarches avant le départ (CNAV/AGIRC-ARRCO), vie quotidienne [TON EXPÉRIENCE ICI], 5 FAQ.

### `/portage-salarial-vietnam` — Redirect 301
`portage-salarial-depuis-vietnam.php` créé lors de la session précédente couvre déjà la même requête.
**Anti-cannibalisation :** `portage-salarial-vietnam.php` = redirect PHP 301 vers `/portage-salarial-depuis-vietnam`.
L'URL plus courte reste capturée sans dupliquer le contenu.

### Maillage ajouté
- `quitter-france-expat-vietnam.php` → portage (section statut professionnel)
- `fiscalite-expat-france-vietnam.php` → portage (bloc articles liés)
- `portage-salarial-depuis-vietnam.php` → travailler-en-ligne + organiser-finances + quitter-france + calculateur
- `visa-vietnam-francais-guide-2026.php` → retraite (info-box avant FAQ)
- `assurance-sante-vietnam-expat.php` → retraite (info-box avant FAQ)
- `budget-mensuel-hanoi-2026.php` → retraite (info-box avant FAQ)
- `budget-mensuel-hcmc-2026.php` → retraite (info-box avant FAQ)

---

## Placeholders à compléter — Session 2

### `retraite-vietnam-francais.php`
- Coût e-visa exact en 2026 (tarif officiel USD → EUR)
- Date exacte de fin de l'exemption 45 jours pour les Français
- Procédure certificat de vie au Vietnam (consulat ou autorité locale, dématérialisé ?)
- Fréquence exigée par CNAV et AGIRC-ARRCO
- Grille tarifaire CFE 2026 selon l'âge (consulter cfe.fr)
- Âge limite à l'entrée des principaux assureurs santé internationaux
- Articles exacts convention France-Vietnam 1993 sur pensions fonctionnaire vs privées
- Prix aide à domicile à Hanoï/HCMV (VND/heure)
- `[TON EXPÉRIENCE ICI]` section-8 : ce que tu observes chez les retraités français autour de toi

### Actions post-déploiement — Session 2
- [ ] Demander indexation de `/retraite-vietnam-francais` dans Search Console
- [ ] Demander réindexation des 4 articles modifiés : visa-guide, assurance-sante, budget-hanoi, budget-hcmc
- [ ] Demander indexation de `/portage-salarial-vietnam` (le redirect sera détecté et le signal consolidé sur `/portage-salarial-depuis-vietnam`)
- [ ] Demander réindexation `quitter-france-expat-vietnam` et `fiscalite-expat-france-vietnam`
- [ ] Tester le redirect : `https://www.blog-capvietnam.fr/portage-salarial-vietnam` → doit rediriger en 301 vers `/portage-salarial-depuis-vietnam`
- [ ] Compléter les `[À VÉRIFIER]` retraite avec les sources officielles (cfe.fr, lassuranceretraite.fr, info-retraite.fr, France Diplomatie)
