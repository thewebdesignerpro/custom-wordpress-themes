<?php
/**
 * The Template for displaying single team posts
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

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<article>

	<h2><?php the_title(); ?></h2>
	<br />
    <img src="<?php print_custom_field('member_photo:to_image_src'); ?>" align="left" />
	<?php the_content(); ?>			


</article>
<?php endwhile; ?>

<?php get_sidebar(); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
