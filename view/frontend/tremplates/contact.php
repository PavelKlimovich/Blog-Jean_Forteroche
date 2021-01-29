<section id="signup" class="signup-section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-white mb-5">Me contacter!</h2>
                <?php if (array_key_exists('errors', $_SESSION)): ?>
                                <div class=" alert alert-danger">
                                    <?= implode('<br>', $_SESSION['errors']); ?>
                                </div> 
                            <?php  endif; ?>
                            <?php if (array_key_exists('success', $_SESSION)): ?>
                                <div class=" alert alert-success">
                                Votre message est envoyé avec succès ! 
                                </div> 
                            <?php  endif; ?>
            </div>
            <div class="col-lg-12" style="margin-top: 100px">
                <form id="contactForm"   action="controller/frontend/Post_Contact.php" method="POST">
                <?php $form = new Form(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            
                            <?php $form->text('name', 'Votre Nom *'); ?>
                            <?php $form->text('firstName', 'Votre Prenom *'); ?>
                            <?php $form->email('email', 'Votre Email *'); ?>
                            
                        </div>
                        <div class="col-md-6">
                        <?php $form->textarea('message', 'Votre Message * '); ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase"
                                type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</section>

