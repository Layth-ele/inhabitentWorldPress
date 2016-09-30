<?php
/**
 * The template for displaying archive pages.
 *
 * @package inhabitent_Theme
 */

 get_header(); ?>

 	<div id="primary" class="archive-product-area container">
 		<main id="main" class="sites-main" role="main">


 		<div class="page-header">

        <h1><?php single_term_title(); ?> </h1>

        <div class="shop-nav-container">
        		      <nav class="shop-nav">


<?php $terms = get_terms( array( 'taxonomy'=>'product_type') );?>
  <?php foreach ($terms as $term): ?>
  <a href="<?php echo get_term_link($term, 'product-type');?> "><?php echo $term->name; ?></a>
  <?php endforeach; wp_reset_postdata(); ?>

</nav>
</div>
</div>

<!-- list of the taxonomyterms -->
<div class="product-grid">

 			<?php while ( have_posts() ) : the_post(); ?>
        <div class="product-grid-item">
        <div class="thumbnail-wrapper">
          <a href='<?php echo esc_url( get_permalink() ); ?>'>
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>
     </a>

  </div>
  <div class="product_info">
    <span class="product-title"><?php echo get_the_title(); ?></span>
    <span class="price"><?php echo CFS()->get( 'product_price' ); ?></span>
  </div>
</div>

 			<?php endwhile; ?>
      </div>

 		</main><!-- #main -->
<?php echo laytharchiveproduct ?>
 	</div><!-- #primary -->
 <?php get_footer(); ?>
