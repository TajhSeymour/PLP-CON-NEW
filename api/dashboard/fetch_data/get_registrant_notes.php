<?php
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');


// API response format
$response = [
    'success' => false,
    'message' => '',
    'data' => [],
];

// Check if the user ID is provided via POST
if (isset($_POST['userID'])) {
    $userID = intval($_POST['userID']);

    // Prepare the SQL query to call the stored procedure
    $query = "CALL GET_NOTES(?)";

    // Prepare the statement
    $statement = $connection->prepare($query);

    if (!$statement) {
        $response['message'] = "Error preparing the statement: " . $connection->error;
    } else {
        // Bind the parameter to the statement
        $statement->bind_param("i", $userID);

        // Execute the statement
        if ($statement->execute()) {
            // Get the result set
            $result = $statement->get_result();

            // Fetch data and store it in the response
            while ($row = $result->fetch_assoc()) {
                $response['data'][] = $row;
            }

            // Set success flag and optional message
            $response['success'] = true;
            $response['message'] = "Data retrieved successfully.";
        } else {
            $response['message'] = "Error executing the statement: " . $statement->error;
        }

        // Close the statement
        $statement->close();
    }
} else {
    $response['message'] = "User ID not provided.";
}

// Close the database connection
$connection->close();

// Set the response content type to JSON
header('Content-Type: application/json');

// Return the JSON response
echo json_encode($response);
?>
