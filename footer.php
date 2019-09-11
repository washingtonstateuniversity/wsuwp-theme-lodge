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

	<?php
	/*
	* Show back to top button if enabled
	*/
	do_action('WSU_WP_Lodge_back_to_top');

	/*
	* Include global footer template
	*/
	get_template_part( 'template-parts/global/global', 'footer' );
	?>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
