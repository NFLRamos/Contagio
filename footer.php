<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
/*
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>
						
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
*/

wp_footer(); ?>
<footer>

	<?php if (get_field('footer_simplificado', $post->id)) { ?>
		
		<div class="container-fluid footer_posicao pt-3 pb-3">
			<div class="row">
				<div class="col-3 col-md-4 text-center">
					Aveiro
				</div>
				<div class="col-5 col-md-4 text-center">
				<a href="mailto:email@contagio.pt" class="text-decoration-none" style="color: black;">
						email@contagio.pt
					</a>
				</div>
				<div class="col-4 col-md-4 text-center">
					lg, <a href="http://pt.linkedin.com/" target="blank" class="text-decoration-none" style="color: black;">
						Lkdin
					</a>
				</div>
			</div>
		</div>
		
	<?php } else { ?>
		<div style="background-image: linear-gradient(to right, #739dff , #FAA9FF);" class="text-center pt-5 pb-5">
			<h3><?php _e('Ready To Kick Off Your Growth Journey'); ?></h3>
			<div class="mt-5 mb-5">
				<a href="<?php
                            if (get_locale() == 'pt_PT') {
                                echo '../wordpress/contacte-nos';
                            } else if (get_locale() == 'en_GB') {
                                echo '../wordpress/contact-us';
                            } else if (get_locale() == 'fr_FR') {
                                echo '../wordpress/contactez-nous';
                            }
                            ?>" class="text-decoration-none" style="background-color: #002bff;color: #fff;padding: 9px;border-radius: 3px;">
				<?php _e('Speak with Contagio'); ?>
				</a>
			</div>
		</div>

		<div class="pt-5 pl-5 pr-5 pb-4" style="background-color:#000334 ;color:#eeeeee;">
			<div style="display: flex;flex-direction: row; flex-wrap:wrap;">


				<?php
				for ($i = 1; $i <= 5; $i++) {
				?>
					<div class="footer_column">
						<?php
						$footer = 'footer' . $i;
						if (is_active_sidebar($footer)) {

							dynamic_sidebar($footer);
						}
						?>
					</div>
				<?php
				}
				?>
				<!-- <div style="flex-basis: 20%; ">
				<p style="font-size: 30px;font-weight: 100;">Contagio</p>
				<p style="font-size: 18px;opacity: 0.6;font-weight: 100;">Agencia digital em Aveiro</p>
				<p style="font-size: 20px;font-weight: 100;">
					Ig,
					<a href="http://pt.linkedin.com/" target="blank" class="text-decoration-none" style="color:#eeeeee;">
						Lkdin
					</a>
				</p>
				<p style="font-size: 20px;font-weight: 100;">
					<a href="mailto:email@contagio.pt" class="text-decoration-none" style="color:#eeeeee;">
						email@contagio.pt
					</a>
				</p>
			</div>
			<div style="flex-basis: 20%; ">
				<p style="font-size: 48px;letter-spacing: -1.1px;font-weight: 100;">PT</p>
				<p style="font-size: 18px;opacity: 0.8;">Aveiro</p>
				<p style="font-size: 16px;opacity: 0.6;">Ch. de la tourette<br> 1205 Genève <br>Suisse</p>
			</div>
			<div style="flex-basis: 20%; ">
				<p style="font-size: 48px;letter-spacing: -1.1px;font-weight: 100;">CH</p>
				<p style="font-size: 18px;opacity: 0.8;">Genebra</p>
				<p style="font-size: 16px;opacity: 0.6;">Ch. de la tourette<br> 1205 Genève <br>Suisse</p>
			</div>
			<div style="flex-basis: 20%;  ">
				<p style="font-size: 20px;font-weight: 100;">Nos expertises</p>
				<p style="font-size: 18px;opacity: 0.7;font-weight: 100;line-height: 2;">
					Stratégie digitale<br>
					Branding <br>
					Expérience utilisateur<br>
					Développement de produit<br>
					Media production<br>
					Digital Marketing
				</p>
			</div>
			<div style="flex-basis: 20%;  ">
				<p style="font-size: 20px;font-weight: 100;">L'agence digitale</p>
				<p style="font-size: 18px;opacity: 0.7;font-weight: 100;line-height: 2;">
					Á propos de nous<br>
					Notre portfolio<br>
					Notre blog <br>
					Nous contacter
				</p>
			</div> -->

			</div>
			<hr style="border-color: #262848;">
			<div style="font-size: 12px;opacity: 0.6;text-align: justify;line-height: 1.6;">
			<?php _e('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.'); ?>
			</div>
			<hr style="border-color: #262848;">
			<div class="container-fluid" style="opacity: 0.8; font-size:16px;">
				<div class="row" style="font-size: 14px;opacity: 0.8;">
					<div style="width: 50%;text-align: left;">Copyright @ 2021 Contagio. All rights reserved.</div>
					<div style="width: 50%;text-align: right;float: left;">Made with <span style="text-decoration: line-through;">love</span> 1 keyboard and 2 hands.</div>
				</div>
			</div>
		</div>
	<?php } ?>
</footer>
</div>
</body>

</html>