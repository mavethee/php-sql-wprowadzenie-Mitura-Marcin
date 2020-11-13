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

        echo("Data_i_czas.php");
        //Zadanie 1: Wyświetl wiek poszczegolnych pracowników
        echo("<h1>Zadanie 1: Wyświetl wiek poszczegolnych pracowników</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS Wiek_poszczególnych_pracowników FROM pracownicy</h2>");
        $result=$conn->query("SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS Wiek_poszczególnych_pracowników FROM pracownicy");
        echo("<table borded=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>Wiek_poszczególnych_pracowników</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["Wiek_poszczególnych_pracowników"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 2: Wyświetl wiek pracowników z działu serwisowego:
        echo("<h1>Zadanie 2: Wyświetl wiek pracowników z działu serwisowego</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS Wiek_poszczególnych_pracowników_z_działu_serwisowego FROM pracownicy,organizacja WHERE dzial=id_org AND nazwa_dzial='serwis'</h2>");
        $result=$conn->query("SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS Wiek_poszczególnych_pracowników_z_działu_serwisowego FROM pracownicy,organizacja WHERE dzial=id_org AND nazwa_dzial='serwis'");
        echo("<table borded=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>Wiek_poszczególnych_pracowników_z_działu_serwisowego</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td><td>".$row["Wiek_poszczególnych_pracowników_z_działu_serwisowego"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 3: Wyświetlenie sumy lat wszystkich pracowników:
        echo("<h1>Zadanie 3: Wyświetlenie sumy lat wszystkich pracowników</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS Suma_lat_wszystkich_pracowników FROM pracownicy</h2>");
        $result=$conn->query("SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS Suma_lat_wszystkich_pracowników FROM pracownicy");
        echo("<table borded=1>");
        echo("<th>Suma_lat_wszystkich_pracowników</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_lat_wszystkich_pracowników"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 4: Suma lat pracowników z dzialu handel:
        echo("<h1>Zadanie 4: Suma lat pracowników z dzialu handel</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) AS Suma_lat_pracowników_z_dzialu_handel FROM pracownicy,organizacja WHERE dzial=id_org AND nazwa_dzial='handel'</h2>");
        $result=$conn->query("SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) AS Suma_lat_pracowników_z_dzialu_handel FROM pracownicy,organizacja WHERE dzial=id_org AND nazwa_dzial='handel'");
        echo("<table borded=1>");
        echo("<th>Suma_lat_pracowników_z_dzialu_handel</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_lat_pracowników_z_dzialu_handel"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 5: Wyświetl sumę lat kobiet:
        echo("<h1>Zadanie 5: Wyświetl sumę lat kobiet</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) AS Suma_lat_kobiet FROM pracownicy WHERE imie LIKE '%a'</h2>");
        $result=$conn->query("SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) AS Suma_lat_kobiet FROM pracownicy WHERE imie LIKE '%a'");
        echo("<table borded=1>");
        echo("<th>Suma_lat_kobiet</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_lat_kobiet"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 6: Wyświetl sumę lat mężczyzn:
        echo("<h1>Zadanie 6: Wyświetl sumę lat mężczyzn</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) AS Suma_lat_mężczyzn FROM pracownicy WHERE imie NOT LIKE '%a'</h2>");
        $result=$conn->query("SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) AS Suma_lat_meżczyzn FROM pracownicy WHERE imie NOT LIKE '%a' ");
        echo("<table borded=1>");
        echo("<th>Suma_lat_mężczyzn</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_lat_mężczyzn"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 7: Wyświetl średnią lat pracowników w poszczególnych działach wraz z wypisanymi nazwami działów:
        echo("<h1>Zadanie 7: Wyświetl średnią lat pracowników w poszczególnych działach wraz z wypisanymi nazwami działów</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT dzial, nazwa_dzial, AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS Średnia_wieku_pracowników_w_poszczególnych_działach FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial</h2>");
        $result=$conn->query("SELECT dzial, nazwa_dzial, AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS Średnia_wieku_pracowników_w_poszczególnych_działach FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial");
        echo("<table borded=1>");
        echo("<th>dzial</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>Średnia_wieku_pracowników_w_poszczególnych_działach</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["Średnia_wieku_pracowników_w_poszczególnych_działach"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 8: Wyświetl sumę lat pracowników w poszczególnych działach wraz z wypisanymi nazwami działów:
        echo("<h1>Zadanie 8: Wyświetl sumę lat pracowników w poszczególnych działach wraz z wypisanymi nazwami działów</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT dzial, nazwa_dzial, SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS Suma_lat_pracowników_w_poszczególnych_działach FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial</h2>");
        $result=$conn->query("SELECT dzial, nazwa_dzial, SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS Suma_lat_pracowników_w_poszczególnych_działach FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial");
        echo("<table borded=1>");
        echo("<th>dzial</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>Suma_lat_pracowników_w_poszczególnych_działach</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["Suma_lat_pracowników_w_poszczególnych_działach"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 9: Wyświetl najstarszych pracowników w każdym dziale (nazwa_dział, wiek):
        echo("<h1>Zadanie 9: Wyświetl najstarszych pracowników w każdym dziale (nazwa_dział, wiek)</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS wiek, nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial</h2>");
        $result=$conn->query("SELECT nazwa_dzial, MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS wiek FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial");
        echo("<table borded=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>wiek</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["wiek"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 10: Wyświetl najmłodszych pracowników z działu handel i serwis (nazwa_dział, wiek):
        echo("<h1>Zadanie 10: Wyświetl najmłodszych pracowników z działu handel i serwis (nazwa_dział, wiek)</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy, organizacja WHERE id_org=dzial and (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial</h2>");
        $result=$conn->query("SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy, organizacja WHERE id_org=dzial and (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial");
        echo("<table borded=1>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>wiek</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["nazwa_dzial"]."</td><td>".$row["wiek"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 11: Wyświetl najmłodszych pracowników z działu handel i serwis (imie, nazwa_dział, wiek):
        echo("<h1>Zadanie 11: Wyświetl najmłodszych pracowników z działu handel i serwis (nazwa_dział, wiek)</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS wiek, imie, nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial AND nazwa_dzial=handel OR nazwa_dzial=serwis GROUP BY dzial</h2>");
        $result=$conn->query("SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS wiek, imie, nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial AND (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial");
        echo("<table borded=1>");
        echo("<th>imie</th>");
        echo("<th>nazwa_dzial</th>");
        echo("<th>wiek</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["imie"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["wiek"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 12: Wyświetl długość życia pracowników w dniach:
        echo("<h1>Zadanie 12: Wyświetl długość życia pracowników w dniach:</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) AS Dni_życia FROM pracownicy</h2>");
        $result=$conn->query("SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) AS Dni_życia FROM pracownicy");
        echo("<table borded=1>");
        echo("<th>imie</th>");
        echo("<th>Dni_życia</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["imie"]."</td><td>".$row["Dni_życia"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 13: Wyświetl najstarszego mężczyznę:
        echo("<h1>Zadanie 13: Wyświetl najstarszego mężczyznę</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy WHERE imie NOT LIKE '%a' ORDER BY data_urodzenia ASC LIMIT 1</h2>");
        $result=$conn->query("SELECT * FROM pracownicy WHERE imie NOT LIKE '%a' ORDER BY data_urodzenia ASC LIMIT 1");
        echo("<table borded=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
            echo("</tr>");
        }
        echo("</table>");
        ?>
</body>
</html>