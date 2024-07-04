<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<title></title>
</head>

<body <?php body_class(); ?>>
	<?php do_action('wp_body_open');
	?>
	<div class="site" id="page">
		<?php
		if (get_field('logo_preto', $post)) {
			$backcolor = "header_color_white";
			$buttoncolor = "navbar-button-black";
		} else {
			$backcolor = "header_color_black";
			$buttoncolor = "navbar-button-white";
		}
		?>
		<!-- ******************* The Navbar Area ******************* -->
		<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite" style="position: absolute;">

			<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap'); ?></a>

			<script>
				window.onscroll = function() {
					myFunction()
				};
				window.onload = function() {
					myFunction()
				};

				function myFunction() {
					var w = window.innerWidth;
					if (w >= 1200) {
						if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
							$('nav').addClass('<?php echo $backcolor ?>');
						} else {
							$('nav').removeClass('<?php echo $backcolor ?>');
						}
					}
					if (w >= 992 && w < 1200) {
						if (document.body.scrollTop > 380 || document.documentElement.scrollTop > 380) {
							$('nav').addClass('<?php echo $backcolor ?>');
						} else {
							$('nav').removeClass('<?php echo $backcolor ?>');
						}
					}
					if (w >= 768 && w < 992) {
						if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
							$('nav').addClass('<?php echo $backcolor ?>');
						} else {
							$('nav').removeClass('<?php echo $backcolor ?>');
						}
					}
					if (w < 768) {
						$('nav').addClass('<?php echo $backcolor ?>');
					}

				}
			</script>
			<nav class="navbar navbar-expand-md navbar-dark fixed-top">


				<div class="w-50 d-flex  order-0">
					<!-- Your site title as branding in the menu -->
					<?php if (!has_custom_logo()) { ?>

						<?php if (is_front_page() && is_home()) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name'); ?></a>

						<?php endif; ?>


						<?php } else {

						if (get_field('logo_preto', $post)) {
							$link_imagem = get_template_directory_uri() . "/assets/logo_preto.png";
							$text_color = 'nav-text-color-black';
						?>
							<style>
								.dropdown-menu li a {
									color: #000000 !important;
								}

								.dropdown-menu {
									background-color: #ffffff;
								}
								.dropdown-menu li a:hover {
									background-color: #1d1d1d !important;
									color: #eeeeee !important;
								}
							</style>

							<a href="<?php echo esc_url(home_url('/'));  ?>" class="navbar-brand custom-logo-link">
								<img width="1963" height="671" src="<?php echo $link_imagem; ?>" class="logo_image" alt="contagio">
							</a>
						<?php
						} else {
							$text_color = 'nav-text-color-white';
							the_custom_logo();
						?>

							<style>
								.dropdown-menu li a {
									color: #eeeeee !important;
								}

								.dropdown-menu {
									background-color: #1d1d1d;
								}
								.dropdown-menu li a:hover {
									background-color: #eeeeee !important;
									color: #1d1d1d !important;
								}
								
							</style>
					<?php
						}
					} ?>
					<!-- end custom logo -->
				</div>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap'); ?>">
					<i class="fas fa-bars <?php echo $buttoncolor ?>"></i>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse justify-content-center order-2 w-100',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ' . $text_color, //ml-auto mr-auto
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

				<div class="w-50 order-1 order-md-last"></div>

			</nav><!-- .site-navigation -->

		</div><!-- #wrapper-navbar end -->