<?php

require_once(dirname(__DIR__, 2) . '/database/apiheaders.php');
require_once(dirname(__DIR__, 2) . '/database/dbconnection.php');

// Call the stored procedure and fetch data
$query = "CALL GET_DELEGATE_MEMBER_COUNTRIES()";
$result = $connection->query($query);

$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Use the country_name for both value and label
        $data[] = array(
            "value" => $row["members"],
            "label" => $row["members"]
        );
    }
}

// Close the connection
$connection->close();

// Set response header to JSON
header("Content-Type: application/json");

// Return the data as JSON
echo json_encode($data);
?>