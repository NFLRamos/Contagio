<?php

/**
 * Template Name: Página dos projetos
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
<div class="container mt-5 mb-5">
    <div class="row">
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

        ?>
                <?php
                $thumb_id_ = get_post_thumbnail_id();
                $thumb_url_array_ = wp_get_attachment_image_src($thumb_id_, 'full');
                $thumb_url_ = $thumb_url_array_[0];
                ?>
                <div class="col-12 col-md-6 mb-4">
                    <a class="text-decoration-none" href="<?php the_permalink(); ?>">
                        <div class="size-work" style="background: url(<?php echo $thumb_url_ ?>) 50% 0 no-repeat ;
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
                        </div>
                    </a>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>

<?php
get_footer();
?>