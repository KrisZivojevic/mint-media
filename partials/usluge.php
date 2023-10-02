<?php
// debagovanje(ocitaj_usluge_text_file());
// normalizacija_podataka(ocitaj_usluge_text_file());
// izlistaj_sve_usluge();
$sve_usluge = izlistaj_sve_usluge();
// debagovanje($sve_usluge);
?>

<section class="usluge py-5 container">
  <h2 class="text-center">Usluge</h2>
  <div class="row">

  <?php foreach($sve_usluge as $usluga) : ?>
    <div class="col-md-4">
      <div class="card">
        <img src="<?php echo $usluga['slika']; ?>" class="card-img-top" alt="social networks">
        <div class="card-body">
          <h5 class="card-title"><?php echo $usluga['naslov']; ?></h5>
          <p class="card-text"><?php echo $usluga['tekst']; ?></p>
          <a href="single-services.php" class="btn btn-primary">Pročitaj više</a>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
    
    
  </div>
</section>