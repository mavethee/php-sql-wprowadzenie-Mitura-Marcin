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

        echo("Limit.php");
        //Zadanie 1: Wyświetl dwóch najlepiej zarabiających pracowników z działu 4:
        echo("<h1>Zadanie 1: Wyświetl dwóch najlepiej zarabiających pracowników z działu 4</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy,organizacja WHERE dzial = id_org and dzial= 4 ORDER BY zarobki ASC LIMIT 2</h2>");
        $result=$conn->query("SELECT * FROM pracownicy,organizacja WHERE dzial = id_org and dzial= 4 ORDER BY zarobki ASC LIMIT 2");
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

        //Zadanie 2: Wyświetl trzy najlepiej zarabiające kobiety z działu 4 i 2:
        echo("<h1>Zadanie 2: Wyświetl trzy najlepiej zarabiające kobiety z działu 4 i 2</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy,organizacja WHERE dzial = id_org AND imie LIKE '%a' AND dzial=4 LIMIT 3</h2>");
        $result=$conn->query("SELECT * FROM pracownicy,organizacja WHERE dzial = id_org AND imie LIKE '%a' AND dzial=4 LIMIT 3");
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

        //Zadanie 3: Wyświetlenie najstarszego pracownika:
        echo("<h1>Zadanie 3: Wyświetlenie najstarszego pracownika</h1>");
        echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy,organizacja WHERE dzial = id_org and dzial= 4 ORDER BY data_urodzenia ASC LIMIT 1</h2>");
        $result=$conn->query("SELECT * FROM pracownicy,organizacja WHERE dzial = id_org and dzial= 4 ORDER BY data_urodzenia ASC LIMIT 1");
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