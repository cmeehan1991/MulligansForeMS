<!DOCTYPE html>
<html lang="en">
	<head>
		<?php get_template_part('partials', 'partials-tags'); ?>
		
		<title><?php wp_title('|', true, 'right'); bloginfo('title');?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<nav class="navbar navbar-expand-sm">
			<div class="navbar-nav mx-auto">
				<a href="#">Social Media Here</a>
			</div>
		</nav>
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="<?php bloginfo('url');?>">
				<?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				
				if ( has_custom_logo() ) {
					echo '<img src="'. esc_url( $logo[0] ) .'" class="header-logo">';
				} else {
					echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
				}
				?>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<?php 
			$nav_args = array(
				'menu'				=> 'primary-header-navigation',
				'menu_class'		=> 'navbar-nav mr-auto',
				'container'			=> 'div',
				'container_class'	=> 'collapse navbar-collapse', 
				'container_id'		=> 'navbarSupportedContent',
				'walker'			=> new NavMenuWalker()
				
			);
			wp_nav_menu($nav_args);	
			?>
		</nav>