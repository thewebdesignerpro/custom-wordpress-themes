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

<?php
// A second sidebar for widgets, just because.
if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
<?php endif; ?>

</ul>

</div>

<br class="clearit" />