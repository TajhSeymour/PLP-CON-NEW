<?php
// Include necessary files like dbconnection.php and apiheaders.php

require_once(dirname(__DIR__, 2) . '/database/dbconnection.php');
require_once(dirname(__DIR__, 2) . '/database/apiheaders.php');

function validate_input($input) {
  // Use appropriate validation and sanitization logic here
  // For example, you can use filter_var() to sanitize input
  $sanitized_input = filter_var($input, FILTER_SANITIZE_STRING);
  return $sanitized_input;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Sanitize and validate the entered code and surname
  $branchCode = validate_input($_POST['input_branch_id_code']);
  //$surname = validate_input($_POST['input_id_surname']);

  // Call the CHECK_MEMBER_ID_NUMBER stored procedure
  $sql = "CALL CHECK_BRANCH_CODE('$branchCode')";


  $queryResult = mysqli_query($connection, $sql);

  if ($queryResult) {
    // Retrieve the result from the stored procedure
    $data = mysqli_fetch_assoc($queryResult);

    if ($data) {
      // Send the data as JSON response
      echo json_encode(["success" => true, "data" => $data]);
    } else {
      // No data returned from the stored procedure
      $response = ["success" => false, "message" => "Invalid Branch Code, Please contact HQ for assistance!"];
      echo json_encode($response);
    }
  } else {
    // Error occurred while executing the stored procedure
    $response = ["success" => false, "message" => "Error: " . mysqli_error($connection)];
    echo json_encode($response);
  }

  // Close the database connection
  mysqli_close($connection);
} else {
  // Handle cases where the request method is not POST
  $response = ["success" => false, "message" => "Invalid request method."];
  echo json_encode($response);
}
?>
