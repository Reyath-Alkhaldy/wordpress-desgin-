<?php
require_once('WP_Bootstrap_Navwalker.php');
function riyadh_add_styles()
{
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/fontawesome.min.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
}


function riyadh_add_scripts()
{
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, true);
}

function riyadh_bootstrap_menu()
{
    wp_nav_menu(array(
        'theme_location' => 'bootstrap-menu',
        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
        'container' => false,
        'depth' => 3,
        'walker' => new WP_Bootstrap_Navwalker(),
        
    ));
}
function riyadh_bootstrap_footer()
{
    wp_nav_menu(array(
        'theme_location' => 'bootstrap-footer',
    ));

}
function riyadh_register_custom_menu()
{
    register_nav_menus(array(
        'bootstrap-menu' => 'bootstrap menu',
        'bootstrap-footer' => 'bootstrap footer',
    ));
}



add_action('wp_enqueue_scripts', 'riyadh_add_styles');
add_action('wp_enqueue_scripts', 'riyadh_add_scripts');
add_action('init', 'riyadh_register_custom_menu');
