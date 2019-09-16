<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	
		<div class="container">
			<div class="spacer is-large"></div>
			<div class="columns is-multiline">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div>
		</div><!-- .container -->
	
</aside><!-- #secondary -->
