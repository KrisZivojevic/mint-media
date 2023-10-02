<?php include 'partials/header.php';?>

<header class="headers position-relative">
  <img class="w-100" src="img/blog-header.jpg" alt="header image" />
  <h1
    class="position-absolute top-50 start-50 translate-middle display-3 text-center px-5 py-3 text-white"
  >
    Blog
  </h1>
</header>

<!-- blog -->
<div class="container blog py-5">
  <div class="row">
    <?php 
      // debagovanje(ocitaj_blog_text_file());
      // normalizacija_blog_podataka(ocitaj_blog_text_file());
      $blog_postovi = izlistaj_sve_blogove();
      // debagovanje($blog_postovi);
    ?>
    <div class="col-md-8">

    <?php foreach($blog_postovi as $post) : ?>
      <article>
        <img class="w-100" src="<?php echo $post['slika'];?>" alt="" />
        <div class="text w-75 mx-auto text-white p-4 position-relative">
          <h3><?php echo $post['naslov']; ?></h3>
          <span><?php echo $post['datum']; ?> | <?php echo $post['admin']; ?></span>
          <p><?php echo $post['tekst']; ?></p>
          <a class="btn btn-light" href="single.php">Saznaj više</a>
        </div>
      </article>
    <?php endforeach; ?>

    </div>
    <?php include 'partials/sidebar.php';?>
  </div>
</div>

<?php include 'partials/footer.php';?>
