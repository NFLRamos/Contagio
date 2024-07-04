<?php

/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

use function PHPSTORM_META\map;

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');

?>
<?php while (have_posts()) {
    the_post();
    $_terms = wp_get_post_terms($post->ID, 'types');
    $tax_contador = 0;
    foreach ($_terms as $value) {
        $tax_contador++;
    }
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
    $thumb_url = $thumb_url_array[0];
?>
    <div class="size-thumbnail">
        <div class="h-100">
            <img class="size-thumbnail-img" src="<?php echo $thumb_url ?>">
        </div>
    </div>
    <div class="container">
        <div class="secondary-img-back">
            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 pl-5 pt-5 pb-5">
                <h1 class="text-capitalize fw-400 letters-1">
                    <?php the_title(); ?>. <?php _e('Contagio is an agency in Aveiro based'); ?> <span><?php foreach ($_terms as $value) {
                                                                                            $taxonomy = 'types';
                                                                                            $primary_cat_id = get_post_meta($post->ID, '_yoast_wpseo_primary_' . $taxonomy, true);
                                                                                            if ($primary_cat_id) {
                                                                                                $primary_cat = get_term($primary_cat_id, $taxonomy);
                                                                                                if (isset($primary_cat->name))
                                                                                                    echo $primary_cat->name;
                                                                                            }
                                                                                            break;
                                                                                        }
                                                                                        ?></span>
                </h1>
                <h6 class="fw-400"><?php if ($tax_contador > 1) {
                                        $taxatual = 1; ?>
                        <p><?php foreach ($_terms as $value) {
                                            echo $value->name;
                                            if ($taxatual != $tax_contador) {
                                                echo ", ";
                                            } else {
                                            }
                                            $taxatual++;
                                        } ?></p>
                    <?php } ?>
                </h6>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-8 pl-5 pr-5">
                <?php
                $logo = get_field('logo');

                if (!empty($logo)) { ?>
                    <div class="work-logo">
                        <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>" class="work-logo-set" />
                    </div>
                <?php
                } else {
                ?>
                    <p style="font-weight: 600;font-size: 18px;letter-spacing: -1px;">LOGO</p>
                <?php
                }
                ?>
                <?php if (get_field('content_title')) { ?>
                    <h2>
                        <?php the_field('content_title') ?>
                    </h2>
                <?php } ?>

                <span class="text-justify">
                    <?php the_content(); ?>
                </span>
            </div>
            <div class="col-12 col-md-4 pr-3 pl-5">
                <h5><?php _e('Our work'); ?></h5>
                <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?></p>
                <h5><?php _e('Our work'); ?></h5>
                <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?></p>
                <h5><?php _e('Our work'); ?></h5>
                <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit.'); ?></p>
            </div>
        </div>
    </div>
    <div>

        <?php
        $imagem1 = get_field('imagem1');
        $imagem2 = get_field('imagem2');
        $imagem3 = get_field('imagem3');

        if (!empty($imagem1)) { ?>
            <div class="work-image-size-set">
                <img src="<?php echo esc_url($imagem1['url']); ?>" alt="<?php echo esc_attr($imagem1['alt']); ?>" class="work-image-set" />
            </div>
        <?php
        }
        if (!empty($imagem2)) { ?>
            <div class="work-image-size-set">
                <img src="<?php echo esc_url($imagem2['url']); ?>" alt="<?php echo esc_attr($imagem2['alt']); ?>" class="work-image-set" />
            </div>
        <?php
        }
        if (!empty($imagem3)) { ?>
            <div class="work-image-size-set">
                <img src="<?php echo esc_url($imagem3['url']); ?>" alt="<?php echo esc_attr($imagem3['alt']); ?>" class="work-image-set" />
            </div>
        <?php
        }
        ?>

    </div>

    <div class="text-center mt-5 mb-5">

        <h4><?php _e('Feedback from the client'); ?></h4>
        <div class="mt-4">
            <?php $client = get_field('client_image');
            if (!empty($client)) { ?>
                    <img src="<?php echo esc_url($client['url']); ?>" alt="<?php echo esc_attr($client['alt']); ?>" class="work-client-image" />
                
            <?php
            } ?>
        </div>
        <div class="container mt-3">
            <div class="row">
                <div class="col-2 col-md-4"></div>
                <div class="col-8 col-md-4 font-weight-light">
                    <p><?php the_field('client_label') ?></p>
                </div>
                <div class="col-2 col-md-4"></div>
            </div>
        </div>
    </div>

<?php }
get_footer();
?>