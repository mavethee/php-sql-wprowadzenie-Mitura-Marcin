<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
            <title>Biblioteka (Relacje)</title>
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
`            <!--Podpisanie pracy w flexbox:-->
            <div class="container">
                <div class="item colorRed">
                    <?php
                        //Informacje o stronie:
                        echo("<h1 class='page_info'><br>Biblioteka (Autor-tytuł)</br></h1>");    
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

                            //Funkcja:
                            function Biblioteka($sql, $conn, $columnID, $columnNames, $columnRow, $tables)
                            {
                                $result = $conn->query($sql);
                                    echo("<table border=0>");
                                        echo("<th>$columnID</th>");
                                        echo("<th>$columnNames</th>");
                                            while($row=$result->fetch_assoc())
                                            {
                                            echo("<tr>");
                                            echo("<td>".$row[$columnID]."</td><td>".$row[$columnRow]."</td><td>
                                        
                                        
                                            <form action='delete.php' method='POST'>
                                            <input type='number' name='row' value='".$row[$columnID]."' hidden>
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
                            function Biblioteka3($sql, $conn, $columnID, $columnNames, $column3, $columnRow, $columnRow2, $columnRow3, $table)
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
                    
                    
                            $sql=("SELECT * FROM autor");
                                echo("<h3>Autorzy</h3>");
                                echo("<li>".$sql."</li>");
                                    Biblioteka($sql, $conn, "id_autor", "autor", 'nazwisko', 'autor');
                    
                            $sql=("SELECT * FROM tytul");
                                echo("<h3>Tytuły</h3>");
                                echo("<li>".$sql."</li>");
                                    Biblioteka($sql, $conn, "id_tytul", "tytul", 'tytul', 'tytul');
                    
                            $sql=("SELECT * FROM autor_tytul, autor, tytul WHERE autor_id=id_autor AND tytul_id=id_tytul");
                                echo("<h3>Autorzy i tytuły</h3>");
                                echo("<li>".$sql."</li>");
                                    Biblioteka3($sql, $conn, "id", "nazwisko", "tytul", 'tytul', 'nazwisko', 'id', 'autor_tytul');
                        ?>
                    </div>
            </div>
</body>
</html>