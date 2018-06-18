<?php 
define('MS_PATH', get_template_directory());
define('MS_URI', get_template_directory_uri());
define('MS_VERSION', '0.0.1');

// Including theme specific functions - REQUIRED
include MS_PATH . '/includes/functions/functions-assets.php';
include MS_PATH . '/includes/functions/functions-theme-support.php';
include MS_PATH . '/includes/functions/functions-localize.php';
include MS_PATH . '/includes/functions/functions-menus.php';


// Custom Walkers
include MS_PATH . '/includes/classes/NavMenuWalker.php';

// Advanced custom fields
foreach(glob(MS_PATH . '/includes/acf/groups/*_active.php') as $file){
	include $file;
}