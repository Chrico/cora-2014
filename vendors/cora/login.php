<?php
/**
 * Feature Name:    Custom Login for cora.chrico.info
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */

/**
 * Removing the network main url from wp-login-Header
 *
 * @wp-hook login_headerurl
 *
 * @param   string $url
 * @return  string $url
 */
function cora_filter_login_headerurl( $url ){
	return wp_login_url();
}