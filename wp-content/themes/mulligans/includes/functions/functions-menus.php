<?php
add_action('after_setup_theme', 'custom_nav_menus' );
function custom_nav_menus(){
	register_nav_menu('primary-header-navigation',__('Primary Header Navigation'));
}
