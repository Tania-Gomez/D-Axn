<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php get_template_part('_includes/iOS', 'icons') ?>
	<?php wp_head() ?>
</head>
<body>

	<!-- Código original
	<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
		<?php wp_nav_menu( array(
			'theme_location' => 'header-menu',
			'container_class' => 'header-menu'
		) ); ?>
	<?php } ?> -->
	<!-- Se cambia por este otro -->
	<?php get_template_part('_includes/nav', 'bootstrap4') ?>

	<!-- Esta es barrita superior con info -->
		<section class="SectionTop text-white fixed-top">
			<!-- icono envelope -->
			<div class="SectionTop__container container d-flex flex-row bd-highlight mb-3">
				<div class="SectionTop__socialicon p-1 bd-highlight"><svg version="1.1" id="icon-envelope-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 20.4 16" style="enable-background:new 0 0 20.4 16;" xml:space="preserve" width="1rem" height="1rem">
				<style type="text/css">
					.envelope{fill:#FFFFFF;}
				</style>
				<g>
					<g>
						<path class="envelope" d="M2.1,5c0.3,0.2,1,0.7,2.3,1.6s2.3,1.6,2.9,2C7.4,8.7,7.5,8.8,7.8,9C8,9.1,8.2,9.3,8.4,9.4S8.7,9.6,9,9.8
							c0.2,0.1,0.4,0.2,0.6,0.3c0.2,0.1,0.4,0.1,0.6,0.1h0h0c0.2,0,0.4,0,0.6-0.1c0.2-0.1,0.4-0.2,0.6-0.3c0.2-0.1,0.4-0.3,0.6-0.4
							c0.2-0.1,0.4-0.3,0.6-0.4C12.8,8.8,13,8.7,13,8.6c0.7-0.5,2.4-1.7,5.2-3.6c0.5-0.4,1-0.8,1.4-1.4c0.4-0.5,0.6-1.1,0.6-1.7
							c0-0.5-0.2-0.9-0.5-1.3c-0.4-0.3-0.8-0.5-1.3-0.5H1.9c-0.6,0-1,0.2-1.3,0.6C0.3,1.1,0.1,1.6,0.1,2.1c0,0.5,0.2,1,0.6,1.5
							C1.2,4.2,1.6,4.7,2.1,5z"/>
						<path class="envelope" d="M19.1,6.2c-2.5,1.7-4.3,3-5.6,3.9c-0.4,0.3-0.8,0.6-1,0.7s-0.6,0.4-1.1,0.5c-0.4,0.2-0.9,0.3-1.2,0.3h0h0
							c-0.4,0-0.8-0.1-1.2-0.3c-0.4-0.2-0.8-0.4-1.1-0.5c-0.3-0.2-0.6-0.4-1-0.7C5.8,9.3,4,8,1.3,6.2c-0.4-0.3-0.8-0.6-1.1-1v8.9
							c0,0.5,0.2,0.9,0.5,1.3c0.3,0.3,0.8,0.5,1.3,0.5h16.5c0.5,0,0.9-0.2,1.3-0.5c0.3-0.3,0.5-0.8,0.5-1.3V5.2
							C19.9,5.6,19.5,5.9,19.1,6.2z"/>
					</g>
				</g>
				</svg></div>
				<!-- email -->
				<div class="SectionTop__container p-1 bd-highlight">
					<a class="SectionTop__email text-white" href="mailto:contacto@develaccion.com">contacto@develaccion.com</a>
				</div>

				<!-- icono whatsapp -->
				<div class="SectionTop__socialicon p-1 ml-3 bd-highlight d-none d-sm-block">
						<a href="https://api.whatsapp.com/send?phone=56968447328"><svg version="1.1" id="icon-whatsapp-xs" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0" y="0" viewbox="0 0 56.7 56.7" style="enable-background:new 0 0 56.7 56.7;" xml:space="preserve" width="1rem" height="1rem">
						<style type="text/css">
							.whatsapp-shape{fill:#FFFFFF;}
						</style>
						<g>
							<path class="whatsapp-shape" d="M56,27.5c0,14.8-12.1,26.8-27.2,26.8c-4.7,0-9.2-1.3-13.1-3.4L0.7,56l4.9-14.4c-2.5-4.1-4-8.8-4-13.9
								c0.2-14.9,12.2-27,27.2-27S56,12.8,56,27.5z M28.8,5C16.2,5,6.1,15.1,6.1,27.5c0,4.9,1.6,9.5,4.3,13.3l-2.9,8.5l8.8-2.7
								C20,49,24.3,50.4,29,50.4c12.6,0,22.9-10.1,22.9-22.7C51.7,15.1,41.4,5,28.8,5z M42.5,33.8c-0.2-0.4-0.5-0.4-1.3-0.7s-4-2-4.5-2.2
								c-0.5-0.2-1.1-0.4-1.4,0.4c-0.4,0.7-1.8,2.2-2.2,2.5s-0.7,0.5-1.4,0.2c-0.7-0.4-2.9-1.1-5.4-3.2c-2-1.8-3.2-4-3.8-4.5
								c-0.4-0.7,0-1.1,0.4-1.3c0.4-0.4,0.7-0.7,1.1-1.1c0.4-0.4,0.4-0.7,0.7-1.1c0.2-0.4,0.2-0.9,0-1.1c-0.2-0.4-1.4-3.6-2-4.9
								c-0.5-1.3-1.1-1.1-1.4-1.1c-0.4,0-0.9,0-1.3,0c-0.4,0-1.1,0.2-1.8,0.9s-2.3,2.3-2.3,5.6s2.3,6.3,2.7,6.8c0.4,0.4,4.7,7.4,11.3,9.9
								c6.8,2.7,6.8,1.8,7.9,1.6c1.3-0.2,4-1.6,4.5-3.1C42.7,35.5,42.7,34,42.5,33.8z"/>
						</g>
						</svg></a>
				</div>
				<!-- icono facebook -->
				<div class="SectionTop__socialicon p-1 bd-highlight d-none d-sm-block">
						<a href="https://www.facebook.com/develAccion/"><svg version="1.1" id="icon-facebook-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 96.1 96.1" style="enable-background:new 0 0 96.1 96.1;" xml:space="preserve" width="1rem" height="1rem" class="ml-2">
						<style type="text/css">
							.facebook-shape{fill:#FFFFFF;}
						</style>
						<g>
							<path class="facebook-shape" d="M72.1,0H59.6c-14,0-23.1,9.3-23.1,23.7v10.9H24c-1.1,0-2,0.9-2,2v15.8c0,1.1,0.9,2,2,2h12.5v39.9
								c0,1.1,0.9,2,2,2h16.4c1.1,0,2-0.9,2-2v-40h14.7c1.1,0,2-0.9,2-2V36.5c0-0.5-0.2-1-0.6-1.4s-0.9-0.6-1.4-0.6H56.8v-9.2
								c0-4.4,1.1-6.7,6.8-6.7H72c1.1,0,2-0.9,2-2V2C74,0.9,73.2,0,72.1,0z"/>
						</g>
						</svg></a>
				</div>
				<!-- icono youtube -->
				<div class="SectionTop__socialicon p-1 bd-highlight d-none d-sm-block">
						<a href="https://www.youtube.com/channel/UCSEEKiRiU8hij9ErKugWzLg">                <svg version="1.1" id="icon-youtube-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="1rem" height="1rem" class="ml-2">
						<style type="text/css">
							.youtube-shape{fill:#FFFFFF;}
						</style>
							<g>
								<path class="youtube-shape" d="M490.2,113.9c-13.9-24.7-29-29.2-59.6-31c-30.7-2-107.8-2.9-174.5-2.9c-66.9,0-144,0.9-174.7,2.9
									c-30.6,1.8-45.7,6.3-59.7,31C7.4,138.6,0,181.1,0,255.9c0,0.1,0,0.1,0,0.1c0,0.1,0,0.1,0,0.1v0.1c0,74.5,7.4,117.3,21.7,141.7
									c14,24.7,29.1,29.2,59.7,31.3c30.7,1.8,107.8,2.8,174.7,2.8c66.8,0,143.9-1.1,174.6-2.8c30.7-2.1,45.8-6.6,59.6-31.3
									c14.4-24.4,21.7-67.2,21.7-141.7c0,0,0-0.1,0-0.2v-0.1C512,181.1,504.7,138.6,490.2,113.9z M192,352V160l160,96L192,352z"/>
							</g>
						</svg></a>
				</div>
				<!-- icono linkedin -->
				<div class="SectionTop__socialicon p-1 bd-highlight d-none d-sm-block">
						<a href="https://www.linkedin.com/company/develaccion/"><svg version="1.1" id="icon-linkedin-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 310 310" style="enable-background:new 0 0 310 310;" xml:space="preserve" width="1rem" height="1rem" class="ml-3">
						<style type="text/css">
							.linkedin-shape{fill:#FFFFFF;}
						</style>
						<g id="XMLID_801_sm">
							<path id="XMLID_802_sm" class="linkedin-shape" d="M72.2,99.7H9.9c-2.8,0-5,2.2-5,5v199.9c0,2.8,2.2,5,5,5h62.2c2.8,0,5-2.2,5-5V104.7
								C77.2,102,74.9,99.7,72.2,99.7z"/>
							<path id="XMLID_803_sm" class="linkedin-shape" d="M41.1,0.3C18.4,0.3,0,18.7,0,41.4c0,22.6,18.4,41,41.1,41c22.6,0,41-18.4,41-41
								C82.1,18.7,63.7,0.3,41.1,0.3z"/>
							<path id="XMLID_804_sm" class="linkedin-shape" d="M230.5,94.8c-25,0-43.5,10.7-54.7,23v-13c0-2.8-2.2-5-5-5h-59.6c-2.8,0-5,2.2-5,5v199.9
								c0,2.8,2.2,5,5,5h62.1c2.8,0,5-2.2,5-5v-98.9c0-33.3,9.1-46.3,32.3-46.3c25.3,0,27.3,20.8,27.3,48v97.2c0,2.8,2.2,5,5,5H305
								c2.8,0,5-2.2,5-5V195C310,145.4,300.5,94.8,230.5,94.8z"/>
						</g>
						</svg></a>
				</div>
				<!-- icono instagram   -->
				<div class="SectionTop__socialicon p-1 bd-highlight d-none d-sm-block">
						<a href="https://www.instagram.com/develaccion/"><svg version="1.1" id="icon-instagram-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 169.1 169.1" style="enable-background:new 0 0 169.1 169.1;" xml:space="preserve" width="1rem" height="1rem" class="ml-3">
						<style type="text/css">
							.instagram-shape{fill:#FFFFFF;}
						</style>
						<g>
							<path class="instagram-shape" d="M122.4,0H46.7C20.9,0,0,20.9,0,46.7v75.8c0,25.7,20.9,46.7,46.7,46.7h75.8c25.7,0,46.7-20.9,46.7-46.7V46.7
								C169.1,20.9,148.1,0,122.4,0z M154.1,122.4c0,17.5-14.2,31.7-31.7,31.7H46.7c-17.5,0-31.7-14.2-31.7-31.7V46.7
								C15,29.2,29.2,15,46.7,15h75.8c17.5,0,31.7,14.2,31.7,31.7L154.1,122.4L154.1,122.4z"/>
							<path class="instagram-shape" d="M84.5,41C60.5,41,41,60.5,41,84.5s19.5,43.6,43.6,43.6s43.6-19.5,43.6-43.6C128.1,60.5,108.6,41,84.5,41z
								 M84.5,113.1c-15.7,0-28.6-12.8-28.6-28.6C56,68.8,68.8,56,84.5,56s28.6,12.8,28.6,28.6C113.1,100.3,100.3,113.1,84.5,113.1z"/>
							<path class="instagram-shape" d="M129.9,28.3c-2.9,0-5.7,1.2-7.8,3.2c-2.1,2-3.2,4.9-3.2,7.8c0,2.9,1.2,5.7,3.2,7.8c2,2,4.9,3.2,7.8,3.2
								c2.9,0,5.7-1.2,7.8-3.2s3.2-4.9,3.2-7.8c0-2.9-1.2-5.7-3.2-7.8S132.8,28.3,129.9,28.3z"/>
						</g>
						</svg></a>
				</div>
			</div>
		</section>

		<!-- Este es el Navbar -->
		<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
			<div class="navbar__container container">
				<a class="navbar-brand" href="<?php echo get_home_url() ?>"><img src="<?php echo get_theme_file_uri('assets/images/logo.jpg') ?>" class="navbar__logo img-responsive" alt="Logo DevelAxn"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar__list navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link text-secondary" href="inicio">DevelAxn</a>
						</li>

						<div class="dropdown">
						  <a class="btn dropdown-toggle text-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						    Programas</a>

						  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							    <a class="dropdown-item" href="<?php echo get_theme_file_uri('programas/transformacion-organizacional/') ?>">Transformación Organizacional</a>
							    <a class="dropdown-item" href="<?php echo get_theme_file_uri('programas/emprender-el-camino-del-a-guerrero-a/') ?>">Emprender, el camino del(a) Guerrer@</a>
							    <a class="dropdown-item" href="<?php echo get_theme_file_uri('programas/desarrollo-organizacional-sistemico/') ?>">Desarrollo Organizacional Sistémico</a>
									<a class="dropdown-item" href="<?php echo get_theme_file_uri('programas/educacion-civica-como-rse/') ?>">Educación Cívica como RSE</a>
						  </div>
						</div>

						<li class="nav-item">
							<a class="nav-link text-secondary" href="talleres">Talleres</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-secondary" href="nuestros-clientes">Testimonios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-secondary" href="contacto">Contacto</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-secondary" href="blog">Blog</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
