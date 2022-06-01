<div class="d-flex acenter jcenter cta-wrap ">

    <div id="map">

        <div class="row-fluid">

            <h3><?php the_field('cta_headline', 'option') ?></h3>
            <p><?php the_field('cta_text_par', 'option') ?> </p>

            <p class="rtecenter">
                <a class="cta_button btn" href="<?php the_field('cta_link', 'option') ?>"><?php the_field('cta_text', 'option') ?></a>
            </p>
            
        </div>
    </div>
</div>