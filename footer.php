<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Orbit2theme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<?php get_sidebar(footer1); ?>
				</div>
			  	<div class="col-md-4">
			  		<?php get_sidebar(footer2); ?>
			  	</div>
			  	<div class="col-md-4">
			  		<?php get_sidebar(footer3); ?>
			  	</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="lower-footer">
		<div class="container">
			<div class="row">
						<div class="site-info">
							<p class="copyright col-md-12">Copyright &copy; <?php echo date( "Y" ); echo " "; bloginfo( 'name' ); ?></p>
						</div><!-- .site-info -->
					</div>
			</div>
		</div>
		</div><!-- #lower-footer -->

<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lib/bootstrap-sprockets.js"></script>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/lib/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/dynamic.css" />
</body>
</html>
