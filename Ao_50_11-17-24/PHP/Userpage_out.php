<?php
// Start the session
session_start();

// Destroy the session to log the user out
session_unset();  // Remove all session variables
session_destroy(); // Destroy the session

// Redirect to ao customer log in
header("Location: ../PHP/Ao_customer.php");
exit();
?>