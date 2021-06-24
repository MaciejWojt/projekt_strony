<?php
    session_start();
    $con = mysqli_connect("localhost","root","","projektstrona");
    $id = $_GET['id'];
    $q = mysqli_query($con,"DELETE FROM bibliotekarze WHERE id_bib=$id");
    $q2 = mysqli_query($con,"ALTER TABLE bibliotekarze AUTO_INCREMENT=0");
    if($q){
        echo "pomyślnie usunięto pracownika<br>";
        echo "<a href='./szef.php'>wróć</a>";

    }
    else{
        echo "nie usunięto, wykryto błąd";
    }
?>