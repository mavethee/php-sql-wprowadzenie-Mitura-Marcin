<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Usuwanie pracownika</title>
        <link rel="stylesheet" href="../assets/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="theme-color" content="#ffffff">
    </head>
<body class="body_del">
    <div class="container">
        <!--Tytuł strony w flexbox:-->
        <div class="item colorRed">
            <h1 class=page_info><br>Jesteś w delete.php</h1></br>
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

                //Informacja o stronie:
                echo("<h4><br>Jesteś w delete.php</h1></br>");

                //Logowanie do serwera mySQL:
                require_once($_SERVER['DOCUMENT_ROOT'] . '/assets/connect.php');

                function DeleteRecord($conn, $table, $column, $row)
                {
                    //Zdefiniowanie zapytanie $sql
                    $sql=("DELETE  FROM $table WHERE $column = $row");
                    
                    //Wyświetla zapytanie $sql
                    echo($sql);
                    
                    if($conn->query($sql) === TRUE) 
                    {
                        echo ("<h2>Record deleted successfully</h2>");
                    } 
                    else 
                    {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                }
                    
                DeleteRecord($conn, $_POST['table'], $_POST['column'], $_POST['row']);
        ?>
            
        </div>
    </div>
</body>
</html>