<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kaffen
 */

get_header();
?>

<?php

$image = get_field( 'p404_image', 'option' );
$content = get_field( 'p404_content', 'option' );

?>

<!-- 404 -->
<div class="kf-error-page">
	<div class="flex-conteiner-fluid text-center justify-content-center">
		<?php if ( $image ) : ?>
		<div class="image"><img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr__( '404', 'kaffen' ); ?>" /></div>
		<?php else : ?>
		<div class="num"><?php echo esc_html__( '404', 'kaffen' ); ?></div>
		<?php endif; ?>
    <?php if ( $content ) : ?>
    <div class="post-content"><?php echo wp_kses_post( $content ); ?></div>
    <?php else : ?>
    <div class="kf-text">
    	<p><?php echo esc_html__( 'We are unable to find the page you are looking for.', 'kaffen' ); ?></p>
    </div>
    <?php endif; ?>
		<?php get_search_form(); ?>
	</div>
</div>
<!-- /404 -->

<?php
get_footer();
