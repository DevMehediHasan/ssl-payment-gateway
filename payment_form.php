<?php
/*
Plugin Name: Payment History
Plugin URI:
Description: Payment History
Author: Mehedi Hasan
Version: 1.
Author URI: http://ma.tt/
*/

// include deatbase file
    include_once("db_create.php");
// register hook db
register_activation_hook( __FILE__, 'order_db' );
// register hook for ssl db
register_activation_hook( __FILE__, 'ssl_db' );
register_activation_hook( __FILE__, 'ssl_config_data' );


add_action( 'admin_menu', 'custom_function' );
function custom_function() {
    add_menu_page(
        'Payment History',
        'Payment History',
        'manage_options',
        'phistory.php',
        'custom',
        plugin_dir_url(__FILE__) . 'images/history.png',
        40
    );
}
// config ssl
function config(){
    add_submenu_page(
        'phistory.php',
        'Config',
        'config',
        'manage_options',
        'config_ssl.php',
        'ssl_config'
    );
}
function ssl_config(){
    include_once('ssl.php');
    ssl_select();
    sslconfig_data();
}
add_action( 'admin_menu', 'config' );
// shortcode
function submenu_fun(){
    add_submenu_page(
        'phistory.php',
        'shortcode',
        'shortcode',
        'manage_options',
        'shortcode.php',
        'shortcode'
    );
}
function shortcode(){
    include_once('shortcode.php');
    shortcode_list();
}

add_action( 'admin_menu', 'submenu_fun' );

function custom(){
    include_once('form.php');
    form_design();
}
add_action('admin_enqueue_scripts','reg_stylesheet');

function reg_stylesheet(){
    wp_enqueue_style('cover_style',plugins_url('style.css',__FILE__));
}
// form shortcode
add_shortcode('front_form','front_form_code');
function front_form_code()
{
    ob_start();
    require_once('front_form.php');
    return ob_get_clean();
}

// success page shortcode
add_shortcode('success_page','success');
function success()
{
    ob_start();
    require_once('SSLCommerz-PHP/pg_redirection/success.php');
    return ob_get_clean();
}
// cancel page shortcode
add_shortcode('cancel_page','cancel');
function cancel()
{
    ob_start();
    require_once('SSLCommerz-PHP/pg_redirection/cancel.php');
    return ob_get_clean();
}
// fail page shortcode
add_shortcode('fail_page','fail');
function fail()
{
    ob_start();
    require_once('SSLCommerz-PHP/pg_redirection/fail.php');
    return ob_get_clean();
}