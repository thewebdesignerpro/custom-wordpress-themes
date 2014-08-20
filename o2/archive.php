<?php
/**
 * The template for displaying Archive pages.
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

<?php if ( have_posts() ): ?>

<?php if ( is_day() ) : ?>
<h2>Archive: <?php echo  get_the_date( 'D M Y' ); ?></h2>							
<?php elseif ( is_month() ) : ?>
<h2>Archive: <?php echo  get_the_date( 'M Y' ); ?></h2>	
<?php elseif ( is_year() ) : ?>
<h2>Archive: <?php echo  get_the_date( 'Y' ); ?></h2>								
<?php else : ?>
<h2>Archive</h2>	
<?php endif; ?>

<ol>
<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<article>
			<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<time datetime="<?php the_time( 'Y-m-D' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
			<?php the_content(); ?>
		</article>
	</li>
<?php endwhile; ?>
</ol>
<?php else: ?>
<h2>No posts to display</h2>	
<?php endif; ?>

<?php get_sidebar(); ?>
</div>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
