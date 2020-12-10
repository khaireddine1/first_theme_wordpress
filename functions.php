<?php
#Khaireddine Hamdi 2021
#First theme into Wordpress theme development
/********************************************/

/*
 * GLOBAL functions features into my theme
 */

add_theme_support("post-thumbnails");

/*
 * Add our styles files
 *
 */

function add_styles_theme()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style('material-css', get_template_directory_uri() . "/css/materialdesignicons.min.css");
    wp_enqueue_style('main-css', get_template_directory_uri() . "/css/main.css");
}

/*
 * Add our scripts files
 */

function add_scripts_theme()
{
    wp_deregister_script('jquery'); // Remove old include file jQuery from head
    // Add a new jQuery in footer
    wp_register_script('jquery', includes_url("/js/jquery/jquery.js"), false, '', true);
    // Included jQuery file into footer
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . "/js/bootstrap.min.js", array(), false, true);
}

function run_main_js()
{
    wp_enqueue_script('main-js', get_template_directory_uri() . "/js/main.js", array(), false, true);
}

//Create many menus with description

function register_custom_menus()
{
    //Register Custom navbar menu
    register_nav_menus(
        array(
            'header-menu' => __('Header navbar menu'),
            'footer-menu' => __('Footer menu')
        )
    );
}

//Create location theme after set any function into location position into page

function header_menu()
{
    wp_nav_menu(
        array(
            'theme_location'    => 'header-menu',
            'menu_class'        => 'navbar-header',
            'container'         => false
        )
    );
}

function footer_menu()
{
    wp_nav_menu(array('theme_location' => 'footer-menu'));
}

add_action('wp_enqueue_scripts', 'add_styles_theme');
add_action('wp_enqueue_scripts', 'add_scripts_theme');
add_action('init', 'register_custom_menus');
add_action('init', 'run_main_js');


