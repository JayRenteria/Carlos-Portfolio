<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>
			<?php wp_title('|', true, 'right'); ?>
			<?php bloginfo('name'); ?>
		</title>

		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Fav and touch icons -->
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.png">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<div id="top_page"></div>
		<nav>
			<?php
			$defaults = array(
				'menu'            => 'top_menu',
				'theme_location'  => 'top_menu',
				'top_menu'        => '', // possible to add multiple classes separated by spaces.
				'container'       => false
			);
			wp_nav_menu( $defaults );
			?>
		</nav>