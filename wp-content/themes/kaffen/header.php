<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kaffen
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Meta Data -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="bg">
		<?php
			$disable_preloader = get_field( 'disable_preloader', 'option' );
			$preload_logo_img = get_field( 'preload_logo_img', 'option' );
		?>

		<?php if ( ! $disable_preloader ) : ?>
		<!-- Preloader -->
		<div class="preloader">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner-logo">
						<?php if ( $preload_logo_img ) : ?>
						<img src="<?php echo esc_url( $preload_logo_img ); ?>" alt="<?php echo esc_attr( bloginfo('name') ); ?>" />
						<?php endif; ?>
						<div class="spinner-dot">
							<div class="spinner-line"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<!-- Header -->
		<header class="kf-header">
			<?php
      $header_template = get_field( 'header_template', 'option' );

      if ( $header_template ) :
        $args = array( 'post_type' => 'hf_templates', 'p' => $header_template );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
          the_content();
        endwhile; wp_reset_postdata();
      else :
      ?>
			<!-- navbar -->
			<div class="kf-navbar">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3 col-lg-2">

						<!-- logo -->
						<div class="kf-logo">
							<a href="<?php echo esc_url( home_url() ); ?>" class="kf-logo-frame">
								<span class="logotype__title"><?php echo esc_html( bloginfo('name') ); ?></span>
								<span class="logotype__sub"><?php echo esc_html( bloginfo('description') ); ?></span>
							</a>
						</div>

					</div>
					<div class="col-xs-12 col-sm-6 col-md-9 col-lg-10 align-right">

						<!-- menu btn -->
						<a href="#" class="kf-menu-btn"><span></span></a>

						<!-- main menu -->
						<div class="kf-main-menu">
							<?php
	            if ( has_nav_menu( 'primary' ) ) :
	              wp_nav_menu( array(
	                'theme_location' => 'primary',
	                'container' => '',
	                'menu_class' => 'kf-main-menu-nav',
	                'walker' => new Kaffen_Topmenu_Walker(),
	              ) );
	            endif; ?>
						</div>

						<!-- mobile navbar -->
						<div class="kf-navbar-mobile">

							<!-- mobile menu -->
							<div class="kf-main-menu"></div>

						</div>

						<?php if ( class_exists( 'WooCommerce' ) ) : ?>
						<?php if ( true == get_theme_mod( 'cart_shop', true ) ) : if ( is_object( WC()->cart ) ) : ?>

						<!-- cart button -->
						<div class="kf-cart-btn<?php if ( WC()->cart->get_cart_contents_count() == 0 ) : ?> cart-btn-empty<?php endif; ?>">
							<div class="cart-icon zoom-cursor">
								<span class="cart-count"><?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'kaffen' ), WC()->cart->get_cart_contents_count() ); ?></span>
							</div>
							<div class="cart-widget">
								<?php if ( is_object( WC()->cart ) ) : woocommerce_mini_cart(); endif; ?>
							</div>
						</div>
						<!-- cart button end -->

						<?php endif; endif; ?>
						<?php endif; ?>

					</div>
				</div>
			</div>
			<?php endif; ?>

		</header>

		<!-- Wrapper -->
		<div class="wrapper">
