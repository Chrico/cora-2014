<?php
/**
 * The Header for our theme.
 *
 * @package Cora-2014
 */
?><!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8 no-js" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html class="no-js" <?php language_attributes(); ?> itemscope itemtype="http://schema.org/Blog"><!--<![endif]-->
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="google-site-verification" content="AabDB0RNGP6wtWRVaPWeaabjtZBTmeF2SYgbr-4PmyU" />

	<title><?php wp_title( '-', true, 'right' ); ?></title>

	<?php $uri = get_stylesheet_directory_uri() . '/assets/img/'; ?>
	<link rel="shortcut icon" href="<?php echo $uri; ?>favicon.ico">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $uri; ?>/favicon-54.png" />
	<link rel="apple-touch-icon-precomposed" sizes="54x54" href="<?php echo $uri; ?>favicon-54.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $uri ?>favicon-72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $uri; ?>favicon-114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $uri; ?>favicon-144.png" /

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<?php cora_the_svg_icons(); ?>
<div id="site">

	<header id="site-header" role="banner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<span class="site-header-title"><?php bloginfo( 'name' ); ?></span>
			<span class="site-ueber-mich"><?php echo cora_get_icon( 'ueber-mich' ); ?></span>
			<div class="site-header-description"><span><?php bloginfo( 'description' ); ?></span></div>
		</a>
	</header>


	<?php get_template_part( 'parts/navigation', 'header' ); ?>

	<main id="site-content" role="main">
		<div id="site-content-inner" class="clearfix">
		<?php
		if ( function_exists('yoast_breadcrumb') && !is_front_page() ) {
			yoast_breadcrumb('<nav id="site-breadcrumb">' . cora_get_icon( 'tag' ) . ' ','</nav>');
		}