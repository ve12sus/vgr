<?php
/**
 * Template part for displaying cardss
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ve12s.us
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card is-shadowless'); ?>>
	<div class="card-image">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<figure class="image is-16by9">
				<?php the_post_thumbnail(); ?>
			</figure>
		</a>
	</div>
	<div class="card-content">
		<div class="media">
			<header class="media-content">
				<?php bulmapress_the_title('is-5'); ?>
				<div class="subtitle is-6">
					<?php ve12suspress_posted_on(); ?>
				</div>
			</header>
		</div>
	</div>
</article><!-- #card-## -->