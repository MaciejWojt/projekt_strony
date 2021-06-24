<?php
    if($_GET){
        session_start();
        $i = $_GET['id'];
        $ik = $_GET['idk'];
        $con = mysqli_connect("localhost","root","","projektstrona");
        $q = mysqli_query($con,"DELETE FROM klienci WHERE id_klienta=$i");
        $q2 = mysqli_query($con,"ALTER TABLE klienci AUTO_INCREMENT=0");
        $ilo = mysqli_query($con,"UPDATE ksiazki SET l_sztuk = l_sztuk+1 WHERE id_ksiazki=$ik;");
        if($q){
            echo "pomyślnie usunięto klienta<br>";
            echo "<a href='./tool.php'>wróć</a>";

        }
        else{
            echo "nie usunięto, wykryto błąd";
        }
    }
?>