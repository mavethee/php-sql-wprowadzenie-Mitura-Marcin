<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Formatowanie dat</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body class="body_df">
    <div class="nav">
            <a class="link a" href="index.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>
                    Główny index
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>
            </a>
            <a class="link b" href="Organizacja_i_pracownicy.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>  
                    Organizacja i pracownicy
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>
            </a>
            <a class="link c" href="Sortowanie.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Sortowanie
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link d" href="Limit.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Limit
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link e" href="Funkcje_agregujace.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Funkcje agregujące
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link f" href="Data_i_czas.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Data i czas
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link g" href="Date_format.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Formatowanie dat
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link h" href="formularz.html">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Formularz - Strona.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link j" href="daneDoBazy.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Formularz - daneDoBazy.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link k" href="Library.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Książki
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link l" href="https://projekt-testowy-mavethee.herokuapp.com/">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link m" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    GitHub - PHP
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link n" href="https://github.com/mavethee/projekt_testowy">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    GitHub - Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
    </div>
        <?php

        //Informacja o stronie:
        echo("<h1 class='page_info'><br>Jesteś w Date_format.php</h1></br>");

        //Logowanie do serwera mySQL
        require_once("connect.php");

        //Zadanie 1: Wyświetl nazwy dni w dacie urodzenia:
        $sql1=("SET lc_time_names = 'pl_PL'");
        $sql2=("SELECT *, DATE_FORMAT(data_urodzenia,'%W, %d-%m-%Y') AS szczegółowa_data_urodzenia FROM pracownicy");
        echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetl nazwy dni w dacie urodzenia</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL do polskich nazw: ".$sql1."</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql2."</h4>");
        $result=$conn->query("$sql1");
        $result=$conn->query("$sql2");
        echo("<table border=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>szczegółowa_data_urodzenia</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["szczegółowa_data_urodzenia"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 2: Wypisz dzisiejszą nazwę dnia po polsku:
        $sql1=("SET lc_time_names = 'pl_PL'");
        $sql2=("SELECT DATE_FORMAT(CURDATE(), '%W') AS dzisiejszy_dzień");
        echo("<h1 class=SQL_excercise>Zadanie 2: Wypisz dzisiejszą nazwę dnia po polsku</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL do polskich nazw: ".$sql1."</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql2."</h4>");
        $result=$conn->query("$sql1");
        $result=$conn->query("$sql2");
        echo("<table border=1>");
        echo("<th>dzisiejszy_dzień</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["dzisiejszy_dzień"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 3: Wyświetl nazwy miesięcy w dacie urodzenia:
        $sql1=("SET lc_time_names = 'pl_PL'");
        $sql2=("SELECT *, DATE_FORMAT(data_urodzenia,'%W, %d %M %Y') AS szczegółowa_data_urodzenia FROM pracownicy");
        echo("<h1 class=SQL_excercise>Zadanie 3: Wyświetl nazwy miesięcy w dacie urodzenia</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL do polskich nazw: ".$sql1."</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql2."</h4>");
        $result=$conn->query("$sql1");
        $result=$conn->query("$sql2");
        echo("<table border=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>szczegółowa_data_urodzenia</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["szczegółowa_data_urodzenia"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 4: Wyświetl obecną, dokładną godzinę z dokładnością do milisekund:
        $sql=("SELECT curtime(4) AS Aktualna_godzina_z_dokładnością_do_milisekund");
        echo("<h1 class=SQL_excercise>Zadanie 4: Wyświetl obecną, dokładną godzinę z dokładnością do milisekund</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
        $result=$conn->query("$sql");
        echo("<table border=1>");
        echo("<th>Aktualna_godzina_z_dokładnością_do_milisekund</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Aktualna_godzina_z_dokładnością_do_milisekund"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 5: Wyświetl datę urodzenia w formie: ROK-MIESIĄC-DZIEŃ_TYGODNIA:
        $sql1=("SET lc_time_names = 'pl_PL'");
        $sql2=("SELECT *, DATE_FORMAT(data_urodzenia,'%Y-%M-%W') AS data_urodzenia_w_formie_RRRR_MM_DD FROM pracownicy");
        echo("<h1 class=SQL_excercise>Zadanie 5: Wyświetl datę urodzenia w formie: ROK-MIESIĄC-DZIEŃ_TYGODNIA</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL do polskich nazw: ".$sql1."</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql2."</h4>");
        $result=$conn->query("$sql1");
        $result=$conn->query("$sql2");
        echo("<table border=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>data_urodzenia_w_formie_RRRR_MM_DD</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["data_urodzenia_w_formie_RRRR_MM_DD"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 6: Wyświetl ile dni, godzin i minut żyją pracownicy:
        $sql=("SELECT id_pracownicy, imie, DATEDIFF(CURDATE(),data_urodzenia) AS dni_życia, DATEDIFF(CURDATE(),data_urodzenia)*24 AS godziny_życia, DATEDIFF(CURDATE(),data_urodzenia)*24*60 AS minuty_życia FROM pracownicy");
        echo("<h1 class=SQL_excercise>Zadanie 6: Wyświetl ile dni, godzin i minut żyją pracownicy</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
        $result=$conn->query("$sql");
        echo("<table border=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>dni_życia</th>");
        echo("<th>godziny_życia</th>");
        echo("<th>minuty_życia</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dni_życia"]."</td><td>".$row["godziny_życia"]."</td><td>".$row["minuty_życia"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 7: Wyświetl, w którym dniu się urodziłeś:
        $sql1=("SET lc_time_names = 'pl_PL'");
        $sql2=("SELECT DATE_FORMAT('2003-07-24', '%j') AS urodzony_dnia_roku");
        echo("<h1 class=SQL_excercise>Zadanie 7: Wyświetl, w jakim dniu się urodziłeś</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL do polskich nazw: ".$sql1."</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql2."</h4>");
        $result=$conn->query("$sql1");
        $result=$conn->query("$sql2");
        echo("<table border=1>");
        echo("<th>urodzony_dnia_roku</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["urodzony_dnia_roku"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 8: Wyświetl pracowników z nazwami dni tygodnia, w których się urodzili z sortowaniem według dni tygodnia:
        $sql1=("SET lc_time_names = 'pl_PL'");
        $sql2=("SELECT imie, data_urodzenia, DATE_FORMAT(data_urodzenia,'%W') AS dzień_urodzenia FROM pracownicy ORDER BY CASE WHEN dzień_urodzenia='Poniedziałek' THEN 1 WHEN dzień_urodzenia='Wtorek' THEN 2 WHEN dzień_urodzenia='Środa' THEN 3 WHEN dzień_urodzenia='Czwartek' THEN 4 WHEN dzień_urodzenia='Piątek' THEN 5 WHEN dzień_urodzenia='Sobota' THEN 6 WHEN dzień_urodzenia='Niedziela' THEN 7 END ASC");
        echo("<h1 class=SQL_excercise>Zadanie 8: Wyświetl pracowników z nazwami dni tygodnia, w których się urodzili z sortowaniem według dni tygodnia</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL do polskich nazw: ".$sql1."</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql2."</h4>");
        $result=$conn->query("$sql1");
        $result=$conn->query("$sql2");
        echo("<table border=1>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>dzień_urodzenia</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzień_urodzenia"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 9: Wyświetl ilu pracowników urodziło się w poniedziałek:
        $sql1=("SET lc_time_names = 'pl_PL'");
        $sql2=("SELECT Count(DATE_FORMAT(data_urodzenia,'%W')) AS ilość_pracowników_urodzonych_w_poniedziałek FROM pracownicy where DATE_FORMAT(data_urodzenia, '%W')='Poniedziałek'");
        echo("<h1 class=SQL_excercise>Zadanie 9: Wyświetl ilu pracowników urodziło się w poniedziałek</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL do polskich nazw: ".$sql1."</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql2."</h4>");
        $result=$conn->query("$sql1");
        $result=$conn->query("$sql2");
        echo("<table border=1>");
        echo("<th>ilość_pracowników_urodzonych_w_poniedziałek</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["ilość_pracowników_urodzonych_w_poniedziałek"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 10: Wyświetl ilu pracowników urodziło się w poszczególne dni tygodnia:
        $sql1=("SET lc_time_names = 'pl_PL'");
        $sql2=("SELECT DATE_FORMAT(data_urodzenia,'%W') AS dzien_urodzenia, COUNT(DATE_FORMAT(data_urodzenia,'%W')) AS ilosc FROM pracownicy GROUP BY dzien_urodzenia ORDER BY CASE WHEN dzien='Poniedziałek' THEN 1 WHEN dzien='Wtorek' THEN 2 WHEN dzien='Środa' THEN 3 WHEN dzien='Czwartek' THEN 4 WHEN dzien='Piątek' THEN 5 WHEN dzien='Sobota' THEN 6 WHEN dzien='Niedziela' THEN 7 END ASC");
        echo("<h1 class=SQL_excercise>Zadanie 10: Wyświetl ilu pracowników urodziło się w poszczególne dni tygodnia</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL do polskich nazw: ".$sql1."</h1>");
        echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql2."</h4>");
        $result=$conn->query("$sql1");
        $result=$conn->query("$sql2");
        echo("<table border=1>");
        echo("<th>dzien_urodzenia</th>");
        echo("<th>ilosc</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["dzien_urodzenia"]."</td><td>".$row["ilosc"]."</td>");
            echo("</tr>");
        }
        echo("</table>");
        ?>
</body>
</html>