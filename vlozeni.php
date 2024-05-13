<?php
    session_start(); // inicializace použití SESSION (udržování spojení mezi prohlížečem a serverem)
    require("db.php");
    require("funkce.php"); 
 
    require("html_top.phtml");
    $nazev = "custom";
   
 
     if (!file_exists($nazev)) {
       mkdir($nazev);
     }
 
     $maxvel = 2;
     $typy = [
         "image/jpeg",
         "image/png"
     ];
 ?>
 
 <h2>Darovat kočku</h2>
 <form method="post" enctype="multipart/form-data">
       
       <div>
          <label for="jmeno">Jméno</label>
          <input type="text" name="jmeno" id="jmeno">
       </div>
 
       <div>
          <label for="barva">Barva</label>
          <input type="text" name="barva" id="barva">
       </div>
 
       <div>  
          <label>Pohlaví</label>
          <input type="radio" name="pohlavi" id="pohlavim">
          <label for="pohlavi">Samec</label>
          <input type="radio" name="pohlavi" id="pohlaviz">
          <label for="pohlavi">Samice</label>
       </div>
 
       <div>
          <label for="vek">Věk</label>
          <input type="text" name="vek" id="vek">
       </div>
 
       <div>
          <label for="ockovani">Očkování</label>
          <input type="checkbox" name="ockovani" id="ockovani">
       </div>
 
       <div>
          <label for="kastrace">Kastrace</label>
          <input type="checkbox" name="kastrace" id="kastrace">
       </div>
 
       <div>
          <label for="popisek">Popisek</label>
          <textarea name="popisek" id="popisek" cols="30" rows="3"></textarea>
       </div>
 
       <div>
          <label for="obrazek">Obrázek</label>
          
          <input type="hidden" name="MAX_FILE_SIZE" value="<?= ($maxvel * 1024 * 1024) ?>">
       <input type="file" name="obrazek" id="obrazek" accept="<?= implode(",", $typy) ?>">
       </div>
 
       <input type="submit" value="Uložit">
 
    </form>
 
 
 <?php
 
 
    require("html_bottom.phtml");

    if (isset($_POST["jmeno"])) {
        vlozkocku($db, $_POST, $_FILES);}
 ?>
