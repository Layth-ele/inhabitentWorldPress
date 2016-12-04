<?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent_Theme
 */

 get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="adventure-main" role="main">
      <?php
         $args = array( 'post_type' => 'adventure',
                  'order' => 'ASC',
                  'posts_per_page' => 4	 );

         $adventure_posts = get_posts( $args ); // returns an array of posts
      ?>

      <div class="container">
      <header class="page-header">
        <h1 class="adventure-archive-title"><?php post_type_archive_title('Latest ', 'Adventures'); ?></h1>
        </header><!-- .page-header -->

					<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>

							<div class="adventure-item">
                <div class="adventure-wrapper">

								<div class="adventure-images"><?php

                if ( has_post_thumbnail() ) : ?>

									<a href="<?php echo esc_url(get_permalink()) ?>">
									<?php echo the_post_thumbnail( 'large' ); ?>
									</a>
								<?php endif; ?>

<a class="adventures-read-more" href="<?php echo $adventure_posts;?>">Read More</a></div>

								<div class="adventure-header">
									<a href="<?php the_title() ?>"></a>
							</div><!-- .entry-content -->

					<?php endforeach; wp_reset_postdata(); ?>

        </div><!-- #adventure-item -->
        	          </div><!-- #adventure-item -->

       </div><!-- #container -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php echo archiveAventureTest ?>
<?php get_footer(); ?>
