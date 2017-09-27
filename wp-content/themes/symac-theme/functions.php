<?php 
include "widget/rodape-local.php";
include "posttype/diferenciais.php";
include "posttype/slider.php";

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 380, 300 );
add_theme_support('nav-menus');


function theme_styles() {

	wp_enqueue_style( 'materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css' );
	wp_enqueue_style( 'bootstrap_min_css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/bootstrap/css/bootstrap.css' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'materialize_js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'my_custom_js', get_template_directory_uri() . '/bootstrap/js/animation.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);

}

add_action( 'wp_enqueue_scripts', 'theme_js');