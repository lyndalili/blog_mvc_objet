<?php include("app/view/layout/header.inc.php"); ?>
<!-- Page Header -->
<header class="masthead" style="background-image: url('webroot/imageblog/france.jpeg')">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="site-heading">
          <h2>Blog, architecture MVC orientée objet</h2>
          <span class="subheading">échos, éditos, confidences et enquêtes sur l’actualité politique </span>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <?php foreach ($data["posts"] as $post) { ?>


        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              <a href="?action=view&id=<?= $post->post_ID ?>"> <?= $post->post_title ?>
            </h2>
            <img class="imgpost" src="webroot/imageblog/<?= $post->post_img_url ?>" alt="#">
            <h3 class="post-subtitle">
              <?= $post->post_content ?>
            </h3>
          </a>
          <p class="post-meta">Ecrit par :
            <?= $post->display_name ?>
            Publié le <?= $post->post_date ?></p>
        </div>
        <hr>

      <?php  } ?>

      <!-- Pager -->
      <div class="clearfix">
        <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>

        
        <?php $this->paginator($data["nbPages"],"index.php?page"); ?>
      </div>
    </div>
  </div>
</div>

<hr>

<!-- Footer -->
<?php include("app/view/layout/footer.inc.php"); ?>