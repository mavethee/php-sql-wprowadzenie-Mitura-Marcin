<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="nav">
            Place for navigation and links
            <a href="index.php">Główny index<a>;
            <a href="Organizacja_i_pracownicy.php">Organizacja_i_pracownicy<a>;
            <a href="Sortowanie.php">Sortowanie<a>;
            <a href="Limit.php">Limit<a>;
            <a href="Funkcje_agregujace.php">Funkcje_agregujące<a>;
            <a href="Data_i_czas.php">Data_i_czas<a>;
            <a href="Date_format.php">Formatowanie_dat<a>;
            <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">GitHub<a>;
    </div>
        <?php

        //Logowanie do serwera mySQL
        require_once("connect.php");

        echo("Sortowanie.php");
        //Zadanie 1: Wyświetl pracowników posortowanych malejąco według imienia wraz z nazwami działów
        echo("<h1>Zadanie 1: Wyświetl pracowników posortowanych malejąco według imienia wraz z nazwami działów</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT  * FROM pracownicy,organizacja WHERE id_org=dzial ORDER BY imie DESC</h2>");
        $result=$conn->query("SELECT  * FROM pracownicy,organizacja WHERE id_org=dzial ORDER BY imie DESC");
        echo("<table borded=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>zarobki</th>");
        echo("<th>dzial</th>");
        echo("<th>nazwa_dzial</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["zarobki"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 2: Wyświetl pracowników z działu 3 posortowanych rosnąco po imieniu:
        echo("<h1>Zadanie 2: Wyświetl pracowników z działu 3 posortowanych rosnąco po imieniu</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT  * FROM pracownicy,organizacja WHERE id_org=dzial AND dzial=3 ORDER BY imie DESC;</h2>");
        $result=$conn->query("SELECT  * FROM pracownicy,organizacja WHERE id_org=dzial AND dzial=3 ORDER BY imie DESC");
        echo("<table borded=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>zarobki</th>");
        echo("<th>dzial</th>");
        echo("<th>nazwa_dzial</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["zarobki"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 3: Wyświetlenie kobiet posortowanych rosnąco po imieniu:
        echo("<h1>Zadanie 3: Wyświetlenie kobiet posortowanych rosnąco po imieniu</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy,organizacja WHERE id_org=dzial AND imie LIKE '%a' ORDER BY imie ASC</h2>");
        $result=$conn->query("SELECT * FROM pracownicy,organizacja WHERE id_org=dzial AND imie LIKE '%a' ORDER BY imie ASC");
        echo("<table borded=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>zarobki</th>");
        echo("<th>dzial</th>");
        echo("<th>nazwa_dzial</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["zarobki"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 4: Wyświetlenie kobiet z działu 1 i 3 posortowanych rosnąco po zarobkach:
        echo("<h1>Zadanie 4: Wyświetlenie kobiet z działu 1 i 3 posortowanych rosnąco po zarobkach</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy,organizacja WHERE id_org=dzial AND imie LIKE '%a' AND (dzial = 1 OR dzial=3) ORDER BY zarobki ASC</h2>");
        $result=$conn->query("SELECT * FROM pracownicy,organizacja WHERE id_org=dzial AND imie LIKE '%a' AND (dzial = 1 OR dzial=3) ORDER BY zarobki ASC");
        echo("<table borded=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>zarobki</th>");
        echo("<th>dzial</th>");
        echo("<th>nazwa_dzial</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["zarobki"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 5: Wyświetlenie mężczyzn posortowanych rosnąco po nazwie działu, a następnie po wysokości zarobków:
        echo("<h1>Zadanie 5: Wyświetlenie mężczyzn posortowanych rosnąco po nazwie działu, a następnie po wysokości zarobków</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy,organizacja WHERE id_org=dzial AND imie NOT LIKE '%a' ORDER  nazwa_dzial ASC, zarobki ASC</h2>");
        $result=$conn->query("SELECT * FROM pracownicy,organizacja WHERE id_org=dzial AND imie NOT LIKE '%a' ORDER  nazwa_dzial ASC, zarobki ASC");
        echo("<table borded=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>zarobki</th>");
        echo("<th>dzial</th>");
        echo("<th>nazwa_dzial</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["zarobki"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
            echo("</tr>");
        }
        echo("</table>");
        ?>
</body>
</html>