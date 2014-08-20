<div id="container">
<header>
<div id="logoblock">
<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div onmouseover="showBg('logohover',20)" onmouseout="hideBg('logohover')" onclick="hideBg('logohover')" id="logohover"></div></a></h1>
</div>
<!--
<?php bloginfo( 'description' ); ?> 
<?php get_search_form(); ?>   
-->	

<div id="toplinks">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tophome.png" width="43" height="36" alt="" />HOME</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topcontact.png" width="27" height="36" alt="" />CONTACT US</a>
</div>

<div id="navbar">
<ul id="hnav">
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>exhibits/">EXHIBITS<span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>photos/">MISSIONARIES<span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>special-messages/">SPECIAL MESSAGES<span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>teds-instrumental-hymns/">HYMNS<span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>verse-by-verse-messages-are-on-this-page/">VERSE BY VERSE<span></span></a></li>
</ul>

</div>

<div id="botb">
<?php echo do_shortcode("[catlist name=books-of-the-bible numberposts=-1]"); ?>

</div>

</header>


