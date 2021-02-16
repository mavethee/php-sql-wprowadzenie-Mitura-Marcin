<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Wypożyczalnia</title>
        <link rel="stylesheet" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/style.css'">
        <link rel="apple-touch-icon" sizes="57x57" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-57x57.png'">
        <link rel="apple-touch-icon" sizes="60x60" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-60x60.png'">
        <link rel="apple-touch-icon" sizes="72x72" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-72x72.png'">
        <link rel="apple-touch-icon" sizes="76x76" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-76x76.png'">
        <link rel="apple-touch-icon" sizes="114x114" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-114x114.png'">
        <link rel="apple-touch-icon" sizes="120x120" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-120x120.png'">
        <link rel="apple-touch-icon" sizes="144x144" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-144x144.png'">
        <link rel="apple-touch-icon" sizes="152x152" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-152x152.png'">
        <link rel="apple-touch-icon" sizes="180x180" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-180x180.png'">
        <link rel="icon" type="image/png" sizes="192x192"  href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/android-icon-192x192.png'">
        <link rel="icon" type="image/png" sizes="32x32" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/favicon-32x32.png'">
        <link rel="icon" type="image/png" sizes="96x96" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/favicon-96x96.png'">
        <link rel="icon" type="image/png" sizes="16x16" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/favicon-16x16.png'">
        <link rel="manifest" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/manifest.json'">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/ms-icon-144x144.png'">
        <meta name="theme-color" content="#ffffff">
    </head>
<body class="body_lib">
    <!--Tytuł strony w flexbox:-->
    <div class="container">
        <div class="item colorRed">
            <?php
                //Informacja o stronie:
                echo("<h1 class=page_info><br>Jesteś w Wypozyczalnia.php</h1></br>");
                
            ?>
        </div>
            <!--Menu boczne w flexbox:-->
            <div class="item colorBlue">
            <a class="link a" href="$_SERVER['DOCUMENT_ROOT'] . '/index.php'">>CUMENT_ROOT'] . '/inde.php'">">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    Główny index
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
            </a>
            <a class="link b" href="$_SERVER['DOCUMENT_ROOT'] . '/_SERVER['DOCUMENT_ROOT'] . '/Organizacja%20i%20pracownicy/organizacja_i_pracownicy.php'">>
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>  
                    Organizacja i pracownicy
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
            </a>
            <a class="link c" href="$_SERVER['DOCUMENT_ROOT'] . '/_SERVER['DOCUMENT_ROOT'] . '/Organizacja%20i%20pracownicy/sortowanie.php'">>
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Sortowanie
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link d" href="$_SERVER['DOCUMENT_ROOT'] . '/_SERVER['DOCUMENT_ROOT'] . '/limit.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Limit
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link e" href="$_SERVER['DOCUMENT_ROOT'] . '/_SERVER['DOCUMENT_ROOT'] . '/Organizacja%20i%20pracownicy/funkcje_agregujace.php'">>
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Funkcje agregujące
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link f" href="$_SERVER['DOCUMENT_ROOT'] . '/_SERVER['DOCUMENT_ROOT'] . '/Data%20i%20czas/data_i_czas.php'">>
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Data i czas
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link g" href="$_SERVER['DOCUMENT_ROOT'] . '/_SERVER['DOCUMENT_ROOT'] . '/Data%20i%20czas/formatowanie_dat.php'">>
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Formatowanie dat
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link h" href="$_SERVER['DOCUMENT_ROOT'] . '/_SERVER['DOCUMENT_ROOT'] . '/Formularze/formularz.html'"'"">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Formularz - Strona.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link j" href="$_SERVER['DOCUMENT_ROOT'] . '/_SERVER['DOCUMENT_ROOT'] . '/Formularze/daneDoBazy.php'">>
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Formularz - daneDoBazy.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link k" href="$_SERVER['DOCUMENT_ROOT'] . '/_SERVER['DOCUMENT_ROOT'] . '/Biblioteka/biblioteka.php'">>
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Książki
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link l" href="https://projekt-testowy-mavethee.herokuapp.com/">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link m" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    GitHub - PHP
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link n" href="https://github.com/mavethee/projekt_testowy">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    GitHub - Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
    <script>
                        window.onload = function() 
                        {
                        var context = new AudioContext();
                        }
                    </script>

            <!--Muzyka w tle, zapętlona-->
            <audio controls autoplay loop>
                <source src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/music/_OST.mp3" type="audio/mpeg">
            </audio>
                <?php
                    //Wyświetlenie informacji wprowadzonej przez użytkownika:
                    echo("<h4 class='renting_form'>Autor: ".$_POST['Autor']."</h4>");
                    echo("<h4 class='renting_form'>Tytuł: ".$_POST['Tytuł']."</h4>");
                ?>
</body>
</html>
