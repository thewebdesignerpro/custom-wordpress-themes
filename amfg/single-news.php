	<?php
/**
 * Sample template for displaying single news posts.
 * Save this file as as single-news.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */

?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div id="midcontainer">
<div id="maincontent">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
<article id="newspost">

<h2><?php the_title(); ?></h2>
<time datetime="<?php the_time( 'Y-m-D' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
<br /><br />
<?php the_content(); ?>
<br /><br /> 
<!--php print_custom_field('product_description'); ?><br / -->

<?php comments_template(); ?>

</article>

<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>