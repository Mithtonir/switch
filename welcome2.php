WELCOME user from group 2
<br><br>
<?php

require_once('connection.php');
require_once('database_save.php');

$wynik = queryMSQL($baza, "SELECT * FROM `images` WHERE group_id='2'");

echo "<table>";
if(mysqli_num_rows($wynik) > 0) {
    while($row = mysqli_fetch_array($wynik)){
        echo "<tr>";
                echo "<td> <a href=pokaz_img.php?id_plik=".$row['id']." target=\"_blank\">".$row['description']." </a> </td>";
        echo "</tr>";
    }
}
echo "</table>";
mysqli_free_result($wynik);
?>