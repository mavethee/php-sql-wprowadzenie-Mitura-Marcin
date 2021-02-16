<!DOCTYPE html'">
<html'">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Dodawanie pracownika</title>
        <link rel="stylesheet" href="assets/style.css">
        <link rel="apple-touch-icon" sizes="57x57" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="$_SERVER['DOCUMENT_ROOT'] . '/assets/icons/favicons/favicon-16x16.png">
        <link rel="manifest" href="$_SERVER['DOCUMENT_ROOT'] . '//assets/icons/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/assets/icons/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
<body class="body_insert">
    <div class="nav">
            <a class="link a" href="$_SERVER['DOCUMENT_ROOT'] . '/index.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    Główny index
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
            </a>
            <a class="link b" href="$_SERVER['DOCUMENT_ROOT'] . '/Organizacja%20i%20pracownicy/organizacja_i_pracownicy.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>  
                    Organizacja i pracownicy
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
            </a>
            <a class="link c" href="$_SERVER['DOCUMENT_ROOT'] . '/Organizacja%20i%20pracownicy/sortowanie.php'">sortowanie.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Sortowanie
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link d" href="$_SERVER['DOCUMENT_ROOT'] . '/limit.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Limit
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link e" href="$_SERVER['DOCUMENT_ROOT'] . '/Organizacja%20i%20pracownicy/funkcje_agregujace.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Funkcje agregujące
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link f" href="$_SERVER['DOCUMENT_ROOT'] . '/Data%20i%20czas/data_i_czas.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Data i czas
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link g" href="$_SERVER['DOCUMENT_ROOT'] . '/Data%20i%20czas/formatowanie_dat.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Formatowanie dat
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link h" href="$_SERVER['DOCUMENT_ROOT'] . '/Formularze/formularz.html'"">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Formularz - Strona.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link j" href="$_SERVER['DOCUMENT_ROOT'] . '/Formularze/daneDoBazy.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Formularz - daneDoBazy.php
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link k" href="$_SERVER['DOCUMENT_ROOT'] . '/Biblioteka/biblioteka.php'">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Książki
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link l" href="https://projekt-testowy-mavethee.herokuapp.com/">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link m" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    GitHub - PHP
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
            </a>
            <a class="link n" href="https://github.com/mavethee/projekt_testowy">
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
                    GitHub - Testowanko
                <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/nav_icon.png">
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
                <source src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/music/Kara_OST.mp3" type="audio/mpeg">
            </audio>
        <?php

            //Informacje o stronie:
            echo("<h1 class='page_info'><br>Jesteś w insert.php</br></h1>");

            //Wyświetlenie wysłanych danych przez użytkownika:
            echo("<h1 class=SQL_excercise> Imie: ".$_POST["firstname"]."</h1>");
            echo("<h1 class=SQL_excercise> Dział: ".$_POST["shift"]."</h1>");
            echo("<h1 class=SQL_excercise> Zarobki: ".$_POST["salary"]."</h1>");
            echo("<h1 class=SQL_excercise> Data urodzenia: ".$_POST["date_of_birth"]."</h1>");

            //Logowanie do serwera mySQL:
            require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');

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
</html'">