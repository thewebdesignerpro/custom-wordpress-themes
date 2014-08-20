
<header class="group">
	<div id="logoblock"><h1><a href="<?php get_home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/at-logo.png" alt="" /></a></h1></div>
	<!--php bloginfo( 'name' ); -->
	<!--php bloginfo( 'description' ); -->
	<?php get_search_form(); ?>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'Afro Trends', 'container' => 'nav', 'container_class' => 'navbar' ) ); ?>
</header>
