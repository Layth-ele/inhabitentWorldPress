<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );


// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


// custom login for theme
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
            padding-bottom: 30px;
            background-size: 300px 53px;
            height:53px;
            width:300px;
        }
    </style>
<?php }
add_action( 'login_head', 'my_login_logo' );


//Change inhabitent login link url to inhabitent home page
function inhabitent_login_url(){
	return home_url();
}
add_filter('login_headerurl','inhabitent_login_url');



// Adjusting archive page loop for Products.

function inhabitent_modify_product_archive_query($query){
	if (is_post_type_archive('product')&& !is_admin()&& $query -> is_main_query() ){
		$query -> set('posts_per_page', 16);
		$query -> set('order','ASC');
		$query -> set('orderby','title');
	}
}
add_action ('pre_get_posts','inhabitent_modify_product_archive_query');


// get featured hero image for about pages

function inhabitent_theme_hero_image_styles() {
	if (!is_page_template('about.php')) {
			return;
};
	$imageUrl = CFS()->get('hero_image');
			if(!$imageUrl){
					return;
			};
	$custom_css = "
							.about-header{
                        width: 100%;
                        height: 100vh;
                        background-size: cover;
												background: url($imageUrl) no-repeat center center;
                    }";

	wp_add_inline_style( 'red-starter-style', $custom_css);

}
add_action( 'wp_enqueue_scripts', 'inhabitent_theme_hero_image_styles' );


 // Customize excerpt length and style.

 function inhabitent_wp_trim_excerpt( $text ) {
     $raw_excerpt = $text;

     if ( '' == $text ) {
         // retrieve the post content
         $text = get_the_content('');

         // delete all shortcode tags from the content
         $text = strip_shortcodes( $text );

         $text = apply_filters( 'the_content', $text );
         $text = str_replace( ']]>', ']]&gt;', $text );

         // indicate allowable tags
         $allowed_tags = '<p>,<a>,<em>,<strong>,<blockquote>,<cite>';
         $text = strip_tags( $text, $allowed_tags );

         // change to desired word count
         $excerpt_word_count = 50;
         $excerpt_length = apply_filters( 'excerpt_length', $excerpt_word_count );

         // create a custom "more" link
         $excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more">Read more &rarr;</a></p>'; // modify excerpt ending
         $excerpt_more = apply_filters( 'excerpt_more', ' ' . $excerpt_end );

         // add the elipsis and link to the end if the word count is longer than the excerpt
         $words = preg_split( "/[\n\r\t ]+/", $text, $excerpt_length + 1, PREG_SPLIT_NO_EMPTY );

         if ( count( $words ) > $excerpt_length ) {
             array_pop( $words );
             $text = implode( ' ', $words );
             $text = $text . $excerpt_more;
         } else {
             $text = implode( ' ', $words );
         }
     }

     return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
 }
 remove_filter( 'get_the_excerpt', 'wp_trim_excerpt' );
 add_filter( 'get_the_excerpt', 'inhabitent_wp_trim_excerpt' );


 function inhabitent_about_header_css() {
			if(!is_page_template( 'about.php' )) {
				return;
			}
			$about_image = CFS()->get('hero_image');
      $custom_css = "
                .about-header{
									   display: flex;
									   flex-direction: column;
									   justify-content: center;
									   color: #fff;
									   font-weight: bold;
                        background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),
																url('$about_image') center center no-repeat;
																background-size: cover;
																height:100vh;

                }";
        wp_add_inline_style( 'inhabitent-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_about_header_css' );


 ?>
