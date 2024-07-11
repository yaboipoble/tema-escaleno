<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package escaleno
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header header-home overflow-hidden position-relative pb-4">
		<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
	    <section class="container">
			<div class="row pb-3 pt-5">
				<div class="col-md-6 col-12 d-flex flex-column align-items-center">
				<h1 class="text-white titulo-inicio pb-3">Diseño de Software a la medida</h1>
				<p class="text-white"><?php echo get_the_excerpt();?></p>
				</div>
				<div class="col-md-6 col-12 d-flex flex-column justify-content-end">
						<?php 
		echo the_post_thumbnail();
					?>	
				</div>
			</div>
</section>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'np_portafolio' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
