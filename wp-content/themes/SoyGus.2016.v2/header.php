<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/app/assets/img/favicon.png">
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="site-wrapper">		
		<?php if (is_front_page()) : ?>	
			<?php get_template_part('nav', 'header'); ?>
		<?php else : ?>
			<?php get_template_part('nav', 'header-inner'); ?>
		<?php endif; ?>