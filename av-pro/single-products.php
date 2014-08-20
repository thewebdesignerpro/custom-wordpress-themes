<?php
/**
 * Sample template for displaying single products posts.
 * Save this file as as single-products.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */

?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="midcontainer">
<div id="maincontent">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
<article id="prodpost">

<h2><?php the_title(); ?></h2>
<!--php the_content(); -->
<div id="prodimg">
<?php
$prodfoto = get_custom_field('prod_image:to_image_src');
if ( empty($prodfoto)) { ?>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/noprodpic.jpg" />
<?php } else { ?>
<img src="<?php print_custom_field('prod_image:to_image_src'); ?>" />
<?php } ?>		
</div>
<div id="proddesc">
<h3>Product Description</h3><br />
<?php print_custom_field('proddescription:do_shortcode'); ?>
<br /><br />
</div>

<?php comments_template(); ?>
</article>

<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>