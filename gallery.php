<?php

/**
 * Template Name: Gallery 
 */


get_header();
	
 if (has_post_thumbnail($post->ID)) :
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');

endif;
?>
?>
<div id="primary" class=" page-header header-small"  style="background-image: url(<?= $image[0] ?>);">
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
				<?php echo do_shortcode('[ngg src="galleries" ids="1" display="basic_thumbnail" thumbnail_crop="0"]'); ?>
			
            </div>
        </div>
    </div>
	
	

    <?php get_footer() ?>
</div>