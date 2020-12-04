<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Organizacja i pracownicy</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body class="body_orgiprac">
    <div class="nav">
            <a class="link a" href="index.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>
                    Główny index
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>
            </a>
            <a class="link b" href="Organizacja_i_pracownicy.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>  
                    Organizacja i pracownicy
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png"/>
            </a>
            <a class="link c" href="Sortowanie.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Sortowanie
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link d" href="Limit.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Limit
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link e" href="Funkcje_agregujace.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Funkcje agregujące
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link f" href="Data_i_czas.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Data i czas
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link g" href="Date_format.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Formatowanie dat
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link h" href="formularz.html">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Formularz - Strona.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link j" href="daneDoBazy.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Formularz - daneDoBazy.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link k" href="Library.php">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Książki
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link l" href="https://projekt-testowy-mavethee.herokuapp.com/">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link m" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    GitHub - PHP
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
            <a class="link n" href="https://github.com/mavethee/projekt_testowy">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
                    GitHub - Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/nav_icon.png">
            </a>
    </div>

                    <!--Skrypt pod autoplay muzyki w tle-->
                    <script>
                        window.onload = function() 
                        {
                        var context = new AudioContext();
                        }
                    </script>

            <!--Muzyka w tle, zapętlona-->
            <audio controls autoplay loop>
                <source src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/Kara_OST.mp3" type="audio/mpeg">
            </audio>
        <?php
            //Informacja o stronie:
            echo("<h1 class='page_info'><br>Jesteś w Organizacja_i_pracownicy.php</h1></br>");

            //Logowanie do serwera mySQL
            require_once("connect.php");

            //Zadanie 1: Wyświetlenie pełnej listy pracowników z nazwami działów:
            $sql=("SELECT * FROM pracownicy, organizacja WHERE (dzial=1 OR dzial=4) AND dzial=id_org ORDER BY `pracownicy`.`dzial` ASC");
            echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetlenie pełnej listy pracowników z nazwami działów</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 2: Wyświetlenie pracowników tylko z działu 1 i 4:
            $sql=("SELECT * FROM pracownicy, organizacja WHERE (dzial=1 OR dzial=4) AND dzial=id_org ORDER BY `pracownicy`.`dzial` ASC");
            echo("<h1 class=SQL_excercise>Zadanie 2: Wyświetlenie pracowników tylko z działu 1 i 4</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 3: Wyświetlenie listy kobiet z nazwami działów:
            $sql=("SELECT * FROM pracownicy, organizacja WHERE imie LIKE '%a' AND dzial=id_org ORDER BY `pracownicy`.`dzial` ASC");
            echo("<h1 class=SQL_excercise>Zadanie 3: Wyświetlenie listy kobiet z nazwami działów</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 4: Wyświetlenie listy mężczyzn z nazwami działów:
            $sql=("SELECT * FROM pracownicy, organizacja WHERE imie NOT LIKE '%a' AND dzial=id_org ORDER BY `pracownicy`.`dzial` ASC");
            echo("<h1 class=SQL_excercise>Zadanie 4: Wyświetlenie listy mężczyzn z nazwami działów</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
            echo("</table>");

            //Zadanie 5: Wyświetlenie pracowników tylko z działu 2 i 3:
            $sql=("SELECT imie, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=2 OR dzial=3) AND dzial=id_org ORDER BY `pracownicy`.`dzial` ASC");
            echo("<h1 class=SQL_excercise>Zadanie 5: Wyświetlenie pracowników tylko z działu 2 i 3</h1>");
            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
            $result=$conn->query($sql);
            echo("<table border=1>");
            echo("<th>imie</th>");
            echo("<th>dzial</th>");
            echo("<th>nazwa_dzial</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                echo("</tr>");
            }
            echo("</table>");
        ?>
</body>
</html>