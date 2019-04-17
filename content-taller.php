<article class="single-taller__container">
  <section class="single-taller__hero">
		<div class="single-taller__hero__content">
			<div class="single-taller__hero__content__text">
				<h1> <?php the_title(); ?></h1>
				<p class="single-taller__hero__content__text__description">
					<?php the_field('descripcion')?>
				</p>
				<div class="single-taller__hero__content__text__data">
					<ul>
						<li> <span>inicio:</span> <?php the_field('fecha_de_inicio') ?></li>
						<li> <span>sessiones:</span> <?php the_field('numero_de_sesiones') ?></li>
						<li> <span>horario:</span> <?php the_field('horario') ?></li>
						<li> <span>precio:</span> <?php the_field('precio') ?></li>
					</ul>
				</div>
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
			<div class="single-taller__hero__content__img">
				<figure>
					<?php the_post_thumbnail(); ?>
				</figure>
			</div>
		</div>
	</section>
	<?php
	 the_content();
	 get_template_part('home', 'inscribirse' );
	 get_template_part('template-parts/talleres-loop');
   get_template_part('home', 'visitanos'); ?>
</article>
