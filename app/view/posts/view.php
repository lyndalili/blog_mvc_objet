<?php include("app/view/layout/header.inc.php");?>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('webroot/imageblog/<?= $data->post_img_url ?>')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h2><?= $data->post_title ?></h2>
           
            <span class="meta">Ecrit par :<?= $data->display_name ?>
             Publié le : <?= $data->post_date ?></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
         <p><?= $data->post_content ?></p>
          
        </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
  <?php include("app/view/layout/footer.inc.php");?>