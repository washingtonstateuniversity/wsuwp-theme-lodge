<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WSU_WP_Lodge
 */

?>

	</div><!-- #content -->

	<?php do_action('WSU_WP_Lodge_back_to_top'); ?>

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
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
