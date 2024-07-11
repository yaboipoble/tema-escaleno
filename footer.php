<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package escaleno
 */

?>

<footer>
<section id="footer-Content" class="pt-4">
<div class="container">

<div class="row">

<div class="col-12 col-md-6">
<div class="widget">
<?php if (is_active_sidebar('columna_uno_footer')) : dynamic_sidebar('columna_uno_footer');
		endif; ?>
</div>
</div>


<div class="col-12 col-md-6">
<div class="widget">
<?php if (is_active_sidebar('columna_dos_footer')) : dynamic_sidebar('columna_dos_footer');
		endif; ?>	
</div>
</div>



</div>

</div>
</section>

</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
