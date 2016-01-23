<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package Cora-2014
 * @subpackage Templateparts
 */
?>
<article <?php post_class( 'master-post clearfix' ); ?>>
	<div class="entry clearfix">

		<?php
		get_template_part( 'parts/entry', 'header' );

		if( is_singular() ) {

			get_template_part( 'parts/entry', 'content' );

			get_sidebar();
		}
		?>

	</div>
</article>