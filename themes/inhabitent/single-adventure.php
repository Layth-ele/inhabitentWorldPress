<?php
/**
 * Template: Single Adventure Template
 *
 * @package inhabitent_Theme
 */
get_header(); ?>

	<div id="primary" class="adventure-area">
		<main id="main" class="adventure-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="adventure-images">

				</header><!---header-->
					<div class="adventure-container">
						<?php the_title( '<h1 class="adventure-title">', '</h1>' ); ?>
						<span class="adventure-author">by <?php the_author(); ?></span>
						<div class="adventure-content">
							<?php the_content(); ?>
						</div><!---content-->
						<div class="social-buttons">
						<button class="single-post-social"><i class="fa fa-facebook"></i> Like</button>
						<button class="single-post-social"><i class="fa fa-twitter"></i> Tweet</button>
						<button class="single-post-social"><i class="fa fa-pinterest"></i> Pin</button>
					 </div><!--- social buttons-->
					</div>
			</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php echo testSingleadventure ?>

<?php get_footer(); ?>
