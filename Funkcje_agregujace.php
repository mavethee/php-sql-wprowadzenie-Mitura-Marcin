<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <?php

    //Logowanie do serwera mySQL
    require_once("connect.php");

    echo("Funkcje_agregujące.php");
        //Zadanie 1: Wyświetlenie sumy zarobków wszystkich pracowników
        echo("<h1>Zadanie 1: Wyświetlenie sumy zarobków wszystkich pracowników</h1>");
        $result=$conn->query("SELECT SUM(zarobki) AS Suma_zarobków_wszystkich_pracowników FROM pracownicy");
        echo("<table borded=1>");
        echo("<th>Suma_zarobków_wszystkich_pracowników</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_zarobków_wszystkich_pracowników"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 2: Wyświetlenie pracowników tylko z działu 1 i 4:
        echo("<h1>Zadanie 2: Wyświetlenie pracowników tylko z działu 1 i 4</h1>");
        $result=$conn->query("SELECT SUM(zarobki) AS Suma_zarobków_kobiet FROM pracownicy WHERE imie NOT LIKE '%a'");
        echo("<table borded=1>");
        echo("<th>Suma_zarobków_kobiet</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_zarobków_kobiet"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 3: Wyświetlenie sumy zarobków mężczyzn pracujących w dziale 2 i 3:
        echo("<h1>Zadanie 3: Wyświetlenie sumy zarobków mężczyzn pracujących w dziale 2 i 3</h1>");
        $result=$conn->query("SELECT SUM(zarobki) AS Suma_zarobków_mężczyzn_pracujących_w_dziale_2_i_3 FROM pracownicy WHERE imie NOT LIKE '%a' and (dzial=2 OR dzial=3)");
        echo("<table borded=1>");
        echo("<th>Suma_zarobków_mężczyzn_pracujących_w_dziale_2_i_3</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_zarobków_mężczyzn_pracujących_w_dziale_2_i_3"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 4: Średnia zarobków pracowników z działu 4:
        echo("<h1>Zadanie 4: Średnia zarobków pracowników z działu 4</h1>");
        $result=$conn->query("SELECT AVG(zarobki) AS Średnia_zarobków_pracowników_z_działu_4 FROM pracownicy WHERE dzial=4");
        echo("<table borded=1>");
        echo("<th>Średnia_zarobków_pracowników_z_działu_4</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Średnia_zarobków_pracowników_z_działu_4"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 5: Średnia zarobków mężczyzn z działu 1 i 2:
        echo("<h1>Zadanie 5: Średnia zarobków mężczyzn z działu 1 i 2</h1>");
        $result=$conn->query("SELECT AVG(zarobki) AS Średnia_zarobków_mężczyzn_z_działu_1_i_2 FROM pracownicy WHERE dzial=4");
        echo("<table borded=1>");
        echo("<th>Średnia_zarobków_mężczyzn_z_działu_1_i_2</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Średnia_zarobków_pracowników_z_działu_1_i_2"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 6: Ilość wszystkich pracowników:
        echo("<h1>Zadanie 6: Ilość wszystkich pracowników</h1>");
        $result=$conn->query("SELECT COUNT(imie) AS Ilość_wszystkich_pracowników FROM pracownicy");
        echo("<table borded=1>");
        echo("<th>Ilość_wszystkich_pracowników</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Ilość_wszystkich_pracowników"]."</td>");
            echo("</tr>");
        }
        echo("</table>");
    ?>
</body>
</html>