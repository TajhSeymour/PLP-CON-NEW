<?php
// Assume you have a valid code and department stored in your database table named 'codes'
// Replace 'db_host', 'db_username', 'db_password', and 'db_name' with actual values
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

// Call the stored procedure
$sql = "CALL GET_DASHBOARD_NUM_DATA()";
$result = $connection->query($sql);

// Fetch the data from the stored procedure
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_checked_in_users_count = $row['total_checked_in_users_count'];
    $total_media_press_count = $row['total_media_press_count'];
    $total_local_count = $row['total_local_count'];
    $pending_users_count = $row['pending_queue_users_count'];
    $security_users_count = $row['security_check_users_count'];
    $printer_users_count = $row['printer_queue_users_count'];
    $printed_badges_count = $row['printed_badges_count'];
    $denied_users_count = $row['denied_users_count'];
    $male_users_count = $row['male_users_count'];
    $female_users_count = $row['female_users_count'];
} else {
    echo "No data found.";
}

// Close the database connection
$connection->close();
?>


