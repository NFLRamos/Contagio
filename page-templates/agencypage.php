<?php

/**
 * Template Name: Página Agencia
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
            <h1 class="text-capitalize fw-400 letters-1" style="color: black; letter-spacing: -1px;font-weight: 400;">
                <span class="tblue"><?php the_title() ?>.</span> <?php _e('Contagio is an agency in Aveiro based Web Design'); ?>
            </h1>
            <h6 class="fw-400"><?php _e('Web development, Web design, UX/UI & Branding'); ?></h6>
        </div>
    </div>
</div>
<div class="container pt-5 pb-5">

    <?php the_content(); ?>

</div>

<?php include(get_template_directory() . "/theme-parts/team.php"); ?>
<?php include(get_template_directory() . "/theme-parts/partners.php"); ?>
<?php
get_footer();
?>