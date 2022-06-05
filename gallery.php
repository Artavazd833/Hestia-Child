<?php

/**
 * Template Name: Gallery 
 */


get_header();

if (has_post_thumbnail($post->ID)) :
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');

endif;
?>

<div id="primary" class=" page-header header-small" style="background-image: url(<?= $image[0] ?>);">
    <div class="container">

        <div class="col-md-10 col-md-offset-1 text-center">
            <h1 class="hestia-title "><?php the_title() ?></h1>
        </div>
    </div>
</div>

<div class="main ">
    <div class="blog-post ">
        <div class="contatct-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h2 class="gallery-title"> <?php the_field('top_section_title'); ?></h2>
                        <div class="about_top_text"> <?php the_field('top_section_text'); ?></div>
                    </div>
                </div>
                <div class="galery-container">
                    <?php the_field('add_gallery_here'); ?>
                </div>

            </div>
        </div>
    </div>

    <?php get_footer() ?>
</div>