<footer id="footer">
    <div class="info flex jcenter acenter">
        <div class="footer_title jcenter">
            <?php the_field('footer_contacts_title', 'option') ?>
        </div>
        <div>
            <ul>
                <li class="less">
                    <span><?php the_field('footer_addres_line', 'option') ?> </span>
                </li>
                <li class="less">
                    <b><?php the_field('footer_phon_tex_spain', 'option') ?> </b>
                    <a href="tel:<?php the_field('footer_phone_link', 'option') ?>"><?php the_field('footer_phone_link_nums', 'option') ?></a>

                </li>
                <li>
                    <b><?php the_field('footer_email_text', 'option') ?></b>
                    <a href="mailto:<?php the_field('footer_email_link', 'option') ?>"><?php the_field('footer_email_link', 'option') ?></a>

                </li>
            </ul>
        </div>
    </div>
    <div class="footer_icons flex jcenter acenter midside">
        <ul class="social_media flex jbetween">
            <?php if (have_rows('footer_social_links', 'options')) : ?>
                <?php while (have_rows('footer_social_links', 'options')) : the_row(); ?>

                    <li><a target="_blank" href="<?php the_sub_field('social_media_link', 'option'); ?>"><img src="<?php the_sub_field('social_icon', 'option'); ?>"></a></li>

                <?php endwhile; ?>
            <?php endif; ?>

        </ul>

    </div>
    <div class=' copyright flex acenter  '>
        
            <div class="copyrigt-text"> <?php the_field('copyright', 'option') ?> <?php echo date('Y') ?> </div>

            <div class="privacy-link"><a href="<?php the_field('privacy_page_link', 'option') ?>"><?php the_field('privacy_page_title', 'option') ?></a></div>
       

    </div>

</footer>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>