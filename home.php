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


<div id="primary" class=" page-header header-small " style="background-image: url(<?= $image[0] ?>) ; height: 100vh;">

    <div class="wraper">

        <div class=" text-center">
            <h1 class="hestia-title "><?php the_title() ?></h1>
            <div class="">
                <div class=" text-center ">
                    <div class="garanty-wrap ">
                        <div class=" warranties">


                            <div class="garanty-item from-right ">
                                <span class="gar-img">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" fill='#fff' xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                                        <g>
                                            <g transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)">
                                                <path d="M4824.7,4999.9c-380.4-52.8-672.9-261.7-815.8-582.7l-44-103.4l-55,44c-81.4,63.8-268.3,129.7-417.8,145.1c-296.9,33-659.7-112.2-912.6-362.8c-277.1-277.1-378.2-606.9-292.5-967.6c11-55,6.6-57.2-142.9-79.2c-208.9-33-380.4-120.9-530-274.9c-206.7-208.9-349.6-562.9-351.8-862c0-272.7,131.9-580.5,316.7-734.5l81.4-66l-116.6-118.8c-316.7-316.6-367.2-796-134.1-1271c153.9-310,413.4-510.2,734.5-560.7c149.5-22,153.9-24.2,142.9-79.2c-85.8-360.6,15.4-692.7,294.7-967.6c255.1-250.7,604.7-393.6,897.2-365c156.1,15.4,347.4,81.4,431,147.3l55,44l44-103.4c114.4-257.3,334.3-450.8,615.7-538.8c202.3-63.8,549.8-63.8,752.1,0c281.5,88,501.4,281.5,615.7,538.8l44,103.4l55-44c160.5-125.3,479.4-180.3,719.1-125.3c552,129.8,972,635.5,932.4,1121.5c-8.8,85.8-19.8,175.9-26.4,200.1c-13.2,39.6,2.2,46.2,140.8,68.2c321,50.6,580.5,250.7,734.5,560.7c233.1,470.6,184.7,954.4-127.5,1264.4l-123.1,123.2l94.6,83.6c329.9,290.3,393.6,804.8,160.5,1288.6c-149.5,310.1-417.8,516.8-738.9,567.3c-138.6,22-153.9,28.6-140.8,68.2c6.6,24.2,17.6,114.4,26.4,200.1c30.8,387-222.1,793.9-633.3,1009.4c-156.2,81.4-373.8,142.9-514.6,142.9c-131.9,0-338.7-59.4-455.2-131.9l-103.4-63.8l-55,123.2c-79.2,169.3-169.3,274.9-323.2,378.2C5433.8,4969.2,5112.8,5037.3,4824.7,4999.9z M5482.2,3579.4c787.2-149.5,1429.4-642.1,1774.6-1363.4c334.2-692.7,334.2-1440.3,0-2133c-323.2-672.9-895-1136.9-1640.4-1334.8c-215.5-57.2-697.1-77-947.8-39.6C3380-1104.5,2438.8,105,2579.5,1391.4c118.7,1101.7,936.8,1994.5,2003.3,2188C4811.5,3619,5262.3,3619,5482.2,3579.4z" />
                                                <path d="M4879.7,3247.3c-358.4-46.2-587.1-114.3-840-250.7c-569.5-305.7-963.2-853.2-1073.1-1488.7C2729.1,146.7,3863.8-1075.9,5238.1-939.6C5988-862.6,6632.3-403,6946.7,278.7c136.3,292.5,175.9,486,175.9,870.8c0,285.9-8.8,369.4-50.6,525.5c-189.1,692.7-699.3,1238-1378.8,1471.1C5477.8,3218.7,5064.4,3271.5,4879.7,3247.3z M6027.6,2007.1c61.6-35.2,134.1-94.6,158.3-129.8c50.6-68.2,61.6-197.9,24.2-268.3c-13.2-22-246.3-356.2-519-741c-387-545.4-512.4-705.9-573.9-736.7c-114.3-59.4-283.7-70.4-431-28.6l-125.3,37.4l-294.7,389.2c-444.2,591.5-497,675.1-497,774.1c0,202.3,327.6,402.4,501.4,310c24.2-13.2,164.9-186.9,312.3-387c147.3-200.1,274.9-362.8,283.7-362.8c6.6,0,175.9,235.3,376,521.2c200.1,285.9,387,549.7,415.6,584.9C5759.3,2090.7,5862.6,2101.7,6027.6,2007.1z" />
                                                <path d="M2546.6-2395.3c-162.7-321-582.7-936.8-892.8-1308.4L1504.2-3884l94.6-13.2c138.5-22,587.1,26.4,941.2,99c263.9,55,318.9,59.4,332.1,35.2c11-17.6,79.2-114.3,153.9-215.5c318.9-431,747.7-870.8,789.4-804.8c26.4,37.4,334.2,972,393.6,1191.9c26.4,96.7,70.4,279.2,99,409l48.4,233.1l-123.1,63.8c-68.2,35.2-191.3,131.9-277.1,215.5l-153.9,149.5l-110-28.6c-277.1-66-648.7-11-945.6,145.1c-72.6,37.4-138.5,70.4-147.3,74.8C2590.5-2324.9,2568.5-2355.7,2546.6-2395.3z" />
                                                <path d="M7287.6-2393.1c-230.9-120.9-453-178.1-681.7-180.3c-114.3,0-250.7,11-303.4,26.4l-94.6,26.4l-158.3-149.5c-88-81.4-213.3-178.1-281.5-213.3c-142.9-74.7-138.6-28.6-30.8-486c92.4-378.2,380.4-1290.8,446.4-1409.6c39.6-68.2,362.8,248.5,714.7,699.3c90.2,118.7,184.7,244.1,206.7,281.5c28.6,50.6,52.8,66,83.6,59.4c554.1-123.2,996.1-182.5,1191.9-158.3l114.4,13.2l-169.3,206.7c-272.7,327.7-565.1,756.4-881.8,1290.8l-35.2,57.2L7287.6-2393.1z" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span class="gar-text"> <?php the_field('home_warranty_text'); ?></span>
                            </div>

                            <div class="garanty-item from-left ">
                                <span class="gar-text"> <?php the_field('home_commitmnent_text'); ?></span>
                            </div>


                        </div>


                    </div>
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
                                            <div class="field-content"><img src="<?php the_field('bottom_block1_img'); ?>"></div>
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
                                            <div class="field-content"><?php the_field('bottom_block2_img'); ?></div>
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
</div>



<?php get_footer() ?>