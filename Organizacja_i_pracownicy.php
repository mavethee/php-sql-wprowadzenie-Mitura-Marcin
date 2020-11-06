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

    echo("Organizacja_i_pracownicy.php");
        //Zadanie 1: Wyświetlenie pełnej listy pracowników z nazwami działów
        echo("<h1>Zadanie 1: Wyświetlenie pełnej listy pracowników z nazwami działów</h1>");
        $result=$conn->query("SELECT imie, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE dzial=id_org");
        echo("<table borded=1>");
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
        echo("<h1>Zadanie 2: Wyświetlenie pracowników tylko z działu 1 i 4</h1>");
        $result=$conn->query("SELECT imie, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE (dzial=1 or dzial=4) AND dzial=id_org");
        echo("<table borded=1>");
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

        //Zadanie 3: Wyświetlenie listy kobiet z nazwami działów
        echo("<h1>ZZadanie 3: Wyświetlenie listy kobiet z nazwami działów</h1>");
        $result=$conn->query("SELECT imie, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE imie LIKE '%a' AND dzial=id_org");
        echo("<table borded=1>");
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

        //Zadanie 4: Wyświetlenie listy mężczyzn z nazwami działów
        echo("<h1>Zadanie 4: Wyświetlenie listy mężczyzn z nazwami działów</h1>");
        $result=$conn->query("SELECT imie, dzial, nazwa_dzial FROM pracownicy, organizacja WHERE imie NOT LIKE '%a' AND dzial=id_org");
        echo("<table borded=1>");
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
</body>
</html>