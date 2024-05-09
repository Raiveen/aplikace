<?php
    session_start(); // inicializace použití SESSION (udržování spojení mezi prohlížečem a serverem)
    require("db.php");
    require("funkce.php"); 
 
require("vlozeni.phtml");
if (isset($_POST["jmeno"])) {
vlozkocku($db, $_POST);}