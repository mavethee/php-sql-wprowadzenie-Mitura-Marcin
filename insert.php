<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Dodawanie pracownika</title>
        <link rel="stylesheet" href="style.css">
      </head>
<body>
    <div class="nav">
            <a class="link a" href="index.php">
                <img class="nav_icon" src="nav_icon.png"/>
                    Główny index
                <img class="nav_icon" src="nav_icon.png"/>
            </a>
            <a class="link b" href="Organizacja_i_pracownicy.php">
                <img class="nav_icon" src="nav_icon.png"/>  
                    Organizacja i pracownicy
                <img class="nav_icon" src="nav_icon.png"/>
            </a>
            <a class="link c" href="Sortowanie.php">
                <img class="nav_icon" src="nav_icon.png">
                    Sortowanie
                <img class="nav_icon" src="nav_icon.png">
            </a>
            <a class="link d" href="Limit.php">
                <img class="nav_icon" src="nav_icon.png">
                    Limit
                <img class="nav_icon" src="nav_icon.png">
            </a>
            <a class="link e" href="Funkcje_agregujace.php">
                <img class="nav_icon" src="nav_icon.png">
                    Funkcje_agregujące
                <img class="nav_icon" src="nav_icon.png">
            </a>
            <a class="link f" href="Data_i_czas.php">
                <img class="nav_icon" src="nav_icon.png">
                    Data_i_czas
                <img class="nav_icon" src="nav_icon.png">
            </a>
            <a class="link g" href="Date_format.php">
                <img class="nav_icon" src="nav_icon.png">
                    Formatowanie_dat
                <img class="nav_icon" src="nav_icon.png">
            </a>
            <a class="link h" href="formularz.html">
                <img class="nav_icon" src="nav_icon.png">
                    Formularz - Strona.php
                <img class="nav_icon" src="nav_icon.png">
            </a>
            <a class="link j" href="daneDoBazy.php">
                <img class="nav_icon" src="nav_icon.png">
                    Formularz - daneDoBazy.php
                <img class="nav_icon" src="nav_icon.png">
            </a>
            <a class="link k" href="Library.php">
                <img class="nav_icon" src="nav_icon.png">
                    Książki
                <img class="nav_icon" src="nav_icon.png">
            </a>
            <a class="link l" href="https://projekt-testowy-mavethee.herokuapp.com/">
                <img class="nav_icon" src="nav_icon.png">
                    Testowanko
                <img class="nav_icon" src="nav_icon.png">
            </a>
            <a class="link m" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">
                <img class="nav_icon" src="nav_icon.png">
                    GitHub - PHP
                <img class="nav_icon" src="nav_icon.png">
            </a>
            <a class="link n" href="https://github.com/mavethee/projekt_testowy">
                <img class="nav_icon" src="nav_icon.png">
                    GitHub - Testowanko
                <img class="nav_icon" src="nav_icon.png">
            </a>
    </div>
        <?php

            //Informacje o stronie:
            echo("<h1 class='page_info'><br>Jesteś w insert.php</br></h1>");

            //Wyświetlenie wysłanych danych przez użytkownika:
            echo("<h1 class=SQL_excercise> Imie: ".$_POST["firstname"]."</h1>");
            echo("<h1 class=SQL_excercise> Dział: ".$_POST["shift"]."</h1>");
            echo("<h1 class=SQL_excercise> Zarobki: ".$_POST["salary"]."</h1>");
            echo("<h1 class=SQL_excercise> Data urodzenia: ".$_POST["date_of_birth"]."</h1>");

            //Logowanie do serwera mySQL:
            require_once("connect.php");

            //Zapytanie INSERT w $SQL z próbą uzyskania danych od użytkownika:
            $sql = ("INSERT INTO pracownicy (id_pracownicy,imie, dzial, zarobki, data_urodzenia) VALUES (NULL,'".$_POST['firstname']."', ".$_POST['shift'].", ".$_POST['salary'].",'".$_POST['date_of_birth']."')");
            
            //Wyświetlenie tabeli:
            echo "<h1 class=SQL_excercise>". $sql;

            //Informacja o sukcesie:
            if ($conn->query($sql) === TRUE)
            {
                echo "<br>New record created successfully<br>";
            }
                        
            //Informacja o ewentualnych błędach:
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            //Wyświetlenie tabelki jako podgląd przy dodawaniu pracowników:
            $sql=("SELECT * FROM pracownicy");
            echo("<h1 class=SQL_excercise>Wyświetlenie tabelki jako podgląd przy dodawaniu pracowników:</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query("$sql");
            echo("<table border=1>");
            echo("<th>id_pracownicy</th>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            $conn->close();
        ?>
</body>
</html>