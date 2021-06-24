<?php
    $con = mysqli_connect("localhost","root","","projektstrona");
    $oferty = mysqli_query($con,"SELECT pseudonim, opinia FROM opinie;");
    while($row=mysqli_fetch_row($oferty)){
        echo "<div><p>Pseudonim: $row[0]</p><p>Opinia: $row[1]</p></div>";
    }
?>