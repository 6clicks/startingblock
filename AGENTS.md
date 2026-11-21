# Instructions pour les agents de code

Ce dossier est un thème bloc WordPress (FSE), créé à partir du starter StartingBlock. WordPress 7.x, PHP 8.2+. Pas de Node, pas de npm, pas de build.

## Structure

| Fichier / dossier | Rôle |
|---|---|
| `style.css` | En-tête du thème et CSS perso. Déjà chargé au front et dans l'éditeur par `functions.php` : ne pas créer d'autre feuille de style. |
| `theme.json` | Réglages et styles globaux (v3) : palette, typographies, tailles, mise en page. Source de vérité du design. |
| `functions.php` | Code PHP du thème (hooks). |
| `templates/`, `parts/` | Modèles et parties de modèle en HTML de blocs. Souvent modifiés dans l'éditeur de site puis enregistrés avec Create Block Theme. |
| `patterns/` | Compositions (fichiers PHP avec en-tête). |

## Conventions

- **Design** : lire `theme.json` pour connaître les slugs à jour. Utiliser les variables `var(--wp--preset--color--{slug})`, `--wp--preset--font-size--{slug}`, `--wp--preset--font-family--{slug}`, `--wp--preset--spacing--{20…80}`. Pas de valeur en dur quand un preset existe.
- **CSS** : à la fin de `style.css`. Sélecteurs combinés avec la classe du bloc (`.wp-block-group.is-style-…`). Pas de `!important`.
- **PHP** : hooks avec fonctions anonymes, comme dans `functions.php`. Échapper toute sortie : `esc_html()`, `esc_attr()`, `esc_url()`, ou `wp_kses()` avec une liste de balises autorisées. Text domain : celui de l'en-tête de `style.css`.
- **Styles de bloc** : `register_block_style()` sur `init` dans `functions.php`, CSS dans `style.css`.
- **Blocs** : par défaut, blocs en PHP seul (WordPress 7.0) : `register_block_type()` avec `supports.autoRegister` et un `render_callback`, un fichier par bloc dans `blocks/`, chargé depuis `functions.php`. Pas de `block.json`, pas de JavaScript. Ne pas nommer un attribut `style`, `className`, `backgroundColor` ou `textColor`. Documentation : https://make.wordpress.org/core/2026/03/03/php-only-block-registration/

## Méthode

- Une demande = une modification ciblée. Ne toucher que les fichiers nécessaires, et le dire si d'autres fichiers semblent concernés.
- Ne pas modifier `templates/`, `parts/` ni `theme.json` sans demande explicite : ils reflètent le travail fait dans l'éditeur.
- Ne pas faire de commit, de push ni d'annulation Git sans qu'on le demande : l'utilisateur gère l'historique.
- Répondre en français : expliquer brièvement ce qui a été modifié et pourquoi.
