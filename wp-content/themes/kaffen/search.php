<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kaffen
 */

get_header();
?>

	<!-- Section Started Inner -->
	<section class="section kf-started-inner archive-started-inner">
		<div class="container">

			<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
				<?php printf( esc_html__( 'Search: %s', 'kaffen' ), get_search_query() ); ?>
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
								get_template_part( 'template-parts/content', 'search' );
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
