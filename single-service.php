<?php

/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */


// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>
<?php while (have_posts()) {
	the_post();
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
	$thumb_url = $thumb_url_array[0];
	$pid = get_post();
?>
	<div class="size-thumbnail">
		<div class="h-100">
			<img class="size-thumbnail-img" src="<?php echo $thumb_url ?>">
		</div>
	</div>
	<div class="container">
		<div class="primary-img-back">
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 pl-5 pt-5 pb-5">
				<h1 class="text-capitalize fw-400 letters-1">
					<span class="tblue"><?php the_title() ?>.</span>
					<?php _e('Contagio is an agency in Aveiro based Web Design'); ?>
				</h1>
				<h6 class="fw-400"><?php echo the_field("label1") . ", ";
									echo the_field("label2") . ", ";
									echo the_field("label3"); ?></h6>
			</div>
		</div>
	</div>
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-1 col-xl-1"></div>
			<div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 pl-5">
				<h2 class="fw-400 letters-08">
					<?php if (get_field("text-title")) {
						the_field("text-title");
					} ?>
				</h2>
				<div class="fs-16 text-justify">
					<p><?php if (!empty(the_content())) {
							the_content();
						} ?></p>
				</div>
			</div>

			<div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 pl-5 pr-5">
				<h4 class="fw-bolder"><?php _e('Our Work'); ?></h4>
				<p class="fs-16"><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-9 pt-5 ">
				<?php
				$imagem = get_field("imagem");
				if (!empty($imagem)) {
				?>
					<img src="<?php echo $imagem['url']; ?>" alt="<?php echo $imagem['alt']; ?>" class="service-display-image">
				<?php
				}
				?>

			</div>
			<div class="col-3"></div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-1"></div>
			<div class="col-11 col-lg-8 pt-5 pl-5 pb-5">
				<h2 style="font-weight: 400; letter-spacing: -0.8px;"><?php _e('About us'); ?></h2>
				<div style="font-size: 16px; text-align:justify;">
					<p><?php if (get_field("text_about_us")) {
							the_field("text_about_us");
						} ?></p>
				</div>
			</div>
			<div class="col-1 col-lg-3"></div>
		</div>
		<div class="row">
			<div class="col-12 col-lg-1"></div>
			<div class="col-12 col-md-6 col-lg-5 pt-5 pl-5">
				<h4 style="font-weight: bolder;"><?php _e('Our Work'); ?></h4>
				<div style="font-size: 16px; text-align:justify;">
					<p><?php _e('Lorem ipsum dolor sit amet, consetetur sadipscing elitr'); ?></p>
					<br>
					<hr style="border-color:black;">
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-5 pt-5 pl-5">
				<h4 style="font-weight: bolder;"><?php _e('Our Work'); ?></h4>
				<div style="font-size: 16px; text-align:justify;">
					<p><?php _e('Lorem ipsum dolor sit amet, consetetur sadipscing elitr'); ?></p>
					<br>
					<hr style="border-color:black;">
				</div>
			</div>
			<div class="col-12 col-lg-1"></div>
		</div>
		<div class="row">
			<div class="col12 col-lg-1"></div>
			<div class="col-12 col-md-6 col-lg-5 pt-5 pb-5 pl-5">
				<h4 style="font-weight: bolder;"><?php _e('Our Work'); ?></h4>
				<div style="font-size: 16px; text-align:justify;">
					<p><?php _e('Lorem ipsum dolor sit amet, consetetur sadipscing elitr'); ?></p>
					<br>
					<hr style="border-color:black;">
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg-5 pt-5 pb-5 pl-5">
				<h4 style="font-weight: bolder;"><?php _e('Our Work'); ?></h4>
				<div style="font-size: 16px; text-align:justify;">
					<p><?php _e('Lorem ipsum dolor sit amet, consetetur sadipscing elitr'); ?></p>
					<br>
					<hr style="border-color:black;">
				</div>
			</div>
			<div class="col-12 col-lg-1"></div>
		</div>

		<div class="row">
			<div class="col-2"></div>
			<div class="col-8 pt-5 pl-5">
				<span style="font-size: 26px; font-weight:bold;"><?php _e('Other Services'); ?></span>
			</div>
			<div class="col-3"></div>

		</div>
		<br>
		<div class="slider-serviços">
			<?php
			$args = array(
				'post_type' => 'service',
				'orderby' => 'rand',
			);

			$products = new WP_Query($args);
			if ($products->have_posts()) {
				while ($products->have_posts()) {
					$products->the_post();
					$pid_active = get_post();
					$thumb_id_ = get_post_thumbnail_id();
					$thumb_url_array_ = wp_get_attachment_image_src($thumb_id_, 'full');
					$thumb_url_ = $thumb_url_array_[0];
					if ($pid_active != $pid) {
			?>
						<div>
							<a href="<?php the_permalink(); ?>">
								<div class="pl-1 pr-1 position-relative">
									<img src="<?php echo $thumb_url_ ?>" class="service-slick-image">

									<div class="d-flex justify-content-center align-items-center twhite service-slick-text">
										<h2 class="fw-400 text-capitalize">
											<?php echo the_title(); ?>
										</h2>
									</div>
								</div>
							</a>
						</div>
			<?php
					} else {
					}
				}
			}
			wp_reset_postdata();
			?>
		</div>


		<script>
			jQuery(document).ready(function($) {
				$('.slider-serviços').slick({
					infinite: true,
					slidesToShow: 3,
					autoplay: true,
					autoplaySpeed: 4000,
					centerMode: true,
					arrows: false,
					responsive: [{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							centerMode: true,
						}
					}, {
						breakpoint: 1200,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
							centerMode: true,
						}
					}, ]
				});
			});
		</script>


	</div> <!-- fim container -->

<?php }
get_footer(); ?>