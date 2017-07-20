<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" class="microblog" <?php post_class(); ?>>
	<div style="background-image:url('<?php echo get_template_directory_uri().'/assets/img/avatar.jpg'; ?>');" alt="avatar Kuba Modrzejewski"  class="avatar"></div>
	<?php the_date('Y-m-d', '<span class="microblog-time">', '</span>'); the_time('g:i a'); ?>
	<div class="entry-content-microblog">
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
        
        <? $custom_fields = get_post_custom();
        echo $$custom_fields; 
?>
<div style="clear:both;"/>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
<hr class="separator" />