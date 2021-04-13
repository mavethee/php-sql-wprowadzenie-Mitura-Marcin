<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Główny Index</title>
    <link rel="stylesheet" href="assets/style.css">
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
<body>

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
                    <h1 class='Student_name'>Marcin Mitura</h1>
                    <h1 class='Student_class_and_group'>Klasa 2Ti, grupa 1</h1>
                    <h1 class='Student_number'>Numer 22</h1>
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
                            Biblioteka
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link m" href="https://projekt-testowy-mavethee.herokuapp.com/">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Testowanko
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link n" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            GitHub - PHP
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link o" href="https://github.com/mavethee/projekt_testowy">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            GitHub - Testowanko
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                </div>
                    <!--Treść strony w flexbox:-->
                    <div class="item colorGreen">
                        <?php
                        //Informacje o stronie:
                        echo("<h1 class='page_info'><br>Jesteś w głównym indexie!</br></h1>");
        
                        //Logowanie do serwera mySQL:
                        require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');
        
        
                        //Zadanie 1: Wyświetlenie pełnej listy pracowników:
                        $sql=("SELECT * FROM pracownicy");
                        echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetlenie pełnej listy pracowników:</h1>");
                        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                        $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        while($row=$result->fetch_assoc())
                        {
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");
                        }
                        echo("</table>");
        
                        //Zadanie 2: Wyświetlenie tylko kobiet z listy pracowników:
                        $sql=("SELECT * FROM pracownicy WHERE imie LIKE '%a'");
                        echo("<h1 class=SQL_excercise>Zadanie 2: Wyświetlenie tylko kobiet z listy pracowników:</h1>");
                        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                        $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        while($row=$result->fetch_assoc())
                        {
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");
                        }
                        echo("</table>");
        
                        //Zadanie 3: Wyświetlenie tylko kobiet z działu 1 i 4:
                        $sql=("SELECT * FROM pracownicy WHERE imie LIKE '%a' AND (dzial=1 OR dzial=4)");
                        echo("<h1 class=SQL_excercise>Zadanie 3: Kobiety z działu 1 i 4:</h1>");
                        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                        $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        while($row=$result->fetch_assoc())
                        {
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");
                        }
                        echo("</table>");
        
                        //Zadanie 4: Wyświetlenie tylko kobiet zarabiających mniej niż 35 z działu 1 i 2:
                        $sql=("SELECT * FROM pracownicy WHERE imie LIKE '%a' AND (zarobki<35) AND (dzial=1 OR dzial=2)");
                        echo("<h1 class=SQL_excercise>Zadanie 4: Wyświetlenie tylko kobiet zarabiających mniej niż 35 z działu 1 i 2</h1>");
                        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                        $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        while($row=$result->fetch_assoc())
                        {
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");
                        }
                        echo("</table>");
        
                        //Zadanie 5: Wyświetlenie tylko mężczyzn zarabiający mniej niż 30:
                        $sql=("SELECT * FROM pracownicy WHERE imie NOT LIKE '%a' AND (zarobki<30)");
                        echo("<h1 class=SQL_excercise>Zadanie 5: Wyświetlenie tylko mężczyzn zarabiający mniej niż 30</h1>");
                        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                        $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>zarobki</th>");
                        while($row=$result->fetch_assoc())
                        {
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");
                        }
                        echo("</table>");
        
                        //Zadanie 6: Wyświetlenie "MOJA_SUMA" (funkcja SUM):
                        $sql=("SELECT dzial, SUM(zarobki) AS MOJA_SUMA FROM pracownicy GROUP BY dzial");
                        echo("<h1 class=SQL_excercise>Zadanie 6: Wyświetlenie 'MOJA_SUMA' (funkcja SUM)</h1>");
                        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                        $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>dzial</th>");
                        echo("<th>MOJA_SUMA</th>");
                        while($row=$result->fetch_assoc())
                        {
                            echo("<tr>");
                            echo("<td>".$row["dzial"]."</td><td>".$row["MOJA_SUMA"]."</td>");
                            echo("</tr>");
                        }
                        echo("</table>");
        
                        //Zadanie 7: Połączenie dwóch tabel:
                        $sql=("SELECT id_pracownicy, imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial");
                        echo("<h1 class=SQL_excercise>Zadanie 7: Połączenie dwóch tabel</h1>");
                        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                        $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>id_pracownicy</th>");
                        echo("<th>imie</th>");
                        echo("<th>dzial</th>");
                        echo("<th>nazwa_dzial</th>");
                        echo("<th>zarobki</th>");
                        while($row=$result->fetch_assoc())
                        {
                            echo("<tr>");
                            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td>");
                            echo("</tr>");
                        }
                        echo("</table>");
        
                        //Zadanie 8: Wyświetlenie średniej zarobków z połączonymi dwoma tabelami:
                        $sql=("SELECT dzial, nazwa_dzial, AVG(zarobki) AS Średnia_zarobków FROM pracownicy, organizacja WHERE id_org=dzial GROUP BY dzial");
                        echo("<h1 class=SQL_excercise>Zadanie 8: Wyświetlenie średniej zarobków z połączonymi dwoma tabelami</h1>");
                        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                        $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>dzial</th>");
                        echo("<th>nazwa_dzial</th>");
                        echo("<th>Średnia_zarobków</th>");
                        while($row=$result->fetch_assoc())
                        {
                            echo("<tr>");
                            echo("<td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["Średnia_zarobków"]."</td>");
                            echo("</tr>");
                        }
                        echo("</table>");
        
                        //Zadanie 9: Wyświetlenie sumy zarobków z połączonymi dwoma tabelami:
                        $sql=("SELECT dzial, nazwa_dzial, SUM(zarobki) AS Suma_zarobków FROM pracownicy, organizacja WHERE id_org=dzial GROUP BY dzial");
                        echo("<h1 class=SQL_excercise>Zadanie 9: Wyświetlenie sumy zarobków z połączonymi dwoma tabelami</h1>");
                        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                        $result=$conn->query($sql);
                        echo("<table border=1>");
                        echo("<th>dzial</th>");
                        echo("<th>nazwa_dzial</th>");
                        echo("<th>Suma_zarobków</th>");
                        while($row=$result->fetch_assoc())
                        {
                            echo("<tr>");
                            echo("<td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["Suma_zarobków"]."</td>");
                            echo("</tr>");
                        }
                        echo("</table>");
                        ?>
            </div>
</body>
</html>