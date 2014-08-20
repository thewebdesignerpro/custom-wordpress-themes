	
<footer class="group">
<div class="footer">
<ul>
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
<p>&copy; <?php echo date("Y"); ?> <a href="<?php get_home_url(); ?>"><?php bloginfo( 'name' ); ?></a>. All rights reserved. All Other Trademarks Acknowledged | <a href="#">Privacy</a> | <a href="#">Terms</a> | <a href="#">Sitemap</a></p>
</div>	
</footer>
