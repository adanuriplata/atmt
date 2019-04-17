<footer class="footer__container">
            <div class="footer__vertical">
                <div class="footer__vertical__item">
                    <div class="footer__vertical__1__title">
                        <h3>Contacto</h3>
                    </div>
                    <div class="footer__vertical__1__text__description">
                        ¡Visitanos o Llamanos!
                    </div>
                    <div class="footer__vertical__1__ubicacion">
                        <div class="footer__vertical__1__ubicacion__text">
                            <div class="footer__vertical__1__ubicacion__text__direccion">
                                <h4> <i class="fas fa-map-marker-alt contacto__text_direccion__ico"> </i> Dirección:</h4>
                                <p>Calzada Colorines #5209 Col. Emiliano Zapata Sn Andres Cholula, Puebla Mexico</p>
                            </div>
                            <div class="footer__vertical__1__ubicacion__telefono">
                                <h4><i class="fas fa-phone footer__vertical__1__ubicacion_telefono__ico"> </i> Teléfono:</h4>
                                <p>044 222 808 1954</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__vertical__item">
                    <div class="footer__vertical__2__title">
                        <h3>Servicios</h3>
                    </div>
                        <?php
                            $args = array(
                                'theme_location' => 'footer-menu',
                                'container' => 'nav',
                                'container_class' => 'footer__vertical__2__menu'
                            );
                            wp_nav_menu($args);
                        ?>

                    <div class="footer__vertical__2__keywords">
                        <ul>
                            <li><i class="fas fa-angle-double-right"></i> pintura</li>
                            <li><i class="fas fa-angle-double-right"></i> dibujo</li>
                            <li><i class="fas fa-angle-double-right"></i> escultura y modelado</li>
                            <li><i class="fas fa-angle-double-right"></i> mascaras de papel mache</li>
                            <li><i class="fas fa-angle-double-right"></i> grabado</li>
                            <li><i class="fas fa-angle-double-right"></i> fotografia</li>
                            <li><i class="fas fa-angle-double-right"></i> Curso de stencil</li>
                        </ul>
                    </div>
                </div>

                <div class="footer__vertical__item">
                    <div class="footer__vertical__3__title">
                        <h3>Siguenos</h3>
                    </div>
                    <div class="footer__3__vertical__description">
                        Entérate de lo último desde nuestras redes sociales.
                    </div>

                    <?php
                        $args = array(
                            'theme_location' => 'social-menu',
                            'container' => 'div',
                            'container_class' => 'footer__3__vertical__social',
                            'before' => '<i class="fab"></i> '
                        );
                        wp_nav_menu($args);
                    ?>

                    <!-- <div class="footer__3__vertical__social">
                        <ul>
                            <li><i class="fab fa-facebook"></i> Facebook</li>
                            <li><i class="fab fa-instagram"></i> Instagram</li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="footer__copyrigth">
                Copyright © <?php echo date("Y"); ?> -<a href="#"> Artemix.</a> Derechos reservados.<br />
Diseño y Desarrollo por <a href="http://conektica.com/">Conektica </a>
            </div>
        </footer>
				<?php wp_footer(); ?>
    </main>
</body>
</html>