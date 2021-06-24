<?php
    $con = mysqli_connect("localhost","root","","projektstrona");
    $oferty = mysqli_query($con,"SELECT tytul, autor,kategoria, l_stron FROM ksiazki JOIN kategorie ON ksiazki.id_kategorii=kategorie.id_kategorii ORDER BY id_ksiazki DESC LIMIT 3;");
    while($row=mysqli_fetch_row($oferty)){
        echo "<ul><li>$row[0]</li><li>$row[1]</li><li>$row[2]</li><li>strony: $row[3]</li></ul>";
    }
?>