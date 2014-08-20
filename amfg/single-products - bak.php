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
	
<article>

	<h2><?php the_title(); ?></h2>
		<!--php the_content(); -->
		
		 <?php $images = get_custom_field('prod_images:to_image_array');
		 foreach ($images as $img) {
		 	printf('<img src="%s" width="%s" height="%s" />', $img[0], $img[1], $img[2]);		 
			}?>
<!--		 	printf('<img src="%s" width="%s" height="%s" />', $img[0], $img[1], $img[2]);			
		<img src="<?php print $src; ?>" height="<?php print $h; ?>" width="<?php print $w ?>" />-->		
		<br /><br />
		<strong>Product Description</strong>
		<br /><br />
		<?php print_custom_field('prod_desc'); ?>
		<br /><br />
		<?php comments_template(); ?>

</article>

<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>