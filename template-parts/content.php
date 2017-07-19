<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SpriteKit_v3
 */

?>


	


<article c id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
if (is_singular()) :
?>

<?php
endif;
?>

<div class="post">
	
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
    <img src="<?php echo $url; ?>" class="img-responsive content-image" style="margin:auto;" />
		
	<header class="entry-header">
		
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		
		<?php
endif; ?>
	<div class="entry-meta">
		<span class="time"><?php the_time('M d, Y');  ?></span>
		<a target="_blank"  href="https://twitter.com/modrzjwzky?lang=pl">@<?php the_author() ?></a>
	</div>
	
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading >', 'spritekit-v3' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'spritekit-v3' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php spritekit_v3_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</div>
</article><!-- #post-<?php the_ID(); ?> -->
<hr class="separator" />

