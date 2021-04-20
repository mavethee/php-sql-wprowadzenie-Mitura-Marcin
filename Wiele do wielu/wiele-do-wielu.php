<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Relacja wiele do wielu</title>
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/icons/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/icons/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/icons/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/icons/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/icons/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/icons/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/icons/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icons/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/icons/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icons/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/icons/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/icons/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body_wdw>

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
            <!--Podpisanie pracy w flexbox:-->
            <div class="container">
                <div class="item colorRed">
                    <?php
                        //Informacje o stronie:
                        echo("<h1 class='page_info'><br>Relacje wiele do wielu</br></h1>");    
                    ?>
                </div>
                <!--Menu boczne w flexbox:-->
                <div class="item colorBlue">
                <a class="link a" href="/index.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Główny index
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link b" href="/Organizacja%20i%20pracownicy/organizacja_i_pracownicy.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>  
                            Organizacja i pracownicy
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link c" href="/Organizacja%20i%20pracownicy/sortowanie.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Sortowanie
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link d" href="/Organizacja%20i%20pracownicy/limit.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Limit
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link e" href="/Organizacja%20i%20pracownicy/funkcje_agregujace.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Funkcje agregujące
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link f" href="/Data%20i%20czas/data_i_czas.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Data i czas
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link g" href="/Data%20i%20czas/formatowanie_dat.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                              Formatowanie dat
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link h" href="/Formularze/formularz.html">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Formularz - Strona.php
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link j" href="/Formularze/daneDoBazy.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Formularz - daneDoBazy.php
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link k" href="/Biblioteka/biblioteka.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Biblioteka
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link l" href="/flexbox/flexbox-cubes/flexbox-cube.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Flexbox
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link m" href="/Wiele%20do%20wielu/wiele-do-wielu.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Wiele do wielu
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link n" href="https://projekt-testowy-mavethee.herokuapp.com/">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Testowanko
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link o" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            GitHub - PHP
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link p" href="https://github.com/mavethee/projekt_testowy">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            GitHub - Testowanko
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                </div>
                    <!--Treść strony w flexbox:-->
                    <div class="item colorGreen">
                        <?php
                            //Logowanie do serwera mySQL:
                            require($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');
                            
                            $sql=("SELECT * FROM autor");
                            echo("<h1 class=SQL_excercise>Autorzy</h1>");
                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                            $result = $conn->query($sql);
                                echo("<table border=1>");
                                    echo("<th>id_autor</th>");
                                    echo("<th>nazwisko</th>");
                                        while($row=$result->fetch_assoc())
                                        {
                                            echo("<tr>");
                                            echo("<td>".$row['id_autor']."</td><td>".$row['nazwisko']."</td>");
                                            echo("</tr>");
                                        }
                                echo("</table>");
                            
                            $sql=("SELECT * FROM tytul");
                            echo("<h1 class=SQL_excercise>Tytuły</h1>");
                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                            $result = $conn->query($sql);
                                    echo("<table border=1>");
                                    echo("<th>id_tytul</th>");
                                    echo("<th>tytul</th>");
                                        while($row=$result->fetch_assoc())
                                        {
                                            echo("<tr>");
                                            echo("<td>".$row['id_tytul']."</td><td>".$row['tytul']."</td>");
                                            echo("</tr>");
                                        }
                                echo("</table>");
                            
                            $sql=("SELECT * FROM autor_tytul, autor, tytul where autor_id = id_autor and tytul_id = id_tytul");
                            echo("<h1 class=SQL_excercise>Autorzy oraz tytuły</h1>");
                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                            $result = $conn->query($sql);
                                echo("<table border=1>");
                                    echo("<th>id</th>");
                                    echo("<th>Nazwisko autora</th>");
                                    echo("<th>Tytuł książki</th>");
                                        while($row=$result->fetch_assoc())
                                        {
                                            echo("<tr>");
                                            echo("<td>".$row['id']."</td><td>".$row['nazwisko']."</td><td>".$row['tytul']."</td>");
                                            echo("</tr>");
                                        }
                                echo("</table>");
                        ?>
                    </div>
            </div>
</body>
</html>