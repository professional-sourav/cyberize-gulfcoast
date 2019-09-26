<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Moose_Framework_2
 */

get_header(); ?>

<div id="primary" class="content-area">
	<!-- <div class="row"> -->
		<main id="main" class="site-main">

			<!-- Blue block under the header when no content -->
			<section id="gc-single-post" class="general-page-header"></section>

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'post-single-gulfcoast' );

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) :
				// 	comments_template();
				// endif;
			?>

			<?php

			endwhile; // End of the loop.

			?>

		</main><!-- #main -->

	<!-- </div> END ROW -->
</div><!-- #primary -->



<?php
get_footer();
