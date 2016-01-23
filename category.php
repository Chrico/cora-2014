<?php
/**
 * The category template file.
 *
 * @package Cora-2014
 */

get_header();



// get the current category-term
$term       = get_queried_object();

if ( (int)$term->parent === 0  ) :

	get_template_part( 'parts/category', 'root' );

elseif ( (int)$term->parent !== 0 && have_posts() ) :

	get_template_part( 'parts/category', 'child' );

else :

	// no children defined in this category
	get_template_part( 'parts/content', 'none' );

endif;

get_footer();