<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package di_s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="socialbar">
			<div class="social">
				<a href="https://twitter.com/davidisraelfoto" target="_blank" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-top.png" alt=""></a>
				<a href="au.linkedin.com/pub/david-israel/7/689/b68" target="_blank" title="LinkedIn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-top.png" alt=""></a>
				<a href="https://plus.google.com/+DavidisraelAu?prsrc=5" target="_blank" title="Google+"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/g-plus-top.png" alt=""></a>
				<a href="https://www.facebook.com/davidisraelmasterphotographer" target="_blank" title="Facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-top.png" alt=""></a>
			</div>
		</div>
		
		<div class="hdr">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/DI_logo_grey.jpg"></a></h1>
				<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<!-- <button class="menu-toggle">M</button> -->
				<button class="menu-toggle" title="menu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/burger.png" alt=""></button>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'di_s' ); ?></a>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
