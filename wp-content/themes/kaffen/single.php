<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kaffen
 */

get_header();
?>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php

	//content
	$image = get_the_post_thumbnail_url( get_the_ID(), 'kaffen_1920xauto' );

	//social share
	$social_share = get_field( 'social_share', 'options' );

	?>

	<!-- Section Archive Started -->
	<section class="section kf-archive-started">
		<div class="container">

			<div class="kf-titles">
				<?php if ( get_post_type() == 'post' ) : ?>
				<div class="kf-date element-anim-1 scroll-animate" data-animate="active">
					<?php kaffen_post_details(); ?>
				</div>
				<?php endif; ?>
				<h1 class="kf-p-title text-anim-1 scroll-animate" data-splitting="words" data-animate="active">
					<?php the_title(); ?>
				</h1>
			</div>

		</div>

		<?php if ( $image ) : ?>
		<div class="kf-archive-image element-anim-1 scroll-animate" data-animate="active" style="background-image: url(<?php echo esc_url( $image ); ?>);"></div>
		<?php endif; ?>

	</section>

	<!-- Single Post -->
	<section class="section kf-archive">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 offset-lg-2">

					<!-- content -->
					<?php get_template_part( 'template-parts/content', 'single' ); ?>
					<!-- /content -->

					<!-- post nav -->
					<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kaffen' ),
						'after'  => '</div>',
					) );
					?>
					<!-- /post nav -->

					<!-- share post -->
					<?php if ( $social_share ) : ?>
					<div class="share-post social social-share element-anim-1 scroll-animate" data-animate="active">
						<?php foreach ( $social_share as $social ) : ?>
						<a class="social__link share-btn share-btn-<?php echo esc_attr( $social['value'] ); ?>">
							<?php if ( $social['value'] == 'facebook' ) : ?>
							<i class="fa fa-facebook-f"></i>
							<span><?php echo esc_html__( 'Facebook', 'kaffen' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'twitter' ) : ?>
							<i class="fa fa-twitter"></i>
							<span><?php echo esc_html__( 'Twitter', 'kaffen' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'tumblr' ) : ?>
							<i class="fa fa-tumblr"></i>
							<span><?php echo esc_html__( 'Tumblr', 'kaffen' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'linkedin' ) : ?>
							<i class="fa fa-linkedin"></i>
							<span><?php echo esc_html__( 'Linkedin', 'kaffen' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'reddit' ) : ?>
							<i class="fa fa-reddit-alien" aria-hidden="true"></i>
							<span><?php echo esc_html__( 'Reddit', 'kaffen' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'pinterest' ) : ?>
							<i class="fa fa-pinterest-p"></i>
							<span><?php echo esc_html__( 'Pinterest', 'kaffen' ); ?></span>
							<?php endif; ?>
							<?php if ( $social['value'] == 'whatsapp' ) : ?>
							<i class="fa fa-whatsapp"></i>
							<span><?php echo esc_html__( 'WhatsApp', 'kaffen' ); ?></span>
							<?php endif; ?>
						</a>
						<?php endforeach; ?>
					</div>
					<?php endif; ?>
					<!-- /share post -->

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

	<!-- Nav -->
	<?php kaffen_post_navigation(); ?>

	<?php endwhile; ?>

<?php
get_footer();
