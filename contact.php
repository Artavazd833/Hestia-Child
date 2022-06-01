<?php

/**
 * Template Name: Contact Us
 */


get_header()
?>

<?php if (has_post_thumbnail($post->ID)) :
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');

endif;
?>

<div id="primary" class=" page-header header-small" style="background-image: url(<?= $image[0] ?>)">
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

                <?php echo do_shortcode('[cta]'); ?>




                <div class="row acenter d-flex">
                    <div class="col-md-6 col-xs-12">
                        <h2> <?php the_field('contact_form_header'); ?></h2>
                        <?php the_field('contact_form_subtext'); ?>
                        <div class="form-container">
                            <?php echo do_shortcode('[contact-form-7 id="202" title="Contact form"]'); ?>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <?php the_field('contact_form_large_text'); ?>
                    </div>
                </div>



            </div>



        </div>
    </div>
</div>




<?php get_footer() ?>
</div>