
<?php
// Add appropriate error handling and database connection here
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');


// Function to generate a 10-digit random ID number
function generate_random_id()
{
    $timestampComponent = substr(time(), -5); // Extracts the last five digits from the current Unix timestamp
    $randomComponent = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT); // Generates a random five-digit number (including leading zeros if needed)

    // Combine timestamp and random number to create the ID
    $randomID = $timestampComponent . $randomComponent;

    // If the random ID length is greater than 6, truncate it to a maximum of 6 digits
    if (strlen($randomID) > 6) {
        $randomID = substr($randomID, 0, 6);
    }

    return $randomID;
}


// Function to validate and sanitize input data
function validate_input($data)
{
    return trim(htmlspecialchars(stripslashes($data)));
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = validate_input($_POST["input_first_name"]);
    $middle_name = validate_input($_POST["input_middle_name"]);
    $last_name = validate_input($_POST["input_last_name"]);
    $email = validate_input($_POST["input_email"]);
    $nib = validate_input($_POST["input_nib"]);
    $assignment = validate_input($_POST["input_system_assignment"]);


    // Generate a 10-digit random ID number
    $random_id = generate_random_id();


    // Call the stored procedure to insert data
    $stmt = $connection->prepare("CALL INSERT_SYSTEM_USER(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssis", $random_id, $first_name, $middle_name, $last_name, $email, $nib, $assignment);

    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Record added successfully!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to add record to the database.']);
    }

    // Close the prepared statement and database connection
    $stmt->close();
    $connection->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>