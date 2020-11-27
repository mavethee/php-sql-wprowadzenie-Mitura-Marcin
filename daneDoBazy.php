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
        <a href="index.php">Główny index<a>;
        <a href="Organizacja_i_pracownicy.php">Organizacja_i_pracownicy<a>;
        <a href="Sortowanie.php">Sortowanie<a>;
        <a href="Limit.php">Limit<a>;
        <a href="Funkcje_agregujace.php">Funkcje_agregujące<a>;
        <a href="Data_i_czas.php">Data_i_czas<a>;
        <a href="Date_format.php">Formatowanie_dat<a>;
        <a href="formularz.html">Formularz- Strona.php<a>;
        <a href="daneDoBazy.php">Formularz - daneDoBazy.php<a>;
        <a href="https://projekt-testowy-mavethee.herokuapp.com/">Testowanko<a>;
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">GitHub - PHP<a>;
        <a href="https://github.com/mavethee/projekt_testowy">GitHub - Testowanko<a>;
    </div>

    <h2>Dodanie pracownika:</h2>

    <form action="insert.php" method="POST">
        <input type="text" name="firstname" placeholder="Imię"></br>
        <input type="number" name="shift" placeholder="Dział"></br>
        <input type="number" name="salary" placeholder="Zarobki"></br>
        <input type="date" name="date_of_birth" placeholder="Data urodzenia"></br>
        <input type="submit" value="Dodaj pracownika">
    </form>

    <h2>Usuwanie pracownika:</h2>

    <form action="delete.php" method="POST">
        <input type="number" name="id_employee" placeholder="identyfikator pracownika"></br>
        <input type="submit" value="Usuń pracownika">
    </form>

        <?php

            //Logowanie do serwera mySQL
            require_once("connect.php");

            //Wyświetlenie tabelki jako podgląd przy dodawaniu/usuwaniu pracowników
            echo("<h1>Wyświetlenie tabelki jako podgląd przy dodawaniu/usuwaniu pracowników</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy</h2>");
            $result=$conn->query("SELECT * FROM pracownicy");
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
                       <input type='number' name='id' value='".$row['id_pracownicy']."'></br>
                       <input type='submit' value='Usuń pracownika'>
                </form>
                </td>
                ");
                echo("</tr>");
            }
            echo("</table>");
        ?>
</body>
</html>