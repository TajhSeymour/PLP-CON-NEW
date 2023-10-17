<?php
// Add appropriate error handling and database connection here
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');
require_once(dirname(__DIR__, 3) . '/helpers/upload_helper.php');

// Function to generate a 10-digit random ID number
function generate_random_id()
{
    $timestampComponent = substr(time(), -5); // Extracts the last five digits from the current Unix timestamp
    $randomComponent = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT); // Generates a random five-digit number (including leading zeros if needed)

    // Combine timestamp and random number to create the ID
    $randomID = $timestampComponent . $randomComponent;

    // If the random ID length is greater than 8, truncate it to a maximum of 8 digits
    if (strlen($randomID) > 8) {
        $randomID = substr($randomID, 0, 8);
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
    $gender = validate_input($_POST["input_gender"]);
    $dob = validate_input($_POST["input_dob"]);
    $nib = validate_input($_POST["input_nib"]);
    $assignment = validate_input($_POST["input_assignment"]);
    $job_title = validate_input($_POST["input_job_title"]);
    $priority = validate_input($_POST["input_priority"]);

    // Generate a 10-digit random ID number
    $random_id = generate_random_id();

    // Upload badge photo using the helper function
    $badge_photo_result = upload_photo(dirname(__DIR__, 2) . '/uploads/photos', $random_id, $_FILES["badge_photo"]);
    if ($badge_photo_result['error']) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to upload badge photo. ' . $badge_photo_result['msg']]);
        exit();
    }
    $badge_photo_path = str_replace(dirname(__DIR__, 2) . '/uploads/photos', '', $badge_photo_result['data']['file_path']);

    // Upload gov-id using the helper function
    $gov_id_result = upload_photo(dirname(__DIR__, 2) . '/uploads/govid', $random_id, $_FILES["gov_id"]);
    if ($gov_id_result['error']) {
        echo json_encode(['status' => 'error', 'message' => 'Failed to upload gov-id. ' . $gov_id_result['msg']]);
        exit();
    }
    $gov_id_path = str_replace(dirname(__DIR__, 2) . '/uploads/govid', '', $gov_id_result['data']['file_path']);

    // Call the stored procedure to insert data
    $stmt = $connection->prepare("CALL INSERT_QUICK_REGISTER(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssssss", $random_id, $first_name, $middle_name, $last_name, $gender, $dob, $nib, $assignment, $job_title, $badge_photo_path, $gov_id_path, $priority);

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
