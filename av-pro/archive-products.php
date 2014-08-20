<?php
/**
 * The template for displaying Products list.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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

<?php if ( have_posts() ): ?>

<?php if ( is_day() ) : ?>
<h2>Products: <?php echo  get_the_date( 'D M Y' ); ?></h2>							
<?php elseif ( is_month() ) : ?>
<h2>Products: <?php echo  get_the_date( 'M Y' ); ?></h2>	
<?php elseif ( is_year() ) : ?>
<h2>Products: <?php echo  get_the_date( 'Y' ); ?></h2>								
<?php else : ?>
<h2>Products</h2>	
<?php endif; ?>

We have a variety of landscaping products from which you can choose. This is a listing of the most commonly requested products. Please call us for information on other products not listed.
<br /><br />

<ol>
<?php while ( have_posts() ) : the_post(); ?>
<li class="prodlist">
<article>
<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

<!--php the_content(); -->
</article>
</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No products to display</h2>	
<?php endif; ?>

<div class="clearit">
<br />
All prices are subject to change without notice.
<br /><br />
All of our products are natural and are therefore subject to changes in color, texture, and size.
<br /><br />
If your project is large or requires consistency of appearance in the product, we strongly suggest that you order enough to complete your entire project and have it delivered the same day as you visually inspect the product on our yard site.
<br /><br />
</div>

<?php get_sidebar(); ?>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
