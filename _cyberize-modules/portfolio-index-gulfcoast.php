<?php
/**
 *
 * MODULE: Portfolio Index Gulf Coast w Sidebar
 *
 */
?>

<section class="portfolio-index-gulfcoast">

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<!-- Blue block under the header with content -->
			<div class="block-after-header text-center">
				<h1><?php the_field('portfolio_index_title', 'option') ?></h1>
			</div>

			<section class="container">

				<div class="">

						<?php
						if ( have_posts() ) : ?>

							<header class="page-header">
									<?php
										the_archive_title( '<h4 class="archive-type">', '</h4>' );
										//the_archive_description( '<div class="archive-description">', '</div>' );
									?>
								<!-- <div class="long-underline"></div>	 -->

							</header><!-- .page-header -->


							<div class="row">

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

							?>
								<div class="col-12 col-sm-6 col-md-6 col-lg-6 ">

							<?php

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'portfolio-item-gulfcoast' );

							?>

								</div> <!-- COL6 -->

							<?php

							endwhile;

							?>

						</div> <!-- ROW -->
						<div class="row">
							<div class="col-12">
							<?php


							the_posts_navigation();

							?>

							</div>
						</div>
							<?php

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif; ?>


						<?php // get_sidebar(); ?>

				</div> <!-- End Row -->

			</section> <!-- End Container -->

			<section id="portfolio-testimonial">

				<article class="container">

					<div class="row">
						<div class="col-md-4 text-center">
							<figure class="star-holder">
								<img src="/wp-content/uploads/2019/10/STARSTARSTARSTARSTAR-1.png" alt="">
							</figure>
							<h4 class="name">John Doe</h4>
							<p class="text">
								Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
							</p>
						</div>
						<div class="col-md-4 text-center">
							<figure class="star-holder">
								<img src="/wp-content/uploads/2019/10/STARSTARSTARSTARSTAR-1.png" alt="">
							</figure>
							<h4 class="name">John Doe</h4>
							<p class="text">
								Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
							</p>
						</div>
						<div class="col-md-4 text-center">
							<figure class="star-holder">
								<img src="/wp-content/uploads/2019/10/STARSTARSTARSTARSTAR-1.png" alt="">
							</figure>
							<h4 class="name">John Doe</h4>
							<p class="text">
								Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
							</p>
						</div>
					</div>

				</article>

			</section>

		</main>

	</div> <!-- end primary -->

</section>
