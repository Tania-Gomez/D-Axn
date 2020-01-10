<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>
	<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu' ) ); ?>
<?php } ?>

<?php wp_footer() ?>

<!-- FOOTER -->
    <footer class="SectionAboutUs mt-4">
	      <div class="SectionAboutUs__container container">
	        <div class="row mx-1">

				<div class="footer__listContainer col-sm-7">
					<ul class="footer__list nobull">
						<li class="footer__item">DevelAccion® Consultora SpA</li>
						<li class="footer__item">contacto@develaccion.com</li>
						<li class="footer__item">Av. Holanda 099 of. 1101, Providencia</li>
						<li class="footer__item">Celerino Pereira 1456, Ñuñoa</li>
						<li class="footer__item">Programa Desarrollo Organizacional Sistémico</li>
						<li class="footer__item">Celerino Pereira 1456, Ñuñoa</li>
						<li class="footer__item">Santiago, Chile</li>
					</ul>
				</div>

				<div class="footer__listContainer col-sm-5">
					<ul class="footer__list nobull">
						<li class="footer__item">Inicio</li>
						<li class="footer__item">Programa de Transformación Organizacional</li>
						<li class="footer__item">Programa Educación Cívica como RSE</li>
						<li class="footer__item">Programa Emprender, el camino del(a) Guerrer@</li>
						<li class="footer__item">Programa Desarrollo Organizacional Sistémico</li>
						<li class="footer__item">Talleres</li>
						<li class="footer__item">Testimonios</li>
						<li class="footer__item">Contacto</li>
						<li class="footer__item">Blog</li>
					</ul>
				</div>
				<p class="footer__copyright m-3"><small>Copyright © <?php echo date("Y") ?> DevelAccion® | Todos los derechos reservados.</small></p>

            </div>
	    </div>
    </footer>


	<!-- jquery 3.4.1 -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!-- popper JS 1.14.7 -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<!-- bootstrap JS 4.3.1 -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- AOS JS 2.3.1/ -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
			<script>
				AOS.init({
					 easing: 'ease-out-cubic',
					 duration: 1200,
					 delay: 100,
					 once: true,
					 disable: 'mobile'
				});
			</script>
	</script>

	<!-- Mi script -->
	<!-- <script src="<?php echo get_theme_file_uri('assets/js/my_script.js') ?>"></script> -->

</body>
</html>
