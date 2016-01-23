<?php
/**
 * Feature Name:    Post Functions for Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */

/**
 * reversing the order of posts
 *
 * @wp-hook pre_get_posts
 * @param   WP_Query $query
 * @return  WP_Query $query
 */
function cora_filter_pre_get_posts_reverse_order( WP_Query $query ) {
	if ( $query->is_main_query() ) {
		$query->set( 'order', 'ASC' );
		$query->set( 'orderby', 'ID' );
	}
	return $query;
}