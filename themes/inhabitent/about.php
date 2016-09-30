<?php
/*
Template Name: About Template Page
*/
/**
 * The template for displaying the About Page.
 *
 * @package inhabitent_Theme
 */
 get_header(); ?>

 	<div id="primary" class="about-content-area">
 		<main id="main" class="about-main" role="main">
 			<article class="hentry">

 				<header class="about-header">
 
 			      <h1>about</h1>


 				</header>

 				<div class="container">
 					<div class="about-content">

 						<div class="our-story">
 							<h1>our story</h1>
 							<?php echo CFS()->get( 'our_story' ); ?>
 					 </div>

 					 <div class="our-team">
 						<h1>our team</h1>
 						<?php echo CFS()->get( 'our_team' ); ?>
 				   </div>

 				 </div>
 			 </div>
 			</article>
 		</main><!-- #main -->
 	</div><!-- #primary -->

 <?php get_footer(); ?>
