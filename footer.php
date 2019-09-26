<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework_2
 */

?>
	</div><!-- #content -->

	<!-- MAIN FOOTER -->
	<footer id="footer-gulfcoast" class="site-footer">

		<div class="footer-testimonial d-none">
			<div class="container">
				<div class="row">
			    	<div class="col-12 col-sm-12 col-md-4 col-lg-4">
						<?php

						if ( ! is_active_sidebar( 'footer-sidebar-1' ) ) {

							echo "Please Insert A Widget";
						}
						?>

						<aside id="footer-widget-1" class="widget-area">
							<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
						</aside>
				  	</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4">
						<?php

						if ( ! is_active_sidebar( 'footer-sidebar-2' ) ) {

							echo "Please Insert A Widget";
						}
						?>

						<aside id="footer-widget-2" class="widget-area">
							<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
						</aside>
				  	</div>
					<div class="col-12 col-sm-12 col-md-4 col-lg-4">
						<?php

						if ( ! is_active_sidebar( 'footer-sidebar-3' ) ) {

							echo "Please Insert A Widget";
						}
						?>

						<aside id="footer-widget-3" class="widget-area">
							<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
						</aside>
				  	</div>
			  	</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				<div class="">
					<div class="copy-right-text">
						<?php the_field('theme_footer_text', 'option') ?>
					</div>

					<!--<a class="float-right" target="_blank" href="<?php echo esc_url( __( 'https://cyberizegroup.com/', 'moose-framework-2' ) ); ?>"><?php
						printf( esc_html__( 'Premium support & maintenance by %s', 'moose-framework-2' ), 'CyberizeFramework' );
					?></a>-->
				</div>
			</div>
			<?php

			if ( ! is_active_sidebar( 'footer-sidebar-4' ) ) {

				echo "Please Insert A Widget";
			}
			?>

			<aside id="footer-widget-4" class="widget-area">
				<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
			</aside>
		</div> <!-- END WIDGET WRAPPER -->

		<!-- START FOOTER BOTTOM -->
		<div class="gc-footer-bottom">
			<div class="container">
				<?php the_field('theme_footer_bottom_text', 'option') ?>
			</div>
		</div>
		<!-- END FOOTER BOTTOM -->


		<!--==============================================================================
		=            THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH            =
		===============================================================================-->

		<div style="color: black"><strong>Current template:</strong>
			<?php echo get_current_template( true ); ?>
		</div>

		<!-- ====  End of THIS IS FOR DEBUGGING. PLZ DISABLE WHEN READY TO PUBLISH  ==== -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!--===========================================
=            CUSTOM ANALYTICS TAGS - FOOTER     =
============================================-->

	<?php the_field('before_bottom_body_tag_default', 'option'); ?>

	<?php the_field('before_bottom_body_tag'); ?>

<!--====  End of CUSTOM ANALYTICS TAGS  ====-->

</body>
</html>
