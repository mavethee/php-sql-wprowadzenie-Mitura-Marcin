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
            <a class="link a" href="index.php"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">Główny index<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link b" href="Organizacja_i_pracownicy.php"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">Organizacja_i_pracownicy<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link c" href="Sortowanie.php"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">Sortowanie<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link d" href="Limit.php"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">Limit<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link e" href="Funkcje_agregujace.php"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">Funkcje_agregujące<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link f" href="Data_i_czas.php"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">Data_i_czas<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link g" href="Date_format.php"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">Formatowanie_dat<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link h" href="formularz.html"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">Formularz - Strona.php<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link j" href="daneDoBazy.php"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">Formularz - daneDoBazy.php<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link k" href="Library.php"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">Książki<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link l" href="https://projekt-testowy-mavethee.herokuapp.com/"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">Testowanko<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link m" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">GitHub - PHP<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
            <a class="link n" href="https://github.com/mavethee/projekt_testowy"><img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727">GitHub - Testowanko<img class="nav_icon" src="https://static.wikia.nocookie.net/detroit-become-human/images/8/8c/the_symbol_of_jericho.png/revision/latest?cb=20190924115727"></a>
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
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
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