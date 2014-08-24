<?php
/**
 * The template used for displaying front page
 *
 * @package rhe_s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div id="home1" class="entry-content">
		<?php the_content(); ?>
	</div>
	

	
	<div id="home2" class="entry-content">	
<?php $uploads = wp_upload_dir();
$upload_dir = ( $uploads['url'] ); ?>
<?php $caption; ?>

<div id="feature" class="">
<?php     
 $args = array(
   'post_type'   => 'attachment',
   'numberposts' => -1,
   'order'       => 'ASC',
   'post_status' => null,
   'post_parent' => 33 		/*645*/
  );

  $attachments = get_posts( $args );
     if ( $attachments ) {
	 	$i = 0;
		$caps = array();
        foreach ( $attachments as $attachment ) {
			$slideimg = wp_get_attachment_image_src( $attachment->ID, 'full' );
			$slidetitle = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
			$caps[$i] = $attachment->post_excerpt;
			$post = get_post( $attachment->ID );
			$excerpt = ( $post->post_excerpt ) ? $post->post_excerpt : $post->post_content;
			?>
			<div class="fpic">
				<!--img src="<?php echo $slideimg[0]; ?>" width="<?php echo $slideimg[1]; ?>" height="<?php echo $slideimg[2]; ?>" alt="" title="#htmlcaption<?php echo $i; ?>" /-->
				<a href="<?php echo $slidetitle; ?>">
					<img src="<?php echo $slideimg[0]; ?>" width="<?php echo $slideimg[1]; ?>" height="<?php echo $slideimg[2]; ?>" alt="" title="" />		   		   			
				</a>
				<div class="fcap">
					<?php echo $caps[$i]; ?>
				</div>	
			</div>
		   
<?php 	$i++;		   
        }
    }
?>

</div>

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
