<?php
/**
 * Template Name: Page w Right Sidebar
 *
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<style type="text/css">
	#general-page-header {
		width: 100vw;
		height: 200px;
		background-image: url('<?php the_field('general_page_header_image', 'option') ?>');
		background-size: cover;
		background-position: top center;
		display: flex;
    	justify-content: center;
    	align-items: center;
    	margin-top: 49px;
		text-transform: uppercase;
	}
</style>

<section id="general-page-header">
	<h1><?php the_title() ?></h1>
</section>

<div id="primary" class="content-area container pt-5">
	<div class="row">

		<main id="main" class="site-main col-sm-12 col-md-12 col-lg-9">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<div class="col-sm-12 col-md-12 col-lg-3">

			<?php get_sidebar(); ?>

		</div>

	</div> <!-- END ROW -->
</div><!-- #primary -->

<?php
get_footer();
