<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="nav">
        Place for navigation and links
        <a href="Organizacja_i_pracownicy.php">Organizacja_i_pracownicy<a>;
        <a href="Funkcje_agregujace.php">Funkcje_agregujące<a>;
        <a href="Data_i_czas.php">Data_i_czas<a>;
        <a href="index.php">Główny index<a>;
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">GitHub<a>;
    </div>
        <?php

        //Logowanie do serwera mySQL
        require_once("connect.php");

        echo("Data_i_czas.php");
        //Zadanie 1: Wyświetl wiek poszczegolnych pracowników
        echo("<h1>Zadanie 1: Wyświetl wiek poszczegolnych pracowników</h1>");
        $result=$conn->query("SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS Wiek_poszczególnych_pracowników FROM pracownicy");
        echo("<table borded=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>Wiek_poszczególnych_pracowników</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]"</td><td>".$row["Wiek_poszczególnych_pracowników"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 2: Wyświetl wiek pracowników z działu serwisowego:
        echo("<h1>Zadanie 2: Wyświetl wiek pracowników z działu serwisowego</h1>");
        $result=$conn->query("SELECT * ,YEAR(curdate())-YEAR(data_urodzenia) AS Wiek_poszczególnych_pracowników_z_działu_serwisowego FROM pracownicy,organizacja WHERE dzial=id_org AND nazwa_dzial='serwis'");
        echo("<table borded=1>");
        echo("<th>id_pracownicy</th>");
        echo("<th>imie</th>");
        echo("<th>data_urodzenia</th>");
        echo("<th>dzial</th>");
        echo("<th>zarobki</th>");
        echo("<th>Wiek_poszczególnych_pracowników_z_działu_serwisowego</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]"</td><td>".$row["Wiek_poszczególnych_pracowników_z_działu_serwisowego"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 3: Wyświetlenie sumy lat wszystkich pracowników:
        echo("<h1>Zadanie 3: Wyświetlenie sumy lat wszystkich pracowników</h1>");
        $result=$conn->query("SELECT SUM(YEAR(CURDATE()) - YEAR(data_urodzenia)) AS Suma_lat_wszystkich_pracowników FROM pracownicy");
        echo("<table borded=1>");
        echo("<th>Suma_lat_wszystkich_pracowników</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_lat_wszystkich_pracowników"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 4: Suma lat pracowników z dzialu handel:
        echo("<h1>Zadanie 4: Suma lat pracowników z dzialu handel</h1>");
        $result=$conn->query("SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) AS Suma_lat_pracowników_z_dzialu_handel FROM pracownicy,organizacja WHERE dzial=id_org AND nazwa_dzial='handel'");
        echo("<table borded=1>");
        echo("<th>Suma_lat_pracowników_z_dzialu_handel</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_lat_pracowników_z_dzialu_handel"]."</td>");
            echo("</tr>");
        }
        echo("</table>");

        //Zadanie 5: Wyświetl sumę lat kobiet:
        echo("<h1>Zadanie 5: Wyświetl sumę lat kobiet</h1>");
        $result=$conn->query("SELECT SUM(YEAR(curdate())-YEAR(data_urodzenia)) AS Suma_lat_kobiet FROM pracownicy WHERE imie LIKE '%a'");
        echo("<table borded=1>");
        echo("<th>Suma_lat_kobiet</th>");
        while($row=$result->fetch_assoc())
        {
            echo("<tr>");
            echo("<td>".$row["Suma_lat_kobiet"]."</td>");
            echo("</tr>");
        }
        echo("</table>");
        ?>
</body>
</html>
