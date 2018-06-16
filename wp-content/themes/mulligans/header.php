<!DOCTYPE html>
<html lang="en">
	<head>
		<?php get_template_part('partials', 'partials-tags'); ?>
		
		<title><?php wp_title('|', true, 'right'); bloginfo('title');?></title>
		<?php wp_head(); ?>
	</head>
	<body>