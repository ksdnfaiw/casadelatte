<?php

/*
Kaffen Shop */

?>

<?php get_header(); ?>

<?php

$sidebar_shop = get_field( 'wooshop_sidebar', 'option' );

if ( ! $sidebar_shop ) {
	$sidebar_shop = 'hide';
}

$parallax_shop = get_field( 'wooshop_parallax', 'option' );

$args = array(
	'delimiter'   => '',
	'wrap_before' => '<ul class="kf-breadcrumbs">',
	'wrap_after'  => '</ul>',
	'before'      => '<li>',
	'after'       => '</li>',
	'home'        => esc_html__( 'Home', 'kaffen' ),
);

?>

<?php if ( true == $parallax_shop ) : ?>

<?php
	$parallax_shop_img = get_field( 'wooshop_parallax_img', 'option' );
	$parallax_shop_title = get_field( 'wooshop_parallax_title', 'option' );
?>

<!-- Section Started Inner -->
<section class="section kf-started-inner">
	<?php if ( $parallax_shop_img ) : $image = wp_get_attachment_image_url( $parallax_shop_img, 'kaffen_1920xAuto' ); ?>
	<div class="kf-parallax-bg js-parallax" style="background-image: url(<?php echo esc_url( $image ); ?>);"></div>
	<?php endif; ?>
	<div class="container">
		<?php if ( $parallax_shop_title ) : ?>
		<h1 class="kf-h-title text-anim-1 scroll-animate" data-splitting="chars" data-animate="active">
			<?php echo wp_kses_post( $parallax_shop_title ); ?>
		</h1>
		<?php endif; ?>

		<?php woocommerce_breadcrumb( $args ); ?>
	</div>
</section>

<?php endif; ?>

<!-- Section Archive -->
<section class="section kf-archive shop-page<?php if ( ! $parallax_shop ) : ?> header-page<?php endif; ?>" id="card-shop-page">
	<div class="container">

		<div class="row">
			<?php if ( 'left' == $sidebar_shop && ! is_product() ) : ?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
				<?php if ( is_active_sidebar( 'shop-sidebar' ) ) : ?>
				<div id="sidebar" class="widget-area content-sidebar" role="complementary">
			    <?php dynamic_sidebar( 'shop-sidebar' ); ?>
			  </div>
			  <?php endif; ?>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
				<?php woocommerce_breadcrumb(); ?>
				<?php woocommerce_content(); ?>
			</div>
			<?php elseif ( 'right' == $sidebar_shop && ! is_product() ) : ?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9">
				<?php woocommerce_breadcrumb(); ?>
				<?php woocommerce_content(); ?>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
				<?php if ( is_active_sidebar( 'shop-sidebar' ) ) : ?>
				<div id="sidebar" class="widget-area content-sidebar" role="complementary">
			  	<?php dynamic_sidebar( 'shop-sidebar' ); ?>
			  </div>
			  <?php endif; ?>
			</div>
			<?php else : ?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php woocommerce_breadcrumb(); ?>
				<?php woocommerce_content(); ?>
			</div>
			<?php endif; ?>
		</div>

	</div>
</section>

<?php get_footer(); ?>
