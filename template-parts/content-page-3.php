<?php
/**
 * Template part for displaying page content in page-3.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portafolio_NP
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header header-home overflow-hidden position-relative pb-4">
		<div id="stars"></div>
<div id="stars2"></div>
<div id="stars3"></div>
	    <section class="container">
			<div class="row pb-5 pt-5">
				<div class="col-md-6 col-12">
				<?php the_title( '<h1 class="entry-title titulo-inicio">', '</h1>' ); ?>
				<p class=""><?php echo get_the_excerpt();?></p>
				</div>
				<div class="col-md-6 col-12">
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

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
