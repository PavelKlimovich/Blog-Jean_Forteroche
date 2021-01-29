<?php $title = 'Le Roman Jean Forteroche'; ?>

<?php ob_start(); ?>



<header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">BILLET SIMPLE POUR L'ALASKA</h1>
        </div>
      </div>
  </header>

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

<?php

while ($data = $posts->fetch()) {
    ?>
    <div class="row justify-content-center no-gutters">
        <div class="col-lg-12">
          
        </div>
        <div class="col-lg-12 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white"> <?php echo htmlspecialchars($data['title']); ?>
                    <em>le <?php echo $data['creation_date_fr']; ?></em>
                </h4>
                
                     <hr class="d-none d-lg-block mb-0 mr-0">
                        <em><a href="index.php?action=blog&amp;ht=post&amp;id=<?php echo $data['id']; ?>">Lire</a></em>
                        </div>
            </div>
          </div>
        </div>
      </div>
      <br>
<?php
}
$posts->closeCursor();
?>
</div>
  </section>
  <?php $content = ob_get_clean(); ?>
<?php include 'tremplates/head.php'; ?>