<?php
$servername = "localhost";  // Server name or IP address
$username = "root";         // MySQL username
$password = "";             // MySQL password
$dbname = "ao";  // Name of the database you want to connect to

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
   echo "<script>console.log('database connected')</script>";
}

// Close the connection (optional, but good practice)

?>  