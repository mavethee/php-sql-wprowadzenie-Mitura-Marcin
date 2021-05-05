<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Limit</title>
        <link rel="stylesheet" href="assets/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="theme-color" content="#ffffff">
    </head>
<body class="body_limit">
    <div class="container">
        <div class="item colorRed">
            <?php
                //Informacja o stronie:
                echo("<h1 class='page_info'><br>Jesteś w limit.php</h1></br>");
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
                <source src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/music/Kara_OST.mp3" type="audio/mpeg">
            </audio>
        <!--Treść strony w flexbox:-->
        <div class="item colorBlue">        
        <?php
            //Logowanie do serwera mySQL:
            require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');

            //Zadanie 1: Wyświetl dwóch najlepiej zarabiających pracowników z działu 4:
            $sql=("SELECT * FROM pracownicy,organizacja WHERE (dzial=id_org AND dzial=4) ORDER BY zarobki DESC LIMIT 2");
            echo("<h1 class=SQL_excercise>Zadanie 1: Wyświetl dwóch najlepiej zarabiających pracowników z działu 4</h1>");
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

            //Zadanie 2: Wyświetl trzy najlepiej zarabiające kobiety z działu 2 i 4:
            $sql=("SELECT * FROM pracownicy,organizacja WHERE (dzial=id_org) AND (dzial=2 OR dzial=4) AND imie LIKE '%a' ORDER BY `pracownicy`.`zarobki` DESC LIMIT 3");
            echo("<h1 class=SQL_excercise>Zadanie 2: Wyświetl trzy najlepiej zarabiające kobiety z działu 2 i 4</h1>");
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

            //Zadanie 3: Wyświetlenie najstarszego pracownika:
            $sql=("SELECT * FROM pracownicy,organizacja WHERE dzial=id_org ORDER BY data_urodzenia ASC LIMIT 1");
            echo("<h1 class=SQL_excercise>Zadanie 3: Wyświetlenie najstarszego pracownika</h1>");
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
