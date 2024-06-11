<?php
function blue_theme_support(){
    //dynamic title tag support
    add_theme_support( 'title-tag' );
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'blue_theme_support' );

function blue_menus(){
    //says where menus are located
    $locations = array(
        'primary'=> "Desktop Primary Left Sidebar",
        'footer'=> "Footer Menu"
    );
    register_nav_menus( $locations );
}
add_action( 'init', 'blue_menus' );

function blue_register_styles(){
    $version = wp_get_theme()->get('Version'); 
    wp_enqueue_style('blue-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('blue-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    wp_enqueue_style('blue-custom', get_template_directory_uri()."/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'blue_register_styles');

function blue_register_scripts(){
    $version = wp_get_theme()->get('Version'); 
    wp_enqueue_script( 'blue-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script( 'blue-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script( 'blue-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script( 'blue-custom', get_template_directory_uri()."/assets/js/main.js", array(), $version, true);

}
add_action('wp_enqueue_scripts', 'blue_register_scripts');

function blue_widget_areas(){
    register_sidebar(
        array(
            'before_title'=>'',
            'after_title'=>'',
            'before_widget'=>'<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget'=>'</ul>',
            'name'=>'Sidebar widgets',
            'id'=>'sidebar1',
            'description'=>'Sidebar widget area'
        )
    );

    register_sidebar(
        array(
            'before_title'=>'',
            'after_title'=>'',
            'before_widget'=>'',
            'after_widget'=>'',
            'name'=>'Footer widgets',
            'id'=>'footer1',
            'description'=>'bottom widget area'
        )
    );
}

add_action( 'widgets_init',  'blue_widget_areas');
?>

