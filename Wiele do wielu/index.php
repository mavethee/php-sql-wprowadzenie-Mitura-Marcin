<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
            <title>Relacja wiele do wielu</title>
                <link rel="stylesheet" href="/assets/style.css">
                    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
                    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
                    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
                    <link rel="manifest" href="/assets/favicons/site.webmanifest">
                    <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
                        <meta name="msapplication-TileColor" content="#da532c">
                        <meta name="theme-color" content="#ffffff">
    </head>
<body_wdw_main>

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
                        echo("<h1 class='page_info'><br>Relacje wiele do wielu</br></h1>");    
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

                            //Menu nawigacyjne po Relacjach wiele do wielu:
                            include("indexMenuBar.php");
                            
                           
                        ?>
                    </div>
            </div>
</body>
</html>