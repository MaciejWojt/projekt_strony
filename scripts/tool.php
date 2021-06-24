<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: whitesmoke;
        }
        table,tr,td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
        
    </style>
</head>
<body>
    <?php
        session_start();
        if(!$_SESSION | $_SESSION['login']=='szef'){
            header("location: /projekt_strona/logowanie");
        }
        echo "<h1>Witaj, ".$_SESSION["login"]."</h1>";
    ?>
    <h1>Dodawanie klienta</h1>
    <form action="addCl.php" method="post">
        <input type="number" name="ksiazka" placeholder="id_ksiazki" required>
        <input type="mail" name="mail" placeholder="mail" required>
        <input type="text" name="telefon" placeholder="telefon" minlength="9" maxlength="9">
        <input type="date" name="data" placeholder="data" required>
        <input type="submit" value="dodaj">
    </form>
    <h1>Kasowanie klienta</h1>
    <table id="dane">
        <tr><th>id</th><th>id_książki</th><th>mail</th><th>numer_telefonu</th><th>data</th></tr>
        <?php
        $con = mysqli_connect("localhost","root","","projektstrona");
        $q = mysqli_query($con,"SELECT id_klienta,id_ksiazki,mail,numer_tel,data FROM klienci");
        while($r=mysqli_fetch_row($q)){
            echo "<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td><a href='/projekt_strona/scripts/del_client.php?id=$r[0]&idk=$r[1]'>usuń</a></td></tr>";
        }
        ?>
    </table>
    <h1>Usuwanie opinii</h1>
    <table>
        <tr><th>pseudonim</th><th>opinia</th></tr>
    <?php 
        $con = mysqli_connect("localhost","root","","projektstrona");
        $q = mysqli_query($con,"SELECT id_opinii,pseudonim, opinia FROM opinie");
        while($r=mysqli_fetch_row($q)){
            echo "<tr><td>$r[1]</td><td>$r[2]</td><td><a href='/projekt_strona/scripts/del_comment.php?id=$r[0]'>usuń</a></td></tr>";
        }
    ?>
    </table>
    <br>
    <a href="logout.php">wyloguj</a>
    <script src=clate.js></script>
</body>
</html>