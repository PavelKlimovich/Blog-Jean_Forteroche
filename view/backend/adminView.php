<?php $title = 'Blog de Jean Forteroche'; ?>

<?php ob_start(); ?>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                    <h3 >
                <?php echo date('Y-m-d'); ?>
                </h3>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">         
                        <li class="has-sub">
                        <a class="js-arrow" href="admin.php">
                                <i class="fas fa-copy"></i>Accueil</a>
                                <a class="js-arrow" href="admin.php?action=posts">
                                <i class="fas fa-copy"></i>Rajouter un article </a>
                                <a class="js-arrow" href="admin.php?action=comments">
                                <i class="fas fa-copy"></i>Gestion de Commentaires</a>
                        </li>
                       
                           
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <h3 >
                <?php echo date('Y-m-d'); ?>
                </h3>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="admin.php">
                                <i class="fas fa-copy"></i>Accueil</a>
                                <a class="js-arrow" href="admin.php?action=posts">
                                <i class="fas fa-copy"></i>Rajouter un article </a>
                                <a class="js-arrow" href="admin.php?action=comments">
                                <i class="fas fa-copy"></i>Gestion de Commentaires</a>
                                 
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <div class="header-button">
                                <div class="noti-wrap">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">JEAN FORTEROCHE</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">JEAN FORTEROCHE</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div> 
                                            <div class="account-dropdown__footer">
                                                <a href="controller/backend/deconnect.php">
                                                    <i class="zmdi zmdi-power"></i>Se Déconnecter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->
           
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                                    <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                        <div class="bg-overlay bg-overlay--blue"></div>
                                        <h3>
                                           Mes Articles </h3>
                                    </div>
                                    <div class="au-task js-list-load">
                                        <div class="au-task-list js-scrollbar3" style="height : 624px;">
                                        <?php
                                            while ($data = $posts->fetch()) {
                                                ?>
                                                <div class="au-task__item au-task__item--primary">
                                                    <div class="au-task__item-inner">
                                                        <h5 class="task">
                                                          <h3><?php echo htmlspecialchars($data['title']); ?></h3>  
                                                        </h5>
                                                        <hr>
                                                        <span> Publié le <?php echo $data['creation_date_fr']; ?></span>
                                                        <hr>
                                                        <br>
                                                        <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase"><a href="admin.php?action=update&amp;id=<?php echo $data['id']; ?>"> Modifier</a></button>
                                                         
                                                        <form   style="margin-top: 5px;"   id="contactForm"   action="controller/backend/delete_article.php" method="POST"> 
                                                        <input type="hidden" name="id_delete" value="<?php echo $data['id']; ?>"/>
                                                         <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Suprimer</button>
                                                         </form>
                                                    </div>   
                                                </div>
                                        <?php
                                            }
                                        $posts->closeCursor();
                                        ?>
                                    </div>
                                </div>
                            </div>

                                   
                            
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
        <!-- END PAGE CONTAINER-->
</div>

<?php $content = ob_get_clean(); ?>
<?php include 'tremplates/layot.php'; ?>