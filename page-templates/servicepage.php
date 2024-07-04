<?php

/**
 * Template Name: Página dos serviços
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>
<?php while (have_posts()) {
    the_post();
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
    $thumb_url = $thumb_url_array[0];
    $pid = get_post();
}
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
            <h6 class="fw-400"><?php _e('Web development, Web design, UX/UI & Branding'); ?></h6>
        </div>
    </div>
</div>
<div class="container mb-5 pb-5">
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'service',
            'orderby' => 'rand',
        );

        $products = new WP_Query($args);
        if ($products->have_posts()) {
            while ($products->have_posts()) {
                $products->the_post();

        ?>
                <?php
                $thumb_id_ = get_post_thumbnail_id();
                $thumb_url_array_ = wp_get_attachment_image_src($thumb_id_, 'full');
                $thumb_url_ = $thumb_url_array_[0];
                ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-3 mb-2">
                    <div class="conteudo" style="background: url(<?php echo $thumb_url_ ?>) 50% 0 no-repeat ; height: 240px;
                    background-size: cover;">

                        <!-- <img src="<?php echo $thumb_url ?>"> -->
                        <div class="caixa_titulo d-flex justify-content-center">
                            <div class="caixa_hover_main">
                                <p style="font-size: 30px;"><?php the_field('title') ?></p>

                            </div>
                            <div class="caixa_hover">

                                <p>
                                    <?php the_field('label1') ?><br />
                                    <?php the_field('label2') ?><br />
                                    <?php the_field('label3') ?>
                                </p>
                                <br />
                                <a style="color: white; font-size: 22px; font-weight: bold;" href="<?php the_permalink(); ?>"><?php _e('See all'); ?></a>

                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-5">
            <h4 class="fw-bolder"><?php _e('Our Work'); ?></h4>
        </div>
        <div class="col-5 text-right">
            <h4 class="fw-bolder tblue"><a href="../wordpress/projetos"><?php _e('See all'); ?></a></h4>
        </div>
        <div class="col-1"></div>
    </div>
</div>
<div class="mr-5 ml-5">
    <div class="services">
        <?php
        $args = array(
            'post_type' => 'work',
            'orderby' => 'rand',
        );

        $products = new WP_Query($args);
        if ($products->have_posts()) {
            while ($products->have_posts()) {
                $products->the_post();
                $_terms = get_terms('types');
                $pid_active = get_post();
                $thumb_id_ = get_post_thumbnail_id();
                $thumb_url_array_ = wp_get_attachment_image_src($thumb_id_, 'full');
                $thumb_url_ = $thumb_url_array_[0];
                if ($pid_active != $pid) {
        ?>
                    <div>
                        <div class="pl-2 pr-2">
                            <a class="text-decoration-none" href="<?php the_permalink(); ?>">
                                <div class="img-slick-size" style="background: url(<?php echo $thumb_url_ ?>) 50% 0 no-repeat;
                    background-size: cover;">
                                    <div class="p-5 h-100 twhite" style="display: flex; flex-direction: column-reverse; align-items: flex-end;">

                                        <p class="fs-16 tdirtywhite w-100 text-decoration-none">
                                            <?php foreach ($_terms as $value) {
                                                $taxonomy = 'types';
                                                $primary_cat_id = get_post_meta($post->ID, '_yoast_wpseo_primary_' . $taxonomy, true);
                                                if ($primary_cat_id) {
                                                    $primary_cat = get_term($primary_cat_id, $taxonomy);
                                                    if (isset($primary_cat->name))
                                                        echo $primary_cat->name;
                                                }
                                                break;
                                            } ?>
                                        </p>
                                        <h2 class="fw-400 letters-08 w-100 "><?php the_title(); ?></h2>
                                    </div>
                            </a>
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


<script>
    jQuery(document).ready(function($) {
        $('.services').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
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
            },
            ]
        });
    });
</script>
</div>
<br>
<br>
<br>
<br>
<?php
get_footer();
?>