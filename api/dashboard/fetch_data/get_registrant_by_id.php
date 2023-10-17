<?php
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

$post = json_decode(file_get_contents('php://input'), true);
if (empty($post)) {
    die(json_encode(['error' => 'No data provided.']));
}

$id = $post['id'];

// Use the $connection variable from dbconnection.php
$query = 'CALL GET_REGISTRANT_BY_ID(?);';
$stmt = $connection->prepare($query);
$stmt->bind_param('i', $id);
if (!$stmt->execute()) {
    $stmt->close();
    $connection->close();
    die(json_encode(['message' => 'An error occurred while trying to execute the query.']));
}

if (!$result = $stmt->get_result()) {
    $stmt->close();
    $mysqli->close();
    die(json_encode(['message' => 'An error occurred while trying to retrieve results.']));
}

$data = $result->fetch_assoc();

$results = [
    "draw" => 1, 
    "recordsTotal" => count($data), 
    "recordsFiltered" => count($data), 
    "data" => $data
];

echo json_encode($results);

$stmt->close();
$connection->close();
?>