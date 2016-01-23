<?php
/**
 * The main template file.
 *
 * @package Cora-2014
 */

get_header();

if ( have_posts() ) :
	get_template_part( 'parts/loop', '' );
else :
	get_template_part( 'parts/content', 'none' );
endif;

get_footer();