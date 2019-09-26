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
						<img src="/wp-content/uploads/2019/06/ratings.png" alt="">
					</figure>
					<h4 class="name">AK Ryan</h4>
					<h5 class="location">
						Single Family home in 2017 in Rogers Park, Anchorage, AK
					</h5>
					<p class="text">
						“My wife and I worked with Wade to purchase a home and sell our condo. Wade helped us find and buy a house that we really like, and he went above and beyond helping us find contractors to work on renovations that we wanted to do before we moved in. When we sold the condo we moved from, Wade helped us identify what to do to get the condo in a good state to sell, and helped negotiate a good sales deal when we sold. Wade is a great guy to work with, and I highly recommend him.”
					</p>
				</div>	
				<div class="col-md-4 text-center">
					<figure class="star-holder">
						<img src="/wp-content/uploads/2019/06/ratings.png" alt="">
					</figure>
					<h4 class="name">CliffMurray </h4>
					<h5 class="location">
						Single Family home in 2018 in Abbott Loop, Anchorage, AK
					</h5>
					<p class="text">
						“I can’t recommend Wade strongly enough. We ran into several road blocks… some of our own making, and some because inspections didn’t go right. He stuck with us through the whole process, kept us calm and positive when we were not feeling good about the process. In the end we got our asking price on the sale of our home and feel great about the purchase of our new home.”
					</p>
				</div>	
				<div class="col-md-4 text-center">
					<figure class="star-holder">
						<img src="/wp-content/uploads/2019/06/ratings.png" alt="">
					</figure>
					<h4 class="name">albertalvarez08</h4>
					<h5 class="location">
						Single Family home in 2017 in Eagle River, Eagle River, AK
					</h5>
					<p class="text">
						“Wade is one of the most effective realtors we have ever worked with. He is intelligent, hard working and highly personable and knows how to “close the deal” leaving all parties feeling satisfied with the results. An added benefit to working with Wade is his working knowledge of the construction industry which was a helpful benefit for us as we made comparative analyses of various properties. We are all very pleased with his performance as a highly skilled realtor and honored to consider him a friend.”
					</p>
				</div>	
			</div>
			
		</article>
		
	</section>
</article><!-- #post-<?php the_ID(); ?> -->
