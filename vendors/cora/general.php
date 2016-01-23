<?php
/**
 * Feature Name:    General Template Helpers for Theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */


/**
 * callback to register our thumbnail-sizes
 *
 * @since    0.1
 * @created 22.12.204, cb
 * @updated 22.12.204, cb
 *
 * @wp-hook init
 *
 * @return Void
 */
function cora_register_tn_sizes() {
	// 	Various thumbnail sizes
	set_post_thumbnail_size( 320, 320, TRUE );
}

/**
 * getting the script suffix
 *
 * @since    0.1
 * @created 10.01.2014, cb
 * @updated 10.01.2014, cb
 *
 * @return  String $suffix
 */
function cora_get_script_suffix(){
	return defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
}

/**
 * adding custom body-classes
 *
 * @since   0.1
 * @created 19.01.2014, cb
 * @updated 19.01.2014, cb
 *
 * @wp-hook body_class
 * @param   Array $classes
 * @return  Array $classes
 */
function cora_filter_body_class( Array $classes = array() ){

	$slug = '';
	if( is_singular() ){
		$post = get_post();

		if( $post === null ){
			return $classes;
		}

		$classes[] = $post->post_name;

		$terms = wp_get_post_categories( $post->ID );
		if( !is_wp_error( $terms ) && !empty( $terms ) ){

			$term_id = $terms[ 0 ];
			$category = get_category( $term_id );

			$cat_classes = cora_get_category_class_tree( $category );

			$classes = array_merge(
				$classes,
				$cat_classes
			);
		}

	}
	else if( is_category() || is_archive() ){

		$category = get_category( get_query_var( 'cat' ) );
		$cat_classes = cora_get_category_class_tree( $category );

		$classes = array_merge(
			$classes,
			$cat_classes
		);
	}


	if( $slug !== '' ){
		$classes[] = 'category-' . $slug;
	}

	return $classes;
}

/**
 * returns all category-classes with parents
 * @param   stdClass $category
 * @return  array $classes
 */
function cora_get_category_class_tree( $category ){

	$classes = array();
	$classes[] = 'category-' . $category->slug;

	$parent = (int)$category->parent;
	if( $parent !== 0 ) {
		while( $parent !== 0 ){
			$category = get_category( $parent );
			if( is_wp_error( $category ) ) {
				break;
			}
			$parent = $category->parent;
		}
		$classes[] = 'category-' .  $category->slug;
	}
	else{
		$classes[] = 'category-root';
	}
	return $classes;
}


/**
 * Helper function to detect if the current category is a root category
 *
 * @return bool true|false
 */
function cora_is_category_root(){

	if( is_category() ){
		$category = get_category( get_query_var( 'cat' ) );
		$parent = (int)$category->parent;
		return $parent === 0;
	}
	return false;
}