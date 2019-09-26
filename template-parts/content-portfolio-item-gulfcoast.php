<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cyberize
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>

	<div class="entry-content">

		<footer class="entry-footer card-footer d-none">
			<?php //cyberize_entry_footer(); ?>

			<div class="entry-meta">
				<?php
					cyberize_posted_on();
				?>
			</div><!-- .entry-meta -->
		</footer><!-- .entry-footer -->

		<?php if (has_post_thumbnail()) : ?>

		<!-- <div class="row"> -->
			<!-- <div class="col-md-12"> -->
				
				<figure class="featured-image-box">

					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('featured-size'); ?>
					</a>

				</figure>

			<!-- </div> -->
		<!-- </div> -->

		<?php else : ?>

			<?php the_title(); ?>

			<h4 style="color: red;">Please add a Featured Image to this Portfolio Item.</h4>
			<h5>Nothing be displayed without a featured image with this Portfolio template ...</h5>

		<?php endif; ?>

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
