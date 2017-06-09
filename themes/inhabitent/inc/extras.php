<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Inhabitent_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */

function inhabitent_product_query_count_16 ($query){
    if( ! is_admin() && is_main_query() && is_post_type_archive( 'product' ) ) {
        $query->set('posts_per_page', '16');
				$query->set('orderby', 'title');
				$query->set('order', 'asc');
    }
}
add_action('pre_get_posts', 'inhabitent_product_query_count_16');

function inhabitent_products_order ($query){
    if( ! is_admin() && is_main_query() && is_tax() ) {
        $query->set('posts_per_page', '4');
				$query->set('orderby', 'title');
				$query->set('order', 'asc');
    }
}
add_action('pre_get_posts', 'inhabitent_products_order');


function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );


/* Remove Editor Menu Links in wp-admin menu */
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );


/* Changes the url and style of the wp-admin login logo image */
function inhabitent_login_logo (){
	echo '
		<style type="text/css">
			body.login div#login h1 a {
				background-image: url(' . get_template_directory_uri() . '/images/logos/inhabitent-logo-text-dark.svg);
				background-size: 300px 53px;
				width: 300px;
				height: 53px;
			}
		</style>';
}
add_action ( 'login_head', 'inhabitent_login_logo' );


/* Changes the link of the wp-admin login logo image */
function inhabitent_login_logo_url( $url ) {
	//	return get_bloginfo( 'url' ); //this also works
	return home_url();
}
add_filter ( 'login_headerurl', 'inhabitent_login_logo_url' );


/* Changes the mouse-over pop-up title on the wp-admin logo image */
function inhabitent_login_title() {
	return 'Inhabitent Camping Supply Co.';
}
add_filter( 'login_headertitle', 'inhabitent_login_title' );


function inhabitent_wp_trim_excerpt( $text ) {
/**
 * Customize excerpt length and style.
 *
 * @param  string The raw post content.
 * @return string
 **/
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
		$excerpt_end = '<span>[...]</span><p><a href="' . get_permalink() . '" class="read-more blk-btn">Read more &rarr;</a></p>'; // modify excerpt ending
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


function inhabitent_about_img_update (){
	if (is_page_template( 'page-about.php' )){
		$thumb_url = CFS ()->get( 'hero_image' );
		$custom_style = ".entry-header {background-image: linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), url('" . $thumb_url . "')}";
		wp_add_inline_style( 'inhabitent-style', $custom_style );
	}
}
add_action( 'wp_enqueue_scripts', 'inhabitent_about_img_update' );

/**
* Allow shortcodes in Contact Form 7
*/
function shortcodes_in_cf7( $form ) {
$form = do_shortcode( $form );
return $form;
}
add_filter( 'wpcf7_form_elements', 'shortcodes_in_cf7' );

function inhabitent_archive_title($title)
{
	if (is_post_type_archive('product')) {
		$title = "Shop Stuff";
	} elseif (is_tax('product-type')){
		$title = single_term_title( '', false);
	}
	return $title;
}
//Adds the filter to transform the data returned from the get_the_archive_title() function
add_filter( 'get_the_archive_title', 'inhabitent_archive_title' );


