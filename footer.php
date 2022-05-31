<footer id="footer">
    <div class="info flex jcenter acenter">
        <div class="footer_title jcenter">
            Contact info
        </div>
        <div>
            <ul>
                <li class="less">

                    <a href="https://goo.gl/maps/cbGYz1vQZg93fAZ19" target="_blank" rel="noopener noreferrer">
                        Yerevan, Admiral Isakov 48/29
                    </a>
                </li>
                <li class="less">
                    <b> Phone </b><a href="tel:+374-93-97-97-70">(+374) 93 97 97 70 </a>
                </li>
                <li>
                    <b>Mail։</b> <a href="mailto:info@walldeco.am">info@walldeco.am</a>
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
    <div class='flex jcenter acenter copyright'> <?php the_field('copyright', 'option')?> <?php echo date('Y') ?> </div>
</footer>
</div>
</div>
<?php wp_footer(); ?>
</body>

</html>