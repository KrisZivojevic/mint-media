<?php

// functions.php cuva sve funkcije koje imamo i zelimo na sajtu da iskoristimo

function debagovanje($parametar) {
   echo '<pre>';
    print_r($parametar);
   echo '</pre>';
}

// funkcija za citanje usluge.txt fajla

function ocitaj_usluge_text_file() {
   return file_get_contents('baza/usluge.txt');
}

function normalizacija_podataka($podaci) {
   $prelomi_usluge = explode('//////////', $podaci);
   // debagovanje($prelomi_usluge);
   unset($prelomi_usluge[0]);
   // debagovanje($prelomi_usluge);

   $novi_red_formatiran = [];

   foreach($prelomi_usluge as $novi_red) {
      // debagovanje($novi_red);
      $novi_red_razbijen = explode(PHP_EOL, $novi_red); 
      // debagovanje($novi_red_razbijen);
      $novi_red_razbijen = array_filter($novi_red_razbijen);
      // debagovanje($novi_red_razbijen);
      // debagovanje(normalizacija_redova($novi_red_razbijen[3]));

      $usluge_id = normalizacija_redova($novi_red_razbijen[1]);
      $usluge_slika = normalizacija_redova($novi_red_razbijen[2]);
      $usluge_naslov = normalizacija_redova($novi_red_razbijen[3]);
      $usluge_tekst = normalizacija_redova($novi_red_razbijen[4]);

      // debagovanje($usluge_id);
      // debagovanje($usluge_slika);
      // debagovanje($usluge_naslov);
      // debagovanje($usluge_tekst);

      $red_podaci = [
         'id' => $usluge_id,
         'slika' => $usluge_slika,
         'naslov' => $usluge_naslov,
         'tekst' => $usluge_tekst
      ];
      // debagovanje($red_podaci);
      $novi_red_formatiran[] = $red_podaci;
   }
   // debagovanje($novi_red_formatiran);
   return $novi_red_formatiran;
}

function normalizacija_redova($podaci_red) {
   $normalizuj_podatke =  ['ID:', 'Slika:', 'Naslov:', 'Tekst:'];
   $red = str_replace($normalizuj_podatke, '', $podaci_red);
   $red = trim($red);
   return $red;
}

// funkcija koja vraca sve usluge

function izlistaj_sve_usluge() {
   $usluge_podaci = ocitaj_usluge_text_file();
   $usluge_podaci = normalizacija_podataka($usluge_podaci);
   // debagovanje($usluge_podaci);
   return $usluge_podaci;
}

///////////////////         BLOG            //////////////////////////

function ocitaj_blog_text_file() {
   return file_get_contents('baza/blog.txt');
}

function normalizacija_blog_podataka($blog_podaci) {
   $prelomi_blog = explode('//////////', $blog_podaci);
   // debagovanje($prelomi_blog);

   unset($prelomi_blog[0]);
   // debagovanje($prelomi_blog);

   $novi_blog_red_formatiran = [];

   foreach($prelomi_blog as $blog_novi_red) {
      // debagovanje($blog_novi_red);
      $novi_blog_red_razbijen = explode(PHP_EOL, $blog_novi_red);
      // debagovanje($novi_blog_red_razbijen);
      $novi_blog_red_razbijen = array_filter($novi_blog_red_razbijen);
      // debagovanje($novi_blog_red_razbijen);
      // debagovanje(normalizacija_redova_blog($novi_blog_red_razbijen[1]));
      // debagovanje(normalizacija_redova_blog($novi_blog_red_razbijen[2]));
      // debagovanje(normalizacija_redova_blog($novi_blog_red_razbijen[3]));
      // debagovanje(normalizacija_redova_blog($novi_blog_red_razbijen[4]));
      // debagovanje(normalizacija_redova_blog($novi_blog_red_razbijen[5]));
      // debagovanje(normalizacija_redova_blog($novi_blog_red_razbijen[6]));

      $blog_red_id = normalizacija_redova_blog($novi_blog_red_razbijen[1]);
      $blog_red_slika = normalizacija_redova_blog($novi_blog_red_razbijen[2]);
      $blog_red_naslov = normalizacija_redova_blog($novi_blog_red_razbijen[3]);
      $blog_red_datum = normalizacija_redova_blog($novi_blog_red_razbijen[4]);
      $blog_red_admin = normalizacija_redova_blog($novi_blog_red_razbijen[5]);
      $blog_red_tekst = normalizacija_redova_blog($novi_blog_red_razbijen[6]);


      $blog_red_podaci = [
         'id' => $blog_red_id,
         'slika' => $blog_red_slika,
         'naslov' => $blog_red_naslov,
         'datum' => $blog_red_datum,
         'admin' => $blog_red_admin,
         'tekst' => $blog_red_tekst
      ];
      // debagovanje($blog_red_podaci);
      $novi_blog_red_formatiran[] = $blog_red_podaci;
   }
   // debagovanje($novi_blog_red_formatiran);
   return $novi_blog_red_formatiran;
}

function normalizacija_redova_blog($blog_podaci_red) {
   $normalizuj_blog_podatke = ['ID:', 'Slika:', 'Naslov:', 'Datum:', 'Admin:', 'Tekst:'];
   $blog_red = str_replace($normalizuj_blog_podatke, '', $blog_podaci_red);
   $blog_red = trim($blog_red);
   return $blog_red;

}

function izlistaj_sve_blogove() {
   $blog_podaci = ocitaj_blog_text_file();
   $blog_podaci = normalizacija_blog_podataka($blog_podaci);
   // debagovanje($blog_podaci);
   return $blog_podaci;
}