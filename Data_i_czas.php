<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Data i czas</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="nav">
        <a class="link a" href="index.php">Główny index</a>
        <a class="link b" href="Organizacja_i_pracownicy.php">Organizacja_i_pracownicy</a>
        <a class="link c" href="Sortowanie.php">Sortowanie</a>
        <a class="link d" href="Limit.php">Limit</a>
        <a class="link e" href="Funkcje_agregujace.php">Funkcje_agregujące</a>
        <a class="link f" href="Data_i_czas.php">Data_i_czas</a>
        <a class="link g" href="Date_format.php">Formatowanie_dat</a>
        <a class="link h" href="formularz.html">Formularz - Strona.php</a>
        <a class="link j" href="daneDoBazy.php">Formularz - daneDoBazy.php</a>
        <a class="link k" href="Library.php">Książki</a>
        <a class="link l" href="https://projekt-testowy-mavethee.herokuapp.com/">Testowanko</a>
        <a class="link m" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">GitHub - PHP</a>
        <a class="link n" href="https://github.com/mavethee/projekt_testowy">GitHub - Testowanko</a>
    </div>
        <?php

        //Informacja o stronie:
        echo("<h1 class='page_info'><br>Jesteś w Data_i_czas.php<h1 class=SQL_excercise></br>");

        //Logowanie do serwera mySQL
        require_once("connect.php");

        //Zadanie 1: Wyświetl wiek poszczegolnych pracowników:
        $sql=("SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS Wiek_poszczególnych_pracowników FROM pracownicy");
        echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetl wiek poszczegolnych pracowników</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");
        echo("<table border=1>");
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
        $sql=("SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS Wiek_poszczególnych_pracowników_z_działu_serwisowego FROM pracownicy,organizacja WHERE dzial=id_org AND nazwa_dzial='serwis'");
        echo("<h1 class=SQL_excercise>Zadanie 2: Wyświetl wiek pracowników z działu serwisowego</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");        
        echo("<table border=1>");
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
        $sql=("SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS Suma_lat_wszystkich_pracowników FROM pracownicy");
        echo("<h1 class=SQL_excercise>Zadanie 3: Wyświetlenie sumy lat wszystkich pracowników</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");
        echo("<table border=1>");
        echo("<th>Suma_lat_wszystkich_pracowników</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_lat_wszystkich_pracowników"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 4: Suma lat pracowników z dzialu handel:
        $sql=("SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) AS Suma_lat_pracowników_z_dzialu_handel FROM pracownicy,organizacja WHERE dzial=id_org AND nazwa_dzial='handel'");
        echo("<h1 class=SQL_excercise>Zadanie 4: Suma lat pracowników z dzialu handel</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");
        echo("<table border=1>");
        echo("<th>Suma_lat_pracowników_z_dzialu_handel</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_lat_pracowników_z_dzialu_handel"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 5: Wyświetl sumę lat kobiet:
        $sql=("SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) AS Suma_lat_kobiet FROM pracownicy WHERE imie LIKE '%a'");
        echo("<h1 class=SQL_excercise>Zadanie 5: Wyświetl sumę lat kobiet</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");     
        echo("<table border=1>");
        echo("<th>Suma_lat_kobiet</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_lat_kobiet"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 6: Wyświetl sumę lat mężczyzn:
        $sql=("SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) AS Suma_lat_mężczyzn FROM pracownicy WHERE imie NOT LIKE '%a'");
        echo("<h1 class=SQL_excercise>Zadanie 6: Wyświetl sumę lat mężczyzn</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");     
        echo("<table border=1>");
        echo("<th>Suma_lat_mężczyzn</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_lat_mężczyzn"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 7: Wyświetl średnią lat pracowników w poszczególnych działach wraz z wypisanymi nazwami działów:
        $sql=("SELECT dzial, nazwa_dzial, AVG(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS Średnia_wieku_pracowników_w_poszczególnych_działach FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial");
        echo("<h1 class=SQL_excercise>Zadanie 7: Wyświetl średnią lat pracowników w poszczególnych działach wraz z wypisanymi nazwami działów</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");     
        echo("<table border=1>");
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
        $sql=("SELECT dzial, nazwa_dzial, SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS Suma_lat_pracowników_w_poszczególnych_działach FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial");
        echo("<h1 class=SQL_excercise>Zadanie 8: Wyświetl sumę lat pracowników w poszczególnych działach wraz z wypisanymi nazwami działów</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");     
        echo("<table border=1>");
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
        $sql=("SELECT MAX(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS wiek, nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial GROUP BY dzial");
        echo("<h1 class=SQL_excercise>Zadanie 9: Wyświetl najstarszych pracowników w każdym dziale (nazwa_dział, wiek)</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");     
        echo("<table border=1>");
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
        $sql=("SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) as wiek, nazwa_dzial from pracownicy, organizacja WHERE id_org=dzial and (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial");
        echo("<h1 class=SQL_excercise>Zadanie 10: Wyświetl najmłodszych pracowników z działu handel i serwis (nazwa_dział, wiek)</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");     
        echo("<table border=1>");
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
        $sql=("SELECT MIN(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS wiek, imie, nazwa_dzial FROM pracownicy,organizacja WHERE id_org=dzial AND (nazwa_dzial='handel' OR nazwa_dzial='serwis') GROUP BY dzial");
        echo("<h1 class=SQL_excercise>Zadanie 11: Wyświetl najmłodszych pracowników z działu handel i serwis (imie, nazwa_dział, wiek)</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");     
        echo("<table border=1>");
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
        $sql=("SELECT imie, DATEDIFF(CURDATE(),data_urodzenia) AS Dni_życia FROM pracownicy");
        echo("<h1 class=SQL_excercise>Zadanie 12: Wyświetl długość życia pracowników w dniach:</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");     
        echo("<table border=1>");
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
        $sql=("SELECT * FROM pracownicy WHERE imie NOT LIKE '%a' ORDER BY data_urodzenia ASC LIMIT 1");
        echo("<h1 class=SQL_excercise>Zadanie 13: Wyświetl najstarszego mężczyznę</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");     
        echo("<table border=1>");
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