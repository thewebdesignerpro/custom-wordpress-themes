<div id="container">
<header>
<div id="hdrtop">
<div id="logoblock">
<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div onmouseover="showBg('logohover',20)" onmouseout="hideBg('logohover')" onclick="hideBg('logohover')" id="logohover"></div></a></h1>
</div>
<!--
<?php bloginfo( 'description' ); ?> 
<?php get_search_form(); ?>   
-->	

<div id="livechat">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/livechat.png" width="237" height="108" alt="" />
</div>

<div id="topsearch">
<?php $search_text = "Search..."; ?> 
<form method="get" id="searchform"  
action="<?php bloginfo('home'); ?>/"> 
<input type="text" value="<?php echo $search_text; ?>"  
name="s" id="s"  
onblur="if (this.value == '')  
{this.value = '<?php echo $search_text; ?>';}"  
onfocus="if (this.value == '<?php echo $search_text; ?>')  
{this.value = '';}" /> 
<input type="submit" value="" id="searchsubmit" /> 
</form> 
</div>

<div id="toplinks">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homeico.png" width="25" height="22" alt="" />Home</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mailico.png" width="24" height="22" alt="" />Contact Us</a>
</div>

<div id="navbar">
<ul id="hnav">
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>sales-and-rentals/">Sales &amp; Rentals<span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>client-gallery/">Client Gallery<span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>event-services/">Event Services<span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/">About Us<span></span></a></li>
</ul>

</div>
</div>

<div id="hdrbottom">
<?php $uploads = wp_upload_dir();
$upload_dir = ( $uploads['url'] ); ?>
<!--<div class="nivoSlider" style="height:278px;width:948px;">-->
<div id="myslider">
<div id="slidershadowl">&nbsp;</div>
<div id="slidershadowr">&nbsp;</div>

<?php $caption; ?>
<div class="nivoSlider" style="min-width:340px;max-width:401px;height:auto;">
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

</div>

<div id="welcome">
<h2>Welcome To Audio-Visual Products, Inc.</h2>
<p>
AV-PRO, Inc. is one of Western Washington's premier Audio and Video solutions for event planning and production, tradeshows, conventions, corporate events and special events. We specialize in LCD Projectors, Plasmas, Presentational & Stage Lighting and small to large Sound Systems. 
<br /><br />
We offer from single item sales and rentals to complete audio/video systems designed and installed within homes and corporate events planning. We offer all our customers...
<br /><br />
</p>
<div id="wmore"><a href="">Read more&nbsp;&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wmore.png" width="24" height="13" alt="" /></a></div>
</div>

</div>

</header>

<!--
<img src="<?php echo $upload_dir; ?>/slidepic0.jpg" width="948" height="278" alt="" title="Sure Would Trucking" />
<img src="<?php echo $upload_dir; ?>/slidepic1.jpg" width="948" height="278" alt="" title="Sure Would Inc" />
<img src="<?php echo $upload_dir; ?>/slidepic2.jpg" width="948" height="278" alt="" title="Round Drain Rocks" />
<img src="<?php echo $upload_dir; ?>/slidepic3.jpg" width="948" height="278" alt="" title="Cedar Play Chips" />
<img src="<?php echo $upload_dir; ?>/slidepic4.jpg" width="948" height="278" alt="" title="Crushed Rocks" />
<img src="<?php echo $upload_dir; ?>/slidepic5.jpg" width="948" height="278" alt="" title="Sand" />
<img src="<?php echo $upload_dir; ?>/slidepic6.jpg" width="948" height="278" alt="" title="Red Lava Rocks" />
<img src="<?php echo $upload_dir; ?>/slidepic7.jpg" width="948" height="278" alt="" title="Pea Gravel" />
<img src="<?php echo $upload_dir; ?>/slidepic8.jpg" width="948" height="278" alt="" title="" />

<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/association-management/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide2.jpg" alt="" title="Association Management" />
</a>
-->
</div>

