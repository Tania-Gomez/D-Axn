<?php get_header() ?>
	<?php the_post() ?>

	<!-- Inicio Hero-->
	<section class="headerInicio mt-5 pt-3">
		<div class="headerInicio__jumbotron jumbotron jumbotron-fluid position-relative">
			<div class="container">
				<div class="row">
					<img class="headerInicio__logo m-5 img-fluid" src="<?php echo get_theme_file_uri('assets/images/Logo-temp-nombre-slogan.png') ?>" alt="Logo DevelAxn">
					<h1 class="headerInicio__slogan m-5">Reunimos ingeniería, coaching y técnicas terapéuticas en Programas de Transformación y Adaptación, con foco en Resultados y RSE</h1>
					<h3 data-aos="flip-left"><a class="headerInicio__btn btn btn-primary m-5" href="#programs" role="button">QUIERO SABER MÁS</a></h3>
				</div>
			</div>
		</div>
	</section>

	  <main>
	    <!-- Seccion AboutUs -->
	    <section class="SectionAboutUs mb-5">
	      <div class="SectionAboutUs__container container">
	        <h2 class="SectionAboutUs__title-xxxl text-center my-5">Visión en Acción</h2>

	        <div class="row">

	          <div class="SectionAboutUs__container-img col-md-4">
	            <img class="SectionAboutUs__img w-100 h-auto px-2 mb-2" src="<?php echo get_theme_file_uri('assets/images/paola-meli.jpg') ?>" alt="Paola Meli fundadora de DevelAxn">
	          </div>
	          <div class="SectionAboutUs__container-paragraph col-md-8">
	            <p class="SectionAboutUs__paragraph ml-2">Soy Paola Meli Muñoz, <span style="font-size:20px; color:#3366cc">fundadora</span> de DevelAxn. Ingeniera Civil Industrial UC, coach sistémica, consteladora empresarial y terapeuta, con más de 20 años de experiencia.</p>
	            <p class="SectionAboutUs__paragraph ml-2">Nos dedicamos a realizar Programas de Transformación y Adaptación al mundo cada vez más cambiante al que nos enfrentamos hoy, con <span style="font-size:20px; color:#3366cc">foco</span> en Resultados y en RSE.</p>
	            <p class="SectionAboutUs__paragraph ml-2">Cada programa se desarrolla y trabaja con <span style="font-size:20px; color:#3366cc">equipos</span> especializados, consultores asociados. Nos vincula un propósito y un sentir común: queremos ser promotores de la transformación social, grupal e individual a nivel mundial para co-construir una sociedad de personas reconocidas, incluidas y valoradas.</p>

	            <h3 class="SectionAboutUs__title-xl mt-2 ml-2">RSE</h3>
	            <p class="SectionAboutUs__paragraph ml-2">Compromiso: el 100% de nuestras utilidades se usarán para entregar estos programas a sectores vulnerables, emprendedores conscientes sin capital económico y organizaciones sociales.</p>
	          </div>

	        </div>
	        <!-- CTA about us -->
	        <div class="cta__container text-center">
	          <h3 class="cta__text m-4 py-3">Si quieres saber qué podemos hacer por ti <a href="contacto" class="SectionAboutUs__btn btn btn-primary ml-2" data-aos="flip-left">CONTÁCTANOS</a></h3>
	        </div>

	      </div>
	    </section>

	    <!-- Seccion Programas-->
	    <section class="sectionProgramas py-3" id="programs">
	      <div class="sectionProgramas__container container">
	        <h2 class="sectionProgramas__title-xxxl text-center my-5">Programas</h2>

	        <div class="row mx-1">
						<!-- Programa 1 -->
	          <div class="col-12 col-md-6 mb-4">
	            <div class="sectionProgramas__card card">
	              <img src="<?php echo get_theme_file_uri('assets/images/program-transformacion-organizacional.jpg') ?>"  class="sectionProgramas__card-img card-img-top" alt="Transformación Organizacional">
	              <div class="sectionProgramas__card-content card-body">
	                <h4 class="sectionProgramas__card-title">Transformación Organizacional</h4>
	                <p class="sectionProgramas__card-paragraph card-text">Equipos vinculados y comprometidos con el resultado grupal. Líderes colaborativos. Cargos, Funciones, Tareas interconectadas que potencian el sistema.</p>
	                  <div class="d-flex flex-row-reverse">
	                    <a class="sectionProgramas__card-btn btn btn-sm btn-outline-primary" href='transformacion-organizacional' role="button">más info</a>
	                  </div>
	              </div>
	            </div>
	          </div>
	          <!-- Programa 2  -->
	          <div class="col-12 col-md-6 mb-4">
	            <div class="sectionProgramas__card card"> <img src="<?php echo get_theme_file_uri('assets/images/program-camino-guerrero.jpg') ?>" class="sectionProgramas__card-img card-img-top" alt="Emprender, el camino del(a) Guerrer@">
	              <div class="sectionProgramas__card-content card-body">
	                <h4 class="sectionProgramas__card-title">Emprender, el camino del(a) Guerrer@</h4>
	                <p class="sectionProgramas__card-paragraph card-text">Accionar ideas, sueños, proyectos o propósitos. Desarrollo de Negocios. Planificación en ambientes inestables. Superar barreras y limitaciones.</p>
	                <div class="d-flex flex-row-reverse">
	                  <a class="sectionProgramas__card-btn btn btn-sm btn-outline-primary" href='emprender-el-camino-del-a-guerrero-a' role="button">más info</a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <!-- Programa 3  -->
	          <div class="col-12 col-md-6 mb-4">
	            <div class="sectionProgramas__card card"> <img src="<?php echo get_theme_file_uri('assets/images/program-desarrollo-org-sistemico.jpg') ?>" class="sectionProgramas__card-img card-img-top" alt="Desarrollo Organizacional Sistémico">
	              <div class="sectionProgramas__card-content card-body">
	                <h4 class="sectionProgramas__card-title">Desarrollo Organizacional Sistémico</h4>
	                <p class="sectionProgramas__card-paragraph card-text">Organización unida por Inspiración conjunta. Aumenta Bienestar individual y grupal. Vinculación y Pertenencia como llaves del compromiso.</p>
	                <div class="d-flex flex-row-reverse">
	                  <a class="sectionProgramas__card-btn btn btn-sm btn-outline-primary" href='desarrollo-organizacional-sistemico' role="button">más info</a>
	                </div>
	              </div>
	            </div>
	          </div>
	          <!-- Programa 4  -->
	          <div class="col-12 col-md-6 mb-4">
	            <div class="sectionProgramas__card card"> <img src="<?php echo get_theme_file_uri('assets/images/program-educ-civica.jpg') ?>" class="sectionProgramas__card-img card-img-top" alt="Educación Cívica como RSE">
	              <div class="sectionProgramas__card-content card-body">
	                <h4 class="sectionProgramas__card-title">Educación Cívica como RSE</h4>
	                <p class="sectionProgramas__card-paragraph card-text">Aprendizaje de temas críticos: pensiones, salud y endeudamiento/ahorro. RSE para colaboradores y la sociedad al mismo tiempo.</p>
	                <div class="d-flex flex-row-reverse">
	                  <a class="sectionProgramas__btn btn btn-sm btn-outline-primary" href='educacion-civica-como-rse' role="button">más info</a>
	                </div>
	              </div>
	            </div>
	          </div>

	        </div>
					<!-- cta-programas -->
					<?php get_template_part('_includes/cta', 'programas') ?>

	      </div>
	    </section>

	    <!-- sectionCustomers-->
	    <section class="sectionCustomers">
	      <div class="sectionCustomers__container container text-center">
	        <h2 class="sectionCustomers__title-xxxl text-center">Lo que dicen nuestros clientes</h2>
	        <div class="row mx-1">

							<?php $arg = array(
							 'post_type'     => 'customers',
							 'posts_per_page' => 3,
							 );

							 $get_arg = new WP_Query( $arg );

							 while ( $get_arg->have_posts() ) {
							 $get_arg->the_post();
							 ?>

							 <div class="col-md-4 p-3">
								 <?php the_post_thumbnail('blog_index', array('class' => 'w-75 h-auto mb-4')) ?>
   			 				 <h3 class="sectionCustomers__title-xl text-secondary"><?php the_title(); ?></h3>
   			 				 <h5 class="mt-2"><?php echo get_post_meta($post->ID, 'position', true); ?></h5>
   			 				 <p class="mt-2"><?php echo get_post_meta($post->ID, 'bajada', true); ?></p>
							 </div>

							 <?php } wp_reset_postdata(); ?>
						</div>

	      <!-- CTA testimonios -->
	      <div class="cta__container text-center">
	        <h3 class="cta__text m-4 py-3">Conoce más testimonios<a href="nuestros-clientes" class="cta__btn btn btn-primary ml-2" data-aos="flip-left">AQUÍ</a></h3>
	      </div>
	    </div>

	    </section>

	  </main>

		<!-- seccion contacto -->
		<?php get_template_part('_includes/contact', 'section') ?>

<?php get_footer() ?>
