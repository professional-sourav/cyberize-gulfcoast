<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-single'); ?>>
	<section id="portfolio-single-gulfcoast" class="post-gulfcoast">

		<div class="entry-content container">

			<div class="row">

				<div class="col-sm-12 col-md-8 col-lg-8">

					<?php the_content(); ?>

				</div>
				<div class="col-sm-12 col-md-4 col-lg-4">

					<article class="right-content">

						<header>
							<h4><?php the_field('portfolio_right_column_title'); ?></h4>
							<h5><?php the_field('portfolio_right_column_subtitle'); ?></h5>
						</header>
						<main>
							<?php the_field('portfolio_right_column_content'); ?>
						</main>

					</article>

				</div>

			</div>
		</div><!-- .entry-content -->

	</section>

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
						<img src="/wp-content/uploads/2019/06/ratings.png" alt="">
					</figure>
					<h4 class="name">John Doe</h4>
					<p class="text">
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
					</p>
				</div>
				<div class="col-md-4 text-center">
					<figure class="star-holder">
						<img src="/wp-content/uploads/2019/06/ratings.png" alt="">
					</figure>
					<h4 class="name">John Doe</h4>
					<p class="text">
						Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
					</p>
				</div>
			</div>

		</article>

	</section>
</article><!-- #post-<?php the_ID(); ?> -->
