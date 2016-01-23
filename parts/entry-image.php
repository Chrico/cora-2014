<?php
/**
 * Post thumbnail for a post
 *
 * @package Cora-2014
 * @subpackage Templateparts
 */

if ( !has_post_thumbnail() )
	return;
?>
<figure class="post-thumbnail">
	<?php
	if( !is_singular() ):
		the_post_thumbnail( 'thumbnail' );
	else:
		the_post_thumbnail( 'large' );
	endif;
	?>
</figure>