<?php
// Add appropriate error handling and database connection here
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

function generate_random_id()
{
    $timestampComponent = substr(time(), -5);  // extracts the last five digits from the current Unix timestamp
    $maxRandom = 99999; // Maximum value for the random component (5 digits)
    $maxTotalLength = 7; // Maximum total length for the generated ID
    
    // Calculate the maximum value allowed for the random component to ensure the total length does not exceed 7
    $maxRandom = min($maxRandom, pow(10, $maxTotalLength - strlen($timestampComponent)) - 1);
    
    $randomComponent = str_pad(mt_rand(0, $maxRandom), $maxTotalLength - strlen($timestampComponent), '0', STR_PAD_LEFT);
    
    return $timestampComponent . $randomComponent;
}

// Function to validate and sanitize input data
function validate_input($data)
{
    return trim(htmlspecialchars(stripslashes($data)));
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and validate form data
    $first_name = validate_input($_POST["first_name"]);
    $middle_name = validate_input($_POST["middle_name"]);
    $last_name = validate_input($_POST["last_name"]);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
   // $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $nib = validate_input($_POST["nib"]);

    if (!$first_name || !$last_name || !$email || !$password || !$confirm_password || !$nib) {
        echo json_encode(['status' => 'error', 'message' => 'Please provide valid information for all fields.']);
        exit();
    }

    if ($password !== $confirm_password) {
        echo json_encode(['status' => 'error', 'message' => 'Passwords do not match. Please re-enter your password.']);
        exit();
    }

    // Generate a random UUID for the unique ID number
    $uuid = generate_random_id();

    // Hash the password using bcrypt
    $salt = bin2hex(random_bytes(16));
    $hashedPassword = password_hash($password . $salt, PASSWORD_BCRYPT);

    // Prepare and call the stored procedure to insert data
    $stmt_insert_user = $connection->prepare("CALL INSERT_STAFF(?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt_insert_user->bind_param("isssssss", $uuid, $first_name, $middle_name, $last_name, $email, $hashedPassword, $salt, $nib);

    if ($stmt_insert_user->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Staff Registration Successful!']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to register. Please try again.']);
    }

    $stmt_insert_user->close();
    $connection->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}
?>
