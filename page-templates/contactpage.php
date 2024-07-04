<?php

/**
 * Template Name: Página dos contactos
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
?>

<div class="container">

    <?php while (have_posts()) {
        the_post(); ?>

        <?php get_template_part('loop-templates/content', 'page'); ?>



    <?php } // end of the loop.
    ?>

</div>
<?php get_footer(); ?>