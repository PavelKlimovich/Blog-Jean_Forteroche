<?php $title = 'Blog de Jean Forteroche'; ?>

<?php ob_start(); ?>

<div class=" conexion">

        <div class="login-wrap">
                <div class="login-html">
                    <?php if (array_key_exists('errors', $_SESSION)): ?>
                                <div class=" alert alert-danger">
                                    <?= implode('<br>', $_SESSION['errors']); ?>
                                </div> 
                            <?php  endif; ?>
                            
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Connexion</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
                    
                    <div class="login-form">
                        <div class="sign-in-htm mt-4 ">
                        <form id="conectionForm"   action="controller/frontend/ControllerConnect.php" method="POST">
                            <div class="group">
                                <label for="user" class="label">Email</label>
                                <input name="email" required id="user" type="email" class="input">
                            </div>
                            <div class="group">
                                <label for="pass" class="label">le mot de passe</label>
                                <input required name="password" id="pass" type="password" class="input" data-type="password">
                            </div>
                            <div class="group">
                                <input id="check" type="checkbox" class="check" checked>
                                <label for="check" class="text-warning"><span class="icon"></span>  Maintenir la connexion</label>
                            </div>
                            <div class="group">
                                <input type="submit" class="button" value="Se Connecter">
                            </div>
                            <div class="hr"></div>
                            </form>  
                        </div>
                        <div class="sign-up-htm mt-4">
                            <div class="group">
                                <label for="user" class="label">Username</label>
                                <input  type="text" class="input">
                            </div>
                            <div class="row ">
                                <span class="text-white mt-3 mx-auto">OU</span>
                            </div>
                            
                            <div class="group">
                                <label for="pass" class="label">Email Address</label>
                                <input  type="text" class="input">
                            </div>
                            
                            <div class="group">
                                <input type="submit" class="button" value="Sign Up">
                            </div>
                            <div class="hr"></div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $content = ob_get_clean(); ?>
<?php include 'tremplates/head.php'; ?>