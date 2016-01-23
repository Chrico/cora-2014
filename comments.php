<?php
/**
 * The template for displaying Comments
 *
 * @package Cora-2014
*/


if ( post_password_required() )
	return;
?>
<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php _e( 'Das denkt Ihr über diesen Beitrag:', 'cora-2014' ) ?>
		</h2>

		<ol id="commentlist">
			<?php wp_list_comments(
				array(
			        'type'      => 'comment',
			        'callback'  => 'cora_the_comment',
			        'style'     => 'ol'
				)
			); ?>
		</ol>

		<?php
		/**
		 * Include comments pagination like above.
		 */
		get_template_part( 'parts/pagination', 'comments' );
		?>

	<?php endif; // have_comments() ?>
	
	<?php
	/**
	* Pings with favicons.
	*
	* @link http://wordpress.stackexchange.com/a/96596/23011
	*/
	if ( $num = cora_get_count_pings() ) :
	?>
	<h4 id="pingbacks"><?php
		printf(
			_nx(
				'Ein pingback',
				'%d pingbacks',
				$num,
				'Pingbacks title',
				'cora-2014'
			),
			$num
		);
		?></h4>
	<ol class="pinglist">
		<?php
		/**
		 * Custom callback applied adding pings as URLs with favicon.
		 */
		wp_list_comments(
			array (
			      'type'        => 'pings',
			      'style'       => 'ul',
			      'callback'    => 'cora_the_pings'
			)
		);
		?></ol>
	<?php
	endif;

	if ( comments_open() ){
		$comment_form_args = array(
			'title_reply' => __( 'Lass uns Deine Meinung wissen!', 'cora-2014' ),
			'comment_notes_after'   => ''
		);
		comment_form( $comment_form_args );
	}



	?>
</div>