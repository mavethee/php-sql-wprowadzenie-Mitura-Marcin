<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Wypożyczalnia</title>
        <link rel="stylesheet" href="assets/style.css">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="/assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
            <meta name="msapplication-TileColor" content="#da532c">
            <meta name="theme-color" content="#ffffff">
    </head>
<body class="body_lib">
    <!--Tytuł strony w flexbox:-->
    <div class="container">
        <div class="item colorRed">
            <?php
                //Informacja o stronie:
                echo("<h1 class=page_info><br>Jesteś w wypozyczalnia.php</h1></br>");
                
            ?>
        </div>
            <!--Menu boczne w flexbox:-->
            <div class="item colorBlue">
                <?php include("../assets/nav_links.php") ?>
            </div>
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
            <div class="item colorGreen">
                <?php
                    //Wyświetlenie informacji wprowadzonej przez użytkownika:
                        echo("<h4 class='renting_form'>Autor: ".$_POST['Autor']."</h4>");
                            echo("<h4 class='renting_form'>Tytuł: ".$_POST['Tytuł']."</h4>");
                ?>
            </div>
</body>
</html>
