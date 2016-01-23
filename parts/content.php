<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package Cora-2014
 * @subpackage Templateparts
 */

$class = '';
if( !is_singular() ): ?>
	<article <?php post_class( 'category-teaser' ); ?>>
		<div class="category-teaser-inner">
			<a class="post-link" href="<?php the_permalink(); ?>">
				<?php get_template_part( 'parts/entry', 'header' ); ?>
				<?php get_template_part( 'parts/entry', 'image' ); ?>
				<?php get_template_part( 'parts/entry', 'content' ) ?>
			</a>
		</div>
	</article>
<?php else: ?>
	<article <?php post_class( 'master-post clearfix' ); ?>>
		<div class="entry">
			<?php get_template_part( 'parts/entry', 'header' ); ?>
			<?php get_template_part( 'parts/entry', 'content' ) ?>
		</div>
	</article>
<?php endif;