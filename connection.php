<?php

    $mysql_server = "localhost";
    $username = "root";
    $password = "";
    $mysql_db = "switch";
    $baza = mysqli_connect($mysql_server, $username, $password, $mysql_db)
    or die('Brak poloczenia z serwerem');

?>