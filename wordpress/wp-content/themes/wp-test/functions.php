<?php
/*
 *  Custom functions, support, custom post types and more.
 *  Clear feautures which doesn't need for this test theme.
 */

add_action('acf/init', 'my_acf_init');
function my_acf_init() {
  acf_update_setting('google_api_key', 'AIzaSyCZF31krTQH_5QnEpdIsEgmsBV-Iy884rE');
}

add_action('wp_enqueue_scripts', 'wpeStyles'); // Add Theme Stylesheet
function wpeStyles()  {
  wp_dequeue_style('fancybox');
  wp_dequeue_style('wp_dequeue_style');

  wp_register_style('wpeasy-style', get_template_directory_uri() . '/css/main.css', array(), '1.0', 'all');
  wp_enqueue_style('wpeasy-style'); // Enqueue it!
}

add_action('init', 'wpeHeaderScripts'); // Add Scripts to wp_head
function wpeHeaderScripts() {
  if (!is_admin()) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', '//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4');
    wp_enqueue_script('jquery');

    wp_register_script('jquery-migrate', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.0/jquery-migrate.min.js', array(), '3.0.0');
    wp_enqueue_script('jquery-migrate');

    wp_deregister_script( 'jquery-form' );

    //  Load footer scripts (footer.php)
    wp_register_script('wpeScripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
    wp_enqueue_script('wpeScripts');

  }
}

//ADD THEME SUPPORT

$header_info = array(
    'width'         => 200,
    'height'        => 100,
    'default-image' => get_template_directory_uri() . '/img/logo.png',
    'uploads'       => true,
);
add_theme_support( 'custom-header', $header_info );

?>
