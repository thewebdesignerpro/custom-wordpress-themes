<?php
/**
 * The template used for displaying front page
 *
 * @package rhe_s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $upload_dir = wp_upload_dir(); ?>
	
	<div class="featured">
		<figure>
			<a href="#"><img src="<?php echo $upload_dir['baseurl']; ?>/royal-hair-extensions-2.jpg" alt="Royal Hair Extensions">
			<span><img src="<?php echo $upload_dir['baseurl']; ?>/royal-hair-extensions.jpg" alt="Royal Hair Extensions"></span>
			<figcaption>ROYAL HAIR<br>EXTENSIONS</figcaption></a>
		</figure>
		<figure>
			<a href="#"><img src="<?php echo $upload_dir['baseurl']; ?>/hair-care-2.jpg" alt="Hair Care">
			<span><img src="<?php echo $upload_dir['baseurl']; ?>/hair-care.jpg" alt="Hair Care"></span>
			<figcaption>HAIR CARE</figcaption></a>
		</figure>
		<figure>
			<a href="#"><img src="<?php echo $upload_dir['baseurl']; ?>/tools-and-accessories-2.jpg" alt="Tools and Accessories">
			<span><img src="<?php echo $upload_dir['baseurl']; ?>/tools-and-accessories.jpg" alt="Tools and Accessories"></span>
			<figcaption>TOOLS &amp;<br>ACCESSORIES</figcaption></a>
		</figure>
		<figure>
			<a href="#"><img src="<?php echo $upload_dir['baseurl']; ?>/training-courses-2.jpg" alt="Training Courses">
			<span><img src="<?php echo $upload_dir['baseurl']; ?>/training-courses.jpg" alt="Training Courses"></span>
			<figcaption>TRAINING<br>COURSES</figcaption></a>
		</figure>
	</div>	

	<div id="welcome">
		<h1>Welcome to Royal Hair Extensions</h1>
		Royal Hair Extensions manufactures the highest quality hair in the world. We supply our flawless products to wholesalers worldwide, with the highest levels of customer service at the most affordable prices. We believe that salons shouldn’t have to pay top dollar...
		<a href="#">READ MORE</a>
	</div>
	
	<div id="home1" class="entry-content">
		<?php the_content(); ?>
	</div>
	

	

	
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'rhe_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'rhe_s' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->
