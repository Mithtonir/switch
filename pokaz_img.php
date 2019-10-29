<?php 
 //Srequire ('dane_conf.php');


 $localhost = 'localhost';
 $root = 'root';
 $pass ='';
 $winery = 'winery';
  
 //dost�p do bazy
  $baza=mysqli_connect($localhost,$root,$pass,$winery);
  if (mysqli_connect_errno()) {echo "Wyst�pi� b��d po��czenia z baz�";}
 
  //$wynik = mysqli_query($baza,"SELECT * FROM users");
 
 if(isset($_GET['id_plik'])) {
   //$sql="SELECT * FROM multimedia WHERE Id='".$_GET[id_plik]."'";
   $sql="SELECT * FROM `users` WHERE id=".$_GET['id_plik'];
   //$sql="SELECT * FROM `users` WHERE id= 1";
   $wynik = mysqli_query($baza,$sql); //dla uproszczenia - bez obs�ugi b��d�w
   //echo $sql;
   $row = mysqli_fetch_array($wynik);
   header("content-type:jpg");
   echo $row['pic'];
 }
 
mysqli_close($baza);

?>
