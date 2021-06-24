<?php
    session_start();
    $con = mysqli_connect("localhost","root","","projektstrona");
    $l = strip_tags($_POST['log']);
    $p = strip_tags($_POST['pass']);
    $query = mysqli_query($con,"INSERT INTO bibliotekarze VALUES(null,'$l','$p')");
    header("location: /projekt_strona/scripts/szef.php");
?>