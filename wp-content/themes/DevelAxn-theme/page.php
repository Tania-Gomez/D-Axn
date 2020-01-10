<?php get_header() ?>
	<?php the_post() ?>

	<header class="w-100 text-center mt-5 pt-4"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<?php the_post_thumbnail('super-big', array('class' => 'w-100 h-auto')) ?>
	</header>

	<main class="SectionPrograma__container container">
		<h2 class="SectionPrograma__title-xxxl text-center my-5"><?php the_title() ?></h2>
		<div class="row mx-1">
			<div class="col-md-4">
				<p class="py-3 mr-2 font-italic"><?php echo get_post_meta($post->ID, 'promesa', true); ?></p>
				<h4 class="pb-1 font-weight-bold">Objetivos</h4>
				<p class="mr-2"><?php echo get_post_meta($post->ID, 'objetivos', true); ?></p>
			</div>
			<div class="col-md-8">
				<p><?php the_content() ?></p>
			</div>
		</div>

		<!-- cta-programas -->
		<?php get_template_part('_includes/cta', 'programas') ?>

	</main>
	<!-- seccion contacto -->
	<div class="">
		<?php get_template_part('_includes/contact', 'section') ?>
	</div>

<?php get_footer() ?>
