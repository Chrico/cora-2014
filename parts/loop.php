<?php
/**
 * The main template file.
 *
 * @package Cora-2014
 * @subpackage Templateparts
 */

global $wp_query;

while ( have_posts() ) : the_post();
	$post_format = get_post_format();
	get_template_part( 'parts/content', $post_format );
endwhile;