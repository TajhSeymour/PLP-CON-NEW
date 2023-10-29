<?php
require_once(dirname(__DIR__, 3) . '/database/dbconnection.php');

// Process incoming parameters
$start = $_GET['start'] ?? 0;
$length = $_GET['length'] ?? 10;
$order = $_GET['order'][0] ?? [];
$draw = $_GET['draw'] ?? 1;
$search = $_GET['search']['value'] ?? '';

// Define the main SQL query
$sql = "
SELECT 
    mpi.plp_id,
    mpi.last_name,
    mpi.middle_name,
    mpi.first_name,
    mpi.gender,
    mpi.dob,
    mpi.nib_number,
    mpi.constituency,
    mpi.affiliated_branch,
    mpi.membership_type,
    mpi.priority,
    mpi.date,
    maci.email_address,
    maci.mobile_number,
    maci.telephone_number,
    maci.street_address,
    maci.house_number,
    maci.emergency_contact_name,
    maci.emergency_contact_relationship,
    maci.emergency_contact_telephone_number
FROM 
    members_profile_information mpi
JOIN
    members_address_contact_information maci
ON
    mpi.plp_id = maci.plp_id
JOIN 
    system_queues sq
ON 
    mpi.plp_id = sq.id
WHERE  
    sq.duplicate = 'O'
";

// Get the total number of records
$totalRecords = $connection->query("SELECT COUNT(*) FROM ($sql) as subquery")->fetch_row()[0];

// Apply ordering if specified
if (!empty($order)) {
    $columnIndex = intval($order['column']);
    $orderBy = $columns[$columnIndex];
    $orderDir = $order['dir'];
    $sql .= " ORDER BY $orderBy $orderDir";
}

// Apply pagination
$sql .= " LIMIT $start, $length";

// Execute the SQL query
$result = $connection->query($sql);

// Prepare the data
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Build the JSON response
$response = array(
    "draw" => intval($draw),
    "recordsTotal" => intval($totalRecords),
    "recordsFiltered" => count($data),
    "data" => $data
);

// Return the JSON response to the client
header('Content-Type: application/json');
echo json_encode($response);
?>