<?php
// Add appropriate error handling and database connection here
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

// Check if the form was submitted

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the form data
    $user_id = $_POST["input_userid"];
    $first_name = $_POST["input_first_name_oc"];
    $middle_name = $_POST["input_middle_name_oc"];
    $last_name = $_POST["input_last_name_oc"];
    $email = $_POST["input_email_oc"];
    $nib_number = $_POST["input_nib_oc"];
    $system_assignment = $_POST["input_system_assignment_oc"];

    // Prepare and execute the stored procedure
    $query = "CALL UPDATE_SYSTEM_USER(?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "issssss", $user_id, $first_name, $middle_name, $last_name, $email, $nib_number, $system_assignment);

    if (mysqli_stmt_execute($stmt)) {
        // User information updated successfully
        $response = array("status" => "success", "message" => "User information updated successfully.");
    } else {
        // Error occurred while updating user information
        $response = array("status" => "error", "message" => "Error: " . mysqli_error($connection));
    }

    // Close the statement
    mysqli_stmt_close($stmt);

    // Send JSON response
    header("Content-Type: application/json");
    echo json_encode($response);

    // Stop further execution of the script
    exit();
}

// Close the database connection
mysqli_close($connection);
?>