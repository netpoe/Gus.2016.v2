<header class="header">
	<div class="container">
		<div class="row">
			<div class="header-left col-xs-6">
				<div class="logo">
					<a href="#fold"><img src="<?php echo get_template_directory_uri(); ?>/app/assets/img/logo_Gus.png" alt="Gus | Developer chingón y moderno."></a>
				</div>
			</div>
			<div class="header-right col-xs-6">
				<?php 
					// Insert menus - check options at codex
				  $defaults = array(
				    'container' => false,
				    'theme_location' => 'main-menu',
				    'menu_class' => 'nav-main'
				    );
				  wp_nav_menu ($defaults);
				?>
			</div>
		</div>
	</div>
</header>