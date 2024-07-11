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
	<header class="entry-header header-home">
	    <section class="">
	        <div class="row seccion1-home d-flex flex-column justify-content-center">
	        <div class="d-flex justify-content-center img-index"><?php np_portafolio_post_thumbnail(); ?></div>
	        <?php the_title( '<h1 class="entry-title text-center">', '</h1>' ); ?>
	        <p class="text-center excerpt-home"><?php echo get_the_excerpt();?></p>
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

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
