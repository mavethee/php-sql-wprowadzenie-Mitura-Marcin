<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
            <title>Firma (Relacje)</title>
                <link rel="stylesheet" href="../assets/style.css">
                    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
                    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
                    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
                    <link rel="manifest" href="/assets/favicons/site.webmanifest">
                    <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
                        <meta name="msapplication-TileColor" content="#da532c">
                        <meta name="theme-color" content="#ffffff">
    </head>
<body_wdw_lib>

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
            <!--Podpisanie pracy w flexbox:-->
            <div class="container">
                <div class="item colorRed">
                    <?php
                        //Informacje o stronie:
                        echo("<h1 class='page_info'><br>Biblioteka (Autor-Tytuł)</br></h1>");    
                    ?>
                </div>
                <!--Menu boczne w flexbox:-->
                <div class="item colorGreen">
                    <?php include("../assets/mainMenuBar.php") ?>
                </div>
                    <!--Treść strony w flexbox:-->
                    <div class="item colorBlue">
                        <?php
                            //Logowanie do serwera mySQL:
                            require($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');
                            
                            $sql=("SELECT * FROM autor");
                                echo("<h1 class=SQL_excercise>Autorzy</h1>");
                                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                    $result = $conn->query($sql);
                                        echo("<table border=1>");
                                            echo("<th>id_autor</th>");
                                            echo("<th>nazwisko</th>");
                                                while($row=$result->fetch_assoc())
                                                {
                                                    echo("<tr>");
                                                    echo("<td>".$row['id_autor']."</td><td>".$row['nazwisko']."</td>");
                                                    echo("</tr>");
                                                }
                                        echo("</table>");
                            
                            $sql=("SELECT * FROM tytul");
                                echo("<h1 class=SQL_excercise>Tytuły</h1>");
                                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                    $result = $conn->query($sql);
                                            echo("<table border=1>");
                                            echo("<th>id_tytul</th>");
                                            echo("<th>tytul</th>");
                                                while($row=$result->fetch_assoc())
                                                {
                                                    echo("<tr>");
                                                    echo("<td>".$row['id_tytul']."</td><td>".$row['tytul']."</td>");
                                                    echo("</tr>");
                                                }
                                        echo("</table>");
                            
                            $sql=("SELECT * FROM autor_tytul, autor, tytul WHERE autor_id=id_autor AND tytul_id=id_tytul");
                                echo("<h1 class=SQL_excercise>Autorzy oraz tytuły</h1>");
                                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                    $result = $conn->query($sql);
                                        echo("<table border=1>");
                                            echo("<th>id</th>");
                                            echo("<th>Nazwisko autora</th>");
                                            echo("<th>Tytuł książki</th>");
                                                while($row=$result->fetch_assoc())
                                                {
                                                    echo("<tr>");
                                                    echo("<td>".$row['id']."</td><td>".$row['nazwisko']."</td><td>".$row['tytul']."</td>");
                                                    echo("</tr>");
                                                }
                                        echo("</table>");
                        ?>
                    </div>
            </div>
</body>
</html>