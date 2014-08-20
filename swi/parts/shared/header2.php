
<header>
<div id="logoblock">
<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><div onmouseover="showBg('logohover',20)" onmouseout="hideBg('logohover')" onclick="hideBg('logohover')" id="logohover"></div></a></h1>
</div>
<!--
<?php bloginfo( 'description' ); ?> 
<?php get_search_form(); ?>   
-->	

<div id="topphone">
Sacramento <img class="mtm1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/phoneico.png" width="18" height="12" alt="" /> (916) 448-4234<br /> 
Orange Cty. <img class="mtm1" src="<?php echo get_stylesheet_directory_uri(); ?>/images/phoneico.png" width="18" height="12" alt="" /> (949) 336-4500
</div>

<div id="socialico">
<ul>
<li><a href="http://pinterest.com/fsbcorestrat/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pinterest-ico.png" width="53" height="39" title="Follow us on Pinterest" alt="Pinterest" /></a></li>
<li><a href="http://www.flickr.com/photos/fsbcorestrategies" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flickr-ico.png" width="53" height="39" title="Flickr" alt="Flickr" /></a></li>
<li><a href="http://www.linkedin.com/company/2595988" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-ico.png" width="53" height="39" title="Connect with us on Linkedin" alt="Linkedin" /></a></li>
<li><a href="https://twitter.com/#!/FSBCoreStrat" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tweet-ico.png" width="53" height="39" title="Follow us on Twitter" alt="Twitter" /></a></li>
<li><a href="http://www.facebook.com/FSBCoreStrategies" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-ico.png" width="53" height="39" title="Follow us on Facebook" alt="Facebook" /></a></li>
</ul>
</div>

<div id="navbar">
<ul id="hnav">
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>insider/">INSIDER</a>
<ul><li class="empli6">&nbsp;</li></ul>
<div class="clear"></div>
</li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">CONTACT</a>
<ul><li class="empli5">&nbsp;</li></ul>
<div class="clear"></div>
</li>
<li class="empli4"><a href="<?php echo esc_url( home_url( '/' ) ); ?>portfolio/">PORTFOLIO</a>
<?php
if(!$post->post_parent){
	$children = wp_list_pages("title_li=&child_of=13&echo=0");
}
else{

	if($post->ancestors) {
		$ancestors = end($post->ancestors);
		$children = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0");
	}
}
if ($children) { ?>
	<ul>
		<?php echo $children; ?>
	</ul>
<?php } ?>
<div class="clear"></div>
</li>
<li class="empli3"><a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/">EXPERTISE</a>
<?php
if(!$post->post_parent){
	$children = wp_list_pages("title_li=&child_of=10&echo=0");
}
else{
	if($post->ancestors) {
		$ancestors = end($post->ancestors);
		$children = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0");
	}
}
if ($children) { ?>
	<ul>
		<?php echo $children; ?>
	</ul>
<?php } ?>
<div class="clear"></div>
</li>
<li class="empli2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>team/">TEAM</a>
<?php
if(!$post->post_parent){
	$children = wp_list_pages("title_li=&child_of=8&echo=0");
}

if ($children) { ?>
	<ul>
		<?php echo $children; ?>
	</ul>
<?php } ?>
<div class="clear"></div>
</li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">HOME</a>
<ul><li class="empli1">&nbsp;</li></ul>
<div class="clear"></div>
</li>
</ul>

<!-- 
wp_list_pages('title_li='); 

else{
	if($post->ancestors){ 
		$ancestors = end($post->ancestors);
		$children = wp_list_pages("title_li=&child_of=".$ancestors."&echo=0");
	}
}

-->
</div>

</header>

<div class="nivoSlider" style="height:280px;width:960px;">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/advertising/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide1.jpg" alt="" title="Advertising" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/association-management/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide2.jpg" alt="" title="Association Management" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/ballot-and-referendum-campaigns/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide3.jpg" alt="" title="Ballot and Referendum Campaigns" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/bilingual-multicultural-outreach/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide4.jpg" alt="" title="Bilingual Multicultural Outreach" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/branding/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide5.jpg" alt="" title="Branding" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/coalition-grassroots/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide6.jpg" alt="" title="Coalition/Grassroots" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/community-outreach/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide7.jpg" alt="" title="Community Outreach" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/crisis-communications/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide8.jpg" alt="" title="Crisis Communications" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/earned-media/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide9.jpg" alt="" title="Earned Media" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/event-production-and-management/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide10.jpg" alt="" title="Event Production and Management" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/research-message-development/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide11.jpg" alt="" title="Research/Message Development" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/social-media/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide12.jpg" alt="" title="Social Media" />
</a>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>expertise/strategic-counsel/">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fsbslide13.jpg" alt="" title="Strategic Counsel" />
</a>
</div>
