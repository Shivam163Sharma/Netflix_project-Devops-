<?php
session_start(); // Start the session
session_destroy(); // Destroy the session
header("Location: index.php"); // Redirect to the index page
exit(); // Ensure no further code is executed
?>
