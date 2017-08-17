<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SpriteKit_v3
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- chuuuuuuuuuuj -->
	<script src="<?php echo get_template_directory_uri() . '/js/jquery-3.2.1.min.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/js/bootstrap.js'; ?>"></script>
	<!--<script src="<?php echo get_template_directory_uri() . '/js/jquery.sticky.js'; ?>"></script> -->
	<script>
		$(document).ready(function(){
			$(".site-header").sticky({topSpacing:0});
		});
	</script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header id="masthead" class="site-header">
		<div class="container">
		
			
		

		<nav id="site-navigation" class="main-navigation">
			
			<a href="<?php echo esc_url( home_url( '/Blog' ) ); ?>" style="padding-left:0;"><img src="<?php echo get_template_directory_uri().'/assets/img/logo3.png'; ?>" width="35"  alt="logo" class="logo "/><span class="blog-info"><?php echo get_bloginfo(); ?></span></a>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
?>
		</nav><!-- #site-navigation -->
		
		</div>
	</header><!-- #masthead -->

<div class="container" style="height:40px;"> 	
<div class="breadcrumb"><?php get_breadcrumb(); ?><a class="rss" href="<?php echo esc_url( home_url( '/?feed=rss' ) ); ?>">RSS</a></div>
</div>