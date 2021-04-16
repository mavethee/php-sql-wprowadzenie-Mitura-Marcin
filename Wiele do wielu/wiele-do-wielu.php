<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Relacja wiele do wielu</title>
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/icons/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/icons/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/icons/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/icons/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/icons/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/icons/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/icons/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/icons/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/icons/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/icons/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/icons/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/icons/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/icons/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/icons/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/icons/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body_wdw>

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
            <!--Podpisanie pracy w flexbox:-->
            <div class="container">
                <div class="item colorRed">
                    <h1 class='Student_name'>Marcin Mitura</h1>
                    <h1 class='Student_class_and_group'>Klasa 2Ti, grupa 1</h1>
                    <h1 class='Student_number'>Numer 22</h1>
                </div>
                <!--Menu boczne w flexbox:-->
                <div class="item colorBlue">
                    <a class="link a" href="/index.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Główny index
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link b" href="/Organizacja%20i%20pracownicy/organizacja_i_pracownicy.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>  
                            Organizacja i pracownicy
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link c" href="/Organizacja%20i%20pracownicy/sortowanie.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Sortowanie
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link d" href="/Organizacja%20i%20pracownicy/limit.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Limit
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link e" href="/Organizacja%20i%20pracownicy/funkcje_agregujace.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Funkcje agregujące
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link f" href="/Data%20i%20czas/data_i_czas.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Data i czas
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link g" href="/Data%20i%20czas/formatowanie_dat.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                              Formatowanie dat
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link h" href="/Formularze/formularz.html">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Formularz - Strona.php
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link j" href="/Formularze/daneDoBazy.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Formularz - daneDoBazy.php
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link k" href="/Biblioteka/biblioteka.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Biblioteka
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link l" href="/flexbox/flexbox-cubes/flexbox-cube.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Flexbox
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link m" href="/Wiele%20do%20wielu/wiele-do-wielu.php">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Wiele do wielu
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link n" href="https://projekt-testowy-mavethee.herokuapp.com/">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            Testowanko
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link o" href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            GitHub - PHP
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                    <a class="link p" href="https://github.com/mavethee/projekt_testowy">
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                            GitHub - Testowanko
                        <img class="nav_icon" src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/icons/navicons/nav_icon.png"/>
                    </a>
                </div>
                    <!--Treść strony w flexbox:-->
                    <div class="item colorGreen">
                        <?php
                            //Informacje o stronie:
                            echo("<h1 class='page_info'><br>Jesteś w głównym indexie!</br></h1>");
            
                            //Logowanie do serwera mySQL:
                            require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');
                            
                            //Zadanie 0: Funkcja wypożyczania:
                            $sql1 = ("SELECT * FROM bibliotekaAutor"); //Autorzy
                            $sql2 = ("SELECT * FROM bibliotekaTytuł"); //Książki
                            echo("<h1 class=SQL_excercise>Zadanie 0: Funkcja wypożyczania</h1>");
                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL do wyświetlenia autorów w formularzu: ".$sql1."</h4>");
                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL do wyświetlenia tytułów w formularzu: ".$sql2."</h4>");
                            $result=$conn->query($sql1);
                            echo("<form action='wypozyczalnia.php' method='POST'>");
                            echo("<label for='Autor'><h4 class='renting_form'>Wybierz autora:</h4></label>");
                            echo("<select name='Autor' id='id_autor'>");
                            while($row=$result->fetch_assoc()) 
                            {
                                echo("<option value=".$row['id_autor'].">".$row['Autor']."</option>");
                            }
                            echo("</select>");
                            $result=$conn->query($sql2);
                            echo("<label for='Tytuł'><h4 class='renting_form'>Wybierz tytuł:</h4></label>");
                            echo("<select name='Tytuł' id='id_tytuł'>");
                            while($row=$result->fetch_assoc())
                            {
                                echo("<option value=".$row['id_tytuł'].">".$row['Tytuł']."</option>");
                            }
                            echo("</select>");
                            echo("<input type='submit' value='Wypożycz'>'");
                            echo("</form>");

                            //Zadanie 1: Wyświetlenie pełnej bazy danych ksiąg w blibiotece:
                            $sql = ('SELECT * FROM bibliotekaAT, bibliotekaAutor, bibliotekaTytuł WHERE id_autor=bibliotekaAutor_ID AND id_tytuł=bibliotekaTytul_ID');
                            echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetlenie pełnej bazy danych w blibiotece</h1>");
                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                            $result=$conn->query($sql);
                            echo("<table border=1>");
                            echo("<th>id</th>");
                            echo("<th>Autor</th>");
                            echo("<th>Tytuł</th>");
                            while($row=$result->fetch_assoc())
                            {
                                echo("<tr>");
                                echo("<td>".$row["id"]."</td><td>".$row["Autor"]."</td><td>".$row["Tytuł"]);
                                echo("</tr>");
                            }
                            echo("</table>");
                        ?>
                    </div>
            </div>
</body>
</html>