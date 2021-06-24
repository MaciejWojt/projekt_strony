<?php
    $con = mysqli_connect("localhost","root","","projektstrona");
    if(!$_GET){
        $oferty = mysqli_query($con,"SELECT tytul, autor,kategoria, l_stron FROM ksiazki JOIN kategorie ON ksiazki.id_kategorii=kategorie.id_kategorii;");
        while($row=mysqli_fetch_row($oferty)){
            echo "<ul><li>$row[0]</li><li>$row[1]</li><li>$row[2]</li><li>strony: $row[3]</li></ul>";
        }
    }
    else{
        $kr1 = strip_tags($_GET['tytul']);
        $kr2 = strip_tags($_GET['autor']);
        $kr3 = strip_tags($_GET['kategoria']);
        $oferty = mysqli_query($con,"SELECT tytul, autor,kategoria, l_stron FROM ksiazki JOIN kategorie ON ksiazki.id_kategorii=kategorie.id_kategorii WHERE tytul LIKE'%$kr1%' AND autor LIKE'%$kr2%' AND kategoria LIKE'%$kr3%';");
        $ilo = 0;
        while($row=mysqli_fetch_row($oferty)){
            echo "<ul><li>$row[0]</li><li>$row[1]</li><li>$row[2]</li><li>strony: $row[3]</li></ul>";
            $ilo+=1;
        }
        if($ilo==0){
            echo "<h1>Nie znaleziono książek</h1>";
        }
    }

?>