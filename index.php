<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="nav">
        <a href="index.php">Główny index</a>
        <a href="Organizacja_i_pracownicy.php">Organizacja_i_pracownicy</a>
        <a href="Sortowanie.php">Sortowanie</a>
        <a href="Limit.php">Limit</a>
        <a href="Funkcje_agregujace.php">Funkcje_agregujące</a>
        <a href="Data_i_czas.php">Data_i_czas</a>
        <a href="Date_format.php">Formatowanie_dat</a>
        <a href="formularz.html">Formularz - Strona.php</a>
        <a href="daneDoBazy.php">Formularz - daneDoBazy.php</a>
        <a href="https://projekt-testowy-mavethee.herokuapp.com/">Testowanko</a>
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">GitHub - PHP</a>
        <a href="https://github.com/mavethee/projekt_testowy">GitHub - Testowanko</a>
    </div>
        <form action="strona.php" method="POST">
            <input type="text" name="name">
            <input type="submit" value="send">
        </form>

            <?php
            //Podpisanie pracy
            echo("<h1>Marcin Mitura</h1>");
            echo("<h2>Klasa 2Ti, grupa 1</h2>");
            echo("<h3>Numer 22</h3>");

            //Logowanie do serwera mySQL
            require_once("connect.php");

            //Zadanie 1: Wyświetlenie pełnej listy pracowników:
            echo("<h1>Zadanie 1: Wyświetlenie pełnej listy pracowników:</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy</h2>");
            $result=$conn->query("SELECT * FROM pracownicy");
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

            //Zadanie 2: Wyświetlenie tylko kobiet listy pracowników:
            echo("<h1>Zadanie 2: Wyświetlenie tylko kobiet listy pracowników:</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy WHERE imie LIKE '%a'</h2>");
            $result=$conn->query("SELECT * FROM pracownicy WHERE imie LIKE '%a'");
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

            //Zadanie 3: Kobiety z działu 1 i 4:
            echo("<h1>Zadanie 3: Kobiety z działu 1 i 4:</h1>");
            $result=$conn->query("SELECT * FROM pracownicy WHERE imie LIKE '%a' AND (dzial=1 OR dzial=4)");
            echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy WHERE imie LIKE '%a' AND (dzial=1 OR dzial=4)</h2>");
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

            //Zadanie 4: Kobiety zarabiające mniej niż 35 z działu 1 i 2:
            echo("<h1>Zadanie 4: Kobiety zarabiające mniej niż 35 z działu 1 i 2:</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy WHERE imie LIKE '%a' AND (zarobki<35) AND (dzial=1 OR dzial=2)</h2>");
            $result=$conn->query("SELECT * FROM pracownicy WHERE imie LIKE '%a' AND (zarobki<35) AND (dzial=1 OR dzial=2)");
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

            //Zadanie 5: Mężczyźni zarabiający mniej niż 30:
            echo("<h1>Zadanie 5: Mężczyźni zarabiający mniej niż 30:</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy WHERE imie NOT LIKE '%a' AND (zarobki<30)</h2>");
            $result=$conn->query("SELECT * FROM pracownicy WHERE imie NOT LIKE '%a' AND (zarobki<30)");
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

            //Zadanie 6: Wyświetlenie "MOJA_SUMA" (funkcja SUM)
            echo("<h1>Zadanie 6: Wyświetlenie 'MOJA_SUMA' (funkcja SUM)</h1>");
            $result=$conn->query("SELECT dzial, SUM(zarobki) AS MOJA_SUMA FROM pracownicy GROUP BY dzial");
            echo("<h2>Użyte zapytanie SQL: SELECT dzial, SUM(zarobki) AS MOJA_SUMA FROM pracownicy GROUP BY dzial</h2>");
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

            //Zadanie 7: Połączenie dwóch tabel
            echo("<h1>Zadanie 7: Połączenie dwóch tabel</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT id_pracownicy, imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial</h2>");
            $result=$conn->query("SELECT id_pracownicy, imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial");
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

            //Zadanie 8: Wyświetlenie średniej z połączonymi dwoma tabelami
            echo("<h1>Zadanie 8: Wyświetlenie średniej zarobków z połączonymi dwoma tabelami</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT dzial, nazwa_dzial, AVG(zarobki) AS Średnia_zarobków FROM pracownicy, organizacja WHERE id_org=dzial GROUP BY dzial</h2>");
            $result=$conn->query("SELECT dzial, nazwa_dzial, AVG(zarobki) AS Średnia_zarobków FROM pracownicy, organizacja WHERE id_org=dzial GROUP BY dzial");
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

            //Zadanie 9: Wyświetlenie sumy z połączonymi dwoma tabelami
            echo("<h1>Zadanie 9: Wyświetlenie sumy zarobków z połączonymi dwoma tabelami</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT dzial, nazwa_dzial, SUM(zarobki) AS Suma_zarobków FROM pracownicy, organizacja WHERE id_org=dzial GROUP BY dzial</h2>");
            $result=$conn->query("SELECT dzial, nazwa_dzial, SUM(zarobki) AS Suma_zarobków FROM pracownicy, organizacja WHERE id_org=dzial GROUP BY dzial");
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
</body>
</html>