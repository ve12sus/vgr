<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bulma
 */
?>

<?php get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main wrapper" role="main">
		<?php $my_query2 = new WP_Query( 'category_name=Reviews' ); ?>				   
		<div class="container is-four-fifths">
			<h1 class="title">
				Reviews
			</h1>
			<div class="columns is-multiline">
		<?php while ( $my_query2->have_posts() ) : $my_query2->the_post(); ?>
				<div class="column is-one-fifth">
					<?php get_template_part( 'template-parts/content', 'card' ); ?>
				</div>
		<?php endwhile; ?>
			</div>
		</div>
		  
		<?php $my_query_playing = new WP_Query( 'category_name=Playing' ); ?>
		<div class="container is-four-fifths">
			<h1 class="title">
				I am currently playing
			</h1>
			<div class="columns is-multiline">
		<?php while ( $my_query_playing->have_posts() ) : $my_query_playing->the_post(); ?>
				<div class="column is-one-fifth">
					<?php get_template_part( 'template-parts/content', 'card' ); ?>
				</div>
		<?php endwhile; ?>
			</div>
		</div>
				
		<?php $query_stories = new WP_Query( 'category_name=Uncategorized' ); ?>		
		<div class="container is-four-fifths">
			<h1 class="title">
				Stories
			</h1>
			<div class="columns is-multiline">
		<?php while ( $query_stories->have_posts() ) : $query_stories->the_post(); ?>
				<div class="column is-one-fifth">
					<?php get_template_part( 'template-parts/content', 'card' ); ?>
				</div>
		<?php endwhile; ?>
			</div>
		</div>
				
		
		

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
