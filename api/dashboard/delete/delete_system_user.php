<?php
// Add appropriate error handling and database connection here
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

// Function to update the user's password using the stored procedure
function deleteSystemUser($userId, $connection)
{
    // Prepare the SQL query with the stored procedure
    $stmt = $connection->prepare("CALL DELETE_SYSTEM_USER(?)");
    $stmt->bind_param("s", $userId);

    // Execute the stored procedure
    if ($stmt->execute()) {
        $stmt->close();
        return true;
    } else {
        // Error occurred while executing the stored procedure
        $stmt->close();
        return false;
    }
}

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the user ID from the request body (assuming it's a JSON payload)
    $requestData = json_decode(file_get_contents("php://input"), true);
    $userId = isset($requestData["userID"]) ? $requestData["userID"] : null;

    if ($userId !== null) {
        // Call the function to update the user's password
        if (deleteSystemUser($userId, $connection)) {
            // Password updated successfully
            // You can return a response to the client indicating success
            echo json_encode(array("success" => true, "message" => "User account deleted successfully."));
        } else {
            // Failed to update password
            // You can return a response to the client indicating the failure
            echo json_encode(array("success" => false, "message" => "Failed to deleted user account."));
        }
    } else {
        // User ID not provided
        // You can return a response to the client indicating the missing data
        echo json_encode(array("success" => false, "message" => "User ID not provided."));
    }
}

// Close the database connection
$connection->close();
?>
