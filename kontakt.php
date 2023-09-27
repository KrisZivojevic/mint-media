<?php include 'partials/header.php';?>

    <header class="headers position-relative">
      <img class="w-100" src="img/header-kontakt.jpg" alt="header image">
      <h1 class="position-absolute top-50 start-50 translate-middle display-3 text-center px-5 py-3 text-white">Kontakt</h1>
    </header>

    <!-- form -->
    <form class="container p-5 text-white position-relative">
      <label class="mb-2">Ime i prezime</label>
      <input class="form-control mb-3" type="text">
      <label class="mb-2">Email</label>
      <input class="form-control mb-4" type="email">
      <label class="mb-2">Poruka</label>
      <textarea class="form-control mb-4"></textarea>
      <button type="button" class="btn btn-lg btn-dark">Pošalji poruku</button>
    </form>


<?php include 'partials/footer.php';?>

