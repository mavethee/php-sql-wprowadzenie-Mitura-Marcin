<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="nav">
        <a href="index.php">Główny index<a>;
        <a href="Organizacja_i_pracownicy.php">Organizacja_i_pracownicy<a>;
        <a href="Sortowanie.php">Sortowanie<a>;
        <a href="Limit.php">Limit<a>;
        <a href="Funkcje_agregujace.php">Funkcje_agregujące<a>;
        <a href="Data_i_czas.php">Data_i_czas<a>;
        <a href="Date_format.php">Formatowanie_dat<a>;
        <a href="formularz.html">Formularz - Strona.php<a>;
        <a href="daneDoBazy.php">Formularz - daneDoBazy.php<a>;
        <a href="https://projekt-testowy-mavethee.herokuapp.com/">Testowanko<a>;
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">GitHub - PHP<a>;
        <a href="https://github.com/mavethee/projekt_testowy">GitHub - Testowanko<a>;
    </div>
        <?php

        //Logowanie do serwera mySQL
        require_once("connect.php");

        echo("Funkcje_agregujące.php");
            //Zadanie 1: Wyświetlenie sumy zarobków wszystkich pracowników
            echo("<h1>Zadanie 1: Wyświetlenie sumy zarobków wszystkich pracowników</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT SUM(zarobki) AS Suma_zarobków_wszystkich_pracowników FROM pracownicy</h2>");
            $result=$conn->query("SELECT SUM(zarobki) AS Suma_zarobków_wszystkich_pracowników FROM pracownicy");
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
            echo("<h1>Zadanie 2: Wyświetlenie sumy zarobków wszystkich kobiet</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT SUM(zarobki) AS Suma_zarobków_kobiet FROM pracownicy WHERE imie LIKE '%a'</h2>");
            $result=$conn->query("SELECT SUM(zarobki) AS Suma_zarobków_kobiet FROM pracownicy WHERE imie LIKE '%a'");
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
            echo("<h1>Zadanie 3: Wyświetlenie sumy zarobków mężczyzn pracujących w dziale 2 i 3</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT SUM(zarobki) AS Suma_zarobków_mężczyzn_pracujących_w_dziale_2_i_3 FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=2 OR dzial=3)</h2>");
            $result=$conn->query("SELECT SUM(zarobki) AS Suma_zarobków_mężczyzn_pracujących_w_dziale_2_i_3 FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=2 OR dzial=3)");
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
            echo("<h1>Zadanie 4: Wyświetlenie średniej zarobków wszystkich męzczyzn</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT AVG(zarobki) AS Średnia_zarobków_mężczyzn FROM pracownicy WHERE imie NOT LIKE '%a'</h2>");
            $result=$conn->query("SELECT AVG(zarobki) AS Średnia_zarobków_mężczyzn FROM pracownicy WHERE imie NOT LIKE '%a'");
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
            echo("<h1>Zadanie 5: Wyświetlenie średniej zarobków pracowników z dzialu 4</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT AVG(zarobki) AS Średnia_zarobków_pracowników_z_działu_4 FROM pracownicy WHERE dzial=4</h2>");
            $result=$conn->query("SELECT AVG(zarobki) AS Średnia_zarobków_pracowników_z_działu_4 FROM pracownicy WHERE dzial=4");
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
            echo("<h1>Zadanie 6: Wyświetlenie średniej zarobków mężczyzn pracujących w dziale 2 i 3</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT AVG(zarobki) AS Średnia_zarobków_mężczyzn_pracujących_w_dziale_2_i_3 FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=1 OR dzial=2)</h2>");
            $result=$conn->query("SELECT AVG(zarobki) AS Średnia_zarobków_mężczyzn_pracujących_w_dziale_1_i_2 FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=1 OR dzial=2)");
            echo("<table border=1>");
            echo("<th>Średnia_zarobków_mężczyzn_pracujących_w_dziale_1_i_2</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["Średnia_zarobków_mężczyzn_pracujących_w_dziale_2_i_3"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 7: Ilość wszystkich pracowników:
            echo("<h1>Zadanie 7: Ilość wszystkich pracowników</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT COUNT(imie) AS Ilość_wszystkich_pracowników FROM pracownicy</h2>");
            $result=$conn->query("SELECT COUNT(imie) AS Ilość_wszystkich_pracowników FROM pracownicy");
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
            echo("<h1>Zadanie 8: Ilość kobiet pracujących w dziale 1 i 3</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT COUNT(imie) AS Ilość_kobiet_pracujących_w_dziale_1_i_3 FROM pracownicy WHERE imie LIKE '%a'</h2>");
            $result=$conn->query("SELECT COUNT(imie) AS Ilość_kobiet_pracujących_w_dziale_1_i_3 FROM pracownicy WHERE imie LIKE '%a'");
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
</body>
</html>