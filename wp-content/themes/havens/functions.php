<?php

// Register css
  function load_css()
    {

        wp_register_style('bootstrap', get_template_directory_uri() . '/dist/css/bootstrap/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');
        wp_register_style('custom-css', get_template_directory_uri() . '/dist/css/custom/style.css', array(), false, 'all');
        wp_enqueue_style('custom-css');


    }
    add_action('wp_enqueue_scripts', 'load_css');

//Register js
    function load_js()
    {

        wp_enqueue_script('jquery');
        wp_register_script('bootstrap', get_template_directory_uri() . '/dist/js/bootstrap/bootstrap.min.js', 'jquery', false, true);
        wp_enqueue_script('bootstrap');

    }
    add_action('wp_enqueue_scripts', 'load_js');

    //Register menu
    function register_my_menus() {
        register_nav_menus(
          array(
            'header-menu' => __( 'Header Menu' ),
            'extra-menu' => __( 'Extra Menu' )
           )
         );
       }
       add_action( 'init', 'register_my_menus' );
?>
