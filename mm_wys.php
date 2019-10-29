<?php 
//  require ('dane_conf.php');
//  require ('pre_bibl.php');  
  
 //naglowek1(); 
 
 $localhost = 'localhost';
 $root = 'root';
 $pass ='';
 $winery = 'winery';
  
 //dost�p do bazy
  $baza=mysqli_connect($localhost,$root,$pass,$winery);
  if (mysqli_connect_errno()) {echo "Wyst�pi� b��d po��czenia z baz�";}
 
  $wynik = mysqli_query($baza,"SELECT * FROM users");
 
// wyswietlenie
while($row = mysqli_fetch_array($wynik))
{echo $row['id'];echo " "; echo "<a href=pokaz_img.php?id_plik=".$row['id']." target=\"_blank\">".$row['name']." </a>"; echo "<br>"; }

mysqli_close($baza);
 
//stopka1();
?>
