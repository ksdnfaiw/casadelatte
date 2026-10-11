<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kaffen
 */

?>

	</div>

	<!-- Footer -->
	<div class="kf-footer">
		<?php
		$footer_template = get_field( 'footer_template', 'option' );

		if ( $footer_template ) :
			$args = array( 'post_type' => 'hf_templates', 'p' => $footer_template );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				the_content();
			endwhile; wp_reset_postdata();
		else :
		?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align-center">

					<!-- copyright -->
					<div class="kf-copyright element-anim-1 scroll-animate" data-animate="active">
						<?php echo esc_html__( 'Copyright © 2022 Kaffen. All Rights Reserved.', 'kaffen' ); ?>
					</div>

				</div>
			</div>
		</div>
		<?php endif; ?>
	</div>

	</div>

	<?php wp_footer(); ?>

</body>
</html>
