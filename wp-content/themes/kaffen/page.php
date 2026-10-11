<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaffen
 */

get_header();
?>

	<?php while ( have_posts() ) : the_post(); ?>

	<!-- Section Archive Started -->
	<section class="section kf-archive-started">
		<div class="container">

			<div class="kf-titles">
				<h1 class="kf-p-title text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
					<?php the_title(); ?>
				</h1>
			</div>

		</div>

	</section>

	<!-- Single Post -->
	<section class="section kf-archive">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">

					<!-- Content -->
					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<!-- Footer post -->
					<footer class="post-footer element-anim-1 scroll-animate" data-animate="active">

						<!-- Post nav -->
						<?php

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kaffen' ),
							'after'  => '</div>',
						) );

						?>

					</footer>

					<?php if ( comments_open() || get_comments_number() ) : ?>
					<!-- Comments -->
					<div class="comments-post element-anim-1 scroll-animate" data-animate="active">
						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							comments_template();
						?>
					</div>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</section>

	<?php endwhile; ?>

<?php
get_footer();
