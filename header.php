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
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class();  ?>>
<a href="<?php echo get_home_url(); ?>">
	<img src="<?php echo get_template_directory_uri() . '/assets/img/SiriVoice.png'; ?>" width="500" class="logo img-fluid" alt="logo" />
</a>
	<header id="masthead" class="site-header">
		<div class="container" style="max-width:1020px; padding: 0;">
		
			
		

		<nav id="site-navigation" class="main-navigation ">
			
			<?php
				wp_nav_menu( array(
					
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'nav nav-pills nav-justified',
				) );
?>
		</nav><!-- #site-navigation -->
		
		</div>
	</header><!-- #masthead -->

<div class="container-fluid breadcrumb-full" style="padding-left:0; padding-right:0;"> 	
<!-- <div class="breadcrumb"><?php get_breadcrumb(); ?><a class="rss" href="<?php echo esc_url( home_url( '/?feed=rss' ) ); ?>">RSS</a></div> -->
</div>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Header siri voice -->
<ins class="adsbygoogle"
     style="display:block; max-width:1024px; margin-left:auto;margin-right:auto; margin-bottom:80px; height:100px !important;"
     data-ad-client="ca-pub-9140220701206196"
     data-ad-slot="9810880149"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


<!-- 
			<a href="<?php echo esc_url( home_url() ); ?>" style="padding-left:0;"><img src="<?php echo get_template_directory_uri().'/assets/img/logo3.png'; ?>" width="35"  alt="logo" class="logo "/><span class="blog-info"><?php echo get_bloginfo(); ?></span></a> -->