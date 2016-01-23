<?php
/**
 * Feature Name:    
 * Version:		    0.1
 * Author:		    Inpsyde GmbH for MarketPress.com
 * Author URI:	    http://inpsyde.com/
 */

// get the current category-term
$term       = get_queried_object();
?>

<section class="category-section <?php echo 'category-' . $term->slug; ?> clearfix">
	<header class="category-header category-teaser">
		<div class="category-teaser-inner">
			<h1 class="category-title"><?php echo get_cat_name( $term->term_id ); ?></h1>
		</div>
	</header>

	<?php get_template_part( 'parts/loop', '' ); ?>

</section>