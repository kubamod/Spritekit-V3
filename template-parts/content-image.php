<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
    <div class="image-post-type text-center">
        <img src="<?php echo $url; ?>" class="img-responsive img-post-type" style="margin:auto;" />
        <?php if ( is_single() ) { ?>
        		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="time"><?php the_time('M d, Y');  ?></span>
			<a target="_blank"  href="https://twitter.com/modrzjwzky?lang=pl">@<?php the_author() ?></a>
		</div>
		<?php
		endif; ?>
        <?php } else { ?>
        <div class="caption-image-post">
        <?php 
        if ( is_single() ) :
			the_title( '<h1 class="entry-title-image">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title-image"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
        ?>
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="time"><?php the_time('M d, Y');  ?></span>
			<a target="_blank"  href="https://twitter.com/modrzjwzky?lang=pl">@<?php the_author() ?></a>
		</div>
        </div>
		<?php
		endif; ?>
        <?php } ?>
        
        </div>
	</header><!-- .entry-header -->
<?php if ( is_single()) { ?>
	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Czytaj dalej <span class="meta-nav">&rarr;</span>', '_s' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );
		?>
        
        <footer class="entry-footer">
		<?php  spritekit_v3_entry_footer(); ?>
	</footer><!-- .entry-footer -->
        
	</div><!-- .entry-content -->
<?php } ?>
	<div class="line"> </div>
</article><!-- #post-## -->
<hr class="separator" />