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
        <h1>Ewentualne pytania prosimy wysyłać za pomocą formularza poniżej</h1>
        <article>

            <form action="scripts/maile.php" method="post">
                <input type="email" name="mail" placeholder="mail:" minlength="5" required><br>
                <textarea name="content" id="content" cols="30" rows="10" placeholder="treść pytania: " required></textarea><br>
                <input type="submit" value="wyślij">
            </form>
            <?php error_reporting(0); if($_GET['k']==1){echo "<p>przesłano</p>";}?>
        </article>
    </main>
    <footer><div>Adres biblioteki: ul. Dziwna 12 Poznań</div></div>godz: pn-pt 8-16</div></footer>
    <script src="scripts/menuPop.js"></script>
</body>
</html>