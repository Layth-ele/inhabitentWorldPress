<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_Theme
 */
 get_header(); ?>

 	<div id="primary" class="content-area">
 		<main id="main" class="site-main" role="main">

 			<?php while ( have_posts() ) : the_post(); ?>

 				<?php get_template_part( 'template-parts/content', 'page' ); ?>


 			<?php endwhile; // End of the loop. ?>
      <?php echo hellllllllo?>

 		</main><!-- #main -->
    <?php get_sidebar(); ?>
 	</div><!-- #primary -->


 <?php get_footer(); ?>
