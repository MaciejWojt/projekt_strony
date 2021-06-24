<?php
    session_start();
    $idk = strip_tags($_POST['ksiazka']);
    $mail = strip_tags($_POST['mail']);
    $tel = strip_tags($_POST['telefon']);
    $data = strip_tags($_POST['data']);
    $con = mysqli_connect("localhost","root","","projektstrona");
    $sprawdz = mysqli_query($con,"SELECT l_sztuk FROM ksiazki WHERE id_ksiazki=$idk;");
    while($row=mysqli_fetch_row($sprawdz)){
        if($row[0]==0){
            echo "brak na stanie!<br>";
            echo "<a href='./tool.php'>wróć</a>";
        }
        else{
            $q1 = mysqli_query($con,"INSERT INTO klienci VALUES(null, '$idk','$mail','$tel','$data')");
            $ilo = mysqli_query($con,"UPDATE ksiazki SET l_sztuk = l_sztuk-1 WHERE id_ksiazki=$idk;");
            if($q1 & $ilo){
                echo "pomyślnie dodano klienta<br>";
                echo "<a href='./tool.php'>wróć</a>";
            }
            else{
                echo "nie dodano, wykryto błąd";
            }
        }
    }
?>