  <!-- start section tallerista -->
	<section class="tallerista__container">
    <div class="tallerista__title">
      <h3>¿Eres Tallerista?</h3>
    </div>
    <div class="tallerista__wraper__flex">
      <!-- <div class="tallerista__text">
        <div class="tallerista__text__description">
          <p></p>
        </div>
      </div> -->
      <div class="tallerista__gallery">
        <div class="tallerista__gallery__item"><img src="<?php $url = home_url().'/wp-content/themes/'.get_template().'/assets/img/tallerista_gallery_300*300_1.jpg'; echo esc_url( $url ); ?>" alt="img1"></div>
        <div class="tallerista__gallery__item"><img src="<?php $url = home_url().'/wp-content/themes/'.get_template().'/assets/img/tallerista_gallery_300*300_2.jpg'; echo esc_url( $url ); ?>" alt="img1"></div>
      </div>
      <div class="tallerista__container_beneficios-form">
        <div class="tallerista__beneficios">
          <ul>
            <li> <span class="icono"><i class="fas fa-chalkboard-teacher"></i></span> ¿Tienes experiencia en la docencia?</li>
            <li> <span class="icono"> <i class="fas fa-palette"></i></span> ¿Quieres participar con tu taller?</li>
          </ul>
        </div>
        <div class="tallerista__form">
          <div class="tallerista__form__title">
            <h4>Escribenos</h4>
          </div>
          <div class="form-big">
            <form action="">
              <div class="form-big__input form-big__correo"><input type="text" placeholder="Nombre"></div>
              <div class="form-big__input form-big__correo"><input type="text" placeholder="Correo"></div>
              <div class=" form-big__button-l form-big__enviar"><input type="submit" value="Enviar"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end section tallerista -->