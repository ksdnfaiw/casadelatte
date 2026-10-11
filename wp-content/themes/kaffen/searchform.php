<?php
/**
 * The search form markup
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kaffen
 */

?>

<form role="search" method="get" class="kf-search-form search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="kf-search-field" placeholder="<?php echo esc_attr__( 'Search …', 'kaffen' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" />
	<button type="submit" class="kf-search-submit"><?php echo esc_html__( 'Search', 'kaffen' ); ?></button>
</form>
