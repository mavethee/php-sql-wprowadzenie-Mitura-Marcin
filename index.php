<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<?php
//Podpisanie pracy
echo("<h1>Marcin Mitura</h1>");
echo("<h2>Klasa 2Ti, grupa 1</h2>");
echo("<h3>Numer 22</h3>");

//Logowanie do serwera mySQL
require_once("connect.php");

//Zadanie 1: Wyświetlenie pełnej listy pracowników:
echo("<h1>Zadanie 1: Wyświetlenie pełnej listy pracowników:</h1>");
$result=$conn->query("SELECT * FROM pracownicy");
echo("<table borded=1>");
echo("<th>id_pracownicy</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");
while($row=$result->fetch_assoc())
{
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
echo("</tr>");
}
echo("</table>");

//Zadanie 2: Wyświetlenie tylko kobiet listy pracowników:
echo("<h1>Zadanie 2: Wyświetlenie tylko kobiet listy pracowników:</h1>");
$result=$conn->query("SELECT * FROM pracownicy WHERE imie LIKE '%a'");
echo("<table borded=1>");
echo("<th>id_pracownicy</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");
while($row=$result->fetch_assoc())
{
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
echo("</tr>");
}
echo("</table>");

//Zadanie 3: Kobiety z działu 1 i 4:
echo("<h1>Zadanie 3: Kobiety z działu 1 i 4:</h1>");
$result=$conn->query("SELECT * FROM pracownicy WHERE imie LIKE '%a' AND dzial=1 OR dzial=4");
echo("<table borded=1>");
echo("<th>id_pracownicy</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");
while($row=$result->fetch_assoc())
{
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
echo("</tr>");
}
echo("</table>");

//Zadanie 4: Kobiety zarabiające mniej niż 35 z działu 1 i 2:
echo("<h1>Zadanie 4: Kobiety zarabiające mniej niż 35 z działu 1 i 2:</h1>");
$result=$conn->query("SELECT * FROM pracownicy WHERE imie LIKE '%a' AND (zarobki<35) AND (dzial=1 OR dzial=2)");
echo("<table borded=1>");
echo("<th>id_pracownicy</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");
while($row=$result->fetch_assoc())
{
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
echo("</tr>");
}
echo("</table>");

//Zadanie 5: Mężczyźni zarabiający mniej niż 30:
echo("<h1>Zadanie 5: Mężczyźni zarabiający mniej niż 30:</h1>");
$result=$conn->query("SELECT * FROM pracownicy WHERE imie NOT LIKE '%a' AND (zarobki<30)");
echo("<table borded=1>");
echo("<th>id_pracownicy</th>");
echo("<th>imie</th>");
echo("<th>dzial</th>");
echo("<th>zarobki</th>");
while($row=$result->fetch_assoc())
{
echo("<tr>");
echo("<td>".$row["id_pracownicy"]."</td><td>".$row["imie"]."</td><td>".$row["dzial"]."</td><td>".$row["zarobki"]."</td>");
echo("</tr>");
}
echo("</table>");

//Zadanie 6: Wyświetlenie "MOJA_SUMA" (funkcja SUM)
echo("<h1>Zadanie 6: Wyświetlenie 'MOJA_SUMA' (funkcja SUM)</h1>");
$result=$conn->query("SELECT dzial, SUM(zarobki) AS MOJA_SUMA FROM pracownicy GROUP BY dzial");
echo("<table borded=1>");
echo("<th>dzial</th>");
echo("<th>MOJA_SUMA</th>");
while($row=$result->fetch_assoc())
{
echo("<tr>");
echo("<td>".$row["dzial"]."</td><td>".$row["MOJA_SUMA"]."</td>");
echo("</tr>");
}
echo("</table>");
?>
</body>
</html>
