<?php
/**
 * The template for displaying all pages.
 *
 * @package inhabitent_Theme
 */
get_header();
?>

 <div id="primary" class="front-area">
  		<main id="main" role="main">

  			<!-- front page hero image -->
  		<section class="home-hero">
<img src="<?php
bloginfo('template_directory');
?>/images/logos/inhabitent-logo-full.svg" alt="inhabitent full logo" />
    		</section>


  			<!-- Shop Stuff Section -->
      <section class="shop-stuff">
			<div class="product-info container" >
  				<h1>Shop Stuff</h1>
  			<div class="product-type-blocks">

  						<?php
$terms = get_terms(array(//getting the posts for adventure
    'taxonomy' => 'product_type'
));
?>

  						<?php
foreach ($terms as $term):
?>
  							<div class="product-type-wrapper">

  								<?php
    echo //Getting the Image using the Taxonomy Array
        '<img class="logo" src="' . get_bloginfo('template_directory') . '/images/product-type-icons/' . $term->slug . '.svg">';
?>

  								<p><?php
    echo $term->description;
?></p>

  								 //Getting the link using the Taxonomy Array
  									<a href="<?php
    echo get_term_link($term, 'product-type');
?>"><button><?php
    echo $term->slug;
?> Stuff</button></a>

  							</div>
  						<?php
endforeach;
?>
  				</div>
  			</div>

</section>

  			<!-- Inhabitent Journal Section -->
    <section class="main-journal container">
			<div class="inhabitent-journals">
  				<h1>Inhabitent Journals</h1>

  				<div class="home-journal-container">
<ul>
  					<?php
$args          = array(
    'post_type' => 'post',
    'order' => 'DSC',
    'posts_per_page' => 3
);
$product_posts = get_posts($args); // returns an array of posts
?>

  					<?php
foreach ($product_posts as $post):
    setup_postdata($post);
?>
     <li>
  					<div class="thumbnail-wrapper">
  						<?php
    if (has_post_thumbnail()):
?>
								<?php
        the_post_thumbnail('large');
?>
							<?php
    endif;
?>
						</div>
  						<div class="home-journal-item-info">
  							<span class="journal-meta"><?php
    if ('post' === get_post_type()):
?>
                  <?php
        inhabitent_posted_on();
?> / <?php
        comments_number('0 Comments', '1 Comment', '% Comments');
?> / <?php
        inhabitent_posted_by();
?></span>
  							<a href="<?php
        echo get_permalink();
?>"><?php
        the_title();
?></a>
  						<div class="meta">	<a class="read-more" href="<?php
        echo get_permalink();
?>">Read Entry</a></div>
                <?php
    endif;
?>
  						</div>
  					</li>

  					<?php
endforeach;
wp_reset_postdata();
?>
</ul>

  				</div>
  			</section>
  <!-- Latest Adventures -->
  <section class="main-adventure container">
		<div class="inhabitent-adventures">
		 <h1>Latest Adventures</h1>
		 <?php
$args            = array(
    'post_type' => 'adventure',
    'posts_per_page' => 4,
    'order' => 'ASC'
);
$adventure_posts = get_posts($args);
?>

	<div class="latest-adventures">
		<div class="left-box">
			<div class="adventure-wrapper-one">
			<div class="header-one"><a class="title-one" href="<?php
echo $adventure_posts[0]->guid;
?>"><?php
echo $adventure_posts[0]->post_title;
?></a>
			<a class="adventure-read-more" href="<?php
echo $adventure_posts[0]->guid;
?>">Read More</a></div>
			<?php
echo get_the_post_thumbnail($adventure_posts[0]->ID, 'large');
?>
			</div>
		</div><!--left-box-->

		<div class="right-box">
			<div class="adventure-wrapper-two">
			<div class="header-two"><a class="title-two" href="<?php
echo $adventure_posts[1]->guid;
?>"><?php
echo $adventure_posts[1]->post_title;
?></a>
			<a class="adventure-read-more" href="<?php
echo $adventure_posts[1]->guid;
?>">Read More</a></div>
			<?php
echo get_the_post_thumbnail($adventure_posts[1]->ID, 'large');
?>
			</div>

			<div class="bottom-box">
				<div class="adventure-wrapper-three">
				<div class="header-three"><a class="title-three" href="<?php
echo $adventure_posts[2]->guid;
?>"><?php
echo $adventure_posts[2]->post_title;
?></a>
				<a class="adventure-read-more" href="<?php
echo $adventure_posts[2]->guid;
?>">Read More</a></div>
				<?php
echo get_the_post_thumbnail($adventure_posts[2]->ID, 'large');
?>
				</div>

				<div class="adventure-wrapper-four">
				<div class="header-four"><a class="title-four" href="<?php
echo $adventure_posts[3]->guid;
?>"><?php
echo $adventure_posts[3]->post_title;
?></a>
				<a class="adventure-read-more" href="<?php
echo $adventure_posts[3]->guid;
?>">Read More</a></div>
				<?php
echo get_the_post_thumbnail($adventure_posts[3], 'large');
?>
				</div>
			</div> <!--bottom-box-->
		</div> <!--right-box-->
	</div><!--latest-adventures-->

		<a href="<?php
echo get_post_type_archive_link('adventure');
?>"><button class="more-adventures">More Adventures</button></a>

		</div>
	</section>

  		</main><!-- #main -->
  	</div><!-- #primary -->

  <?php
get_footer();
?>
