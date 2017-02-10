<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>








<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="wrap">
		<?php
		get_template_part( 'template-parts/footer/footer', 'widgets' );

		if ( has_nav_menu( 'social' ) ) : ?>
			<nav class="social-navigation" role="navigation" aria-label="<?php _e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'social',
						'menu_class'     => 'social-links-menu',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif;

		get_template_part( 'template-parts/footer/site', 'info' );
		?>
	</div><!-- .wrap -->
</footer><!-- #colophon -->


		</div><!-- #content -->


		<nav id="cd-lateral-nav">
				<!-- test nav -->


					<?php //wp_nav_menu( array( 'theme_location' => 'section', 'container' => 'ul', 'menu' => '','menu_class' => 'cd-navigation', 'container_class' => 'cd-navigation' ) ); ?>



				<ul class="cd-navigation cd-single-item-wrapper">
					<li><a href="#0">Privacy Policy</a></li>
					<li><a href="#0">Terms of Use</a></li>
					<li><a href="#0">About</a></li>
				</ul> <!-- cd-single-item-wrapper -->

			</nav>





	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>
<script>
        ;(function() {
            // Initialize
						var bLazy = new Blazy({
							offset: 30,
							//container: '#scrolling-container',
								breakpoints: [{
								width: 420 // Max-width
								,src: 'data-src-small'
						 }]
						, success: function(element){
								 setTimeout(function(){
							 // We want to remove the loader gif now.
							 // First we find the parent container
							 // then we remove the "loading" class which holds the loader image
							 var parent = element.parentNode;
							 parent.className = parent.className.replace(/\bloading\b/,'');
						 }, 500);
					}
				});
        })();
    </script>
		<script src="https://cdn.plyr.io/2.0.11/plyr.js"></script>
		<script>plyr.setup();</script>
		<!-- Rangetouch to fix <input type="range"> on touch devices (see https://rangetouch.com) -->
		<script src="https://cdn.rangetouch.com/0.0.9/rangetouch.js" async></script>




		<script>
		(function(d, u){
				var x = new XMLHttpRequest(),
						b = d.body;

				// Check for CORS support
				// If you're loading from same domain, you can remove the if statement
				// XHR for Chrome/Firefox/Opera/Safari
				if ("withCredentials" in x) {
						x.open("GET", u, true);
				}
				// XDomainRequest for older IE
				else if(typeof XDomainRequest != "undefined") {
						x = new XDomainRequest();
						x.open("GET", u);
				}
				else {
						return;
				}

				x.send();
				x.onload = function(){
						var c = d.createElement("div");
						c.setAttribute("hidden", "");
						c.innerHTML = x.responseText;
						b.insertBefore(c, b.childNodes[0]);
				}
		})(document, "https://cdn.shr.one/0.1.9/sprite.svg");
		</script>

		<script>shr.setup({
		    debug: !0
		});</script>
</body>
</html>
