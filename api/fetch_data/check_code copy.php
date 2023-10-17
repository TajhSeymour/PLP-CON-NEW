<?php
// Assume you have a valid code and department stored in your database table named 'codes'
// Replace 'db_host', 'db_username', 'db_password', and 'db_name' with actual values
require_once(dirname(__DIR__, 2) . '/database/dbconnection.php');

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate the entered code
    $enteredCode = mysqli_real_escape_string($connection, $_POST['code']);

    // Query the database to check if the code is valid and get the department information
    $query = "SELECT department FROM ministry_access_code WHERE code = '$enteredCode' LIMIT 1";
    $result = mysqli_query($connection, $query);

    // Check if the code exists and is valid
    if (mysqli_num_rows($result) > 0) {
        // Code is valid, retrieve the department information
        $row = mysqli_fetch_assoc($result);
        $department = $row['department'];

        // Prepare the response data including department information
        $response = array(
            'status' => 'success',
            'department' => $department
        );

        // Convert the response data to JSON and send it back to the frontend
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // Code is invalid, send 'error' response to frontend
        $response = array(
            'status' => 'error',
            'message' => 'Invalid code. Please try again.'
        );

        // Convert the response data to JSON and send it back to the frontend
        header('Content-Type: application/json');
      echo json_encode($response);
    }

    // Close the database connection
    mysqli_close($connection);
}
?>
