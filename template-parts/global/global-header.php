<?php
/**
 * The template for the global header
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WSU_WP_Lodge
 */

 ?>

<header id="masthead" class="site-header">
	<div class="site-branding">
		<?php
		the_custom_logo();
		if ( is_front_page() && is_home() ) :
			?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
		else :
			?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
		endif;
		$wsuwp_lodge_description = get_bloginfo( 'description', 'display' );
		if ( $wsuwp_lodge_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $wsuwp_lodge_description; /* WPCS: xss ok. */ ?></p>
		<?php endif; ?>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'wsuwp-lodge' ); ?></button>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary-nav',
			'menu_id'        => 'primary-menu',
		) );
		?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->
