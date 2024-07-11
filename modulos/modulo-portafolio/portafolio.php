<?php 
function proyectos_shortcode($atts, $content = null) {
     ob_start(); ?>
<?php
	echo '<div class="container-fluid"><div id="proyectos-home" class="row d-flex justify-content-center">';
    $args = array( 'post_type' => 'proyecto', 'posts_per_page' => 3);
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();
?>
		<div class="container-fluid m-0 p-0 d-flex flex-column wow fadeInUp position-relative"> 
            <div class="row">
                <div class="col-12 galeria-individual" style="background-image: url('<?php the_post_thumbnail_url(); ?>'); background-repeat: no-repeat; background-size: cover;">
                    <div class="text-center texto-blog d-flex flex-column align-items-center justify-content-center">
						<!-- Título: nombre de la persona  -->
                        <h3 class="hero_name"><?php echo get_the_title(); ?></h3>
						<!-- Campo personalizado: Ocupación de la persona  -->
                        <p class="hero_title mb-30"><?php echo the_excerpt();?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Más detalles</a>
                    </div>
                </div>
            </div>
        </div>
            <?php endwhile;
echo '</div></div>';
    return ob_get_clean();
}

add_shortcode('loop_proyectos_home', 'proyectos_shortcode');

?>