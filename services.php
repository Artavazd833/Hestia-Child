<?php

/**
 * Template Name: Services
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




                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <h2 class="service-title"> <?php the_field('services_top_headline'); ?></h2>
                        <div> <?php the_field('services_top_text'); ?></div>
                        
                        <div class="tab-of-content">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <?php if (have_rows('service_item')) : ?>
                                    <?php while (have_rows('service_item')) : the_row(); ?>

                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active"><?php the_sub_field('service_name'); ?></button>
                                        </li>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>

                        </div>


                        <div class="sevices">
                            <div class="services-wrap  view-article-boxes view-id-article_boxes">

                                <div class="view-content">

                                    <?php if (have_rows('service_item')) : ?>
                                        <?php while (have_rows('service_item')) : the_row(); ?>

                                            <div class="services-item">

                                                <div class="views-row row-revers">

                                                    <div class="views-field views-field-field-image">
                                                        <div class="field-content"><img src="<?php the_sub_field('service_image'); ?>"></div>
                                                    </div>

                                                    <div class="text-wrapper views-fieldset">

                                                        <div class="views-field views-field-title">
                                                            <span class="field-content"><?php the_sub_field('service_name'); ?></span>
                                                        </div>

                                                    </div>

                                                </div>

                                                <div class="container-fluid services-text">
                                                    <?php the_sub_field('service_content'); ?>
                                                </div>

                                            </div>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>

                            </div>

                        </div>
                    </div>

                 
                </div>



            </div>



        </div>
    </div>
</div>




<?php get_footer() ?>
</div>