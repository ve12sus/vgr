<?php
/**
 * Template part for displaying footer cards
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ve12s.us
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
	<div class="columns is-gapless>">
		<div class="column is-one-third">
			<a href="<?php echo esc_url( get_permalink() ); ?>">
				<figure class="image is-16by9">
					<?php the_post_thumbnail(); ?>
				</figure>
			</a>
		</div>
		<div class="column is-two-thirds">
			<?php bulmapress_the_title('is-5 cutive'); ?>
			<div class="subtitle is-6">
				<?php ve12suspress_posted_on(); ?>
			</div>
		</div>
	</div>
</article><!-- #card-## -->