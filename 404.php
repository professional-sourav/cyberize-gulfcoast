<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cyberize
 */

get_header();
?>

<div id="primary" class="content-area error-404-page-area">
	<main id="main" class="site-main container">

		<div class="page-content text-center">

			<img src="<?php echo get_template_directory_uri() . '/assets/img/image-404.png' ?>">
			<h2>This page cannot be found.</h1>
			<p>We’re sorry, just make sure to check for spelling errors next time.</p>
			<a href="/">Go to Home Page</a>

			<div class="social mt-5 col-md-6 col-sm-6 col-6 mx-auto">
				<?php echo do_shortcode( '[Sassy_Social_Share title=""]' );  ?>
			</div>

		</div><!-- .page-content -->
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
