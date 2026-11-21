# StartingBlock — starter theme bloc

Thème bloc (FSE) de départ pour les formations WordPress [6clicks](https://6clicks.ch). Le design est volontairement neutre : couleurs, typographies et sections se personnalisent dans l'éditeur de site et dans `theme.json`.

Compatible WordPress 6.7+ (testé 7.1), PHP 8.2+.

## Installation

Avec Git, dans `wp-content/themes/` :

```
git clone <url-du-depot> startingblock
```

Ou sans Git : *Code → Download ZIP*, dézipper, renommer le dossier en `startingblock` et le copier dans `wp-content/themes/`.

Puis activer **StartingBlock** dans *Apparence → Thèmes*.

## Démarrer un projet

StartingBlock est un starter : on le copie une fois, il devient le thème du projet, et on ne le met plus à jour depuis ce dépôt.

1. Renommer le dossier `startingblock` en `mon-projet`
2. Dans `style.css`, remplacer `Theme Name: StartingBlock` par le nom du projet
3. Copier le dossier dans `wp-content/themes/` et l'activer

## Structure

```
style.css          En-tête du thème (+ CSS perso)
theme.json         Réglages et styles globaux : palette, typos, tailles, mise en page
functions.php      Chargement de style.css (front + éditeur)
templates/         Modèles : index, page, single, archive, search, 404, page-no-title
parts/             Parties de modèle : header, footer
patterns/          Compositions (exemple : hero.php)
AGENTS.md          Instructions pour les agents de code (Cline, etc.)
screenshot.png     Aperçu dans Apparence → Thèmes
```

## Travailler avec un agent de code

`AGENTS.md` décrit les conventions du thème : CSS dans `style.css`, variables de `theme.json`, échappement des sorties, blocs en PHP seul. Les agents comme Cline le lisent automatiquement quand le dossier du thème est ouvert dans VS Code. Adaptez-le au projet.

## Personnaliser

| Quoi | Où |
|---|---|
| Couleurs | `theme.json` → `settings.color.palette` (slugs `base`, `contrast`, `primary`, `secondary`, `accent`) |
| Typographies | Éditeur de site → Styles → Typographie (Font Library), ou `settings.typography.fontFamilies` |
| Largeurs | `settings.layout.contentSize` / `wideSize` |
| Sections | Ajouter un fichier dans `patterns/` sur le modèle de `hero.php` |

Les modifications faites dans l'éditeur de site sont enregistrées en base. Pour les reporter dans les fichiers du thème, utiliser le plugin [Create Block Theme](https://wordpress.org/plugins/create-block-theme/) → *Enregistrer les modifications dans le thème*.

## Licence

GPL v2 ou ultérieure.
