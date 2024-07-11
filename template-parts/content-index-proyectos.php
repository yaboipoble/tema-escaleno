<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portafolio_NP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header">
<section class="container">
			<div class="row pb-3 pt-5">
				<div class="col-md-6 col-12 d-flex flex-column align-items-center">
				<h1 class="titulo-inicio pb-3">Proyectos</h1>
				</div>
				<div class="col-md-6 col-12 d-flex flex-column justify-content-end">
				<p class=""><?php echo get_the_excerpt();?></p>
				</div>
			</div>
			<div>
				<div class="d-flex flex-column align-items-center pb-4">
				
				<p class="text-center">¿Necesitas nuestros servicios? ¿Quieres trabajar con nosotros?</p>
				<a href="../contacto" class="btn btn-primary">Contáctanos</a>
			</div>
	</div>
</section>
</header><!-- .entry-header -->

				<div class="container-fluid p-0">
									<div class="row proyectos-section">
					<?php

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
/*Query para pedir las entradas, se debe ajustar el "posts_per_page" para cambiar el número de publicaciones por página*/
$args = array(
    'post_type'=>'proyecto',
    'posts_per_page' => 4,
    'paged' => $paged,
	'orderby'			=> 'date',
	'order'				=> 'DESC'
);
/*Loop para traer publicaciones*/
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) {
    while ( $loop->have_posts() ) : $loop->the_post();?>
		<div class="container">
		<div class="row"> 
				<div class="col-12 col-md-6">
				<h2><?php the_title();?></h2>
				<p><?php echo get_the_excerpt();?></p>
				<a href="<?php the_permalink(); ?>" class="btn btn-primary">Más detalles</a>
			</div>
			<div class="col-12 col-md-6">
				<p>
					aquí irá la imagen
				</p>
			</div>
										</div>									
		</div>
	
        <?php endwhile;

      $total_pages = $loop->max_num_pages;

    if ($total_pages > 1){

        $current_page = max(1, get_query_var('paged'));?>

	</div>
	</div>

        <!-- Paginación -->
        <div id="pagination" class="col-12 py-5 wow fadeInUp d-flex align-items-center justify-content-center">


            <?php echo paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => 'page/%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_text'    => __('<i class="fas fa-caret-left"></i>'),
            'next_text'    => __('<i class="fas fa-caret-right"></i>'),
			'type' => 'list',
        ));
    }    
}
wp_reset_postdata();
?>
        </div>

     
</article><!-- #post-<?php the_ID(); ?> -->




