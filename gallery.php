<?php

/**
 * Template Name: Gallery 
 */


get_header()
?>
<div id="primary" class=" page-header header-small" style="background-image: url(<?= the_field("top_background_image") ?>);">
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
                <div><?= the_field('images') ?></div>

            </div>
        </div>
    </div>




    <?php get_footer() ?>
</div>