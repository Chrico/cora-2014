<?php
/**
 * Feature Name:    Navigation Helper Functions for cc-Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */


/**
 * Registering the nav_menus to our blog
 *
 * @since    0.1
 * @created  04.12.2013, cb
 * @updated  04.12.2013, cb
 *
 * @uses    register_nav_menu
 */
function cora_register_nav_menus() {

	register_nav_menus(
		array(
		     'cora_header'    => __( 'Header Site Menu', 'cora-2014' ),
		     'cora_footer'    => __( 'Footer Site Menu', 'cora-2014' ),
		)
	);

}

/**
 * Callback for empty wp_nav_menu
 *
 * @since    0.1
 * @created  04.12.2013, cb
 * @updated  04.12.2013, cb
 *
 * @wp-hook wp_nav_menu
 *
 *
 * @param   Array $args
 * @return  Void
 */
function cora_the_nav_menu_fallback_cb( Array $args = array() ) {
	global $current_user;

	// Return early if user cannot edit widgets and menus.
	if ( $args['theme_location'] !== 'cora_header'
	     || ! is_user_logged_in()
	     || ! current_user_can( 'edit_theme_options' )
	)
		return;

	$h4 = _x(
		'Hi, %s!',
		'%s = current user display name',
		'cora-2014'
	);
	$p = _x(
		'Please <a href="%s">create a custom menu</a> and assign it to one of the available menu locations.',
		'%s = wp-admin/nav-menus.php',
		'cora-2014'
	);
	?>
	<aside class="mp-alert mp-alert-success" role="alert">
		<h4><?php printf( $h4, $current_user->display_name ); ?></h4>
		<p><?php  printf( $p, esc_url( admin_url( 'nav-menus.php' ) ) ); ?></p>
	</aside>
<?php
}