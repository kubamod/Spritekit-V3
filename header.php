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
	<script src="<?php echo get_template_directory() . '/js/bootstrap.js'; ?>"></script>
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,400i,700" rel="stylesheet"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	

	<header id="masthead" class="site-header">
		<div class="container">
		
			
		

		<nav id="site-navigation" class="main-navigation">
			<img src="<?php echo get_template_directory_uri().'/assets/img/logo2.png'; ?>" width="35"  alt="logo" class="logo "/>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
?>
		</nav><!-- #site-navigation -->
		
		</div>
	</header><!-- #masthead -->
	
	<div id="content" class="site-content container">
