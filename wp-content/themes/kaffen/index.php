<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaffen
 */

get_header();
?>

	<?php

	/*get options*/
	$blog_title = get_field( 'blog_title', 'option' );

	if( empty($blog_subtitle) ) {
		$blog_subtitle = esc_html__( 'Latest Posts', 'kaffen' );
	}

	?>

	<!-- Section Started Inner -->
	<section class="section kf-started-inner archive-started-inner">
		<div class="container">

			<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
				<?php echo wp_kses_post( $blog_subtitle ); ?>
			</h1>

		</div>
	</section>

	<!-- Section Archive -->
	<section class="section kf-archive">
		<div class="container">

			<div class="row">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
				<?php else : ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php endif; ?>

					<?php if ( have_posts() ) : ?>
					<div class="kf-archive-items">
						<?php
							while ( have_posts() ) : the_post();
								get_template_part( 'template-parts/content' );
							endwhile;
						?>
					</div>
					<div class="pager element-anim-1 scroll-animate" data-animate="active">
						<?php
							echo paginate_links( array(
								'prev_text'		=> esc_html__( 'Prev', 'kaffen' ),
								'next_text'		=> esc_html__( 'Next', 'kaffen' ),
							) );
						?>
					</div>
					<?php else :
						get_template_part( 'template-parts/content', 'none' );
					endif; ?>

				</div>
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">

					<!-- sidebar -->
					<div class="col__sedebar element-anim-1 scroll-animate" data-animate="active">
						<?php get_sidebar(); ?>
					</div>

				</div>
				<?php endif; ?>
			</div>

		</div>
	</section>

<?php
get_footer();
