<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaffen
 */

?>

<?php

//content
$image = get_the_post_thumbnail_url( get_the_ID(), 'kaffen_900xAuto' );

?>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="kf-blog-grid-item element-anim-1 scroll-animate" data-animate="active">
			<?php if ( $image ) : ?>
			<div class="image kf-image-hover">
				<a href="<?php echo esc_url( get_permalink() ); ?>"><img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" /></a>
			</div>
			<?php endif; ?>
			<div class="desc">
				<h5 class="name"><?php the_title(); ?></h5>
				<div class="kf-date"><i class="far fa-calendar-alt"></i><?php echo esc_html( get_the_date() ); ?></div>
				<div class="kf-comm"><i class="far fa-comments"></i><?php printf( esc_html__( 'Comments  (%1$s)', 'kaffen' ), get_comments_number() ); ?></div>
			</div>
		</div>
	</div><!-- #post-<?php the_ID(); ?> -->
</div>
