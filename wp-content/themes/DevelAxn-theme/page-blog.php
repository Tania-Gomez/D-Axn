<?php get_header() ?>
	<?php the_post() ?>

	<main class="container mt-5 pt-2">
    <h2 class="text-center mt-5"><?php the_title() ?></h2>
    <div class="row mx-1">

      <?php $arg = array(
       'post_type'     => 'post',
       'posts_per_page' => 9,
			 'paged' => $paged
       );

       $get_arg = new WP_Query( $arg );

       while ( $get_arg->have_posts() ) {
       $get_arg->the_post();
       ?>

       <div class="col-12 col-md-4 my-3">
         <div class="card">
           <?php the_post_thumbnail('blog_index', array('class' => 'w-100 h-auto card-img-top')) ?>
           <div class="card-body">
             <h4 class="card-title mb-4"><?php the_title(); ?></h4>
             <p class="card-text"><?php the_excerpt(); ?></p>
             <hr>
             <div class="text-right">
							 <a class="btn btn-sm btn-outline-primary" href="<?php the_permalink(); ?>" role="button">más info</a>
						 </div>

           </div>
         </div>
       </div>

       <?php } wp_reset_postdata(); ?>
    </div>
	</main>
	<!-- seccion contacto -->
	<?php get_template_part('_includes/contact', 'section') ?>

<?php get_footer() ?>
