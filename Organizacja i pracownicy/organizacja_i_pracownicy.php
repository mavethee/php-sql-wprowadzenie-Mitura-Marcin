<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Organizacja i pracownicy</title>
        <link rel="stylesheet" href="/assets/style.css">
        <link rel="apple-touch-icon" sizes="57x57" href="/assets/icons/favicons/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/assets/icons/favicons/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/assets/icons/favicons/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/assets/icons/favicons/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/assets/icons/favicons/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/assets/icons/favicons/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/assets/icons/favicons/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/assets/icons/favicons/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/favicons/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/assets/icons/favicons/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/assets/icons/favicons/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/icons/favicons/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/assets/icons/favicons/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
<body class="body_orgiprac">
    <div class="nav">
    <!--Tytuł strony w flexbox:-->
    <div class="container">
        <div class="item colorRed">
            <?php
                //Informacja o stronie:
                echo("<h1 class='page_info'><br>Jesteś w organizacja_i_pracownicy.php</h1></br>");
            ?>
        </div>
        <!--Menu boczne w flexbox:-->
        <div class="item colorBlue">
            <?php include("/assets/nav_links.php") ?>
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
        
        <!--Treść strony w flexbox:-->
        <div class="item colorGreen">
        <?php
            //Logowanie do serwera mySQL:
            require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');

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
        </div>
</body>
</html>
