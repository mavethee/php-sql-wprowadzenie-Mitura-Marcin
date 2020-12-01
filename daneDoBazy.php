<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Dane do bazy danych</title>
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
            echo("<h1 class='page_info'><br>Jesteś w daneDoBazy.php</h1></br>");
        ?>

    <h1 class=SQL_excercise>Dodanie pracownika:</h1>

    <form action="insert.php" method="POST">
        <input type="text" name="firstname" placeholder="Imię"></br>
        <input type="number" name="shift" placeholder="Dział"></br>
        <input type="number" name="salary" placeholder="Zarobki"></br>
        <input type="date" name="date_of_birth" placeholder="Data urodzenia"></br>
        <input type="submit" value="Dodaj pracownika">
    </form>

    <h1 class=SQL_excercise>Usuwanie pracownika:</h1>

    <form action="delete.php" method="POST">
        <input type="number" name="id_employee" placeholder="identyfikator pracownika"></br>
        <input type="submit" value="Usuń pracownika">
    </form>

        <?php

            //Logowanie do serwera mySQL:
            require_once("connect.php");

            //Wyświetlenie tabelki jako podgląd przy dodawaniu/usuwaniu pracowników:
            $sql=("SELECT * FROM pracownicy");
            echo("<h1 class=SQL_excercise>Wyświetlenie tabelki jako podgląd przy dodawaniu/usuwaniu pracowników</h1>");
            echo("<h1 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h1>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>id_pracownicy</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
            echo("<th>Usuń pracownika</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>
                <td>
                <form action='delete.php' method='POST'>
                <input type='hidden' name='id_employee' value='".$row['id_pracownicy']."'>
                <input type='submit' class='form_dDB_delete_button' value='X'>
                </form>
                </td>
                ");
                echo("</tr>");
            }
            echo("</table>");
        ?>
</body>
</html>