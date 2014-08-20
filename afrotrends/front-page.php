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

<div id="midcontainer" style="max-width:100%;">


<div id="slider" class="group">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/models-pose.png" alt="" />
<br><br>
Hair Extensions &amp; Full Lace Front Wigs Salon
<br><br>
<a href="#">Download Our Afro Trends Brochure<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrowdown.png" width="12" height="15" alt="" /></a>

<div class="pink1">
<div class="ribbons"></div>
<h4>Hair Extension Special</h4>
Get 10% off each hair extension when you purchase 3 or more hair extensions.<br>Mention this ad when you come to either of our store.
</div>
</div>

<div class="features"><div>
<ul id="features" class="block3">
<li>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>faq/">
<figure>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured1.jpg" width="312" height="200" alt="" />
<figcaption>Hair Extension Salon</figcaption>
</figure>
</a>
</li>

<li>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>products/">
<figure>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured2.jpg" width="312" height="200" alt="" />
<figcaption>African Hair Products</figcaption>
</figure>
</a>
</li>

<li>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/">
<figure>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/featured3.jpg" width="312" height="200" alt="" />
<figcaption>Full Lace Wigs</figcaption>
</figure>
</a>
</li>					
</ul>
</div></div>

<div id="maincontent" class="homemain">
<br><br>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>

<br><br>

<!--?php get_sidebar(); ?-->
</div>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
