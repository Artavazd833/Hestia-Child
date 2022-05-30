<?php

/**
 * Template Name: Home
 */


get_header()
?>

<?php if (has_post_thumbnail($post->ID)) :
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');

endif;
?>

<div id="primary" class=" page-header header-small" style="background-image: url(<?= $image[0] ?>) ; height: 100vh;">
    <div class="container">

        <div class="col-md-10 col-md-offset-1 text-center">
            <h1 class="hestia-title "><?php the_title() ?></h1>
            <div class="row hestia-big-title-content">
                <div class="big-title-slider-content text-center col-sm-8 col-sm-offset-2 ">
                    <span class="sub-title"><?php the_field('home_banner_text'); ?></span>
                    <div class="buttons">



                        <?php
                        $link = get_field('home_banner_link');

                        if ($link) :

                            $link_url = $link['url'];

                            $link_title = $link['title'];

                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                            <a class="btn btn-primary" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="main ">
    <div class="blog-post ">
        <main class="contatct-main">


            <div class="main-wrapper">
                <div id="main" role="main">
                    <div id="content" class="column">
                        <a id="main-content"></a>

                        <h2 class="page__title title" id="page-title">
                            <?php the_field('home_mian_section_title'); ?>

                        </h2>




                        <article class="node-659 node node-frontpage view-mode-full clearfix">


                            <div class="field field-name-body field-type-text-with-summary field-label-hidden">
                                <div class="field-items">
                                    <div class="field-item even" style="margin-top:30px ;">

                                        <?php the_field('home_mian_section_paragraph'); ?>

                                    </div>
                                </div>
                            </div>


                        </article>
                    </div>


                </div>
            </div>

            <div class="full-width-wrapper">
                <div class="region region-fullwidth">
                    <div id="block-views-liftups-field-liftups-block" class="block block-views custom first odd block-1 custom article-liftups-block">

                        <div class="content no-block-title">
                            <div class="view view-liftups view-id-liftups view-display-id-field_liftups_block article-liftups field-liftups-view ">



                                <div class="view-content">

                                    <?php if (have_rows('services_blocks')) : ?>
                                        <?php while (have_rows('services_blocks')) : the_row(); ?>

                                            <div class="views-row views-row-1 views-row-odd views-row-first">

                                                <div class="views-field views-field-field-image">
                                                    <div class="field-content"><img src="<?php the_sub_field('block_image'); ?>" width="420" height="270" alt="Cortinas de cristal para terrazas" style="display: block;"></div>
                                                </div>

                                                <div class="views-field views-field-field-link">
                                                    <h3 class="field-content">
                                                        <?php
                                                        $link = get_sub_field('block_title_link');

                                                        if ($link) :

                                                            $link_url = $link['url'];

                                                            $link_title = $link['title'];

                                                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

                                                        <?php endif; ?>
                                                    </h3>
                                                </div>

                                                <div class="views-field views-field-body">
                                                    <div class="field-content">
                                                        <?php the_sub_field('block_text'); ?>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php endwhile; ?>
                                    <?php endif; ?>






                                </div>






                            </div>
                        </div>
                    </div><!-- /.block -->
                    <div id="block-views-banner-block-banner" class="block block-views custom last even block-2 custom banner-block">

                        <div class="content no-block-title">
                            <div class="view view-banner view-id-banner view-display-id-block_banner banner">



                                <div class="view-content">
                                    <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">
                                        <div class="banner-inner-wrapper " style="background-image: url(<?= the_field('after_bg_image');  ?>);">

                                            <div class="text-wrapper views-fieldset" data-module="views_fieldsets">
                                                <div class="views-field views-field-field-banner-text">
                                                    <div class="field-content">
                                                        <p><?php the_field('after_blocks_title'); ?></p>

                                                    </div>
                                                </div>
                                                <div class="views-field views-field-field-banner-links">
                                                    <div class="field-content">

                                                        <?php
                                                        $link = get_field('after_blocks_link');

                                                        if ($link) :

                                                            $link_url = $link['url'];

                                                            $link_title = $link['title'];

                                                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>






                            </div>
                        </div>
                    </div><!-- /.block -->
                </div>
            </div>

            <div class="full-width-colored-wrapper">
                <div class="region region-fullwidth-colored">
                    <div class="block block-views custom first odd block-1 custom customer-story-block">

                        <div class="content no-block-title">
                            <div id='slider-costumer' class="view view-customer-stories view-id-customer_stories view-display-id-block_customer_story customer-story random view-dom-id-aa3d64fff8ac6dacab6742e48b69f9f9">


                                <?php if (have_rows('customers_testimonial_slider')) : ?>
                                    <?php while (have_rows('customers_testimonial_slider')) : the_row(); ?>

                                        <div class="view-content">
                                            <div class="views-row views-row-1 views-row-odd views-row-first views-row-last">

                                                <div class="inner-wrapper views-fieldset" data-module="views_fieldsets">
                                                    <div class="text-wrapper views-fieldset" data-module="views_fieldsets">

                                                        <blockquote> <?php the_sub_field('customer_text'); ?></blockquote>

                                                        <div class="quote-author"> <?php the_sub_field('custome_name'); ?></div>
                                                    </div>

                                                    <div class="image-wrapper views-fieldset" data-module="views_fieldsets">
                                                        <div class="views-field views-field-field-image">
                                                            <div class="field-content circle">
                                                                <img src="<?php the_sub_field('customer_image'); ?>" width="190" height="190" style="display: inline;">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>



                                    <?php endwhile; ?>
                                <?php endif; ?>






                            </div>
                        </div>
                    </div><!-- /.block -->
                    <div class="block block-views even">


                        <div class="content">
                            <div class="view view-article-boxes view-id-article_boxes view-display-id-block_article_boxes ">



                                <div class="view-content">
                                    <div class="views-row views-row-1 views-row-odd views-row-first">

                                        <div class="views-field views-field-field-image">
                                            <div class="field-content"><img src="<?php the_field('bottom_block1_img'); ?>" ></div>
                                        </div>
                                        <div class="text-wrapper views-fieldset" data-module="views_fieldsets">
                                            <div class="views-field views-field-title"><span class="field-content"><?php the_field('bottom_block1_title'); ?></span></div>
                                            <div class="views-field views-field-field-link">
                                                <div class="field-content">
                                                  
                                                    <?php
                                                        $link = get_field('bottom_block1_link');

                                                        if ($link) :

                                                            $link_url = $link['url'];

                                                            $link_title = $link['title'];

                                                            $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

                                                        <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="views-row views-row-2 views-row-even views-row-last">

                                        <div class="views-field views-field-field-image">
                                            <div class="field-content"><img src="<?php the_field('bottom_block2_img'); ?>" ></div>
                                        </div>
                                        <div class="text-wrapper views-fieldset" data-module="views_fieldsets">
                                            <div class="views-field views-field-title"><span class="field-content"><?php the_field('bottom_block2_title'); ?></span></div>
                                            <div class="views-field views-field-field-link">
                                            <div class="field-content">
                                                  
                                                  <?php
                                                      $link = get_field('bottom_block2_link');

                                                      if ($link) :

                                                          $link_url = $link['url'];

                                                          $link_title = $link['title'];

                                                          $link_target = $link['target'] ? $link['target'] : '_self'; ?>

                                                          <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>

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
            </div>





        </main>
    </div>




    <?php get_footer() ?>
</div>