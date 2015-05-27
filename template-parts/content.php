<?php
/**
 * @package Orbit2Theme
 */
?>
<?php
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
if (!empty($src)) { ?>
<div class="blog-entry col-md-3" style="background: url('<?php echo $src[0]; ?>') no-repeat;">
<?php } else { ?>
<div class="blog-entry col-md-3">
<?php } ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="display:none;">

	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php orbit2theme_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php

			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'orbit2theme' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'orbit2theme' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php orbit2theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

</div>