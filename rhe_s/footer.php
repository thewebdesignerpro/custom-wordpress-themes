<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package rhe_s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<aside>
			<h3>COMPANY</h3>
			<a href="#">HOME</a>
			<a href="#">WELCOME</a>
			<a href="#">ABOUT US</a>
			<a href="#">CONTACT US</a>
		</aside>
		<aside>
			<h3>PRODUCTS</h3>
			<a href="#">SHOP ONLINE</a>
			<a href="#">HAIR EXTENSIONS</a>
			<a href="#">HAIR CARE</a>
			<a href="#">TOOLS &amp; ACCESSORIES</a>
			<a href="#">FAQ</a>
		</aside>
		<aside>
			<h3>TRAINING</h3>
			<a href="#">GOVERNMENT ACCREDITED</a>
			<a href="#">TRAINING</a>
			<a href="#">WORKSHOPS</a>
		</aside>		
		<aside>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tnt.jpg" alt="TNT"></a>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/paypal.jpg" alt="PayPal"></a>
			<div>FOLLOW US</div>
			<a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb_instagram.jpg" alt=""></a>
			<a href="#"></a>
			<a href="#"></a>
		</aside>		
		<div class="footer">
<!--			<div class="site-info">	-->
				&copy;2011-<?php echo date('Y'); ?>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Royal Hair Extensions</a>. all rights reserved<span> | </span>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy/">privacy</a><span> | </span>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-service/">terms</a><span> | </span>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap/">sitemap</a>
<!--			</div> .site-info -->
<!--			<div class="social2">
				<a href="https://www.facebook.com/davidisraelmasterphotographer" target="_blank" title="Facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-bottom.png" alt=""></a>
				<a href="https://plus.google.com/+DavidisraelAu?prsrc=5" target="_blank" title="Google+"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/g-plus-bottom.png" alt=""></a>
				<a href="au.linkedin.com/pub/david-israel/7/689/b68" target="_blank" title="LinkedIn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-bottom.png" alt=""></a>
				<a href="https://twitter.com/davidisraelfoto" target="_blank" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-bottom.png" alt=""></a>
			</div>			-->
		</div>	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</div><!-- #mainwrap -->
</body>
</html>
