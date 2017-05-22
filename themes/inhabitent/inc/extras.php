<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

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

