<?php
/**
 * Feature Name:
 * Version:		    0.1
 * Author:		    Christian Brückner
 * Author URI:	    http://www.chrico.info
 */

global $wp_query;

$term = get_queried_object();

$child_args = array(
	'child_of'      => $term->term_id,
	'hide_empty'    => false,
	'orderby'       => 'id'
);
$children   = get_categories( $child_args );

if( empty( $children ) ):
	return;
endif;

foreach( $children as $i => $child ) :
	$post_args = array(
		'cat'       => $child->cat_ID,
		'orderby'   => 'ID',
		'order'     => 'ASC'
	);
	$wp_query = new WP_Query( $post_args );
	if( have_posts() ): ?>

		<section class="category-section <?php echo 'category-' . $child->slug; ?> clearfix">
			<div class="sly">
				<div class="frame">
					<header class="category-header category-teaser">
						<div class="category-teaser-inner">
							<a class="category-link" href="<?php echo get_category_link( $child->cat_ID ); ?>">
								<h1 class="category-title">
									<?php echo $child->name; ?>
								</h1>
							</a>
						</div>
					</header>
					<?php
					// the posts of this category
					get_template_part( 'parts/loop', '' );
					?>
				</div>
			</div>
			<nav class="sly-nav">
				<button title="<?php _e( 'vorheriger', 'cora-2014' ); ?>" class="sly-nav-button sly-nav-lt"><?php echo cora_get_icon( 'lt' );?></button>
				<button title="<?php _e( 'nächster', 'cora-2014' ); ?>" class="sly-nav-button sly-nav-gt"><?php echo cora_get_icon( 'gt' ); ?></button>
			</nav>
		</section>

	<?php endif;

endforeach;
wp_reset_query();
