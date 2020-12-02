<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Organizacja i pracownicy</title>
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
            echo("<h1 class='page_info'><br>Jesteś w Organizacja_i_pracownicy.php</h1></br>");

            //Logowanie do serwera mySQL
            require_once("connect.php");

            //Zadanie 1: Wyświetlenie pełnej listy pracowników z nazwami działów:
            $sql=("SELECT * FROM pracownicy, organizacja WHERE (dzial=1 OR dzial=4) AND dzial=id_org ORDER BY `pracownicy`.`dzial` ASC");
            echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetlenie pełnej listy pracowników z nazwami działów</h1>");
            echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
            $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 2: Wyświetlenie pracowników tylko z działu 1 i 4:
            $sql=("SELECT * FROM pracownicy, organizacja WHERE (dzial=1 OR dzial=4) AND dzial=id_org ORDER BY `pracownicy`.`dzial` ASC");
            echo("<h1 class=SQL_excercise>Zadanie 2: Wyświetlenie pracowników tylko z działu 1 i 4</h1>");
            echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
            $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 3: Wyświetlenie listy kobiet z nazwami działów:
            $sql=("SELECT * FROM pracownicy, organizacja WHERE imie LIKE '%a' AND dzial=id_org ORDER BY `pracownicy`.`dzial` ASC");
            echo("<h1 class=SQL_excercise>Zadanie 3: Wyświetlenie listy kobiet z nazwami działów</h1>");
            echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
            $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 4: Wyświetlenie listy mężczyzn z nazwami działów:
            $sql=("SELECT * FROM pracownicy, organizacja WHERE imie NOT LIKE '%a' AND dzial=id_org ORDER BY `pracownicy`.`dzial` ASC");
            echo("<h1 class=SQL_excercise>Zadanie 4: Wyświetlenie listy mężczyzn z nazwami działów</h1>");
            echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
            $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 5: Wyświetlenie pracowników tylko z działu 2 i 3:
            $sql("SELECT imie, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=2 OR dzial=3) AND dzial=id_org GROUP BY dzial");
            echo("<h1 class=SQL_excercise>Zadanie 5: Wyświetlenie pracowników tylko z działu 2 i 3</h1>");
            echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
            $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
            echo("</table>");
        ?>
</body>
</html>