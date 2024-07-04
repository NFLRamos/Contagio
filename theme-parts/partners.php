<div style="background-color: #F7F7F7;">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-11 pl-4">
                <h4 class="fw-bolder"><?php _e('Partners'); ?></h4>
            </div>
        </div>
        <br>
        <br>
        <div class="text-center row">
            <?php
            $args = array(
                'post_type' => 'partners',
                'order' => 'ASC',
                'posts_per_page' => 6,
            );
            $products = new WP_Query($args);
            if ($products->have_posts()) {
                while ($products->have_posts()) {
                    $products->the_post();
                    $post = get_post();
                    $thumb = get_the_post_thumbnail_url();
                    if ($thumb != null) {
            ?>
                        <div class="p-1 partners-box">
                            <div class="partners-inner-box">
                                <?php
                                if (!empty($thumb)) {
                                ?>
                                    <img class="partners-image" src="<?php the_post_thumbnail_url(); ?>">

                                <?php
                                } else {
                                ?>
                                    <img class="partners-image" src="<?php echo get_template_directory_uri() . "/assets/image_no.jpg" ?>">
                                <?php
                                }
                                ?>
                            </div>
                        </div>
            <?php
                    }
                }
            } ?>
        </div>
    </div>
</div>