<?php
/**
 * Pagination for comments.
 *
 * @package Cora-2014
 * @subpackage Templateparts
 */
?>
<nav id="comment-pagination" class="clearfix" role="navigation">
	<?php
    paginate_comments_links(
        array(
			'mid_size' 	=> 2,
			'type' 		=> 'list',
			'prev_text'	=> sprintf(
				'<div class="nav-previous">%s</div>',
				__( '&larr; Older Comments', 'cora-2014' )
				),
			'next_text'	=> sprintf(
				'<div class="nav-next">%s</div>',
				__( 'Newer Comments &rarr;', 'cora-2014' )
				),
        )
    );
	?>
</nav>