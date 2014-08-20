<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>

</div> 

<div id="sidebar">
<ul class="xoxo">
<?php
if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
<?php endif; // end primary widget area ?>

<li id="tryb4buy">
<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>sales-and-rentals/">Try Before You Buy</a></h3>
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tryb4buy.png" width="220" height="133" alt="" />
<p>Come in to <em>AV-PRO's</em> showroom and check out the newest state of the art <span class="sanyo">SANYO</span> Projectors. We offer a try before you buy rental policy for up to <em>30 days</em> to find the perfect projector for your needs.</p>
</li>

<!--
<li>
<h3>Main Menu</h3>
<ul>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home Page - Welcome<span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>products/">Our Products &amp; Services<span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>faq/">Frequently Asked Questions<span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>location-and-driving-directions/">Location &amp; Driving Directions<span></span></a></li>
<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact-us/">Contact Info<span></span></a></li>
</ul>
</li>
-->

</ul>

<?php
// A second sidebar for widgets, just because.
if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
<ul class="xoxo">
<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
</ul>
<?php endif; ?>

</div>

<br class="clearit" />