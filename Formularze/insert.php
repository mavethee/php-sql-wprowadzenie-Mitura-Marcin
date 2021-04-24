<!DOCTYPE html'">
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Dodawanie pracownika</title>
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="theme-color" content="#ffffff">
    </head>
<body class="body_insert">
    <div class="nav">
        <?php include("/assets/nav_links.php") ?>
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
        <?php

            //Informacje o stronie:
            echo("<h1 class='page_info'><br>Jesteś w insert.php</br></h1>");

            //Wyświetlenie wysłanych danych przez użytkownika:
            echo("<h1 class=SQL_excercise> Imie: ".$_POST["firstname"]."</h1>");
            echo("<h1 class=SQL_excercise> Dział: ".$_POST["shift"]."</h1>");
            echo("<h1 class=SQL_excercise> Zarobki: ".$_POST["salary"]."</h1>");
            echo("<h1 class=SQL_excercise> Data urodzenia: ".$_POST["date_of_birth"]."</h1>");

            //Logowanie do serwera mySQL:
            require_once('/assets/connect.php');

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