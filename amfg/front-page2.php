<?php
/**
 * Template Name: Front Page
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="midcontainer">
<div id="maincontent">

<h2>Welcome To Sure Would Inc!</h2>
<br />
Nulla placerat tellus nec massa posuere malesuada ac sit amet nisi. Donec condimentum ante ut nisl posuere condimentum. Vestibulum in sapien rutrum elit dignissim semper. Curabitur turpis libero, adipiscing eget auctor et, feugiat nec urna. Proin et ipsum nunc. Morbi dictum nibh non tortor feugiat in egestas orci dapibus.
<br /><br />

<div class="featured">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured1.jpg" width="300" height="224" alt="" />
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
About Sure Would Inc
</a><br />
<p>Donec ac felis turpis, at consequat ligula. Curabitur vehicula sem nec felis pellentesque interdum. Nunc congue blandit nisl ac porttitor. Diem &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="readmore" href="<?php echo esc_url( home_url( '/' ) ); ?>">. . . read more</a></p>
</div>

<div class="featured">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured2.jpg" width="300" height="224" alt="" />
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
Our Products
</a><br />
<p>Donec ac felis turpis, at consequat ligula. Curabitur vehicula sem nec felis pellentesque interdum. Nunc congue blandit nisl ac porttitor. Diem &nbsp;&nbsp;<a class="readmore" href="<?php echo esc_url( home_url( '/' ) ); ?>">. . . read more</a></p>
</div>

<div class="featured nomarg">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured3.jpg" width="300" height="224" alt="" />
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
Contact Us
</a><br />
<p>Donec ac felis turpis, at consequat ligula. Curabitur vehicula sem nec felis pellentesque interdum. Nunc congue blandit nisl ac porttitor. Diem &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="readmore" href="<?php echo esc_url( home_url( '/' ) ); ?>">. . . read more</a></p>
</div>

</div> 
<div class="clearit">&nbsp;</div>

<!--?php get_sidebar(); ?-->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
