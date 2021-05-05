<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
            <title>Główny Index</title>
                <link rel="stylesheet" href="assets/style.css">
                <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
                <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
                <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
                <link rel="manifest" href="/assets/favicons/site.webmanifest">
                <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
                    <meta name="msapplication-TileColor" content="#da532c">
                    <meta name="theme-color" content="#ffffff">
    </head>
<body>

   <!--Autoplay music in loop-->
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
            <!--Podpisanie pracy w flexbox:-->
            <div class="container">
                <div class="item header">
                    <?php include("assets/headerIndex.php") ?>
                </div>
                <!--Menu boczne w flexbox:-->
                <div class="item mainMBar">
                    <?php include("assets/mainMenuBar.php") ?>
                </div>
                    <!--Treść strony w flexbox:-->
                    <div class="item webpageContent">
                        <?php
                            //Informacje o stronie:
                            echo("<h1 class='page_info'><br>Jesteś w głównym indexie!</br></h1>");
        
                                //Logowanie do serwera mySQL:
                                require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');

                                    //Zadanie 1: Wyświetlenie pełnej listy pracowników:
                                        $sql=("SELECT * FROM pracownicy");
                                            echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetlenie pełnej listy pracowników:</h1>");
                                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                                $result=$conn->query($sql);
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
                        
                                    //Zadanie 2: Wyświetlenie tylko kobiet z listy pracowników:
                                        $sql=("SELECT * FROM pracownicy WHERE imie LIKE '%a'");
                                            echo("<h1 class=SQL_excercise>Zadanie 2: Wyświetlenie tylko kobiet z listy pracowników:</h1>");
                                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                                $result=$conn->query($sql);
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
                    
                                    //Zadanie 3: Wyświetlenie tylko kobiet z działu 1 i 4:
                                        $sql=("SELECT * FROM pracownicy WHERE imie LIKE '%a' AND (dzial=1 OR dzial=4)");
                                            echo("<h1 class=SQL_excercise>Zadanie 3: Kobiety z działu 1 i 4:</h1>");
                                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                                $result=$conn->query($sql);
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
                        
                                    //Zadanie 4: Wyświetlenie tylko kobiet zarabiających mniej niż 35 z działu 1 i 2:
                                        $sql=("SELECT * FROM pracownicy WHERE imie LIKE '%a' AND (zarobki<35) AND (dzial=1 OR dzial=2)");
                                            echo("<h1 class=SQL_excercise>Zadanie 4: Wyświetlenie tylko kobiet zarabiających mniej niż 35 z działu 1 i 2</h1>");
                                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                                $result=$conn->query($sql);
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
                    
                                    //Zadanie 5: Wyświetlenie tylko mężczyzn zarabiający mniej niż 30:
                                        $sql=("SELECT * FROM pracownicy WHERE imie NOT LIKE '%a' AND (zarobki<30)");
                                            echo("<h1 class=SQL_excercise>Zadanie 5: Wyświetlenie tylko mężczyzn zarabiający mniej niż 30</h1>");
                                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                                $result=$conn->query($sql);
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
                    
                                    //Zadanie 6: Wyświetlenie "MOJA_SUMA" (funkcja SUM):
                                        $sql=("SELECT dzial, SUM(zarobki) AS MOJA_SUMA FROM pracownicy GROUP BY dzial");
                                            echo("<h1 class=SQL_excercise>Zadanie 6: Wyświetlenie 'MOJA_SUMA' (funkcja SUM)</h1>");
                                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                                $result=$conn->query($sql);
                                                echo("<table border=1>");
                                                    echo("<th>dzial</th>");
                                                    echo("<th>MOJA_SUMA</th>");
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            echo("<tr>");
                                                            echo("<td>".$row["dzial"]."</td><td>".$row["MOJA_SUMA"]."</td>");
                                                            echo("</tr>");
                                                        }
                                                echo("</table>");
                    
                                    //Zadanie 7: Połączenie dwóch tabel:
                                        $sql=("SELECT id_pracownicy, imie, dzial, zarobki, data_urodzenia, nazwa_dzial FROM pracownicy, organizacja WHERE id_org=dzial");
                                            echo("<h1 class=SQL_excercise>Zadanie 7: Połączenie dwóch tabel</h1>");
                                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                                $result=$conn->query($sql);
                                                    echo("<table border=1>");
                                                        echo("<th>id_pracownicy</th>");
                                                        echo("<th>imie</th>");
                                                        echo("<th>dzial</th>");
                                                        echo("<th>nazwa_dzial</th>");
                                                        echo("<th>zarobki</th>");
                                                            while($row=$result->fetch_assoc())
                                                            {
                                                                echo("<tr>");
                                                                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["zarobki"]."</td>");
                                                                echo("</tr>");
                                                            }
                                                    echo("</table>");
                    
                                    //Zadanie 8: Wyświetlenie średniej zarobków z połączonymi dwoma tabelami:
                                        $sql=("SELECT dzial, nazwa_dzial, AVG(zarobki) AS Średnia_zarobków FROM pracownicy, organizacja WHERE id_org=dzial GROUP BY dzial");
                                            echo("<h1 class=SQL_excercise>Zadanie 8: Wyświetlenie średniej zarobków z połączonymi dwoma tabelami</h1>");
                                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                                $result=$conn->query($sql);
                                                    echo("<table border=1>");
                                                        echo("<th>dzial</th>");
                                                        echo("<th>nazwa_dzial</th>");
                                                        echo("<th>Średnia_zarobków</th>");
                                                        while($row=$result->fetch_assoc())
                                                        {
                                                            echo("<tr>");
                                                            echo("<td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["Średnia_zarobków"]."</td>");
                                                            echo("</tr>");
                                                        }
                                                    echo("</table>");
                    
                                    //Zadanie 9: Wyświetlenie sumy zarobków z połączonymi dwoma tabelami:
                                        $sql=("SELECT dzial, nazwa_dzial, SUM(zarobki) AS Suma_zarobków FROM pracownicy, organizacja WHERE id_org=dzial GROUP BY dzial");
                                            echo("<h1 class=SQL_excercise>Zadanie 9: Wyświetlenie sumy zarobków z połączonymi dwoma tabelami</h1>");
                                            echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                                $result=$conn->query($sql);
                                                    echo("<table border=1>");
                                                        echo("<th>dzial</th>");
                                                        echo("<th>nazwa_dzial</th>");
                                                        echo("<th>Suma_zarobków</th>");
                                                            while($row=$result->fetch_assoc())
                                                            {
                                                                echo("<tr>");
                                                                echo("<td>".$row["dzial"]."</td><td>".$row["nazwa_dzial"]."</td><td>".$row["Suma_zarobków"]."</td>");
                                                                echo("</tr>");
                                                            }
                                                    echo("</table>");
                        ?>
            </div>
</body>
</html>