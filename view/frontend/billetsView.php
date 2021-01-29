<?php $title = $post['title']; ?>

<?php ob_start(); ?>

<div class="bg-black small text-center text-white-50" style="padding : 40px">
    <div class="container" >
    </div>
</div>
 



<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8" style="margin-top :  25px">
        <a href="index.php?action=blog"> <img src="./public/frontend/img/next.png" alt=""><br>
        Retour à la liste des billets</a>
        <br>
        <h1 class="mt-4"><?php echo htmlspecialchars($post['title']); ?></h1>
        <hr>
         <p><em>le <?php echo $post['creation_date_fr']; ?></em></p>
        <hr>
        <p class="lead">
        <?php echo nl2br($post['content']); ?></p>
        <hr>
        

    <!-- Comments Form -->

    <section id="signup" class="signup-section-article">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-8 mx-auto text-center">
                <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
                <h2 class="text-blue mb-5">Laisser un Commentaire!</h2>
            </div>
            <div class="col-lg-12" >
                <form   action="./controller/frontend/Post_Comment.php" method="POST">
                <?php $form = new Form(); ?>
                    <div class="row">
                        <div class="col-lg-10">
                            <?php $form->text('auteur', 'Votre Pseudo *'); ?>
                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
                        </div>
                        <div class="col-lg-10">
                        <?php $form->textarea('contenu', 'Votre Message * '); ?>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button class="btn btn-primary btn-xl text-uppercase"
                                type="submit">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="container" style="margin-top:50px;">
        <div class="row">
            <div class="col-md-10 col-lg-12 mx-auto ">
        <h2>Commentaires</h2>
 <?php if (array_key_exists('ss', $_SESSION)): ?>
                                <div class=" alert alert-success"><hr>
                                Votre message est envoyé avec succès ! <hr>
                                </div> 
                                
                            <?php  endif; ?>
        <?php

        while ($comment = $comments->fetch()) {
            ?>
        <div class="media mb-4">
        <div class="media-body">
        <hr>
        <h4 class="mt-0"><strong><?php echo htmlspecialchars($comment['author']); ?></strong></h4><p> le <?php echo $comment['comment_date_fr']; ?></p>
       
        <p><?php echo  htmlspecialchars($comment['comment']); ?></p>
        <form    action="./controller/frontend/comment.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo  $comment['id']; ?>"/>
                            <input type="hidden" name="id_get" value="<?php echo $_GET['id']; ?>"/>
                            <button  class="btn btn-primary btn-xl text-uppercase"
                                type="submit">Signaler le commentaire</button>
                        
                </form>
        
        </div>
        </div>
        <?php
        }
        ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <?php $content = ob_get_clean(); ?>
<?php include 'tremplates/head.php'; ?>
