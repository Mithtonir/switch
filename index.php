<?php

require_once('connection.php');
require_once('login.php');

$wynik = mysqli_query($baza, "SELECT * FROM `images` ");

?>