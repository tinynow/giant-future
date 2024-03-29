<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Giant Future
 */

get_header(); ?>

		<main class="main-content">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php giant_future_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>