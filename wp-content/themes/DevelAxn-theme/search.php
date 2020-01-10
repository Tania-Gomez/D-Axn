<?php get_header() ?>

 	<section class="SectionAboutUs mt-5 pt-5">
    <div class="SectionAboutUs__container container">

		    <?php if (have_posts()) { ?>

          <h2 class="SectionAboutUs__title-xxxl text-center my-5">Buscando: <?php echo esc_html( get_search_query( false ) ); ?></h2>
          <?php while ( have_posts() ) { the_post(); ?>

   	        <div class="row mx-1">

   	          <div class="col-md-4">
   	            <img class="w-100 h-auto my-3" src=<?php the_post_thumbnail('rounded', array('class' => 'w-100 h-auto')); ?>
   	          </div>

   	          <div class="col-md-8">
                <h4 class="my-3"><?php the_title(); ?></h4>
                <p class="mb-5"><?php the_excerpt() ?></p>
  				<a class="btn btn-sm btn-outline-primary mb-3" href="<?php the_permalink(); ?>" role="button">más info</a>
              </div>

            <?php }; ?>
            <?php } else { ?>
              <!-- Content -->
              <h2 class="text-center m-5 p-5">No hay elementos</h2>  <?php } wp_reset_query(); ?>

   	</div>
  </section>

    <!-- seccion contacto -->
  <?php get_template_part('_includes/contact', 'section') ?>


<?php get_footer() ?>