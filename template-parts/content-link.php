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
<div class="row">
	<div class="col-xs-2"><div style="background-image:url('<?php echo get_template_directory_uri().'/assets/img/avatar.jpg'; ?>');" alt="avatar Kuba Modrzejewski"  class="avatar"></div></div>
	<div class="col-xs-10">
	<span class="microblog-time">

	<a href="<?php the_permalink(); ?>"><?php the_time('m-j-y g:i A'); ?></span></a>
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

	</div><!-- .entry-content -->
</div><!-- .col-xs-8 -->
</div>
</article><!-- #post-## -->


<?php 
 

 if (get_previous_post(true)) :
	?>
		<hr class="separator" style="margin-top:10px;margin-bottom:30px; border-color:rgba(0, 0, 0, 0)" />
	<?php
 else :
	 ?>
	 	<hr class="separator" />
	 <?php
 endif;
?>