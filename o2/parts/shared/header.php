
<header class="group">
	<div id="logoblock"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/o2logo.png" alt="" /></a></h1></div>
	<!--php bloginfo( 'name' ); -->
	<!--php bloginfo( 'description' ); -->
	<div id="topcontact">
	<div><span>Melbourne</span>+61 3 8379 4777</div>
	<div><span>Sydney</span>+61 2 9900 0300</div>
	<div><span>Queensland</span>+61 2 9900 0300</div>
	<!--div id="topsearch"-->
	<!--php get_search_form(); -->
	<div id="topsocial">
	<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb.png" alt="" /></a>
	<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tweet.png" alt="" /></a>
	<a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/in.png" alt="" /></a>		
	</div>
	</div>
	
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'O2', 'container' => 'nav', 'container_class' => 'navbar' ) ); ?>
</header>
