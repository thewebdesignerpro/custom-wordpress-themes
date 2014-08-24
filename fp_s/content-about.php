<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package fp_s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="mainc">
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'fp_s' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'fp_s' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer>' ); ?>
</div>	
</article><!-- #post-## -->

