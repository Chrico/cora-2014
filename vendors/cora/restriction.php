<?php
/**
 * Feature Name:    adding restrictions to the theme
 * Version:		    0.1
 * Author:		    Inpsyde GmbH for MarketPress.com
 * Author URI:	    http://inpsyde.com/
 */

/**
 * allowing only access to backend for admins
 * @wp-hook init
 * @return  void
 */
function cora_block_non_admin_users() {
	if ( is_admin() && !current_user_can( 'administrator' ) && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
		wp_redirect( home_url() );
		exit;
	}
}

/**
 * removing the admin-bar for non admins
 * @wp-hook show_admin_bar
 * @return  bool
 */
function cora_show_admin_bar_only_for_subscribers(){
	if( current_user_can( 'administrator' ) ) {
		return true;
	}
	return false;
}

/**
 * adding swf to allowed uploads
 * @wp-hook upload_mimes
 *
 * @param  array $mimes
 * @return  array $mimes
 */
function cora_filter_upload_mines_allow_swf( $mimes ) {
	$mimes[ 'swf' ] = 'application/x-shockwave-flash';
	return $mimes;
}