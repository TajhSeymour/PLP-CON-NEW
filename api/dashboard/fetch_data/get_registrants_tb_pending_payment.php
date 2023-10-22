<?php
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

$query = 'CALL GET_ALL_PENDING_PAYMENT()';
$stmt = mysqli_query($connection, $query);

$data = [];
while ($row = mysqli_fetch_assoc($stmt)) {
    $data[] = $row;
}

$results = ["draw" => 1, "recordsTotal" => count($data), "recordsFiltered" => count($data), "data" => $data];

echo json_encode($results);

mysqli_close($connection);
?>