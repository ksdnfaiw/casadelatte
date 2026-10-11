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
//vars
$layout = get_query_var( 'layout' );
$index = get_query_var( 'index' );

//options
$currency = get_field( 'restaurant_currency_symbol', 'option' );
$currency_position = get_field( 'restaurant_currency_position', 'option' );
$scroll_animation = true;

//content
$image = get_the_post_thumbnail_url( get_the_ID(), 'kaffen_950xAuto' );
$image_full = get_the_post_thumbnail_url( get_the_ID(), 'kaffen_1920xAuto' );
$price = get_field( 'price' );
$description = get_field( 'description' );

?>

<!-- menu item -->
<div class="kf-menu-item-2<?php if ( $scroll_animation ) : ?> element-anim-1 scroll-animate<?php endif; ?>"<?php if ( $scroll_animation ) : ?> data-animate="active"<?php endif; ?>>
	<?php if ( $image ) : ?>
	<div class="image kf-image-hover">
		<a href="<?php echo esc_url( $image_full ); ?>" data-elementor-open-lightbox="yes" data-elementor-lightbox-title="<?php echo esc_attr( get_the_title() ); ?>"><img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" /></a>
	</div>
	<?php endif; ?>
	<div class="desc">
		<h5 class="name"><?php the_title(); ?></h5>
		<?php if ( $description ) : ?>
		<div class="subname">
			<?php echo wp_kses_post( $description ); ?>
		</div>
		<?php endif; ?>
		<?php if ( $price ) : ?>
		<div class="price">
			<span><?php if ( $currency_position == 'before' ) : echo esc_html( $currency ); endif; ?><?php echo esc_html( $price ); ?><?php if ( $currency_position == 'after' ) : echo esc_html( $currency ); endif; ?></span>
		</div>
		<?php endif; ?>
	</div>
</div>
<!-- menu item end -->
