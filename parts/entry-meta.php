<?php
/**
 * Post meta data
 *
 * @package    Cora-2014
 * @subpackage Templateparts
 */

if ( is_page() )
	return;
?>
<p class="post-meta">
	<?php
		// Translators: used between list items, there is a space after the comma.

		$icon_args = array(
			'title' => __( 'Kategorien', 'cora-2014' )
		);
		$categories_list = cora_get_icon( 'tag', $icon_args );
		$categories_list .= ' ' . get_the_category_list(  __( ', ', 'cora-2014' ) );

		$date = sprintf(
			'| <time class="post-date" datetime="%1$s">%2$s</time>',
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);

		// comments
		$comment_number = get_comments_number();
		if( $comment_number > 0 ) :
			$comment_text = '| <a href="' . get_comments_link() .'" title="'. __( 'Das denkt Ihr über diesen Beitrag', 'cora-2014' ) . '">';
			$comment_text .= $comment_number . ' ';
			$comment_text .= ' <span class="screen-reader-text">';
			$comment_text .= _n( 'Meinung', 'Meinungen', $comment_number, 'cora-2014' );
			$comment_text .= '</a>';
		else:
			$comment_text = '';
		endif;

		// Translators: 1 is category, 2 is the date and 3 is the author's name, 4 is the comment link
		printf(
			__( '%1$s %2$s %3$s', 'cora-2014' ),
			$categories_list,
			$date,
			$comment_text
		);
	?>
</p>