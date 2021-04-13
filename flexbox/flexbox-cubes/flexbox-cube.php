<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Flexbox CSS - Zadanie 1</title>
        <link rel="stylesheet" href="style1.css">
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
<body>
    <div class="container">
        <!--Tytuł strony-->
        <div class="item colorRed">
            <?php
                //Informacja o stronie:
                echo("<h1 class='page_info'><br>Flexbox CSS - Zadanie 1</h1></br>");
            ?>
        </div>
            <!--Menu boczne-->
            <div class="item colorBlue">
                <a class="link a" href="/flexbox-cube.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Flexbox Cube - spis zadań
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link b" href="/zadanie1.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>  
                        Zadanie 1
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link c" href="/zadanie2.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Zadanie 2
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link d" href="/zadanie3.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Zadanie 3
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link e" href="/zadanie4.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Zadanie 4
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link f" href="/zadanie5.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Zadanie 5
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link g" href="/zadanie6.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Zadanie 6
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link h" href="/zadanie7.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Zadanie 7
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link j" href="/zadanie8.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Zadanie 8
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link k" href="/zadanie9.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Zadanie 9
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link l" href="/zadanie10.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Zadanie 10
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link m" href="/zadanie11.php">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Zadanie 11
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                </a>
                <a class="link n" href="https://php-mitura-marcin.herokuapp.com/">
                    <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                        Powrót do głównego indexu!
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
                        <div class="nav">
                            <a class="link" href="/index.php">Index</a>
                            <a class="link" href="https://github.com/SK-2019/php-sql-wprowadzenie-Chrosnik-Jakub">GITHUB</a>
                        </div>
                    </div>
                    <h1>Zadanie 2</h1>
                    <div class="container2">
                        <div class="nav">
                            <a class="link2" href="/index.php">Index</a>
                            <a class="link2" href="https://github.com/SK-2019/php-sql-wprowadzenie-Chrosnik-Jakub">GITHUB</a>
                        </div>
                    </div>
                    <h1>Zadanie 3</h1>
                    <div class="container3">
                        <div class="nav">
                            zad 3
                        </div>
                    </div>
                    <h1>Zadanie 4</h1>
                    <div class="container4">
                        <div class="nav">
                            zad 4
                        </div>
                    </div>
                    <h1>Zadanie 5</h1>
                    <div class="container5">
                        <div class="nav">
                            zad 5
                        </div>
                    </div>
                    <h1>Zadanie 6</h1>
                    <div class="container6">
                        <div class="nav">
                            zad 6
                        </div>
                    </div>
                    <h1>Zadanie 7</h1>
                    <div class="container7">
                        <div class="nav">
                            zad 7
                        </div>
                    </div>
                    <h1>Zadanie 8</h1>
                    <div class="container8">
                        <div class="nav">
                            zad 8
                        </div>
                        <div class="nav">
                            zad 8
                        </div>
                    </div>
                    <h1>Zadanie 9</h1>
                    <div class="container9">
                        <div class="nav">
                            zad 9
                        </div>
                        <div class="nav">
                            zad 9
                        </div>
                    </div>
                    <h1>Zadanie 10</h1>
                    <div class="container10">
                        <div class="nav">
                            zad 10
                        </div>
                        <div class="nav">
                            zad 10
                        </div>
                    </div>
                    <h1>Zadanie 11</h1>
                    <div class="container11">
                        <div class="nav">
                            zad 11
                        </div>
                        <div class="nav">
                            zad 11
                        </div>
                    </div>
                    <h1>Zadanie 12</h1>
                    <div class="container12">
                        <div class="nav">
                            zad 12
                        </div>
                        <div class="nav">
                            zad 12
                        </div>
                </div>
    </div>
</body>
</html>