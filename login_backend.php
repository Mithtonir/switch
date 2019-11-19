<?php
     require_once('connection.php');
     require_once('database_save.php');
 
     if(isset($_POST['loguj'])){
 
       //ustalenie warto�ci z formularza
       $login=$_POST["login"];
       $password=$_POST["password"];
        
 
       //zapis do bazy UWAGA: Bez kontroli b��d�w zapisu!
       $zapytanie="SELECT * FROM users WHERE login='".$login."' AND password='".$password."'";
       $wynik = queryMSQL($baza,$zapytanie); 
       $row = mysqli_fetch_array($wynik);
       $count = mysqli_num_rows($wynik);

       if($count == 1) {
        
        if($row['group_id'] == 1){
            header("location: welcome1.php");
        } elseif($row['group_id'] == 2){
            header("location: welcome2.php");            
        } else {
            echo "Your group id is invalid";
        }

        }else {
            echo "Your Login Name or Password is invalid";
        }  
     }
?>