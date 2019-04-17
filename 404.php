<?php get_header(); ?>
<!-- container -->
<div class="container">
	<div id="primary" class="not-found">
		<section class="error-404 not-found">
			<h1 class="page-title"><?php _e( 'Oops! Pagina no encontrada.', 'artemix' ); ?></h1>
			<div class="page-content">
				<p><?php _e( 'No hay nada aqui, intenta una busqueda', 'artemix' ); ?></p>

				<?php get_search_form(); ?>
			</div>
		</section>
	</div>
</div>
<!-- /container -->
<?php get_footer(); ?>