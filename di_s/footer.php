<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package di_s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer">
			<div class="site-info">
				<!-- &copy; 2011-<php echo date('Y'); > -->
				&copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>">david israel master photographer</a>. all rights reserved<span class="sep"> | </span>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy/">privacy</a><span class="sep"> | </span>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-service/">terms</a><span class="sep"> | </span>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap/">sitemap</a>
			</div><!-- .site-info -->
			<div class="social2">
				<a href="https://www.facebook.com/davidisraelmasterphotographer" target="_blank" title="Facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fb-bottom.png" alt=""></a>
				<a href="https://plus.google.com/+DavidisraelAu?prsrc=5" target="_blank" title="Google+"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/g-plus-bottom.png" alt=""></a>
				<a href="au.linkedin.com/pub/david-israel/7/689/b68" target="_blank" title="LinkedIn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin-bottom.png" alt=""></a>
				<a href="https://twitter.com/davidisraelfoto" target="_blank" title="Twitter"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter-bottom.png" alt=""></a>
			</div>			
		</div>	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
