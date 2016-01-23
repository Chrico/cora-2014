<?php
/**
 * Template-File for Footer-Navigation
 *
 * @package Cora-2014
 * @subpackage Templateparts
 */
?>
<nav id="footer-navigation" class="footer-navigation" role="navigation">
<?php
	$nav_args = array(
		'theme_location'    => 'cora_footer',
		'menu_class'        => 'nav-menu clearfix',
		'menu'              => 'footer',
	);

	if( is_user_logged_in() ){
		$item = '<li class="menu-item"><a href="' . wp_logout_url( ) . '">' . __( 'Logout', 'cora-2014' ) . '</a></li>';
		$nav_args[ 'items_wrap' ] = '<ul id="%1$s" class="%2$s">' . $item . ' %3$s</ul>';
	}
	wp_nav_menu( $nav_args );
?>
</nav>
