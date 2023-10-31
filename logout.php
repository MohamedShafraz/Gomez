<?php
session_start(); // Start the session

// Clear all session data
session_unset();

// Destroy the session
session_destroy();

// Redirect the user to the login page or any other appropriate page
header("Location: login"); // Replace with the desired redirection URL
exit();
?>
