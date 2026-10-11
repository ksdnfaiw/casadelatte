<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaffen
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="post-content element-anim-1 scroll-animate" data-animate="active">
		<?php
			the_content();
			kaffen_entry_footer();
		?>
	</div>
</div><!-- #post-<?php the_ID(); ?> -->
