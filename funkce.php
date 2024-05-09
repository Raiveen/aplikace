<?php

function vratkocky($db) {
    $sqlDotaz = "
        SELECT * 
        FROM kocky
    ";

    $vysledekDotazu = mysqli_query($db, $sqlDotaz);
    $kocky = mysqli_fetch_all($vysledekDotazu, MYSQLI_ASSOC); // získáme pole jednoho záznamu (klíče jsou názvy atributů)

    return $kocky;
}

function vlozkocku($db, $udajekocky) {
    $sqlVlozeni = "
      INSERT INTO kocky
      (jmeno, barva, pohlavi, vek, ockovani, kastrace, popisek, obrazek)
      VALUES ('{$udajekocky["jmeno"]}', '{$udajekocky["barva"]}', '{$udajekocky["pohlavi"]}', '{$udajekocky["vek"]}', '{$udajekocky["ockovani"]}', '{$udajekocky["kastrace"]}', '{$udajekocky["popisek"]}', '{$udajekocky["obrazek"]}')
   ";

   mysqli_query($db, $sqlVlozeni);
   // přesměrování
   header("Location: kocky.php");
   exit; // ukončí vykonávání skriptu za tímto příkazem
}