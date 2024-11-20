<?php


$servername = "localhost";
$namedb = "root";
$password = "";
$dbname = "Ao";

// Create connection
$conn = mysqli_connect($servername, $namedb, $password, $dbname );

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>
