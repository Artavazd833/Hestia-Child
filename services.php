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




                <div class="row acenter d-flex">
                    <div class="col-md-12 col-xs-12">
                        <h2 class="service-title"> Learn About Our Services</h2>
                        <p  class="service-sub-text" > Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
                        <div class="tab-of-content">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Service 1</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Service 2</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Service 3</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Service 4</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Service 5</button>
                                </li>
                            </ul>
                           
                        </div>


                        <div class="sevices">
                            <div class="services-wrap  view-article-boxes view-id-article_boxes">

                                <div class="view-content">
                                    <div class="services-item">

                                        <div class="views-row row-revers">

                                            <div class="views-field views-field-field-image">
                                                <div class="field-content"><img src="/wp-content/uploads/2022/05/IMG-7765-1.jpg"></div>
                                            </div>

                                            <div class="text-wrapper views-fieldset">

                                                <div class="views-field views-field-title">
                                                    <span class="field-content"> Service-1  What is Lorem Ipsum?</span>
                                                </div>

                                            </div>




                                        </div>
                                        <div class="container-fluid services-text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also the
                                            leap into electronic typesetting, remaining essentially unchanged.
                                            It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>

                                    </div>


                                    <div class="services-item">

                                        <div class="views-row row-revers">

                                            <div class="views-field views-field-field-image">
                                                <div class="field-content"><img src="/wp-content/uploads/2022/05/bottom2-1536x900-1.jpg"></div>
                                            </div>
                                            <div class="text-wrapper views-fieldset">

                                                <div class="views-field views-field-title">
                                                    <span class="field-content">Service-2  What is Lorem Ipsum?</span>
                                                </div>

                                            </div>




                                        </div>
                                        <div class="container-fluid services-text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also the
                                            leap into electronic typesetting, remaining essentially unchanged.
                                            It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>

                                    </div>
                                    <div class="services-item">

                                        <div class="views-row row-revers">

                                            <div class="views-field views-field-field-image">
                                                <div class="field-content"><img src="/wp-content/uploads/2022/05/IMG-7760-1.jpg"></div>
                                            </div>
                                            <div class="text-wrapper views-fieldset">

                                                <div class="views-field views-field-title">
                                                    <span class="field-content">Service-3  What is Lorem Ipsum?</span>
                                                </div>

                                            </div>




                                        </div>
                                        <div class="container-fluid services-text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                            when an unknown printer took a galley of type and scrambled it to make a
                                            type specimen book. It has survived not only five centuries, but also the
                                            leap into electronic typesetting, remaining essentially unchanged.
                                            It was popularised in the 1960s with the release of Letraset sheets
                                            containing Lorem Ipsum passages, and more recently with desktop publishing
                                            software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12">
                        <?php the_field('contact_form_large_text'); ?>
                    </div>
                </div>



            </div>



        </div>
    </div>
</div>




<?php get_footer() ?>
</div>