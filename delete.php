<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Usuwanie pracownika</title>
        <link rel="stylesheet" href="style.css">
      </head>
<body>
    <div class="nav">
        <a href="index.php">Główny index<a>;
        <a href="Organizacja_i_pracownicy.php">Organizacja_i_pracownicy<a>;
        <a href="Sortowanie.php">Sortowanie<a>;
        <a href="Limit.php">Limit<a>;
        <a href="Funkcje_agregujace.php">Funkcje_agregujące<a>;
        <a href="Data_i_czas.php">Data_i_czas<a>;
        <a href="Date_format.php">Formatowanie_dat<a>;
        <a href="formularz.html">Formularz - Strona.php<a>;
        <a href="daneDoBazy.php">Formularz - daneDoBazy.php<a>;
        <a href="https://projekt-testowy-mavethee.herokuapp.com/">Testowanko<a>;
        <a href="https://github.com/SK-2019/php-sql-wprowadzenie-Mitura-Marcin">GitHub - PHP<a>;
        <a href="https://github.com/mavethee/projekt_testowy">GitHub - Testowanko<a>;
    </div>
        <?php

            //Informacje o stronie:
            echo("<br>Jesteś w w delete.php</br>");
            echo("<h2> ID: ".$_POST["id_employee"]."</h2>");

            //Logowanie do serwera mySQL:
            require_once("connect.php");

            //Zapytanie DELETE w $SQL z próbą uzyskania danych od użytkownika:
            $sql = ("DELETE FROM pracownicy where id_pracownicy='".$_POST['id_employee']."'");
            
            //Wyświetlenie tabeli:
            echo "<h2>". $sql;

            //Informacja o sukcesie:
            if ($conn->query($sql) === TRUE)
            {
                echo "<br>Record deleted successfully<br>";
            }
                        
            //Informacja o ewentualnych błędach:
            else 
            {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $conn->close();

            //Wyświetlenie tabelki jako podgląd przy usuwaniu pracowników
            echo("<h1>Wyświetlenie tabelki jako podgląd przy usuwaniu pracowników (F5 po wprowadzeniu zmian)</h1>");
            echo("<h2>Użyte zapytanie SQL: SELECT * FROM pracownicy</h2>");
            $result=$conn->query("SELECT * FROM pracownicy");
            echo("<table border=1>");
            echo("<th>id_pracownicy</th>");
            echo("<th>imie</th>");
            echo("<th>data_urodzenia</th>");
            echo("<th>dzial</th>");
            echo("<th>zarobki</th>");
            while($row=$result->fetch_assoc())
            {
                echo("<tr>");
                echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["data_urodzenia"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
                echo("</tr>");
            }
            echo("</table>");
        ?>
</body>
</html>