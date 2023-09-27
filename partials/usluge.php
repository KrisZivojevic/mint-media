<?php
// debagovanje(ocitaj_usluge_text_file());
// normalizacija_podataka(ocitaj_usluge_text_file());
// izlistaj_sve_usluge();
$sve_usluge = izlistaj_sve_usluge();
debagovanje($sve_usluge);
?>

<section class="usluge py-5 container">
  <h2 class="text-center">Usluge</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card">
        <img src="img/mint-socijalne-mreze.jpg" class="card-img-top" alt="social networks">
        <div class="card-body">
          <h5 class="card-title">Društvene mreže</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="single-services.php" class="btn btn-primary">Pročitaj više</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="img/mint_seo.jpg" class="card-img-top" alt="social networks">
        <div class="card-body">
          <h5 class="card-title">SEO</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="single-services.php" class="btn btn-primary">Pročitaj više</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="img/mint-google-ads.jpg" class="card-img-top" alt="social networks">
        <div class="card-body">
          <h5 class="card-title">Google ads</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="single-services.php" class="btn btn-primary">Pročitaj više</a>
        </div>
      </div>
    </div>
  </div>
</section>