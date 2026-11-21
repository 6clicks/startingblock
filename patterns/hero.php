<?php
/**
 * Title: Hero
 * Slug: startingblock/hero
 * Categories: banner
 * Description: Bannière pleine largeur avec titre, texte et bouton. Exemple de pattern à dupliquer.
 */
?>
<!-- wp:cover {"dimRatio":0,"customOverlayColor":"#E5E5E5","minHeight":60,"minHeightUnit":"vh","align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#E5E5E5"></span><div class="wp-block-cover__inner-container">
	<!-- wp:heading {"level":1,"textColor":"contrast"} -->
	<h1 class="wp-block-heading has-contrast-color has-text-color"><?php esc_html_e('Titre principal', 'startingblock'); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"textColor":"contrast"} -->
	<p class="has-contrast-color has-text-color"><?php esc_html_e('Une phrase d’accroche qui présente le site.', 'startingblock'); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons -->
	<div class="wp-block-buttons">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('En savoir plus', 'startingblock'); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div></div>
<!-- /wp:cover -->
