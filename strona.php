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
        Place for navigation and links
        <a href="index.php">Główny index<a>;
        <a href="Organizacja_i_pracownicy.php">Organizacja_i_pracownicy<a>;
        <a href="Sortowanie.php">Sortowanie<a>;
        <a href="Limit.php">Limit<a>;
        <a href="Funkcje_agregujace.php">Funkcje_agregujące<a>;
        <a href="Data_i_czas.php">Data_i_czas<a>;
        <a href="Date_format.php">Formatowanie_dat<a>;
        <a href="formularz.html">Formularz<a>;
        <a href="https://projekt-testowy-mavethee.herokuapp.com/">Testowanko<a>;
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">GitHub - PHP<a>;
        <a href="https://github.com/mavethee/projekt_testowy">GitHub - Testowanko<a>;
    </div>
        <?php

            //Logowanie do serwera mySQL:
            require_once("connect.php");

            //Informacje o stronie:
            echo("Jesteś na stronie.php");
            echo("<li> Imie:".$_POST["firstname"]."</li>");
            echo("<li> Dział:".$_POST["shift"]."</li>");
            echo("<li> Zarobki:".$_POST["salary"]."</li>");
            echo("<li> Data Urodzenia:".$_POST["date_of_birth"]."</li>");

        ?>
</body>
</html>