<?php

/**
 * Breadcrumbs
 */
if ( ! function_exists( 'kaffen_breadcrumbs' ) ) {
	function kaffen_breadcrumbs( $page_id ) {
		if ( ! is_front_page() ) {
			$parent_page_id = wp_get_post_parent_id($page_id);

			// Start the breadcrumb with a link to your homepage
			echo '<ul class="kf-breadcrumbs">';
			echo '<li><a href="' . esc_url( home_url() ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . esc_html__( 'Home', 'kaffen' ) . '</a></li>';

			// If the current page is a static posts page, show its title.
			if ( ( is_home() || is_category() || is_singular( 'post' ) ) && get_option( 'page_for_posts', true ) ) {
				$blog_title = get_the_title( get_option( 'page_for_posts', true ) );
				$blog_link = get_the_permalink( get_option( 'page_for_posts', true ) );

				echo '<li><a href="' . esc_url( $blog_link ) . '" title="' . esc_attr( $blog_title ) . '">' . esc_html( $blog_title ) . '</a></li>';
			}

			if ( $parent_page_id ) {
				echo '<li><a href="' . esc_url( get_the_permalink( $parent_page_id ) ) . '">' . esc_html( get_the_title( $parent_page_id ) ) . '</a></li>';
			}

			// If Post page
			if ( is_singular( 'post' ) && get_field( 'post_page', 'option' ) ) {
				echo '<li><a href="' . get_the_permalink( get_field( 'post_page', 'option' ) ) . '">' . get_the_title( get_field( 'post_page', 'option' ) ) . '</a></li>';
			}

			// If Room page
			if ( is_singular( 'mphb_room_type' ) && get_field( 'rooms_page', 'option' ) ) {
				echo '<li><a href="' . get_the_permalink( get_field( 'rooms_page', 'option' ) ) . '">' . get_the_title( get_field( 'rooms_page', 'option' ) ) . '</a></li>';
			}

			// If Service page
			if ( is_singular( 'mphb_room_service' ) && get_field( 'services_page', 'option' ) ) {
				echo '<li><a href="' . get_the_permalink( get_field( 'services_page', 'option' ) ) . '">' . get_the_title( get_field( 'services_page', 'option' ) ) . '</a></li>';
			}

			echo '<li class="tst-active"><a>';

			// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
			if ( is_category() || is_single() ){
				$category = get_the_category();

				if( $category ) {
					echo esc_html( $category[0]->cat_name );
				}
			} elseif ( is_archive() || is_single() ){
				if ( is_day() ) {
					printf( esc_html__( '%s', 'kaffen' ), get_the_date() );
				} elseif ( is_month() ) {
					printf( esc_html__( '%s', 'kaffen' ), get_the_date( esc_html_x( 'F Y', 'monthly archives date format', 'kaffen' ) ) );
				} elseif ( is_year() ) {
					printf( esc_html__( '%s', 'kaffen' ), get_the_date( esc_html_x( 'Y', 'yearly archives date format', 'kaffen' ) ) );
				} elseif ( is_tag() ) {
					echo get_the_archive_title();
				} else {
					echo esc_html__( 'Archives', 'kaffen' );
				}
			}

			// If the current page is a static page, show its title.
			if ( is_search() ) {
				printf( esc_html__( 'Search: %s', 'kaffen' ), '<span>' . get_search_query() . '</span>' );
			}

			// If the current page is a static page, show its title.
			if ( is_page() || is_singular( 'mphb_room_type' ) || is_singular( 'mphb_room_service' ) ) {
				echo esc_html( get_the_title( $page_id ) );
			}

			echo '</a></li>';

			echo '</ul>';
		}
	}
}
