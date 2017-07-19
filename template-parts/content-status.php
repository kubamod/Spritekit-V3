<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 */

?>

<article id="post-<?php the_ID(); ?>" class="aside" <?php post_class(); ?>>

	<div class="entry-content-aside">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

		?>
        
        <? $custom_fields = get_post_custom();
        echo $$custom_fields; 
        ?>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
<div class="line " role="separator"> </div>