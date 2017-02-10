<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<a id="cd-logo" href="#0"></a>


		<nav class="cd-secondary-nav">

				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/punch-white.svg" alt="Punch Newspapers" class="logo-img">
					</a>
				</div>
				<?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_id' => 'top-menu', ) ); ?>



		</nav> <!-- .cd-secondary-nav -->


		<a id="cd-menu-trigger" href="#0"><span class="cd-menu-text">Sections</span><span class="cd-menu-icon"></span></a>
