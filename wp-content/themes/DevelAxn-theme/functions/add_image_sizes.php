<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'slideshow'		=> __( 'Tamaño del slideshow' ),
		'custom_logo'	=> __( 'Tamaño personalizado del logo' ),
		'rounded'	=> __( 'img clientes' ),
		'superbig' => __( 'top img pagina inicio y servicios' ),
		'blog_featured'	=> __( 'img destacada de blog' ),
		'blog_index' => __( 'img en pagina indice de blog' ),
		'services_index' => __( 'img en seccion indice de servicios en pg inicio' )
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'slideshow', 800, 600, true );			// Personalización del tamaño del slideshow
	add_image_size( 'custom_logo', 800, 600, true );		// Personalización del tamaño del logo
	add_image_size( 'rounded', 320, 320, true );			// imagenes clientes
	add_image_size( 'superbig', 1980, 980, true );		// top img pagina inicio y servicios
	add_image_size( 'blog_featured', 1400, 870, true );			// img destacada de blog
	add_image_size( 'blog_index', 440, 320, true );		// img en pagina indice de blog
	add_image_size( 'services_index', 700, 400, true );		// img en seccion indice de servicios en pg inicio

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
