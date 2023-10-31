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
    $total_stalwart_councillor = $row['total_stalwart_councillor'];
    $total_voting_delegates = $row['total_voting_delegates'];
    $total_observer_delegates = $row['total_observer_delegates'];
    $total_unknown_delegates = $row['total_unknown_delegates'];
    $total_stalwart_councillor_paid = $row['total_stalwart_councillor_paid'];
    $total_voting_delegates_paid = $row['total_voting_delegates_paid'];
    $total_observer_delegates_paid = $row['total_observer_delegates_paid'];
    $total_pending_payment = $row['total_pending_payment'];
    $total_delegates_travelling = $row['total_delegates_travelling'];
    $total_delegates_requesting_transportation_assistance = $row['total_delegates_requesting_transportation_assistance'];
    $male_users_count = $row['male_users_count'];
    $female_users_count = $row['female_users_count'];
    $badge_printed = $row['badge_printed'];
    $badge_printed_pending = $row['badge_printed_pending'];


} else {
    echo "No data found.";
}

// Close the database connection
$connection->close();
?>


