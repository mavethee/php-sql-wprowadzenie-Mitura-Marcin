<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Formularz - strona.php</title>
        <link rel="stylesheet" href="style.css">
      </head>
<body>
    <div class="nav">
        <a href="index.php">Główny index</a>
        <a href="Organizacja_i_pracownicy.php">Organizacja_i_pracownicy</a>
        <a href="Sortowanie.php">Sortowanie</a>
        <a href="Limit.php">Limit</a>
        <a href="Funkcje_agregujace.php">Funkcje_agregujące</a>
        <a href="Data_i_czas.php">Data_i_czas</a>
        <a href="Date_format.php">Formatowanie_dat</a>
        <a href="formularz.html">Formularz - Strona.php</a>
        <a href="daneDoBazy.php">Formularz - daneDoBazy.php</a>
        <a href="Library.php">Książki</a>
        <a href="https://projekt-testowy-mavethee.herokuapp.com/">Testowanko</a>
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">GitHub - PHP</a>
        <a href="https://github.com/mavethee/projekt_testowy">GitHub - Testowanko</a>
    </div>
        <?php

            //Informacje o stronie:
            echo("<h4><br>Jesteś na strona.php</h1></br>");

            //Logowanie do serwera mySQL:
            require_once("connect.php");

            //Wyświetlenie informacji wprowadzonej przez użytkownika:
            echo("<h1 class=SQL_excercise> Imie: ".$_POST["firstname"]."</h1>");
            echo("<h1 class=SQL_excercise> Dział: ".$_POST["shift"]."</h1>");
            echo("<h1 class=SQL_excercise> Zarobki: ".$_POST["salary"]."</h1>");
            echo("<h1 class=SQL_excercise> Data urodzenia: ".$_POST["date_of_birth"]."</h1>");

        ?>
</body>
</html>