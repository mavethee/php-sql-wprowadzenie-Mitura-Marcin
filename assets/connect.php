<?php
//Create connection
$conn = new mysqli($_SERVER['SERVER'],$_SERVER['USER'], $_SERVER['PASS'], $_SERVER['DBNAME']);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
?>