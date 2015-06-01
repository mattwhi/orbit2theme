<?php
/**
 * Footer two widget area.
 *
 * @package Orbit2Theme
 */

if ( ! is_active_sidebar( 'footer-2' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-4" role="complementary">
	<?php dynamic_sidebar( 'footer-2' ); ?>
</div><!-- #secondary -->
