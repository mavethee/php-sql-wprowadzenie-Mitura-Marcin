<!DOCTYPE html'">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Funkcje agregujące</title>
        <link rel="stylesheet" href="assets/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="theme-color" content="#ffffff">
    </head>
<body class="body_aggrefunc">
    <div class="container">
        <div class="item header">
            <?php
                //Informacja o stronie:
                echo("<h1 class='page_info'><br>Jesteś w funkcje_agregujace.php</h1></br>");
            ?>
        </div>
        <!--Menu boczne w flexbox:-->
        <div class="item mainMBar">
            <?php include("../assets/mainMenuBar.php") ?>
        </div>
                    <!--Autoplay background music script-->
                    <script>
                        window.onload = function() 
                        {
                        var context = new AudioContext();
                        }
                    </script>

            <!--Autoplay music in loop-->
            <audio controls autoplay loop>
                <source src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/music/Kara_OST.mp3" type="audio/mpeg">
            </audio>
    <!--Treść w flexbox:-->
    <div class="item webpageContent">
        <?php

            //Logowanie do serwera mySQL:
            require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');

            //Zadanie 1: Wyświetlenie sumy zarobków wszystkich pracowników:
            $sql=("SELECT SUM(zarobki) AS Suma_zarobków_wszystkich_pracowników FROM pracownicy");
            echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetlenie sumy zarobków wszystkich pracowników</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>Suma_zarobków_wszystkich_pracowników</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["Suma_zarobków_wszystkich_pracowników"]."</td>");
                echo("</tr>");
            }
                echo("</table>");

            //Zadanie 2: Wyświetlenie sumy zarobków wszystkich kobiet:
            $sql=("SELECT SUM(zarobki) AS Suma_zarobków_kobiet FROM pracownicy WHERE imie LIKE '%a'");
            echo("<h1 class=SQL_excercise>Zadanie 2: Wyświetlenie sumy zarobków wszystkich kobiet</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>Suma_zarobków_kobiet</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["Suma_zarobków_kobiet"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 3: Wyświetlenie sumy zarobków mężczyzn pracujących w dziale 2 i 3:
            $sql=("SELECT SUM(zarobki) AS Suma_zarobków_mężczyzn_pracujących_w_dziale_2_i_3 FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=2 OR dzial=3)");
            echo("<h1 class=SQL_excercise>Zadanie 3: Wyświetlenie sumy zarobków mężczyzn pracujących w dziale 2 i 3</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>Suma_zarobków_mężczyzn_pracujących_w_dziale_2_i_3</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["Suma_zarobków_mężczyzn_pracujących_w_dziale_2_i_3"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 4: Wyświetlenie średniej zarobków wszystkich męzczyzn:
            $sql=("SELECT AVG(zarobki) AS Średnia_zarobków_mężczyzn FROM pracownicy WHERE imie NOT LIKE '%a'");
            echo("<h1 class=SQL_excercise>Zadanie 4: Wyświetlenie średniej zarobków wszystkich męzczyzn</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>Średnia_zarobków_mężczyzn</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["Średnia_zarobków_mężczyzn"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 5: Wyświetlenie średniej zarobków pracowników z dzialu 4:
            $sql=("SELECT AVG(zarobki) AS Średnia_zarobków_pracowników_z_działu_4 FROM pracownicy WHERE dzial=4");
            echo("<h1 class=SQL_excercise>Zadanie 5: Wyświetlenie średniej zarobków pracowników z dzialu 4</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>Średnia_zarobków_pracowników_z_działu_4</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["Średnia_zarobków_pracowników_z_działu_4"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 6: Wyświetlenie średniej zarobków mężczyzn pracujących w dziale 1 i 2:
            $sql=("SELECT AVG(zarobki) AS Średnia_zarobków_mężczyzn_pracujących_w_dziale_1_i_2 FROM pracownicy WHERE imie NOT LIKE '%a' AND (dzial=1 OR dzial=2)");
            echo("<h1 class=SQL_excercise>Zadanie 6: Wyświetlenie średniej zarobków mężczyzn pracujących w dziale 1 i 2</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>Średnia_zarobków_mężczyzn_pracujących_w_dziale_1_i_2</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["Średnia_zarobków_mężczyzn_pracujących_w_dziale_1_i_2"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 7: Ilość wszystkich pracowników:
            $sql=("SELECT COUNT(imie) AS Ilość_wszystkich_pracowników FROM pracownicy");
            echo("<h1 class=SQL_excercise>Zadanie 7: Ilość wszystkich pracowników</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>Ilość_wszystkich_pracowników</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["Ilość_wszystkich_pracowników"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 8: Ilość kobiet pracujących w dziale 1 i 3:
            $sql=("SELECT COUNT(imie) AS Ilość_kobiet_pracujących_w_dziale_1_i_3 FROM pracownicy WHERE imie LIKE '%a'");
            echo("<h1 class=SQL_excercise>Zadanie 8: Ilość kobiet pracujących w dziale 1 i 3</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>Ilość_kobiet_pracujących_w_dziale_1_i_3</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["Ilość_kobiet_pracujących_w_dziale_1_i_3"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

        ?>
    </div>
</body>
</html>
