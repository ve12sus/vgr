<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ve12s.us
 */

if ( ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	
		<div class="container">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- .container -->
	
</aside><!-- #secondary -->
