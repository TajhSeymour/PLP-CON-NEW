<?php
// Include necessary files like dbconnection.php and apiheaders.php

require_once(dirname(__DIR__, 2) . '/database/dbconnection.php');
require_once(dirname(__DIR__, 2) . '/database/apiheaders.php');

// Function to sanitize and validate input
function validate_input($input) {
  return filter_var(trim($input), FILTER_SANITIZE_STRING);
}

// Initialize the response array
$response = ["success" => false, "message" => "An error occurred."];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Start output buffering
  ob_start();

  // Sanitize and validate the entered code and surname
  $plpId = validate_input($_POST['input_id_number']);
  $surname = validate_input($_POST['input_id_surname']);

  // Include your database connection code here

  // Call the CHECK_MEMBER_ID_NUMBER stored procedure
  $sql = "CALL CHECK_MEMBER_ID_NUMBER('$plpId', '$surname')";
  $queryResult = mysqli_query($connection, $sql);

  if ($queryResult) {
      $data = mysqli_fetch_assoc($queryResult);

      if ($data) {
          if ($data['conference_checkin'] == "1") {
              $response["message"] = "This registration has already been checked in. If you require assistance, please visit the Registration Centre (HQ).";
          } else {
              $response["success"] = true;
              $response["data"] = $data;
          }
      } else {
          $response["message"] = "Verification Failed! Please check your PLP ID & Surname.";
      }

  } else {
      $response["message"] = "Error: " . mysqli_error($connection);
  }

  // End and clean the output buffer
  ob_end_clean();

  // Close the database connection
  mysqli_close($connection);
} else {
  $response["message"] = "Invalid request method.";
}

// Send the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>