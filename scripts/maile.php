<?php
    $mail = $_POST['mail'];
    $content = $_POST['content'];
    $q = mail("zielonasowa@localhost",$mail,$content, "From: kontakt@localhost");
    if($q){
        echo "przesłano!";
        header("location: /projekt_strona/kontakt?k=1");
    }
    else{
        echo "failed";
    }
?>