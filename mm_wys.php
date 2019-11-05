<?php 
//  require ('dane_conf.php');
//  require ('pre_bibl.php');  
  
 //naglowek1(); 
require_once('connection.php');
 
 
  $wynik = mysqli_query($baza,"SELECT * FROM users");
 require('upload.php');
// wyswietlenie
while($row = mysqli_fetch_array($wynik))
{echo $row['id'];echo " "; echo "<a href=pokaz_img.php?id_plik=".$row['id']." target=\"_blank\">".$row['name']." </a>"; echo "<br>"; }

mysqli_close($baza);
 
//stopka1();
?>
