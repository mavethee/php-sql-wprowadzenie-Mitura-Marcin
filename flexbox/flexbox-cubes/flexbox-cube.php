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
                echo("<h1 class='page_info'><br>Flexbox CSS - Kostka</h1></br>");
            ?>
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
                            <a class="link" href="https://www.rpcs3.net/">nav_link</a>
                            <a class="link" href="https://www.rpcs3.net/">nav_link</a>
                            <a class="link" href="https://www.rpcs3.net/">nav_link</a>
                        </div>
                    </div>
                    <h1>Zadanie 2</h1>
                    <div class="container2">
                        <div class="nav-ex">
                            <a class="link" href="https://www.pcsx2.net/">link</a>
                            <a class="link" href="https://www.pcsx2.net/">link</a>
                            <a class="link" href="https://www.pcsx2.net/">link</a>
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