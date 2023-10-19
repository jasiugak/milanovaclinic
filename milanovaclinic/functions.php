<?php

function milanovaclinic_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','milanovaclinic_theme_support');


function milanovaclinic_menus() {

    $locations = array(
        'primary' => 'Header menu',
        'footer' => 'Footer menu',
        'stomatologia_menu' => 'Kategoria stomatologia menu',
        'medycyna_menu' => 'Kategoria medycyna estetyczna menu'
    );
    register_nav_menus($locations);
}

add_action('init','milanovaclinic_menus');


function milanovaclinic_register_styles(){
    wp_enqueue_style('milanovaclinic-bootstrap', get_template_directory_uri()."/assets/css/bootstrap.min.css",'1.0' ,'all');
    wp_enqueue_style('milanovaclinic-fontawesome', get_template_directory_uri()."/assets/css/fontawesome.css",'1.0' ,'all');
    wp_enqueue_style('milanovaclinic-flaticon', get_template_directory_uri()."/assets/css/flaticon.css",'1.0','all');
    wp_enqueue_style('milanovaclinic-pbminfotech-base-icons', get_template_directory_uri()."/assets/css/pbminfotech-base-icons.css",'1.0','all');
    wp_enqueue_style('milanovaclinic-swiper.min', get_template_directory_uri()."/assets/css/swiper.min.css",'1.0','all');
    wp_enqueue_style('milanovaclinic-magnific-popup', get_template_directory_uri()."/assets/css/magnific-popup.css",'1.0','all');
    wp_enqueue_style('milanovaclinic-shortcode', get_template_directory_uri()."/assets/css/shortcode.css",'1.0','all');
    wp_enqueue_style('milanovaclinic-base', get_template_directory_uri()."/assets/css/base.css",'1.0','all');
    wp_enqueue_style('milanovaclinic-style', get_template_directory_uri()."/style.css",'1.0','all');
    wp_enqueue_style('milanovaclinic-responsive', get_template_directory_uri()."/assets/css/responsive.css",'1.0' ,'all');
    wp_enqueue_style('milanovaclinic-revolution-rs6', get_template_directory_uri()."/assets/revolution/rs6.css",'1.0' ,'all');
 
}

add_action('wp_enqueue_scripts', 'milanovaclinic_register_styles');

function milanovaclinic_register_scripts(){
  
    wp_enqueue_script('milanovaclinic-bootstrap',get_template_directory_uri()."/assets/js/bootstrap.min.js",array(), '5.2.3',true);
    wp_enqueue_script('milanovaclinic-jquery-min', get_template_directory_uri()."/assets/js/jquery.min.js" ,array(), '1.0',true);
    wp_enqueue_script('milanovaclinic-popper-min', get_template_directory_uri()."/assets/js/popper.min.js" ,array(), '1.0',true);
    wp_enqueue_script('milanovaclinic-jquery-waypoints-min', get_template_directory_uri()."/assets/js/jquery.waypoints.min.js" ,array(), '1.0',true);
    wp_enqueue_script('milanovaclinic-jquery-appear', get_template_directory_uri()."/assets/js/jquery.appear.js" ,array(), '1.0',true);
    wp_enqueue_script('milanovaclinic-numinate-min', get_template_directory_uri()."/assets/js/numinate.min.js" ,array(), '1.0',true);
    wp_enqueue_script('milanovaclinic-swiper-min', get_template_directory_uri()."/assets/js/swiper.min.js" ,array(), '1.0',true);
    wp_enqueue_script('milanovaclinic-magnific-popup-min', get_template_directory_uri()."/assets/js/jquery.magnific-popup.min.js" ,array(), '1.0',true);
    wp_enqueue_script('milanovaclinic-circle-progress', get_template_directory_uri()."/assets/js/circle-progress.js" ,array(), '1.0',true);
    wp_enqueue_script('milanovaclinic-scripts', get_template_directory_uri()."/assets/js/scripts.js" ,array(), '1.0',true);
    wp_enqueue_script('milanovaclinic-rbtools-min', get_template_directory_uri()."/assets/revolution/rbtools.min.js" ,array(), '1.0',true);
    wp_enqueue_script('milanovaclinic-rs6-min', get_template_directory_uri()."/assets/revolution/rs6.min.js" ,array(), '1.0',true);
    wp_enqueue_script('milanovaclinic-rslider', get_template_directory_uri()."/assets/revolution/rslider.js" ,array(), '1.0',true);
}

add_action('wp_enqueue_scripts', 'milanovaclinic_register_scripts');

?>