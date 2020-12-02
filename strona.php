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
            <a class="link a" href="index.php"><img class="nav_icon" src="connor_icon.png">Główny index<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link b" href="Organizacja_i_pracownicy.php"><img class="nav_icon" src="connor_icon.png">Organizacja_i_pracownicy<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link c" href="Sortowanie.php"><img class="nav_icon" src="connor_icon.png">Sortowanie<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link d" href="Limit.php"><img class="nav_icon" src="connor_icon.png">Limit<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link e" href="Funkcje_agregujace.php"><img class="nav_icon" src="connor_icon.png">Funkcje_agregujące<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link f" href="Data_i_czas.php"><img class="nav_icon" src="connor_icon.png">Data_i_czas<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link g" href="Date_format.php"><img class="nav_icon" src="connor_icon.png">Formatowanie_dat<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link h" href="formularz.html"><img class="nav_icon" src="connor_icon.png">Formularz - Strona.php<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link j" href="daneDoBazy.php"><img class="nav_icon" src="connor_icon.png">Formularz - daneDoBazy.php<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link k" href="Library.php"><img class="nav_icon" src="connor_icon.png">Książki<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link l" href="https://projekt-testowy-mavethee.herokuapp.com/"><img class="nav_icon" src="connor_icon.png">Testowanko<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link m" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin"><img class="nav_icon" src="connor_icon.png">GitHub - PHP<img class="nav_icon" src="connor_icon.png"></a>
            <a class="link n" href="https://github.com/mavethee/projekt_testowy"><img class="nav_icon" src="connor_icon.png">GitHub - Testowanko<img class="nav_icon" src="connor_icon.png"></a>
    </div>
        <?php

            //Informacje o stronie:
            echo("<h4><br>Jesteś w strona.php</h1></br>");

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