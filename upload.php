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
    <title>Dodawanie zdjęcia</title>
</head>
<body>
<?php 
echo<<<END


<form method="POST" action="filesend.php" style=" padding-left: 30%; width: 80%;">
    <div class="form-group" >
    <h1>Zdjecie</h1>
    <label for="name">Imię</label>
    <input type="text" class="form-control" id="name" placeholder="Podaj imię">
  </div>
  <div class="form-group">
    <label for="img">Zdjęcie</label>
    <input type="file" class="form-control" id="img" placeholder="Wybierz plik">
  </div>

  <button type="submit" class="btn btn-primary">Wyślij</button>
  </form>
END;
  require('filesend.php');
?>
</body>
</html>



