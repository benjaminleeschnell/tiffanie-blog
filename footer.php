<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	<div class="row bottom">
		<div class="large-4 columns logo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo-white.png"></div>
		<div class="large-4 columns fb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/facebook_logo.png"></div>
		<div class="large-4 columns tw"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/twitter_logo.png"></div>
	</div>

<?php wp_footer(); ?>

</body>
</html>
