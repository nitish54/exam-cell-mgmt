<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['name']);
// Delete all session variables
// session_destroy();

// Jump to login page
session_destroy();
header('Location: index.php');
?>
