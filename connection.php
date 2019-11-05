<?php 
$localhost = 'localhost';
 $root = 'root';
 $pass ='';
 $winery = 'winery';
  
 //dost�p do bazy
$baza=mysqli_connect($localhost,$root,$pass,$winery);
if (mysqli_connect_errno()) {echo "Wyst�pi� b��d po��czenia z baz�";}
?>