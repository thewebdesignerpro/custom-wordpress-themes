<?php
/**
 * Template Name: Front Page
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * Please see /external/starkers-utilities.php for info on get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php $uploads = wp_upload_dir();
$upload_dir = ( $uploads['url'] ); ?>
<?php $caption; ?>
<!--<div class="nivoSlider" style="height:278px;width:948px;">-->
<div id="slider" class="nivoSlider group" style="min-width:320px;max-width:960px;height:auto;">
<?php     
 $args = array(
   'post_type'   => 'attachment',
   'numberposts' => -1,
   'order'       => 'ASC',
   'post_status' => null,
   'post_parent' => 11
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
		   <img src="<?php echo $slideimg[0]; ?>" width="<?php echo $slideimg[1]; ?>" height="<?php echo $slideimg[2]; ?>" alt="" title="#htmlcaption<?php echo $i; ?>" />
		   <!--img src="<?php echo $slideimg[0]; ?>" width="<?php echo $slideimg[1]; ?>" height="<?php echo $slideimg[2]; ?>" alt="" title="<?php echo $slidetitle; ?>" /-->		   
		   
<?php 	$i++;		   
          }
     }
?>
</div>
<?php
$arrlength=count($caps);
for($x=0;$x<$arrlength;$x++) {
?>
<div id="htmlcaption<?php echo $x; ?>" class="nivo-html-caption">
<?php echo $caps[$x]; ?>
</div>
<?php } ?>
<div id="slideshadow" style="min-width:320px;max-width:960px;height:auto;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slshadow.png" width="960" height="30" alt="" /></div>

<div id="midcontainer" class="midchome">

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

<div id="maincontent" class="homemain">


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>

<br><br>
</div> 
<!--?php get_sidebar(); ?-->
</div>
<?php get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>
