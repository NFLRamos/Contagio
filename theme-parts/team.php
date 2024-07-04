<div class="container pb-5 pt-5">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-11 pl-4">
            <h4 class="fw-bolder"><?php _e('The team'); ?></h4>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
        <?php
        $args = array(
            'post_type' => 'team',
            'order' => 'ASC',
            'posts_per_page' => 6,
        );
        $products = new WP_Query($args);
        if ($products->have_posts()) {
            while ($products->have_posts()) {
                $products->the_post();
                $thumb = get_the_post_thumbnail_url();
                if( $thumb != null){
        ?>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?php the_post_thumbnail_url(); ?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <h4 class="card-title fw-bolder text-left"><?php the_title(); ?></h4>
                                </div>
                                <div class="col-6">
                                    <h4 class="card-title fw-bolder text-right">
                                        <?php if (get_field("funcao")) {
                                            echo the_field("funcao");
                                        } ?>
                                    </h4>
                                </div>
                            </div>

                            <p class="card-text">
                                <?php
                                remove_filter( 'the_content', 'wpautop' );
                                remove_filter( 'the_excerpt', 'wpautop' );

                                echo the_content(); 
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

        <?php
        }
            }
        } ?>
    </div>
</div>