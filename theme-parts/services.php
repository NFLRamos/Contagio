<br>
<br>
<div class="container">
  <div class="row">
    <div class="col-1"></div>
    <div class="col-11">
      <h4 class="fw-bolder"><?php _e('Our services'); ?>.</h4>
      </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <?php
    $args = array(
      'post_type' => 'service',
      'orderby' => 'rand',
      'posts_per_page' => 6
    );

    $products = new WP_Query($args);
    if ($products->have_posts()) {
      while ($products->have_posts()) {
        $products->the_post();

    ?>
    <?php
              $thumb_id = get_post_thumbnail_id();
              $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'full');
              $thumb_url = $thumb_url_array[0];
            ?>
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4  mt-3 mb-2">
          <div class="conteudo" style="background: url(<?php echo $thumb_url ?>) 50% 0 no-repeat ; height: 240px;
                    background-size: cover;">
            
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
                <a style="color: white; font-size: 22px; font-weight: bold;" href="<?php the_permalink();?>"><?php _e('See all'); ?></a>

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