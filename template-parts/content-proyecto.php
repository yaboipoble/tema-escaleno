<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package np_portafolio
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

	<header class="entry-header header-home overflow-hidden">
	    <section class="container">
	        <div class="row seccion1-home d-flex flex-column justify-content-center">
	        <?php the_title( '<h1 class="entry-title text-center animate__animated animate__zoomInDown">', '</h1>' ); ?>
	        <p class="text-center py-2 animate__animated animate__fadeInLeftBig"><?php echo get_the_excerpt();?></p>
				<p class="text-center excerpt-home py-2 animate__animated animate__fadeInUpBig"><a class="btn btn-outline-success" href="<?php echo the_field('enlace_demo')?>" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i> Demostración</a></p>
		</div>
	    </section>
	</header><!-- .entry-header -->


		<div class="py-4 my-3">
				<div class="d-flex justify-content-center flex-wrap mb-3">
                <div> <?php the_post_thumbnail();?></div>
</div>
			<div class="container my-4">
				<p class="descripcion-proyecto"><?php the_content(); ?></p>
			</div>
			
		</div><!-- .entry-content -->
	
	<div class="col-12 pb-4 d-flex flex-column align-items-center justify-content-center">
		<h2 class="text-center pb-4">Capturas de pantalla</h2>
	<div class="container galeria">
                <div class="col-12 galeria-border">
	   <!-- Dos custom fields: ambos para las capturas de pantalla del proyecto -->
		<?php
		$image = get_field('imagen_1');
		if (!empty($image)) : ?>
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
	</div>
								<div class="col-12 galeria-border">
	   <!-- Dos custom fields: ambos para las capturas de pantalla del proyecto -->
		<?php
		$image = get_field('imagen_2');
		if (!empty($image)) : ?>
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
	</div>
								<div class="col-12 galeria-border">
	   <!-- Dos custom fields: ambos para las capturas de pantalla del proyecto -->
		<?php
		$image = get_field('imagen_3');
		if (!empty($image)) : ?>
			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
		<?php endif; ?>
	</div>
							</div>
						</div>

</article><!-- #post-<?php the_ID(); ?> -->