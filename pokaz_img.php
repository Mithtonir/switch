<?php

require_once('connection.php');

if(isset($_GET['id_plik'])) {
  $sql="SELECT * FROM `images` WHERE id=".$_GET['id_plik'];
  $wynik = mysqli_query($baza,$sql);
  $rows = mysqli_fetch_array($wynik);
  header("content-type:jpg");
  echo $rows['image'];
}
 
mysqli_close($baza);

?>
