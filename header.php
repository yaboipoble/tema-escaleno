<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portafolio_NP
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Saltar al contenido', 'Portafolio_NP' ); ?></a>

	<header id="masthead" class="site-header">

			<nav id="site-navigation" class="navbar navbar-expand-lg navbar-dark menu-color-bg pb-3 pt-3">
				<div class="container">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
					endif;
					$portafolio_np_description = get_bloginfo('description', 'display');
					if ($portafolio_np_description || is_customize_preview()) :
					?>
						<p class="site-description"><?php echo $portafolio_np_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
													?></p>
					<?php endif; ?>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa-solid fa-bars"></i>
				</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'nav-cliente',
						'menu_class'     => "navbar-nav",
						'container'      => "div",
						'container_class' => "collapse navbar-collapse justify-content-end",
						'container_id'   => "navbarNav",
					)
				);
				?>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->