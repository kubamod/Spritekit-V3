<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SpriteKit_v3
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
	<div class="cookies-info">
		<div class="container" style="max-width:1024px;">
			* Używamy informacji zapisanych za pomocą cookies i podobnych technologii m.in. w celach reklamowych i statystycznych oraz w celu dostosowania naszych serwisów do indywidualnych potrzeb użytkowników. Mogą też stosować je współpracujący z nami reklamodawcy, firmy badawcze oraz dostawcy aplikacji multimedialnych. W programie służącym do obsługi internetu można zmienić ustawienia dotyczące cookies.Korzystanie z naszych serwisów internetowych bez zmiany ustawień dotyczących cookies oznacza, że będą one zapisane w pamięci urządzenia.
		<hr style="margin-top:4px;margin-bottom:4px; margin-top:10px;"/>
		</div>
	</div>
	

		<div class="site-info container" style="max-width:1024px; margin:auto;">
		<?php if (is_single() || is_page() || is_category()): ?>
			<div class="breadcrumb-footer"><img src="<?php echo get_template_directory_uri().'/assets/img/logo3.png'; ?>" width="20" alt="logo"/><?php get_breadcrumb(); ?></div>
		<?php endif; ?>	
			<div class="row">
				<div class="col-sm">
					<ul>
					<li class="strong-li">Blog</li>
					<li><a href="">Microblog</a></li>
					<li><a href="">Photography</a></li>
					<li><a href="">microblog</a></li>
					<li><a href="">microblog</a></li>
					<li><a href="">microblog</a></li>
					</ul>
				</div>
				<div class="col-sm"><ul>
					<li class="strong-li">Dupa i chuj</li>
					<li>tesdg</li>
					<li>dsagadsg</li>
					<li>vsdav</li>
					<li>vsdav</li>
					</ul></div>
				<div class="col-sm"><ul>
					<li class="strong-li">Dupa i chuj</li>
					<li>tesdg</li>
					<li>dsagadsg</li>
					<li>vsdav</li>
					
					</ul></div>
				<div class="col-sm"><ul>
					<li class="strong-li">Dupa i chuj</li>
					<li>tesdg</li>
					<li>dsagadsg</li>
					
					</ul></div>
			</div>

			<div style="margin-top:20px; color:#888;">Don't steal my shit please</div>
			<hr style="margin-top:4px;margin-bottom:4px;"/>
			<div class="copy row">
				<div class="col-sm-5">
				Copyright © 2017 <?php echo get_bloginfo(); ?>. All rights reserved.
				</div>
				<div class="col-sm">
					<a href="">Privacy Policy</a>
				</div>
				<div class="col-sm">
					<a href="">Site Map</a>
				</div>
				<div class="col-sm">
					<a href="">Contact</a>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<script>
$( "a:contains('My projects')" ).addClass("my-projects");
$( ".breadcrumb-footer a:contains('Home')" ).empty();

</script>
<?php wp_footer(); ?>

</body>
</html>

<!--	&copy Kuba Modrzejewski &middot; Powered by SpriteKit &middot; <a href="https://twitter.com/modrzjwzky">Twitter</a> &middot; <a href="https://www.instagram.com/modrzjwzki/">Instagram</a> &middot; <a href="<?php echo esc_url( home_url( '/about-me' ) ); ?>">about me</a> &middot; <a href="javascript:;" onclick="document.body.scrollTop = 0;">Return to top </a>&middot; -->
