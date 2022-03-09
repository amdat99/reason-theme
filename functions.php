
<?php


add_action( 'after_setup_theme', 'theme_support' );

function register_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action( 'init', 'register_menu' );

function register_styles(){
    wp_enqueue_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.', 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/style.css', array('bootstrap'), '1.0', 'all');

}

function register_scripts(){
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '5.13.', true);
}    

add_action('wp_enqueue_scripts', 'register_styles');
add_action('wp_enqueue_scripts', 'register_scripts');

?>