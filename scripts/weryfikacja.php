<?php
    $log = strip_tags($_POST['login']);
    $pass = strip_tags($_POST['password']);
    if($log=='szef' & $pass=='adminadmin'){
        session_start();
        $_SESSION["login"] = $log;
        header("location: /projekt_strona/scripts/szef.php");
    }
    else{
    $con = mysqli_connect('localhost','root','','projektstrona');
    $r = mysqli_query($con,"SELECT login, haslo FROM `bibliotekarze`;");
    $jest = 0;
    while($i=mysqli_fetch_row($r)){
        if($log==$i[0] & $pass==$i[1]){
            $jest = 1;
        }
    }
    if($jest==1){
        session_start();
        $_SESSION["login"] = $log;
        header("location: ./tool.php");
    }
    else{
        header("location: /projekt_strona/logowanie.php?v=1");
    }
}
?>