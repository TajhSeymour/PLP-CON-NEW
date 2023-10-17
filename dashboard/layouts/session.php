<?php
// Initialize the session
session_start();

// Function to perform redirection and exit
function redirectTo($url) {
  header("Location: $url");
  exit();
}

// Check if $_SESSION["password_reset"] is set and is a boolean value
if (array_key_exists("password_reset", $_SESSION) && $_SESSION["password_reset"]) {
  redirectTo("/dashboard/reset-password.php");
}

// Check if the user is logged in (if the session exists)
if (empty($_SESSION)) {
  redirectTo("/index.php");
}

require(dirname(__DIR__, 2) . '/api/dashboard/fetch_data/get_dashboard_data.php');
//require(dirname(__DIR__, 2) . '/api/dashboard/fetch_data/get_registrants_tb.php');




