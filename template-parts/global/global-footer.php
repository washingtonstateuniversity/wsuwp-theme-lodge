<?php
/**
 * The template for displaying the global footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WSU_WP_Lodge
 */

 ?>

<footer id="colophon" class="site-footer">
	<div class="site-info">

		<span class="copyright">&copy; <?php echo WSU_WP_Lodge_Shortcodes::get_current_year(); ?></span>
		<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wsuwp-lodge' ) ); ?>">
			<?php
			/* translators: %s: CMS name, i.e. WordPress. */
			printf( esc_html__( 'Proudly powered by %s', 'wsuwp-lodge' ), 'WordPress' );
			?>
		</a>
		<span class="sep"> | </span>
			<?php
			/* translators: 1: Theme name, 2: Theme author. */
			printf( esc_html__( 'Theme: %1$s by %2$s.', 'wsuwp-lodge' ), 'wsuwp-lodge', '<a href="https://web.wsu.edu">WSU University Communications</a>' );
			?>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
