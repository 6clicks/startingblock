# Instructions pour les agents de code

Ce dossier est un thème bloc WordPress (FSE) basé sur StartingBlock. WordPress 7.x, PHP 8.2+. Pas de Node, pas de npm, pas de build.

Ces règles concernent uniquement le thème. Un plugin du site a ses propres instructions dans son dossier.

## Thème ou plugin ?

Le thème gère l'apparence : styles, modèles, patterns, styles de bloc. Ce qui doit survivre à un changement de thème va dans un plugin : types de contenu, taxonomies, réglages, shortcodes, bandeaux, intégrations. Si une demande relève d'un plugin, le signaler avant de coder.

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
- **PHP** : hooks avec fonctions anonymes, comme dans `functions.php`. Échapper toute sortie : `esc_html()`, `esc_attr()`, `esc_url()`, ou `wp_kses()` avec une liste de balises autorisées.
- **Préfixe** : le slug du thème (`Text Domain` de `style.css`) préfixe les slugs de patterns (`startingblock/hero`), les noms de blocs (`startingblock/…`), les styles de bloc et les handles de scripts ou styles.
- **Traduction** : tout texte affiché passe par `__()`, `esc_html__()`, `esc_html_e()` ou `esc_attr__()` avec le text domain du thème, comme dans `patterns/hero.php`.
- **Styles de bloc** : `register_block_style()` sur `init` dans `functions.php`, CSS dans `style.css`.
- **Blocs** : un bloc inséré dans le contenu (pages, articles) ne va pas dans le thème : le signaler, il va dans le plugin de blocs (`startingblock-blocks`). Le thème ne contient que des blocs de présentation utilisés dans `templates/` ou `parts/`, en PHP seul (WordPress 7.0) : `register_block_type()` avec `supports.autoRegister` et un `render_callback`, un fichier par bloc dans `blocks/`, chargé depuis `functions.php`. Pas de `block.json`, pas de JavaScript. Ne pas nommer un attribut `style`, `className`, `backgroundColor` ou `textColor`. Documentation : https://make.wordpress.org/core/2026/03/03/php-only-block-registration/

## Sécurité

Ne jamais retirer ou contourner un échappement pour faire fonctionner une demande (afficher du HTML, du gras, un lien…). Proposer `wp_kses()` avec une liste courte de balises autorisées, et le signaler dans la réponse.

## Méthode

- Une demande = une modification ciblée. Ne toucher que les fichiers nécessaires, et le dire si d'autres fichiers semblent concernés.
- Ne pas modifier `templates/`, `parts/` ni `theme.json` sans demande explicite : ils reflètent le travail fait dans l'éditeur.
- Après chaque modification d'un fichier PHP, vérifier la syntaxe avec `php -l <fichier>`.
- L'agent ne voit pas le rendu : terminer en indiquant quoi vérifier dans le navigateur (page, bloc, réglage).
- Git : ne jamais faire de commit, de push ni d'annulation sans accord.
  - Avant une modification, si `git status` montre des changements non commités, le signaler et proposer un commit pour partir d'un état propre.
  - Après une modification terminée et vérifiée, proposer un commit avec un message court en français (« Ajoute le bloc carte-equipe »). Attendre la réponse avant de le lancer.
- Répondre en français : expliquer brièvement ce qui a été modifié et pourquoi.
