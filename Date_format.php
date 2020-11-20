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
        <a href="formularz.html">Formularz<a>;
        <a href="daneDoBazy.html">Formularz Insert<a>;
        <a href="https://projekt-testowy-mavethee.herokuapp.com/">Testowanko<a>;
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">GitHub - PHP<a>;
        <a href="https://github.com/mavethee/projekt_testowy">GitHub - Testowanko<a>;
    </div>
        <?php

        //Logowanie do serwera mySQL
        require_once("connect.php");

        echo("Date_format.php");
        //Zadanie 1: Wyświetl nazwy dni w dacie urodzenia
        echo("<h1>Zadanie 1: Wyświetl nazwy dni w dacie urodzenia</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT *, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') FROM pracownicy</h2>");
        $result=$conn->query("SELECT *, DATE_FORMAT(data_urodzenia,'%W-%m-%Y') FROM pracownicy");
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

        //Zadanie 2: Wyświetl nazwy miesięcy w dacie urodzenia
        echo("<h1>Zadanie 2: Wyświetl nazwy dni w dacie urodzenia</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT *, DATE_FORMAT(data_urodzenia,'%W-%M-%Y') FROM pracownicy</h2>");
        $result=$conn->query("SELECT *, DATE_FORMAT(data_urodzenia,'%W-%M-%Y') FROM pracownicy");
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

        //Zadanie 3: Wyświetl obecną, dokładną godzinę z dokładnością do milisekund:
        echo("<h1>Zadanie 3: Wyświetl obecną, dokładną godzinę z dokładnością do milisekund</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT curtime(4) AS Aktualna_godzina</h2>");
        $result=$conn->query("SELECT curtime(4) AS Aktualna_godzina");
        echo("<table borded=1>");
        echo("<th>Aktualna_godzina</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Aktualna_godzina"]."</td>");
            echo("</tr>");
        }
        echo("</table>");
        ?>
</body>
</html>