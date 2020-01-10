# PROYECTO DEVELAXN

## Memoria del Proyecto
- Cargar WP en local
- Creación de Base de Datos y usuario
			Base de Datos: daxn
			Usuario: daxn
			Pass DB: daxn_DB
- Ingresar a WP
			usuario WP: admin_Daxn20
			clave WP: Daxn_2020
			mail: gomez.tania@gmail.com
- Borrar tema por defecto y cargar Boilerplate (renombrado DevelAxn-theme)
			Modificar archivo style.css
			Cambiar screenshot
- En wp-config activar debug mode
			define( 'WP_DEBUG', true );
			define( 'WP_DEBUG_LOG', true );
			define( 'WP_DEBUG_DISPLAY', true );
- Inicializar GIT en carpeta wp-content
- Traspasar estilos a WP
			En assets de Boilerplate pegar mis estilos
			Nota: que hay que llamar a aos.css y aos.js (animation on scroll)
			LLamar a los estilos en
			wp-content/functions/wp_enqueue-style.php
			LLamar a los scripts en
			wp-content/functions/wp_enqueue-style.php
- Activar Bootstrap 4 en
			theme/functions/_ _ options (true)
- Tamaño personalizado de imágenes
			En functions/add_image_sizes.php
			add_image_size( 'rounded', 320, 320, true );   // imagenes clientes
			add_image_size( 'superbig', 1980, 985, true );   // top img pagina inicio y servicios
			add_image_size( 'blog_featured', 1400, 870, true );   // img destacada de blog
			add_image_size( 'blog_index', 440, 320, true );   // img en pagina indice de blog
			add_image_size( 'services_index', 700, 400, true );   // img en seccion indice de servicios en pg inicio
- Crear home.php
			En wp-content>/theme/mi-tema>home.php y traspasar código de index.html
			No olvidar llamar a header y footer con
			<?php get_header() ?>
			<?php get_footer() ?>
- En home.php carga dinámica de imágenes
			<?php echo get_theme_file_uri ('assets/images/nombre de la foto.png')
- Pasar código que corresponda a
		header.php (barrita superior y menú)
		footer.php (contacto + sección footer)
- Editar archivo assets/css/login.css
		(logo en assets/images/login/logo.svg)
		Para personalizar pantalla wp-admin
- Editar single.php
		Esta es la plantilla para las páginas individuales de las entradas.
- Hacer 5 entradas
- Crear page-blog.php (loop)
	Esta es la plantilla índice de todos los blogs
- Crear página "Blog" En el wp-admin
- Colocar año en forma dinámica en pie de página con <?php echo date("Y")
- Editar 404.php
- Editar page.php
	This is the template that displays all pages by default.
- En admin de wp crear páginas de cada programa (4) y talleres (1)
- Crear custom-post-types para clientes
- Crear page-nuestros-clientes.php (loop)
- Editar botón colapsable en page-nuestros-clientes
- Crear page-inicio.php
- Crear menú de navegación dinámico en admin wp
- Editar page inicio.php (links y loop clientes)
- get_template_part
- Contact Form Plugin
- Crear campos personalizados para páginas. Llamarlos con: echo get_post_meta($post->ID, 'key', true);  Key es el nombre del campo personalizado, reemplazar key por el nombre que corresponda.
- Usando do_shortcode en WordPress para mostrar formulario CF7. Lamar al formulario con: echo do_shortcode( '[your shortcode goes here]' );
- Menu desplegable
