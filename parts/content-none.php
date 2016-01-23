<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package Cora-2014
 * @subpackage Templateparts
 */
?>
<article <?php post_class(  ); ?>>
	<div class="entry clearfix">
		<header class="post-header">
			<h1 class="post-title"><?php _e( 'Nothing Found', 'cora-2014' ); ?></h1>
		</header>
		<div class="post-content">
			<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'cora-2014' ); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</article>
