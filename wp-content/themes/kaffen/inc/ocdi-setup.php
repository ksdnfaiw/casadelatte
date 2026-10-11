<?php

if ( class_exists( 'KaffenPlugin' ) && class_exists( 'ACF' ) && class_exists( 'OCDI_Plugin' ) ) {

function kaffen_ocdi_import_files() {
    return array(
        array(
            'import_file_name'             => esc_attr__( 'Default Demo', 'kaffen' ),
            'categories'                   => array( esc_attr__( 'Main', 'kaffen' ) ),
            'import_file_url'            => KAFFEN_EXTRA_PLUGINS_DIRECTORY . 'normal/ocdi-import/demo/01/content.xml',
            'preview_url'                  => 'https://1.envato.market/c/1790164/275988/4415?u=https://themeforest.net/item/kaffen-cafe-restaurant-wordpress-theme/full_screen_preview/37178428',
            'import_preview_image_url'     => KAFFEN_EXTRA_PLUGINS_DIRECTORY . 'normal/ocdi-import/demo/01/preview.png',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'kaffen_ocdi_import_files' );

function kaffen_ocdi_after_import_setup( $selected_import ) {

    $front_page_id = get_page_by_title( 'Home' );
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
        'primary' => $main_menu->term_id,
    ) );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'posts_per_page', 6 );

    $ocdi_fields_static = array(
      'options_restaurant_currency_symbol' => '$',
      '_options_restaurant_currency_symbol' => 'field_623b0f13ebbf2',
      'options_restaurant_currency_position' => 'before',
      '_options_restaurant_currency_position' => 'field_623b0f47ebbf3',
      'options_header_template' => 912,
      '_options_header_template' => 'field_6047f4160611f',
      'options_footer_template' => 1001,
      '_options_footer_template' => 'field_6047f46706121',
      'options_social_links' => 4,
      '_options_social_links' => 'field_624da9308c229',
      'options_blog_title' => '',
      '_options_blog_title' => 'field_5e5e39b87f0e0',
      'options_post_page' => '',
      '_options_post_page' => 'field_5d29eb446dca9',
      'options_blog_categories' => 1,
      '_options_blog_categories' => 'field_5b81b6d930cb9',
      'options_blog_excerpt' => 0,
      '_options_blog_excerpt' => 'field_5b81b7ca30cba',
      'options_social_share' => 'a:5:{i:0;s:8:"facebook";i:1;s:7:"twitter";i:2;s:8:"linkedin";i:3;s:6:"reddit";i:4;s:9:"pinterest";}',
      '_options_social_share' => 'field_5c610c399cf20',
      'options_portfolio_page' => '',
      '_options_portfolio_page' => 'field_5d29e1a48ac41',
      'options_p404_content' => 'The page you\'re looking for doesn\'t exist or has been moved.',
      '_options_p404_content' => 'field_5d180feb59b80',
      'options_bg_image' => '',
      '_options_bg_image' => 'field_5d2a5bab8dc53',
      'options_wooshop_sidebar' => 'hide',
      '_options_wooshop_sidebar' => 'field_6127d9e62e80d',
      'options_wooshop_parallax' => 1,
      '_options_wooshop_parallax' => 'field_6127da2f2e80f',
      'options_wooshop_parallax_img' => 661,
      '_options_wooshop_parallax_img' => 'field_6127da602e810',
      'options_wooshop_parallax_title' => 'Our Shop',
      '_options_wooshop_parallax_title' => 'field_6127daa62e811',
      'options_disable_preloader' => 0,
      '_options_disable_preloader' => 'field_5e7d27a0e322a',
      'options_preload_logo_img' => 662,
      '_options_preload_logo_img' => 'field_612149b43f54f',
      'options_preloader_color' => '',
      '_options_preloader_color' => 'field_608c707f85717',
      'options_preloader_height' => '',
      '_options_preloader_height' => 'field_608c70a285718',
      'options_btn_bg_color_hover' => '',
      '_options_btn_bg_color_hover' => 'field_624cd8166bdb2',
      'options_btn_font_color_hover' => '',
      '_options_btn_font_color_hover' => 'field_624cd83f6bdb3',
      'options_btn2_bg_color' => '',
      '_options_btn2_bg_color' => 'field_624cd6dc6bdb0',
      'options_btn2_bg_color_hover' => '',
      '_options_btn2_bg_color_hover' => 'field_624cd8736bdb4',
      'options_btn2_font_color' => '',
      '_options_btn2_font_color' => 'field_624cd71c6bdb1',
      'options_btn2_font_color_hover' => '',
      '_options_btn2_font_color_hover' => 'field_624cd8846bdb5',
      'options_post_heading_font_size' => '',
      '_options_post_heading_font_size' => 'field_624cd3488d5f6',
      'options_social_links_0_icon' => 'fab fa-facebook-f',
      '_options_social_links_0_icon' => 'field_624da93a8c22a',
      'options_social_links_0_title' => 'Facebook',
      '_options_social_links_0_title' => 'field_624da9578c22b',
      'options_social_links_0_url' => 'https://facebook.com/',
      '_options_social_links_0_url' => 'field_624da95f8c22c',
      'options_social_links_1_icon' => 'fab fa-twitter',
      '_options_social_links_1_icon' => 'field_624da93a8c22a',
      'options_social_links_1_title' => 'Twitter',
      '_options_social_links_1_title' => 'field_624da9578c22b',
      'options_social_links_1_url' => 'https://twitter.com/',
      '_options_social_links_1_url' => 'field_624da95f8c22c',
      'options_social_links_2_icon' => 'fab fa-instagram',
      '_options_social_links_2_icon' => 'field_624da93a8c22a',
      'options_social_links_2_title' => 'Instagram',
      '_options_social_links_2_title' => 'field_624da9578c22b',
      'options_social_links_2_url' => 'https://instagram.com/',
      '_options_social_links_2_url' => 'field_624da95f8c22c',
      'options_social_links_3_icon' => 'fab fa-youtube',
      '_options_social_links_3_icon' => 'field_624da93a8c22a',
      'options_social_links_3_title' => 'Youtube',
      '_options_social_links_3_title' => 'field_624da9578c22b',
      'options_social_links_3_url' => 'https://youtube.com/',
      '_options_social_links_3_url' => 'field_624da95f8c22c',
    );
    $ocdi_fields_to_change = array();

    if( 'Default Demo' === $selected_import['import_file_name'] ) {
        $ocdi_fields_to_change = array(
          'options_base_bg_color' => '',
          '_options_base_bg_color' => 'field_5b68d509665d9',
          'options_theme_color' => '',
          '_options_theme_color' => 'field_60672bee61163',
          'options_text_color' => '',
          '_options_text_color' => 'field_60672b1d6115f',
          'options_text_font_size' => '',
          '_options_text_font_size' => 'field_60672c8261165',
          'options_heading_font_size' => '',
          '_options_heading_font_size' => 'field_60672cef61168',
          'options_btn_font_size' => '',
          '_options_btn_font_size' => 'field_60672da76116b',
          'options_btn_font_color' => '',
          '_options_btn_font_color' => 'field_6249b62328f88',
          'options_btn_bg_color' => '',
          '_options_btn_bg_color' => 'field_6249b6d428f89',
          'options_text_font_family' => 0,
          '_options_text_font_family' => 'field_5b68d188906fd',
          'options_primary_font_family' => 0,
          '_options_primary_font_family' => 'field_5b68cfc4906fc',
          'options_heading_font_family' => 0,
          '_options_heading_font_family' => 'field_6249b78628f8a',
        );
    }

    global $wpdb;
    foreach ( array_merge( $ocdi_fields_static, $ocdi_fields_to_change ) as $field => $value ) {
        if ( $wpdb->get_var( $wpdb->prepare( "SELECT COUNT(*) FROM $wpdb->options WHERE option_name = %s", $field ) ) == 0 ) {
            $wpdb->query( $wpdb->prepare( "INSERT INTO $wpdb->options ( option_name, option_value, autoload ) VALUES (%s, %s, 'no')", $field, $value ) );
        } else {
            $wpdb->query( $wpdb->prepare( "UPDATE $wpdb->options SET option_value = %s WHERE option_name = %s", $value, $field ) );
        }
    }

}
add_action( 'pt-ocdi/after_import', 'kaffen_ocdi_after_import_setup' );

}
