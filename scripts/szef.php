<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td,th{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if($_SESSION['login']!='szef'){
            header("location: /projekt_strona/logowanie");
        }
        echo "<h1>Witaj, ".$_SESSION['login']."ie</h1>";
    ?>
    <h1>Usuń pracownika</h1>
    <table>
    <tr><th>id</th><th>login</th></tr>
    <?php
        $con = mysqli_connect('localhost','root','','projektstrona');
        $r = mysqli_query($con,"SELECT id_bib,login, haslo FROM `bibliotekarze`;");
        while($i=mysqli_fetch_row($r)){
            echo "<tr><td>$i[0]</td><td>$i[1]</td><td><a href='del_biba.php?id=$i[0]'>usuń</a></td></tr>";
        }
    ?>
    </table>
    <h1>Dodaj pracownika</h1>
    <form action="dodajb.php" method="post">
        <input type="text" name="log" placeholder="login" required>
        <input type="password" name="pass" minlength="7" placeholder="hasło" required>
        <input type="submit" value="dodaj">
    </form>
    <br>
    <a href="logout.php">wyloguj</a>
</body>
</html>
