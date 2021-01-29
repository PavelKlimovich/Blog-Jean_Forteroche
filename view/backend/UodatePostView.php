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
                                                    <a href="#">
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
                            <section id="signup" class="signup-section-article">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-lg-8 mx-auto text-center">
                                            <h2 class="text-blue mb-5">Ajouter un Article!</h2>
                                        </div>
                                        <div class="col-lg-12">
                                            <form action="controller/backend/update_post.php" method="post">
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <label for="titre" class="label">TITRE</label>
                                                        <input required name='titre' type="text" class="input" value="<?php echo $post['title']; ?>" >
                                                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>"/>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <textarea style="height : 500px;" name='mytextarea' id="mytextarea">
                                                        <?php echo $post['content']; ?>
                                        </textarea>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                    <div class="col-lg-12 text-center">
                                                        <br>
                                                        <button id="sendMessageButton"
                                                            class="btn btn-primary btn-xl text-uppercase"
                                                            type="submit">Envoyer</button>
                                                    </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    </div>


    <?php $content = ob_get_clean(); ?>
    <?php include 'tremplates/layot.php'; ?>