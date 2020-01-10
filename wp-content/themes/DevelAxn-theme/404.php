<?php get_header() ?>
	<?php the_post() ?>

<section class="w-100 text-center">
		<div class="headerInicio__jumbotron">
					<h1 class="mt-5 pt-5">Error 404:</h1>
					<h2>Página no encontrada</h2>
					<p><a href="<?php echo get_home_url() ?>" class="btn btn-outline-primary btn-lg mt-5">Volver al inicio</a></p>
		</div>
</section>

<?php get_footer() ?>
