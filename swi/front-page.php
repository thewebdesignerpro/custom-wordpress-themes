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
<div id="maincontent" style="max-width:97.88%;">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>

<br /><br />

<ul id="features" class="block3">
<li>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>faq/">
<figure>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured1.jpg" width="300" height="224" alt="" />
<figcaption>Frequently Asked Questions</figcaption>
</figure>
</a>
</li>

<li>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>products/">
<figure>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured2.jpg" width="300" height="224" alt="" />
<figcaption>Our Products</figcaption>
</figure>
</a>
</li>

<li>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/">
<figure>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured3.jpg" width="300" height="224" alt="" />
<figcaption>Contact Us</figcaption>
</figure>
</a>
</li>					
</ul>

</div> 
<div class="clearit">&nbsp;</div>

<!--?php get_sidebar(); ?-->
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
