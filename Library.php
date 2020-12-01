<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Biblioteka</title>
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
                echo("<h1><br>Jesteś na Library.php</h1></br>");

                //Logowanie do serwera mySQL:
                require_once("connect.php");

                //Zadanie 1: Wyświetl listę z nazwiskami autorów:
                $sql = ("SELECT * FROM bibliotekaAutor");
                echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetl listę z nazwiskami autorów</h1>");
                echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
                $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>id</th>");
                echo("<th>Autor</th>");
                while($row=$result->fetch_assoc())
                {
                    echo("<tr>");
                    echo("<td>".$row["id_autor"]."</td><td>".$row["Autor"]."</td>");
                    echo("</tr>");
                }
                echo("</table>");

                //Zadanie 2: Wyświetl listę z tytułami książek:
                $sql = ("SELECT * FROM bibliotekaTytuł");
                echo("<h1 class=SQL_excercise>Zadanie 2: Wyświetl listę z tytułami książek</h1>");
                echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
                $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>id</th>");
                echo("<th>Tytuł</th>");
                while($row=$result->fetch_assoc())
                {
                    echo("<tr>");
                    echo("<td>".$row["id_tytuł"]."</td><td>".$row["Tytuł"]."</td>");
                    echo("</tr>");
                }
                echo("</table>");

                //Zadanie 3: Wyświetlenie pełnej bazy danych w blibiotece:
                $sql = ('SELECT * FROM bibliotekaAT, bibliotekaAutor, bibliotekaTytuł WHERE id_autor=bibliotekaAutor_ID AND id_tytuł=bibliotekaTytul_ID');
                echo("<h1 class=SQL_excercise>Zadanie 3: Wyświetlenie pełnej bazy danych w blibiotece</h1>");
                echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
                $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>id</th>");
                echo("<th>Autor</th>");
                echo("<th>Tytuł</th>");
                while($row=$result->fetch_assoc())
                {
                    echo("<tr>");
                    echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]);
                    echo("</tr>");
                }
                echo("</table>");

            ?>
        </body>
</html>