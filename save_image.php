<?php
    require_once('connection.php');
    require_once('database_save.php');

    if(isset($_POST['upload'])){

      //ustalenie warto�ci z formularza
      $kategoria=$_POST["category"];
      $des=$_POST["description"];

      $fileName = addslashes($_FILES["image"]["tmp_name"]);
      $handle = fopen($fileName, "rb");
      $dane = addslashes(fread($handle, filesize($fileName)));
      fclose($handle);

      //zapis do bazy UWAGA: Bez kontroli b��d�w zapisu!
      $zapytanie="INSERT INTO `images` (`id`, `image`,`movie`,`category`,`description`) VALUES (NULL, '".$dane."', '','".$kategoria."','".$des."')";
      $wynik = queryMSQL($baza,$zapytanie); 
      echo "Dodano rekord do bazy";
    }

    if(isset($_POST['uploadFilm'])){


      $lokacja_filmow = "images/";

      $id = mysqli_query($baza,"SELECT MAX(id) As Id_max FROM images");
      while($row = mysqli_fetch_array($id))
      {$nr=$row['Id_max'];};
      //ustalenie po�o�enia do zapisu w bazie
      $nr=$nr+1;
      $lokalizacja = $lokacja_filmow.$nr.'.mp4';  
        
    if(!move_uploaded_file($_FILES["plik_polozenie"]["tmp_name"], $lokalizacja))
    {
      echo 'problem: Nie udalo sie skopiowac pliku do katalogu.';  
    }
    else
    {
      //ustalenie warto�ci z formularza
      $kategoria=$_POST["category"];
      $des=$_POST["description"];

      //zapis do bazy UWAGA: Bez kontroli b��d�w zapisu!
      $zapytanie="INSERT INTO `images` (`id`, `image`,`movie`,`category`,`description`) VALUES (NULL, '', '".$lokalizacja."','".$kategoria."','".$des."')";
      $wynik = mysqli_query($baza,$zapytanie); 
      echo "Dodano rekord do bazy";
    }

    }
    
    ?>



    