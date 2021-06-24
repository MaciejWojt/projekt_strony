<?php
    session_start();
    unset($_SESSION);
    echo "Użytkownik ".$_SESSION["login"]." został wylogowany.";
    session_destroy();
    header("location: /projekt_strona/logowanie");

?>