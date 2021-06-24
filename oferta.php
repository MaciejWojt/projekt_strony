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
        <div style="display: flex; justify-content: center;">
            <h1>Nasze Książki: </h1>
        </div>
        <form method="get">
            <input type="text" name="tytul" placeholder="tytuł">
            <input type="text" name="autor" placeholder="autor">
            <select name="kategoria" id="kategorie">
                <option value="">wszystkie</option>
                <option value="romans">romans</option>
                <option value="kryminał">kryminał</option>
                <option value="fantasy">fantasy</option>
                <option value="horror">horror</option>
                <option value="literatura faktu">literatura faktu</option>
            </select>
            <input type="submit" value="szukaj">
        </form>
        <div id="context">
        <article class="oferty">
            <?php
                require_once("scripts/oferta_skrypt.php");
            ?>
        </article>
        </div>
        <script src="scripts/menuPop.js"></script>
        <!-- <script src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/jquery.mark.es6.js"></script>
        <script src="scripts/wyszukaj.js"></script> -->
    </main>
    <footer><div>Adres biblioteki: ul. Dziwna 12 Poznań</div></div>godz: pn-pt 8-16</div></footer>
</body>
</html>