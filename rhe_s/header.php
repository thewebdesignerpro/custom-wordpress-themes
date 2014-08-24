<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rhe_s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/speeddial-160px.png" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-57x57-precomposed.png">
<?php wp_head(); ?>
<!--[if lt IE 9]>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/html5shiv.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="mainwrap">
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
<!--		<div class="socialbar">
			<div class="social">
				<a href="https://twitter.com/davidisraelfoto" target="_blank" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-top.png" alt=""></a>
				<a href="au.linkedin.com/pub/david-israel/7/689/b68" target="_blank" title="LinkedIn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-top.png" alt=""></a>
				<a href="https://plus.google.com/+DavidisraelAu?prsrc=5" target="_blank" title="Google+"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/g-plus-top.png" alt=""></a>
				<a href="https://www.facebook.com/davidisraelmasterphotographer" target="_blank" title="Facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-top.png" alt=""></a>
			</div>
		</div>	-->
		
		<div class="hdr">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"></a></h1>
				<!-- <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2> -->
			</div>

				<div class="topnav">
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cart.png" alt=""> CART</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home.png" alt=""> HOME</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contact.png" alt=""> CONTACT</a></li>
					</ul>
				</div>
				
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<!-- <button class="menu-toggle">M</button> -->
				<button class="menu-toggle" title="menu"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/burger.png" alt=""></button>
				<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'rhe_s' ); ?></a>
				
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="slides">
			<div id="slide1" class="slide">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slidebg1.jpg" alt="">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bokeh1.png" alt="">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slidemodel2.png" alt="">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slidemodel1.png" alt="">
				<div><h3>High Quality<br>Hair Extensions</h3><span>Worn by celebrities worldwide</span><br><a href="#">LEARN MORE</a></div>
			</div>
		</div>

		<div class="newslet">
			<div>SUBSCRIBE TO OUR FREE NEWSLETTER</div>
			<?php $widgetNL = new WYSIJA_NL_Widget(true);
			echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php')); ?>
		</div>
		