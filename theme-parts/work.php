<?php
$args = array(
  'post_type' => 'work',
  //'order' => 'ASC',
  'orderby' => 'rand',
  'posts_per_page' => '7',
  //   'tax_query' => array(
  //       array(
  //           'taxonomy' =>'types',
  //           'field' => 'slug',
  //             'terms' => 'teste',
  //             'include_children'=>true,
  //                       )
  //   )

);

$products = new WP_Query($args);

$_terms = get_terms('types');
?>
<div class="container pt-5 mt-5">
  <div class="row">
    <div class="col-1"></div>
    <div class="col-5">
      <h4 class="fw-bolder"><?php _e('Our work'); ?>.</h4>
    </div>
    <div class="col-5 text-right">
      <h4 class="fw-bolder tblue"><a href="<?php
                            if (get_locale() == 'pt_PT') {
                                echo esc_url(home_url('/')) . 'projetos';
                            } else if (get_locale() == 'en_GB') {
                                echo esc_url(home_url('/')) . 'projects/';
                            } else if (get_locale() == 'fr_FR') {
                                echo esc_url(home_url('/')) . 'projets';
                            }
                            ?>"><?php _e('See all'); ?></a></h4>
    </div>
    <div class="col-1"></div>
  </div>
</div>
<div class="container  mb-5">
  <div class="row">
    <?php
    $contador = 1;
    if ($products->have_posts()) {
      while ($products->have_posts()) {
        $products->the_post();
        $tax_contador = 0;
        foreach ($_terms as $value) {
          $tax_contador++;
        }
        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
        $thumb_url = $thumb_url_array[0];

    ?>
        <?php
        if ($contador == 1) {
        ?>
          <div class="col-12 col-sm-12 col-md-6 col-xl-8 col-lg-8 mt-3 mb-3 mosaico-work-size1">
          <a class="text-decoration-none" href="<?php echo the_permalink(); ?>">
              <div class="h-100" style="background:url(<?php echo $thumb_url ?>) 50% 0 no-repeat ;
                    background-size: cover;">
                <div class="p-4 h-100 twhite" style="display: flex; flex-direction: column-reverse; align-items: flex-end;">

                  <p class="fs-16 tdirtywhite w-100 text-decoration-none">
                    <?php if ($tax_contador > 1) {
                      $taxatual = 1; ?>
                      <?php foreach ($_terms as $value) {
                        echo $value->name;
                        if ($taxatual != $tax_contador) {
                          echo ", ";
                        } else {
                        }
                        $taxatual++;
                      } ?>
                    <?php } else {
                      foreach ($_terms as $value) {
                        $taxonomy = 'types';
                        $primary_cat_id = get_post_meta($post->ID, '_yoast_wpseo_primary_' . $taxonomy, true);
                        if ($primary_cat_id) {
                          $primary_cat = get_term($primary_cat_id, $taxonomy);
                          if (isset($primary_cat->name))
                            echo $primary_cat->name;
                        }
                        break;
                      }
                    } ?>
                  </p>
                  <h2 class="fw-400 letters-08 w-100 "><?php the_title(); ?></h2>
                </div>
              </div>
            </a>
          </div>
        <?php
        }
        ?>
        <?php
        if ($contador == 2 || $contador == 4 || $contador == 6) {
        ?>
          <div class="col-12 col-sm-12 col-md-6 col-xl-4 col-lg-4 mt-3 mb-3 mosaico-work-size2">
          <a class="text-decoration-none" href="<?php echo the_permalink(); ?>">
              <div class="h-100" style="background:url(<?php echo $thumb_url ?>) 50% 0 no-repeat ;
                    background-size: cover;">
                <div class="p-4 h-100 twhite" style="display: flex; flex-direction: column-reverse; align-items: flex-end;">

                  <p class="fs-16 tdirtywhite w-100 text-decoration-none">
                    <?php if ($tax_contador > 1) {
                      $taxatual = 1; ?>
                      <?php foreach ($_terms as $value) {
                        echo $value->name;
                        if ($taxatual != $tax_contador) {
                          echo ", ";
                        } else {
                        }
                        $taxatual++;
                      } ?>
                    <?php } else {
                      foreach ($_terms as $value) {
                        $taxonomy = 'types';
                        $primary_cat_id = get_post_meta($post->ID, '_yoast_wpseo_primary_' . $taxonomy, true);
                        if ($primary_cat_id) {
                          $primary_cat = get_term($primary_cat_id, $taxonomy);
                          if (isset($primary_cat->name))
                            echo $primary_cat->name;
                        }
                        break;
                      }
                    } ?>
                  </p>
                  <h2 class="fw-400 letters-08 w-100 "><?php the_title(); ?></h2>
                </div>
              </div>
            </a>
          </div>
        <?php
        }
        ?>
        <?php
        if ($contador == 3) {
        ?>
          <div class="col-12 col-sm-12 col-md-6 col-xl-4 col-lg-4 mt-3 mb-3 mosaico-work-size1">
          <a class="text-decoration-none" href="<?php echo the_permalink(); ?>">
              <div class="h-100" style="background:url(<?php echo $thumb_url ?>) 50% 0 no-repeat ;
                    background-size: cover;">
                <div class="p-4 h-100 twhite" style="display: flex; flex-direction: column-reverse; align-items: flex-end;">

                  <p class="fs-16 tdirtywhite w-100 text-decoration-none">
                    <?php if ($tax_contador > 1) {
                      $taxatual = 1; ?>
                      <?php foreach ($_terms as $value) {
                        echo $value->name;
                        if ($taxatual != $tax_contador) {
                          echo ", ";
                        } else {
                        }
                        $taxatual++;
                      } ?>
                    <?php } else {
                      foreach ($_terms as $value) {
                        $taxonomy = 'types';
                        $primary_cat_id = get_post_meta($post->ID, '_yoast_wpseo_primary_' . $taxonomy, true);
                        if ($primary_cat_id) {
                          $primary_cat = get_term($primary_cat_id, $taxonomy);
                          if (isset($primary_cat->name))
                            echo $primary_cat->name;
                        }
                        break;
                      }
                    } ?>
                  <h2 class="fw-400 letters-08 w-100 "><?php the_title(); ?></h2>
                </div>
              </div>
            </a>
          </div>
        <?php
        }
        ?>
        <?php
        if ($contador == 5) {
        ?>
          <div class="col-12 col-sm-12 col-md-6 col-xl-4 col-lg-4  mt-3 mb-3 mosaico-work mosaico-work-size1">
          <a class="text-decoration-none" href="<?php echo the_permalink(); ?>">
              <div class="h-100" style="background:url(<?php echo $thumb_url ?>) 50% 0 no-repeat ;
                    background-size: cover;">
                <div class="p-4 h-100 twhite" style="display: flex; flex-direction: column-reverse; align-items: flex-end;">

                  <p class="fs-16 tdirtywhite w-100 text-decoration-none">
                    <?php if ($tax_contador > 1) {
                      $taxatual = 1; ?>
                      <?php foreach ($_terms as $value) {
                        echo $value->name;
                        if ($taxatual != $tax_contador) {
                          echo ", ";
                        } else {
                        }
                        $taxatual++;
                      } ?>
                    <?php } else {
                      foreach ($_terms as $value) {
                        $taxonomy = 'types';
                        $primary_cat_id = get_post_meta($post->ID, '_yoast_wpseo_primary_' . $taxonomy, true);
                        if ($primary_cat_id) {
                          $primary_cat = get_term($primary_cat_id, $taxonomy);
                          if (isset($primary_cat->name))
                            echo $primary_cat->name;
                        }
                        break;
                      }
                    } ?>
                  <h2 class="fw-400 letters-08 w-100 "><?php the_title(); ?></h2>
                </div>
              </div>
            </a>
          </div>
        <?php
        }
        ?>
        <?php
        if ($contador == 7) {
        ?>
          <div class="col-12 col-sm-12 col-md-6 col-xl-8 col-lg-8  mt-3 mb-3 mosaico-work mosaico-work-size1">
            <a class="text-decoration-none" href="<?php echo the_permalink(); ?>">
              <div class="h-100" style="background:url(<?php echo $thumb_url ?>) 50% 0 no-repeat ;
                    background-size: cover;">
                <div class="p-4 h-100 twhite" style="display: flex; flex-direction: column-reverse; align-items: flex-end;">

                  <p class="fs-16 tdirtywhite w-100 text-decoration-none">
                    <?php if ($tax_contador > 1) {
                      $taxatual = 1; ?>
                      <?php foreach ($_terms as $value) {
                        echo $value->name;
                        if ($taxatual != $tax_contador) {
                          echo ", ";
                        } else {
                        }
                        $taxatual++;
                      } ?>
                    <?php } else {
                      foreach ($_terms as $value) {
                        $taxonomy = 'types';
                        $primary_cat_id = get_post_meta($post->ID, '_yoast_wpseo_primary_' . $taxonomy, true);
                        if ($primary_cat_id) {
                          $primary_cat = get_term($primary_cat_id, $taxonomy);
                          if (isset($primary_cat->name))
                            echo $primary_cat->name;
                        }
                        break;
                      }
                    } ?>
                  <h2 class="fw-400 letters-08 w-100 "><?php the_title(); ?></h2>
                </div>
              </div>
            </a>
          </div>
        <?php
        }
        ?>

    <?php
        $contador++;
      }
    }
    ?>
  </div>
</div>