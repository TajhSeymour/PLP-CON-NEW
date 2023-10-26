<?php
// Start the PHP session (if not already started)
// session_start();

// Check if the user is either a Super Admin or a Security Officer
if (
    !(isset($_SESSION['super_admin']) && $_SESSION['super_admin']) &&
    !(isset($_SESSION['security_officer']) && $_SESSION['security_officer'])
    &&
    !(isset($_SESSION['officer']) && $_SESSION['officer']) &&
    !(isset($_SESSION['supervisor']) && $_SESSION['supervisor'])
) {
    // User is not allowed, redirect to 404.php
    header("Location: 404.php");
    exit();
}
?>