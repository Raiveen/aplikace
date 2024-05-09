<?php
    $db = mysqli_connect("localhost", "root", "", "utulek"); // připojení k DB serveru
    mysqli_set_charset($db, "utf8"); // nastavení komunikační znakové sady