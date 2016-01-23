<?php
/**
 * Template-File for Header-Navigation
 *
 * @package Cora-2014
 * @subpackage Templateparts
 */
?>
<nav id="site-navigation" class="main-navigation" role="navigation">
<?php
	$nav_args = array(
		'theme_location'    => 'cora_header',
		'menu_class'        => 'nav-menu clearfix',
		'menu'              => 'main',
		'walker'            => new Cora_Walker_Icon()
	);
	wp_nav_menu( $nav_args );
?>
</nav>
