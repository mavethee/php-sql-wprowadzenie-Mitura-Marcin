<!DOCTYPE html'">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Dane do bazy danych</title>
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="theme-color" content="#ffffff">
    </head>
<body class="body_dDB">
    <!--Tytuł strony w flexbox:-->
    <div class="container">
        <div class="item header">
            <?php
                //Informacja o stronie:
                echo("<h1 class=page_info><br>Jesteś w daneDoBazy.php</h1></br>");
            ?>
        </div>
        <!--Menu boczne w flexbox:-->
        <div class="item mainMBar">
            <?php include("../assets/mainMenuBar.php") ?>
        </div>

                    <!--Autoplay background music script-->
                    <script>
                        window.onload = function() 
                        {
                        var context = new AudioContext();
                        }
                    </script>

            <!--Autoplay music in loop-->
            <audio controls autoplay loop>
                <source src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/music/Kara_OST.mp3" type="audio/mpeg">
            </audio>

<!--Treść strony w flexbox:-->
<div class="item webpageContent">
    <h1 class=SQL_excercise>Dodanie pracownika:</h1>

    <form action="/Formularze/insert.php" method="POST">
        <input type="text" name="firstname" placeholder="Imię"></br>
        <input type="number" name="shift" placeholder="Dział"></br>
        <input type="number" name="salary" placeholder="Zarobki"></br>
        <input type="date" name="date_of_birth" placeholder="Data urodzenia"></br>
        <input type="submit" value="Dodaj pracownika">
    </form>

    <h1 class=SQL_excercise>Usuwanie pracownika:</h1>

    <form action="/Formularze/delete.php" method="POST">
        <input type="number" name="id_employee" placeholder="identyfikator pracownika"></br>
        <input type="submit" value="Usuń pracownika">
    </form>

        <?php

            //Logowanie do serwera mySQL:
            require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');

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
                <form action='/Formularze/delete.php' method='POST'>
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