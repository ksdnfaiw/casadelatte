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

/* post content */
$current_categories = get_the_terms( get_the_ID(), 'gallery_categories' );
$categories_string = '';
$categories_slugs_string = '';
if ( $current_categories && ! is_wp_error( $current_categories ) ) {
	$arr_keys = array_keys( $current_categories );
	$last_key = end( $arr_keys );
	foreach ( $current_categories as $key => $value ) {
		if ( $key == $last_key ) {
			$categories_string .= $value->name . ' ';
		} else {
			$categories_string .= $value->name . ', ';
		}
		$categories_slugs_string .= 'sorting-' . $value->slug . ' ';
	}
}

$image = get_the_post_thumbnail_url( get_the_ID(), 'kaffen_900xAuto' );
$image_full = get_the_post_thumbnail_url( get_the_ID(), 'kaffen_1920xAuto' );
$title = get_the_title();

?>

<div class="kf-gallery-col col-xs-12 col-sm-12 col-md-6 col-lg-4 all <?php echo esc_attr( $categories_slugs_string ); ?>">
	<div class="kf-gallery-item element-anim-1 scroll-animate" data-animate="active">
		<?php if ( $image ) : ?>
		<div class="image kf-image-hover">
			<a data-elementor-open-lightbox="yes" data-elementor-lightbox-slideshow="basic-portfolio-gallery-<?php echo esc_attr( $categories_slugs_string ); ?>" data-elementor-lightbox-title="<?php echo esc_attr( $title ); ?>" href="<?php echo esc_url( $image_full ); ?>">
				<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $title ); ?>" />
			</a>
		</div>
		<?php endif; ?>
		<div class="desc">
			<?php if ( $title ) : ?>
			<div class="name">
				<div class="value"><?php echo esc_html( $title ); ?></div>
			</div>
			<?php endif; ?>
			<?php if ( $categories_string ) : ?>
			<div class="subname">
				<div class="value"><?php echo esc_html( $categories_string ); ?></div>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
