<?php
// Include the database connection setup
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

$query = 'CALL GET_ALL_REGISTRANTS_APPROVED_OAS_SECURITY()';
$stmt = $connection->query($query);

$data = [];
while ($row = $stmt->fetch_assoc()) {
    $data[] = $row;
}

$results = [
    "draw" => 1,
    "recordsTotal" => count($data),
    "recordsFiltered" => count($data),
    "data" => $data
];

echo json_encode($results);

$connection->close();
?>