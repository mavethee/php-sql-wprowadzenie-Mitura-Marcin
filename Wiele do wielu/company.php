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
                        echo("<h1 class='page_info'><br>Firma (Pracownik-projekt)</br></h1>");    
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

                            //Powrót do głównego indexu relacji:
                            include("returnToIndex.php");

                            //Funkcja z gotową tabelą:
                            function Firma($sql, $conn, $columnID, $columnNames, $columnRow, $columnRow2, $tables)
                            {
                                $result = $conn->query($sql);
                                    echo("<table border=1>");
                                        echo("<th>$columnID</th>");
                                        echo("<th>$columnNames</th>");
                                            while($row=$result->fetch_assoc())
                                            {
                                                echo("<tr>");
                                                echo("<td>".$row[$columnRow2]."</td><td>".$row[$columnRow]."</td><td>
                                            
                                                <form action='delete.php' method='POST'>
                                                    <input type='number' name='row' value='".$row[$columnRow2]."' hidden>
                                                    <input type='text' name='table' value='".$tables."' hidden>
                                                    <input type='text' name='column' value='".$columnID."' hidden>
                                                    <input type='submit' value='Usuń'>
                                                </form>

                                            </td>");
                                            echo("</tr>");
                                            }
                                    echo("</table>");
                            }

                            //Do 3 tabeli, aby można było usunąć rekordy:
                            function Firma3($sql, $conn, $columnID, $columnNames, $column3, $columnRow, $columnRow2, $columnRow3, $table)
                            {
      
                                $result = $conn->query($sql);
                                echo("<table border=1>");
                                    echo("<th>$columnID</th>");
                                    echo("<th>$columnNames</th>");
                                    echo("<th>$column3</th>");
                                        while($row=$result->fetch_assoc())
                                        {
                                            echo("<tr>");
                                                echo("<td>".$row[$columnRow3]."</td><td>".$row[$columnRow2]."</td><td>".$row[$columnRow]."</td><td>
                                        
                                        
                                                    <form action='delete.php' method='POST'>
                                                    <input type='number' name='row' value='".$row[$columnRow3]."' hidden>
                                                    <input type='text' name='table' value='".$table."' hidden>
                                                    <input type='text' name='column' value='".$columnID."' hidden>
                                                    <input type='submit' value='Usuń'>
                                                    </form>
                                            
                                                </td>");
                                            echo("</tr>");
                                        }
                                echo("</table>");
                            }

                            //Polecenia do tabel:
                            $sql=("SELECT * FROM pracownik");
                                echo("<h1 class=SQL_excercise>Pracownicy</h1>");
                                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                    Firma($sql, $conn, "id", "imie", 'imie', 'id_pracownika', 'pracownik');
                
                            $sql=("SELECT * FROM projekt");
                                echo("<h1 class=SQL_excercise>Projekty</h1>");
                                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                    Firma($sql, $conn, "id_projektu", "projekt", 'nazwa', 'id_projektu', 'projekt');
                
                            $sql=("SELECT * FROM pracownik, projekt, prac_proj where pracownik = id_pracownika and projekt = id_projektu");
                                echo("<h1 class=SQL_excercise>Pracownicy i projekty</h1>");
                                echo("<h4 class=SQL_excercise>Użyte zapytanie SQL: ".$sql."</h4>");
                                    Firma3($sql, $conn, "id", "pracownik", "projekt", 'nazwa', 'imie', 'id', 'prac_proj');

                        ?>
                    </div>
            </div>
</body>
</html>