<?php

// Register css
  function load_css()
    {

        wp_register_style('bootstrap', get_template_directory_uri() . '/dist/css/bootstrap/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');
        wp_register_style('custom-css', get_template_directory_uri() . '/dist/css/custom/style.css', array(), false, 'all');
        wp_enqueue_style('custom-css');
        wp_register_style('font-awsome', get_template_directory_uri() . '/dist/font-awsome/font-awesome.min.css', array(), false, 'all');
        wp_enqueue_style('font-awsome');


    }
    add_action('wp_enqueue_scripts', 'load_css');

//Register js
    function load_js()
    {

        wp_enqueue_script('jquery');
        wp_register_script('bootstrap', get_template_directory_uri() . '/dist/js/bootstrap/bootstrap.min.js', 'jquery', false, true);
        wp_enqueue_script('bootstrap');
        wp_register_script('custom-js', get_template_directory_uri() . '/dist/js/custom.js', array(), false);
        wp_enqueue_script('custom-js');

    }
    add_action('wp_enqueue_scripts', 'load_js');

    //Register navwalker menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'havens' ),
        'secondary' => __( 'Footer Menu', 'havens' ),
    ) );

     
 // Register Custom Navigation Walker
 
    function register_navwalker(){
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );

 //Allow svfg
    //   function enable_svg_upload( $upload_mimes ) {
    //     $upload_mimes['svg'] = 'image/svg+xml';
    //     $upload_mimes['svgz'] = 'image/svg+xml';
    //     return $upload_mimes;
    // }
    // add_filter( 'upload_mimes', 'enable_svg_upload', 10, 1 );

    
    
?>

