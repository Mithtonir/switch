 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

   <title>Dodawanie pliku</title>
 </head>
 <div class="form-group">
 <FORM  method="POST" action="" ENCTYPE="multipart/form-data">
      <br />Opis obrazka/zdjecia: <INPUT type="text" name="description">
      <br />Rodzaj/Katergoria: <INPUT type="text" name="category">
      <br />Sciezka i nazwa pliku (jpg): <INPUT  class="form-control-file" type="file" NAME="image" size="40">
      <br /><INPUT   class="btn btn-primary mb-2" type="submit" value="Zapisz" name="upload">
      <INPUT TYPE="hidden" NAME="MAX_FILE_SIZE" VALUE="16000000">
    </FORM>
</div>
    <FORM method="POST" action="" ENCTYPE="multipart/form-data">
   <br />Komentarz: <INPUT type="text" name="description">
   <br />Rodzaj/Katergoria: <INPUT type="text" name="category">
   <br />Sciezka i nazwa pliku (mp4): <INPUT type="file" NAME="plik_polozenie" size="40">
   <br /><INPUT  class="btn btn-primary mb-2" type="submit" value="Zapisz" name="uploadFilm">
   <INPUT TYPE="hidden" NAME="MAX_FILE_SIZE" VALUE="16000000">
 </FORM>
</body>

 </html>
 <body>

<?php
require_once('save_image.php');
?>

