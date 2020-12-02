<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Formularz</title>
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
        echo("<h1 class='page_info'><br>Jesteś w Date_format.php</h1></br>");

        //Logowanie do serwera mySQL
        require_once("connect.php");

        //Zadanie 1: Wyświetl nazwy dni w dacie urodzenia:
        $sql=("SELECT *, DATE_FORMAT(data_urodzenia,'%W, %d-%m-%Y') AS szczegółowa_data_urodzenia FROM pracownicy");
        echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetl nazwy dni w dacie urodzenia</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");
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

        //Zadanie 2: Wyświetl nazwy miesięcy w dacie urodzenia:
        $sql=("SELECT *, DATE_FORMAT(data_urodzenia,'%W, %d %M %Y') AS szczegółowa_data_urodzenia FROM pracownicy");
        echo("<h1 class=SQL_excercise>Zadanie 2: Wyświetl nazwy dni w dacie urodzenia</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");
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

        //Zadanie 3: Wyświetl obecną, dokładną godzinę z dokładnością do milisekund:
        $sql=("SELECT curtime(4) AS Aktualna_godzina_z_dokładnością_do milisekund");
        echo("<h1 class=SQL_excercise>Zadanie 3: Wyświetl obecną, dokładną godzinę z dokładnością do milisekund</h1>");
        echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
        $result=$conn->query("$sql");
        echo("<table border=1>");
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