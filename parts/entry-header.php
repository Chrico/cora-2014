<?php
/**
 * Entry header.
 *
 * @package Cora-2014
 * @subpackage Templateparts
 */
?>

<?php if ( ! is_singular() ):  ?>
	<header class="post-header">
		<h2 class="post-title">
			<?php the_title(); ?>
		</h2>
	</header>
<?php elseif( is_page() ): ?>
	<header class="page-header">
		<h1 class="post-title screen-reader-text">
			<?php the_title(); ?>
		</h1>
	</header>
<?php else: ?>
	<header class="post-single-header">
		<h1 class="post-title">
			<?php the_title(); ?>
		</h1>
	</header>
<?php endif; ?>