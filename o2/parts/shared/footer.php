	
<footer class="group">
<div class="footer">
<ul>
<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
<?php endif; ?>
<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
<?php endif; ?>

</ul>
<p>&copy; <?php echo date("Y"); ?> <a href="<?php get_home_url(); ?>"><?php bloginfo( 'name' ); ?></a>. All rights reserved. All Other Trademarks Acknowledged |
<a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us/">About Us</a> |
<a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/">Contact Us</a> | 
<a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy/">Privacy Policy</a> | 
<a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-service/">Terms of Services</a> | 
<a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap/">Sitemap</a></p>
</div>	
</footer>
