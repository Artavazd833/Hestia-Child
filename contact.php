<?php

/**
 * Template Name: Contact Us
 */
get_header()
?>

<div class="contatct-main">
    <div class="container">


        <article id="post-20" class="section section-text">
            <div class="row">
                <div class="col-md-8 page-content-wrap  col-md-offset-2">

                    <p></p>



                    <div class="wp-container-4 wp-block-columns">
                        <div class="wp-container-2 wp-block-column">
                            <div id="contact-form-20">
                                <form action="https://mgglass.es/contacto/#contact-form-20" method="post" class="contact-form commentsblock wp-block-jetpack-contact-form form-group">
                                    <script>
                                        (function() {
                                            const contact_forms = document.getElementsByClassName('contact-form');

                                            for (const form of contact_forms) {
                                                form.onsubmit = function() {
                                                    const buttons = form.getElementsByTagName('button');

                                                    for (const button of buttons) {
                                                        button.setAttribute('disabled', true);
                                                    }
                                                }
                                            }
                                        })();
                                    </script>
                                    <div class="wp-block-jetpack-contact-form">
                                        <div class="grunion-field-wrap grunion-field-name-wrap form-group">
                                            <label for="g20-name" class="grunion-field-label name">Name<span>(required)</span></label>
                                            <input type="text" name="g20-name" id="g20-name" value="" class="name form-control" required="" aria-required="true">
                                        </div>



                                        <div class="grunion-field-wrap grunion-field-email-wrap form-group">
                                            <label for="g20-email" class="grunion-field-label email">Email<span>(required)</span></label>
                                            <input type="email" name="g20-email" id="g20-email" value="" class="email form-control" required="" aria-required="true">
                                        </div>



                                        <div class="grunion-field-wrap grunion-field-textarea-wrap form-group">
                                            <label for="contact-form-comment-g20-message" class="grunion-field-label textarea">Message</label>
                                            <textarea name="g20-message" id="contact-form-comment-g20-message" rows="20" class="textarea form-control"></textarea>
                                        </div>


                                        <div class="wp-block-jetpack-button wp-block-button" style=""><button class="wp-block-button__link" style="" data-id-attr="placeholder" type="submit">Contact Us</button></div>
                                    </div>
                                    <input type="hidden" name="contact-form-id" value="20">
                                    <input type="hidden" name="action" value="grunion-contact-form">
                                    <input type="hidden" name="contact-form-hash" value="5d8d58cfbe309af17bef1a1e15ad549ce924915b">
                                </form>
                            </div>
                        </div>



                        <div class="wp-container-3 wp-block-column">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                    </div>



                    <div class="wp-container-5 wp-block-columns"></div>
                </div>
            </div>
        </article>
    </div>
</div>


<?php get_footer() ?>