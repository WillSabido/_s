<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package felejo
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrap" class="container-fluid">
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
	<!-- Load the slider on frontpage, load header on other pages -->
	<?php if ( is_home() || is_front_page() ) : if (!is_admin()) {
/**
 * Load Slider on homepage in frontend. Comment/uncomment to disable/enable
 */
require get_template_directory() . '/slider.php';
} ?>
	<?php elseif(!is_home() || !is_front_page()) : ?>
	<?php get_header_image() ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
		<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
	</a>
	<?php endif; // End header image check. ?>
<!-- END slider -->
		<div class="site-branding">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h1 class="menu-toggle"><?php _e( 'Menu', 'felejo' ); ?></h1>
			<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'felejo' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	
	<div id="content" class="site-content row">
