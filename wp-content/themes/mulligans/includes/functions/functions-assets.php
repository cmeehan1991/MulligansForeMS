<?php 
	
add_action('wp_enqueue_scripts', 'theme_jquery');
function theme_jquery(){
	wp_dequeue_script( 'jquery' );
	wp_register_script('jquery', MS_URI . '/assets/js/jquery/jquery.min.js', array(), '3.3.1', false);
	wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'theme_styles');
function theme_styles(){
	wp_enqueue_style('Bootstrap CSS', MS_URI . '/assets/bootstrap/bootstrap-4.1.1/dist/css/bootstrap.min.css', array(), '4.1.1', false);
	wp_enqueue_style('Header', MS_URI . '/assets/styles/css/header-styles.css', array(), 'MS_VERSION');
	
}


add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts(){
	wp_enqueue_script('Popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', false);
	wp_enqueue_script('Bootstrap Javascript', MS_URI . '/assets/bootstrap/bootstrap-4.1.1/dist/js/bootstrap.min.js', array('jquery', 'Popper'), '4.1.1', false);
}