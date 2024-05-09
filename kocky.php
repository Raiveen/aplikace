<?php
    session_start(); // inicializace použití SESSION (udržování spojení mezi prohlížečem a serverem)
    require("db.php");
    require("funkce.php"); 

$kocky = vratkocky($db);
require("kocky.phtml");
