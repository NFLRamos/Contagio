<div style="background-color: #F7F7F7;">
    <div class="container pt-5">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-5">
                <h4 class="fw-bolder"><?php _e('Insights');?></h4>
            </div>
            <div class="col-5 text-right">
                <h4 class="fw-bolder tblue"><a href="<?php
                            if (get_locale() == 'pt_PT') {
                                echo esc_url(home_url('/')) . 'blog';
                            } else if (get_locale() == 'en_GB') {
                                echo esc_url(home_url('/')) . 'the-blog';
                            } else if (get_locale() == 'fr_FR') {
                                echo esc_url(home_url('/')) . 'fr-blog';
                            }
                            ?>"><?php _e('See all');?></a></h4>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
    <div class="container mt-5 mb-5">
        <?php
        $args = array(
            'post_type' => 'post',
            //   'orderby' => 'rand',
            'posts_per_page' => 2
        );
        $contador = 1;
        $products = new WP_Query($args);
        if ($products->have_posts()) {
            while ($products->have_posts()) {
                $products->the_post();
                $thumb_id1 = get_post_thumbnail_id();
                $thumb_url_array1 = wp_get_attachment_image_src($thumb_id1, 'full');
                $thumb_url1 = $thumb_url_array1[0];
                $ver = $contador % 2;
                remove_filter('wp_trim_excerpt', 'understrap_all_excerpts_get_more_link');
        ?>
                <div class="row">
                    <?php
                    if ($ver == 1) {  ?>
                        <div class="col-12 col-xl-7 col-lg-7 premove">
                            <a href="<?php the_permalink(); ?>">
                                <img class="" src="<?php echo $thumb_url1 ?>" class="blog-thum-image">
                            </a>
                        </div>
                        <div class="col-12 col-lg-5 col-xl-5 pl-5 pr-5 pt-3" style="border:0.5px solid #c7c7c7;background-color: #ffffff;">
                            <br>
                            <span style="font-size: 18px; color: #707070;"><?php echo get_the_date(); ?></span>
                            <br><br>
                            <a class="text-decoration-none" href="<?php the_permalink(); ?>">
                                <h2 style=" color: #1D1D1D; letter-spacing: -0.8px;"><?php the_title(); ?></h2>
                            </a>
                            <br>
                            <span style="font-size: 15px; color: #1D1D1D;">
                                <?php the_excerpt(); ?>
                            </span>
                        </div>
                    <?php
                    } else {
                    ?>
                        <div class="col-12 col-lg-5 col-xl-5 pl-5 pr-5 pt-3" style="border:0.5px solid #c7c7c7;background-color: #ffffff;">
                            <br>
                            <span style="font-size: 18px; color: #707070;"><?php echo get_the_date(); ?></span>
                            <br><br>
                            <a class="text-decoration-none" href="<?php the_permalink(); ?>">
                                <h2 style=" color: #1D1D1D; letter-spacing: -0.8px;"><?php the_title(); ?></h2>
                            </a>
                            <br>
                            <span style="font-size: 15px; color: #1D1D1D;">
                                <?php the_excerpt(); ?>
                            </span>
                        </div>
                        <div class="col-12 col-xl-7 col-lg-7 premove">
                            <a href="<?php the_permalink(); ?>">
                                <img class="" src="<?php echo $thumb_url1 ?>" class="blog-thum-image">
                            </a>
                        </div>
                    <?php
                    }
                    $contador++;
                    ?>
                </div>
                <br>
        <?php
            }
        }
        ?>
    </div>
</div>