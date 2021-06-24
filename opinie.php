<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="strona księgarni Zielona Sowa">
    <meta name="keywords" content="księgarnia, książki">
    <meta name="author" content="Maciej Wojtkowiak">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg">
    <div id="navmenu">
        <button type="button" id="broken"><img id="brokenpop" src="chair.png"></button>
        <button type="button" id="fonty">styl</button>
        <button type="button" id="plus">+</button>
        <button type="button" id="minus">-</button>
        <button type="button" id="menu"><img id="menupop" src="menupop.ico"></button>
    </div>
    <main>
        <header>
            <img id="logo" src="library_logo.png" alt="logo">
            <p>Strona należąca do biblioteki Zielona Sowa</p>
        </header>
        <nav>
            <a href="główna">GŁÓWNA</a>
            <a href="oferta">OFERTA</a>
            <a href="nowości">NOWOŚCI</a>
            <a href="opinie">OPINIE</a>
            <a href="kontakt">KONTAKT</a>
            <a href="logowanie">LOGOWANIE</a>
        </nav>
        <article class="opinie" id="navbar">
            <?php
                require("scripts/opinie_skrypt.php");
            ?>
        </article>
        <input id="l" type="button" value="<" style="float: left;">
        <input id="r" type="button" value=">">
        <script src="scripts/slider.js"></script>
        <br><br>
        <form action="./scripts/dodajo.php" method="post">
            <input maxlength="10" minlength="3" name="pseudo" type="text" placeholder="podaj pseudonim" required><br>
            <textarea maxlength="20" minlength="3" name="tekst" id="tekst" cols="30" rows="10" placeholder="tutaj wpisz swoją opinię" required></textarea><br>
            <input type="submit" value="dodaj">

        </form>
    </main>
    <footer><div>Adres biblioteki: ul. Dziwna 12 Poznań</div></div>godz: pn-pt 8-16</div></footer>
    <script src="scripts/menuPop.js"></script>
</body>
</html>