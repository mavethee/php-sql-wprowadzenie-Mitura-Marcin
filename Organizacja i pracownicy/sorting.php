<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Sortowanie</title>
        <link rel="stylesheet" href="assets/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="theme-color" content="#ffffff">
    </head>
<body class="body_sort">
        <!--Tytuł strony w flexbox:-->
        <div class="container">
            <div class="item colorRed">
                <?php
                    //Informacja o stronie:
                    echo("<h1 class=page_info><br>Jesteś w sortowanie.php</h1></br>");
                ?>
            </div>
            <!--Menu boczne w flexbox:-->
            <div class="item colorGreen">
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
                <source src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assesusmcsica_OST.mp3" type="audio/mpeg">
            </audio>
        <!--Treść w flexbox:-->
        <div class="item colorBlue">
            <?php

                //Logowanie do serwera mySQL:
                require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');

                //Zadanie 1: Wyświetl pracowników posortowanych malejąco według imienia wraz z nazwami działów:
                $sql=("SELECT  * FROM pracownicy,organizacja WHERE id_org=dzial ORDER BY imie DESC");
                echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetl pracowników posortowanych malejąco według imienia wraz z nazwami działów</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>id_pracownicy</th>");
                echo("<th>imie</th>");
                echo("<th>data_urodzenia</th>");
                echo("<th>zarobki</th>");
                echo("<th>dzial</th>");
                echo("<th>nazwa_dzial</th>");
                while($row=$result->fetch_assoc())
                {
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["zarobki"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                    echo("</tr>");
                }
                echo("</table>");

                //Zadanie 2: Wyświetl pracowników z działu 3 posortowanych rosnąco po imieniu:
                $sql=("SELECT  * FROM pracownicy,organizacja WHERE id_org=dzial AND dzial=3 ORDER BY imie DESC");
                echo("<h1 class=SQL_excercise>Zadanie 2: Wyświetl pracowników z działu 3 posortowanych rosnąco po imieniu</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>id_pracownicy</th>");
                echo("<th>imie</th>");
                echo("<th>data_urodzenia</th>");
                echo("<th>zarobki</th>");
                echo("<th>dzial</th>");
                echo("<th>nazwa_dzial</th>");
                while($row=$result->fetch_assoc())
                {
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["zarobki"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                    echo("</tr>");
                }
                echo("</table>");

                //Zadanie 3: Wyświetlenie kobiet posortowanych rosnąco po imieniu:
                $sql=("SELECT * FROM pracownicy,organizacja WHERE id_org=dzial AND imie LIKE '%a' ORDER BY imie ASC");
                echo("<h1 class=SQL_excercise>Zadanie 3: Wyświetlenie kobiet posortowanych rosnąco po imieniu</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>id_pracownicy</th>");
                echo("<th>imie</th>");
                echo("<th>data_urodzenia</th>");
                echo("<th>zarobki</th>");
                echo("<th>dzial</th>");
                echo("<th>nazwa_dzial</th>");
                while($row=$result->fetch_assoc())
                {
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["zarobki"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                    echo("</tr>");
                }
                echo("</table>");

                //Zadanie 4: Wyświetlenie kobiet z działu 1 i 3 posortowanych rosnąco po zarobkach:
                $sql=("SELECT * FROM pracownicy,organizacja WHERE id_org=dzial AND imie LIKE '%a' AND (dzial=1 OR dzial=3) ORDER BY zarobki ASC");
                echo("<h1 class=SQL_excercise>Zadanie 4: Wyświetlenie kobiet z działu 1 i 3 posortowanych rosnąco po zarobkach</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>id_pracownicy</th>");
                echo("<th>imie</th>");
                echo("<th>data_urodzenia</th>");
                echo("<th>zarobki</th>");
                echo("<th>dzial</th>");
                echo("<th>nazwa_dzial</th>");
                while($row=$result->fetch_assoc())
                {
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["zarobki"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                    echo("</tr>");
                }
                echo("</table>");

                //Zadanie 5: Wyświetlenie mężczyzn posortowanych rosnąco po nazwie działu, a następnie po wysokości zarobków:
                $sql=("SELECT * FROM pracownicy,organizacja WHERE id_org=dzial AND imie NOT LIKE '%a' ORDER BY  nazwa_dzial ASC, zarobki ASC");
                echo("<h1 class=SQL_excercise>Zadanie 5: Wyświetlenie mężczyzn posortowanych rosnąco po nazwie działu, a następnie po wysokości zarobków</h1>");
                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                $result=$conn->query($sql);
                echo("<table border=1>");
                echo("<th>id_pracownicy</th>");
                echo("<th>imie</th>");
                echo("<th>data_urodzenia</th>");
                echo("<th>zarobki</th>");
                echo("<th>dzial</th>");
                echo("<th>nazwa_dzial</th>");
                while($row=$result->fetch_assoc())
                {
                    echo("<tr>");
                    echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["zarobki"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td>");
                    echo("</tr>");
                }
                echo("</table>");
            ?>
    </div>
</body>
</html>
