<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package escaleno
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="entry-header header-home position-relative blog-data overflow-hidden">
	    <section class="container ">
	        <div class="row seccion1-home d-flex flex-column justify-content-center">
	        <?php
				the_archive_title( '<h1 class="page-title text-center">', '</h1>' );
				the_archive_description( '<div class="archive-description text-center">', '</div>' );
				?>
		</div>
	    </section>
		<div class="proyecto-overlay overflow-hidden d-flex justify-content-center flex-column">
		<div class="scroll-proyectos-left">
			<h2 class="text-scroll"><?php echo the_archive_title();?></h2>
			</div>
		<div class="scroll-proyectos-right">
			<h2 class="text-scroll"><?php echo the_archive_title(); ?></h2>
			</div>
		</div>
	</header><!-- .entry-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
