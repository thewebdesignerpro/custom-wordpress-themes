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
<?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>

<?php endif; // end primary widget area ?>

<?php // A second sidebar for widgets, just because.
if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

<?php dynamic_sidebar( 'secondary-widget-area' ); ?>

<?php endif; ?>
</ul>
</div>

