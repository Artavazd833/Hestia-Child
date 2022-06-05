<?php

/**
 * Template Name: About us
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
                        <h2 class="service-title"> <?php the_field('about_top_headline'); ?></h2>
                        <div class="about_top_text"> <?php the_field('about_top_text'); ?></div>


                        <div class="about-container container">
                            <?php if (have_rows('repetitive_sections')) : ?>
                                <?php while (have_rows('repetitive_sections')) : the_row(); ?>
                                    <div class="row about-item d-flex acenter jcenter flex ">

                                        <div class="col-md-6 about-content">
                                            <h3 class="about-content-title"><?php the_sub_field('content_title'); ?></h3>
                                            <div class="about-content-text"><?php the_sub_field('content_text'); ?></div>
                                        </div>
                                        <div class="col-md-6 about-image"> <img src="<?php the_sub_field('about_image'); ?>"></div>
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




<?php get_footer() ?>
</div>