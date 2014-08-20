<div id="container">
<header>
<div id="logoblock">
<h1>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/amfglogo.png" alt="" />
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
<div onmouseover="showBg('logohover',20)" onmouseout="hideBg('logohover')" onclick="hideBg('logohover')" id="logohover">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/amfglogoh.png" alt="" />
</div>
</a>
</h1>
</div>
<!--
<?php bloginfo( 'description' ); ?> 
<?php get_search_form(); ?>   

<div id="toplinks">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tophome.png" width="43" height="36" alt="" />HOME</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topcontact.png" width="27" height="36" alt="" />CONTACT US</a>
</div>
-->

<div id="navbar">
<ul id="hnav">
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/home.png" width="50" height="18" alt="" /><span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>verse-by-verse-messages-are-on-this-page/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/versebyverse.png" width="224" height="18" alt="" /><span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>teds-instrumental-hymns/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hymns.png" width="177" height="18" alt="" /><span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>special-messages/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/messages.png" width="156" height="18" alt="" /><span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>photos/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/missionaries.png" width="110" height="18" alt="" /><span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>exhibits/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/exhibits.png" width="70" height="18" alt="" /><span></span></a></li>
</ul>

</div>

<!--php echo do_shortcode("[catlist name=books-of-the-bible numberposts=-1]"); -->

<?php wp_nav_menu( array( 'menu' => 'Books of the Bible', 'container_id' => 'botb', 'theme_location' => 'primary' ) ); ?>

</header>


