<?php
$servername = "mysql-mavethee.alwaysdata.net";
$username = "mavethee_marcin";
$password = "H@slo24!";
$dbname = "mavethee_marcin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}
?>