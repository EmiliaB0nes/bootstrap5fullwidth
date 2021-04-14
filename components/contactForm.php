<div class="modal fade" id="ModalFullscreen" tabindex="-1" aria-labelledby="Test Contact" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">

            <div class="container-xxl">


                <div>
                    <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
                    </br>
                    <h1 class="text-center modaltitle">Formulaire de contact</h1>
                </div>

                <div class="modalcenter modal-body">


                    <?php //echo do_shortcode("[contact-form-7 id='132' title='Formulaire de contact 1']");
                    if (get_theme_mod('contact_modal_shortcode')) {
                        echo do_shortcode(get_theme_mod('contact_modal_shortcode'));
                    } else {
                    ?>
                        <h2>Attention, il n'y a pas de Shortcode!</h2>
                        <p>Veuillez le configurer dans le menu personnaliser</p>
                    <?php
                    }
                    ?>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-5 col-12">
                                    <div class="row">
                                        <div class="col-12"> <input type="text" class="form-control form-control-lg bt-name" name="bt-name" placeholder="Nom"></div>
                                        <div class="col-12">
                                            <input type="text" class="form-control form-control-lg" name="bt-subname" placeholder="Prénom">
                                        </div>
                                        <div class="col-12">
                                            <input type="email" class="form-control form-control-lg" name="bt-email" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-12"></div>
                                <div class="col-sm-5 col-12 align-self-stretch formright">
                                    <div class="row">
                                        <div class="col-12"> <input type="text" class="form-control form-control-lg" name="bt-subject" placeholder="Sujet"></div>
                                        <div class="col-12">
                                            <textarea class="form-control message-area" name="bt-message" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-md-center btn-modal-send">
                                <div class="col-4">
                                </div>
                                <div class="col-4 text-center d-grid">
                                    <button type="button" class="btn btn-primary btn-send-form">Envoyer</button>
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