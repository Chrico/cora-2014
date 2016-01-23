<?php
/**
 * Feature Name:    some shortcodes for the theme
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */


/**
 * short helper to add [svg icon="{x}"] to our editor
 * @param   Array $args
 * @return  String output
 */
function cora_the_shortcode_svg( $args ){
	$output = cora_get_icon( $args[ 'icon' ] );

	if( isset( $args[ 'bubble' ] ) && $args[ 'bubble' ] ) {
		$output = '<span class="bubble">' . $output . '</span>';
	}
	return $output;
}

/**
 * short helper to add [sprite icon="{x}"] to our editor
 * @param   Array $args
 * @return  String output
 */
function cora_the_shortcode_sprite( $args ){
	$output = '<span class="sprite-' . $args[ 'icon' ] . '"></span>';
	return $output;
}

/**
 * callback for our [swf] shortcode
 *
 * @param   array $args
 * @return  string output
 */
function cora_the_shortcode_swf( $args ){

	$default_args = array(
		'id'        => null,
	    'width'     => 975,
	    'height'    => 270,
	);

	$args = wp_parse_args(
		$args,
		$default_args
	);

	$swf    = get_post( $args[ 'id' ] );
	$swf_mime_type  = 'application/x-shockwave-flash';

	if( $swf->post_mime_type !== $swf_mime_type ) {
		return '';
	}

	$html = '<object width="' . $args[ 'width' ] . '" height="' . $args[ 'height' ] . '" id="swf-'. $swf->ID . '" type="'. $swf_mime_type . '" data="' . $swf->guid . '">';
	$html .= '<param name="wmode" value="transparent" />';
	$html .= '<param name="movie" value="' . $swf->guid . '" />';
	$html .= '</object>';
	return $html;

}