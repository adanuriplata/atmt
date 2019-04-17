	<section class="talleres__container">
    <!-- Inicio wrappr grid talleres loop -->
      <?php
		  $args = array (
			  'post_type' => 'artemix_talleres',
			  'posts_per_page' => -1
		    );
	    $loop = new WP_Query($args);
		  ?>
    <div class="talleres__title">
      <?php if (is_home()): ?>
        <h3>Talleres Disponibles</h3>
        <?php else : ?>
        <h3>Otros Talleres</h3>
      <?php endif; ?>
    </div>
		<div class="wrapper_grid_talleres">
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<div class="talleres__taller shadow-2">
        <div class="talleres__taller__thumbnail">
					<?php the_post_thumbnail('loop') ?>
        </div>
        <div class="talleres__taller__title">
          <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        </div>
        <div class="talleres__taller__data">
          <div class="talleres__taller__data__inicio">Inicio: <span><?php the_field('fecha_de_inicio') ?></span></div>
          <div class="talleres__taller__data__sesiones">Sessiones: <span><?php the_field('numero_de_sesiones') ?></span></div>
          <div class="talleres__taller__data__horario">Horario: <span><?php the_field('horario') ?></span></div>
          <div class="talleres__taller__data__precio"><?php the_field('precio') ?></div>
        </div>
        <div class="talleres__taller__buttons">
          <!-- <div class="talleres__taller__buttons__more btn"><a href="#"> + <i class="fas fa-info"></i></a></div> -->
          <div class="talleres__taller__buttons__wha btn">
            <a href="https://api.whatsapp.com/send?phone=+5212228081954&text=Hola%20quiero%20inscribirme%20a%20un%20curso" target="_blank">
              <div class="button-brush">
                <i class="fa fa-paint-brush"> </i>
              </div>
              <div class="button-text">
                Inscribete por
              </div>
              <div class="button-whatsapp">
                <i class="fab fa-whatsapp"></i>
              </div>
            </a>
          </div>
        </div>
			</div>
		<?php endwhile; wp_reset_query(); ?>
      <!-- fin loop talleres -->
  	</div> <!-- Fin wrpper de grid talleres -->
  </section>