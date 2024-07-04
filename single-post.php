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
            <img class="size-thumbnail-img" src="<?php echo get_template_directory_uri() . "/assets/blog-image.png"; ?>">
        </div>
    </div>
    <div class="container">
        <div class="primary-img-back">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 pl-5 pt-5 pb-5">
                <h1 class="text-capitalize fw-400 letters-1">
                    <?php the_title() ?>
                </h1>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <?php if (!empty(the_content())) {
            the_content();
        } ?>
    </div> <!-- fim container -->

    <div class="back-f7f7f7">
        <div class="container pt-5 pb-5">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-5">
                    <h4 class="fw-bolder"><?php _e('The agency'); ?></h4>
                </div>
                <div class="col-5">
                    <h4 class="fw-bolder text-right tblue"><a class="text-decoration-none" href="<?php
                            if (get_locale() == 'pt_PT') {
                                echo esc_url(home_url('/')) . 'agencia';
                            } else if (get_locale() == 'en_GB') {
                                echo esc_url(home_url('/')) . 'agency/';
                            } else if (get_locale() == 'fr_FR') {
                                echo esc_url(home_url('/')) . 'agence/';
                            }
                            ?>"><?php _e('Ver agência'); ?></a></h4>
                </div>
                <div class="col-1"></div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-12 col-lg-7">
                    <div class="pr-5">
                        <h2 class="letter-08 fw-400">
                        <?php _e('Intelligent strategies that speak to today’s Consumer'); ?>
                        </h2>
                    </div>
                    <br>
                    <div class="fs-16 text-justify">
                    <?php _e('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                        et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus es.'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5">
                <h4 class="fw-bolder"><?php _e('Todos os artigos'); ?></h4>
            </div>
            <div class="col-5">
                <h4 class="fw-bolder text-right tblue">
                    <a class="text-decoration-none" href="<?php
                            if (get_locale() == 'pt_PT') {
                                echo esc_url(home_url('/')) . 'blog';
                            } else if (get_locale() == 'en_GB') {
                                echo esc_url(home_url('/')) . 'the-blog';
                            } else if (get_locale() == 'fr_FR') {
                                echo esc_url(home_url('/')) . 'fr-blog';
                            }
                            ?>"><?php _e('See all'); ?></a>
                </h4>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <div class="mr-5 ml-5 mb-5">
        <div class="slider">
            <?php
            $args = array(
                'post_type' => 'post',
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
                            <div class="pr-3 pl-3 h-100">
                                <img src="<?php echo $thumb_url_ ?> " class="blog-slick-image">
                                <div class="mt-4 mb-3">
                                    <h4 class="fw-400 tcolor-1d"><?php the_title(); ?></h4>
                                </div>
                                <div class="mt-3 mb-3">
                                    <p class="fs-16 tcolor-1d opacity-8"><?php the_excerpt(); ?></p>
                                </div>
                                <div class="mt-3 mb-3" id="linkblogsingle">
                                    <a class="tblue text-decoration-none fs-18" href="<?php the_permalink();  ?>"><?php _e('See the article'); ?></a>
                                    <p class="bottomborderlink">
                                    </p>
                                </div>

                            </div>
                        </div>
            <?php
                    } else {
                    }
                }
            }
            ?>
        </div>

        <script type="text/JavaScript">
            jQuery(document).ready(function($) {
                $('.slider').slick({
                    infinite: true,
                    slidesToShow: 3,
                    autoplay: true,
                    autoplaySpeed: 4000,
                    centerMode: true,
                    arrows:false,
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
    </div>
<?php }
get_footer(); ?>