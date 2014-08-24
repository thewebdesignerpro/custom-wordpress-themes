<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fp_s
 */
?>

	<?php if ( is_front_page() || is_page( 'About Us' ) || is_page( 'Cafe' ) || is_page( 'Contact Us' ) ) { ?>
		<div class="balloon1">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/balloon1.png" alt="">
		</div>
		<div class="balloon2">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/balloon2.png" alt="">
		</div>
	<?php } else { ?>
		<div class="balloon3">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/balloon3.png" alt="">
		</div>
		<div class="balloon4">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/balloon4.png" alt="">
		</div>	
	<?php }	?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer">
			<div class="site-info">
				<!-- &copy; 2011-<php echo date('Y'); > -->
				&copy; 2014 <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Fussy <span class="pots">Pots</span></a> . All rights reserved . 
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy/">Privacy</a> . 
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-service/">Terms</a> . 
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap/">Sitemap</a>
			</div><!-- .site-info -->
			<div class="social2">
				<a href="http://www.facebook.com/fussypots" target="_blank" title="Facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-bottom.png" alt=""></a>
				<a href="https://plus.google.com/117167403531518744294/posts" target="_blank" title="Google+"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/g-plus-bottom.png" alt=""></a>
			</div>			
		</div>	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
