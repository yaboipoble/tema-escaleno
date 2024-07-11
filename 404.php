<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package escaleno
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<div class="page-content text-center py-5">
				<p>Parece que encontraste un</p>
				<h1>404</h1>
				<p>en mi sitio. La página no existe o no se encuentra disponible.</p>
				<div class="d-flex justify-content-center pt-4"><a class="btn btn-outline-success" href="/"><i class="fa-solid fa-house-chimney"></i> Volver al inicio</a></div>
			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
