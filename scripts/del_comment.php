<?php
    if($_GET){
        session_start();
        $i = $_GET['id'];
        $con = mysqli_connect("localhost","root","","projektstrona");
        $q = mysqli_query($con,"DELETE FROM opinie WHERE id_opinii=$i");
        if($q){
            echo "pomyślnie usunięto komentarz<br>";
            echo "<a href='./tool.php'>wróć</a>";

        }
        else{
            echo "nie usunięto, wykryto błąd";
        }
    }
?>