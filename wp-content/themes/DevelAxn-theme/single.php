<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<article class="EntradaBlog__container container mt-5 pt-5">
        <div class="text-center mt-5">
	        <h2 class="EntradaBlog__title-xxxl mt-5"><?php the_title() ?></h2>
			<div class="w-100 h-auto my-4">
                <?php the_post_thumbnail('blog-featured', array('class' => 'w-100 h-auto')) ?>
			</div>
        </div>
    
        <p><?php the_content() ?></p>
				
				<!-- cta-programas -->
				<?php get_template_part('_includes/cta', 'blog') ?>
				<!-- pie de blog -->
				<?php get_template_part('_includes/pie', 'blog') ?>
    </article>

	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>

<!-- seccion contacto -->
<?php get_template_part('_includes/contact', 'section') ?>

<?php get_footer() ?>
