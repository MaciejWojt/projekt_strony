
<?php
    $con = mysqli_connect("localhost","root","","projektstrona");
    $p = strip_tags($_POST['pseudo']);
    $t = strip_tags($_POST['tekst']);
    $query = mysqli_query($con,"INSERT INTO opinie VALUES(null,'$p','$t')");
    header("location: /projekt_strona/opinie");
    
    
?>
