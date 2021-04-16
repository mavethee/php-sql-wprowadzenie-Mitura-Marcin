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
                    <?php
                        //Informacje o stronie:
                        echo("<h1 class='page_info'><br>Relacje wiele do wielu</br></h1>");    
                    ?>
                </div>
                <!--Menu boczne w flexbox:-->
                <div class="item colorBlue">
                    <?php
                    require_once('/assets/nav_links.php');
                    ?>
                </div>
                    <!--Treść strony w flexbox:-->
                    <div class="item colorGreen">
                        <?php
            
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