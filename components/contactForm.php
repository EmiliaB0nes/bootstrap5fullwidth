<div class="modal fade" id="ModalFullscreen" tabindex="-1" aria-labelledby="Test Contact" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">

            <div class="container-xxl">


                <div>
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </br>
                    <h1 class="text-center modaltitle"><?php echo esc_html__('Contact Form', 'wpb5Translations');?></h1>
                </div>

                <div class="modalcenter modal-body">


                    <?php //echo do_shortcode("[contact-form-7 id='132' title='Formulaire de contact 1']");
                    if (get_theme_mod('contact_modal_shortcode')) {
                        echo do_shortcode(get_theme_mod('contact_modal_shortcode'));
                    } else {
                    ?>
                        <h2><?php echo esc_html__('There is no shortcode!', 'wpb5Translations');?></h2>
                        <p><?php echo esc_html__('Please configure it in the customize menu', 'wpb5Translations');?></p>
                    <?php
                    }
                    ?>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-5 col-12">
                                    <div class="row">
                                        <div class="col-12"> <input type="text" class="form-control form-control-lg bt-name" name="bt-name" placeholder="<?php echo esc_html__('Name', 'wpb5Translations');?>"></div>
                                        <div class="col-12">
                                            <input type="text" class="form-control form-control-lg" name="bt-subname" placeholder="<?php echo esc_html__('Subname', 'wpb5Translations');?>">
                                        </div>
                                        <div class="col-12">
                                            <input type="email" class="form-control form-control-lg" name="bt-email" placeholder="<?php echo esc_html__('Email', 'wpb5Translations');?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-12"></div>
                                <div class="col-sm-5 col-12 align-self-stretch formright">
                                    <div class="row">
                                        <div class="col-12"> <input type="text" class="form-control form-control-lg" name="bt-subject" placeholder="<?php echo esc_html__('Subject', 'wpb5Translations');?>"></div>
                                        <div class="col-12">
                                            <textarea class="form-control message-area" name="bt-message" placeholder="<?php echo esc_html__('Message', 'wpb5Translations');?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center btn-modal-send">
                                <div class="col-4">
                                </div>
                                <div class="col-4 text-center d-grid">
                                    <button type="button" class="btn btn-primary btn-send-form"><?php echo esc_html__('Send', 'wpb5Translations');?></button>
                                </div>
                                <div class="col-4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>