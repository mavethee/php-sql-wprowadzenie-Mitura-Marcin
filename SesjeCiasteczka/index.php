<?php
    // Rozpocznij sesję z liczbą odwiedzin:
    session_start();

    if (!isset($_SESSION['licznik'])) {
        $_SESSION['licznik'] = 0;
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal jakiś tam</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f1f1f1;
            font-family: 'Courier New', Courier, monospace;
            font-size: 1.2rem;
            color: #333;
        }

        form {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
        }

        form input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form input[type="submit"] {
            margin-top: 10px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #ccc;
        }

        p {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        p::first-letter {
            font-size: 2rem;
        }

        p::first-line {
            font-size: 1.5rem;
        }

        p::selection {
            background-color: #ccc;
        }

        p::placeholder {
            color: #ccc;
        }

        p::marker {
            color: #ccc;
        }

    </style>
</head>
<body>
    <?php
        // COŚ TRUDNIEJSZEGO, dodajemy formularz jeśli ciasteczko wynosi 0 D:
        // Musimy wiedziedzieć przecie jak się śmieć nazywa, znaczy co :X

        // Jeśli licznik równa się 0, najpierw wyświetl formularz z polem do wpisania imienia:
        if ($_SESSION['licznik'] == 0) {
            echo '<form action="index.php" method="post">
                    <label for="imie">Podaj swoje imię:</label>
                    <input type="text" name="imie" id="imie">
                    <input type="submit" value="Wyślij">
                </form>';

            // Jeśli formularz został wysłany, zapisz imię w sesji i zwiększ licznik:
            if (isset($_POST['imie'])) {
                // Imię jako sesja:
                $_SESSION['imie'] = $_POST['imie'];
                // Zwiększa licznik o 1
                $_SESSION['licznik']++;
                // Dodaj date ostatniej wizyty jako sesje
                $_SESSION['data'] = date('Y-m-d H:i:s');
            }
        } else {
            // Jeśli licznik jest większy od 1, wyświetl imię zapisane w sesji wraz z licznikiem
        
            echo '<p>Witaj ' . $_SESSION['imie'] . '! Jesteś tutaj ' . $_SESSION['licznik'] . ' raz!</p>';
            echo '<p>Ostatnia wizyta: ' . $_SESSION['data'] . '</p>';

            // Zwiększ licznik o 1:
            $_SESSION['licznik']++;

            // Dodaj date ostatniej wizyty jako sesje
            $_SESSION['data'] = date('Y-m-d H:i:s');

            ?>

            <!-- Niech gra muzyka PepeLaugh -->
            <script>
                window.onload = function() 
                {
                    var context = new AudioContext();
                }
            </script>
        
                <!--Autoplay music in loop-->
                <audio controls autoplay loop>
                    <source src="https://raw.githubusercontent.com/sk-2019/php-sql-wprowadzenie-mitura-marcin/main/assets/music/Sigma.mp3" type="audio/mpeg">
                </audio>
            <?php
        }

        /*      PODSTAWY:
        // Wyświetl licznik odwiedzin, jeśli jest to pierwsza wizyta, poinformuj o tym:
        if ($_SESSION['licznik'] == 1) {
            echo "Witaj na naszej stronie! To Twoja pierwsza wizyta.";
        } else {
            // W innym wypadku jak poniżej lol
            echo "Witaj ponownie! Odwiedziłeś nas już {$_SESSION['licznik']} razy.";
        } 
        */
    ?>
</body>
</html>