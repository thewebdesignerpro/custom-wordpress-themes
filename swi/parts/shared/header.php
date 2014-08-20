<div id="container">
<div id="hshadow1"></div>
<div id="hshadow3"></div>
<header>
<div id="logoblock">
<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div onmouseover="showBg('logohover',20)" onmouseout="hideBg('logohover')" onclick="hideBg('logohover')" id="logohover"></div></a></h1>
</div>
<!--
<?php bloginfo( 'description' ); ?> 
<?php get_search_form(); ?>   
-->	

<div id="topphone">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/topcontact.png" width="153" height="36" alt="" /> 
</div>

<div id="toploc">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>location-and-driving-directions/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/location.png" width="131" height="37" alt="" /></a> 
</div>

<div id="navbar">
<ul id="hnav">
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contactnav.png" width="81" height="20" alt="" /><span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>faq/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/faqnav.png" width="35" height="20" alt="" /><span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>products/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/productsnav.png" width="92" height="20" alt="" /><span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/homenav.png" width="53" height="20" alt="" /><span></span></a></li>
</ul>

</div>

</header>

<?php $uploads = wp_upload_dir();
$upload_dir = ( $uploads['url'] ); ?>
<!--<div class="nivoSlider" style="height:278px;width:948px;">-->
<div class="nivoSlider" style="min-width:340px;max-width:948px;height:auto;">
<?php     
 $args = array(
   'post_type'   => 'attachment',
   'numberposts' => -1,
   'order'       => 'DESC',
   'post_status' => null,
   'post_parent' => 174
  );

  $attachments = get_posts( $args );
     if ( $attachments ) {
        foreach ( $attachments as $attachment ) {
           $slideimg = wp_get_attachment_image_src( $attachment->ID, 'full' );
           $slidetitle = get_post_meta($attachment->ID, '_wp_attachment_image_alt', true);  ?>
		   <img src="<?php echo $slideimg[0]; ?>" width="<?php echo $slideimg[1]; ?>" height="<?php echo $slideimg[2]; ?>" alt="" title="<?php echo $slidetitle; ?>" />
<?php		   
          }
     }
?>

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
<div id="slideshadow" style="min-width:340px;max-width:948px;height:auto;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/slideshadow.png" width="948" height="15" alt="" /></div>
