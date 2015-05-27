<div class="navbar navbar navbar-static-top">
	<div class="container">
	<div class="social-header navbar-text">			
<ul class="social-header">
<?php
if ( function_exists( 'ot_get_option' ) ) {
$socialIcons = ot_get_option( 'social_icons', array() );
if ( ! empty( $socialIcons ) ) {
foreach( $socialIcons as $socialIcon ) {
echo '<li><a class="' . $socialIcon['socialClass'] . '" href="' . $socialIcon['socialUrl'] . '"><i class="' . $socialIcon['socialFontAwesome'] . '"></i></a></li>';
		}
	}
}
?>
</ul>
</div>
<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>	
</button>
		<div class="collapse navbar-collapse navHeaderCollapse">
			<?php
		        wp_nav_menu( array(
		            'menu'              => 'primary',
		            'theme_location'    => 'primary',
		            'depth'             => 2,
		            'menu_class'        => 'nav navbar-nav navbar-right',
		            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		            'walker'            => new wp_bootstrap_navwalker())
		        );
			?>
		</div>
	</div>
</div>	