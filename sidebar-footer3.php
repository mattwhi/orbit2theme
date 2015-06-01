<?php
/**
 * Footer three widget area.
 *
 * @package Orbit2Theme
 */

if ( ! is_active_sidebar( 'footer-3' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-md-4" role="complementary">
	<?php dynamic_sidebar( 'footer-3' ); ?>
</div><!-- #secondary -->
