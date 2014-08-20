
<header class="group">
	<div id="logoblock"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shlogo.png" alt="" /></a></h1></div>
	<!--php bloginfo( 'name' ); -->
	<!--php bloginfo( 'description' ); -->
	<div id="topcontact">
    <div><span>Phone</span>(253) 880-1233</div>
	<div><span>Live Help:</span>Online
	 | <a href="<?php echo esc_url( home_url( '/' ) ); ?>support">Get Support</a>
	 | <a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us">Contact</a> |
	</div>
	
	<!--div id="topsearch"-->
	<!--php get_search_form(); -->
	</div>
	
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'Stealthy', 'container' => 'nav', 'container_class' => 'navbar' ) ); ?>
</header>
