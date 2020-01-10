<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
	<div class="navbar__container container">
		<a class="navbar-brand" href="<?php bloginfo('url') ?>"><img src="<?php echo get_theme_file_uri('assets/images/logo.jpg') ?>" class="navbar__logo img-responsive" alt="Logo DevelAxn"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
		</button>

		<div>

		<div class="collapse navbar-collapse" id="navbarNav">
		<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
			<?php wp_nav_menu( array(
				'theme_location'	=> 'header-menu',
				'depth'				=> 2,
				'container'			=> false,
				'menu_class'		=> 'navbar-nav mr-auto',
				'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
				'walker'			=> new WP_Bootstrap_Navwalker(),
			) ); ?>
		<?php } ?>
		<?php if ( is_active_sidebar( 'menu-widget' ) ) { ?>
			<?php dynamic_sidebar( 'menu-widget' ); ?>
		<?php }; ?>
		</div>

		</div>

	</div>
</nav>
