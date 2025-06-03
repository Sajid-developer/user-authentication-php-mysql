<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to login page (optional)
header("Location: index.php");
exit;
?>