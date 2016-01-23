<?php
/**
 * Feature Name:    Style Functions for Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */


/**
 * Remove file version query arguments from script/stylesheet URLs.
 *
 * Leaves http://fonts.googleapis.com/css?family=MyFont untouched.
 *
 * @link    http://wordpress.stackexchange.com/a/96325/
 * @link    http://wordpress.stackexchange.com/q/99842/
 *
 * @since   0.1
 * @created 03.12.2013, cb
 * @updated 03.12.2103, cb
 *
 * @wp-hook style_loader_src
 *
 * @param   string $url
 * @param   string $handle
 * @return  string
 */
function cora_filter_style_loader_src( $url, $handle ){

	$host = parse_url( $url, PHP_URL_HOST );

	if ( $host === 'fonts.googleapis.com' )
		return remove_query_arg( 'ver', $url );

	return $url;
}

/**
 * Enqueue styles.
 *
 * @wp-hook wp_enqueue_scripts, login_enqueue_scripts
 *
 * @since   0.1
 * @created 03.12.2013, cb
 * @updated 03.12.2103, cb
 *
 * @return  Void
 */
function cora_wp_enqueue_styles() {


	$styles = cora_get_styles();

	foreach( $styles as $key => $style ){
		wp_enqueue_style(
			$key,
			$style[ 'src' ],
			$style[ 'deps' ],
			$style[ 'version' ],
			$style[ 'media' ]
		);

	}
}



/**
 * Returning our Theme-Styles
 *
 * @since   0.1
 *
 * @return  Array
 */
function cora_get_styles(){

	$suffix = cora_get_script_suffix();

	// $handle => array( 'src' => $src, 'deps' => $deps, 'version' => $version, 'media' => $media )
	$styles = array();

	$asset_uri = get_template_directory_uri() . '/assets/css/';

	// getting the theme-data
	$theme_data = wp_get_theme();
	$version    = $theme_data->Version;

	// adding the main-CSS
	$styles[ 'cora-2014' ] = array(
		'src'       => $asset_uri . 'style' . $suffix . '.css',
		'deps'      => NULL,
		'version'   => $version,
		'media'     => NULL
	);

	// adding our webfonts
	$query_args = array( 'family' => 'Source+Sans+Pro|Quicksand' );
	$styles[ 'webfonts' ] = array(
		'src'       => add_query_arg( $query_args, "//fonts.googleapis.com/css" ),
		'deps'      => array(),
		'version'   => NULL,
		'media'     => NULL
	);

	if( $GLOBALS[ 'pagenow' ] === 'wp-login.php' ){

		$styles[ 'cora-login' ] = array(
			'src'       => $asset_uri . 'login' . $suffix . '.css',
			'deps'      => NULL,
			'version'   => $version,
			'media'     => NULL
		);

	}

	return apply_filters( 'cora_get_styles', $styles );
}

/**
 * de-register the contact-form-7 styles
 * @wp-hook wp_print_styles
 * @return  void
 */
function cora_disable_contact7_styles() {
	wp_deregister_style( 'contact-form-7' );
	wp_deregister_style( 'contact-form-7-rtl' );
}