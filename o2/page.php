<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

<div class="features">
<ul id="features" class="block4">
<li>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>managed-services/">
<figure>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature1.png" width="148" height="148" alt="" />
<figcaption>SERVICES</figcaption>
</figure>
</a>
</li>

<li>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>networking-services/">
<figure>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature2.png" width="148" height="148" alt="" />
<figcaption>NETWORKING</figcaption>
</figure>
</a>
</li>

<li>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>security-services/">
<figure>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature3.png" width="148" height="148" alt="" />
<figcaption>SECURITY</figcaption>
</figure>
</a>
</li>					

<li>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>cloud-services/">
<figure>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/feature4.png" width="148" height="148" alt="" />
<figcaption>CLOUD</figcaption>
</figure>
</a>
</li>					
</ul>
</div>

<div id="maincontent">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_content(); ?>
<?php comments_template( '', true ); ?>
<?php endwhile; ?>

<?php get_sidebar(); ?>
</div>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
