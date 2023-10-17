<?php
require_once(dirname(__DIR__, 2) . '/database/dbconnection.php');


// Step 2: Call the stored procedure
$query = 'CALL GET_ASSIGNMENT_LIST()';
$result = mysqli_query($connection, $query);


if (!$result) {
    die('Failed to fetch assignment data: ' . mysqli_error($connection));
}

// Prepare an array to hold the assignment names
$assignment = array();

// Fetch each row and add the assignment name to the array
while ($row = mysqli_fetch_assoc($result)) {
    $assignment[] = $row['department'];
}

// Close the database connection
mysqli_close($connection);

// Set the response content type to JSON
header('Content-Type: application/json');

// Return the country data as JSON
echo json_encode($assignment);
exit();
?>


