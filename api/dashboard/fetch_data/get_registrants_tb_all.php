//<?php
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

$query = 'CALL GET_ALL_DELEGATE_REGISTRANTS()';
$stmt = mysqli_query($connection, $query);

$data = [];
while ($row = mysqli_fetch_assoc($stmt)) {
    $data[] = $row;
}

$results = ["draw" => 1, "recordsTotal" => count($data), "recordsFiltered" => count($data), "data" => $data];

echo json_encode($results);

mysqli_close($connection);
?>


<?php
// Include database connection
include('db_connection.php');

// DataTables request parameters
$draw = $_POST['draw'];
$start = $_POST['start'];
$length = $_POST['length'];
$search = $_POST['search']['value'];
$order_column = $_POST['order'][0]['column'];
$order_dir = $_POST['order'][0]['dir'];

// Call the stored procedure
$stmt = mysqli_prepare($connection, "CALL GET_ALL_DELEGATE_REGISTRANTS(?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "iissi", $start, $length, $search, $order_column, $order_dir);
mysqli_stmt_execute($stmt);

// Fetch the result set
$result = mysqli_stmt_get_result($stmt);

// Fetch data into an array
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Close the statement
mysqli_stmt_close($stmt);

// Construct the response in the DataTables format
$response = [
    "draw" => intval($draw),
    "data" => $data
];

// Return the response as JSON
echo json_encode($response);
?>