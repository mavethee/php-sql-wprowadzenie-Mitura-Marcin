<!DOCTYPE html>
<html>
    <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width">
            <title>Usuwanie pracownika</title>
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

            //Informacja o stronie:
            echo("<h4><br>Jesteś na delete.php</h4></br>");

            //Wyświetlenie wysłanych danych przez użytkownika:           
            echo("<h1 class=SQL_table> ID: ".$_POST["id_employee"]."</h1>");

            //Logowanie do serwera mySQL:
            require_once("connect.php");

            //Zapytanie DELETE w $SQL z próbą uzyskania danych od użytkownika:
            $sql = ("DELETE FROM pracownicy where id_pracownicy='".$_POST['id_employee']."'");
            
            //Wyświetlenie tabeli:
            echo "<h1 class=SQL_table>". $sql;

            //Informacja o sukcesie:
            if ($conn->query($sql) === TRUE)
            {
                echo "<br>Record deleted successfully<br>";
            }
                        
            //Informacja o ewentualnych błędach:
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            //Wyświetlenie tabelki jako podgląd przy usuwaniu pracowników:
            $sql=("SELECT * FROM pracownicy");
            echo("<h1 class=SQL_table>Wyświetlenie tabelki jako podgląd przy usuwaniu pracowników:</h1>");
            echo("<h1 class=SQL_table>Użyte zapytanie SQL: ".$sql."</h1>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>id_pracownicy</th>");
            echo("<th>imie</th>");
            echo("<th>data_urodzenia</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            $conn->close();
        ?>
</body>
</html>
