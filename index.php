<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SpriteKit_v3
 */

get_header(); ?>
<div class="ad-header"></div>
</div> <!-- ## container with ad ## -->
	<div id="primary" class="content-area ">
		
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		<div class="pagination">
			<?php echo paginate_links(); ?> <br />
			<div class="ad-header"></div>
		</div>
		</main><!-- #main -->
		
</div><!-- #primary -->
	<img src="<?php echo get_template_directory_uri() . '/assets/img/Siri.png'; ?>"  class="siri-pagination" width="400" />
<?php

get_footer();
