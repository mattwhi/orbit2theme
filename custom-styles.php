<?php ?>
<!-- THIS FILE LOADS ALL THE CUSTOMIZATIONS FROM THE THEME OPTIONS PANEL  -->


<!-- Custom CSS Modifications from the Admin Panel -->
<style type="text/css">
<?php echo get_option_tree('css'); ?>

<?php $background_color = get_option_tree("background_color"); if (isset($background_color[0])) { ?>		
		body, body:after {background-color: <?php echo get_option_tree('background_color');?>!important;}
	<?php } else {} ?>

</style>
