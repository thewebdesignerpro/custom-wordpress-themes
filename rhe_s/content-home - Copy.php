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
   'post_parent' => 54 		/*33 645*/
  );

  $attachments = get_posts( $args );
     if ( $attachments ) {
	 	$i = 0;
		$caps = array();
        foreach ( $attachments as $attachment ) {
			$slideimg = wp_get_attachment_image_src( $attachment->ID, 'full' );
			$slidetitle = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);
			$si0[$i] = $slideimg[0];
			$si1[$i] = $slideimg[1];
			$si2[$i] = $slideimg[2];			
			$st[$i] = $slidetitle;		
			$caps[$i] = $attachment->post_excerpt;
			$alt[$i] = $attachment->post_content;
			$post = get_post( $attachment->ID );
			$excerpt = ( $post->post_excerpt ) ? $post->post_excerpt : $post->post_content;
			?>
	   
<?php 	$i++;		   
        }
    }
?>

			<!--div class="fpic"-->
<a href="<?php echo $st[0]; ?>"><img class="fimg size-2" src="<?php echo $si0[0]; ?>" width="<?php echo $si1[0]; ?>" height="<?php echo $si2[0]; ?>" alt="<?php echo $alt[0]; ?>" title="" /><div class="fcap"><?php echo $caps[0]; ?></div></a><a href="<?php echo $st[1]; ?>"><img class="fimg" src="<?php echo $si0[1]; ?>" width="<?php echo $si1[1]; ?>" height="<?php echo $si2[1]; ?>" alt="<?php echo $alt[1]; ?>" title="" /><div class="fcap"><?php echo $caps[1]; ?></div></a><a href="<?php echo $st[2]; ?>"><img class="fimg" src="<?php echo $si0[2]; ?>" width="<?php echo $si1[2]; ?>" height="<?php echo $si2[2]; ?>" alt="<?php echo $alt[2]; ?>" title="" /><div class="fcap"><?php echo $caps[2]; ?></div></a><a href="<?php echo $st[3]; ?>"><img class="fimg" src="<?php echo $si0[3]; ?>" width="<?php echo $si1[3]; ?>" height="<?php echo $si2[3]; ?>" alt="<?php echo $alt[3]; ?>" title="" /><div class="fcap"><?php echo $caps[3]; ?></div></a><a href="<?php echo $st[4]; ?>"><img class="fimg" src="<?php echo $si0[4]; ?>" width="<?php echo $si1[4]; ?>" height="<?php echo $si2[4]; ?>" alt="<?php echo $alt[4]; ?>" title="" /><div class="fcap"><?php echo $caps[4]; ?></div></a>
				

			<!--/div-->
</div>

	</div>
	
	<div id="home1" class="entry-content">
		<a class="bgv" href="http://davidisrael.com.au/categories/buy-gift-vouchers-and-products/">Click here to buy Gift Vouchers</a>
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
