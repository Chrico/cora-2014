<?php
/**
 * functions.php to init the Theme
 *
 * @package Cora-2014
 */


add_action( 'after_setup_theme', 'cora_setup', 0 );

/**
 * Callback on theme_init
 *
 * @since   0.1
 * @created 03.12.2013, cb
 * @updated 03.12.2013, cb
 *
 * @wp-hook after_setup_theme
 * @return  Void
 */
function cora_setup() {

	$vendor_dir = __DIR__ . '/vendors/';

	load_theme_textdomain(
		'cora-2014',
		get_template_directory() . '/assets/languages'
	);

	// the theme support
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );

	// helper functions
	include_once( $vendor_dir . 'cora/helper.php' );

	// general template helpers
	include_once( $vendor_dir . 'cora/general.php' );
	add_filter( 'init', 'cora_register_tn_sizes' );
	add_filter( 'body_class', 'cora_filter_body_class');

	// navigation
	include_once( $vendor_dir . 'cora/navigation.php' );
	cora_register_nav_menus();

	// backend restrictions
	include_once( $vendor_dir . 'cora/restriction.php' );
	add_action( 'init',             'cora_block_non_admin_users' );
	add_filter( 'show_admin_bar',   'cora_show_admin_bar_only_for_subscribers');
	add_filter( 'upload_mimes',     'cora_filter_upload_mines_allow_swf' );

	// the login page
	include_once( $vendor_dir . 'cora/login.php' );
	add_filter( 'login_headerurl', 'cora_filter_login_headerurl' );

	// include all nav-walkers
	include_once( $vendor_dir . 'cora/frontend/walker/Icon.php' );

	if ( ! is_admin() ) {

		// scripts
		include_once( $vendor_dir . 'cora/frontend/script.php' );
		add_action( 'wp_enqueue_scripts',   'cora_wp_enqueue_scripts' );
		add_filter( 'wp_print_scripts',     'cora_filter_wp_print_scripts_add_html5shiv' );

		// styles
		include_once( $vendor_dir . 'cora/frontend/style.php' );
		add_action( 'wp_enqueue_scripts',   'cora_wp_enqueue_styles' );
		add_action( 'login_enqueue_scripts','cora_wp_enqueue_styles' );

		add_filter( 'style_loader_src',     'cora_filter_style_loader_src', 15, 2 );
		add_action( 'wp_print_styles',      'cora_disable_contact7_styles' );


		// posts
		include_once( $vendor_dir . 'cora/frontend/post.php' );
		add_action( 'pre_get_posts', 'cora_filter_pre_get_posts_reverse_order' );

		// comments
		include_once( $vendor_dir . 'cora/frontend/comment.php' );

		// shortcode
		include_once( $vendor_dir . 'cora/frontend/shortcode.php' );
		add_shortcode( 'svg',   'cora_the_shortcode_svg' );
		add_shortcode( 'sprite','cora_the_shortcode_sprite' );
		add_shortcode( 'swf',   'cora_the_shortcode_swf' );

		// remove some unused wp-stuff
		remove_action( 'wp_head', 'rsd_link');
		remove_action( 'wp_head', 'wp_generator');
		remove_action( 'wp_head', 'index_rel_link');
		remove_action( 'wp_head', 'wlwmanifest_link');
		remove_action( 'wp_head', 'feed_links_extra', 3);
		remove_action( 'wp_head', 'start_post_rel_link', 10, 0);
		remove_action( 'wp_head', 'parent_post_rel_link', 10, 0);
		remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0);
		remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
		remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	}


}