<?php
    function queryMSQL($baza,$zapytanie){
        $wynik = mysqli_query($baza,$zapytanie);
        return $wynik;
    }
?>