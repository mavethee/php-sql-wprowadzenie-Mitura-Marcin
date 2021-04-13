<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Flexbox CSS - Cube</title>
        <link rel="stylesheet" href="flexbox-cube.css">
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/icons/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/icons/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/icons/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/icons/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/icons/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/icons/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/icons/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/assets/icons/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
<body class="flex">
    <div class="container">
        <!--Tytuł strony-->
        <div class="item colorRed">
            <?php
                //Informacja o stronie:
                echo("<h1 class='page_info'><br>Flexbox CSS - Zadanie 1</h1></br>");
            ?>
        </div>
                <!--Menu boczne w flexbox:-->
                <div class="item colorBlue">
                    <a class="nav_link a" href="/index.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Główny index
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link b" href="/Organizacja%20i%20pracownicy/organizacja_i_pracownicy.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>  
                            Organizacja i pracownicy
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link c" href="/Organizacja%20i%20pracownicy/sortowanie.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Sortowanie
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link d" href="/Organizacja%20i%20pracownicy/limit.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Limit
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link e" href="/Organizacja%20i%20pracownicy/funkcje_agregujace.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Funkcje agregujące
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link f" href="/Data%20i%20czas/data_i_czas.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Data i czas
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link g" href="/Data%20i%20czas/formatowanie_dat.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                              Formatowanie dat
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link h" href="/Formularze/formularz.html">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Formularz - Strona.php
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link j" href="/Formularze/daneDoBazy.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Formularz - daneDoBazy.php
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link k" href="/Biblioteka/biblioteka.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Biblioteka
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link l" href="/flexbox/flexbox-cubes/flexbox-cube.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Flexbox
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link m" href="https://projekt-testowy-mavethee.herokuapp.com/">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Testowanko
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link n" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            GitHub - PHP
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="nav_link o" href="https://github.com/mavethee/projekt_testowy">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            GitHub - Testowanko
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                </div>

                    <!--Skrypt pod autoplay muzyki w tle-->
                    <script>
                        window.onload = function() 
                        {
                        var context = new AudioContext();
                        }
                    </script>

            <!--Muzyka w tle, zapętlona-->
            <audio controls autoplay loop>
                <source src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/music/Kara_OST.mp3" type="audio/mpeg">
            </audio>

                <!--Treść strony w flexbox:-->
                <div class="item colorGreen">
                    <h1>Zadanie 1</h1>
                    <div class="container">
                        <div class="nav-ex">
                            <a class="nav_link" href="https://www.rpcs3.net/">nav_link</a>
                            <a class="nav_link" href="https://www.rpcs3.net/">nav_link</a>
                            <a class="nav_link" href="https://www.rpcs3.net/">nav_link</a>
                        </div>
                    </div>
                    <h1>Zadanie 2</h1>
                    <div class="container2">
                        <div class="nav-ex">
                            <a class="nav_link" href="https://www.pcsx2.net/">nav_link</a>
                            <a class="nav_link" href="https://www.pcsx2.net/">nav_link</a>
                            <a class="nav_link" href="https://www.pcsx2.net/">nav_link</a>
                        </div>
                    </div>
                    <h1>Zadanie 3</h1>
                    <div class="container3">
                        <div class="nav-ex">
                            zad 3
                        </div>
                    </div>
                    <h1>Zadanie 4</h1>
                    <div class="container4">
                        <div class="nav-ex">
                            zad 4
                        </div>
                    </div>
                    <h1>Zadanie 5</h1>
                    <div class="container5">
                        <div class="nav-ex">
                            zad 5
                        </div>
                    </div>
                    <h1>Zadanie 6</h1>
                    <div class="container6">
                        <div class="nav-ex">
                            zad 6
                        </div>
                    </div>
                    <h1>Zadanie 7</h1>
                    <div class="container7">
                        <div class="nav-ex">
                            zad 7
                        </div>
                    </div>
                    <h1>Zadanie 8</h1>
                    <div class="container8">
                        <div class="nav-ex">
                            zad 8
                        </div>
                        <div class="nav-ex">
                            zad 8
                        </div>
                    </div>
                    <h1>Zadanie 9</h1>
                    <div class="container9">
                        <div class="nav-ex">
                            zad 9
                        </div>
                        <div class="nav-ex">
                            zad 9
                        </div>
                    </div>
                    <h1>Zadanie 10</h1>
                    <div class="container10">
                        <div class="nav-ex">
                            zad 10
                        </div>
                        <div class="nav-ex">
                            zad 10
                        </div>
                    </div>
                    <h1>Zadanie 11</h1>
                    <div class="container11">
                        <div class="nav-ex">
                            zad 11
                        </div>
                        <div class="nav-ex">
                            zad 11
                        </div>
                    </div>
                    <h1>Zadanie 12</h1>
                    <div class="container12">
                        <div class="nav-ex">
                            zad 12
                        </div>
                        <div class="nav-ex">
                            zad 12
                        </div>
                </div>
    </div>
</body>
</html>