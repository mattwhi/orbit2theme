<?php ?>
<!-- THIS FILE LOADS ALL THE CUSTOMIZATIONS FROM THE THEME OPTIONS PANEL  -->


<!-- Custom CSS Modifications from the Admin Panel -->
<style type="text/css">
<?php echo get_option_tree('css'); ?>

<?php $background_color = get_option_tree("background_color"); if (isset($background_color[0])) { ?>		
		body, body:after {background-color: <?php echo get_option_tree('background_color');?>!important;}
	<?php } else {} ?>

	/* This is your link hover color */
	<?php $link_hover_color = get_option_tree("link_hover_color"); if (isset($link_hover_color[0])) { ?>		
		#section-header li a:hover, a:hover {color: <?php echo get_option_tree('link_hover_color');?>!important;}
	<?php } else {} ?>	
	
	/* This is your link color */
	<?php $link_color = get_option_tree("link_color"); if (isset($link_color[0])) { ?>		
		#section-header li a, a {color: <?php echo get_option_tree('link_color'); ?>!important;}
	<?php } else {} ?>
	
	/* This is your visited link color */
	<?php $link_visited_color = get_option_tree("link_visited_color"); if (isset($link_visited_color[0])) { ?>
		a:visited {color: <?php echo get_option_tree('link_visited_color'); ?>!important;}
	<?php } else {} ?>		
</style>
