<?php
// Start or resume the session
session_start();

require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

// Check if the user ID and email are set in the session
if (isset($_SESSION['id'], $_SESSION['email'])) {
    $user_id = $_SESSION['id'];
    $user_email = $_SESSION['email'];

    // Now you have the user ID and email available for use in this page
    // You can use $user_id and $user_email in the password update logic or any other parts of the page

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST['input_new_password'], $_POST['input_confirm_new_password'])) {
            $input_new_password = $_POST['input_new_password'];
            $input_confirm_new_password = $_POST['input_confirm_new_password'];

            // Perform additional validation if required
            if ($input_new_password !== $input_confirm_new_password) {
                $error = "Passwords do not match.";
                echo $error;
            } elseif (strlen($input_new_password) < 8) {
                $error = "Password must be at least 8 characters long.";
                echo $error;
            } else {
                // Passwords match and pass validation, proceed with the password update
                // Prepare and execute the stored procedure to update the password
                $hashed_password = password_hash($input_new_password, PASSWORD_DEFAULT);

                // Assuming $connection is your database connection object
                // $stmt = $connection->prepare("CALL UPDATE_USR_CHANGE_PASSWORD(?, ?, ?)");
                $_SESSION['password_reset'] = false;
                $stmt = $connection->prepare('UPDATE system_users SET password_hash = ?, password_reset = ? WHERE id = ?;');
                $stmt->bind_param("sii", $hashed_password, $_SESSION['password_reset'], $user_id);

                if ($stmt->execute()) {
                    // Password changed successfully
                    // Redirect to the dashboard page
                    $_SESSION['password_reset'] = false;
                    header("Location: /dashboard/index.php");
                    exit(); // Make sure to exit after the redirection to prevent further execution
                } else {
                    // Failed to change the password
                    $error = "Failed to change the password. Please try again later.";
                    echo $error;
                }

                $stmt->close();
            }
        } else {
            // Handle invalid form data or display an error message to the user
            $error = "Invalid form data. Please fill in all the required fields.";
            echo $error;
        }
    }
} else {
    // If the user ID or email is not set in the session, it means the user is not logged in or authenticated
    // You may want to redirect the user to the login page or display an error message
    header("Location: /index.php");
    exit();
}

// Close the database connection
$connection->close();


?>