<?php get_header() ?>
	<?php the_post() ?>

	<header class="w-100 text-center"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
				<?php the_post_thumbnail('super-big', array('class' => 'w-100 h-auto')) ?>
	</header>

	<main class="SectionPrograma__container container">
		<h2 class="SectionPrograma__title-xxxl text-center my-5"><?php the_title() ?></h2>
		<div>
			<p><?php the_content() ?></p>
		</div>

		<!-- cta-programas -->
		<?php get_template_part('_includes/cta', 'programas') ?>

	</main>
	<!-- seccion contacto -->
	<?php get_template_part('_includes/contact', 'section') ?>

<?php get_footer() ?>
