<?php
//Create connection
$conn = new mysqli($_SERVER['MYSQL_SERVER'],$_SERVER['MYSQL_USER'], $_SERVER['MYSQL_PASS'], $_SERVER['MYSQL_DBNAME']);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
?>