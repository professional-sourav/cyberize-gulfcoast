<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package gulfcoast
 */

get_header();
?>
	<style type="text/css">

	</style>

	<div id="primary" class="content-area thank-you-page-bg">
		<main id="main" class="site-main container">

			<div class="page-content text-center">

				<img src="<?php echo get_template_directory_uri() . '/assets/img/thank-you-image.png' ?>">
				<h1>Thank You!</h1>
				<p>You’re now a member of our list of awesome people.</p>
				<button class="thank-you-page-button">Lorem Ipsum</button>

				<div class="social mt-5 col-md-6 col-sm-6 col-6 mx-auto">
					<?php echo do_shortcode( '[Sassy_Social_Share title=""]' );  ?>
				</div>

			</div><!-- .page-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
