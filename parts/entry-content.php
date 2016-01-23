<?php
/**
 * Render post content
 *
 * @package Cora-2014
 * @subpackage Templateparts
 */

if( !is_singular() ):
	return;
endif;

?>
<div class="post-content">
	<?php
	the_content();
	get_template_part( 'parts/entry', 'author-meta' );
	?>
</div>