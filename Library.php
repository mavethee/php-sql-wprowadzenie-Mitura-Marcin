<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Biblioteka</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body class="body_lib">
    <div class="nav">
            <a class="link a" href="index.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>
                    Główny index
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>
            </a>
            <a class="link b" href="Organizacja_i_pracownicy.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>  
                    Organizacja i pracownicy
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>
            </a>
            <a class="link c" href="Sortowanie.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Sortowanie
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link d" href="Limit.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Limit
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link e" href="Funkcje_agregujace.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Funkcje agregujące
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link f" href="Data_i_czas.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Data i czas
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link g" href="Date_format.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Formatowanie dat
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link h" href="formularz.html">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Formularz - Strona.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link j" href="daneDoBazy.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Formularz - daneDoBazy.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link k" href="Library.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Książki
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link l" href="https://projekt-testowy-mavethee.herokuapp.com/">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link m" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    GitHub - PHP
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link n" href="https://github.com/mavethee/projekt_testowy">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    GitHub - Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
    </div>

            <?php

                //Informacja o stronie:
                echo("<h1 class=page_info><br>Jesteś w Library.php</h1></br>");

                //Logowanie do serwera mySQL:
                require_once("connect.php");

                //Zadanie 0: Fukcja wypożyczania:
                $sql1 = ("SELECT * FROM bibliotekaAutor"); //Autorzy
                $sql2 = ("SELECT * FROM bibliotekaTytuł"); //Książki
                echo("<h1 class=SQL_excercise>Zadanie 0: Fukcja wypożyczania</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                $result=$conn->query($sql1);
                echo("<form action='wypozyczalnia.php' method='POST'>");
                echo("<label for='Autor'>'Wybierz autora:'</label>");
                echo("<select name='Autor' id='id_autor'>");
                while($row=$result->fetch_assoc()) 
                {
                    echo("<option value=".$row['id_autor'].">".$row["Autor"]."</option>");
                }
                echo("</select>");
                echo("<br><br>");
                $result=$conn->query($sql2);
                echo("<label for='Tytuł'>'Wybierz tytuł:'</label>");
                echo("<select name='Tytuł' id='id_tytuł'>");
                while($row=$result->fetch_assoc())
                {
                    echo("<option value=".$row['id_tytuł'].">".$row["Tytuł"]."</option>");
                }
                echo("</select>");
                echo("<br><br>");
                echo("<input type='submit' value='Submit>'");
                echo("</form>");

                //Zadanie 1: Wyświetl listę z nazwiskami autorów do wyboru:
                $sql = ("SELECT * FROM bibliotekaAutor");
                echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetl listę z nazwiskami autorów do wyboru</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                $result=$conn->query($sql);
                echo("<select name='Autor' id='id_autor'>");
                while($row=$result->fetch_assoc()) 
                {
                    echo("<option value=".$row['id_autor'].">".$row["Autor"]."</option>");
                }
                echo("<input type='Submit' value='Wybierz autora'><br>");
                echo("</select>");

                //Zadanie 2: Wyświetl listę z tytułami książek do wyboru:
                $sql = ("SELECT * FROM bibliotekaTytuł");
                echo("<h1 class=SQL_excercise>Zadanie 2: Wyświetl listę z tytułami książek do wyboru</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                $result=$conn->query($sql);
                echo("<select name='Tytuł' id='id_tytuł'>");
                while($row=$result->fetch_assoc()) 
                {
                    echo("<option value=".$row['id_tytuł'].">".$row["Tytuł"]."</option>");
                }
                echo("<input type='Submit' value='Wybierz tytuł'><br>");
                echo("</select>");

                //Zadanie 3: Wyświetlenie pełnej bazy danych ksiąg do wypożyczenia w blibiotece do wyboru:
                $sql = ("SELECT * FROM bibliotekaAT, bibliotekaAutor, bibliotekaTytuł WHERE id_autor=bibliotekaAutor_ID AND id_tytuł=bibliotekaTytul_ID");
                echo("<h1 class=SQL_excercise>Zadanie 3: Wyświetlenie pełnej bazy danych ksiąg do wypożyczenia w blibiotece do wyboru</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                $result=$conn->query($sql);
                echo("<select name='Autor' id='id_autor'>");
                while($row=$result->fetch_assoc()) 
                {
                    echo("<option value=".$row['id_autor'].">".$row["Autor"]."</option>");
                }
                echo("<input type='Submit' value='Wybierz autora'><br>");
                echo("<select name='Tytuł' id='tytuł'>");
                while($row=$result->fetch_assoc()) 
                {
                    echo("<option value=".$row['id_tytuł'].">".$row["Tytuł"]."</option>");
                }
                echo("<input type='Submit' value='Wypożycz'><br>");
                echo("</select>");

                //Zadanie 4: Wyświetl listę z nazwiskami autorów:
                $sql = ("SELECT * FROM bibliotekaAutor");
                echo("<h1 class=SQL_excercise>Zadanie 4: Wyświetl listę z nazwiskami autorów</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
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

                //Zadanie 5: Wyświetl listę z tytułami książek:
                $sql = ("SELECT * FROM bibliotekaTytuł");
                echo("<h1 class=SQL_excercise>Zadanie 5: Wyświetl listę z tytułami książek</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>id</th>");
                echo("<th>tytuł</th>");
                while($row=$result->fetch_assoc())
                {
                    echo("<tr>");
                    echo("<td>".$row["id_tytuł"]."</td><td>".$row["Tytuł"]."</td>");
                    echo("</tr>");
                }
                echo("</table>");

                //Zadanie 6: Wyświetlenie pełnej bazy danych ksiąg w blibiotece:
                $sql = ('SELECT * FROM bibliotekaAT, bibliotekaAutor, bibliotekaTytuł WHERE id_autor=bibliotekaAutor_ID AND id_tytuł=bibliotekaTytul_ID');
                echo("<h1 class=SQL_excercise>Zadanie 6: Wyświetlenie pełnej bazy danych w blibiotece</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
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