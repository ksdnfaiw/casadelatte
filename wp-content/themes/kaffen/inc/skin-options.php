<?php
/**
 * Skin
**/

if ( ! function_exists( 'kaffen_skin' ) ) {
function kaffen_skin() {
	$base_bg_color = get_field( 'base_bg_color', 'options' );
	$theme_color = get_field( 'theme_color', 'options' );
	$text_color = get_field( 'text_color', 'options' );

	$base_font_size = get_field( 'text_font_size', 'options' );
	$heading_font_size = get_field( 'heading_font_size', 'options' );
	$post_heading_font_size = get_field( 'post_heading_font_size', 'options' );
	$btn_font_size = get_field( 'btn_font_size', 'options' );

	$btn_font_color = get_field( 'btn_font_color', 'options' );
	$btn_bg_color = get_field( 'btn_bg_color', 'options' );
	$btn2_font_color = get_field( 'btn2_font_color', 'options' );
	$btn2_bg_color = get_field( 'btn2_bg_color', 'options' );

	$btn_font_color_hover = get_field( 'btn_font_color_hover', 'options' );
	$btn_bg_color_hover = get_field( 'btn_bg_color_hover', 'options' );
	$btn2_font_color_hover = get_field( 'btn2_font_color_hover', 'options' );
	$btn2_bg_color_hover = get_field( 'btn2_bg_color_hover', 'options' );

	$text_font_family = get_field( 'text_font_family', 'options' );
	$primary_font_family = get_field( 'primary_font_family', 'options' );
	$heading_font_family = get_field( 'heading_font_family', 'options' );

	$preloader_height = get_field( 'preloader_height', 'options' );
	$preloader_color = get_field( 'preloader_color', 'options' );
	$disable_preloader = get_field( 'disable_preloader', 'options' );
?>

<style>
	<?php if ( $base_bg_color ) : ?>
	/* Base BG Color */
	html,
	body {
		background-color: <?php echo esc_attr( $base_bg_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $text_color ) : ?>
	/* Paragraphs Color */
	html,
	body,
	.kf-filter a,
	.woocommerce #reviews #comments ol.commentlist li .comment-text,
	.woocommerce-js #reviews #comments ol.commentlist li .comment-text,
	.woocommerce #reviews #comments ol.commentlist li .comment-box__body,
	.woocommerce-js #reviews #comments ol.commentlist li .comment-box__body {
		color: <?php echo esc_attr( $text_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $theme_color ) : ?>
	/* Theme Color */
	a:hover,
	a.kf-btn:hover,
	.kf-btn:hover,
	.kf-h-group em,
	.kf-h-group i,
	.kf-main-menu ul li a:hover,
	.kf-main-menu ul li.active > a,
	.kf-f-hours ul li em,
	.kf-f-contact ul li i,
	.kf-f-contact ul li em,
	.kf-subtitle,
	.kf-menu-item .price,
	.kf-testimonials-slider .slide-item .name em,
	.kf-testimonials-slider .slide-item .stars,
	.kf-numbers-item .num,
	.kf-numbers-item-2 .icon,
	.kf-numbers-item-2 .num,
	.kf-video-item .play i,
	.kf-team-item .desc .subname,
	.kf-team-item .social a,
	.kf-menu-item-2 .price,
	.kf-quote-box .subname,
	.kf-history-carousel .swiper-button-prev:hover,
	.kf-history-carousel .swiper-button-next:hover,
	.kf-history-carousel .swiper-pagination-bullet.swiper-pagination-bullet-active,
	.kf-history-item .subname,
	.kf-contacts-item .image i,
	.content-sidebar .widget-title, .content-sidebar h2,
	.content-sidebar ul li a:hover,
	.kf-testimonials-carousel .slide-item .name em,
	.kf-testimonials-carousel .slide-item .stars,
	.woocommerce a.button:hover,
	.woocommerce button.button:hover,
	.woocommerce-js a.button:hover,
	.woocommerce-js button.button:hover,
	.woocommerce .products div.product .price,
	.woocommerce div.product p.price,
	.woocommerce div.product span.price,
	.woocommerce-js .products div.product .price,
	.woocommerce-js div.product p.price,
	.woocommerce-js div.product span.price,
	.woocommerce .products div.product .price ins,
	.woocommerce div.product p.price ins,
	.woocommerce div.product span.price ins,
	.woocommerce-js .products div.product .price ins,
	.woocommerce-js div.product p.price ins,
	.woocommerce-js div.product span.price ins,
	.cart_item .woocommerce-Price-amount,
	.woocommerce .products div.product .button.add_to_cart_button:hover,
	.woocommerce-js .products div.product .button.add_to_cart_button:hover,
	.woocommerce .star-rating span:before,
	.woocommerce-js .star-rating span:before,
	.woocommerce div.product .button.single_add_to_cart_button:hover,
	.woocommerce-js div.product .button.single_add_to_cart_button:hover,
	.woocommerce #review_form #respond .form-submit .submit:hover,
	.woocommerce-js #review_form #respond .form-submit .submit:hover,
	.woocommerce .cart .button[name="update_cart"],
	.woocommerce-js .cart .button[name="update_cart"],
	.woocommerce #respond input#submit.alt,
	.woocommerce a.button.alt,
	.woocommerce button.button.alt,
	.woocommerce input.button.alt,
	.woocommerce-js #respond input#submit.alt,
	.woocommerce-js a.button.alt,
	.woocommerce-js button.button.alt,
	.woocommerce-js input.button.alt,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce #payment #place_order:hover,
	.woocommerce-page #payment #place_order:hover,
	.product-categories .current-cat,
	.product-categories .current-cat a,
	.woocommerce ul.product_list_widget li a.remove:hover,
	ul.product_list_widget li a.remove:hover,
	.woocommerce-js ul.product_list_widget li a.remove:hover,
	.kf-main-menu ul li.current_page_item > a,
	.kf-main-menu ul li.current-menu-item > a {
		color: <?php echo esc_attr( $theme_color ); ?>;
	}
	.kf-team-item .social a svg,
	.kf-numbers-item-2 .icon svg,
	.kf-h-group svg,
	a.kf-btn:hover svg,
	.kf-btn:hover svg,
	a.kf-btn-link:hover svg,
	.kf-btn-link:hover svg,
	button:hover svg,
	input[type="submit"]:hover svg,
	.kf-f-contact ul li svg,
	.kf-contacts-item .image svg {
		fill: <?php echo esc_attr( $theme_color ); ?>;
	}
	a.kf-btn,
	.kf-btn,
	button,
	input[type="submit"],
	.block-quote cite:before,
	blockquote cite:before,
	.block-quote cite:before,
	.preloader .spinner-line,
	.kf-about-quote,
	.kf-services-item-2:hover .image,
	.kf-team-item .social a:hover,
	.kf-history-carousel .swiper-button-prev,
	.kf-history-carousel .swiper-button-next,
	.kf-history-carousel .swiper-scrollbar-drag,
	.kf-history-item .label,
	.kf-filter a.active,
	.kf-gallery-item .value,
	.kf-gallery-item .name .value,
	a.page-numbers.current,
	a.post-page-numbers.current,
	.page-numbers.current,
	.post-page-numbers.current,
	a.page-numbers:hover,
	a.post-page-numbers:hover,
	.page-numbers:hover,
	.post-page-numbers:hover,
	.woocommerce nav.woocommerce-pagination ul li a:focus,
	.woocommerce nav.woocommerce-pagination ul li a:hover,
	.woocommerce nav.woocommerce-pagination ul li span.current,
	.content-sidebar ul ul li:before,
	.tags-links a:hover,
	.col__sedebar .tagcloud a:hover,
	.kf-testimonials-carousel .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active,
	body.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
	body.woocommerce-js .widget_price_filter .ui-slider .ui-slider-range,
	body.woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
	body.woocommerce-js .widget_price_filter .ui-slider .ui-slider-handle,
	.header .cart-btn .cart-icon .cart-count,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-mini-cart__buttons a.button,
	.woocommerce-mini-cart__buttons button.button,
	.woocommerce-mini-cart__buttons input.button,
	.woocommerce-js #respond input#submit,
	.woocommerce-js a.button,
	.woocommerce-js button.button,
	.woocommerce-js input.button,
	.woocommerce-js .woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-js .woocommerce-mini-cart__buttons a.button,
	.woocommerce-js .woocommerce-mini-cart__buttons button.button,
	.woocommerce-js .woocommerce-mini-cart__buttons input.button,
	.woocommerce .products .product .added_to_cart,
	.woocommerce-js .products .product .added_to_cart,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
	.woocommerce .products div.product span.onsale,
	.woocommerce span.onsale,
	.woocommerce-js .products div.product span.onsale,
	.woocommerce-js span.onsale {
		background-color: <?php echo esc_attr( $theme_color ); ?>;
	}
	.woocommerce div.product .button.single_add_to_cart_button,
	.woocommerce-js div.product .button.single_add_to_cart_button,
	.woocommerce #review_form #respond .form-submit .submit,
	.woocommerce-js #review_form #respond .form-submit .submit,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
	.woocommerce #payment #place_order,
	.woocommerce-page #payment #place_order {
		background-color: <?php echo esc_attr( $theme_color ); ?> !important;
	}
	.woocommerce div.product .button.single_add_to_cart_button:hover,
	.woocommerce-js div.product .button.single_add_to_cart_button:hover,
	.woocommerce #review_form #respond .form-submit .submit:hover,
	.woocommerce-js #review_form #respond .form-submit .submit:hover,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce #payment #place_order:hover,
	.woocommerce-page #payment #place_order:hover {
	  background: #fff!important;
	}
	.kf-services-item .image:after,
	.kf-menu-item .price:before,
	.section.kf-grid-carousel .slide-item .image:after,
	.kf-numbers-item-2 .icon:before,
	.kf-reservation-form,
	.kf-menu-item-2 .price:before,
	.kf-quote-box .img:before {
		border-color: <?php echo esc_attr( $theme_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $base_font_size ) : ?>
	/* Base font size */
	html,
	body {
		font-size: <?php echo esc_attr( $base_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $btn_font_size ) : ?>
	/* Btn font size */
	a.kf-btn,
	.kf-btn,
	a.kf-btn-link,
	.kf-btn-link,
	button,
	input[type="submit"],
	a.kf-btn.dark-btn,
	.kf-btn.dark-btn,
	a.kf-btn-link.dark-btn,
	.kf-btn-link.dark-btn,
	button.dark-btn,
	input[type="submit"].dark-btn {
		font-size: <?php echo esc_attr( $btn_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $btn_bg_color ) : ?>
	/* Btn bg color */
	a.kf-btn,
	.kf-btn,
	button,
	input[type="submit"] {
		background: <?php echo esc_attr( $btn_bg_color ); ?>;
	}
	.woocommerce div.product .button.single_add_to_cart_button,
	.woocommerce-js div.product .button.single_add_to_cart_button,
	.woocommerce #review_form #respond .form-submit .submit,
	.woocommerce-js #review_form #respond .form-submit .submit,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
	.woocommerce #payment #place_order,
	.woocommerce-page #payment #place_order {
		background: <?php echo esc_attr( $btn_bg_color ); ?> !important;
	}
	<?php endif; ?>

	<?php if ( $btn_font_color ) : ?>
	/* Btn font color */
	a.kf-btn,
	.kf-btn,
	button,
	input[type="submit"] {
		color: <?php echo esc_attr( $btn_font_color ); ?>;
	}
	.woocommerce div.product .button.single_add_to_cart_button,
	.woocommerce-js div.product .button.single_add_to_cart_button,
	.woocommerce #review_form #respond .form-submit .submit,
	.woocommerce-js #review_form #respond .form-submit .submit,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
	.woocommerce #payment #place_order,
	.woocommerce-page #payment #place_order {
		color: <?php echo esc_attr( $btn_font_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $btn2_bg_color ) : ?>
	/* Btn2 bg color */
	a.kf-btn.dark-btn,
	.kf-btn.dark-btn,
	button.dark-btn,
	input[type="submit"].dark-btn {
		background: <?php echo esc_attr( $btn2_bg_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $btn2_font_color ) : ?>
	/* Btn2 font color */
	a.kf-btn.dark-btn,
	.kf-btn.dark-btn,
	button.dark-btn,
	input[type="submit"].dark-btn {
		color: <?php echo esc_attr( $btn2_font_color ); ?>;
	}
	<?php endif; ?>

	<?php if ( $btn_bg_color_hover ) : ?>
	/* Btn bg color hover */
	a.kf-btn:before,
	.kf-btn:before,
	button:before,
	input[type="submit"]:hover {
		background: <?php echo esc_attr( $btn_bg_color_hover ); ?>;
	}
	.woocommerce div.product .button.single_add_to_cart_button:hover,
	.woocommerce-js div.product .button.single_add_to_cart_button:hover,
	.woocommerce #review_form #respond .form-submit .submit:hover,
	.woocommerce-js #review_form #respond .form-submit .submit:hover,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce #payment #place_order:hover,
	.woocommerce-page #payment #place_order:hover {
	  background: <?php echo esc_attr( $btn_bg_color_hover ); ?> !important;
	}
	<?php endif; ?>

	<?php if ( $btn_font_color_hover ) : ?>
	/* Btn font color hover */
	a.kf-btn:hover,
	.kf-btn:hover,
	button:hover,
	input[type="submit"]:hover {
		color: <?php echo esc_attr( $btn_font_color_hover ); ?>;
	}
	.woocommerce div.product .button.single_add_to_cart_button:hover,
	.woocommerce-js div.product .button.single_add_to_cart_button:hover,
	.woocommerce #review_form #respond .form-submit .submit:hover,
	.woocommerce-js #review_form #respond .form-submit .submit:hover,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,
	.woocommerce #payment #place_order:hover,
	.woocommerce-page #payment #place_order:hover {
	  color: <?php echo esc_attr( $btn_font_color_hover ); ?> !important;
	}
	<?php endif; ?>

	<?php if ( $btn2_bg_color_hover ) : ?>
	/* Btn2 bg color hover */
	a.kf-btn.dark-btn:before,
	.kf-btn.dark-btn:before,
	button.dark-btn:before,
	input[type="submit"].dark-btn:hover {
		background: <?php echo esc_attr( $btn2_bg_color_hover ); ?>;
	}
	<?php endif; ?>

	<?php if ( $btn2_font_color_hover ) : ?>
	/* Btn2 font color hover */
	a.kf-btn.dark-btn:hover,
	.kf-btn.dark-btn:hover,
	button.dark-btn:hover,
	input[type="submit"].dark-btn:hover {
		color: <?php echo esc_attr( $btn2_font_color_hover ); ?>;
	}
	<?php endif; ?>

	<?php if ( $heading_font_size ) : ?>
	/* Heading font size */
	.kf-h-title {
		font-size: <?php echo esc_attr( $heading_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $post_heading_font_size ) : ?>
	/* Post heading font size */
	.kf-p-title {
		font-size: <?php echo esc_attr( $post_heading_font_size ); ?>px;
	}
	<?php endif; ?>

	<?php if ( $text_font_family ) : ?>
	/* Paragraphs Font */
	html,
	body,
	input,
	input[type="text"],
	input[type="email"],
	input[type="search"],
	input[type="password"],
	input[type="tel"],
	input[type="address"],
	input[type="number"],
	input[type="date"],
	button,
	textarea,
	select,
	.custom-select,
	label,
	legend,
	label.error,
	.kf-testimonials-slider .slide-item .name,
	.comment-box__details span,
	.kf-testimonials-carousel .slide-item .name,
	a.kf-btn,
	.kf-btn,
	a.kf-btn-link,
	.kf-btn-link,
	button,
	input[type="submit"],
	.kf-main-menu ul li a,
	.woocommerce #respond input#submit,
	.woocommerce a.button,
	.woocommerce button.button,
	.woocommerce input.button,
	.woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-mini-cart__buttons a.button,
	.woocommerce-mini-cart__buttons button.button,
	.woocommerce-mini-cart__buttons input.button,
	.woocommerce-js #respond input#submit,
	.woocommerce-js a.button,
	.woocommerce-js button.button,
	.woocommerce-js input.button,
	.woocommerce-js .woocommerce-mini-cart__buttons #respond input#submit,
	.woocommerce-js .woocommerce-mini-cart__buttons a.button,
	.woocommerce-js .woocommerce-mini-cart__buttons button.button,
	.woocommerce-js .woocommerce-mini-cart__buttons input.button,
	.woocommerce .products .product .added_to_cart,
	.woocommerce-js .products .product .added_to_cart,
	#add_payment_method .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
	.woocommerce-checkout .wc-proceed-to-checkout a.checkout-button {
		font-family: '<?php echo esc_attr( $text_font_family['font_name'] ); ?>', serif;
	}
	<?php endif; ?>

	<?php if ( $primary_font_family ) : ?>
	/* Primary Font */
	h1,
	h2,
	h3,
	h4,
	h5,
	h6,
	.content-sidebar h2,
	.block-quote,
	blockquote,
	.kf-h-group,
	.kf-title,
	.kf-p-title,
	.kf-started-item .subtitles ul li,
	.kf-numbers-item .num,
	.kf-numbers-item-2 .num,
	.kf-history-carousel .swiper-pagination-bullet,
	.kf-history-item .date,
	.kf-history-item .label,
	.kf-faq-item .name,
	.kf-filter a,
	.kf-gallery-item .value,
	.comment-reply-link,
	.tags-links span,
	.woocommerce .products div.product span.onsale,
	.woocommerce span.onsale,
	.woocommerce-js .products div.product span.onsale,
	.woocommerce-js span.onsale,
	.woocommerce .products div.product .price,
	.woocommerce div.product p.price,
	.woocommerce div.product span.price,
	.woocommerce-js .products div.product .price,
	.woocommerce-js div.product p.price,
	.woocommerce-js div.product span.price,
	.woocommerce .product_meta,
	.woocommerce-js .product_meta,
	.woocommerce div.product .woocommerce-tabs ul.tabs li a,
	.woocommerce-MyAccount-navigation ul li a,
	.woocommerce-account .woocommerce-MyAccount-navigation ul li a,
	.woocommerce-js div.product .woocommerce-tabs ul.tabs li a,
	.woocommerce table.shop_table th,
	.woocommerce-js table.shop_table th,
	.woocommerce table.shop_table td a,
	.woocommerce-js table.shop_table td a {
		font-family: '<?php echo esc_attr( $primary_font_family['font_name'] ); ?>', serif;
	}
	<?php endif; ?>

	<?php if ( $heading_font_family ) : ?>
	/* Heading Font */
	.kf-f-hours ul li strong,
	.kf-subtitle,
	.kf-started-item .name,
	.kf-menu-item .price,
	.kf-h-title,
	.kf-menu-item-2 .price,
	.kf-quote-box .text,
	.kf-error-page .num {
		font-family: '<?php echo esc_attr( $heading_font_family['font_name'] ); ?>', serif;
	}
	<?php endif; ?>

	<?php if ( $preloader_color ) : ?>
	/* preloader color */
	.preloader:before {
		background: <?php echo esc_attr( $preloader_color ); ?>!important;
	}
	<?php endif; ?>

	<?php if ( $preloader_height ) : ?>
	/* preloader height */
	.preloader .spinner {
		height: <?php echo esc_attr( $preloader_height ); ?>px!important;
	}
	<?php endif; ?>

	<?php if ( $disable_preloader == 1 ) : ?>
	/* disable preloader */
	.preloader {
		display: none;
	}
	<?php endif; ?>

</style>

<?php
}
}
add_action( 'wp_head', 'kaffen_skin', 10 );
