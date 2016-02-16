<?php 

/*
	Template Name: Home
*/

get_header(); ?>


	<main class="site-content" role="main">

		<aside class="language-select hidden-sm-down">
			<ul>
				<li><a href="<?php echo site_url(); ?>" class="EN">EN</a></li>
				<li><a href="<?php echo site_url(); ?>/es/" class="ES">ES</a></li>
			</ul>
		</aside>
		
		<?php get_template_part('section', 'hero-unit'); ?>

		<?php get_template_part('section', 'portfolio-index'); ?>

		<?php get_template_part('section', 'portfolio-item'); ?>

		<?php get_template_part('section', 'footer'); ?>

	</main>


<?php get_footer(); ?>











