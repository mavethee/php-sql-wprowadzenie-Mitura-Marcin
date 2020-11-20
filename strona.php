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
            //Informacje o stronie:
            echo("jesteś na stronie.php");
            echo("<h2> Imie:".$_POST["imie"]."</h2>");
            echo("<h2> Dział:".$_POST["dzial"]."</h2>");
            echo("<h2> Zarobki:".$_POST["zarobki"]."</h2>");
            echo("<h2> Data Urodzenia:".$_POST["data_urodzenia"]."</h2>");

            //Logowanie do serwera mySQL:
            require_once("connect.php");

            //Zapytanie Insert w $SQL:
            $sql = sprintf("INSERT INTO pracownicy('imie', 'dzial', 'zarobki', 'data_urodzenia') VALUES(%s,%s,%s,%s)", $_POST['imie'], $_POST['dzial'], $_POST['zarobki'], $_POST['data_urodzenia']);

            if ($conn->query($sql) === TRUE)
            {
                echo "New record created successfully";
            }
            
            //Informacja o ewentualnych błędach:
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();

        ?>
</body>
</html>