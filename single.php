
<?php get_header(); ?>
<!-- container -->
<div class="single-taller__container">
	<section class="single-taller__hero">
		<div class="single-taller__hero__wrapper-content">
			<div class="single-taller__hero__content-text">
				<h1>Este es el titulo desde single <?php the_title(); ?></h1>
				<p class="single-taller__hero__content-text__description">
				</p>
			</div>
			<div class="single-taller__hero__content__img">
				<figure>
					<img src="" alt="">
				</figure>
			</div>
		</div>
			<?php get_search_form(); ?>
			<h6>Quick Navigation</h6>
		
	</sectin>

	<!-- site-content -->
	<div class="site-content single">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				if ( get_post_format() == false ) {
					get_template_part( 'content', 'single' );
				} else {
					get_template_part( 'content', get_post_format() );
				}
		endwhile;
		else :
			get_template_part( 'content', 'none' );
		endif;
		?>
	</div>
	<!-- /site-content -->
</div>
<!-- container -->
<?php get_footer(); ?>
