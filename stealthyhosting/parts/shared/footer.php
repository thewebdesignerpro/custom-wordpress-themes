	
<footer class="group">
<div class="footer">
<ul>
<li><ul>
<li><h3>&copy; <?php echo date("Y"); ?>. <a href="<?php get_home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h3>All Rights Reserved<br></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy/">Privacy Policy</a><br></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-service/">Terms of Services</a><br></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>sitemap/">Sitemap</a></li>
</ul>
</li>
<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
<?php endif; ?>
<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
<?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
<?php endif; ?>
<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
<?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
<?php endif; ?>

</ul>

</div>	
</footer>
