<?php $title = 'Blog de Jean Forteroche'; ?>

<?php ob_start(); ?>



<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">BILLET SIMPLE POUR L'ALASKA</h1>
        </div>
      </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Présentation de l'auteur</h2>
          <p class="text-white-50">Je suis Jean Forteroche | Écrivain ! Depuis quelques temps maintenant, j'ai commencé
            l'écriture de mon nouveau roman "Billet simple pour l'Alaska".
            Cependant, j'ai voulu innover en publiant mon roman sur mon blog.
            Le fonctionnement est très simple, je publie régulièrement par "épisode", des petits chapitres de mon roman.
            Vous pouvez consulter le premier chapitre
            <a href="index.php?action=blog&amp;ht=post&amp;id=1">Shoreline</a> ici. </p>
        </div>
      </div>
      <img src="./public/frontend/img/2.png" class="img-fluid" alt="">
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="./public/frontend/img/bg-masthead.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h3>BILLET SIMPLE POUR L'ALASKA</h3>
            <br>
            <hr>
            <h4>Shoreline</h4>
            <p class="text-black-50 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quaerat
              eligendi maiores repellendus minus autem nam sint, et fuga. Sequi necessitatibus reprehenderit alias
              beatae tempore obcaecati quam fugit quidem laboriosam.</p>
            <br>
            <a href="index.php?action=blog&amp;ht=post&amp;id=1"> <img src="./public/frontend/img/next.png" alt=""><br>
              Lire</a>
          </div>
        </div>
      </div>

     

    </div>
  </section>
  <?php include 'tremplates/contact.php'; ?>

<?php $content = ob_get_clean(); ?>
<?php include 'tremplates/head.php'; ?>